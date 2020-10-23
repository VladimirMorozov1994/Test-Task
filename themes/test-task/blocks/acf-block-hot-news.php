<?php 
$title = get_field('title');
$subtitle = get_field('subtitle');
?>
<div class="acf-block-hot-news">
    <div class="container">
        <h3><?php echo $title;?></h3>
        <p><?php echo $subtitle;?></p>

        <?php if( have_rows('hot_news') ): ?>
        <div class="hot-news">

            <?php while( have_rows('hot_news') ): the_row(); 
            $post_id = get_sub_field('post');
            ?>

                <a href="<?php echo get_post_permalink( $post_id );?>" class="item">
                    <div class="img">
                        <?php echo get_the_post_thumbnail( $post_id, 'hot-news' ); ?>
                    </div>
                    <div class="title"><?php echo get_the_title( $post_id );?></div>
                    <p><?php echo get_the_excerpt( $post_id );?></p>
                </a>

            <?php endwhile;?>

        </div>
        <?php endif; ?>
        
    </div>
</div>