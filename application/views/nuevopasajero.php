<html>
    <head>
        <title>Pasajeros</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="<?=base_url();?>plantilla/css/nuevo.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <center>
            <table class="pasaje">
                <tr><th>TURISMO INTER - PERÚ
                <tr><td>Registro de Pasajeros
            </table>


            <div class="registro">
                <form action ="<?=base_url();?>Inicio/adicionpasajero" method= "POST">
                    <fieldset>
                        <legend>Ingreso de Pasajeros</legend>
                        <table>
                            <tr><td class="celda">Nombre de Pasajero: <td colspan="2"><input title="nombre de usuario" type="text" class ="pass" name ="nombre" placeholder="Nombre" required>
                            <tr><td class="celda">Asiento:<td colspan="2">
                                    <select name="asiento">
                                        <option value="">Seleccionar asiento</option>
                                        <option value="1">Asiento 1</option>
                                        <option value="2">Asiento 3</option>
                                        <option value="3">Asiento 5</option>
                                        <option value="4">Asiento 8</option>
                                        <option value="5">Asiento 9</option>
                                        <option value="6">Asiento 10</option>
                                        <option value="7">Asiento 11</option>
                                        <option value="8">Asiento 12</option>
                                        <option value="9">Asiento 13</option>
                                        <option value="10">Asiento 14</option>
                                        <option value="11">Asiento 15</option>
                                        <option value="12">Asiento 16</option>
                                        <option value="13">Asiento 17</option>
                                        <option value="14">Asiento 18</option>
                                        <option value="15">Asiento 19</option>
                                        <option value="16">Asiento 20</option>
                                    </select>
                            <tr><td class="celda">Tipo de Pasajero:
                                <td class="radio" colspan="2"><input type="radio" name="op" value="N">Niño
                                    <input type="radio" name="op" value="E">Estudiante
                                    <input type="radio" name="op" value="A">Adulto
                            <tr><td class="celda">Pago de Pasaje: <td colspan="2"><input title="pago" type="text" class ="pass" name ="pago" placeholder="Pago de Viaje" required>
                            <tr><td colspan="2" class="boton"><input type="submit" value="Enviar">
                                <input type="reset" value="Restablecer">
                        </table>
                    </fieldset>
                </form>
            </div>
        </center>
    </body>
</html>
