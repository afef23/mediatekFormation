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

/* templates/pages/playlists.html.twig */
class __TwigTemplate_92982a6ece8b1af84bbcd20819a4f3eaa4f740ef4b1e4819a85b505ec3a8b6ce extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "templates/pages/playlists.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "templates/pages/playlists.html.twig"));

        $this->parent = $this->loadTemplate("basefront.html.twig", "templates/pages/playlists.html.twig", 1);
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
        yield "    <table class=\"table table-striped\">
        <caption>Liste des playlists disponibles</caption>
        <thead>
            <tr>
                <th class=\"text-left align-top\" scope=\"col\">
                    playlist<br />
                    <a href=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("playlists.sort", ["champ" => "name", "ordre" => "ASC"]), "html", null, true);
        yield "\" class=\"btn btn-info btn-sm active\" role=\"button\" aria-pressed=\"true\"><</a>
                    <a href=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("playlists.sort", ["champ" => "name", "ordre" => "DESC"]), "html", null, true);
        yield "\" class=\"btn btn-info btn-sm active\" role=\"button\" aria-pressed=\"true\">></a>
                    <form class=\"form-inline mt-1\" method=\"POST\" action=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("playlists.findallcontain", ["champ" => "name", "table" => "null"]), "html", null, true);
        yield "\">
                        <div class=\"form-group mr-1 mb-2\">
                            <input type=\"text\" class=\"sm\" name=\"recherche\" 
                                   value=\"";
        // line 14
        if ((((array_key_exists("valeur", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 14, $this->source); })()))) : ("")) &&  !((array_key_exists("table", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 14, $this->source); })()))) : ("")))) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 14, $this->source); })()), "html", null, true);
        }
        yield "\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("filtre_name"), "html", null, true);
        yield "\">
                            <button type=\"submit\" class=\"btn btn-info mb-2 btn-sm\">filtrer</button>
                        </div>
                    </form>                    
                </th>
                <th class=\"text-left align-top\" scope=\"col\">
                    catégories
                    <form class=\"form-inline mt-1\" method=\"POST\" action=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("playlists.findallcontain", ["champ" => "id", "table" => "categories"]), "html", null, true);
        yield "\">
                        <select class=\"form-select form-select-sm\" name=\"recherche\" id=\"recherche\" onchange=\"this.form.submit();\">
                            <option value=\"\"></option>
                            ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 25, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 26
            yield "                                <option
                                    ";
            // line 27
            if ((((array_key_exists("valeur", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 27, $this->source); })()))) : ("")) && (0 === CoreExtension::compare((isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 27, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 27))))) {
                yield " 
                                        selected
                                    ";
            }
            // line 29
            yield " 
                                    value=\"";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 30), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "name", [], "any", false, false, false, 30), "html", null, true);
            yield "
                                </option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        yield "                        </select>                    
                    </form>            
                </th>
                <th class=\"text-center align-top\" scope=\"col\">
                    &nbsp;
                </th>
            </tr>
        </thead>
        <tbody>
            <!-- boucle sur les playlists -->
            ";
        // line 43
        $context["ancplaylist"] = "";
        // line 44
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(0, (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["playlists"]) || array_key_exists("playlists", $context) ? $context["playlists"] : (function () { throw new RuntimeError('Variable "playlists" does not exist.', 44, $this->source); })())) - 1)));
        foreach ($context['_seq'] as $context["_key"] => $context["k"]) {
            // line 45
            yield "                <tr class=\"align-middle\">
                    <td>
                        <h5 class=\"text-info\">
                            ";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["playlists"]) || array_key_exists("playlists", $context) ? $context["playlists"] : (function () { throw new RuntimeError('Variable "playlists" does not exist.', 48, $this->source); })()), $context["k"], [], "array", false, false, false, 48), "name", [], "any", false, false, false, 48), "html", null, true);
            yield "
                        </h5>
                    </td>
                    <td class=\"text-left\">
                        ";
            // line 52
            $context["categories"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["playlists"]) || array_key_exists("playlists", $context) ? $context["playlists"] : (function () { throw new RuntimeError('Variable "playlists" does not exist.', 52, $this->source); })()), $context["k"], [], "array", false, false, false, 52), "categoriesplaylist", [], "any", false, false, false, 52);
            // line 53
            yield "                        ";
            if ((1 === CoreExtension::compare(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 53, $this->source); })())), 0))) {
                // line 54
                yield "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(range(0, (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 54, $this->source); })())) - 1)));
                foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                    // line 55
                    yield "                                &nbsp;";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 55, $this->source); })()), $context["c"], [], "array", false, false, false, 55), "html", null, true);
                    yield "
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 57
                yield "                        ";
            }
            // line 58
            yield "                    </td>
                    <td class=\"text-center\">
                        ";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["playlists"]) || array_key_exists("playlists", $context) ? $context["playlists"] : (function () { throw new RuntimeError('Variable "playlists" does not exist.', 60, $this->source); })()), $context["k"], [], "array", false, false, false, 60), "formations", [], "any", false, false, false, 60)), "html", null, true);
            yield "
                    </td>
                    <td class=\"text-center\">
                        <a href=\"";
            // line 63
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("playlists.showone", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["playlists"]) || array_key_exists("playlists", $context) ? $context["playlists"] : (function () { throw new RuntimeError('Variable "playlists" does not exist.', 63, $this->source); })()), $context["k"], [], "array", false, false, false, 63), "id", [], "any", false, false, false, 63)]), "html", null, true);
            yield "\" class=\"btn btn-secondary\">Voir détail</a>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['k'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
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
        return "templates/pages/playlists.html.twig";
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
        return array (  213 => 67,  203 => 63,  197 => 60,  193 => 58,  190 => 57,  181 => 55,  176 => 54,  173 => 53,  171 => 52,  164 => 48,  159 => 45,  154 => 44,  152 => 43,  140 => 33,  129 => 30,  126 => 29,  120 => 27,  117 => 26,  113 => 25,  107 => 22,  97 => 15,  91 => 14,  85 => 11,  81 => 10,  77 => 9,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"basefront.html.twig\" %}
{% block body %}
    <table class=\"table table-striped\">
        <caption>Liste des playlists disponibles</caption>
        <thead>
            <tr>
                <th class=\"text-left align-top\" scope=\"col\">
                    playlist<br />
                    <a href=\"{{ path('playlists.sort', {champ:'name', ordre:'ASC'}) }}\" class=\"btn btn-info btn-sm active\" role=\"button\" aria-pressed=\"true\"><</a>
                    <a href=\"{{ path('playlists.sort', {champ:'name', ordre:'DESC'}) }}\" class=\"btn btn-info btn-sm active\" role=\"button\" aria-pressed=\"true\">></a>
                    <form class=\"form-inline mt-1\" method=\"POST\" action=\"{{ path('playlists.findallcontain', {champ:'name',table:'null'}) }}\">
                        <div class=\"form-group mr-1 mb-2\">
                            <input type=\"text\" class=\"sm\" name=\"recherche\" 
                                   value=\"{% if valeur|default and not table|default %}{{ valeur }}{% endif %}\">
                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('filtre_name') }}\">
                            <button type=\"submit\" class=\"btn btn-info mb-2 btn-sm\">filtrer</button>
                        </div>
                    </form>                    
                </th>
                <th class=\"text-left align-top\" scope=\"col\">
                    catégories
                    <form class=\"form-inline mt-1\" method=\"POST\" action=\"{{ path('playlists.findallcontain', {champ:'id', table:'categories'}) }}\">
                        <select class=\"form-select form-select-sm\" name=\"recherche\" id=\"recherche\" onchange=\"this.form.submit();\">
                            <option value=\"\"></option>
                            {% for categorie in categories %}
                                <option
                                    {% if valeur|default and valeur==categorie.id %} 
                                        selected
                                    {% endif %} 
                                    value=\"{{ categorie.id }}\">{{ categorie.name }}
                                </option>
                            {% endfor %}
                        </select>                    
                    </form>            
                </th>
                <th class=\"text-center align-top\" scope=\"col\">
                    &nbsp;
                </th>
            </tr>
        </thead>
        <tbody>
            <!-- boucle sur les playlists -->
            {% set ancplaylist = '' %}
            {% for k in 0..playlists|length-1 %}
                <tr class=\"align-middle\">
                    <td>
                        <h5 class=\"text-info\">
                            {{ playlists[k].name }}
                        </h5>
                    </td>
                    <td class=\"text-left\">
                        {% set categories = playlists[k].categoriesplaylist %}
                        {% if categories|length > 0 %}
                            {% for c in 0..categories|length-1 %}
                                &nbsp;{{ categories[c] }}
                            {% endfor %}
                        {% endif %}
                    </td>
                    <td class=\"text-center\">
                        {{ playlists[k].formations|length }}
                    </td>
                    <td class=\"text-center\">
                        <a href=\"{{ path('playlists.showone', {id:playlists[k].id}) }}\" class=\"btn btn-secondary\">Voir détail</a>
                    </td>
                </tr>
            {% endfor %}
        </tbody>
    </table>
{% endblock %}
", "templates/pages/playlists.html.twig", "C:\\wamp64\\www\\mediatekFormation\\templates\\templates\\pages\\playlists.html.twig");
    }
}
