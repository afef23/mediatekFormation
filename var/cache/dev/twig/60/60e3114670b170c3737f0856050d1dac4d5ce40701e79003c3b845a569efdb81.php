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

/* templates/_admin.playlist.form.html.twig */
class __TwigTemplate_9e223ca6dbd46f3e1e575938f90cc566a9dc8908e5beb6c848cd431d76f7751b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "templates/_admin.playlist.form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "templates/_admin.playlist.form.html.twig"));

        // line 1
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formplaylist"]) || array_key_exists("formplaylist", $context) ? $context["formplaylist"] : (function () { throw new RuntimeError('Variable "formplaylist" does not exist.', 1, $this->source); })()), 'form_start');
        yield "
        <div class=\"row\">
            <div class=\"col\">
                
                ";
        // line 5
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formplaylist"]) || array_key_exists("formplaylist", $context) ? $context["formplaylist"] : (function () { throw new RuntimeError('Variable "formplaylist" does not exist.', 5, $this->source); })()), "name", [], "any", false, false, false, 5), 'row');
        yield "
            </div>
           
        </div>
        <div class=\"row\">
            <div class=\"col\">
            ";
        // line 11
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formplaylist"]) || array_key_exists("formplaylist", $context) ? $context["formplaylist"] : (function () { throw new RuntimeError('Variable "formplaylist" does not exist.', 11, $this->source); })()), "description", [], "any", false, false, false, 11), 'row');
        yield "
            </div>
        </div>
    
       
        <div class=\"row\">
            <div class=\"col\">
                <a href=\"";
        // line 18
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.playlists.showone", ["id" => "playlist.id"]);
        yield "\" class=\"disabled link-secondary text-decoration-none\"></a>
                    ";
        // line 19
        if ((array_key_exists("playlistformations", $context) && (isset($context["playlistformations"]) || array_key_exists("playlistformations", $context) ? $context["playlistformations"] : (function () { throw new RuntimeError('Variable "playlistformations" does not exist.', 19, $this->source); })()))) {
            // line 20
            yield "                     ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["playlistformations"]) || array_key_exists("playlistformations", $context) ? $context["playlistformations"] : (function () { throw new RuntimeError('Variable "playlistformations" does not exist.', 20, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["formation"]) {
                yield "          
                
                    <div class=\"row mt-1\">
                        <div class=\"col d-flex align-items-center\">
                            ";
                // line 24
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formplaylist"]) || array_key_exists("formplaylist", $context) ? $context["formplaylist"] : (function () { throw new RuntimeError('Variable "formplaylist" does not exist.', 24, $this->source); })()), "formations", [], "any", false, false, false, 24), 'row');
                yield "
                        </div>
                    </div>
                    
                     ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            yield "    
                    ";
        }
        // line 30
        yield "            </div>
        </div>
    ";
        // line 32
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formplaylist"]) || array_key_exists("formplaylist", $context) ? $context["formplaylist"] : (function () { throw new RuntimeError('Variable "formplaylist" does not exist.', 32, $this->source); })()), 'form_end');
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
        return "templates/_admin.playlist.form.html.twig";
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
        return array (  105 => 32,  101 => 30,  97 => 28,  86 => 24,  76 => 20,  74 => 19,  70 => 18,  60 => 11,  51 => 5,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(formplaylist) }}
        <div class=\"row\">
            <div class=\"col\">
                
                {{ form_row(formplaylist.name) }}
            </div>
           
        </div>
        <div class=\"row\">
            <div class=\"col\">
            {{ form_row(formplaylist.description) }}
            </div>
        </div>
    
       
        <div class=\"row\">
            <div class=\"col\">
                <a href=\"{{ path('admin.playlists.showone', {id:'playlist.id'}) }}\" class=\"disabled link-secondary text-decoration-none\"></a>
                    {% if playlistformations is defined and playlistformations %}
                     {% for formation in playlistformations %}          
                
                    <div class=\"row mt-1\">
                        <div class=\"col d-flex align-items-center\">
                            {{ form_row(formplaylist.formations) }}
                        </div>
                    </div>
                    
                     {% endfor %}    
                    {% endif %}
            </div>
        </div>
    {{ form_end(formplaylist) }}
", "templates/_admin.playlist.form.html.twig", "C:\\wamp64\\www\\mediatekFormation\\templates\\templates\\_admin.playlist.form.html.twig");
    }
}
