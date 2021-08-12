<?php

/* display/export/method.twig */
class __TwigTemplate_f842aab4d15b91c9164bdbaffde8f8e836432b302adde62e9d1a42eb726aa58c extends Twig_Template
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
        if ((($context["export_method"] ?? null) != "custom-no-form")) {
            // line 2
            echo "    <div class=\"exportoptions\" id=\"quick_or_custom\">
        <h3>";
            // line 3
            echo _gettext("Export method:");
            echo "</h3>
        <ul>
            <li>
                <input type=\"radio\" name=\"quick_or_custom\" value=\"quick\" id=\"radio_quick_export\"";
            // line 7
            echo (((($context["export_method"] ?? null) == "quick")) ? (" checked") : (""));
            echo ">
                <label for=\"radio_quick_export\">";
            // line 9
            echo _gettext("Quick - display only the minimal options");
            // line 10
            echo "                </label>
            </li>

            <li>
                <input type=\"radio\" name=\"quick_or_custom\" value=\"custom\" id=\"radio_custom_export\"";
            // line 15
            echo (((($context["export_method"] ?? null) == "custom")) ? (" checked") : (""));
            echo ">
                <label for=\"radio_custom_export\">";
            // line 17
            echo _gettext("Custom - display all possible options");
            // line 18
            echo "                </label>
            </li>
        </ul>
    </div>";
        }
    }

    public function getTemplateName()
    {
        return "display/export/method.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 18,  46 => 17,  42 => 15,  36 => 10,  34 => 9,  30 => 7,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "display/export/method.twig", "/Users/sugi/Desktop/project/PHP/Laravelbook/book/public/phpMyAdmin/templates/display/export/method.twig");
    }
}
