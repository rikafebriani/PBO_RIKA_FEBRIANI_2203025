<h2>Edit Members</h2>

<form action="<?php echo URL; ?>/members/update" method="post">
    <input type="hidden" name="id" value="<?php echo $data['row']['member_id']; ?>">
    <table>
        <tr>
            <td>EMAIL</td>
            <td><input type="email" name="email" value="<?php echo $data['row']['member_email']; ?>" required></td>
        </tr>
        <tr>
            <td>NAMA</td>
            <td><input type="text" name="nama" value="<?php echo $data['row']['member_nama']; ?>" required></td>
        </tr></td>
        </tr>
        <tr>
            <td>ALAMAT</td>
            <td><input type="text" name="alamat" value="<?php echo $data['row']['member_alamat']; ?>" required ></td>
        </tr>
        <tr>
            <td>NO TELEPON</td>
            <td><input type="text" name="noTelepon" value="<?php echo $data['row']['member_noTelepon']; ?>" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>