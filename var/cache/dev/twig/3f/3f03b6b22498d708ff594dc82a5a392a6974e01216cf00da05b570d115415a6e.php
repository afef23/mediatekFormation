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

/* templates/pages/admin.formation.html.twig */
class __TwigTemplate_183fe6f9fa81f9140dfe0c341955877b1ee8e48fb379479e2108ae841e617b94 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "templates/pages/admin.formation.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "templates/pages/admin.formation.html.twig"));

        $this->parent = $this->loadTemplate("baseadmin.html.twig", "templates/pages/admin.formation.html.twig", 1);
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
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 4, $this->source); })()), "flashes", ["success"], "method", false, false, false, 4));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 5
            yield "        <div class=\"alert alert-success mt-4\">
            ";
            // line 6
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "flashes", ["alert"], "method", false, false, false, 9));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 10
            yield "        <div class=\"alert alert-warning mt-4\">
            ";
            // line 11
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        yield "
    <h5>Gestion des formations</h5>
    <p  class=\"text-end\">
        <a  href=\"";
        // line 17
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.formation.ajout");
        yield "\"  class=\"btn btn-primary\">
            Ajouter une nouvelle formation
        </a>
    </p>

    <table class=\"table table-striped\">
      <caption>tableau des formations</caption>
        <thead>
            <tr>
                <th class=\"text-left align-top\" scope=\"col\">
                    Formation<br/>
                    <a href=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.formations.sort", ["champ" => "title", "ordre" => "ASC"]), "html", null, true);
        yield "\" class=\"btn btn-info btn-sm active\" role=\"button\" aria-pressed=\"true\"><</a>
                        <a href=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.formations.sort", ["champ" => "title", "ordre" => "DESC"]), "html", null, true);
        yield "\" class=\"btn btn-info btn-sm active\" role=\"button\" aria-pressed=\"true\">></a>
                        <form class=\"form-inline mt-1\" method=\"POST\" action=\"";
        // line 30
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.formations.findallcontain", ["champ" => "title"]);
        yield "\">
                            <div class=\"form-group mr-1 mb-2\">
                                <input type=\"text\" class=\"sm\" name=\"recherche\" 
                                       value=\"";
        // line 33
        if ((((array_key_exists("valeur", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 33, $this->source); })()))) : ("")) &&  !((array_key_exists("table", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 33, $this->source); })()))) : ("")))) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 33, $this->source); })()), "html", null, true);
        }
        yield "\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("filtre_title"), "html", null, true);
        yield "\">
                                <button type=\"submit\" class=\"btn btn-info mb-2 btn-sm\">filtrer</button>
                            </div>
                        </form>                    
                </th>
                <th class=\"text-left align-top\" scope=\"col\">
                    Playlist<br/>
                    <th class=\"text-left align-top\" scope=\"col\">
                        playlist<br />
                        <a href=\"";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.formations.sort", ["table" => "playlist", "champ" => "name", "ordre" => "ASC"]), "html", null, true);
        yield "\" class=\"btn btn-info btn-sm active\" role=\"button\" aria-pressed=\"true\"><</a>
                        <a href=\"";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.formations.sort", ["table" => "playlist", "champ" => "name", "ordre" => "DESC"]), "html", null, true);
        yield "\" class=\"btn btn-info btn-sm active\" role=\"button\" aria-pressed=\"true\">></a>
                        <form class=\"form-inline mt-1\" method=\"POST\" action=\"";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.formations.findallcontain", ["champ" => "name", "table" => "playlist"]), "html", null, true);
        yield "\">
                            <div class=\"form-group mr-1 mb-2\">
                                <input type=\"text\" class=\"sm\" name=\"recherche\" 
                                       value=\"";
        // line 48
        if (((((array_key_exists("valeur", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 48, $this->source); })()))) : ("")) && ((array_key_exists("table", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 48, $this->source); })()))) : (""))) && (0 === CoreExtension::compare((isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 48, $this->source); })()), "playlist")))) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 48, $this->source); })()), "html", null, true);
        }
        yield "\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("filtre_name"), "html", null, true);
        yield "\">
                                <button type=\"submit\" class=\"btn btn-info mb-2 btn-sm\">filtrer</button>
                            </div>
                        </form>                    
                </th>
                <th class=\"text-left align-top\" scope=\"col\">
                    Catégorie<br/>
                    <form class=\"form-inline mt-1\" method=\"POST\" action=\"";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.formations.findallcontain", ["champ" => "id", "table" => "categories"]), "html", null, true);
        yield "\">
                            <select class=\"form-select form-select-sm\" name=\"recherche\" id=\"recherche\" onchange=\"this.form.submit();\">
                                <option value=\"\"></option>
                                ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 59, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 60
            yield "                                    <option 
                                        ";
            // line 61
            if ((((array_key_exists("valeur", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 61, $this->source); })()))) : ("")) && (0 === CoreExtension::compare((isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 61, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 61))))) {
                yield " 
                                            selected
                                        ";
            }
            // line 63
            yield " 
                                        value=\"";
            // line 64
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 64), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "name", [], "any", false, false, false, 64), "html", null, true);
            yield "
                                    </option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        yield "                            </select>                    
                        </form>         
                </th>
                <th class=\"text-left align-top\" scope=\"col\">
                    Date de publication<br/>
                    <a href=\"";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.formations.sort", ["champ" => "publishedAt", "ordre" => "ASC"]), "html", null, true);
        yield "\" class=\"btn btn-info btn-sm active\" role=\"button\" aria-pressed=\"true\"><</a>
                    <a href=\"";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.formations.sort", ["champ" => "publishedAt", "ordre" => "DESC"]), "html", null, true);
        yield "\" class=\"btn btn-info btn-sm active\" role=\"button\" aria-pressed=\"true\">></a>         
                </th>
                <th class=\"text-left align-top\" scope=\"col\">
                    &nbsp;
                </th>    
        </thead>

        <tbody>
            ";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["formations"]) || array_key_exists("formations", $context) ? $context["formations"] : (function () { throw new RuntimeError('Variable "formations" does not exist.', 81, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["formation"]) {
            // line 82
            yield "                <tr class=\"align-middle\">
                    <td>
                        <h5 class=\"text-info\">
                            ";
            // line 85
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["formation"], "title", [], "any", false, false, false, 85), "html", null, true);
            yield "
                        </h5>
                    </td>
                    <td class=\"text-left\">
                        ";
            // line 89
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["formation"], "playlist", [], "any", false, false, false, 89), "name", [], "any", false, false, false, 89), "html", null, true);
            yield "                  
                    </td>                    
                    <td class=\"text-left\">
                        ";
            // line 92
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["formation"], "categories", [], "any", false, false, false, 92));
            foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
                // line 93
                yield "                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "name", [], "any", false, false, false, 93), "html", null, true);
                yield "<br />
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 95
            yield "                    </td>                    
                    <td class=\"text-center\">
                        ";
            // line 97
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["formation"], "publishedatstring", [], "any", false, false, false, 97), "html", null, true);
            yield "
                    </td> 
                    <td>
                        <a href=\"";
            // line 100
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.formation.edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["formation"], "id", [], "any", false, false, false, 100)]), "html", null, true);
            yield "\" class=\"btn btn-secondary\">Modifier</a>
                        <a href=\"";
            // line 101
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.formation.suppr", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["formation"], "id", [], "any", false, false, false, 101)]), "html", null, true);
            yield "\" class=\"btn btn-info\" 
                        onclick=\"return confirm('Etes-vous sûr de vouloir supprimer ";
            // line 102
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["formation"], "title", [], "any", false, false, false, 102), "html", null, true);
            yield " ?');\">Supprimer</a>
                    </td>
                </tr>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 107
        yield "        </body>
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
        return "templates/pages/admin.formation.html.twig";
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
        return array (  303 => 107,  292 => 102,  288 => 101,  284 => 100,  278 => 97,  274 => 95,  265 => 93,  261 => 92,  255 => 89,  248 => 85,  243 => 82,  239 => 81,  228 => 73,  224 => 72,  217 => 67,  206 => 64,  203 => 63,  197 => 61,  194 => 60,  190 => 59,  184 => 56,  174 => 49,  168 => 48,  162 => 45,  158 => 44,  154 => 43,  142 => 34,  136 => 33,  130 => 30,  126 => 29,  122 => 28,  108 => 17,  103 => 14,  94 => 11,  91 => 10,  86 => 9,  77 => 6,  74 => 5,  69 => 4,  59 => 3,  36 => 1,);
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

    <h5>Gestion des formations</h5>
    <p  class=\"text-end\">
        <a  href=\"{{ path('admin.formation.ajout') }}\"  class=\"btn btn-primary\">
            Ajouter une nouvelle formation
        </a>
    </p>

    <table class=\"table table-striped\">
      <caption>tableau des formations</caption>
        <thead>
            <tr>
                <th class=\"text-left align-top\" scope=\"col\">
                    Formation<br/>
                    <a href=\"{{ path('admin.formations.sort', {champ:'title', ordre:'ASC'}) }}\" class=\"btn btn-info btn-sm active\" role=\"button\" aria-pressed=\"true\"><</a>
                        <a href=\"{{ path('admin.formations.sort', {champ:'title', ordre:'DESC'}) }}\" class=\"btn btn-info btn-sm active\" role=\"button\" aria-pressed=\"true\">></a>
                        <form class=\"form-inline mt-1\" method=\"POST\" action=\"{{ path('admin.formations.findallcontain', {champ:'title'}) }}\">
                            <div class=\"form-group mr-1 mb-2\">
                                <input type=\"text\" class=\"sm\" name=\"recherche\" 
                                       value=\"{% if valeur|default and not table|default %}{{ valeur }}{% endif %}\">
                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('filtre_title') }}\">
                                <button type=\"submit\" class=\"btn btn-info mb-2 btn-sm\">filtrer</button>
                            </div>
                        </form>                    
                </th>
                <th class=\"text-left align-top\" scope=\"col\">
                    Playlist<br/>
                    <th class=\"text-left align-top\" scope=\"col\">
                        playlist<br />
                        <a href=\"{{ path('admin.formations.sort', {table:'playlist', champ:'name', ordre:'ASC'}) }}\" class=\"btn btn-info btn-sm active\" role=\"button\" aria-pressed=\"true\"><</a>
                        <a href=\"{{ path('admin.formations.sort', {table:'playlist', champ:'name', ordre:'DESC'}) }}\" class=\"btn btn-info btn-sm active\" role=\"button\" aria-pressed=\"true\">></a>
                        <form class=\"form-inline mt-1\" method=\"POST\" action=\"{{ path('admin.formations.findallcontain', {champ:'name', table:'playlist'}) }}\">
                            <div class=\"form-group mr-1 mb-2\">
                                <input type=\"text\" class=\"sm\" name=\"recherche\" 
                                       value=\"{% if valeur|default and table|default and table=='playlist' %}{{ valeur }}{% endif %}\">
                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('filtre_name') }}\">
                                <button type=\"submit\" class=\"btn btn-info mb-2 btn-sm\">filtrer</button>
                            </div>
                        </form>                    
                </th>
                <th class=\"text-left align-top\" scope=\"col\">
                    Catégorie<br/>
                    <form class=\"form-inline mt-1\" method=\"POST\" action=\"{{ path('admin.formations.findallcontain', {champ:'id', table:'categories'}) }}\">
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
                <th class=\"text-left align-top\" scope=\"col\">
                    Date de publication<br/>
                    <a href=\"{{ path('admin.formations.sort', {champ:'publishedAt', ordre:'ASC'}) }}\" class=\"btn btn-info btn-sm active\" role=\"button\" aria-pressed=\"true\"><</a>
                    <a href=\"{{ path('admin.formations.sort', {champ:'publishedAt', ordre:'DESC'}) }}\" class=\"btn btn-info btn-sm active\" role=\"button\" aria-pressed=\"true\">></a>         
                </th>
                <th class=\"text-left align-top\" scope=\"col\">
                    &nbsp;
                </th>    
        </thead>

        <tbody>
            {% for formation in formations %}
                <tr class=\"align-middle\">
                    <td>
                        <h5 class=\"text-info\">
                            {{ formation.title }}
                        </h5>
                    </td>
                    <td class=\"text-left\">
                        {{ formation.playlist.name }}                  
                    </td>                    
                    <td class=\"text-left\">
                        {% for categorie in formation.categories %}
                            {{ categorie.name }}<br />
                        {% endfor %}
                    </td>                    
                    <td class=\"text-center\">
                        {{ formation.publishedatstring }}
                    </td> 
                    <td>
                        <a href=\"{{ path('admin.formation.edit', {id:formation.id}) }}\" class=\"btn btn-secondary\">Modifier</a>
                        <a href=\"{{ path('admin.formation.suppr', {id:formation.id}) }}\" class=\"btn btn-info\" 
                        onclick=\"return confirm('Etes-vous sûr de vouloir supprimer {{ formation.title }} ?');\">Supprimer</a>
                    </td>
                </tr>

            {% endfor %}
        </body>
    </table>
{% endblock %}    
", "templates/pages/admin.formation.html.twig", "C:\\wamp64\\www\\mediatekFormation\\templates\\templates\\pages\\admin.formation.html.twig");
    }
}
