
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Browse</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Rubik:400,700" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/rangeslider.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body>
  <!-- login -->
  <?php
  session_start();  // 啟用交談期
  // 建立MySQL的資料庫連接 
  $link = mysqli_connect("localhost","root",
                            "","final_project")
          or die("無法開啟MySQL資料庫連接!<br/>");
  //送出UTF8編碼的MySQL指令
  mysqli_query($link, 'SET NAMES utf8'); 
  $_SESSION["login_session"] = false;


  $logEmail = "";  $logPwd = "";
  // echo $_POST["logEmail"];
  // echo $_POST["logPwd"];

  // 取得login欄位值
  if ( isset($_POST["logEmail"]) )
     $logEmail = $_POST["logEmail"];
  if ( isset($_POST["logPwd"]) )
     $logPwd = $_POST["logPwd"];


   $signName = "";  $gender = ""; $ability1 = "";  $ability2 = ""; $ability3 = ""; $ability4 = "";  $ability5 = ""; $ability6 = "";  $ability7 = ""; $ability8 = "";  $ability9 = ""; $ability10 = "";  $signEmail = "";  $signTel = "";  $signAge = "";  $signPwd1 = ""; $signPwd2 = ""; 
   

  // 取得signup
  if ( isset($_POST["signName"]) )
     $signName = $_POST["signName"];
  if ( isset($_POST["gender"]) )
     $gender = $_POST["gender"];

  // ability
  if ( isset($_POST["ability1"]) )
     $ability1 = $_POST["ability1"];
  if ( isset($_POST["ability2"]) )
     $ability2 = $_POST["ability2"];
  if ( isset($_POST["ability3"]) )
     $ability3 = $_POST["ability3"];
  if ( isset($_POST["ability4"]) )
     $ability4 = $_POST["ability4"];
  if ( isset($_POST["ability5"]) )
     $ability5 = $_POST["ability5"];
  if ( isset($_POST["ability6"]) )
     $ability6 = $_POST["ability6"];
     if ( isset($_POST["ability7"]) )
     $ability7 = $_POST["ability7"];
  if ( isset($_POST["ability8"]) )
     $ability8 = $_POST["ability8"];
  if ( isset($_POST["ability9"]) )
     $ability9 = $_POST["ability9"];
  if ( isset($_POST["ability10"]) )
     $ability10 = $_POST["ability10"];




  if ( isset($_POST["signEmail"]) )
     $signEmail = $_POST["signEmail"];
  if ( isset($_POST["signTel"]) )
     $signTel = $_POST["signTel"];
  if ( isset($_POST["signAge"]) )
     $signAge = $_POST["signAge"];
  if ( isset($_POST["signPwd1"]) )
     $signPwd1 = $_POST["signPwd1"];
  if ( isset($_POST["signPwd2"]) )
     $signPwd1 = $_POST["signPwd2"];

  // 檢查是否輸入使用者名稱和密碼
  if ($logEmail != "" && $logPwd != "") {
    // echo 123;
     
     
     // 建立SQL指令字串
     $sqlLog = "SELECT * FROM user WHERE password='";
     $sqlLog.= $logPwd."' AND email='".$logEmail."'";
     // echo $logEmail;
     // echo $logPwd;
     // 執行SQL查詢
     $result = mysqli_query($link, $sqlLog);
     $total_records = mysqli_num_rows($result);
     // 是否有查詢到使用者記錄
     if ( $total_records > 0 ) {
        // 成功登入, 指定Session變數
        $_SESSION["login_session"] = true;
        header("Location: index.php");
     } else {  // 登入失敗
        // echo "<center><font color='red'>";
        // echo "使用者名稱或密碼錯誤!<br/>";
        // echo "</font>";
        $_SESSION["login_session"] = false;
     }
     
  }
  else if($signName != "" && $gender != "" &&  $signEmail != "" &&  $signTel != "" &&  $signAge != "" &&  $signPwd1 != "" && $signPwd2 != "" && ($signPwd1 == $signPwd2))
  {

      
    $sqlSign = "INSERT INTO user( Name, Gender, Email, Telephone, Age, Password) VALUES (".$signName.","$gender.",".$signEmail",".$signTel",".$signAge",".$signPwd1.")"


    $sqlAbility = "INSERT INTO User has ability( UID, AID) VALUES (".$ability1 .",". $ability2 .",". $ability3.",". $ability4 .",". $ability5 .",". $ability6 .",".  $ability7 .",". $ability8 .",".  $ability9 .",". $ability10 .")"

    if ($link->multi_query($sqlSign.$sqlAbility) === TRUE)
      echo "註冊成功";
  }

  if($signPwd1 != $signPwd2)
  {
      echo "密碼輸入錯誤";
  }

  mysqli_close($link);  // 關閉資料庫連接  
  ?>

  <div class ="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    
    <header class="site-navbar" role="banner">

      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-11 col-xl-2">
            <h1 class="mb-0 site-logo"><a href="index.php" class="text-white h2 mb-0">Browse</a></h1>
          </div>
          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
                <li class="active"><a href="index.php"><span>Home</span></a></li>
                <li class="has-children">
                  <a href="recommendation.php"><span>Recommendation</span></a>
                  <ul class="dropdown arrow-top"> 
                    <li><a href="#">Jobs</a></li>
                    <li><a href="#">Industry</a></li>
                    <li><a href="#">Talents</a></li>
                    <li><a href="#">Company</a></li>
                  </ul>
                </li>
                <li><a href="result.php"><span>Result List</span></a></li>
              </ul>
            </nav>
          </div>


          <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

          </div>

        </div>
      </div>
      
    </header>

  

    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(images/hero_1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">
            
            
            <div class="row justify-content-center">
              <div class="col-md-8 text-center">
                <h1>Sign Up / Login</h1>
                <!-- <p data-aos="fade-up" data-aos-delay="100">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate beatae quisquam perspiciatis adipisci ipsam quam.</p> -->
              </div>
            </div>

            
          </div>
        </div>
      </div>
    </div>  

    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mb-5">

            

            <form action="#" class="p-5 bg-white" style="margin-top: -150px;">
             

              <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                  <label class="text-black" for="name">Name</label>
                  <input name="signName" type="text" id="name" class="form-control">
                </div>
                <div class="col-md-6">
                  <label  class="text-black" for="gender">Gender</label>
                  <br>
                  <input name="gender" type="radio" value="male" > Male
                  <br>
                  <input name="gender" type="radio" value="female" > Female
                </div>
              </div>

              <!-- ability choose -->
              <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                  <label class="text-black" for="name">Ability</label>
                  <br>
                  <input name="ability1" type="checkbox" id="ability" > Male
                  <br>
                  <input name="ability2" type="checkbox" id="ability" > Female
                  <br>
                  <input name="ability3" type="checkbox" id="ability" > Male
                  <br>
                  <input name="ability4" type="checkbox" id="ability" > Female
                  <br>
                  <input name="ability5" type="checkbox" id="ability" > Female
                </div>
                <div class="col-md-6 mb-3 mb-md-0">
                  <br>
                  <input name="ability6" type="checkbox" id="ability" > Male
                  <br>
                  <input name="ability7" type="checkbox" id="ability" > Female
                  <br>
                  <input name="ability8" type="checkbox" id="ability" > Male
                  <br>
                  <input name="ability9" type="checkbox" id="ability" > Female
                  <br>
                  <input name="ability10" type="checkbox" id="ability" > Female
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="logEmail">Email</label> 
                  <input name="signEmail" type="logEmail" id="logEmail" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="telephone">Telephone</label> 
                  <input name="signTel" type="tel" id="telephone" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="age">Age</label> 
                  <input name="signAge" type="number" id="age" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="pass1">Password</label> 
                  <input name="signPwd1" type="password" id="pass1" class="form-control">
                </div>
              </div>
              
              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="pass2">Re-type Password</label> 
                  <input name="signPwd2" type="password" id="pass2" class="form-control">
                </div>
              </div>
              

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Sign Up" class="btn btn-primary btn-md text-white">
                </div>
              </div>

  
            </form>
          </div>
          <div class="col-md-6 mb-5">

            

            <form action="#" class="p-5 bg-white" style="margin-top: -150px;" method="POST">
             

              

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="logEmail">Email</label> 
                  <input name="logEmail" type="logEmail" id="email2" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="pass1">Password</label> 
                  <input name="logPwd" type="password" id="pass3" class="form-control">
                </div>
              </div>
              
              

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Log In" class="btn btn-primary btn-md text-white">
                </div>
              </div>

  
            </form>
          </div>
        </div>
      </div>
    </div>
    
    <footer class="site-footer">
      <div class="col-12 text-md-center text-left">
        <p>
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        </p>
      </div>
    </footer>
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/rangeslider.min.js"></script>
  
  <script src="js/main.js"></script>
  
  </body>
</html>