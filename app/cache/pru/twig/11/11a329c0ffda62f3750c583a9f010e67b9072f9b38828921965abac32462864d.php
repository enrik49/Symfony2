<?php

/* JazzywebAulasMentorAlimentosBundle:Default:index.html.twig */
class __TwigTemplate_8178e46851253a879891d0d2194f7b8640dc6c108eadf6f50f2a8c19aacabcd7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("JazzywebAulasMentorAlimentosBundle::layout.html.twig", "JazzywebAulasMentorAlimentosBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'contenido' => array($this, 'block_contenido'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "JazzywebAulasMentorAlimentosBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        // line 4
        echo "
<h1>Inicio</h1>
<h3> Fecha: ";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["fecha"]) ? $context["fecha"] : $this->getContext($context, "fecha")), "html", null, true);
        echo "  </h3>
";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["mensaje"]) ? $context["mensaje"] : $this->getContext($context, "mensaje")), "html", null, true);
        echo "

";
    }

    public function getTemplateName()
    {
        return "JazzywebAulasMentorAlimentosBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 7,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'JazzywebAulasMentorAlimentosBundle::layout.html.twig' %}*/
/* */
/* {% block contenido %}*/
/* */
/* <h1>Inicio</h1>*/
/* <h3> Fecha: {{fecha}}  </h3>*/
/* {{mensaje}}*/
/* */
/* {% endblock %}*/
