<?php

/* MuseeBilletterieBundle:Formulaire:index.html.twig */
class __TwigTemplate_f52f630323f9cd5064df29ce60afda73b1ced0b2d1c78a6cdb25eacd06bfb416 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("MuseeBilletterieBundle::Layout.html.twig", "MuseeBilletterieBundle:Formulaire:index.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MuseeBilletterieBundle::Layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8f2b4ae966b0d45f58ecd50a78ed324c85481508698828ab47357d3c51e8fff1 = $this->env->getExtension("native_profiler");
        $__internal_8f2b4ae966b0d45f58ecd50a78ed324c85481508698828ab47357d3c51e8fff1->enter($__internal_8f2b4ae966b0d45f58ecd50a78ed324c85481508698828ab47357d3c51e8fff1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MuseeBilletterieBundle:Formulaire:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f2b4ae966b0d45f58ecd50a78ed324c85481508698828ab47357d3c51e8fff1->leave($__internal_8f2b4ae966b0d45f58ecd50a78ed324c85481508698828ab47357d3c51e8fff1_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_874283444f4d696767256f9c17453448bb58bb51ae62adcab9090dfaaf80d674 = $this->env->getExtension("native_profiler");
        $__internal_874283444f4d696767256f9c17453448bb58bb51ae62adcab9090dfaaf80d674->enter($__internal_874283444f4d696767256f9c17453448bb58bb51ae62adcab9090dfaaf80d674_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Billetterie ";
        
        $__internal_874283444f4d696767256f9c17453448bb58bb51ae62adcab9090dfaaf80d674->leave($__internal_874283444f4d696767256f9c17453448bb58bb51ae62adcab9090dfaaf80d674_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d95553ef489df43ee277615490f14eae3f83dc4349301c64a3bc27a145e36c72 = $this->env->getExtension("native_profiler");
        $__internal_d95553ef489df43ee277615490f14eae3f83dc4349301c64a3bc27a145e36c72->enter($__internal_d95553ef489df43ee277615490f14eae3f83dc4349301c64a3bc27a145e36c72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container-fluid\">
       <div class=\"navbar navbar-inverse row\">
            <div class=\"col-lg-12\">
                <div class=\"navbar-header\">
                    <a class=\"navbar-brand\" href=\"#\">Billetterie du Musée du Louvre</a>
                </div>
                <ul class=\"nav navbar-nav\">

                    <li class=\"active\"> <a href=\"#\">Accueil</a> </li>

                    <li> <a href=\"#\">Tarifs</a> </li>
                </ul>

            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-4 col-lg-offset-1\"  id=\"img\">
                <table class=\"table table-bordered table-condensed\">
                    <legend> Tarifs de viste du Musée du Louvre</legend>
                    <tr>
                        <td>Tarif</td>
                        <td>Conditions</td>
                        <td>Prix</td>
                    </tr>
                    <tr>
                        <td>Normal</td>
                        <td>à partir de 12 ans</td>
                        <td>16,00€</td>
                    </tr>
                    <tr>
                        <td>Enfant</td>
                        <td>A partir de 4 ans jusqu'à 12 ans (Gratuit pour les moins de 4 ans)</td>
                        <td>8,00€ </td>
                    </tr>
                    <tr>
                        <td>Sénior</td>
                        <td>à partir de 60 ans </td>
                        <td>12,00€</td>
                    </tr>
                    <tr>
                        <td>Réduit</td>
                        <td>Etudiant, employé du musée, d'un service du Ministère de la Culture, militaire (sur présentation de justificatif)</td>
                        <td>10,00€</td>
                    </tr>
                </table>
                <p> Le musée est ouvert tous les jours sauf le mardi et dimanche (et fermé les 1er mai, 1er novembre et 25 décembre et jours fériés). </p>
            </div>
            <div class=\"col-lg-6\">

                <div class=\"well\">
                    ";
        // line 56
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
                    <legend> Achetez votre billet en ligne et ne perdez plus de temps dans les files d'attentes !</legend>
                    ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
                    <div class=\"form-group\">
                        ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Date de la visite *"));
        echo "
                        ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'errors');
        echo "
                        <div class=\"col-sm-8\">
                            <div class=\"input-group date\" data-provide=\"datepicker\">

                                ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "

                                <div class=\"input-group-addon\">
                                    <span class=\"glyphicon glyphicon-th\"></span>
                                </div>
                            </div>  
                        </div>
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Adresse email *"));
        echo "
                        ";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "
                        <div class=\"col-sm-8\">
                            ";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Type *"));
        echo "
                        ";
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type", array()), 'errors');
        echo "
                        <div class=\"col-sm-8\">
                            

                                ";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "

                              
                            </div>  
                        </div>
                    
                            <div class=\"form-group\">
                        ";
        // line 93
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "quantite", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Quantité *"));
        echo "
                        ";
        // line 94
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "quantite", array()), 'errors');
        echo "
                        <div class=\"col-sm-8\">
                            

                                ";
        // line 98
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "quantite", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "

                              
                            </div>  
                        </div>
                        
                    <div class=\"form-group\">
                        <div class=\"col-sm-12 \">
                            ";
        // line 106
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Suivant", array()), 'widget', array("attr" => array("class" => "btn btn-primary center-block")));
        echo "

                        </div>
                    </div>
                    
                    
                                        
                    <div class=\"form-group\">
                        <div class=\"col-sm-4\">
                            ";
        // line 115
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formV"]) ? $context["formV"] : $this->getContext($context, "formV")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
                            <legend>   Visiteur </legend>
                            ";
        // line 117
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formV"]) ? $context["formV"] : $this->getContext($context, "formV")), 'errors');
        echo "                        

                        </div>
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 122
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formV"]) ? $context["formV"] : $this->getContext($context, "formV")), "nom", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Nom *"));
        echo "
                        ";
        // line 123
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formV"]) ? $context["formV"] : $this->getContext($context, "formV")), "nom", array()), 'errors');
        echo "
                        <div class=\"col-sm-8\">
                            ";
        // line 125
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formV"]) ? $context["formV"] : $this->getContext($context, "formV")), "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 129
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formV"]) ? $context["formV"] : $this->getContext($context, "formV")), "prenom", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Prénom *"));
        echo "
                        ";
        // line 130
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formV"]) ? $context["formV"] : $this->getContext($context, "formV")), "prenom", array()), 'errors');
        echo "
                        <div class=\"col-sm-8\">
                            ";
        // line 132
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formV"]) ? $context["formV"] : $this->getContext($context, "formV")), "prenom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        </div>
                    </div>

                    <div class=\"form-group\">
                        ";
        // line 137
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formV"]) ? $context["formV"] : $this->getContext($context, "formV")), "born", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Date de naissance *"));
        echo "
                        ";
        // line 138
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formV"]) ? $context["formV"] : $this->getContext($context, "formV")), "born", array()), 'errors');
        echo "
                        <div class=\"col-sm-8\">
                            ";
        // line 140
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formV"]) ? $context["formV"] : $this->getContext($context, "formV")), "born", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        </div>
                    </div>
                    <div class=\"form-group\" style=\"text-align:left;\">
                        ";
        // line 144
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formV"]) ? $context["formV"] : $this->getContext($context, "formV")), "tarif_reduit", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Tarif réduit"));
        echo "
                        <div class=\"col-sm-8 \">

                            ";
        // line 147
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formV"]) ? $context["formV"] : $this->getContext($context, "formV")), "tarif_reduit", array()), 'widget', array("attr" => array("class" => "left-block")));
        echo "
                            Je suis étudiant, militaire, employé de Musée ou d'un service du ministère de la culture
                        </div>
                        ";
        // line 150
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formV"]) ? $context["formV"] : $this->getContext($context, "formV")), "tarif_reduit", array()), 'errors');
        echo "
                        ";
        // line 151
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formV"]) ? $context["formV"] : $this->getContext($context, "formV")), 'form_end');
        echo "
                    </div>
                </div>
            </div>


        ";
        
        $__internal_d95553ef489df43ee277615490f14eae3f83dc4349301c64a3bc27a145e36c72->leave($__internal_d95553ef489df43ee277615490f14eae3f83dc4349301c64a3bc27a145e36c72_prof);

    }

    public function getTemplateName()
    {
        return "MuseeBilletterieBundle:Formulaire:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  288 => 151,  284 => 150,  278 => 147,  272 => 144,  265 => 140,  260 => 138,  256 => 137,  248 => 132,  243 => 130,  239 => 129,  232 => 125,  227 => 123,  223 => 122,  215 => 117,  210 => 115,  198 => 106,  187 => 98,  180 => 94,  176 => 93,  166 => 86,  159 => 82,  155 => 81,  148 => 77,  143 => 75,  139 => 74,  127 => 65,  120 => 61,  116 => 60,  111 => 58,  106 => 56,  54 => 6,  48 => 5,  35 => 4,  11 => 3,);
    }
}
/* {# src/Musee/BilletterieBundle/Resources/views/Formulaire/index.html.twig #}*/
/* */
/* {% extends "MuseeBilletterieBundle::Layout.html.twig" %}*/
/* {% block title %}{{ parent() }} - Billetterie {% endblock %}*/
/* {% block body %}*/
/*     <div class="container-fluid">*/
/*        <div class="navbar navbar-inverse row">*/
/*             <div class="col-lg-12">*/
/*                 <div class="navbar-header">*/
/*                     <a class="navbar-brand" href="#">Billetterie du Musée du Louvre</a>*/
/*                 </div>*/
/*                 <ul class="nav navbar-nav">*/
/* */
/*                     <li class="active"> <a href="#">Accueil</a> </li>*/
/* */
/*                     <li> <a href="#">Tarifs</a> </li>*/
/*                 </ul>*/
/* */
/*             </div>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-lg-4 col-lg-offset-1"  id="img">*/
/*                 <table class="table table-bordered table-condensed">*/
/*                     <legend> Tarifs de viste du Musée du Louvre</legend>*/
/*                     <tr>*/
/*                         <td>Tarif</td>*/
/*                         <td>Conditions</td>*/
/*                         <td>Prix</td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <td>Normal</td>*/
/*                         <td>à partir de 12 ans</td>*/
/*                         <td>16,00€</td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <td>Enfant</td>*/
/*                         <td>A partir de 4 ans jusqu'à 12 ans (Gratuit pour les moins de 4 ans)</td>*/
/*                         <td>8,00€ </td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <td>Sénior</td>*/
/*                         <td>à partir de 60 ans </td>*/
/*                         <td>12,00€</td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <td>Réduit</td>*/
/*                         <td>Etudiant, employé du musée, d'un service du Ministère de la Culture, militaire (sur présentation de justificatif)</td>*/
/*                         <td>10,00€</td>*/
/*                     </tr>*/
/*                 </table>*/
/*                 <p> Le musée est ouvert tous les jours sauf le mardi et dimanche (et fermé les 1er mai, 1er novembre et 25 décembre et jours fériés). </p>*/
/*             </div>*/
/*             <div class="col-lg-6">*/
/* */
/*                 <div class="well">*/
/*                     {{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}*/
/*                     <legend> Achetez votre billet en ligne et ne perdez plus de temps dans les files d'attentes !</legend>*/
/*                     {{ form_errors(form) }}*/
/*                     <div class="form-group">*/
/*                         {{ form_label(form.date, "Date de la visite *", {'label_attr': {'class': 'col-sm-4 control-label'}}) }}*/
/*                         {{ form_errors(form.date) }}*/
/*                         <div class="col-sm-8">*/
/*                             <div class="input-group date" data-provide="datepicker">*/
/* */
/*                                 {{ form_widget(form.date, {'attr': {'class': 'form-control'}}) }}*/
/* */
/*                                 <div class="input-group-addon">*/
/*                                     <span class="glyphicon glyphicon-th"></span>*/
/*                                 </div>*/
/*                             </div>  */
/*                         </div>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         {{ form_label(form.email, "Adresse email *", {'label_attr': {'class': 'col-sm-4 control-label'}}) }}*/
/*                         {{ form_errors(form.email) }}*/
/*                         <div class="col-sm-8">*/
/*                             {{ form_widget(form.email, {'attr': {'class': 'form-control'}}) }}*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         {{ form_label(form.type, "Type *", {'label_attr': {'class': 'col-sm-4 control-label'}}) }}*/
/*                         {{ form_errors(form.type) }}*/
/*                         <div class="col-sm-8">*/
/*                             */
/* */
/*                                 {{ form_widget(form.type, {'attr': {'class': 'form-control'}}) }}*/
/* */
/*                               */
/*                             </div>  */
/*                         </div>*/
/*                     */
/*                             <div class="form-group">*/
/*                         {{ form_label(form.quantite, "Quantité *", {'label_attr': {'class': 'col-sm-4 control-label'}}) }}*/
/*                         {{ form_errors(form.quantite) }}*/
/*                         <div class="col-sm-8">*/
/*                             */
/* */
/*                                 {{ form_widget(form.quantite, {'attr': {'class': 'form-control'}}) }}*/
/* */
/*                               */
/*                             </div>  */
/*                         </div>*/
/*                         */
/*                     <div class="form-group">*/
/*                         <div class="col-sm-12 ">*/
/*                             {{ form_widget(form.Suivant, {'attr': {'class': 'btn btn-primary center-block'}}) }}*/
/* */
/*                         </div>*/
/*                     </div>*/
/*                     */
/*                     */
/*                                         */
/*                     <div class="form-group">*/
/*                         <div class="col-sm-4">*/
/*                             {{ form_start(formV, {'attr': {'class': 'form-horizontal'}}) }}*/
/*                             <legend>   Visiteur </legend>*/
/*                             {{ form_errors(formV) }}                        */
/* */
/*                         </div>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         {{ form_label(formV.nom, "Nom *", {'label_attr': {'class': 'col-sm-4 control-label'}}) }}*/
/*                         {{ form_errors(formV.nom) }}*/
/*                         <div class="col-sm-8">*/
/*                             {{ form_widget(formV.nom, {'attr': {'class': 'form-control'}}) }}*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         {{ form_label(formV.prenom, "Prénom *", {'label_attr': {'class': 'col-sm-4 control-label'}}) }}*/
/*                         {{ form_errors(formV.prenom) }}*/
/*                         <div class="col-sm-8">*/
/*                             {{ form_widget(formV.prenom, {'attr': {'class': 'form-control'}}) }}*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="form-group">*/
/*                         {{ form_label(formV.born, "Date de naissance *", {'label_attr': {'class': 'col-sm-4 control-label'}}) }}*/
/*                         {{ form_errors(formV.born) }}*/
/*                         <div class="col-sm-8">*/
/*                             {{ form_widget(formV.born, {'attr': {'class': 'form-control'}}) }}*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="form-group" style="text-align:left;">*/
/*                         {{ form_label(formV.tarif_reduit, "Tarif réduit", {'label_attr': {'class': 'col-sm-4 control-label'}}) }}*/
/*                         <div class="col-sm-8 ">*/
/* */
/*                             {{ form_widget(formV.tarif_reduit, {'attr': {'class': 'left-block'}}) }}*/
/*                             Je suis étudiant, militaire, employé de Musée ou d'un service du ministère de la culture*/
/*                         </div>*/
/*                         {{ form_errors(formV.tarif_reduit) }}*/
/*                         {{ form_end(formV) }}*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/* */
/* */
/*         {% endblock %}*/
/* */
/* */
/* */
