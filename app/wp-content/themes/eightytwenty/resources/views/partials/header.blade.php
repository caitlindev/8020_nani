<header>
  <div class="container">
    <a class="brand" href="{{ home_url('/') }}"><img src="@asset('images/logo.svg')"></a>
    <!-- <img class="btn-hamburger" src="@asset('images/icon_hamburger.svg')"> -->
    <button id="btn-hamburger">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
    </button>
    <nav class="nav-primary">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
    </nav>
  </div>
</header>

<nav class="nav-mobile">
  <div class="container">
    @if (has_nav_menu('primary_navigation'))
      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
    @endif
  </div>
</nav>
