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
  <h2 class="banner">Dr. Brad Nelson, the creator of the Body Code explains:<br/>
The Body Code™ is an advanced wellness method developed by holistic chiropractor Dr. Bradley Nelson. It’s built on the premise that true health comes from being balanced in 6 different ways:</h2>
</div>

<div class="balance-methods container">
  <ul>
    <li>
      <span>
        <h2>Energies</h2>
        The Body Code™ uses simple energy work designed to remove potentially damaging emotional and mental energies.
      </span>
    </li>
    <li>

      <span>
        <h2>Circuitry</h2>
        Circuitry systems like chakras, acupuncture meridians, energy circuits of the organs and glands, and the body/spirit connection.
      </span>
    </li>
    <li>
      <span>
        <h2>Toxicity</h2>
        The Body Code™ is intended to identify and address possible harmful toxins that may not show up on traditional tests.
      </span>
    </li>
    <li>
      <span>
        <h2>Pathogens</h2>
        This process is designed to help identify potentially destructive, elusive pathogens so they can be corrected.
      </span>
    </li>
    <li>
      <span>
        <h2>Structural</h2>
        The Body Code™ can help pinpoint imbalances in bones, organs, muscles, nerves, and connective tissues and gently correct them.
      </span>
    </li>
    <li>
      <span>
          <h2>Nutritional</h2>
        Lifestyle imbalances can be identified for areas like nutrient deficiencies, dehydration, activities, or the need for body work.
      </span>
    </li>
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
