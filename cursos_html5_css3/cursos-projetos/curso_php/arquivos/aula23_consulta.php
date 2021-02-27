<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> Formulário de Cadastro! </title>
	<meta name="author" content="Everaldo do Nascimento" >
	<meta name="description" content="Curso de HTML5 e CSS3">
	<link rel="stylesheet" type="text/css" href="css/Css_aula23.css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,600i,700,700i,800" rel="stylesheet"> 
</head>
<body>

 <div class="container">

   <nav><!-- Fica a Nave on se localiza o menu -->

    <ul class="menu"><!-- Fica o menu -->
    <a href="aula23_index.php"><li> Cadastro </li></a>
    <a href="aula23_consulta.php"><li> Consultas </li></a>
    <a href="aula23_Cliente.php"><li> Cliesntes </li></a>
    <a href="suls23_Fornecedores.php"><li> fornecedores </li></a>
    </ul>
   </nav>

   <section>
   <br>
   <h1> Tela de Consultas </h1>
   <hr><br><br>

   <form action="post" action="processa.php"><!-- Chama o Processa.php -->
   <input class="btn" type="submit" name="salvar" value="Salvar" >
   <input class="btn" type="reset" name="limpar" value="Limpar" ><br><br>

   Nome <br>
   <input type="text" name="nome" class="campo" maxlength="40" required autofocus><br><br>
   E-mail <br>
   <input type="email" name="email" class="campo" maxlength="50" required ><br><br>
   Profissão <br>
   <input type="text" name="Profissao" class="campo" maxlength="40" required ><br><br>

   </form>
   </section><!-- Fica o Cadastro de usuarios -->

   <footer>
   <p>@TekLinux - Todos os direitos reservados - Everaldo do Nascimento.</p>
   </footer>
 
 </div>

</body>
</html>