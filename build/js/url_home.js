
$('#title_pages').text('Home');
$('#table').bootstrapTable();



consultardados();

function consultardados(){

  $('#table').bootstrapTable('showLoading');

  $.ajax({
    url      :'http://localhost/mvc_php/Models/HomeModel.php',
    type     :'POST',
    dataType :'JSON',
    data     :{ 
                  action:'consultar'
              },
    success : function(data){
      
      $("#table").bootstrapTable('load',data);

      $("#table").removeClass( "table-bordered");

      $('#table').bootstrapTable('hideLoading');
      
    }
  });
}


function modaleditar(id) {

  var teste = $("#table").bootstrapTable('getRowByUniqueId',id);
  
  $('#url_name_new').val(teste.nome);

  $('.modal-title').text('Editar url');

  $('#btn_salvar').text('Salvar').attr('onClick','editar('+id+')');

  $('#modal_url').modal('show');

}




function modalexcluir(id) {
  

    var teste = $('#table').bootstrapTable('getRowByUniqueId',id);

      $('.modal-title').text('Excluir url');

      $('.modalexcluir').attr('id','modalexcluir'+id);

      $('.tablemodal').attr('id','excluir'+id);

      $('.btn_salvar').attr('id','btn_salvar'+id);

      $('#excluir'+id).html(

                            '<tr>' +
                              '<td style="font-size: 15px;">' +teste.id + '</td>' +
                              '<td style="font-size: 15px; ">' +teste.nome + '</td>' +
                            '</tr>'
                        )

      $('#btn_salvar'+id).text('Excluir').attr('onClick','excluir('+id+')');

      $('#modalexcluir'+id).modal('show');
       
       
   
}


function adicionar(){

 var urlreg=/(([\w]+:)?\/\/)?(([\d\w]|%[a-fA-f\d]{2,2})+(:([\d\w]|%[a-fA-f\d]{2,2})+)?@)?([\d\w][-\d\w]{0,253}[\d\w]\.)+[\w]{2,63}(:[\d]+)?(\/([-+_~.\d\w]|%[a-fA-f\d]{2,2})*)*(\?(&?([-+_~.\d\w]|%[a-fA-f\d]{2,2})=?)*)?(#([-+_~.\d\w]|%[a-fA-f\d]{2,2})*)?/;

  var url = $('#url_name').val();
  
  if(urlreg.test(url) == false){
      
      $('#url_name').attr('required','required');

      createAlert('','URL invalida! tente novamente','','warning',true,true,'pageMessages');
      
      $('#pageMessages').css('z-index',2000);

      return false;
  }

  $.ajax({
    url      :'http://localhost/mvc_php/Models/HomeModel.php',
    type     :'POST',
    dataType :'JSON',
    data     :{ 
                  action  :'adicionar',
                  url_name: $('#url_name').val(),
              },
    success : function(data){

      $('#modal_url').modal('hide');

      document.getElementById("url_name").value = '';

      consultardados();

      createAlert('','url cadastrada  com Sucesso!','','success',true,true,'pageMessages');

    }, error: function(e) {

      $('#modal_url'+id).modal('hide');

      createAlert('','Erro ao se Comunicar com o Servidor!','','danger',true,true,'pageMessages');

    }
  });
}

function editar(id){

  $.ajax({
    url      :'http://localhost/mvc_php/Models/HomeModel.php',
    type     :'POST',
    dataType :'JSON',
    data     :{ 
                  action      :'editar',
                  url_name: $('#url_name_new').val(),
                  safe        : id
              },
    success : function(data){

      $('#modal_url').modal('hide');

      consultardados();
    
      createAlert('','url Editada com Sucesso!','','success',true,true,'pageMessages');
      
    }, error: function(e) {

      $('#modal_url'+id).modal('hide');
      
      createAlert('','Erro ao se Comunicar com o Servidor!','','danger',true,true,'pageMessages');

    }
  });
}

function excluir(id){

  $.ajax({
    url      :'http://localhost/mvc_php/Models/HomeModel.php',
    type     :'POST',
    dataType :'JSON',
    data     :{ 
                  action      :'excluir',
                  safe_excluir        : id
              },
    success : function(data){

      $('#modalexcluir'+id).modal('hide');

      consultardados();
      
      createAlert('','url Excluida com Sucesso!','','success',true,true,'pageMessages');

    }, error: function(e) {

      $('#modalexcluir'+id).modal('hide');

      createAlert('','Erro ao se Comunicar com o Servidor!','','danger',true,true,'pageMessages');

    }
  });
}



function detailFormatter(index, row, element) {

  
  $.ajax({
    url      :'http://localhost/mvc_php/Models/HomeModel.php',
    type     :'POST',
    dataType :'JSON',
    data     :{ 
                  action:'consultar_url',
                  id_row : row[0],
              },
    success : function(data){
       
      element.html('');
      element.css("min-height",'100px');
      element.css("padding-left",'25px');
      element.css("padding-right",'25px');
      element.css("margin-bottom",'10px');
      element.html(create_detail_table_fatores(data))
     
        switch (data.code) {

              case 100 : case 101 : case 102 :

                document.getElementById("color_code").style.color = "gray";

              break;

              case 200 : case 201 : case 202 : case 203 : case 204 : case 205 : case 206 : case 207 : case 208 : case 226 :

                document.getElementById("color_code").style.color = "green";

              break;
        
              case 300 :case 301 :case 302 :case 303 :case 304 :case 305 :case 307 :case 308 :

                document.getElementById("color_code").style.color = "blue";

              break;

              case 400 : case 401 : case 402 : case 403 : case 404 : case 405 : case 406 : case 407 : 
              case 408 : case 409 : case 410 : case 411 : case 412 : case 413 : case 414 : case 415 : 
              case 416 : case 417 : case 418 : case 421 : case 422 : case 423 : case 424 : 
              case 426 : case 428 : case 429 : case 431 : case 444 : case 451 : case 499 :

                document.getElementById("color_code").style.color = "red";

              break;

              case 500 : case 501 : case 502 : case 503 : case 504 : case 505 : case 506 : case 507 : case 508 : case 510 : case 511 :case 599 :

                document.getElementById("color_code").style.color = "orange";

              break;     
        }

     
        
    }
  });
}


function create_detail_table_fatores(data){             

  return ' <div class="col teste1" style="width: 126rem;">'+
              ' <div class="card" style=" width: 100%;height: 100%; padding: 3rem;  box-shadow: 0px 0px 7px 1px rgb(0 0 0 / 30%);">'+
                  ' <div class="card-header">'+
                      ' <h5 class="card-title"><strong style="font-weight: 700;" >Código de Status HTTP  :</strong> '+data.code+' <i style="color:white" id="color_code" class="fa fa-circle" aria-hidden="true"></i></h5>'+
                      '<br>'+
                      ' <h5 class="card-title"><strong style="font-weight: 700;" >Quando Sua URL Foi Acessada  :</strong>'+data.time+'</h5>'+
                  ' </div>'+
                  ' <table class="card-table table-hover">'+
                      ' <div class="card-body">'+
                      '<br>'+
                      ' <h5 class="card-title"><strong style="font-weight: 700;" >Corpo do HTML Retornado  :</strong></h5>'+
                      '<br>'+
                          ' <p class="card-text" style=" width: 100%;height: 100%; word-break: break-word;">'+data.data+'</p>'+
                      ' </div>'+
                      ' </table>'+
              ' </div>'+
          ' </div>';

}
