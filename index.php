<?php
    require './DAO/pdo.php';
    pdo_get_connection();
    require_once './DAO/catalog.php';
        require_once 'php/header.php';
        //main
            if(isset($_GET['page'])){
                if($_GET['page'] == "catalog"){
                    require 'php/catalog.php';
                }elseif($_GET['page'] == "movie"){
                    require 'php/movie.php';
                }else{
                    require 'php/home.php';
                }
            }else{
                require 'php/home.php';
            }
        //main
        require_once 'php/footer.php';
?>