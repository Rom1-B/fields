<?php
include ("../../../inc/includes.php");

Html::header(__("Additionnal fields", "fields"), $_SERVER['PHP_SELF'] , 
             "config", "pluginfieldsmenu", "fieldscontainer");

Search::show("PluginFieldsContainer");

Html::footer();
?>
