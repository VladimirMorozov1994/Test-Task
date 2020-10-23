<?php
/*
Template Name: Post Template without sidebar 
Template Post Type: post, region 
*/

get_header();

 
?>
<div class="head-box">
    <div class="container">
        <h2><?php single_post_title();?></h2>
    </div> 
</div>
<div class="single-post-page without-sidebar">
    <div class="container">
        <div class="flex-box">
            <div class="single-box">

            <div class="breadcrumbs">
                <a href="/">Home</a><i>  —  </i>
                <a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>">News</a><i>  —  </i>
                <span><?php  
                single_post_title();  ?></span>
            </div>

            <?php  
            if (have_posts()) :
                while (have_posts()) : the_post();?>  
                <div class="post_thumbnail">
                    <?php the_post_thumbnail();?>
                </div>
                
                <div class="content">
                    <?php the_content();?>
                </div>
            <?php endwhile; endif; ?>

            </div>
 

        </div>
        
    </div>
</div>
<?php
get_footer();
