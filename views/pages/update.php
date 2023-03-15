
<?php

if(isset($_GET["id"])){

    $item = "id";
    $valor = $_GET["id"];

    $data = ControllerForm::getRegisters($item, $valor);

}

?>
<h1> Formulario </h1>
<form method="post">

    Nombre completo: <input type="text" placeholder="Nombre Completo"  value="<?php echo $data["full_name"]; ?>" name="full_name"> <br> <br>
    Edad: <input type="number" placeholder="Edad" value="<?php echo $data["age"]; ?>"  name="age"> <br> <br>
    Nùmero telefónico: <input type="number" placeholder="Nùmero telefónico" value="<?php echo $data["phone"]; ?>"  name="phone"> <br> <br>
    Correo electrónico: <input type="text" placeholder="email"  value="<?php echo $data["email"]; ?>"  name="email"> <br> <br>
    Nùmero de identificación: <input type="number" min="1" placeholder="Número de identificación" value="<?php echo $data["number_id"]; ?>"  name="number_identification"> <br> <br>
    Tipo de identificación:
    <select  name="type_document">
        <option <?php if($data["type_id"] == "") echo "selected"; ?> value=""> Seleccione el tipo de documento</option>
        <option <?php if($data["type_id"] == "a") echo "selected"; ?>  value="a">Cedula de ciudadania</option>
        <option <?php if($data["type_id"] == "b") echo "selected"; ?>  value="b">Targeta de identidad</option>
        <option <?php if($data["type_id"] == "c") echo "selected"; ?>  value="c">Pasaporte</option>
    </select>
    <input type="hidden" name="id" value="<?php echo $data["id"]; ?>">
    <button type="submit" class="btn btn-primary">Actualizar</button>

<?php

$update = ControllerForm::controllerUpdateRegister();

if($update == "ok"){



    echo '<div class="alert alert-success">El usuario ha sido actualizado correctamente</div>';
    echo '<script>
					window.location = "?page=dashboard";
				</script>';


}

?>
</form>
