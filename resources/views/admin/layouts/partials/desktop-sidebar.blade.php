<!-- BEGIN #sidebar -->
<div class="app-sidebar" id="sidebar">
  <!-- BEGIN scrollbar -->
  <div class="app-sidebar-content" data-scrollbar="true" data-height="100%">
    <!-- BEGIN menu -->
    <div class="menu">
      <div class="menu-header">APP INTERFACE</div>
      <div class="menu-item {{ request()->is('admin/dashboard') ? 'active' : '' }}">
        <a class="menu-link" href="{{ route('admin.dashboard') }}">
          <span class="menu-icon">
            <iconify-icon icon="ph:rocket-duotone"></iconify-icon>
          </span>
          <span class="menu-text">DASHBOARD</span>
        </a>
      </div>
      <div class="menu-item has-sub">
        <a class="menu-link" href="#">
          <span class="menu-icon">
            <iconify-icon icon="ph:envelope-duotone"></iconify-icon>
          </span>
          <span class="menu-text">ANALYTICS</span>
          <span class="menu-caret"><b class="caret"></b></span>
        </a>
        <div class="menu-submenu">
          <div class="menu-item">
            <a class="menu-link" href="email_inbox.html">
              <span class="menu-text">SUMON</span>
            </a>
          </div>
          <div class="menu-item">
            <a class="menu-link" href="email_compose.html">
              <span class="menu-text">SAGOR</span>
            </a>
          </div>
        </div>
      </div>

      <!-- analytics controller -->
      <div class="menu-header">ANALYTICS</div>
      <!-- visitors by country -->
      <div class="menu-item {{ Route::is('admin.analytics.visitor_by_country') ? 'active' : '' }}">
        <a class="menu-link" href="{{ route('admin.analytics.visitor_by_country') }}">
          <span class="menu-icon">
            <iconify-icon icon="mdi:world"></iconify-icon>
          </span>
          <span class="menu-text">VISITORS BY COUNTRY</span>
        </a>
      </div>
      <!-- visitors social media -->
      <div class="menu-item {{ Route::is('admin.analytics.social-media-share-analytics') ? 'active' : '' }}">
        <a class="menu-link" href="{{ route('admin.analytics.social-media-share-analytics') }}">
          <span class="menu-icon">
            <iconify-icon icon="famicons:share-social-outline"></iconify-icon>
          </span>
          <span class="menu-text">SOCIAL MEDIA SHARE</span>
        </a>
      </div>
      <!-- categories -->
      <div class="menu-item {{ Route::is('admin.categories*') ? 'active' : '' }}">
        <a class="menu-link" href="{{ route('admin.categories.index') }}">
          <span class="menu-icon">
            <iconify-icon icon="material-symbols:category-outline-rounded"></iconify-icon>
          </span>
          <span class="menu-text">CATEGORY</span>
        </a>
      </div>
      <div class="menu-item has-sub">
        <a class="menu-link" href="#">
          <span class="menu-icon">
            <iconify-icon icon="material-symbols:trail-length-medium-outline"></iconify-icon>
          </span>
          <span class="menu-text">TRAILER</span>
          <span class="menu-caret"><b class="caret"></b></span>
        </a>
        <div class="menu-submenu">
          <div class="menu-item">
            <a class="menu-link" href="form_elements.html">
              <span class="menu-text">TRAILER LIST</span>
            </a>
          </div>
          <div class="menu-item">
            <a class="menu-link" href="form_plugins.html">
              <span class="menu-text">ADD NEW TRAILER</span>
            </a>
          </div>
        </div>
      </div>

      <!-- frontend controller -->
      <div class="menu-header">FRONTEND CONTROLLER</div>
      <!-- menus -->
      <div class="menu-item {{ Route::is('admin.menus*') ? 'active' : '' }}">
        <a class="menu-link" href="{{ route('admin.menus.index') }}">
          <span class="menu-icon">
            <iconify-icon icon="ph:article"></iconify-icon>
          </span>
          <span class="menu-text">MENU</span>
        </a>
      </div>
      <!-- categories -->
      <div class="menu-item {{ Route::is('admin.categories*') ? 'active' : '' }}">
        <a class="menu-link" href="{{ route('admin.categories.index') }}">
          <span class="menu-icon">
            <iconify-icon icon="material-symbols:category-outline-rounded"></iconify-icon>
          </span>
          <span class="menu-text">CATEGORY</span>
        </a>
      </div>
      <div class="menu-item has-sub">
        <a class="menu-link" href="#">
          <span class="menu-icon">
            <iconify-icon icon="material-symbols:trail-length-medium-outline"></iconify-icon>
          </span>
          <span class="menu-text">TRAILER</span>
          <span class="menu-caret"><b class="caret"></b></span>
        </a>
        <div class="menu-submenu">
          <div class="menu-item">
            <a class="menu-link" href="form_elements.html">
              <span class="menu-text">TRAILER LIST</span>
            </a>
          </div>
          <div class="menu-item">
            <a class="menu-link" href="form_plugins.html">
              <span class="menu-text">ADD NEW TRAILER</span>
            </a>
          </div>
        </div>
      </div>

      <!-- backend controller -->
      <div class="menu-header">BACKEND CONTROLLER</div>
      <div class="menu-item {{ Route::is('admin.videos*') ? 'active' : '' }}">
        <a class="menu-link" href="{{ route('admin.videos.index') }}">
          <span class="menu-icon">
            <iconify-icon icon="mingcute:video-line"></iconify-icon>
          </span>
          <span class="menu-text">VIDEOS</span>
        </a>
      </div>
      <div class="menu-item {{ Route::is('admin.articles*') ? 'active' : '' }}">
        <a class="menu-link" href="{{ route('admin.articles.index') }}">
          <span class="menu-icon">
            <iconify-icon icon="ph:folder-duotone"></iconify-icon>
          </span>
          <span class="menu-text">ARTICLES</span>
        </a>
      </div>
      <div class="menu-item has-sub">
        <a class="menu-link" href="#">
          <span class="menu-icon">
            <iconify-icon icon="ph:open-ai-logo-duotone"></iconify-icon>
          </span>
          <span class="menu-text">MANAGERS</span>
          <span class="menu-caret"><b class="caret"></b></span>
        </a>
        <div class="menu-submenu">
          <div class="menu-item">
            <a class="menu-link" href="{{ route('admin.manager.index') }}">
              <span class="menu-text">MANAGER LIST</span>
            </a>
          </div>
          <div class="menu-item">
            <a class="menu-link" href="{{ route('admin.manager.create') }}">
              <span class="menu-text">ADD MANAGER</span>
            </a>
          </div>
          <div class="menu-item">
            <a class="menu-link" href="page_scrum_board.html">
              <span class="menu-text">SEND NOTIFICATION</span>
            </a>
          </div>
        </div>
      </div>
      <div class="menu-item">
        <a class="menu-link" href="file_manager.html">
          <span class="menu-icon">
            <iconify-icon icon="ph:folder-duotone"></iconify-icon>
          </span>
          <span class="menu-text">TODO</span>
        </a>
      </div>
      <div class="menu-item">
        <a class="menu-link" href="file_manager.html">
          <span class="menu-icon">
            <iconify-icon icon="ph:folder-duotone"></iconify-icon>
          </span>
          <span class="menu-text">FAQ</span>
        </a>
      </div>
      <div class="menu-item has-sub">
        <a class="menu-link" href="#">
          <span class="menu-icon">
            <iconify-icon icon="ph:open-ai-logo-duotone"></iconify-icon>
          </span>
          <span class="menu-text">NEWS</span>
          <span class="menu-caret"><b class="caret"></b></span>
        </a>
        <div class="menu-submenu">
          <div class="menu-item">
            <a class="menu-link" href="page_scrum_board.html">
              <span class="menu-text">NEWS LIST</span>
            </a>
          </div>
          <div class="menu-item">
            <a class="menu-link" href="page_scrum_board.html">
              <span class="menu-text">ADD NEWS</span>
            </a>
          </div>
          <div class="menu-item">
            <a class="menu-link" href="page_scrum_board.html">
              <span class="menu-text">ADD NEWS CATEGORY</span>
            </a>
          </div>
        </div>
      </div>
      <div class="menu-item has-sub">
        <a class="menu-link" href="#">
          <span class="menu-icon">
            <iconify-icon icon="ph:open-ai-logo-duotone"></iconify-icon>
          </span>
          <span class="menu-text">USERS (1)</span>
          <span class="menu-caret"><b class="caret"></b></span>
        </a>
        <div class="menu-submenu">
          <div class="menu-item">
            <a class="menu-link" href="page_scrum_board.html">
              <span class="menu-text">NEWSLETTER USER LIST</span>
            </a>
          </div>
          <div class="menu-item">
            <a class="menu-link" href="page_scrum_board.html">
              <span class="menu-text">ADD USER</span>
            </a>
          </div>
          <div class="menu-item">
            <a class="menu-link" href="page_scrum_board.html">
              <span class="menu-text">SEND NOTIFICATION</span>
            </a>
          </div>
          <div class="menu-item">
            <a class="menu-link" href="page_scrum_board.html">
              <span class="menu-text">MOVIE REQUEST (1)</span>
            </a>
          </div>
        </div>
      </div>

      <!-- api items list -->
      <div class="menu-header">API ITEMS LIST</div>
      <div class="menu-item">
        <a class="menu-link" href="file_manager.html">
          <span class="menu-icon">
            <iconify-icon icon="material-symbols:live-tv-outline"></iconify-icon>
          </span>
          <span class="menu-text">TV SHOWS</span>
        </a>
      </div>
      <div class="menu-item">
        <a class="menu-link" href="file_manager.html">
          <span class="menu-icon">
            <iconify-icon icon="material-symbols:movie-outline-rounded"></iconify-icon>
          </span>
          <span class="menu-text">MOVIES</span>
        </a>
      </div>

      <!-- frontend components -->
      <div class="menu-header">FRONTEND COMPONENTS</div>
      <div class="menu-item">
        <a class="menu-link" href="map.html">
          <span class="menu-icon">
            <iconify-icon icon="material-symbols:preview"></iconify-icon>
          </span>
          <span class="menu-text">MOST VIEWED LIST</span>
        </a>
      </div>
      <div class="menu-item">
        <a class="menu-link" href="map.html">
          <span class="menu-icon">
            <iconify-icon icon="material-symbols:preview"></iconify-icon>
          </span>
          <span class="menu-text">TOP RATED LIST</span>
        </a>
      </div>
      <div class="menu-item">
        <a class="menu-link" href="map.html">
          <span class="menu-icon">
            <iconify-icon icon="material-symbols:arrow-upload-ready"></iconify-icon>
          </span>
          <span class="menu-text">LATEST UPLOAD LIST</span>
        </a>
      </div>
      <div class="menu-item">
        <a class="menu-link" href="map.html">
          <span class="menu-icon">
            <iconify-icon icon="material-symbols:trending-up-rounded"></iconify-icon>
          </span>
          <span class="menu-text">TRENDING LIST</span>
        </a>
      </div>
      <div class="menu-item">
        <a class="menu-link" href="map.html">
          <span class="menu-icon">
            <iconify-icon icon="material-symbols:trending-up-rounded"></iconify-icon>
          </span>
          <span class="menu-text">UPCOMING LIST</span>
        </a>
      </div>
      <div class="menu-item has-sub">
        <a class="menu-link" href="#">
          <span class="menu-icon">
            <iconify-icon icon="ph:grid-nine-duotone"></iconify-icon>
          </span>
          <span class="menu-text">TABLES</span>
          <span class="menu-caret"><b class="caret"></b></span>
        </a>
        <div class="menu-submenu">
          <div class="menu-item">
            <a class="menu-link" href="table_elements.html">
              <span class="menu-text">TABLE ELEMENTS</span>
            </a>
          </div>
          <div class="menu-item">
            <a class="menu-link" href="table_plugins.html">
              <span class="menu-text">TABLE PLUGINS</span>
            </a>
          </div>
        </div>
      </div>
      <div class="menu-item has-sub">
        <a class="menu-link" href="#">
          <span class="menu-icon">
            <iconify-icon icon="ph:chart-donut-duotone"></iconify-icon>
          </span>
          <span class="menu-text">CHARTS</span>
          <span class="menu-caret"><b class="caret"></b></span>
        </a>
        <div class="menu-submenu">
          <div class="menu-item">
            <a class="menu-link" href="chart_js.html">
              <span class="menu-text">CHART.JS</span>
            </a>
          </div>
          <div class="menu-item">
            <a class="menu-link" href="chart_apex.html">
              <span class="menu-text">APEXCHARTS.JS</span>
            </a>
          </div>
        </div>
      </div>
      <div class="menu-item">
        <a class="menu-link" href="map.html">
          <span class="menu-icon">
            <iconify-icon icon="ph:map-pin-area-duotone"></iconify-icon>
          </span>
          <span class="menu-text">MAP</span>
        </a>
      </div>
      <div class="menu-item has-sub">
        <a class="menu-link" href="#">
          <span class="menu-icon">
            <iconify-icon icon="ph:terminal-window-duotone"></iconify-icon>
          </span>
          <span class="menu-text">LAYOUT</span>
          <span class="menu-caret"><b class="caret"></b></span>
        </a>
        <div class="menu-submenu">
          <div class="menu-item">
            <a class="menu-link" href="layout_starter.html">
              <span class="menu-text">STARTER PAGE</span>
            </a>
          </div>
          <div class="menu-item">
            <a class="menu-link" href="layout_fixed_footer.html">
              <span class="menu-text">FIXED FOOTER</span>
            </a>
          </div>
          <div class="menu-item">
            <a class="menu-link" href="layout_full_height.html">
              <span class="menu-text">FULL HEIGHT</span>
            </a>
          </div>
          <div class="menu-item">
            <a class="menu-link" href="layout_full_width.html">
              <span class="menu-text">FULL WIDTH</span>
            </a>
          </div>
          <div class="menu-item">
            <a class="menu-link" href="layout_boxed_layout.html">
              <span class="menu-text">BOXED LAYOUT</span>
            </a>
          </div>
          <div class="menu-item">
            <a class="menu-link" href="layout_collapsed_sidebar.html">
              <span class="menu-text">COLLAPSED SIDEBAR</span>
            </a>
          </div>
          <div class="menu-item">
            <a class="menu-link" href="layout_top_nav.html">
              <span class="menu-text">TOP NAV</span>
            </a>
          </div>
          <div class="menu-item">
            <a class="menu-link" href="layout_mixed_nav.html">
              <span class="menu-text">MIXED NAV</span>
            </a>
          </div>
          <div class="menu-item">
            <a class="menu-link" href="layout_mixed_nav_boxed_layout.html">
              <span class="menu-text">MIXED NAV BOXED LAYOUT</span>
            </a>
          </div>
        </div>
      </div>
      <div class="menu-item has-sub">
        <a class="menu-link" href="#">
          <span class="menu-icon">
            <iconify-icon icon="ph:open-ai-logo-duotone"></iconify-icon>
          </span>
          <span class="menu-text">PAGES</span>
          <span class="menu-caret"><b class="caret"></b></span>
        </a>
        <div class="menu-submenu">
          <div class="menu-item">
            <a class="menu-link" href="page_scrum_board.html">
              <span class="menu-text">SCRUM BOARD</span>
            </a>
          </div>
          <div class="menu-item">
            <a class="menu-link" href="page_products.html">
              <span class="menu-text">PRODUCTS</span>
            </a>
          </div>
          <div class="menu-item">
            <a class="menu-link" href="page_product_details.html">
              <span class="menu-text">PRODUCT DETAILS</span>
            </a>
          </div>
          <div class="menu-item">
            <a class="menu-link" href="page_orders.html">
              <span class="menu-text">ORDERS</span>
            </a>
          </div>
          <div class="menu-item">
            <a class="menu-link" href="page_order_details.html">
              <span class="menu-text">ORDER DETAILS</span>
            </a>
          </div>
          <div class="menu-item">
            <a class="menu-link" href="page_gallery.html">
              <span class="menu-text">GALLERY</span>
            </a>
          </div>
          <div class="menu-item">
            <a class="menu-link" href="page_search_results.html">
              <span class="menu-text">SEARCH RESULTS</span>
            </a>
          </div>
          <div class="menu-item">
            <a class="menu-link" href="page_coming_soon.html">
              <span class="menu-text">COMING SOON PAGE</span>
            </a>
          </div>
          <div class="menu-item">
            <a class="menu-link" href="page_404_error.html">
              <span class="menu-text">404 ERROR PAGE</span>
            </a>
          </div>
          <div class="menu-item">
            <a class="menu-link" href="page_login.html">
              <span class="menu-text">LOGIN</span>
            </a>
          </div>
          <div class="menu-item">
            <a class="menu-link" href="page_register.html">
              <span class="menu-text">REGISTER</span>
            </a>
          </div>
          <div class="menu-item">
            <a class="menu-link" href="page_data_management.html">
              <span class="menu-text">DATA MANAGEMENT</span>
            </a>
          </div>
          <div class="menu-item">
            <a class="menu-link" href="page_pricing.html">
              <span class="menu-text">PRICING PAGE</span>
            </a>
          </div>
        </div>
      </div>

      <!-- menu items list -->
      <div class="menu-header">MENU ITEMS LIST</div>
      <!-- get menu from database -->
      @php
        $menus = \App\Models\Menu::with('sub_menus')->whereStatus(true)->get();
      @endphp

      @forelse ($menus as $menu)
        @if ($menu->sub_menus->count())
          <div class="menu-item has-sub">
            <a class="menu-link" href="#">
              <span class="menu-icon">
                <iconify-icon icon="ph:arrow-bend-double-up-right-thin"></iconify-icon>
              </span>
              <span class="menu-text">{{ ucwords($menu->menu_name) }}</span>
              <span class="menu-caret"><b class="caret"></b></span>
            </a>
            <div class="menu-submenu">
              @foreach ($menu->sub_menus as $sub_menu)
                <div class="menu-item">
                  <a class="menu-link" href="ui_bootstrap.html">
                    <span class="menu-text">{{ ucwords($sub_menu->menu_name) }}</span>
                  </a>
                </div>
              @endforeach
            </div>
          </div>
        @else
          <div class="menu-item">
            <a class="menu-link" href="file_manager.html">
              <span class="menu-icon">
                <iconify-icon icon="ph:arrow-bend-double-up-right-thin"></iconify-icon>
              </span>
              <span class="menu-text">{{ ucwords($menu->menu_name) }}</span>
            </a>
          </div>
        @endif
      @empty
        <div class="menu-item">
          <a class="menu-link" href="javascript:void(0)">
            <span class="menu-icon">
              <iconify-icon icon="ph:arrow-bend-double-up-right-thin"></iconify-icon>
            </span>
            <span class="menu-text">No Menu Found</span>
          </a>
        </div>
      @endforelse

      <!-- Agent portal -->
      <div class="menu-header">AGENT PORTAL</div>
      <div class="menu-item has-sub">
        <a class="menu-link" href="#">
          <span class="menu-icon">
            <iconify-icon icon="ph:open-ai-logo-duotone"></iconify-icon>
          </span>
          <span class="menu-text">AGENTS</span>
          <span class="menu-caret"><b class="caret"></b></span>
        </a>
        <div class="menu-submenu">
          <div class="menu-item">
            <a class="menu-link" href="page_scrum_board.html">
              <span class="menu-text">AGENT LIST</span>
            </a>
          </div>
          <div class="menu-item">
            <a class="menu-link" href="page_scrum_board.html">
              <span class="menu-text">ADD AGENT</span>
            </a>
          </div>
          <div class="menu-item">
            <a class="menu-link" href="page_scrum_board.html">
              <span class="menu-text">AGENT TARGET</span>
            </a>
          </div>
        </div>
      </div>
      <div class="menu-item">
        <a class="menu-link" href="file_manager.html">
          <span class="menu-icon">
            <iconify-icon icon="ph:folder-duotone"></iconify-icon>
          </span>
          <span class="menu-text">TODO</span>
        </a>
      </div>
      <div class="menu-item">
        <a class="menu-link" href="messenger.html">
          <span class="menu-icon">
            <iconify-icon icon="ph:messenger-logo-duotone"></iconify-icon>
          </span>
          <span class="menu-text">MESSENGER</span>
        </a>
      </div>
      <div class="menu-item">
        <a class="menu-link" href="profile.html">
          <span class="menu-icon">
            <iconify-icon icon="ph:user-focus-duotone"></iconify-icon>
          </span>
          <span class="menu-text">PROFILE</span>
        </a>
      </div>
      <div class="menu-item">
        <a class="menu-link" href="calendar.html">
          <span class="menu-icon">
            <iconify-icon icon="ph:calendar-duotone"></iconify-icon>
          </span>
          <span class="menu-text">CALENDAR</span>
        </a>
      </div>
      <div class="menu-item">
        <a class="menu-link" href="settings.html">
          <span class="menu-icon">
            <iconify-icon icon="ph:gear-duotone"></iconify-icon>
          </span>
          <span class="menu-text">SETTINGS</span>
        </a>
      </div>
      <div class="menu-item">
        <a class="menu-link" href="helper.html">
          <span class="menu-icon">
            <iconify-icon icon="ph:first-aid-kit-duotone"></iconify-icon>
          </span>
          <span class="menu-text">HELPER</span>
        </a>
      </div>
    </div>
    <!-- END menu -->
    <div class="p-15px w-100 mt-auto">
      <a class="btn d-block btn-secondary btn-sm py-6px w-100" href="documentation/index.html"
        target="_blank">
        DOCUMENTATION
      </a>
    </div>
  </div>
  <!-- END scrollbar -->
</div>
<!-- END #sidebar -->
