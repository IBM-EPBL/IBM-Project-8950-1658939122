
<?php

    include('connection.php'); 
    $email = $_POST['email']; 
    
    $password = $_POST['password'];  
    
    $exists="SELECT * FROM login WHERE email='$email'";
    $result1=mysqli_query($con,$exists);
    $count1 = mysqli_num_rows($result1);
    if(!$count1)
    {
        echo '<script>alert("Username does not exits...Register to Continue...");location="start.html"</script>'; 
    }
    else{
        $sql = "SELECT * FROM login WHERE email='$email' AND password='$password' limit 1";

        $result = mysqli_query($con, $sql);    

        $count = mysqli_num_rows($result);  
          
        if($count >= 1){  
            $_SESSION['email'] = $email; 
            echo 'Welcome, '.$_SESSION['email'];
            header('location:home.php');  
        }  
        else{  
            echo '<script>alert("Username and Password does not matches...");location="start.html"</script>';  
        }     
    }
?> 