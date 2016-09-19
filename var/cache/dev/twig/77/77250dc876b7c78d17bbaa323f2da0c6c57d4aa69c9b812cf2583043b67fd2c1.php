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
        $__internal_5d5f2afe961dc31bd5276e4818abe83b351717289b4cc879a00332b0348403a5 = $this->env->getExtension("native_profiler");
        $__internal_5d5f2afe961dc31bd5276e4818abe83b351717289b4cc879a00332b0348403a5->enter($__internal_5d5f2afe961dc31bd5276e4818abe83b351717289b4cc879a00332b0348403a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MuseeBilletterieBundle::Layout.html.twig"));

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

   
   
   
\t

  } );
  </script>
    ";
        // line 66
        $this->displayBlock('body', $context, $blocks);
        // line 71
        echo " <script src=\"http://localhost/Symfony/web/bootstrap/js/bootstrap.min.js\"></script>
  </body>
</html>";
        
        $__internal_5d5f2afe961dc31bd5276e4818abe83b351717289b4cc879a00332b0348403a5->leave($__internal_5d5f2afe961dc31bd5276e4818abe83b351717289b4cc879a00332b0348403a5_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4d1d8fb8cf55295cb850858eae5ae3de1a03f0d031820e859ebdbabf61ff24ab = $this->env->getExtension("native_profiler");
        $__internal_4d1d8fb8cf55295cb850858eae5ae3de1a03f0d031820e859ebdbabf61ff24ab->enter($__internal_4d1d8fb8cf55295cb850858eae5ae3de1a03f0d031820e859ebdbabf61ff24ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Musée du Louvre";
        
        $__internal_4d1d8fb8cf55295cb850858eae5ae3de1a03f0d031820e859ebdbabf61ff24ab->leave($__internal_4d1d8fb8cf55295cb850858eae5ae3de1a03f0d031820e859ebdbabf61ff24ab_prof);

    }

    // line 66
    public function block_body($context, array $blocks = array())
    {
        $__internal_f16911ffed1e336a3e75353dba7174b0fcc2b0a50b7d977ab52f01c6c9f5b48f = $this->env->getExtension("native_profiler");
        $__internal_f16911ffed1e336a3e75353dba7174b0fcc2b0a50b7d977ab52f01c6c9f5b48f->enter($__internal_f16911ffed1e336a3e75353dba7174b0fcc2b0a50b7d977ab52f01c6c9f5b48f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 67
        echo "     
\t
\t
    ";
        
        $__internal_f16911ffed1e336a3e75353dba7174b0fcc2b0a50b7d977ab52f01c6c9f5b48f->leave($__internal_f16911ffed1e336a3e75353dba7174b0fcc2b0a50b7d977ab52f01c6c9f5b48f_prof);

    }

    public function getTemplateName()
    {
        return "MuseeBilletterieBundle::Layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  122 => 67,  116 => 66,  104 => 7,  95 => 71,  93 => 66,  31 => 7,  24 => 2,);
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
