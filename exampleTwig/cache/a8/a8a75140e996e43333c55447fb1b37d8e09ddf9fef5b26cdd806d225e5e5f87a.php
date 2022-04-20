<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* example2.twig */
class __TwigTemplate_8d81b3fe70a8c96592116da6bfc7fcb5da8be9eb8da662fd3a5917864afd0aa5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<h2>Условия</h2>

";
        // line 4
        if (($context["auth"] ?? null)) {
            // line 5
            echo "    Добро пожаловать ";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "
";
        } else {
            // line 7
            echo "    <form action=\"\">
        <input type=\"text\">
        <input type=\"password\">
        <input type=\"submit\">
    </form>
";
        }
        // line 13
        echo "
";
        // line 15
        echo (((0 === twig_compare(($context["value"] ?? null), 23))) ? ("23") : ("not 23"));
        echo " <br>

";
        // line 18
        (((array_key_exists("test", $context) &&  !(null === ($context["test"] ?? null)))) ? (print (twig_escape_filter($this->env, ($context["test"] ?? null), "html", null, true))) : (print ("Значение, если test не существует")));
    }

    public function getTemplateName()
    {
        return "example2.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 18,  60 => 15,  57 => 13,  49 => 7,  43 => 5,  41 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h2>Условия</h2>

{# Проверка условий #}
{% if auth %}
    Добро пожаловать {{ name }}
{% else %}
    <form action=\"\">
        <input type=\"text\">
        <input type=\"password\">
        <input type=\"submit\">
    </form>
{% endif %}

{# Тернарник #}
{{ value == 23 ? '23' : 'not 23' }} <br>

{# Определена ли переменная #}
{{ test ?? 'Значение, если test не существует' }}", "example2.twig", "C:\\OpenServer\\domains\\localhost\\example2.twig");
    }
}
