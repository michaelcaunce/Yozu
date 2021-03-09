<section class="barristers">
  <div class="barristers__intro">
    <h1 class="body__title barristers__intro--title">Meet our barristers</h1>
    <p class="body__content barristers__intro--paragraph">Praesent molestie, mi et blandit tincidunt, erat diam accumsan justo, non tristique mauris lectus vel odio. Mauris pulvinar arcu sollicitudin nibh sodales malesuada et non libero. Vestibulum consequat erat et purus auctor, vitae vehicula dui pretium.</p>
  </div>
  <?php 
    $barristers = new WP_Query(array(
      'posts_per_page' => 4,
      'post_type' => 'barrister'
    ));

    while($barristers->have_posts()) {
      $barristers->the_post(); ?>
      testinf


    <?php }
      wp_reset_query();
    ?>
  <div class="barrister__card">
    <img src="" alt="">
    <h1></h1>
    <h2></h2>
    <a href=""></a>
  </div>
</section>