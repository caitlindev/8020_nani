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
          <?php
          if (have_rows('fees')):
            while ( have_rows('fees') ) : the_row();
              echo '<li>'.get_sub_field("item").'</li>';
            endwhile;
          endif;
          ?>
          <li>(I do not bill insurance companies)</li>
        </ul>

        <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
          <input type="hidden" name="cmd" value="_xclick">
          <input type="hidden" name="business" value="nani.urie@gmail.com">
          <input type="hidden" name="lc" value="US">
          <input type="hidden" name="item_name" value="Hypnotherapy 50 min">
          <input type="hidden" name="button_subtype" value="services">
          <input type="hidden" name="no_note" value="0">
          <input type="hidden" name="currency_code" value="USD">
          <input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynowCC_LG.gif:NonHostedGuest">

          <input type="hidden" name="on0" value="Services" />
          <input type="hidden" name="option_select0" value="Hypnotherapy/Body Code 50 min">
          <input type="hidden" name="option_amount0" value="100.00">
          <input type="hidden" name="option_select1" value="Body Code- 20 min">
          <input type="hidden" name="option_amount1" value="50.00">
          <input type="hidden" name="option_select2" value="Emotion Code 20 min">
          <input type="hidden" name="option_amount2" value="50.00">
          <input type="hidden" name="option_index" value="0">

          <select name="os0" class="custom-select">
            <option value="Hypnotherapy/Body Code 50 min">Hypnotherapy/Body Code 50 min $100.00 USD</option>
            <option value="Body Code- 20 min">Body Code- 20 min $50.00 USD</option>
            <option value="Emotion Code 20 min">Emotion Code 20 min $50.00 USD</option>
          </select>

          <button class="gold" name="submit" alt="PayPal - The safer, easier way to pay online!">Pay with PayPal</button>
          <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
        </form>

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
