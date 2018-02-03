<?php

/* themes/bootstrap_barrio/templates/form/form-element.html.twig */
class __TwigTemplate_960bf717b15de24124636ff2e9952ffce3564c002f7d9ad44842cc0f5860c21f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 49, "if" => 68);
        $filters = array("clean_class" => 51);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if'),
                array('clean_class'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 47
        echo "
";
        // line 49
        $context["classes"] = array(0 => "js-form-item", 1 => ("js-form-type-" . \Drupal\Component\Utility\Html::getClass(        // line 51
(isset($context["type"]) ? $context["type"] : null))), 2 => ((twig_in_filter(        // line 52
(isset($context["type"]) ? $context["type"] : null), array(0 => "checkbox", 1 => "radio"))) ? (\Drupal\Component\Utility\Html::getClass((isset($context["type"]) ? $context["type"] : null))) : (("form-type-" . \Drupal\Component\Utility\Html::getClass((isset($context["type"]) ? $context["type"] : null))))), 3 => ((twig_in_filter(        // line 53
(isset($context["type"]) ? $context["type"] : null), array(0 => "checkbox", 1 => "radio"))) ? (((isset($context["form"]) ? $context["form"] : null) - (isset($context["check"]) ? $context["check"] : null))) : ("")), 4 => ("js-form-item-" . \Drupal\Component\Utility\Html::getClass(        // line 54
(isset($context["name"]) ? $context["name"] : null))), 5 => ("form-item-" . \Drupal\Component\Utility\Html::getClass(        // line 55
(isset($context["name"]) ? $context["name"] : null))), 6 => ((!twig_in_filter(        // line 56
(isset($context["title_display"]) ? $context["title_display"] : null), array(0 => "after", 1 => "before"))) ? ("form-no-label") : ("")), 7 => (((        // line 57
(isset($context["disabled"]) ? $context["disabled"] : null) == "disabled")) ? ("disabled") : ("")), 8 => ((        // line 58
(isset($context["errors"]) ? $context["errors"] : null)) ? ("has-error") : ("")));
        // line 62
        $context["description_classes"] = array(0 => "description", 1 => "text-muted", 2 => (((        // line 65
(isset($context["description_display"]) ? $context["description_display"] : null) == "invisible")) ? ("sr-only") : ("")));
        // line 68
        if (twig_in_filter((isset($context["type"]) ? $context["type"] : null), array(0 => "checkbox", 1 => "radio"))) {
            // line 69
            echo "  <div";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
            echo ">
    ";
            // line 70
            if ( !twig_test_empty((isset($context["prefix"]) ? $context["prefix"] : null))) {
                // line 71
                echo "      <span class=\"field-prefix\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["prefix"]) ? $context["prefix"] : null), "html", null, true));
                echo "</span>
    ";
            }
            // line 73
            echo "    ";
            if ((((isset($context["description_display"]) ? $context["description_display"] : null) == "before") && $this->getAttribute((isset($context["description"]) ? $context["description"] : null), "content", array()))) {
                // line 74
                echo "      <div";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["description"]) ? $context["description"] : null), "attributes", array()), "html", null, true));
                echo ">
        ";
                // line 75
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["description"]) ? $context["description"] : null), "content", array()), "html", null, true));
                echo "
      </div>
    ";
            }
            // line 78
            echo "    <label class=\"form-check-label\">
      ";
            // line 79
            if (((isset($context["label_display"]) ? $context["label_display"] : null) == "before")) {
                // line 80
                echo "        ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["input_title"]) ? $context["input_title"] : null), "html", null, true));
                echo "&nbsp;
      ";
            }
            // line 82
            echo "      <input";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["input_attributes"]) ? $context["input_attributes"] : null), "addClass", array(0 => "form-check-input"), "method"), "html", null, true));
            echo ">
      ";
            // line 83
            if (((isset($context["label_display"]) ? $context["label_display"] : null) == "after")) {
                // line 84
                echo "        &nbsp;";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["input_title"]) ? $context["input_title"] : null), "html", null, true));
                echo "
      ";
            }
            // line 86
            echo "    </label>
    ";
            // line 87
            if ( !twig_test_empty((isset($context["suffix"]) ? $context["suffix"] : null))) {
                // line 88
                echo "      <span class=\"field-suffix\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["suffix"]) ? $context["suffix"] : null), "html", null, true));
                echo "</span>
    ";
            }
            // line 90
            echo "    ";
            if ((isset($context["errors"]) ? $context["errors"] : null)) {
                // line 91
                echo "      <div class=\"alert alert-danger\" role=\"alert\">
        <strong>";
                // line 92
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["errors"]) ? $context["errors"] : null), "html", null, true));
                echo "</strong>
      </div>
    ";
            }
            // line 95
            echo "    ";
            if ((twig_in_filter((isset($context["description_display"]) ? $context["description_display"] : null), array(0 => "after", 1 => "invisible")) && $this->getAttribute((isset($context["description"]) ? $context["description"] : null), "content", array()))) {
                // line 96
                echo "      <small";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["description"]) ? $context["description"] : null), "attributes", array()), "addClass", array(0 => (isset($context["description_classes"]) ? $context["description_classes"] : null)), "method"), "html", null, true));
                echo ">
        ";
                // line 97
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["description"]) ? $context["description"] : null), "content", array()), "html", null, true));
                echo "
      </small>
    ";
            }
            // line 100
            echo "  </div>
