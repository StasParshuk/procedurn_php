<?php
$href = db_select('content', 'body', 'name="navbar"');
$json = json_decode($href[0]["body"],true);
?>


<section class="navbar black container-fluid <?= $_SERVER['REQUEST_URI'] == "/last/index.php/register" ? 'pink' : ''; ?>">
    <div class="icon">
        <img src="<?= ASSETS_URI; ?>img/icon.png" class="icon d-inline-block align-text-top"><img>
    </div>
    <ul class="navbar list">
<?php foreach ($json as $key => $keys): ?>
<!--        --><?php //echo var_dump($json[$keys])?>
        <li><a href="<?php echo $keys["href"]; ?>"
               class="nav-link  list ">
                <?php echo $keys["text"]; ?></a></li>

        <?php endforeach; ?>
        <li><a href="<?= $_SERVER['SCRIPT_NAME']?>/login" class="login list">login</a></li>
        <li>|</li>
        <li><a href="<?= $_SERVER['SCRIPT_NAME']?>/register" class="Sign UP list">register</a></li>

    </ul>
</section>