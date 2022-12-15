<?php

$conn   = mysqli_connect('localhost', 'root', '', 'sekolah');
$query  = "DELETE FROM murid WHERE id BETWEEN 6 AND 8";
$result = mysqli_query($conn, $query);

if ($result) {
  echo "<script>
  alert('Data berhasil dihapus!');
  document.location.href('index.php');
  </script>";
}
