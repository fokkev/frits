<?php get_header(); ?>  

<?php while ( have_posts() ) : the_post(); ?>
     <div class="container">
        <div class="row">
            <div class="col-md-12">       
                <?php the_content(); ?>

                    <img src="<?php echo get_field("afbeelding"); ?>">


            </div>
        </div>
    </div>
<?php endwhile; ?>



        
        <?php 
$args = array(
	'post_type' => 'diensten'
); 					   
query_posts($args);
if ( have_posts() ) : 
?>		       
        
        
        
    <div class="container">
        <div class="row">
            <div class="col-md-12">

            <?php while ( have_posts() ) : the_post(); ?>

                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail" >
                        <h4 class="text-center"><span class="label label-info"><?php echo get_field("merk"); ?></span></h4>
                        <img src="<?php echo get_field("afbeelding"); ?>" class="img-responsive">
                        <div class="caption">
                            <div class="row">
                                <div class="col-md-6 col-xs-6">
                                    <h3><?php the_title(); ?></h3>
                                </div>
                                <div class="col-md-6 col-xs-6 price">
                                    <h3>
                                    <label><?php echo get_field("prijs"); ?></label></h3>
                                </div>
                            </div>
                            <p>
                                <?php the_content(); ?>

                            </p>
                            <div class="row">
                                <div class="col-md-6">
                                    <a href="<?php the_permalink();?>" class="btn btn-primary btn-product" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a> 
                                </div>
                                <div class="col-md-6">
                                    <a href="<?php the_permalink();?>" class="btn btn-success btn-product"><span class="glyphicon glyphicon-shopping-cart"></span> Buy</a></div>
                            </div>

                            <p> </p>
                        </div>
                    </div>
                </div>

                <?php endwhile; ?>
            </div>
        </div>
    </div>
        
    <?php endif; wp_reset_query(); ?>
        
        
        
 
        
        
        
        
      <hr>
<?php get_footer(); ?>
    