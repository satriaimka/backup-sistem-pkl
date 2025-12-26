<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* /survey/questions/answer/list_dropdown/answer.twig */
class __TwigTemplate_df15580cdd595239048e3f4445aeae72 extends Template
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
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        yield "

<!-- List Dropdown -->

<!-- answer-->

<!-- answer-->
<div class=\"mb-3 row g-1 align-items-center ";
        // line 22
        yield $this->sandbox->ensureToStringAllowed(($context["coreClass"] ?? null), 22, $this->source);
        yield "\">
    <div class=\"col-auto\">
        <select
                class=\"form-select form-control list-question-select\"
                name=\"";
        // line 26
        yield $this->sandbox->ensureToStringAllowed(($context["name"] ?? null), 26, $this->source);
        yield "\"
                id=\"answer";
        // line 27
        yield $this->sandbox->ensureToStringAllowed(($context["name"] ?? null), 27, $this->source);
        yield "\"
                ";
        // line 28
        if (($context["dropdownSize"] ?? null)) {
            yield " size=";
            yield $this->sandbox->ensureToStringAllowed(($context["dropdownSize"] ?? null), 28, $this->source);
            yield " ";
        }
        // line 29
        yield "                aria-labelledby=\"ls-question-text-";
        yield $this->sandbox->ensureToStringAllowed(($context["basename"] ?? null), 29, $this->source);
        yield "\"
        >
                ";
        // line 32
        yield "                ";
        yield $this->sandbox->ensureToStringAllowed(($context["sOptions"] ?? null), 32, $this->source);
        yield "
        </select>
    </div>
        ";
        // line 36
        yield "        ";
        yield $this->sandbox->ensureToStringAllowed(($context["sOther"] ?? null), 36, $this->source);
        yield "

    ";
        // line 39
        yield "    ";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["C"] ?? null), "Html", [], "any", false, false, true, 39), "hiddenField", [("java" . $this->sandbox->ensureToStringAllowed(($context["name"] ?? null), 39, $this->source)), ($context["value"] ?? null), ["id" => ("java" . $this->sandbox->ensureToStringAllowed(        // line 40
($context["name"] ?? null), 40, $this->source)), "disabled" => "disabled"]], "method", false, false, true, 39), 39, $this->source);
        // line 43
        yield "
</div>

";
        // line 47
        yield LS_Twig_Extension::registerPackage("select2");
        yield "
";
        // line 49
        yield "
<script type=\"text/javascript\" charset=\"utf-8\">

\t\$(document).on('ready pjax:scriptcomplete',function(){
\t\t
\t\tinitSSD('";
        // line 54
        yield $this->sandbox->ensureToStringAllowed(($context["name"] ?? null), 54, $this->source);
        yield "'); 
\t\t
\t});
</script>
<!-- end of answer  -->
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "/survey/questions/answer/list_dropdown/answer.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  109 => 54,  102 => 49,  98 => 47,  93 => 43,  91 => 40,  89 => 39,  83 => 36,  76 => 32,  70 => 29,  64 => 28,  60 => 27,  56 => 26,  49 => 22,  40 => 15,);
    }

    public function getSourceContext()
    {
        return new Source("", "/survey/questions/answer/list_dropdown/answer.twig", "C:\\laragon\\www\\backup-sistem-pkl\\upload\\themes\\question\\Searchable-Dropdown\\survey\\questions\\answer\\list_dropdown\\answer.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 28);
        static $filters = array();
        static $functions = array("registerPackage" => 47);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                [],
                ['registerPackage'],
                $this->source
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
