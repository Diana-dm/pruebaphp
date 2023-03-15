<?php



if(isset($_GET["page"])){

    if($_GET["page"] == "insert" ||
        $_GET["page"] == "dashboard" ||
        $_GET["page"] == "update"
    ){

        include "pages/".$_GET["page"].".php";

    }else{

        include "pages/404.php";
    }


}else{

    include "pages/dashboard.php";

}

