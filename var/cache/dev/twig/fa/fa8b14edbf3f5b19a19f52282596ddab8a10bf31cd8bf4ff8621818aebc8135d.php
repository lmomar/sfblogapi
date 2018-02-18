<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_bbf7cf0086a14256a6fe44c143d0fc0575991796f423d6638c90e0040718dbee extends Twig_Template
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
        $__internal_5e02e4a625a32c4d661c2c2e8f60ddd3216885fdd7e9685854f922b5953cfd66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e02e4a625a32c4d661c2c2e8f60ddd3216885fdd7e9685854f922b5953cfd66->enter($__internal_5e02e4a625a32c4d661c2c2e8f60ddd3216885fdd7e9685854f922b5953cfd66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_1be2a495e80a641dfc06d7c33c2d8ed5526def85cb6d221dca3891be8dfcc3e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1be2a495e80a641dfc06d7c33c2d8ed5526def85cb6d221dca3891be8dfcc3e1->enter($__internal_1be2a495e80a641dfc06d7c33c2d8ed5526def85cb6d221dca3891be8dfcc3e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e02e4a625a32c4d661c2c2e8f60ddd3216885fdd7e9685854f922b5953cfd66->leave($__internal_5e02e4a625a32c4d661c2c2e8f60ddd3216885fdd7e9685854f922b5953cfd66_prof);

        
        $__internal_1be2a495e80a641dfc06d7c33c2d8ed5526def85cb6d221dca3891be8dfcc3e1->leave($__internal_1be2a495e80a641dfc06d7c33c2d8ed5526def85cb6d221dca3891be8dfcc3e1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0e7185b8ab9c7c83d90f807662a83c7a6859bb1b537fa98283d05e4cbf00c829 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e7185b8ab9c7c83d90f807662a83c7a6859bb1b537fa98283d05e4cbf00c829->enter($__internal_0e7185b8ab9c7c83d90f807662a83c7a6859bb1b537fa98283d05e4cbf00c829_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_dba82407adbf4c111c702be9f5318b3f64093f785c5877072909baf9f2882f30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dba82407adbf4c111c702be9f5318b3f64093f785c5877072909baf9f2882f30->enter($__internal_dba82407adbf4c111c702be9f5318b3f64093f785c5877072909baf9f2882f30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_dba82407adbf4c111c702be9f5318b3f64093f785c5877072909baf9f2882f30->leave($__internal_dba82407adbf4c111c702be9f5318b3f64093f785c5877072909baf9f2882f30_prof);

        
        $__internal_0e7185b8ab9c7c83d90f807662a83c7a6859bb1b537fa98283d05e4cbf00c829->leave($__internal_0e7185b8ab9c7c83d90f807662a83c7a6859bb1b537fa98283d05e4cbf00c829_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_68010be915d3d24c817d0eee97f075df0807a04807ca7380cc97df6d20f08da4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68010be915d3d24c817d0eee97f075df0807a04807ca7380cc97df6d20f08da4->enter($__internal_68010be915d3d24c817d0eee97f075df0807a04807ca7380cc97df6d20f08da4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f2e51bd0671d22b86bafe9b67eae436e5a767062cd7f1e211dedb4515f2cda19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2e51bd0671d22b86bafe9b67eae436e5a767062cd7f1e211dedb4515f2cda19->enter($__internal_f2e51bd0671d22b86bafe9b67eae436e5a767062cd7f1e211dedb4515f2cda19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f2e51bd0671d22b86bafe9b67eae436e5a767062cd7f1e211dedb4515f2cda19->leave($__internal_f2e51bd0671d22b86bafe9b67eae436e5a767062cd7f1e211dedb4515f2cda19_prof);

        
        $__internal_68010be915d3d24c817d0eee97f075df0807a04807ca7380cc97df6d20f08da4->leave($__internal_68010be915d3d24c817d0eee97f075df0807a04807ca7380cc97df6d20f08da4_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ed71b768ad561041c230c7d7f43f88ec375b06acc9fd8ebf7fa46db70ef0dae8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed71b768ad561041c230c7d7f43f88ec375b06acc9fd8ebf7fa46db70ef0dae8->enter($__internal_ed71b768ad561041c230c7d7f43f88ec375b06acc9fd8ebf7fa46db70ef0dae8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a4b14cc07abb6a33e916ef070e1581c9f8bebacfb9fe90880248bfc91cc698c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4b14cc07abb6a33e916ef070e1581c9f8bebacfb9fe90880248bfc91cc698c4->enter($__internal_a4b14cc07abb6a33e916ef070e1581c9f8bebacfb9fe90880248bfc91cc698c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a4b14cc07abb6a33e916ef070e1581c9f8bebacfb9fe90880248bfc91cc698c4->leave($__internal_a4b14cc07abb6a33e916ef070e1581c9f8bebacfb9fe90880248bfc91cc698c4_prof);

        
        $__internal_ed71b768ad561041c230c7d7f43f88ec375b06acc9fd8ebf7fa46db70ef0dae8->leave($__internal_ed71b768ad561041c230c7d7f43f88ec375b06acc9fd8ebf7fa46db70ef0dae8_prof);

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
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/vhosts/sfblogapi/web/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
