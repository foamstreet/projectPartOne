<?php include 'includes/components/header.php'; ?>

  <?php $videos = array('about','work', 'contact'); ?>
  <?php foreach($videos as $v) { ?>
    <video id=<?php echo '"'. $v . 'Video"'; ?> loop muted>
      <source src=<?php echo '"videos/' . $v . '.mp4"'; ?> type="video/mp4">
    </video>
  <?php } ?>
	<div class="container-fluid home">
    <div class="row">
      <div class="col">
        <header>
        	<h1><span class="slide-down-in">STACY</span> <span class="slide-up-in">MACKIN</span></h1>
        </header>
      </div>
    </div>

    <div class="row">
      <div class="col">
        <nav class="pull-left home">
          <ul>
          <?php $homeNav = array('about' => 'pop-in-left', 'work' => 'pop-in-right', 'contact' => 'pop-in-left'); ?>
          <?php foreach($homeNav as $link => $class) { ?>
            <li id=<?php echo '"' . $link . '"'; ?> class=<?php echo '"home ' .
            $class . '"'; ?>><a href=<?php echo '"' . $link . '.php"'; ?> ><?php echo strtoupper($link); ?></a></li>
          <?php } ?>
          </ul>
        </nav>
      </div>
    </div>
  </div>

<?php include 'includes/components/footer.php'; ?>
