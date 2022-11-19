<html>
    <head>
    <title>ALertPage</title>
    <style>
h1 {text-align: center;font-size:30px;}
body {text-align: center; font-size:20px;}
button{float:center;}
a{float:center;}
table, th, td {
            padding: 5px;
            align:center;

}

th {
  text-align: center
}
td{
    text-align: center
}


</style>
</head>
    <body>
    <header>
    <h1>
    <?php
        include('connection.php'); 
        #echo "<h1> Home Page.</h1>";  
        echo 'Welcome, '.$_SESSION['email'];
        
    ?>
    </h1>
    <a href="home.php" ><button >Back to home</button></a><br>
  </header>
        <h1>Medicines to be taken within and after 30 Minutes(from now):</h1>
        <?php
       $email=$_SESSION['email'];
       $username=substr($email, 0, strpos($email, '@'));
       $sql="SELECT * FROM $username where time < NOW() + INTERVAL 30 minute and time > NOW() - INTERVAL 30 minute";
       $result = mysqli_query($con, $sql);
       
      
       foreach($result as $data)
       {
        echo '<script> alert("-----It is time to take your medicine-----");</script>';
         echo "<tr>
         <td>$data[Medicine]</td><br>
         </tr>";
       }
        ?>
</body>
</html>