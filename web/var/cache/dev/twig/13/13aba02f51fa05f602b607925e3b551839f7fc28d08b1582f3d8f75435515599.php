<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_7d6a536ea4d20cbd4fe73511303be4782c789320af770e9e6c4fb511e2149fb4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ef6b52c1e48efe4c1d990ac2bcb2988a88aee514e536323588c9cf37e624a5a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef6b52c1e48efe4c1d990ac2bcb2988a88aee514e536323588c9cf37e624a5a2->enter($__internal_ef6b52c1e48efe4c1d990ac2bcb2988a88aee514e536323588c9cf37e624a5a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_bfaa93c13e1bc2cd8ec0fd6ec86d033635b46fcb1c884fd9ab8a0b4a1eb33595 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfaa93c13e1bc2cd8ec0fd6ec86d033635b46fcb1c884fd9ab8a0b4a1eb33595->enter($__internal_bfaa93c13e1bc2cd8ec0fd6ec86d033635b46fcb1c884fd9ab8a0b4a1eb33595_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef6b52c1e48efe4c1d990ac2bcb2988a88aee514e536323588c9cf37e624a5a2->leave($__internal_ef6b52c1e48efe4c1d990ac2bcb2988a88aee514e536323588c9cf37e624a5a2_prof);

        
        $__internal_bfaa93c13e1bc2cd8ec0fd6ec86d033635b46fcb1c884fd9ab8a0b4a1eb33595->leave($__internal_bfaa93c13e1bc2cd8ec0fd6ec86d033635b46fcb1c884fd9ab8a0b4a1eb33595_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e8423324270c610c91edaa6b3651f57a222ae964271ae9ea21dcc1670caab14e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8423324270c610c91edaa6b3651f57a222ae964271ae9ea21dcc1670caab14e->enter($__internal_e8423324270c610c91edaa6b3651f57a222ae964271ae9ea21dcc1670caab14e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_451f2d098229f057aaa7a69829256b950e9523d13d090ee7c3fc4e4fa8923d2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_451f2d098229f057aaa7a69829256b950e9523d13d090ee7c3fc4e4fa8923d2b->enter($__internal_451f2d098229f057aaa7a69829256b950e9523d13d090ee7c3fc4e4fa8923d2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_451f2d098229f057aaa7a69829256b950e9523d13d090ee7c3fc4e4fa8923d2b->leave($__internal_451f2d098229f057aaa7a69829256b950e9523d13d090ee7c3fc4e4fa8923d2b_prof);

        
        $__internal_e8423324270c610c91edaa6b3651f57a222ae964271ae9ea21dcc1670caab14e->leave($__internal_e8423324270c610c91edaa6b3651f57a222ae964271ae9ea21dcc1670caab14e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/var/vhosts/sfblogapi/web/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
