<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* employe/findAll.html.twig */
class __TwigTemplate_18ee4b34724028dd5a5363ce6d24405043c0a7b1ea4300bd1526eedec035c658 extends \Twig\Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employe/findAll.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employe/findAll.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "employe/findAll.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
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
        echo "
<table class=\"table table-responsive table-hover\">
        <thead class=\"table-danger\">
          <tr>
            <th scope=\"col\">Matricule</th>
            <th scope=\"col\">Nom Complet</th>
            <th scope=\"col\">Date Naissance</th>
            <th scope=\"col\">Salaire</th>
            <th scope=\"col\">Libelle</th>
            <th scope=\"col\">Modification</th>
            <th scope=\"col\">Suppression</th>
          </tr>
        </thead>
        <tbody>
    ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["employe"]) || array_key_exists("employe", $context) ? $context["employe"] : (function () { throw new RuntimeError('Variable "employe" does not exist.', 18, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["employes"]) {
            // line 19
            echo "        <tr>

            <td>
                    ";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employes"], "matricule", [], "any", false, false, false, 22), "html", null, true);
            echo "
            </td>
            <td>
                    ";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employes"], "nomComplet", [], "any", false, false, false, 25), "html", null, true);
            echo "
            </td>
            <td>
                    ";
            // line 28
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employes"], "dateNaissance", [], "any", false, false, false, 28), "d/m/Y"), "html", null, true);
            echo "
            </td>
            <td>
                        ";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employes"], "salaire", [], "any", false, false, false, 31), "html", null, true);
            echo "
                </td>
            <td>
                    ";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["employes"], "serviceId", [], "any", false, false, false, 34), "libelle", [], "any", false, false, false, 34), "html", null, true);
            echo "
            </td>
            <td><button class=\"btn btn-success\"><a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modifier", ["id" => twig_get_attribute($this->env, $this->source, $context["employes"], "id", [], "any", false, false, false, 36)]), "html", null, true);
            echo "\">Modifier</a></button>
            </td>
            <td><button class=\"btn btn-danger\"><a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete", ["id" => twig_get_attribute($this->env, $this->source, $context["employes"], "id", [], "any", false, false, false, 38)]), "html", null, true);
            echo "\">Supprimer</a></button>
            </td>
        </tr>
        
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['employes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "</tbody>
</table>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "employe/findAll.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 43,  127 => 38,  122 => 36,  117 => 34,  111 => 31,  105 => 28,  99 => 25,  93 => 22,  88 => 19,  84 => 18,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

<table class=\"table table-responsive table-hover\">
        <thead class=\"table-danger\">
          <tr>
            <th scope=\"col\">Matricule</th>
            <th scope=\"col\">Nom Complet</th>
            <th scope=\"col\">Date Naissance</th>
            <th scope=\"col\">Salaire</th>
            <th scope=\"col\">Libelle</th>
            <th scope=\"col\">Modification</th>
            <th scope=\"col\">Suppression</th>
          </tr>
        </thead>
        <tbody>
    {% for employes in employe %}
        <tr>

            <td>
                    {{employes.matricule}}
            </td>
            <td>
                    {{employes.nomComplet}}
            </td>
            <td>
                    {{employes.dateNaissance | date('d/m/Y')}}
            </td>
            <td>
                        {{employes.salaire}}
                </td>
            <td>
                    {{employes.serviceId.libelle}}
            </td>
            <td><button class=\"btn btn-success\"><a href=\"{{path('modifier',{'id':employes.id})}}\">Modifier</a></button>
            </td>
            <td><button class=\"btn btn-danger\"><a href=\"{{path('delete',{'id':employes.id})}}\">Supprimer</a></button>
            </td>
        </tr>
        
    {% endfor %}
</tbody>
</table>


{% endblock %}", "employe/findAll.html.twig", "/projetSymfony/symfEntreprise/templates/employe/findAll.html.twig");
    }
}
