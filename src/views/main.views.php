<!-- NAVBAR -->

<div class="container-fluid">
			<div class="row">
				<!-- SIDEBAR -->
				<div class="col-sm-2 d-sm-block d-none bg-light sidebar">
					
					<ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
			           
			          <li class="nav-item">
			            <a class="nav-link" href="#">Link</a>
			          </li>
			          <li class="nav-item dropdown">
			            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
			              Dropdown
			            </a>
			            <ul class="dropdown-menu dropdown-menu-dark">
			              <li><a class="dropdown-item" href="#">Action</a></li>
			              <li><a class="dropdown-item" href="#">Another action</a></li>
			              <li>
			                <hr class="dropdown-divider">
			              </li>
			              <li><a class="dropdown-item" href="#">Something else here</a></li>
			            </ul>
			          </li>
			        </ul>	

				</div>
				<!-- SIDEBAR -->

				<div class="col-md-10 col-lg-10 col-sm-12">

					<section> 
						<div class="row bg-light m-2">
							<div class="col">
								<label>
									Productos
								</label>
							</div>
							<div class="col">
								<button data-bs-toggle="modal" data-bs-target="#addProductModal" class=" float-end btn btn-primary">
									Añadir producto
								</button>
							</div>
						</div> 
					</section>
					
					<section>
						
						<div class="row">
							<div class="col-md-4 col-sm-12"> 
								<div class="card mb-2">
								  <img src="../public/img/logo.png" class="card-img-top" alt="...">
								  <div class="card-body">
								    <h5 class="card-title">Card title</h5>
								    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
								    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

								    <div class="row">
									    <a data-bs-toggle="modal" data-bs-target="#addProductModal" href="#" class="btn btn-warning mb-1 col-6">
									    	Editar
									    </a>
									    <a onclick="eliminar(this)" href="#" class="btn btn-danger mb-1 col-6">
									    	Eliminar
									    </a>
									    <a href="#" class="btn btn-info col-12">
									    	Detalles
									    </a>
								    </div>

								  </div>
								</div>  

							</div>
						</div>
					</section> 
				</div>
			</div>
		</div>
		<!-- Modal -->
		<div class="modal fade" id="addProductModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
		        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		      </div>

		      <form>

			      <div class="modal-body">
			        
			        <div class="input-group mb-3">
					  <span class="input-group-text" id="basic-addon1">@</span>
					  <input required type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
					</div>
					
			      </div>

			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
			        	Close
			        </button>
			        <button type="submit" class="btn btn-primary">
			        	Save changes
			        </button>
			      </div>

		      </form>

		    </div>
		  </div>
		</div>
		
		<?php include_once "js.views.php"?>
</div>