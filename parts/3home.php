<?php
$href = db_select(
    'content',
    'body',
    'name="home"');
$json = json_decode($href[0]["body"], true);
?>
<section id="home">
    <div class="container">
        <div class="row banner-row d-flex  align-items-center justify-content-start  ">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <?php for ($i = 0; $i < count($json); $i++): ?>
                        <button type="button" data-bs-target="#carouselExampleIndicators"
                                data-bs-slide-to="<?= $i ?>"
                                class="<?= ($i == 0 ? 'active' : ''); ?>"
                                aria-current="true"
                                aria-label="Slide <?= ($i + 1) ?>"
                        ></button>
                    <?php endfor; ?>

                </div>

                <div class="carousel-inner">
                    <?php foreach ($json as $key => $keys): ?>
                    <div class="carousel-item
                    <?= ($key == 0 ? 'active' : ''); ?>" >
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-7 banner-slide-container">
                                    <h6><?php echo $keys["title"]; ?></h6>
                                    <h1><?php echo $keys["description"]; ?></h1>
                                    <a href="<?php echo $keys["href"]; ?>"
                                       class="btn text-uppercase btn-outline-dark"
                                    > <?php echo $keys["text"]; ?> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>

            </div>

        </div>
    </div>
</section>
