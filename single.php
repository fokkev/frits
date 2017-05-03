<?php get_header(); ?>






            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <?php while ( have_posts() ) : the_post(); ?>

                            <div class="post-img">
                                <img src="<?php echo get_field("afbeelding"); ?>" class="img-responsive">
                            </div>

                    </div>
                    <div class="col-md-8">

                        <div class="post-desk">
                            <h3><?php the_title(); ?></h3>
                            <h4> <?php echo get_field("merk"); ?></h4>
                            <p>
                                <?php the_content(); ?>
                            </p>
                            <h3>
                                    <label><?php echo get_field("prijs"); ?></label>
                            </h3>

                            <div class="row">
                                <div class="col-md-6">
                                    <a href="<?php the_permalink();?>" class="btn btn-primary btn-product"><span class="glyphicon glyphicon-thumbs-up"></span> Like</a>
                                </div>
                                <div class="col-md-6">
                                    <a href="<?php the_permalink();?>" class="btn btn-success btn-product"><span class="glyphicon glyphicon-shopping-cart"></span> Buy</a></div>
                            </div>


                        </div>

                    </div>
                    <?php endwhile; ?>
                </div>
            </div>










            <?php get_footer(); ?>