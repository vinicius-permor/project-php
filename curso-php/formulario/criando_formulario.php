<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"><div class="class"><strong> Formulario </strong></div>
<h2> Cadastro </h2>
<?php
if (count($_POST) > 0){
    $error = [];
    //$messageError = [];
    if (!filter_input(INPUT_POST, 'name')){
        $error['name'] = "please enter the name";
    }
    if (filter_input(INPUT_POST, 'birth')) {
        $dataTime = DateTime::createFromFormat('d/m/Y', $_POST['birth']);
        if (!$dataTime){
            $error ['birth'] = "the date must be in the standard";
        }
    }
    if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
        $error['email'] =  "invalid email";
    }
    if (!filter_var($_POST["site"], FILTER_VALIDATE_URL)){
        $error['site'] =  "invalid url";
    }
    $numberOfChildren = ["options"=> ["min_range"=> 0 , "max_range"=> 10]];
    if (!filter_var($_POST['children'], FILTER_VALIDATE_INT, $numberOfChildren) && $_POST['children'] != 0){
        $error['children'] =  "please enter number of children";
    }
    $salary = ["options"=>["decimal"=>"," ]];
    if (!filter_var($_POST["salary/year"], FILTER_VALIDATE_FLOAT, $salary)){
        $error['salary/year'] =  "invalid salary";
    }
}
?>
<form action="#" method="post">
    <div class="form-row">
        <div class="form-group col-md-8">
            <label for="name"> name </label>
            <input type="text" class="form-control <?= $error['name'] ? 'is-invalid' : ''?>"
                   id="name" name="name"
                   placeholder="name <?= $_POST['name'] ?>">
            <div class="invalid-feeedback"> <?= $error['name'] ?> </div>
        </div>

        <div class="form-group col-md-4">
            <label for="birth"> birth </label>
            <input type="date" class="form-control <?= $error['birth'] ? 'is-invalid' : ''?>"
                   id="birth" name="birth"
                   placeholder="birth <?= $_POST['birth']?>">
            <div class="invaid-feedback"> <?= $error['birth'] ?> </div>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="email"> E-mail </label>
            <input type="email" class="form-control <?= $error['email'] ? 'is-invalid' : ''?>"
                   id="email" name="email"
                   placeholder="E-mail <?= $_POST['email']?>">
            <div class="invalid-feedback"> <?= $error['email'] ?> </div>
        </div>
        <div class="form-group col-md-6">
            <label for="site"> site </label>
            <input type="url" class="form-control <?=  $error['site'] ? 'is-invalid' : ''?>"
                   id="site" name="site"
                   placeholder="site <?= $_POST['site'] ?>">
            <div class="invalid-feedback"> <?= $error['site'] ?> </div>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="children"> children </label>
            <input type="number" class="form-control <?= $error ['children'] ? 'is-invalid' : ''?>"
                   id="children" name="children"
                   placeholder="children <?= $_POST['children'] ?>">
            <div class="invalid-feedback"> <?= $error['children'] ?> </div>
        </div>
        <div class="form-group col-md-6">
            <label for="salary/year"> salary/year </label>
            <input type="text" class="form-control <?= $error['salary/year'] ? 'is-invalid' : '' ?>"
                   id="salary/year" name="salary/year"
                   placeholder="salary/year <?= $_POST['salary/year'] ?>">
            <div class="invalid-feedback"> <?= $error['salary/year'] ?> </div>
        </div>
    </div>
    <button class="btn btn-primary btn-lg"> send </button>
</form>

