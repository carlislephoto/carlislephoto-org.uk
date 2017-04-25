<?php
/**
 * @desc A page. See single.php for blog post layout.
 */
?>

<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<main class="c-blog-page s-blog-page">
  <div class="c-band">
    <div class="o-wrapper o-wrapper--narrow">
      <div class="c-blog-page__content">

        <h1><?php the_title(); ?></h1>
        <?php the_content(__('(more...)')); ?>

      </div>
    </div>
  </div>
</main>

<?php endwhile; else: ?>

  <p>Sorry, no pages matched your criteria.</p>

<?php endif; ?>

<?php get_footer(); ?>
