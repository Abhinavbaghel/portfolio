<?php 
    if(isset($_POST['name'])){
    $server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server, $username, $password);


    if(!$con){
        die("connection to this database failed due to" .
        mysqli_connect_error());
    }
    //echo"Sucess connecting to the db";

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $sql = "INSERT INTO `portfolio`.`contact` (`name`, `email`, `other`, `dt`) VALUES 
    ('$name', '$email', '$message', current_timestamp())";
    //echo $sql;

    if($con->query($sql) == true){
        //echo"Successfully inserted";
    }
    else{
         echo "ERROR: $sql <br> $con->error";
    }

    $con->close();
    }

?> 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>contact me</title>
  <link rel="stylesheet" href="contact.css">
</head>
<body>
  <section class="contact" id="contact">
  <div class="contact-container">
    <h2>Let's Connect</h2>
    <p>Have a project in mind or just want to say hi? I'd love to hear from you.</p>

    <div class="contact-details">
      <p><strong>Email:</strong> abhinavsinghbaghel@gmail.com</p>
      <p><strong>Phone:</strong> +91-7225823251</p>
      <p><strong>Location:</strong> India</p>
    </div>

    <form action="contact.php" method="POST" class="contact-form">
      <input type="text" name="name" placeholder="Your Name" required>
      <input type="email" name="email" placeholder="Your Email" required>
      <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
      <button type="submit">Send Message</button>
    </form>
  </div>
</section>

</body>
</html> 


