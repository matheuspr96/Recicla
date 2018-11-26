    document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems, options);
  });

  // Or with jQuery

  $(document).ready(function(){
    $('.sidenav').sidenav();

    $('#home').click(function(){
      // Define a página que vai ser aberta, quando usuario clickar.
      var pagina = "navegacao/home.php";
        $('#conteudo').load(pagina);	
      
      });
      
      $('#cadastroUsuario').click(function(){
      // Repetindo a variável pagina, que receberá a página registro.php, ele poderá ser modificado. Mesmo processo acima.
      var pagina = "navegacao/cadastraLogin.php";	
        $('#conteudo').load(pagina);
      });
  });

