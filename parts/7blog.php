<?php
$href = db_select(
    'content',
    'body',
    'name="blog"');
//echo "<pre>";
//echo  var_dump($href);
$json = json_decode($href[0]["body"], true);
//echo "<pre>";
//echo  var_dump($json);\
?>
<section id="blog">
    <div class=" container d-flex justify-content-between">
        <div class="row  col-6 image_blog d-flex ">
            <img src="<?= ASSETS_URI; ?>img/08-screenshot.jpg" class="">
            <div class="div"><a href="<?php echo $json[0]["href"]; ?>" class="btn btn-info" ><?php echo $json[0]["text"]; ?></a>
            </div>
            <div class="row">
                <h3><?php echo $json[0]["string1"]; ?></h3>
                <h6><?php echo $json[0]["string2"]; ?></h6><br>
                <h3><strong> <?php echo $json[0]["string3"]; ?></strong></h3>
            </div>
        </div>

        <div class="row col-md-6 image_blog d-flex">
            <img src="<?= ASSETS_URI; ?>img/07-screenshot.jpg" class="">
            <div><a href="<?php echo $json[1]["href"]; ?>" data-bs-target="#buy" class="btn btn-infobtn btn-outline-info"><?php echo $json[1]["text"]; ?></a>
            </div>
            <div class="row">
                <h3><?php echo $json[1]["string1"]; ?></h3>
                <h6><?php echo $json[1]["string2"]; ?></h6><br>
                <h3><strong> <?php echo $json[1]["string3"]; ?></strong></h3>


            </div>


        </div>
</section>
