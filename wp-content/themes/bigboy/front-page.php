<?php get_header(); ?>

<div id="cover">
	<h1><?php bloginfo('name'); ?></h1>
</div>

<div class="row container auto">
	<?php
		$count=0;
    $the_query = new WP_Query( 'posts_per_page=3' );?>
    <?php // if (have_posts()) : while (have_posts()) : the_post(); ?>
   	<?php if (have_posts()) : while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
   	<?php if (($count%3) == 0)
   	{
   		echo "<div class='row news auto'>";
   	} ?>
   <div class="span4">
   <h2><a href='<?php the_permalink() ?>'><?php the_title(); ?></a></h2>
   <?php
if(is_home())
{
  if ( has_post_thumbnail() )
  {
    echo "<div class='div_thumbnail'> <a href='".get_permalink()."'>";
    the_post_thumbnail( '100%');

  
 get_permalink();
  echo "<div class='hover_thumbnail'>";
  the_excerpt();
echo "</div> </a> </div>";
}
}
else
{
  the_content();
}
$count = $count+1;
?>
   </div>
   <?php endwhile; else: endif; ?>


</div>
</div>
<div id="about">
 <div class="container">
<?php dynamic_sidebar( 'widget-about' ); ?>
 </div>
</div>
<div id="contact">
‎ <?php Get_home_url()  ?>
<?php dynamic_sidebar( 'widget-contact' ); ?>
</div>
<?php get_footer(); ?>