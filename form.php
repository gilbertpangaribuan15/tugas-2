<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>FORM TAMBAHAN MAHASISWA </h2>
    <form action="simpan.php" method="POST">
        NIM : <br>
        <input type="text" name="txtnim"><br>
        NAMA: <br>
        <input type="text" name="txtnama"><br>
        JENUS KELAMIN <br>
        <select name="txtjenkel">
            <option value="laki-laki">Laki-Laki</option>
            <option value="perempuan">Perempuan</option>
        </select><br>
        TEMAPT TANGGAL LAHIR : <br>
        <input type="text" name="txtlahir"><br>
        NOMOR HP : <br>
        <input type="text" name="txthp"><br>
        <button type="submit">simpan</button>
</form>
</body>
</html>