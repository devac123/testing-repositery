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

/* modules/contrib/gtranslate/templates/gtranslate.html.twig */
class __TwigTemplate_6a677ee0a8f03e9423c2cac671ef7a86e1227b3427adeff1c53ec9dd245441d9 extends \Twig\Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "
<div class=\"gtranslate\">
";
        // line 11
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["gtranslate_html"] ?? null), 11, $this->source));
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "modules/contrib/gtranslate/templates/gtranslate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 11,  39 => 9,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Template for the gtranslate block
 * Available variables:
 * - gtranslate_html: html of the gtranslate block.
 */
#}

<div class=\"gtranslate\">
{{ gtranslate_html|raw }}
</div>", "modules/contrib/gtranslate/templates/gtranslate.html.twig", "C:\\xampp7.4\\htdocs\\ek\\testing-repositery\\web\\modules\\contrib\\gtranslate\\templates\\gtranslate.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("raw" => 11);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['raw'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
