<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_a99d93a76a6c3cc902398a70b93850e9f3de22307bff480eb004f5ffe25a9b70 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_86649518730ad5fab8879e201f33c43d50ec23db384565a040c08edbdd08d773 = $this->env->getExtension("native_profiler");
        $__internal_86649518730ad5fab8879e201f33c43d50ec23db384565a040c08edbdd08d773->enter($__internal_86649518730ad5fab8879e201f33c43d50ec23db384565a040c08edbdd08d773_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_86649518730ad5fab8879e201f33c43d50ec23db384565a040c08edbdd08d773->leave($__internal_86649518730ad5fab8879e201f33c43d50ec23db384565a040c08edbdd08d773_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c256df954603c6c1790bacd1fef8167ee4ed3d62db82f563aeb3b603ce319ceb = $this->env->getExtension("native_profiler");
        $__internal_c256df954603c6c1790bacd1fef8167ee4ed3d62db82f563aeb3b603ce319ceb->enter($__internal_c256df954603c6c1790bacd1fef8167ee4ed3d62db82f563aeb3b603ce319ceb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c256df954603c6c1790bacd1fef8167ee4ed3d62db82f563aeb3b603ce319ceb->leave($__internal_c256df954603c6c1790bacd1fef8167ee4ed3d62db82f563aeb3b603ce319ceb_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c842d251838658a43b0e275fbb09bd0bfcd0111186b3fca40fb55739bcb719f7 = $this->env->getExtension("native_profiler");
        $__internal_c842d251838658a43b0e275fbb09bd0bfcd0111186b3fca40fb55739bcb719f7->enter($__internal_c842d251838658a43b0e275fbb09bd0bfcd0111186b3fca40fb55739bcb719f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c842d251838658a43b0e275fbb09bd0bfcd0111186b3fca40fb55739bcb719f7->leave($__internal_c842d251838658a43b0e275fbb09bd0bfcd0111186b3fca40fb55739bcb719f7_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_9ee76549ed1eefba5352d9e963c032314db946d683bfee9df7e8e4e12a056a70 = $this->env->getExtension("native_profiler");
        $__internal_9ee76549ed1eefba5352d9e963c032314db946d683bfee9df7e8e4e12a056a70->enter($__internal_9ee76549ed1eefba5352d9e963c032314db946d683bfee9df7e8e4e12a056a70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_9ee76549ed1eefba5352d9e963c032314db946d683bfee9df7e8e4e12a056a70->leave($__internal_9ee76549ed1eefba5352d9e963c032314db946d683bfee9df7e8e4e12a056a70_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
