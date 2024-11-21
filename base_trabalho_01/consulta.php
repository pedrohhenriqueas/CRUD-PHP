<?php

    $host = "localhost";
    $user = "root";
    $pass = "";
    $db   = "base_trabalho_01";

    $conn = mysqli_connect($host, $user, $pass, $db);

    if(!$conn){
        die("Falha na conexão: " . mysqli_connect_error());
    }else{
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $id = $_POST['id'];

            $sql = "SELECT * FROM usuarios WHERE id = '$id'";
            $result = mysqli_query($conn, $sql);
            if(mysqli_num_rows($result) > 0){
                $row = mysqli_fetch_assoc($result);
                $nome = $row['nome'];
                $telefone = $row['telefone'];
                $email = $row['email']; 
                $senha = $row['senha'];
            }else{
                echo "Usuário não encontrado";
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="consulta.css">
    <title>Consulta e atualização</title>
</head>
<body>
    <h2>Consulta e atualização</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Id para consulta: <input type="text" name="id">
        <input type="submit" value="Consultar">
    </form>
    <br>    

    <?php
    if(isset($nome)) { ?>
        <form method="post" action="atualiza.php" class="data-form">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <p>Nome:<br><input type="text" name="nome" value="<?php echo $nome; ?>"></p>
            <p>Telefone:<br><input type="text" name="telefone" value="<?php echo $telefone; ?>"></p>
            <p>Email:<br><input type="text" name="email" value="<?php echo $email; ?>"></p>
            <p>Senha:<br><input type="password" name="senha" value="<?php echo $senha; ?>"></p>
            <p><input type="submit" value="Atualizar usuário"></p>
        </form>
    <?php } ?>
</body>
</html>