<?php include "Views/Templates/header.php"; ?>
<div class="app-title">
            <div>
                        <h1><i class="fa fa-id-card"></i>Registro Personal</h1>
            </div>
</div>
<button class="btn btn-primary mb-2" type="button" onclick="frmEstudiante()"><i class="fa fa-plus"></i></button>
<div class="row">
            <div class="col-lg-12">
                        <div class="tile">
                                    <div class="tile-body">
                                                <div class="table-responsive">
                                                            <table class="table table-light mt-4" id="tblEst">
                                                                        <thead class="thead-dark">
                                                                                    <tr>
                                                                                                <th>Id</th>
                                                                                                <th>Cargo</th>
                                                                                                <th>CC</th>
                                                                                                <th>Nombre</th>
                                                                                                <th>Area</th>
                                                                                                <th>Recidencia</th>
                                                                                                <th>Teléfono</th>
                                                                                                <th>Estado</th>
                                                                                                <th>Editar</th>
                                                                                    </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                        </tbody>
                                                            </table>
                                                </div>
                                    </div>
                        </div>
            </div>
</div>
<div id="nuevoEstudiante" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                        <div class="modal-content">
                                    <div class="modal-header bg-primary text-white">
                                                <h5 class="modal-title text-white" id="title">Registro Personal</h5>
                                                <button class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                </button>
                                    </div>
                                    <div class="modal-body">
                                                <form id="frmEstudiante">
                                                            <div class="row">
                                                                        <div class="col-md-6">
                                                                                    <div class="form-group">
                                                                                                <label
                                                                                                            for="codigo">Cargo</label>
                                                                                                <input type="hidden"
                                                                                                            id="id"
                                                                                                            name="id">
                                                                                                <input id="codigo"
                                                                                                            class="form-control"
                                                                                                            type="text"
                                                                                                            name="codigo"
                                                                                                            required
                                                                                                            placeholder="Cargo en la alcaldia">
                                                                                    </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                                    <div class="form-group">
                                                                                                <label
                                                                                                            for="dni">CC</label>
                                                                                                <input id="dni"
                                                                                                            class="form-control"
                                                                                                            type="text"
                                                                                                            name="dni"
                                                                                                            required
                                                                                                            placeholder="CC">
                                                                                    </div>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                                    <div class="form-group">
                                                                                                <label
                                                                                                            for="nombre">Nombre</label>
                                                                                                <input id="nombre"
                                                                                                            class="form-control"
                                                                                                            type="text"
                                                                                                            name="nombre"
                                                                                                            required
                                                                                                            placeholder="Nombre completo">
                                                                                    </div>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                                    <div class="form-group">
                                                                                                <label
                                                                                                            for="carrera">Area</label>
                                                                                                <input id="carrera"
                                                                                                            class="form-control"
                                                                                                            type="text"
                                                                                                            name="carrera"
                                                                                                            required
                                                                                                            placeholder="Area">
                                                                                    </div>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                                    <div class="form-group">
                                                                                                <label
                                                                                                            for="telefono">Télefono</label>
                                                                                                <input id="telefono"
                                                                                                            class="form-control"
                                                                                                            type="text"
                                                                                                            name="telefono"
                                                                                                            required
                                                                                                            placeholder="Teléfono">
                                                                                    </div>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                                    <div class="form-group">
                                                                                                <label
                                                                                                            for="direccion">Recidencia</label>
                                                                                                <input id="direccion"
                                                                                                            class="form-control"
                                                                                                            type="text"
                                                                                                            name="direccion"
                                                                                                            required
                                                                                                            placeholder="Lugar">
                                                                                    </div>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                                    <div class="form-group">
                                                                                                <button class="btn btn-primary"
                                                                                                            type="submit"
                                                                                                            onclick="registrarEstudiante(event)"
                                                                                                            id="btnAccion">Registrar</button>
                                                                                                <button class="btn btn-danger"
                                                                                                            type="button"
                                                                                                            data-dismiss="modal">Atras</button>
                                                                                    </div>
                                                                        </div>
                                                            </div>
                                                </form>
                                    </div>
                        </div>
            </div>
</div>
<?php include "Views/Templates/footer.php"; ?>