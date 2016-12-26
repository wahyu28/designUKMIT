<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="img/LAMBANG_UKM_16.png" type="image/x-icon">
    <title>Design UKM IT</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/normalize.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="css/animate.css">
</head>

<body>
    <header>
        <ul class="navigation">
          <li><a class="brand" href="#">UKM IT</a></li>
          <li><a href="#">Sign Up</a></li>
          <li><a href="#">Contact</a></li>
          <li><a href="#">Gallery</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Profil</a></li>
          <li><a href="#">Home</a></li>
        </ul>
        <!-- <ul class="mini-navigation">
          <li><a class="brand" href="#">UKM IT</a></li>
          <li><a href="#news">News</a></li>
          <li><a href="#contact">Contact</a></li>
          <li class="right"><a href="#about">About</a></li>
          <li><a href="#news">Home</a></li>
        </ul> -->

        <div id="mySidenav" class="sidenav">
          <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
          <a href="#">Home</a>
          <a href="#">Profil</a>
          <a href="#">About</a>
          <a href="#">Gallery</a>
          <a href="#">Contact</a>
          <a href="#">Login</a>
          <a href="#">Sign Up</a>
        </div>
        <span id="smallnav" style="font-size:30px;cursor:pointer;" onclick="openNav()">&#9776;</span>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 text-center head" style="margin-top: 100px" >
                    <h1>UKM IT - STIKOMCKI</h1>
                    <p>#Salam Koding Otak Pusing Jari Keriting</p>
                    <a href="#" class="btn btn=primary btnloghead btn-lg hidden-sm hidden-xs">Login</a>
                    <a href="#" class="btn btn-warning btnlearn btn-lg js--section-to-feature hidden-sm hidden-xs">Learn More</a>
                </div>
            </div>
        </div>
    </header>

    <section id="latest_news">
        <div class="container">
            <div class="row">
                <div class="col-md-12 atas">
                    <h1 class="text-center">Berita Terbaru</h1>
                </div>
            </div>
            <div class="row text-center news-kedua">
                <div class="col-lg-4 col-md-12">
                  <div class="col-lg-12 col-md-4 col-sm-6 col-xs-12" >
                    <img src="img/dummy.png" class="img img-responsive" width="360px" height="200px" alt="">
                  </div>
                  <div class="col-lg-12 col-md-8 col-sm-6 col-xs-12">
                    <a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum, facilis!</a>
                    <p class="hidden-sm hidden-xs text-left">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque rerum assumenda laborum cumque accusamus quis, ut aliquam perferendis eos quidem laudantium possimus velit. Perferendis, modi!
                    </p>
                  </div>
                </div>
            </div>
            <div class="col-md-12 text-center news-ketiga">
              <a href="#">Read More News <i class="fa fa-home"></i></a>
            </div>
        </div>
    </section>




    <script type="text/javascript" src="js/jquery.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script type="text/javascript" src="js/myJs.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>