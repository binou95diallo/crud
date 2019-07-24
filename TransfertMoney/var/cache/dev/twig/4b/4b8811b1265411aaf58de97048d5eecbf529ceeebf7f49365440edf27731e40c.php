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

/* admin_systeme/show.html.twig */
class __TwigTemplate_dc06b61ba4e854ad108866cc72f58655ff91c28f098abc8711c1d3cfb92aecb0 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_systeme/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin_systeme/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "AdminSysteme";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>AdminSysteme</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["admin_systeme"]) || array_key_exists("admin_systeme", $context) ? $context["admin_systeme"] : (function () { throw new RuntimeError('Variable "admin_systeme" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Matricule</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["admin_systeme"]) || array_key_exists("admin_systeme", $context) ? $context["admin_systeme"] : (function () { throw new RuntimeError('Variable "admin_systeme" does not exist.', 16, $this->source); })()), "matricule", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>NomComplet</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["admin_systeme"]) || array_key_exists("admin_systeme", $context) ? $context["admin_systeme"] : (function () { throw new RuntimeError('Variable "admin_systeme" does not exist.', 20, $this->source); })()), "nomComplet", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Login</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["admin_systeme"]) || array_key_exists("admin_systeme", $context) ? $context["admin_systeme"] : (function () { throw new RuntimeError('Variable "admin_systeme" does not exist.', 24, $this->source); })()), "login", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>PassWord</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["admin_systeme"]) || array_key_exists("admin_systeme", $context) ? $context["admin_systeme"] : (function () { throw new RuntimeError('Variable "admin_systeme" does not exist.', 28, $this->source); })()), "passWord", [], "any", false, false, false, 28), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Adresse</th>
                <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["admin_systeme"]) || array_key_exists("admin_systeme", $context) ? $context["admin_systeme"] : (function () { throw new RuntimeError('Variable "admin_systeme" does not exist.', 32, $this->source); })()), "adresse", [], "any", false, false, false, 32), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Telephone</th>
                <td>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["admin_systeme"]) || array_key_exists("admin_systeme", $context) ? $context["admin_systeme"] : (function () { throw new RuntimeError('Variable "admin_systeme" does not exist.', 36, $this->source); })()), "telephone", [], "any", false, false, false, 36), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["admin_systeme"]) || array_key_exists("admin_systeme", $context) ? $context["admin_systeme"] : (function () { throw new RuntimeError('Variable "admin_systeme" does not exist.', 40, $this->source); })()), "email", [], "any", false, false, false, 40), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_systeme_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_systeme_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["admin_systeme"]) || array_key_exists("admin_systeme", $context) ? $context["admin_systeme"] : (function () { throw new RuntimeError('Variable "admin_systeme" does not exist.', 47, $this->source); })()), "id", [], "any", false, false, false, 47)]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 49
        echo twig_include($this->env, $context, "admin_systeme/_delete_form.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin_systeme/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 49,  143 => 47,  138 => 45,  130 => 40,  123 => 36,  116 => 32,  109 => 28,  102 => 24,  95 => 20,  88 => 16,  81 => 12,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}AdminSysteme{% endblock %}

{% block body %}
    <h1>AdminSysteme</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ admin_systeme.id }}</td>
            </tr>
            <tr>
                <th>Matricule</th>
                <td>{{ admin_systeme.matricule }}</td>
            </tr>
            <tr>
                <th>NomComplet</th>
                <td>{{ admin_systeme.nomComplet }}</td>
            </tr>
            <tr>
                <th>Login</th>
                <td>{{ admin_systeme.login }}</td>
            </tr>
            <tr>
                <th>PassWord</th>
                <td>{{ admin_systeme.passWord }}</td>
            </tr>
            <tr>
                <th>Adresse</th>
                <td>{{ admin_systeme.adresse }}</td>
            </tr>
            <tr>
                <th>Telephone</th>
                <td>{{ admin_systeme.telephone }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ admin_systeme.email }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('admin_systeme_index') }}\">back to list</a>

    <a href=\"{{ path('admin_systeme_edit', {'id': admin_systeme.id}) }}\">edit</a>

    {{ include('admin_systeme/_delete_form.html.twig') }}
{% endblock %}
", "admin_systeme/show.html.twig", "/projetSymfony/TransfertMoney/templates/admin_systeme/show.html.twig");
    }
}
