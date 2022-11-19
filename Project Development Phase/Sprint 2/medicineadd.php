
<?php      
    include('connection.php'); 

    $medicine = $_POST['medicine'];  
    $dose = $_POST['dose']; 
    $time=$_POST['time'];
    
    if(!$medicine || !$dose || !$time)
    {
        echo '<script>alert("Any of the three fields were empty..");location="addmedicine.html"</script>';
    } 
    else{
        $email=$_SESSION['email'];
    $username=substr($email, 0, strpos($email, '@'));

    $sql = "INSERT INTO $username(Medicine,Dose,Time) VALUES ('$medicine','$dose','$time')";

        #$result = mysqli_query($con, $sql);   
        
        if(mysqli_query($con, $sql))
        {
            echo '<script>alert("New Medicine Data Inserted...");location="addmedicine.html"</script>'; 
        }
        else
        {
            echo "Error: ".$sql."<br>".$con->error;
        }    

    }
    
           
?> 