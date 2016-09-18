<?php

/* MuseeBilletterieBundle::Layout.html.twig */
class __TwigTemplate_7d17cf5596a67b7c8020141ff264f7fdec92259b2f4a7309ee14c5a582d0801e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_43489cf14cfe20b52f1318727a18f7f1f7f8f24154cd364b2152e81ca3438c86 = $this->env->getExtension("native_profiler");
        $__internal_43489cf14cfe20b52f1318727a18f7f1f7f8f24154cd364b2152e81ca3438c86->enter($__internal_43489cf14cfe20b52f1318727a18f7f1f7f8f24154cd364b2152e81ca3438c86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MuseeBilletterieBundle::Layout.html.twig"));

        // line 2
        echo "
<!DOCTYPE HTML>
<html>
  <head>
    <meta charset=\"utf-8\">
    <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
  </head>
    <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css\">
<link href=\"http://localhost/Symfony/web/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">
 <link rel=\"stylesheet\" type=\"text/css\" href=\"http://fonts.googleapis.com/css?family=Dancing+Script\">
 <link href=\"https://fonts.googleapis.com/css?family=Niconne\" rel=\"stylesheet\"> 
 <link href=\"https://fonts.googleapis.com/css?family=Lobster+Two\" rel=\"stylesheet\"> 
 <link href=\"https://fonts.googleapis.com/css?family=Josefin+Slab\" rel=\"stylesheet\"> 
 <link href=\"https://fonts.googleapis.com/css?family=Great+Vibes\" rel=\"stylesheet\"> 
   <style>
   .navbar-header a, legend{font-family: \"Great Vibes\"; font-weight:bold; font-size:25px; }
.container-fluid {background: #000000 url('../img/museeLouvre.jpg') center 50px no-repeat; background-size:cover; height:100%;}
body{background-color: #222;}
h1, h4{ text-align:center; text-shadow: 4px 1px rgb(245, 245, 245); }
h2{ text-align:center; text-shadow: 4px 1px rgb(245, 245, 245); font-family: \"Great Vibes\";}
h5{text-align:center; }
legend .text-muted {font-family: \"Helvetica Neue\",Helvetica,Arial,sans-serif; font-size:12px; }
h1{font-family: \"Great Vibes\";  font-weight:bold; text-shadow: 2px 1px rgb(245, 245, 245); font-size:3.5em; margin-bottom: 0; }
h4{margin-bottom:35px; text-shadow: 1px 1px rgb(245, 245, 245); padding-top:0; margin-top: 0;}
.well{background-color:rgba(245, 245, 245, 0.8);
 text-shadow: 1px 1px rgb(245, 245, 245);}
iframe{padding-bottom:25px; }
th{text-align: center;}
</style>
  <body>
  <script src=\"https://code.jquery.com/jquery-1.12.4.js\"></script>
  <script src=\"https://code.jquery.com/ui/1.12.0/jquery-ui.js\"></script>
  <script>
  
  
  
 
function DisableSpecificDates(date) {
 var m = date.getMonth();
 var d = date.getDate();
 var day = date.getDay();
if(d == 1 && (m == 4 || m == 10)){   return [false] ;  } else { 
if(d == 25 && m == 11){   return [false] ;  } else {
if(day == 0){   return [false] ;  } else { 
if(day == 2){  return [false] ;  } else {  return [true] ; }
}}}}

\$( function() {

\$( \"#form_billetterie_general_date\" ).datepicker({
altField: \"#form_billetterie_general_date\",
closeText: 'Fermer',
prevText: 'Précédent',
nextText: 'Suivant',
firstDay: 1 ,
currentText: 'Aujourd\\'hui',
monthNames: ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'],
monthNamesShort: ['Janv.', 'Févr.', 'Mars', 'Avril', 'Mai', 'Juin', 'Juil.', 'Août', 'Sept.', 'Oct.', 'Nov.', 'Déc.'],
dayNames: ['Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi'],
dayNamesShort: ['Dim.', 'Lun.', 'Mar.', 'Mer.', 'Jeu.', 'Ven.', 'Sam.'],
dayNamesMin: ['D', 'L', 'M', 'M', 'J', 'V', 'S'],
weekHeader: 'Sem.',
dateFormat: 'yy-mm-dd',
minDate: -0, 
maxDate: \"+12M +0D\",
beforeShowDay: DisableSpecificDates
});

   
   
   
\t

  } );
  </script>
    ";
        // line 77
        $this->displayBlock('body', $context, $blocks);
        // line 82
        echo " <script src=\"http://localhost/Symfony/web/bootstrap/js/bootstrap.min.js\"></script>
  </body>
</html>";
        
        $__internal_43489cf14cfe20b52f1318727a18f7f1f7f8f24154cd364b2152e81ca3438c86->leave($__internal_43489cf14cfe20b52f1318727a18f7f1f7f8f24154cd364b2152e81ca3438c86_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_fc5ed85a9697cdc80c44cae7710edc99a132303ce52d26904b4dbd3fb8afb0fa = $this->env->getExtension("native_profiler");
        $__internal_fc5ed85a9697cdc80c44cae7710edc99a132303ce52d26904b4dbd3fb8afb0fa->enter($__internal_fc5ed85a9697cdc80c44cae7710edc99a132303ce52d26904b4dbd3fb8afb0fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Musée du Louvre";
        
        $__internal_fc5ed85a9697cdc80c44cae7710edc99a132303ce52d26904b4dbd3fb8afb0fa->leave($__internal_fc5ed85a9697cdc80c44cae7710edc99a132303ce52d26904b4dbd3fb8afb0fa_prof);

    }

    // line 77
    public function block_body($context, array $blocks = array())
    {
        $__internal_fbb3e8f379dfde3372786a8293855d0614fb914b9571a15def628441a591c2a6 = $this->env->getExtension("native_profiler");
        $__internal_fbb3e8f379dfde3372786a8293855d0614fb914b9571a15def628441a591c2a6->enter($__internal_fbb3e8f379dfde3372786a8293855d0614fb914b9571a15def628441a591c2a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 78
        echo "     
\t
\t
    ";
        
        $__internal_fbb3e8f379dfde3372786a8293855d0614fb914b9571a15def628441a591c2a6->leave($__internal_fbb3e8f379dfde3372786a8293855d0614fb914b9571a15def628441a591c2a6_prof);

    }

    public function getTemplateName()
    {
        return "MuseeBilletterieBundle::Layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  133 => 78,  127 => 77,  115 => 7,  106 => 82,  104 => 77,  31 => 7,  24 => 2,);
    }
}
/* {# src/Musee/BilletterieBundle/Resources/views/layout.html.twig #}*/
/* */
/* <!DOCTYPE HTML>*/
/* <html>*/
/*   <head>*/
/*     <meta charset="utf-8">*/
/*     <title>{% block title %}Musée du Louvre{% endblock %}</title>*/
/*   </head>*/
/*     <link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">*/
/* <link href="http://localhost/Symfony/web/bootstrap/css/bootstrap.min.css" rel="stylesheet">*/
/*  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Dancing+Script">*/
/*  <link href="https://fonts.googleapis.com/css?family=Niconne" rel="stylesheet"> */
/*  <link href="https://fonts.googleapis.com/css?family=Lobster+Two" rel="stylesheet"> */
/*  <link href="https://fonts.googleapis.com/css?family=Josefin+Slab" rel="stylesheet"> */
/*  <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet"> */
/*    <style>*/
/*    .navbar-header a, legend{font-family: "Great Vibes"; font-weight:bold; font-size:25px; }*/
/* .container-fluid {background: #000000 url('../img/museeLouvre.jpg') center 50px no-repeat; background-size:cover; height:100%;}*/
/* body{background-color: #222;}*/
/* h1, h4{ text-align:center; text-shadow: 4px 1px rgb(245, 245, 245); }*/
/* h2{ text-align:center; text-shadow: 4px 1px rgb(245, 245, 245); font-family: "Great Vibes";}*/
/* h5{text-align:center; }*/
/* legend .text-muted {font-family: "Helvetica Neue",Helvetica,Arial,sans-serif; font-size:12px; }*/
/* h1{font-family: "Great Vibes";  font-weight:bold; text-shadow: 2px 1px rgb(245, 245, 245); font-size:3.5em; margin-bottom: 0; }*/
/* h4{margin-bottom:35px; text-shadow: 1px 1px rgb(245, 245, 245); padding-top:0; margin-top: 0;}*/
/* .well{background-color:rgba(245, 245, 245, 0.8);*/
/*  text-shadow: 1px 1px rgb(245, 245, 245);}*/
/* iframe{padding-bottom:25px; }*/
/* th{text-align: center;}*/
/* </style>*/
/*   <body>*/
/*   <script src="https://code.jquery.com/jquery-1.12.4.js"></script>*/
/*   <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>*/
/*   <script>*/
/*   */
/*   */
/*   */
/*  */
/* function DisableSpecificDates(date) {*/
/*  var m = date.getMonth();*/
/*  var d = date.getDate();*/
/*  var day = date.getDay();*/
/* if(d == 1 && (m == 4 || m == 10)){   return [false] ;  } else { */
/* if(d == 25 && m == 11){   return [false] ;  } else {*/
/* if(day == 0){   return [false] ;  } else { */
/* if(day == 2){  return [false] ;  } else {  return [true] ; }*/
/* }}}}*/
/* */
/* $( function() {*/
/* */
/* $( "#form_billetterie_general_date" ).datepicker({*/
/* altField: "#form_billetterie_general_date",*/
/* closeText: 'Fermer',*/
/* prevText: 'Précédent',*/
/* nextText: 'Suivant',*/
/* firstDay: 1 ,*/
/* currentText: 'Aujourd\'hui',*/
/* monthNames: ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'],*/
/* monthNamesShort: ['Janv.', 'Févr.', 'Mars', 'Avril', 'Mai', 'Juin', 'Juil.', 'Août', 'Sept.', 'Oct.', 'Nov.', 'Déc.'],*/
/* dayNames: ['Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi'],*/
/* dayNamesShort: ['Dim.', 'Lun.', 'Mar.', 'Mer.', 'Jeu.', 'Ven.', 'Sam.'],*/
/* dayNamesMin: ['D', 'L', 'M', 'M', 'J', 'V', 'S'],*/
/* weekHeader: 'Sem.',*/
/* dateFormat: 'yy-mm-dd',*/
/* minDate: -0, */
/* maxDate: "+12M +0D",*/
/* beforeShowDay: DisableSpecificDates*/
/* });*/
/* */
/*    */
/*    */
/*    */
/* 	*/
/* */
/*   } );*/
/*   </script>*/
/*     {% block body %}*/
/*      */
/* 	*/
/* 	*/
/*     {% endblock %}*/
/*  <script src="http://localhost/Symfony/web/bootstrap/js/bootstrap.min.js"></script>*/
/*   </body>*/
/* </html>*/
