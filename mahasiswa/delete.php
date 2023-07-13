<?php
$idnya = $_GET['id'];
$mahasiswa = new Mahasiswa;
$hapus = $mahasiswa->delete($idnya);

if ($hapus) {
    $_SESSION['sukses'] = "Data berhasil dihapus";
} else {
    $_SESSION['gagal'] = "Data gagal dihapus";
}
header('Location: index.php?page=read');

?>

