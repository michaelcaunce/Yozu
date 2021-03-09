<?php 

// ACF for hero section
$hero_title = get_field('hero_title');
$hero_paragraph = get_field('hero_paragraph');
$hero_image = get_field('hero_image');

?>

<section class="hero">
  <div class="hero__content">
    <h1 class="hero__content--title body__title"><?php echo $hero_title; ?></h1>
    <p class="hero__content--intro body__content"><?php echo $hero_paragraph; ?></p>
    <!-- Could have possibly used ACF here as well -->
    <a href="#" class=" hero__content--btn body__btn">Get in Touch</a>
    <!-- Scroll Down icon will go here. I've parked this section for the time being as I'm struggling to find a free icon to use
    -->
  </div>
  
 <img class="hero--img" src="<?php echo $hero_image['url']; ?>" alt="<?php echo $hero_image['alt']; ?>">
</section>