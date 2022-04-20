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

/* example3.twig */
class __TwigTemplate_c579a611389d9b9f42772572ed4af302467ded468c5b63283ebefad6768f7125 extends Template
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
        echo "<h2>Циклы</h2>

";
        // line 4
        echo "<ul>
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["menuItems"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 6
            echo "        <li>";
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "</ul>

";
        // line 11
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["arrKeys"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["item"]) {
            // line 12
            echo "        Ключ: ";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo " Значение: ";
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo " <br>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "example3.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  61 => 11,  57 => 8,  48 => 6,  44 => 5,  41 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h2>Циклы</h2>

{# Цикл for по массиву #}
<ul>
    {% for item in menuItems %}
        <li>{{ item }}</li>
    {% endfor %}
</ul>

{# Цикл for с доступом к ключам #}
    {% for key, item in arrKeys %}
        Ключ: {{ key }} Значение: {{ item }} <br>
    {% endfor %}
", "example3.twig", "C:\\OpenServer\\domains\\localhost\\example3.twig");
    }
}
