<?php /* Smarty version 3.0rc1, created on 2023-03-15 14:51:47
         compiled from "templates/dbo\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:293726411db839f7473-82222403%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '41dcfed35bd1fb99ba1465e8ef9b91967098b494' => 
    array (
      0 => 'templates/dbo\\index.tpl',
      1 => 1678891904,
    ),
  ),
  'nocache_hash' => '293726411db839f7473-82222403',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>

		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="distribution" content="Global" />
		<meta name="author" content="Night" />
		<meta name="robots" content="index,follow" />
		<meta name="description" content="WODBO WARS A GUERRA JÀ COMEÇOU." />
		<meta name="keywords" content="ots, open tibia server, ..." />
		<meta property="fb:admins" content="yan.santoslima.7"/>
		<?php echo $_smarty_tpl->getVariable('head')->value;?>

		<title>.:: Wodbo Wars ::.</title>
		<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getVariable('path')->value;?>
/templates/dbo/main.css" />
		<link href="<?php echo $_smarty_tpl->getVariable('path')->value;?>
/templates/dbo/favicon.png" rel="shortcut icon" />
	</head>
	<body>
	<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.4";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
		<div id="vt_page">
			<div id="vt_header"></div>
			<div id="vt_container">
				<div id="vt_menu">
					<div id="vt_news_menu">
						<div class="header"></div>
						
						
						<ul>
						

							
							
							
						</ul>
					</div>
					<div id="vt_account_menu">
						<div class="serv"></div>
						<ul>
							<?php if ($_smarty_tpl->getVariable('logged')->value==1){?>
							<li><a href="<?php echo $_smarty_tpl->getVariable('path')->value;?>
/index.php/account/"><font color="black">Minha Conta</a></li>
					            <li><a href="<?php echo $_smarty_tpl->getVariable('path')->value;?>
/index.php//p/v/points"><font color="RED">POINTS DONATE</a></li>
								<li><a href="<?php echo $_smarty_tpl->getVariable('path')->value;?>
/index.php//p/v/donatei"><font color="green">COMO DONATAR</a></li>
								<li><a href="<?php echo $_smarty_tpl->getVariable('path')->value;?>
/index.php//p/v/regras"><font color="blue">Regras do jogo</a></li>
								<li><a href="<?php echo $_smarty_tpl->getVariable('path')->value;?>
/index.php/p/v/venda_de_chars">Venda De Chars</a></li>
							<?php }else{ ?>
								<li><a href="<?php echo $_smarty_tpl->getVariable('path')->value;?>
/index.php/account/create"><font color="black">Criar Conta</a></li>
								<li><a href="<?php echo $_smarty_tpl->getVariable('path')->value;?>
/index.php/account/login"><font color="black">Login</a></li>
                                                                <li><a href="<?php echo $_smarty_tpl->getVariable('path')->value;?>
/index.php//p/v/points"><font color="RED">POINTS DONATE</a></li>
								<li><a href="<?php echo $_smarty_tpl->getVariable('path')->value;?>
/index.php//p/v/donatei"><font color="green">COMO DONATAR</a></li>
								<li><a href="<?php echo $_smarty_tpl->getVariable('path')->value;?>
/index.php//p/v/regras"><font color="blue">REGRAS DO SERVIDOR</a></li>
							<?php }?>
						</ul>
					</div>
					<div id="vt_game_menu">
						<div class="game"></div>
						<ul>
                                                   <li><a href="<?php echo $_smarty_tpl->getVariable('path')->value;?>
/index.php//p/v/combos"><font color="black">COMBOS PERSONAGENS</a></li>
                                                   <li><a href="<?php echo $_smarty_tpl->getVariable('path')->value;?>
/index.php//p/v/links"><font color="red">Links Download Client</a></li>
						    
						
						</ul>
					</div>
					<div id="vt_community_menu">
						<div class="comu"></div>
						<ul>
							<a href=""><font color="white">Forum</a>	<br /><br />
							<li><a href="<?php echo $_smarty_tpl->getVariable('path')->value;?>
/index.php/character/online"><font color="black">Players Online</a></li>
							<li><a href="<?php echo $_smarty_tpl->getVariable('path')->value;?>
/index.php/character/view"><font color="black">Procurar Personagem</a></li>
							<li><a href="<?php echo $_smarty_tpl->getVariable('path')->value;?>
/index.php/p/v/deaths"><font color="black">Últimas Mortes</a></li>
							<li><a href="<?php echo $_smarty_tpl->getVariable('path')->value;?>
/index.php/highscores"><font color="black">Rank</a></li>
							<li><a href="<?php echo $_smarty_tpl->getVariable('path')->value;?>
/index.php/p/v/fragers"><font color="black">Top Frags</a></li>
							<li><a href="<?php echo $_smarty_tpl->getVariable('path')->value;?>
/index.php/guilds"><font color="black">Guilds</a></li>
							<li><a href="<?php echo $_smarty_tpl->getVariable('path')->value;?>
/index.php/houses/main"><font color="black">Casas</a></li>
							<li><a href="<?php echo $_smarty_tpl->getVariable('path')->value;?>
/index.php/p/v/gallery"><font color="black">Galeria</a></li>
							<li><a href="<?php echo $_smarty_tpl->getVariable('path')->value;?>
/index.php/video"><font color="black">Vídeos</a></li>

						</ul>
					</div>
				</div>
				
				<div id="vt_content">
					<!-- <?php echo $_smarty_tpl->getVariable('main')->value;?>
 !-->
				</div>
				<div id="vt_panel">
					<div class="top">
						<div class="bot">
							<div id="vt_panel_buttons">
								<a href="http://www.mediafire.com/download/hx8ddlcs4440eex/Client+Wars+%5B5.6%5D.rar" class="button">
									
								</a>
								<a href="<?php echo $_smarty_tpl->getVariable('path')->value;?>
/index.php/p/v/gifts" class="button1">
									
									<span></span>
								</a>
								<a href="http://wodbowars.wix.com/dicasetutorias" class="button2">
									
								</a>
                                           <a href="<?php echo $_smarty_tpl->getVariable('path')->value;?>
/index.php/highscores" class="button3">
									
								</a>

							</div>
							<div class="vt_panel_module">
								<div class="header"></div>
								<?php  $_smarty_tpl->tpl_vars['world'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('worlds')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['world']->key => $_smarty_tpl->tpl_vars['world']->value){
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['world']->key;
?>
								<div>
									<b>World:</b> <span style="color: #5F021F;font-weight: bold;"><?php echo $_smarty_tpl->getVariable('world')->value;?>
 </span><br />
									<b>Status:</b> 
									<?php if ($_smarty_tpl->getVariable('serverOnline')->value[$_smarty_tpl->getVariable('id')->value]){?>
										<a href=""><img src="<?php echo $_smarty_tpl->getVariable('path')->value;?>
/templates/dbo/images/statuson.png" alt="Designed by Night" /></a><br />
										<b>Uptime:</b> <span style="color: #FF0000;font-weight: bold;"><?php echo $_smarty_tpl->getVariable('serverUptime')->value[$_smarty_tpl->getVariable('id')->value];?>
</span> <br />
										<b>Players:</b> <span style="color: #FF0000;font-weight: bold;"><?php echo $_smarty_tpl->getVariable('serverPlayers')->value[$_smarty_tpl->getVariable('id')->value];?>
/<?php echo $_smarty_tpl->getVariable('serverMax')->value[$_smarty_tpl->getVariable('id')->value];?>
</span><br />
										<a href="http://www.facebook.com/wodbolegends"><img src="<?php echo $_smarty_tpl->getVariable('path')->value;?>
/templates/dbo/images/facedbud.png" alt="Designed by Night" /></a><br /><br /><br />
									<?php }else{ ?>
									<a href=""><img src="<?php echo $_smarty_tpl->getVariable('path')->value;?>
/templates/dbo/images/offline.png" alt="Designed by Night" /></a><br />
									<a href="http://www.facebook.com/wodbolegends"><img src="<?php echo $_smarty_tpl->getVariable('path')->value;?>
/templates/dbo/images/facedbud.png" alt="Designed by Night" /></a><br /><br />
										
									<?php }?>
								</div>
								<?php }} ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>