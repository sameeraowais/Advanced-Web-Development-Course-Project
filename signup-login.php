<!DOCTYPE html>
<html dir="rtl" lang="ar">

<head> 
  
  <meta charset="utf-8">

  <title>تسجيل الدخول</title>

  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>
  
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex align-items-center justify-content-between">
      
      <div class="logo">
        <h1><a href="index.php"><span><img src="assets/img/logo.png"></span></a></h1>
      </div>
      
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="active" href="login-signup.php">تسجيل الدخول</a></li>
          <li><a href="index.php">الرئيسية</a></li>
          <div class="left-log"></div>
          <ul>
          <li class="dropdown"><a href="#"><img src="assets/img/sar.svg" style="width:15px; height:15px; margin-left:5px;">العربية<i class="bi bi-chevron-down"></a></i>
          <ul>
            <li><a href="#">English<img src="assets/img/English-icon.png" style="width:15px; height:15px; margin-left:12px;"></a></li>
          </ul>
          </li>
        </ul>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <div class="login-signup">
    <section id="hero">
      <?php
      if(isset($_GET['email'])) {
        $email=$_GET['email'];
      } 
      if(isset($_GET['name'])) {
        $name=$_GET['name'];
      } 
      ?>
      
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
            <div data-aos="zoom-out">
              <div class="login-signup" >
                <div class="wrapper">
                   <div class="form-container">
                      <div class="slide-controls">
                        <input type="radio" name="slide" id="login">
                        <input type="radio" name="slide" id="signup" checked>
                        <label for="login" class="slide login">تسجيل الدخول</label>
                        <label for="signup" class="slide signup">انشاء حساب جديد</label>
                        <div class="slider-tab"></div>
                      </div>
                      <div class="form-inner">

                        <form method="GET" class="signup">
                          <div class="field">
                            <input type="text" name="name" placeholder="* الاسم" value="<?php echo $name?>">
                          </div>
                          <div class="field">
                            <input type="text" name="email" placeholder="* البريد الإلكتروني" value="<?php echo $email?>">
                          </div>
                          <div class="field">
                            <input type="password" id="pass1" name="pass" placeholder="* كلمة المرور">
                          </div>
                          <div class="field">
                            <input type="password" id="pass2" name="pass_confirm" placeholder="* تأكيد كلمة المرور">
                          </div>
                          <div class="pass-link">
                            <input type="checkbox" onclick="show()" style="margin-right:-2px; height: 15px; width: 15px;"> اظهار كلمة المرور
                          </div>
                          <script>
                          function show() {
                          var x = document.getElementById("pass1");
                          var y = document.getElementById("pass2");
                          if(x.type === "password") {
                            x.type = "text";
                            y.type = "text";
                          } else {
                            x.type = "password";
                            y.type = "password";
                            }
                          }
                          </script>
                          <div class="field btn">
                            <div class="btn-layer"></div>
                            <input type="submit" name="signup" value="التسجيل">
                          </div><br><br>
                          
                          <?php 
                          include 'connect.php';

                          if(isset($_GET['signup']))
                          {
                            $name = $_GET['name'];
                            $email = $_GET['email'];
                            $pass = $_GET['pass'];
                            $pass_confirm = $_GET['pass_confirm'];
                            $err=array();
                            $found="false";
                          
                            if(empty($name) || empty($email) || empty($pass) || empty($pass_confirm)) {  
                              array_push($err,"* الرجاء ملئ جميع الحقول المطلوبة!");
                              $found="true";
                            }
                            if(!empty($name) && !preg_match ('/^([a-zA-Z_ ]|[\p{Arabic}])*$/u',$name)) {
                              array_push($err,"* يجب ان يحتوي الاسم على حروف ومسافات فقط!");
                              $found="true";
                            }
                            if(!empty($email) && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
                              array_push($err,"* عنوان البريد الإلكتروني غير صحيح!");
                              $found="true";
                            }
                            if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
                              $sql = 'SELECT * FROM user';
                              $query = mysqli_query($dbc, $sql);
                              if(!$query) {
                                print('<p>Could not connect to MySQL because: <b>' . mysqli_error($dbc) . '</b></p>');
                              }
                              while($row=mysqli_fetch_array($query))
                              {
                                  if($row['email'] == $email)
                                  {
                                    array_push($err,"* البريد الإلكتروني مسجل مسبقًا!");
                                    $found="true";
                                  }
                              }
                            }
                            if(!empty($pass) && strlen($pass) <= 8) {
                              array_push($err,"* يجب أن تتكون كلمة المرور من 8 خانات على الأقل!");
                              $found="true";
                            }
                            if(!empty($pass) && !preg_match("#[0-9]+#",$pass)) {
                              array_push($err,"* يجب أن تحتوي كلمة المرور على رقم واحد على الأقل!");
                              $found="true";
                            }
                            if(!empty($pass) && !preg_match("#[A-Z]+#",$pass)) {
                              array_push($err,"* يجب أن تحتوي كلمة المرور على حرف كبير واحد على الأقل!");
                              $found="true";
                            }
                            if(!empty($pass) && !preg_match("#[a-z]+#",$pass)) {
                              array_push($err,"* يجب أن تحتوي كلمة المرور على حرف صغير واحد على الأقل!");
                              $found="true";
                            }
                            if(!empty($pass) && !preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $pass)) {
                              array_push($err,"* يجب أن تحتوي كلمة المرور على رمز واحد على الأقل!");
                              $found="true";
                            }
                            if(!empty($pass) && $pass != $pass_confirm ) {
                              array_push($err,"* كلمة المرور وتأكيد كلمة المرور غير متطابقين!");
                              $found="true";
                            }
                            if($found=="true"){
                              echo '<div class="alert alert-danger">';
                              foreach($err as $value) {
                                echo $value, '<br>';
                              }
                              echo '</div>';
                            }
                            else {
                              $sql = "INSERT user SET email='$email', pass='$pass', name='$name', type=0";
                              $query = mysqli_query($dbc, $sql);
                              if(!$query) {
                                print ('<p>Could not select the database because: <b>' . mysqli_error($dbc) . '</b></p>');
                              }

                              $file =fopen("user.tex","a");
                              fwrite($file,"name :");
                              fwrite($file,$name. "\n");
                              fwrite($file,"Email :");
                              fwrite($file,$email. "\n");
                              fwrite($file,"password :");
                              fwrite($file,$pass. "\n");
                              fwrite($file,"---------------- \n");
                              fclose($file);

                              echo "<script>window.location.href='login-signup.php';</script>";
                              exit;
                            }
                          }  
                          mysqli_close($dbc); 
                          ?>
                        </form>
                        
                        <form method="GET" action="login-signup.php" class="login">
                          <div class="field">
                            <input type="text" name="email" placeholder="* البريد الإلكتروني" value="<?php echo $email?>">
                          </div>
                          <div class="field">
                              <input type="password" id="pass" name="pass" placeholder="* كلمة المرور">
                              <div class="pass-link">
                                <input type="checkbox" onclick="myFunction()" style="margin-right:-2px; height: 15px; width: 15px;"> اظهار كلمة المرور
                              </div>

                              <script>
                              function myFunction() {
                                var x = document.getElementById("pass");
                                if (x.type === "password") {
                                  x.type = "text";
                                } else {
                                  x.type = "password";
                                }
                              }
                              </script>
                              
                            </div>
                            <br>
                          <div class="pass-link">
                            <a href="#">نسيت كلمة المرور؟</a>
                          </div>
                          <div class="field btn">
                            <div class="btn-layer"></div>
                            <input type="submit" name="login" value="الدخول">
                          </div><br>
                          
                          <?php
                          include 'connect.php';
                          
                          if(isset($_GET['login'])) {
                            $email = $_GET['email'];
                            $pass = $_GET['pass'];
                            $err="";
                            $found="false";
                            
                            if (empty($pass) && empty($email)) {   
                              $err="* الرجاء ادخال البريد الإلكتروني وكلمة المرور!"; 
                              $found="true";
                            }
                            elseif(!$email) { 
                              $err="* الرجاء ادخال البريد الإلكتروني!";
                              $found="true";
                            } 
                            elseif(!$pass) {  
                              $err="* الرجاء ادخال كلمة المرور!";
                              $found="true";
                            }
                            else { 
                              while($row=mysqli_fetch_array($query)) {
                                if($row['email'] == $email && $row['pass'] == $pass)
                                {
                                  header("Location: home.php");
                                  exit();   
                                }
                              }
                              $err="* البريد الإلكتروني وكلمة المرور غير متطابقين!";
                              $found="true";
                            }
                            if($found == "true") {
                              echo '<br><div class="alert alert-danger">
                              '.$err.'
                              </div>';
                            }
                          }
                          mysqli_close($dbc);
                          ?>
                          
                        </form>
                                              
                        <script>
                        const loginText = document.querySelector(".title-text .login");
                        const signupText = document.querySelector(".title-text .signup");
                        const loginForm = document.querySelector("form.login");
                        const signupForm = document.querySelector("form.signup");
                        const loginBtn = document.querySelector("label.login");
                        const signupBtn = document.querySelector("label.signup");
                        const signupLink = document.querySelector("form .signup-link a");
                        const loginLink = document.querySelector("form .login-link a");

                        loginBtn.onclick = (()=>{
                          signupForm.style.marginRight = "-50%";
                          signupText.style.marginRight = "-50%";
                        });
                        signupBtn.onclick = (()=>{
                          signupForm.style.marginRight = "0%";
                          signupText.style.marginRight = "0%";
                        });
                        loginLink.onclick = (()=>{
                          loginBtn.click();
                          return false;
                        });

                        </script>
                      </div>
                   </div>
                </div>
              </div>
        </div>
      </div>
      <div class="col-lg-5 order-1 order-lg-2" data-aos="zoom-out" data-aos-delay="300">
        <img src="assets/img/account.png" class="img-fluid animated" alt="">
      </div>
    </div>
  </div>

 

