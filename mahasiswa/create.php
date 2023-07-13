<?php
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];
    $nim = $_POST['nim'];
    $semester = $_POST['semester'];

    $mahasiswa = new Mahasiswa;
    $insertMahasiswa = $mahasiswa->createOne($nama, $jurusan, $nim, $semester);

    if ($insertMahasiswa) {
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
            <input type="text" class="form-control" id="nama" name="nama">
        </div>
        <div class="col-md-6">
            <label for="jurusan" class="form-label">Jurusan</label>
            <input type="text" class="form-control" id="jurusan" name="jurusan">
        </div>
        <div class="col-md-6">
            <label for="nim" class="form-label">Nim</label>
            <input type="text" class="form-control" id="nim" name="nim">
        </div>
        <div class="col-md-6">
            <label for="semester" class="form-label">Semester</label>
            <input type="text" class="form-control" id="semester" name="semester">
        </div>
        <div class="col-12">
            <a href="index.php" class="btn btn-warning">Kembali</a>
            <button type="submit" class="btn btn-primary" name="submit">Simpan</button>
        </div>
    </form>
</div>

