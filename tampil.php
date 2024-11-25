<!DOCTYPE html>
<head>
	<title>tampil data</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<style>
body{
	background-color: whitesmoke;
}
table {
    padding: 20px;
}
th, td {
    text-align: center;
}
h2{
	text-align: center;
}
</style>
</head>
<body>
 <br>
	<h2>DATA MAHASISWA</h2>
    <form method="POST" action="tambah.php">
    <hr>
    <button type="input" class="btn btn-outline-warning">Tambah Data</button>
    <hr>
    </form>
	<table class="table table-light table-striped table-bordered">
		<tr>
			<th>No</th>
            <th>Nama lengkap</th>
			<th>NRP</th>
			<th>Alamat</th>
			<th>Email</th>
			<th>Password</th>
            
			<th>Aksi</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from user");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
                <td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['nrp']; ?></td>
				<td><?php echo $d['alamat']; ?></td>
				<td><?php echo $d['email']; ?></td>
				<td><?php echo $d['password']; ?></td>
                
				<td>
					<a role ="button" class="btn btn-success" href="ubah.php?id=<?php echo $d['login_id']; ?>">EDIT</a> </button>
					<a role ="button" class="btn btn-danger" href="hapus.php?id=<?php echo $d['login_id']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>