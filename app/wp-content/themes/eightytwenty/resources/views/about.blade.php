{{--
  Template Name: About
--}}

@extends('layouts.app')

@section('content')
<div class="blocks">
  <div class="block left hero" style="background-image: url('<?php echo get_the_post_thumbnail_url($post_id); ?>')"></div>

  <div class="block right about">
    <div class="content">
      <p>Hello there, I’m Nani.</p>
      <p>I began working as a certified Hypnotherapist and Body Code Practitioner over 5 years ago, to help people identify and achieve their personal goals by coping with the issues that are causing them distress, anxious feelings and stress. <br/>
      While I offer strictly Hypnotherapy or Body Code sessions, often times using both modalities within the same session; depending on the needs and desires of the client, may enhance self-improvement and the overall results. I take great pleasure in the progress and success of my clients, and look forward to helping you.</p>
    </div>
  </div>
</div>

<div class="blocks">
  <div class="block left certification green">
    <div class="content">
      <img class="icon" src="@asset('images/icon_certification.svg')">
      <h2>Certification</h2>
      <ul>
        <li>Certified Hypnotherapist, C. Ht: ID#28879118</li>
      	<li>Member of American Hypnosis Association</li>
      	<li>Member of Hypnotherapists Union Local 472</li>
      	<li>Certified Emotion and Body Practitioner</li>
      </ul>
  </div>
  </div>

  <div class="block right education gold">
    <div class="content">
      <img class="icon" src="@asset('images/icon_education.svg')">
      <h2>Education</h2>
      <ul>
        <li>Graduation from Hypnosis Motivation Institute, Tarzana, California July 2014.</li>
      	<li>Completed 300 hours of instruction in foundations and advanced training in hypnosis and hypnotherapy from the nation’s only accredited college of hypnotherapy, and over 200 hours of practical experience to earn certification as a hypnotherapist.</li>
      </ul>
    </div>
  </div>
</div>

<div class="continued-education">
  <div class="container">
    <h2 class="heading">Continued Education</h2>
    <ul>
      <li>
        <span>
          Certified Hypnosis and Weight Management Specialist
          <img class="icon" src="@asset('images/icon_certification.svg')">
        </span>
      </li>
      <li>
        <span>C
          ertified Specialist Hypnosis and ADD/ADHD
          <img class="icon" src="@asset('images/icon_certification.svg')">
        </span>
      </li>
      <li>
        <span>
          Certified in Handwriting Analysis
          <img class="icon" src="@asset('images/icon_certification.svg')">
        </span>
      </li>
      <li>
        <span>
          Certified Specialist Hypnosis and Transgender Clients
          <img class="icon" src="@asset('images/icon_certification.svg')">
        </span>
      </li>
      <li>
        <span>
          Certified Biofeedback I
          <img class="icon" src="@asset('images/icon_certification.svg')">
        </span>
      </li>
      <li>
        <span>
          Certified Specialist Body Syndromes
          <img class="icon" src="@asset('images/icon_certification.svg')">
        </span>
      </li>
      <li>
        <span>
          Certified Past-Life Regressions Therapist
          <img class="icon" src="@asset('images/icon_certification.svg')">
        </span>
      </li>
      <li>
        <span>
          Certified Past-Life Regressions Therapist
          <img class="icon" src="@asset('images/icon_certification.svg')">
        </span>
      </li>
      <li>
        <span>
          Certified Trauma Recovery Hypnosis
          <img class="icon" src="@asset('images/icon_certification.svg')">
        </span>
      </li>
      <li>
        <span>
          Certified Hypnosis and Pain Management
          <img class="icon" src="@asset('images/icon_certification.svg')">
        </span>
      </li>
      <li>
        <span>
          Certified Hypnosis and Weight Management Specialist
          <img class="icon" src="@asset('images/icon_certification.svg')">
        </span>
      </li>
    </ul>
  </div>
</div>
@endsection
