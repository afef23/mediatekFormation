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

/* templates/pages/formation.html.twig */
class __TwigTemplate_f4b35da90c3a3a2e0ed029fff1610dcf9877cc8ef2fdfa77db122b4140a5646c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "basefront.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "templates/pages/formation.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "templates/pages/formation.html.twig"));

        $this->parent = $this->loadTemplate("basefront.html.twig", "templates/pages/formation.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        yield "    <div class=\"row mt-3\">
        <div class=\"col\">
            <!-- emplacement de la vidéo -->
            ";
        // line 6
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 6, $this->source); })()), "videoid", [], "any", false, false, false, 6)) {
            // line 7
            yield "                <div style=\"width: 560px; height: 315px; float: none; clear: both; margin: 2px auto;\">
                  <embed
                    src=\"https://www.youtube.com/embed/";
            // line 9
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 9, $this->source); })()), "videoid", [], "any", false, false, false, 9), "html", null, true);
            yield "\" 
                    wmode=\"transparent\"
                    type=\"video/mp4\"
                    width=\"100%\" height=\"100%\"
                    allow=\"autoplay; clipboard-write; encrypted-media; picture-in-picture\"
                    allowfullscreen
                    title=\"YouTube video player\"
                  >
                </div>
            ";
        } else {
            // line 19
            yield "                    <p>(aucune image)</p>        
            ";
        }
        // line 21
        yield "        </div>
        <div class=\"col\">
            ";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 23, $this->source); })()), "publishedatstring", [], "any", false, false, false, 23), "html", null, true);
        yield "
            <h4 class=\"text-info mt-5\">";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 24, $this->source); })()), "title", [], "any", false, false, false, 24), "html", null, true);
        yield "</h4>
            <strong>playlist : </strong>";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 25, $this->source); })()), "playlist", [], "any", false, false, false, 25), "name", [], "any", false, false, false, 25), "html", null, true);
        yield "<br />
            <strong>catégories : </strong>
                ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 27, $this->source); })()), "categories", [], "any", false, false, false, 27));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 28
            yield "                    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "name", [], "any", false, false, false, 28), "html", null, true);
            yield "&nbsp;
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        yield "            <br /><br />
            <strong>description :</strong><br />
                ";
        // line 32
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 32, $this->source); })()), "description", [], "any", false, false, false, 32), "html", null, true));
        yield "
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "templates/pages/formation.html.twig";
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
        return array (  131 => 32,  127 => 30,  118 => 28,  114 => 27,  109 => 25,  105 => 24,  101 => 23,  97 => 21,  93 => 19,  80 => 9,  76 => 7,  74 => 6,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"basefront.html.twig\" %}
{% block body %}
    <div class=\"row mt-3\">
        <div class=\"col\">
            <!-- emplacement de la vidéo -->
            {% if formation.videoid %}
                <div style=\"width: 560px; height: 315px; float: none; clear: both; margin: 2px auto;\">
                  <embed
                    src=\"https://www.youtube.com/embed/{{ formation.videoid }}\" 
                    wmode=\"transparent\"
                    type=\"video/mp4\"
                    width=\"100%\" height=\"100%\"
                    allow=\"autoplay; clipboard-write; encrypted-media; picture-in-picture\"
                    allowfullscreen
                    title=\"YouTube video player\"
                  >
                </div>
            {% else %}
                    <p>(aucune image)</p>        
            {% endif %}
        </div>
        <div class=\"col\">
            {{ formation.publishedatstring }}
            <h4 class=\"text-info mt-5\">{{ formation.title }}</h4>
            <strong>playlist : </strong>{{ formation.playlist.name }}<br />
            <strong>catégories : </strong>
                {% for categorie in formation.categories %}
                    {{ categorie.name }}&nbsp;
                {% endfor %}
            <br /><br />
            <strong>description :</strong><br />
                {{ formation.description|nl2br }}
        </div>
    </div>
{% endblock %}", "templates/pages/formation.html.twig", "C:\\wamp64\\www\\mediatekFormation\\templates\\templates\\pages\\formation.html.twig");
    }
}
