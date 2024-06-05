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

/* templates/pages/admin/admin.playlists.html.twig */
class __TwigTemplate_6bf7e0587b9bfda99d8103ba34724bdda544a0b3abb420426732bc7e47d3b7d3 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "templates/pages/admin/admin.playlists.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "templates/pages/admin/admin.playlists.html.twig"));

        $this->parent = $this->loadTemplate("baseadmin.html.twig", "templates/pages/admin/admin.playlists.html.twig", 1);
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
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 3, $this->source); })()), "flashes", ["success"], "method", false, false, false, 3));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 4
            yield "        <div class=\"alert alert-success mt-4\">
            ";
            // line 5
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "flashes", ["alert"], "method", false, false, false, 8));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 9
            yield "        <div class=\"alert alert-warning mt-4\">
            ";
            // line 10
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        yield "    <h5>Gestion des playlists</h5>
     <p  class=\"text-end\">
        <a  href=\"";
        // line 15
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
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.playlists.sort", ["champ" => "name", "ordre" => "ASC"]), "html", null, true);
        yield "\" class=\"btn btn-info btn-sm active\" role=\"button\" aria-pressed=\"true\"><</a>
                    <a href=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.playlists.sort", ["champ" => "name", "ordre" => "DESC"]), "html", null, true);
        yield "\" class=\"btn btn-info btn-sm active\" role=\"button\" aria-pressed=\"true\">></a>
                    <form class=\"form-inline mt-1\" method=\"POST\" action=\"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.playlists.findallcontain", ["champ" => "name", "table" => "null"]), "html", null, true);
        yield "\">
                        <div class=\"form-group mr-1 mb-2\">
                            <input type=\"text\" class=\"sm\" name=\"recherche\" 
                                   value=\"";
        // line 30
        if ((((array_key_exists("valeur", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 30, $this->source); })()))) : ("")) &&  !((array_key_exists("table", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 30, $this->source); })()))) : ("")))) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 30, $this->source); })()), "html", null, true);
        }
        yield "\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("filtre_name"), "html", null, true);
        yield "\">
                            <button type=\"submit\" class=\"btn btn-info mb-2 btn-sm\">filtrer</button>
                        </div>
                    </form>                    
                </th>
                <th class=\"text-left align-top\" scope=\"col\">
                    catégories
                    <form class=\"form-inline mt-1\" method=\"POST\" action=\"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.playlists.findallcontain", ["champ" => "id", "table" => "categories"]), "html", null, true);
        yield "\">
                        <select class=\"form-select form-select-sm\" name=\"recherche\" id=\"recherche\" onchange=\"this.form.submit()\">
                            <option value=\"\"></option>
                            ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 41, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 42
            yield "                                <option
                                    ";
            // line 43
            if ((((array_key_exists("valeur", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 43, $this->source); })()))) : ("")) && (0 === CoreExtension::compare((isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 43, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 43))))) {
                yield " 
                                        selected
                                    ";
            }
            // line 45
            yield " 
                                    value=\"";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 46), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "name", [], "any", false, false, false, 46), "html", null, true);
            yield "
                                </option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        yield "                        </select>                    
                    </form>            
                </th>
                <th class=\"text-left align-top\" scope=\"col\">
                    Nombre de formations<br />
                    <a href=\"";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.playlists.sort", ["champ" => "nbformations", "ordre" => "ASC"]), "html", null, true);
        yield "\" class=\"btn btn-info btn-sm active\" role=\"button\" aria-pressed=\"true\"><</a>
                    <a href=\"";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.playlists.sort", ["champ" => "nbformations", "ordre" => "DESC"]), "html", null, true);
        yield "\" class=\"btn btn-info btn-sm active\" role=\"button\" aria-pressed=\"true\">></a>
                    <form class=\"form-inline mt-1\" method=\"POST\" action=\"";
        // line 56
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
        // line 67
        $context["ancplaylist"] = "";
        // line 68
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(0, (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["playlists"]) || array_key_exists("playlists", $context) ? $context["playlists"] : (function () { throw new RuntimeError('Variable "playlists" does not exist.', 68, $this->source); })())) - 1)));
        foreach ($context['_seq'] as $context["_key"] => $context["k"]) {
            // line 69
            yield "                <tr class=\"align-middle\">
                    <td>
                        <h5 class=\"text-info\">
                            ";
            // line 72
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["playlists"]) || array_key_exists("playlists", $context) ? $context["playlists"] : (function () { throw new RuntimeError('Variable "playlists" does not exist.', 72, $this->source); })()), $context["k"], [], "array", false, false, false, 72), "name", [], "any", false, false, false, 72), "html", null, true);
            yield "
                        </h5>
                    </td>
                    <td class=\"text-left\">
                        ";
            // line 76
            $context["categories"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["playlists"]) || array_key_exists("playlists", $context) ? $context["playlists"] : (function () { throw new RuntimeError('Variable "playlists" does not exist.', 76, $this->source); })()), $context["k"], [], "array", false, false, false, 76), "categoriesplaylist", [], "any", false, false, false, 76);
            // line 77
            yield "                        ";
            if ((1 === CoreExtension::compare(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 77, $this->source); })())), 0))) {
                // line 78
                yield "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(range(0, (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 78, $this->source); })())) - 1)));
                foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                    // line 79
                    yield "                                &nbsp;";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 79, $this->source); })()), $context["c"], [], "array", false, false, false, 79), "html", null, true);
                    yield "
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 81
                yield "                        ";
            }
            // line 82
            yield "                    </td>
                    <td>
                        ";
            // line 84
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["playlists"]) || array_key_exists("playlists", $context) ? $context["playlists"] : (function () { throw new RuntimeError('Variable "playlists" does not exist.', 84, $this->source); })()), $context["k"], [], "array", false, false, false, 84), "formations", [], "any", false, false, false, 84)), "html", null, true);
            yield "
                    </td>
                    <td class=\"text-center\">
                        <a href=\"";
            // line 87
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("playlists.showone", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["playlists"]) || array_key_exists("playlists", $context) ? $context["playlists"] : (function () { throw new RuntimeError('Variable "playlists" does not exist.', 87, $this->source); })()), $context["k"], [], "array", false, false, false, 87), "id", [], "any", false, false, false, 87)]), "html", null, true);
            yield "\" class=\"btn btn-secondary \">Voir détail</a>
                    </td>
                    
                    <td>
                        <a href=\"";
            // line 91
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.playlist.edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["playlists"]) || array_key_exists("playlists", $context) ? $context["playlists"] : (function () { throw new RuntimeError('Variable "playlists" does not exist.', 91, $this->source); })()), $context["k"], [], "array", false, false, false, 91), "id", [], "any", false, false, false, 91)]), "html", null, true);
            yield "\" class=\"btn btn-secondary\">Modifier</a>
                    </td>
                    <td>
                        ";
            // line 94
            if ((0 === CoreExtension::compare(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["playlists"]) || array_key_exists("playlists", $context) ? $context["playlists"] : (function () { throw new RuntimeError('Variable "playlists" does not exist.', 94, $this->source); })()), $context["k"], [], "array", false, false, false, 94), "formations", [], "any", false, false, false, 94)), 0))) {
                // line 95
                yield "                            <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.playlist.suppr", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["playlists"]) || array_key_exists("playlists", $context) ? $context["playlists"] : (function () { throw new RuntimeError('Variable "playlists" does not exist.', 95, $this->source); })()), $context["k"], [], "array", false, false, false, 95), "id", [], "any", false, false, false, 95)]), "html", null, true);
                yield "\" class=\"btn btn-info\" 
                            onclick=\"return confirm('Etes-vous sûr de vouloir supprimer ";
                // line 96
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["playlists"]) || array_key_exists("playlists", $context) ? $context["playlists"] : (function () { throw new RuntimeError('Variable "playlists" does not exist.', 96, $this->source); })()), $context["k"], [], "array", false, false, false, 96), "name", [], "any", false, false, false, 96), "html", null, true);
                yield " ?');\">Supprimer</a>
                        ";
            }
            // line 98
            yield "                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['k'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
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
        return "templates/pages/admin/admin.playlists.html.twig";
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
        return array (  295 => 101,  287 => 98,  282 => 96,  277 => 95,  275 => 94,  269 => 91,  262 => 87,  256 => 84,  252 => 82,  249 => 81,  240 => 79,  235 => 78,  232 => 77,  230 => 76,  223 => 72,  218 => 69,  213 => 68,  211 => 67,  197 => 56,  193 => 55,  189 => 54,  182 => 49,  171 => 46,  168 => 45,  162 => 43,  159 => 42,  155 => 41,  149 => 38,  139 => 31,  133 => 30,  127 => 27,  123 => 26,  119 => 25,  106 => 15,  102 => 13,  93 => 10,  90 => 9,  85 => 8,  76 => 5,  73 => 4,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"baseadmin.html.twig\" %}
{% block body %}
{% for message in app.flashes('success') %}
        <div class=\"alert alert-success mt-4\">
            {{ message }}
        </div>
    {% endfor %}
    {% for message in app.flashes('alert') %}
        <div class=\"alert alert-warning mt-4\">
            {{ message }}
        </div>
    {% endfor %}
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
", "templates/pages/admin/admin.playlists.html.twig", "C:\\wamp64\\www\\mediatekFormation\\templates\\templates\\pages\\admin\\admin.playlists.html.twig");
    }
}
