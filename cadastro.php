<?php
extract($_POST);
if(file_exists("Cadastro/$id.txt")){
    echo '<script> alert("Esse ID já está sendo usado") </script>';
} else {
    $file = fopen("Cadastro/$id.txt", 'a+');
    fwrite($file, "Id: $id\nNome: $nome\nCargo: $cargo\nSalário: $sal\nDependentes: $depen\n");
    fclose($file);
}
$arquivo = scandir('Cadastro');
array_shift($arquivo);
array_shift($arquivo);
foreach($arquivo as $linha){
    echo '<a href=readinfo.php?id='.$linha.'>'.$linha.'<br>';
}
echo '<form action="index.php"><button type="submit">Retornar</button></form>';
?>