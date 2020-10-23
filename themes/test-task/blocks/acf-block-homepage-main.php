<?php 
$title = get_field('title');
$text = get_field('text');

$button_text = get_field('button_text');
$button_link = get_field('button_link');

$subtext = get_field('subtext');
?>
<div class="acf-block-homepage-main">
    <div class="container">

        <h2><?php echo $title;?></h2>
        <p><?php echo $text;?></p>
        <a href="<?php echo $button_link;?>" class="btn"><?php echo $button_text;?></a>
        <span><?php echo $subtext;?></span>

        <a href="" class="next"></a>    

    </div>
</div>