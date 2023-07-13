<?php

$mahasiswa = new Mahasiswa;
$satuMahasiswa = $mahasiswa->getOne($_GET['id']); 

if (isset($_POST['btnUbah'])) {
    $idnya = $_GET['id'];
    $mahasiswa->nama = $_POST['nama'];
    $mahasiswa->jurusan = $_POST['jurusan'];
    $mahasiswa->nim = $_POST['nim'];
    $mahasiswa->semester = $_POST['semester'];

    $updateMahasiswa = $mahasiswa->update($idnya, $mahasiswa);

    if ($updateMahasiswa) {
        $_SESSION['sukses'] = "Data berhasil disimpan";
    } else {
        $_SESSION['gagal'] = "Data gagal disimpan";
    }
    header('Location: index.php?page=read');
}

?>

<div class="row">
    <form class="row g-3" method="POST" action="">
        <div class="col-md-6">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="<?= $satuMahasiswa->nama ?>">
        </div>
        <div class="col-md-6">
            <label for="jurusan" class="form-label">Jurusan</label>
            <input type="text" class="form-control" id="jurusan" name="jurusan" value="<?= $satuMahasiswa->jurusan ?> ">
        </div>
        <div class="col-md-6">
            <label for="nim" class="form-label">Nim</label>
            <input type="text" class="form-control" id="nim" name="nim" value="<?= $satuMahasiswa->nim ?>">
        </div>
        <div class="col-md-6">
            <label for="semester" class="form-label">Semester</label>
            <input type="text" class="form-control" id="semester" name="semester" value="<?= $satuMahasiswa->semester ?>">
        </div>
        <div class="col-12">
            <a href="index.php" class="btn btn-warning">Kembali</a>
            <button type="submit" class="btn btn-primary" name="btnUbah">Simpan</button>
        </div>
    </form>
</div>