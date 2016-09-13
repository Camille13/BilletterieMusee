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
        $__internal_9393a218e4158e74895bcc3cdbdb67025095b6af86a12be2d244727b0dde48e6 = $this->env->getExtension("native_profiler");
        $__internal_9393a218e4158e74895bcc3cdbdb67025095b6af86a12be2d244727b0dde48e6->enter($__internal_9393a218e4158e74895bcc3cdbdb67025095b6af86a12be2d244727b0dde48e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MuseeBilletterieBundle::Layout.html.twig"));

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
   <style>
   .navbar-header a, legend{font-family: \"Dancing Script\";}
#img{background: #000000 url('../img/museeLouvre.jpg') center center; background-size:cover;}

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
        // line 63
        $this->displayBlock('body', $context, $blocks);
        // line 68
        echo " <script src=\"http://localhost/Symfony/web/bootstrap/js/bootstrap.min.js\"></script>
  </body>
</html>";
        
        $__internal_9393a218e4158e74895bcc3cdbdb67025095b6af86a12be2d244727b0dde48e6->leave($__internal_9393a218e4158e74895bcc3cdbdb67025095b6af86a12be2d244727b0dde48e6_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_13fe68fdf42b7d543c4758ef8e6a1dc88bc09f20f77acf5829b0cef1eb6ffda3 = $this->env->getExtension("native_profiler");
        $__internal_13fe68fdf42b7d543c4758ef8e6a1dc88bc09f20f77acf5829b0cef1eb6ffda3->enter($__internal_13fe68fdf42b7d543c4758ef8e6a1dc88bc09f20f77acf5829b0cef1eb6ffda3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Musée du Louvre";
        
        $__internal_13fe68fdf42b7d543c4758ef8e6a1dc88bc09f20f77acf5829b0cef1eb6ffda3->leave($__internal_13fe68fdf42b7d543c4758ef8e6a1dc88bc09f20f77acf5829b0cef1eb6ffda3_prof);

    }

    // line 63
    public function block_body($context, array $blocks = array())
    {
        $__internal_e4d878f9cf125d4f1e78aea3f993cbe9c6978ff0dc6a28bdb4194e25d169fc2a = $this->env->getExtension("native_profiler");
        $__internal_e4d878f9cf125d4f1e78aea3f993cbe9c6978ff0dc6a28bdb4194e25d169fc2a->enter($__internal_e4d878f9cf125d4f1e78aea3f993cbe9c6978ff0dc6a28bdb4194e25d169fc2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 64
        echo "\t
\t
\t
    ";
        
        $__internal_e4d878f9cf125d4f1e78aea3f993cbe9c6978ff0dc6a28bdb4194e25d169fc2a->leave($__internal_e4d878f9cf125d4f1e78aea3f993cbe9c6978ff0dc6a28bdb4194e25d169fc2a_prof);

    }

    public function getTemplateName()
    {
        return "MuseeBilletterieBundle::Layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  119 => 64,  113 => 63,  101 => 7,  92 => 68,  90 => 63,  31 => 7,  24 => 2,);
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
/*    <style>*/
/*    .navbar-header a, legend{font-family: "Dancing Script";}*/
/* #img{background: #000000 url('../img/museeLouvre.jpg') center center; background-size:cover;}*/
/* */
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
/* 	*/
/* 	*/
/* 	*/
/*     {% endblock %}*/
/*  <script src="http://localhost/Symfony/web/bootstrap/js/bootstrap.min.js"></script>*/
/*   </body>*/
/* </html>*/
