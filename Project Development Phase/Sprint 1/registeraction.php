
<?php      
    include('connection.php'); 

    

    $email = $_POST['email'];  
    $password = $_POST['password']; 
    $repassword=$_POST['repassword'];
    
    if(!$email || !$password || !$repassword)
    {
        echo '<script>alert("Any of the fields were empty...");location="register.html"</script>';
    } 

    else
    {
        $exists="SELECT * FROM login WHERE email='$email'";
    $result1=mysqli_query($con,$exists);
    $count1 = mysqli_num_rows($result1);
    if($count1)
    {
        echo '<script>alert("Username already exits...Login to Continue...");location="start.html"</script>'; 
    }
    else{
        if($password===$repassword)
    {
        $username=substr($email, 0, strpos($email, '@'));
    
        $sql = "INSERT INTO login(email,password) VALUES ('$email','$password')";
        $createtable="CREATE TABLE $username (Medicine varchar(30), Dose varchar(10),Time time)";
        #$result = mysqli_query($con, $sql);   
        
        if( mysqli_query($con,$createtable)&&mysqli_query($con, $sql))
        {
            echo "New record created...";
            $_SESSION['email'] = $email; 
            echo 'Welcome, '.$_SESSION['email'];
            header('location:home.php');
        }
        else
        {
            echo "Error: ".$sql."<br>".$con->error;
        }

    }
    else{
        
        #header('location:register.html');
        echo '<script>alert("Both Password does not matches...");location="register.html"</script>';
    }
    }
    }
           
?> 