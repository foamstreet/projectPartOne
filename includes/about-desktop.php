<?php include 'includes/components/header.php'; ?>
<?php include 'includes/components/menu.php'; ?>

<header>
  <h2 class="slide-down-in">ABOUT</h2>
</header>

<div class="container">
  <section id="about-one">
    <div id="bio" class="slide-down-in">
      <span class="about-left"></span>
      <span class="about-right"></span>
      <img class="profile-img rounded-circle" src="images/stacy_bw.jpg">
    </div>
    <i class="fa fa-3x fa-arrow-down" aria-hidden="true"></i>
  </section>

  <section id="about-two"></section>

  <section id="about-three">
    <h2>Skills</h2>
    <?php $logos = array('html', 'css', 'javascript', 'php', 'mysql', 'java'); ?>
    <?php foreach (array_chunk($logos, 3, true) as $arr) { ?>
      <div>
      <?php foreach($arr as $logo) { ?>
        <img src=<?php echo '"images/' . $logo . '.svg"' ?> alt=<?php echo '"' . $logo . ' logo"' ?> />
      <?php } ?>
      </div>
    <?php } ?>
  </section>

  <section id="about-four">
    <h2><a href="./documents/StacyMackinResume.pdf" target="_blank">Click here to view my resume.</a></h2>
  </section>
</div>

<?php include 'includes/components/footer.php'; ?>
<script src="scripts/about.js"></script>
