<!doctype html>
<html lang="fr">
<meta charset="utf-8">

<head>
<title>Nouveau C.V.</title>
<link rel="stylesheet" href="styles/messtylesOnglets.css">
<script type="text/javascript">
document.addEventListener(&apos;DOMContentLoaded&apos;, (event) => {
    Array.from(document.querySelectorAll(&apos;.tabs&apos;)).forEach((tab_container, TabID) => {
        const registers = tab_container.querySelector(&apos;.tab-registers&apos;);
        const bodies = tab_container.querySelector(&apos;.tab-bodies&apos;);
      
        Array.from(registers.children).forEach((el, i) => {
          el.setAttribute(&apos;aria-controls&apos;, `${TabID}_${i}`)
          bodies.children[i]?.setAttribute(&apos;id&apos;, `${TabID}_${i}`)
        
          el.addEventListener(&apos;click&apos;, (ev) => {
            let activeRegister = registers.querySelector(&apos;.active-tab&apos;);
            activeRegister.classList.remove(&apos;active-tab&apos;)
            activeRegister = el;
            activeRegister.classList.add(&apos;active-tab&apos;)
            changeBody(registers, bodies, activeRegister)
          })
      })
    })
    
    
    function changeBody(registers, bodies, activeRegister) {
        Array.from(registers.children).forEach((el, i) => {
            if (bodies.children[i]) {
                bodies.children[i].style.display = el == activeRegister ? &apos;block&apos; : &apos;none&apos;
            }
    
            el.setAttribute(&apos;aria-expanded&apos;, el == activeRegister ? &apos;true&apos; : &apos;false&apos;)
        })
    }
});
</script>
</head>

<body class="mapage">
  <?php
  include("head-header-footer/header.php");
  ?>
<div class="fixe">

<H1 id="top" ></H1>
  <img
  src="images/ltmt.jpg"
  alt = "C&apos;est moi"/>
  <!--Coordonn&eacute;es-->
   <p class="paragraph"> Laurent Mafaut <br>
    23, rue de l&apos;abbaye<br>
    59148 Flines-Lez-R&acirc;ches<br>
    Mobile : +33 7 69 21 85 38<br>
    Mail : l.mafaut@gmail.com<br>
</p>
    <br>
    <a href="contact.php"><img class="logo" src="images/form.png" title="Formulaire de contact"></a>
    <a href="mailto:laurent.mafaut@gmail.com"><img class="logo" src="images/mail.webp" title="M&apos;envoyer un mail"></a>
    <a href="tel:0033769218538"><img class="logo" src="images/telephone.jpeg" title="Me contacter par t&eacute;l&eacute;phone"></a>
    <a href="https://fr.linkedin.com/in/laurent-mafaut-682b473b"><img class="logo" src="images/linkedin.png" title="Consulter mon profil linkedin"></a>


<br><br>
<p class="paragraph"> 
Chef de projet AMOA exp&eacute;riment&eacute;, avec une dominante fonctionnellle, proche et sensible au point de vue de l’utilisateur. je viens de passer la certification ISTQB Foundation, afin de renforcer mes comp&eacute;tences dans le domaine du test et pouvoir int&eacute;grer une &eacute;quipe en tant que testeur logiciel.
</p>
</div>
  <br><br>

<h3 class="grassouligneleft" id="sell">SELL - MARKETING: De novembre 2017 &agrave; f&eacute;v 2024 (Douai - T&eacute;l&eacute;travail)</h3> <br> <br>
  <div class="tabs">

    <div class="tab-registers">
        <button class="active-tab">R&eacute;sum&eacute;</button>
        <button>D&eacute;tails</button>
    </div>

    <div class="tab-bodies">

        <div style="display:block;">

