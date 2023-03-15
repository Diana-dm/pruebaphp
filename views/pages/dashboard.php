<?php

$results = ControllerForm::getRegisters(null, null);
?>

<a href="?page=insert">Insertar Datos</a>
<table class="table table-striped">
    <thead>
    <tr>
        <th>#</th>
        <th>Nombre</th>
        <th>Edad</th>
        <th>Número telefónico</th>
        <th>Correo electrónico</th>
        <th>Número de identificación</th>
        <th>Tipo de identificación</th>
    </tr>
    </thead>

    <tbody>


    <?php foreach ($results as $key => $value): ?>
        <tr>

            <td><?php echo $value["id"]; ?></td>
            <td><?php echo $value["full_name"]; ?></td>
            <td><?php echo $value["age"]; ?></td>
            <td><?php echo $value["phone"]; ?></td>
            <td><?php echo $value["email"]; ?></td>
            <td><?php echo $value["number_id"]; ?></td>
            <td><?php echo $value["type_id"]; ?></td>
        <td>

                <div class="btn-group">

                    <div class="px-1">

                        <a href="" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>

                    </div>
                    <div style="display: flex; gap: 3px">

                    <form method="post">

                        <input type="hidden" value="<?php echo $value["id"]; ?>" name="deleteRegister">

                        <button type="submit" class="btn btn-danger">Eliminar</button>
                        <?php
                        $delete = new ControllerForm();
                         $delete::controllerDeleteRegisters();
                        ?>

                    </form>

                        <a href="?page=update&id=<?php echo $value["id"]; ?>" class="btn btn-warning">Actualizar</a>

                </div>


            </td>
        </tr>
    <?php endforeach ?>



    </tbody>
</table>