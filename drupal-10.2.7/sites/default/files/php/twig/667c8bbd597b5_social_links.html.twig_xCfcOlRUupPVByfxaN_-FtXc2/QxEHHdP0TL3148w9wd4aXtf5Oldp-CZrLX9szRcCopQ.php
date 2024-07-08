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

/* @zeropoint/includes/social_links.html.twig */
class __TwigTemplate_541e15aa879675fbd466153ba8e04cbd extends Template
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
        echo "<div id=\"soclinks\">
";
        // line 2
        if (($context["facebook_url"] ?? null)) {
            // line 3
            echo "  <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook_url"] ?? null), 3, $this->source), "html", null, true);
            echo "\" class=\"sociallinks facebook\" title=\"Facebook\" target=\"_blank\" rel=\"nofollow\"><i class=\"fa fa-facebook\"></i></a>
";
        }
        // line 5
        if (($context["google_plus_url"] ?? null)) {
            // line 6
            echo "  <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["google_plus_url"] ?? null), 6, $this->source), "html", null, true);
            echo "\" class=\"sociallinks googleplus\" title=\"Google+\" target=\"_blank\" rel=\"nofollow\"><i class=\"fa fa-google-plus\"></i></a>
";
        }
        // line 8
        if (($context["twitter_url"] ?? null)) {
            // line 9
            echo "  <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter_url"] ?? null), 9, $this->source), "html", null, true);
            echo "\" class=\"sociallinks twitter\" title=\"Twitter\" target=\"_blank\" rel=\"nofollow\"><i class=\"fa fa-twitter\"></i></a>
";
        }
        // line 11
        if (($context["instagram_url"] ?? null)) {
            // line 12
            echo "  <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["instagram_url"] ?? null), 12, $this->source), "html", null, true);
            echo "\" class=\"sociallinks instagram\" title=\"Instagram\" target=\"_blank\" rel=\"nofollow\"><i class=\"fa fa-instagram\"></i></a>
";
        }
        // line 14
        if (($context["telegram_url"] ?? null)) {
            // line 15
            echo "  <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["telegram_url"] ?? null), 15, $this->source), "html", null, true);
            echo "\" class=\"sociallinks telegram\" title=\"Telegram\" target=\"_blank\" rel=\"nofollow\"><i class=\"fa fa-instagram\"></i></a>
";
        }
        // line 17
        if (($context["pinterest_url"] ?? null)) {
            // line 18
            echo "  <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pinterest_url"] ?? null), 18, $this->source), "html", null, true);
            echo "\" class=\"sociallinks pinterest\" title=\"Pinterest\" target=\"_blank\" rel=\"nofollow\"><i class=\"fa fa-pinterest\"></i></a>
";
        }
        // line 20
        if (($context["linkedin_url"] ?? null)) {
            // line 21
            echo "  <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkedin_url"] ?? null), 21, $this->source), "html", null, true);
            echo "\" class=\"sociallinks linkedin\" title=\"LinkedIn\" target=\"_blank\" rel=\"nofollow\"><i class=\"fa fa-linkedin\"></i></a>
";
        }
        // line 23
        if (($context["youtube_url"] ?? null)) {
            // line 24
            echo "  <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["youtube_url"] ?? null), 24, $this->source), "html", null, true);
            echo "\" class=\"sociallinks youtube\" title=\"Youtube\" target=\"_blank\" rel=\"nofollow\"><i class=\"fa fa-youtube\"></i></a>
";
        }
        // line 26
        if (($context["vimeo_url"] ?? null)) {
            // line 27
            echo "  <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["vimeo_url"] ?? null), 27, $this->source), "html", null, true);
            echo "\" class=\"sociallinks vimeo\" title=\"Vimeo\" target=\"_blank\" rel=\"nofollow\"><i class=\"fa fa-vimeo\"></i></a>
";
        }
        // line 29
        if (($context["flickr_url"] ?? null)) {
            // line 30
            echo "  <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["flickr_url"] ?? null), 30, $this->source), "html", null, true);
            echo "\" class=\"sociallinks flickr\" title=\"Flickr\" target=\"_blank\" rel=\"nofollow\"><i class=\"fa fa-flickr\"></i></a>
";
        }
        // line 32
        if (($context["tumblr_url"] ?? null)) {
            // line 33
            echo "  <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["tumblr_url"] ?? null), 33, $this->source), "html", null, true);
            echo "\" class=\"sociallinks tumblr\" title=\"Tumblr\" target=\"_blank\" rel=\"nofollow\"><i class=\"fa fa-tumblr\"></i></a>
";
        }
        // line 35
        if (($context["skype_url"] ?? null)) {
            // line 36
            echo "  <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["skype_url"] ?? null), 36, $this->source), "html", null, true);
            echo "\" class=\"sociallinks skype\" title=\"Skype\" target=\"_blank\" rel=\"nofollow\"><i class=\"fa fa-skype\"></i></a>
";
        }
        // line 38
        if (($context["drupal_url"] ?? null)) {
            // line 39
            echo "  <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["drupal_url"] ?? null), 39, $this->source), "html", null, true);
            echo "\" class=\"sociallinks drupal\" title=\"Drupal\" target=\"_blank\" rel=\"nofollow\"><i class=\"fa fa-drupal\"></i></a>
";
        }
        // line 41
        if (($context["rss_url"] ?? null)) {
            // line 42
            echo "  <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rss_url"] ?? null), 42, $this->source), "html", null, true);
            echo "\" class=\"sociallinks rss\" title=\"RSS\" target=\"_blank\" rel=\"nofollow\"><i class=\"fa fa-rss\"></i></a>
";
        }
        // line 44
        if (($context["myother_url"] ?? null)) {
            // line 45
            echo "  <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["myother_url"] ?? null), 45, $this->source), "html", null, true);
            echo "\" class=\"sociallinks myother\" title=\"!\" target=\"_blank\" rel=\"nofollow\"><i class=\"fa fa-myother\"></i></a>
";
        }
        // line 47
        echo "</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["facebook_url", "google_plus_url", "twitter_url", "instagram_url", "telegram_url", "pinterest_url", "linkedin_url", "youtube_url", "vimeo_url", "flickr_url", "tumblr_url", "skype_url", "drupal_url", "rss_url", "myother_url"]);    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@zeropoint/includes/social_links.html.twig";
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
        return array (  162 => 47,  156 => 45,  154 => 44,  148 => 42,  146 => 41,  140 => 39,  138 => 38,  132 => 36,  130 => 35,  124 => 33,  122 => 32,  116 => 30,  114 => 29,  108 => 27,  106 => 26,  100 => 24,  98 => 23,  92 => 21,  90 => 20,  84 => 18,  82 => 17,  76 => 15,  74 => 14,  68 => 12,  66 => 11,  60 => 9,  58 => 8,  52 => 6,  50 => 5,  44 => 3,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@zeropoint/includes/social_links.html.twig", "C:\\xampp\\htdocs\\Contacts\\drupal-10.2.7\\themes\\zeropoint\\templates\\includes\\social_links.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 2);
        static $filters = array("escape" => 3);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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
