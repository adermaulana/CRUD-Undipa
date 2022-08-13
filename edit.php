<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style4.css">
    <title>Biodata Mahasiswa</title>
    
</head>

<body>
<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from mahasiswa where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
   
   <form class="tambahdata" action="editproses.php" method="POST">

<fieldset>

<p>
    <label for="nama">Nama: </label><br>
    <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
    <input class="nama" type="text" name="nama" required value="<?php echo $d['nama']; ?> ">
</p>
<p>
    <label for="alamat">Alamat: </label><br>
    <input class="alamat" name="alamat" value="<?php echo $d['alamat']; ?>"></input>
</p>
<p>
    <label class="jeniskelamin" for="jenis_kelamin">Jenis Kelamin: </label><br>
             <?php $jk = $d['jenis_kelamin']; ?>
            <label><input type="radio" name="jenis_kelamin" value="laki-laki" <?php echo ($jk == 'laki-laki') ? "checked": "" ?>> Laki-laki</label>
            <label><input type="radio" name="jenis_kelamin" value="perempuan" <?php echo ($jk == 'perempuan') ? "checked": "" ?>> Perempuan</label>
</p>
<p>
    <label class="agama" for="agama">Agama: </label>
    <?php $agama = $d['agama']; ?>
    <select name="agama">
                <option <?php echo ($agama == 'Islam') ? "selected": "" ?>>Islam</option>
                <option <?php echo ($agama == 'Kristen') ? "selected": "" ?>>Kristen</option>
                <option <?php echo ($agama == 'Hindu') ? "selected": "" ?>>Hindu</option>
                <option <?php echo ($agama == 'Budha') ? "selected": "" ?>>Budha</option>
            </select>
    </select>
</p>
<p>
    <label for="Umur">Umur: </label>
    <input class="umur" type="text" name="Umur" value="<?php echo $d['Umur']; ?>">
</p>
<p>
    <input class="btn" type="submit" value="submit" name="submit" />
</p>

</fieldset>

</form>

		<?php 
	}
	?>

    </body>
</html>