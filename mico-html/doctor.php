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

  <!-- team section -->
  <?php include 'team_section.php'; ?>
  <!-- end team section -->

  <!-- footer section -->
  <?php printFooterAndScripts() ?>;
  <!-- footer section-->

</body>

