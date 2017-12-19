<?php if(!isset($page_title)) {$page_title = 'Home Improvement';} ?>

<!doctype html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PHI - <?php echo $page_title; ?></title>
    <link rel="stylesheet" media="all" href="<?php echo url_for('/css/index.css'); ?>" />
    <link rel="stylesheet" media="all" href="<?php echo url_for('/css/bootstrap.min.css'); ?>" />
  </head>

<body>
  <div class="container-fluid">
    <!-- ********************NAVIGATION*********************************-->
    <!-- Second navbar for sign in -->
      <div class="row">
        <div class="col-lg-12">
           <nav class="navbar-nav navbar-inverse navbar-fixed-top" role="navigation">
             <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#ss-navbar-collapse">
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
             </button>
             <!-- Logo -->
             <div class="navbar-header">
               <a href="<?php echo url_for('/index.php'); ?>" class="navbar-brand">Professional Home Improvement</a>
             </div>

          <div class="collapse navbar-collapse" id="ss-navbar-collapse">
             <ul id="ss-tabs" class="nav navbar-nav">
               <li class="active"><a href="<?php echo url_for('/index.php'); ?>">Home</a></li>
                <li><a href="<?php echo url_for('/html/about.php') ?>">Who We Are</a></li>
                <li><a href="<?php echo url_for('/html/service.php'); ?>">Services</a></li>
              <!--  <li><a href="html/work.html">What we have done</a></li> -->
                <li><a href="<?php echo url_for('/html/success.php'); ?>">Success Stories</a></li>
                <li><a href="<?php echo url_for('/html/contact.php'); ?>">Connect with us</a></li>
              <!-- <li><a href="html/quote.html">GET A QUOTE!</a></li> -->
              </ul>
        </div>
            </nav>
          </div>
        </div>

<!-- ********************HEADER********************************* -->

    <div class="row">
      <div class="col-md-12">
        <div class="carousel slide auto" id="carousel-107197" data-ride="carousel">
          <ol class="carousel-indicators">
            <li class="active" data-slide-to="0" data-target="#carousel-107197">
            </li>
            <li data-slide-to="1" data-target="#carousel-107197">
            </li>
            <li data-slide-to="2" data-target="#carousel-107197">
            </li>
          </ol>
          <div class="carousel-inner">
            <div class="item active">
              <img alt="Building" src="<?php echo url_for('/img/curo1.png'); ?>">
            </div>
            <div class="item">
              <img alt="Building" src="<?php echo url_for('/img/curo2.png'); ?>">
            </div>
            <div class="item">
              <img alt="Building" src="<?php echo url_for('/img/curo3.png'); ?>">
            </div>
          </div> <a class="left carousel-control" href="#carousel-107197" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a> <a class="right carousel-control" href="#carousel-107197" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
        </div>
      </div>
    </div>
