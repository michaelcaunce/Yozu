<?php 

// ACF for homepage about section
$about_title = get_field('about_title');
$about_paragraph = get_field('about_paragraph');
$about_image = get_field('about_image');

?>


<section class="about--home">
  <img class="about--home--img" src="<?php echo $about_image['url']; ?>" alt="<?php echo $about_image['alt']; ?>">
  <div class="about--home__content">
    <h1 class="body__title about--home__content--title"><?php echo $about_title; ?></h1>
    <p class="body__content about--home__content--intro"><?php echo $about_paragraph; ?></p>
    <a href="#" class="body__btn about--home__content--btn">Read about us</a>
  </div>
</section>