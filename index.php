<!DOCTYPE HTML>
<!--
/*
-->
<html lang="en">
<head>
<!-- Force latest IE rendering engine or ChromeFrame if installed -->
<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
<meta charset="utf-8">
<title>UNASPMOBILE</title>
<meta name="description" content="File Upload widget with multiple file selection, drag&amp;drop support and progress bar for jQuery. Supports cross-domain, chunked and resumable file uploads. Works with any server-side platform (PHP, Python, Ruby on Rails, Java, Node.js, Go etc.) that supports standard HTML form file uploads.">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Bootstrap styles -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<!-- Generic page styles -->
<link rel="stylesheet" href="css/style.css">
<!-- CSS to style the file input field as button and adjust the Bootstrap progress bars -->
<link rel="stylesheet" href="css/jquery.fileupload.css">
</head>
<body>
<div class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-fixed-top .navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
    </div>
</div>
<div class="container">
    <h1>UNASPMOBILE Administração</h1>
    <h2 id="current_page" class="lead"></h2>
    <ul id="menu" class="nav nav-tabs">
        <li><a href="#biblioteca.php" alt="Biblioteca">Biblioteca</a></li>
        <li><a href="#notas.php" alt="Notas e Faltas">Notas e Faltas</a></li>
        <li><a href="#financeiro.php" alt="Financeiro" >Financeiro</a></li>
    </ul>
    <br>
    <div id="conteudo"></div>
</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<!-- The jQuery UI widget factory, can be omitted if jQuery UI is already included -->
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="main.js" type="text/javascript"></script>
</body> 
</html>
