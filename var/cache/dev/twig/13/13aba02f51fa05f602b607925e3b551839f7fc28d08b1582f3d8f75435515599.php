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
        $__internal_a3647d1c014894e18b61bb50b44612368ddca27f514977802a4e43a317a4b7e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3647d1c014894e18b61bb50b44612368ddca27f514977802a4e43a317a4b7e4->enter($__internal_a3647d1c014894e18b61bb50b44612368ddca27f514977802a4e43a317a4b7e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_427a807686db7d2be2ccef33bc2be1a75159f0942813a613aef778c9fc2e1b01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_427a807686db7d2be2ccef33bc2be1a75159f0942813a613aef778c9fc2e1b01->enter($__internal_427a807686db7d2be2ccef33bc2be1a75159f0942813a613aef778c9fc2e1b01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a3647d1c014894e18b61bb50b44612368ddca27f514977802a4e43a317a4b7e4->leave($__internal_a3647d1c014894e18b61bb50b44612368ddca27f514977802a4e43a317a4b7e4_prof);

        
        $__internal_427a807686db7d2be2ccef33bc2be1a75159f0942813a613aef778c9fc2e1b01->leave($__internal_427a807686db7d2be2ccef33bc2be1a75159f0942813a613aef778c9fc2e1b01_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e746d6085547f45852b35ddd747a4507f69a8324d6eeeedb8a71caf6cc4fb524 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e746d6085547f45852b35ddd747a4507f69a8324d6eeeedb8a71caf6cc4fb524->enter($__internal_e746d6085547f45852b35ddd747a4507f69a8324d6eeeedb8a71caf6cc4fb524_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_3c0b270d060db2b519355065c9d7e86064d564f965d97324e3669d11a3a1f3b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c0b270d060db2b519355065c9d7e86064d564f965d97324e3669d11a3a1f3b8->enter($__internal_3c0b270d060db2b519355065c9d7e86064d564f965d97324e3669d11a3a1f3b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_3c0b270d060db2b519355065c9d7e86064d564f965d97324e3669d11a3a1f3b8->leave($__internal_3c0b270d060db2b519355065c9d7e86064d564f965d97324e3669d11a3a1f3b8_prof);

        
        $__internal_e746d6085547f45852b35ddd747a4507f69a8324d6eeeedb8a71caf6cc4fb524->leave($__internal_e746d6085547f45852b35ddd747a4507f69a8324d6eeeedb8a71caf6cc4fb524_prof);

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
