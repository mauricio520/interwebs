

<style>
  table tbody tr:hover {
    box-shadow: 0px 0px 6px 0px #000000;
}
.form-control {
    border-radius: 7px;
    width: 100%;
}
.modal-footer {
    padding: 15px;
    text-align: right;
    border-top: 0px solid #e5e5e5; 
}


/* notification */
#pageMessages {
    position: fixed;
    bottom: 18px;
    right: 15px;
    width: 20%;
    z-index: 4;
}
.alert-success {
  color: #155724;
    background-color: #d4edda;
    border-color: #c3e6cb;
}
.alert-danger, .alert-error {
  color: #721c24;
    background-color: #f8d7da;
    border-color: #f5c6cb;
}
.alert-warning {
  color: #856404;
    background-color: #fff3cd;
    border-color: #ffeeba;
}
.alert-info {
  color: #004085;
    background-color: #cce5ff;
    border-color: #b8daff;
}
.alert {
  position: relative;
}

.alert .close {
  position: absolute;
  top: 5px;
  right: 5px;
  font-size: 1em;
}

.alert .fa {
  margin-right:.4rem;
}
.fa-times-circle:before {
    color: black;
}
b, strong {
    font-weight: 500;
}
/* notification */


.acept{color:green;}
.invalid{color:red;}

</style>


        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title"></div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_content" id="content-id">
                  <div id="content-id">

                  <h1 style="text-align: center;font-family: ui-sans-serif;color: #172d44;"><strong>Cadastrar URL</strong></h1>

                  <form action="demo_form.aspx"style="text-align:center;">

                    <strong>URL: </strong><input type="url" name="url_name" id="url_name" style="width: 46rem;height: 31px;">

                    <button type="button" class="btn btn-primary" style="height: 31px;"onClick ="adicionar()">Cadastrar</button>

                  </form>
                  <br>
                  <br>
                  <hr>
                  <br>
                         <table  id="table" 
                                class="table table-striped"
                                data-pagination="true"
                                data-page-list="[10, 25, 50, 100, all]"
                                data-search="true" 
                                style="font-size: 12px;"
                                data-unique-id="id" 
                                data-detail-view="true"
                                data-detail-formatter="detailFormatter"
                                data-show-columns="true"
                                data-toggle="table"
                                data-height="100%"

                              >
                              
                          <thead>
                            <tr>
                              <th >Detalhes</th>
                              <th data-field="id"       data-sortable="true" >Codigo</th>
                              <th data-field="nome" data-sortable="true" >URL</th>
                              <th data-field="action"    >Ação</th>
                              
                            </tr>
                          
                          </thead>

                        </table>
          

                  </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        
<div id="modal_url" class="modal fade">
	<div class="modal-dialog modal-confirm">
		<div class="modal-content">
			<div class="modal-header flex-column">					
				<h4 class="modal-title w-100">Adicionar item:</h4>	
			</div>
      <div class="modal-body">
        <form>

          <div class="mb-3">
            <label for="url_name_new"  class="col-form-label">URL:</label>
            <input type="text" required="" class="form-control" id="url_name_new">
          </div>

        </form>
      </div>
			<div class="modal-footer justify-content-center">
				<button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
				<button type="button" class="btn btn-primary" id="btn_salvar">Salvar</button>
			</div>
		</div>
	</div>
</div>  



<div class="modal fade modalexcluir">
	<div class="modal-dialog modal-confirm">
		<div class="modal-content">
			<div class="modal-header flex-column">					
				<h4 class="modal-title w-100">Deseja Realmente Excluir ?</h4>	
			</div>
			<div class="modal-body">

        <table id="tablehome"style="width: 64rem;" class="table table-bordered table-striped table-hover" >

          <thead>

              <tr>
                  <th>Codigo</th>
                  <th>url</th>
                
              </tr>

          </thead>
          <tbody class="tablemodal" style="width:100%"></tbody>
          <tfoot></tfoot>
        </table>

			</div>
			<div class="modal-footer justify-content-center">
				<button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
				<button type="button" class="btn btn-primary btn_salvar" >Excluir</button>
			</div>
		</div>
	</div>
</div>  

        <script src="<?php $_SERVER['DOCUMENT_ROOT']?>build/js/url_home.js"></script>
