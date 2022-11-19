
<?php      
    include('connection.php'); 

    $deletemedicine = $_POST['deleteMedicineName'];  
    $time=$_POST['time'];
   
    if(!$deletemedicine||!$time)
    {
        echo '<script>alert("Entered fields for deletion were empty...");location="home.php"</script>';
    } 
    else{
        $email=$_SESSION['email'];
    $username=substr($email, 0, strpos($email, '@'));

    $sql = "DELETE FROM $username WHERE medicine='$deletemedicine' and time='$time'";

        #$result = mysqli_query($con, $sql);   
        
        if(mysqli_query($con, $sql))
        {
            echo '<script>alert("Medicine Data Deleted...");location="home.php"</script>'; 
        }
        else
        {
            echo '<script>alert("No data found...");location="home.php"</script>';
        }    

    }
    
           
?> 