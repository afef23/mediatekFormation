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

/* pages/formations.html.twig */
class __TwigTemplate_a8247751c94503a16a4f790740abbaf4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/formations.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/formations.html.twig"));

        $this->parent = $this->loadTemplate("basefront.html.twig", "pages/formations.html.twig", 1);
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
        yield "    <table class=\"table table-striped\">
        <caption>tableau des formations</caption>
        <thead>
            <tr>
                <th class=\"text-left align-top\" scope=\"col\">
                    formation<br />
                    <a href=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formations.sort", ["champ" => "title", "ordre" => "ASC"]), "html", null, true);
        yield "\" class=\"btn btn-info btn-sm active\" role=\"button\" aria-pressed=\"true\"><</a>
                    <a href=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formations.sort", ["champ" => "title", "ordre" => "DESC"]), "html", null, true);
        yield "\" class=\"btn btn-info btn-sm active\" role=\"button\" aria-pressed=\"true\">></a>
                    <form class=\"form-inline mt-1\" method=\"POST\" action=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formations.findallcontain", ["champ" => "title"]);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("filtre_title"), "html", null, true);
        yield "\">
                            <button type=\"submit\" class=\"btn btn-info mb-2 btn-sm\">filtrer</button>
                        </div>
                    </form>
                </th>
                <th class=\"text-left align-top\" scope=\"col\">
                    playlist<br />
                    <a href=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formations.sort", ["table" => "playlist", "champ" => "name", "ordre" => "ASC"]), "html", null, true);
        yield "\" class=\"btn btn-info btn-sm active\" role=\"button\" aria-pressed=\"true\"><</a>
                    <a href=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formations.sort", ["table" => "playlist", "champ" => "name", "ordre" => "DESC"]), "html", null, true);
        yield "\" class=\"btn btn-info btn-sm active\" role=\"button\" aria-pressed=\"true\">></a>
                    <form class=\"form-inline mt-1\" method=\"POST\" action=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formations.findallcontain", ["champ" => "name", "table" => "playlist"]), "html", null, true);
        yield "\">
                        <div class=\"form-group mr-1 mb-2\">
                            <input type=\"text\" class=\"sm\" name=\"recherche\" 
                                   value=\"";
        // line 27
        if (((((array_key_exists("valeur", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 27, $this->source); })()))) : ("")) && ((array_key_exists("table", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 27, $this->source); })()))) : (""))) && ((isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 27, $this->source); })()) == "playlist"))) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 27, $this->source); })()), "html", null, true);
        }
        yield "\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("filtre_name"), "html", null, true);
        yield "\">
                            <button type=\"submit\" class=\"btn btn-info mb-2 btn-sm\">filtrer</button>
                        </div>
                    </form>                    
                </th>
                <th class=\"text-left align-top\" scope=\"col\">
                    catégories
                    <form class=\"form-inline mt-1\" method=\"POST\" action=\"";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formations.findallcontain", ["champ" => "id", "table" => "categories"]), "html", null, true);
        yield "\">
                        <select class=\"form-select form-select-sm\" name=\"recherche\" id=\"recherche\" onchange=\"this.form.submit()\">
                            <option value=\"\"></option>
                            ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 38, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 39
            yield "                                <option 
                                    ";
            // line 40
            if ((((array_key_exists("valeur", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 40, $this->source); })()))) : ("")) && ((isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 40, $this->source); })()) == CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 40)))) {
                yield " 
                                        selected
                                    ";
            }
            // line 42
            yield " 
                                    value=\"";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 43), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "name", [], "any", false, false, false, 43), "html", null, true);
            yield "
                                </option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        yield "                        </select>
                    </form>
                </th>
                <th class=\"text-center align-top\" scope=\"col\">
                    date<br />
                    <a href=\"";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formations.sort", ["champ" => "publishedAt", "ordre" => "ASC"]), "html", null, true);
        yield "\" class=\"btn btn-info btn-sm active\" role=\"button\" aria-pressed=\"true\"><</a>
                    <a href=\"";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formations.sort", ["champ" => "publishedAt", "ordre" => "DESC"]), "html", null, true);
        yield "\" class=\"btn btn-info btn-sm active\" role=\"button\" aria-pressed=\"true\">></a>                    
                </th>
                <th class=\"text-center align-top\" scope=\"col\">
                    &nbsp;
                </th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["formations"]) || array_key_exists("formations", $context) ? $context["formations"] : (function () { throw new RuntimeError('Variable "formations" does not exist.', 60, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["formation"]) {
            // line 61
            yield "                <tr class=\"align-middle\">
                    <td>
                        <h5 class=\"text-info\">
                            ";
            // line 64
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["formation"], "title", [], "any", false, false, false, 64), "html", null, true);
            yield "
                        </h5>
                    </td>
                    <td class=\"text-left\">
                        ";
            // line 68
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["formation"], "playlist", [], "any", false, false, false, 68), "html", null, true);
            yield "
                    </td>
                    <td class=\"text-left\">
                        ";
            // line 71
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["formation"], "categories", [], "any", false, false, false, 71));
            foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
                // line 72
                yield "                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "name", [], "any", false, false, false, 72), "html", null, true);
                yield "<br />
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            yield "                    </td>
                    <td class=\"text-center\">
                        ";
            // line 76
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["formation"], "publishedatstring", [], "any", false, false, false, 76), "html", null, true);
            yield "
                    </td>
                    <td class=\"text-center\">
                        ";
            // line 79
            if (CoreExtension::getAttribute($this->env, $this->source, $context["formation"], "miniature", [], "any", false, false, false, 79)) {
                // line 80
                yield "                            <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formations.showone", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["formation"], "id", [], "any", false, false, false, 80)]), "html", null, true);
                yield "\">
                                <img src=\"";
                // line 81
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["formation"], "miniature", [], "any", false, false, false, 81), "html", null, true);
                yield "\" alt=\"image de la formation\">
                            </a>
                        ";
            }
            // line 84
            yield "                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
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
        return "pages/formations.html.twig";
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
        return array (  258 => 87,  250 => 84,  244 => 81,  239 => 80,  237 => 79,  231 => 76,  227 => 74,  218 => 72,  214 => 71,  208 => 68,  201 => 64,  196 => 61,  192 => 60,  181 => 52,  177 => 51,  170 => 46,  159 => 43,  156 => 42,  150 => 40,  147 => 39,  143 => 38,  137 => 35,  127 => 28,  121 => 27,  115 => 24,  111 => 23,  107 => 22,  97 => 15,  91 => 14,  85 => 11,  81 => 10,  77 => 9,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"basefront.html.twig\" %}
{% block body %}
    <table class=\"table table-striped\">
        <caption>tableau des formations</caption>
        <thead>
            <tr>
                <th class=\"text-left align-top\" scope=\"col\">
                    formation<br />
                    <a href=\"{{ path('formations.sort', {champ:'title', ordre:'ASC'}) }}\" class=\"btn btn-info btn-sm active\" role=\"button\" aria-pressed=\"true\"><</a>
                    <a href=\"{{ path('formations.sort', {champ:'title', ordre:'DESC'}) }}\" class=\"btn btn-info btn-sm active\" role=\"button\" aria-pressed=\"true\">></a>
                    <form class=\"form-inline mt-1\" method=\"POST\" action=\"{{ path('formations.findallcontain', {champ:'title'}) }}\">
                        <div class=\"form-group mr-1 mb-2\">
                            <input type=\"text\" class=\"sm\" name=\"recherche\" 
                                   value=\"{% if valeur|default and not table|default %}{{ valeur }}{% endif %}\">
                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('filtre_title') }}\">
                            <button type=\"submit\" class=\"btn btn-info mb-2 btn-sm\">filtrer</button>
                        </div>
                    </form>
                </th>
                <th class=\"text-left align-top\" scope=\"col\">
                    playlist<br />
                    <a href=\"{{ path('formations.sort', {table:'playlist', champ:'name', ordre:'ASC'}) }}\" class=\"btn btn-info btn-sm active\" role=\"button\" aria-pressed=\"true\"><</a>
                    <a href=\"{{ path('formations.sort', {table:'playlist', champ:'name', ordre:'DESC'}) }}\" class=\"btn btn-info btn-sm active\" role=\"button\" aria-pressed=\"true\">></a>
                    <form class=\"form-inline mt-1\" method=\"POST\" action=\"{{ path('formations.findallcontain', {champ:'name', table:'playlist'}) }}\">
                        <div class=\"form-group mr-1 mb-2\">
                            <input type=\"text\" class=\"sm\" name=\"recherche\" 
                                   value=\"{% if valeur|default and table|default and table=='playlist' %}{{ valeur }}{% endif %}\">
                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('filtre_name') }}\">
                            <button type=\"submit\" class=\"btn btn-info mb-2 btn-sm\">filtrer</button>
                        </div>
                    </form>                    
                </th>
                <th class=\"text-left align-top\" scope=\"col\">
                    catégories
                    <form class=\"form-inline mt-1\" method=\"POST\" action=\"{{ path('formations.findallcontain', {champ:'id', table:'categories'}) }}\">
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
                <th class=\"text-center align-top\" scope=\"col\">
                    date<br />
                    <a href=\"{{ path('formations.sort', {champ:'publishedAt', ordre:'ASC'}) }}\" class=\"btn btn-info btn-sm active\" role=\"button\" aria-pressed=\"true\"><</a>
                    <a href=\"{{ path('formations.sort', {champ:'publishedAt', ordre:'DESC'}) }}\" class=\"btn btn-info btn-sm active\" role=\"button\" aria-pressed=\"true\">></a>                    
                </th>
                <th class=\"text-center align-top\" scope=\"col\">
                    &nbsp;
                </th>
            </tr>
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
                        {{ formation.playlist }}
                    </td>
                    <td class=\"text-left\">
                        {% for categorie in formation.categories %}
                            {{ categorie.name }}<br />
                        {% endfor %}
                    </td>
                    <td class=\"text-center\">
                        {{ formation.publishedatstring }}
                    </td>
                    <td class=\"text-center\">
                        {% if formation.miniature %}
                            <a href=\"{{ path('formations.showone', {id:formation.id}) }}\">
                                <img src=\"{{ formation.miniature }}\" alt=\"image de la formation\">
                            </a>
                        {% endif %}
                    </td>
                </tr>
            {% endfor %}
        </tbody>
    </table>
{% endblock %}", "pages/formations.html.twig", "C:\\wamp64\\www\\mediatekFormation\\templates\\pages\\formations.html.twig");
    }
}
