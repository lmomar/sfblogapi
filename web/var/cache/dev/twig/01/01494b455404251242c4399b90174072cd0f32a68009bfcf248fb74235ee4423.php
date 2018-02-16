<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_711981281956c9595012d3200cf6df1120ec4e29538590673ec3a419a6f57daa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_969f2781758d1f40010efa2ee5ef53ec350dc1a030203aaea4440f37b5a4a933 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_969f2781758d1f40010efa2ee5ef53ec350dc1a030203aaea4440f37b5a4a933->enter($__internal_969f2781758d1f40010efa2ee5ef53ec350dc1a030203aaea4440f37b5a4a933_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_eb767af03ca8c9b4fb913f953d24bc0b101f17d27624bf86c04c3edcff215bb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb767af03ca8c9b4fb913f953d24bc0b101f17d27624bf86c04c3edcff215bb3->enter($__internal_eb767af03ca8c9b4fb913f953d24bc0b101f17d27624bf86c04c3edcff215bb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_969f2781758d1f40010efa2ee5ef53ec350dc1a030203aaea4440f37b5a4a933->leave($__internal_969f2781758d1f40010efa2ee5ef53ec350dc1a030203aaea4440f37b5a4a933_prof);

        
        $__internal_eb767af03ca8c9b4fb913f953d24bc0b101f17d27624bf86c04c3edcff215bb3->leave($__internal_eb767af03ca8c9b4fb913f953d24bc0b101f17d27624bf86c04c3edcff215bb3_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "@Twig/Exception/exception.json.twig", "/var/vhosts/sfblogapi/web/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
