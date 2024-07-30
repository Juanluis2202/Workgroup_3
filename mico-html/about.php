<?php include 'functions.php';?>
<!DOCTYPE html>
<html lang="en">

<head>
<?php printHeader(); ?>
</head>

<body class="sub_page">

  <div class="hero_area">
    <!-- header section strats -->
    <?php render_header(); ?>
    <!-- end header section -->
  </div>


  <!-- about section -->
  <?php include 'generateAboutSection.php';?>
  <!-- end about section -->


  <!-- footer section -->
  <?php printFooterAndScripts() ?>;
  <!-- footer section -->

</body>

