<?php
/**
 * The content part for displaying subscribe and donate components.
 *
 * @author Julian Dawson <julian@juliandawson.co.uk>
 * @license MIT License
 * @link https://github.com/carlislephoto/carlislephoto-org-uk-theme
 *
 * @package WordPress
 * @subpackage CarlislePhoto
 */
?>
<div class="c-goodbye c-band c-band--secondary-tertiary">
  <div class="o-wrapper">
    <div class="o-layout-flex">
      <section aria-labelledby="newsletter-headline" class="c-newsletter o-layout-flex__item u-flex-1/2">
        <h3 id="newsletter-headline">Newsletter</h3>
        <p>Stay up to date with our latest news.</p>
        <form action="https://carlislephotofestival.us8.list-manage.com/subscribe/post" method="post">
          <input type="hidden" name="u" value="f3e0b49052df8c835dec9c01d">
          <input type="hidden" name="id" value="d14157e627">
          <input aria-required="true" autocapitalize="off" autocorrect="off" class="c-newsletter__input c-input" id="MERGE0" name="MERGE0" placeholder="email address" type="email" value="">
          <button class="c-newsletter__button c-button" type="submit">
            <span class="c-button__icon">
              <svg class="c-newsletter__arrow c-button__arrow">
                <use xlink:href="#icon-arrow" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
              </svg>
            </span>
          </button>
        </form>
      </section>
      <section aria-labelledby="donate-headline" class="c-donate o-layout-flex__item u-flex-1/2">
        <h3 id="donate-headline">Support Carlisle Photo</h3>
        <p>We are a not for profit organisation, run by volunteers. Your donations help us support artists and bring photography to the community.</p>
        <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
          <input type="hidden" name="cmd" value="_s-xclick">
          <input type="hidden" name="hosted_button_id" value="KKCGL9JWFKBL2">
          <input class="c-donate__button c-button" type="submit" value="Donate" alt="PayPal – The safer, easier way to pay online!">
        </form>
      </section>
    </div>
  </div>
</div>
<section class="c-partners [ c-band c-band--tall ]" data-section="Partners">
  <div class="o-wrapper o-wrapper--narrow">
    <ul class="c-partners__list">
      <li class="c-partners__item">
        <img class="c-partners__logo" src="<?php echo get_template_directory_uri() . '/images/sponsors-2.png' ?>" alt="Arts Council England">
      </li>
      <li class="c-partners__item">
        <img class="c-partners__logo" src="<?php echo get_template_directory_uri() . '/images/sponsors-1.png' ?>" alt="Arts Council England">
      </li>
      <li class="c-partners__item">
        <img class="c-partners__logo" src="<?php echo get_template_directory_uri() . '/images/sponsors-3.png' ?>" alt="Arts Council England">
      </li>
      <li class="c-partners__item">
        <img class="c-partners__logo" src="<?php echo get_template_directory_uri() . '/images/sponsors-4.png' ?>" alt="Arts Council England">
      </li>
    </ul>
  </div>
</section>
