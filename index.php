<?php
$conn = mysqli_connect('localhost', 'root', '', 'sekolah');

if (!$conn) {
  die("Database tidak ditemukan!");
}

$query  = "SELECT * FROM murid ORDER BY id DESC LIMIT 3";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    echo $row['nama'] . " - " . $row['alamat'] . '<br>';
  }
}

mysqli_close($conn);
