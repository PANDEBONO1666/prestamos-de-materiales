<?php include "Views/Templates/header.php"; ?>

<div class="app-title">
            <div>
                        <h1><i class="fa fa-id-card"></i>Registro Prestamos</h1>
            </div>
</div>

<button class="btn btn-primary mb-2" onclick="frmPrestar()"><i class="fa fa-plus"></i> Agregar Préstamo</button>

<div class="tile">
            <div class="tile-body">
                        <div class="table-responsive">
                                    <table class="table table-bordered table-hover table-striped mt-4" id="tblPrestar">
                                                <thead class="thead-dark">
                                                            <tr>
                                                                        <th>Id</th>
                                                                        <th>Material</th>
                                                                        <th>Personal</th>
                                                                        <th>Fecha Prestamo</th>
                                                                        <th>Fecha Devolución</th>
                                                                        <th>Cantidad</th>
                                                                        <th>Observación</th>
                                                                        <th>Estado</th>
                                                                        <th>Entrega</th>

                                                                        <!-- Nueva columna para las acciones -->
                                                            </tr>
                                                </thead>
                                                <tbody>
                                                            <!-- Aquí van las filas de préstamos -->
                                                </tbody>
                                    </table>
                        </div>
            </div>
</div>

<div id="prestar" class="modal fade" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
            <div class="modal-dialog" role="document">
                        <div class="modal-content">
                                    <div class="modal-header bg-primary text-white">
                                                <h5 class="modal-title" id="title">Prestar Material</h5>
                                                <button class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                </button>
                                    </div>
                                    <div class="modal-body">
                                                <form id="frmPrestar" onsubmit="registroPrestamos(event)">
                                                            <div class="form-group">
                                                                        <label for="libro">Material</label><br>
                                                                        <select id="libro" class="form-control libro"
                                                                                    name="libro"
                                                                                    onchange="verificarLibro()" required
                                                                                    style="width: 100%;">
                                                                                    <!-- Opciones de materiales -->
                                                                        </select>
                                                            </div>
                                                            <div class="row">
                                                                        <div class="col-md-9">
                                                                                    <div class="form-group">
                                                                                                <label
                                                                                                            for="estudiante">Personal</label><br>
                                                                                                <select name="estudiante"
                                                                                                            id="estudiante"
                                                                                                            class="form-control estudiante"
                                                                                                            required
                                                                                                            style="width: 100%;">
                                                                                                            <!-- Opciones de personal -->
                                                                                                </select>
                                                                                    </div>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                                    <div class="form-group">
                                                                                                <label
                                                                                                            for="cantidad">Cantidad</label>
                                                                                                <input id="cantidad"
                                                                                                            class="form-control"
                                                                                                            min="1"
                                                                                                            type="number"
                                                                                                            name="cantidad"
                                                                                                            required
                                                                                                            onkeyup="verificarLibro()">
                                                                                                <strong
                                                                                                            id="msg_error"></strong>
                                                                                    </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                                    <div class="form-group">
                                                                                                <label
                                                                                                            for="fecha_prestamo">Fecha
                                                                                                            de
                                                                                                            Prestamo</label>
                                                                                                <input id="fecha_prestamo"
                                                                                                            class="form-control"
                                                                                                            type="date"
                                                                                                            name="fecha_prestamo"
                                                                                                            value="<?php echo date("Y-m-d"); ?>"
                                                                                                            required>
                                                                                    </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                                    <div class="form-group">
                                                                                                <label
                                                                                                            for="fecha_devolucion">Fecha
                                                                                                            de
                                                                                                            Devolución</label>
                                                                                                <input id="fecha_devolucion"
                                                                                                            class="form-control"
                                                                                                            type="date"
                                                                                                            name="fecha_devolucion"
                                                                                                            value="<?php echo date("Y-m-d"); ?>"
                                                                                                            required>
                                                                                    </div>
                                                                        </div>
                                                            </div>
                                                            <div class="form-group">
                                                                        <label for="observacion">Observación</label>
                                                                        <textarea id="observacion" class="form-control"
                                                                                    placeholder="Observación"
                                                                                    name="observacion"
                                                                                    rows="3"></textarea>
                                                            </div>
                                                            <button class="btn btn-primary" type="submit"
                                                                        id="btnAccion">Prestar</button>
                                                            <button class="btn btn-danger" type="button"
                                                                        data-dismiss="modal">Cancelar</button>
                                                </form>
                                    </div>
                        </div>
            </div>
</div>

<?php include "Views/Templates/footer.php"; ?>

<script>
// Función para eliminar un préstamo
function btnEliminar(id) {
            if (confirm("¿Está seguro de que desea eliminar este préstamo?")) {
                        fetch('prestamos/eliminar/' + id, {
                                                method: 'GET'
                                    })
                                    .then(response => response.json())
                                    .then(data => {
                                                alert(data.msg);
                                                if (data.icono === 'success') {
                                                            cargarPrestamos
                                                                        (); // Actualizar la tabla si la eliminación fue exitosa
                                                }
                                    })
                                    .catch(error => {
                                                console.error('Error:', error);
                                    });
            }
}

// Función para cargar los préstamos al cargar la página
document.addEventListener("DOMContentLoaded", function() {
            cargarPrestamos();
});

// Función para cargar los préstamos desde el servidor y actualizar la tabla
function cargarPrestamos() {
            fetch('ruta/para/obtener/prestamos')
                        .then(response => response.json())
                        .then(data => {
                                    const tablaBody = document.querySelector('#tblPrestar tbody');
                                    tablaBody.innerHTML = ''; // Limpiamos las filas actuales

                                    // Iteramos sobre los datos recibidos y construimos las nuevas filas
                                    data.forEach(prestamo => {
                                                const fila = `
                    <tr>
                        <td>${prestamo.id}</td>
                        <td>${prestamo.material}</td>
                        <td>${prestamo.personal}</td>
                        <td>${prestamo.fecha_prestamo}</td>
                        <td>${prestamo.fecha_devolucion}</td>
                        <td>${prestamo.cantidad}</td>
                        <td>${prestamo.observacion}</td>
                        <td>${prestamo.estado}</td>
                        <td>${prestamo.entrega}</td>
                        <td>
                            <button class="btn btn-danger" onclick="btnEliminar(${prestamo.id})">
                                <i class="fa fa-trash"></i> Eliminar
                            </button>
                        </td>
                    </tr>
                `;
                                                tablaBody.innerHTML += fila;
                                    });
                        })
                        .catch(error => {
                                    console.error('Error:', error);
                        });
}
</script>