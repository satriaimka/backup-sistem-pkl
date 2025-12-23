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

/* /survey/questions/answer/listradio/answer.twig */
class __TwigTemplate_893ac1fdcf27c729887d541717717400 extends Template
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
        // line 9
        yield "
<!-- List Radio -->

<!-- answer -->
";
        // line 13
        yield $this->sandbox->ensureToStringAllowed(($context["sTimer"] ?? null), 13, $this->source);
        yield "
<ul class=\"";
        // line 14
        yield $this->sandbox->ensureToStringAllowed(($context["coreClass"] ?? null), 14, $this->source);
        yield " list-unstyled ";
        if ((($context["iNbCols"] ?? null) > 1)) {
            yield " ls-column-count-";
            yield $this->sandbox->ensureToStringAllowed(($context["iNbCols"] ?? null), 14, $this->source);
        }
        yield "\" role=\"radiogroup\" aria-labelledby=\"ls-question-text-";
        yield $this->sandbox->ensureToStringAllowed(($context["name"] ?? null), 14, $this->source);
        yield "\"";
        if ((($context["iNbCols"] ?? null) > 1)) {
            yield " data-column-count=";
            yield $this->sandbox->ensureToStringAllowed(($context["iNbCols"] ?? null), 14, $this->source);
        }
        yield ">
    ";
        // line 16
        yield "    ";
        yield $this->sandbox->ensureToStringAllowed(($context["sRows"] ?? null), 16, $this->source);
        yield "
</ul>
";
        // line 19
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["C"] ?? null), "Html", [], "any", false, false, true, 19), "hiddenField", [("java" . $this->sandbox->ensureToStringAllowed(($context["name"] ?? null), 19, $this->source)), ($context["value"] ?? null), ["id" => ("java" . $this->sandbox->ensureToStringAllowed(        // line 20
($context["name"] ?? null), 20, $this->source)), "disabled" => true]], "method", false, false, true, 19), 19, $this->source);
        // line 23
        yield "
<!-- end of answer -->
 
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "/survey/questions/answer/listradio/answer.twig";
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
        return array (  75 => 23,  73 => 20,  72 => 19,  66 => 16,  50 => 14,  46 => 13,  40 => 9,);
    }

    public function getSourceContext()
    {
        return new Source("", "/survey/questions/answer/listradio/answer.twig", "C:\\laragon\\www\\backup-sistem-pkl\\limesurvey\\application\\views\\survey\\questions\\answer\\listradio\\answer.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 14);
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                [],
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
