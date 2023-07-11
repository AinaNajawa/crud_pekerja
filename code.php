<?php
session_start();
require 'dbcon.php';

if(isset($_POST['delete']))
{
    $crud_pekerja = mysqli_real_escape_string($con, $_POST['delete']);

    $query = "DELETE FROM pekerja WHERE id='$pekerja' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Pekerja Deleted Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Pekerja Tidak Berjaya";
        header("Location: index.php");
        exit(0);
    }
}

if(isset($_POST['update']))
{
    $crud_pekerja = mysqli_real_escape_string($con, $_POST['pekerja']);

    $nama = mysqli_real_escape_string($con, $_POST['nama']);
    $hp = mysqli_real_escape_string($con, $_POST['hp']);
    $jantina = mysqli_real_escape_string($con, $_POST['jantina']);
    $pilih = mysqli_real_escape_string($con, $_POST['pilih']);

    $query = "UPDATE pekerja SET name='$name', hp='$hp', jantina='$jantina', pilih='$pilih' WHERE id='$pekerja' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Pekerja Updated Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Pekerja Not Updated";
        header("Location: index.php");
        exit(0);
    }

}


if(isset($_POST['save_student']))
{
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $hp = mysqli_real_escape_string($con, $_POST['hp']);
    $jantina = mysqli_real_escape_string($con, $_POST['jantina']);
    $pilih = mysqli_real_escape_string($con, $_POST['pilih']);

    $query = "INSERT INTO pekerja (name,email,phone,course) VALUES ('$name','$hp','$jantina','$pilih')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Pekerja Created Successfully";
        header("Location: code.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Pekerja Not Created";
        header("Location: add.php");
        exit(0);
    }
}

?>