<!--d&eacute;but des contenus-->
<p class="ressere">
<h4 class="ressere">Chef de projets AMOA</h4>
Chef de projets en charge de la mise en place et du test de portails B2B (fournisseurs/adh&eacute;rents)
</p>
        </div>
        <div style="display:none;">
 <ul>
        <li><strong>Sp&eacute;cifier</strong> le traitement des donn&eacute;es client en vue de leur int&eacute;gration <strong>(PIM - FAB DIS)</strong></li>
        <li><strong>Mettre en place et recettage</strong> de portails web fournisseurs/adh&eacute;rents permettant la validation les informations produit par les fournisseurs et leurs utilisations (publications papier et web) par les adh&eacute;rents
    portails web de cr&eacute;ation de catalogues automatis&eacute;s</li>
    Eshops B2B: Pr&eacute;sentation de l&apos;information produit, tunnel de commandes, test des Webservices ERP</li>
    Flux d&apos;int&eacute;gration de fichiers &agrave; la norme FAB-DIS</li>
      <li><strong>G&eacute;rer</strong> l&apos;outil de gestion des incidents, qualification (reproduction, analyse et hi&eacute;rarchisation) des incidents entrants</li>
  </ul>
   
<!--fin des contenus-->
        </div>
    </div>
</div>
<br><br><br>
   <h3 class="grassouligneleft" id="fot" >FOT TECHNOLOGIE: De janvier 2014 &agrave; octobre 2017 (Lille: Euratechnologie)</h3><br><br>

<div class="tabs">

    <div class="tab-registers">
        <button class="active-tab">R&eacute;sum&eacute;</button>
        <button>D&eacute;tails</button>
    </div>

    <div class="tab-bodies">

        <div style="display:block;">

<!--d&eacute;but des contenus-->
<p class="ressere">
  <h4 class="ressere">Chef de projets AMOA</h4>
Mise en place et tests d&apos;un nouveau logiciel de publication en mode agile
</p>
        </div>
        <div style="display:none;">
 <ul>
      <li>Production automatis&eacute;e des catalogues: <strong>Analyser</strong> les catalogues client, <strong>sp&eacute;cifier</strong>, <strong>param&eacute;trer et recetter</strong> les automatismes</li>
      <li><strong>Transformer et int&eacute;grer</strong> les textes et es images</li>
      <li><strong>Valider</strong> fonctionnellement des outils tiers en vue de leur int&eacute;gration &agrave; notre plateforme de production (DAM ELVIS, PIM AKENEO)</li>
      <li><strong>Assurer</strong> une veille technologique</li>
    </ul>
<!--fin des contenus-->
        </div>
    </div>
</div>
<br><br><br>
<h3 class="grassouligneleft" >PERIGEE: De juin 2005 &agrave; d&eacute;cembre 2013 (Lille: Euratechnologie)</h3></a><br><br>


<div class="tabs">

    <div class="tab-registers">
        <button class="active-tab">R&eacute;sum&eacute;</button>
        <button>D&eacute;tails</button>
    </div>

    <div class="tab-bodies">

        <div style="display:block;">

<!--d&eacute;but des contenus-->
<p>
Consultant m&eacute;tier, chef de projets puis coordinateur support applicatif chez un &eacute;diteur de logiciels
</p>
        </div>
        <div style="display:none;">
 
 &Eacute;diteur d&apos;une base de donn&eacute;es textes et images (<strong>PIM et DAM</strong>) permettant l&apos;automatisation de la production des catalogues V.A.D. et B2B  <br>

<h4 class="soulignepadding" >Consultant m&eacute;tier PAO (Publication assist&eacute;e par ordinateur)</h4>
<ul>
 <li><strong>Param&eacute;trer et automatiser</strong> la charte graphique des clients, g&eacute;rer de la production et du stockage des images</li>
</ul>
<h4 class="soulignepadding" >Chef de projets AMOA</h4>
<ul>
<li><strong>Mettre en place</strong> une base de donn&eacute;es textes et images chez le client</li>
<li><strong>Recueillir et analyser</strong> des besoins, r&eacute;pondre aux cahiers des charges, mesurer les &eacute;carts</li>
<li><strong>Animer</strong> les ateliers de sp&eacute;cifications, analyser les demandes faites par les clients internes, r&eacute;diger les comptes rendus de r&eacute;union et les sp&eacute;cifications fonctionnelles</li>
<li><strong>Piloter</strong> les pr&eacute;-&eacute;tudes, mettre au point et pr&eacute;senter des maquettes et les prototypes fonctionnels</li>
<li><strong>Proposer</strong> des mises en place fonctionnelles, des adaptations de processus &laquo; m&eacute;tier &raquo; et des interfaces utilisateur</li>
<li><strong>Documenter</strong> l&apos;application, former et accompagner des utilisateurs clef , mettre en place la conduite du changement</li>
<li><strong>Suivre</strong> de la phase post-production (Support niveau 2), r&eacute;aliser d&apos;une veille</li>
</ul>

