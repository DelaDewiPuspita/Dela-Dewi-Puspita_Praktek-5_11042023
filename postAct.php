<?php
if (isset($_POST['nama']) && isset($_POST['email'])) {
    echo "<center>Nama : ".$_POST['nama']."</center><br>";
    echo "<center>Email : ".$_POST['email']."</center><br>";
} else {
    echo "Form belum diisi.";
}