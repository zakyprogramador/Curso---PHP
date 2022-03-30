<form action="php/agregar-contacto.php" id="alta-contacto" name="alta_frm" method="post" enctype="multipart/form-data">
    <fieldset>
        <legend>Alta de Contacto</legend>
        <div>
            <label for="email">Email: </label>
            <input type="email" id="email" class="cambio" name="email_txt" placeholder="Escribe tu email" title="Tu email" required>
        </div>

        <div>
            <label for="nombre">Nombre: </label>
            <input type="text" id="nombre" class="cambio" name="nombre_txt" placeholder="Escribe tu nombre" title="Tu nombre" required>
        </div>

        <div>
            <label for="m">Sexo: </label>
            <input type="radio" id="m" name="sexo_rdo" placeholder="Tu sexo" value="M" required>&nbsp;<label for="m">Masculino</label>

            &nbsp;&nbsp;&nbsp;

            <input type="radio" id="f" name="sexo_rdo" placeholder="Tu sexo" value="F" required>&nbsp;<label for="f">Femenino</label>
        </div>

        <div>
            <label for="nacimiento">Fecha de Nacimiento: </label>
            <input type="date" name="nacimiento_txt" id="nacimiento" class="cambio" title="Tu cumple" required>
        </div>

        <div>
            <label for="telefono"  >Telefono: </label>
            <input type="number" id="telefono" class="cambio" name="telefono_txt" placeholder="Escribe tu telefono" title="Tu telefono" required >
        </div>

        <div>
            <label for="pais">Pais: </label>
            <select name="pais_slc" id="pais" class="cambio" required>
                <option value="">- - -</option>
                <?php include("select-pais.php"); ?>
            </select>
        </div>

        <div>
            <label for="foto">Foto: </label>
            <div class="adjuntar-archivo cambio">
                <input type="file" id="foto" name="foto_fls" title="Sube tu foto">
            </div>
        </div>

        <div>
            <input type="submit" id="enviar-alta" class="cambio" name="enviar_btn" value="agregar">
        </div>

        <?php include("php/mensajes.php"); ?>
    </fieldset>
</form>