<?php 
/* Template Name: Blog */ 
get_header();

$s = get_search_query();
$search_query = get_query_var('s');
 
?>
 
<div class="head-box">
    <div class="container">
        <h2><?php if(strlen($s) > 0){ echo $s; } else{ single_post_title();}?></h2>
    </div> 
</div>
<div class="blog-page">
    <div class="container">
        
    <div class="wrapper">
        
            <div class="blog-posts">
                <div class="breadcrumbs">
                    <a href="/">Home</a><i>  —  </i>
                    <span><?php  
                    if(strlen($s) > 0){ echo $s; } else{ single_post_title();}  ?></span>
                </div>
                <div class="posts">

                <?php $count_posts = wp_count_posts('post'); $published_posts = $count_posts->publish;  global $wp_query; ?>
                <?php 
                    $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                    
                    $args = array( 
                        
                        'posts_per_page' => 2,   
                        'post_type' => 'post',
                        'paged' => $paged,
                        's' =>$s
                    ); 
                    $i = 0;
                    $query = new WP_Query($args); 
                    $found_posts = $query->found_posts; 
                    if($query->have_posts()) :
                    while ($query->have_posts()) { $query->the_post();$i++; ?>
                        <div  class="post">
                            <?php the_post_thumbnail('post-image');?>

                            <div class="text-box">
                                <div class="text">
                                    <div class="title" ><?php the_title();?></div> 
                                    <?php the_excerpt();?>
                                </div>
                                
                                <a href="<?php the_permalink();?>"><?php $link_text = get_field('link_text', 'option'); if($link_text){ echo $link_text; } else { echo 'Read More'; }?></a>
                            </div>
                            
                        </div>
                    <?php } else : ?>
                        <h2><?php $not_fount = get_field('not_fount_post_text', 'option'); if($not_fount){ echo $not_fount; } else { echo 'No posts found'; }?></h2>
                    <?php endif; ?>

                </div>
            <?php if (  $query->max_num_pages > 1  ) :?>

                <div class="pagination">

                    <div class="btn-page prev <?php if(get_previous_posts_link('> ', $query->max_num_pages) == NULL){ echo ' not-active';}?>">
                        <?php previous_posts_link('<', $query->max_num_pages);?>
                    </div>

                    <?php pagination_bar($query); ?> 

                    <div class="btn-page next <?php if( get_next_posts_link('> ', $query->max_num_pages) == NULL ){ echo ' not-active';}?>">
                        <?php next_posts_link('> ', $query->max_num_pages); ?>
                    </div>

                </div>
                
            <?php endif;?>
            <?php wp_reset_postdata(); ?>
        </div>
        <div class="sidebar">
            <?php
                if ( function_exists('dynamic_sidebar') )
                    dynamic_sidebar('sidebar');
            ?>
        </div>                
        
    </div>  
</div>
<?php
get_footer();