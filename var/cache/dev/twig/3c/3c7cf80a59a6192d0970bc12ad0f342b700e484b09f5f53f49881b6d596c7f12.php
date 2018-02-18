<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_d65b39e4206693397dd2d21bc7b0d2f54d9726291ae46b56472a18a3ff527cbb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_561da00ed4150e0ae076dc11fd747c2a1420515820e29b3d21bc22692f7de3f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_561da00ed4150e0ae076dc11fd747c2a1420515820e29b3d21bc22692f7de3f9->enter($__internal_561da00ed4150e0ae076dc11fd747c2a1420515820e29b3d21bc22692f7de3f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_f83d1b7eb93f8a0c7646186e18263bd7c53dad8021ac76963324c38620e1b88a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f83d1b7eb93f8a0c7646186e18263bd7c53dad8021ac76963324c38620e1b88a->enter($__internal_f83d1b7eb93f8a0c7646186e18263bd7c53dad8021ac76963324c38620e1b88a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_561da00ed4150e0ae076dc11fd747c2a1420515820e29b3d21bc22692f7de3f9->leave($__internal_561da00ed4150e0ae076dc11fd747c2a1420515820e29b3d21bc22692f7de3f9_prof);

        
        $__internal_f83d1b7eb93f8a0c7646186e18263bd7c53dad8021ac76963324c38620e1b88a->leave($__internal_f83d1b7eb93f8a0c7646186e18263bd7c53dad8021ac76963324c38620e1b88a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e762c5b4d3bc317b5df37b6894204a7ced6765224b56ec5868f69e89014064cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e762c5b4d3bc317b5df37b6894204a7ced6765224b56ec5868f69e89014064cb->enter($__internal_e762c5b4d3bc317b5df37b6894204a7ced6765224b56ec5868f69e89014064cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_fec70d62d2fcc900d9d2834ce4a9048aed7b8853d41b82e78c16d042d1947d56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fec70d62d2fcc900d9d2834ce4a9048aed7b8853d41b82e78c16d042d1947d56->enter($__internal_fec70d62d2fcc900d9d2834ce4a9048aed7b8853d41b82e78c16d042d1947d56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_fec70d62d2fcc900d9d2834ce4a9048aed7b8853d41b82e78c16d042d1947d56->leave($__internal_fec70d62d2fcc900d9d2834ce4a9048aed7b8853d41b82e78c16d042d1947d56_prof);

        
        $__internal_e762c5b4d3bc317b5df37b6894204a7ced6765224b56ec5868f69e89014064cb->leave($__internal_e762c5b4d3bc317b5df37b6894204a7ced6765224b56ec5868f69e89014064cb_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4474cbf6cbe2f59bff72938e01bf73902112f0fc6960cb771395029c667d7ced = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4474cbf6cbe2f59bff72938e01bf73902112f0fc6960cb771395029c667d7ced->enter($__internal_4474cbf6cbe2f59bff72938e01bf73902112f0fc6960cb771395029c667d7ced_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ba974a8bb4a119887a6b5266708321ce4fcc7855dbd9db853af199168fa6ba76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba974a8bb4a119887a6b5266708321ce4fcc7855dbd9db853af199168fa6ba76->enter($__internal_ba974a8bb4a119887a6b5266708321ce4fcc7855dbd9db853af199168fa6ba76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_ba974a8bb4a119887a6b5266708321ce4fcc7855dbd9db853af199168fa6ba76->leave($__internal_ba974a8bb4a119887a6b5266708321ce4fcc7855dbd9db853af199168fa6ba76_prof);

        
        $__internal_4474cbf6cbe2f59bff72938e01bf73902112f0fc6960cb771395029c667d7ced->leave($__internal_4474cbf6cbe2f59bff72938e01bf73902112f0fc6960cb771395029c667d7ced_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_96740636de36e963202b4f0b6c9383a45d99f1313c33c14844d52da1640785df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96740636de36e963202b4f0b6c9383a45d99f1313c33c14844d52da1640785df->enter($__internal_96740636de36e963202b4f0b6c9383a45d99f1313c33c14844d52da1640785df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9f4a581403e7e9f6365bfa8bff7cc19b73aced9eacd4b8198f7a4e92cde6539d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f4a581403e7e9f6365bfa8bff7cc19b73aced9eacd4b8198f7a4e92cde6539d->enter($__internal_9f4a581403e7e9f6365bfa8bff7cc19b73aced9eacd4b8198f7a4e92cde6539d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_9f4a581403e7e9f6365bfa8bff7cc19b73aced9eacd4b8198f7a4e92cde6539d->leave($__internal_9f4a581403e7e9f6365bfa8bff7cc19b73aced9eacd4b8198f7a4e92cde6539d_prof);

        
        $__internal_96740636de36e963202b4f0b6c9383a45d99f1313c33c14844d52da1640785df->leave($__internal_96740636de36e963202b4f0b6c9383a45d99f1313c33c14844d52da1640785df_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/var/vhosts/sfblogapi/web/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
