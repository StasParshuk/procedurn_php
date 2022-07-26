
<footer id="footer " class=" <?= $_SERVER['REQUEST_URI'] == "/last/index.php/register" ? 'pink' : 'main_color'; ?>

<?= $_SERVER['REQUEST_URI'] == "/last/index.php/login" ? 'black1' : ''; ?>
">
    <div class="container ">
        <div class="row">
            <div class="col-md-5">
                <h1 class="footer-logo">
                    <img src="<?= ASSETS_URI; ?>img/logo-blue.png" alt="Footer Logo Blue">
                </h1>
                <p>Developed by <a href="">stas parshuk(про слонов шутка слон=кофе)</a></p>
            </div>
            <div class="col-md-7">
                <ul class="foot-list">
                    <li><a href="#about" class="nav-link">About</a></li>
                    <li><a href="#features" class="nav-link">Features</a></li>
                    <li><a href="#gallery" class="nav-link">Screenshots</a></li>
                    <li><a href="#contact" class="nav-link">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

</body>
</html>
<?php __DIR__ . '../assets/scripts.php' ?>
