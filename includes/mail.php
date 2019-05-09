<?php
if ( isset($_POST['c_name']) ||
isset($_POST['c_email']) ||
isset($_POST['c_sub']) ||
isset($_POST['c_services']) ||isset($_POST['c_message']) ) {
    
    $name = $_POST['c_name'];
    $email = $_POST['c_email'];
    $sub = $_POST['c_sub'];
    $services = $_POST['c_services'];
    $msg = $_POST['c_message'];
    
if (!empty($name) || !empty($email) || !empty($services) || !empty($msg)) {
            
        $sub = "Contact Form";
        $mesg = "Name : ".$name."/n";
        $mesg .= "Email : ".$email."/n";
        $mesg .= "Subject : ".$sub."/n";
        $mesg .= "Services : ".$services."/n";
        $mesg .= "Message : ".$msg."/n";
        
        $m = mail("support@utglobe.com", $sub, $mesg);
        
        if ($m) {
            echo "<script>
            $('.c_p').html('Thank You !').css('color','green');
            </script>";
        } else {
            echo "<script>
            $('.c_p').html('Something went wrong !').css('color','red');
            </script>";
        }
    
} else {
    echo "<script>
            $('.c_p').html('Empty fields').css('color','red');
            </script>";
}
    
    
}