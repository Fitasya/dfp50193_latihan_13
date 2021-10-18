<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Borang Permohonan (A)</h1>
    <form action="semak.php" method="POST">
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" required minlength="2"></td>
            </tr>
            <tr>
                <td>Umur</td>
                <td><input type="number" name="umur" min="18" max="45" required></td>
            </tr>
        </table>
        <button type="submit">Submit</button>
    </form>
    <hr>

    <h1>Borang Permohonan (B)</h1>
    <form action="semak.php" method="post" onsubmit="return semak();">
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" id="nama"></td>
            </tr>
            <tr>
                <td>Umur</td>
                <td><input type="number" name="umur" id="umur"></td>
            </tr>
        </table>
        <button type="submit">Submit</button>
    </form>
    <script>
        function semak() {
            let nama = document.getElementById('nama').value;
            let umur = document.getElementById('umur').value;

            if (nama == '') {
                alert('Sila isi nama anda.');
                return false;
            } else if (nama.length < 2) {
                alert('Sila isi nama penuh.');
                return false;
            } else if (umur < 18 || umur > 45) {
                alert('Umur anda tidak layak.');
                return false;
            }

        }
    </script>

    <hr>

    <h1>Borang Permohonan (C)</h1>
    <form action="semak.php" method="post">
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" id="nama"></td>
            </tr>
            <tr>
                <td>Umur</td>
                <td><input type="number" name="umur" id="umur"></td>
            </tr>
        </table>
        <button type="submit">Submit</button>
    </form>
</body>

</html>