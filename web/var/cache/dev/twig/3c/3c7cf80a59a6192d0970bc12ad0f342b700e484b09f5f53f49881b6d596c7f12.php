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
        $__internal_dc805e143a5aaa113eb6afd051ff3568ac985a76f384f648e82e525f877e3db8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc805e143a5aaa113eb6afd051ff3568ac985a76f384f648e82e525f877e3db8->enter($__internal_dc805e143a5aaa113eb6afd051ff3568ac985a76f384f648e82e525f877e3db8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_d6d449c7c10c32c59abc15fc8b4c29e6fc5f1023f5610411da5bce5e87b06961 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6d449c7c10c32c59abc15fc8b4c29e6fc5f1023f5610411da5bce5e87b06961->enter($__internal_d6d449c7c10c32c59abc15fc8b4c29e6fc5f1023f5610411da5bce5e87b06961_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc805e143a5aaa113eb6afd051ff3568ac985a76f384f648e82e525f877e3db8->leave($__internal_dc805e143a5aaa113eb6afd051ff3568ac985a76f384f648e82e525f877e3db8_prof);

        
        $__internal_d6d449c7c10c32c59abc15fc8b4c29e6fc5f1023f5610411da5bce5e87b06961->leave($__internal_d6d449c7c10c32c59abc15fc8b4c29e6fc5f1023f5610411da5bce5e87b06961_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_311156bbf72a951af00c55d6d1adc04db8dfa4ad79204e97037b669b08a6b399 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_311156bbf72a951af00c55d6d1adc04db8dfa4ad79204e97037b669b08a6b399->enter($__internal_311156bbf72a951af00c55d6d1adc04db8dfa4ad79204e97037b669b08a6b399_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_450e3ab9b2a549dbd5e2cf00888ab217a82a6545826a79be887f61757ecdf0ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_450e3ab9b2a549dbd5e2cf00888ab217a82a6545826a79be887f61757ecdf0ef->enter($__internal_450e3ab9b2a549dbd5e2cf00888ab217a82a6545826a79be887f61757ecdf0ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_450e3ab9b2a549dbd5e2cf00888ab217a82a6545826a79be887f61757ecdf0ef->leave($__internal_450e3ab9b2a549dbd5e2cf00888ab217a82a6545826a79be887f61757ecdf0ef_prof);

        
        $__internal_311156bbf72a951af00c55d6d1adc04db8dfa4ad79204e97037b669b08a6b399->leave($__internal_311156bbf72a951af00c55d6d1adc04db8dfa4ad79204e97037b669b08a6b399_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f66fd312fa649b44750e2941f5e36b2aec36abb21c7c0835b39a709080691631 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f66fd312fa649b44750e2941f5e36b2aec36abb21c7c0835b39a709080691631->enter($__internal_f66fd312fa649b44750e2941f5e36b2aec36abb21c7c0835b39a709080691631_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_176b61e271ff65d999be5e229b484679c4e7bfe4c49dfb79455bbe9bbcc5387c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_176b61e271ff65d999be5e229b484679c4e7bfe4c49dfb79455bbe9bbcc5387c->enter($__internal_176b61e271ff65d999be5e229b484679c4e7bfe4c49dfb79455bbe9bbcc5387c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_176b61e271ff65d999be5e229b484679c4e7bfe4c49dfb79455bbe9bbcc5387c->leave($__internal_176b61e271ff65d999be5e229b484679c4e7bfe4c49dfb79455bbe9bbcc5387c_prof);

        
        $__internal_f66fd312fa649b44750e2941f5e36b2aec36abb21c7c0835b39a709080691631->leave($__internal_f66fd312fa649b44750e2941f5e36b2aec36abb21c7c0835b39a709080691631_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7fd7a42961e3e7df6d89e3ec1a00a80b46d1138f26fb3cbf7b15475c966cac15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fd7a42961e3e7df6d89e3ec1a00a80b46d1138f26fb3cbf7b15475c966cac15->enter($__internal_7fd7a42961e3e7df6d89e3ec1a00a80b46d1138f26fb3cbf7b15475c966cac15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a3ed59901a1d1bdb539730bf0aeb646d84f7a0b021fa022c89cafea921e6c425 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3ed59901a1d1bdb539730bf0aeb646d84f7a0b021fa022c89cafea921e6c425->enter($__internal_a3ed59901a1d1bdb539730bf0aeb646d84f7a0b021fa022c89cafea921e6c425_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_a3ed59901a1d1bdb539730bf0aeb646d84f7a0b021fa022c89cafea921e6c425->leave($__internal_a3ed59901a1d1bdb539730bf0aeb646d84f7a0b021fa022c89cafea921e6c425_prof);

        
        $__internal_7fd7a42961e3e7df6d89e3ec1a00a80b46d1138f26fb3cbf7b15475c966cac15->leave($__internal_7fd7a42961e3e7df6d89e3ec1a00a80b46d1138f26fb3cbf7b15475c966cac15_prof);

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
