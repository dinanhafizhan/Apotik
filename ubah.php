<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
        body {
            background-color: orange; 
        }
        h2, h3 {
            text-align: center;
            color: black; 
        }
        form {
            max-width: 700px; 
            margin: 0 auto; 
            background-color: white; 
            padding: 20px; 
            border-radius: 10px; 
        }
        
    </style>
</head>
<body>

    <h2>Update Data</h2>
    
    <h3>DATA MAHASISWA</h3>

    <?php
    include 'koneksi.php';
    $id = $_GET['id'];
    $data = mysqli_query($koneksi, "SELECT * FROM user WHERE login_id='$id'");
    while ($d = mysqli_fetch_array($data)) {
    ?>
        <div class="form">
            <form method="post" action="update.php">
                <input type="hidden" name="login_id" value="<?php echo $d['login_id']; ?>">
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input class="form-control" id="nama" type="text" name="nama" value="<?php echo $d['nama']; ?>" required>
                </div>
                <div class="mb-3">
                    <label for="nrp" class="form-label">NRP</label>
                    <input class="form-control" id="nrp" type="text" name="nrp" value="<?php echo $d['nrp']; ?>" required>
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input class="form-control" id="alamat" type="text" name="alamat" value="<?php echo $d['alamat']; ?>" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input class="form-control" id="email" type="email" name="email" value="<?php echo $d['email']; ?>" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input class="form-control" id="password" type="password" name="password" value="<?php echo $d['password']; ?>" required>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
				<button role="button" class="btn btn-info" href="tampil.php">Kembali</button>
            </form>
        </div>
    <?php 
    }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
