{{--
  Template Name: Body Code
--}}

@extends('layouts.app')

@section('content')
<div class="hero" style="background-image: url('<?php echo get_the_post_thumbnail_url($post_id); ?>')">
  <div class="container">
    <span>The Body Code™</span>
  </div>
</div>
<div class="container">
  <h2 class="banner"><?php the_content(); ?></h2>
</div>

<div class="balance-methods container">
  <ul>
    <?php
    if (have_rows('body_code_cards')):
      while ( have_rows('body_code_cards') ) : the_row();

        echo '<li>';
        echo '<span>';
        echo '<h2>'.get_sub_field("body_code_title").'</h2>';
        echo get_sub_field("body_code_description");
        echo '</span>';
        echo '</li>';
      endwhile;
    endif;
    ?>
  </ul>
</div>

<div class="benefits container">
  <h2 class="heading">The Body Code™ may help with:</h2>
  <ul>
    <li>Digestive trouble</li>
    <li>Bedwetting</li>
    <li>Hormonal issues</li>
    <li>Chronic discomfort</li>
    <li>Organ function</li>
    <li>Emotional distress</li>
    <li>Reliving bad experiences</li>
    <li>Fatigue</li>
    <li>Learning problems</li>
    <li>Joint problems</li>
    <li>Muscle soreness</li>
    <li>Night terrors</li>
    <li>Sleep issues</li>
    <li>Anxiousness</li>
    <li>Weight and food issues</li>
    <li>Sinus Trouble</li>
    <li>And much more!</li>
  </ul>
  <p>For further information please visit The Body and Emotion Code website: <a href="https://discoverhealing.com/">https://discoverhealing.com/</a></p>
</div>



@endsection
