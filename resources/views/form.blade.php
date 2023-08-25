<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Pesan &mdash; Forest Haven Lodge</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/css/bootstrap.min.css" integrity="sha512-Z/def5z5u2aR89OuzYcxmDJ0Bnd5V1cKqBEbvLOiUNWdg9PQeXVvXLI90SE4QOHGlfLqUnDNVAYyZi8UwUTmWQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        .main-content {
            padding-left: 20%;
            padding-right: 20%;
            padding-top: 5%;
            width: 100%;
            position: relative;
        }

        .border-blue {
            border-color: #73ACD9;

        }

        .form-group {
            margin-bottom: 10px;
        }
    </style>
</head>
</head>

<body>
    <div id="app">
        <div class="main-wrapper">
            <!-- Content -->
            <div class="main-content">
                <section class="col-9 mx-auto section border border-primary">
                    <div class="text-center section-header">
                        <p class="m-0 pt-2 pb-3 bg-primary text-white">Form Pemesanan</p>
                    </div>
                    <div class="section-body">
                        <div class="card">
                            <div class="card-body">
                                <form id="form-pemesanan" url="{{route('api_create')}}">
                                    <div class="d-flex align-items-center">
                                        <label class="text-end col-3">Nama Pemesan</label>
                                        <div class="col-7 my-1 ms-2">
                                            <input type="text" class="form-control" name="nama" id="nama" required>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <label class="text-end col-3" for="kelamin">Jenis Kelamin</label>
                                        <div class="col-7 my-1 ms-2">
                                            <input class="form-check-input mx-2" type="radio" id="laki" name="kelamin" value="laki" required>
                                            <label for="laki">Laki-laki</label>
                                            <input class="form-check-input mx-2" type="radio" id="perempuan" name="kelamin" value="perempuan" required>
                                            <label for="perempuan">Perempuan</label>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <label class="text-end col-3" for="nomor_identitas">Nomor Identitas</label>
                                        <div class="col-7 my-1 ms-2">
                                            <input type="number" class="form-control" name="nomor_identitas" id="nomor_identitas" required>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <label class="text-end col-3" for="tipe_kamar">Tipe Kamar</label>
                                        <div class="col-7 my-1 ms-2">
                                            <select name="tipe_kamar" id="tipe_kamar" class="form-control" required>
                                                <option value="" selected disabled>Pilih tipe kamar</option>
                                                <option value="standar">Standar</option>
                                                <option value="deluxe">Deluxe</option>
                                                <option value="executive">Executive</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <label class="text-end col-3" for="harga">Harga</label>
                                        <div class="col-7 my-1 ms-2">
                                            <input type="number" class="form-control currency" name="harga" id="harga" readonly>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <label class="text-end col-3">Tanggal Pesan</label>
                                        <div class="col-7 my-1 ms-2">
                                            <input type="date" class="form-control" id="tgl-pesan" required>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <label class="text-end col-3">Durasi</label>
                                        <div class="col-3 my-1 ms-2">
                                            <input type="number" class="form-control" name="durasi" id="durasi" required>
                                        </div>
                                        <label class="mx-2">Hari</label>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <label class="text-end col-3">Termasuk Breakfast</label>
                                        <div class="col-7 my-1 ms-2">
                                            <input type="checkbox" id="breakfast" name="breakfast" class="form-check-input"> Ya
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <label class="text-end col-3" for="total">Total Bayar</label>
                                        <div class="col-7 my-1 ms-2">
                                            <input type="number" class="form-control" name="total" id="total" readonly>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center mt-3">
                                        <input type="button" id="calculate_btn" class="col-3 mx-2 text-wrap btn btn-dark" value="Hitung Total Bayar">
                                        <input type="submit" id="save_btn" class="col-3 mx-2 text-wrap btn btn-primary" value="Simpan">
                                        <input type="button" id="cancel_btn" url="{{route('index')}}" class="col-3 mx-2 text-wrap btn btn-danger" value="Cancel">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/js/bootstrap.min.js" integrity="sha512-fHY2UiQlipUq0dEabSM4s+phmn+bcxSYzXP4vAXItBvBHU7zAM/mkhCZjtBEIJexhOMzZbgFlPLuErlJF2b+0g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="{{asset('js/form_pemesanan.js')}}"></script>


</html>