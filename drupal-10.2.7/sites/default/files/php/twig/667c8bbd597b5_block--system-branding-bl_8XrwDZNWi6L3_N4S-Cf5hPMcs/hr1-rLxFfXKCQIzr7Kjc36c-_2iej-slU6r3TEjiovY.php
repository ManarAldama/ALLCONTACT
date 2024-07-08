<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/zeropoint/templates/block/block--system-branding-block.html.twig */
class __TwigTemplate_ffddac5d2491fc48486b5ff5d43253b3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "block.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("block.html.twig", "themes/zeropoint/templates/block/block--system-branding-block.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["site_logo", "show_intl_logo", "intl_logo_path", "site_name", "site_slogan", "page_seo", "is_front"]);    }

    // line 16
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        if (($context["site_logo"] ?? null)) {
            // line 18
            if (($context["show_intl_logo"] ?? null)) {
                // line 19
                echo "<a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
                echo "\" rel=\"home\" title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
                echo "\" class=\"site-logo\"><img src= \"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["intl_logo_path"] ?? null), 19, $this->source), "html", null, true);
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>") . "_logo.png"), "html", null, true);
                echo "\" alt=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
                echo "\" class=\"logoimg\"></a>
  ";
            } else {
                // line 22
                echo "<a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
                echo "\" rel=\"home\" title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
                echo "\" class=\"site-logo\"><img src=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_logo"] ?? null), 22, $this->source), "html", null, true);
                echo "\" alt=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
                echo "\" class=\"logoimg\"></a>
";
            }
        }
        // line 25
        if ((($context["site_name"] ?? null) || ($context["site_slogan"] ?? null))) {
            // line 26
            echo "  <div id=\"name-and-slogan\">
  ";
            // line 27
            if (($context["site_name"] ?? null)) {
                // line 28
                echo "  ";
                if ((($context["page_seo"] ?? null) == "0")) {
                    // line 29
                    echo "    ";
                    $context["sitename_tag"] = ((($context["is_front"] ?? null)) ? ("h1") : ("p"));
                    // line 30
                    echo "    <";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sitename_tag"] ?? null), 30, $this->source), "html", null, true);
                    echo " id=\"site-name\"><a href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
                    echo "\" rel=\"home\" title=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
                    echo "\">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null), 30, $this->source), "html", null, true);
                    echo "</a></";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sitename_tag"] ?? null), 30, $this->source), "html", null, true);
                    echo ">
  ";
                } else {
                    // line 32
                    echo "    <h1 id=\"site-name\"><a href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
                    echo "\" rel=\"home\" title=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
                    echo "\">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null), 32, $this->source), "html", null, true);
                    echo "</a></h1>
  ";
                }
                // line 34
                echo "  ";
            }
            // line 35
            echo "  ";
            if (($context["site_slogan"] ?? null)) {
                // line 36
                echo "  <div class=\"site-slogan\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_slogan"] ?? null), 36, $this->source), "html", null, true);
                echo "</div>
  ";
            }
            // line 38
            echo "  </div>
";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/zeropoint/templates/block/block--system-branding-block.html.twig";
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
        return array (  132 => 38,  126 => 36,  123 => 35,  120 => 34,  110 => 32,  96 => 30,  93 => 29,  90 => 28,  88 => 27,  85 => 26,  83 => 25,  70 => 22,  57 => 19,  55 => 18,  53 => 17,  49 => 16,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/zeropoint/templates/block/block--system-branding-block.html.twig", "C:\\xampp\\htdocs\\Contacts\\drupal-10.2.7\\themes\\zeropoint\\templates\\block\\block--system-branding-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 17, "set" => 29);
        static $filters = array("t" => 19, "escape" => 19);
        static $functions = array("path" => 19);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
                ['t', 'escape'],
                ['path']
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
