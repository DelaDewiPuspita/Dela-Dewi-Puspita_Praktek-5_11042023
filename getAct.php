<?php
if (isset($_GET['nama']) && isset($_GET['email'])) {
    echo "<center>Nama : ".$_GET['nama']."</center><br>";
    echo "<center>Email : ".$_GET['email']."</center><br>";
} else {
    echo "Form belum diisi.";
}