<!--
    Se define una clase llamada "View" que tiene un método que se encarga de mostrar una vista.
-->
<?php
    class View {
        public static function show ($viewName,$data=null){
            include_once ("header.php");
            include("$viewName.php");
            include_once ("footer.php");
        }
    } 
?>