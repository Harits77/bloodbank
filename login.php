<?php
    include("database.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width>, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
   
   <style>
        div{
             margin-left: 60%;
            margin-top: -60px;
        }
        label{
            color:white;
            font-size: larger;
            margin-left:-30px;
        
        }
        #text{
            width: 400px;
            height: 50px;
            border: black;
            border-radius: 5px;
           
        }
        h1{
            color: white;
           margin-left: 120px;
          
        }
        #btn1{
            width: 200px;
            height: 50px;
            border: white;
            border-radius: 5px;
            margin-left: 100px;
        }
     
        a{
            text-decoration: none;
        }
        h2{
            color: white;
            font-size: 80px;
            margin-left: -120%;
            word-spacing: 10px;
            text-shadow: 10px 10px 10px black;
        }
   </style>
</head>
<body>
<nav>
            <ul>
               <a href="index.html"><li>home</li></a>
               <a href="login.php" target="_self"><li>login</li></a>
               <a href="register.php"><li>register</li></a>
               <a href="about.html"><li>about</li></a>
            </ul>
        </nav>
  
    <div>
    <h2>BLOOD SEVA</h2>
    <form action=""  method="POST">
         
        <h1>Login</h1><br>
         <label><b>email</b></label><br><br>
        <input type="text" name="email" id="text" placeholder="Enter your email ID" required>
        <br><br>

        <label><b>Password</b></label><br><br>
        <input type="password" name="password" id="text" placeholder="Enter your Pasword" required>
        <br><br><br>
          <button id="btn1" name="Login">Login</button>
         
          
    </form>
    </div>
</body>
</html>
<?php
   
    if (isset($_POST['Login']))
    {
        $email=$_POST['email'];
        $password=$_POST['password'];
        $query="select * from register where email='$email' and password='$password'";
        $result=mysqli_query($conn,$query);
        $count=mysqli_num_rows($result);
        if($count>0)
        {
            echo"success";
            header("location:request.php");
           
        }
    else{
        echo'<script>alert("Invalid username and password")</script>';
    }
    }
  ?>
 
  
  