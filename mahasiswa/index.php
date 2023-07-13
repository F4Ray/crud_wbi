<?php
    $mahasiswa = new Mahasiswa;
    $allMahasiswa = $mahasiswa->getall();
?>

<div class="row mt-3">
    <div class="col-md-2">
        <a name="" id="" class="btn btn-block btn-primary" href="index.php?page=create" role="button">Tambah Data</a>
    </div>
</div>
<div class="row mt-3">
    <div class="col-md-12">
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Jurusan</th>
                    <th>Semester</th>
                    <th colspan='2'>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($mahasiswa->getAll() as $mahasiswa) {
                ?>
                    <tr>
                        <td><?= $no ?></td>
                        <td><?= $mahasiswa->nama ?></td>
                        <td><?= $mahasiswa->nim ?></td>
                        <td><?= $mahasiswa->jurusan ?></td>
                        <td><?= $mahasiswa->semester ?></td>
                        <td>
                            <div class="d-grid gap-2">
                                <a name="" id="" class="btn btn-info" href="index.php?page=update&id=<?= $mahasiswa->id ?>" role="button">Ubah</a>
                            </div>
                        </td>
                        <td>
                            <div class="d-grid gap-2">
                                <a name="" id="" class="btn btn-block btn-danger" href="index.php?page=delete&id=<?= $mahasiswa->id ?>" role="button">Hapus</a>
                            </div>
                        </td>
                    </tr>
                <?php
                    $no++;
                }
                ?>
            </tbody>
        </table>
    </div>
</div>