{{--
  Template Name: Home
--}}

<!-- @extends('layouts.app') -->

@section('content')

  <div class="hero" style="background-image: url('<?php echo get_the_post_thumbnail_url($post_id); ?>')">
    <span>Find Increased Health & Happiness</span>
  </div>

  <blockquote class="banner-quote"><span>“Happiness, not in another place but this place, not for another hour but this hour”</span><small>- Walt Whitman</small></blockquote>

  <div class="blocks subconscious">
    <div class="container">
      <div class="block right">
        <h2>Let your subconscious be your guide</h2>
        <p>Do you feel stuck? Lost? Depressed? Each of us can experience hard times, but only a few know how to turn it into a starting point for a new life full of health and happiness. My mission is to help you find your hidden potential by utilizing the power of your subconscious mind to identify and release energetic imbalances, motivate new behaviors, and help you grow and develop.</p>
      </div>
    </div>
  </div>

  <div class="blocks">
    <div class="block left hypnotherapy green">
      <div class="content">
        <h2>Hypnoytherapy</h2>
        <p>Through the art of hypnotherapy I have experienced the power of gently accessing the subconscious mind to help clients overcome negative thoughts and develop the best within themselves.</p>
        <button class="gold">Learn More</button>
    </div>
    </div>

    <div class="block right body-code gold">
      <div class="content">
        <h2>The Body Code</h2>
        <p>The Body Code is a simple form of energy healing that may facilitate increased health and happiness by providing the body with more balanced conditions that allow it to heal itself.</p>
        <button class="green">Learn More</button>
      </div>
    </div>
  </div>

  <div class="testimonials container">
    <h2>Testimonials</h2>
    <?php echo do_shortcode("[slide-anything id='39']"); ?>
  </div>

@endsection
