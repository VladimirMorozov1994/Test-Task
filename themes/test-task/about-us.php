<?php
/* Template Name: About us */ 
get_header();?> 
<div class="about-us-page">
    <div class="container">
        <div class="breadcrumbs">
            <a href="/">Home</a><i>  —  </i>
            <span><?php single_post_title();?></span>
            
        </div>
        <h2><?php single_post_title();?></h2>

        <div class="content">
            <?php 
                the_content(); 
            ?>
        </div>
    </div>
</div>


<?php
get_footer();
