<?php

/* JazzywebAulasMentorAlimentosBundle:Default:verAlimento.html.twig */
class __TwigTemplate_bfc4ba4ece3e020570634aa304092a90c741bd35cd21e7e75e47fb9cd63a790c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("JazzywebAulasMentorAlimentosBundle::layout.html.twig", "JazzywebAulasMentorAlimentosBundle:Default:verAlimento.html.twig", 1);
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
  <h1>";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["nombre"]) ? $context["nombre"] : $this->getContext($context, "nombre")), "html", null, true);
        echo "</h1>
  <table border=\"1\">

      <tr>
          <td>Energía</td>
          <td>";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["energia"]) ? $context["energia"] : $this->getContext($context, "energia")), "html", null, true);
        echo " </td>
      </tr>
      <tr>
          <td>Proteina</td>
          <td>";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["proteina"]) ? $context["proteina"] : $this->getContext($context, "proteina")), "html", null, true);
        echo "</td>
      </tr>
      <tr>
          <td>Hidratos de Carbono</td>
          <td>";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["hidratocarbono"]) ? $context["hidratocarbono"] : $this->getContext($context, "hidratocarbono")), "html", null, true);
        echo "</td>
      </tr>
      <tr>
          <td>Fibra</td>
          <td>";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["fibra"]) ? $context["fibra"] : $this->getContext($context, "fibra")), "html", null, true);
        echo "</td>
      </tr>
      <tr>
          <td>Grasa total</td>
          <td> ";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["grasatotal"]) ? $context["grasatotal"] : $this->getContext($context, "grasatotal")), "html", null, true);
        echo " </td>
      </tr>
  </table>

 ";
    }

    public function getTemplateName()
    {
        return "JazzywebAulasMentorAlimentosBundle:Default:verAlimento.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 26,  63 => 22,  56 => 18,  49 => 14,  42 => 10,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/*  {% extends 'JazzywebAulasMentorAlimentosBundle::layout.html.twig' %}*/
/* */
/*   {% block contenido %}*/
/* */
/*   <h1>{{ nombre }}</h1>*/
/*   <table border="1">*/
/* */
/*       <tr>*/
/*           <td>Energía</td>*/
/*           <td>{{ energia }} </td>*/
/*       </tr>*/
/*       <tr>*/
/*           <td>Proteina</td>*/
/*           <td>{{ proteina }}</td>*/
/*       </tr>*/
/*       <tr>*/
/*           <td>Hidratos de Carbono</td>*/
/*           <td>{{ hidratocarbono }}</td>*/
/*       </tr>*/
/*       <tr>*/
/*           <td>Fibra</td>*/
/*           <td>{{ fibra }}</td>*/
/*       </tr>*/
/*       <tr>*/
/*           <td>Grasa total</td>*/
/*           <td> {{grasatotal}} </td>*/
/*       </tr>*/
/*   </table>*/
/* */
/*  {% endblock %}*/
