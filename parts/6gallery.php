<?php
$href = db_select(
    'content',
    'body',
    'name="gallery"');
//echo "<pre>";
//echo  var_dump($href);
$json = json_decode($href[0]["body"], true);
//echo "<pre>";
//echo  var_dump($json);\
?>
<section id="gallery">
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="content col-lg10">
                <div class="text text-center">
                    <h1 class="mb-10"><?php echo $json[0]["title"]; ?>  </h1>
                    <p><?php echo $json[0]["description"]; ?></p>

                </div>
            </div>
            <div class="row ">
                <div class="col-lg-4 left-gallery item-gallery">
                    <img src="<?= ASSETS_URI; ?>img/01-screenshot.jpg" alt="image">
                    <img src="<?= ASSETS_URI; ?>img/02-screenshot.jpg" alt="img">
                </div>
                <div class="col-lg-8 right-gallery ">
                    <img src="<?= ASSETS_URI; ?>img/images/kind_coffee/g3.jpg" alt="image">
                    <div class="row">
                        <div class="col-lg-6 item-gallery">
                            <img src="<?= ASSETS_URI; ?>img/04-screenshot.jpg" alt="image">
                        </div>
                        <div class="col-lg-6 item-gallery">
                            <img src="<?= ASSETS_URI; ?>img/05-screenshot.jpg" alt="image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
