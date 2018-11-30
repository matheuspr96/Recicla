    document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems, options);
  });

  // Or with jQuery

  $(document).ready(function(){
    $('.sidenav').sidenav(); 

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

    $('#pontoColeta').click(function(){
      // Define a página que vai ser aberta, quando usuario clickar.
      var pagina = "navegacao/pontoColeta.php";
        $('#conteudo').load(pagina);	
    });

    $('#login').click(function(){
      // Define a página que vai ser aberta, quando usuario clickar.
      var pagina = "navegacao/login.php";
        $('#conteudo').load(pagina);	
    });




    



      
      $('#cadastroUsuario').click(function(){
      // Repetindo a variável pagina, que receberá a página registro.php, ele poderá ser modificado. Mesmo processo acima.
      var pagina = "navegacao/cadastroUsuario.php";	
        $('#conteudo').load(pagina);
      });
  });

