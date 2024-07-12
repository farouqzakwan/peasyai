<!DOCTYPE html>

<!-- =========================================================
* Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
==============================================================

* Product Page: https://themeselection.com/products/sneat-bootstrap-html-admin-template/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
 -->
<!-- beautify ignore:start -->
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>Assesment Peasy.ai</title>
    <meta name="description" content="" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('template/sneat/assets/vendor/fonts/boxicons.css') }}" />
    <link rel="stylesheet" href="{{ asset('template/sneat/assets/vendor/css/core.css') }}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('template/sneat/assets/vendor/css/theme-default.css') }}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('template/sneat/assets/css/demo.css') }}" />
    <link rel="stylesheet" href="{{ asset('template/sneat/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />
    <script src="{{ asset('template/sneat/js/helpers.js') }}"></script>
    <script src="{{ asset('template/sneat/assets/js/config.js') }}"></script>
  </head>
  <body>
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">




        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo px-0">
            <a href="{{ url('') }}" class="app-brand-link">
                <img src="{{ asset('img/peasylogo.png') }}" alt="" class="img img-fluid" width="80%">
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>
          <ul class="menu-inner py-1">
            <li class="menu-item active">
              <a href="{{ route('public.index.GET') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-user-circle"></i>
                <div data-i18n="Analytics">User</div>
              </a>
            </li>
          </ul>
        </aside>





        <div class="layout-page">
          <div class="content-wrapper">
            <div class="container-xxl flex-grow-1 container-p-y">
                @yield('content')
            </div>
            <div class="content-backdrop fade"></div>
          </div>
        </div>
      </div>
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>

    <script src="{{ asset('template/sneat/assets/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('template/sneat/assets/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('template/sneat/assets/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('template/sneat/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('template/sneat/assets/vendor/js/menu.js') }}"></script>
    <script src="{{ asset('template/sneat/assets/js/main.js') }}"></script>
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
