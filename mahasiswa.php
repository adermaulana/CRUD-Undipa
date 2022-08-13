<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style4.css">
    <title>Biodata Mahasiswa</title>
    
</head>

<body>
    <header>
        <h2>Tambah Data</h2>
    </header>

    <form class="tambahdata" action="tambah.php" method="POST">

        <fieldset>

        <p>
            <label for="nama">Nama: </label><br>
            <input class="nama" type="text" name="nama" required />
        </p>
        <p>
            <label for="alamat">Alamat: </label><br>
            <textarea class="alamat" name="alamat"></textarea>
        </p>
        <p>
            <label class="jeniskelamin" for="jenis_kelamin">Jenis Kelamin: </label><br>
            <label><input required type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki</label>
            <label><input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan</label>
        </p>
        <p>
            <label class="agama" for="agama">Agama: </label>
            <select name="agama">
                <option>Islam</option>
                <option>Kristen</option>
                <option>Hindu</option>
                <option>Budha</option>
            </select>
        </p>
        <p>
            <label for="Umur">Umur: </label>
            <input class="umur" type="text" name="Umur" />
        </p>
        <p>
            <input class="btn" type="submit" value="submit" name="submit" />
        </p>

        </fieldset>

    </form>

    </body>
</html>