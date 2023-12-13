<?php

namespace App\Models;

use App\Core\Model;

class Member extends Model
{

      public function show()
      {
            $query = "SELECT * FROM tb_members";
            $stmt = $this->db->prepare($query);
            $stmt->execute();

            return $this->selects($stmt);
      }

      public function save()
      {
            $email = $_POST['email'];
            $nama = $_POST['nama'];
            $alamat = $_POST['alamat'];
            $noTelepon = $_POST['noTelepon'];

            $sql = "INSERT INTO tb_members
            SET member_email=:member_email, member_nama=:member_nama, member_alamat=:member_alamat, member_noTelepon=:member_noTelepon";
            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(":member_email", $email);
            $stmt->bindParam(":member_nama", $nama);
            $stmt->bindParam(":member_alamat", $alamat);
            $stmt->bindParam(":member_noTelepon", $noTelepon);

            $stmt->execute();
      }

      public function edit($id)
      {
            $query = "SELECT * FROM tb_members WHERE member_id=:member_id";
            $stmt = $this->db->prepare($query);

            $stmt->bindParam(":member_id", $id);
            $stmt->execute();

            return $this->select($stmt);
      }

      public function update()
{
    $email = $_POST['email'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $noTelepon = $_POST['noTelepon'];
    $id = $_POST['id'];

    $sql = "UPDATE tb_members
            SET member_nama=:member_nama, member_alamat=:member_alamat, member_noTelepon=:member_noTelepon
            WHERE member_id=:member_id";

    $stmt = $this->db->prepare($sql);

    $stmt->bindParam(":member_nama", $nama);
    $stmt->bindParam(":member_alamat", $alamat);
    $stmt->bindParam(":member_noTelepon", $noTelepon);
    $stmt->bindParam(":member_id", $id);

    $stmt->execute();
}

/*
      public function update()
      {
            $email = $_POST['email'];
            $nama = $_POST['nama'];
            $alamat = $_POST['alamat'];
            $noTelepon = $_POST['noTelepon'];
            $id = $_POST['id'];

            if (!empty($email)) {
                  $sql = "UPDATE tb_members
                  SET member_email=:member_email, member_nama=:member_nama, member_alamat=:member_alamat, member_noTelepon=:member_noTelepon
                  WHERE member_id=:member_id";
            } else {
                  $sql = "UPDATE tb_members
                  SET member_nama=:member_nama, member_alamat=:member_alamat,
                  WHERE member_id=:member_id";
            }

            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(":member_email", $email);
            $stmt->bindParam(":member_nama", $nama);
            $stmt->bindParam(":member_alamat", $alamat);
            $stmt->bindParam(":member_noTelepon", $noTelepon);
            $stmt->bindParam(":member_id", $id);

            $stmt->execute();
      }
*/
      public function delete($id)
      {
            $sql = "DELETE FROM tb_members WHERE member_id=:member_id";
            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(":member_id", $id);
            $stmt->execute();
      }
}
