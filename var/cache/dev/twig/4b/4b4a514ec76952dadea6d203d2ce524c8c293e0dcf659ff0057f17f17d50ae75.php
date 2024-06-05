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

/* pages/_admin.categorie.form.html.twig */
class __TwigTemplate_5d0571e14fa482ef1e2c379996c5c864a50a92dde9c65ab99fc528f212b90084 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/_admin.categorie.form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/_admin.categorie.form.html.twig"));

        // line 1
        yield "  ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formCategorie"]) || array_key_exists("formCategorie", $context) ? $context["formCategorie"] : (function () { throw new RuntimeError('Variable "formCategorie" does not exist.', 1, $this->source); })()), 'form_start');
        yield "
        <div class=\"row\">
            ";
        // line 3
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCategorie"]) || array_key_exists("formCategorie", $context) ? $context["formCategorie"] : (function () { throw new RuntimeError('Variable "formCategorie" does not exist.', 3, $this->source); })()), "name", [], "any", false, false, false, 3), 'row');
        yield "
            <br>
            ";
        // line 5
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCategorie"]) || array_key_exists("formCategorie", $context) ? $context["formCategorie"] : (function () { throw new RuntimeError('Variable "formCategorie" does not exist.', 5, $this->source); })()), "formations", [], "any", false, false, false, 5), 'row', ["attr" => ["size" => 15]]);
        yield "
            <br>
            <br />
            <br />
            <ul>
                <li>
                    Ctrl+clic : pour sélectionner plusieurs éléments un à un ou en désélectionner un.

                </li>
                <li>
                    Shift+clic : pour sélectionner tous les éléments compris entre le premier et le second clic.
                </li>
            </ul>
            ";
        // line 18
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCategorie"]) || array_key_exists("formCategorie", $context) ? $context["formCategorie"] : (function () { throw new RuntimeError('Variable "formCategorie" does not exist.', 18, $this->source); })()), "submit", [], "any", false, false, false, 18), 'row', ["attr" => ["onclick" => "return confirm(Etes-vous sûr?\")"]]);
        yield "
        </div>
            ";
        // line 20
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formCategorie"]) || array_key_exists("formCategorie", $context) ? $context["formCategorie"] : (function () { throw new RuntimeError('Variable "formCategorie" does not exist.', 20, $this->source); })()), 'form_end');
        yield "
            ";
        // line 21
        if ((0 !== CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 21, $this->source); })()), "id", [], "any", false, false, false, 21), null))) {
            // line 22
            yield "                <div class=\"d-grid gap-2 d-md-flex justify-content-md-end\">
                    <a href=\"";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.categorie.edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 23, $this->source); })()), "id", [], "any", false, false, false, 23)]), "html", null, true);
            yield "\" class=\"btn btn-info me-md-2\">
                        Annuler
                    </a>
                    <a href=\"";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.categorie.suppr", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 26, $this->source); })()), "id", [], "any", false, false, false, 26)]), "html", null, true);
            yield "\" 
                        class=\"btn btn-info\" 
                        onclick=\"return confirm('Etes-vous sûr de vouloir supprimer ";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 28, $this->source); })()), "name", [], "any", false, false, false, 28), "html", null, true);
            yield " ?')\">
                        Supprimer
                    </a>
                </div>
            ";
        }
        // line 33
        yield "        </div>
    ";
        // line 34
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formCategorie"]) || array_key_exists("formCategorie", $context) ? $context["formCategorie"] : (function () { throw new RuntimeError('Variable "formCategorie" does not exist.', 34, $this->source); })()), 'form_end');
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "pages/_admin.categorie.form.html.twig";
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
        return array (  107 => 34,  104 => 33,  96 => 28,  91 => 26,  85 => 23,  82 => 22,  80 => 21,  76 => 20,  71 => 18,  55 => 5,  50 => 3,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("  {{ form_start(formCategorie) }}
        <div class=\"row\">
            {{ form_row(formCategorie.name) }}
            <br>
            {{ form_row(formCategorie.formations, {'attr': {'size': 15}}) }}
            <br>
            <br />
            <br />
            <ul>
                <li>
                    Ctrl+clic : pour sélectionner plusieurs éléments un à un ou en désélectionner un.

                </li>
                <li>
                    Shift+clic : pour sélectionner tous les éléments compris entre le premier et le second clic.
                </li>
            </ul>
            {{ form_row(formCategorie.submit, {'attr': {'onclick': 'return confirm(Etes-vous sûr?\")'}}) }}
        </div>
            {{ form_end(formCategorie) }}
            {% if categorie.id != null %}
                <div class=\"d-grid gap-2 d-md-flex justify-content-md-end\">
                    <a href=\"{{ path('admin.categorie.edit', {id:categorie.id }) }}\" class=\"btn btn-info me-md-2\">
                        Annuler
                    </a>
                    <a href=\"{{ path('admin.categorie.suppr', {id:categorie.id }) }}\" 
                        class=\"btn btn-info\" 
                        onclick=\"return confirm('Etes-vous sûr de vouloir supprimer {{ categorie.name }} ?')\">
                        Supprimer
                    </a>
                </div>
            {% endif %}
        </div>
    {{ form_end(formCategorie) }}", "pages/_admin.categorie.form.html.twig", "C:\\wamp64\\www\\mediatekFormation\\templates\\pages\\_admin.categorie.form.html.twig");
    }
}
