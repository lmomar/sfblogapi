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
        $__internal_4f5949148ba79706011336ecb5d75a44d293dc038987815af73bf4eb73d7d372 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f5949148ba79706011336ecb5d75a44d293dc038987815af73bf4eb73d7d372->enter($__internal_4f5949148ba79706011336ecb5d75a44d293dc038987815af73bf4eb73d7d372_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_05b6e301483b9a9eed0b921c2bcb6877d8bf67926772e5c7c86bf220adf4e9b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05b6e301483b9a9eed0b921c2bcb6877d8bf67926772e5c7c86bf220adf4e9b7->enter($__internal_05b6e301483b9a9eed0b921c2bcb6877d8bf67926772e5c7c86bf220adf4e9b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_4f5949148ba79706011336ecb5d75a44d293dc038987815af73bf4eb73d7d372->leave($__internal_4f5949148ba79706011336ecb5d75a44d293dc038987815af73bf4eb73d7d372_prof);

        
        $__internal_05b6e301483b9a9eed0b921c2bcb6877d8bf67926772e5c7c86bf220adf4e9b7->leave($__internal_05b6e301483b9a9eed0b921c2bcb6877d8bf67926772e5c7c86bf220adf4e9b7_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d65ad685b9ca49f2e4a3e87c516f84bb5fe1d52d6418a8f3e603f6b1df916a5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d65ad685b9ca49f2e4a3e87c516f84bb5fe1d52d6418a8f3e603f6b1df916a5e->enter($__internal_d65ad685b9ca49f2e4a3e87c516f84bb5fe1d52d6418a8f3e603f6b1df916a5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_19d876783ee24735b72439140876013c75cecd27b072d747d9edf26712a8dc3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19d876783ee24735b72439140876013c75cecd27b072d747d9edf26712a8dc3f->enter($__internal_19d876783ee24735b72439140876013c75cecd27b072d747d9edf26712a8dc3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_19d876783ee24735b72439140876013c75cecd27b072d747d9edf26712a8dc3f->leave($__internal_19d876783ee24735b72439140876013c75cecd27b072d747d9edf26712a8dc3f_prof);

        
        $__internal_d65ad685b9ca49f2e4a3e87c516f84bb5fe1d52d6418a8f3e603f6b1df916a5e->leave($__internal_d65ad685b9ca49f2e4a3e87c516f84bb5fe1d52d6418a8f3e603f6b1df916a5e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b2a1646764026c5cb94436ce5859da3ebf8333c9639704cf49a480d21eb96b7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2a1646764026c5cb94436ce5859da3ebf8333c9639704cf49a480d21eb96b7e->enter($__internal_b2a1646764026c5cb94436ce5859da3ebf8333c9639704cf49a480d21eb96b7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_927a0e02827c25c653afb22521d279252c0194ccb8a97f800596d55868b495d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_927a0e02827c25c653afb22521d279252c0194ccb8a97f800596d55868b495d1->enter($__internal_927a0e02827c25c653afb22521d279252c0194ccb8a97f800596d55868b495d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_927a0e02827c25c653afb22521d279252c0194ccb8a97f800596d55868b495d1->leave($__internal_927a0e02827c25c653afb22521d279252c0194ccb8a97f800596d55868b495d1_prof);

        
        $__internal_b2a1646764026c5cb94436ce5859da3ebf8333c9639704cf49a480d21eb96b7e->leave($__internal_b2a1646764026c5cb94436ce5859da3ebf8333c9639704cf49a480d21eb96b7e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_99ea76bd2c0059caa1d721938f4586cb5cc6c10445d2bc3410c8e89ff90589e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99ea76bd2c0059caa1d721938f4586cb5cc6c10445d2bc3410c8e89ff90589e3->enter($__internal_99ea76bd2c0059caa1d721938f4586cb5cc6c10445d2bc3410c8e89ff90589e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4e9b230ee86ecd5e920ad0e63a8e0616b6dc2a3b78aaad55acaa57b7d3fcd41d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e9b230ee86ecd5e920ad0e63a8e0616b6dc2a3b78aaad55acaa57b7d3fcd41d->enter($__internal_4e9b230ee86ecd5e920ad0e63a8e0616b6dc2a3b78aaad55acaa57b7d3fcd41d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4e9b230ee86ecd5e920ad0e63a8e0616b6dc2a3b78aaad55acaa57b7d3fcd41d->leave($__internal_4e9b230ee86ecd5e920ad0e63a8e0616b6dc2a3b78aaad55acaa57b7d3fcd41d_prof);

        
        $__internal_99ea76bd2c0059caa1d721938f4586cb5cc6c10445d2bc3410c8e89ff90589e3->leave($__internal_99ea76bd2c0059caa1d721938f4586cb5cc6c10445d2bc3410c8e89ff90589e3_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9dafc231d5caed6b3c9b5017b48b1a42ef073c81cd59238ae3ea1c3a09a51268 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9dafc231d5caed6b3c9b5017b48b1a42ef073c81cd59238ae3ea1c3a09a51268->enter($__internal_9dafc231d5caed6b3c9b5017b48b1a42ef073c81cd59238ae3ea1c3a09a51268_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_84af48e0387a1f454ea4b776683f2858a434235916c09f05aae834b1a16c6d68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84af48e0387a1f454ea4b776683f2858a434235916c09f05aae834b1a16c6d68->enter($__internal_84af48e0387a1f454ea4b776683f2858a434235916c09f05aae834b1a16c6d68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_84af48e0387a1f454ea4b776683f2858a434235916c09f05aae834b1a16c6d68->leave($__internal_84af48e0387a1f454ea4b776683f2858a434235916c09f05aae834b1a16c6d68_prof);

        
        $__internal_9dafc231d5caed6b3c9b5017b48b1a42ef073c81cd59238ae3ea1c3a09a51268->leave($__internal_9dafc231d5caed6b3c9b5017b48b1a42ef073c81cd59238ae3ea1c3a09a51268_prof);

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
