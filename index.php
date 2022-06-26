<!DOCTYPE html>
<html dir="rtl" lang="ar">

<head>
  
  <meta charset="utf-8">

  <title>Hello World</title>

  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

</head>

<body>

  <!-- ======= Header ======= -->
  <div class="main">
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
       <h1><a href="index.php"><span><img src="assets/img/logo.png"></span></a></h1>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">الرئيسية</a></li>
          <li><a class="nav-link scrollto" href="#details">عن المنصة</a></li>
          <li><a class="nav-link scrollto" href="#features">خدماتنا</a></li>
          <li><a class="nav-link scrollto" href="#contact">تواصل معنا</a></li>
          
          <div class="left"></div>
          <a href="login-signup.php"><button class="open-button"><i class="fa fa-sign-in" style="font-size:14px"></i>تسجيل الدخول</button></a>
          
          <li class="dropdown"><a href="#"><img src="assets/img/sar.svg" style="width:15px; height:15px; margin-left:5px;">العربية<i class="bi bi-chevron-down"></a></i>
          <ul>
            <li><a href="#">English<img src="assets/img/English-icon.png" style="width:15px; height:15px; margin-left:12px;"></a></li>
          </ul>
        </ul>
      </nav>
    </div>
  </header>
  </div>
  

  <!-- ======= Hero Section ======= -->
  <div class="index">
  <section id="hero">
    <div class="container">
      <div class="row justify-content-between">
        <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
          <div data-aos="zoom-out">
            <h1>;print('<span>Hello World!</span>')</h1>
            <h2>منصة مخصصة للمبرمجين، تهتم بمجموعة كبيرة من لغات البرمجة.</h2>
          </div>
        </div>
        <div class="col-lg-5 order-1 order-lg-2" data-aos="zoom-out" data-aos-delay="300">
          <img src="assets/img/hero.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
      <defs>
        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
      </defs>
      <g class="wave1">
        <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
      </g>
      <g class="wave2">
        <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
      </g>
      <g class="wave3">
        <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
      </g>
    </svg>

  </section><!-- End Hero -->
  </div>

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="details" class="details">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>عن المنصة</h2>
        </div>

        <div class="row content">
          <div class="col-md-4" data-aos="fade-right">
            <img src="assets/img/about1.png" class="img-fluid" alt="">
          </div>
          <div class="col-md-8 pt-4" data-aos="fade-up">
            <div class="vl"></div>
            <h3>ماهي منصة Hello World ؟</h3><br><br>
            <p>
              هي منصة عربية تقنية تهدف إلى ربط المبرمجين
  ، حيث  تساعدهم في جميع مجالات التكنولوجيا، من خلال
  دمج جميع الخدمات التي يحتاجها كل مبرمج في منصة واحدة ، مما يساعد ذلك في
  توفير وقتهم وجهدهم في البحث عن أي خدمة.
              </p>
          </div>
        </div>
      </div>
    </section><!-- End About Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>خدماتنا</h2>
        </div>
        <div class="row" data-aos="fade-left">
          <div class="col-lg-4 col-md-4">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="50">
              <i class="ri-movie-line" style="color: #ffbb2c;"></i>
              <h3><a href="">الدورات التدريبية</a></h3>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 mt-4 mt-md-0">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
              <i class="ri-book-3-line" style="color: #5578ff;"></i>
              <h3><a href="">المكتبة</a></h3>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 mt-4 mt-md-0">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="150">
              <i class="ri-code-s-slash-line" style="color: #e80368;"></i>
              <h3><a href="">المشاريع</a></h3>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 mt-4">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
              <i class="ri-question-answer-line" style="color: #e361ff;"></i>
              <h3><a href="">الاستفسارات</a></h3>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 mt-4">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="250">
              <i class="ri-file-list-3-line" style="color: #47aeff;"></i>
              <h3><a href="">الاختبارات القصيرة</a></h3>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 mt-4">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="300">
              <i class="ri-gradienter-line" style="color: #ffa76e;"></i>
              <h3><a href="">فرص وظيفية تقنية</a></h3>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 mt-4">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="350">
              <i class="ri-focus-2-line" style="color: #11dbcf;"></i>
              <h3><a href="">فرص تدريبية</a></h3>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 mt-4">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="400">
              <i class="ri-team-line" style="color: #4233ff;"></i>
              <h3><a href="">المسابقات التقنية</a></h3>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 mt-4">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="450">
              <i class="ri-article-line" style="color: #8E44AD;"></i>
              <h3><a href="">الاخبار التقنية</a></h3>
            </div>
          </div>
      </div>
    </section><!-- End Features Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
    <?php
    if(isset($_GET['email'])) {
      $email=$_GET['email'];
    } 
    if(isset($_GET['name'])) {
      $name=$_GET['name'];
    }
    if(isset($_GET['subject'])) {
      $subject=$_GET['subject'];
    }  
    if(isset($_GET['message'])) {
      $message=$_GET['message'];
    } 
    ?>
    
    <div class="container">
      
      <div class="section-title" data-aos="fade-up">
        <h2>تواصل معنا</h2>
      </div>

      <div class="row">
        <div class="col-lg-12 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="200">

          <form action="#contact" method="GET" role="form" class="php-email-form">
            <div class="row">
              <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="* الاسم" value="<?php echo $name?>">
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="text" class="form-control" name="email" id="email" placeholder="* البريد الإلكتروني" value="<?php echo $email?>">
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="* عنوان الرسالة" value="<?php echo $subject?>">
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="* محتوى الرسالة"><?php echo $message?></textarea>
              </div>
              <div class="text-center"><button type="submit" name="submit" >ارسل</button></div>
            </div>
            
            <?php 
            if(isset($_GET['submit'])) {
              $name = $_GET['name'];
              $email = $_GET['email'];
              $subject = $_GET['subject'];
              $message = $_GET['message'];
              $err=array();
              $found="false";
              
              if (empty($name) || empty($email) || empty($subject) || empty($message)) {  
                array_push($err,"* الرجاء ملئ جميع الحقول المطلوبة!");
                $found="true";
              }
              if (!empty($name) && !preg_match ('/^([a-zA-Z_ ]|[\p{Arabic}])*$/u',$name)) {
                array_push($err,"* يجب ان يحتوي الاسم على حروف ومسافات فقط!");
                $found="true";
              }
              if (!empty($email) && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
                array_push($err,"* عنوان البريد الإلكتروني غير صحيح!");
                $found="true";
              }
              if(!empty($subject) && !preg_match("#[أ-يa-zA-Z]+#",$subject)) {
                array_push($err,"* يجب أن يحتوي عنوان الرسالة على حرف واحد على الأقل!");
                $found="true";
              }
              if(!empty($message) && !preg_match("#[أ-يa-zA-Z]+#",$message)) {
                array_push($err,"* يجب أن يحتوي محتوى الرسالة على حرف واحد على الأقل!");
                $found="true";
              }
              
              echo '<br>';
              if($found=="true"){
                echo '<div class="alert alert-danger">';
              }
              else{
                array_push($err,"<img src=\"assets/img/check-mark.png\" style=\"height:20px; width: 20px;\">
                شكرًا لتواصلك معنا، سنعاود الرد عليك في اسرع وقت ممكن.");
                echo '<div class="alert alert-success">';
              }
              
              foreach($err as $value){
                echo $value, '<br>';
              }
              echo '</div>';
            }
            ?>
            <br>
          </form>
        </div>
      </div>
    </div>
  </section><!-- End Contact Section -->
</main><!-- End main -->

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
