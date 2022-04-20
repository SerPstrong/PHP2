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
class __TwigTemplate_55cec397e82dc6434afe1763e3b93e99caf90a8d475bceda89ad89f58a37a17a extends Template
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
        $context["greeting"] = "Привет ";
        // line 2
        echo "
";
        // line 3
        echo twig_escape_filter($this->env, (($context["greeting"] ?? null) . twig_lower_filter($this->env, ($context["name"] ?? null))), "html", null, true);
        echo " <br>
";
        // line 4
        echo twig_var_dump($this->env, $context, ...[0 => range(1, 5)]);
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
        return array (  46 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "example1.twig", "C:\\OpenServer\\domains\\localhost\\example1.twig");
    }
}
