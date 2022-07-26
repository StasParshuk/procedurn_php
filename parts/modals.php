<?php

$dress = db_select(
    'products',
    'id,title,price,description,quantity',
    'is_option is true and quantity > 0');
?>
<div class="modal fade" id="buy" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <form id="buy-form" action="<?= $_SERVER['SCRIPT_NAME']?>" method="POST">
                <input type="hidden" value="buy" name="type" />
                <div class="modal-header">
                    <img src="<?= ASSETS_URI; ?>img/logo-blue.png" alt="Footer Logo Blue">
                    <h5 class="modal-title" id="exampleModalLabel">Buy window</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row product-block">
                        <div class="col-4">Product</div>
                        <div class="col-4">Price per unit</div>
                        <div class="col-4">Total</div>
                    </div>
                    <div class="row product-block">
                        <div class="col-4 product-name"><b></b></div>
                        <div class="col-4 product-price"></div>
                        <div class="col-4 product-total"></div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <label for="">Quantity</label>
                            <input type="hidden" name="product_id" class="product" />
                            <input type="number" name="quantity" class="quantity-field form-control" min="1" value="1" />
                            <hr>
                            <h3>Additions:</h3>
                            <?php foreach ($dress as $addition): ?>
                                <div class="form-check form-switch">
                                    <img src="<?= ASSETS_URI; ?>img/logo-blue.png" alt="Footer Logo Blue">
                                    <input class="form-check-input additions-check"
                                           type="checkbox"
                                           role="switch"
                                           name="additions[]"
                                           id="addition-<?= $addition['id'] ?>"
                                           value="<?= $addition['id'] ?>"
                                    >
                                    <label class="form-check-label"
                                           for="addition-<?= $addition['id'] ?>"
                                    ><?= $addition['title'] ?>
                                        - <b class="price"><?= $addition['price'] ?></b><b>$</b>
                                        - <b class="additions-total"></b>
                                    </label>
                                    <input type="number"
                                           class="form-control additions-qnty"
                                           min="0"
                                           max="<?= $addition['quantity'] ?>"
                                           name="additions_qnty[]"
                                           disabled
                                    />
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <div class="col-12 text-right">
                            Total: <b class="final-price"></b>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Buy</button>
                </div>
            </form>
        </div>
    </div>
</div>
