   <?php get_template_part('/components/footer/template');?>
    <?php if(get_field('show_pop_up','option') == 1):?><?php get_template_part('/common/popup');?> <?php endif;?>
   <?php the_field('google_tracking_code')?>
   <?php wp_footer(); ?>
</body>
</html>