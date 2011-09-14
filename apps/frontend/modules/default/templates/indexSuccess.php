<div style="display:inline-block;float:right">
<div class="g-plusone" data-size="medium" data-count="true" data-href="http://rms2ical.pinade.org/"></div>
<iframe src="http://www.facebook.com/plugins/like.php?app_id=198451846877677&amp;href=http%3A%2F%2Frms2ical.pinade.org%2F&amp;send=false&amp;layout=button_count&amp;width=90&amp;show_faces=false&amp;action=like&amp;colorscheme=dark&amp;font=verdana&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:90px; height:21px;" allowTransparency="true"></iframe>
</div>

<h1>Convertisseur RMS vers iCal</h1>
Bonjour à toi et bienvenue sur le site de convertisseur des calendriers <a href="http://rmsonline.fr/">RMS</a> vers le format <a href="http://fr.wikipedia.org/wiki/ICalendar">iCal</a>.<br/>
<br/>

Pour générer le calendrier iCal de tes cours, <b>rentre ton identifiant rmsonline.fr</b> (par exemple DUPOND) :<br/>

<form action="<?php echo url_for("default/index") ?>" method="get">
<input type="text" style="margin:5px; padding:5px; font-size:130%" value="<?php echo $login ?>" name='login'/>
<input type="submit" style="font-size:130%" value="Générer mon emploi du temps iCal" />
</form>

<?php if(strlen($login)>0): ?>
<ul style="font-size:120%">
  <li>Adresse de ton calendrier : <?php echo link_to(url_for('@ical_nom?nom='.$login,1 ), '@ical_nom?nom='.$login, 1) ?></li>
  <li>Le lien juste au dessus fonctionne avec la plupart des applications de calendrier, dont iCal pour iPhone, Outlook, Thunderbird, etc.</li>
  <li><a href="http://www.google.com/calendar/render?cid=<?php echo urlencode(url_for('@ical_nom?nom='.$login,1 )) ?>"><img src="/images/google-logo.png" alt="google logo" /> Importer le calendrier directement dans Google Agenda</a></li>
</ul>

<?php endif ?>

<br/>
<hr/>
<h2>Foire Aux Questions</h2>
<h3>Qui est derrière ce site ?</h3>
Un étudiant à qui on a demandé s'il était possible d'avoir le calendrier de ses cours au format iCal.<br/>
Plutôt que de répondre oui, il a créé ce site en 3 heures.

<h3>Comment contacter l'auteur ?</h3>
Une seule adresse, pour les insultes, les questions ou les félicitations : contact (at) pinade.org

<h3>Il y a une erreur dans mon calendrier, je souhaite la signaler</h3>
Contacte l'auteur (voir plus haut), il essaiera de te répondre dans les plus brefs délais.

<h3>Quelle est la fréquence des mises à jour des emplois du temps iCal</h3>
Les emplois du temps sont mis à jour au moins deux fois par jour.

<h3>Faut-il mon mot de passe pour générer mon emploi du temps ?</h3>
Non, il ne faut pas ton mot de passe, ton nom seul suffit.

<h3>Comment ça marche ?</h3>
Ce site va télécharger les cours de toute l'année pour un nom donné sur le site de RMS (qui sont disponibles au format JSON) et les formatte au format iCal.<br/>
Un cache (de 4h actuellement) est gardé pour ne pas faire trop de requêtes sur les serveur de RMS.

<br/><br/>
<span class="rappel">Ce site n'est <b>pas</b> officiel, aucune garantie n'est apportée sur les calendriers générés. RMS n'est en rien responsable des calendriers produits par ce site.</span>
<hr/>
Vous aimez ce site ? Dites le !
<div class="g-plusone" data-size="medium" data-count="true" data-href="http://rms2ical.pinade.org/"></div>
<iframe src="http://www.facebook.com/plugins/like.php?app_id=198451846877677&amp;href=http%3A%2F%2Frms2ical.pinade.org%2F&amp;send=false&amp;layout=button_count&amp;width=90&amp;show_faces=false&amp;action=like&amp;colorscheme=dark&amp;font=verdana&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:90px; height:21px;" allowTransparency="true"></iframe>

    <script type="text/javascript"> 
      window.___gcfg = {
        lang: 'fr'
      };
      (function() {
        var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
        po.src = 'https://apis.google.com/js/plusone.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
      })();
    </script> 
