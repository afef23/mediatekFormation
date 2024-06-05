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

/* pages/admin/admin.playlists.html.twig */
class __TwigTemplate_0dd00ff9ad0060eb965695d2b5cfab6f845727fbf0419f503f462f9c7435f374 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/admin/admin.playlists.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/admin/admin.playlists.html.twig"));

        $this->parent = $this->loadTemplate("baseadmin.html.twig", "pages/admin/admin.playlists.html.twig", 1);
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
        yield "
    <h5>Gestion des playlists</h5>
     <p  class=\"text-end\">
        <a  href=\"";
        // line 6
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.playlist.ajout");
        yield "\"  class=\"btn btn-primary\">
            Ajouter une nouvelle playlist
        </a>
    </p>
    <table class=\"table table-striped\">
        <caption></caption>
        <thead>
            <tr>
                <th class=\"text-left align-top\" scope=\"col\">
                    playlist<br />
                    <a href=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.playlists.sort", ["champ" => "name", "ordre" => "ASC"]), "html", null, true);
        yield "\" class=\"btn btn-info btn-sm active\" role=\"button\" aria-pressed=\"true\"><</a>
                    <a href=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.playlists.sort", ["champ" => "name", "ordre" => "DESC"]), "html", null, true);
        yield "\" class=\"btn btn-info btn-sm active\" role=\"button\" aria-pressed=\"true\">></a>
                    <form class=\"form-inline mt-1\" method=\"POST\" action=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.playlists.findallcontain", ["champ" => "name", "table" => "null"]), "html", null, true);
        yield "\">
                        <div class=\"form-group mr-1 mb-2\">
                            <input type=\"text\" class=\"sm\" name=\"recherche\" 
                                   value=\"";
        // line 21
        if ((((array_key_exists("valeur", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 21, $this->source); })()))) : ("")) &&  !((array_key_exists("table", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 21, $this->source); })()))) : ("")))) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 21, $this->source); })()), "html", null, true);
        }
        yield "\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("filtre_name"), "html", null, true);
        yield "\">
                            <button type=\"submit\" class=\"btn btn-info mb-2 btn-sm\">filtrer</button>
                        </div>
                    </form>                    
                </th>
                <th class=\"text-left align-top\" scope=\"col\">
                    catégories
                    <form class=\"form-inline mt-1\" method=\"POST\" action=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.playlists.findallcontain", ["champ" => "id", "table" => "categories"]), "html", null, true);
        yield "\">
                        <select class=\"form-select form-select-sm\" name=\"recherche\" id=\"recherche\" onchange=\"this.form.submit()\">
                            <option value=\"\"></option>
                            ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 32, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 33
            yield "                                <option
                                    ";
            // line 34
            if ((((array_key_exists("valeur", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 34, $this->source); })()))) : ("")) && (0 === CoreExtension::compare((isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 34, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 34))))) {
                yield " 
                                        selected
                                    ";
            }
            // line 36
            yield " 
                                    value=\"";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 37), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "name", [], "any", false, false, false, 37), "html", null, true);
            yield "
                                </option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        yield "                        </select>                    
                    </form>            
                </th>
                <th class=\"text-left align-top\" scope=\"col\">
                    Nombre de formations<br />
                    <a href=\"";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.playlists.sort", ["champ" => "nbformations", "ordre" => "ASC"]), "html", null, true);
        yield "\" class=\"btn btn-info btn-sm active\" role=\"button\" aria-pressed=\"true\"><</a>
                    <a href=\"";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.playlists.sort", ["champ" => "nbformations", "ordre" => "DESC"]), "html", null, true);
        yield "\" class=\"btn btn-info btn-sm active\" role=\"button\" aria-pressed=\"true\">></a>
                    <form class=\"form-inline mt-1\" method=\"POST\" action=\"";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.playlists.findallcontain", ["champ" => "name", "table" => "null"]), "html", null, true);
        yield "\">
                        <div class=\"form-group mr-1 mb-2\">
                        </div>
                    </form>                    
                </th>
                <th class=\"text-center align-top\" scope=\"col\">
                    &nbsp;
                </th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 58
        $context["ancplaylist"] = "";
        // line 59
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(0, (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["playlists"]) || array_key_exists("playlists", $context) ? $context["playlists"] : (function () { throw new RuntimeError('Variable "playlists" does not exist.', 59, $this->source); })())) - 1)));
        foreach ($context['_seq'] as $context["_key"] => $context["k"]) {
            // line 60
            yield "                <tr class=\"align-middle\">
                    <td>
                        <h5 class=\"text-info\">
                            ";
            // line 63
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["playlists"]) || array_key_exists("playlists", $context) ? $context["playlists"] : (function () { throw new RuntimeError('Variable "playlists" does not exist.', 63, $this->source); })()), $context["k"], [], "array", false, false, false, 63), "name", [], "any", false, false, false, 63), "html", null, true);
            yield "
                        </h5>
                    </td>
                    <td class=\"text-left\">
                        ";
            // line 67
            $context["categories"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["playlists"]) || array_key_exists("playlists", $context) ? $context["playlists"] : (function () { throw new RuntimeError('Variable "playlists" does not exist.', 67, $this->source); })()), $context["k"], [], "array", false, false, false, 67), "categoriesplaylist", [], "any", false, false, false, 67);
            // line 68
            yield "                        ";
            if ((1 === CoreExtension::compare(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 68, $this->source); })())), 0))) {
                // line 69
                yield "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(range(0, (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 69, $this->source); })())) - 1)));
                foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                    // line 70
                    yield "                                &nbsp;";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 70, $this->source); })()), $context["c"], [], "array", false, false, false, 70), "html", null, true);
                    yield "
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 72
                yield "                        ";
            }
            // line 73
            yield "                    </td>
                    <td>
                        ";
            // line 75
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["playlists"]) || array_key_exists("playlists", $context) ? $context["playlists"] : (function () { throw new RuntimeError('Variable "playlists" does not exist.', 75, $this->source); })()), $context["k"], [], "array", false, false, false, 75), "formations", [], "any", false, false, false, 75)), "html", null, true);
            yield "
                    </td>
                    <td class=\"text-center\">
                        <a href=\"";
            // line 78
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("playlists.showone", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["playlists"]) || array_key_exists("playlists", $context) ? $context["playlists"] : (function () { throw new RuntimeError('Variable "playlists" does not exist.', 78, $this->source); })()), $context["k"], [], "array", false, false, false, 78), "id", [], "any", false, false, false, 78)]), "html", null, true);
            yield "\" class=\"btn btn-secondary \">Voir détail</a>
                    </td>
                    
                    <td>
                        <a href=\"";
            // line 82
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.playlist.edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["playlists"]) || array_key_exists("playlists", $context) ? $context["playlists"] : (function () { throw new RuntimeError('Variable "playlists" does not exist.', 82, $this->source); })()), $context["k"], [], "array", false, false, false, 82), "id", [], "any", false, false, false, 82)]), "html", null, true);
            yield "\" class=\"btn btn-secondary\">Modifier</a>
                    </td>
                    <td>
                        ";
            // line 85
            if ((0 === CoreExtension::compare(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["playlists"]) || array_key_exists("playlists", $context) ? $context["playlists"] : (function () { throw new RuntimeError('Variable "playlists" does not exist.', 85, $this->source); })()), $context["k"], [], "array", false, false, false, 85), "formations", [], "any", false, false, false, 85)), 0))) {
                // line 86
                yield "                            <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.playlist.suppr", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["playlists"]) || array_key_exists("playlists", $context) ? $context["playlists"] : (function () { throw new RuntimeError('Variable "playlists" does not exist.', 86, $this->source); })()), $context["k"], [], "array", false, false, false, 86), "id", [], "any", false, false, false, 86)]), "html", null, true);
                yield "\" class=\"btn btn-info\" 
                            onclick=\"return confirm('Etes-vous sûr de vouloir supprimer ";
                // line 87
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["playlists"]) || array_key_exists("playlists", $context) ? $context["playlists"] : (function () { throw new RuntimeError('Variable "playlists" does not exist.', 87, $this->source); })()), $context["k"], [], "array", false, false, false, 87), "name", [], "any", false, false, false, 87), "html", null, true);
                yield " ?');\">Supprimer</a>
                        ";
            }
            // line 89
            yield "                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['k'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
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
        return "pages/admin/admin.playlists.html.twig";
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
        return array (  263 => 92,  255 => 89,  250 => 87,  245 => 86,  243 => 85,  237 => 82,  230 => 78,  224 => 75,  220 => 73,  217 => 72,  208 => 70,  203 => 69,  200 => 68,  198 => 67,  191 => 63,  186 => 60,  181 => 59,  179 => 58,  165 => 47,  161 => 46,  157 => 45,  150 => 40,  139 => 37,  136 => 36,  130 => 34,  127 => 33,  123 => 32,  117 => 29,  107 => 22,  101 => 21,  95 => 18,  91 => 17,  87 => 16,  74 => 6,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"baseadmin.html.twig\" %}
{% block body %}

    <h5>Gestion des playlists</h5>
     <p  class=\"text-end\">
        <a  href=\"{{ path('admin.playlist.ajout') }}\"  class=\"btn btn-primary\">
            Ajouter une nouvelle playlist
        </a>
    </p>
    <table class=\"table table-striped\">
        <caption></caption>
        <thead>
            <tr>
                <th class=\"text-left align-top\" scope=\"col\">
                    playlist<br />
                    <a href=\"{{ path('admin.playlists.sort', {champ:'name', ordre:'ASC'}) }}\" class=\"btn btn-info btn-sm active\" role=\"button\" aria-pressed=\"true\"><</a>
                    <a href=\"{{ path('admin.playlists.sort', {champ:'name', ordre:'DESC'}) }}\" class=\"btn btn-info btn-sm active\" role=\"button\" aria-pressed=\"true\">></a>
                    <form class=\"form-inline mt-1\" method=\"POST\" action=\"{{ path('admin.playlists.findallcontain', {champ:'name',table:'null'}) }}\">
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
                    <form class=\"form-inline mt-1\" method=\"POST\" action=\"{{ path('admin.playlists.findallcontain', {champ:'id', table:'categories'}) }}\">
                        <select class=\"form-select form-select-sm\" name=\"recherche\" id=\"recherche\" onchange=\"this.form.submit()\">
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
                <th class=\"text-left align-top\" scope=\"col\">
                    Nombre de formations<br />
                    <a href=\"{{ path('admin.playlists.sort', {champ:'nbformations', ordre:'ASC'}) }}\" class=\"btn btn-info btn-sm active\" role=\"button\" aria-pressed=\"true\"><</a>
                    <a href=\"{{ path('admin.playlists.sort', {champ:'nbformations', ordre:'DESC'}) }}\" class=\"btn btn-info btn-sm active\" role=\"button\" aria-pressed=\"true\">></a>
                    <form class=\"form-inline mt-1\" method=\"POST\" action=\"{{ path('admin.playlists.findallcontain', {champ:'name',table:'null'}) }}\">
                        <div class=\"form-group mr-1 mb-2\">
                        </div>
                    </form>                    
                </th>
                <th class=\"text-center align-top\" scope=\"col\">
                    &nbsp;
                </th>
            </tr>
        </thead>
        <tbody>
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
                    <td>
                        {{ playlists[k].formations|length }}
                    </td>
                    <td class=\"text-center\">
                        <a href=\"{{ path('playlists.showone', {id:playlists[k].id}) }}\" class=\"btn btn-secondary \">Voir détail</a>
                    </td>
                    
                    <td>
                        <a href=\"{{ path('admin.playlist.edit', {id:playlists[k].id}) }}\" class=\"btn btn-secondary\">Modifier</a>
                    </td>
                    <td>
                        {% if playlists[k].formations|length == 0 %}
                            <a href=\"{{ path('admin.playlist.suppr', {id:playlists[k].id}) }}\" class=\"btn btn-info\" 
                            onclick=\"return confirm('Etes-vous sûr de vouloir supprimer {{ playlists[k].name }} ?');\">Supprimer</a>
                        {% endif %}
                    </td>
                </tr>
            {% endfor %}
        </tbody>
    </table>
{% endblock %}
", "pages/admin/admin.playlists.html.twig", "C:\\wamp64\\www\\mediatekFormation\\templates\\pages\\admin\\admin.playlists.html.twig");
    }
}
