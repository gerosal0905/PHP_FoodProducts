<?php
session_start();
include('dbconfig.php');

$connection = mysqli_connect("localhost", "root", "", "nutrilife");

if(isset($_POST['save'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $image = $_FILES['image']['name'];
    $dated = date('Y-m-d', strtotime($_POST['dated']));
    $category = $_POST['category'];
    $price = $_POST['price'];
    $username = $_POST['username'];
    $description = 'Added a Product';

    if(file_exists("upload/".$_FILES["image"]["name"])){
        $store = $_FILES["image"]["name"];
        $_SESSION['status'] = "Image already exists.'.$store.'";
        header('Location: home.php');
    }else{
        $query = "INSERT INTO user (name,lastname,dated,image,category,price) VALUES ('$fname','$lname','$dated','$image','$category','$price')";
        $query_hist = "INSERT INTO history (username,description) VALUES ('$username','$description')";
        $query_run = mysqli_query($connection,$query);
        $query_run_hist = mysqli_query($connection,$query_hist);

        if($query_run){
            move_uploaded_file($_FILES["image"]["tmp_name"], "upload/".$_FILES["image"]["name"]);
            $_SESSION['success'] = "Product added successfully";
            header("Location: home.php");
        }else{
            $_SESSION['success'] = "Product not Inserted";
            header("Location: home.php");
        }
        if($query_run_hist){
            $_SESSION['success'] = "Product added successfully";
            header("Location: home.php");
        }
    }
}

if(isset($_POST['update'])){
    $id = $_POST['edited_id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $image = $_FILES["image"]['name'];
    $dated = $_POST['dated'];
    $category = $_POST['category'];
    $price = $_POST['price'];
    $username = $_POST['username'];
    $description = 'Updated a Product';

    $data_query = "SELECT * FROM user WHERE id='$id'";
    $data_query_run = mysqli_query($connection, $data_query);

    foreach($data_query_run as $fa_row){
        if($image == NULL){
            $image_data = $fa_row['image'];
        }else{
            if($img_path = "upload/".$fa_row['image']){
                unlink($img_path);
                $image_data = $image;
            }
        }
    }

    $query = "UPDATE user SET name='$fname', lastname='$lname', dated='$dated', image='$image_data', category='$category', price='$price' WHERE id='$id'";
    $query_run = mysqli_query($connection, $query);
    
    if($query_run){
        if($image == NULL){
            $_SESSION['success'] = "Updated with existing image";
            header('Location: home.php');
        }else{
            move_uploaded_file($_FILES["image"]["tmp_name"], "upload/".$_FILES["image"]["name"]);
        
            $_SESSION['success'] = "Product Updated";
            header('Location: home.php');
        }
    }else{
        $_SESSION['success'] = "Product not updated";
        header('Location: home.php');
    }

    $query_hist = "INSERT INTO history (username,description) VALUES ('$username','$description')";
    $query_run_hist = mysqli_query($connection,$query_hist);

    if($query_run_hist){
        if($image == NULL){
            $_SESSION['success'] = "Updated with existing image";
            header('Location: home.php');
        }else{
            $_SESSION['success'] = "Product Updated";
            header('Location: home.php');
        }
    }

}

if(isset($_POST['data_delete'])){
    $id = $_POST['delete_id'];
    $image = $_POST['delete_image'];
    $username = $_POST['username'];
    $description = 'Deleted a Product';

    $query = "DELETE FROM user WHERE id='$id'";
    $query_hist = "INSERT INTO history (username,description) VALUES ('$username','$description')";
    $query_run = mysqli_query($connection, $query);
    $query_run_hist = mysqli_query($connection,$query_hist);

    if($query_run){
        unlink("upload/".$image);
        $_SESSION['success'] = "Product Deleted";
        header('Location: home.php');
    }else{
        $_SESSION['success'] = "Product Not Deleted";
        header('Location: home.php');
    }
    if($query_run_hist){
        $_SESSION['success'] = "Product Deleted";
        header('Location: home.php');
    }
}

if(isset($_POST['user_delete'])){
    $id = $_POST['id'];

    $query = "DELETE FROM usertable WHERE id='$id'";
    $query_run = mysqli_query($connection, $query);

    if($query_run){
        $_SESSION['success'] = "User Deleted";
        session_unset();
        session_destroy();
        header('location: login-user.php');
    }else{
        $_SESSION['success'] = "User Not Deleted";
        header('Location: login-user.php');
    }
}
?>