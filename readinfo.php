<?php
$id =$_GET['id'];
$texto = file("Cadastro/$id");
foreach($texto as $linha){
    echo "$linha <br>";
}