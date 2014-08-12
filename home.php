<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Graphy
 */

get_header(); ?>
	<section class="section-white">


	    <div id="carousel-example-generic" class="carousel slide carousel-fade" data-ride="carousel">
	      <!-- Indicators -->
	      <ol class="carousel-indicators">
	        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
	        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
	        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
					<li data-target="#carousel-example-generic" data-slide-to="3"></li>
					<li data-target="#carousel-example-generic" data-slide-to="4"></li>
					<li data-target="#carousel-example-generic" data-slide-to="5"></li>
					<li data-target="#carousel-example-generic" data-slide-to="6"></li>
					<li data-target="#carousel-example-generic" data-slide-to="7"></li>
	      </ol>

	      <!-- Wrapper for slides -->
	      <div class="carousel-inner">
	        <div class="item active">
	          <img src="<?php echo get_template_directory_uri(); ?>/images/baby.jpg" alt="...">
	        </div>
	        <div class="item ">
	          <img src="<?php echo get_template_directory_uri(); ?>/images/bible.jpg" alt="...">
	        </div>
	        
	        <div class="item">
	          <img src="<?php echo get_template_directory_uri(); ?>/images/softball.jpg" alt="...">
	        </div>
	        
	        <div class="item ">
	          <img src="<?php echo get_template_directory_uri(); ?>/images/facade.jpg" alt="...">
	        </div>
	        <div class="item">
	          <img src="<?php echo get_template_directory_uri(); ?>/images/friends.jpg" alt="...">
	        </div>
	        <div class="item">
	          <img src="<?php echo get_template_directory_uri(); ?>/images/pulpit.jpg" alt="...">
	          <!-- <div class="carousel-caption">
	            <h2>Heading</h2>
	          </div> -->
	        </div>
	        <div class="item">
	          <img src="<?php echo get_template_directory_uri(); ?>/images/cookout.jpg" alt="...">
	        </div>
	        <div class="item">
	          <img src="<?php echo get_template_directory_uri(); ?>/images/sawyer.jpg" alt="...">
	        </div>
	        
	      </div>

	      <!-- Controls -->
	      <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
	        <span class="glyphicon glyphicon-chevron-left"></span>
	      </a>
	      <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
	        <span class="glyphicon glyphicon-chevron-right"></span>
	      </a>
	    </div>


	</section>
	<div class="row">
		<div id="primary" class="col-sm-8">
			<main id="main" class="site-main" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'page' ); ?>

					<?php
						// If comments are open or we have at least one comment, load up the comment template
						if ( comments_open() || '0' != get_comments_number() ) :
							comments_template();
						endif;
					?>

				<?php endwhile; // end of the loop. ?>

			</main><!-- #main -->
		</div><!-- #primary -->
		<div id="secondary" class="widget-area col-md-4" role="complementary">
			<aside id="text-3" class="widget widget_text">			
				<div class="textwidget">
					<div id="servicetimes">
						<h1>Service Times</h1>
						<table id="servicetimes_table" cellspacing="0">
							<tbody>
								<tr>
									<th>Sunday School</th>
									<td>9:00am</td>
								</tr>
								<tr>
									<th>Sunday Worship</th>
									<td>10:00am</td>
								</tr>
								<!-- <tr>
									<th>Sunday Evening Service <br /><em class="smaller">First and Third Sundays Only</em></th>
									<td>7:00pm</td>
								</tr> -->
							</tbody>
						</table>
		
					</div>
			
					<div class="directions-listen row">
						<div class="directions col-md-6">
							<a href="https://goo.gl/maps/e77aB"><i class="fa fa-map-marker"></i> <em>Get Directions</em></a>
						</div>
						<div class="listen col-sm-6">
							<a href="/audio/sermons/"><i class="fa fa-microphone"></i> <em>Listen to Sermons</em></a>
						</div>
					</div>

				
				</div>
			</aside>
		</div>
	</div>
<?php get_footer(); ?>