Projets clients : Conforama, Altavia, Damart, Castorama,&hellip;<br>
<h4 class="soulignepadding" >Coordinateur support applicatif</h4>
<ul>
<li><strong>Coordonner et faciliter</strong> les &eacute;changes d&apos;informations inter-services (support, marketing et d&eacute;veloppement) pour r&eacute;pondre aux priorit&eacute;s support des clients</li>
</ul>

<!--fin des contenus-->
        </div>
    </div>
</div>
<br><br><br>
  <h3 class="grassouligneleft" id="ddb" >AGENCE DDB LILLE: De d&eacute;cembre 2001 &agrave; mai 2005 (Lille &amp; Lambersart)</h3><br><br>

<div class="tabs">

    <div class="tab-registers">
      <button class="active-tab">R&eacute;sum&eacute;</button>
      <button>D&eacute;tails</button>
    </div>

    <div class="tab-bodies">

        <div style="display:block;">

<!--d&eacute;but des contenus-->
<p class="ressere">
<h4 class="ressere">Responsable informatique</h4>
Gestion de l&apos;informatique de production d&apos;une agence de communication.
</p>
        </div>
        <div style="display:none;">
 <ul>
<li><strong>G&eacute;rer</strong> la fusion de deux agences de publicit&eacute;: Implantation du r&eacute;seau informatique, recherche de fournisseurs, gestion des licences logicielles et du mat&eacute;riel</li>
<li><strong>Mettre en place</strong> (Expression des besoins, param&eacute;trages, tests de validation, formation et accompagnement des utilisateurs, administration) une base de donn&eacute;es textes (PIM) et images (DAM) permettant l&apos;automatisation de la production de d&eacute;pliants publicitaires pour les supermarch&eacute;s Match</li>
<li><strong>Mettre en place</strong> un flux de production et de validation  de prises de vue par le Web</li>
<br>
Projets clients: Vert baudet, Cyrillus<br>

</ul>
</div>
</div>
<br><br><br>
  <div class="fixe">
  <!--DECOSTER-->
  <h3 class="grassouligneleft" id="decoster" >GROUPE IMPRIMERIE DECOSTER: De juin 1989 &agrave; novembre 2001 (Sequedin)</h3><br>
<ul>
  <li>Op&eacute;rateur sur scanner</li>
  <li>Mettre en place les premiers flux de production de d&eacute;pliants publicitaires (Publication Assist&eacute;e par Ordinateur)</li>
  <li>Prescrire et valider les solutions de production pr&eacute;presse</li>
</ul>
<!--fin des contenus-->
        </div>

<br><br><br>
<div class="fixe">
<!--ELECTROLUX-->   
   <h3 class="grassouligneleft" id="electrolux" >GROUPE ELECTROLUX : De mars 1987 &agrave; mai 1989 (Reims &amp; Revin): Technicien de laboratoire</h3>

<ul>
    <li><strong>Mettre en &oelig;uvre</strong> des tests de qualit&eacute;, d&apos;endurance  </li>
    <li><strong> Pr&eacute;parer</strong> des prototypes pour les tests d&apos;homologation  </li>
</ul> 
    </div>
<br><br><br>
<div class="fixe">    
   <!--FORMATIONS et DIVERS-->   
   <h3 class="grassouligneleft" id="divers"> DIVERS</h3>    
    <ul>
      <li>Formations: POEC testeur logiciels – EPSI Lille: Certification ISTQB Foundation<br>D.U.T Mesures physiques (I.U.T. Lille)</li>
      <li>Langue : Anglais lu</li>
      <li>Centres d&apos;int&eacute;r&ecirc;ts : Musique, photographie</li>
    </ul>
    </div>
</body>
</html>