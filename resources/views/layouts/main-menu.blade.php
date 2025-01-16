<header id="site-header" role="banner" itemscope="" itemtype="http://schema.org/WPHeader">
  <div id="header">
    <div class="logo-wrap">
      <h1 class="image-logo" id="logo" itemprop="headline">
        <a href="{{ route('home') }}"><img
            src="{{ asset('assets/wp-content/uploads/moviesmodnew-Custom-1.png') }}" alt="MoviesNext"></a>
      </h1><!-- END #logo -->
    </div>

    <div class="header-search">
      <form class="search-form" id="searchform" method="get" action="" _lpchecked="1">
        <fieldset>
          <input id="s" name="s" type="search" value=""
            placeholder="What are you looking for?" autocomplete="off">
          <button class="sbutton" id="search-image" type="submit" value="">
            <i class="fa fa-search"
              style="height: 41px !important; width: 41px !important; font-size: 22px !important"></i>
          </button>
        </fieldset>
      </form>
    </div>

    <div class="header-social">
      <a data-wpel-link="external" href="" style="background: #D35151" target="_blank"
        rel="nofollow external noopener noreferrer"><span class="fa">📩 Request
        </span></a>
      <a data-wpel-link="external" href="" style="background: #228B22" target="_blank"
        rel="nofollow external noopener noreferrer"><span class="fa">🔔 Notify</span></a>
    </div>

    <div class="primary-navigation" id="primary-navigation" role="navigation" itemscope=""
      itemtype="http://schema.org/SiteNavigationElement">
      <a class="toggle-mobile-menu" id="pull" href="#">Menu</a>
      <nav class="navigation clearfix">
        <ul class="menu clearfix" id="menu-home">
          @foreach ($menus as $menu)
            <li
              class="menu-item menu-item-type-taxonomy menu-item-object-category {{ $menu->sub_menus->count() ? 'menu-item-has-children' : '' }}">
              <a href="genre/index.htm">{{ $menu->menu_name }}</a>
              @if ($menu->sub_menus)
                <ul class="sub-menu">
                  @foreach ($menu->sub_menus as $sub_menu)
                    <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-287"
                      id="menu-item-287"><a href="genre/action/index.htm">🔗{{ $sub_menu->menu_name }}</a></li>
                  @endforeach
                </ul>
              @endif
            </li>
          @endforeach
        </ul>
      </nav>
      <nav class="navigation mobile-only clearfix mobile-menu-wrapper">
        <div class="logo-wrap">
          <h1 class="image-logo" id="logo" itemprop="headline">
            <a href="{{ route('home') }}"><img
                src="{{ asset('assets/wp-content/uploads/moviesmodnew-Custom-1.png') }}" alt="MoviesNext"></a>
          </h1><!-- END #logo -->
        </div>
        <ul class="menu clearfix" id="menu-home-1">
          @foreach ($menus as $menu)
            <li
              class="menu-item menu-item-type-taxonomy menu-item-object-category {{ $menu->sub_menus->count() ? 'menu-item-has-children' : '' }}">
              <a href="javascript:void(0)">{{ $menu->menu_name }}</a>
              @if ($menu->sub_menus)
                <ul class="sub-menu">
                  @foreach ($menu->sub_menus as $sub_menu)
                    <li class="menu-item menu-item-type-taxonomy menu-item-object-category">
                      <a href="genre/action/index.htm">👉{{ $sub_menu->menu_name }}</a>
                    </li>
                  @endforeach
                </ul>
              @endif
            </li>
          @endforeach
        </ul>
      </nav>
    </div>

  </div><!-- #header-->
</header>
