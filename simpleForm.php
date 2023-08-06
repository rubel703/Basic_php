<?php
//same page data show

    if (isset($_POST['btn'])) {
       $user_name=$_POST['userName'];
       $email=$_POST['userEmail'];
       $password=$_POST['userPassword'];
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form in php</title>
</head>
<body>
    <h4>Name:<?php if (isset($user_name)) {
        echo $user_name;
    }?></h4>
    <h4>Email:<?php if (isset($email)) {
        echo $email;
    }?></h4>
    <h4>Password:<?php if (isset($password)) {
        echo $password;
    }?></h4>
    
    <form action="" method="POST" style="margin:5% 0% 0% 40%;">
        <label>User Name </label><br>
        <input type="text" name="userName" placeholder="name"><br>
        <br>
        <label>Email</label><br>
        <input type="email" name="userEmail" placeholder="email"><br>
        <br>
        <label>Password</label><br>
        <input type="password" name="userPassword" placeholder="password"><br>
        <br>
        <input type="submit"value="submit" name="btn">
    </form>
    
</body>
</html>

