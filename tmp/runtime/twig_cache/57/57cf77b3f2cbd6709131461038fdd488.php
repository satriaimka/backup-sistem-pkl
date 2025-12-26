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

/* survey/questions/answer/multipleshorttext/rows/answer_row_inputtext.twig */
class __TwigTemplate_ba8960ee89dcfc33487e4cbf033273f9 extends Template
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
<!--answer_row_inputtext -->
<li id=\"javatbd";
        // line 22
        yield $this->sandbox->ensureToStringAllowed(($context["myfname"] ?? null), 22, $this->source);
        yield "\" class=\"row question-item answer-item text-item mb-3";
        if (($context["alert"] ?? null)) {
            yield " ls-error-mandatory has-error";
        }
        yield $this->sandbox->ensureToStringAllowed(($context["extraclass"] ?? null), 22, $this->source);
        yield "\" ";
        yield $this->sandbox->ensureToStringAllowed(($context["sDisplayStyle"] ?? null), 22, $this->source);
        yield " >
    <label class=\"control-label col-12 col-md-";
        // line 23
        yield $this->sandbox->ensureToStringAllowed(($context["sLabelWidth"] ?? null), 23, $this->source);
        if ((($context["sLabelWidth"] ?? null) == 0)) {
            yield " d-none";
        }
        yield "\" for=\"answer";
        yield $this->sandbox->ensureToStringAllowed(($context["myfname"] ?? null), 23, $this->source);
        yield "\">
        ";
        // line 24
        yield LS_Twig_Extension::processString($this->sandbox->ensureToStringAllowed(($context["question"] ?? null), 24, $this->source));
        yield "
    </label>
    <div class=\"col-12 col-md-";
        // line 26
        yield $this->sandbox->ensureToStringAllowed(($context["sInputContainerWidth"] ?? null), 26, $this->source);
        yield "\">

        ";
        // line 28
        if (((($context["prefix"] ?? null) != "") || (($context["suffix"] ?? null) != ""))) {
            // line 29
            yield "        <div class=\"ls-input-group\">
            ";
        }
        // line 31
        yield "            ";
        if ((($context["prefix"] ?? null) != "")) {
            // line 32
            yield "                <div class=\"ls-input-group-extra prefix-text prefix\">
                    ";
            // line 33
            yield LS_Twig_Extension::processString($this->sandbox->ensureToStringAllowed(($context["prefix"] ?? null), 33, $this->source));
            yield "
                </div>
            ";
        }
        // line 36
        yield "            <input
                    class=\"form-control ";
        // line 37
        yield $this->sandbox->ensureToStringAllowed(($context["kpclass"] ?? null), 37, $this->source);
        yield "\"
                    type=\"text\"
                    name=\"";
        // line 39
        yield $this->sandbox->ensureToStringAllowed(($context["myfname"] ?? null), 39, $this->source);
        yield "\"
                    id=\"answer";
        // line 40
        yield $this->sandbox->ensureToStringAllowed(($context["myfname"] ?? null), 40, $this->source);
        yield "\"
                    value=\"";
        // line 41
        yield $this->sandbox->ensureToStringAllowed(($context["dispVal"] ?? null), 41, $this->source);
        yield "\"
                    placeholder=\"";
        // line 42
        yield LS_Twig_Extension::flatString(LS_Twig_Extension::processString($this->sandbox->ensureToStringAllowed(($context["placeholder"] ?? null), 42, $this->source), 1), 1);
        yield "\"
                    ";
        // line 43
        if (($context["inputsize"] ?? null)) {
            yield " size=\"";
            yield $this->sandbox->ensureToStringAllowed(($context["inputsize"] ?? null), 43, $this->source);
            yield "\" ";
        }
        // line 44
        yield "                    ";
        if (($context["maxlength"] ?? null)) {
            yield " maxlength=\"";
            yield $this->sandbox->ensureToStringAllowed(($context["maxlength"] ?? null), 44, $this->source);
            yield "\" ";
        }
        // line 45
        yield "                    ";
        if (($context["numbersonly"] ?? null)) {
            yield " data-number=\"";
            yield $this->sandbox->ensureToStringAllowed(($context["numbersonly"] ?? null), 45, $this->source);
            yield "\" ";
        }
        // line 46
        yield "            />
            ";
        // line 47
        if ((($context["suffix"] ?? null) != "")) {
            // line 48
            yield "                <div class=\"ls-input-group-extra suffix-text suffix\">
                    ";
            // line 49
            yield LS_Twig_Extension::processString($this->sandbox->ensureToStringAllowed(($context["suffix"] ?? null), 49, $this->source));
            yield "
                </div>
            ";
        }
        // line 52
        yield "            ";
        if (((($context["prefix"] ?? null) != "") || (($context["suffix"] ?? null) != ""))) {
            // line 53
            yield "        </div>
        ";
        }
        // line 55
        yield "    </div>
</li>
<!-- end of answer_row_inputtext -->
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "survey/questions/answer/multipleshorttext/rows/answer_row_inputtext.twig";
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
        return array (  157 => 55,  153 => 53,  150 => 52,  144 => 49,  141 => 48,  139 => 47,  136 => 46,  129 => 45,  122 => 44,  116 => 43,  112 => 42,  108 => 41,  104 => 40,  100 => 39,  95 => 37,  92 => 36,  86 => 33,  83 => 32,  80 => 31,  76 => 29,  74 => 28,  69 => 26,  64 => 24,  55 => 23,  44 => 22,  40 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "survey/questions/answer/multipleshorttext/rows/answer_row_inputtext.twig", "C:\\laragon\\www\\backup-sistem-pkl\\application\\views\\survey\\questions\\answer\\multipleshorttext\\rows\\answer_row_inputtext.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 22);
        static $filters = array();
        static $functions = array("processString" => 24, "flatString" => 42);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                [],
                ['processString', 'flatString'],
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
