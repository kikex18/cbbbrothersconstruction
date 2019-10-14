    <title><?php echo $file_Title[$page_name];?></title>
    <meta name="description" content="<?php echo $DescriptionArray[$page_name];?>">
    <meta name="author" content="<?php echo $author;?>">
    <meta name="robots" content="<?php if($page_name=='thank-you.php'){ echo $robots2;} else {echo $robots;}?>">
      <?php 
        if($page_name=="index.php"){?>
          <link rel="canonical" href="<?php echo "http://" . $_SERVER['HTTP_HOST'] . "/";?>">     
        <?php }
        else{ ?>
          <link rel="canonical" href="<?php echo "http://" . $_SERVER['HTTP_HOST'] . "/" . $page_name;?>">
      <?php } ?>
      <link rel="alternate" href="<?php echo "http://" . $_SERVER['HTTP_HOST'] . "/" . $page_name;?>" hreflang="en-us" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?php echo$file_Title[$page_name]?>" />
    <meta property="og:image" content="<?php echo $social_img;?>"/>
    <meta property="og:description" content="<?php echo$DescriptionArray[$page_name];?>" />
    <?php 
        if($page_name=="index.php"){?>
          <meta property="og:url" content="<?php echo "http://" . $_SERVER['HTTP_HOST'] . "/";?>">     
        <?php }
        else{ ?>
         <meta property="og:url" content="<?php echo "http://" . $_SERVER['HTTP_HOST'] . "/" . $page_name;?>">
      <?php } ?>
    <meta property="og:site_name" content="<?php echo$file_Title[$page_name]?>" />
    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:description" content="<?php echo$DescriptionArray[$page_name];?>"/>
    <meta name="twitter:title" content="<?php echo$file_Title[$page_name]?>"/>
    <?php 
        if($page_name=="index.php"){?>
          <meta name="twitter:domain" content="<?php echo "http://" . $_SERVER['HTTP_HOST'] . "/";?>">     
        <?php }
        else{ ?>
         <meta name="twitter:domain" content="<?php echo "http://" . $_SERVER['HTTP_HOST'] . "/" . $page_name;?>">
      <?php } ?>

       <meta name="twitter:image" content="<?php echo $social_img2;?>" />


       <!--<link rel="alternate" href="<?php echo "http://" . $_SERVER['HTTP_HOST'] . "/" . $page_name;?>" hreflang="en-us" /> MULTILANGUAGE ONLY-->
