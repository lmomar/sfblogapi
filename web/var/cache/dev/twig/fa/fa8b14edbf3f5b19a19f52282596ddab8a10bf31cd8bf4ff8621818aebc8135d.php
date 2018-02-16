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
        $__internal_1ab8e6db08784feba3f8a1ef58e0987627fea497131d7cb51d7ad0a473e7831b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ab8e6db08784feba3f8a1ef58e0987627fea497131d7cb51d7ad0a473e7831b->enter($__internal_1ab8e6db08784feba3f8a1ef58e0987627fea497131d7cb51d7ad0a473e7831b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_4d250a4991a38ce5fb8775dae4a313429748f9cc7d6c93e11b1382cd00b5fcb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d250a4991a38ce5fb8775dae4a313429748f9cc7d6c93e11b1382cd00b5fcb2->enter($__internal_4d250a4991a38ce5fb8775dae4a313429748f9cc7d6c93e11b1382cd00b5fcb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ab8e6db08784feba3f8a1ef58e0987627fea497131d7cb51d7ad0a473e7831b->leave($__internal_1ab8e6db08784feba3f8a1ef58e0987627fea497131d7cb51d7ad0a473e7831b_prof);

        
        $__internal_4d250a4991a38ce5fb8775dae4a313429748f9cc7d6c93e11b1382cd00b5fcb2->leave($__internal_4d250a4991a38ce5fb8775dae4a313429748f9cc7d6c93e11b1382cd00b5fcb2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_85162e6f281e4867ea39a7ac455399a4b514881d83c1c12d21697e2ed4468a56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85162e6f281e4867ea39a7ac455399a4b514881d83c1c12d21697e2ed4468a56->enter($__internal_85162e6f281e4867ea39a7ac455399a4b514881d83c1c12d21697e2ed4468a56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_fb50cfd677d1d8183a31500069f1399b0517b071cb0852e8260502c6688d1fac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb50cfd677d1d8183a31500069f1399b0517b071cb0852e8260502c6688d1fac->enter($__internal_fb50cfd677d1d8183a31500069f1399b0517b071cb0852e8260502c6688d1fac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_fb50cfd677d1d8183a31500069f1399b0517b071cb0852e8260502c6688d1fac->leave($__internal_fb50cfd677d1d8183a31500069f1399b0517b071cb0852e8260502c6688d1fac_prof);

        
        $__internal_85162e6f281e4867ea39a7ac455399a4b514881d83c1c12d21697e2ed4468a56->leave($__internal_85162e6f281e4867ea39a7ac455399a4b514881d83c1c12d21697e2ed4468a56_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_222591fed4987d5f87ef232fe3448f97962091f98c75bb60898c9f7e57fbfb77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_222591fed4987d5f87ef232fe3448f97962091f98c75bb60898c9f7e57fbfb77->enter($__internal_222591fed4987d5f87ef232fe3448f97962091f98c75bb60898c9f7e57fbfb77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e4056499184132463521da066f18aa00442b45ec5ba4edabe6409b5931bf0c44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4056499184132463521da066f18aa00442b45ec5ba4edabe6409b5931bf0c44->enter($__internal_e4056499184132463521da066f18aa00442b45ec5ba4edabe6409b5931bf0c44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e4056499184132463521da066f18aa00442b45ec5ba4edabe6409b5931bf0c44->leave($__internal_e4056499184132463521da066f18aa00442b45ec5ba4edabe6409b5931bf0c44_prof);

        
        $__internal_222591fed4987d5f87ef232fe3448f97962091f98c75bb60898c9f7e57fbfb77->leave($__internal_222591fed4987d5f87ef232fe3448f97962091f98c75bb60898c9f7e57fbfb77_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b91abb19800502313864bced6b498825b68abe18e99903bbfd439e8ced57ddbf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b91abb19800502313864bced6b498825b68abe18e99903bbfd439e8ced57ddbf->enter($__internal_b91abb19800502313864bced6b498825b68abe18e99903bbfd439e8ced57ddbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_51a197ef1710582c0a1b36a27909b744777d16bd23454f300b6b471fa200e1da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51a197ef1710582c0a1b36a27909b744777d16bd23454f300b6b471fa200e1da->enter($__internal_51a197ef1710582c0a1b36a27909b744777d16bd23454f300b6b471fa200e1da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_51a197ef1710582c0a1b36a27909b744777d16bd23454f300b6b471fa200e1da->leave($__internal_51a197ef1710582c0a1b36a27909b744777d16bd23454f300b6b471fa200e1da_prof);

        
        $__internal_b91abb19800502313864bced6b498825b68abe18e99903bbfd439e8ced57ddbf->leave($__internal_b91abb19800502313864bced6b498825b68abe18e99903bbfd439e8ced57ddbf_prof);

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
