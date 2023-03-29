<?PHP
 $hnj = 'fdb25.atspace.me';
 $dbj = '3455539_retinue';
 $unj = '3455539_retinue';
 $pwj = 'retinue.123';


 $conjn = new mysqli($hnj, $unj, $pwj, $dbj) ;
 if ($conjn->connect_error) die($conjn->connect_error);



if(isset($_POST['jsubmit'])){
  
  $jcon= mysqli_connect('fdb25.atspace.me','3455539_retinue','retinue.123');
  
  $jdb="3455539_retinue";
  
  mysqli_select_db($jcon,'3455539_retinue');
  
  $jname=$_POST['jfullname'];
  
  
  $jphone=$_POST['jphoneNo'];
 
  $jemail=$_POST['jemail'];
  
  $jmessage=$_POST['jmessage'];
  
  
  $regj= "INSERT INTO `career`(Name, phone, email, message) VALUES ('$jname', '$jphone', '$jemail', '$jmessage')";
  

   
  mysqli_query($jcon,$regj);
  
  echo('Thanks For Your Intrest in Us');
  

}
if(isset($_POST['upload'])){

if ($_FILES)
   {
   $name = $_FILES['filename']['name'];
   move_uploaded_file($_FILES['filename']['tmp_name'], $name);
   echo "Uploaded image '$name'<br><img src='$name'>";
   }
}

?>








<h2 class="heading about"> Join Today </h2>
          <div class="contentBx ">
            <h3>Fill Your Contact Details...</h3>
            <form method="POST" action="#">
            <div class="form">
              <div class="inputBx">
                <input type="text" name="jfullname" placeholder="Full Name" required>
              </div>
              <div class="inputBx">
                <input type="email" name="jemail" placeholder="Your Email Address" required>
              </div>
              <div class="inputBx" id="join_nav">
                <input type="number" name="jphoneNo" placeholder="Phone Number">
              </div>
              <div class="inputBx resume">
                <form method='post' action='#' enctype='multipart/form-data'>
                  Upload Resume: <input type='file' name='filename' size='10'>
                  <input type='submit' name= 'upload' value ='Upload'>
                </form>
              </div>
              <div class="inputBx">
                <textarea placeholder="Describe Yourself" name="jmessage"></textarea>
                <small>Without any Description Your Application may not be Considered</small>
              </div>
              <div class="inputBx">
                <input type="submit" name="jsubmit" value="Join">
              </div>
            </div>
          </div>
      </div>
