<?php
include('master_page/master_cabezera.html');
?>
<head>
<link rel="stylesheet" href="../assets/data_table/css/estilo_animal.css">

</head>

<section class="catsandstars">
    <br><br>
    <div class="container">
    <div class="row">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <i class="icofont-plus-circle"></i>
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Registrar novedad del animal</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div>
                    Título
                </div>
                <input type="text" class="form-control" placeholder="Título" aria-label="Título" aria-describedby="basic-addon1">
                <div>
                    Descripción
                </div>
                <textarea class="form-control" id="descripción_animal" placeholder="Descripción" rows="3"></textarea>
                <div>
                    Fecha
                </div>
                <input type="text" class="form-control" placeholder="Fecha" aria-label="Fecha" aria-describedby="basic-addon1">

                <div>
                    Personal
                </div>
                <select class="form-select" aria-label="Default select example">
                    <option selected>Escoger personal</option>
                    <option value="1">Juan Diego Solorio Esquivel</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>

            </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary"><i class="icofont-diskette"></i></button>
            </div>
            </div>
        </div>
        </div>
        <div class="row">
            
            <div class="col-sm-5 col-lg-3">
                <img src="../assets/images/team1.jpg" class="img-thumbnail" alt="...">
            </div>
            <div class="col-6-md ">
                <h2 class="text-center">
                    Información General
                </h2>
                <h3>
                    <strong>Nacimiento:</strong> 05/06/21    <strong>Precio: </strong> $6,790 pesos
                </h3>
                <h3>
                <strong>Típo:</strong> Porcino    <strong>Áltura: </strong> 1.70 cm
                </h3>
                <h3>
                    <strong>Sexo:</strong> Macho    <strong>Fecha de Registro: </strong> 05/06/21
                </h3>
                <h3>
                    <strong>Raza:</strong> Criollo
                </h3> 
                
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-12">
                <table id="example" class="table rwd-table" style="width:100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Título</th>
                        <th>Descripción novedad</th>
                        <th>Fecha suseso</th>
                        <th>Encargado</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>61</td>
                        <td>2011/04/25</td>
                        <td>$320,800</td>
                    </tr>
                   
                </tbody>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Título</th>
                        <th>Descripción novedad</th>
                        <th>Fecha suseso</th>
                        <th>Encargado</th>
                        <th>Eliminar</th>
                    </tr>
                </tfoot>
            </table>
            </div>
        </div>
    </div>
    
        
    </div>
</section>


<?php
include('master_page/master_pie_page.html');
?>