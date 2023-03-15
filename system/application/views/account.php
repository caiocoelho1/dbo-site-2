<?php 
$GLOBALS['characters'] = $characters;
$ide = new IDE;

try { $ide->loadInjections("account"); } catch(Exception $e) { error($e->getMessage()); }
	echo "<h2>Bem Vindo <a href='".url('profile/view/'.$_SESSION['nickname'])."'>".ucfirst($_SESSION['nickname'])."</a>!</h2>";

	
	if($messages != 0)
		if($messages == 1)
			echo "<center><b>você tem $messages novas mensagem! Clique <a href='".url('msg/inbox')."'>aqui</a> para le-las!</b></center><br/>";
		else
			echo "<center><b>você tem $messages novas mensagem! Clique <a href='".url('msg/inbox')."'>aqui</a> para le-las!</b></center><br/>";
?>
<script>$(function(){$("#tabs").tabs();});</script>
<?php

echo "<div id='tabs'>";
echo '<ul>
		<li><a href="#characters">Personagens</a></li>
		<li><a href="#account">Conta</a></li>
		<li><a href="#community">Comunidade</a></li>
        <li><a href="#logout">Sair</a></li>

	</ul>';
	echo "<div id='characters'>";
	echo "<center><a href='".WEBSITE."/index.php/character/create_character'><button class='ide_button' onClick=\"window.location.href='".WEBSITE."/index.php/character/create_character';\">Criar Personagem</button></a></center>";
	echo "<table width='100%'>";
	echo "<tr><td><center><b>Nome</b></center></td><td><center><b>Level</b></center></td><td><center><b>Ações</b></center></td></tr>";
	foreach($characters as $row) {
		echo "<tr class='highlight'><td><center><a href=\"".WEBSITE."/index.php/character/view/$row->name\">$row->name</a></center></td><td><center>$row->level</center></td><td><center><a href=\"".WEBSITE."/index.php/account/editcomment/$row->id\" class='tipsy' title='Editar comentario'><img src='".WEBSITE."/public/images/edit.gif'/></a> <a href='#' onClick='if(confirm(\"Você tem certeza?\")) window.location.href=\"".WEBSITE."/index.php/account/deletePlayer/$row->id\"' class='tipsy' title='Excruir Personagem'><img src='".WEBSITE."/public/images/false.gif'/></a></center></td></tr>";
	}
	echo "</table>";
	echo "</div>";
	echo "<div id='account'>";
	echo "<center><a href='".WEBSITE."/index.php/account/changepassword'><button class='ide_button' onClick=\"window.location.href='".WEBSITE."/index.php/account/changepassword';\">Change password</button></a>";

      	echo "<br>";
	

      echo "</div>";
	echo "<div id='community'>";
		echo "<b>Perfil</b>";
		echo "<li><a href='".WEBSITE."/index.php/profile/update'>Editar informações</a></li>";
		echo "<li><a href='".WEBSITE."/index.php/profile/avatar'>Atualizar Avatar</a></li>";
		echo "<br/><b>Mensagens</b>";
		
                echo "<li><a href='".WEBSITE."/index.php/msg/inbox'>Caixa de entrada</a></li>";
		
                echo "<li><a href='".WEBSITE."/index.php/msg/outbox'>Caixa de saída</a></li>";
		
                echo "<li><a href='".WEBSITE."/index.php/msg/write'>Escrever nova</a></li>";
      echo "</div>";

      
	echo "<div id='logout'>";
		
echo "<br /><center><b>Você tem certeza que deseja sair?</b><br /><br /><a href='".WEBSITE."/index.php/account/logout'><button class='ide_button' onClick=\"window.location.href='".WEBSITE."/index.php/account/logout';\">Sair</button></a></center>";
echo "</div>";

echo "</div>";

if(empty($acc[0]['rlname']) || empty($acc[0]['location']) || empty($acc[0]['about_me']))
	alert("You might consider updating your public profile <a href='".WEBSITE."/index.php/profile/update'><b>here</b></a>!");;
?>