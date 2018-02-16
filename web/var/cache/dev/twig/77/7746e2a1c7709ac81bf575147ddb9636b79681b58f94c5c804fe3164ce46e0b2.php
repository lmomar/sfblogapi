<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_0e94882457a39e1fc8ec5af694f2a51fd37d0459a06966e66c05e2a28fe76ade extends Twig_Template
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
        $__internal_bc09c742fd6fc2898e2064809b7111bee0e19ecdd79b43add4bcf25d6986821f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc09c742fd6fc2898e2064809b7111bee0e19ecdd79b43add4bcf25d6986821f->enter($__internal_bc09c742fd6fc2898e2064809b7111bee0e19ecdd79b43add4bcf25d6986821f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_4b8a30f2c2bf7437439eacad418d3b4b79d05a45df40395a5009f2d75663e88e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b8a30f2c2bf7437439eacad418d3b4b79d05a45df40395a5009f2d75663e88e->enter($__internal_4b8a30f2c2bf7437439eacad418d3b4b79d05a45df40395a5009f2d75663e88e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc09c742fd6fc2898e2064809b7111bee0e19ecdd79b43add4bcf25d6986821f->leave($__internal_bc09c742fd6fc2898e2064809b7111bee0e19ecdd79b43add4bcf25d6986821f_prof);

        
        $__internal_4b8a30f2c2bf7437439eacad418d3b4b79d05a45df40395a5009f2d75663e88e->leave($__internal_4b8a30f2c2bf7437439eacad418d3b4b79d05a45df40395a5009f2d75663e88e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e11a6727f744c7ddb5b04791571fd8123466f65b7cd42e9bb26e405ebe906386 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e11a6727f744c7ddb5b04791571fd8123466f65b7cd42e9bb26e405ebe906386->enter($__internal_e11a6727f744c7ddb5b04791571fd8123466f65b7cd42e9bb26e405ebe906386_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9f5e555dc6c2886e12f37ceb268fdab6ee77137303f7a0a8bb318b0bfadba02e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f5e555dc6c2886e12f37ceb268fdab6ee77137303f7a0a8bb318b0bfadba02e->enter($__internal_9f5e555dc6c2886e12f37ceb268fdab6ee77137303f7a0a8bb318b0bfadba02e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_9f5e555dc6c2886e12f37ceb268fdab6ee77137303f7a0a8bb318b0bfadba02e->leave($__internal_9f5e555dc6c2886e12f37ceb268fdab6ee77137303f7a0a8bb318b0bfadba02e_prof);

        
        $__internal_e11a6727f744c7ddb5b04791571fd8123466f65b7cd42e9bb26e405ebe906386->leave($__internal_e11a6727f744c7ddb5b04791571fd8123466f65b7cd42e9bb26e405ebe906386_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_afb03bbaf330a4bffc6698263e15aed014ab89166174f68cec1eb31fce3369e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afb03bbaf330a4bffc6698263e15aed014ab89166174f68cec1eb31fce3369e7->enter($__internal_afb03bbaf330a4bffc6698263e15aed014ab89166174f68cec1eb31fce3369e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_10ffb1d8ab3ac10d325f79286e9b3e871c65504bf9786a0feff59df92f1a03d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10ffb1d8ab3ac10d325f79286e9b3e871c65504bf9786a0feff59df92f1a03d7->enter($__internal_10ffb1d8ab3ac10d325f79286e9b3e871c65504bf9786a0feff59df92f1a03d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_10ffb1d8ab3ac10d325f79286e9b3e871c65504bf9786a0feff59df92f1a03d7->leave($__internal_10ffb1d8ab3ac10d325f79286e9b3e871c65504bf9786a0feff59df92f1a03d7_prof);

        
        $__internal_afb03bbaf330a4bffc6698263e15aed014ab89166174f68cec1eb31fce3369e7->leave($__internal_afb03bbaf330a4bffc6698263e15aed014ab89166174f68cec1eb31fce3369e7_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_f8b66a3333be8409fabb2793470f028bb13f03a065500cc9c30e832a565ca377 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8b66a3333be8409fabb2793470f028bb13f03a065500cc9c30e832a565ca377->enter($__internal_f8b66a3333be8409fabb2793470f028bb13f03a065500cc9c30e832a565ca377_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1ea4c08362179d9efc0edd14ea8ec7f945c1891e36de58f8fd289ee8fac31420 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ea4c08362179d9efc0edd14ea8ec7f945c1891e36de58f8fd289ee8fac31420->enter($__internal_1ea4c08362179d9efc0edd14ea8ec7f945c1891e36de58f8fd289ee8fac31420_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_1ea4c08362179d9efc0edd14ea8ec7f945c1891e36de58f8fd289ee8fac31420->leave($__internal_1ea4c08362179d9efc0edd14ea8ec7f945c1891e36de58f8fd289ee8fac31420_prof);

        
        $__internal_f8b66a3333be8409fabb2793470f028bb13f03a065500cc9c30e832a565ca377->leave($__internal_f8b66a3333be8409fabb2793470f028bb13f03a065500cc9c30e832a565ca377_prof);

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
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/vhosts/sfblogapi/web/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
