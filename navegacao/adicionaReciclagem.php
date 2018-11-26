<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
	try
	{						
		// Inicializa as variáveis como vazias
		$matricula = $nome = $email = $senha = "";

		// Verifica se todos os campos necessários foram recebidos
		if (!isset($_POST["matricula"]))
			throw new Exception("A matricula do aluno deve ser fornecida");
		if (!isset($_POST["nome"]))
			throw new Exception("O nome do aluno deve ser fornecido");
		if (!isset($_POST["email"]))
			throw new Exception("O email do aluno deve ser fornecido");
		if (!isset($_POST["senha"]))
			throw new Exception("A senha do aluno deve ser fornecida");

		// Pre-processa os dados recebidos
		$matricula = filtraEntradaForm($_POST["matricula"]);
		$nome      = filtraEntradaForm($_POST["nome"]);
		$email     = filtraEntradaForm($_POST["email"]);
		$senha     = filtraEntradaForm($_POST["senha"]);

		// Valida os dados recebidos
		if ($matricula == "")
			throw new Exception("A matricula do aluno deve ser fornecida");
		if ($nome == "")
			throw new Exception("O nome do aluno deve ser fornecido");
		if ($email == "")
			throw new Exception("O email do aluno deve ser fornecido");
		if ($senha == "")
			throw new Exception("A senha do aluno deve ser fornecida");

		cadastraAluno($matricula, $nome, $email, $senha);
		echo "OK Dados cadastrados: $matricula, $nome, $email";
	}
	catch (Exception $e)
	{
		// altera o código de retorno de status para '400 Bad Request'.
		// A função http_response_code deve ser chamada antes do script enviar qualquer
		// texto para a saída padrão 
		http_response_code(400); 
		
		$msgErro = $e->getMessage();
		echo $msgErro;
	}
}

function cadastraAluno($matricula, $nome, $email, $senha)
{
	// Efetivar o cadastro do aluno.
}

function filtraEntradaForm($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>