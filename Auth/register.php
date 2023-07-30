
<?php 
<<<<<<< Updated upstream
  require "../config/config.php";
   require "../includes/header.php";
  
   ?>
   <?php
   
  if(isset($_POST['submit'])){
    if(empty($_POST['username']) OR empty($_POST['password']) OR empty($_POST['re-password'])){
=======
require "../config/config.php";
require "../includes/header.php";

if(isset($_SESSION['username'])){
  header("location: ".APPURL."");
}

if(isset($_POST['submit'])){
  if(empty($_POST['username']) OR empty($_POST['password']) OR empty($_POST['re-password'])){
>>>>>>> Stashed changes
    echo"<script>alert('some inputs are empty')</script>";
  } else {
    $username= $_POST['username'];
    $email= $_POST['email'];
    $password= $_POST['password'];
    $repassword= $_POST['re-password'];
    $img= 'web-coding.png';
    $type= $_POST['type'];

    if($password == $repassword){
      if(strlen($email) > 22 OR strlen($username)>15){
        echo"<script>alert('email or username is too big')</script>";
      } else{
       
        // checking for username or password availability
        $validate= $conn->query("SELECT * FROM users WHERE email='$email' OR username= '$username'");
        $validate->execute();

        if($validate->rowcount()>0){
          echo"<script>alert('email or username is already taken')</script>";

        }else{

          $insert = $conn->prepare("INSERT INTO users (username, email, mypassword, img, type) VALUES (:username, :email, :mypassword, :img, :type)");

          $insert->execute([
            ':username' => $username,
            ':email' => $email,
            ':mypassword' => password_hash($password, PASSWORD_DEFAULT),
            ':img' => $img,
            ':type' => $type,
          ]); 
  
          header("location: login.php");
        }

        }

       
    } else {
      echo"<script>alert('passwords dont match')</script>";
    }
  }
}
?>
   
    <!-- HOME -->
    <section class="section-hero overlay inner-page bg-image" style="background-image: url('../images/hero_1.jpg');" id="home-section">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <h1 class="text-white font-weight-bold">Register</h1>
            <div class="custom-breadcrumbs">
              <a href="<?php echo APPURL; ?>">Home</a> <span class="mx-2 slash">/</span>
              <span class="text-white"><strong>Register</strong></span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-5">
            <form action="register.php" class="p-4 border rounded" method="POST">

              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="text-black" for="fname">Username</label>
                  <input type="text" id="fname" class="form-control" placeholder="Username" name="username">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="text-black" for="fname">Email</label>
                  <input type="text" id="fname" class="form-control" placeholder="Email address" name="email">
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                  <select name="type" class="selectpicker" data-style="btn-white btn-lg" data-width="100%" data-live-search="true" title="Select User Type">
                    <option>Employee</option>
                    <option>Company</option>
                  </select>
                </div>

              </div>
              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="text-black" for="fname">Password</label>
                  <input type="password" id="fname" class="form-control" placeholder="Password" name="password">
                </div>
              </div>
              <div class="row form-group mb-4">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="text-black" for="fname">Re-Type Password</label>
                  <input type="password" id="fname" class="form-control" placeholder="Re-type Password" name="re-password">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" name="submit" value="Sign Up" class="btn px-4 btn-primary text-white">
                </div>
              </div>

            </form>
          </div>
      
        </div>
      </div>
    </section>
    <?php 
   require "../includes/footer.php";
   ?>
    
    