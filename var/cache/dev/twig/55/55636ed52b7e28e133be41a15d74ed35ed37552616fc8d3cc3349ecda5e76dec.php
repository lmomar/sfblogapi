<?php

/* base.html.twig */
class __TwigTemplate_e0f9cf1a6c6795797f9f66a884b4b1e11c341fa966b1b7828033616e7e0648af extends Twig_Template
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
        $__internal_266fb635a500ee9a36742c6f25bffd161bb9e86f8cdf773264fd8682eb28fbed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_266fb635a500ee9a36742c6f25bffd161bb9e86f8cdf773264fd8682eb28fbed->enter($__internal_266fb635a500ee9a36742c6f25bffd161bb9e86f8cdf773264fd8682eb28fbed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_b7de1b143e45d174cbad70b3e69e420d1ee9744ed3c63395328b0a399bc7c23e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7de1b143e45d174cbad70b3e69e420d1ee9744ed3c63395328b0a399bc7c23e->enter($__internal_b7de1b143e45d174cbad70b3e69e420d1ee9744ed3c63395328b0a399bc7c23e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
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
        
        $__internal_266fb635a500ee9a36742c6f25bffd161bb9e86f8cdf773264fd8682eb28fbed->leave($__internal_266fb635a500ee9a36742c6f25bffd161bb9e86f8cdf773264fd8682eb28fbed_prof);

        
        $__internal_b7de1b143e45d174cbad70b3e69e420d1ee9744ed3c63395328b0a399bc7c23e->leave($__internal_b7de1b143e45d174cbad70b3e69e420d1ee9744ed3c63395328b0a399bc7c23e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ebfdab479171e3efe8df004a8c78793af0c2974d7813b8e968bf17331a1fef5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebfdab479171e3efe8df004a8c78793af0c2974d7813b8e968bf17331a1fef5d->enter($__internal_ebfdab479171e3efe8df004a8c78793af0c2974d7813b8e968bf17331a1fef5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_11ca3598551113f6abaf40725ac62ea56be5f8d81df1c916298dd6da9a44929d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11ca3598551113f6abaf40725ac62ea56be5f8d81df1c916298dd6da9a44929d->enter($__internal_11ca3598551113f6abaf40725ac62ea56be5f8d81df1c916298dd6da9a44929d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_11ca3598551113f6abaf40725ac62ea56be5f8d81df1c916298dd6da9a44929d->leave($__internal_11ca3598551113f6abaf40725ac62ea56be5f8d81df1c916298dd6da9a44929d_prof);

        
        $__internal_ebfdab479171e3efe8df004a8c78793af0c2974d7813b8e968bf17331a1fef5d->leave($__internal_ebfdab479171e3efe8df004a8c78793af0c2974d7813b8e968bf17331a1fef5d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_130bafa71cb311e5fbd7b9564b8971a717ffe09d66671a489341c561d0f0817a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_130bafa71cb311e5fbd7b9564b8971a717ffe09d66671a489341c561d0f0817a->enter($__internal_130bafa71cb311e5fbd7b9564b8971a717ffe09d66671a489341c561d0f0817a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_4cddd48ba960f33f4261b0294bb3658db3d023b7916f9f20ad3ab5ebb5900c4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cddd48ba960f33f4261b0294bb3658db3d023b7916f9f20ad3ab5ebb5900c4b->enter($__internal_4cddd48ba960f33f4261b0294bb3658db3d023b7916f9f20ad3ab5ebb5900c4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_4cddd48ba960f33f4261b0294bb3658db3d023b7916f9f20ad3ab5ebb5900c4b->leave($__internal_4cddd48ba960f33f4261b0294bb3658db3d023b7916f9f20ad3ab5ebb5900c4b_prof);

        
        $__internal_130bafa71cb311e5fbd7b9564b8971a717ffe09d66671a489341c561d0f0817a->leave($__internal_130bafa71cb311e5fbd7b9564b8971a717ffe09d66671a489341c561d0f0817a_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_ea6e2ca96371aa319ff2f37e4c1c23c07ecf59ab280bc8f58a3cfe98cfbfd362 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea6e2ca96371aa319ff2f37e4c1c23c07ecf59ab280bc8f58a3cfe98cfbfd362->enter($__internal_ea6e2ca96371aa319ff2f37e4c1c23c07ecf59ab280bc8f58a3cfe98cfbfd362_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_762b0d6a83af2f343f83d170a178f7daa71ccc0a298b6bad839302d1236eaf76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_762b0d6a83af2f343f83d170a178f7daa71ccc0a298b6bad839302d1236eaf76->enter($__internal_762b0d6a83af2f343f83d170a178f7daa71ccc0a298b6bad839302d1236eaf76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_762b0d6a83af2f343f83d170a178f7daa71ccc0a298b6bad839302d1236eaf76->leave($__internal_762b0d6a83af2f343f83d170a178f7daa71ccc0a298b6bad839302d1236eaf76_prof);

        
        $__internal_ea6e2ca96371aa319ff2f37e4c1c23c07ecf59ab280bc8f58a3cfe98cfbfd362->leave($__internal_ea6e2ca96371aa319ff2f37e4c1c23c07ecf59ab280bc8f58a3cfe98cfbfd362_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_46cf9584186c6bf219cdf3c77a6444cc5d84c341de35ac417cc762efdc93f596 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46cf9584186c6bf219cdf3c77a6444cc5d84c341de35ac417cc762efdc93f596->enter($__internal_46cf9584186c6bf219cdf3c77a6444cc5d84c341de35ac417cc762efdc93f596_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_0b79ae480df1f61df71fbb30d5911478e110ea1e166f3f970a801e972734c084 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b79ae480df1f61df71fbb30d5911478e110ea1e166f3f970a801e972734c084->enter($__internal_0b79ae480df1f61df71fbb30d5911478e110ea1e166f3f970a801e972734c084_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_0b79ae480df1f61df71fbb30d5911478e110ea1e166f3f970a801e972734c084->leave($__internal_0b79ae480df1f61df71fbb30d5911478e110ea1e166f3f970a801e972734c084_prof);

        
        $__internal_46cf9584186c6bf219cdf3c77a6444cc5d84c341de35ac417cc762efdc93f596->leave($__internal_46cf9584186c6bf219cdf3c77a6444cc5d84c341de35ac417cc762efdc93f596_prof);

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
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/var/vhosts/sfblogapi/web/app/Resources/views/base.html.twig");
    }
}
