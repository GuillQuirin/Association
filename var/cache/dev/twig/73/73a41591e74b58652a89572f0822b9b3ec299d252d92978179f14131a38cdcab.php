<?php

/* base.html.twig */
class __TwigTemplate_83b5e9b24179292353fe88ba51f5993b124411c8d1e7b755b4a700156f836eec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e0415697f596e72feae768196c369b2154723c1cb8fba9e04ce6b71d38c46b19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0415697f596e72feae768196c369b2154723c1cb8fba9e04ce6b71d38c46b19->enter($__internal_e0415697f596e72feae768196c369b2154723c1cb8fba9e04ce6b71d38c46b19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_aefc8e9fe2e1335cfab41f2b8f04834c510a99751506d0013b6718b8c041bc9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aefc8e9fe2e1335cfab41f2b8f04834c510a99751506d0013b6718b8c041bc9d->enter($__internal_aefc8e9fe2e1335cfab41f2b8f04834c510a99751506d0013b6718b8c041bc9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css\">
        ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <div id=\"messages\">
            ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 13, $this->getSourceContext()); })()), "flashes", array()));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 14
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 15
                echo "                    <div class=\"flash-";
                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                echo "\">
                        ";
                // line 16
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "        </div>
        <div id=\"wrapper\">
            <div class=\"container-fluid\">
                ";
        // line 23
        $this->displayBlock('body', $context, $blocks);
        // line 24
        echo "            </div>
        </div>
        
  <script src=\"jquery.min.js\"></script>
  <script src=\"tether.min.js\"></script>
  <script src=\"bootstrap.min.js\"></script>
        ";
        // line 30
        $this->displayBlock('javascripts', $context, $blocks);
        // line 31
        echo "    </body>
