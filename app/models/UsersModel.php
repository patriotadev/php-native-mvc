<?php

require_once('../config/Database.php');

class Database
{
    function query($query)
    {
        global $connect;
        $result = mysqli_query($connect, $query);
        $rows = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        return $rows;
    }

    function insert($tbl, $values)
    {
        $result = "INSERT INTO " . $tbl . " VALUES('', " . $values . ")";
        return $result;
    }

    function update($tbl, $nama, $alamat, $hp, $keluhan, $id)
    {

        $result = "UPDATE $tbl SET nama = '$nama', alamat = '$alamat', hp = '$hp', keluhan = '$keluhan' WHERE id = $id";
        return $result;
    }

    function delete($tbl, $id)
    {
        $result = "DELETE FROM $tbl WHERE id = $id";
        //   $result = "DELETE FROM " . $tbl . "WHERE id =" . $id;
        return $result;
    }
}
