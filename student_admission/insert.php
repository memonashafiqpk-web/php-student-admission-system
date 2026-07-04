<?php

include("connect.php");

if(isset($_POST['submit']))
{
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $course = $_POST['course'];
    $address = $_POST['address'];

    $sql = "INSERT INTO students
    (fullname, email, phone, gender, course, address)
    VALUES
    ('$fullname', '$email', '$phone', '$gender', '$course', '$address')";

    $result = mysqli_query($conn, $sql);

    if($result)
    {
        echo "Student Registered Successfully";
    }
    else
    {
        echo "Error: " . mysqli_error($conn);
    }
}

?>