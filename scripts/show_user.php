<?php
include "./scripts/con_db.php";
$ambil="SELECT * FROM biodata_user";
$hasil=mysql_query($ambil);
$total_kas=0;
  while ($tampil=mysql_fetch_array($hasil)){
  echo "<tr>
    <td width=14%>".$tampil['npm']."</td>
    <td width=20%>".$tampil['nama']."</td>
    <td width=20%>".$tampil['alamat']."</td>
    <td width=20%>".$tampil['no_telpon']."</td>
    <td>
      <center>
        <form action=./scripts/hapus_data.php>
        <input type=hidden name=npm value=".$tampil['npm']." ></input>
        <input type=submit name=btn-edit value=EDIT>
        <input type=submit name=btn-hapus value=HAPUS>
        </form>
      </center>
    </td>
  </tr>";
  }
 ?>
