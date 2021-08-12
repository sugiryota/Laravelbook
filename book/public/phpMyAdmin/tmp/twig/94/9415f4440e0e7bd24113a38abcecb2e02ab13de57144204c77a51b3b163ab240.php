<?php

/* encoding/kanji_encoding_form.twig */
class __TwigTemplate_d31ba0768dd55a003f54927bce1614aa2c8d802dd339ecd7bf1045807817fe0b extends Twig_Template
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
        echo "<ul>
    <li>
        <input type=\"radio\" name=\"knjenc\" value=\"\" checked=\"checked\" id=\"kj-none\" />
        <label for=\"kj-none\">";
        // line 6
        echo _pgettext(        "None encoding conversion", "None");
        // line 7
        echo "        </label>
        <input type=\"radio\" name=\"knjenc\" value=\"EUC-JP\" id=\"kj-euc\" />
        <label for=\"kj-euc\">EUC</label>
        <input type=\"radio\" name=\"knjenc\" value=\"SJIS\" id=\"kj-sjis\" />
        <label for=\"kj-sjis\">SJIS</label>
    </li>
    <li>
        <input type=\"checkbox\" name=\"xkana\" value=\"kana\" id=\"kj-kana\" />
        <label for=\"kj-kana\">";
        // line 17
        echo _gettext("Convert to Kana");
        // line 18
        echo "        </label>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "encoding/kanji_encoding_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 18,  36 => 17,  26 => 7,  24 => 6,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "encoding/kanji_encoding_form.twig", "/Users/sugi/Desktop/project/PHP/Laravelbook/book/public/phpMyAdmin/templates/encoding/kanji_encoding_form.twig");
    }
}
