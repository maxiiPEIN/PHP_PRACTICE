<?php
    $error_message = "";

    if(isset($_REQUEST['btnSubmit'])){ 
        if(empty($_REQUEST['fullname']) or empty($_REQUEST['email'])){
            $error_message = "All inputs are required!";
        } 
    } 
?>

<?php 
    if($error_message != ""){
        echo "Error: $error_message";
    }else{
        echo "Name:". $_REQUEST['fullname'] . "<br>";
        echo "Email:". $_REQUEST['email'] . "<br>";
    }
?>