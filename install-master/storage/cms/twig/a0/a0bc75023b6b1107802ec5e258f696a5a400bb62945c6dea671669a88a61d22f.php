<?php

/* /var/www/html/cms/laravel/october/install-master/themes/vojtasvoboda-newage/partials/modules/footer.htm */
class __TwigTemplate_2f872582806a04fbdd7b55f796fe745d1078d3403058fc54c90afb5c3861b576 extends Twig_Template
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
        echo "<footer>
    <div class=\"container\">
        <p>";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "theme", array()), "footer", array()), "html", null, true);
        echo "</p>
        ";
        // line 4
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "theme", array()), "footer_menu", array())) {
            // line 5
            echo "        <ul class=\"list-inline\">
            ";
            // line 6
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("modules/nav-items.htm"            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 7
            echo "        </ul>
        ";
        }
        // line 9
        echo "    </div>
</footer>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/cms/laravel/october/install-master/themes/vojtasvoboda-newage/partials/modules/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 9,  36 => 7,  32 => 6,  29 => 5,  27 => 4,  23 => 3,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<footer>
    <div class=\"container\">
        <p>{{ this.theme.footer }}</p>
        {% if this.theme.footer_menu %}
        <ul class=\"list-inline\">
            {% partial 'modules/nav-items.htm' %}
        </ul>
        {% endif %}
    </div>
</footer>", "/var/www/html/cms/laravel/october/install-master/themes/vojtasvoboda-newage/partials/modules/footer.htm", "");
    }
}
