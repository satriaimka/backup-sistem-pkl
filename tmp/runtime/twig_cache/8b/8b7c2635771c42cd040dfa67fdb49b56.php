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

/* ./subviews/survey/group_subviews/group_name.twig */
class __TwigTemplate_8a2b09b495c8dbffe1b5fb348daa7c31 extends Template
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
        // line 20
        yield "
<!-- Group Name -->
";
        // line 22
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["aGroup"] ?? null), "showgroupinfo", [], "any", false, false, true, 22) == "N") || (CoreExtension::getAttribute($this->env, $this->source, ($context["aGroup"] ?? null), "showgroupinfo", [], "any", false, false, true, 22) == "B"))) {
            // line 23
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "format", [], "any", false, false, true, 23) != "A")) {
                // line 24
                yield "    <h1 class=\"";
                yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 24), "grouptitle", [], "any", false, false, true, 24), 24, $this->source);
                yield "\" ";
                yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 24), "grouptitle", [], "any", false, false, true, 24), 24, $this->source);
                yield ">
        ";
                // line 25
                yield LS_Twig_Extension::processString($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["aGroup"] ?? null), "name", [], "any", false, false, true, 25), 25, $this->source));
                yield "
    </h1>
    ";
            } else {
                // line 28
                yield "    <h2 class=\"";
                yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 28), "grouptitle", [], "any", false, false, true, 28), 28, $this->source);
                yield "\" ";
                yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 28), "grouptitle", [], "any", false, false, true, 28), 28, $this->source);
                yield ">
        ";
                // line 29
                yield LS_Twig_Extension::processString($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["aGroup"] ?? null), "name", [], "any", false, false, true, 29), 29, $this->source));
                yield "
    </h2>
    ";
            }
        }
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "./subviews/survey/group_subviews/group_name.twig";
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
        return array (  68 => 29,  61 => 28,  55 => 25,  48 => 24,  46 => 23,  44 => 22,  40 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "./subviews/survey/group_subviews/group_name.twig", "C:\\laragon\\www\\backup-sistem-pkl\\themes\\survey\\fruity_twentythree\\views\\subviews\\survey\\group_subviews\\group_name.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 22);
        static $filters = array();
        static $functions = array("processString" => 25);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                [],
                ['processString'],
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
