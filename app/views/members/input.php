<h2>Input Member</h2>

<form action="<?php echo URL; ?>/members/save" method="post">
    <table>
        <tr>
            <td>EMAIL</td>
            <td><input type="email" name="email" required></td>
        </tr>
        <tr>
            <td>NAMA</td>
            <td><input type="text" name="nama" required></td>
        </tr>
        <tr>
            <td>ALAMAT</td>
            <td><input type="text" name="alamat" required></td>
        </tr>
        <tr>
            <td>NO TELEPON</td>
            <td><input type="text" name="noTelepon" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_save" value="SAVE"></td>
        </tr>
    </table>
</form>