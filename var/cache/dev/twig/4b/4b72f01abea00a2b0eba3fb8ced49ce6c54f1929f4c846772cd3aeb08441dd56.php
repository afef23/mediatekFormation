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

/* templates/pages/playlist.html.twig */
class __TwigTemplate_756e11d87d10b59b7fadf42d0445e23cfff3d8d40900fdc6ae47fa0732a068d7 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "templates/pages/playlist.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "templates/pages/playlist.html.twig"));

        $this->parent = $this->loadTemplate("basefront.html.twig", "templates/pages/playlist.html.twig", 1);
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
            <h4 class=\"text-info mt-5\">";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["playlist"]) || array_key_exists("playlist", $context) ? $context["playlist"] : (function () { throw new RuntimeError('Variable "playlist" does not exist.', 5, $this->source); })()), "name", [], "any", false, false, false, 5), "html", null, true);
        yield "</h4>
            <strong>catégories : </strong>
                <!-- boucle pour afficher les catégories -->
                ";
        // line 8
        $context["anccategorie"] = "";
        // line 9
        yield "                ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["playlistcategories"]) || array_key_exists("playlistcategories", $context) ? $context["playlistcategories"] : (function () { throw new RuntimeError('Variable "playlistcategories" does not exist.', 9, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["playlist"]) {
            // line 10
            yield "                    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["playlist"], "name", [], "any", false, false, false, 10), "html", null, true);
            yield "&nbsp;
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['playlist'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        yield "            <br /><br />
            <strong>description :</strong><br />
                ";
        // line 14
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["playlist"]) || array_key_exists("playlist", $context) ? $context["playlist"] : (function () { throw new RuntimeError('Variable "playlist" does not exist.', 14, $this->source); })()), "description", [], "any", false, false, false, 14), "html", null, true));
        yield "
        </div>
        <div class=\"col\">
            <!-- boucle sur l'affichage des formations -->
            ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["playlistformations"]) || array_key_exists("playlistformations", $context) ? $context["playlistformations"] : (function () { throw new RuntimeError('Variable "playlistformations" does not exist.', 18, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["formation"]) {
            // line 19
            yield "                <div class=\"row mt-1\">
                    <div class=\"col-md-auto\">
                        ";
            // line 21
            if (CoreExtension::getAttribute($this->env, $this->source, $context["formation"], "miniature", [], "any", false, false, false, 21)) {
                // line 22
                yield "                            <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formations.showone", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["formation"], "id", [], "any", false, false, false, 22)]), "html", null, true);
                yield "\">
                                <img src=\"";
                // line 23
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["formation"], "miniature", [], "any", false, false, false, 23), "html", null, true);
                yield "\" alt=\"ecran de formation\">
                            </a>
                        ";
            }
            // line 25
            yield "  
                    </div>
                    <div class=\"col d-flex align-items-center\">
                        <a href=\"";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formations.showone", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["formation"], "id", [], "any", false, false, false, 28)]), "html", null, true);
            yield "\" 
                           class=\"link-secondary text-decoration-none\">
                            ";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["formation"], "title", [], "any", false, false, false, 30), "html", null, true);
            yield "
                        </a>          
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        yield "        </div>
        
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
        return "templates/pages/playlist.html.twig";
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
        return array (  148 => 35,  137 => 30,  132 => 28,  127 => 25,  121 => 23,  116 => 22,  114 => 21,  110 => 19,  106 => 18,  99 => 14,  95 => 12,  86 => 10,  81 => 9,  79 => 8,  73 => 5,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"basefront.html.twig\" %}
{% block body %}
    <div class=\"row mt-3\">
        <div class=\"col\">
            <h4 class=\"text-info mt-5\">{{ playlist.name }}</h4>
            <strong>catégories : </strong>
                <!-- boucle pour afficher les catégories -->
                {% set anccategorie = '' %}
                {% for playlist in playlistcategories %}
                    {{ playlist.name }}&nbsp;
                {% endfor %}
            <br /><br />
            <strong>description :</strong><br />
                {{ playlist.description|nl2br }}
        </div>
        <div class=\"col\">
            <!-- boucle sur l'affichage des formations -->
            {% for formation in playlistformations %}
                <div class=\"row mt-1\">
                    <div class=\"col-md-auto\">
                        {% if formation.miniature %}
                            <a href=\"{{ path('formations.showone', {id:formation.id}) }}\">
                                <img src=\"{{ formation.miniature }}\" alt=\"ecran de formation\">
                            </a>
                        {% endif %}  
                    </div>
                    <div class=\"col d-flex align-items-center\">
                        <a href=\"{{ path('formations.showone', {id:formation.id}) }}\" 
                           class=\"link-secondary text-decoration-none\">
                            {{ formation.title }}
                        </a>          
                    </div>
                </div>
            {% endfor %}
        </div>
        
    </div>
{% endblock %}
", "templates/pages/playlist.html.twig", "C:\\wamp64\\www\\mediatekFormation\\templates\\templates\\pages\\playlist.html.twig");
    }
}
