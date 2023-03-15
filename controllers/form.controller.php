<?php
class ControllerForm {
    /*--- register --- */

    static public function controllerRegister() {

        if(isset($_POST["full_name"])) {

            $table  = "formulario";

            $data = array(
                "name" => $_POST["full_name"],
                "age" => $_POST["age"],
                "email" => $_POST["email"],
                "number_id" => $_POST["number_identification"],
                "type_id" => $_POST["type_document"],
                "phone" => $_POST["number_phone"],
            );

            $results = ModelForm::insertRegister($table, $data);
            if($results == "ok"){
                echo '<script>

			            alert("Se ha insertado el usuario")
                        window.location = "?page=dashboard";
				</script>';


            }

        }



    }

    /*--- Get register --- */

    static public function getRegisters($item, $valor){

        $table = "formulario";

        return ModelForm::getRegisterModel($table, $item, $valor);



    }


    /*---get delete--- */

    static public function controllerDeleteRegisters(){

        if(isset($_POST["deleteRegister"])){

            $table = "formulario";
            $data = $_POST["deleteRegister"];

            $results = ModelForm::ModelDeleteRegisters($table, $data);

            if($results == "ok"){
                echo '<script>

			            alert("Se ha eliminado correctamente")
                        window.location = "?page=dashboard";
				</script>';


            }

        }

    }


    /*--- get Update ---*/
    static public function controllerUpdateRegister(){

        if(isset($_POST["full_name"])) {

            $table = "formulario";
            $data = array(
                "id" => $_POST["id"],
                "full_name" => $_POST["full_name"],
                "age" => $_POST["age"],
                "email" => $_POST["email"],
                "number_id" => $_POST["number_identification"],
                "type_id" => $_POST["type_document"],
                "phone" => $_POST["phone"],
            );

            return ModelForm::ModelUpdateRegister($table, $data);

        }
    }

}
