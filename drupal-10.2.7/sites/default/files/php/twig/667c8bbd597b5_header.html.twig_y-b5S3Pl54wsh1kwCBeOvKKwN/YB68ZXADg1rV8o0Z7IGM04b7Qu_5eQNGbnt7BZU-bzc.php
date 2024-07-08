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

/* @thex/template-parts/header/header.html.twig */
class __TwigTemplate_5ca2b266d4a12b0d172fc99b4ae1fb48 extends Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<header class=\"header\">
  <div class=\"container\">
    <div class=\"header-container\">
      ";
        // line 4
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 4)) {
            // line 5
            echo "        <div class=\"site-brand\">
          ";
            // line 6
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
            echo "
        </div> <!--/.site-branding -->
      ";
        }
        // line 9
        echo "      ";
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 9) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search_box", [], "any", false, false, true, 9))) {
            // line 10
            echo "      <div class=\"header-right\">
        ";
            // line 11
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 11)) {
                // line 12
                echo "          ";
                $this->loadTemplate("@thex/template-parts/header/header-primary-menu.html.twig", "@thex/template-parts/header/header.html.twig", 12)->display($context);
                // line 13
                echo "        ";
            }
            echo " <!--  end if for primary_menu -->
        ";
            // line 14
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search_box", [], "any", false, false, true, 14)) {
                // line 15
                echo "          ";
                $this->loadTemplate("@thex/template-parts/header/search.html.twig", "@thex/template-parts/header/header.html.twig", 15)->display($context);
                // line 16
                echo "        ";
            }
            // line 17
            echo "      </div> <!-- /.header-right -->
    ";
        }
        // line 19
        echo "    </div><!-- /header-container -->
  </div><!-- /container -->
</header><!-- /header -->
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page"]);    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@thex/template-parts/header/header.html.twig";
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
        return array (  83 => 19,  79 => 17,  76 => 16,  73 => 15,  71 => 14,  66 => 13,  63 => 12,  61 => 11,  58 => 10,  55 => 9,  49 => 6,  46 => 5,  44 => 4,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@thex/template-parts/header/header.html.twig", "C:\\xampp\\htdocs\\Contacts\\drupal-10.2.7\\themes\\thex\\templates\\template-parts\\header\\header.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 4, "include" => 12);
        static $filters = array("escape" => 6);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'include'],
                ['escape'],
                []
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
