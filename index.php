<?php
$insert = false;
if(isset($_POST['name'])){
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password);

    // Check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    // echo "Success connecting to the db";

    $name = $_POST["name"];
    $age = $_POST["age"];
    $gender = $_POST["gender"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $description = $_POST["description"];
    $sql = "INSERT INTO `cox-trip`.`st-list` (`name`, `age`, `gender`, `email`, `phone`, `description`, `date`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$description', current_timestamp());";
  
  
    // Execute the query
  if($con->query($sql) == true){
    // echo "Successfully inserted";

    // Flag for successful insertion
    $insert = true;
}
else{
    echo "ERROR: $sql <br> $con->error";
}

// Close the database connection
$con->close();
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>SUB --Cox-Tour--</title>
</head>
<body>
<div class="container">
<h2>Southern University</h2>
<h3>Welcome To Cox-Trip Form</h3>
<p>
    Enter your details and submit this form to confifm your participation in the trip
</p>
<?php
        if($insert == true){
        echo "<div style='color: green; font-weight: 700;font-size: 20px;'>Thanks for submitting your form. We are happy to see you joining us for the US trip </div>";
        }
    ?>
<form action="index.php" method="post">
  <input type="text" name="name" id="name" placeholder="name">
  <input type="tel" name="age" id="age" placeholder="age">
  <input type="text" name="gender" id="gender" placeholder="Gender">
  <input type="email" name="email" id="email" placeholder="email">
  <input type="tel" name="phone" id="phone" placeholder="Phone">
  <textarea name="description" id="description" cols="30" rows="10" placeholder="Enter Other information here"></textarea>
  <button type="submit" id="submit" name="submit">Submit</button>
</form>
    </div>
</body>

</html>