<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_3aed4e6f7d4c4ca9e09121c8025a98965b38de088eb37e48a7c50f19a58539c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1031a0ae68a1baa07022b29f9116b2b1ffd1e9c7738e3dd92f9454e681619f5e = $this->env->getExtension("native_profiler");
        $__internal_1031a0ae68a1baa07022b29f9116b2b1ffd1e9c7738e3dd92f9454e681619f5e->enter($__internal_1031a0ae68a1baa07022b29f9116b2b1ffd1e9c7738e3dd92f9454e681619f5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1031a0ae68a1baa07022b29f9116b2b1ffd1e9c7738e3dd92f9454e681619f5e->leave($__internal_1031a0ae68a1baa07022b29f9116b2b1ffd1e9c7738e3dd92f9454e681619f5e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7cced7a544444a137183d6193239ccf869fc058fb9699fa1fe5e01c76b0c3f8d = $this->env->getExtension("native_profiler");
        $__internal_7cced7a544444a137183d6193239ccf869fc058fb9699fa1fe5e01c76b0c3f8d->enter($__internal_7cced7a544444a137183d6193239ccf869fc058fb9699fa1fe5e01c76b0c3f8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7cced7a544444a137183d6193239ccf869fc058fb9699fa1fe5e01c76b0c3f8d->leave($__internal_7cced7a544444a137183d6193239ccf869fc058fb9699fa1fe5e01c76b0c3f8d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ffca4604e2575505999f0402bb7a3a04d11e8550c187c00084b7cc95fc357ffc = $this->env->getExtension("native_profiler");
        $__internal_ffca4604e2575505999f0402bb7a3a04d11e8550c187c00084b7cc95fc357ffc->enter($__internal_ffca4604e2575505999f0402bb7a3a04d11e8550c187c00084b7cc95fc357ffc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ffca4604e2575505999f0402bb7a3a04d11e8550c187c00084b7cc95fc357ffc->leave($__internal_ffca4604e2575505999f0402bb7a3a04d11e8550c187c00084b7cc95fc357ffc_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fe62bc6df0a6827a9b8baedce7b2f37154c73715034e7bf3e0ab09844aa7258b = $this->env->getExtension("native_profiler");
        $__internal_fe62bc6df0a6827a9b8baedce7b2f37154c73715034e7bf3e0ab09844aa7258b->enter($__internal_fe62bc6df0a6827a9b8baedce7b2f37154c73715034e7bf3e0ab09844aa7258b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_fe62bc6df0a6827a9b8baedce7b2f37154c73715034e7bf3e0ab09844aa7258b->leave($__internal_fe62bc6df0a6827a9b8baedce7b2f37154c73715034e7bf3e0ab09844aa7258b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
