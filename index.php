<?php get_header(); ?>

<section id="services" class="pfblock pfblock-gray">
		<div class="container">
			<div class="row">

				<div class="col-sm-6 col-sm-offset-3">

					<div class="pfblock-header wow fadeInUp">
						<h2 class="pfblock-title">This is what I do</h2>
						<div class="pfblock-line"></div>
						<div class="pfblock-subtitle">
							No one lights a lamp in order to hide it behind the door: the purpose of light is to create more light, to open people’s eyes, to reveal the marvels around.
						</div>
					</div>

				</div>

			</div>

			<div class="row">
                
                 <?php $arg = array(
                        'post_type' => 'what_i_do',
                        'post_per_page' => -1
                    ); ?>
                    <?php $slides = new WP_Query($arg); ?>

                    <?php if ($slides->have_posts()) : ?>
                    <?php while ($slides->have_posts()) : $slides->the_post(); ?>
                
				<div class="col-sm-3">

					<div class="iconbox wow slideInLeft">
						<div class="iconbox-icon">
							<span class="<?php the_field('bootstrap_icon'); ?>"></span>
						</div>
						<div class="iconbox-text">
							<h3 class="iconbox-title"><?php the_title(); ?></h3>
							<div class="iconbox-desc">
								<?php the_content(); ?>
							</div>
						</div>
					</div>

				</div>
                                 <?php endwhile; ?>
                    <?php endif;
                    wp_reset_query(); ?>

<!--
				<div class="col-sm-3">

					<div class="iconbox wow slideInLeft">
						<div class="iconbox-icon">
							<span class="icon-puzzle"></span>
						</div>
						<div class="iconbox-text">
							<h3 class="iconbox-title">Web Programming</h3>
							<div class="iconbox-desc">
								Good things come to those who wait, but only the things left by those who hustle
							</div>
						</div>
					</div>

				</div>

				<div class="col-sm-3">

					<div class="iconbox wow slideInRight">
						<div class="iconbox-icon">
							<span class="icon-badge"></span>
						</div>
						<div class="iconbox-text">
							<h3 class="iconbox-title">Branding</h3>
							<div class="iconbox-desc">
								Good things come to those who wait, but only the things left by those who hustle
							</div>
						</div>
					</div>

				</div>

				<div class="col-sm-3">

					<div class="iconbox wow slideInRight">
						<div class="iconbox-icon">
							<span class="icon-question"></span>
						</div>
						<div class="iconbox-text">
							<h3 class="iconbox-title">Consultation</h3>
							<div class="iconbox-desc">
								Good things come to those who wait, but only the things left by those who hustle
							</div>
						</div>
					</div>

				</div>
-->

			</div><!-- .row -->
		</div><!-- .container -->
	</section>

	<!-- Services end -->
    
	<!-- Portfolio start -->

	<section id="portfolio" class="pfblock">
		<div class="container">
			<div class="row">

				<div class="col-sm-6 col-sm-offset-3">

					<div class="pfblock-header wow fadeInUp">
						<h2 class="pfblock-title">My works</h2>
						<div class="pfblock-line"></div>
						<div class="pfblock-subtitle">
							No one lights a lamp in order to hide it behind the door: the purpose of light is to create more light, to open people’s eyes, to reveal the marvels around.
						</div>
					</div>

				</div>

			</div><!-- .row -->
            
            
            <div class="row">
                <?php $arg = array(
                        'post_type' => 'my_works',
                        'post_per_page' => -1
                    ); ?>
                    <?php $slides = new WP_Query($arg); ?>

                    <?php if ($slides->have_posts()) : ?>
                    <?php while ($slides->have_posts()) : $slides->the_post(); ?>
                <div class="col-xs-12 col-sm-4 col-md-4">
                    
                    <div class="grid wow zoomIn">
                        <figure class="effect-bubba">
                             <img src="<?php the_post_thumbnail_url(); ?>" />
                            <figcaption>
                                <h2><?php the_title(); ?></h2>
                                <p><?php the_content(); ?></p>
                            </figcaption>			
                        </figure>
                    </div>
                    
                </div>
                 <?php endwhile; ?>
                    <?php endif;
                    wp_reset_query(); ?>
                
            </div>


		</div><!-- .contaier -->

	</section>

	<!-- Portfolio end -->
    
    <!-- Skills start -->
    
    <section class="pfblock pfblock-gray" id="skills">
		
			<div class="container">
			
				<div class="row skills">
					
					<div class="row">

                        <div class="col-sm-6 col-sm-offset-3">

                            <div class="pfblock-header wow fadeInUp">
                                <h2 class="pfblock-title">My Skills</h2>
                                <div class="pfblock-line"></div>
                                <div class="pfblock-subtitle">
                                    No one lights a lamp in order to hide it behind the door: the purpose of light is to create more light, to open people’s eyes, to reveal the marvels around.
                                </div>
                            </div>

                        </div>

                    </div><!-- .row -->
					<?php if( have_rows('myskills') ): ?>

                    <?php while( have_rows('myskills') ): the_row(); ?>
                    
                    <div class="col-sm-6 col-md-3 text-center">                        
						<span data-percent="<?php the_sub_field('procent'); ?>" class="chart easyPieChart" style="width: 140px; height: 140px; line-height: 140px;">
                            <span class="percent"><?php the_sub_field('procent'); ?></span>
                        </span>
						<h3 class="text-center"><?php the_sub_field('title'); ?></h3>
                       
					</div>

                    <?php endwhile; ?>

                   

                    <?php endif; ?>
                   
					

