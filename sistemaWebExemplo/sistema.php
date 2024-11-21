<?php

    session_start();

    //Verificar se o usuário e senha estão autenticados
    if(!isset($_SESSION['email']) and !isset($_SESSION['senha'])){
        //Se não estiver autenticado, redirecionar para a página de login
        header("Location: login.html");
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="styles/fonts.css">
    <link rel="stylesheet" href="styles/media.css">
</head>
<body>
    <header>
        <div id="title">
            <h1>Marketing</h1>
            <h1>Criativo</h1>
        </div>

        <ul>
            <a href="#"><li>Início</li></a>
            <a href="#"><li>Serviços</li></a>
            <a href="#"><li>Sobre</li></a>
            <a href="#"><li>Contato</li></a>
            <a href="#"><li>Blog</li></a> 
            <a href="logout.php"><li>Sair</li></a>
        </ul>
    </header>

    <main>
        <aside>
            <h2><span>Inscreva-se agora</span></h2>
            <h2>na Newslatter</h2>
            <p>O marketing criativo vai além das estratégias convencionais, trazendo inovação e originalidade para conectar marcas ao seu público de maneira única. Ele utiliza storytelling, design e soluções fora do comum para destacar produtos e serviços em um mercado cada vez mais competitivo. A criatividade, quando aliada ao propósito, não só atrai atenção, mas também cria experiências memoráveis que fortalecem a relação entre empresa e cliente.</p>
        </aside>

        <article>
            <img src="components/images/77d0a7c454e658833800528e748edbe9.png" alt="mulher roxa">
        </article>
    </main>
</body>
</html>
