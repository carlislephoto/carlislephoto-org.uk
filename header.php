<?php
/**
 * The header template.
 *
 * @author Julian Dawson <julian@juliandawson.co.uk>
 * @license MIT License
 * @link https://github.com/carlislephoto/carlislephoto-org-uk-theme
 *
 * @package WordPress
 * @subpackage CarlislePhoto
 */
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="user-scalable=yes, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width">
  <title>Carlisle Photo</title>
  <meta name="description" content="Carlisle Photo">
  <meta name="author" content="Julian Dawson">
  <meta name="robots" content="index, follow">
  <meta name="theme-color" content="#ff0024">
  <link href="<?php bloginfo('pingback_url'); ?>" rel="pingback">
	<link href="<?php bloginfo('rss2_url'); ?>" rel="alternate" type="application/rss+xml" title="RSS 2.0">
	<link href="<?php bloginfo('rss_url'); ?>" rel="alternate" type="text/xml" title="RSS .92">
	<link href="<?php bloginfo('atom_url'); ?>" rel="alternate" type="application/atom+xml" title="Atom 1.0">
  <link href="/favicon.ico" rel="shortcut icon">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900" rel="stylesheet">
  <link href="<?php bloginfo('stylesheet_url'); ?>?v=1" rel="stylesheet">
	<?php
    wp_get_archives('type=monthly&format=link');
    wp_head();
  ?>
</head>
<body class="c-page c-page--home has-fixed-page-head <?php if( has_post_thumbnail() ) echo 'has-masthead'; ?>">
  <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="0" height="0" display="none">
    <symbol id="icon-twitter" viewBox="0 0 16 16">
      <title>Twitter</title>
      <path d="M16 3.038c-.59.26-1.22.437-1.885.517.677-.407 1.198-1.05 1.443-1.816-.634.37-1.337.64-2.085.79-.598-.64-1.45-1.04-2.396-1.04-1.812 0-3.282 1.47-3.282 3.28 0 .26.03.51.085.75-2.728-.13-5.147-1.44-6.766-3.42C.83 2.58.67 3.14.67 3.75c0 1.14.58 2.143 1.46 2.732-.538-.017-1.045-.165-1.487-.41v.04c0 1.59 1.13 2.918 2.633 3.22-.276.074-.566.114-.865.114-.21 0-.41-.02-.61-.058.42 1.304 1.63 2.253 3.07 2.28-1.12.88-2.54 1.404-4.07 1.404-.26 0-.52-.015-.78-.045 1.46.93 3.18 1.474 5.04 1.474 6.04 0 9.34-5 9.34-9.33 0-.14 0-.28-.01-.42.64-.46 1.2-1.04 1.64-1.7z"></path>
    </symbol>
    <symbol id="icon-facebook" viewBox="0 0 16 16">
      <title>Facebook</title>
      <path d="M15.117 0H.883C.395 0 0 .395 0 .883v14.234c0 .488.395.883.883.883h7.663V9.804H6.46V7.39h2.086V5.607c0-2.066 1.262-3.19 3.106-3.19.883 0 1.642.064 1.863.094v2.16h-1.28c-1 0-1.195.48-1.195 1.18v1.54h2.39l-.31 2.42h-2.08V16h4.077c.488 0 .883-.395.883-.883V.883C16 .395 15.605 0 15.117 0"></path>
    </symbol>
    <symbol id="icon-instagram" viewBox="0 0 500 500">
      <title>Instagram</title>
      <path d="M401.165 250c0 83.52-67.675 151.195-151.183 151.195-83.472 0-151.135-67.675-151.135-151.195 0-9.96.977-19.656 2.81-29.086H0V421.89c0 43.12 34.947 78.093 78.118 78.093h343.74c43.123 0 78.143-34.972 78.143-78.094V220.913H398.368c1.785 9.43 2.798 19.125 2.798 29.086M421.857.018H78.117C34.948.018 0 34.988 0 78.136v84.654h126.546c27.398-38.685 72.462-63.96 123.436-63.96 50.997 0 96.098 25.275 123.448 63.96H500V78.136C500 34.99 464.98.018 421.857.018M460.06 96.49c0 7.693-6.27 13.964-13.938 13.964h-41.87c-7.67 0-13.938-6.27-13.938-13.964V54.645c0-7.694 6.27-13.964 13.94-13.964h41.868c7.67 0 13.94 6.272 13.94 13.965V96.49zM343.04 250c0-51.37-41.675-93.023-93.058-93.023-51.37 0-93 41.652-93 93.023 0 51.395 41.628 93.022 93 93.022 51.383 0 93.06-41.627 93.06-93.022"></path>
    </symbol>
    <symbol id="icon-arrow" viewBox="0 0 18 7">
      <title>Arrow</title>
      <path d="M14,3.09H0" fill="none"></path>
      <polyline points="11.34 5.83 13.97 3.09 11.34 0.35" fill="none"></polyline>
    </symbol>
    <symbol id="icon-heart" viewBox="-476 277.9 100 86.8">
      <title>Heart</title>
      <path d="M-390.7 280.6c-12.9-5.8-29.5 0-35.2 12.2-5.8-12.9-23-18.7-35.2-12.2-13.7 6.5-20.1 22.3-9.3 41.7 7.9 13.7 21.6 23.7 44.6 42.4 23.7-18.7 37.4-28.8 44.6-42.4 10.8-18.7 4.3-35.2-9.3-41.7z"></path>
    </symbol>
  </svg>
  <header class="c-page-head c-page-head--large is-fixed">
    <div class="c-page-menu c-page-head__nav">
      <a class="c-page-menu__logo c-page-menu__link" href="/">
        <img class="c-logo" src="<?php echo get_template_directory_uri() . '/images/logo.png' ?>" alt="Carlisle Photo">
      </a>
      <a class="c-page-menu__trigger c-page-menu__link js-page-menu-trigger" href="#trigger:nav">Menu</a>
      <nav class="c-page-menu__nav c-nav-primary">
        <?php wp_nav_menu(
          array(
            'theme_location' => 'primary',
            'container' => false,
            'menu_class' => 'c-nav-primary__list'
          )
        ); ?>
      </nav>
      <ul class="c-page-menu__social c-social__list">
        <li class="c-page-menu__item c-social__item">
          <a aria-label="Twitter" class="c-page-menu__link c-social__link" href="https://twitter.com/CarlislePF" target="_blank">
            <svg aria-hidden="true" class="c-social__icon" role="img">
              <use xlink:href="#icon-twitter" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
            </svg>
          </a>
        </li>
        <li class="c-page-menu__item c-social__item">
          <a aria-label="Facebook" class="c-page-menu__link c-social__link" href="https://www.facebook.com/CarlislePhotoFestival" target="_blank">
            <svg aria-hidden="true" class="c-social__icon" role="img">
              <use xlink:href="#icon-facebook" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
            </svg>
          </a>
        </li>
      </ul>
    </div>
  </header>
