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

/* _admin.playlist.form.html.twig */
class __TwigTemplate_35c79c09bb48b593702010ce6b5941b5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_admin.playlist.form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_admin.playlist.form.html.twig"));

        // line 1
        yield "    ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formPlaylist"]) || array_key_exists("formPlaylist", $context) ? $context["formPlaylist"] : (function () { throw new RuntimeError('Variable "formPlaylist" does not exist.', 1, $this->source); })()), 'form_start');
        yield "
        <div class=\"row\">
            ";
        // line 3
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formPlaylist"]) || array_key_exists("formPlaylist", $context) ? $context["formPlaylist"] : (function () { throw new RuntimeError('Variable "formPlaylist" does not exist.', 3, $this->source); })()), "name", [], "any", false, false, false, 3), 'row');
        yield "
            <br>
            ";
        // line 5
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formPlaylist"]) || array_key_exists("formPlaylist", $context) ? $context["formPlaylist"] : (function () { throw new RuntimeError('Variable "formPlaylist" does not exist.', 5, $this->source); })()), "description", [], "any", false, false, false, 5), 'row');
        yield "
            <br>
            ";
        // line 7
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formPlaylist"]) || array_key_exists("formPlaylist", $context) ? $context["formPlaylist"] : (function () { throw new RuntimeError('Variable "formPlaylist" does not exist.', 7, $this->source); })()), "formations", [], "any", false, false, false, 7), 'row', ["attr" => ["size" => 15]]);
        yield "
            <h5> Une formation ne peut être rattaché qu'a une playlist</h5>
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
        // line 20
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formPlaylist"]) || array_key_exists("formPlaylist", $context) ? $context["formPlaylist"] : (function () { throw new RuntimeError('Variable "formPlaylist" does not exist.', 20, $this->source); })()), "submit", [], "any", false, false, false, 20), 'row', ["attr" => ["onclick" => "return confirm(Etes-vous sûr?\")"]]);
        yield "
        </div>
    ";
        // line 22
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formPlaylist"]) || array_key_exists("formPlaylist", $context) ? $context["formPlaylist"] : (function () { throw new RuntimeError('Variable "formPlaylist" does not exist.', 22, $this->source); })()), 'form_end');
        yield "
    ";
        // line 23
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["playlist"]) || array_key_exists("playlist", $context) ? $context["playlist"] : (function () { throw new RuntimeError('Variable "playlist" does not exist.', 23, $this->source); })()), "id", [], "any", false, false, false, 23) != null)) {
            // line 24
            yield "        <div class=\"d-grid gap-2 d-md-flex justify-content-md-end\">
            <a href=\"";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.playlist.edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["playlist"]) || array_key_exists("playlist", $context) ? $context["playlist"] : (function () { throw new RuntimeError('Variable "playlist" does not exist.', 25, $this->source); })()), "id", [], "any", false, false, false, 25)]), "html", null, true);
            yield "\" class=\"btn btn-info me-md-2\">
                Annuler
            </a>
            <a href=\"";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.playlist.suppr", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["playlist"]) || array_key_exists("playlist", $context) ? $context["playlist"] : (function () { throw new RuntimeError('Variable "playlist" does not exist.', 28, $this->source); })()), "id", [], "any", false, false, false, 28)]), "html", null, true);
            yield "\" 
                class=\"btn btn-info\" 
                onclick=\"return confirm('Etes-vous sûr de vouloir supprimer ";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["playlist"]) || array_key_exists("playlist", $context) ? $context["playlist"] : (function () { throw new RuntimeError('Variable "playlist" does not exist.', 30, $this->source); })()), "name", [], "any", false, false, false, 30), "html", null, true);
            yield " ?')\">
                Supprimer
            </a>
        </div>
    ";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "_admin.playlist.form.html.twig";
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
        return array (  101 => 30,  96 => 28,  90 => 25,  87 => 24,  85 => 23,  81 => 22,  76 => 20,  60 => 7,  55 => 5,  50 => 3,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("    {{ form_start(formPlaylist) }}
        <div class=\"row\">
            {{ form_row(formPlaylist.name) }}
            <br>
            {{ form_row(formPlaylist.description) }}
            <br>
            {{ form_row(formPlaylist.formations, {'attr': {'size': 15}}) }}
            <h5> Une formation ne peut être rattaché qu'a une playlist</h5>
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
            {{ form_row(formPlaylist.submit, {'attr': {'onclick': 'return confirm(Etes-vous sûr?\")'}}) }}
        </div>
    {{ form_end(formPlaylist) }}
    {% if playlist.id != null %}
        <div class=\"d-grid gap-2 d-md-flex justify-content-md-end\">
            <a href=\"{{ path('admin.playlist.edit', {id:playlist.id }) }}\" class=\"btn btn-info me-md-2\">
                Annuler
            </a>
            <a href=\"{{ path('admin.playlist.suppr', {id:playlist.id }) }}\" 
                class=\"btn btn-info\" 
                onclick=\"return confirm('Etes-vous sûr de vouloir supprimer {{ playlist.name }} ?')\">
                Supprimer
            </a>
        </div>
    {% endif %}", "_admin.playlist.form.html.twig", "C:\\wamp64\\www\\mediatekFormation\\templates\\_admin.playlist.form.html.twig");
    }
}
