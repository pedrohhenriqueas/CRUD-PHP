<?php  

    $host = "localhost";
    $user = "root";
    $pass = "";
    $db   = "base_trabalho_01";

    $conn = mysqli_connect($host, $user, $pass, $db);

    if(!$conn){
        exit();
        header("Location delete.php"); 
    }else{
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $id = $_POST['id'];

            $sql = "DELETE FROM usuarios WHERE id = '$id'";

            if(mysqli_query($conn, $sql)){
                echo "Usuário excluído com sucesso";
            }else{
                echo "Erro ao excluir usuário " . mysqli_error($conn);
            }
        }
    }
        
?>