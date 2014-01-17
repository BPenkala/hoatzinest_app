<!DOCTYPE html>
<html class="no-js" lang="en" data-useragent="Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.2; Trident/6.0)">
<head>

    <!-- ======== META TAGS ======== -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="robots" content="" />

    <!-- ======== TITLE ======== -->
    <title><?php echo $title;?></title>

    <!-- ======== FONTS ======== -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,500,700,900' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800,400italic,600italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,600' rel='stylesheet' type='text/css'>

    <!-- ======== CSS FILES ======== -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/foundation.css" />
    <link rel="stylesheet" id="flatui-css" media="all" type="text/css" href="<?php echo base_url();?>assets/css/flatui.css" >
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/app.css" />

    <script src="<?php echo base_url();?>assets/js/modernizr.js"></script>

</head>
<body>




<!-- Header -->
<header>


    <?php
    
    if ($this->session->userdata('is_logged_in') == TRUE){
    
        echo"
        <div class='sign-up'>
        <div class='row'>
            <div class='large-12 columns'>
                <div class='top-button'>
                    <a class='button small borderShadow right leftRadius' href='";?><?php echo base_url();?><?php echo"login/signout'>Sign Out</a>
                </div>
            </div>
        </div>
    </div>";

	?><?php		
    } else {echo"
    
     <div class='sign-up'>
        <div class='row'>
            <div class='large-12 columns'>
                <div class='top-button'>
                    <a class='button small borderShadow right rightRadius' href='";?> <?php echo base_url();?><?php echo"login'>Sign In</a>
                    <a class='button small borderShadow right leftRadius' href='";?> <?php echo base_url();?><?php echo"login/signup'>Sign Up</a>
                </div>
            </div>
        </div>
    </div>";   
    }
    ?>


    <!-- Navigation -->
    <nav>
        <div class="row">
            <div class="large-4 columns">
                <div class="logo">
                    <a href="<?php echo base_url();?>">
                        <img src="<?php echo base_url();?>assets/img/hoatzinest_logo.png" alt="HoatziNest Logo">
                    </a>
                </div>
            </div>
            <div class="large-8 columns nav">
                <ul class="right inline-list">
                    <li><a href="<?php echo base_url();?>">Home</a></li>
                    <li><a href="<?php echo base_url();?>build">Let's Build</a></li>
                    <li><a href="<?php echo base_url();?>projects">Projects</a></li>
                    <li><a href="<?php echo base_url();?>showcase">Showcase</a></li>
                    <li><a href="<?php echo base_url();?>about">About</a></li>
                    <li><a href="<?php echo base_url();?>contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

</header>