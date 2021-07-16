{{--
  Template Name: Hypnotherapy
--}}

@extends('layouts.app')

@section('content')
<div class="hero" style="background-image: url('<?php echo get_the_post_thumbnail_url($post_id); ?>')">
  <div class="container">
    <span>What is Hypnotherapy and Hypnosis?</span>
  </div>
</div>

<div class="container">
  <h2 class="banner"><?php the_content(); ?></h2>
</div>

<div class="blocks">
  <div class="block left img" style="background-image: url(http://naniurie.kinsta.cloud/wp-content/uploads/2021/03/zen-garden-photo.jpg)"></div>

  <div class="block right gold">
    <div class="content">
      <p>Most of us drift in and out of varying levels of hypnosis several times during any given day as we carry out activities which require intense focus and concentration, or dissociation, such as becoming emotionally involved while watching a movie, or thinking of something else while driving down the freeway. We find ourselves laughing with the characters in the movie we’re watching, or crying with them, or feeling angry about what they are experiencing. While driving we may find that we’ve taken the wrong exit or arrived at some destination other than our original goal, and it’s all happening without a conscious thought about our actions.</p>
    </div>
  </div>
</div>

<div class="blocks">
  <div class="block left green">
    <div class="content">
      <p>Sometimes hypnosis is described as a sleep-like state, where people are not conscious or are “zoned out,” but more accurately, they are in a state of “hyper-awareness,” and are very much “in the zone!”  Athletes and video gamers are examples of being “in the zone.” They can become so focused, that they do not hear their names being called or notice anything other than the objects of their concentration. The subconscious mind is much more receptive to suggestions in this heightened state of awareness, and therefore, more likely to accept suggestions for positive changes.  </p>
    </div>
  </div>
  <div class="block right img" style="background-image: url(http://naniurie.kinsta.cloud/wp-content/uploads/2021/03/meditation-photo.jpg)"></div>
</div>

<div class="faq container">
  <h2 class="heading">Frequently Asked Questions</h2>

  <div class="tabs">
      <?php
      if (have_rows('faq')):
        while ( have_rows('faq') ) : the_row(); $count++;
          echo '<div class="tab">';
          echo '<input type="checkbox" id="qa'.$count.'">';
          echo '<label class="tab-label" for="qa'.$count.'">'.get_sub_field("question").'</label>';
          echo '<div class="tab-content">'.get_sub_field("answer").'</div>';
          echo '</div>';
        endwhile;
      endif;
      ?>
    </div>
  </div>
</div>

@endsection
