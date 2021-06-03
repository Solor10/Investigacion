<?php
include('master_page/master_cabezera.html');
?>
<!-- Aqui empieza el contenido -->


<section class="team1 cid-supqAF2TRA mbr-parallax-background" id="team1-m">
    

    <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(0, 0, 0);">
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <h3 class="mbr-section-title mbr-fonts-style align-center mb-4 display-2"><strong>Bovinos Registrados</strong> </i> </h3>
                
            </div>
            <div class="col-sm-3 col-lg-2">
                <div class="card-wrap">
                    <div class="image-wrap">
                        <img src="../assets/images/team1.jpg">
                        <input  type="file" id="formFile">
                    </div>
                    
                </div>
            </div>

        </div>
    </div>
    

    <div class="container">
        <div class="row">
            
                <div class="col-mb-1">
                    <label for="staticEmail2" class="visually-hidden" style="color:cornsilk;">Especie <i class="icofont-star-alt-2" style="color:brown;"></i></i></label>
                    <br>
                    <select class="form-select">
                        <option selected>Seleccione la especie</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="col-mb-1">
                    <label  class="visually-hidden" style="color:cornsilk;">Nacimiento: <i class="icofont-star-alt-2" style="color:brown;"></i></i></label>
                    <input type="date" class="form-control" id="inputPassword2" >
                </div>
                <div class="col-mb-1">
                    <label  class="visually-hidden" style="color:cornsilk;">Altura: <i class="icofont-star-alt-2" style="color:brown;"></i></i></label>
                    <input type="text" class="form-control" id="inputPassword2">
                </div>
                <div class="col-mb-1">
                    <label  class="visually-hidden" style="color:cornsilk;">Razas: <i class="icofont-star-alt-2" style="color:brown;"></i></i></label>
                    <input type="text" class="form-control" id="inputPassword2">
                </div>
                <div class="col-mb-1">
                    <label  class="visually-hidden" style="color:cornsilk;">Sexo: <i class="icofont-star-alt-2" style="color:brown;"></i></i></label>
                    <br>
                    <select class="form-select">
                        <option selected>Seleccione el sexo</option>
                        <option value="1">Macho</option>
                        <option value="2">Hembra</option>
                        
                    </select>
                </div>
                <div class="col-mb-1">
                    <label  class="visually-hidden" style="color:cornsilk;">Peso: <i class="icofont-star-alt-2" style="color:brown;"></i></i></label>
                    <input type="number" class="form-control" id="inputPassword2">
                </div>
                <div class="col-mb-1">
                    <label  class="visually-hidden" style="color:cornsilk;">Precio: <i class="icofont-star-alt-2" style="color:brown;"></i></i></label>
                    <input type="number" class="form-control" id="inputPassword2">
                </div>
                <div class="col-mb-1">
                    <label  class="visually-hidden" style="color:cornsilk;">Descripción: <i class="icofont-star-alt-2" style="color:brown;"></i></i></label>
                    <input type="description" class="form-control" id="inputPassword2">
                </div>
                
                
        </div>
    </div>

</section>
<!-- Aquí termina el contenido -->
<?php
include('master_page/master_pie_page.html');
?>