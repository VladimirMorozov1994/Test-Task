</main>

<footer class="footer">
    <div class="container d-flex">
        <div class="f-flex-box-container">
            
            <h1 class="logo ">
                <a href="<?php echo home_url();?>" alt="<?php bloginfo( 'name' ); ?>" class="d-flex align-items-start">
                    <?php 
                    $custom_logo_id = get_theme_mod( 'custom_logo' );
                    $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                    if ( has_custom_logo() ) {
                            echo '<img src="' . esc_url( $logo ) . '" alt="' . get_bloginfo( 'name' ) . '">';
                    } else {
                        echo '<img src="'. get_template_directory_uri() .'/assets/img/logo.svg" alt="logo">';
                    }?> 
                </a>
            </h1>
            <?php
                if ( function_exists('dynamic_sidebar') )
                    dynamic_sidebar('footer');
            ?>

        </div>
    </div>
</footer>
<?php wp_footer();?>
</body>
</html>