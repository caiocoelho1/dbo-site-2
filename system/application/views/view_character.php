<?php
require_once("system/application/config/create_character.php");
	if(in_array(strtolower($player->name), $config['restricted_names']))
		error("Voc� n�o tem autoriza��o para ver este personagem.");
	else {
	if($player->isDeleted()) alert("Este personagem foi deletado.");
	if($player->isNameLocked()) alert("Este personagem teve o nome trocado.");

	try {$comment = nl2br(decodeString(strip_tags($player->getComment())));}catch (Exception $e) {$comment = "N�o h� coment�rios.";}
	$nickname = ($account->getCustomField('nickname') == "") ? "N�o existe." : $account->getCustomField('nickname');
	try { $created = $player->getCreated(); } catch (Exception $e) { $created = time()-36000;}
?>
<div class='message'>
<div class='title'>Personagem</div>
<div class='content'>
<table width='100%'>
	<tr><td width='30%'>Nome:</td><td><?php echo $player->getName();?></td></tr>
	<tr><td width='30%'>G�nero:</td><td><?php echo $sex = ($player->getSex() == 1) ? "Masculino" : "Feminino" ?></td></tr>
	<tr><td width='30%'>Profiss�o:</td><td><?php echo getVocationName($player->getVocation(), $player->getPromotion()); ?></td></tr>
	<tr><td width='30%'>Level</td><td><?php echo $player->getLevel(); ?></td></tr>
	<?php 
		$rank_of_player = $player->getRank();
		if(!empty($rank_of_player)) {
			$guild_id = $rank_of_player->getGuild()->getId();
			$guild_name = $rank_of_player->getGuild()->getName();
			echo "<tr><td width='30%'>Guild membership</td><td>".$rank_of_player->getName()." of the <a href='../../guilds/view/$guild_id'>".$guild_name."</a></td></tr>";
		}
	?>
	<tr><td width='30%'>Mundo:</td><td><?php echo $config['worlds'][$player->getWorld()]; ?></td></tr>
	<tr><td width='30%'>Apelido:</td><td><?php echo "<a href='".url('profile/view/'.$nickname)."'>".$nickname."</a>"; ?></td></tr>
	<tr><td width='30%'>�ltimo login:</td><td><?php echo $lastlogin = ($player->getLastLogin() == 0) ? "Nunca logou" : UNIX_TimeStamp($player->getLastLogin()); ?></td></tr>
	<tr><td width='30%'>Coment�rio:</td><td><?php echo $comment; ?></td></tr>
	<tr><td width='30%'>Status da conta:</td><td><?php echo $status = ($account->isPremium()) ? "Premium" : "Free"; ?></td></tr>
	<tr><td width='30%'>Grupo:</td><td><?php echo $config['groups'][$player->getGroup()]; ?></td></tr>
	<tr><td width='30%'>Status:</td><td><?php echo $status = ($player->isOnline()) ? "<font color='green'>Online</font>" : "<font color='red'>Offline</font>"; ?></td></tr>
	<tr><td width='30%'>Criado:</td><td><?php echo ago($created)." | ".UNIX_TimeStamp($created); ?></td></tr>
</table>
</div></div>
<?php 
	$GLOBALS['player'] = $player;
	$ide = new IDE;
	try {
		$ide->loadInjections("character_view");
	}
		catch(Exception $e) {
			error($e->getMessage());
		}
	
}
?>