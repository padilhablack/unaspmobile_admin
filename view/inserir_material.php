<div style="width: 500px; margin-right: 99%;">
    <form class="form-horizontal" id="myForm" action="controller/inserirMaterial.php" method="post" enctype="multipart/form-data">
        <fieldset>
            <!-- Form Name -->
            <legend>Cadastrar Livro</legend>

            <!-- Select Basic -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="tipo">Tipo</label>
                <div class="col-md-4">
                    <select id="tipo" name="tipo" class="form-control">
                        <option value="livro">Livro</option>
                        <option value="periodico">Periódico</option>
                    </select>
                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="autor">Autor</label>  
                <div class="col-md-4">
                    <input id="autor" name="autor" type="text" placeholder="Autor..." class="form-control input-md" required="">
                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="titulo">Titulo</label>  
                <div class="col-md-4">
                    <input id="titulo" name="titulo" type="text" placeholder="Titulo" class="form-control input-md " required="">

                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="ano">Ano</label>  
                <div class="col-md-4">
                    <input id="ano" name="ano" type="text" placeholder="Ano" class="form-control input-md" required="">

                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="assunto">Assunto</label>  
                <div class="col-md-4">
                    <input id="assunto" name="assunto" type="text" placeholder="Assunto" class="form-control input-md" required="">

                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="editora">Editora</label>  
                <div class="col-md-4">
                    <input id="editora" name="editora" type="text" placeholder="Editora" class="form-control input-md" required="">

                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="serie">Série</label>  
                <div class="col-md-4">
                    <input id="serie" name="serie" type="text" placeholder="Série" class="form-control input-md" required="">

                </div>
            </div>
			
			<!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="serie">Quantidade</label>  
                <div class="col-md-2">
                    <input id="quantidade" name="quantidade" type="text" maxlength="5" class="form-control input-md" required="">

                </div>
            </div>

            <!-- Button (Double) -->

            <div class="form-group">
                <label class="col-md-4 control-label" for="imagem">Imagem:</label>
                <div class="col-md-8">
                    <span class="btn btn-success fileinput-button">
                        <i class="glyphicon glyphicon-plus"></i>
                        <span>Procurar arquivos...</span>
                        <!-- The file input field used as target for the file upload widget -->
                        <input id="sdfdf" type="file" name="imagem" multiple>
                    </span>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label" for="enviar"></label>
                <div class="col-md-8">
                    <input type="submit" id="enviar" name="enviar" class="btn btn-success">
                    <button id="cancelar" name="cancelar" class="btn btn-danger">Cancelar</button>
                </div>
            </div>
        </fieldset>
    </form>
    <br>
    <!-- The global progress bar -->
    <div id="progress" class="progress">
        <div class="progress-bar progress-bar-success"></div>
    </div>
    <div id="message"></div>
</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.form.js" type="text/javascript"></script>
<script>
    $(document).ready(function()
    {

        var options = {
            beforeSend: function()
            {
                $("#progress").show();
                //clear everything
                $("#message").html("");
            },
            uploadProgress: function(event, position, total, percentComplete)
            {
                $("#bar").width(percentComplete + '%');
                $('#progress .progress-bar').css(
                        'width',
                        percentComplete + '%'
                        );
                setTimeout( "jQuery('#progress').fadeOut('slow');",3000 );
                ;

            },
            success: function()
            {
                $("#bar").width('100%');
                $("#percent").html('100%');

            },
            complete: function(response)
            {
                $("#message").html(response.responseText);
            },
            error: function()
            {
                $("#message").html("<font color='red'> ERROR: unable to upload files</font>");

            }

        };
        $("#myForm").ajaxForm(options);

    });
</script>
</body> 

