<?php

/* modular/success-story-item.html.twig */
class __TwigTemplate_469b46f7c66f799284e76200a617279616326261281b6c54cad7135bbb53fac8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"section\">
\t<h3>Casos de exito</h3>
\t<div class=\"success-stories\">
\t\t<img src=\"";
        // line 4
        echo $this->getAttribute(twig_first($this->env, $this->getAttribute(($context["header"] ?? null), "image", array())), "path", array());
        echo "\" alt=\"";
        echo $this->getAttribute(($context["header"] ?? null), "title", array());
        echo "\">
\t\t<h2>";
        // line 5
        echo $this->getAttribute(($context["header"] ?? null), "title", array());
        echo "</h2>
\t\t<p>";
        // line 6
        echo $this->getAttribute(($context["header"] ?? null), "description", array());
        echo "</p>
\t\t<a href=\"";
        // line 7
        echo ($context["base_url"] ?? null);
        echo "/casos-de-exito\">Ver todos</a>
\t</div>
\t
\t<h3>Siguenos en Facebook</h3>
\t<div class=\"facebook-block\">
\t\t<div class=\"fb-page\" data-href=\"https://www.facebook.com/Programa-Bandera-Azul-EcologicaCosta-Rica-169072269797200/\" data-tabs=\"timeline\" data-width=\"300px\" data-small-header=\"true\" data-adapt-container-width=\"true\" data-hide-cover=\"true\" data-show-facepile=\"true\"><blockquote cite=\"https://www.facebook.com/Programa-Bandera-Azul-EcologicaCosta-Rica-169072269797200/\" class=\"fb-xfbml-parse-ignore\"><a href=\"https://www.facebook.com/Programa-Bandera-Azul-EcologicaCosta-Rica-169072269797200/\">Programa Bandera Azul Ecologica(Costa Rica)</a></blockquote></div>
\t\t<div id=\"fb-root\"></div>
\t\t\t<script>
\t\t\t\t(function(d, s, id) {
\t\t\t\t  var js, fjs = d.getElementsByTagName(s)[0];
\t\t\t\t  if (d.getElementById(id)) return;
\t\t\t\t  js = d.createElement(s); js.id = id;
\t\t\t\t  js.src = 'https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.10&appId=195932157209239';
\t\t\t\t  fjs.parentNode.insertBefore(js, fjs);
\t\t\t\t}(document, 'script', 'facebook-jssdk'));
\t\t\t</script>

\t\t</div>

</div>\t";
    }

    public function getTemplateName()
    {
        return "modular/success-story-item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 7,  34 => 6,  30 => 5,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"section\">
\t<h3>Casos de exito</h3>
\t<div class=\"success-stories\">
\t\t<img src=\"{{(header.image|first).path}}\" alt=\"{{header.title}}\">
\t\t<h2>{{header.title}}</h2>
\t\t<p>{{header.description}}</p>
\t\t<a href=\"{{base_url}}/casos-de-exito\">Ver todos</a>
\t</div>
\t
\t<h3>Siguenos en Facebook</h3>
\t<div class=\"facebook-block\">
\t\t<div class=\"fb-page\" data-href=\"https://www.facebook.com/Programa-Bandera-Azul-EcologicaCosta-Rica-169072269797200/\" data-tabs=\"timeline\" data-width=\"300px\" data-small-header=\"true\" data-adapt-container-width=\"true\" data-hide-cover=\"true\" data-show-facepile=\"true\"><blockquote cite=\"https://www.facebook.com/Programa-Bandera-Azul-EcologicaCosta-Rica-169072269797200/\" class=\"fb-xfbml-parse-ignore\"><a href=\"https://www.facebook.com/Programa-Bandera-Azul-EcologicaCosta-Rica-169072269797200/\">Programa Bandera Azul Ecologica(Costa Rica)</a></blockquote></div>
\t\t<div id=\"fb-root\"></div>
\t\t\t<script>
\t\t\t\t(function(d, s, id) {
\t\t\t\t  var js, fjs = d.getElementsByTagName(s)[0];
\t\t\t\t  if (d.getElementById(id)) return;
\t\t\t\t  js = d.createElement(s); js.id = id;
\t\t\t\t  js.src = 'https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.10&appId=195932157209239';
\t\t\t\t  fjs.parentNode.insertBefore(js, fjs);
\t\t\t\t}(document, 'script', 'facebook-jssdk'));
\t\t\t</script>

\t\t</div>

</div>\t", "modular/success-story-item.html.twig", "/Applications/MAMP/htdocs/BAE/grav/user/themes/azul/templates/modular/success-story-item.html.twig");
    }
}
