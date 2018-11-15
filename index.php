<?php get_header(); ?>
<?php //show_inventory_components(1093);?>
<section class="expedite-blog expedite-blog-archive">
 <div class="container">
    <div class="row">
        <div class="col-md-9">
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="blog-item">
             <h2><a href="<?php echo the_permalink();?>"><?php the_title(); ?></a></h2>
             <p class="byline">Posted on <?php the_time('F j, Y') ?> by <?php the_author_posts_link(); ?>  - <?php the_category(', ') ?></p>
             <?php if( has_post_thumbnail()){the_post_thumbnail('blog_thumb');}?>
             <?php the_excerpt();?>
             </div>
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