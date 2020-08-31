<?php
/*
Plugin Name: 50 APP Fuse DIY Google Analytics Plugin
Plugin URI: http://www.50appfuse.com/googleanalytics.htm
Description: Add the Google Analytics tracking code to your site header.
Author: 50 App Fuse
Version: 1.1
*/

 function 50APP_google_analytics() { ?>
  <script async src="https://www.googletagmanager.com/gtag/js?id=YOURTRACKINGIDHERE"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'YOURTRACKINGIDHERE');
  </script>
  <?php
  }
  
add_action( 'wp_head', '50APP_google_analytics', 10 );