<?php get_header(); ?>

<div class="container">

<?php
if ( have_posts() ) {
  while ( have_posts() ) {
    the_post();
    the_content();
  }
}
?>

</div>

<?php 
    $banner_register_link = get_field('banner_register_link');
    $banner_background_image = get_field('banner_background_image');
?>

<div id="banner">
    <h1 id="banner_baseline"><?php the_field('banner_baseline'); ?></h1>
    <h2 id="banner_brown_title"><?php the_field('banner_brown_title'); ?></h2>
    <h3 id="banner_green_title"><?php the_field('banner_green_title'); ?></h3>
    <a href="<?php echo $banner_register_link['url']; ?>" id='banner_register_link' > <?php echo $banner_register_link['title']; ?></a>
    <style>
      #banner {
        background-image: url("<?php echo $banner_background_image['url']; ?>");
      }
    </style>
</div>

<?php
    $conference_image = get_field('conference_image');
?>

<div id="conference">
    <h1 id="conference_title"><?php the_field('conference_title'); ?></h1>
    <h3 id="line">__________________</h3>
    <h2 id="conference_content"><?php the_field('conference_content'); ?></h2>
    <div id="conference_image">
        <style>
          #conference_image {
            background-image: url("<?php echo $conference_image['url']; ?>");
          }
        </style>
    </div>
</div>


<div id="program">
    <h1 id="program_title"><?php the_field('program_title'); ?></h1>
    <h3 id="line">__________________</h3>
    <div id="program_content">
      <div id="program_vegetables">
        <h2 id="program_vegetables_title"><?php the_field('program_vegetables_title'); ?></h2>
        <div id="program_vegetables_program">
          <?php
          $rows = get_field('program_vegetables_program');

          echo "<table>";

          if($rows){
            foreach($rows as $row){
              echo "<tr><td id='program_vegetables_hour'><strong>" . $row['program_vegetables_hour'] . "</strong></td><td id='program_vegetables_description'>" . $row['program_vegetables_description'] . "</td></tr>";
            }
          }

          echo "</table>";

          ?>
        </div>
      </div>
      <div id="program_activities">
        <h2 id="program_activities_title"><?php the_field('program_activities_title'); ?></h2>
        <div id="program_activities_program">
          <?php
          $rows = get_field('program_activities_program');

          echo "<table>";

          if($rows){
            foreach($rows as $row){
              echo "<tr><td id='program_activities_hour'><strong>" . $row['program_activities_hour'] . "</strong></td><td id='program_activities_description'>" . $row['program_activities_description'] . "</td></tr>";
            }
          }

          echo "</table>";

          ?>
        </div>
      </div>
    </div>
    <?php $lien = get_field('program_register_link'); ?>
    <a href="<?php echo $lien['url']; ?>" id='program_register_link' > <?php echo $lien['title']; ?></a>
    <div id="program_image">
      <style>
        #program_image {
          background-image: url(<?php the_field('program_image'); ?>);
        }
      </style>
    </div>
</div>



<?php get_footer(); ?>
