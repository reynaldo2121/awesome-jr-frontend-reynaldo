<!DOCTYPE html>
<html lang="en">
<head>    
    <title>Github</title>

    <!-- Meta Tags -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="description" content="Penyedia Web Builder, Hosting, dan Domain Terpercaya di Seluruh Indonesia">
    <meta name="keywords" content="Web Builder, Domain, Hosting">
    <meta name="author" content="Afrikgo">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="<?php echo base_url('asset/bower_components/bootstrap/dist/css/bootstrap.min.css');  ?>">


    <!-- Icon -->
<!--     <link rel="shortcut icon"                    href="<?php //echo base_url('asset/tampilan_utama/img/logo_favicong.ico');?>">
    <link rel="icon" sizes="130x128"             href="<?php //echo base_url('asset/tampilan_utama/img/logo_favicong.ico');?>">
    <link rel="apple-touch-icon" sizes="130x128" href="<?php //echo base_url('asset/tampilan_utama/img/logo_favicong.ico');?>">
-->

<link rel="shortcut icon"                    href="">
<link rel="icon" sizes="130x128"             href="">
<link rel="apple-touch-icon" sizes="130x128" href="">

<!-- Stylesheets -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/tampilan_utama/css/bootstrap.css');?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/tampilan_utama/css/style.css');?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/tampilan_utama/plugins/font.awesome.4.7.0/css/font-awesome.css');?>">

<!--JavaScript-->
<script type="text/javascript" src="<?php echo base_url('asset/tampilan_utama/js/jquery.3.2.1.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('asset/tampilan_utama/js/bootstrap.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('asset/tampilan_utama/js/jquery.easing.1.3.js');?>"></script>



</head>
<body>


    <header class="header-utama">
        <div class="header-nav">

            <nav class="navbar navbar-default navbar-home">
                <div class="container-fluid">

                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index.html"><img src="<?php echo base_url('asset/tampilan_utama/img/githublogo.png');?>" width="100" height="30"  alt="Logo Mata Daun" class="img-responsive"></a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse animated" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="" class="href-dua">Pull Request</a></li>
                            <li><a href=""class="href-tiga">Issues</a></li>
                            <li><a href=""class="href-empat">MarketPlace</a></li>
                            <li><a href=""class="href-empat">Explore</a></li>
                            <li style="width:250px;padding-top:8px">

                                <div class="col-xs-12">
                                    <div class="input-group">
                                      <input type="text" class="form-control" placeholder="Search for...">
                                      <span class="input-group-btn">
                                          <button class="btn btn-default"  type="button" style=" color: black;"><span class="glyphicon glyphicon-search"></span></button>
                                      </span>
                                  </div>

                              </div><!-- /input-group --></li>
                              <li class="dropdown">
                                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-envelope"></span><span class="caret"></span></a>
                                  <ul class="dropdown-menu">
                                    <li><a href="#">Signed As</a></li>
                                    <li><a href="#">Reynaldo Alfa</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#">Your Profile</a></li>
                                    <li><a href="#">Your Repositories</a></li>
                                    <li><a href="#">Your Stars  </a></li>
                                    <li><a href="#">Your Gist</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#">Help</a></li>
                                    <li><a href="#">Settings</a></li>
                                    <li><a href="#">Sign Out</a></li>
                                </ul>
                            </li>
                        </ul>

                    </div><!-- /.navbar-collapse -->


                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
    </div>
</header>

<section class="profile-atas">
    <div class="row">

        <div class="col-md-12">
            <div class="login-box">
              <div class="login-box-body">
                  <img id="avatar" src="" alt="Profile Pic" class="img-responsive" style="display:  inline-block;
                  width: 150px;border-radius: 50%;">
                  <h1 id="name">Andhika</h1>
                  <h3 id="username"></h3>
                  <h4 id="bio"></h4>
                  <button type="button" class="btn">FOLLOW</button>
                  <br>
                  <a href="#">Block or Report user</a>
                  <hr>
                  <a href="#">Developer Program Member</a>
                  <a href="#" id="company"></a>
                  <a href="#" id="location"></a>
                  <a href="#">andikamaheva@gmail.com</a>
                  <a href="#" id="blog"></a>


              </div>
          </div>
      </div>
  </div>
</section>

<section class="menu-github">
    <div class="container">
        <div class="row">

            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#" id="overview">Overview</a></li>
                <li class="breadcrumb-item"><a href="#">Repositories</a><span id="repo" class="badge"></span></li>
                <li class="breadcrumb-item"><a href="#" >Stars</a><span id="stars"  class="badge"></span></li>
                <li class="breadcrumb-item"><a href="#">Followers</a><span id="followers"  class="badge"></span></li>
                <li class="breadcrumb-item"><a href="#" >Following</a><span id="following"  class="badge"></span></li>

            </ol>
        </nav>
    </div>
</div>
</section>

<section class="isi-github">
    <div class="container">
        <h4>Pinned repositories</h4>
        <hr>
        <div class="row">
            <div class="col-md-6">
                <div class="isi-pemisah">
                    <a href="#" id="tag-1" ></a>
                    <h3 id="desc-1"></h3>
                    <h3 id="language-1">test</h3>
                </div>
            </div>
            <div class="col-md-6">
                <div class="isi-pemisah">
                    <a href="#" id="tag-2"></a>
                    <h3 id="desc-2"></h3>
                    <h3 id="language-2"></h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="isi-pemisah">
                    <a href="#" id="tag-3"></a>
                    <h3 id="desc-3"></h3>
                    <h3 id="language-3"></h3>
                </div>
            </div>
            <div class="col-md-6">
                <div class="isi-pemisah">
                    <a href="#" id="tag-4"></a>
                    <h3 id="desc-4"></h3>
                    <h3 id="language-4"></h3>
                </div>
            </div>
        </div>
    </div>
</section>




<footer class="footer-content">
    <div class="container">
        <div class="row">
           <div class="col-xs-12">
            <p>copyright mata daun © 2018. All Rights Reserved.</p> 
        </div>


    </div>
</div>
</footer>
</div>


<script>

    $.get(
        "https://api.github.com/users/andhikamaheva",

        function(data) {   

            $('#name').text(data.name);
            $('#username').text(data.login);
            $('#bio').text(data.bio);

            $('#company').text(data.company);
            $('#location').text(data.location);

            $('#blog').text(data.blog);
            $('#blog').attr("src",data.blog);

            $('#avatar').attr("src",data.avatar_url);

            $('#repo').text(data.public_repos);
            $('#stars').text(data.public_gists);
            $('#followers').text(data.followers);
            $('#following').text(data.following);
        }
        );

    $.get(
        "https://api.github.com/users/andhikamaheva/repos",

        function(data) {   

            $('#tag-1').text(data[1].name);
            $('#tag-2').text(data[2].name);
            $('#tag-3').text(data[3].name);
            $('#tag-4').text(data[4].name);

            $('#tag-1').attr("href",data[1].html_url);
            $('#tag-2').attr("href",data[2].html_url);
            $('#tag-3').attr("href",data[3].html_url);
            $('#tag-4').attr("href",data[4].html_url);

            $('#desc-1').text(data[1].description);
            $('#desc-2').text(data[2].description);
            $('#desc-3').text(data[3].description);
            $('#desc-4').text(data[4].description);


            $('#language-1').text(data[1].language);
            $('#language-2').text(data[2].language);
            $('#language-3').text(data[3].language);
            $('#language-4').text(data[4].language);

        }
        );

</script>


</body>
</html>