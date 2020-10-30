<?php
/**
 * Template part for front-page testimonials
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;
$testimonial_quotes				= get_field('testimonial_quotes');
$testimonials_block_title			= get_field('testimonials_block_title');
$more_testimonials_link			= get_field('more_testimonials_link');
$more_testimonials_link_txt			= get_field('more_testimonials_link_txt');

// insert acf repeater here

?>

<section id="testimonialsBlock">
    <div class="testimonialsBlockTitle">

    <h2><?php echo $testimonials_block_title; ?></h2>
</div>
    <ol class="testimonialsList testimonialsList">
        <!-- insert acf sub-repeater here -->
        <amp-carousel height="3"
		width="12"
		layout="responsive"
		type="slides"
		autoplay
		delay="5500">

<?php $testimonial_quotesloop = new \WP_Query( array( 'post_type' => 'testimonial_quotes', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>

  <?php while( $testimonial_quotesloop->have_posts() ) : $testimonial_quotesloop->the_post();

// vars
$testimonial_quote = get_field('testimonial_quote');
$testimonial_author = get_field('testimonial_author');
$description_of_work = get_field('description_of_work');
$testimonial_date = get_field('testimonial_date');
$overall = get_field('overall');
?>
            <li>
            <blockquote class="blockquote testimonialsCard" itemscope itemtype="http://schema.org/Review">
                <div class="testimonialsContent">
                    <span itemprop="itemReviewed" itemtype="http://schema.org/localBusiness" width="100%" height="100%" >
						<amp-fit-text width="1" height="1" layout="responsive">
							<div class="quotes" itemprop="reviewBody">
								<?php echo $testimonial_quote; ?>
							</div>
							</amp-fit-text>
							<div class="starRating">
									<h5>Star Rating:</h5>
									<div class="rating" itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating">
                                        <meta itemprop="worstRating" content="0">
                                            <div itemprop="ratingValue">
                                           <h6> <?php echo $overall; ?></h6>
</div> <h6>/</h6>
                                            <div itemprop="bestRating">
                                            <h6><?php echo $overall; ?></h6>
</div>
</div>
                             </div>

					</span>

                </div>

                <cite class="testimonialsQuote">
                    <span itemprop="author" itemscope itemtype="http://schema.org/Person">
                    <?php echo $testimonial_author; ?>
                    </span>
                    <meta itemprop="datePublished" content="<?php echo $testimonial_date; ?>">
                    <span class="testimonialDate">
                        <?php echo $testimonial_date; ?>
                    </span>

                </cite>

            </blockquote>


            </li>
            <?php endwhile; wp_reset_query();?>
            </amp-carousel>

    </ol>
    <!-- <div class="moreTestimonials">
    <button aria-label="<?php echo $ctablock_phone_text; ?>">
				<a href="<?php echo $more_testimonials_link; ?>"><?php echo $more_testimonials_link_txt; ?></a>
</button>
                    </div> -->
</section>