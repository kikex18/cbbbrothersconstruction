<!DOCTYPE html>
<?php include 'php/text.php'; ?>
<html lang="en" <?php if($page_name!='blog.php'){echo "itemscope itemtype='http://schema.org/WebSite'";}?>>
<head>  
  <meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=edge">
  <meta charset="utf-8">
  <title><?php echo $page_name2; ?> &nbsp;-&nbsp; <?php echo $Company; ?></title>
  <meta name="description" content="<?php echo $Description;?>">
  <meta name="author" content="<?php echo $EOMLink;?>">
  <link rel="shortcut icon" property="og:image" href="images/favicon.png">


  <link rel="stylesheet" href="css/estilo.css">
  
  <link rel="stylesheet" href="fonts/mainfont/stylesheet.css">  
  <link href="css/bootstrap.min.css" rel="stylesheet">  
  <link href="fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="css/aos.css" />
  <link rel="stylesheet" type="text/css" href="css/jquery.fancybox.min.css">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <?php @session_start();?>
  <?php $_SESSION['token'] = md5(microtime()); ?>

</head>
<body <?php if($page_name!='blog.php'){echo "itemscope itemtype='http://schema.org/WebPage'";}?>>
  <div class="menu-fidex">
    <div class="text-center text-white bg-color2">
      <div class="container">
        <div class="row py-1 align-items-center">
          <div class="col-12 text-center">
            <span class="d-none d-lg-inline-block text-white text-center">
              <i class="fa fa-clock-o"></i> <?php echo $Schedule; ?> 
              &emsp; <i class="fa fa-envelope"></i> <?php echo $Mail; ?>
              &emsp; <a target="blank" class="mx-1 text-white" href="<?php echo $facebook;?>" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
              &emsp; <a target="blank" class="mx-1 text-white" href="<?php echo $instagram;?>" title="Instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
              &emsp; <a target="blank" class="mx-1 text-white" href="<?php echo $youtube;?>" title="YouTube"><i class="fa fa-youtube" aria-hidden="true"></i></a>
            </span>
          </div>
        </div>
      </div>
    </div> 
    <div class="container py-2 middle-header">
      <div class="row align-items-center">        
        <div class="col-xl-4 col-lg-3 text-center mx-auto">
          <a href="index.php"><img src="images/logo.png" class="img-fluid"></a>
        </div>
        <div class="col-lg-8 text-center">
          <a href="contact.php" class="t-color2 t-color3-hover"><h4 class=" pt-2 pt-lg-0"><i class="fa fa-phone t-color3"></i> <?php echo $Phone; ?> 
          <br class="d-block d-lg-none">
            &emsp; <i class="fa fa-pencil t-color3"></i> <?php echo 'Schedule an Appointment'; ?> </h4></a>
        </div>
      </div>
    </div>

    <div class="col-xl-12 bg-color1">
      <nav class="navbar navbar-expand-lg navbar-dark main-navbar">
        <a class="navbar-brand d-xs-block d-sm-block d-md-block d-lg-none d-lg-none text-white" href="#">Menu</a>
        <button class="navbar-toggler bg-color2" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto">
              <li itemprop="name" class="nav-item <?php echo ($page_name=='index.php')?'active':'';?>">
                <a href="index.php" itemprop="url" title="Home" class="nav-link text-white px-3 border-md-right"> Home</a>
              </li>
              <li itemprop="name" class="nav-item <?php echo ($page_name=='about.php')?'active':'';?>">
                <a href="about.php" itemprop="url" title="About" class="nav-link text-white px-3 border-md-right"> About</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white px-3 border-md-right" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"> Services</a>
                <div class="dropdown-menu">
                  <a class="dropdown-item <?php echo ($page_name == $LandingURL[1].'.php')?'active':'';?>" href="<?php echo $LandingURL[1].'.php'?>"><?php echo $LN[1]?></a>
                  <a class="dropdown-item <?php echo ($page_name == $LandingURL[2].'.php')?'active':'';?>" href="<?php echo $LandingURL[2].'.php'?>"><?php echo $LN[2]?></a>
                  <a class="dropdown-item <?php echo ($page_name == $LandingURL[3].'.php')?'active':'';?>" href="<?php echo $LandingURL[3].'.php'?>"><?php echo $LN[3]?></a>
                  <a class="dropdown-item <?php echo ($page_name == 'services.php')?'active':'';?>" href="services.php">More Services</a>
                </div>
              </li>


              <li itemprop="name" class="nav-item <?php echo ($page_name=='gallery.php')?'active':'';?>">
                <a href="gallery.php" itemprop="url" title="Portfolio" class="nav-link text-white px-3 border-md-right"> Portfolio</a>
              </li>
              <li itemprop="name" class="nav-item <?php echo ($page_name=='blog.php')?'active':'';?>">
                <a href="blog.php" itemprop="url" title="Blog" class="nav-link text-white px-3 border-md-right"> Blog</a>
              </li>
              <li itemprop="name" class="nav-item <?php echo ($page_name=='reviews.php')?'active':'';?>">
                <a href="reviews.php" itemprop="url" title="Reviews" class="nav-link text-white px-3 border-md-right"> Reviews</a>
              </li>
              <li itemprop="name" class="nav-item <?php echo ($page_name=='contact.php')?'active':'';?>">
                <a href="contact.php" itemprop="url" title="Contact Us" class="nav-link text-white px-3 border-0"> Contact Us</a>
              </li>
            </ul>
        </div>
      </nav>
    </div>
  </div>
  
