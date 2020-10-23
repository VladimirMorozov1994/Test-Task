<?php 
$block_unique_ID = $block['id'];
$title = get_field('title');
$subtitle = get_field('subtitle');
?>
<div class="acf-block-merch-slider <?php echo $block_unique_ID;?>">
    <div class="container">
        <h3><?php echo $title;?><span>.</span></h3>
        <p><?php echo $subtitle;?></p>

        <?php if( have_rows('merch') ): ?>
        <div class="merch-slider owl-carousel">

            <?php while( have_rows('merch') ): the_row(); 
            $post_id = get_sub_field('item');
            ?>

                <div class="item">
                    <div class="left-box">
                        <div class="title"><?php echo get_the_title( $post_id );?></div>
                        <div class="text"><?php echo get_the_excerpt( $post_id );?></div>
                    </div>
                    <div class="right-box">
                        <?php echo get_the_post_thumbnail( $post_id ); ?>
                    </div>
                </div>

            <?php endwhile;?>
            
        </div>
        <?php endif; ?>
        <script>
            jQuery(document).ready(function () { 
                jQuery('.<?php echo $block_unique_ID;?> .owl-carousel').owlCarousel({
                    items:1,
                    margin:0, 
                    nav: true,
                    navText: ["<span class='left'></span>","<span class='right'></span>"]
                }); 
            }); 
        </script>
    </div>
</div>