</html>
";
        
        $__internal_e0415697f596e72feae768196c369b2154723c1cb8fba9e04ce6b71d38c46b19->leave($__internal_e0415697f596e72feae768196c369b2154723c1cb8fba9e04ce6b71d38c46b19_prof);

        
        $__internal_aefc8e9fe2e1335cfab41f2b8f04834c510a99751506d0013b6718b8c041bc9d->leave($__internal_aefc8e9fe2e1335cfab41f2b8f04834c510a99751506d0013b6718b8c041bc9d_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_f770fa19e8ed45742013b20415e50247132f4ec471e9f75614d3c5366e095f23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f770fa19e8ed45742013b20415e50247132f4ec471e9f75614d3c5366e095f23->enter($__internal_f770fa19e8ed45742013b20415e50247132f4ec471e9f75614d3c5366e095f23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3dd5d860c94941936e659723e15ef090c83921bf5d20a4b6690b2ee876e7b6d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3dd5d860c94941936e659723e15ef090c83921bf5d20a4b6690b2ee876e7b6d9->enter($__internal_3dd5d860c94941936e659723e15ef090c83921bf5d20a4b6690b2ee876e7b6d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "OPEN ESGI";
        
        $__internal_3dd5d860c94941936e659723e15ef090c83921bf5d20a4b6690b2ee876e7b6d9->leave($__internal_3dd5d860c94941936e659723e15ef090c83921bf5d20a4b6690b2ee876e7b6d9_prof);

        
        $__internal_f770fa19e8ed45742013b20415e50247132f4ec471e9f75614d3c5366e095f23->leave($__internal_f770fa19e8ed45742013b20415e50247132f4ec471e9f75614d3c5366e095f23_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8a5614e501603d62ee6342f083006e3237c9ba7655ec1913f3065090c041d02c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a5614e501603d62ee6342f083006e3237c9ba7655ec1913f3065090c041d02c->enter($__internal_8a5614e501603d62ee6342f083006e3237c9ba7655ec1913f3065090c041d02c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_f5ab19ff4baec92215aa1fd2767e81f62fb935173fdeebab38010624bb124f93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5ab19ff4baec92215aa1fd2767e81f62fb935173fdeebab38010624bb124f93->enter($__internal_f5ab19ff4baec92215aa1fd2767e81f62fb935173fdeebab38010624bb124f93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_f5ab19ff4baec92215aa1fd2767e81f62fb935173fdeebab38010624bb124f93->leave($__internal_f5ab19ff4baec92215aa1fd2767e81f62fb935173fdeebab38010624bb124f93_prof);

        
        $__internal_8a5614e501603d62ee6342f083006e3237c9ba7655ec1913f3065090c041d02c->leave($__internal_8a5614e501603d62ee6342f083006e3237c9ba7655ec1913f3065090c041d02c_prof);

    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
        $__internal_e87f949bf43a44db6fec97f5730e13ef4a5a5e74fabda383fb134e66640a51b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e87f949bf43a44db6fec97f5730e13ef4a5a5e74fabda383fb134e66640a51b4->enter($__internal_e87f949bf43a44db6fec97f5730e13ef4a5a5e74fabda383fb134e66640a51b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2623ac9dfdd9210ec4be4ad76497eabc13aeb6f9bf6a93118aa055d236fed227 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2623ac9dfdd9210ec4be4ad76497eabc13aeb6f9bf6a93118aa055d236fed227->enter($__internal_2623ac9dfdd9210ec4be4ad76497eabc13aeb6f9bf6a93118aa055d236fed227_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2623ac9dfdd9210ec4be4ad76497eabc13aeb6f9bf6a93118aa055d236fed227->leave($__internal_2623ac9dfdd9210ec4be4ad76497eabc13aeb6f9bf6a93118aa055d236fed227_prof);

        
        $__internal_e87f949bf43a44db6fec97f5730e13ef4a5a5e74fabda383fb134e66640a51b4->leave($__internal_e87f949bf43a44db6fec97f5730e13ef4a5a5e74fabda383fb134e66640a51b4_prof);

    }

    // line 30
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f93ee1310d17a2ff6e0133668a91a2d6a039aa12958bc2c03a705f4653b884f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f93ee1310d17a2ff6e0133668a91a2d6a039aa12958bc2c03a705f4653b884f9->enter($__internal_f93ee1310d17a2ff6e0133668a91a2d6a039aa12958bc2c03a705f4653b884f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_b08645c08741e85fa0f8f9d80bf441cf730c48f403b38fe92f1842df743ff8a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b08645c08741e85fa0f8f9d80bf441cf730c48f403b38fe92f1842df743ff8a0->enter($__internal_b08645c08741e85fa0f8f9d80bf441cf730c48f403b38fe92f1842df743ff8a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b08645c08741e85fa0f8f9d80bf441cf730c48f403b38fe92f1842df743ff8a0->leave($__internal_b08645c08741e85fa0f8f9d80bf441cf730c48f403b38fe92f1842df743ff8a0_prof);

        
        $__internal_f93ee1310d17a2ff6e0133668a91a2d6a039aa12958bc2c03a705f4653b884f9->leave($__internal_f93ee1310d17a2ff6e0133668a91a2d6a039aa12958bc2c03a705f4653b884f9_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 30,  144 => 23,  127 => 8,  109 => 6,  97 => 31,  95 => 30,  87 => 24,  85 => 23,  80 => 20,  74 => 19,  65 => 16,  60 => 15,  55 => 14,  51 => 13,  43 => 9,  41 => 8,  36 => 6,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <title>{% block title %}OPEN ESGI{% endblock %}</title>
        <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css\">
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        <div id=\"messages\">
            {% for label, messages in app.flashes %}
                {% for message in messages %}
                    <div class=\"flash-{{ label }}\">
                        {{ message }}
                    </div>
                {% endfor %}
            {% endfor %}
        </div>
        <div id=\"wrapper\">
            <div class=\"container-fluid\">
                {% block body %}{% endblock %}
            </div>
        </div>
        
  <script src=\"jquery.min.js\"></script>
  <script src=\"tether.min.js\"></script>
  <script src=\"bootstrap.min.js\"></script>
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/Users/guillaumequirin/Sourcetree/open/app/Resources/views/base.html.twig");
    }
}
