<?php
$insert =false;
if($_SERVER['REQUEST_METHOD'] == 'POST'){
// set connection variables
  $server = "localhost";
$username = "root";
$password = "";
// creating a database connection
$con = mysqli_connect($server, $username, $password);
// check for connection success
if(!$con){
    die("connection failed to this database due to of".mysqli_connect_error());
}
// echo"Congratulations you are successfully connected to this database";

// $_POST['name'] = 'Sushmita';
// $_POST['age'] = '22';


// collect post variable
  $name = $_POST['name']; 
  $age = $_POST['age'];
  $gender = $_POST['gender'];
  $email = $_POST['email'];
  $phonenumber = $_POST['phone'];
  $others = $_POST['desc'];

  // if(empty($name)){
  //   echo "Please enter your name.";
  // }
  
  $sql =  "INSERT INTO `nepal_trip`.`trip` (`Name`, `Age`, `Gender`, `E-mail`, `PhoneNumber`, `Others`) VALUES ('$name', '$age', '$gender', '$email', '$phonenumber', '$others');";
// echo$sql;

// now how to store those data in database which is submit by user.
  if($con->query($sql) ==true){
    // echo"Successfully inserted";
    $insert = true;
    // $insert = true;(flag for successful insertion )
  }
  else{
    echo"Error: $sql <br> $con->error";
  }
// close the database connection.
  $con->close();
}


?> 

<!-- echo "<pre>";
print_r($_SERVER);
print_r($_POST); -->




<!-- if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phonenumber = $_POST['phoneNumber'];
    $others = $_POST['other'];
    
    $sql =  "INSERT INTO `trip` (`Name`, `Age`, `Gender`, `E-mail`, `PhoneNumber`, `Others`, `dt`) VALUES ('$name', '$age', '$gender', '$email', '$phonenumber', '$others', current_timestamp());";
    echo$sql;

} -->


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Welcome to Travel Form</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&family=Sriracha&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <img class="bg" src="xelwellogo.png" alt="IIT Xelwel Company" />

    <div class="container">
      <h1>Welcome to IIT Xelwel Company Nepal Trip Form</h1>
      <p>
        Enter your details and submit this form to confirm your participation in
        the trip
      </p>
      <?php
      if($insert == true){ 
   echo" <p class='submitMsg'>Thanks for submitting your form. we are happy to see you joining us fo the Nepal trip.</p>";
  }
      ?>

      <form action="" method="post">
        <input
          type="text"
          name="name"
          id="name"
          placeholder="Enter Your Name"
        />
        <input type="text" name="age" id="age" placeholder="Enter Your Age" />
        <input
          type="text"
          name="gender"
          id="gender"
          placeholder="Enter Your Gender"
        />
        <input
          type="email"
          name="email"
          id="email"
          placeholder="Enter your E-mail"
        />
        <input
          type="phone"
          name="phone"
          id="phone"
          placeholder="Enter your PhoneNumber"
        />
        <textarea
          name="desc"
          id="desc"
          cols="30"
          rows="10"
          placeholder="Enter any other information here"
        ></textarea>
        <button class="btn">Submit</button>
       
      </form>
    </div>
    <script src="index.js"></script>
    
         <!-- INSERT INTO `trip` (`S.N`, `Name`, `Age`, `Gender`, `E-mail`, `PhoneNumber`, `Others`, `dt`) VALUES ('1', 'Sushmita Devkota', '22', 'Female', 'sushmitadevkota026@gmail.com', '9826556767', 'Nervous Level Increses.', '2023-06-01 16:10:37'); 

        INSERT INTO `trip` (`S.N`, `Name`, `Age`, `Gender`, `E-mail`, `PhoneNumber`, `Others`, `dt`) VALUES ('2', 'Devkota Sushmita', '21', 'Female', 'devkotasushmita620@gmail.com', '9826556767', 'Nervous Level Increses.', '2023-06-01 16:10:37');  -->

     
  </body>
</html>
