{{-- VE
// New code based on
// https://discourse.roots.io/t/how-to-restore-the-bootstrap-nav-walkthrough/3657/46
//
--}}

<nav class="navbar navbar-toggleable-md navbar-light bg-faded">
  
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
          data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
          aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
  </button>

  <a class="navbar-brand" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>

  {{-- key thing to pull menu to the right is justify-content-end class--}}
  <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
    @if (has_nav_menu('primary_navigation'))
      {!! wp_nav_menu([
            'theme_location' => 'primary_navigation', 
            'walker' => new wp_bootstrap_navwalker(), 
            'menu_class' => 'navbar-nav']) 
      !!}
    @endif
  </div>

</nav>

{{-- Original code below
<header class="banner">
  <div class="container">
    <a class="brand" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>
    <nav class="nav-primary">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
    </nav>
  </div>
</header>
--}}
