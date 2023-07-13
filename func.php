<?php
class DB {
    public $server = 'localhost:3366';
    public $username = 'root';
    public $password = '';
    public $dbname = 'kelas';
    public $koneksi;

    public function __construct()
    {
        $this->koneksi = mysqli_connect($this->server, $this->username, $this->password, $this->dbname);
    }
}

class Mahasiswa extends DB {
    
    public $nama;
    public $jurusan;
    public $nim;
    public $semester;

    public function getAll()
    {
        $query = "SELECT * FROM mahasiswa";
        $exec = mysqli_query($this->koneksi, $query);
        while ($res = mysqli_fetch_object($exec)) {
            $hasil[] = $res;
        }
        return $hasil;
    }
    
    public function getOne($id)
    {
        $query = "SELECT * FROM mahasiswa WHERE id = $id";
        $exec = mysqli_query($this->koneksi, $query);
        $hasil = mysqli_fetch_object($exec);
        return $hasil;
    }

    public function createOne($nama, $jurusan, $nim, $semester)
    {
        $query = "INSERT INTO mahasiswa VALUES ('','$nama','$jurusan','$nim', $semester)";
        $exec = mysqli_query($this->koneksi, $query);
        if ($exec) {
            return true;
        }else{
            return false;
        }
    }

    public function delete($id)
    {
        $query = "DELETE FROM mahasiswa WHERE id=$id";
        $exec = mysqli_query($this->koneksi, $query);
        if ($exec) {
            return true;
        }else{
            return false;
        }
    }

    public function update($id, $newData)
    {
        $nama = $newData->nama;
        $jurusan = $newData->jurusan;
        $nim = $newData->nim;
        $semester = $newData->semester;
        $query = "UPDATE mahasiswa SET nama='$nama', jurusan='$jurusan', nim='$nim', semester=$semester WHERE id=$id";
        $exec = mysqli_query($this->koneksi, $query);
        if ($exec) {
            return true;
        }else{
            return false;
        }
    }
}

class UKM extends DB {
    public $nama;
    public $jenis;

    public function getAll()
    {
        $query = "SELECT * FROM ukm";
        $exec = mysqli_query($this->koneksi, $query);
        $hasil = array();
        while ($res = mysqli_fetch_object($exec)) {
            $hasil[] = $res;
        }
        return $hasil;
    }

    public function createOne($nama, $jenis)
    {
        $query = "INSERT INTO ukm VALUES ('','$nama','$jenis')";
        $exec = mysqli_query($this->koneksi, $query);
        if ($exec) {
            return true;
        } else {
            return false;
        }
    }

    public function getOne($id)
    {
        $query = "SELECT * FROM ukm WHERE id = $id";
        $exec = mysqli_query($this->koneksi, $query);
        $hasil = mysqli_fetch_object($exec);
        return $hasil;
    }

    public function update($id, $newData)
    {
        $nama = $newData->nama;
        $jenis = $newData->jenis;
        $query = "UPDATE ukm SET nama='$nama', jenis_ukm='$jenis' WHERE id=$id";
        $exec = mysqli_query($this->koneksi, $query);
        
        if ($exec) {
            return true;
        } else {
            return false;
        }
    }

    public function delete($id)
    {
        $query = "DELETE FROM ukm WHERE id=$id";
        $exec = mysqli_query($this->koneksi, $query);
        if ($exec) {
            return true;
        } else {
            return false;
        }
    }
}

