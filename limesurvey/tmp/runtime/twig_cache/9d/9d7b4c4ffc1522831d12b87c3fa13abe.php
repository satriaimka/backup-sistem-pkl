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

/* ./subviews/survey/question_subviews/valid_message_and_help.twig */
class __TwigTemplate_9270d13d23bc5c6074ccdb5d0e1983ee extends Template
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
        // line 21
        yield "
<!-- LimeSurvey valid message and help -->
<div id=\"ls-question-validation-";
        // line 23
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["aQuestion"] ?? null), "SGQ", [], "any", false, false, true, 23), 23, $this->source);
        yield "\" class=\"";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 23), "questionvalidcontainer", [], "any", false, false, true, 23), 23, $this->source);
        yield " text-info col-12\" ";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 23), "questionvalidcontainer", [], "any", false, false, true, 23), 23, $this->source);
        yield ">
    ";
        // line 24
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["aQuestion"] ?? null), "valid_message", [], "any", false, false, true, 24), 24, $this->source);
        yield " ";
        // line 25
        yield "    ";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["aQuestion"] ?? null), "man_message", [], "any", false, false, true, 25), 25, $this->source);
        yield " ";
        // line 26
        yield "    ";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["aQuestion"] ?? null), "file_valid_message", [], "any", false, false, true, 26), 26, $this->source);
        yield " ";
        // line 27
        yield "</div>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "./subviews/survey/question_subviews/valid_message_and_help.twig";
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
        return array (  63 => 27,  59 => 26,  55 => 25,  52 => 24,  44 => 23,  40 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "./subviews/survey/question_subviews/valid_message_and_help.twig", "C:\\laragon\\www\\backup-sistem-pkl\\limesurvey\\themes\\survey\\fruity_twentythree\\views\\subviews\\survey\\question_subviews\\valid_message_and_help.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("raw" => 24);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['raw'],
                [],
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
