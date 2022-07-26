
<div class="row slon ">

        <img  src="https://i.natgeofe.com/n/cdf98bdd-e48d-420e-9a95-2542e7717e33/african-elephant_02.JPG?w=1440&h=958">

</div>
<form class="row g-3 black1 form_registration"
      id="login"
      action="<?= $_SERVER['SCRIPT_NAME']?>"
      method="POST">
    <input type="hidden" name="type" value="login" />
    <div class="col-md-6 color_text_white" >
        <label for="inputEmail4" class="form-label ">Эл. адрес</label>
        <input type="email" class="form-control" id="inputEmail4" placeholder="example@.com" name="email" required>
    </div>
    <div class="col-md-6 color_text_white">
        <label for="inputPassword4" class="form-label ">Пароль</label>
        <input type="password" class="form-control" id="inputPassword4" placeholder="********" name="password" required pattern=".{8,}" title="8 characters minimum">
    </div>
    <div class="col-md-6">
        <button type="submit" class="btn btn-primary">login</button>
    </div>
</form>