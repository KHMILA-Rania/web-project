
<?php
 $flag='';
 if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $email=$_POST['email'] ;
    $password=$_POST['password'];
    $age=$_POST['age'] ;
    $conn=mysqli_connect('localhost','root','','webProject');
    $query=mysqli_query($conn,"INSERT INTO `blogger`(`name`,`phone`,`email`,`password`,`age`) VALUES ('$name','$phone','$email','$password','$age')");
    if($query){
        $flag ='1';}
        else{
            $flag ='0';
        }
    }
 
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Join us !</title>
   
</head>
<body>
    <style>
        body{
          background-color:  -webkit-linear-gradient(to top, rgba(205, 156, 242, 1), rgba(246, 243, 255, 1));;
          
        }
        h3{
            color: black;
        }
        text{
            color: white;
        }
        .form{
            margin : 150px  550px;
        }
    </style>
    <div class="form">
    <h3>Sign Up</h3>
    <h4>Be a part of our Community </h4>
    <form method="post" action="">
        Full name <input type="text" name="name"/>
        <br><br>
        Phone number <input type="text" name="phone"/>
        <br><br>
        Email <input type="email" name="email"/>
        <br><br>
        password <input type="password" name="password" />
        <br><br>
        Age <input type="number" name="age"/>
        <br><br>
        <input type="submit" name="submit" value="submit" />
        <script >
            
            </script>
            </div>
</body>
</html>