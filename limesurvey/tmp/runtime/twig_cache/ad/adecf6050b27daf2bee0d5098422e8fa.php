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

/* ./subviews/survey/question_container.twig */
class __TwigTemplate_f4b9eb23e8293bde639083165e144fa7 extends Template
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
        // line 1
        yield "<!-- Question ";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["aQuestion"] ?? null), "qid", [], "any", false, false, true, 1), 1, $this->source);
        yield " -->
";
        // line 2
        $context["hasImage"] = (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aQuestion"] ?? null), "image", [], "any", false, true, true, 2), "image_path", [], "array", true, true, true, 2) && (($__internal_compile_0 = CoreExtension::getAttribute($this->env, $this->source, ($context["aQuestion"] ?? null), "image", [], "any", false, false, true, 2)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess && in_array(get_class($__internal_compile_0), CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($__internal_compile_0["image_path"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aQuestion"] ?? null), "image", [], "any", false, false, true, 2), "image_path", [], "array", false, false, true, 2)));
        // line 3
        yield "
<div role=\"group\" aria-labelledby=\"question-text-container-";
        // line 4
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["aQuestion"] ?? null), "SGQ", [], "any", false, false, true, 4), 4, $this->source);
        yield "\" ";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["aQuestion"] ?? null), "attributes", [], "any", false, false, true, 4), 4, $this->source);
        yield " class=\"row ";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["aQuestion"] ?? null), "class", [], "any", false, false, true, 4), 4, $this->source);
        yield " ";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["aQuestion"] ?? null), "input_error_class", [], "any", false, false, true, 4), 4, $this->source);
        yield " ";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 4), "questioncontainer", [], "any", false, false, true, 4), 4, $this->source);
        yield "\" ";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 4), "questioncontainer", [], "any", false, false, true, 4), 4, $this->source);
        yield ">
    ";
        // line 5
        if (($context["hasImage"] ?? null)) {
            // line 6
            yield "        ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "./subviews/survey/question_subviews/question_image_container.twig");
            yield "
    ";
        } else {
            // line 8
            yield "        ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "./subviews/survey/question.twig");
            yield "
    ";
        }
        // line 10
        yield "</div>
<!-- End of question ";
        // line 11
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["aQuestion"] ?? null), "qid", [], "any", false, false, true, 11), 11, $this->source);
        yield " -->";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "./subviews/survey/question_container.twig";
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
        return array (  81 => 11,  78 => 10,  72 => 8,  66 => 6,  64 => 5,  50 => 4,  47 => 3,  45 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "./subviews/survey/question_container.twig", "C:\\laragon\\www\\backup-sistem-pkl\\limesurvey\\themes\\survey\\fruity_twentythree\\views\\subviews\\survey\\question_container.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 2, "if" => 5);
        static $filters = array();
        static $functions = array("include" => 6);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                [],
                ['include'],
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
