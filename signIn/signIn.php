<?php

$conn=mysqli_connect('localhost','root','','webProject');

if(!$conn){
    die("Connection failed :" . mysqli_connect_error());
}

if (isset($_POST['name']) && isset($_POST['password'])) {
    $name = $_POST['name'];
    $password = $_POST['password'];

    $query=mysqli_query($conn,"SELECT * FROM blogger WHERE name = '$name'");
	

    //check if name exists 
    if(mysqli_num_rows($query)==0){
        echo "invalid username or password";
    }
    else {
        //check if password is correct
        $user=mysqli_fetch_assoc($query);
        if($password!==$user['password'])
        {
            echo "invalid username or assword";
    }
    else {
        echo "Successfully logged in";
        if($name=="admin" && $password=="admin159"){
            header("Location: ../Home-admin.html");
        }
        else 
        header("Location: ../Home-blogger.html");
    }}}
mysqli_close($conn);

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <!-- <link rel="stylesheet"  href="login.css"> -->
</head>
<body>

<style>
		body {
			background-color: black;
			color: white;
			font-family: Arial, sans-serif;
			font-size: 16px;
			line-height: 1.6;
			padding: 0;
			margin: 0;
		}
		h1, h2 {
			color: violet;
			text-align: center;
		}
		form {
            
			max-width: 400px;
			margin: 150px  540px;
			padding: 20px;
			background-color: #222;
			border-radius: 10px;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
		}
		label {
			display: block;
			margin-bottom: 10px;
		}
		input[type="text"], input[type="password"] {
			padding: 10px;
			font-size: 16px;
			border: none;
			background-color: #333;
			color: white;
			width: 100%;
			border-radius: 5px;
			margin-bottom: 20px;
		}
		input[type="submit"] {
			padding: 10px 70px;
            margin: 10px 100px;
			font-size: 16px;
			border: none;
			background-color: violet;
			color: white;
			border-radius: 5px;
			cursor: pointer;
		}
	</style>
    
    <h1> WELCOME TO BLOGIT</h1>
    <br>
    <h2 style="color:white"> Unlimited possibilities for your blogs </h2>
<form action="" method="post" class="box">
   
    <input type="text" id="username" name="name" placeholder="username" required><br>


    <input type="password" id="password" name="password" placeholder="password" required><br>

    <input type="submit" value="Login">
  </form>

</body>


</html>