";
        } else {
            // line 102
            echo "  <fieldset";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null), 1 => "form-group"), "method"), "html", null, true));
            echo ">
    ";
            // line 103
            if (twig_in_filter((isset($context["label_display"]) ? $context["label_display"] : null), array(0 => "before", 1 => "invisible"))) {
                // line 104
                echo "      ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true));
                echo "
    ";
            }
            // line 106
            echo "    ";
            if ( !twig_test_empty((isset($context["prefix"]) ? $context["prefix"] : null))) {
                // line 107
                echo "      <span class=\"field-prefix\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["prefix"]) ? $context["prefix"] : null), "html", null, true));
                echo "</span>
    ";
            }
            // line 109
            echo "    ";
            if ((((isset($context["description_display"]) ? $context["description_display"] : null) == "before") && $this->getAttribute((isset($context["description"]) ? $context["description"] : null), "content", array()))) {
                // line 110
                echo "      <div";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["description"]) ? $context["description"] : null), "attributes", array()), "html", null, true));
                echo ">
        ";
                // line 111
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["description"]) ? $context["description"] : null), "content", array()), "html", null, true));
                echo "
      </div>
    ";
            }
            // line 114
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["children"]) ? $context["children"] : null), "html", null, true));
            echo "
    ";
            // line 115
            if ( !twig_test_empty((isset($context["suffix"]) ? $context["suffix"] : null))) {
                // line 116
                echo "      <span class=\"field-suffix\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["suffix"]) ? $context["suffix"] : null), "html", null, true));
                echo "</span>
    ";
            }
            // line 118
            echo "    ";
            if (((isset($context["label_display"]) ? $context["label_display"] : null) == "after")) {
                // line 119
                echo "      ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true));
                echo "
    ";
            }
            // line 121
            echo "    ";
            if ((isset($context["errors"]) ? $context["errors"] : null)) {
                // line 122
                echo "      <div class=\"alert alert-danger\" role=\"alert\">
        <strong>";
                // line 123
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["errors"]) ? $context["errors"] : null), "html", null, true));
                echo "</strong>
      </div>
    ";
            }
            // line 126
            echo "    ";
            if ((twig_in_filter((isset($context["description_display"]) ? $context["description_display"] : null), array(0 => "after", 1 => "invisible")) && $this->getAttribute((isset($context["description"]) ? $context["description"] : null), "content", array()))) {
                // line 127
                echo "      <small";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["description"]) ? $context["description"] : null), "attributes", array()), "addClass", array(0 => (isset($context["description_classes"]) ? $context["description_classes"] : null)), "method"), "html", null, true));
                echo ">
        ";
                // line 128
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["description"]) ? $context["description"] : null), "content", array()), "html", null, true));
                echo "
      </small>
    ";
            }
            // line 131
            echo "  </fieldset>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/bootstrap_barrio/templates/form/form-element.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 131,  231 => 128,  226 => 127,  223 => 126,  217 => 123,  214 => 122,  211 => 121,  205 => 119,  202 => 118,  196 => 116,  194 => 115,  189 => 114,  183 => 111,  178 => 110,  175 => 109,  169 => 107,  166 => 106,  160 => 104,  158 => 103,  153 => 102,  149 => 100,  143 => 97,  138 => 96,  135 => 95,  129 => 92,  126 => 91,  123 => 90,  117 => 88,  115 => 87,  112 => 86,  106 => 84,  104 => 83,  99 => 82,  93 => 80,  91 => 79,  88 => 78,  82 => 75,  77 => 74,  74 => 73,  68 => 71,  66 => 70,  61 => 69,  59 => 68,  57 => 65,  56 => 62,  54 => 58,  53 => 57,  52 => 56,  51 => 55,  50 => 54,  49 => 53,  48 => 52,  47 => 51,  46 => 49,  43 => 47,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/bootstrap_barrio/templates/form/form-element.html.twig", "C:\\Localsites\\legmo-flowers\\themes\\bootstrap_barrio\\templates\\form\\form-element.html.twig");
    }
}
