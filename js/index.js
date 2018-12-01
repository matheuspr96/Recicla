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

     /* $("#logoAnime").hover(function(){
        if($(this).attr("src") == "./images/logo-escura.png") 
        $(this).attr("src","./images/logo-clara.png");
        else
        $(this).attr("src","./images/logo-escura.png");
    }); */

  });
  function mudaIN(){
    document.getElementById("logo").src ="./images/logo-clara.png";   
  }
  function mudaOUT(){
    document.getElementById("logo").src = "./images/logo-escura.png"
  }
  

