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

/* _admin.formation.form.html.twig */
class __TwigTemplate_a597a37b7ac4d95bdc8a3b56dada13ee0613cb845bb4b97e6c0f766425ec8e61 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_admin.formation.form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_admin.formation.form.html.twig"));

        // line 1
        yield "    ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formFormation"]) || array_key_exists("formFormation", $context) ? $context["formFormation"] : (function () { throw new RuntimeError('Variable "formFormation" does not exist.', 1, $this->source); })()), 'form_start');
        yield "
        <div class=\"row\">
            <div class=\"col\">
                <div class=\"row\">
                    <div class=\"col-auto\">
                        ";
        // line 6
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formFormation"]) || array_key_exists("formFormation", $context) ? $context["formFormation"] : (function () { throw new RuntimeError('Variable "formFormation" does not exist.', 6, $this->source); })()), "publishedAt", [], "any", false, false, false, 6), 'row');
        yield "
                    </div>
                    <div class=\"col\">
                        ";
        // line 9
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formFormation"]) || array_key_exists("formFormation", $context) ? $context["formFormation"] : (function () { throw new RuntimeError('Variable "formFormation" does not exist.', 9, $this->source); })()), "title", [], "any", false, false, false, 9), 'row');
        yield "
                    </div>
                    <div class=\"col\">
                        ";
        // line 12
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formFormation"]) || array_key_exists("formFormation", $context) ? $context["formFormation"] : (function () { throw new RuntimeError('Variable "formFormation" does not exist.', 12, $this->source); })()), "videoId", [], "any", false, false, false, 12), 'row');
        yield "
                    </div>
                </div>
                <br>
                ";
        // line 16
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formFormation"]) || array_key_exists("formFormation", $context) ? $context["formFormation"] : (function () { throw new RuntimeError('Variable "formFormation" does not exist.', 16, $this->source); })()), "description", [], "any", false, false, false, 16), 'row');
        yield "
                <br>
                ";
        // line 18
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formFormation"]) || array_key_exists("formFormation", $context) ? $context["formFormation"] : (function () { throw new RuntimeError('Variable "formFormation" does not exist.', 18, $this->source); })()), "playlist", [], "any", false, false, false, 18), 'row', ["attr" => ["size" => 15]]);
        yield "
                <h5> Une formation ne peut être rattaché qu'a une playlist</h5>
                <br>
                ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formFormation"]) || array_key_exists("formFormation", $context) ? $context["formFormation"] : (function () { throw new RuntimeError('Variable "formFormation" does not exist.', 21, $this->source); })()), "categories", [], "any", false, false, false, 21), 'row');
        yield "
                <ul>
                    <li>
                        Ctrl+clic : pour sélectionner plusieurs éléments un à un ou en désélectionner un.

                    </li>
                    <li>
                        Shift+clic : pour sélectionner tous les éléments compris entre le premier et le second clic.
                    </li>
                </ul>
            </div>
        </div>
    ";
        // line 33
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formFormation"]) || array_key_exists("formFormation", $context) ? $context["formFormation"] : (function () { throw new RuntimeError('Variable "formFormation" does not exist.', 33, $this->source); })()), 'form_end');
        yield "
    ";
        // line 34
        if ((0 !== CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 34, $this->source); })()), "id", [], "any", false, false, false, 34), null))) {
            // line 35
            yield "        <div class=\"d-grid gap-2 d-md-flex justify-content-md-end\">
            <a href=\"";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.formation.edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 36, $this->source); })()), "id", [], "any", false, false, false, 36)]), "html", null, true);
            yield "\" class=\"btn btn-info me-md-2\">
                Annuler
            </a>
            <a href=\"";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.formation.suppr", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 39, $this->source); })()), "id", [], "any", false, false, false, 39)]), "html", null, true);
            yield "\" 
                class=\"btn btn-info\" 
                onclick=\"return confirm('Etes-vous sûr de vouloir supprimer ";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 41, $this->source); })()), "title", [], "any", false, false, false, 41), "html", null, true);
            yield " ?')\">
                Supprimer
            </a>
        </div>
    ";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "_admin.formation.form.html.twig";
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
        return array (  118 => 41,  113 => 39,  107 => 36,  104 => 35,  102 => 34,  98 => 33,  83 => 21,  77 => 18,  72 => 16,  65 => 12,  59 => 9,  53 => 6,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("    {{ form_start(formFormation) }}
        <div class=\"row\">
            <div class=\"col\">
                <div class=\"row\">
                    <div class=\"col-auto\">
                        {{ form_row(formFormation.publishedAt) }}
                    </div>
                    <div class=\"col\">
                        {{ form_row(formFormation.title) }}
                    </div>
                    <div class=\"col\">
                        {{ form_row(formFormation.videoId) }}
                    </div>
                </div>
                <br>
                {{ form_row(formFormation.description) }}
                <br>
                {{ form_row(formFormation.playlist, {'attr': {'size': 15}}) }}
                <h5> Une formation ne peut être rattaché qu'a une playlist</h5>
                <br>
                {{ form_row(formFormation.categories) }}
                <ul>
                    <li>
                        Ctrl+clic : pour sélectionner plusieurs éléments un à un ou en désélectionner un.

                    </li>
                    <li>
                        Shift+clic : pour sélectionner tous les éléments compris entre le premier et le second clic.
                    </li>
                </ul>
            </div>
        </div>
    {{ form_end(formFormation) }}
    {% if formation.id != null %}
        <div class=\"d-grid gap-2 d-md-flex justify-content-md-end\">
            <a href=\"{{ path('admin.formation.edit', {id:formation.id }) }}\" class=\"btn btn-info me-md-2\">
                Annuler
            </a>
            <a href=\"{{ path('admin.formation.suppr', {id:formation.id }) }}\" 
                class=\"btn btn-info\" 
                onclick=\"return confirm('Etes-vous sûr de vouloir supprimer {{ formation.title }} ?')\">
                Supprimer
            </a>
        </div>
    {% endif %}", "_admin.formation.form.html.twig", "C:\\wamp64\\www\\mediatekFormation\\templates\\_admin.formation.form.html.twig");
    }
}
