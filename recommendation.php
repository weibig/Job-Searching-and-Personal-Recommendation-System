
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
  <?php
  session_start();  // 啟用交談期
  // 檢查Session變數是否存在, 表示是否已成功登入
  if ( $_SESSION["login_session"] != true ) 
    header("Location: signup.php");

  $link = mysqli_connect("localhost","root",
                            "","final_project")
          or die("無法開啟MySQL資料庫連接!<br/>");
 //送出UTF8編碼的MySQL指令
  mysqli_query($link, 'SET NAMES utf8');
  $sqlLog = 'SELECT CID, JName FROM job_needs_ability, User_has_ability WHERE job_needs_ability.AID = User_has_ability.AID';
     // echo $logEmail;
     // echo $logPwd;
     // 執行SQL查詢
     $result = mysqli_query($link, $sqlLog);
    while($row = mysqli_fetch_array($result)){
      $datas[] = $row;


    }

  ?>
  
  <div class="site-wrap">

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
                  <?php
                  if($_SESSION["login_session"] == true)
                  {

                  ?>

                  <li class="active"><a href="index.php"><span>Welcome Back!!</span></a></li>

                  <?php
                  }else{
                  ?>
                  <li class="active"><a href="index.php"><span>Home</span></a></li>


                  <?php
                  }
                  ?>
                
                <li class="has-children">
                  <a href="recommendation.php"><span>Recommendation</span></a>
                  <ul class="dropdown arrow-top"> 
                    <li><a href="result.php?type=jobs">Jobs</a></li>
                    <li><a href="result.php?type=industry">Industry</a></li>
                    <li><a href="result.php?type=company">Company</a></li>
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


    <div class="site-section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6">
            <img src="images/img_1.jpg" alt="Image" class="img-fluid rounded">
          </div>
          <div class="col-md-5 ml-auto">
            <h2 class="text-primary mb-3">View your profile</h2>
            <!-- p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam voluptates a explicabo delectus sed labore dolor enim optio odio at!</p>
            <p class="mb-4">Adipisci dolore reprehenderit est et assumenda veritatis, ex voluptate odio consequuntur quo ipsa accusamus dicta laborum exercitationem aspernatur reiciendis perspiciatis!</p> -->

            <ul class="ul-check list-unstyled success">
              <li>Adipisci dolore reprehenderit</li>
              <li>Accusamus dicta laborum</li>
              <li>Delectus sed labore</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
        <?php 
for($i = 0; $i < sizeof($datas); $i++)
echo '
            <div class="d-block d-md-flex listing-horizontal">
              <a href="result-single.php" class="img d-block" style="background-image: url(\'images/img_2.jpg\')">
                <span class="category">Restaurants</span>
              </a>
</table>
              <div class="lh-content">
                <a href="result-single.php" class="bookmark"><span class="icon-heart"></span></a>
                <h3><a href="result-single.php">'.$datas[$i][0].'</a></h3>
                <p>'.$datas[$i][1].'</p>
                <p>
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-secondary"></span>
                  <span>(492 Reviews)</span>
                </p>

                
              </div>

            </div>
';?>
    <?php
    for($i=1;$i<=mysql_num_rows($data);$i++){
    $rs=mysql_fetch_row($data);
    ?>
      <!-- <tr>
        <td><?php echo $rs[0]?></td>
        <td><?php echo $rs[1]?></td>
        <td><?php echo $rs[2]?></td>
        <td><?php echo $rs[3]?></td>
        <td><?php echo $rs[4]?></td>
      </tr> -->
    
    
<!-- first result -->
    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-10">

            <div class="d-block d-md-flex listing-horizontal">

              <a href="result-single.php" class="img d-block" style="background-image: url('images/img_2.jpg')">
                <span class="category">Restaurants</span>
              </a>

              <div class="lh-content">
                <a href="result-single.php" class="bookmark"><span class="icon-heart"></span></a>
                <h3><a href="result-single.php">Jones Grill &amp; Restaurants</a></h3>
                <p>Don St, Brooklyn, New York</p>
                <p>
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-secondary"></span>
                  <span>(492 Reviews)</span>
                </p>

                
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
<!-- first result end -->
    <?php
      }
    ?>



    <div class="py-5 bg-primary">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 mr-auto mb-4 mb-lg-0">
            <h2 class="mb-3 mt-0 text-white">Let's get started. Create your account</h2>
            <p class="mb-0 text-white">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          </div>
          <div class="col-lg-4">
            <p class="mb-0"><a href="signup.php" class="btn btn-outline-white text-white btn-md px-5 font-weight-bold btn-md-block">Sign Up</a></p>
          </div>
        </div>
      </div>
    </div>
    
    <footer class="site-footer">
      <div class="container">
        <div class="row pt-5 mt-5">
          <div class="col-12 text-md-center text-left">
            <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>
        </div>
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