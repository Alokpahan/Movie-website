<?php

include "db_con.php";
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $age=$_POST['age'];
    $dob=$_POST['dob'];
    $occupation=$_POST['occupation'];
    $gender=$_POST['gender'];
    $country=$_POST['country'];
    $website=$_POST['website'];
    $rating=$_POST['rating'];
    $contact_method=$_POST['contact_method'];
    $address=$_POST['address'];
    $message=$_POST['message'];
    $sent_on = date('Y-m-d H-i-s');
    
    

    $sql="INSERT INTO enquiry(name,email,phone,age,dob,occupation,gender,country,website,rating,contact_method,address,message,sent_on) VALUES ('$name','$email','$phone','$age','$dob','$occupation','$gender','$country','$website','$rating','$contact_method','$address','$message','$sent_on')";

    if(mysqli_query($con,$sql))
    {
        session_start();
        $_SESSION['success'] = 'form submited sucessful';
        header("Location:feedback_submitted.php");

    }
    else{
        echo "error".mysqli_error($con);
    }


}
else{
    header("Location:");
}
?>