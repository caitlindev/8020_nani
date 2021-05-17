{{--
  Template Name: About
--}}

@extends('layouts.app')

@section('content')
<div class="blocks">
  <div class="block left img" style="background-image: url('<?php echo get_the_post_thumbnail_url($post_id); ?>')"></div>

  <div class="block right about">
    <div class="content">
      @while(have_posts()) @php the_post() @endphp
        @include('partials.content-page')
      @endwhile
    </div>
  </div>
</div>

<div class="blocks">
  <div class="block left certification green">
    <div class="content">
      <img class="icon" src="@asset('images/icon_certification.svg')">
      <h2>Certification</h2>
      <ul>
        <?php
        if (have_rows('certification_list')):
          while ( have_rows('certification_list') ) : the_row();
            echo '<li>'.get_sub_field("certification_title").'</li>';
          endwhile;
        endif;
        ?>
      </ul>
  </div>
  </div>

  <div class="block right education gold">
    <div class="content">
      <img class="icon" src="@asset('images/icon_education.svg')">
      <h2>Education</h2>
      <ul>
        <?php
        if (have_rows('education_list')):
          while ( have_rows('education_list') ) : the_row();
            echo '<li>'.get_sub_field("education_title").'</li>';
          endwhile;
        endif;
        ?>
      </ul>
    </div>
  </div>
</div>

<div class="continued-education">
  <div class="container">
    <h2 class="heading">Continued Education</h2>
    <ul>
      <?php
      if (have_rows('continued_education_cards')):
        while ( have_rows('continued_education_cards') ) : the_row();

          echo '<li>';
          echo '<span>'.get_sub_field("continued_education_title");
          echo '<img class="icon" src="'.App\asset_path('images/icon_certification.svg').'"/>';
          echo '</span>';
          echo '</li>';
        endwhile;
      endif;
      ?>
    </ul>
  </div>
</div>
@endsection
