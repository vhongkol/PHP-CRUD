<?php
session_start();
require 'db_con.php';

if(isset($_POST['delete_people']))
{
    $people_id= mysqli_real_escape_string($con, $_POST['delete_people']);

    $query = "DELETE FROM people WHERE id= '$people_id' ";
    $query_run= mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message']="People Deleted Successfully";
        header("Location:index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message']="People Not Deleted";
        header("Location:index.php");
        exit(0);
    }
}

if(isset($_POST['update_people']))
{
    $people_id=mysqli_real_escape_string($con, $_POST['people_id']);
    
    $name=mysqli_real_escape_string($con, $_POST['name']);
    $age=mysqli_real_escape_string($con, $_POST['age']);
    $sex=mysqli_real_escape_string($con, $_POST['sex']);
    $phone=mysqli_real_escape_string($con, $_POST['phone']);
    $country=mysqli_real_escape_string($con, $_POST['country']);

    $query = "UPDATE people SET name='$name', age='$age', sex='$sex', phone='$phone', country='$country' WHERE id='$people_id' ";
    $query_run=mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message']="People Updated Successfully";
        header("Location:index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message']="People Not Updated";
        header("Location:index.php");
        exit(0);
    }
}

if(isset($_POST['save_people']))
{
    $name=mysqli_real_escape_string($con, $_POST['name']);
    $age=mysqli_real_escape_string($con, $_POST['age']);
    $sex=mysqli_real_escape_string($con, $_POST['sex']);
    $phone=mysqli_real_escape_string($con, $_POST['phone']);
    $country=mysqli_real_escape_string($con, $_POST['country']);
}

$query="INSERT INTO people(name,age,sex,phone,country) VALUES('$name','$age','$sex','$phone','$country')";	


$query_run = mysqli_query($con, $query);
if($query_run)

{
    $_SESSION['message']="People added in Jesusa Ville Successfully";
    header("Location:people-create.php");
    exit(0);
}
else
{
    $_SESSION['message']="People NOT Created";
    header("Location:people-create.php");
    exit(0);
}

?>