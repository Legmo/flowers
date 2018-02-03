<?php

/* themes/bootstrap_barrio/subtheme/templates/page.html.twig */
class __TwigTemplate_3f0d42363f416e82314abb742771560216d7b36acc71c3537bbb71300638ee16 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("block" => 72, "if" => 73);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('block', 'if'),
                array(),
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

        // line 2
        echo "
";
        // line 71
        echo "<div class=\" ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["container"]) ? $context["container"] : null), "html", null, true));
        echo "  \">
    ";
        // line 72
        $this->displayBlock('head', $context, $blocks);
        // line 107
        echo "
    ";
        // line 108
        $this->displayBlock('content', $context, $blocks);
        // line 135
        echo "
    ";
        // line 136
        $this->displayBlock('footer', $context, $blocks);
        // line 153
        echo "</div>
";
    }

    // line 72
    public function block_head($context, array $blocks = array())
    {
        // line 73
        echo "        ";
        if ((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "secondary_menu", array()) || $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "page", array()), "top_header", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top_header_form", array()))) {
            // line 74
            echo "            <nav";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["navbar_top_attributes"]) ? $context["navbar_top_attributes"] : null), "html", null, true));
            echo ">
                <div class=\"section clearfix\">
                    <div class=\"navbar-nav\">
                        ";
            // line 77
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "secondary_menu", array()), "html", null, true));
            echo "
                        ";
            // line 78
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top_header", array()), "html", null, true));
            echo "
                    </div>
                    ";
            // line 80
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top_header_form", array())) {
                // line 81
                echo "                        <div class=\"form-inline navbar-form pull-right\">
                            ";
                // line 82
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top_header_form", array()), "html", null, true));
                echo "
                        </div>
                    ";
            }
            // line 85
            echo "                </div>
            </nav>
        ";
        }
        // line 88
        echo "        <nav";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["navbar_attributes"]) ? $context["navbar_attributes"] : null), "html", null, true));
        echo ">
            <div class=\"section clearfix\">
                <div class=\"navbar-brand\">
                    ";
        // line 91
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true));
        echo "
                </div>
                <button class=\"navbar-toggler hidden-sm-up\" type=\"button\" data-toggle=\"collapse\" data-target=\"#CollapsingNavbar\">
                    &#9776;
                </button>
                <div class=\"collapse navbar-toggleable-xs navbar-nav\" id=\"CollapsingNavbar\">
                    ";
        // line 97
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "primary_menu", array()), "html", null, true));
        echo "
                </div>
                ";
        // line 99
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_form", array())) {
            // line 100
            echo "                    <div class=\"form-inline navbar-form pull-right\">
                        ";
            // line 101
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_form", array()), "html", null, true));
            echo "
                    </div>
                ";
        }
        // line 104
        echo "            </div>
        </nav>
    ";
    }

    // line 108
    public function block_content($context, array $blocks = array())
    {
        // line 109
        echo "        <div id=\"main\" class=\"\">
            <div class=\"row clearfix\">
                ";
        // line 111
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "breadcrumb", array()), "html", null, true));
        echo "
                <main";
        // line 112
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["content_attributes"]) ? $context["content_attributes"] : null), "html", null, true));
        echo ">
                    <section class=\"section\">
                        <a id=\"main-content\" tabindex=\"-1\"></a>
                        ";
        // line 115
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "
                    </section>
                </main>
                ";
        // line 118
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
            // line 119
            echo "                    <div";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["sidebar_first_attributes"]) ? $context["sidebar_first_attributes"] : null), "html", null, true));
            echo ">
                        <aside class=\"section\" role=\"complementary\">
                            ";
            // line 121
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()), "html", null, true));
            echo "
                        </aside>
                    </div>
                ";
        }
        // line 125
        echo "                ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())) {
            // line 126
            echo "                    <div";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["sidebar_second_attributes"]) ? $context["sidebar_second_attributes"] : null), "html", null, true));
            echo ">
                        <aside class=\"section\" role=\"complementary\">
                            ";
            // line 128
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()), "html", null, true));
            echo "
                        </aside>
                    </div>
                ";
        }
        // line 132
        echo "            </div>
        </div>
    ";
    }

    // line 136
    public function block_footer($context, array $blocks = array())
    {
        // line 137
        echo "        <div class=\"\">
            ";
        // line 138
        if (((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_second", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_third", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_fourth", array()))) {
            // line 139
            echo "                <div class=\"site-footer__top clearfix\">
                    ";
            // line 140
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array()), "html", null, true));
            echo "
                    ";
            // line 141
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_second", array()), "html", null, true));
            echo "
                    ";
            // line 142
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_third", array()), "html", null, true));
            echo "
                    ";
            // line 143
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_fourth", array()), "html", null, true));
            echo "
                </div>
            ";
        }
        // line 146
        echo "            ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_fifth", array())) {
            // line 147
            echo "                <div class=\"site-footer__bottom\">
                    ";
            // line 148
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_fifth", array()), "html", null, true));
            echo "
                </div>
            ";
        }
        // line 151
        echo "        </div>
    ";
    }

    public function getTemplateName()
    {
        return "themes/bootstrap_barrio/subtheme/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  248 => 151,  242 => 148,  239 => 147,  236 => 146,  230 => 143,  226 => 142,  222 => 141,  218 => 140,  215 => 139,  213 => 138,  210 => 137,  207 => 136,  201 => 132,  194 => 128,  188 => 126,  185 => 125,  178 => 121,  172 => 119,  170 => 118,  164 => 115,  158 => 112,  154 => 111,  150 => 109,  147 => 108,  141 => 104,  135 => 101,  132 => 100,  130 => 99,  125 => 97,  116 => 91,  109 => 88,  104 => 85,  98 => 82,  95 => 81,  93 => 80,  88 => 78,  84 => 77,  77 => 74,  74 => 73,  71 => 72,  66 => 153,  64 => 136,  61 => 135,  59 => 108,  56 => 107,  54 => 72,  49 => 71,  46 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/bootstrap_barrio/subtheme/templates/page.html.twig", "C:\\Localsites\\legmo-flowers\\themes\\bootstrap_barrio\\subtheme\\templates\\page.html.twig");
    }
}
