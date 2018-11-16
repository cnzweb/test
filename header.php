<!doctype html>
  <html class="no-js" <?php language_attributes(); ?>>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />
        <meta name="format-detection" content="telephone=no">
        <meta http-equiv="Content-Language" content="en-AU">
		<title><?php wp_title(''); ?></title>
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
    <?php if(get_field('google_analytics','options')):?>
     <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-<?php the_field('google_analytics','options');?>', 'auto');
    ga('send', 'pageview');
    </script>
    <?php endif;?>
    <script type="text/javascript">
    function getViewportWidth()
    {
           if (window.innerWidth)
           {
                   return window.innerWidth;
           }
           else if (document.body && document.body.offsetWidth)
           {
                   return document.body.offsetWidth;
           }
           else
           {
                   return 0;
           }
    }
    var tellMeTheSizes=function()
    {
      document.title = getViewportWidth() + "px";
    }
    window.onload=function()
    {
      tellMeTheSizes();
    }
    window.onresize=function()
    {
      tellMeTheSizes();
    }
    </script>

    I am going to add some stuff here....
    

    <?php get_template_part('/components/header/template');?>
