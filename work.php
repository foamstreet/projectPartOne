<?php include 'includes/components/header.php'; ?>
<?php include 'includes/components/menu.php'; ?>

<?php
  // server name, user name, password, database name
  $db = new mysqli('localhost', 'stacy', 'lucy2016', 'stacy-mackin');
  if ($db->connect_error) {
    echo 'Connection failure: ' . $db->connect_error . '<br/>';
  }
  else {
    $sql = 'SELECT * FROM work';
    $result = $db->query($sql);
    if($db->error){
      echo 'Database error: ' . $db->error . '<br>';
    }
    else {
?>
    <div class="container">
    	<header>
    		<h2 class="slide-down-in">WORK</h2>
    	</header>

      <?php while($row = mysqli_fetch_assoc($result)) { ?>
        <div class="row work">
          <div class="col-md-8">
            <img class="slide-down-in img-fluid" src=<?php echo '"images/' . $row['image'] . '"'; ?>>
            <img class="slide-down-in img-fluid" src="images/MEC2.png" >
          </div>
          <div class="col-md-4">
            <div class="work-description">
              <h5><a href=<?php echo '"' . $row['URL'] . '" target="_blank"'?>><?php echo $row['title']; ?></a></h5>
              <p><?php echo $row['description']; ?></p>
            </div>
          </div>
        <?php } ?>
      </div>
      <div class="row">
        <div class="col-md-6">
          <img class="slide-down-in img-fluid" src="images/MEC-mobile-1.png">
        </div>
        <div class="col-md-6">
          <img class="slide-down-in img-fluid" src="images/MEC-mobile-2.png">
        </div>
      </div>
    <?php } ?>
  </div>
<?php } ?>

<?php include 'includes/components/footer.php'; ?>
<script src="scripts/work.js"></script>
