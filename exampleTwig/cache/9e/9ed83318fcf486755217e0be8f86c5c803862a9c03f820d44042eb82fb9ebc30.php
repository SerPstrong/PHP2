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
class __TwigTemplate_362ec1737cab2bf6c4f49aad987f452825f60b750262f2993f89d4cb7394525f extends Template
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
        if ((0 === twig_compare(($context["auth"] ?? null), true))) {
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
        return new Source("", "example2.twig", "C:\\OpenServer\\domains\\localhost\\example2.twig");
    }
}
