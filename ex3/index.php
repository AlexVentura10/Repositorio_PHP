<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Primitivos</title>
</head>
<body>
    <h1>Tipos Primitivos</h1>
    <?php 
    
     $tipoPrimitivo = 300;
     
     var_dump($tipoPrimitivo); // Essa função mostrará o tipo de primitivo da variável.
     
     // 

     $num1 = 3e2;

     echo " 3e2 = $num1 <br> Tipo primitivo: "; // 3e2 = 3x10(2)

     var_dump($num1); // Uma vez potência, sempre obteremos float 
     
     // 

     echo "<br>"; 

     $num2 = "427";

     var_dump($num2);

     echo "<br>";

     // Vetor 

     $vet = [6,"Alex",7.5,9,3];
     var_dump($vet);
    
     echo "<br>";

     // Class and Object (Tipo primitivo do tipo composto)
  
    class Pessoa
    { 
      public string $nome;
    }
     $usuario = new Pessoa;

     $usuario = "Alex";

     echo "O nome do usuário é: $usuario";

    ?>

</body>
</html>