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

/* templates/admin/admin.categories.html.twig */
class __TwigTemplate_ad87ceaffc4eec8a30d5d96ccd7e1ae401b72cf58a2f80d9d2ffff18efbf61cd extends Template
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
        return "baseadmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "templates/admin/admin.categories.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "templates/admin/admin.categories.html.twig"));

        $this->parent = $this->loadTemplate("baseadmin.html.twig", "templates/admin/admin.categories.html.twig", 1);
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
        yield "    <h5>Gestion des catégories</h5>
    ";
        // line 6
        yield "    <th class=\"text-end align-middle\" scope=\"col\">
        <form class=\"form-inline mt-1\" method=\"POST\" action=\"";
        // line 7
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.categorie.ajout");
        yield "\">
            <div class=\"text-end form-group mr-1 mb-2\">
                <input type=\"text\" class=\"sm\" name=\"name\">
                <input type=\"hidden\" name=\"_token\" value=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("filtre_name"), "html", null, true);
        yield "\">
                    <button type =\"submit\" class=\"btn btn-primary mb-2 btn-sm\">Ajouter une catégorie</button>
            </div>
        </form>
    </th>
    
    <table class=\"table table-striped\">
        <caption></caption>
        <thead>  
            <tr>
                <th class=\"text-left align-top\" scope=\"col\">
                    Catégories<br>
                    <a href=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.categories.sort", ["champ" => "name", "ordre" => "ASC"]), "html", null, true);
        yield "\" class=\"btn btn-info btn-sm active\" role=\"button\" aria-pressed=\"true\"><</a>
                    <a href=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.categories.sort", ["champ" => "name", "ordre" => "DESC"]), "html", null, true);
        yield "\" class=\"btn btn-info btn-sm active\" role=\"button\" aria-pressed=\"true\">></a>
                </th>
                <th class=\"text-left align-top\" scope=\"col\">
                    Formations <br>
                </th>
                <th class=\"text-left align-top\" scope=\"col\">
                    Suppression <br>
                </th>
            </tr>
        </thead>
        
        <tbody>  
           ";
        // line 36
        yield "            <option value=\"\"></option>
                ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 37, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 38
            yield "                    <tr>
                    <td>
                        <h5 class=\"text-info\">
                            ";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "name", [], "any", false, false, false, 41), "html", null, true);
            yield "
                        </h5>
                    </td>
                    <td class=\"text-left\">
                        ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "formations", [], "any", false, false, false, 45));
            foreach ($context['_seq'] as $context["_key"] => $context["formation"]) {
                // line 46
                yield "                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["formation"], "title", [], "any", false, false, false, 46), "html", null, true);
                yield "<br />
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            yield "                    </td>
                    <td>";
            // line 50
            yield "                            ";
            if ((0 === CoreExtension::compare(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "formations", [], "any", false, false, false, 50)), 0))) {
                // line 51
                yield "                                <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.categorie.suppr", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 51)]), "html", null, true);
                yield "\" class=\"btn btn-info\" 
                                   onclick=\"return confirm('Etes-vous sûr de vouloir supprimer ";
                // line 52
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "name", [], "any", false, false, false, 52), "html", null, true);
                yield " ?')\">Supprimer</a>
                            ";
            }
            // line 54
            yield "                    </td>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        yield "        </tbody>
    </table>
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
        return "templates/admin/admin.categories.html.twig";
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
        return array (  170 => 56,  163 => 54,  158 => 52,  153 => 51,  150 => 50,  147 => 48,  138 => 46,  134 => 45,  127 => 41,  122 => 38,  118 => 37,  115 => 36,  100 => 23,  96 => 22,  81 => 10,  75 => 7,  72 => 6,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"baseadmin.html.twig\" %}

{% block body %}
    <h5>Gestion des catégories</h5>
    {# Création du mini-formulaire permettant l'ajout d'une catégorie #}
    <th class=\"text-end align-middle\" scope=\"col\">
        <form class=\"form-inline mt-1\" method=\"POST\" action=\"{{ path('admin.categorie.ajout') }}\">
            <div class=\"text-end form-group mr-1 mb-2\">
                <input type=\"text\" class=\"sm\" name=\"name\">
                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('filtre_name') }}\">
                    <button type =\"submit\" class=\"btn btn-primary mb-2 btn-sm\">Ajouter une catégorie</button>
            </div>
        </form>
    </th>
    
    <table class=\"table table-striped\">
        <caption></caption>
        <thead>  
            <tr>
                <th class=\"text-left align-top\" scope=\"col\">
                    Catégories<br>
                    <a href=\"{{ path('admin.categories.sort', {champ:'name', ordre:'ASC'}) }}\" class=\"btn btn-info btn-sm active\" role=\"button\" aria-pressed=\"true\"><</a>
                    <a href=\"{{ path('admin.categories.sort', {champ:'name', ordre:'DESC'})}}\" class=\"btn btn-info btn-sm active\" role=\"button\" aria-pressed=\"true\">></a>
                </th>
                <th class=\"text-left align-top\" scope=\"col\">
                    Formations <br>
                </th>
                <th class=\"text-left align-top\" scope=\"col\">
                    Suppression <br>
                </th>
            </tr>
        </thead>
        
        <tbody>  
           {# Boucle qui affiche la liste des catégories et de leurs formations #}
            <option value=\"\"></option>
                {% for categorie in categories %}
                    <tr>
                    <td>
                        <h5 class=\"text-info\">
                            {{ categorie.name }}
                        </h5>
                    </td>
                    <td class=\"text-left\">
                        {% for formation in categorie.formations %}
                            {{ formation.title }}<br />
                        {% endfor %}
                    </td>
                    <td>{# Condition pour réaliser la suppression d'une catégorie si elle ne contient aucune formation#}
                            {% if categorie.formations|length == 0 %}
                                <a href=\"{{ path('admin.categorie.suppr', {id:categorie.id}) }}\" class=\"btn btn-info\" 
                                   onclick=\"return confirm('Etes-vous sûr de vouloir supprimer {{ categorie.name }} ?')\">Supprimer</a>
                            {% endif %}
                    </td>
                {% endfor %}
        </tbody>
    </table>
{% endblock %}
", "templates/admin/admin.categories.html.twig", "C:\\wamp64\\www\\mediatekFormation\\templates\\templates\\admin\\admin.categories.html.twig");
    }
}
