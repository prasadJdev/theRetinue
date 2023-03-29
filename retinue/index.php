<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>The Retinue</title>
  <!-- Bootstrap CDN -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <!-- Custom Styles -->
  <link rel="stylesheet" href="global.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="media.css">
  <!-- Scroll Reveal JS -->
  <script src="https://unpkg.com/scrollreveal"></script>

<?php



if(isset($_POST['contact'])){
  
  $con= mysqli_connect('fdb25.atspace.me','3455539_retinue','retinue.123');
  
  $db="3455539_retinue";
  
  mysqli_select_db($con,'3455539_retinue');
  
  $name=$_POST['name'];
  
  $phone_no=$_POST['phone_number'];
 
  $email=$_POST['email'];
  
  $message=$_POST['message'];
  
  $reg= "INSERT INTO contact(name, phone_no, email, message) VALUES ('$name', '$phone_no', '$email', '$message')";
  
  
  mysqli_query($con,$reg);
  
  echo('Thanks For Your Feedback');
  
}


?>




</head>

<body>
  <!-- Header -->
  <header>
    <div class="d-flex flex-wrap">
      <div class="menu_toggle">
        <div class="hamburger">
          <i class="fas fa-bars"></i>
        </div>
      </div>
      <img src="./assets/Images/site-logo.png" class="logospan" />
    </div>
  </header>
  <div class="nav_links">
    <ul>
      <li><a href="#">Home</a></li>
      <li><a href="#">Services</a></li>
      <li><a href="#">About</a></li>
      <li><a href="#">Career</a></li>
      <li><a href="#">Contact</a></li>
    </ul>
  </div>
  <!-- /Header -->
  <!-- Main -->
  <main class="main">
    <section id="home" class="bg-light">
      <!-- Banner Area -->
      <div class="banner" id="home">
        <div class="content">
          <h2 class="heading3 banner_heading">Retinue</h2>
          <p class="text banner_p newton">THE RETINUE, at the outset
            concerned with providing branding and marketing and is
            extending it’s services in evey field possible to be the one
            stop solution from a merchant to a company catering to
            their needs within the budget by employing people with the
            mindsets of empowering the world class Business and
            Technologies those shape the bussiness world</p>
          <a href="#services" class="get_started"><span>Get Started</span></a>
        </div>
      </div>
    </section>
    <!-- Services  -->
    <section id="services" class="bg-light">
      <h2 class="heading1 services_heading bg-light roboto text-center">Our Services</h2>
      <p class="text2 newton text-center services_p font-20 ">Whether your needs are large or small, we have the skills and proven experience to diagnose your problem, analyze your
        requirements, assess your Return On Investment, and deliver an effective, efficient Solutions.</p>
      <div class="container-fluid services">
        <div class="serviceBx">
          <div>
            <i class="fas fa-pen-nib service_img"></i>
          </div>
          <div>
            <h2 class="heading2 text-center primary">Web Design </h2>
            <ul class="service">
              <li><a class="services_links roboto" href="#">HTML, CSS and JavaScript</a></li>
              <li><a class="services_links roboto" href="#">WordPress</a></li>
              <li><a class="services_links roboto" href="#">PHP and MySQL</a></li>
            </ul>
          </div>
        </div>
        <div class="serviceBx">
          <div>
            <i class="fab fa-app-store service_img"></i>
          </div>
          <div>
            <h2 class="heading2 text-center primary">App Development</h2>
            <ul class="service">
              <li><a class="services_links roboto" href="#">Logo Design</a></li>
              <li><a class="services_links roboto" href="#">Posters</a></li>
              <li><a class="services_links font-14 roboto" href="#">Accessories Design and Manufacturing</a></li>
            </ul>
          </div>
        </div>
        <div class="serviceBx">
          <div>
            <i class="fas fa-tasks service_img"></i>
          </div>
          <div>
            <h2 class="heading2 text-center primary">Branding</h2>
            <ul class="service">
              <li><a class="services_links roboto" href="#">Logo Design</a></li>
              <li><a class="services_links roboto" href="#">Posters</a></li>
              <li><a class="services_links font-14 roboto" href="#">Accessories Design and Manufacturing</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="container-fluid m-0  services">
        <div class="serviceBx">
          <div>
            <i class="fas fa-bullhorn service_img"></i>
          </div>
          <div>
            <h2 class="heading2 text-center primary">Marketing</h2>
            <ul class="service">
              <li><a class="services_links roboto" href="#">SEO</a></li>
              <li><a class="services_links roboto" href="#">Sales and Management</a></li>
              <li><a class="services_links roboto" href="#">Digital Marketing</a></li>
              <li><a class="services_links roboto" href="#">Business Analyticals</a></li>
            </ul>
          </div>
        </div>
        <div class="serviceBx">
          <div>
            <i class="fas fa-sort-numeric-up service_img"></i>
          </div>
          <div>
            <h2 class="heading2 text-center primary">SEO</h2>
            <ul class="service">
              <li><a class="services_links roboto" href="#">Logo Design</a></li>
              <li><a class="services_links roboto" href="#">Posters</a></li>
              <li><a class="services_links font-14 roboto" href="#">Accessories Design and Manufacturing</a></li>
            </ul>
          </div>
        </div>
        <div class="serviceBx">
          <div>
            <i class="fas fa-sms service_img"></i>
          </div>
          <div>
            <h2 class="heading2 text-center primary">Bulk SMS</h2>
            <ul class="service">
              <li><a class="services_links roboto" href="#">Logo Design</a></li>
              <li><a class="services_links roboto" href="#">Posters</a></li>
              <li><a class="services_links font-14 roboto" href="#">Accessories Design and Manufacturing</a></li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- Portfolio >
    <section id="protfolio" class="protfolio">
      <div><img src=""></div>
      <div><img src=""></div>
      <div><img src=""></div>
      <div><img src=""></div>
      <div><img src=""></div>
    </section>
    <!-- /protfolio -->
    <!-- Clients >
    <section id="clients">
    </section>
    <!-- /Clients -->
    <!-- About  -->
    <section class="about bg-light" id="about">
      <div class="contentBx">
        <h2 class="heading1 about_heading roboto text-center">About Us</h2>
        <p class="text2 newton text-center about_p font-20">
          As technologies engulfs all industries there are, it becomes
          increasingly important to respond to the need of an hour, which
          is being active at the techforce,
          We at retinue work hard to make your
          Business sustain to the environment of day to day
          challenges posed by the Business World. By Providing Branding, Marketing Solutions to
          your problems and even striving hard to get employed in
          every sector of a Business. </p><br>
        <div class="bg1">
          <h3 class="heading1 bg-light roboto text-center about_heading2">Why Retinue?</h3><br>
          <p class="text2 newton text-center  font-20 about_p2">We are different from our peers in each and every aspect
            of providing services and charging for them. We strive to make
            your bussiness do the best by making it reach the correct audience
            catering your choices.</p>
        </div>
      </div>
    </section>
    <!-- About Mansory Grid -->
    <section class="container-fluid bg-3">
      <div class="abt-container container">
        <div class="abt-box box1 d-flex">
          <div class="logospan1">
            <img src="./assets/Images/Knowledge.png" class="abt-img">
          </div>
          <div class="abt-content">
            <h2 class="heading2  newton ">Knowledge</h2>
            <p class="roboto ">At retinue, we don’t just anticipate the future, we create it
              useing our knowledge and technical acumen. Our experts in the feilds of
              Marketing, IT and branding will guide you throughout
              your with Us catering your needs by providing creative solutions.</p>
          </div>
        </div>
        <div class="abt-box box2 d-flex">
          <div class="logospan1">
            <img src="./assets/Images/Logo-1.png" class="abt-img">
          </div>
          <div class="abt-content">
            <h2 class="heading2 newton">Business Process</h2>
            <p class="roboto ">Business Process is a tool for most of the organizations, to cut costs and reap profit. But this is reversely opted by sacrificing the
              quality and internal production capability.</p>
            <br>
            <p class="newton font-700">At RETINUE, we are offering Business Processes, as an effective strategy by developing check posts for quality
              check and at reduced cost.</p>
          </div>
        </div>
        <div class="abt-box box3 d-flex">
          <div class="logospan1">
            <img src="./assets/Images/Mission.png" class="abt-img">
          </div>
          <div class="abt-content">
            <h2 class="heading2 newton">Our Mission</h2>
            <p class="roboto ">To be a one-stop-shop for IT and Branding Solutions, with the niche forte of delivering timely, quality and cost
              effective solutions to our clients, without any geographical, regional or language barriers.</p>
          </div>
        </div>
        <div class="abt-box box4 d-flex">
          <div class="logospan1">
            <img src="./assets/Images/Vision.png" class="abt-img">
          </div>
          <div class="abt-content">
            <h2 class="heading2 newton">Our Vision</h2>
            <p class="roboto ">To create an Indian corporate with world class values and shall provide motivation to people to work towards being a part of it and
              will make all our clients and associates proud that they are part of it.</p>
          </div>
        </div>
      </div>
    </section>
    <!-- Oh boy We are the one -->
    <section class="questionBx bg-light">
      <div class="container">
        <div class="contentBx">
          <div>
            <p class="roboto font-16 ">Are you the one looking for someone to help you with Branding ?</p>
            <br>
            <h4 class="newton font-20 font-700">— Oh boy, we are the one to help you with Branding!!!<h4>
          </div>
        </div>
        <div class="contentBx">
          <div>
            <p class="roboto font-16 ">If your business has been posed by a new challenge or you want to improve your efficiency of operations, in terms of time and cost, we are at your Earliest Response..!!!</p>
            <br>
            <h4 class="newton font-20 font-700">— Our team of experts drives technology to your benefit.<h4>
          </div>
        </div>
      </div>
    </section>
    <!-- Contact Area -->
    <section class="contact container-fluid m-1 p-1" id="contact">
      <h2 class="heading1 contact_heading text-center">Contact Us</h2>
    </section>
    <section class="about container">
      <div class="contentBx">
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <div class="form">
          <div class="inputBx">
            <input type="text" name="name" autocomplete="off" placeholder="Full Name" required>
          </div>
          <div class="inputBx">
            <input type="email" name="email" autocomplete="off" placeholder="Your Email Address" required>
          </div>
          <div class="inputBx">
            <input type="number" name="phone_number" autocomplete="off" placeholder="Phone Number">
          </div>
          <div class="inputBx">
            <textarea name="message" placeholder="Your Message Here"></textarea>
          </div>
          <div class="inputBx">
            <input type="submit" name="contact" value="Send">
          </div>
        </div>
        </form>
      </div>
    </section>
    <!-- /Contact Us -->
    <!-- /Main -->
    <!-- Footer -->
    <footer>
      <p class="text text-center">Designed and Developed by Retinue</p>
     
          <p class="social-text text-center">Follow Us On...</p>
          <div class="social-media">
            <a class="social-icon" href="#"><i class="fab fa-google"></i></a>
            <a class="social-icon" href="#"><i class="fab fa-facebook-f"></i></a>
            <a class="social-icon" href="#"><i class="fab fa-twitter"></i></a>
          </div>
    </footer>
    <!-- /Footer -->
    <!-- Bootstrap JavaScript CDN -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <!-- Fontawesome CDN -->
    <script src="https://kit.fontawesome.com/ec2ebb3023.js" crossorigin="anonymous"></script>
    <!-- Project JavaScript-->
    <script src="main.js"></script>
</body>

</html>