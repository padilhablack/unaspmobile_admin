<?php
//	header('LOCATION: ../view/inserir_material.php');
?>
<div>
    <nav class="navbar navbar-default navbar-fixed" role="navigation">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Biblioteca</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul id="menu_biblioteca" class="nav navbar-nav">
                    <li class="active"><a href="#novo">Emprestimos</a></li>
                    <li class="dropdown">
                        <a href="#fgdfg" class="dropdown-toggle" data-toggle="dropdown">Materiais</a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#view/inserir_material.php">Novo</a></li>
                            <li><a href="#fffg">Listar</a></li>
                          
                        </ul>
                    </li>
                </ul>
                <form class="navbar-form navbar-left" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Pesquisar..">
                    </div>
                    <button type="submit" class="btn btn-default">Pesquisar</button>
                </form>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</div>
<div id="content" class="conteudo"></div>
<script>

    $(document).ready(function() {
        $('#menu_biblioteca li').click(function(e) {
            active($('#menu_biblioteca li'), ($(this)));
        });

        $('#menu_biblioteca li a').click(function(e) {
            loadPagina($(this).attr('href'), $("#content"));
        });

        $('.dropdown-toggle').dropdow();

        jQuery('ul.nav li.dropdown').hover(function() {
            jQuery(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn();
        }, function() {
            jQuery(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut();
        });
    });
</script>

<style>

    ul.nav li.dropdown:hover > ul.dropdown-menu {
        display: block;    
    }

    a.menu:after, .dropdown-toggle:after {
        content: none;
    }
</style>