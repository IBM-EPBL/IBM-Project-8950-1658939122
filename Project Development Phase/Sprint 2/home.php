
<html>
    <head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <style >
        
        table {
            border-spacing: 30px;
            width: 100%;
            align:center;
            border: 1px solid black;
        }
        table, th, td {
            padding: 5px;
            align:center;

}
button {float:center;}
a{float:center;}
th {
  text-align: center
}
td{
    text-align: center
}
        article {
            float: center;
            padding: 20px;
            width: 60%;
            height: 800px; 
            }
            nav {
            float: center;
            text-align:left;
            width: 100%;
            height: 270px; 
            background:rgb(247, 242, 242) ;
            padding: 20px;
            }
            
}
</
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
  </header>
  <section>
  <a href="app_medicinedisplay2.php" float:right><button>AlertPage</button></a><br>
  
  <nav>
    
    <ul>
    <h1 text-align:center>Add Medicine data</h1>
    <a href="addmedicine.html"><button>Add New Medicine Data</button></a><br>
    <h1 text-align:center>Delete Medicine data</h1>
    
    <form action="deletemedicine.php" method="Post"> 
        <label for="deleteMedicineName">Enter Medicine Name:</label>
        <input type="text" id="deleteMedicineName" name="deleteMedicineName">  <br>
        <label for="time">Time:</label>
        <input type="time" id="time" name="time">
        <input type="submit" value="Delete Medicine Data">
    </form>
    <a href="logout.php" float:right><button>Logout</button></a><br>
    
    </ul>
  </nav>

  <article>
  <table>
  <tr text-align:center>
    <th>Medicine</th>
    <th>Dose</th>
    <th>Time</th>
  </tr>

  <?php 
  $email=$_SESSION['email'];
  $username=substr($email, 0, strpos($email, '@'));
  $sql="SELECT * FROM $username order by time";
  $result = mysqli_query($con, $sql);
  
  foreach($result as $data)
  {
    echo "<tr text-align:center>
    <td>$data[Medicine]</td>
    <td>$data[Dose]</td>
    <td>$data[Time]</td>
    </tr>";
  }
  ?>
  
</table>
</article>
  

</section>

  
      
</body>
</html>
