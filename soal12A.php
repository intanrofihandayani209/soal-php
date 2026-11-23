<!DOCTYPE html>
<html>
<head>
    <title>Form Registrasi</title>
</head>
<body>
    <h3>Form REGISTRASI</h3>
    <form action="" method="POST">
        <table>
            <tr>
                <td>Nama</td>
                <td>: <input type="text" name="nama" required></td>
            </tr>
            <tr>
                <td>Username / Email</td>
                <td>: <input type="text" name="username" required></td>
            </tr>
            <tr>
                <td>Password</td>
                <td>: <input type="password" name="password" required></td>
            </tr>
            <tr>
                <td>Konfirmasi Password</td>
                <td>: <input type="password" name="konfirmasi" required></td>
            </tr>
            <tr>
                <td colspan="2">
                    <button type="submit" name="daftar">DAFTAR</button>
                    <button type="reset">BATAL</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>