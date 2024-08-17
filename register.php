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
             margin-top: 5%;
        }
        label{
            color:white;
            font-size: larger;
            margin-left:-30px;
            font-weight: bold;
        
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
        h2{
            color: white;
            font-size: 80px;
            word-spacing: 10px;
            margin-left: -120%;
            margin-top: -60px;
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
         
         <h1>Registeration</h1><br>
         <label>Username</label><br><br>
        <input type="text" name="username" id="text" placeholder="Enter your username " required>
        <br><br>

        <label>Email</label><br><br>
        <input type="text" name="email" id="text" placeholder="Enter your email" required>
        <br><br><br>

        <label>Gender</label><br><br>
        <select name="gender" id="text">
        <option value="male" >Male</option>
        <option value="female">Female</option>
        </select>
        <br><br>

        <label>Address</label><br><br>
        <input type="text" name="address" id="text" placeholder="Enter your address" required>
        <br><br>
    
        
        <label>DOB</label><br><br>
        <input type="date" name="DOB" id="text" placeholder="Enter your DOB" required>
        <br><br>

        <label>Password</label><br><br>
        <input type="password" name="password" id="text" placeholder="Enter your Pasword" required>
        <br><br><br>

        <label>Confirm Password</label><br><br>
        <input type="password" name="cpass" id="text" placeholder="Enter your confirm Pasword" required>
        <br><br><br>

      <button id="btn1">NEXT</button>
          
   </form>
    </div> 
</body>
</html>
<?php
    if($_SERVER["REQUEST_METHOD"] == "POST")
  {
    $username = $_POST["username"];
    $email =   $_POST["email"];
    $password = $_POST["password"];
    $cpass = $_POST["cpass"];
    $id = $_POST["id"];
    $gender = $_POST["gender"];
    $address = $_POST["address"];
    $DOB = $_POST["DOB"];
     
     $sql = "INSERT INTO register(username,email,password,cpass,DOB,address,gender)
           VALUES ('$username','$email','$password','$cpass','$DOB','$address','$gender')";

      try{
      mysqli_query($conn, $sql);
      header("location:login.php");
      }
      catch(mysqli_sql_exception){
        echo 'ok';
      }
    }

      mysqli_close($conn);
  
?>    
      