</section><!-- End Hero -->
</div>

<!-- ======= Footer ======= -->
<footer id="footer">
  <div class="footer-top">
    <div class="container">
    <div class="row">

<div class="col-lg-4 col-md-6">
  <div class="footer-info">
    <h3>Hello World Platform</h3>
    <p class="pb-3"><em>منصة مخصصة للمبرمجين، تهتم بمجموعة كبيرة من لغات البرمجة.</em></p>
    <p>
      <strong>الهاتف:</strong> xxx xxx xxx xxx+<br>
      <strong>البريد الإلكتروني:</strong> support@helloworld.com<br>
    </p>
    <div class="social-links mt-3">
      <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
      <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
      <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
      <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
      <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
    </div>
  </div>
</div>

<div class="col-lg-2 col-md-6 footer-links">
  <h4>روابط مهمة</h4>
  <ul>
    <li><i class="bx bx-chevron-right"></i> <a href="#">سياسة الخصوصية</a></li>
    <li><i class="bx bx-chevron-right"></i> <a href="#">الشروط والأحكام</a></li>
    <li><i class="bx bx-chevron-right"></i> <a href="#">الخصوصية</a></li>
    <li><i class="bx bx-chevron-right"></i> <a href="#">خدمة العملاء</a></li>
    <li><i class="bx bx-chevron-right"></i> <a href="#">الدعم الفني</a></li>
  </ul>
