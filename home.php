<?php

  require_once 'includes/Mobile_Detect.php';

  $detect = new Mobile_Detect;

  if ( $detect->isMobile() || $detect->isTablet()) {
    include 'includes/home-mobile.php';
  } else {
    include 'includes/home-desktop.php';
  }

?>
