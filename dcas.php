<?php include('session.php'); 

?>
<!DOCTYPE html>

<html
  lang="en"
  class="light-style layout-navbar-fixed layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="<?php echo $assets; ?>/assets/"
  data-template="vertical-menu-template"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title><?php echo $s0['instansi']; ?></title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="resource-type" content="document" />
    <meta http-equiv="content-type" content="text/html; charset=US-ASCII" />
    <meta http-equiv="content-language" content="en-us" />
    <meta name="author" content="CXFTEAMS" />
    <meta name="contact" content="cxfteams.sbs" />
    <meta name="copyright" content="Copyright (c) cxfteams.sbs. All Rights Reserved." />
    <meta name="robots" content="index, nofollow">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="<?php echo $urlwebs; ?>/upload/favicon.png" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons -->
    <link rel="stylesheet" href="<?php echo $assets; ?>/assets/vendor/fonts/fontawesome.css" />
    <link rel="stylesheet" href="<?php echo $urlweb; ?>/assets/vendor/fonts/tabler-icons.css" />
    <link rel="stylesheet" href="<?php echo $assets; ?>/assets/vendor/fonts/flag-icons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="<?php echo $assets; ?>/assets/vendor/css/rtl/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="<?php echo $assets; ?>/assets/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="<?php echo $assets; ?>/assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="<?php echo $assets; ?>/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="<?php echo $assets; ?>/assets/vendor/libs/node-waves/node-waves.css" />
    <link rel="stylesheet" href="<?php echo $assets; ?>/assets/vendor/libs/typeahead-js/typeahead.css" />
    <link rel="stylesheet" href="<?php echo $assets; ?>/assets/vendor/libs/apex-charts/apex-charts.css" />
    <link rel="stylesheet" href="<?php echo $assets; ?>/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css" />
    <link rel="stylesheet" href="<?php echo $assets; ?>/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css" />
    <link rel="stylesheet" href="<?php echo $assets; ?>/assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="<?php echo $assets; ?>/assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="<?php echo $assets; ?>/assets/js/config.js"></script>
  </head>
<style>
    @charset "UTF-8";
/*
* Pages Mixins
*/
.layout-navbar-fixed .layout-wrapper:not(.layout-horizontal) .layout-page:before {
  content: "";
  width: 100%;
  height: 4.875rem;
  position: fixed;
  top: 0px;
  z-index: 10;
}

.bg-menu-theme .menu-sub > .menu-item > .menu-link:before {
  content: "\ea6b";
  font-family: "tabler-icons";
  position: absolute;
  font-size: 0.65rem;
  font-weight: bold;
}
.bg-menu-theme.menu-vertical .menu-sub > .menu-item > .menu-link:before {
  left: 1.35rem;
}
[dir=rtl] .bg-menu-theme.menu-vertical .menu-sub > .menu-item > .menu-link:before {
  right: 1.35rem;
  left: inherit;
}
.bg-menu-theme.menu-vertical .menu-sub > .menu-item .menu-link .menu-icon {
  display: none;
}
html:not([dir=rtl]) .bg-menu-theme.menu-horizontal .menu-inner > .menu-item > .menu-sub > .menu-item > .menu-link {
  padding-left: 0.875rem;
}
[dir=rtl] .bg-menu-theme.menu-horizontal .menu-inner > .menu-item > .menu-sub > .menu-item > .menu-link {
  padding-right: 0.875rem;
}
.bg-menu-theme.menu-horizontal .menu-inner > .menu-item > .menu-sub > .menu-item > .menu-link:before {
  content: "";
}
.layout-horizontal .bg-menu-theme .menu-sub > .menu-item > .menu-link:before {
  left: 1.1rem;
}
[dir=rtl] .layout-horizontal .bg-menu-theme .menu-sub > .menu-item > .menu-link:before {
  right: 1.1rem;
  left: inherit;
}
.layout-wrapper:not(.layout-horizontal) .bg-menu-theme .menu-inner .menu-item .menu-link {
  border-radius: 0.375rem;
}
.layout-horizontal .bg-menu-theme .menu-inner > .menu-item > .menu-link {
  border-radius: 0.375rem;
}
@media (min-width: 1200px) {
  .layout-horizontal .bg-menu-theme .menu-inner > .menu-item {
    margin: 0.625rem 0;
  }
  .layout-horizontal .bg-menu-theme .menu-inner > .menu-item:not(:first-child) {
    margin-left: 0.125rem;
  }
  .layout-horizontal .bg-menu-theme .menu-inner > .menu-item:not(:last-child) {
    margin-right: 0.125rem;
  }
}
.layout-wrapper:not(.layout-horizontal) .bg-menu-theme .menu-inner > .menu-item.active:before {
  content: "";
  position: absolute;
  right: 0;
  width: 0.25rem;
  height: 2.6845rem;
  border-radius: 0.375rem 0 0 0.375rem;
}
[dir=rtl] .layout-wrapper:not(.layout-horizontal) .bg-menu-theme .menu-inner > .menu-item.active:before {
  left: 0;
  right: inherit;
  border-radius: 0 0.375rem 0.375rem 0;
}

body {
  background: #25293c;
}

.bg-body {
  background: #25293c !important;
}

.text-primary {
  color: #e30b5c !important;
}

.text-body[href]:hover {
  color: #cc0a53 !important;
}

.bg-primary {
  background-color: #e30b5c !important;
}

a.bg-primary:hover, a.bg-primary:focus {
  background-color: #d80a57 !important;
}

.dropdown-notifications-item:not(.mark-as-read) .dropdown-notifications-read span {
  background-color: #e30b5c;
}

.bg-label-primary {
  background-color: #4c2d4c !important;
  color: #e30b5c !important;
}

.bg-primary.bg-glow {
  box-shadow: 0px 2px 3px 0px rgba(227, 11, 92, 0.3);
}

.page-item.active .page-link,
.pagination li.active > a:not(.page-link) {
  border-color: #e30b5c;
  background-color: #e30b5c;
  color: #fff;
}

.page-item > .page-link.active {
  border-color: #e30b5c;
  background-color: #e30b5c;
  color: #fff;
}

.page-item.first .page-link.active, .page-item.last .page-link.active, .page-item.next .page-link.active, .page-item.prev .page-link.active, .page-item.previous .page-link.active {
  border-color: #e30b5c;
  background-color: #e30b5c;
  color: #fff;
}

.progress-bar {
  background-color: #e30b5c;
  color: #fff;
}

.modal-onboarding .carousel-indicators [data-bs-target] {
  background-color: #e30b5c;
}

.carousel-control-prev,
.carousel-control-next {
  color: #e30b5c;
}
.carousel-control-prev:hover, .carousel-control-prev:focus,
.carousel-control-next:hover,
.carousel-control-next:focus {
  color: #e30b5c;
}

.list-group-item-primary {
  background-color: #4c2d4c;
  border-color: #4c2d4c;
  color: #e30b5c !important;
}

a.list-group-item-primary,
button.list-group-item-primary {
  color: #e30b5c;
}
a.list-group-item-primary:hover, a.list-group-item-primary:focus,
button.list-group-item-primary:hover,
button.list-group-item-primary:focus {
  background-color: #4c2d4c;
  color: #e30b5c;
}
a.list-group-item-primary.active,
button.list-group-item-primary.active {
  border-color: #e30b5c;
  background-color: #e30b5c;
  color: #e30b5c;
}

.list-group-item-action.active, .list-group-item-action.active:hover, .list-group-item-action.active:focus {
  border-color: #e30b5c;
  background-color: #e30b5c;
}

.list-group.list-group-timeline .list-group-timeline-primary:before {
  background-color: #e30b5c;
}

.alert-primary {
  background-color: #4c2d4c;
  border-color: #4c2d4c;
  color: #e30b5c;
}
.alert-primary .btn-close {
  background-image: url("data:image/svg+xml,%3Csvg width='19' height='18' viewBox='0 0 19 18' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M14 4.5L5 13.5' stroke='%23e30b5c' stroke-width='1.75' stroke-linecap='round' stroke-linejoin='round'/%3E%3Cpath d='M14 4.5L5 13.5' stroke='white' stroke-opacity='0.2' stroke-width='1.75' stroke-linecap='round' stroke-linejoin='round'/%3E%3Cpath d='M5 4.5L14 13.5' stroke='%23e30b5c' stroke-width='1.75' stroke-linecap='round' stroke-linejoin='round'/%3E%3Cpath d='M5 4.5L14 13.5' stroke='white' stroke-opacity='0.2' stroke-width='1.75' stroke-linecap='round' stroke-linejoin='round'/%3E%3C/svg%3E%0A");
}
.alert-primary .alert-link {
  color: #e30b5c;
}

.card .alert-primary hr {
  background-color: #e30b5c !important;
}

.tooltip-primary .tooltip-inner, .tooltip-primary > .tooltip .tooltip-inner, .ngb-tooltip-primary + ngb-tooltip-window .tooltip-inner {
  background: #e30b5c;
  color: #fff;
}
.tooltip-primary.bs-tooltip-auto[data-popper-placement=top] .tooltip-arrow::before, .tooltip-primary > .tooltip.bs-tooltip-auto[data-popper-placement=top] .tooltip-arrow::before, .ngb-tooltip-primary + ngb-tooltip-window.bs-tooltip-auto[data-popper-placement=top] .tooltip-arrow::before {
  border-top-color: #e30b5c;
}
.tooltip-primary.bs-tooltip-auto[data-popper-placement=left] .tooltip-arrow::before, .tooltip-primary > .tooltip.bs-tooltip-auto[data-popper-placement=left] .tooltip-arrow::before, .ngb-tooltip-primary + ngb-tooltip-window.bs-tooltip-auto[data-popper-placement=left] .tooltip-arrow::before {
  border-left-color: #e30b5c;
}
[dir=rtl] .tooltip-primary.bs-tooltip-auto[data-popper-placement=left] .tooltip-arrow::before, [dir=rtl] .tooltip-primary > .tooltip.bs-tooltip-auto[data-popper-placement=left] .tooltip-arrow::before, [dir=rtl] .ngb-tooltip-primary + ngb-tooltip-window.bs-tooltip-auto[data-popper-placement=left] .tooltip-arrow::before {
  border-right-color: #e30b5c;
}
.tooltip-primary.bs-tooltip-auto[data-popper-placement=bottom] .tooltip-arrow::before, .tooltip-primary > .tooltip.bs-tooltip-auto[data-popper-placement=bottom] .tooltip-arrow::before, .ngb-tooltip-primary + ngb-tooltip-window.bs-tooltip-auto[data-popper-placement=bottom] .tooltip-arrow::before {
  border-bottom-color: #e30b5c;
}
.tooltip-primary.bs-tooltip-auto[data-popper-placement=right] .tooltip-arrow::before, .tooltip-primary > .tooltip.bs-tooltip-auto[data-popper-placement=right] .tooltip-arrow::before, .ngb-tooltip-primary + ngb-tooltip-window.bs-tooltip-auto[data-popper-placement=right] .tooltip-arrow::before {
  border-right-color: #e30b5c;
}
[dir=rtl] .tooltip-primary.bs-tooltip-auto[data-popper-placement=right] .tooltip-arrow::before, [dir=rtl] .tooltip-primary > .tooltip.bs-tooltip-auto[data-popper-placement=right] .tooltip-arrow::before, [dir=rtl] .ngb-tooltip-primary + ngb-tooltip-window.bs-tooltip-auto[data-popper-placement=right] .tooltip-arrow::before {
  border-left-color: #e30b5c;
}

