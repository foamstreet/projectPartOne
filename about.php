<?php

  require_once 'includes/Mobile_Detect.php';

  $detect = new Mobile_Detect;

  if ( $detect->isMobile() || $detect->isTablet()) {
    include 'includes/about-mobile.php';
  } else {
    include 'includes/about-desktop.php';
  }

?>
