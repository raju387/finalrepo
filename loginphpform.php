 <?php 
  
       $link = mysqli_connect("localhost","guviregi_table","rajuraju1234","guviregi_table");
       
       
       $stmt = $mysqli->prepare("SELECT * FROM tsraj WHERE firstname = ? AND password = ?");
         $stmt->bind_param("ss", $_POST['email'], $_POST['password']);
       $stmt->execute();
    if($stmt->num_rows == 1)
    {
        echo "<script>window.location.href='editerfile.html'</script>";
    }
    else
    {
        echo "<script>alert('Please enter valid email and password')</script>";
    }
  $stmt->close();
         
      
?>