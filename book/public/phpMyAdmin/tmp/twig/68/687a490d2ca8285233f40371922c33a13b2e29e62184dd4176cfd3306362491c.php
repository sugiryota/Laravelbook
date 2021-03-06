<?php

/* display/export/hidden_inputs.twig */
class __TwigTemplate_58bab124b74a87cc1e3562ea4a5b3e83335e6315fe2b6f4b66a2c4b06702347d extends Twig_Template
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
        if ((($context["export_type"] ?? null) == "server")) {
            // line 2
            echo PhpMyAdmin\Url::getHiddenInputs("", "", 1);
        } elseif ((        // line 3
($context["export_type"] ?? null) == "database")) {
            // line 4
            echo PhpMyAdmin\Url::getHiddenInputs(($context["db"] ?? null), "", 1);
        } else {
            // line 6
            echo PhpMyAdmin\Url::getHiddenInputs(($context["db"] ?? null), ($context["table"] ?? null), 1);
        }
        // line 10
        if ( !twig_test_empty(($context["single_table"] ?? null))) {
            // line 11
            echo "    <input type=\"hidden\" name=\"single_table\" value=\"TRUE\">";
        }
        // line 13
        echo "
<input type=\"hidden\" name=\"export_type\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, ($context["export_type"] ?? null), "html", null, true);
        echo "\">";
        // line 17
        echo "<input type=\"hidden\" name=\"export_method\" value=\"";
        echo twig_escape_filter($this->env, ($context["export_method"] ?? null), "html", null, true);
        echo "\">";
        // line 19
        if ( !twig_test_empty(($context["sql_query"] ?? null))) {
            // line 20
            echo "    <input type=\"hidden\" name=\"sql_query\" value=\"";
            echo twig_escape_filter($this->env, ($context["sql_query"] ?? null), "html", null, true);
            echo "\">";
        }
        // line 22
        echo "
<input type=\"hidden\" name=\"template_id\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, ($context["template_id"] ?? null), "html", null, true);
        echo "\">
";
    }

    public function getTemplateName()
    {
        return "display/export/hidden_inputs.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 23,  53 => 22,  48 => 20,  46 => 19,  42 => 17,  39 => 14,  36 => 13,  33 => 11,  31 => 10,  28 => 6,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "display/export/hidden_inputs.twig", "/Users/sugi/Desktop/project/PHP/Laravelbook/book/public/phpMyAdmin/templates/display/export/hidden_inputs.twig");
    }
}
