<?php
 // login.php

 $hn = 'fdb25.atspace.me';
 $db = '3455539_retinue';
 $un = '3455539_retinue';
 $pw = 'retinue.123';


 $conn = new mysqli($hn, $un, $pw, $db);
 if ($conn->connect_error) die($conn->connect_error);



if(isset($_POST['submit'])){
  
  $con= mysqli_connect('fdb25.atspace.me','3455539_retinue','retinue.123');
  
  $db="3455539_retinue";
  
  mysqli_select_db($con,'3455539_retinue');
  
  $name=$_POST['fullname'];
  
  
  $phone_no=$_POST['phone_no'];
 
  $email=$_POST['email'];
  
  $message=$_POST['message'];
  
  $s= "SELECT * FROM contact";
  
  $reg= "INSERT INTO contact(name, phone_no, email, message) VALUES ('$name', '$phone_no', '$email', '$message')";
  
  
  mysqli_query($con,$reg);
  
  echo('Thanks For Your Feedback');
  
}


?>






      <h2 class="heading" data-center-center="opacity:1; left:0px" data-0-bottom="opacity:0;left:600px">Contact Us</h2>
    </section>
    <section class="about">
      <div class="contentBx ">
        <form method="POST" action="#contact">
        <div class="form">
          <div class="inputBx">
            <input type="text" name="fullname" placeholder="Full Name" required>
          </div>
          <div class="inputBx">
            <input type="email" name="email" placeholder="Your Email Address" required>
          </div>
          <div class="inputBx">
            <input type="number" name="phone_no" placeholder="Phone Number">
          </div>
          <div class="inputBx">
            <textarea placeholder="Your Message Here" name="message"></textarea>
          </div>
          <div class="inputBx">
            <input type="submit" name="submit" value="Send">
          </div>
        </div>
        </form>
      </div>
      <!-- Join us Form -->
      <div>
        <section id="join" class="join hidden">
