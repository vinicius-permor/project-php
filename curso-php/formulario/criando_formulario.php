<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<div class="class"><strong> Formulario </strong></div>
<h2> Cadastro </h2>
<?php

?>
<form action="#" method="post">
    <div class="form-row">
        <div class="form-group col-md-9">
            <label for="name"> name </label>
            <input type="text" class="form-control"
                 id="name" name="name" placeholder="name
            <?= $_POST['name'] ?>" >
        </div>
        <div class="form-group col-md-3">
            <label for="birth"> birth </label>
            <input type="text" class="form-control"
                   id="birth" name="birth"
                   placeholder="birth <?= $_POST['birth']?>">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="email"> E-mail </label>
            <input type="text" class="form-control"
                   id="email" name="email"
                   placeholder="E-mail <?= $_POST['email']?>">
        </div>
        <div class="form-group col-md-6">
            <label for="site"> site </label>
            <input type="text" class="form-control"
                   id="site" name="site"
                   placeholder="site <?= $_POST['site'] ?>">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="do you have children ?"> do you have children ? </label>
            <input type="text" class="form-control"
                   id="do you have children ?" name="do you have children ?"
                   placeholder="do you have children ? <?= $_POST['do you have children'] ?>">
        </div>
        <div class="form-group col-md-6">
            <label for="salary/year"> salary/year </label>
            <input type="text" class="form-control"
                   id="salary/year" name="salary/year"
                   placeholder="salary/year <?= $_POST['salary/year'] ?>">
        </div>
    </div>
    <button class="btn btn-primary btn-lg"> send </button>
</form>

