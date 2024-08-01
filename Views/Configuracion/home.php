<?php include "Views/Templates/header.php"; ?>
<div class="app-title">
            <div>
                        <h1><i class="fa fa-id-card"></i> Panel de Administración</h1>
            </div>
</div>
<div class="row">
            <div class="col-md-6 col-lg-3">
                        <div class="widget-small primary coloured-icon"><i class="icon fa fa-user-circle   fa-3x"></i>
                                    <a class="info" href="<?php echo base_url; ?>Usuarios">
                                                <h4>Administración</h4>
                                                <p><b><?php echo $data['usuarios']['total'] ?></b></p>
                                    </a>
                        </div>
            </div>
            <div class="col-md-6 col-lg-3">
                        <div class="widget-small info coloured-icon"><i class="icon fa fa-plug fa-3x"></i>
                                    <a class="info" href="<?php echo base_url; ?>Libros">
                                                <h4>Materiales</h4>
                                                <p><b><?php echo $data['libros']['total'] ?></b></p>
                                    </a>
                        </div>
            </div>
            <div class="col-md-6 col-lg-3">
                        <div class="widget-small warning coloured-icon"><i class="icon fa fa-address-book-o fa-3x"></i>
                                    <a class="info" href="<?php echo base_url; ?>Autor">
                                                <h4>Dueño</h4>
                                                <p><b><?php echo $data['autor']['total'] ?></b></p>
                                    </a>
                        </div>
            </div>
            <div class="col-md-6 col-lg-3">
                        <div class="widget-small danger coloured-icon"><i class="icon fa fa-tags fa-3x"></i>
                                    <a class="info" href="<?php echo base_url; ?>Editorial">
                                                <h4>Marca</h4>
                                                <p><b><?php echo $data['editorial']['total'] ?></b></p>
                                    </a>
                        </div>
            </div>
            <div class="col-md-6 col-lg-3">
                        <div class="widget-small warning coloured-icon"><i class="icon fa fa-user fa-3x"></i>

                                    <a class="info" href="<?php echo base_url; ?>Estudiantes">
                                                <h4>Personal</h4>
                                                <p><b><?php echo $data['estudiantes']['total'] ?></b></p>
                                    </a>
                        </div>
            </div>
            <div class="col-md-6 col-lg-3">
                        <div class="widget-small danger coloured-icon"><i class="icon fa fa-hourglass-start fa-3x"></i>
                                    <a class="info" href="<?php echo base_url; ?>Prestamos">
                                                <h4>Prestamos</h4>
                                                <p><b><?php echo $data['prestamos']['total'] ?></b></p>
                                    </a>
                        </div>
            </div>
            <div class="col-md-6 col-lg-3">
                        <div class="widget-small info coloured-icon"><i class="icon fa fa-list-alt fa-3x"></i>
                                    <a class="info" href="<?php echo base_url; ?>Materia">
                                                <h4>Area</h4>
                                                <p><b><?php echo $data['materias']['total'] ?></b></p>
                                    </a>
                        </div>
            </div>
            <div class="col-md-6 col-lg-3">
                        <div class="widget-small primary coloured-icon"><i class="icon fa fa-cogs fa-3x"></i>
                                    <a class="info" href="<?php echo base_url; ?>Configuracion">
                                                <h6>Configuracion</h6>
                                    </a>
                        </div>
            </div>
</div>

<?php include "Views/Templates/footer.php"; ?>