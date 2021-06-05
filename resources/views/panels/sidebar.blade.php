@php
  $configData = Helper::applClasses();
@endphp
<div class="main-menu menu-fixed {{($configData['theme'] === 'light') ? "menu-light" : "menu-dark"}} menu-accordion menu-shadow" data-scroll-to-active="true">
  <div class="navbar-header">
    <ul class="nav navbar-nav flex-row">
      <li class="nav-item mr-auto">
        <a class="navbar-brand" href="/">
         Sayyor
        </a>
      </li>
      <li class="nav-item nav-toggle">
        <a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse">
          <i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i>
          <i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block primary collapse-toggle-icon" data-ticon="icon-disc">
          </i>
        </a>
      </li>
    </ul>
  </div>
  <div class="shadow-bottom"></div>
  <div class="main-menu-content">
    <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
      <li class="nav-item   {{ (request()->segment(1) == '') ? 'active' : '' }}">
        <a href="/">
          <i class="feather icon-home"></i>
          <span class="menu-title">{{trans('locale.Dashboard')}}</span>
        </a>
      </li>

      <li class="nav-item   {{ (request()->segment(1) == 'menu') ? 'active' : '' }}">
        <a href="{{route('menu.index')}}">
          <i class="feather icon-list"></i>
          <span class="menu-title">{{trans('locale.menu')}}</span>
        </a>
      </li>
      <li class="nav-item   {{ (request()->segment(1) == 'page') ? 'active' : '' }}">
        <a href="{{route('page.index')}}">
          <i class="feather icon-list"></i>
          <span class="menu-title">{{trans('locale.page')}}</span>
        </a>
      </li>
      <li class="nav-item   {{ (request()->segment(1) == 'partner') ? 'active' : '' }}">
        <a href="{{route('partner.index')}}">
          <i class="feather icon-list"></i>
          <span class="menu-title">{{trans('locale.partner')}}</span>
        </a>
      </li>
      <li class="nav-item   {{ (request()->segment(1) == 'product') ? 'active' : '' }}">
        <a href="{{route('product.index')}}">
          <i class="feather icon-list"></i>
          <span class="menu-title">{{trans('locale.product')}}</span>
        </a>
      </li>
      <li class="nav-item   {{ (request()->segment(1) == 'advantage') ? 'active' : '' }}">
        <a href="{{route('advantage.index')}}">
          <i class="feather icon-list"></i>
          <span class="menu-title">{{trans('locale.advantage')}}</span>
        </a>
      </li>
    </ul>
  </div>
</div>
