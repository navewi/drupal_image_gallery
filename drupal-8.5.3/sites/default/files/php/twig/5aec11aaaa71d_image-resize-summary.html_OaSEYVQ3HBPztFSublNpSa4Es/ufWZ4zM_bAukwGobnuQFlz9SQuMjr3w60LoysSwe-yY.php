<?php

/* core/themes/stable/templates/admin/image-resize-summary.html.twig */
class __TwigTemplate_76a7b902da1ab82226b7b0d9110c751ffbec597b3c3bdea4c2986154397e4bac extends Twig_Template
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
        $tags = array("if" => 16, "trans" => 20);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'trans'),
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

        // line 16
        if (($this->getAttribute(($context["data"] ?? null), "width", array()) && $this->getAttribute(($context["data"] ?? null), "height", array()))) {
            // line 17
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["data"] ?? null), "width", array()), "html", null, true));
            echo "×";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["data"] ?? null), "height", array()), "html", null, true));
        } else {
            // line 19
            if ($this->getAttribute(($context["data"] ?? null), "width", array())) {
                // line 20
                echo "    ";
                echo t("width @data.width", array("@data.width" => $this->getAttribute(                // line 21
($context["data"] ?? null), "width", array()), ));
                // line 23
                echo "  ";
            } elseif ($this->getAttribute(($context["data"] ?? null), "height", array())) {
                // line 24
                echo "    ";
                echo t("height @data.height", array("@data.height" => $this->getAttribute(                // line 25
($context["data"] ?? null), "height", array()), ));
                // line 27
                echo "  ";
            }
        }
    }

    public function getTemplateName()
    {
        return "core/themes/stable/templates/admin/image-resize-summary.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 27,  61 => 25,  59 => 24,  56 => 23,  54 => 21,  52 => 20,  50 => 19,  45 => 17,  43 => 16,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "core/themes/stable/templates/admin/image-resize-summary.html.twig", "C:\\MAMP\\htdocs\\drupal_image_gallery\\drupal-8.5.3\\core\\themes\\stable\\templates\\admin\\image-resize-summary.html.twig");
    }
}
