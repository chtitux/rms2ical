<h1>Convertisseur RMS vers iCal</h1>
Bonjour à toi et bienvenue sur le site de convertisseur des calendriers <a href="http://rmsonline.fr/">RMS</a> vers le format <a href="http://fr.wikipedia.org/wiki/ICalendar">iCal</a>.<br/>
<br/>

Pour générer le calendrier iCal de tes cours, rentre ton identifiant rmsonline.fr :<br/>

<form action="<?php echo url_for("default/index") ?>" method="get">
<input type="text" style="margin:5px; padding:5px; font-size:130%" value="<?php echo $login ?>" name='login'/>
<input type="submit" style="font-size:130%" value="Générer mon emploi du temps iCal" />
</form>

<?php if(strlen($login)>0): ?>
<ul>
  <li>Adresse de ton calendrier : <?php echo link_to(url_for('@ical_nom?nom='.$login,1 ), '@ical_nom?nom='.$login, 1) ?></li>
  <li><a href="<?php echo urlencode(url_for('@ical_nom?nom='.$login,1 )) ?>"><img src="/images/google-logo.png" alt="google logo" />Importer le calendrier sur Google Agenda</a></li>
</ul>

<?php endif ?>

<br/>
<h2>Foire Aux Questions</h2>
<h3>Qui est derrière ce site ?</h3>
Un étudiant à qui on a demandé s'il était possible d'avoir le calendrier de ses cours au format iCal.<br/>
Plutôt que de répondre oui, il a créé ce site en 3 heures.

<h3>Comment contacter l'auteur ?</h3>
Une seule adresse, pour les insultes, les questions ou les félicitations : contact (at) pinade.org

<h3>Il y a une erreur dans mon calendrier, je souhaite la signaler</h3>
Contactez l'auteur (voir plus haut), il essaiera de vous répondre dans les plus brefs délais.

<h3>Quelle est la fréquence des mises à jour des emplois du temps iCal</h3>
Les emplois du temps sont mis à jour au moins deux fois par jour.

<br/><br/>
<span class="rappel">Ce site n'est <b>pas</b> officiel, aucune garantie n'est apportée sur les calendriers générés. RMS n'est en rien responsable des calendriers produits par ce site.</span>
