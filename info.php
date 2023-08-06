<?php
//another page data show..........

    if (isset($_POST['btn'])) {
       $user_name=$_POST['userName'];
       $email=$_POST['userEmail'];
       $password=$_POST['userPassword'];
    }


?>

<h4>Name:<?php if (isset($user_name)) {
        echo $user_name;
    }?></h4>
    <h4>Email:<?php if (isset($email)) {
        echo $email;
    }?></h4>
    <h4>Password:<?php if (isset($password)) {
        echo $password;
    }?></h4>