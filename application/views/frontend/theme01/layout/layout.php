
<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Nail Salon 22556 of Stafford, VA | Imperial Salon and Day Spa | Nails, Hair, Skin care, Waxing, Massage</title>
    <meta name="Description" content="Imperial Salon &amp; Day Spa is a relaxing respite amid the specialty boutiques and fashion shopping of market place in stafford , Virginia. We're offer quality nails and spa services including: Nails Care, Hair, Services for men, waxing, skin care..."/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="<?= PATH_FE_TEMP ?>images/icon.png" rel="shortcut icon"/>

    <link href="<?= PATH_FE_TEMP ?>css/style.css" rel="stylesheet" type="text/css"/>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="<?= PATH_FE_TEMP ?>js/animation.js" type="text/javascript"></script>
    <script type="text/javascript" src="<?= PATH_FE_TEMP ?>scripts/soundplay.js"></script>
    <script src="<?= PATH_FE_TEMP ?>js/notification.js" type="text/javascript"></script>

    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600' rel='stylesheet' type='text/css'/>
    <link href='http://fonts.googleapis.com/css?family=Cinzel+Decorative' rel='stylesheet' type='text/css'/>
    <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'/>
    <link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow' rel='stylesheet' type='text/css'/>

    <!--responsive web-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!--[if lt IE 9]>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script><![endif]-->
    <link href="<?= PATH_FE_TEMP ?>css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!--end responsive web-->
    
</head>
<body>
    
<!-- Header Notification -->
   <?php include_once 'header_noti.php'; ?>
<!-- Header Notification -->

<div id="wrap_notifi" class="notimobile">
    <!-- Popup Notification -->
    <?php if ($popup==1): ?>
      <?php include_once 'popup.php'; ?>
    <?php endif ?>
    
    <!-- End Popup Notification -->
    
    <div id="fb-root"></div>
    <script type="text/javascript">        
    (function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=1417198868538409&version=v2.0";
            fjs.parentNode.insertBefore(js, fjs);
        } (document, 'script', 'facebook-jssdk'));</script>



    <div class="wapper">
        

        <div class="header">     
        <a href="egift"><div class="egift_m"><img src="<?= PATH_FE_TEMP ?>images/egift_icon_m.png" alt="egift"/></div></a>
            <div id="logo"><a href="home.html"><img src="<?= PATH_FE_TEMP ?>images/logo.png" alt="logo"/></a></div>

            <div class="groupsocial_top">
                <div class="social_top">
                    <a href="https://www.facebook.com/imperialsalonnspastafford" target="_blank"><img src="<?= PATH_FE_TEMP ?>images/facebook_top.png" alt="facebook" /></a>
                    <a href="#"><img src="<?= PATH_FE_TEMP ?>images/twitter_top.png" alt="twitter" /></a>
                    <a target="_blank" href="https://www.google.com/search?ludocid=13547143501949678584&q=Imperial%20Salon%20and%20Day%20Spa%20Stafford%201425%20Stafford%20Market%20Place%20%20%20%20%20%20Stafford%20VA%2022556&_ga=2.56046635.1856711181.1523894638-1757815232.1513018131"><img src="<?= PATH_FE_TEMP ?>images/googleplus_top.png" alt="googleplus" /></a>
                </div>
                <div class="homephone">Call for Appointment<br /><a href="tel:5406593707">(540) 659-3707</a></div>
            </div>
        </div>
        <?php include_once 'menu.php'; ?>
        <div class="groupmain">
            <div class="header_m">
                <div class="groupmenu_m">
                    <ul>
                        <li id="call_m"><a href="tel:5406593707"><span>Call</span></a></li>                
                        <li id="services_m"><a href="services"><span>Services</span></a></li>
                        <li id="direction_m"><a name="direction" onclick="myNavFunc();"><span>Direction</span></a></li>
                        <li id="subbar_m"><a href="sign-up"><span>Sign Up</span></a></li>
                        <li id="e-gift"><a href="egift"><span>Egift</span></a></li>
                        <li id="promotion"><a href="promotions"><span>Promotion</span></a></li>
                    </ul>
                    <!--<ul>
	                    
                    </ul>-->
                </div>
            </div>
            
             <!-- Main Content - begin -->
              <?php 
                //include 'home.php'; 
                $data=isset($data)?$data:null;
                $this->load->view($temp,$data);
              ?>  
              <!-- Main Content - End -->
            
            <?php include_once 'footer.php'; ?>
            
        </div>
        <!--<div class="groupdesigned">
              <a href="http://myesalon.com" target="_blank"><img src="images/designed.png" alt="myesalon"/></a>
              <a href="http://viethelpgroup.com" target="_blank"><img src="images/viethelpdesined.png" alt="myesalon"/></a>
        </div>-->
    </div>
    <div id="flag">1</div>

    <a href="sign-up" id="subbar"><img src="<?= PATH_FE_TEMP ?>images/subbar.png" alt="Subscribe"/></a>
    <div class="groupfbye">
        <a href="https://www.facebook.com/imperialsalonnspastafford" target="_blank"><img src="<?= PATH_FE_TEMP ?>images/facebook_icon.png" /></a>
        <div class="line"></div>
        <a href="http://www.yelp.com/biz/imperial-salon-and-day-spa-stafford" target="_blank"> <img src="<?= PATH_FE_TEMP ?>images/yelp_icon1.png" /></a>  
        <div class="line"></div>
        <a href="https://www.google.com/search?ludocid=13547143501949678584&q=Imperial%20Salon%20and%20Day%20Spa%20Stafford%201425%20Stafford%20Market%20Place%20%20%20%20%20%20Stafford%20VA%2022556&_ga=2.56046635.1856711181.1523894638-1757815232.1513018131" target="_blank" class="facebookbar"><img src="<?= PATH_FE_TEMP ?>images/gp_icon.png" /></a>
    </div>

    <div id="gotop"></div>

    <!--Music-->
    <!--<div id="soundback"><div id="soundbutton" onclick="continueSound();"></div></div>
    <audio controls id="wmusic" loop>
      <source src="music/Warm_Glow.mp3">
    </audio>
    <script type="text/javascript">
        checkSound();
        var song = document.getElementsByTagName('audio')[0];
        var played = false;
        var tillPlayed = getCookie('timePlayed');
        setInterval(soundupdate, 1000);
    </script>-->
    <!--Music-->
    </div>
</body>
</html>
<?php
/* End of file layout.php */
/* Location: ./application/views/frontend/theme01/layout/layout.php */