<?php 
$title = get_field('title');
$text = get_field('text');
?>
<div class="acf-block-about">
    <div class="container">
        <div class="flex-box">
            <h3><?php echo $title;?></h3>
            <p><?php echo $text;?></p>
        </div>
    </div>
</div>