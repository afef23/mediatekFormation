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

/* templates/_admin.formation.form.html.twig */
class __TwigTemplate_f1fdf282ac94bea913ac64570faa0ced478ee700f1fc7ec6d688a5ded9a1ecf2 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "templates/_admin.formation.form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "templates/_admin.formation.form.html.twig"));

        // line 1
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formformation"]) || array_key_exists("formformation", $context) ? $context["formformation"] : (function () { throw new RuntimeError('Variable "formformation" does not exist.', 1, $this->source); })()), 'form_start');
        yield "
        <div class=\"row\">
            <div class=\"col\">
                <div class=\"row\">
                    <div class=\"col-auto\">
                        ";
        // line 6
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formformation"]) || array_key_exists("formformation", $context) ? $context["formformation"] : (function () { throw new RuntimeError('Variable "formformation" does not exist.', 6, $this->source); })()), "publishedAt", [], "any", false, false, false, 6), 'row');
        yield "
                    </div>
                    
                </div>
                ";
        // line 10
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formformation"]) || array_key_exists("formformation", $context) ? $context["formformation"] : (function () { throw new RuntimeError('Variable "formformation" does not exist.', 10, $this->source); })()), "title", [], "any", false, false, false, 10), 'row');
        yield "
                ";
        // line 11
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formformation"]) || array_key_exists("formformation", $context) ? $context["formformation"] : (function () { throw new RuntimeError('Variable "formformation" does not exist.', 11, $this->source); })()), "playlist", [], "any", false, false, false, 11), 'row');
        yield "
                ";
        // line 12
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formformation"]) || array_key_exists("formformation", $context) ? $context["formformation"] : (function () { throw new RuntimeError('Variable "formformation" does not exist.', 12, $this->source); })()), "categories", [], "any", false, false, false, 12), 'row');
        yield "
            </div>
            <div class=\"col\">
                <!-- emplacement image -->
                <div>
                    ";
        // line 17
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formformation"]) || array_key_exists("formformation", $context) ? $context["formformation"] : (function () { throw new RuntimeError('Variable "formformation" does not exist.', 17, $this->source); })()), "videoId", [], "any", false, false, false, 17), 'row');
        yield "
                    Image actuelle
                    ";
        // line 19
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 19, $this->source); })()), "miniature", [], "any", false, false, false, 19)) {
            // line 20
            yield "                            <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formations.showone", ["id" => "formation.id"]);
            yield "\">
                                ";
            // line 21
            if ((0 !== CoreExtension::compare("formation.id", ""))) {
                // line 22
                yield "                                    <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 22, $this->source); })()), "miniature", [], "any", false, false, false, 22), "html", null, true);
                yield "\" alt=\"ecran de formation\">
                                ";
            } else {
                // line 24
                yield "                                    <p>(aucune image)</p>
                                ";
            }
            // line 26
            yield "                            </a>
                    ";
        } else {
            // line 28
            yield "                        <p>(aucune image)</p>
                    ";
        }
        // line 29
        yield "            
                </ div >
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col\">
            ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formformation"]) || array_key_exists("formformation", $context) ? $context["formformation"] : (function () { throw new RuntimeError('Variable "formformation" does not exist.', 35, $this->source); })()), "description", [], "any", false, false, false, 35), 'row');
        yield "
            </div>
        </div>
    
    ";
        // line 39
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formformation"]) || array_key_exists("formformation", $context) ? $context["formformation"] : (function () { throw new RuntimeError('Variable "formformation" does not exist.', 39, $this->source); })()), 'form_end');
        yield "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "templates/_admin.formation.form.html.twig";
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
        return array (  122 => 39,  115 => 35,  107 => 29,  103 => 28,  99 => 26,  95 => 24,  89 => 22,  87 => 21,  82 => 20,  80 => 19,  75 => 17,  67 => 12,  63 => 11,  59 => 10,  52 => 6,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(formformation) }}
        <div class=\"row\">
            <div class=\"col\">
                <div class=\"row\">
                    <div class=\"col-auto\">
                        {{ form_row(formformation.publishedAt) }}
                    </div>
                    
                </div>
                {{ form_row(formformation.title) }}
                {{ form_row(formformation.playlist) }}
                {{ form_row(formformation.categories) }}
            </div>
            <div class=\"col\">
                <!-- emplacement image -->
                <div>
                    {{ form_row(formformation.videoId) }}
                    Image actuelle
                    {% if formation.miniature %}
                            <a href=\"{{ path('formations.showone', {id:'formation.id'}) }}\">
                                {% if 'formation.id' != \"\" %}
                                    <img src=\"{{ formation.miniature }}\" alt=\"ecran de formation\">
                                {% else %}
                                    <p>(aucune image)</p>
                                {% endif %}
                            </a>
                    {% else %}
                        <p>(aucune image)</p>
                    {% endif %}            
                </ div >
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col\">
            {{ form_row(formformation.description) }}
            </div>
        </div>
    
    {{ form_end(formformation) }}
", "templates/_admin.formation.form.html.twig", "C:\\wamp64\\www\\mediatekFormation\\templates\\templates\\_admin.formation.form.html.twig");
    }
}
