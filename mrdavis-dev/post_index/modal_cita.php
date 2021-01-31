<div class="modal fade bg-dark text-dark" id="Mymodal-2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Agendar mi cita</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>

        <form action="post_index/insert.php" method="POST">
            <div class="modal-body ">
                <div class="container text-left">
                    <label for="fecha">Fecha para la consulta</label>
                    <input type="date" class="mb-1 form-control border border-primary" placeholder="" name="fecha">

                    <label for="hora">Email</label>
                    <input type="text" class="mb-1 form-control border border-primary" placeholder="" name="email">

                    <label for="nombre">Nombre y Apellido</label>
                    <input type="text" class="mb-1 form-control border border-primary" placeholder="" name="nombre">

                    <label for="asunto">Asunto de la consulta</label>
                    <!-- <input type="textarea" > -->
                    <textarea class="mb-1 form-control border border-primary" placeholder="" name="asunto" cols="15" rows="5"></textarea>

                    <label for="">Tipo de consulta</label>
                    <!-- <select name="tipo" required class="form-control" id="">
                        <option value="">Seleccione el tipo de consulta...</option>
                        <option value="Programación web/mobile">Programación web/mobile</option>
                        <option value="Docker">Docker</option>
                        <option value="Android">creacion de proyectos</option>
                        <option value="cloud">cloud</option>
                        <option value="server">Servers</option>
                    </select> -->
                    <select required class="form-control">
                        <option value="0">Seleccione:</option>
                        <?php
                        $query = $link->query("SELECT * FROM categorias");
                        while ($valores = mysqli_fetch_array($query)) {
                            echo '<option value="' . $valores['catego1'] . '">' . $valores['catego1'] . '</option>';
                            echo '<option value="' . $valores['catego2'] . '">' . $valores['catego2'] . '</option>';
                            echo '<option value="' . $valores['catego3'] . '">' . $valores['catego3'] . '</option>';
                            echo '<option value="' . $valores['catego4'] . '">' . $valores['catego4'] . '</option>';
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="reset" class="btn btn-danger">Borrar</button>
                <input type="submit" class="btn btn-primary" name="" value="Guardar">
            </div>
        </form>
    </div>
</div>
</div>