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
        $__internal_d14714384282683cc1c9c9f3bf1dd4ca4dfc8b47210a33c969814677bd642f1a = $this->env->getExtension("native_profiler");
        $__internal_d14714384282683cc1c9c9f3bf1dd4ca4dfc8b47210a33c969814677bd642f1a->enter($__internal_d14714384282683cc1c9c9f3bf1dd4ca4dfc8b47210a33c969814677bd642f1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MuseeBilletterieBundle:Formulaire:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d14714384282683cc1c9c9f3bf1dd4ca4dfc8b47210a33c969814677bd642f1a->leave($__internal_d14714384282683cc1c9c9f3bf1dd4ca4dfc8b47210a33c969814677bd642f1a_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_7a1bac057f2663d3a02e42837018adb5af87a99b4f2bb7a322200c3e46e19a60 = $this->env->getExtension("native_profiler");
        $__internal_7a1bac057f2663d3a02e42837018adb5af87a99b4f2bb7a322200c3e46e19a60->enter($__internal_7a1bac057f2663d3a02e42837018adb5af87a99b4f2bb7a322200c3e46e19a60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Billetterie ";
        
        $__internal_7a1bac057f2663d3a02e42837018adb5af87a99b4f2bb7a322200c3e46e19a60->leave($__internal_7a1bac057f2663d3a02e42837018adb5af87a99b4f2bb7a322200c3e46e19a60_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_653ab0b13eeb04bde60b317b96b8331ab6bb724e4af75ca62b25543175b33760 = $this->env->getExtension("native_profiler");
        $__internal_653ab0b13eeb04bde60b317b96b8331ab6bb724e4af75ca62b25543175b33760->enter($__internal_653ab0b13eeb04bde60b317b96b8331ab6bb724e4af75ca62b25543175b33760_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            <div class=\"col-lg-6 col-lg-offset-3\">
                <h1>Le Musée du Louvre</h1>
                <h4>Découvrez le plus grand musée du monde </h4>
            </div>
        </div>
        <div class=\"row\">

            <div class=\"col-md-7 col-md-offset-1\">
 
                
                
                
                
                <div class=\"well col-md-12\">
                    
                     
                             <legend> Billetterie en ligne  <p class=\"text-muted\"> Achetez votre billet en ligne et ne perdez plus de temps dans les files d'attentes !</p></legend>

                    ";
        // line 40
        if (array_key_exists("form", $context)) {
            // line 41
            echo "                    
                    
                    
                    ";
            // line 44
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal", "method" => "GET")));
            echo "
                    ";
            // line 45
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'row');
            echo "
                   
                    ";
            // line 47
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            echo "
                    <div class=\"form-group\">
                        ";
            // line 49
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Date de la visite *"));
            echo "
                        ";
            // line 50
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'errors');
            echo "
                        <div class=\"col-sm-8\">
                            <div class=\"input-group date\" data-provide=\"datepicker\">

                                ";
            // line 54
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
            // line 63
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Adresse email *"));
            echo "
                        ";
            // line 64
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
            echo "
                        <div class=\"col-sm-8\">
                            ";
            // line 66
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        ";
            // line 70
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Type *"));
            echo "
                        ";
            // line 71
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type", array()), 'errors');
            echo "
                        <div class=\"col-sm-8\">


                            ";
            // line 75
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "


                        </div>  
                    </div>

                    <div class=\"form-group\">
                        ";
            // line 82
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "quantite", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Quantité *"));
            echo "
                        ";
            // line 83
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "quantite", array()), 'errors');
            echo "
                        <div class=\"col-sm-8\">


                            ";
            // line 87
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "quantite", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "


                        </div>  
                    </div>

                    <div class=\"form-group\">
                        <div class=\"col-sm-12 \">
                            ";
            // line 95
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Valider", array()), 'widget', array("attr" => array("class" => "btn btn-primary center-block")));
            echo "

                        </div>
                    </div>


                    ";
            // line 101
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end', array("render_rest" => false));
            echo "
                    
                    
                  
                    ";
        } else {
            // line 106
            echo "                        
                        
                      Vos billets vous ont été envoyé à l'adresse email 
                        ";
        }
        // line 110
        echo "                    
                </div>
                
                
                
                
         




                <div class=\"well col-md-12\">
                    <table class=\"table table-bordered table-striped \">
                        <legend> Nos tarifs</legend>
                        
                         <thead class=\"thead-inverse\">
                        <tr>
                            <th>Tarif</th>
                            <th>Conditions</th>
                            <th>Prix</th>
                        </tr>
                         </thead>
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
                   
                </div>
       
        </div>
           
                
                <div class=\"col-md-3\" >
        <div class=\"well\">
            <legend>Informations pratiques</legend>
<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.8741023651355!2d2.335455315921311!3d48.86061107928778!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e671d877937b0f%3A0xb975fcfa192f84d4!2sMus%C3%A9e+du+Louvre!5e0!3m2!1sfr!2sfr!4v1474230651863\" 
        width=\"100%\" height=\"412\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>
        
        
        
        <p><strong>  Adresse :</strong> Musée du Louvre, 75058 Paris - France</p>
        <p><strong>  Téléphone :</strong> + 33 (0)1 40 20 53 17</p>
        <p><strong>  Horaires :</strong> Ouvert tous les jours de 9h à 18h sauf le mardi et le dimanche</p>
        <p><strong>  Fermetures :</strong> Les  1er mai, 1 novembre, 25 décembre et jours fériés</p>





</div>
</div>  
                
                
                
                
        </div>
    

    </div>
";
        
        $__internal_653ab0b13eeb04bde60b317b96b8331ab6bb724e4af75ca62b25543175b33760->leave($__internal_653ab0b13eeb04bde60b317b96b8331ab6bb724e4af75ca62b25543175b33760_prof);

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
        return array (  216 => 110,  210 => 106,  202 => 101,  193 => 95,  182 => 87,  175 => 83,  171 => 82,  161 => 75,  154 => 71,  150 => 70,  143 => 66,  138 => 64,  134 => 63,  122 => 54,  115 => 50,  111 => 49,  106 => 47,  101 => 45,  97 => 44,  92 => 41,  90 => 40,  54 => 6,  48 => 5,  35 => 4,  11 => 3,);
    }
}
/* {# src/Musee/BilletterieBundle/Resources/views/Formulaire/index.html.twig #}*/
/* */
/* {% extends "MuseeBilletterieBundle::Layout.html.twig" %}*/
/* {% block title %}{{ parent() }} - Billetterie {% endblock %}*/
/* {% block body %}*/
/*     <div class="container-fluid">*/
/*         <div class="navbar navbar-inverse row">*/
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
/*             <div class="col-lg-6 col-lg-offset-3">*/
/*                 <h1>Le Musée du Louvre</h1>*/
/*                 <h4>Découvrez le plus grand musée du monde </h4>*/
/*             </div>*/
/*         </div>*/
/*         <div class="row">*/
/* */
/*             <div class="col-md-7 col-md-offset-1">*/
/*  */
/*                 */
/*                 */
/*                 */
/*                 */
/*                 <div class="well col-md-12">*/
/*                     */
/*                      */
/*                              <legend> Billetterie en ligne  <p class="text-muted"> Achetez votre billet en ligne et ne perdez plus de temps dans les files d'attentes !</p></legend>*/
/* */
/*                     {% if form is defined %}*/
/*                     */
/*                     */
/*                     */
/*                     {{ form_start(form, { 'attr': {'class': 'form-horizontal', 'method': 'GET'} }) }}*/
/*                     {{ form_row(form._token) }}*/
/*                    */
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
/* */
/* */
/*                             {{ form_widget(form.type, {'attr': {'class': 'form-control'}}) }}*/
/* */
/* */
/*                         </div>  */
/*                     </div>*/
/* */
/*                     <div class="form-group">*/
/*                         {{ form_label(form.quantite, "Quantité *", {'label_attr': {'class': 'col-sm-4 control-label'}}) }}*/
/*                         {{ form_errors(form.quantite) }}*/
/*                         <div class="col-sm-8">*/
/* */
/* */
/*                             {{ form_widget(form.quantite, {'attr': {'class': 'form-control'}}) }}*/
/* */
/* */
/*                         </div>  */
/*                     </div>*/
/* */
/*                     <div class="form-group">*/
/*                         <div class="col-sm-12 ">*/
/*                             {{ form_widget(form.Valider, {'attr': {'class': 'btn btn-primary center-block'}}) }}*/
/* */
/*                         </div>*/
/*                     </div>*/
/* */
/* */
/*                     {{ form_end(form, {'render_rest': false}) }}*/
/*                     */
/*                     */
/*                   */
/*                     {% else %}*/
/*                         */
/*                         */
/*                       Vos billets vous ont été envoyé à l'adresse email */
/*                         {% endif %}*/
/*                     */
/*                 </div>*/
/*                 */
/*                 */
/*                 */
/*                 */
/*          */
/* */
/* */
/* */
/* */
/*                 <div class="well col-md-12">*/
/*                     <table class="table table-bordered table-striped ">*/
/*                         <legend> Nos tarifs</legend>*/
/*                         */
/*                          <thead class="thead-inverse">*/
/*                         <tr>*/
/*                             <th>Tarif</th>*/
/*                             <th>Conditions</th>*/
/*                             <th>Prix</th>*/
/*                         </tr>*/
/*                          </thead>*/
/*                         <tr>*/
/*                             <td>Normal</td>*/
/*                             <td>à partir de 12 ans</td>*/
/*                             <td>16,00€</td>*/
/*                         </tr>*/
/*                         <tr>*/
/*                             <td>Enfant</td>*/
/*                             <td>A partir de 4 ans jusqu'à 12 ans (Gratuit pour les moins de 4 ans)</td>*/
/*                             <td>8,00€ </td>*/
/*                         </tr>*/
/*                         <tr>*/
/*                             <td>Sénior</td>*/
/*                             <td>à partir de 60 ans </td>*/
/*                             <td>12,00€</td>*/
/*                         </tr>*/
/*                         <tr>*/
/*                             <td>Réduit</td>*/
/*                             <td>Etudiant, employé du musée, d'un service du Ministère de la Culture, militaire (sur présentation de justificatif)</td>*/
/*                             <td>10,00€</td>*/
/*                         </tr>*/
/*                     </table>*/
/*                    */
/*                 </div>*/
/*        */
/*         </div>*/
/*            */
/*                 */
/*                 <div class="col-md-3" >*/
/*         <div class="well">*/
/*             <legend>Informations pratiques</legend>*/
/* <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.8741023651355!2d2.335455315921311!3d48.86061107928778!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e671d877937b0f%3A0xb975fcfa192f84d4!2sMus%C3%A9e+du+Louvre!5e0!3m2!1sfr!2sfr!4v1474230651863" */
/*         width="100%" height="412" frameborder="0" style="border:0" allowfullscreen></iframe>*/
/*         */
/*         */
/*         */
/*         <p><strong>  Adresse :</strong> Musée du Louvre, 75058 Paris - France</p>*/
/*         <p><strong>  Téléphone :</strong> + 33 (0)1 40 20 53 17</p>*/
/*         <p><strong>  Horaires :</strong> Ouvert tous les jours de 9h à 18h sauf le mardi et le dimanche</p>*/
/*         <p><strong>  Fermetures :</strong> Les  1er mai, 1 novembre, 25 décembre et jours fériés</p>*/
/* */
/* */
/* */
/* */
/* */
/* </div>*/
/* </div>  */
/*                 */
/*                 */
/*                 */
/*                 */
/*         </div>*/
/*     */
/* */
/*     </div>*/
/* {% endblock %}*/
/* */
/* */
/* */
