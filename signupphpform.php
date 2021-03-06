 
   <?php
    
    
    $link = mysqli_connect("localhost","guviregi_table","rajuraju1234","guviregi_table");



      $stmt = $conn->prepare("INSERT INTO tsraj (firstname,lastname,email,age,phone,password) VALUES (?,?,?,?,?,?)");
      $stmt->bind_param("ssssis", $firstname,$lastname,$email,$age,$phone,$pass);

     $firstname=$_POST['first_name'];
     $lastname = $_POST['last_name'];
     $email = $_POST['email'];
     $age = $_POST['age'];
     $phone = $_POST['mobile'];
     $pass = $_POST['password'];
      $stmt->execute();
 
    
    echo "<script type='text/javascript'>alert('signup successfully..please click here to login');</script>";

    $stmt->close();
    $link->close();
	
?>