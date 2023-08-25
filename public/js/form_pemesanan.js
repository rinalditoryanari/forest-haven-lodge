price = [100000, 2000000, 3000000];

//cancel button
document.getElementById("cancel_btn").onclick = function (event) {
    url = document.getElementById("cancel_btn").getAttribute("url");
    window.location.href = url;
};

//durasi input
document.getElementById("durasi").onchange = function (event) {
    if (document.getElementById("durasi").value <= 0) {
        document.getElementById("durasi").value = 1;
    }
};

//nama tidak bisa angka
document.getElementById("nama").oninput = function (event) {
    input = document.getElementById("nama");
    nama = input.value;

    // Regular expression to match valid name characters (letters and spaces)
    const validNamePattern = /^[A-Za-z\s]*$/;

    if (!validNamePattern.test(nama)) {
        cleanedValue = nama.replace(/[^A-Za-z\s]/g, "");
        input.value = cleanedValue;

        alert("Please enter a valid name (only letters and spaces allowed).");
    }
};

//nomor_identitas input
document.getElementById("nomor_identitas").onchange = function (event) {
    if (document.getElementById("nomor_identitas").value <= 0) {
        document.getElementById("nomor_identitas").value = 1;
    }
};

//pemilihan tipe
document.getElementById("tipe_kamar").onchange = function () {
    var selectedValue = document.getElementById("tipe_kamar").value;
    // console.log("Selected Value: " + selectedValue);

    switch (selectedValue) {
        case "standar":
            document.getElementById("harga").value = price[0];
            break;
        case "deluxe":
            document.getElementById("harga").value = price[1];
            break;
        case "executive":
            document.getElementById("harga").value = price[2];
            break;
        default:
            console.log("Unknown option was selected.");
            break;
    }
};

//kalkulasi total
document.getElementById("calculate_btn").onclick = function (event) {
    harga = document.getElementById("harga").value;
    durasi = document.getElementById("durasi").value;
    breakfast = document.getElementById("breakfast");

    if (!harga) {
        alert("Isilah tipe kamar yang anda inginkan");
    } else if (!durasi) {
        alert("Isilah berapa lama anda menginap");
    } else {
        //perhitungan diskon
        diskon = 0;
        if (durasi > 3) {
            diskon = 10;
        }

        //perhitungan breakfast
        addition = 0;
        if (breakfast.checked) {
            addition = 80000 * durasi;
        }
        total = (harga * durasi * (100 - diskon)) / 100 + addition;

        document.getElementById("total").value = total;
    }
};

//untuk submit
document.getElementById("form-pemesanan").onsubmit = function (event) {
    event.preventDefault(); // Prevents the form from actually submitting and refreshing the page
    if (document.getElementById("total").value) {
        url = document.getElementById("form-pemesanan").getAttribute("url");
        var formdata = new FormData();
        formdata.append("nama", document.getElementById("nama").value);
        formdata.append(
            "kelamin",
            document.querySelector('input[name="kelamin"]:checked')
                ? document.querySelector('input[name="kelamin"]:checked').value
                : null
        );
        formdata.append(
            "no_Id",
            document.getElementById("nomor_identitas").value
        );
        formdata.append(
            "tipe_kamar",
            document.getElementById("tipe_kamar").value
        );
        formdata.append("harga", document.getElementById("harga").value);
        formdata.append(
            "tgl_pesan",
            document.getElementById("tgl-pesan").value
        );
        formdata.append("durasi", document.getElementById("durasi").value);
        formdata.append(
            "breakfast",
            document.getElementById("breakfast").checked
        );
        formdata.append("total", document.getElementById("total").value);

        var requestOptions = {
            method: "POST",
            body: formdata,
            redirect: "follow",
        };

        fetch(url, requestOptions)
            .then((response) => response.text())
            .then((result) => {
                result = JSON.parse(result);
                if (result.status) {
                    console.log(result.status);
                } else if (result.error) {
                    alert(result.error);
                } else {
                    console.log(result);
                    alert("Error!");
                }
            })
            .catch((error) => {
                alert(error);
            });
        return false; // Returning false prevents the form from submitting (without refreshing the page)
    } else {
        document.getElementById("calculate_btn").click();
        alert("Pastikan anda telah meihat total biaya");
    }
};
