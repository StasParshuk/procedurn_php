<?php
$href = db_select(
    'content',
    'body',
    'name="features"');
//echo "<pre>";
//echo  var_dump($href);
$json = json_decode($href[0]["body"], true);
//echo "<pre>";
//echo  var_dump($json);\
?>
<section id="features" class="section-gap">
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="content col-lg10">
                <div class="text text-center">
                    <h1 class="mb-10"><?php echo $json[0]["title"]; ?> </h1>
                    <p><?php echo $json[0]["description"]; ?></p>
                </div>
            </div>
        </div>


        <?php
        $href = db_select(
            'products',
            'id,title,price,quantity,description,is_option',
        'is_option is false and quantity > 0');
        $href = array_chunk($href,3);
        ?>
        <?php foreach ($href as $row): ?>
        <div class="row">
            <?php foreach ($row as $product): ?>
                <div class="col-lg-4" >
                    <div class="item-slon"
                    data-id="<?php echo $product['id'] ?>"
                    data-qnty="<?php echo $product['quantity'] ?>"
                         data-name="<?= $product['title'] ?>"
                         data-price="<?= $product['price'] ?>"
                         data-bs-toggle="modal"
                         data-bs-target="#buy">
                        <div class="title-item justify-content-between d-flex">
                            <h4><?php echo $product['title'] ?></h4>
                            <p class="price ">
                                <?php echo $product['price'] ?>
                            </p>
                        </div>
                        <p><?php echo $product['description'] ?></p>
                    </div>
                </div>

                    <?php endforeach; ?>
        </div>
            <?php endforeach; ?>
    </div>

</section>
