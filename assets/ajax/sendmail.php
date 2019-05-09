<?php
include("../../includes/func.php");
$to = 'support@utglobe.com';

$headers = "utglobe.com";
if (isset($_POST['name']) || 
    isset($_POST['email']) || 
    isset($_POST['category']) ||
    isset($_POST['msg'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $category = $_POST['category'];
    $msg = $_POST['msg'];
    
    if (!empty($name) || 
        !empty($email) ||
        !empty($category) ||
        !empty($msg) ) {
        
        $email = "support@utglobe.com";
        $subject = 'Free Consultation Mail';
        $body = "Name :".$name."\n"."<br>";
        $body .= "Email :".$email."\n"."<br>";
        $body .= "Category :".$category."\n"."<br>";
        $body .= "Message :".wordwrap($msg, 70, "<br>\n")."\n"."<br>";
       
     $mail =   u_s($email, $body, $subject);
        if ($mail === true) {
            echo "<script>
            $('.jj').html('<p>Thank You ! We will be in touch shortly .</p>').delay(3000).fadeOut('slow');
            </script>";
        } else {
            echo "<script>
            $('.jj').html('<p>Something Went Wrong</p>').delay(4000).fadeOut('slow');
            </script>";
        }
    } else {
        echo "<script>
        $('.jj').html('<p>Please Fill All The Fields .</p>').delay(4000).fadeOut('slow');
        </script>";
    }

}