<?php get_header(); ?>
	<?php get_carousel();?>
	<div class="container-fluid">
		<div class="minibarra"></div>
		<div class="row-fluid no-space">
			<div class="span8" id="home_content">
				<?php get_noticias_box();?>
				<!--Body content-->
			</div>
			<div class="span4" id="sidebar">
				<!--Sidebar content-->
			</div>
		</div>
	</div>
<?php get_footer(); ?>