<h2>Members</h2>

<a href="<?php echo URL; ?>/members/input" class="btn">Input Data Member</a>

<table>
      <tr>
            <th>NO</th>
            <th>EMAIL</th>
            <th>NAMA</th>
            <th>ALAMAT</th>
            <th>NO TELEPON</th>
            <th>EDIT</th>
            <th>DELETE</th>
      </tr>

      <?php $no = 1;
      foreach ($data['rows'] as $row) { ?>
            <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $row['member_email']; ?></td>
                  <td><?php echo $row['member_nama']; ?></td>
                  <td><?php echo $row['member_alamat']; ?></td>
                  <td><?php echo $row['member_noTelepon']; ?></td>
                  <td><a href="<?php echo URL; ?>/members/edit/<?php echo $row['member_id']; ?>" class="btn">Edit</a></td>
                  <td><a href="<?php echo URL; ?>/members/delete/<?php echo $row['member_id']; ?>" class="btn" onclick="return confirm('Are you sure?')">Delete</a></td>
            </tr>
      <?php $no++;
      } ?>

</table>