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

/* javascript/redirect.twig */
class __TwigTemplate_61cd988207fba13429089607d8f8095f extends Template
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
        echo "<script type='text/javascript'>
    window.onload = function () {
        window.location = '";
        // line 3
        echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
        echo "';
    };
</script>
";
    }

    public function getTemplateName()
    {
        return "javascript/redirect.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "javascript/redirect.twig", "/Users/arnaud/T-WEB-501-MPL-5-1-jobboard-arnaud.troise/phpMyAdmin-5.2.0-all-languages/templates/javascript/redirect.twig");
    }
}
