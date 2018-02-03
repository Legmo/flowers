<?php

/* themes/bootstrap_barrio/templates/navigation/menu-local-task.html.twig */
class __TwigTemplate_4c0cdccc324d8fd358b5edcf843ffd1fa1eb5aa80a677d64077781e8b36aac26 extends Twig_Template
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
        $tags = array("set" => 20);
        $filters = array();
        $functions = array("link" => 25);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set'),
                array(),
                array('link')
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

        // line 20
        $context["classes"] = array(0 => "nav-link", 1 => ((        // line 22
(isset($context["is_active"]) ? $context["is_active"] : null)) ? ("active") : ("")));
        // line 25
        echo "<li";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (((isset($context["is_active"]) ? $context["is_active"] : null)) ? ("active") : ("")), 1 => "nav-item"), "method"), "html", null, true));
        echo ">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getLink($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "text", array()), $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "url", array()), array("class" => (isset($context["classes"]) ? $context["classes"] : null))), "html", null, true));
        echo "</li>
";
    }

    public function getTemplateName()
    {
        return "themes/bootstrap_barrio/templates/navigation/menu-local-task.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 25,  44 => 22,  43 => 20,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/bootstrap_barrio/templates/navigation/menu-local-task.html.twig", "C:\\Localsites\\legmo-flowers\\themes\\bootstrap_barrio\\templates\\navigation\\menu-local-task.html.twig");
    }
}
