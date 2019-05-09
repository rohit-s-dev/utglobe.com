<?php
include("../../includes/func.php");
$to = 'support@utglobe.com';

if (isset($_POST['name'])) {
    echo "
<script>
alert('hello');
</script>
";

}

// $headers = "utglobe.com";
// if (isset($_POST['name']) || 
//     isset($_POST['email']) || 
//     isset($_POST['services']) ||
//     isset($_POST['msg']) ||
//     isset($_POST['sub'])) {

//     $name = $_POST['name'];
//     $email = $_POST['email'];
//     $services = $_POST['services'];
//     $sub = $_POST['sub'];
//     $msg = $_POST['msg'];
    
//     if (!empty($name) || 
//         !empty($email) ||
//         !empty($msg) ||
//         !empty($services)) {
        
//         $email = "support@utglobe.com";
//         $subject = 'Free Consultation Mail';
//         $body = "Name :".$name."\n"."<br>";
//         $body .= "Email :".$email."\n"."<br>";
//         $body .= "Subject :".$sub."\n"."<br>";
//         $body .= "Services :".$services."\n"."<br>";
//         $body .= "Message :".wordwrap($msg, 70, "<br>\n")."\n"."<br>";
       
//      $mail =   u_s($email, $body, $subject);
//         if ($mail === true) {
//             echo "<script>
//             $('#success').html('<p>Thank You ! We will be in touch shortly .</p>').delay(3000).fadeOut('slow');
//             </script>";
//         } else {
//             echo "<script>
//             $('#success').html('<p>Something Went Wrong</p>').delay(4000).fadeOut('slow');
//             </script>";
//         }
//     } else {
//         echo "<script>
//         $('#success').html('<p>Please Fill All The Fields .</p>').delay(4000).fadeOut('slow');
//         </script>";
//     }

// }