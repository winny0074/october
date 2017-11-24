<?php

/* /var/www/html/cms/laravel/october/install-master/themes/vojtasvoboda-newage/partials/modules/nav-items.htm */
class __TwigTemplate_c71ab71d67b467768c9f64ed9e2af7bf12ccaa83f6e0777638dc5ace3693f47a extends Twig_Template
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
        // line 1
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "theme", array()), "download_enabled", array())) {
            // line 2
            echo "<li>
    <a class=\"page-scroll\" href=\"#download\">Download</a>
</li>
";
        }
        // line 6
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "theme", array()), "features_enabled", array())) {
            // line 7
            echo "<li>
    <a class=\"page-scroll\" href=\"#features\">Features</a>
</li>
";
        }
        // line 11
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "theme", array()), "contact_enabled", array())) {
            // line 12
            echo "<li>
    <a class=\"page-scroll\" href=\"#contact\">Contact</a>
</li>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/cms/laravel/october/install-master/themes/vojtasvoboda-newage/partials/modules/nav-items.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 12,  35 => 11,  29 => 7,  27 => 6,  21 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if this.theme.download_enabled %}
<li>
    <a class=\"page-scroll\" href=\"#download\">Download</a>
</li>
{% endif %}
{% if this.theme.features_enabled %}
<li>
    <a class=\"page-scroll\" href=\"#features\">Features</a>
</li>
{% endif %}
{% if this.theme.contact_enabled %}
<li>
    <a class=\"page-scroll\" href=\"#contact\">Contact</a>
</li>
{% endif %}", "/var/www/html/cms/laravel/october/install-master/themes/vojtasvoboda-newage/partials/modules/nav-items.htm", "");
    }
}
