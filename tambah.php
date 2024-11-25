<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
        body {
            background-color: orange; 
        }
        .form-container {
            max-width: 700px;
            margin: 30px auto; 
            padding: 20px; 
            background-color: white; 
            border-radius: 10px; 
            
        }
    </style>
</head>
<body>

    <div class="container form-container">
        <h3 class="text-center">Tambah Data Pengguna</h3>
        
        <form method="post" action="inputuser.php">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Lengkap</label>
                <input class="form-control" id="nama" type="text" name="nama" required>
            </div>
            <div class="mb-3">
                <label for="nrp" class="form-label">NRP</label>
                <input class="form-control" id="nrp" type="text" name="nrp" required>
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input class="form-control" id="alamat" type="text" name="alamat" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input class="form-control" id="email" type="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input class="form-control" id="password" type="password" name="password" required>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-outline-primary">Simpan</button>
            </div>
        </form>

        <div class="text-center mt-3">
            <form method="POST" action="tampil.php">
                <button type="submit" class="btn btn-outline-secondary">Tampilkan Data</button>
            </form>
        </div>
    </div>

</body>
</html>
