   $(document).ready(function(){

    
    $('#conteudo').load("navegacao/home.php")

    $('#home').click(function(){
      // Define a página que vai ser aberta, quando usuario clickar.
      var pagina = "navegacao/home.php";
        $('#conteudo').load(pagina);	
    });

    $('#cadastroResidencia').click(function(){
      // Define a página que vai ser aberta, quando usuario clickar.
      var pagina = "";
        $('#conteudo').load(pagina);	
    });

    $('#cadastroUsuario').click(function(){
      // Define a página que vai ser aberta, quando usuario clickar.
      var pagina = "navegacao/cadastroUsuario.php";
        $('#conteudo').load(pagina);	
    });

    $('#solicitacaoC').click(function(){
      // Define a página que vai ser aberta, quando usuario clickar.
      var pagina = "navegacao/solicitacaoC.php";
        $('#conteudo').load(pagina);	
    });

    $('#login').click(function(){
      // Define a página que vai ser aberta, quando usuario clickar.
      $('#modal').modal('show');
        
    });

      $('#cadastroUsuario').click(function(){
      // Repetindo a variável pagina, que receberá a página registro.php, ele poderá ser modificado. Mesmo processo acima.
      var pagina = "navegacao/cadastroUsuario.php";	
        $('#conteudo').load(pagina);
      });

      $('#solicitacaoC').click(function(){

      });

      

      

  });
  function mudaIN(){
    document.getElementById("logo").src ="./images/logo-clara.png";   
  }
  function mudaOUT(){
    document.getElementById("logo").src = "./images/logo-escura.png"
  }
// Exemplo de JavaScript inicial para desativar envios de formulário, se houver campos inválidos.
  (function() {
    'use strict';
    window.addEventListener('load', function() {
      // Pega todos os formulários que nós queremos aplicar estilos de validação Bootstrap personalizados.
      var forms = document.getElementsByClassName('needs-validation');
      // Faz um loop neles e evita o envio
      var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
          if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
        }, false);
      });
    }, false);
  })();
  

