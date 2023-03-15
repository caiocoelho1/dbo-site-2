<?php 
require("../config.php");
if(empty($config['server_name']) or $config['server_name'] != "%SERVER_NAME%") {
	header("Location: ../");
	exit();
}
if(!file_exists('iq.php')) exit('Maneira errada de trapaça.');
require('iq.php');
function is_really_writable($file)
{	
	if (DIRECTORY_SEPARATOR == '/' AND @ini_get("safe_mode") == FALSE)
	{
		return is_writable($file);
	}
	if (is_dir($file))
	{
		$file = rtrim($file, '/').'/'.md5(rand(1,100));
		if (($fp = @fopen($file, FOPEN_WRITE_CREATE)) === FALSE)
		{
			return FALSE;
		}
		fclose($fp);
		@chmod($file, DIR_WRITE_MODE);
		@unlink($file);
		return TRUE;
	}
	elseif (($fp = fopen($file, FOPEN_WRITE_CREATE)) === FALSE)
	{
		return FALSE;
	}
	fclose($fp);
	return TRUE;
}	
	$name = @$_POST['server_name'];
	$hostname = @$_POST['hostname'];
	$login = @$_POST['login'];
	$password = @$_POST['password'];
	$dbtable = @$_POST['table'];
	$license = @$_POST['license'] ;
	$error = "";
	$realIP = ($config['servers'][0]['address'] == '127.0.0.1' || $config['servers'][0]['address'] == 'localhost')?'':gethostbyname($config['servers'][0]['address']);

	if($_POST) {

		if(empty($hostname) or empty($name) or empty($login) or empty($dbtable))
			$error .= "<li>Todos os campos são obrigatórios.</li>";
						
		if($license != 1)
			$error .= "<li>Você deve ler e aceitar licença</li>";
			
		if(@!mysql_connect($hostname, $login, $password))
			$error .= "<li>Não foi possível conectar ao banco de dados.</li>";
			
		if(@!mysql_select_db($dbtable))
			$error .= "<li>Não foi possível encontrar o banco de dados.</li>";
		
		if(strtolower($_POST['answer']) != strtolower(base64_decode($iq[$_POST['question']]['answer'])))
			$error .= "<li>A resposta do QI está errada. Provavelmente você não é inteligente o suficiente para este sistema.</li>";
					
		if(empty($error)) {
			$content = @file_get_contents('../config.php') or die("Acesso de leitura negado ao config.php, por favor chmod 666"); // Isso é muito crítico, pois nada mais funcionará, portanto, é um 'die'
			$content = str_replace("%SERVER_NAME%", $name, $content);
			$content = str_replace("%DB_HOST%", $hostname, $content);
			$content = str_replace("%DB_LOGIN%", $login, $content);
			$content = str_replace("%DB_PASS%", $password, $content);
			$content = str_replace("%DB_NAME%", $dbtable, $content);
			$handle = @file_put_contents('../config.php', $content) or die("Acesso de leitura negado ao config.php, por favor chmod 666");
			$db = file_get_contents("dbSCHEMA.txt");
			$queries = explode ( ";", $db ); 
			$i = 0;
			foreach ($queries as $query) 
			{ 
				$i++;
			   	@mysql_query ($query); 
			} 
			echo "<center><a href='../'><img src='images/sucesso.png' alt='Instalado com sucesso!' height='100' width='600' border='0' /></center></a>";
			echo "<br><center>Seu config.php foi alterado<br/><b><font color='purple'>";
			echo $i."</font></b> consultas executadas.</center><br/>";
			exit("<center><b>Parabéns!</b> Tibia & Derivado <b>MMORPG WebSite</b> foi instalado com exito!<br>Você sempre pode mudar qualquer valor em <b>config.php</b> no diretório principal, para a segurança adicional você pode remover a pasta da instalação inteira.</br><br>Obrigado por escolher este sistema. Agora você pode ver o seu website clicando <a href='../'>Aqui</a>.</center></br>");
			
		}
			
		
	}
	else {
		$_POST['hostname'] = "localhost";
		$_POST['login'] = "root";
		$_POST['table'] = "dbo";
		$_POST['server_name'] = "dbo";	
	}
?>
<html>
<head>
<title>Instalador MMORPG WebSite - By:Night Modern AAC</title>
<link REL="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="wrapper">
<div id="header"></div>
<div id="content">            		
	<div id="left_stroke"></div>
	<div id="right_stroke"></div>
<center>
<div><?php echo $error;?></div>
<form action='index.php' method='post'>
<fieldset>
<legend><h2>Informação do Servidor</h2></legend>
<b>Nome do Servidor</b><br/>
<input type='text' value="<?php echo $_POST['server_name']; ?>" name='server_name'/><br/>
</fieldset>
<fieldset>
<legend><h2>Informações do Banco de Dados</h2></legend>
<b>Hostname</b><br/>
<input type='text' value='<?php echo $_POST['hostname'];?>'name='hostname'/><br/>
<b>Login</b><br/>
<input type='text' value='<?php echo $_POST['login'];?>'name='login'/><br/>
<b>Password</b><br/>
<input type='password' value='<?php echo @$password;?>'name='password'/><br/>
<b>Database</b><br/>
<input type='text' value='<?php echo $_POST['table'];?>'name='table'/><br/>
</fieldset>
<fieldset style='font-size: 12px;'>
<legend><h2>Teste de Requisito</h2></legend>
Olá! Eu realmente sinto muito que tenho que fazer você ler isso, mas é muito importante. Como todos sabem, a comunidade do OT mudou muito desde alguns anos, para o pior, é claro. Eu decidi colocar este pequeno teste de QI aqui, para permitir que apenas pessoas acima do mínimo crítico de qualquer conhecimento 'humano'. É porque a comunidade da OT está sendo do dia-a-dia tomada por completos idiotas, e eu vejo mais e mais tópicos estúpidos em fóruns com perguntas que têm respostas neles ou são completamente estúpidos.
Não estou dizendo que todo mundo é assim, mas infelizmente muita gente. Eu sei, este teste de QI é fácil de ser enganado, mas se você é capaz de enganá-lo, você deve ser inteligente o suficiente para apenas responder a simples pergunta e se divertir com o Modern AAC. Obrigado, e mais uma vez desculpe, mas eu tive que fazer isso. Assinado, <font color="red"><b>Yanzito.</b></font><br/> Você vai ver agora perguntas aleatorias.<br/><br/>

</fieldset>
<fieldset>
<legend><h2>Licença de Uso</h2></legend>
	<br/><div class="field"><?php echo nl2br(file_get_contents("license.txt"));?>
	</div><br/>
	<br/><br/><input type='checkbox' name='license' value='1'/>Eu aceito a licença a seguir.<br/><br/>

<input type='submit' value='Instalar'/><br/>
</fieldset>
<fieldset>
<legend><h2>Creditos </h2></legend>
<b><h2>Desenvolvedores do Instalador e Script do Site</h2></b>
<font color="red"><b><h2>VAPus Otlist e Modern AAC</b></h2></font>
<b>By: Night (WebMaster) Nome Real: <a href="https://www.facebook.com/yan.santoslima.7" target="_blank">Yan Liima</a></b><br />

</form>
</center>

</div>
</div>
<div id="footer"></div></div>
</body>
</html>
</fieldset>