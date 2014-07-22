<!DOCTYPE HTML>
<!--
/*
-->
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>UNASPMOBILE</title>
        <meta name="description" content="File Upload widget with multiple file selection, drag&amp;drop support and progress bar for jQuery. Supports cross-domain, chunked and resumable file uploads. Works with any server-side platform (PHP, Python, Ruby on Rails, Java, Node.js, Go etc.) that supports standard HTML form file uploads.">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/jquery.fileupload.css">
    </head>
    <body>
        <div class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <h1>UNASPMOBILE Administração</h1>
                </div>
            </div>
        </div>
        <div class="container">
            <h2 id="current_page" class="lead"></h2>
            <ul id="menu" class="nav nav-tabs ">
                <li><a href="#pages/biblioteca.php" alt="Biblioteca">Biblioteca</a></li>
                <li><a href="#pages/notas.php" alt="Notas e Faltas">Notas e Faltas</a></li>
                <li><a href="#pages/financeiro.php" alt="Financeiro" >Financeiro</a></li>
            </ul>
            <br>
            <div id="conteudo" class="conteudo"></div>
        </div>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/main.js" type="text/javascript"></script>
    </body> 
</html>
