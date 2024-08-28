<?php
if (isset($_POST['create'])) {
    $date = $_POST['date'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $photopath = $_POST['photopath'];

    //upload image ../ vanesi baira admin folder baira
    $target_dir = "../uploads/";
    $filename = time() . $_FILES['photopath']['name'];
    $tmpname = $_FILES['photopath']['tmp_name'];
    //move uploaded file
    move_uploaded_file($tmpname, $target_dir . $filename);
    $photopath = $filename;
    //query
    $qry = "INSERT INTO blogs(blog_date,title,description,photopath)VALUES('$date','$title','$description','$photopath')";
    //execute query
    include '../dbconnection.php';
    $result = mysqli_query($conn, $qry);
    include '../closeconnection.php';
    if ($result) {
        header('Location:blogs.php');
    } else {
        echo 'Failed to create blog';
    }

}
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $date = $_POST['date'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $photopath = $_POST['photopath'];
    $oldpath = $_POST['oldpath'];

// upload image if new image is selected
if ($_FILES['photopath']['name'] != "") {
    $target_dir = "../uploads/";
    $filename = time() . $_FILES['photopath']['name'];
    $tmpname = $_FILES['photopath']['tmp_name'];

    //move uploaded file
    move_uploaded_file($tmpname, $target_dir . $filename);
    $photopath = $filename;

    //delete old image
    unlink($target_dir . $oldpath);
} else {
    $photopath = $oldpath;
}


//query
$qry = "UPDATE blogs SET blog_date='$date', title='$title',description='$description',photopath='$photopath' WHERE id=$id";
include '../dbconnection.php';
$result = mysqli_query($conn, $qry);
include '../closeconnection.php';
if ($result) {
    header('Location:blogs.php');
} else {
    echo 'FAiled to update blog';
}
}
if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];
    $qry = "DELETE FROM blogs WHERE ID=$id";
    include '../dbconnection.php';
    $result = mysqli_query($conn, $qry);
    include '../closeconnection.php';
    if ($result) {
        header('Location:blogs.php');
    } else {
        echo 'FAiled to delete blog';
    }

}