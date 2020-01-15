
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


  

    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(images/hero_1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">
            
            
            <div class="row justify-content-center">
              <div class="col-md-8 text-center">
                <h1>Everything you need</h1>
              </div>
            </div>

            
          </div>
        </div>
      </div>
    </div>  
<?php
    $datas = array();
    $link = mysqli_connect("localhost","root","","final_project") or die("無法開啟MySQL資料庫連接!<br/>");
    mysqli_query($link, "set names 'utf8'"); 
    if(@$_GET["type"]=="jobs")
      $category = "jobs";
    else if(@$_GET["type"]=="industry")
      $category = "industry";
    else if(@$_GET["type"]=="company")
      $category = "company";
    else
      $category = "company";


    $sql = "SELECT * FROM $category";
    $result = @mysqli_query($link, $sql);
    $total_records = @mysqli_num_rows($result);
    while($row = @mysqli_fetch_array($result)){
      $datas[] = $row;
    }
    mysqli_close($link);  // 關閉資料庫連接   
?>
    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">

            <div class="mb-5 border-bottom pb-5">
            <?php
              $company_info;
              echo "<h3>". @$company ."</h3>";
            ?>

              <div class="row">
                <div class="col-md-12">
                  <h2 class="mb-5 text-primary">Contact us</h2>
<?php 
$i = $_GET['index'];
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

                </div>
              </div>
            </div>

          </div>

        </div>
      </div>
    </div>

    
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