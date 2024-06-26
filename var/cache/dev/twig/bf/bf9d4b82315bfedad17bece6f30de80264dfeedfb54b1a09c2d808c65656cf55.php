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

/* templates/pages/cgu.html.twig */
class __TwigTemplate_08d3578cba3bb3a69906e914636e5ff6604904ab6163479ea8e92e4239e7bdd9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "templates/pages/cgu.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "templates/pages/cgu.html.twig"));

        $this->parent = $this->loadTemplate("basefront.html.twig", "templates/pages/cgu.html.twig", 1);
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
        yield "<section class=\"container mt-2\">
    <h3>Mentions légales du site</h3>
    <p>Conformément aux dispositions des Articles 6-III et 19 de la Loi n°2004-575 du 21 juin 2004 pour la Confiance dans l'économie numérique, dite L.C.E.N., il est porté à la connaissance des utilisateurs et visiteurs du site <u><a href=\"http://www.mediatekformation.fr\">mediatekformation.fr</a></u> les présentes mentions légales.</p>
    <p>Le site mediatekformation est accessible à l'adresse suivante&nbsp;:&nbsp;<u><a href=\"http://www.mediatekformation.fr\">mediatekformation.fr</a></u> (ci-après \"<em>le site</em>\"). L'accès et l'utilisation du Site sont soumis aux présentes \"Mentions légales\" détaillées ci-après ainsi qu'aux lois et/ou règlements applicables. La connexion, l'utilisation et l'accès à ce site impliquent l'acceptation intégrale et sans réserve de l'internaute de toutes les dispositions des présentes Mentions Légales.</p>
    <h4>Article 1 - Informations légales</h4>
    <p>En vertu de l'Article 6 de la Loi n° 2004-575 du 21 juin 2004 pour la confiance dans l'économie numérique, il est précisé dans cet article l'identité des différents intervenants dans le cadre de sa réalisation et de son suivi.</p>
    <div class=\"bd-example\">
        <details>
            <summary>A. Éditeur du site (ci-après \"<em>l'Éditeur</em>\")</summary>
            <address>
                <strong>Jacques Lefevre</strong>
                <br>rue du Colonel Driant 
                <br>75001 Paris
                <br>Téléphone&nbsp;:&nbsp;0102030405
                <br>Courriel&nbsp;:&nbsp;contact@mediatekformation.fr
                <br>RCS&nbsp;:&nbsp;123456789
            </address>
        </details>
        <details>
            <summary>B. Hébergeur du site (ci-après \"<em>l'Hébergeur</em>\")</summary>
            <address>
                <strong>PlanetHoster</strong>
                <br>4416 Louis-B.-Mayer
                <br>Laval, Québec
                <br>H7P 0G1 Canada
                <br>Téléphone&nbsp;:&nbsp;0102030405
                <br>Courriel&nbsp;:&nbsp;contact@planethoster.com
            </address>
        </details>
        <details>
            <summary>C. Utilisateurs (ci-après \"<em>les Utilisateurs</em>\")</summary>
            <p>Sont considérés comme utilisateurs tous les internautes qui naviguent, lisent, visionnent et utilisent le site mediatekformation.</p>
        </details>
    </div>
    <h4 class=\"mt-3\">Article 2 - Confidentialité</h4>
    <div class=\"bd-example\">
        Le site ne collecte pas de données.
    </div>
    <h4 class=\"mt-3\">Article 3 - accessibilité</h4>
    <p>Le Site est par principe accessible aux Utilisateurs 24/24h et 7/7j, sauf interruption, programmée ou non, pour des besoins de maintenance ou en cas de force majeure.</p>
    <p>En cas d'impossibilité d'accès au Site, celui-ci s'engage à faire son maximum afin d'en rétablir l'accès. Le Site ne saurait être tenu pour responsable de tout dommage, quelle qu'en soit la nature, résultant de son indisponibilité.</p>
    <h4 class=\"mt-3\">Article 4 - loi applicable et juridiction</h4>
    <p>Les présentes Mentions Légales sont régies par la loi française. En cas de différend et à défaut d'accord amiable, le litige sera porté devant les tribunaux français conformément aux règles de compétence en vigueur.</p>
    <h4 class=\"mt-3\">Article 5 - contact</h4>
    <p>Pour tout signalement de contenus ou d'activités illicites, l'Utilisateur peut contacter l'Éditeur à l'adresse suivante&nbsp;:&nbsp;contact@mediatekformation.fr, ou par courrier recommandé avec accusé de réception adressé à l'Éditeur aux coordonnées précisées dans les présentes mentions légales.</p>
    <p>Le site mediatekformation vous souhaite une excellente navigation !</p>
</section>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        return; yield '';
    }

    // line 53
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "templates/pages/cgu.html.twig";
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
        return array (  129 => 53,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"basefront.html.twig\" %}

{% block body %}
<section class=\"container mt-2\">
    <h3>Mentions légales du site</h3>
    <p>Conformément aux dispositions des Articles 6-III et 19 de la Loi n°2004-575 du 21 juin 2004 pour la Confiance dans l'économie numérique, dite L.C.E.N., il est porté à la connaissance des utilisateurs et visiteurs du site <u><a href=\"http://www.mediatekformation.fr\">mediatekformation.fr</a></u> les présentes mentions légales.</p>
    <p>Le site mediatekformation est accessible à l'adresse suivante&nbsp;:&nbsp;<u><a href=\"http://www.mediatekformation.fr\">mediatekformation.fr</a></u> (ci-après \"<em>le site</em>\"). L'accès et l'utilisation du Site sont soumis aux présentes \"Mentions légales\" détaillées ci-après ainsi qu'aux lois et/ou règlements applicables. La connexion, l'utilisation et l'accès à ce site impliquent l'acceptation intégrale et sans réserve de l'internaute de toutes les dispositions des présentes Mentions Légales.</p>
    <h4>Article 1 - Informations légales</h4>
    <p>En vertu de l'Article 6 de la Loi n° 2004-575 du 21 juin 2004 pour la confiance dans l'économie numérique, il est précisé dans cet article l'identité des différents intervenants dans le cadre de sa réalisation et de son suivi.</p>
    <div class=\"bd-example\">
        <details>
            <summary>A. Éditeur du site (ci-après \"<em>l'Éditeur</em>\")</summary>
            <address>
                <strong>Jacques Lefevre</strong>
                <br>rue du Colonel Driant 
                <br>75001 Paris
                <br>Téléphone&nbsp;:&nbsp;0102030405
                <br>Courriel&nbsp;:&nbsp;contact@mediatekformation.fr
                <br>RCS&nbsp;:&nbsp;123456789
            </address>
        </details>
        <details>
            <summary>B. Hébergeur du site (ci-après \"<em>l'Hébergeur</em>\")</summary>
            <address>
                <strong>PlanetHoster</strong>
                <br>4416 Louis-B.-Mayer
                <br>Laval, Québec
                <br>H7P 0G1 Canada
                <br>Téléphone&nbsp;:&nbsp;0102030405
                <br>Courriel&nbsp;:&nbsp;contact@planethoster.com
            </address>
        </details>
        <details>
            <summary>C. Utilisateurs (ci-après \"<em>les Utilisateurs</em>\")</summary>
            <p>Sont considérés comme utilisateurs tous les internautes qui naviguent, lisent, visionnent et utilisent le site mediatekformation.</p>
        </details>
    </div>
    <h4 class=\"mt-3\">Article 2 - Confidentialité</h4>
    <div class=\"bd-example\">
        Le site ne collecte pas de données.
    </div>
    <h4 class=\"mt-3\">Article 3 - accessibilité</h4>
    <p>Le Site est par principe accessible aux Utilisateurs 24/24h et 7/7j, sauf interruption, programmée ou non, pour des besoins de maintenance ou en cas de force majeure.</p>
    <p>En cas d'impossibilité d'accès au Site, celui-ci s'engage à faire son maximum afin d'en rétablir l'accès. Le Site ne saurait être tenu pour responsable de tout dommage, quelle qu'en soit la nature, résultant de son indisponibilité.</p>
    <h4 class=\"mt-3\">Article 4 - loi applicable et juridiction</h4>
    <p>Les présentes Mentions Légales sont régies par la loi française. En cas de différend et à défaut d'accord amiable, le litige sera porté devant les tribunaux français conformément aux règles de compétence en vigueur.</p>
    <h4 class=\"mt-3\">Article 5 - contact</h4>
    <p>Pour tout signalement de contenus ou d'activités illicites, l'Utilisateur peut contacter l'Éditeur à l'adresse suivante&nbsp;:&nbsp;contact@mediatekformation.fr, ou par courrier recommandé avec accusé de réception adressé à l'Éditeur aux coordonnées précisées dans les présentes mentions légales.</p>
    <p>Le site mediatekformation vous souhaite une excellente navigation !</p>
</section>

{% endblock %}
{% block footer %}{% endblock %}


", "templates/pages/cgu.html.twig", "C:\\wamp64\\www\\mediatekFormation\\templates\\templates\\pages\\cgu.html.twig");
    }
}
