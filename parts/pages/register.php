<?php
//echo "<pre>";
//var_dump($_SERVER);
?>
<div class="row slon pink">
    <div class="col-md-6 ">
        <img src="https://p0.pikist.com/photos/365/533/elephant-enrollment-intermittent-rosa-vintage-pop-art-behind-comic.jpg">
    </div>
</div>
<form class="row g-3 pink form_registration"
      id="buy-form"
      action="<?= $_SERVER['SCRIPT_NAME']?>"
      method="POST">
    <input type="hidden" name="type" value="register" />
    <div class="col-md-6">
        <label for="inputEmail4" class="form-label">Эл. адрес</label>
        <input type="email" class="form-control" id="inputEmail4" placeholder="example@.com" name="email" required>
    </div>
    <div class="col-md-6">
        <label for="inputPassword4" class="form-label" p>Пароль</label>
        <input type="password" class="form-control" id="inputPassword4" placeholder="********" name="password"  pattern=".{8,}" required title="8 characters minimum">
    </div>
    <div class="col-md-6">
        <label for="inpuName" class="form-label">Имя</label>
        <input type="text" class="form-control" id="inputAddress" placeholder="Jonny" name="name" required>
    </div>
    <div class="col-md-6">
        <label for="inputSurname" class="form-label">фамилия</label>
        <input type="text" class="form-control" id="inputCity" placeholder="Parshuk" name="surname" required>
    </div>
    <div class="col-md-6">
        <label for="inputState" class="form-label">Область</label>
        <select id="inputState" class="form-select">
            <option selected>...</option>
            <option>Poltava</option>
            <option>Lviv</option>
            <option>Kiev</option>
            <option>Dnipro</option>
        </select>
    </div>
    <div class="col-md-6">
        <label for="inputZip" class="form-label">Индекс</label>
        <input type="text" class="form-control" id="inputZip" placeholder="51***">
    </div>
    <div class="col-md-6">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck" value="1" required>
            <label class="form-check-label" for="gridCheck">
                agree
            </label>
        </div>
    </div>
    <div class="col-md-6">
        <button type="submit" class="btn btn-primary">registration</button>
    </div>
</form>

