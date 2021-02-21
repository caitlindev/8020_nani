{{--
  Template Name: Home
--}}

@extends('layouts.app')

@section('content')
  @include('partials.page-header')

  <div class="hero">
    <php echo get_the_post_thumbnail($post_id, 'thumbnail'); ?php>
  </div>

  <blockquote class="banner-quote"><span>“Happiness, not in another place but this place, not for another hour but this hour”</span><small>- Walt Whitman</small></blockquote>

  <div class="block subconscious">
    <div class="card right">
      <h2>Let your subconscious be your guide</h2>
      <p>Do you feel stuck? Lost? Depressed? Each of us can experience hard times, but only a few know how to turn it into a starting point for a new life full of health and happiness. My mission is to help you find your hidden potential by utilizing the power of your subconscious mind to identify and release energetic imbalances, motivate new behaviors, and help you grow and develop.</p>
    </div>
  </div>

  <div class="block">
    <div class="card left">
      <h2>Hypnoytherapy</h2>
      <p>Through the art of hypnotherapy I have experienced the power of gently accessing the subconscious mind to help clients overcome negative thoughts and develop the best within themselves.</p>
      <button>Learn More</button>
    </div>

    <div class="card right">
      <h2>The Body Code</h2>
      <p>The Body Code is a simple form of energy healing that may facilitate increased health and happiness by providing the body with more balanced conditions that allow it to heal itself.</p>
      <button>Learn More</button>
    </div>
  </div>

  <div class="block testimonials">
    <ul>
      <li>
        <blockquote>“Nani is amazing at what she does. I’m confident that anyone who visits with Nani will find their meetings to be literally life changing to anyone looking for answers or resolutions to those disabling challenges, emotional blockages, or obstacles that just seem to never go away. Nani can help you understand where they came from, why they’re present and most importantly release them for good. I’m thankful for her, her gifts, her knowledge, skill, talent, time, energy and willingness to help others.”<small>- Laura L.</small></blockquote>
      </li>
    </ul>
  </div>

@endsection
