<?php

/* JazzywebAulasMentorAlimentosBundle:Default:mostrarAlimentos.html.twig */
class __TwigTemplate_6df1f11dfcda452bf94366b86b35c72db4ce4ca7e08cb635d2d5f15c34a0f5e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("JazzywebAulasMentorAlimentosBundle::layout.html.twig", "JazzywebAulasMentorAlimentosBundle:Default:mostrarAlimentos.html.twig", 1);
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
 ";
        // line 5
        $this->loadTemplate("JazzywebAulasMentorAlimentosBundle:Default:_tablaAlimentos.html.twig", "JazzywebAulasMentorAlimentosBundle:Default:mostrarAlimentos.html.twig", 5)->display(array_merge($context, array("alimentos" =>         // line 6
(isset($context["alimentos"]) ? $context["alimentos"] : $this->getContext($context, "alimentos")))));
        // line 7
        echo "
 ";
    }

    public function getTemplateName()
    {
        return "JazzywebAulasMentorAlimentosBundle:Default:mostrarAlimentos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 7,  35 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'JazzywebAulasMentorAlimentosBundle::layout.html.twig' %}*/
/* */
/*  {% block contenido %}*/
/* */
/*  {% include 'JazzywebAulasMentorAlimentosBundle:Default:_tablaAlimentos.html.twig'*/
/*     with {'alimentos': alimentos} %}*/
/* */
/*  {% endblock %}*/