.popover-primary, .popover-primary > .popover, .ngb-popover-primary + ngb-popover-window {
  border-color: transparent;
  background: #e30b5c;
}
.popover-primary .popover-header, .popover-primary > .popover .popover-header, .ngb-popover-primary + ngb-popover-window .popover-header {
  border-color: #e30b5c;
  background: transparent;
  color: #fff;
}
.popover-primary .popover-body, .popover-primary > .popover .popover-body, .ngb-popover-primary + ngb-popover-window .popover-body {
  background: transparent;
  color: rgba(255, 255, 255, 0.8);
}
.popover-primary > .popover-arrow::before, .popover-primary > .popover > .popover-arrow::before, .ngb-popover-primary + ngb-popover-window > .popover-arrow::before {
  border-color: transparent;
}
.popover-primary.bs-popover-auto[data-popper-placement=top] > .popover-arrow::after, .popover-primary > .popover.bs-popover-auto[data-popper-placement=top] > .popover-arrow::after, .ngb-popover-primary + ngb-popover-window.bs-popover-auto[data-popper-placement=top] > .popover-arrow::after {
  border-top-color: #e30b5c !important;
}
.popover-primary.bs-popover-auto[data-popper-placement=right] > .popover-arrow::after, .popover-primary > .popover.bs-popover-auto[data-popper-placement=right] > .popover-arrow::after, .ngb-popover-primary + ngb-popover-window.bs-popover-auto[data-popper-placement=right] > .popover-arrow::after {
  border-right-color: #e30b5c !important;
}
[dir=rtl] .popover-primary.bs-popover-auto[data-popper-placement=right] > .popover-arrow::after, [dir=rtl] .popover-primary > .popover.bs-popover-auto[data-popper-placement=right] > .popover-arrow::after, [dir=rtl] .ngb-popover-primary + ngb-popover-window.bs-popover-auto[data-popper-placement=right] > .popover-arrow::after {
  border-left-color: #e30b5c !important;
}
.popover-primary.bs-popover-auto[data-popper-placement=bottom] > .popover-arrow::after, .popover-primary > .popover.bs-popover-auto[data-popper-placement=bottom] > .popover-arrow::after, .ngb-popover-primary + ngb-popover-window.bs-popover-auto[data-popper-placement=bottom] > .popover-arrow::after {
  border-bottom-color: #e30b5c !important;
}
.popover-primary.bs-popover-auto[data-popper-placement=left] > .popover-arrow::after, .popover-primary > .popover.bs-popover-auto[data-popper-placement=left] > .popover-arrow::after, .ngb-popover-primary + ngb-popover-window.bs-popover-auto[data-popper-placement=left] > .popover-arrow::after {
  border-left-color: #e30b5c !important;
}
[dir=rtl] .popover-primary.bs-popover-auto[data-popper-placement=left] > .popover-arrow::after, [dir=rtl] .popover-primary > .popover.bs-popover-auto[data-popper-placement=left] > .popover-arrow::after, [dir=rtl] .ngb-popover-primary + ngb-popover-window.bs-popover-auto[data-popper-placement=left] > .popover-arrow::after {
  border-right-color: #e30b5c !important;
}
.popover-primary.bs-popover-auto[data-popper-placement=bottom] .popover-header::before, .popover-primary > .popover.bs-popover-auto[data-popper-placement=bottom] .popover-header::before, .ngb-popover-primary + ngb-popover-window.bs-popover-auto[data-popper-placement=bottom] .popover-header::before {
  border-bottom: 1px solid transparent !important;
}

.table-primary {
  --bs-table-bg: #fdebf2;
  --bs-table-striped-bg: #f8e6ed;
  --bs-table-striped-color: #000;
  --bs-table-active-bg: #e9d8df;
  --bs-table-active-color: #000;
  --bs-table-hover-bg: #e9d8df;
  --bs-table-hover-color: #000;
  color: #000;
  border-color: #cabcc2;
}
.table-primary .btn-icon {
  color: #000;
}

.btn-primary {
  color: #fff;
  background-color: #e30b5c;
  border-color: #e30b5c;
}
.btn-primary:hover {
  color: #fff !important;
  background-color: #cc0a53 !important;
  border-color: #cc0a53 !important;
}
.btn-check:focus + .btn-primary, .btn-primary:focus, .btn-primary.focus {
  color: #fff;
  background-color: #cc0a53;
  border-color: #cc0a53;
  box-shadow: none;
}
.btn-check:checked + .btn-primary, .btn-check:active + .btn-primary, .btn-primary:active, .btn-primary.active, .btn-primary.show.dropdown-toggle, .show > .btn-primary.dropdown-toggle {
  color: #fff !important;
  background-color: #cc0a53 !important;
  border-color: #cc0a53 !important;
}
.btn-primary.disabled, .btn-primary:disabled {
  color: #fff !important;
  background-color: #e30b5c !important;
  border-color: #e30b5c !important;
  box-shadow: none !important;
}

.btn-group .btn-primary,
.input-group .btn-primary {
  border-right: 1px solid #cc0a53;
  border-left: 1px solid #cc0a53;
}

.btn-label-primary {
  color: #e30b5c;
  border-color: transparent;
  background: #4c2d4c;
}
.btn-label-primary.waves-effect .waves-ripple {
  background: radial-gradient(rgba(227, 11, 92, 0.2) 0, rgba(227, 11, 92, 0.3) 40%, rgba(227, 11, 92, 0.4) 50%, rgba(227, 11, 92, 0.5) 60%, rgba(255, 255, 255, 0) 70%);
}
.btn-label-primary:hover {
  border-color: transparent !important;
  background: #5a294e !important;
  color: #e30b5c !important;
}
.btn-label-primary:focus, .btn-label-primary.focus {
  color: #e30b5c;
  background: #5a294e;
  box-shadow: none !important;
}
.btn-label-primary:active, .btn-label-primary.active, .btn-label-primary.show.dropdown-toggle, .show > .btn-label-primary.dropdown-toggle {
  color: #e30b5c !important;
  background-color: #5a294e !important;
  border-color: transparent !important;
}
.btn-label-primary:active:focus, .btn-label-primary.active:focus, .btn-label-primary.show.dropdown-toggle:focus, .show > .btn-label-primary.dropdown-toggle:focus {
  box-shadow: none;
}
.btn-label-primary.disabled, .btn-label-primary:disabled {
  color: #e30b5c !important;
  border-color: transparent !important;
  background: #4a2d4c !important;
  box-shadow: none;
}

.btn-group .btn-label-primary,
.input-group .btn-label-primary {
  border-right: 1px solid #5a294e;
  border-left: 1px solid #5a294e;
}

.btn-outline-primary {
  color: #e30b5c;
  border-color: #e30b5c;
  background: transparent;
}
.btn-outline-primary.waves-effect .waves-ripple {
  background: radial-gradient(rgba(227, 11, 92, 0.2) 0, rgba(227, 11, 92, 0.3) 40%, rgba(227, 11, 92, 0.4) 50%, rgba(227, 11, 92, 0.5) 60%, rgba(255, 255, 255, 0) 70%);
}
.btn-outline-primary:hover {
  color: #e30b5c !important;
  background-color: #3d304b !important;
  border-color: #e30b5c !important;
}
.btn-check:focus + .btn-outline-primary, .btn-outline-primary:focus {
  color: #e30b5c;
  background-color: #3d304b;
  border-color: #e30b5c;
  box-shadow: none;
}
.btn-check:checked + .btn-outline-primary, .btn-check:active + .btn-outline-primary, .btn-outline-primary:active, .btn-outline-primary.active, .btn-outline-primary.dropdown-toggle.show {
  color: #e30b5c !important;
  background-color: #4c2d4c !important;
  border-color: #e30b5c !important;
}
.btn-check:checked + .btn-outline-primary:focus, .btn-check:active + .btn-outline-primary:focus, .btn-outline-primary:active:focus, .btn-outline-primary.active:focus, .btn-outline-primary.dropdown-toggle.show:focus {
  box-shadow: none;
}
.btn-outline-primary.disabled, .btn-outline-primary:disabled {
  color: #e30b5c !important;
  background-color: transparent !important;
}

.btn-outline-primary .badge {
  background: #e30b5c;
  border-color: #e30b5c;
  color: #fff;
}

.btn-outline-primary:hover .badge,
.btn-outline-primary:focus:hover .badge,
.btn-outline-primary:active .badge,
.btn-outline-primary.active .badge,
.show > .btn-outline-primary.dropdown-toggle .badge {
  background: #e30b5c;
  border-color: #e30b5c;
}

.dropdown-item:not(.disabled).active,
.dropdown-item:not(.disabled):active {
  background-color: #e30b5c;
  color: #fff !important;
}

.dropdown-menu > li:not(.disabled) > a:not(.dropdown-item):active,
.dropdown-menu > li.active:not(.disabled) > a:not(.dropdown-item) {
  background-color: #e30b5c;
  color: #fff !important;
}

.nav-pills .nav-link.active, .nav-pills .nav-link.active:hover, .nav-pills .nav-link.active:focus {
  background-color: #e30b5c;
  color: #fff;
}

.nav-tabs .nav-link.active, .nav-tabs .nav-link.active:hover, .nav-tabs .nav-link.active:focus,
.nav-tabs .nav-link.active,
.nav-tabs .nav-link.active:hover,
.nav-tabs .nav-link.active:focus {
  box-shadow: 0 -2px 0 #e30b5c inset;
}

