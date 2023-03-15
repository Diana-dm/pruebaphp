<?php
require_once "connection.php";

class ModelForm
{

    /*------
    Register
    -------*/
    static public function insertRegister($table, $data)
    {

        $stmt = Connection::db()->prepare("INSERT INTO $table(full_name, age, email, number_id, type_id, phone ) VALUES (:name, :age, :email, :number_id, :type_id, :phone)");

        $stmt->bindParam(":name", $data["name"], PDO::PARAM_STR);
        $stmt->bindParam(":age", $data["age"], PDO::PARAM_STR);
        $stmt->bindParam(":email", $data["email"], PDO::PARAM_STR);
        $stmt->bindParam(":number_id", $data["number_id"], PDO::PARAM_STR);
        $stmt->bindParam(":type_id", $data["type_id"], PDO::PARAM_STR);
        $stmt->bindParam(":phone", $data["phone"], PDO::PARAM_STR);

        if ($stmt->execute()) {

            return "ok";

        } else {

            print_r(Connection::db()->errorInfo());


        }

        $stmt->close();

        $stmt = null;

    }

    /*------
 Get Register
 -------*/

    static public function getRegisterModel($table, $item, $valor)
    {
        if($item == null && $valor == null) {
            $stmt = Connection::db()->prepare("SELECT * FROM $table");
            $stmt->execute();
            return $stmt->fetchAll();
        }else{
            $stmt = Connection::db()->prepare("SELECT * FROM $table WHERE $item = :$item ORDER BY id DESC");

            $stmt->bindParam(":".$item, $valor, PDO::PARAM_STR);

            $stmt->execute();

            return $stmt -> fetch();
        }

        $stmt-> close();
        $stmt = null;

    }


    /*---- Delete Register */

    static public function ModelDeleteRegisters($table, $valor){

        $stmt = Connection::db()->prepare("DELETE FROM $table WHERE id = :id");

        $stmt->bindParam(":id", $valor, PDO::PARAM_STR);

        if($stmt->execute()){

            return "ok";

        }else{

            print_r(Connection::db()->errorInfo());

        }

        $stmt-> close();
        $stmt = null;

    }

    /*----  Update Register -----*/
    static public function ModelUpdateRegister($table, $data){

        $stmt = Connection::db()->prepare("UPDATE $table SET full_name=:full_name, age=:age, email=:email, number_id=:number_id, type_id=:type_id, phone=:phone WHERE id = :id");

        $stmt->bindParam(":id", $data["id"], PDO::PARAM_INT);
        $stmt->bindParam(":full_name", $data["full_name"], PDO::PARAM_STR);
        $stmt->bindParam(":age", $data["age"], PDO::PARAM_STR);
        $stmt->bindParam(":email", $data["email"], PDO::PARAM_STR);
        $stmt->bindParam(":number_id", $data["number_id"], PDO::PARAM_STR);
        $stmt->bindParam(":type_id", $data["type_id"], PDO::PARAM_STR);
        $stmt->bindParam(":phone", $data["phone"], PDO::PARAM_STR);

        if($stmt->execute()){

            return "ok";

        }else{

            print_r(Connection::db()->errorInfo());

        }

        $stmt->close();

        $stmt = null;
    }
}