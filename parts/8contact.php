<?php
$href = db_select(
    'content',
    'body',
    'name="contact"');
//echo "<pre>";
//echo  var_dump($href);
$json = json_decode($href[0]["body"], true);
//echo "<pre>";
//echo  var_dump($json);\
?>
<section id="contact">

    <div class="container">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="content col-lg-10">
                <div class="text text-center">
                    <h1 class="mb-10"><?php echo $json[0]["title"]; ?> </h1>
                    <p><?php echo $json[0]["description"]; ?></p>
                </div>
            </div>
        </div>
        <?php
        $href = db_select(
            'reviews',
            'name_surname,comment');
//        echo "<pre>";
//        echo  var_dump($href);
        ?>
        <div class="row d-flex justify-content-between align-items-center">
            <div class="col-lg-6">
                <div class="carousel slide slider" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <?php foreach ($href as $key => $keys): ?>
                        <div class="carousel-item <?= ($key == 0 ? 'active' : ''); ?>" data-bs-interval="2000">
                            <div class="text text-center">
                                <h1 class="mb-10"><?php echo $keys["name_surname"]; ?> </h1>
                                <p><?php echo $keys["comment"]; ?></p>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="carousel slide slider" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <?php foreach ($href as $key => $keys): ?>
                            <div class="carousel-item <?= ($key == 0 ? 'active' : ''); ?>" data-bs-interval="2000">
                                <div class="text text-center">
                                    <h1 class="mb-10"><?php echo $keys["name_surname"]; ?> </h1>
                                    <p><?php echo $keys["comment"]; ?></p>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

        </div>
        <div class="row reviews">
            <div class="col-lg-3">
                <h3>Mood</h3>
                <h1>35678</h1>
            </div>
            <div class="col-lg-3">
                <h3>GOOD</h3>
                <h1>35678</h1>
            </div>
            <div class="col-lg-3">
                <h3>Sad</h3>
                <h1>35678</h1>
            </div>
            <div class="col-lg-3">
                <h3>Bad</h3>
                <h1>35678</h1>
            </div>

        </div>
    </div>

</section>
