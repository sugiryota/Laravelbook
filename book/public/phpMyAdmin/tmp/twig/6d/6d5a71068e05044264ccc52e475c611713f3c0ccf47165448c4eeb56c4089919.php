<?php

/* display/export/options_output_separate_files.twig */
class __TwigTemplate_b086b0134ce9ef3a40dd745df08703b7cc2683ff2434b098a48db0242a8eb5a8 extends Twig_Template
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
        echo "<li>
    <input type=\"checkbox\" id=\"checkbox_as_separate_files\"
        name=\"as_separate_files\" value=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["export_type"] ?? null), "html", null, true);
        echo "\"";
        // line 4
        echo ((($context["is_checked"] ?? null)) ? (" checked") : (""));
        echo ">
    <label for=\"checkbox_as_separate_files\">";
        // line 6
        if ((($context["export_type"] ?? null) == "server")) {
            // line 7
            echo _gettext("Export databases as separate files");
        } elseif ((        // line 8
($context["export_type"] ?? null) == "database")) {
            // line 9
            echo _gettext("Export tables as separate files");
        }
        // line 11
        echo "    </label>
</li>
";
    }

    public function getTemplateName()
    {
        return "display/export/options_output_separate_files.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 11,  36 => 9,  34 => 8,  32 => 7,  30 => 6,  26 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "display/export/options_output_separate_files.twig", "/Users/sugi/Desktop/project/PHP/Laravelbook/book/public/phpMyAdmin/templates/display/export/options_output_separate_files.twig");
    }
}
