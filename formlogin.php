<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
        body {
            background-image: url(it.png); 
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        form {
            width: 400px;
            background-color:white; 
            padding: 20px;
            border-radius: 10px;
        }
        
    </style>
</head>
<body>
    <form method="POST" action="ceklogin.php">
        <h1>Login</h1> 
        <div class="mb-3">
            <label>Nama</label>
            <input type="text" class="form-control form-control-sm" placeholder="Masukan nama anda" name="nama" required>
        </div>
        <div class="mb-3">
            <label>Password</label>
            <input type="password" class="form-control" placeholder="Masukan password anda" name="password" required>
        </div>
        <button type="submit" class="btn btn-outline-warning">Login</button>
        <button type="button" class="btn btn-danger">Batal</button>
    </form>
</body>
</html>
