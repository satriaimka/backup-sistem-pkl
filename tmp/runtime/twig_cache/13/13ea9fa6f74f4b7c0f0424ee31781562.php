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

/* /survey/questions/answer/multipleshorttext/answer.twig */
class __TwigTemplate_ef274ae1ac77ffb610c62b0f73745626 extends Template
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
        yield "<!-- Multiple Shor Text -->

<!-- answer -->
<ul class=\"";
        // line 12
        yield $this->sandbox->ensureToStringAllowed(($context["coreClass"] ?? null), 12, $this->source);
        yield " list-unstyled form-horizontal\" role=\"group\" aria-labelledby=\"ls-question-text-";
        yield $this->sandbox->ensureToStringAllowed(($context["basename"] ?? null), 12, $this->source);
        yield " ls-question-validation-";
        yield $this->sandbox->ensureToStringAllowed(($context["basename"] ?? null), 12, $this->source);
        yield "\">
    ";
        // line 13
        if (Twig\Extension\CoreExtension::testEmpty(($context["aRows"] ?? null))) {
            // line 14
            yield "        ";
            yield from             $this->loadTemplate("survey/questions/answer/multipleshorttext/empty.twig", "/survey/questions/answer/multipleshorttext/answer.twig", 14)->unwrap()->yield($context);
            // line 15
            yield "    ";
        } else {
            // line 16
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["aRows"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["aRow"]) {
                // line 17
                yield "            ";
                $context["rowTemplate"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["aRow"], "textarea", [], "any", false, false, true, 17)) ? ("survey/questions/answer/multipleshorttext/rows/answer_row_textarea.twig") : ("survey/questions/answer/multipleshorttext/rows/answer_row_inputtext.twig"));
                // line 18
                yield "            ";
                yield from                 $this->loadTemplate(($context["rowTemplate"] ?? null), "/survey/questions/answer/multipleshorttext/answer.twig", 18)->unwrap()->yield(CoreExtension::merge($context, $context["aRow"]));
                // line 19
                yield "        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['aRow'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            yield "    ";
        }
        // line 21
        yield "
</ul>
<!-- end of answer -->
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "/survey/questions/answer/multipleshorttext/answer.twig";
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
        return array (  102 => 21,  99 => 20,  85 => 19,  82 => 18,  79 => 17,  61 => 16,  58 => 15,  55 => 14,  53 => 13,  45 => 12,  40 => 9,);
    }

    public function getSourceContext()
    {
        return new Source("", "/survey/questions/answer/multipleshorttext/answer.twig", "C:\\laragon\\www\\backup-sistem-pkl\\limesurvey\\application\\views\\survey\\questions\\answer\\multipleshorttext\\answer.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 13, "include" => 14, "for" => 16, "set" => 17);
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'include', 'for', 'set'],
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
