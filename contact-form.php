<?php
// Couleur du texte des champs si erreur saisie utilisateur
$color_font_warn="#FF0000";
// Couleur de fond des champs si erreur saisie utilisateur
$color_form_warn="#FFCC66";
// Ne rien modifier ci-dessous si vous n’êtes pas certain de ce que vous faites !
$list['f_4']=array("Sélectionnez","un café "," une réunion"," une demande de devis"," une demande d'informations"," autres...");
$list['f_6']=array("En soumettant ce formulaire, j’accepte que les informations saisies dans ce formulaire  soient traitées pour permettre de me recontacter et dans le cadre de la relation commerciale qui peut en découler.");
if(isset($_POST['submit'])){
	$erreur="";
	// Nettoyage des entrées
	while(list($var,$val)=each($_POST)){
	if(!is_array($val)){
		$$var=strip_tags($val);
	}else{
		while(list($arvar,$arval)=each($val)){
				$$var[$arvar]=strip_tags($arval);
			}
		}
	}
	// Formatage des entrées

	// Verification des champs
	if(strlen($f_1)<2){
		$erreur.="<li><span class='txterror'>Le champ &laquo; Mail &raquo; est vide ou incomplet.</span>";
		$errf_1=1;
	}else{
		if(!ereg('^[-!#$%&\'*+\./0-9=?A-Z^_`a-z{|}~]+'.
		'@'.
		'[-!#$%&\'*+\/0-9=?A-Z^_`a-z{|}~]+\.'.
		'[-!#$%&\'*+\./0-9=?A-Z^_`a-z{|}~]+$',
		$f_1)){
			$erreur.="<li><span class='txterror'>La syntaxe de votre adresse e-mail n'est pas correcte.</span>";
			$errf_1=1;
		}
	}
	if(strlen($f_2)<2){
		$erreur.="<li><span class='txterror'>Le champ &laquo; Nom &raquo; est vide ou incomplet.</span>";
		$errf_2=1;
	}
	if(strlen($f_3)<2){
		$erreur.="<li><span class='txterror'>Le champ &laquo; Prénom &raquo; est vide ou incomplet.</span>";
		$errf_3=1;
	}
	if($f_4==0){
		$erreur.="<li><span class='txterror'>Le champ &laquo; Sujet &raquo; n'a pas été défini.</span>";
		$errf_4=1;
	}
	if(strlen($f_5)<2){
		$erreur.="<li><span class='txterror'>Le champ &laquo; Message &raquo; est vide ou incomplet.</span>";
		$errf_5=1;
	}
	if(!$f_6){
		$erreur.="<li><span class='txterror'>Le champ &laquo; Agree &raquo; requiert au moins une sélection.</span>";
		$errf_6=1;
	}
	if($erreur==""){
		// Création du message
		$titre="Message de votre site";
		$tete="From:Site@Pierre-grange.com\n";
		$corps.="Mail : ".$f_1."\n";
		$corps.="Nom : ".$f_2."\n";
		$corps.="Prénom : ".$f_3."\n";
		$corps.="Sujet : ".$list['f_4'][$f_4]."\n";
		$corps.="Message : ".$f_5."\n";
		for($id=0; $id<count($list['f_6']); $id++){
			if($f_6[$id]==1){
				$corps.="Agree : ".$list['f_6'][$id]."\n";
			}
		}
		if(mail("donael.walter@hotmail.com", $titre, stripslashes($corps), $tete)){
			$ok_mail="true";
		}else{
			$erreur.="<li><span class='txterror'>Une erreur est survenue lors de l'envoi du message, veuillez refaire une tentative.</span>";
		}
	}
}
?>
<?php get_header() ?>
<div class="content">
  <? if($ok_mail==="true"){ ?>
	<table width='100%' border='0' cellspacing='1' cellpadding='1'>
		<tr><td><span class='txtform'>Le message ci-dessous nous a bien été transmis, et nous vous en remercions.</span></td></tr>
		<tr><td>&nbsp;</td></tr>
		<tr><td><tt><?echo nl2br(stripslashes($corps));?></tt></td></tr>
		<tr><td>&nbsp;</td></tr>
		<tr><td><span class='txtform'>Nous allons y donner suite dans les meilleurs délais.<br>A bientôt.</span></td></tr>
	</table>
<? }else{ ?>
<form action='<?php the_permalink(); ?>' method='post' name='Form'>
<table width='100%' border='0' cellspacing='1' cellpadding='1'>
<? if($erreur){ ?><tr><td colspan='2' bgcolor='red'><span class='txterror'><font color='white'><b>&nbsp;ERREUR, votre message n'a pas été transmis</b></font></span></td></tr><tr><td colspan='2'><ul><?echo$erreur?></ul></td></tr><?}?>
<tr><td colspan='2'><span class='txterror'>Les champs marqué d'un * sont obligatoires</span></td></tr>
<tr><td align='right' width='30%'><span class='txtform'>Mail* :</span></td><td><input type='text' style='width:200 <?if($errf_1==1){print("; background-color: ".$color_form_warn."; color: ".$color_font_warn);}?>;' name='f_1' value='<?echo stripslashes("$f_1"); ?>' size='24' border='0'></td></tr>
<tr><td align='right' width='30%'><span class='txtform'>Nom* :</span></td><td><input type='text' style='width:200 <?if($errf_2==1){print("; background-color: ".$color_form_warn."; color: ".$color_font_warn);}?>;' name='f_2' value='<?echo stripslashes($f_2); ?>' size='24' border='0'></td></tr>
<tr><td align='right' width='30%'><span class='txtform'>Prénom* :</span></td><td><input type='text' style='width:200 <?if($errf_3==1){print("; background-color: ".$color_form_warn."; color: ".$color_font_warn);}?>;' name='f_3' value='<?echo stripslashes($f_3); ?>' size='24' border='0'></td></tr>
<tr><td align='right' width='30%'><span class='txtform'>Sujet* :</span></td><td><select style='width:200 <?if($errf_4==1){print("; background-color: ".$color_form_warn."; color: ".$color_font_warn);}?>;' name='f_4' size='1'>
<? for($id=0;$id<count($list['f_4']);$id++){
if($id==$f_4){$ct="selected";}
print("<option ".$ct." value=".$id.">".$list['f_4'][$id]."</option>");
unset($ct);
}?>
</select></td></tr>
<tr><td align='right' width='30%'><span class='txtform'>Message* :</span></td><td><textarea style='width:360 <?if($errf_5==1){print("; background-color: ".$color_form_warn."; color: ".$color_font_warn);}?>;' name='f_5' rows='6' cols='40'><?echo$f_5 ?></textarea></td></tr>
<tr><td align='right' width='30%'><span class='txtform'>Agree* :</span></td><td>
<table border='0' cellspacing='0' cellpadding='0'>
<? for($id=0;$id<count($list['f_6']);$id++){
if($f_6[$id]==1){$ct="checked";}
print("<tr><td><input ".$ct." type='checkbox' name='f_6[$id]' value='1' border='0'></td><td><span class='txtform'>".$list[f_6][$id]."</span></td></tr>");
unset($ct);
}?>
</table>
</td></tr>
<tr><td align='right' width='30%'></td><td><input type='submit' name='submit' value='Envoyer' border='0'></td></tr>
</table>
</form>
<? } ?>
</div>
<?php get_footer() ?>
