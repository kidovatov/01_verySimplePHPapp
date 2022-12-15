<?php

$conn   = mysqli_connect('localhost', 'root', '', 'sekolah');
$query  = "UPDATE murid SET nama = 'Uchi', umur = 9 WHERE id = 5";
$result = mysqli_query($conn, $query);

if ($result) {
  echo "<script>
  alert('Data Berhasil diubah!'); 
  </script>";
}
