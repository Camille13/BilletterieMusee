<?php

/* base.html.twig */
class __TwigTemplate_2e4b3b7979097731bcaebe114aa79bc15bc6ed1e45050a987bcc1f949831cc56 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f18344a25cf1983503dac52fdc43986c7d285345a269d28470267cb0d5aa9a74 = $this->env->getExtension("native_profiler");
        $__internal_f18344a25cf1983503dac52fdc43986c7d285345a269d28470267cb0d5aa9a74->enter($__internal_f18344a25cf1983503dac52fdc43986c7d285345a269d28470267cb0d5aa9a74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_f18344a25cf1983503dac52fdc43986c7d285345a269d28470267cb0d5aa9a74->leave($__internal_f18344a25cf1983503dac52fdc43986c7d285345a269d28470267cb0d5aa9a74_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2a54999f8e5c094740d9b7149d22ed6b89ca38ab9e2fb1e698f77f2fae2e6878 = $this->env->getExtension("native_profiler");
        $__internal_2a54999f8e5c094740d9b7149d22ed6b89ca38ab9e2fb1e698f77f2fae2e6878->enter($__internal_2a54999f8e5c094740d9b7149d22ed6b89ca38ab9e2fb1e698f77f2fae2e6878_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_2a54999f8e5c094740d9b7149d22ed6b89ca38ab9e2fb1e698f77f2fae2e6878->leave($__internal_2a54999f8e5c094740d9b7149d22ed6b89ca38ab9e2fb1e698f77f2fae2e6878_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_da38e37d451446d30aa01b99781671f169b45ce8305c7df5766315f55a7954a3 = $this->env->getExtension("native_profiler");
        $__internal_da38e37d451446d30aa01b99781671f169b45ce8305c7df5766315f55a7954a3->enter($__internal_da38e37d451446d30aa01b99781671f169b45ce8305c7df5766315f55a7954a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_da38e37d451446d30aa01b99781671f169b45ce8305c7df5766315f55a7954a3->leave($__internal_da38e37d451446d30aa01b99781671f169b45ce8305c7df5766315f55a7954a3_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_9287ea340e22c157f7c028e4176360d9386a5ab09d83ef668bea9f483aefada4 = $this->env->getExtension("native_profiler");
        $__internal_9287ea340e22c157f7c028e4176360d9386a5ab09d83ef668bea9f483aefada4->enter($__internal_9287ea340e22c157f7c028e4176360d9386a5ab09d83ef668bea9f483aefada4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9287ea340e22c157f7c028e4176360d9386a5ab09d83ef668bea9f483aefada4->leave($__internal_9287ea340e22c157f7c028e4176360d9386a5ab09d83ef668bea9f483aefada4_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ff4ff201ef88bd5863323147230a9f572a566aa967e4d12a74623bdd0351d509 = $this->env->getExtension("native_profiler");
        $__internal_ff4ff201ef88bd5863323147230a9f572a566aa967e4d12a74623bdd0351d509->enter($__internal_ff4ff201ef88bd5863323147230a9f572a566aa967e4d12a74623bdd0351d509_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ff4ff201ef88bd5863323147230a9f572a566aa967e4d12a74623bdd0351d509->leave($__internal_ff4ff201ef88bd5863323147230a9f572a566aa967e4d12a74623bdd0351d509_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
