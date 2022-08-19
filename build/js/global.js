
// **************************************************************
// alert

  function createAlert(title, summary, details, severity, dismissible, autoDismiss, appendToId) {
  var iconMap = {
    info: "fa fa-info-circle",
    success: "fa fa-check-circle",
    warning: "fa ffa fa-exclamation-circle",
    danger: "fa fa-exclamation-triangle"
  };

  var iconAdded = false;

  var alertClasses = ["alert", "animated", "flipInX"];
  alertClasses.push("alert-" + severity.toLowerCase());

  if (dismissible) {
    alertClasses.push("alert-dismissible");
  }

  var msgIcon = $("<i />", {
    "class": iconMap[severity],
    "style": 'font-size: 2em;'
  });

  var msg = $("<div />", {
    "class": alertClasses.join(" ") 
  });

  if (title) {
    var msgTitle = $("<h4 />", {
      html: title
    }).appendTo(msg);
    
    if(!iconAdded){
      msgTitle.prepend(msgIcon);
      iconAdded = true;
    }
  }

  if (summary) {
    var msgSummary = $("<strong />", {
      html: summary
    }).appendTo(msg);
    
    if(!iconAdded){
      msgSummary.prepend(msgIcon);
      iconAdded = true;
    }
  }

  if (details) {
    var msgDetails = $("<p />", {
      html: details
    }).appendTo(msg);
    
    if(!iconAdded){
      msgDetails.prepend(msgIcon);
      iconAdded = true;
    }
  }
  

  if (dismissible) {
    var msgClose = $("<span />", {
      "class": "close",
      "data-dismiss": "alert",
      html: "<i class='fa fa-times-circle'></i>"
    }).appendTo(msg);
  }
  
  $('#' + appendToId).prepend(msg);
  
  if(autoDismiss){
    setTimeout(function(){
      msg.addClass("flipOutX");
      setTimeout(function(){
        msg.remove();
      },2000);
    }, 5000);
  }
}
// **************************************************************




$('#login').on("click",function() {
  $.ajax({
    url      :'http://localhost/mvc_php/Models/LoginModel.php',
    type     :'POST',
    dataType :'JSON',
    data     :{ 
                  action :'login',
                  cadastro_senha : $('#cadastro_senha').val(),
                  cadastro_cpf   : $('#cadastro_cpf').val()

              },
    success : function(data){

      if(data == true){
        location.href="http://localhost/mvc_php/home";
        createAlert('','Logado com Sucesso!','','success',true,true,'pageMessages');

      }else{
        location.href="http://localhost/mvc_php/login";
        createAlert('','Usuario ou senha incorreto!','','warning',true,true,'pageMessages');
        return false;
      }


    }
    
  });
});





function Logout() {
  $.ajax({
    url      :'http://localhost/mvc_php/Models/LoginModel.php',
    type     :'POST',
    dataType :'JSON',
    data     :{ 
                  action :'Logout',
              },
    success : function(data){

      if(data == true){
        location.href="http://localhost/mvc_php/login";
        return false;
      }else{
        location.href="http://localhost/mvc_php/login";
        createAlert('','erro de coxao com o servidor','','danger',true,true,'pageMessages');
        return false;
      }


    }
    
  })
}




$('#Cadastrar').on("click", function() {
  $.ajax({
    url      :'http://localhost/mvc_php/Models/CadastroModel.php',
    type     :'POST',
    dataType :'JSON',
    data     :{ 
                  action :'Cadastrar',
                  cadastro_nome  : $('#cadastro_nome').val(),
                  cadastro_email : $('#cadastro_email').val(),
                  cadastro_cpf   : $('#cadastro_cpf').val(),
                  cadastro_senha : $('#cadastro_senha').val(),
                  

              },
    success : function(data){

      if(data == true){
        location.href="http://localhost/mvc_php/login";
        createAlert('','Logado com Sucesso!','','success',true,true,'pageMessages');

      }else{
        location.href="http://localhost/mvc_php/login";
        createAlert('','Usuario ou senha incorreto!','','warning',true,true,'pageMessages');
        return false;
      }


    }
    
  });
});
