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
        $__internal_ac591924624dee0b6bee529e091ea7d36bd9325ccca92cb7835e4e691603005b = $this->env->getExtension("native_profiler");
        $__internal_ac591924624dee0b6bee529e091ea7d36bd9325ccca92cb7835e4e691603005b->enter($__internal_ac591924624dee0b6bee529e091ea7d36bd9325ccca92cb7835e4e691603005b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MuseeBilletterieBundle:Formulaire:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ac591924624dee0b6bee529e091ea7d36bd9325ccca92cb7835e4e691603005b->leave($__internal_ac591924624dee0b6bee529e091ea7d36bd9325ccca92cb7835e4e691603005b_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_5e6e489c3210f2d413379ec498731de32026a9347d3f541a62773acb2add28f8 = $this->env->getExtension("native_profiler");
        $__internal_5e6e489c3210f2d413379ec498731de32026a9347d3f541a62773acb2add28f8->enter($__internal_5e6e489c3210f2d413379ec498731de32026a9347d3f541a62773acb2add28f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Billetterie ";
        
        $__internal_5e6e489c3210f2d413379ec498731de32026a9347d3f541a62773acb2add28f8->leave($__internal_5e6e489c3210f2d413379ec498731de32026a9347d3f541a62773acb2add28f8_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_1b2f886b73cc1659744a69dbd0bbd96d796c8ee1e8de2ff210d7c2ea2f886008 = $this->env->getExtension("native_profiler");
        $__internal_1b2f886b73cc1659744a69dbd0bbd96d796c8ee1e8de2ff210d7c2ea2f886008->enter($__internal_1b2f886b73cc1659744a69dbd0bbd96d796c8ee1e8de2ff210d7c2ea2f886008_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container-fluid\">
       
        
        
      
        
        
        
        
        
        <div class=\"row\">

            <div class=\"col-md-7 col-md-offset-1\">
 
                
                
                
                
                <div class=\"well col-md-12\" id=\"billetterie\">
                    
                     
                             <legend> Billetterie en ligne  <p class=\"text-muted\"> Achetez votre billet en ligne et ne perdez plus de temps dans les files d'attentes !</p></legend>

                    ";
        // line 29
        if (array_key_exists("form", $context)) {
            // line 30
            echo "                    
                    
                    
                    ";
            // line 33
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal", "method" => "GET")));
            echo "
                    ";
            // line 34
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'row');
            echo "
                   
                    ";
            // line 36
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            echo "
                    <div class=\"form-group\">
                        ";
            // line 38
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Date de la visite *"));
            echo "
                        ";
            // line 39
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'errors');
            echo "
                        <div class=\"col-sm-8\">
                            <div class=\"input-group date\" data-provide=\"datepicker\">

                                ";
            // line 43
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
            // line 52
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Adresse email *"));
            echo "
                        ";
            // line 53
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
            echo "
                        <div class=\"col-sm-8\">
                            ";
            // line 55
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        ";
            // line 59
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Type *"));
            echo "
                        ";
            // line 60
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type", array()), 'errors');
            echo "
                        <div class=\"col-sm-8\">


                            ";
            // line 64
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "


                        </div>  
                    </div>

                    <div class=\"form-group\">
                        ";
            // line 71
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "quantite", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Quantité *"));
            echo "
                        ";
            // line 72
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "quantite", array()), 'errors');
            echo "
                        <div class=\"col-sm-8\">


                            ";
            // line 76
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "quantite", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "


                        </div>  
                    </div>

                    <div class=\"form-group\">
                        <div class=\"col-sm-12 \">
                            ";
            // line 84
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Valider", array()), 'widget', array("attr" => array("class" => "btn btn-primary center-block")));
            echo "

                        </div>
                    </div>


                    ";
            // line 90
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end', array("render_rest" => false));
            echo "
                    
                    
                  
                    ";
        } else {
            // line 95
            echo "                        
                        
                      Vos billets vous ont été envoyé à l'adresse email 
                        ";
        }
        // line 99
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
        
        $__internal_1b2f886b73cc1659744a69dbd0bbd96d796c8ee1e8de2ff210d7c2ea2f886008->leave($__internal_1b2f886b73cc1659744a69dbd0bbd96d796c8ee1e8de2ff210d7c2ea2f886008_prof);

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
        return array (  205 => 99,  199 => 95,  191 => 90,  182 => 84,  171 => 76,  164 => 72,  160 => 71,  150 => 64,  143 => 60,  139 => 59,  132 => 55,  127 => 53,  123 => 52,  111 => 43,  104 => 39,  100 => 38,  95 => 36,  90 => 34,  86 => 33,  81 => 30,  79 => 29,  54 => 6,  48 => 5,  35 => 4,  11 => 3,);
    }
}
/* {# src/Musee/BilletterieBundle/Resources/views/Formulaire/index.html.twig #}*/
/* */
/* {% extends "MuseeBilletterieBundle::Layout.html.twig" %}*/
/* {% block title %}{{ parent() }} - Billetterie {% endblock %}*/
/* {% block body %}*/
/*     <div class="container-fluid">*/
/*        */
/*         */
/*         */
/*       */
/*         */
/*         */
/*         */
/*         */
/*         */
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