.nav-align-bottom .nav-tabs .nav-link.active, .nav-align-bottom .nav-tabs .nav-link.active:hover, .nav-align-bottom .nav-tabs .nav-link.active:focus,
.nav-align-bottom .nav-tabs .nav-link.active,
.nav-align-bottom .nav-tabs .nav-link.active:hover,
.nav-align-bottom .nav-tabs .nav-link.active:focus {
  box-shadow: 0 2px 0 #e30b5c inset;
}

.nav-align-left .nav-tabs .nav-link.active, .nav-align-left .nav-tabs .nav-link.active:hover, .nav-align-left .nav-tabs .nav-link.active:focus,
.nav-align-left .nav-tabs .nav-link.active,
.nav-align-left .nav-tabs .nav-link.active:hover,
.nav-align-left .nav-tabs .nav-link.active:focus {
  box-shadow: -2px 0px 0 #e30b5c inset;
}

.nav-align-right .nav-tabs .nav-link.active, .nav-align-right .nav-tabs .nav-link.active:hover, .nav-align-right .nav-tabs .nav-link.active:focus,
.nav-align-right .nav-tabs .nav-link.active,
.nav-align-right .nav-tabs .nav-link.active:hover,
.nav-align-right .nav-tabs .nav-link.active:focus {
  box-shadow: 2px 0px 0 #e30b5c inset;
}

[dir=rtl] .nav-align-left .nav-tabs .nav-link.active, [dir=rtl] .nav-align-left .nav-tabs .nav-link.active:hover, [dir=rtl] .nav-align-left .nav-tabs .nav-link.active:focus,
[dir=rtl] .nav-align-left .nav-tabs .nav-link.active,
[dir=rtl] .nav-align-left .nav-tabs .nav-link.active:hover,
[dir=rtl] .nav-align-left .nav-tabs .nav-link.active:focus {
  box-shadow: 2px 0px 0 #e30b5c inset;
}
[dir=rtl] .nav-align-right .nav-tabs .nav-link.active, [dir=rtl] .nav-align-right .nav-tabs .nav-link.active:hover, [dir=rtl] .nav-align-right .nav-tabs .nav-link.active:focus,
[dir=rtl] .nav-align-right .nav-tabs .nav-link.active,
[dir=rtl] .nav-align-right .nav-tabs .nav-link.active:hover,
[dir=rtl] .nav-align-right .nav-tabs .nav-link.active:focus {
  box-shadow: -2px 0px 0 #e30b5c inset;
}

.form-control:focus,
.form-select:focus {
  border-color: #e30b5c;
}

.input-group:focus-within .form-control,
.input-group:focus-within .input-group-text {
  border-color: #e30b5c;
}

.form-check-input:focus {
  border-color: #e30b5c;
}
.form-check-input:checked, .form-check-input[type=checkbox]:indeterminate {
  background-color: #e30b5c;
  border-color: #e30b5c;
}

.custom-option.checked {
  border: 1px solid #e30b5c;
}

.form-switch .form-check-input:focus {
  background-image: url("data:image/svg+xml,%3Csvg width='18' height='18' viewBox='0 0 18 18' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Ccircle cx='9' cy='9' r='6' fill='%23e30b5c'/%3E%3C/svg%3E%0A");
}
.form-switch .form-check-input:checked {
  background-image: url("data:image/svg+xml,%3Csvg width='18' height='18' viewBox='0 0 18 18' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Ccircle cx='9' cy='9' r='6' fill='%23fff'/%3E%3C/svg%3E%0A");
}

.form-control:focus ~ .form-label {
  border-color: #e30b5c;
}
.form-control:focus ~ .form-label::after {
  border-color: inherit;
}

.switch-input:checked ~ .switch-toggle-slider {
  background: #e30b5c;
  color: #fff;
}

.switch-input:active ~ .switch-toggle-slider {
  box-shadow: none;
}

.switch-input:focus ~ .switch-toggle-slider {
  border: 1px solid #e30b5c;
  box-shadow: 0 0 0.25rem 0.05rem rgba(115, 103, 240, 0.1);
}

.switch-primary.switch .switch-input:checked ~ .switch-toggle-slider {
  background: #e30b5c;
  color: #fff;
}

.switch-primary.switch .switch-input:active ~ .switch-toggle-slider {
  box-shadow: none;
}

.switch-primary.switch .switch-input:focus ~ .switch-toggle-slider {
  border: 1px solid #e30b5c;
  box-shadow: 0 0 0.25rem 0.05rem rgba(115, 103, 240, 0.1);
}

.switch-outline.switch .switch-input ~ .switch-toggle-slider {
  border: 1px solid #aab3de;
  background: transparent;
}
.switch-outline.switch .switch-input ~ .switch-toggle-slider:after {
  box-shadow: none;
}

.switch-outline.switch .switch-input:checked ~ .switch-toggle-slider {
  border: 1px solid #e30b5c;
  color: #e30b5c;
}
.switch-outline.switch .switch-input:checked ~ .switch-toggle-slider:after {
  background: #e30b5c;
}

.switch-outline.switch .switch-input:active ~ .switch-toggle-slider {
  box-shadow: none;
}

.switch-outline.switch .switch-input:focus ~ .switch-toggle-slider {
  border: 1px solid #e30b5c;
  box-shadow: 0 0 0.25rem 0.05rem rgba(115, 103, 240, 0.1);
}

.switch-outline-primary.switch .switch-input ~ .switch-toggle-slider {
  border: 1px solid #aab3de;
  background: transparent;
}
.switch-outline-primary.switch .switch-input ~ .switch-toggle-slider:after {
  box-shadow: none;
}

.switch-outline-primary.switch .switch-input:checked ~ .switch-toggle-slider {
  border: 1px solid #e30b5c;
  color: #e30b5c;
}
.switch-outline-primary.switch .switch-input:checked ~ .switch-toggle-slider:after {
  background: #e30b5c;
}

.switch-outline-primary.switch .switch-input:active ~ .switch-toggle-slider {
  box-shadow: none;
}

.switch-outline-primary.switch .switch-input:focus ~ .switch-toggle-slider {
  border: 1px solid #e30b5c;
  box-shadow: 0 0 0.25rem 0.05rem rgba(115, 103, 240, 0.1);
}

.timeline .timeline-item-primary .timeline-event {
  background-color: rgba(227, 11, 92, 0.1);
}
.timeline .timeline-item-primary .timeline-event:before {
  border-left-color: rgba(227, 11, 92, 0.1) !important;
  border-right-color: rgba(227, 11, 92, 0.1) !important;
}

.timeline .timeline-point-primary {
  background-color: #e30b5c !important;
  box-shadow: 0 0 0 0.1875rem rgba(227, 11, 92, 0.16);
}

.timeline .timeline-indicator-primary i {
  color: #e30b5c !important;
}

.divider.divider-primary.divider-vertical:before, .divider.divider-primary.divider-vertical:after,
.divider.divider-primary .divider-text:before,
.divider.divider-primary .divider-text:after {
  border-color: #e30b5c;
}

