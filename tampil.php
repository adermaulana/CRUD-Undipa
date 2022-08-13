<?php include("koneksi.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <title>Penginputan Biodata Mahasiswa</title>
    
</head>

<body class="form">
    <header>
        <h2>Total Mahasiswa</h2>
    </header>

    <nav>
        <a class="tambah" href="mahasiswa.php">[+] Tambah Baru</a>
    </nav>
<br>
    <form  action="tampil.php" method="get">
	<label class="cari">Cari :</label>
	<input class="search" type="text" name="cari" placeholder="Masukkan Nama">
	<input class="button" type="submit" value="Cari">
</form>
 <br>
<?php 
if(isset($_GET['cari'])){
	$cari = $_GET['cari'];
	echo "<b>Hasil pencarian : ".$cari."</b> <br><br>";
}
?>

<table border="1">
    
	<tr>
		<th>No</th>
		<th>Nama</th>
        <th>Alamat</th>
        <th>Jenis Kelamin</th>
        <th>Agama</th>
        <th>Umur</th>
        <th>Aksi</th>
	</tr>
	<?php 
	if(isset($_GET['cari'])){
		$cari = $_GET['cari'];
		$data = mysqli_query($koneksi,"select * from mahasiswa where nama like '%".$cari."%'");				
	}else{
		$data = mysqli_query($koneksi,"select * from mahasiswa");		
	}
	$no = 1;
	while($d = mysqli_fetch_array($data)){
	
        echo "<tr>";

        echo "<td>".$no."</td>";
        echo "<td>".$d['nama']."</td>";
        echo "<td>".$d['alamat']."</td>";
        echo "<td>".$d['jenis_kelamin']."</td>";
        echo "<td>".$d['agama']."</td>";
        echo "<td>".$d['Umur']."</td>";

        echo "<td>";
        echo "<a href='edit.php?id=".$d['id']."'>Edit</a> | ";
        echo "<a href='hapus.php?id=".$d['id']."'>Hapus</a>";
        echo "</td>";

        echo "</tr>";
 } ?>
</table>

<p style="font-size: 30px;">Total : <?php echo mysqli_num_rows($data) ?> </p>

    </body>
</html>