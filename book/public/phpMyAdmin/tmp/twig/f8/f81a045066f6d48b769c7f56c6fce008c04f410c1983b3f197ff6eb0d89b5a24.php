<?php

/* server/variables/link_template.twig */
class __TwigTemplate_b826bc697ba9db76841b63a07b79e71c6500a4efc25025c740373e907adf1e49 extends Twig_Template
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
        echo "<a href=\"";
        echo ($context["url"] ?? null);
        echo "\" class=\"ajax saveLink hide\">";
        // line 2
        echo PhpMyAdmin\Util::getIcon("b_save", _gettext("Save"));
        echo "
</a>
<a href=\"#\" class=\"cancelLink hide\">";
        // line 5
        echo PhpMyAdmin\Util::getIcon("b_close", _gettext("Cancel"));
        echo "
</a>";
        // line 7
        echo PhpMyAdmin\Util::getImage("b_help", _gettext("Documentation"), array("class" => "hide", "id" => "docImage"));
        // line 10
        echo "
";
    }

    public function getTemplateName()
    {
        return "server/variables/link_template.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 10,  32 => 7,  28 => 5,  23 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "server/variables/link_template.twig", "/Users/sugi/Desktop/project/PHP/Laravelbook/book/public/phpMyAdmin/templates/server/variables/link_template.twig");
    }
}
