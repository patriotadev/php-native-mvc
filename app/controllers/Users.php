<?php

require_once('../models/UsersModel.php');

class Users
{
    public function index()
    {
        $db = new Database();
        $data = $db->query("SELECT * FROM data");
        return $data;
    }

    public function detail($id)
    {
        $db = new Database();
        $data = $db->query("SELECT * FROM data WHERE id=$id");
        return $data;
    }

    public function tambah($request)
    {
        $nama = $request['nama'];
        $alamat = htmlspecialchars($request['alamat']);
        $hp = htmlspecialchars($request['hp']);
        $keluhan = htmlspecialchars($request['keluhan']);

        $tbl = 'data';
        $values = "'$nama', '$alamat', '$hp', '$keluhan'";
        $db = new Database();
        global $connect;
        $data = $db->insert($tbl, $values);
        mysqli_query($connect, $data);
        mysqli_affected_rows($connect);

        //print_r($values);
        header('Location: /app/views/daftar_antrian.php');
    }

    public function edit($request)
    {
        $id = $request['id'];
        $nama = $request['nama'];
        $alamat = htmlspecialchars($request['alamat']);
        $hp = htmlspecialchars($request['hp']);
        $keluhan = htmlspecialchars($request['keluhan']);
        $db = new Database();
        global $connect;
        $data = $db->update('data', $nama, $alamat, $hp, $keluhan, $id);

        mysqli_query($connect, $data);
        mysqli_affected_rows($connect);
        //return $data;
        header('Location: /app/views/daftar_antrian.php');
    }

    public function hapus($id)
    {
        $db = new Database();
        global $connect;
        $data = $db->delete('data', $id);

        mysqli_query($connect, $data);
        mysqli_affected_rows($connect);

        //return $data;
    }
}
