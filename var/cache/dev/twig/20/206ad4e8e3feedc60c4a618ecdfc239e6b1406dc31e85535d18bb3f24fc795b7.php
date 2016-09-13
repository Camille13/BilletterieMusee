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
        $__internal_59ca8300b161d22710b43f1f99b85efc4b7ae459cafc3ec0e539ce1b0d7bcdc9 = $this->env->getExtension("native_profiler");
        $__internal_59ca8300b161d22710b43f1f99b85efc4b7ae459cafc3ec0e539ce1b0d7bcdc9->enter($__internal_59ca8300b161d22710b43f1f99b85efc4b7ae459cafc3ec0e539ce1b0d7bcdc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MuseeBilletterieBundle:Formulaire:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_59ca8300b161d22710b43f1f99b85efc4b7ae459cafc3ec0e539ce1b0d7bcdc9->leave($__internal_59ca8300b161d22710b43f1f99b85efc4b7ae459cafc3ec0e539ce1b0d7bcdc9_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_82749fce1dfc5271560e2e53c7b32e6d9d09451857ec9457961fc72c073a5129 = $this->env->getExtension("native_profiler");
        $__internal_82749fce1dfc5271560e2e53c7b32e6d9d09451857ec9457961fc72c073a5129->enter($__internal_82749fce1dfc5271560e2e53c7b32e6d9d09451857ec9457961fc72c073a5129_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Billetterie ";
        
        $__internal_82749fce1dfc5271560e2e53c7b32e6d9d09451857ec9457961fc72c073a5129->leave($__internal_82749fce1dfc5271560e2e53c7b32e6d9d09451857ec9457961fc72c073a5129_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c770bc270621b4e33210ccdea048d89dc2e7a933d3cb6974dead32ab8893c0cd = $this->env->getExtension("native_profiler");
        $__internal_c770bc270621b4e33210ccdea048d89dc2e7a933d3cb6974dead32ab8893c0cd->enter($__internal_c770bc270621b4e33210ccdea048d89dc2e7a933d3cb6974dead32ab8893c0cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        // line 57
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal", "method" => "GET")));
        echo "
                   ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'row');
        echo "
                    <legend> Achetez votre billet en ligne et ne perdez plus de temps dans les files d'attentes !</legend>
                    ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
                    <div class=\"form-group\">
                        ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Date de la visite *"));
        echo "
                        ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'errors');
        echo "
                        <div class=\"col-sm-8\">
                            <div class=\"input-group date\" data-provide=\"datepicker\">

                                ";
        // line 67
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
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Adresse email *"));
        echo "
                        ";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "
                        <div class=\"col-sm-8\">
                            ";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Type *"));
        echo "
                        ";
        // line 84
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type", array()), 'errors');
        echo "
                        <div class=\"col-sm-8\">
                            

                                ";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "

                              
                            </div>  
                        </div>
                    
                            <div class=\"form-group\">
                        ";
        // line 95
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "quantite", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Quantité *"));
        echo "
                        ";
        // line 96
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "quantite", array()), 'errors');
        echo "
                        <div class=\"col-sm-8\">
                            

                                ";
        // line 100
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "quantite", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "

                              
                            </div>  
                        </div>
                        
                    <div class=\"form-group\">
                        <div class=\"col-sm-12 \">
                            ";
        // line 108
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Suivant", array()), 'widget', array("attr" => array("class" => "btn btn-primary center-block")));
        echo "

                        </div>
                    </div>
                    
                        ";
        // line 113
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ligneCommande", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["ligneCommande"]) {
            // line 114
            echo "     
                            
                        <div class=\"form-group\"><div class=\"col-sm-4\"><legend>   Visiteur  ";
            // line 116
            echo twig_escape_filter($this->env, (isset($context["init"]) ? $context["init"] : $this->getContext($context, "init")), "html", null, true);
            echo " ";
            $context["init"] = ((isset($context["init"]) ? $context["init"] : $this->getContext($context, "init")) + 1);
            echo " </legend></div> </div>    
                                     
                    <div class=\"form-group\">
                        ";
            // line 119
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["ligneCommande"], "nom", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Nom *"));
            echo "
                        ";
            // line 120
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["ligneCommande"], "nom", array()), 'errors');
            echo "
                        <div class=\"col-sm-8\">
                            ";
            // line 122
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["ligneCommande"], "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
                        </div>
                    </div>
   
                   
                    <div class=\"form-group\">
                        ";
            // line 128
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["ligneCommande"], "prenom", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Prénom *"));
            echo "
                        ";
            // line 129
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["ligneCommande"], "prenom", array()), 'errors');
            echo "
                        <div class=\"col-sm-8\">
                            ";
            // line 131
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["ligneCommande"], "prenom", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
                        </div>
                    </div>

                    <div class=\"form-group\">
                        ";
            // line 136
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["ligneCommande"], "born", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Date de naissance *"));
            echo "
                        ";
            // line 137
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["ligneCommande"], "born", array()), 'errors');
            echo "
                        <div class=\"col-sm-8\">
                            ";
            // line 139
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["ligneCommande"], "born", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
                        </div>
                    </div>
                    <div class=\"form-group\" style=\"text-align:left;\">
                        ";
            // line 143
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["ligneCommande"], "tarif_reduit", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Tarif réduit"));
            echo "
                        <div class=\"col-sm-8 \">

                            ";
            // line 146
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["ligneCommande"], "tarif_reduit", array()), 'widget', array("attr" => array("class" => "left-block")));
            echo "
                            Je suis étudiant, militaire, employé de Musée ou d'un service du ministère de la culture
                        </div>
                        ";
            // line 149
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["ligneCommande"], "tarif_reduit", array()), 'errors');
            echo "
                  
                    </div>
                    
                    
                    
                    
                         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ligneCommande'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 157
        echo "             ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end', array("render_rest" => false));
        echo "
                </div>
            </div>


        ";
        
        $__internal_c770bc270621b4e33210ccdea048d89dc2e7a933d3cb6974dead32ab8893c0cd->leave($__internal_c770bc270621b4e33210ccdea048d89dc2e7a933d3cb6974dead32ab8893c0cd_prof);

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
        return array (  304 => 157,  290 => 149,  284 => 146,  278 => 143,  271 => 139,  266 => 137,  262 => 136,  254 => 131,  249 => 129,  245 => 128,  236 => 122,  231 => 120,  227 => 119,  219 => 116,  215 => 114,  211 => 113,  203 => 108,  192 => 100,  185 => 96,  181 => 95,  171 => 88,  164 => 84,  160 => 83,  153 => 79,  148 => 77,  144 => 76,  132 => 67,  125 => 63,  121 => 62,  116 => 60,  111 => 58,  107 => 57,  54 => 6,  48 => 5,  35 => 4,  11 => 3,);
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
/*                     */
/*                     {{ form_start(form, { 'attr': {'class': 'form-horizontal', 'method': 'GET'} }) }}*/
/*                    {{ form_row(form._token) }}*/
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
/*                         {% for ligneCommande in form.ligneCommande %}*/
/*      */
/*                             */
/*                         <div class="form-group"><div class="col-sm-4"><legend>   Visiteur  {{init}} {% set init = init + 1 %} </legend></div> </div>    */
/*                                      */
/*                     <div class="form-group">*/
/*                         {{ form_label(ligneCommande.nom, "Nom *", {'label_attr': {'class': 'col-sm-4 control-label'}}) }}*/
/*                         {{ form_errors(ligneCommande.nom) }}*/
/*                         <div class="col-sm-8">*/
/*                             {{ form_widget(ligneCommande.nom, {'attr': {'class': 'form-control'}}) }}*/
/*                         </div>*/
/*                     </div>*/
/*    */
/*                    */
/*                     <div class="form-group">*/
/*                         {{ form_label(ligneCommande.prenom, "Prénom *", {'label_attr': {'class': 'col-sm-4 control-label'}}) }}*/
/*                         {{ form_errors(ligneCommande.prenom) }}*/
/*                         <div class="col-sm-8">*/
/*                             {{ form_widget(ligneCommande.prenom, {'attr': {'class': 'form-control'}}) }}*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="form-group">*/
/*                         {{ form_label(ligneCommande.born, "Date de naissance *", {'label_attr': {'class': 'col-sm-4 control-label'}}) }}*/
/*                         {{ form_errors(ligneCommande.born) }}*/
/*                         <div class="col-sm-8">*/
/*                             {{ form_widget(ligneCommande.born, {'attr': {'class': 'form-control'}}) }}*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="form-group" style="text-align:left;">*/
/*                         {{ form_label(ligneCommande.tarif_reduit, "Tarif réduit", {'label_attr': {'class': 'col-sm-4 control-label'}}) }}*/
/*                         <div class="col-sm-8 ">*/
/* */
/*                             {{ form_widget(ligneCommande.tarif_reduit, {'attr': {'class': 'left-block'}}) }}*/
/*                             Je suis étudiant, militaire, employé de Musée ou d'un service du ministère de la culture*/
/*                         </div>*/
/*                         {{ form_errors(ligneCommande.tarif_reduit) }}*/
/*                   */
/*                     </div>*/
/*                     */
/*                     */
/*                     */
/*                     */
/*                          {% endfor %}*/
/*              {{ form_end(form, {'render_rest': false}) }}*/
/*                 </div>*/
/*             </div>*/
/* */
/* */
/*         {% endblock %}*/
/* */
/* */
/* */
