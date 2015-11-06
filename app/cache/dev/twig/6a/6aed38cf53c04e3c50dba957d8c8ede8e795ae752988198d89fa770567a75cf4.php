<?php

/* JazzywebAulasMentorAlimentosBundle:Default:_tablaAlimentos.html.twig */
class __TwigTemplate_274b67e14710084b692fd930fe0b1bea7454934dbda86dd1340938f783a9ac8a extends Twig_Template
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
        echo " <table>
      <tr>
          <th>alimento (por 100g)</th>
          <th>energía (Kcal)</th>
          <th>grasa (g)</th>
      </tr>
      ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["alimentos"]) ? $context["alimentos"] : $this->getContext($context, "alimentos")));
        foreach ($context['_seq'] as $context["_key"] => $context["alimento"]) {
            // line 8
            echo "      <tr>
          <td>";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["alimento"], "nombre", array()), "html", null, true);
            echo "</td>
          <td>";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["alimento"], "energia", array()), "html", null, true);
            echo "</td>
          <td>";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["alimento"], "grasatotal", array()), "html", null, true);
            echo "</td>
      </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['alimento'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "
  </table>";
    }

    public function getTemplateName()
    {
        return "JazzywebAulasMentorAlimentosBundle:Default:_tablaAlimentos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 14,  42 => 11,  38 => 10,  34 => 9,  31 => 8,  27 => 7,  19 => 1,);
    }
}
/*  <table>*/
/*       <tr>*/
/*           <th>alimento (por 100g)</th>*/
/*           <th>energía (Kcal)</th>*/
/*           <th>grasa (g)</th>*/
/*       </tr>*/
/*       {% for alimento in alimentos %}*/
/*       <tr>*/
/*           <td>{{ alimento.nombre }}</td>*/
/*           <td>{{ alimento.energia }}</td>*/
/*           <td>{{ alimento.grasatotal }}</td>*/
/*       </tr>*/
/*       {% endfor %}*/
/* */
/*   </table>*/
