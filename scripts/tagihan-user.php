<?php
include "./scripts/con_db.php";
$ambil="SELECT * FROM tabel_bayar";
$hasil=mysql_query($ambil);
$total_kas=0;
  while ($tampil=mysql_fetch_array($hasil)){
  echo "<tr>
    <td>".$tampil['npm']."</td>
    <td>".$tampil['nama']."</td>
    <td>Rp.".$tampil['bayar_kas'].",00</td>
    <td>Rp.".$tampil['tagihan_kas'].",00</td>
    <td>
      <center>
        <form action=./scripts/bayar-kas.php method=post>
        <input type=hidden name=no value=".$tampil['npm']." />
		<table class=conten-action></tr>
		<td><input type=text name=uang placeholder='Nominal Bayar' value='' /></td>
		<td><input type=submit name=bayar value='Bayar\nKas' /></td>
        </tr></table>
		</form>
      </center>
    </td>
  </tr>";
  }
 ?>
