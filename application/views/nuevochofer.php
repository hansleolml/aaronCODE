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
                <form action="<?=base_url();?>Inicio/nuevochofer2" method= "POST">
                    <fieldset>
                        <legend>Ingreso de Choferes</legend>
                        <table>
                            <tr><td class="celda">Nombre de Choferes: <td colspan="2"><input title="nombre de usuario" type="text" class ="pass" name ="nombre" placeholder="Nombre" required>
                            <tr><td class="celda">Ruta: <td colspan="2">
                                    <select name="destino">
                                        <option value="">Seleccionar ruta</option>
                                        <option value="Arequipa">Arequipa</option>
                                        <option value="Ayacucho">Ayacucho</option>
                                        <option value="Chiclayo">Chiclayo</option>
                                        <option value="Cuzco">Cuzco</option>
                                        <option value="Huncavelica">Huncavelica</option>
                                        <option value="Huanuco">Huanuco</option>
                                        <option value="Huaraz">Huaraz</option>
                                        <option value="Ica">Ica</option>
                                        <option value="Tacna">Tacna</option>
                                        <option value="Trujillo">Trujillo</option>
                                    </select>
                            <tr><td class="celda">Fecha de Ingreso: <td colspan="2"><input title="pago" type="date" class ="pass" name ="fecha" placeholder="Ingreso" required>
                            <tr><td class="celda">Pago a chofer: <td colspan="2"><input title="pago" type="text" class ="pass" name ="pago" placeholder="Pago a chofer" required>
                            <tr><td colspan="2" class="boton"><input type="submit" value="Enviar">
                                <input type="reset" value="Restablecer">
                        </table>
                    </fieldset>
                </form>
            </div>
        </center>
    </body>
</html>
