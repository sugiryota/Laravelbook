<?php

/* display/export/select_options.twig */
class __TwigTemplate_9030a0fa038e9e71c51ffbf78d10944193f905fcfb30c3a0c68079aed6253714 extends Twig_Template
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
        echo "<div>
    <p>
        <a href=\"#\" onclick=\"setSelectOptions('dump', 'db_select[]', true); return false;\">";
        // line 4
        echo _gettext("Select all");
        // line 5
        echo "        </a>
        /
        <a href=\"#\" onclick=\"setSelectOptions('dump', 'db_select[]', false); return false;\">";
        // line 8
        echo _gettext("Unselect all");
        // line 9
        echo "        </a>
    </p>

    <select name=\"db_select[]\" id=\"db_select\" size=\"10\" multiple>";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["databases"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["database"]) {
            // line 14
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["database"], "name", array()), "html", null, true);
            echo "\"";
            echo (($this->getAttribute($context["database"], "is_selected", array())) ? (" selected") : (""));
            echo ">";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["database"], "name", array()), "html", null, true);
            echo "
            </option>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['database'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "    </select>
</div>
";
    }

    public function getTemplateName()
    {
        return "display/export/select_options.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 18,  46 => 15,  40 => 14,  36 => 13,  31 => 9,  29 => 8,  25 => 5,  23 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "display/export/select_options.twig", "/Users/sugi/Desktop/project/PHP/Laravelbook/book/public/phpMyAdmin/templates/display/export/select_options.twig");
    }
}
