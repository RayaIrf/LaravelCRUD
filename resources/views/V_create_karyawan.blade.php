<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Karyawan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <center><h2>Tambah Karyawan</h2></center>
    <div class="content">
        <div class="row justify-content-center">
            <div class="col-xl-10">
                <form class="js-validation-material" action="{{ route('karyawan.add') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-grup" style="padding: 10px 0">
                        <div class="form-material">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" id="nama" name="nama" class="form-control" required>
                        </div>
                    </div>

                    <div class="form-grup" style="padding: 10px 0">
                        <div class="form-material">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" id="email" name="email" class="form-control" required>
                        </div>
                    </div>

                    <div class="form-grup" style="padding: 10px 0">
                        <div class="form-material">
                            <label for="telp" class="form-label">Nomor Telepon</label>
                            <input type="number" id="telp" name="telp" class="form-control" required>
                        </div>
                    </div>

                    <div class="form-grup" style="padding: 10px 0">
                        <div class="form-material">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" id="alamat" name="alamat" class="form-control" required>
                        </div>
                    </div>

                    <div class="form-grup" style="padding: 10px 0">
                        <div class="form-material">
                            <label for="gender" class="form-label">Jenis Kelamain</label>
                            <select class="form-select" id="gender" name="gender" required>
                                <option value="">-- Pilih --</option>
                                <option value="Pria">Laki-Laki</option>
                                <option value="Wanita">Perempuan</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-grup" style="padding: 10px 0">
                        <div class="form-material">
                            <label for="tempat" class="form-label">Tempat Lahir</label>
                            <input type="text" id="tempat" name="tempat" class="form-control" required>
                        </div>
                    </div>

                    <div class="form-grup" style="padding: 10px 0">
                        <div class="form-material">
                            <label for="tanggal" class="form-label">Tanggal Lahir</label>
                            <input type="date" id="tanggal" name="tanggal" class="form-control" required>
                        </div>
                    </div>

                    <center class="m-20">
                        <button type="submit" id="btn-send" class="btn btn-primary" style="border-radius: 0.5rem">Simpan</button>
                        <a href="{{ route('karyawan') }}" id="btn-back" class="btn btn-danger" style="border-radius: 0.5rem">Kembali</a>
                    </center>

                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script type="text/javascript"></script>
</body>
</html>