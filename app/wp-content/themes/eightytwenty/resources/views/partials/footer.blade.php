<!-- <footer class="content-info">
  <div class="container">

  </div>
</footer> -->



<footer>
  <div class="blocks container">
    <div class="block map">
      <?php echo do_shortcode("[wpgmza id='1']"); ?>
    </div>
    <div class="block info">
      <div class="left">
        <strong>Call to schedule a session:</strong>
        <p class="phone">702 506 5373</p>
        <p class="address">9402 W Lake Mead Blvd <br/>Las Vegas, Nevada 89134</p>
        <strong>Office hours:</strong>
        <p class="hours">Monday: 9:30am - 12:30pm <br/>Wednesday: 9:30am - 12:30pm <br/>Friday: 1:00pm - 5:00pm</p>
      </div>
      <div class="right">
        <a class="brand" href="{{ home_url('/') }}"><img src="@asset('images/logo_green.svg')"></a>
        <p class="copyright">©2021 Nani Urie. All rights reserved</p>
      </div>
    </div>
  </div>
  @php dynamic_sidebar('sidebar-footer') @endphp
</footer>
