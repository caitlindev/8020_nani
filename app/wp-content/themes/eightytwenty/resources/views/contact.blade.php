{{--
  Template Name: Contact
--}}

@extends('layouts.app')

@section('content')
<div class="container">
  <h2 class="heading">Contact</h2>
  <div class="contact-info">
    <div class="left">
      <strong>To schedule a session you may fill out the contact form or call 702.506.5373</strong>
      <div class="addresshours">
        <div class="address">
          <strong>Office address:</strong>
          <p>9402 W Lake Mead Blvd <br/>Las Vegas, Nevada 89134</p>
        </div>

        <div class="hours">
          <strong>Office hours:</strong>
          <p>Monday: 9:30am - 12:30pm<br/> Wednesday: 9:30am - 12:30pm <br/>Friday: 1:00pm - 5:00pm</p>
        </div>
      </div>

      <div class="fees">
        <strong>Fees</strong>
        <ul>
          <li>Hypnotherapy and/or Body Code 50-minute session fee: $100</li>
          <li>Body Code 20-minute session $50</li>
          <li>Cash, Check, or Credit Card</li>
          <li>(I do not bill insurance companies)</li>
        </ul>

        <button class="gold">Pay with PayPal</button>
      </div>
    </div>
    <?php echo do_shortcode("[wpforms id='66' title='false']"); ?>
  </div>

  <div class="forms container">

    <strong>Client forms:</strong>
    <p>Download links for all client forms below.</p>

    <div class="buttons">
      <button class="gold" onClick="location.href='/wp-content/uploads/2021/03/201107_NU_Intake-Form.pdf'">
        <img class="icon" src="@asset('images/icon_download.svg')">
        <span>Client Intake Form</span>
      </button>
      <button class="gold" onClick="location.href='/wp-content/uploads/2021/03/201107_NU_Consent_Form.pdf'">
        <img class="icon" src="@asset('images/icon_download.svg')">
        <span>Consent Form</span>
      </button>
      <button class="gold" onClick="location.href='/wp-content/uploads/2021/03/201107_NU_Life-History_Form.pdf'">
        <img class="icon" src="@asset('images/icon_download.svg')">
        <span>Life History Form</span>
      </button>
      <button class="gold" onClick="location.href='/wp-content/uploads/2021/03/201107_NU_Disclosure-of-Services_Form.pdf'">
        <img class="icon" src="@asset('images/icon_download.svg')">
        <span>Service Disclosure</span>
      </button>
      <button class="gold" onClick="location.href='/wp-content/uploads/2021/03/201107_NU_Acknowledgement-of-Services_Form.pdf'">
        <img class="icon" src="@asset('images/icon_download.svg')">
        <span>Acknowledgment</span>
      </button>
    </div>
  </div>
</div>

@endsection
