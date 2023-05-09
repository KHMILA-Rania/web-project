
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
            color: red;
            font-family: Arial, Helvetica, sans-serif;
            font-size:xx-large;
        }
        text{
            color: white;
        }
        .form{
            margin : 150px  550px;
        }
        input[type="text"], input[type="email"], input[type="password"], input[type="number"] {
  display: block;
  width: 100%;
  padding: 1rem;
  font-size: 1rem;
  line-height: 1.5;
  border: 1px solid #ccc;
  border-radius: 0.25rem;
  box-sizing: border-box;
  margin-bottom: 1rem;
}

input[type="submit"] {
  display: inline-block;
  background-color: green;
  color: #fff;
  font-size: 1rem;
  padding: 0.5rem 1rem;
  border-radius: 0.25rem;
  cursor: pointer;
  border: none;
}

input[type="submit"]:hover {
  background-color: #0062cc;
}

input[type="submit"]:focus {
  outline: none;
  box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
}

    </style>
    <div class="form">
    <h3>Sign Up</h3>
    <h4>Be a part of our Community </h4>
    <form method="post" action="" >
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