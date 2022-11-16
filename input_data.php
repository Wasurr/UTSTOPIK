<!doctype HTML>
<html>
<head>
    <title>INPUT DATA ANGGOTA</title>

<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1><center><b>INPUT DATA ANGGOTA</b></center></h1>
                <form action="proses_input.php" method="POST">
                    <div class="form-group">
                        <label for="kode">KODE</label>
                        <input type="number" name="kode" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="nama">NAMA</label>
                        <input type="text" name="nama" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="jenis_kelamin">JENIS KELAMIN</label>
                        <select name="jenis_kelamin" class="form-control">
                            <option value="LAKI - LAKI">LAKI - LAKI</option>
                            <option value="PEREMPUAN">PEREMPUAN</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="alamat">ALAMAT</label>
                        <textarea name="alamat" class="form-control"></textarea>
                    </div>

                     <div class="form-group">
                        <label for="email">EMAIL</label>
                        <input type="text" name="email" class="form-control">
                    </div>
                     <div class="form-group">
                        <label for="hobi">HOBI</label>
                        <input type="text" name="hobi" class="form-control">
                    </div>

                     <div class="form-group">
                        <label for="hp">HP</label>
                        <input type="text" name="hp" class="form-control">
                    </div>

                    <input type="submit" name="kirim" value="SIMPAN" class="btn btn-info">
                    <input type="reset" name="kosongkan" value="Kosongkan" class="btn btn-danger">
                </form>
            </div>
        </div>
    </div>

<script src="bootstrap/js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>