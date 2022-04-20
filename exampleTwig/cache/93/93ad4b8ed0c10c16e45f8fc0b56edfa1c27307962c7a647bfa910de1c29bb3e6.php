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

/* example1.twig */
class __TwigTemplate_ec8665d3c9cafca48185a7175ff44f591ec7147e8a159744b9704b623e7ba750 extends Template
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
        echo "<h2>Базовое использование, вывод переменных</h2>
";
        // line 3
        $context["greeting"] = "Привет ";
        // line 4
        echo "
";
        // line 6
        echo twig_escape_filter($this->env, (($context["greeting"] ?? null) . twig_upper_filter($this->env, ($context["name"] ?? null))), "html", null, true);
        echo " <br>

";
        // line 9
        echo "arr[id] = ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["arr"] ?? null), "id", [], "any", false, false, false, 9), "html", null, true);
        echo " <br>

Код code | e: ";
        // line 11
        echo twig_escape_filter($this->env, ($context["code"] ?? null));
        echo " <br>
Код code | raw: ";
        // line 12
        echo ($context["code"] ?? null);
        echo " <br>

";
        // line 15
        echo twig_var_dump($this->env, $context, ...[0 => range(1, 5)]);
        echo " <br>

";
        // line 18
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d/m/Y H:i", "Europe/Moscow"), "html", null, true);
        echo " <br>

";
    }

    public function getTemplateName()
    {
        return "example1.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 18,  65 => 15,  60 => 12,  56 => 11,  50 => 9,  45 => 6,  42 => 4,  40 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h2>Базовое использование, вывод переменных</h2>
{# Переменные #}
{% set greeting = 'Привет ' %}

{# Вывод переменных #}
{{ greeting ~ name | upper }} <br>

{# Доступ к массиву #}
arr[id] = {{ arr.id }} <br>

Код code | e: {{ code | e }} <br>
Код code | raw: {{ code | raw }} <br>

{# Отладка #}
{{ dump(1..5) }} <br>

{# Форматированный вывод даты #}
{{ \"now\"|date('d/m/Y H:i', timezone=\"Europe/Moscow\") }} <br>

", "example1.twig", "C:\\OpenServer\\domains\\localhost\\example1.twig");
    }
}
