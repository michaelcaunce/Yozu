<?php 

// ACF for barristers section
$title = get_field('title');
$intro = get_field('intro');

// ACF for barristers custom post type
$name = get_field('name', get_option('page_for_posts'));
$speciality = get_field('speciality');
$image = get_field('image');
$link_text = get_field('link_text');
$link_url = get_field('link_url');

?>



<section class="barristers">
  <h1 class="body__title barristers--title"><?php echo $title; ?></h1>
  <p class="body__content barristers--paragraph"><?php echo $intro; ?></p>
  <div class="barrister__card--container">
    <?php 
    $barristers = new WP_Query(array(
      'posts_per_page' => 4,
      'post_type' => 'barristers_pv'
    ));

    while($barristers->have_posts()) {
      $barristers->the_post(); ?>
      <!-- Barrister card here -->
      <!-- <div class="barrister__card">
        <img src="<?php echo get_theme_file_uri('/img/Sarah_Simons.png'); ?>" alt="">
        <div class="barrister__card--content">
          <h3 class="barrister__card--name"><?php echo $name; ?></h3>
          <p class="barrister__card--speciality"><?php echo $speciality; ?></p>
          <a class="barrister__card--cta" href="<?php echo $link_url; ?>"><?php echo $link_text; ?></a>
        </div>
      </div> -->


    <?php }
      wp_reset_query();
    ?>
    <!-- Hard coded barristers to get styling correct -->
    <div class="barrister__card">
      <img src="<?php echo get_theme_file_uri('/img/Sarah_Simons.png'); ?>" alt="">
      <div class="barrister__card--content">
        <h3 class="barrister__card--name">Sarah Simons</h3>
        <p class="barrister__card--speciality">Civil, Criminal Law</p>
        <a class="barrister__card--cta" href="#">Meet Sarah</a>
      </div>
    </div>
    <div class="barrister__card">
      <img src="<?php echo get_theme_file_uri('/img/Martyn_Hughes.png'); ?>" alt="">
      <div class="barrister__card--content">
        <h3 class="barrister__card--name">Martyn Hughes</h3>
        <p class="barrister__card--speciality">Family</p>
        <a class="barrister__card--cta" href="#">Meet Martyn</a>
      </div>
    </div>
    <div class="barrister__card">
      <img src="<?php echo get_theme_file_uri('/img/Mike_Sutton.png'); ?>" alt="">
      <div class="barrister__card--content">
        <h3 class="barrister__card--name">Mike Sutton</h3>
        <p class="barrister__card--speciality">Civil, Employment, Regulatory, Personal Injury, Health & Safety Law</p>
        <a class="barrister__card--cta" href="#">Meet Mike</a>
      </div>
    </div>
    <div class="barrister__card">
      <img src="<?php echo get_theme_file_uri('/img/Paul_Green.png'); ?>" alt="">
      <div class="barrister__card--content">
        <h3 class="barrister__card--name">Paul Green</h3>
        <p class="barrister__card--speciality">Civil, Commercial & Chancery</p>
        <a class="barrister__card--cta" href="#">Meet Paul</a>
      </div>
    </div>
  </div>
  <!-- barristers cta -->
  <a href="#" class="barristers--btn body__btn">See all barristers</a>
</section>