</div>

<div class="col-lg-2 col-md-6 footer-links">
  <h4>الخدمات</h4>
  <ul>
    <li><i class="bx bx-chevron-right"></i> <a href="#">الدورات التدريبية</a></li>
    <li><i class="bx bx-chevron-right"></i> <a href="#">المكتبة</a></li>
    <li><i class="bx bx-chevron-right"></i> <a href="#">المشاريع</a></li>
    <li><i class="bx bx-chevron-right"></i> <a href="#">الاستفسارات</a></li>
    <li><i class="bx bx-chevron-right"></i> <a href="#">المسابقات التقنية</a></li>
  </ul>
</div>

<div class="col-lg-4 col-md-6 footer-newsletter">
  <h4>النشرة البريدية</h4>
  <p>اشترك في النشرة البريدية لدينا ليصلك كل جديدنا.</p>
  <form action="" method="post">
    <input type="email" name="email" placeholder="ادخل بريدك الإلكتروني"><input type="submit" value="اشترك">
  </form>

</div>

</div>
    </div>
  </div>

  <div class="container">
    <div class="copyright">
    2022 &copy; جميع الحقوق محفوظة لمنصة <strong>Hello World</strong>
    </div>
  </div>
</footer>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>

  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="https://code.iconify.design/2/2.1.2/iconify.min.js"></script>
  <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
  <script src="assets/js/main.js"></script>

</body>
</html>