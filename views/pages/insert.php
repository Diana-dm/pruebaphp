
<?php

if(isset($_GET["id"])){

    $table = "id";
    $data= $_GET["id"];

    $register = ControllerForm::controllerRegister($table, $data);

}

?>

<h1> Formulario </h1>
<html>
<body>
<form method="post">
    Nombre completo: <input type="text" placeholder="Nombre Completo" name="full_name"> <br> <br>
    Edad: <input type="number" placeholder="Edad" name="age"> <br> <br>
    Nùmero telefónico: <input type="number" placeholder="Nùmero telefónico" name="number_phone"> <br> <br>
    Correo electrónico: <input type="text" placeholder="email" name="email"> <br> <br>
    Nùmero de identificación: <input type="number" min="1" placeholder="Número de identificación" name="number_identification"> <br> <br>
    Tipo de identificación:
    <select name="type_document">
        <option select value=""> Seleccione el tipo de documento</option>
        <option value="a">Cedula de ciudadania</option>
        <option value="b">Targeta de identidad</option>
        <option value="c">Pasaporte</option>
    </select>



    <button type="submit" class="btn btn-primary">Insertar</button>
    <?php
    $register = ControllerForm::controllerRegister();
    if($register == "ok"){

        echo '<script>

			alert("Insertado Correctamente...")

			</script>';

        echo '<div class="alert alert-success">El usuario ha sido registrado</div>';

    }
    ?>
</form>
</body>

</html>