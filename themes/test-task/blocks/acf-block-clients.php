<?php 
$title = get_field('title');
?>
<div class="acf-block-сlients">
    <div class="container">
        <h3><?php echo $title;?></h3>

        <?php if( have_rows('clients') ): ?>

            <div class="items">

                <?php while( have_rows('clients') ): the_row(); 
                $post_id = get_sub_field('client'); 
                ?>

                    <a href="/сlients" class="item">
                        <?php $thumbnail = get_the_post_thumbnail_url($post_id);
                    echo file_get_contents($thumbnail);?>
                    </a>

                <?php endwhile;?>

            </div>

        <?php endif; ?>

    </div>
</div>