<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="user-scalable=yes, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width">
  <title><?php if(is_home()) bloginfo('name'); else wp_title(''); ?></title>
  <meta name="description" content="Carlisle Photo">
  <meta name="author" content="Julian Dawson">
  <meta name="robots" content="index,follow">
  <meta name="theme-color" content="#ff0024">
  <link href="<?php bloginfo('pingback_url'); ?>" rel="pingback">
	<link href="<?php bloginfo('rss2_url'); ?>" rel="alternate" type="application/rss+xml" title="RSS 2.0">
	<link href="<?php bloginfo('rss_url'); ?>" rel="alternate" type="text/xml" title="RSS .92">
	<link href="<?php bloginfo('atom_url'); ?>" rel="alternate" type="application/atom+xml" title="Atom 1.0">
  <link href="/favicon.ico" rel="shortcut icon">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900" rel="stylesheet">
  <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
	<?php
    wp_get_archives('type=monthly&format=link');
    wp_head();
  ?>
</head>

<body class="c-page c-page--home has-fixed-page-head">
  <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="0" height="0" display="none">
    <symbol id="icon-twitter" viewBox="0 0 16 16">
      <title>Twitter</title>
      <path d="M16 3.038c-.59.26-1.22.437-1.885.517.677-.407 1.198-1.05 1.443-1.816-.634.37-1.337.64-2.085.79-.598-.64-1.45-1.04-2.396-1.04-1.812 0-3.282 1.47-3.282 3.28 0 .26.03.51.085.75-2.728-.13-5.147-1.44-6.766-3.42C.83 2.58.67 3.14.67 3.75c0 1.14.58 2.143 1.46 2.732-.538-.017-1.045-.165-1.487-.41v.04c0 1.59 1.13 2.918 2.633 3.22-.276.074-.566.114-.865.114-.21 0-.41-.02-.61-.058.42 1.304 1.63 2.253 3.07 2.28-1.12.88-2.54 1.404-4.07 1.404-.26 0-.52-.015-.78-.045 1.46.93 3.18 1.474 5.04 1.474 6.04 0 9.34-5 9.34-9.33 0-.14 0-.28-.01-.42.64-.46 1.2-1.04 1.64-1.7z"></path>
    </symbol>
    <symbol id="icon-facebook" viewBox="0 0 16 16">
      <title>Facebook</title>
      <path d="M15.117 0H.883C.395 0 0 .395 0 .883v14.234c0 .488.395.883.883.883h7.663V9.804H6.46V7.39h2.086V5.607c0-2.066 1.262-3.19 3.106-3.19.883 0 1.642.064 1.863.094v2.16h-1.28c-1 0-1.195.48-1.195 1.18v1.54h2.39l-.31 2.42h-2.08V16h4.077c.488 0 .883-.395.883-.883V.883C16 .395 15.605 0 15.117 0"></path>
    </symbol>
    <symbol id="icon-instagram" viewBox="0 0 16 16">
      <title>Instagram</title>
      <path d="M8 0C5.827 0 5.555.01 4.702.048 3.85.088 3.27.222 2.76.42c-.526.204-.973.478-1.417.923-.445.444-.72.89-.923 1.417-.198.51-.333 1.09-.372 1.942C.008 5.555 0 5.827 0 8s.01 2.445.048 3.298c.04.852.174 1.433.372 1.942.204.526.478.973.923 1.417.444.445.89.72 1.417.923.51.198 1.09.333 1.942.372.853.04 1.125.048 3.298.048s2.445-.01 3.298-.048c.852-.04 1.433-.174 1.942-.372.526-.204.973-.478 1.417-.923.445-.444.72-.89.923-1.417.198-.51.333-1.09.372-1.942.04-.853.048-1.125.048-3.298s-.01-2.445-.048-3.298c-.04-.852-.174-1.433-.372-1.942-.204-.526-.478-.973-.923-1.417-.444-.445-.89-.72-1.417-.923-.51-.198-1.09-.333-1.942-.372C10.445.008 10.173 0 8 0zm0 1.44c2.136 0 2.39.01 3.233.048.78.036 1.203.166 1.485.276.374.145.64.318.92.598.28.28.453.546.598.92.11.282.24.705.276 1.485.038.844.047 1.097.047 3.233s-.01 2.39-.05 3.233c-.04.78-.17 1.203-.28 1.485-.15.374-.32.64-.6.92-.28.28-.55.453-.92.598-.28.11-.71.24-1.49.276-.85.038-1.1.047-3.24.047s-2.39-.01-3.24-.05c-.78-.04-1.21-.17-1.49-.28-.38-.15-.64-.32-.92-.6-.28-.28-.46-.55-.6-.92-.11-.28-.24-.71-.28-1.49-.03-.84-.04-1.1-.04-3.23s.01-2.39.04-3.24c.04-.78.17-1.21.28-1.49.14-.38.32-.64.6-.92.28-.28.54-.46.92-.6.28-.11.7-.24 1.48-.28.85-.03 1.1-.04 3.24-.04zm0 2.452c-2.27 0-4.108 1.84-4.108 4.108 0 2.27 1.84 4.108 4.108 4.108 2.27 0 4.108-1.84 4.108-4.108 0-2.27-1.84-4.108-4.108-4.108zm0 6.775c-1.473 0-2.667-1.194-2.667-2.667 0-1.473 1.194-2.667 2.667-2.667 1.473 0 2.667 1.194 2.667 2.667 0 1.473-1.194 2.667-2.667 2.667zm5.23-6.937c0 .53-.43.96-.96.96s-.96-.43-.96-.96.43-.96.96-.96.96.43.96.96z"></path>
    </symbol>
    <symbol id="icon-arrow" viewBox="0 0 18 7">
      <title>Arrow</title>
      <path d="M14,3.09H0" fill="none"></path>
      <polyline points="11.34 5.83 13.97 3.09 11.34 0.35" fill="none"></polyline>
    </symbol>
  </svg>

  <header class="c-page-head [ o-layout-flex o-layout-flex--space-between o-layout-flex--center ] is-fixed">
    <a class="o-layout-flex__item" href="/">
      <svg aria-hidden="true" class="c-page-head__logo" role="img">
        <use xlink:href="#icon-twitter" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
      </svg>
    </a>

    <div class="o-layout-flex__item">
      <!-- todo: remove style -->
      <span style="font-size: 45px; font-weight: bold;">=</span>

      <?php
        // print do_heading();
        // print naked_nav($post);
      ?>
    </div>

    <div class="o-list-inline o-layout-flex__item">
      <a aria-label="Twitter" class="o-list-inline__item" href="/" target="_blank">
        <svg aria-hidden="true" class="c-social__icon" role="img">
          <use xlink:href="#icon-twitter" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
        </svg>
      </a>
      <a aria-label="Facebook" class="o-list-inline__item" href="/" target="_blank">
        <svg aria-hidden="true" class="c-social__icon" role="img">
          <use xlink:href="#icon-facebook" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
        </svg>
      </a>
      <a aria-label="Instagram" class="o-list-inline__item" href="/" target="_blank">
        <svg aria-hidden="true" class="c-social__icon" role="img">
          <use xlink:href="#icon-instagram" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
        </svg>
      </a>
    </div>
  </header>

  <div class="c-masthead [ o-layout-flex o-layout-flex--center ]">
    <div class="c-masthead__background" style="background-image: url('<?php header_image(); ?>');"></div>
    <div class="c-masthead__content o-wrapper">
      <h1>Open
        <br>Call
        <br>2017
      </h1>
      <a class="c-button c-masthead__button" href="/">Register</a>
    </div>
    <span class="c-scroll c-masthead__scroll"></span>
  </div>
