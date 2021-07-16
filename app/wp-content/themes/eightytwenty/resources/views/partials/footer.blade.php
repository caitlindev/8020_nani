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
        <p class="phone"><?php the_field('phone_number', 14); ?></p>
        <p class="address"><?php the_field('office_address', 14); ?></p>
        <strong>Office hours:</strong>
        <p class="hours"><?php the_field('office_hours', 14); ?></p>
      </div>
      <div class="right">
        <a class="brand" href="{{ home_url('/') }}"><img src="@asset('images/logo_green.svg')"></a>
        <p class="copyright">©2021 Nani Urie. All rights reserved</p>
      </div>
    </div>
  </div>
  @php dynamic_sidebar('sidebar-footer') @endphp
</footer>
