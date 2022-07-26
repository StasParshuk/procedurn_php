<?php
$href = db_select(
'content',
'body',
'name="about"');
//echo "<pre>";
//echo  var_dump($href);
$json = json_decode($href[0]["body"], true);
//echo "<pre>";
//echo  var_dump($json);\
?>
<section id="about">
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center padding-about">
            <div class="video">
<!--                <div class="col-md-6 ">-->
<!--                    <iframe class="col-md-12"-->
<!--                            width="650px"-->
<!--                            height="400px"-->
<!--                            src="https://www.youtube.com/embed/R7VAkqqOydM"-->
<!--                            title="YouTube video player" frameborder="0"-->
<!--                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>-->
<!---->
<!--                    </iframe>-->
<!--                    <div class="overlay"></div>-->
<!--                    <a href="" class="play-btn">-->
<!--                        <img src="--><?//= ASSETS_URI; ?><!--img/play-icon.png" class="img-fluid play">-->
                    </a>
<!--                </div>-->

            </div>
            <div class="col-md-6 pad">
                <h6><?php echo $json[0]["string1"]; ?></h6>
                <h1><?php echo $json[0]["string2"]; ?></h1>
                <h6><?php echo $json[0]["string3"]; ?></h6>
                <h5><?php echo $json[0]["string4"]; ?></h5>
            </div>
        </div>

    </div>
</section>

