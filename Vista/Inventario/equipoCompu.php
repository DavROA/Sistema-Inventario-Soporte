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
			    <h1 class="app-page-title">Equipo de Cómputo</h1>
                    <hr class="my-4">

                    <!-- Modal -->
                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Agregar Equipo de cómputo</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="col-12 col-md-12">
                                        <form class="settings-form">
                                            <div class="mb-3">
                                                <label for="setting-input-1" class="form-label">Folio del equipo<span class="ms-2"
                                                    data-container="body" data-bs-toggle="popover" data-trigger="hover" data-placement="top"
                                                    data-content="This is a Bootstrap popover example. You can use popover to provide extra info.">
                                                </label>
                                                <input type="text" class="form-control" id="setting-input-1" value="Lorem Ipsum Ltd." required>
                                            </div>

                                            <div class="row justify-content-between">
                                                <div class="col-6 mb-3">
                                                    <label for="setting-input-2" class="form-label">Ram</label>
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected>Seleccionar RAM</option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>    
                                                </div>  
                                                <div class="col-6 mb-3">
                                                    <label for="setting-input-2" class="form-label">CPU</label>
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected>Seleccionar CPU</option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>    
                                                </div>  
                                            </div>
                                            <div class="row justify-content-between">
                                                <div class="col-6 mb-3">
                                                    <label for="setting-input-2" class="form-label">Procesador</label>
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected>Seleccionar Procesador</option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>    
                                                </div>  
                                                <div class="col-6 mb-3">
                                                    <label for="setting-input-2" class="form-label">Almacenamiento</label>
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected>Seleccionar memoria</option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>    
                                                </div> 
                                            </div>
                                            <div class="row justify-content-between">
                                                <div class="col-6 mb-3">
                                                    <label for="setting-input-2" class="form-label">Teclado</label>
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected>Seleccionar teclado</option>
                                                            <option value="1">One</option>
                                                            <option value="2">Two</option>
                                                            <option value="3">Three</option>
                                                    </select>    
                                                </div>  
                                                <div class="col-6 mb-3">
                                                    <label for="setting-input-2" class="form-label">Mouse</label>
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected>Seleccionar mause</option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>    
                                                </div> 
                                            </div>
                                            <div class="row justify-content-between">
                                                <div class="col-6 mb-3">
                                                    <label for="setting-input-1" class="form-label">IP<span class="ms-2" data-container="body" data-bs-toggle="popover" data-trigger="hover" data-placement="top" data-content="This is a Bootstrap popover example. You can use popover to provide extra info.">
                                                    </span></label>
                                                    <input type="text" class="form-control" id="setting-input-1" value="Lorem Ipsum Ltd." required>
                                                </div>
                                                
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <div class="row justify-content-between">
                                        <div class="col-auto col-6">
                                            <a class="btn app-btn-primary" onClick="registro()" data-bs-dismiss="modal" href="#">Guardar</a>
                                        </div>
                                        <div class="col-auto col-6">
                                            <a class="btn app-btn-secondary" href="#" data-bs-dismiss="modal">Cancelar</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        
                    <div class="row g-3 mb-4 align-items-center justify-content-between">
                        <div class="col-auto">
                            <h1 class="app-page-title mb-0"></h1>
                        </div>
                        <div class="col-auto">
                            <div class="page-utilities">
                                <div class="row g-2 justify-content-start justify-content-md-end align-items-center">
                                    <div class="col-auto">
                                        <form class="table-search-form row gx-1 align-items-center">
                                            <div class="col-auto">
                                                <input type="text" id="search-orders" name="searchorders" class="form-control search-orders"
                                                    placeholder="Search">
                                            </div>
                                            <div class="col-auto">
                                                <button type="submit" class="btn app-btn-secondary">Buscar</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-auto">
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn app-btn-secondary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                        Agregar Equipo de cómputo
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tabla-->
                    <nav id="orders-table-tab" class="orders-table-tab app-nav-tabs nav shadow-sm flex-column flex-sm-row mb-4">
                        <a class="flex-sm-fill text-sm-center nav-link active" id="orders-all-tab" data-bs-toggle="tab" href="#orders-all"
                            role="tab" aria-controls="orders-all" aria-selected="true">Todos los equipos</a>
                        <a class="flex-sm-fill text-sm-center nav-link" id="orders-paid-tab" data-bs-toggle="tab" href="#orders-paid"
                            role="tab" aria-controls="orders-paid" aria-selected="false">Centros de cómputo</a>
                        <a class="flex-sm-fill text-sm-center nav-link" id="orders-pending-tab" data-bs-toggle="tab" href="#orders-pending"
                            role="tab" aria-controls="orders-pending" aria-selected="false">Departamentos</a>
                        <a class="flex-sm-fill text-sm-center nav-link" id="orders-cancelled-tab" data-bs-toggle="tab"
                            href="#orders-cancelled" role="tab" aria-controls="orders-cancelled" aria-selected="false">Otros</a>
                    </nav>


                    <div class="tab-content" id="orders-table-tab-content">
                        <div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
                            <div class="app-card app-card-orders-table shadow-sm mb-5">
                                <div class="app-card-body">
                                    <div class="table-responsive">
                                        <table class="table app-table-hover mb-0 text-left">
                                            <thead>
                                                <tr>
                                                    <th class="cell">Order</th>
                                                    <th class="cell">Product</th>
                                                    <th class="cell">Customer</th>
                                                    <th class="cell">Date</th>
                                                    <th class="cell">Status</th>
                                                    <th class="cell">Total</th>
                                                    <th class="cell">Opciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="cell">#15346</td>
                                                    <td class="cell"><span class="truncate">Lorem ipsum dolor sit amet eget volutpat
                                                            erat</span></td>
                                                    <td class="cell">John Sanders</td>
                                                    <td class="cell"><span>17 Oct</span><span class="note">2:16 PM</span></td>
                                                    <td class="cell"><span class="badge bg-success">Paid</span></td>
                                                    <td class="cell">$259.35</td>
                                                    <td class="cell">
                                                        <div class="row justify-content-between">
                                                            <div class="col-6 mb-3">
                                                                <a class="btn-sm app-btn-secondary" href="#">Editar</a>
                                                            </div>
                                                            <div class="col-6 mb-3">
                                                                <a class="btn-sm app-btn-secondary" href="#">Eliminar</a>
                                                            </div>  
                                                        </div>
                                                    </td>
                                                        
                                                </tr>
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <nav class="app-pagination">
                                <ul class="pagination justify-content-center">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                                    </li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">Next</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>

                        <div class="tab-pane fade" id="orders-paid" role="tabpanel" aria-labelledby="orders-paid-tab">
                            <div class="app-card app-card-orders-table mb-5">
                                <div class="app-card-body">
                                    <div class="table-responsive">

                                        <table class="table mb-0 text-left">
                                            <thead>
                                                <tr>
                                                    <th class="cell">Order</th>
                                                    <th class="cell">Product</th>
                                                    <th class="cell">Customer</th>
                                                    <th class="cell">Date</th>
                                                    <th class="cell">Status</th>
                                                    <th class="cell">Total</th>
                                                    <th class="cell"></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="cell">#15346</td>
                                                    <td class="cell"><span class="truncate">Lorem ipsum dolor sit amet eget volutpat
                                                            erat</span></td>
                                                    <td class="cell">John Sanders</td>
                                                    <td class="cell"><span>17 Oct</span><span class="note">2:16 PM</span></td>
                                                    <td class="cell"><span class="badge bg-success">Paid</span></td>
                                                    <td class="cell">$259.35</td>
                                                    <td class="cell"><a class="btn-sm app-btn-secondary" href="#">View</a></td>
                                                </tr>

                                                <tr>
                                                    <td class="cell">#15344</td>
                                                    <td class="cell"><span class="truncate">Pellentesque diam imperdiet</span></td>
                                                    <td class="cell">Teresa Holland</td>
                                                    <td class="cell"><span class="cell-data">16 Oct</span><span class="note">01:16 AM</span>
                                                    </td>
                                                    <td class="cell"><span class="badge bg-success">Paid</span></td>
                                                    <td class="cell">$123.00</td>
                                                    <td class="cell"><a class="btn-sm app-btn-secondary" href="#">View</a></td>
                                                </tr>

                                                <tr>
                                                    <td class="cell">#15343</td>
                                                    <td class="cell"><span class="truncate">Vestibulum a accumsan lectus sed mollis
                                                            ipsum</span></td>
                                                    <td class="cell">Jayden Massey</td>
                                                    <td class="cell"><span class="cell-data">15 Oct</span><span class="note">8:07 PM</span>
                                                    </td>
                                                    <td class="cell"><span class="badge bg-success">Paid</span></td>
                                                    <td class="cell">$199.00</td>
                                                    <td class="cell"><a class="btn-sm app-btn-secondary" href="#">View</a></td>
                                                </tr>


                                                <tr>
                                                    <td class="cell">#15341</td>
                                                    <td class="cell"><span class="truncate">Morbi vulputate lacinia neque et
                                                            sollicitudin</span></td>
                                                    <td class="cell">Raymond Atkins</td>
                                                    <td class="cell"><span class="cell-data">11 Oct</span><span class="note">11:18 AM</span>
                                                    </td>
                                                    <td class="cell"><span class="badge bg-success">Paid</span></td>
                                                    <td class="cell">$678.26</td>
                                                    <td class="cell"><a class="btn-sm app-btn-secondary" href="#">View</a></td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="orders-pending" role="tabpanel" aria-labelledby="orders-pending-tab">
                            <div class="app-card app-card-orders-table mb-5">
                                <div class="app-card-body">
                                    <div class="table-responsive">
                                        <table class="table mb-0 text-left">
                                            <thead>
                                                <tr>
                                                    <th class="cell">Order</th>
                                                    <th class="cell">Product</th>
                                                    <th class="cell">Customer</th>
                                                    <th class="cell">Date</th>
                                                    <th class="cell">Status</th>
                                                    <th class="cell">Total</th>
                                                    <th class="cell"></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="cell">#15345</td>
                                                    <td class="cell"><span class="truncate">Consectetur adipiscing elit</span></td>
                                                    <td class="cell">Dylan Ambrose</td>
                                                    <td class="cell"><span class="cell-data">16 Oct</span><span class="note">03:16 AM</span>
                                                    </td>
                                                    <td class="cell"><span class="badge bg-warning">Pending</span></td>
                                                    <td class="cell">$96.20</td>
                                                    <td class="cell"><a class="btn-sm app-btn-secondary" href="#">View</a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="orders-cancelled" role="tabpanel" aria-labelledby="orders-cancelled-tab">
                            <div class="app-card app-card-orders-table mb-5">
                                <div class="app-card-body">
                                    <div class="table-responsive">
                                        <table class="table mb-0 text-left">
                                            <thead>
                                                <tr>
                                                    <th class="cell">Order</th>
                                                    <th class="cell">Product</th>
                                                    <th class="cell">Customer</th>
                                                    <th class="cell">Date</th>
                                                    <th class="cell">Status</th>
                                                    <th class="cell">Total</th>
                                                    <th class="cell"></th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <tr>
                                                    <td class="cell">#15342</td>
                                                    <td class="cell"><span class="truncate">Justo feugiat neque</span></td>
                                                    <td class="cell">Reina Brooks</td>
                                                    <td class="cell"><span class="cell-data">12 Oct</span><span class="note">04:23 PM</span>
                                                    </td>
                                                    <td class="cell"><span class="badge bg-danger">Cancelled</span></td>
                                                    <td class="cell">$59.00</td>
                                                    <td class="cell"><a class="btn-sm app-btn-secondary" href="#">View</a></td>
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

    <!-- Javascript -->
 
    <script src="../../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="../../assets/plugins/chart.js/chart.min.js"></script>
    <script src="../../assets/js/app.js"></script>	
    
    <!-- sweet Alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../../js/sweetAlert.js"></script>

</body>

</html>