<?php
session_start();
if (isset($_SESSION['sukses'])) {
    $sukses = $_SESSION['sukses'];
    session_unset();
}
if (isset($_SESSION['gagal'])) {
    $gagal = $_SESSION['gagal'];
    session_unset();
}
require('func.php'); 
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Mahasiswa
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="index.php?page=read">Daftar Mahasiswa </a></li>
                            <li><a class="dropdown-item" href="index.php?page=create">Tambah Mahasiswa</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <?php
            if (isset($sukses)) :
            ?>
                <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                    <?= $sukses ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php
            endif;
            ?>
            <?php
            if (isset($gagal)) :
            ?>
                <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                    <?= $gagal ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php
            endif;
            ?>
        </div>
        <?php
        $page = $_GET['page'];
        if (isset($page)) {
            switch ($page) {
                case 'read':
                    include('mahasiswa/index.php');
                    break;
                case 'create':
                    include('mahasiswa/create.php');
                    break;
                case 'update':
                    include('mahasiswa/update.php');
                    break;
                case 'delete':
                    include('mahasiswa/delete.php');
                    break;
                default:
                    break;
            }
        }
        ?>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>