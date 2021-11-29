<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INSERT DATA</title>
</head>
<body>
    <h1>TAMBAH DATA SISWA</h1>
    <form action="add_proses.php" method="post">
        <table border="1">
            <tr>
                <td>NIK</td>
                <td>:</td>
                <td><input type="number" name="nik"></td>
            </tr>
            <tr>
                <td>NAMA</td>
                <td>:</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>GENDER</td>
                <td>:</td>
                <td><input type="text" name="gender"></td>
            </tr>
            <tr>
                <td>ALAMAT</td>
                <td>:</td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr>
                <td>UMUR</td>
                <td>:</td>
                <td><input type="number" min=0 max=999 name="umur"></td>
            </tr>
            <tr>
                <td>JURUSAN</td>
                <td>:</td>
                <td><input type="text" name="jurusan"></td>
            </tr>
            <tr>
                <td><input type="submit"><input type="reset"></td>
            </tr>
        </table>
    </form>
</body>
</html>