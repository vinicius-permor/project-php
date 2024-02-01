<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<div class="class"><strong> Formulario </strong></div>
<h2> Cadastro </h2>
<?php
if (count($_POST) > 0){
    if (!filter_input(INPUT_POST, 'name')){
        echo "please enter the name", "<br>";
    }
    if (filter_input(INPUT_POST, 'birth')) {
        $dataTime = DateTime::createFromFormat('d/m/Y', $_POST['birth']);
        if (!$dataTime){
            echo"the date must be in the standard", "<br>";
        }
    }
    if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
        echo "invalid email","<br>" ;
    }
    if (!filter_var($_POST["site"], FILTER_VALIDATE_URL)){
        echo "invalida url","<br>";
    }
    $numberOfChildren = ["options"=> ["min_range"=> 0 , "max_range"=> 10]];
    if (!filter_var($_POST['children'], FILTER_VALIDATE_INT, $numberOfChildren) && $_POST['children'] != 0){
        echo "please enter number of children" , "<br>";
    }
    $salary = ["options"=>["decimal"=>"," ]];
    if (!filter_var($_POST["salary/year"], FILTER_VALIDATE_FLOAT, $salary)){
        echo "invalid salary" , "<br>";
    }
}

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
            <label for="children"> children </label>
            <input type="number" class="form-control"
                   id="children" name="children"
                   placeholder="children <?= $_POST['children'] ?>">
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

