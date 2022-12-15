<?php

$conn = mysqli_connect('localhost', 'root', '', 'sekolah');

$query = "INSERT INTO murid (nama, umur, alamat)
      VALUES ('Iyey', 54, 'Garut');";

$query .= "INSERT INTO murid (nama, umur, alamat)
      VALUES ('Encum', 45, 'Garut')";

$result = mysqli_multi_query($conn, $query);

if ($result) {
  echo "<script>
        alert('Data berhasil ditambahkan!');
        document.location.href('index.php');
        </script>";
}

mysqli_close($conn);
