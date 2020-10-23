<?php get_header(); ?>
<div class="head-box">
    <div class="container">
        <h2>Clients</h2>
    </div> 
</div>
<div class="clients-page">
    <div class="container"> 
        <div class="breadcrumbs">
            <a href="/">Home</a><i>  —  </i>
            <span>Clients</span>
        </div>

        <div class="items"> 
            <?php 
            $args = array(
                'posts_per_page' => -1,
                'post_type' => 'clients' 
            ); 
            $query = new WP_Query($args); 
            while ($query->have_posts()) { $query->the_post();  ?>

                <div class="item">
                    <?php $thumbnail = get_the_post_thumbnail_url();
                    echo file_get_contents($thumbnail);
                    ?>
                </div>

            <?php } ?>
        </div>
    </div>
</div>
<?php
get_footer();