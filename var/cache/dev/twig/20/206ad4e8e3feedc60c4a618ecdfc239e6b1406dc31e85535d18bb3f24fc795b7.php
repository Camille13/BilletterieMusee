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
        $__internal_c7751f2c87541ef2a825e8437088c872b6094271616565d2b8c6c7b13cb8e1f0 = $this->env->getExtension("native_profiler");
        $__internal_c7751f2c87541ef2a825e8437088c872b6094271616565d2b8c6c7b13cb8e1f0->enter($__internal_c7751f2c87541ef2a825e8437088c872b6094271616565d2b8c6c7b13cb8e1f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MuseeBilletterieBundle:Formulaire:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c7751f2c87541ef2a825e8437088c872b6094271616565d2b8c6c7b13cb8e1f0->leave($__internal_c7751f2c87541ef2a825e8437088c872b6094271616565d2b8c6c7b13cb8e1f0_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_d40df444947fbab6729dab3bbaca15b8a60e9ccd5d5c8d0d3f5c3a9156a0432a = $this->env->getExtension("native_profiler");
        $__internal_d40df444947fbab6729dab3bbaca15b8a60e9ccd5d5c8d0d3f5c3a9156a0432a->enter($__internal_d40df444947fbab6729dab3bbaca15b8a60e9ccd5d5c8d0d3f5c3a9156a0432a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Billetterie ";
        
        $__internal_d40df444947fbab6729dab3bbaca15b8a60e9ccd5d5c8d0d3f5c3a9156a0432a->leave($__internal_d40df444947fbab6729dab3bbaca15b8a60e9ccd5d5c8d0d3f5c3a9156a0432a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_aba3e3e64930046a02ae17aef1ff6db74096e44597bcb6b75e1018264fa7e9c6 = $this->env->getExtension("native_profiler");
        $__internal_aba3e3e64930046a02ae17aef1ff6db74096e44597bcb6b75e1018264fa7e9c6->enter($__internal_aba3e3e64930046a02ae17aef1ff6db74096e44597bcb6b75e1018264fa7e9c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container-fluid\">
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
        <div class=\"row\">

            <div class=\"col-md-7 col-md-offset-1\">
 
                
                
                
                
                <div class=\"well col-md-12\" id=\"billetterie\">
                    
                     
                             <legend> Billetterie en ligne  <p class=\"text-muted\"> Achetez votre billet en ligne et ne perdez plus de temps dans les files d'attentes !</p></legend>

                    ";
        // line 42
        if (array_key_exists("form", $context)) {
            // line 43
            echo "                    
                    
                    
                    ";
            // line 46
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal", "method" => "GET")));
            echo "
                    ";
            // line 47
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'row');
            echo "
                   
                    ";
            // line 49
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            echo "
                    <div class=\"form-group\">
                        ";
            // line 51
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Date de la visite *"));
            echo "
                        ";
            // line 52
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'errors');
            echo "
                        <div class=\"col-sm-8\">
                            <div class=\"input-group date\" data-provide=\"datepicker\">

                                ";
            // line 56
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
            // line 65
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Adresse email *"));
            echo "
                        ";
            // line 66
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
            echo "
                        <div class=\"col-sm-8\">
                            ";
            // line 68
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        ";
            // line 72
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Type *"));
            echo "
                        ";
            // line 73
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type", array()), 'errors');
            echo "
                        <div class=\"col-sm-8\">


                            ";
            // line 77
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "


                        </div>  
                    </div>

                    <div class=\"form-group\">
                        ";
            // line 84
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "quantite", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Quantité *"));
            echo "
                        ";
            // line 85
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "quantite", array()), 'errors');
            echo "
                        <div class=\"col-sm-8\">


                            ";
            // line 89
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "quantite", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "


                        </div>  
                    </div>

                    <div class=\"form-group\">
                        <div class=\"col-sm-12 \">
                            ";
            // line 97
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Valider", array()), 'widget', array("attr" => array("class" => "btn btn-primary center-block")));
            echo "

                        </div>
                    </div>


                    ";
            // line 103
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end', array("render_rest" => false));
            echo "
                    
                    
                  
                    ";
        } else {
            // line 108
            echo "                        
                        
                      Vos billets vous ont été envoyé à l'adresse email 
                        ";
        }
        // line 112
        echo "                    
                </div>
                
                
                
                
         




                <div class=\"well col-md-12\" id=\"tarifs\">
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
                            <td>Etudiant, employé du musée, d'un service du Ministère de la Culture, militaire (sur présentation de justificatif(s))</td>
                            <td>10,00€</td>
                        </tr>
                    </table>
                   
                </div>
       
        </div>
           
                
                <div class=\"col-md-3\" id=\"infos\">
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
        
        $__internal_aba3e3e64930046a02ae17aef1ff6db74096e44597bcb6b75e1018264fa7e9c6->leave($__internal_aba3e3e64930046a02ae17aef1ff6db74096e44597bcb6b75e1018264fa7e9c6_prof);

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
        return array (  218 => 112,  212 => 108,  204 => 103,  195 => 97,  184 => 89,  177 => 85,  173 => 84,  163 => 77,  156 => 73,  152 => 72,  145 => 68,  140 => 66,  136 => 65,  124 => 56,  117 => 52,  113 => 51,  108 => 49,  103 => 47,  99 => 46,  94 => 43,  92 => 42,  54 => 6,  48 => 5,  35 => 4,  11 => 3,);
    }
}
/* {# src/Musee/BilletterieBundle/Resources/views/Formulaire/index.html.twig #}*/
/* */
/* {% extends "MuseeBilletterieBundle::Layout.html.twig" %}*/
/* {% block title %}{{ parent() }} - Billetterie {% endblock %}*/
/* {% block body %}*/
/*     <div class="container-fluid">*/
/*         <div class="navbar navbar-inverse row ">*/
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
/*         <div class="row">*/
/* */
/*             <div class="col-md-7 col-md-offset-1">*/
/*  */
/*                 */
/*                 */
/*                 */
/*                 */
/*                 <div class="well col-md-12" id="billetterie">*/
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
/*                 <div class="well col-md-12" id="tarifs">*/
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
/*                             <td>Etudiant, employé du musée, d'un service du Ministère de la Culture, militaire (sur présentation de justificatif(s))</td>*/
/*                             <td>10,00€</td>*/
/*                         </tr>*/
/*                     </table>*/
/*                    */
/*                 </div>*/
/*        */
/*         </div>*/
/*            */
/*                 */
/*                 <div class="col-md-3" id="infos">*/
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