.navbar.bg-primary {
  background-color: rgba(227, 11, 92, 0.95) !important;
  color: #f8bed3;
}
.navbar.bg-primary .navbar-brand,
.navbar.bg-primary .navbar-brand a {
  color: #fff;
}
.navbar.bg-primary .navbar-brand:hover, .navbar.bg-primary .navbar-brand:focus,
.navbar.bg-primary .navbar-brand a:hover,
.navbar.bg-primary .navbar-brand a:focus {
  color: #fff;
}
.navbar.bg-primary .navbar-search-wrapper .navbar-search-icon,
.navbar.bg-primary .navbar-search-wrapper .search-input {
  color: #f8bed3;
}
.navbar.bg-primary .search-input-wrapper .search-input,
.navbar.bg-primary .search-input-wrapper .search-toggler {
  background-color: #e30b5c !important;
  color: #f8bed3;
}
.navbar.bg-primary .navbar-nav > .nav-link,
.navbar.bg-primary .navbar-nav > .nav-item > .nav-link,
.navbar.bg-primary .navbar-nav > .nav > .nav-item > .nav-link {
  color: #f8bed3;
}
.navbar.bg-primary .navbar-nav > .nav-link:hover, .navbar.bg-primary .navbar-nav > .nav-link:focus,
.navbar.bg-primary .navbar-nav > .nav-item > .nav-link:hover,
.navbar.bg-primary .navbar-nav > .nav-item > .nav-link:focus,
.navbar.bg-primary .navbar-nav > .nav > .nav-item > .nav-link:hover,
.navbar.bg-primary .navbar-nav > .nav > .nav-item > .nav-link:focus {
  color: #fff;
}
.navbar.bg-primary .navbar-nav > .nav-link.disabled,
.navbar.bg-primary .navbar-nav > .nav-item > .nav-link.disabled,
.navbar.bg-primary .navbar-nav > .nav > .nav-item > .nav-link.disabled {
  color: #f076a3 !important;
}
.navbar.bg-primary .navbar-nav .show > .nav-link,
.navbar.bg-primary .navbar-nav .active > .nav-link,
.navbar.bg-primary .navbar-nav .nav-link.show,
.navbar.bg-primary .navbar-nav .nav-link.active {
  color: #fff;
}
.navbar.bg-primary .navbar-toggler {
  color: #f8bed3;
  border-color: rgba(255, 255, 255, 0.15);
}
.navbar.bg-primary .navbar-toggler-icon {
  background-image: url("data:image/svg+xml,%3Csvg width='14px' height='11px' viewBox='0 0 14 11' version='1.1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'%3E%3Cdefs%3E%3Cpath d='M0,0 L14,0 L14,1.75 L0,1.75 L0,0 Z M0,4.375 L14,4.375 L14,6.125 L0,6.125 L0,4.375 Z M0,8.75 L14,8.75 L14,10.5 L0,10.5 L0,8.75 Z' id='path-1'%3E%3C/path%3E%3C/defs%3E%3Cg id='💎-UI-Elements' stroke='none' stroke-width='1' fill='none' fill-rule='evenodd'%3E%3Cg id='12)-Navbar' transform='translate(-1174.000000, -1290.000000)'%3E%3Cg id='Group' transform='translate(1174.000000, 1288.000000)'%3E%3Cg id='Icon-Color' transform='translate(0.000000, 2.000000)'%3E%3Cuse fill='rgba(255, 255, 255, 0.8)' xlink:href='%23path-1'%3E%3C/use%3E%3Cuse fill-opacity='0.1' fill='rgba(255, 255, 255, 0.8)' xlink:href='%23path-1'%3E%3C/use%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
}
.navbar.bg-primary .navbar-text {
  color: #f8bed3;
}
.navbar.bg-primary .navbar-text a {
  color: #fff;
}
.navbar.bg-primary .navbar-text a:hover, .navbar.bg-primary .navbar-text a:focus {
  color: #fff;
}
.navbar.bg-primary hr {
  border-color: rgba(255, 255, 255, 0.15);
}

.menu.bg-primary {
  background-color: #e30b5c !important;
  color: #f8bed3;
}
.menu.bg-primary.menu-horizontal {
  background-color: rgba(227, 11, 92, 0.95) !important;
}
.menu.bg-primary .menu-link,
.menu.bg-primary .menu-horizontal-prev,
.menu.bg-primary .menu-horizontal-next {
  color: #f8bed3;
}
.menu.bg-primary .menu-link:hover, .menu.bg-primary .menu-link:focus,
.menu.bg-primary .menu-horizontal-prev:hover,
.menu.bg-primary .menu-horizontal-prev:focus,
.menu.bg-primary .menu-horizontal-next:hover,
.menu.bg-primary .menu-horizontal-next:focus {
  color: #fff;
}
.menu.bg-primary .menu-link.active,
.menu.bg-primary .menu-horizontal-prev.active,
.menu.bg-primary .menu-horizontal-next.active {
  color: #fff;
}
.menu.bg-primary .menu-item.disabled .menu-link,
.menu.bg-primary .menu-horizontal-prev.disabled,
.menu.bg-primary .menu-horizontal-next.disabled {
  color: #f076a3 !important;
}
.menu.bg-primary .menu-item.open:not(.menu-item-closing) > .menu-toggle,
.menu.bg-primary .menu-item.active > .menu-link {
  color: #fff;
}
.menu.bg-primary.menu-vertical .menu-item.active > .menu-link:not(.menu-toggle) {
  background: linear-gradient(72.47deg, #e41160 22.16%, rgba(228, 17, 96, 0.7) 76.47%);
  box-shadow: 0px 2px 6px 0px rgba(228, 17, 96, 0.48);
  color: #fff !important;
}
[dir=rtl] .menu.bg-primary.menu-vertical .menu-item.active > .menu-link:not(.menu-toggle) {
  background: linear-gradient(72.47deg, rgba(228, 17, 96, 0.7) 22.16%, #e41160 76.47%) !important;
}
.menu.bg-primary.menu-horizontal .menu-inner > .menu-item.active > .menu-link.menu-toggle {
  background: linear-gradient(72.47deg, #e41160 22.16%, rgba(228, 17, 96, 0.7) 76.47%);
  color: #fff !important;
  box-shadow: 0px 2px 6px 0px rgba(228, 17, 96, 0.48);
}
[dir=rtl] .menu.bg-primary.menu-horizontal .menu-inner > .menu-item.active > .menu-link.menu-toggle {
  background: linear-gradient(72.47deg, rgba(228, 17, 96, 0.7) 22.16%, #e41160 76.47%);
  box-shadow: 0px 2px 6px 0px rgba(228, 17, 96, 0.48);
  color: #fff !important;
}
.menu.bg-primary.menu-horizontal .menu-inner .menu-item:not(.menu-item-closing) > .menu-sub,
.menu.bg-primary.menu-horizontal .menu-inner .menu-item.open > .menu-toggle {
  background: #e30b5c;
}
.menu.bg-primary.menu-horizontal .menu-item.active > .menu-link:not(.menu-toggle) {
  background: #e30b5c;
  color: #e41160 !important;
}
.menu.bg-primary .menu-inner > .menu-item.menu-item-closing .menu-item.open .menu-sub,
.menu.bg-primary .menu-inner > .menu-item.menu-item-closing .menu-item.open .menu-toggle {
  background: transparent;
  color: #fff;
}
.menu.bg-primary .menu-inner-shadow {
  background: linear-gradient(#e30b5c 41%, rgba(227, 11, 92, 0.11) 95%, rgba(227, 11, 92, 0));
}
.menu.bg-primary .menu-text {
  color: #fff;
}
.menu.bg-primary .menu-header {
  color: #f391b5;
}
.menu.bg-primary hr,
.menu.bg-primary .menu-divider,
.menu.bg-primary .menu-inner > .menu-item.open > .menu-sub::before {
  border-color: rgba(255, 255, 255, 0.15) !important;
}
.menu.bg-primary .menu-block::before {
  background-color: #f391b5;
}
.menu.bg-primary .ps__thumb-y,
.menu.bg-primary .ps__rail-y.ps--clicking > .ps__thumb-y {
  background: rgba(255, 255, 255, 0.5330478431) !important;
}

.layout-footer-fixed .layout-horizontal .footer.bg-primary {
  background-color: #e30b5c !important;
  color: #f8bed3;
}
.layout-footer-fixed .layout-wrapper:not(.layout-horizontal) .footer.bg-primary .footer-container {
  background-color: #e30b5c !important;
  color: #f8bed3;
}
.footer.bg-primary .footer-link {
  color: #f8bed3;
}
.footer.bg-primary .footer-link:hover, .footer.bg-primary .footer-link:focus {
  color: #fff;
}
.footer.bg-primary .footer-link.disabled {
  color: #f076a3 !important;
}
.footer.bg-primary .footer-text {
  color: #fff;
}
.footer.bg-primary .show > .footer-link,
.footer.bg-primary .active > .footer-link,
.footer.bg-primary .footer-link.show,
.footer.bg-primary .footer-link.active {
  color: #fff;
}
.footer.bg-primary hr {
  border-color: rgba(255, 255, 255, 0.15);
}

.form-floating > .form-control:focus ~ label,
.form-floating > .form-control:not(:placeholder-shown) ~ label,
.form-floating > .form-select ~ label {
  color: #e30b5c;
}
.form-floating > .form-control:-webkit-autofill ~ label {
  color: #e30b5c;
}

.svg-illustration svg {
  fill: #e30b5c;
}

.jstree-default .jstree-wholerow-hovered,
.jstree-default .jstree-hovered {
  background: rgba(115, 103, 240, 0.08);
  color: #7367f0;
}
.jstree-default .jstree-wholerow-clicked,
.jstree-default .jstree-clicked {
  background: #7367f0;
  color: #fff;
}

.jstree-default-dark .jstree-wholerow-hovered,
.jstree-default-dark .jstree-hovered {
  background: rgba(115, 103, 240, 0.08);
  color: #7367f0;
}
.jstree-default-dark .jstree-wholerow-clicked,
.jstree-default-dark .jstree-clicked {
  background: #7367f0;
  color: #fff;
}

html:not([dir=rtl]) .border-primary,
html[dir=rtl] .border-primary {
  border-color: #e30b5c !important;
}

a {
  color: #e30b5c;
}
a:hover {
  color: #e6236c;
}

.fill-primary {
  fill: #e30b5c;
}

.noUi-primary .noUi-base .noUi-connect {
  background: #e30b5c !important;
}
.noUi-primary .noUi-base .noUi-origin .noUi-handle {
  background: #b6094a !important;
}

.select2-container--default.select2-container--focus .select2-selection, .select2-container--default.select2-container--open .select2-selection {
  border-color: #e30b5c !important;
}

.select2-primary .select2-container--default .select2-selection--multiple .select2-selection__choice {
  background: rgba(227, 11, 92, 0.16) !important;
  color: #e30b5c !important;
}

.tagify--focus {
  border-color: #e30b5c !important;
}

.tagify__dropdown__item--active {
  background: #e30b5c !important;
}

table.dataTable.dtr-column > tbody > tr > td.control:before,
table.dataTable.dtr-column > tbody > tr > th.control:before {
  background-color: #e30b5c;
  border: 2px solid #8692d0;
  box-shadow: 0 0 3px rgba(0, 0, 0, 0.45);
}

.bootstrap-select .dropdown-menu.inner a[aria-selected=true] {
  background: #e30b5c !important;
  color: #fff !important;
}
.bootstrap-select .dropdown-toggle.show {
  border-color: #e30b5c;
}

.datepicker table tr td.active, .datepicker table tr td.active.highlighted, .datepicker table tr td.active,
.datepicker table tr td span.active,
.datepicker table tr td span.active.disabled, .datepicker table tr td.range-start, .datepicker table tr td.range-end {
  background: #e30b5c !important;
  color: #fff !important;
}
.datepicker table tr td.range, .datepicker table tr td.range.highlighted, .datepicker table tr td.range.today {
  color: #e30b5c !important;
  background: #fbd8e5 !important;
}
.datepicker table tr td.range.focused, .datepicker table tr td.range.highlighted.focused, .datepicker table tr td.range.today.focused {
  background: #f8c4d8 !important;
}
.datepicker table tr td.range.disabled, .datepicker table tr td.range.highlighted.disabled, .datepicker table tr td.range.today.disabled {
  background: rgba(251, 216, 229, 0.5) !important;
  color: rgba(227, 11, 92, 0.5) !important;
}
.datepicker table tr td.today:not(.active) {
  border: 1px solid #e30b5c;
}

.flatpickr-calendar .numInputWrapper span.arrowDown:after {
  border-top-color: #fff;
}
.flatpickr-calendar .numInputWrapper span.arrowUp:after {
  border-bottom-color: #fff;
}

.flatpickr-day.today {
  border-color: #e30b5c;
}
.flatpickr-day.inRange, .flatpickr-day.nextMonthDay.inRange, .flatpickr-day.prevMonthDay.inRange, .flatpickr-day.today.inRange, .flatpickr-day.prevMonthDay.today.inRange, .flatpickr-day.nextMonthDay.today.inRange {
  color: #e30b5c !important;
  background: #fbd8e5 !important;
  border-color: #fbd8e5 !important;
}
.flatpickr-day.selected, .flatpickr-day.selected.inRange, .flatpickr-day.selected:focus, .flatpickr-day.selected:hover, .flatpickr-day.selected.nextMonthDay, .flatpickr-day.selected.prevMonthDay, .flatpickr-day.startRange, .flatpickr-day.startRange.inRange, .flatpickr-day.startRange:focus, .flatpickr-day.startRange:hover, .flatpickr-day.startRange.nextMonthDay, .flatpickr-day.startRange.prevMonthDay, .flatpickr-day.endRange, .flatpickr-day.endRange.inRange, .flatpickr-day.endRange:focus, .flatpickr-day.endRange:hover, .flatpickr-day.endRange.nextMonthDay, .flatpickr-day.endRange.prevMonthDay, .flatpickr-day.week.selected {
  color: #fff !important;
  background: #e30b5c !important;
  border-color: #e30b5c !important;
}

.daterangepicker td.active:not(.off) {
  background: #e30b5c !important;
  color: #fff;
}

.daterangepicker .start-date:not(.end-date):not(.off),
.daterangepicker .end-date:not(.start-date):not(.off) {
  background-color: #e30b5c;
  color: #fff;
  border: 0 !important;
}
.daterangepicker .start-date:not(.end-date):not(.off):hover,
.daterangepicker .end-date:not(.start-date):not(.off):hover {
  background-color: #e30b5c !important;
}

.daterangepicker .input-mini.active {
  border-color: #e30b5c !important;
}

.daterangepicker td.in-range:not(.start-date):not(.end-date):not(.off) {
  color: #e30b5c !important;
  background-color: #fbd8e5 !important;
}

.ranges li.active {
  color: #fff !important;
  background-color: #e30b5c !important;
}

li.ui-timepicker-selected,
.ui-timepicker-list .ui-timepicker-selected:hover {
  color: #fff !important;
  background: #e30b5c !important;
}

.ql-snow.ql-toolbar button:hover,
.ql-snow.ql-toolbar button:focus,
.ql-snow.ql-toolbar button.ql-active,
.ql-snow.ql-toolbar .ql-picker-label:hover,
.ql-snow.ql-toolbar .ql-picker-label.ql-active,
.ql-snow.ql-toolbar .ql-picker-item:hover,
.ql-snow.ql-toolbar .ql-picker-item.ql-selected,
.ql-snow .ql-toolbar button:hover,
.ql-snow .ql-toolbar button:focus,
.ql-snow .ql-toolbar button.ql-active,
.ql-snow .ql-toolbar .ql-picker-label:hover,
.ql-snow .ql-toolbar .ql-picker-label.ql-active,
.ql-snow .ql-toolbar .ql-picker-item:hover,
.ql-snow .ql-toolbar .ql-picker-item.ql-selected {
  color: #e30b5c !important;
}
.ql-snow.ql-toolbar button:hover .ql-fill,
.ql-snow.ql-toolbar button:focus .ql-fill,
.ql-snow.ql-toolbar button.ql-active .ql-fill,
.ql-snow.ql-toolbar .ql-picker-label:hover .ql-fill,
.ql-snow.ql-toolbar .ql-picker-label.ql-active .ql-fill,
.ql-snow.ql-toolbar .ql-picker-item:hover .ql-fill,
.ql-snow.ql-toolbar .ql-picker-item.ql-selected .ql-fill,
.ql-snow.ql-toolbar button:hover .ql-stroke.ql-fill,
.ql-snow.ql-toolbar button:focus .ql-stroke.ql-fill,
.ql-snow.ql-toolbar button.ql-active .ql-stroke.ql-fill,
.ql-snow.ql-toolbar .ql-picker-label:hover .ql-stroke.ql-fill,
.ql-snow.ql-toolbar .ql-picker-label.ql-active .ql-stroke.ql-fill,
.ql-snow.ql-toolbar .ql-picker-item:hover .ql-stroke.ql-fill,
.ql-snow.ql-toolbar .ql-picker-item.ql-selected .ql-stroke.ql-fill,
.ql-snow .ql-toolbar button:hover .ql-fill,
.ql-snow .ql-toolbar button:focus .ql-fill,
.ql-snow .ql-toolbar button.ql-active .ql-fill,
.ql-snow .ql-toolbar .ql-picker-label:hover .ql-fill,
.ql-snow .ql-toolbar .ql-picker-label.ql-active .ql-fill,
.ql-snow .ql-toolbar .ql-picker-item:hover .ql-fill,
.ql-snow .ql-toolbar .ql-picker-item.ql-selected .ql-fill,
.ql-snow .ql-toolbar button:hover .ql-stroke.ql-fill,
.ql-snow .ql-toolbar button:focus .ql-stroke.ql-fill,
.ql-snow .ql-toolbar button.ql-active .ql-stroke.ql-fill,
.ql-snow .ql-toolbar .ql-picker-label:hover .ql-stroke.ql-fill,
.ql-snow .ql-toolbar .ql-picker-label.ql-active .ql-stroke.ql-fill,
.ql-snow .ql-toolbar .ql-picker-item:hover .ql-stroke.ql-fill,
.ql-snow .ql-toolbar .ql-picker-item.ql-selected .ql-stroke.ql-fill {
  fill: #e30b5c !important;
}
.ql-snow.ql-toolbar button:hover .ql-stroke,
.ql-snow.ql-toolbar button:focus .ql-stroke,
.ql-snow.ql-toolbar button.ql-active .ql-stroke,
.ql-snow.ql-toolbar .ql-picker-label:hover .ql-stroke,
.ql-snow.ql-toolbar .ql-picker-label.ql-active .ql-stroke,
.ql-snow.ql-toolbar .ql-picker-item:hover .ql-stroke,
.ql-snow.ql-toolbar .ql-picker-item.ql-selected .ql-stroke,
.ql-snow.ql-toolbar button:hover .ql-stroke-miter,
.ql-snow.ql-toolbar button:focus .ql-stroke-miter,
.ql-snow.ql-toolbar button.ql-active .ql-stroke-miter,
.ql-snow.ql-toolbar .ql-picker-label:hover .ql-stroke-miter,
.ql-snow.ql-toolbar .ql-picker-label.ql-active .ql-stroke-miter,
.ql-snow.ql-toolbar .ql-picker-item:hover .ql-stroke-miter,
.ql-snow.ql-toolbar .ql-picker-item.ql-selected .ql-stroke-miter,
.ql-snow .ql-toolbar button:hover .ql-stroke,
.ql-snow .ql-toolbar button:focus .ql-stroke,
.ql-snow .ql-toolbar button.ql-active .ql-stroke,
.ql-snow .ql-toolbar .ql-picker-label:hover .ql-stroke,
.ql-snow .ql-toolbar .ql-picker-label.ql-active .ql-stroke,
.ql-snow .ql-toolbar .ql-picker-item:hover .ql-stroke,
.ql-snow .ql-toolbar .ql-picker-item.ql-selected .ql-stroke,
.ql-snow .ql-toolbar button:hover .ql-stroke-miter,
.ql-snow .ql-toolbar button:focus .ql-stroke-miter,
.ql-snow .ql-toolbar button.ql-active .ql-stroke-miter,
.ql-snow .ql-toolbar .ql-picker-label:hover .ql-stroke-miter,
.ql-snow .ql-toolbar .ql-picker-label.ql-active .ql-stroke-miter,
.ql-snow .ql-toolbar .ql-picker-item:hover .ql-stroke-miter,
.ql-snow .ql-toolbar .ql-picker-item.ql-selected .ql-stroke-miter {
  stroke: #e30b5c !important;
}

.tt-suggestion:active,
.tt-cursor {
  background: #e30b5c !important;
  color: #fff !important;
}

.dropzone.dz-drag-hover {
  border-color: #e30b5c !important;
}

.swiper-pagination-bullet.swiper-pagination-bullet-active,
.swiper-pagination.swiper-pagination-progressbar .swiper-pagination-progressbar-fill {
  background: #e30b5c !important;
}

.sk-primary.sk-plane,
.sk-primary .sk-chase-dot:before,
.sk-primary .sk-bounce-dot,
.sk-primary .sk-wave-rect,
.sk-primary.sk-pulse,
.sk-primary .sk-swing-dot,
.sk-primary .sk-circle-dot:before,
.sk-primary .sk-circle-fade-dot:before,
.sk-primary .sk-grid-cube,
.sk-primary .sk-fold-cube:before {
  background-color: #e30b5c;
}

.plyr input[type=range]::-ms-fill-lower {
  background: #e30b5c !important;
}

.plyr input[type=range]:active::-webkit-slider-thumb {
  background: #e30b5c !important;
}
.plyr input[type=range]:active::-moz-range-thumb {
  background: #e30b5c !important;
}
.plyr input[type=range]:active::-ms-thumb {
  background: #e30b5c !important;
}

.plyr--video .plyr__control.plyr__control--overlaid,
.plyr--video .plyr__controls button.tab-focus:focus,
.plyr--video .plyr__control[aria-expanded=true],
.plyr--video .plyr__controls button:hover {
  background: #e30b5c !important;
  color: #fff !important;
}

.plyr--audio .plyr__controls button.tab-focus:focus,
.plyr--audio .plyr__control[aria-expanded=true],
.plyr--audio .plyr__controls button:hover {
  background: #e30b5c !important;
  color: #fff !important;
}

.plyr__play-large {
  background: #e30b5c !important;
  color: #fff !important;
}

.plyr__progress--played,
.plyr__volume--display {
  color: #e30b5c !important;
}

.plyr--full-ui input[type=range] {
  color: #e30b5c !important;
}

.plyr__menu__container .plyr__control[role=menuitemradio][aria-checked=true]::before {
  background: #e30b5c !important;
}

.fc .fc-event-primary:not(.fc-list-event) {
  background-color: #4c2d4c !important;
  color: #e30b5c !important;
}
.fc .fc-event-primary.fc-list-event .fc-list-event-dot {
  border-color: #e30b5c !important;
}
.fc .fc-button-primary:not(.fc-prev-button):not(.fc-next-button) {
  background-color: rgba(227, 11, 92, 0.16) !important;
  border: 0;
  color: #e30b5c;
}
.fc .fc-button-primary:not(.fc-prev-button):not(.fc-next-button).fc-button-active, .fc .fc-button-primary:not(.fc-prev-button):not(.fc-next-button):hover {
  background-color: rgba(227, 11, 92, 0.24) !important;
  color: #e30b5c;
}

.swal2-progress-steps[class] .swal2-progress-step.swal2-active-progress-step,
.swal2-progress-steps[class] .swal2-progress-step-line,
.swal2-progress-steps[class] .swal2-active-progress-step,
.swal2-progress-steps[class] .swal2-progress-step {
  background: #e30b5c;
  color: #fff;
}

.swal2-progress-steps[class] .swal2-progress-step.swal2-active-progress-step ~ .swal2-progress-step,
.swal2-progress-steps[class] .swal2-progress-step.swal2-active-progress-step ~ .swal2-progress-step-line {
  background: #fbdae7;
}

.pcr-app .pcr-type.active,
.pcr-app .pcr-save {
  background: #e30b5c !important;
}

.icon-card.active {
  outline: 1px solid #e30b5c;
}
.icon-card.active i,
.icon-card.active svg {
  color: #e30b5c;
}

.shepherd-element .shepherd-button:not(:disabled).btn-primary {
  color: #fff;
  background-color: #e30b5c;
  border-color: #e30b5c;
}
.shepherd-element .shepherd-button:not(:disabled).btn-primary:hover {
  color: #fff !important;
  background-color: #cc0a53 !important;
  border-color: #cc0a53 !important;
}
.btn-check:focus + .shepherd-element .shepherd-button:not(:disabled).btn-primary, .shepherd-element .shepherd-button:not(:disabled).btn-primary:focus, .shepherd-element .shepherd-button:not(:disabled).btn-primary.focus {
  color: #fff;
  background-color: #cc0a53;
  border-color: #cc0a53;
  box-shadow: none;
}
.btn-check:checked + .shepherd-element .shepherd-button:not(:disabled).btn-primary, .btn-check:active + .shepherd-element .shepherd-button:not(:disabled).btn-primary, .shepherd-element .shepherd-button:not(:disabled).btn-primary:active, .shepherd-element .shepherd-button:not(:disabled).btn-primary.active, .shepherd-element .shepherd-button:not(:disabled).btn-primary.show.dropdown-toggle, .show > .shepherd-element .shepherd-button:not(:disabled).btn-primary.dropdown-toggle {
  color: #fff !important;
  background-color: #cc0a53 !important;
  border-color: #cc0a53 !important;
}
.shepherd-element .shepherd-button:not(:disabled).btn-primary.disabled, .shepherd-element .shepherd-button:not(:disabled).btn-primary:disabled {
  color: #fff !important;
  background-color: #e30b5c !important;
  border-color: #e30b5c !important;
  box-shadow: none !important;
}
.shepherd-element .btn-group .shepherd-button:not(:disabled).btn-primary,
.shepherd-element .input-group .shepherd-button:not(:disabled).btn-primary {
  border-right: 1px solid #cc0a53;
  border-left: 1px solid #cc0a53;
}
.shepherd-element .shepherd-button:not(:disabled).btn-label-secondary {
  color: #a8aaae;
  border-color: transparent;
  background: #424659;
}
.shepherd-element .shepherd-button:not(:disabled).btn-label-secondary.waves-effect .waves-ripple {
  background: radial-gradient(rgba(168, 170, 174, 0.2) 0, rgba(168, 170, 174, 0.3) 40%, rgba(168, 170, 174, 0.4) 50%, rgba(168, 170, 174, 0.5) 60%, rgba(255, 255, 255, 0) 70%);
}
.shepherd-element .shepherd-button:not(:disabled).btn-label-secondary:hover {
  border-color: transparent !important;
  background: #4c5061 !important;
  color: #a8aaae !important;
}
.shepherd-element .shepherd-button:not(:disabled).btn-label-secondary:focus, .shepherd-element .shepherd-button:not(:disabled).btn-label-secondary.focus {
  color: #a8aaae;
  background: #4c5061;
  box-shadow: none !important;
}
.shepherd-element .shepherd-button:not(:disabled).btn-label-secondary:active, .shepherd-element .shepherd-button:not(:disabled).btn-label-secondary.active, .shepherd-element .shepherd-button:not(:disabled).btn-label-secondary.show.dropdown-toggle, .show > .shepherd-element .shepherd-button:not(:disabled).btn-label-secondary.dropdown-toggle {
  color: #a8aaae !important;
  background-color: #4c5061 !important;
  border-color: transparent !important;
}
.shepherd-element .shepherd-button:not(:disabled).btn-label-secondary:active:focus, .shepherd-element .shepherd-button:not(:disabled).btn-label-secondary.active:focus, .shepherd-element .shepherd-button:not(:disabled).btn-label-secondary.show.dropdown-toggle:focus, .show > .shepherd-element .shepherd-button:not(:disabled).btn-label-secondary.dropdown-toggle:focus {
  box-shadow: none;
}
.shepherd-element .shepherd-button:not(:disabled).btn-label-secondary.disabled, .shepherd-element .shepherd-button:not(:disabled).btn-label-secondary:disabled {
  color: #a8aaae !important;
  border-color: transparent !important;
  background: #414558 !important;
  box-shadow: none;
}
.shepherd-element .btn-group .shepherd-button:not(:disabled).btn-label-secondary,
.shepherd-element .input-group .shepherd-button:not(:disabled).btn-label-secondary {
  border-right: 1px solid #4c5061;
  border-left: 1px solid #4c5061;
}

.bs-stepper .step.active .bs-stepper-circle {
  background-color: #e30b5c;
  color: #fff;
}
.bs-stepper .step.active .bs-stepper-icon svg {
  fill: #e30b5c !important;
}
.bs-stepper .step.active .bs-stepper-icon i,
.bs-stepper .step.active .bs-stepper-label {
  color: #e30b5c !important;
}
.bs-stepper .step.crossed .step-trigger .bs-stepper-circle {
  background-color: #3d304b !important;
  color: #9b1b54 !important;
}
.bs-stepper .step.crossed .step-trigger .bs-stepper-icon svg {
  fill: #e30b5c !important;
}
.bs-stepper .step.crossed .step-trigger .bs-stepper-icon i {
  color: #e30b5c !important;
}
.bs-stepper.wizard-icons .step.crossed .bs-stepper-label {
  color: #e30b5c !important;
}
.bs-stepper.wizard-icons .step.crossed + .line i {
  color: #e30b5c;
}

.app-chat .sidebar-body .chat-contact-list li.active {
  background: linear-gradient(72.47deg, #e30b5c 22.16%, rgba(227, 11, 92, 0.7) 76.47%);
}
[dir=rtl] .app-chat .sidebar-body .chat-contact-list li.active {
  background: linear-gradient(72.47deg, rgba(227, 11, 92, 0.7) 22.16%, #e30b5c 76.47%) !important;
}
.app-chat .app-chat-history .chat-history .chat-message.chat-message-right .chat-message-text {
  background-color: #e30b5c !important;
}

.bg-navbar-theme {
  background-color: rgb(0 0 0 / 95%) !important;
  color: #b6bee3;
  border: 1px solid #ff9f43;
}
.bg-navbar-theme .navbar-brand,
.bg-navbar-theme .navbar-brand a {
  color: #cfd3ec;
}
.bg-navbar-theme .navbar-brand:hover, .bg-navbar-theme .navbar-brand:focus,
.bg-navbar-theme .navbar-brand a:hover,
.bg-navbar-theme .navbar-brand a:focus {
  color: #cfd3ec;
}
.bg-navbar-theme .navbar-search-wrapper .navbar-search-icon,
.bg-navbar-theme .navbar-search-wrapper .search-input {
  color: #b6bee3;
}
.bg-navbar-theme .search-input-wrapper .search-input,
.bg-navbar-theme .search-input-wrapper .search-toggler {
  background-color: #2f3349 !important;
  color: #b6bee3;
}
.bg-navbar-theme .navbar-nav > .nav-link,
.bg-navbar-theme .navbar-nav > .nav-item > .nav-link,
.bg-navbar-theme .navbar-nav > .nav > .nav-item > .nav-link {
  color: #b6bee3;
}
.bg-navbar-theme .navbar-nav > .nav-link:hover, .bg-navbar-theme .navbar-nav > .nav-link:focus,
.bg-navbar-theme .navbar-nav > .nav-item > .nav-link:hover,
.bg-navbar-theme .navbar-nav > .nav-item > .nav-link:focus,
.bg-navbar-theme .navbar-nav > .nav > .nav-item > .nav-link:hover,
.bg-navbar-theme .navbar-nav > .nav > .nav-item > .nav-link:focus {
  color: #cfd3ec;
}
.bg-navbar-theme .navbar-nav > .nav-link.disabled,
.bg-navbar-theme .navbar-nav > .nav-item > .nav-link.disabled,
.bg-navbar-theme .navbar-nav > .nav > .nav-item > .nav-link.disabled {
  color: #8086a5 !important;
}
.bg-navbar-theme .navbar-nav .show > .nav-link,
.bg-navbar-theme .navbar-nav .active > .nav-link,
.bg-navbar-theme .navbar-nav .nav-link.show,
.bg-navbar-theme .navbar-nav .nav-link.active {
  color: #cfd3ec;
}
.bg-navbar-theme .navbar-toggler {
  color: #b6bee3;
  border-color: rgba(207, 211, 236, 0.06);
}
.bg-navbar-theme .navbar-toggler-icon {
  background-image: url("data:image/svg+xml,%3Csvg width='14px' height='11px' viewBox='0 0 14 11' version='1.1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'%3E%3Cdefs%3E%3Cpath d='M0,0 L14,0 L14,1.75 L0,1.75 L0,0 Z M0,4.375 L14,4.375 L14,6.125 L0,6.125 L0,4.375 Z M0,8.75 L14,8.75 L14,10.5 L0,10.5 L0,8.75 Z' id='path-1'%3E%3C/path%3E%3C/defs%3E%3Cg id='💎-UI-Elements' stroke='none' stroke-width='1' fill='none' fill-rule='evenodd'%3E%3Cg id='12)-Navbar' transform='translate(-1174.000000, -1290.000000)'%3E%3Cg id='Group' transform='translate(1174.000000, 1288.000000)'%3E%3Cg id='Icon-Color' transform='translate(0.000000, 2.000000)'%3E%3Cuse fill='rgba(255, 255, 255, 0.8)' xlink:href='%23path-1'%3E%3C/use%3E%3Cuse fill-opacity='0.1' fill='rgba(255, 255, 255, 0.8)' xlink:href='%23path-1'%3E%3C/use%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
}
.bg-navbar-theme .navbar-text {
  color: #b6bee3;
}
.bg-navbar-theme .navbar-text a {
  color: #cfd3ec;
}
.bg-navbar-theme .navbar-text a:hover, .bg-navbar-theme .navbar-text a:focus {
  color: #cfd3ec;
}
.bg-navbar-theme hr {
  border-color: rgba(207, 211, 236, 0.06);
}

.layout-navbar {
  box-shadow: 0 1px 0 #434968;
  backdrop-filter: saturate(200%) blur(6px);
}

.menu-horizontal {
  backdrop-filter: saturate(200%) blur(6px);
}

.navbar-detached {
  box-shadow: 0 0 0.375rem 0.25rem rgba(0, 0, 0, 0.15);
}

.layout-navbar-fixed .layout-page:before {
  backdrop-filter: saturate(200%) blur(10px);
  background: linear-gradient(180deg, rgba(37, 41, 60, 0.7) 44%, rgba(37, 41, 60, 0.43) 73%, rgba(37, 41, 60, 0));
  -webkit-mask: linear-gradient(#25293c, #25293c 18%, transparent 100%);
  mask: linear-gradient(#25293c, #25293c 18%, transparent 100%);
}

.layout-horizontal .layout-navbar {
  box-shadow: 0 1px 0 #434968;
}

.bg-menu-theme {
  background: url(https://e0.pxfuel.com/wallpapers/312/834/desktop-wallpaper-naruto-uzumaki-kurama-kyubi-narutouzumaki-hokage-anime-thumbnail.jpg);
  color: #b6bee3;
}
.bg-menu-theme.menu-horizontal {
  background-color: rgba(47, 51, 73, 0.95) !important;
}
.bg-menu-theme .menu-link,
.bg-menu-theme .menu-horizontal-prev,
.bg-menu-theme .menu-horizontal-next {
  color: #b6bee3;
}
.bg-menu-theme .menu-link:hover, .bg-menu-theme .menu-link:focus,
.bg-menu-theme .menu-horizontal-prev:hover,
.bg-menu-theme .menu-horizontal-prev:focus,
.bg-menu-theme .menu-horizontal-next:hover,
.bg-menu-theme .menu-horizontal-next:focus {
  color: #b6bee3;
}
.bg-menu-theme .menu-link.active,
.bg-menu-theme .menu-horizontal-prev.active,
.bg-menu-theme .menu-horizontal-next.active {
  color: #b6bee3;
}
.bg-menu-theme .menu-item.disabled .menu-link,
.bg-menu-theme .menu-horizontal-prev.disabled,
.bg-menu-theme .menu-horizontal-next.disabled {
  color: #8086a5 !important;
}
.bg-menu-theme .menu-item.open:not(.menu-item-closing) > .menu-toggle,
.bg-menu-theme .menu-item.active > .menu-link {
  color: #b6bee3;
}
.bg-menu-theme.menu-vertical .menu-item.active > .menu-link:not(.menu-toggle) {
  background: linear-gradient(72.47deg, #000000 22.16%, rgb(0 0 0 / 70%) 76.47%);
  box-shadow: 0px 2px 6px 0px #ff9f43;
  color: #fff !important;
}
[dir=rtl] .bg-menu-theme.menu-vertical .menu-item.active > .menu-link:not(.menu-toggle) {
  background: linear-gradient(72.47deg, rgba(227, 11, 92, 0.7) 22.16%, #e30b5c 76.47%) !important;
}
.bg-menu-theme.menu-horizontal .menu-inner > .menu-item.active > .menu-link.menu-toggle {
  background: linear-gradient(72.47deg, #e30b5c 22.16%, rgba(227, 11, 92, 0.7) 76.47%);
  color: #fff !important;
  box-shadow: 0px 2px 6px 0px rgba(227, 11, 92, 0.48);
}
[dir=rtl] .bg-menu-theme.menu-horizontal .menu-inner > .menu-item.active > .menu-link.menu-toggle {
  background: linear-gradient(72.47deg, rgba(227, 11, 92, 0.7) 22.16%, #e30b5c 76.47%);
  box-shadow: 0px 2px 6px 0px rgba(227, 11, 92, 0.48);
  color: #fff !important;
}
.bg-menu-theme.menu-horizontal .menu-inner .menu-item:not(.menu-item-closing) > .menu-sub,
.bg-menu-theme.menu-horizontal .menu-inner .menu-item.open > .menu-toggle {
  background: #2f3349;
}
.bg-menu-theme.menu-horizontal .menu-item.active > .menu-link:not(.menu-toggle) {
  background: #3d304b;
  color: #e30b5c !important;
}
.bg-menu-theme .menu-inner > .menu-item.menu-item-closing .menu-item.open .menu-sub,
.bg-menu-theme .menu-inner > .menu-item.menu-item-closing .menu-item.open .menu-toggle {
  background: transparent;
  color: #fff;
}
.bg-menu-theme .menu-inner-shadow {
  background: linear-gradient(#2f3349 41%, rgba(47, 51, 73, 0.11) 95%, rgba(47, 51, 73, 0));
}
.bg-menu-theme .menu-text {
  color: #b6bee3;
}
.bg-menu-theme .menu-header {
  color: #949bbd;
}
.bg-menu-theme hr,
.bg-menu-theme .menu-divider,
.bg-menu-theme .menu-inner > .menu-item.open > .menu-sub::before {
  border-color: rgba(182, 190, 227, 0.06) !important;
}
.bg-menu-theme .menu-block::before {
  background-color: #949bbd;
}
.bg-menu-theme .ps__thumb-y,
.bg-menu-theme .ps__rail-y.ps--clicking > .ps__thumb-y {
  background: rgba(182, 190, 227, 0.7179419608) !important;
}

.bg-menu-theme .menu-inner .menu-item.open > .menu-link.menu-toggle, .layout-menu-hover.layout-menu-collapsed .bg-menu-theme .menu-inner .menu-item.open > .menu-link.menu-toggle, .bg-menu-theme .menu-inner .menu-item.active > .menu-link.menu-toggle, .layout-menu-hover.layout-menu-collapsed .bg-menu-theme .menu-inner .menu-item.active > .menu-link.menu-toggle {
  background: rgba(134, 146, 208, 0.06);
}
html:not(.layout-menu-collapsed) .bg-menu-theme .menu-inner .menu-item:not(.active) .menu-link:hover, .layout-menu-hover.layout-menu-collapsed .bg-menu-theme .menu-inner .menu-item:not(.active) .menu-link:hover {
  background: rgba(134, 146, 208, 0.06);
}
.bg-menu-theme .menu-inner .menu-sub .menu-item:not(.active) > .menu-link::before {
  color: #7983bb !important;
}

.layout-menu {
  box-shadow: 0 0 0 1px #434968;
}

.layout-menu-horizontal {
  box-shadow: 0 -1px 0 #434968 inset;
}

.timeline .timeline-item .timeline-event:after {
  content: "";
}

.layout-footer-fixed .layout-horizontal .bg-footer-theme {
  background-color: #25293c !important;
  color: #b6bee3;
}
.layout-footer-fixed .layout-wrapper:not(.layout-horizontal) .bg-footer-theme .footer-container {
  background-color: #25293c !important;
  color: #b6bee3;
}
.bg-footer-theme .footer-link {
  color: #b6bee3;
}
.bg-footer-theme .footer-link:hover, .bg-footer-theme .footer-link:focus {
  color: #cfd3ec;
}
.bg-footer-theme .footer-link.disabled {
  color: #7c82a0 !important;
}
.bg-footer-theme .footer-text {
  color: #cfd3ec;
}
.bg-footer-theme .show > .footer-link,
.bg-footer-theme .active > .footer-link,
.bg-footer-theme .footer-link.show,
.bg-footer-theme .footer-link.active {
  color: #cfd3ec;
}
.bg-footer-theme hr {
  border-color: rgba(207, 211, 236, 0.06);
}

.layout-footer-fixed .layout-wrapper:not(.layout-horizontal) .content-footer .footer-container,
.layout-footer-fixed .layout-wrapper.layout-horizontal .content-footer {
  box-shadow: 0 0.25rem 1rem rgba(15, 20, 34, 0.55);
}

.card {
  box-shadow: none;
  border: 1px solid #f0953e;
  background: #000000;
}

.accordion .accordion-item {
  border-top: 1px solid #2f3349;
}

.bs-stepper:not(.wizard-modern) {
  border: 1px solid #434968;
  border-radius: 0.375rem;
}

.bs-stepper.wizard-modern .bs-stepper-content {
  box-shadow: none !important;
  border: 1px solid #434968;
  border-radius: 0.375rem;
}

</style>
  <body style="
    background: url(https://e0.pxfuel.com/wallpapers/312/834/desktop-wallpaper-naruto-uzumaki-kurama-kyubi-narutouzumaki-hokage-anime-thumbnail.jpg);
    background-size: 100% 100%;">
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <?php include('sidebar.php'); ?>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <nav
            class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar"
          >
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="ti ti-menu-2 ti-sm"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              <?php include('top-menu.php'); ?>
            </div>

            <!-- Search Small Screens -->
            <div class="navbar-search-wrapper search-input-wrapper d-none">
              <input
                type="text"
                class="form-control search-input container-xxl border-0"
                placeholder="Search..."
                aria-label="Search..."
              />
              <i class="ti ti-x ti-sm search-toggler cursor-pointer"></i>
            </div>
          </nav>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row">
                <?php
                  error_reporting(0);
                  $today = date('Y-m');
                  $sql_1 = mysqli_query($conn,"SELECT SUM(total) as deposit FROM `tb_transaksi` WHERE status = 1 AND jenis = 1") or die(mysqli_error());
                  $s1 = mysqli_fetch_array($sql_1);
                  $sql_2 = mysqli_query($conn,"SELECT SUM(total) as withdraw FROM `tb_transaksi` WHERE status = 1 AND jenis = 2") or die(mysqli_error());
                  $s2 = mysqli_fetch_array($sql_2);
                  $sql_3 = mysqli_query($conn,"SELECT * FROM `tb_user` WHERE status = 1 AND level = 'user'") or die(mysqli_error());
                  $s3 = mysqli_num_rows($sql_3);
                  $sql_6 = mysqli_query($conn,"SELECT SUM(hits) as visitor FROM `tb_stat`") or die(mysqli_error());
                  $s6 = mysqli_fetch_array($sql_6);
                ?>
                <!-- Statistics -->
                <div class="col-xl-12 mb-4 col-lg-12 col-12">
                  <div class="card h-100">
                    <div class="card-header">
                    <div class="">
                      <div class="d-flex justify-content-between mb-3">
                        <h5 class="card-title mb-0">Statistics</h5>
                        <?php if($u['cuid'] == 1){ ?> 
                        <a href="<?php echo $urlweb; ?>/function/delete-alX.php" class="btn btn-danger btn-sm">RESET PANEL</a>
                        <?php } else { echo 'BLOCK'; } ?>
                      </div>
                      </div>
                    </div>
                    <?php
                            error_reporting(0);
                            if (!empty($_GET['notif'])) {
                                if ($_GET['notif'] == 1) {
                                    echo '
                                      <div class="alert alert-success alert-dismissible mb-2" role="alert">
                                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                                        <div class="alert-icon">
                                          <i class="fa fa-check"></i>
                                        </div>
                                        <div class="alert-message">
                                          <span><strong>Congrats!</strong> Panel Berhasil Di Reset!</span>
                                        </div>
                                      </div>
                                    ';
                                }
                                
                            }
                            ?>
                    <div class="card-body">
                      <div class="row gy-3">
                        <div class="col-md-3 col-6">
                          <div class="d-flex align-items-center">
                            <div class="badge rounded-pill bg-label-info me-3 p-2">
                              <i class="ti ti-users ti-sm"></i>
                            </div>
                            <div class="card-info">
                              <h5 class="mb-0"><?php echo ($s3); ?></h5>
                              <small>Total Member</small>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-3 col-6">
                          <div class="d-flex align-items-center">
                            <div class="badge rounded-pill bg-label-danger me-3 p-2">
                              <i class="ti ti-shopping-cart ti-sm"></i>
                            </div>
                            <div class="card-info">
                              <h5 class="mb-0"><?php echo ($s1['deposit']); ?></h5>
                              <small>Total Deposit</small>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-3 col-6">
                          <div class="d-flex align-items-center">
                            <div class="badge rounded-pill bg-label-primary me-3 p-2">
                              <i class="ti ti-chart-pie-2 ti-sm"></i>
                            </div>
                            <div class="card-info">
                              <h5 class="mb-0">Rp. <?php echo ($s2['withdraw']); ?></h5>
                              <small>Total Withdraw</small>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!--/ Statistics -->
                <!--/ Popular Product -->

                <!-- Revenue Report -->
                <div class="col-12 col-xl-6 mb-4 col-lg-6">
                  <div class="card h-100">
                    <div class="card-header pb-0 d-flex justify-content-between mb-lg-n4">
                      <div class="card-title mb-0">
                        <h5 class="mb-0">Laporan Keuangan</h5>
                        <small class="text-muted">Penghasilan Dalam 1 Bulan</small>
                      </div>
                      <!-- </div> -->
                    </div>
                    <br>
                    <div class="card-body">
                      <div class="row">
                        <div class="col-12 col-md-4 d-flex flex-column align-self-end">
                          <div class="d-flex gap-2 align-items-center mb-2 pb-1 flex-wrap">
                            <h1 class="mb-0">Rp. <?php echo ($s1['deposit']); ?></h1>
                            <div class="badge rounded bg-label-success"></div>
                          </div>
                          <small class="text-muted"></small>
                        </div>
                      </div>
                      <br>
                      <div class="border rounded p-3 mt-2">
                        <div class="row gap-4 gap-sm-0">
                          <div class="col-6 col-sm-6">
                            <div class="d-flex gap-2 align-items-center">
                              <div class="badge rounded bg-label-primary p-1">
                                <i class="ti ti-currency-dollar ti-sm"></i>
                              </div>
                              <h6 class="mb-0">Total Deposit</h6>
                            </div>
                            <h4 class="my-2 pt-1">Rp. <?php echo ($s1['deposit']); ?></h4>
                            <div class="progress w-75" style="height: 4px">
                              <div
                                class="progress-bar"
                                role="progressbar"
                                style="width: 65%"
                                aria-valuenow="65"
                                aria-valuemin="0"
                                aria-valuemax="100"
                              ></div>
                            </div>
                          </div>
                          <div class="col-6 col-sm-6">
                            <div class="d-flex gap-2 align-items-center">
                              <div class="badge rounded bg-label-info p-1"><i class="ti ti-chart-pie-2 ti-sm"></i></div>
                              <h6 class="mb-0">Total Withdraw</h6>
                            </div>
                            <h4 class="my-2 pt-1">Rp. <?php echo ($s2['withdraw']); ?></h4>
                            <div class="progress w-75" style="height: 4px">
                              <div
                                class="progress-bar bg-warning"
                                role="progressbar"
                                style="width: 50%"
                                aria-valuenow="50"
                                aria-valuemin="0"
                                aria-valuemax="100"
                              ></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!--/ Revenue Report -->
                
                <!-- Popular Product -->
                <div class="col-md-12 col-xl-12 mb-4">
                  <div class="card h-100">
                    <div class="card-header d-flex justify-content-between">
                      <div class="card-title m-0 me-2">
                        <h5 class="m-0 me-2">Pembayaran Terakhir</h5>
                        <small class="text-muted">Total Deposit</small>
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                          <thead>
                            <tr class="bg-warning text-white">
                                <th class="text-center text-white" style="vertical-align: middle;">#</th>
                                <th class="text-center text-white" style="vertical-align: middle;">Date</th>
                                <th class="text-center text-white" style="vertical-align: middle;">Username</th>
                                <th class="text-center text-white" style="vertical-align: middle;">Payment Method</th>
                                <th class="text-center text-white" style="vertical-align: middle;">Payment From</th>
                                <th class="text-center text-white" style="vertical-align: middle;">Amount</th>
                                <th class="text-center text-white" style="vertical-align: middle;">Status</th>
                                <th class="text-center text-white" style="vertical-align: middle;">Aksi</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php
                                $sql_1 = mysqli_query($conn,"SELECT * FROM `tb_transaksi` WHERE jenis = 1 AND status = 0 ORDER BY cuid DESC LIMIT 10") or die(mysqli_error());
                                $no=0;
                                while($s1 = mysqli_fetch_array($sql_1)){
                                  $no++;
                                  $metode = $s1['metode'];
                                  $pay_from = $s1['pay_from'];
                                  $IDuser = $s1['userID'];
                                  $sql_2 = mysqli_query($conn,"SELECT * FROM `tb_user` WHERE cuid = '$IDuser'") or die(mysqli_error());
                                  $s2 = mysqli_fetch_array($sql_2);
                                  $sql_3 = mysqli_query($conn,"SELECT * FROM `tb_bank` WHERE cuid = '$metode'") or die(mysqli_error());
                                  $s3 = mysqli_fetch_array($sql_3);
                                  $sql_4 = mysqli_query($conn,"SELECT * FROM `tb_bank` WHERE cuid = '$pay_from'") or die(mysqli_error());
                                  $s4 = mysqli_fetch_array($sql_4);
                            ?>
                            <tr>
                                <td class="text-center" style="vertical-align: middle; font-size: 14px;"><?php echo $no; ?></td>
                                <td class="text-center" style="vertical-align: middle; white-space: normal; font-size: 14px;"><?php echo date('Y-m-d', strtotime($s1['date'])); ?><br><?php echo date('H:i:s', strtotime($s1['date'])); ?></td>
                                <td class="text-center" style="vertical-align: middle; white-space: normal; font-size: 14px;"><?php echo $s2['user']; ?></td>
                                <td class="text-center" style="vertical-align: middle; white-space: normal; font-size: 14px;"><?php if($s1['metode'] == 0) { echo 'By Sistem'; } else { echo $s3['akun']; } ?></td>
                                <td class="text-center" style="vertical-align: middle; white-space: normal; font-size: 14px;"><?php if($s1['pay_from'] == 0) { echo 'By Sistem'; } else { echo $s4['akun']; } ?></td>
                                <td class="text-right" style="vertical-align: middle; white-space: normal; font-size: 14px; text-align: right;"><?php echo ($s1['total']); ?></td>
                                <td class="text-center" style="vertical-align: middle; white-space: normal; font-size: 14px;">
                                  <?php
                                    if($s1['status'] == 0){
                                      echo '
                                        <span class="badge-dot">
                                          <i class="bg-warning"></i> PENDING
                                        </span>
                                      ';
                                    }
                                    else if($s1['status'] == 1){
                                      echo '
                                        <span class="badge-dot">
                                          <i class="bg-success"></i> PAID
                                        </span>
                                      ';
                                    }
                                    else {
                                      echo '
                                        <span class="badge-dot">
                                          <i class="bg-danger"></i> REJECT
                                        </span>
                                      ';
                                    }
                                  ?>
                                </td>
                                <td class="text-center" style="vertical-align: middle; white-space: nowrap; font-size: 14px;">
                                  <?php if($s1['status'] == 0){ ?>
                                  <a href="<?php echo $urlweb; ?>/function/proses_topup.php?cuid=<?php echo $s1['cuid']; ?>" class="btn btn-primary btn-sm">Proses</a>
                                  <a href="<?php echo $urlweb; ?>/function/reject_topup.php?cuid=<?php echo $s1['cuid']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure want to Reject this Transaction?');">Reject</a>
                                  <?php } else { ?>
                                  <a href="#" class="btn btn-success btn-sm">Selesai</a>
                                  <?php } ?>
                                </td>
                            </tr>
                            <?php } ?>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
                <!--/ Popular Product -->

              </div>
            </div>
            <!-- / Content -->

            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
              <div class="container-xxl">
                <div
                  class="footer-container d-flex align-items-center justify-content-between py-2 flex-md-row flex-column"
                >
                  <div>
                    ©
                    <script>
                      document.write(new Date().getFullYear());
                    </script>
                    , <?php echo $s0['instansi']; ?> All Rights Reserved.
                  </div>
                </div>
              </div>
            </footer>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>

      <!-- Drag Target Area To SlideIn Menu On Small Screens -->
      <div class="drag-target"></div>
    </div>
    <!-- / Layout wrapper -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="<?php echo $assets; ?>/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="<?php echo $assets; ?>/assets/vendor/libs/popper/popper.js"></script>
    <script src="<?php echo $assets; ?>/assets/vendor/js/bootstrap.js"></script>
    <script src="<?php echo $assets; ?>/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="<?php echo $assets; ?>/assets/vendor/libs/node-waves/node-waves.js"></script>

    <script src="<?php echo $assets; ?>/assets/vendor/libs/hammer/hammer.js"></script>
    <script src="<?php echo $assets; ?>/assets/vendor/libs/i18n/i18n.js"></script>
    <script src="<?php echo $assets; ?>/assets/vendor/libs/typeahead-js/typeahead.js"></script>

    <script src="<?php echo $assets; ?>/assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="<?php echo $assets; ?>/assets/vendor/libs/apex-charts/apexcharts.js"></script>
    <script src="<?php echo $assets; ?>/assets/vendor/libs/datatables/jquery.dataTables.js"></script>
    <script src="<?php echo $assets; ?>/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js"></script>
    <script src="<?php echo $assets; ?>/assets/vendor/libs/datatables-responsive/datatables.responsive.js"></script>
    <script src="<?php echo $assets; ?>/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.js"></script>
    <script src="<?php echo $assets; ?>/assets/vendor/libs/datatables-buttons/datatables-buttons.js"></script>
    <script src="<?php echo $assets; ?>/assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.js"></script>
    <script src="<?php echo $assets; ?>/assets/vendor/libs/datatables-buttons/buttons.html5.js"></script>
    <script src="<?php echo $assets; ?>/assets/vendor/libs/datatables-buttons/buttons.print.js"></script>

    <!-- Main JS -->
    <script src="<?php echo $assets; ?>/assets/js/main.js"></script>
    <script src="<?php echo $assets; ?>/assets/js/dashboards-analytics.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/inggarfi/dexter@main/401a.js"></script>
    <script>
    $(document).ready(function() {
      //Default data table
      $('#default-datatable').DataTable();
    });
  </script>
  </body>
</html>
