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

/* security/login.html.twig */
class __TwigTemplate_affeca9fdea1d1f925598a01166afa0caff7b64ab3a844a1fe2d3cad852a6d6b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Log in!
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "<link href=\"https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap\" rel=\"stylesheet\">

<link rel=\"stylesheet\" href=\"fonts/icomoon/style.css\">

<link
rel=\"stylesheet\" href=\"css/owl.carousel.min.css\">

<!-- Bootstrap CSS -->
<link
rel=\"stylesheet\" href=\"css/bootstrap.min.css\">

<!-- Style -->
<link rel=\"stylesheet\" href=\"css/style.css\">

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 21
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 22
        echo "\t<div class=\"d-lg-flex half\">
\t\t<div class=\"bg order-1 order-md-2\" style=\"background-image: url('images/bg_1.jpg');\"></div>
\t\t<div class=\"contents order-2 order-md-1\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row align-items-center justify-content-center\">
\t\t\t\t\t<div class=\"col-md-7\">
\t\t\t\t\t\t<form class=\"form-register\" method=\"post\">
\t\t\t\t\t\t\t";
        // line 29
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 29, $this->source); })())) {
            // line 30
            echo "\t\t\t\t\t\t\t\t<div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 30, $this->source); })()), "messageKey", [], "any", false, false, false, 30), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 30, $this->source); })()), "messageData", [], "any", false, false, false, 30), "security"), "html", null, true);
            echo "</div>
\t\t\t\t\t\t\t";
        }
        // line 32
        echo "\t\t\t\t\t\t\t";
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "user", [], "any", false, false, false, 32)) {
            // line 33
            echo "\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\tYou are logged in as
\t\t\t\t\t\t\t\t\t";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "user", [], "any", false, false, false, 35), "username", [], "any", false, false, false, 35), "html", null, true);
            echo ",
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 36
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        // line 39
        echo "\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<h1 class=\"h3 mb-4 font-weight-normal\"><strong>Sing In<strong></h1>
\t\t\t\t\t\t\t\t<div class=\"form-group first\">
\t\t\t\t\t\t\t\t\t<label for=\"exampleInputEmail\">Email</label>
\t\t\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" aria-describedby=\" emailHelp\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 43, $this->source); })()), "html", null, true);
        echo "\" name=\"email\" id=\"inputEmail\" placeholder=\"Email\" required autofocus>
\t\t\t\t\t\t\t\t\t<small id=\"emailHelp\" class=\"form-text text-muted\">We'll never share your email with anyone else.</small>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group last mb-3\">
\t\t\t\t\t\t\t\t<label for=\"inputPassword\">Password</label>
\t\t\t\t\t\t\t\t<input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" required placeholder=\"Password\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        // line 61
        echo "\t\t\t\t\t\t\t<button class=\"btn btn-lg btn-primary\" type=\"submit\">
\t\t\t\t\t\t\t\tSign in
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

";
        // line 72
        $this->displayBlock('javascripts', $context, $blocks);
        // line 78
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 72
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 73
        echo "\t<script src=\"js/jquery-3.3.1.min.js\"></script>
\t<script src=\"js/popper.min.js\"></script>
\t<script src=\"js/bootstrap.min.js\"></script>
\t<script src=\"js/main.js\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 73,  207 => 72,  195 => 78,  193 => 72,  180 => 61,  175 => 50,  165 => 43,  159 => 39,  153 => 36,  149 => 35,  145 => 33,  142 => 32,  136 => 30,  134 => 29,  125 => 22,  115 => 21,  91 => 6,  81 => 5,  61 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Log in!
{% endblock %}

{% block stylesheets %}
<link href=\"https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap\" rel=\"stylesheet\">

<link rel=\"stylesheet\" href=\"fonts/icomoon/style.css\">

<link
rel=\"stylesheet\" href=\"css/owl.carousel.min.css\">

<!-- Bootstrap CSS -->
<link
rel=\"stylesheet\" href=\"css/bootstrap.min.css\">

<!-- Style -->
<link rel=\"stylesheet\" href=\"css/style.css\">

{% endblock %}
{% block body %}
\t<div class=\"d-lg-flex half\">
\t\t<div class=\"bg order-1 order-md-2\" style=\"background-image: url('images/bg_1.jpg');\"></div>
\t\t<div class=\"contents order-2 order-md-1\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row align-items-center justify-content-center\">
\t\t\t\t\t<div class=\"col-md-7\">
\t\t\t\t\t\t<form class=\"form-register\" method=\"post\">
\t\t\t\t\t\t\t{% if error %}
\t\t\t\t\t\t\t\t<div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t{% if app.user %}
\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\tYou are logged in as
\t\t\t\t\t\t\t\t\t{{ app.user.username }},
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_logout') }}\">Logout</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<h1 class=\"h3 mb-4 font-weight-normal\"><strong>Sing In<strong></h1>
\t\t\t\t\t\t\t\t<div class=\"form-group first\">
\t\t\t\t\t\t\t\t\t<label for=\"exampleInputEmail\">Email</label>
\t\t\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" aria-describedby=\" emailHelp\" value=\"{{ last_username }}\" name=\"email\" id=\"inputEmail\" placeholder=\"Email\" required autofocus>
\t\t\t\t\t\t\t\t\t<small id=\"emailHelp\" class=\"form-text text-muted\">We'll never share your email with anyone else.</small>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group last mb-3\">
\t\t\t\t\t\t\t\t<label for=\"inputPassword\">Password</label>
\t\t\t\t\t\t\t\t<input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" required placeholder=\"Password\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{#
\t\t\t\t\t\t\t                  Uncomment this section and add a remember_me option below your firewall to activate remember me functionality.
\t\t\t\t\t\t\t                  See https://symfony.com/doc/current/security/remember_me.html
\t\t\t\t\t\t\t                  <div class=\"checkbox mb-3\">
\t\t\t\t\t\t\t                     <label>
\t\t\t\t\t\t\t                     <input type=\"checkbox\" name=\"_remember_me\"> Remember me
\t\t\t\t\t\t\t                     </label>
\t\t\t\t\t\t\t                  </div>
\t\t\t\t\t\t\t                  #}
\t\t\t\t\t\t\t<button class=\"btn btn-lg btn-primary\" type=\"submit\">
\t\t\t\t\t\t\t\tSign in
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

{% block javascripts %}
\t<script src=\"js/jquery-3.3.1.min.js\"></script>
\t<script src=\"js/popper.min.js\"></script>
\t<script src=\"js/bootstrap.min.js\"></script>
\t<script src=\"js/main.js\"></script>
{% endblock %}


{% endblock %}
", "security/login.html.twig", "/home/mrtrue/Área de Trabalho/Workflow/blog/templates/security/login.html.twig");
    }
}
