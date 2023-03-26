    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title></title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="">

        <link id="theme-style" rel="stylesheet" href="../../assets/css/sistemaIS.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
        
        <script defer src="../../assets/plugins/fontawesome/js/all.min.js"></script>
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

        <link rel="stylesheet" href="../../assets/css/prestamo.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    </head>

    <body class="app">
        <header class="app-header fixed-top">
            <?php require("navbarInventario.php");?><!-- Navbar -->
            <div id="app-sidepanel" class="app-sidepanel">
                <div id="sidepanel-drop" class="sidepanel-drop"></div>
                <?php require("menuInventario.php");?> <!-- Menu lateral -->
            </div>
        </header>

        <!--Contenido-->
        <div class="app-wrapper">
            <div class="app-content pt-3 p-md-3 p-lg-4">
                <div class="container-xl" id="">
                <h1 class="app-page-title">Prestamos</h1>
                    <br>
                    <!-- MultiStep Form -->
                    <div class="">
                        <div class="">
                            <div class="">
                                <div class="card px-0 pt-4 pb-0 mt-3 mb-3">

                                    <div class="row">
                                        <div class="col-md-12 mx-0">
                                            <form id="msform">
                                                <!-- progressbar -->
                                                <ul id="progressbar">
                                                    <li class="active" id="account"><strong>Movimiento</strong></li>
                                                    <li id="personal"><strong>Solicitante</strong></li>
                                                    <li id="equipo"><strong>Equipo</strong></li>
                                                    <li id="payment"><strong>Datos</strong></li>
                                                    <li id="confirm"><strong>Confirmar</strong></li>
                                                    <li id="finish"><strong>Finish</strong></li>
                                                </ul><br>
                                                <!-- fieldsets -->
                                                <fieldset> <!-- pantalla 1-->
                                                
                                                    <div class="row justify-content-between">
                                                        <div class="col-2 mb-3">
                                                                
                                                        </div>
                                                        <div class="col-8 mb-3">
                                                            <label for="setting-input-2" class="form-label">Tipo de movimiento</label>
                                                                <select class="form-select" aria-label="Default select example">
                                                                    <option selected>Temporal</option>
                                                                    <option value="1">Permanente</option>
                                                                </select>    
                                                        </div> 
                                                        <div class="col-2 mb-3">
                                                                    
                                                        </div>  
                                                    </div>
                                                    <input type="button" name="next" class="next action-button btn" value="Siguiente"/>

                                                </fieldset>

                                                <fieldset> <!-- pantalla 2-->
                                                    <div class="row justify-content-between">
                                                        <div class="col-1 mb-3">
                                                                
                                                        </div>
                                                        <div class="col-10 mb-3">
                                                            <div class="mb-3">
                                                                <label for="setting-input-1" class="form-label">Solicita<span class="ms-2"
                                                                    data-container="body" data-bs-toggle="popover" data-trigger="hover" data-placement="top"
                                                                    data-content="This is a Bootstrap popover example. You can use popover to provide extra info.">
                                                                </label>
                                                                <input class="form-control form-control-sm" type="text" placeholder="Ingresa el num de trabajador o su nombre." aria-label=".form-control-sm example">
                                                            </div>
                                                            <div class="app-card app-card-settings shadow-sm p-4">
                                                                <div class="app-card-body">
                                                                    <div class="tab-content" id="orders-table-tab-content">
                                                                        <div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
                                                                            <div class="app-card app-card-orders-table shadow-sm mb-5">
                                                                                <div class="app-card-body">
                                                                                    <div class="table-responsive">
                                                                                        <table class="table app-table-hover mb-0 text-left">
                                                                                            <thead>
                                                                                                <tr>
                                                                                                    <th class="cell">N. Trabajador</th>
                                                                                                    <th class="cell">Nombre</th>
                                                                                                    <th class="cell">Apellidos</th>
                                                                                                    <th class="cell">Ubicación</th>                                       
                                                                                                </tr>
                                                                                            </thead>
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td class="cell">#15346</td>
                                                                                                    <td class="cell"><span class="truncate">Jesus</span></td>
                                                                                                    <td class="cell">Santaella</td>
                                                                                                    <td class="cell"><span class="badge bg-success">Edificio L</span></td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td class="cell">#15345</td>
                                                                                                    <td class="cell"><span class="truncate">Marco </span></td>
                                                                                                    <td class="cell">Antonio</td>
                                                                                                    <td class="cell"><span class="badge bg-warning">Edificio J</span></td>                                                
                                                                                                </tr>                                                                                        
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>              
                                                                </div>
                                                            </div>
                                                        </div> 
                                                        <div class="col-1 mb-3">
                                                                    
                                                        </div>  
                                                    </div>
                                                    <input type="button" name="previous" class="previous action-button-previous" value="Regresar"/>
                                                    <input type="button" name="next" class="next action-button" value="Siguiente"/>
                                                </fieldset>

                                                <fieldset> <!-- pantalla 3-->
                                                    <div class="row justify-content-between">
                                                        <div class="col-2 mb-3">
                                                                
                                                        </div>
                                                        <div class="col-8 mb-3">
                                                            <div class="mb-3">
                                                                <label for="setting-input-1" class="form-label">Folio del quipo<span class="ms-2"
                                                                    data-container="body" data-bs-toggle="popover" data-trigger="hover" data-placement="top"
                                                                    data-content="This is a Bootstrap popover example. You can use popover to provide extra info.">
                                                                </label>
                                                                <input class="form-control form-control-sm" type="text" placeholder="Ingresa el num de trabajador o su nombre." aria-label=".form-control-sm example">
                                                            </div>
                                                            <div class="app-card app-card-settings shadow-sm p-4">
                                                                <div class="app-card-body">
                                                                    <div class="tab-content" id="orders-table-tab-content">
                                                                        <div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
                                                                            <div class="app-card app-card-orders-table shadow-sm mb-5">
                                                                                <div class="app-card-body">
                                                                                    <div class="table-responsive">
                                                                                        <table class="table app-table-hover mb-0 text-left">
                                                                                            <thead>
                                                                                                <tr>
                                                                                                    <th class="cell">Folio</th>
                                                                                                    <th class="cell">Descripción</th>
                                                                                                    <th class="cell">Estado</th>                                       
                                                                                                </tr>
                                                                                            </thead>
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td class="cell">#15346</td>
                                                                                                    <td class="cell"><span class="truncate">PC Dell color negra, con logo urse</span></td>
                                                                                                    <td class="cell"><span class="badge bg-success">Disponible</span></td>
                                                                                                </tr>
                                                                                                
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>              
                                                                </div>
                                                            </div>
                                                        </div> 
                                                        <div class="col-2 mb-3">
                                                                    
                                                        </div>  
                                                    </div>
                                                    <input type="button" name="previous" class="previous action-button-previous" value="Regresar"/>
                                                    <input type="button" name="next" class="next action-button" value="Siguiente"/>
                                                </fieldset>

                                                <fieldset> <!-- pantalla 4-->
                                                    <div class="row justify-content-between">
                                                        <div class="col-1 mb-3">
                                                                
                                                        </div>
                                                        <div class="col-10 mb-3"> 
                                                            <div class="row justify-content-between">
                                                                <div class="col-4 mb-3 text-content-between">
                                                                    <label for="setting-input-2" class="form-label">Edificio</label>
                                                                    <select class="form-select" aria-label="Default select example">
                                                                        <option selected>A</option>
                                                                        <option value="1b">B</option>
                                                                        <option value="1b">C</option>
                                                                    </select>    
                                                                </div>  
                                                                        
                                                                <div class="col-4 mb-3">
                                                                    <label for="setting-input-2" class="form-label">Piso</label>
                                                                    <select class="form-select" aria-label="Default select example">
                                                                        <option selected>N/A</option>
                                                                        <option value="1">1</option>
                                                                        <option value="2">2</option>
                                                                        <option value="3">3</option>
                                                                        <option value="4">4</option>
                                                                    </select>
                                                                </div>

                                                                <div class="col-4 mb-3">
                                                                    <label for="setting-input-2" class="form-label">Aula</label>
                                                                    <select class="form-select" aria-label="Default select example">
                                                                        <option selected>N/A</option>
                                                                        <option value="1a">1</option>
                                                                        <option value="2a">2</option>
                                                                        <option value="3a">3</option>
                                                                        <option value="4a">4</option>
                                                                    </select>
                                                                </div>  
                                                            </div>
                                                            
                                                            <div class="row justify-content-between">
                                                                 
                                                                <div class="col-4 mb-3">
                                                                    <label for="setting-input-1" class="form-label">Fecha de devolución<span class="ms-2"
                                                                        data-container="body" data-bs-toggle="popover" data-trigger="hover" data-placement="top"
                                                                        data-content="This is a Bootstrap popover example. You can use popover to provide extra info.">
                                                                    </label>
                                                                    <input type="date" class="form-control" id="setting-input-2" value="" required>
                                                                </div>
 
                                                            </div>
                                                        </div> 
                                                        <div class="col-1 mb-3">
                                                                    
                                                        </div>  
                                                    </div>
                                                    <input type="button" name="previous" class="previous action-button-previous" value="Regresar"/>
                                                    <input type="button" name="next" class="next action-button" value="Siguiente"/>
                                                </fieldset>
                                                
                                                <fieldset> <!-- pantalla 5-->
                                                    <div class="row justify-content-between">
                                                        <div class="col-2 mb-3">
                                                                
                                                        </div>
                                                        <div class="col-8 mb-3">
                                                            <div class="row justify-content-between">
                                                                <div class="col-6 mb-3">
                                                                    <h5 class="section-title">Datos de encargado y solicitante</h5><br>
                                                                    <div class="mb-2"><strong>Nombre de encargado:</strong> Magdiel Smith </strong></div>
                                                                    <div class="mb-2"><strong>Nombre del solicitante:</strong> Jesús Santaella</strong></div>
                                                                    <div class="mb-2"><strong>Nombre del solicitante:</strong> Jairo</strong></div>
                                                                    <div class="mb-2"><strong>Tipo de Movimiento: </strong><span class="badge bg-success"> Prestamo Temporal </span></div>
                                                                </div>
                                                                <div class="col-6 mb-3">
                                                                    <h5 class="section-title">Datos del Movimiento</h5><br>
                                                                    <div class="mb-2"><strong>Artículo:</strong> <span class="badge bg-success">Equipo de cómputo</span></div>
                                                                    <div class="mb-2"><strong>Folio del artículo: </strong>URSE2023119</div>
                                                                    <div class="mb-2"><strong>Ubicación: </strong>Edificio A, Piso 2 </div>	
                                                                    <div class="mb-2"><strong>Fecha Actual: </strong>2023-04-24</div>
                                                                    <div class="mb-2"><strong>Fecha de devolución: </strong>2023-04-24 </div>
                                                                </div>  
                                                            </div>
                                                        </div>
                                                        <div class="col-2 mb-3">
                                                                    
                                                        </div>  
                                                    </div>

                                                    <input type="button" name="previous" class="previous action-button-previous" value="Cancelar"/>
                                                    <input type="button" name="make_payment" class="next action-button" value="Confirmar"/>
                                                </fieldset>
                                            
                                                <fieldset><!-- pantalla 6-->
                                                    <div class="form-card">
                                                        <h2 class="fs-title text-center">Su prestamo se a registrado!</h2>
                                                        <br><br>
                                                        <div class="row justify-content-center">
                                                            <div class="col-3">
                                                                <!--<img src="https://img.icons8.com/color/96/000000/ok--v2.png" class="fit-image">-->
                                                            </div>
                                                        </div>
                                                        <br><br>
                                                        <div class="row justify-content-center">
                                                            <div class="col-7 text-center">
                                                            <button type="button" class="btn app-btn-secondary" href="registrosPrestamo.php"> Regresar</button>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </fieldset>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
  
    <!-- Javascript -->
    <script src="../../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="../../assets/plugins/chart.js/chart.min.js"></script>
    <script src="../../assets/js/app.js"></script>		
    <script src="../../js/prestamo.js"></script>	
</body>
</html>