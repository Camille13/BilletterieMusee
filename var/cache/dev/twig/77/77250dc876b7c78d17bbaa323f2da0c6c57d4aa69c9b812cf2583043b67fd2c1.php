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
        $__internal_cc1e30cf5b8a9dbd3b47f8fed57c420ad776c8578595e802e3b504bba6892eb3 = $this->env->getExtension("native_profiler");
        $__internal_cc1e30cf5b8a9dbd3b47f8fed57c420ad776c8578595e802e3b504bba6892eb3->enter($__internal_cc1e30cf5b8a9dbd3b47f8fed57c420ad776c8578595e802e3b504bba6892eb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MuseeBilletterieBundle::Layout.html.twig"));

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
<link href=\"http://localhost/Symfony/web/css/css_general.css\" rel=\"stylesheet\">
 <link rel=\"stylesheet\" type=\"text/css\" href=\"http://fonts.googleapis.com/css?family=Dancing+Script\">
 <link href=\"https://fonts.googleapis.com/css?family=Niconne\" rel=\"stylesheet\"> 
 <link href=\"https://fonts.googleapis.com/css?family=Lobster+Two\" rel=\"stylesheet\"> 
 <link href=\"https://fonts.googleapis.com/css?family=Josefin+Slab\" rel=\"stylesheet\"> 
 <link href=\"https://fonts.googleapis.com/css?family=Great+Vibes\" rel=\"stylesheet\"> 
   <style>

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

   } );
  </script>
   <div class=\"container-fluid\">
     <div class=\"navbar navbar-inverse row \">
            <div class=\"col-lg-12\">
                <div class=\"navbar-header\">
                    <a class=\"navbar-brand\" href=\"#\">Musée du Louvre Paris</a>
                </div>
                <ul class=\"nav navbar-nav \">

                    <li class=\"active\"> <a href=\"#\" class=\"glyphicon glyphicon-home\"></a> </li>

                    <li> <a href=\"#billetterie\">Billetterie</a> </li>
                    <li> <a href=\"#tarifs\">Tarifs</a> </li>
                    <li> <a href=\"#infos\">Informations pratiques</a> </li>
                </ul>

            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-6 col-lg-offset-3\">
                <h1>Le Musée du Louvre</h1>
                <h4>Découvrez le plus grand musée du monde </h4>
            </div>
        </div>
 
  
  ";
        // line 85
        $this->displayBlock('body', $context, $blocks);
        // line 88
        echo "    
  </div>
 <script src=\"http://localhost/Symfony/web/bootstrap/js/bootstrap.min.js\"></script>
  </body>
</html>";
        
        $__internal_cc1e30cf5b8a9dbd3b47f8fed57c420ad776c8578595e802e3b504bba6892eb3->leave($__internal_cc1e30cf5b8a9dbd3b47f8fed57c420ad776c8578595e802e3b504bba6892eb3_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_99fae94a696085881eac84cf2652f850440298576f476b2e029918e1bd0e1be8 = $this->env->getExtension("native_profiler");
        $__internal_99fae94a696085881eac84cf2652f850440298576f476b2e029918e1bd0e1be8->enter($__internal_99fae94a696085881eac84cf2652f850440298576f476b2e029918e1bd0e1be8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Musée du Louvre";
        
        $__internal_99fae94a696085881eac84cf2652f850440298576f476b2e029918e1bd0e1be8->leave($__internal_99fae94a696085881eac84cf2652f850440298576f476b2e029918e1bd0e1be8_prof);

    }

    // line 85
    public function block_body($context, array $blocks = array())
    {
        $__internal_5a75ae068c8bed4dcfe7b52a189966248968a0d804320473914b68f46c8791a2 = $this->env->getExtension("native_profiler");
        $__internal_5a75ae068c8bed4dcfe7b52a189966248968a0d804320473914b68f46c8791a2->enter($__internal_5a75ae068c8bed4dcfe7b52a189966248968a0d804320473914b68f46c8791a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 86
        echo "
    ";
        
        $__internal_5a75ae068c8bed4dcfe7b52a189966248968a0d804320473914b68f46c8791a2->leave($__internal_5a75ae068c8bed4dcfe7b52a189966248968a0d804320473914b68f46c8791a2_prof);

    }

    public function getTemplateName()
    {
        return "MuseeBilletterieBundle::Layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  143 => 86,  137 => 85,  125 => 7,  114 => 88,  112 => 85,  31 => 7,  24 => 2,);
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
/* <link href="http://localhost/Symfony/web/css/css_general.css" rel="stylesheet">*/
/*  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Dancing+Script">*/
/*  <link href="https://fonts.googleapis.com/css?family=Niconne" rel="stylesheet"> */
/*  <link href="https://fonts.googleapis.com/css?family=Lobster+Two" rel="stylesheet"> */
/*  <link href="https://fonts.googleapis.com/css?family=Josefin+Slab" rel="stylesheet"> */
/*  <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet"> */
/*    <style>*/
/* */
/* </style>*/
/*   <body>*/
/*   <script src="https://code.jquery.com/jquery-1.12.4.js"></script>*/
/*   <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>*/
/*   <script>*/
/*   */
/*   */
/* */
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
/*    } );*/
/*   </script>*/
/*    <div class="container-fluid">*/
/*      <div class="navbar navbar-inverse row ">*/
/*             <div class="col-lg-12">*/
/*                 <div class="navbar-header">*/
/*                     <a class="navbar-brand" href="#">Musée du Louvre Paris</a>*/
/*                 </div>*/
/*                 <ul class="nav navbar-nav ">*/
/* */
/*                     <li class="active"> <a href="#" class="glyphicon glyphicon-home"></a> </li>*/
/* */
/*                     <li> <a href="#billetterie">Billetterie</a> </li>*/
/*                     <li> <a href="#tarifs">Tarifs</a> </li>*/
/*                     <li> <a href="#infos">Informations pratiques</a> </li>*/
/*                 </ul>*/
/* */
/*             </div>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-lg-6 col-lg-offset-3">*/
/*                 <h1>Le Musée du Louvre</h1>*/
/*                 <h4>Découvrez le plus grand musée du monde </h4>*/
/*             </div>*/
/*         </div>*/
/*  */
/*   */
/*   {% block body %}*/
/* */
/*     {% endblock %}*/
/*     */
/*   </div>*/
/*  <script src="http://localhost/Symfony/web/bootstrap/js/bootstrap.min.js"></script>*/
/*   </body>*/
/* </html>*/
