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

/* pages/admin/categories.html.twig */
class __TwigTemplate_832affab02c9f2ad2ca4abaa0c765770 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/admin/categories.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/admin/categories.html.twig"));

        $this->parent = $this->loadTemplate("baseadmin.html.twig", "pages/admin/categories.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        yield "    ";
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
        yield "    <p class=\"text-end\">
        <a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.categorie.ajout");
        yield "\" class=\"btn btn-secondary\">
            Ajouter une categorie
        </a>
    </p>
    <table class=\"table table-striped\">
        <caption>tableau des categories</caption>
        <thead>
            <tr>
                <th class=\"text-left align-top\" scope=\"col\">
                    categorie<br />
                    <a href=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.categories.sort", ["champ" => "name", "ordre" => "ASC"]), "html", null, true);
        yield "\" class=\"btn btn-info btn-sm active\" role=\"button\" aria-pressed=\"true\"><</a>
                    <a href=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.categories.sort", ["champ" => "name", "ordre" => "DESC"]), "html", null, true);
        yield "\" class=\"btn btn-info btn-sm active\" role=\"button\" aria-pressed=\"true\">></a>
                    <form class=\"form-inline mt-1\" method=\"POST\" action=\"";
        // line 26
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.categories.findallcontain", ["champ" => "name"]);
        yield "\">
                        <div class=\"form-group mr-1 mb-2\">
                            <input type=\"text\" class=\"sm\" name=\"recherche\" 
                                   value=\"";
        // line 29
        if ((((array_key_exists("valeur", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 29, $this->source); })()))) : ("")) &&  !((array_key_exists("table", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 29, $this->source); })()))) : ("")))) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 29, $this->source); })()), "html", null, true);
        }
        yield "\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("filtre_name"), "html", null, true);
        yield "\">
                            <button type=\"submit\" class=\"btn btn-info mb-2 btn-sm\">filtrer</button>
                        </div>
                    </form>                    
                </th>
                </th>
                <th class=\"text-center align-top\" scope=\"col\">
                    formations par categorie<br />
                    <a href=\"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.categories.sort", ["champ" => "nombre", "ordre" => "ASC"]), "html", null, true);
        yield "\" class=\"btn btn-info btn-sm active\" role=\"button\" aria-pressed=\"true\"><</a>
                    <a href=\"";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.categories.sort", ["champ" => "nombre", "ordre" => "DESC"]), "html", null, true);
        yield "\" class=\"btn btn-info btn-sm active\" role=\"button\" aria-pressed=\"true\">></a>
                </th>
                <th class=\"text-center align-top\" scope=\"col\">
                    &nbsp;
                </th>
                <th class=\"text-center align-top\" scope=\"col\">
                    &nbsp;
                </th>\t\t\t\t
            </tr>
        </thead>
        <tbody>
            <!-- boucle sur les playlists -->
            ";
        // line 51
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 51, $this->source); })())) > 0)) {
            // line 52
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(0, (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 52, $this->source); })())) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["k"]) {
                // line 53
                yield "                    <tr class=\"align-middle\">
                        <td>
                            <h5 class=\"text-info\">
                                ";
                // line 56
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 56, $this->source); })()), $context["k"], [], "array", false, false, false, 56), "name", [], "any", false, false, false, 56), "html", null, true);
                yield "
                            </h5>
                        </td>
                        <td>
                            <h5 class=\"text-center\">
                                ";
                // line 61
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 61, $this->source); })()), $context["k"], [], "array", false, false, false, 61), "formations", [], "any", false, false, false, 61)), "html", null, true);
                yield " ";
                yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 61, $this->source); })()), $context["k"], [], "array", false, false, false, 61), "formations", [], "any", false, false, false, 61)) > 1)) ? ("formations") : ("formation"));
                yield "
                            </h5>
                        </td>            \t\t\t\t\t
                        <td>
                            <a href=\"";
                // line 65
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.categorie.edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 65, $this->source); })()), $context["k"], [], "array", false, false, false, 65), "id", [], "any", false, false, false, 65)]), "html", null, true);
                yield "\" class=\"btn btn-info\">
                                Modifier
                            </a>
                        </td>
                        <td>
                            <a href=\"";
                // line 70
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.categorie.suppr", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 70, $this->source); })()), $context["k"], [], "array", false, false, false, 70), "id", [], "any", false, false, false, 70)]), "html", null, true);
                yield "\" 
                            class=\"btn btn-info\" 
                            onclick=\"return confirm('Etes-vous sûr de vouloir supprimer ";
                // line 72
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 72, $this->source); })()), $context["k"], [], "array", false, false, false, 72), "name", [], "any", false, false, false, 72), "html", null, true);
                yield " ?')\">
                                Supprimer
                            </a>
                        </td> \t\t\t\t\t
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['k'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            yield "\t
            ";
        }
        // line 79
        yield "        </tbody>
    </table>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "pages/admin/categories.html.twig";
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
        return array (  227 => 79,  223 => 77,  211 => 72,  206 => 70,  198 => 65,  189 => 61,  181 => 56,  176 => 53,  171 => 52,  169 => 51,  154 => 39,  150 => 38,  139 => 30,  133 => 29,  127 => 26,  123 => 25,  119 => 24,  106 => 14,  103 => 13,  94 => 10,  91 => 9,  86 => 8,  77 => 5,  74 => 4,  69 => 3,  59 => 2,  36 => 1,);
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
    <p class=\"text-end\">
        <a href=\"{{ path('admin.categorie.ajout') }}\" class=\"btn btn-secondary\">
            Ajouter une categorie
        </a>
    </p>
    <table class=\"table table-striped\">
        <caption>tableau des categories</caption>
        <thead>
            <tr>
                <th class=\"text-left align-top\" scope=\"col\">
                    categorie<br />
                    <a href=\"{{ path('admin.categories.sort', {champ:'name', ordre:'ASC'}) }}\" class=\"btn btn-info btn-sm active\" role=\"button\" aria-pressed=\"true\"><</a>
                    <a href=\"{{ path('admin.categories.sort', {champ:'name', ordre:'DESC'}) }}\" class=\"btn btn-info btn-sm active\" role=\"button\" aria-pressed=\"true\">></a>
                    <form class=\"form-inline mt-1\" method=\"POST\" action=\"{{ path('admin.categories.findallcontain', {champ:'name'}) }}\">
                        <div class=\"form-group mr-1 mb-2\">
                            <input type=\"text\" class=\"sm\" name=\"recherche\" 
                                   value=\"{% if valeur|default and not table|default %}{{ valeur }}{% endif %}\">
                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('filtre_name') }}\">
                            <button type=\"submit\" class=\"btn btn-info mb-2 btn-sm\">filtrer</button>
                        </div>
                    </form>                    
                </th>
                </th>
                <th class=\"text-center align-top\" scope=\"col\">
                    formations par categorie<br />
                    <a href=\"{{ path('admin.categories.sort', {champ:'nombre', ordre:'ASC'}) }}\" class=\"btn btn-info btn-sm active\" role=\"button\" aria-pressed=\"true\"><</a>
                    <a href=\"{{ path('admin.categories.sort', {champ:'nombre', ordre:'DESC'}) }}\" class=\"btn btn-info btn-sm active\" role=\"button\" aria-pressed=\"true\">></a>
                </th>
                <th class=\"text-center align-top\" scope=\"col\">
                    &nbsp;
                </th>
                <th class=\"text-center align-top\" scope=\"col\">
                    &nbsp;
                </th>\t\t\t\t
            </tr>
        </thead>
        <tbody>
            <!-- boucle sur les playlists -->
            {% if categories|length > 0 %}
                {% for k in 0..categories|length-1 %}
                    <tr class=\"align-middle\">
                        <td>
                            <h5 class=\"text-info\">
                                {{ categories[k].name }}
                            </h5>
                        </td>
                        <td>
                            <h5 class=\"text-center\">
                                {{ categories[k].formations|length}} {{ (categories[k].formations|length) > 1 ? 'formations' : 'formation' }}
                            </h5>
                        </td>            \t\t\t\t\t
                        <td>
                            <a href=\"{{ path('admin.categorie.edit', {id:categories[k].id }) }}\" class=\"btn btn-info\">
                                Modifier
                            </a>
                        </td>
                        <td>
                            <a href=\"{{ path('admin.categorie.suppr', {id:categories[k].id }) }}\" 
                            class=\"btn btn-info\" 
                            onclick=\"return confirm('Etes-vous sûr de vouloir supprimer {{ categories[k].name }} ?')\">
                                Supprimer
                            </a>
                        </td> \t\t\t\t\t
                    </tr>
                {% endfor %}\t
            {% endif %}
        </tbody>
    </table>
{% endblock %}", "pages/admin/categories.html.twig", "C:\\wamp64\\www\\mediatekFormation\\templates\\pages\\admin\\categories.html.twig");
    }
}
