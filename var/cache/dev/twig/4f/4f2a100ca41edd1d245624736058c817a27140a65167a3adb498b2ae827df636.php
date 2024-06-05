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

/* templates/pages/accueil.html.twig */
class __TwigTemplate_33a359fd68c3097b7d5544002d3c8683bae6a28fc93bddec34345f16632e137d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "templates/pages/accueil.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "templates/pages/accueil.html.twig"));

        $this->parent = $this->loadTemplate("basefront.html.twig", "templates/pages/accueil.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        yield "    <p class=\"mt-3\">
        <h3>Bienvenue sur le site de MediaTek86 consacré aux formations en ligne</h3>
    </p>
    <p class=\"mt-3\">
        Vous allez pouvoir vous former à différents outils numériques gratuitement et directement en ligne.<br />
        Dans la partie <strong><a href=\"";
        // line 9
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formations");
        yield "\" class=\"link-info\">Formations</a></strong>, vous trouverez la liste des formations proposées.
        Vous pourrez faire des recherches et des tris. 
        En cliquant sur la capture, vous accèderez à la présentation plus détaillée de la formation ainsi que la vidéo correspondante.<BR />
        Vous pouvez aussi retrouver les vidéos regroupées dans des playlists, dans la partie <strong><a href=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("playlists");
        yield "\" class=\"link-info\">Playlists</a></strong>.
    </p>
    <p>
        Voici les <strong>deux dernières formations</strong> ajoutées au catalogue :
        <table class=\"table\">
            <caption>Deux dernières formations ajoutées au catalogue</caption>
            <tr>
                ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["formations"]) || array_key_exists("formations", $context) ? $context["formations"] : (function () { throw new RuntimeError('Variable "formations" does not exist.', 19, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["formation"]) {
            // line 20
            yield "                    <td>
                        <div class=\"row\">
                            <div class=\"col\">
                                <!-- emplacement photo -->
                                ";
            // line 24
            if (CoreExtension::getAttribute($this->env, $this->source, $context["formation"], "picture", [], "any", false, false, false, 24)) {
                // line 25
                yield "                                    <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formations.showone", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["formation"], "id", [], "any", false, false, false, 25)]), "html", null, true);
                yield "\">
                                    <img src=\"";
                // line 26
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["formation"], "picture", [], "any", false, false, false, 26), "html", null, true);
                yield "\" alt=\"bureau dans un portable\"
                                         class=\"card-img-top\" style=\"width:100%;height:auto;\">
                                    </a>    
                                ";
            }
            // line 30
            yield "                            </div>
                            <div class=\"col\">
                                <p>";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["formation"], "publishedatstring", [], "any", false, false, false, 32), "html", null, true);
            yield "</p>
                                <h5 class=\"text-info mt-1\">
                                    ";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["formation"], "title", [], "any", false, false, false, 34), "html", null, true);
            yield "
                                </h5>
                                <strong>playlist : </strong>";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["formation"], "playlist", [], "any", false, false, false, 36), "name", [], "any", false, false, false, 36), "html", null, true);
            yield "<br>
                                <strong>catégories : </strong> 
                                ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["formation"], "categories", [], "any", false, false, false, 38));
            foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
                // line 39
                yield "                                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "name", [], "any", false, false, false, 39), "html", null, true);
                yield "&nbsp;
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            yield "                            </div>    
                        </div>                    
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        yield "    
            </tr>

        </table>        
    </p>
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
        return "templates/pages/accueil.html.twig";
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
        return array (  156 => 43,  148 => 41,  139 => 39,  135 => 38,  130 => 36,  125 => 34,  120 => 32,  116 => 30,  109 => 26,  104 => 25,  102 => 24,  96 => 20,  92 => 19,  82 => 12,  76 => 9,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"basefront.html.twig\" %}

{% block body %}
    <p class=\"mt-3\">
        <h3>Bienvenue sur le site de MediaTek86 consacré aux formations en ligne</h3>
    </p>
    <p class=\"mt-3\">
        Vous allez pouvoir vous former à différents outils numériques gratuitement et directement en ligne.<br />
        Dans la partie <strong><a href=\"{{ path('formations') }}\" class=\"link-info\">Formations</a></strong>, vous trouverez la liste des formations proposées.
        Vous pourrez faire des recherches et des tris. 
        En cliquant sur la capture, vous accèderez à la présentation plus détaillée de la formation ainsi que la vidéo correspondante.<BR />
        Vous pouvez aussi retrouver les vidéos regroupées dans des playlists, dans la partie <strong><a href=\"{{ path('playlists') }}\" class=\"link-info\">Playlists</a></strong>.
    </p>
    <p>
        Voici les <strong>deux dernières formations</strong> ajoutées au catalogue :
        <table class=\"table\">
            <caption>Deux dernières formations ajoutées au catalogue</caption>
            <tr>
                {% for formation in formations %}
                    <td>
                        <div class=\"row\">
                            <div class=\"col\">
                                <!-- emplacement photo -->
                                {% if formation.picture %}
                                    <a href=\"{{ path('formations.showone', {id:formation.id}) }}\">
                                    <img src=\"{{ formation.picture }}\" alt=\"bureau dans un portable\"
                                         class=\"card-img-top\" style=\"width:100%;height:auto;\">
                                    </a>    
                                {% endif %}
                            </div>
                            <div class=\"col\">
                                <p>{{ formation.publishedatstring }}</p>
                                <h5 class=\"text-info mt-1\">
                                    {{ formation.title }}
                                </h5>
                                <strong>playlist : </strong>{{ formation.playlist.name }}<br>
                                <strong>catégories : </strong> 
                                {% for categorie in formation.categories %}
                                    {{ categorie.name }}&nbsp;
                                {% endfor %}
                            </div>    
                        </div>                    
                {% endfor %}    
            </tr>

        </table>        
    </p>
{% endblock %}


", "templates/pages/accueil.html.twig", "C:\\wamp64\\www\\mediatekFormation\\templates\\templates\\pages\\accueil.html.twig");
    }
}
