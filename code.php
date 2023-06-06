<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();
$con = mysqli_connect("localhost","root","","transporte");
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

if(isset($_POST['import_file_btn']))
{
    $allowed_ext = ['xls', 'csv', 'xlsx'];
    
    $fileName = $_FILES['import_file']['name'];
    $checking = explode(".", $fileName);
    $file_ext = end($checking);

    if(in_array($file_ext, $allowed_ext))
    {
        $targetpath = $_FILES['import_file']['tmp_name'];
        $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($targetpath);
        $data = $spreadsheet->getActiveSheet()->toArray();

        foreach($data as $row)
        {
            $id = $row[0];
            $nombres = $row[1];
            $apellidos = $row[2];
            $edad = $row[3];

            $checkStudent = "SELECT id FROM nombres WHERE id = '$id'";
            $checkStudent_result = mysqli_query($con, $checkStudent);

            if(mysqli_num_rows($checkStudent_result) > 0)
            {
                $up_query = "UPDATE nombres SET id = '$id', nombres = '$nombres', apellidos = '$apellidos',edad = '$edad' WHERE id = '$id'";
                $up_result = mysqli_query($con, $up_query);
                $msg = 1;
            }
            else
            {
                $in_query = "INSERT INTO nombres (id,nombres,apellidos,edad) VALUES ('$id','$nombres','$apellidos','$edad')";
                $in_result = mysqli_query($con, $in_query);
                $msg = 1;

            }
        }

        if(isset($msg))
        {
            $_SESSION['status'] = "Archivo importado correctamente";
            header("Location: index.php");
        }
        else
        {
            $_SESSION['status'] = "Archivo no importado";
            header("Location: index.php");
        }
    }
    else{
        $_SESSION['status'] = "Archivo invalido";
        header("Location: index.php");
        exit(0);
    }
}
?>
