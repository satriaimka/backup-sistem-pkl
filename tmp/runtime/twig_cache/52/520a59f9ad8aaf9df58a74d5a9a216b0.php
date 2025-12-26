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

/* ./subviews/navigation/save_links.twig */
class __TwigTemplate_f9768e398942b072d0d7f0b584fd6268 extends Template
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
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "aNavigator", [], "any", false, false, true, 20), "load", [], "any", false, false, true, 20), "show", [], "any", false, false, true, 20) == "Y")) {
            // line 21
            yield "    <!-- Load unfinished survey button -->
    <li class=\"nav-item ls-no-js-hidden px-2\" ";
            // line 22
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 22), "loadlinksli", [], "any", false, false, true, 22), 22, $this->source);
            yield ">
        <a href=\"#\" data-limesurvey-submit='{ \"loadall\":\"loadall\" }'
           class='nav-link ls-link-action ls-link-loadall'>
            ";
            // line 25
            yield gT("Load unfinished survey");
            yield "
        </a>
    </li>
";
        }
        // line 29
        yield "
";
        // line 30
        if ((((CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "access_mode", [], "any", false, false, true, 30) == "O") && (CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "hastokenstable", [], "any", false, false, true, 30) == true)) &&  !CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "filltoken", [], "any", false, false, true, 30))) {
            // line 31
            yield "    <!-- Fill token button -->
    <li class=\"nav-item ls-no-js-hidden\">
        <a href=\"";
            // line 33
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "surveyUrl", [], "any", false, false, true, 33), 33, $this->source);
            yield "?lang=en&filltoken=true\"
            class=\"nav-link ls-link-action\">
            ";
            // line 35
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "allowregister", [], "any", false, false, true, 35) == "Y")) {
                // line 36
                yield "                ";
                yield gT("Register");
                yield "
            ";
            } else {
                // line 38
                yield "                ";
                yield gT("Enter access code");
                yield "
            ";
            }
            // line 40
            yield "        </a>
    </li>
";
        }
        // line 43
        yield "
";
        // line 44
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "aNavigator", [], "any", false, false, true, 44), "save", [], "any", false, false, true, 44), "show", [], "any", false, false, true, 44) == "Y")) {
            // line 45
            yield "    <!-- Resume later button -->
    <li class=\"nav-item ls-no-js-hidden\">
        <a href=\"#\" data-limesurvey-submit='{ \"saveall\":\"saveall\" }' class='nav-link'>
            ";
            // line 48
            yield gT("Resume later");
            yield "
        </a>
        ";
            // line 50
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "saved", [], "any", false, false, true, 50), "text", [], "any", false, false, true, 50) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 50), "showpopups", [], "any", false, false, true, 50) > 0))) {
                // line 51
                yield "            <div class=\"alert-popup\"></div>
            ";
                // line 52
                yield LS_Twig_Extension::registerScript("saveflashmessage", (((("
                \$('.alert-popup').popover({
                    title: '" . $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 54
($context["aSurveyInfo"] ?? null), "saved", [], "any", false, false, true, 54), "title", [], "any", false, false, true, 54), 54, $this->source)) . "',
                    content: '<div>") . $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 55
($context["aSurveyInfo"] ?? null), "saved", [], "any", false, false, true, 55), "text", [], "any", false, false, true, 55), 55, $this->source)) . "</div>',
                    html: true,
                    container: 'body',
                    placement: 'bottom',
                    delay: { 'show': 500, 'hide': 100 },
                    trigger: 'click',
                }).popover('show');
                setTimeout(function(){ \$('.alert-popup').popover('dispose'); }, 3500);
                "), "POS_POSTSCRIPT");
                // line 63
                yield "
        ";
            }
            // line 65
            yield "    </li>
";
        }
        // line 67
        yield "
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "./subviews/navigation/save_links.twig";
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
        return array (  134 => 67,  130 => 65,  126 => 63,  116 => 55,  114 => 54,  111 => 52,  108 => 51,  106 => 50,  101 => 48,  96 => 45,  94 => 44,  91 => 43,  86 => 40,  80 => 38,  74 => 36,  72 => 35,  67 => 33,  63 => 31,  61 => 30,  58 => 29,  51 => 25,  45 => 22,  42 => 21,  40 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "./subviews/navigation/save_links.twig", "C:\\laragon\\www\\backup-sistem-pkl\\themes\\survey\\vanilla\\views\\subviews\\navigation\\save_links.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 20);
        static $filters = array();
        static $functions = array("gT" => 25, "registerScript" => 52);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                [],
                ['gT', 'registerScript'],
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
