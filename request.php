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
      table,td,tr{
    border: 2px solid white;
    width: 800px;
    height: 50px;
    margin-top: 50px;
    color: white;
    margin-left: -150px;
    text-align: center;
   }
   tr{
    font-weight: bolder;
   }
    div{
             margin-left: 50%;
             margin-top: -5%;
             display: inline-block;
        }
      #text{
            width: 400px;
            height: 50px;
            border: black;
            border-radius: 5px;
       }
     #btn1{
            width: 150px;
            height: 50px;
            border: white;
            border-radius: 5px;
            margin: 10px;
     }
      h1{
            color: white;
            margin-left: 120px
      }
      p{
        color: white;
        font-size: 80px;
        margin-top: 10%;
        margin-left: -100%;
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
     <p>BLOOD SEVA</p>
    <form action="" method="POST">

    <h1>Request Blood</h1>
  
    <input type="text" id="text" name="id" placeholder="Enter a Bloodgroup">
     <input type="submit" id="btn1"   name="search" value="SEARCH ">
     
     </form>
   
     <table>
      <tr>
        <th>Name</th>
        <th>Age</th>
        <th>Blood group</th>
        <th>DOB</th>
        <th>Address</th>
        <th>Phone no</th>
        <th>Email</th>
      </tr>
   

       <?php
       
       if(isset($_POST['search']))
       {
        $id = $_POST['id'];

        $query = "SELECT * from donors where blood_group='$id' ";
        $query_run = mysqli_query($conn,$query);

        while($row = mysqli_fetch_array($query_run))
        {
          echo"<tr>";
      
          
          echo"<td>{$row["Name"]}</td>";
          echo"<td>{$row["Age"]}</td>";
          echo"<td>{$row["Blood_group"]}</td>";
          echo"<td>{$row["DOB"]}</td>";
          echo"<td>{$row["Address"]}</td>";
          echo"<td>{$row["Phone_no"]}</td>";
          echo"<td>{$row["Email"]}</td>";
      
          echo"</tr>";
        }
       }
     ?>
       </table>
       </div>
</body>
</html>

 
  
  