<html>
    <head>
        <title>Choferes</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/nuevo.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <center>
            <table class="pasaje">
                <tr><th>TRABAJADORES DE INTER - PERÚ
                <tr><td>Registro de Choferes
            </table>


            <div class="registro">
                <form action="<?=base_url();?>Inicio/nuevochofer2d" method= "POST">
                    <fieldset>
                        <legend>Borrar Chofer</legend>
                        <table>
                            <tr><td class="celda">Ingrese Codigo de Chofer:
                              <td colspan="2"><input type="text" class ="pass" name ="codigo" placeholder="Codigo" required>
                            <tr><td colspan="2" class="boton"><input type="submit" value="Enviar">
                                <input type="reset" value="Restablecer">
                        </table>
                    </fieldset>
                </form>
            </div>
        </center>
    </body>
</html>
