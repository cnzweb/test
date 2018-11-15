<?php get_header(); ?>
<section class="expedite-blog">
 <div class="container">
    <div class="row">
        <div class="col-md-9">
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
             <h1><?php the_title(); ?></h1>
             <p class="byline">Posted on <?php the_time('F j, Y') ?> by <?php the_author_posts_link(); ?>  - <?php the_category(', ') ?></p>
             <?php the_content(); ?>
             <?php comments_template(); ?>
             <?php endwhile; else: ?>
             <p>Sorry, no pages matched your criteria.</p>
             <?php endif; ?>
        </div>
        <div class="col-md-3">
           <?php get_sidebar(); ?>
        </div>
     </div>
</div>
</section>
<?php get_footer(); ?>