<!--
					<div class="col-sm-6 col-md-3 text-center">
						<span data-percent="90" class="chart easyPieChart" style="width: 140px; height: 140px; line-height: 140px;">
                            <span class="percent">90</span>
                        </span>
						<h3 class="text-center">Design</h3>
					</div>
					<div class="col-sm-6 col-md-3 text-center">
						<span data-percent="85" class="chart easyPieChart" style="width: 140px; height: 140px; line-height: 140px;">
                            <span class="percent">85</span>
                        </span>
						<h3 class="text-center">Marketing</h3>
					</div>
					<div class="col-sm-6 col-md-3 text-center">
						<span data-percent="95" class="chart easyPieChart" style="width: 140px; height: 140px; line-height: 140px;">
                            <span class="percent">95</span>
                        </span>
						<h3 class="text-center">UI / UX</h3>
					</div>
-->
					
				</div><!--End row -->
			
			</div>
		
    </section>
    
    <!-- Skills end -->

	<!-- CallToAction start -->

	<section class="calltoaction">
		<div class="container">

			<div class="row">

				<div class="col-md-12 col-lg-12">
					<h2 class="wow slideInRight" data-wow-delay=".1s">ARE YOU READY TO START?</h2>
					<div class="calltoaction-decription wow slideInRight" data-wow-delay=".2s">
						I'm available for freelance projects.
					</div>
				</div>

				<div class="col-md-12 col-lg-12 calltoaction-btn wow slideInRight" data-wow-delay=".3s">
					<a href="#contact" class="btn btn-lg">Hire Me</a>
				</div>

			</div><!-- .row -->
		</div><!-- .container -->
	</section>

	<!-- CallToAction end -->

	<!-- Testimonials start -->

	<section id="testimonials" class="pfblock pfblock-gray">

		<div class="container">
            
            <div class="row">

				<div class="col-sm-6 col-sm-offset-3">

					<div class="pfblock-header wow fadeInUp">
						<h2 class="pfblock-title">What my clients say</h2>
						<div class="pfblock-line"></div>
						<div class="pfblock-subtitle">
							No one lights a lamp in order to hide it behind the door: the purpose of light is to create more light, to open people’s eyes, to reveal the marvels around.
						</div>
					</div>

				</div>

			</div><!-- .row -->

            <div class="row">

			<div id="cbp-qtrotator" class="cbp-qtrotator">
                 <?php $arg = array(
                        'post_type' => 'clients_say',
                        'post_per_page' => -1
                    ); ?>
                    <?php $slides = new WP_Query($arg); ?>

                    <?php if ($slides->have_posts()) : ?>
                    <?php while ($slides->have_posts()) : $slides->the_post(); ?>
                <div class="cbp-qtcontent">
                    <img src="<?php the_post_thumbnail_url(); ?>" alt="client-1" />
                    <blockquote>
                      <p><?php the_content(); ?></p>
                      <footer><?php the_title(); ?></footer>
                    </blockquote>
                </div>
                    <?php endwhile; ?>
                    <?php endif;
                    wp_reset_query(); ?>
            </div>		

            </div><!-- .row -->

					
		</div><!-- .row -->
	</section>

	<!-- Testimonial end -->


	<!-- Contact start -->

	<section id="contact" class="pfblock">
		<div class="container">
			<div class="row">

				<div class="col-sm-6 col-sm-offset-3">

					<div class="pfblock-header">
						<h2 class="pfblock-title">Drop me a line</h2>
						<div class="pfblock-line"></div>
						<div class="pfblock-subtitle">
							No one lights a lamp in order to hide it behind the door: the purpose of light is to create more light, to open people’s eyes, to reveal the marvels around.
						</div>
					</div>

				</div>

			</div><!-- .row -->

			<div class="row">

				<div class="col-sm-6 col-sm-offset-3">

					<form id="contact-form" role="form">
						<div class="ajax-hidden">


                    
                    <?php the_field('contact_form_7'); ?>


<!--
							<div class="form-group wow fadeInUp">
								<label class="sr-only" for="c_name">Name</label>
								<input type="text" id="c_name" class="form-control" name="c_name" placeholder="Name">
							</div>

							<div class="form-group wow fadeInUp" data-wow-delay=".1s">
								<label class="sr-only" for="c_email">Email</label>
								<input type="email" id="c_email" class="form-control" name="c_email" placeholder="E-mail">
							</div>

							<div class="form-group wow fadeInUp" data-wow-delay=".2s">
								<textarea class="form-control" id="c_message" name="c_message" rows="7" placeholder="Message"></textarea>
							</div>

							<button type="submit" class="btn btn-lg btn-block wow fadeInUp" data-wow-delay=".3s">Send Message</button>
-->
						</div>
						<div class="ajax-response"></div>
					</form>

				</div>

			</div><!-- .row -->
		</div><!-- .container -->
	</section>


<?php get_footer(); ?>