<?php

/* JazzywebAulasMentorAlimentosBundle:Default:busquedaCombinada.html.twig */
class __TwigTemplate_0c58210271cb9b0f27f1f6455e1d9a570eaedbb1cec0a9f106aba3e5df2ab4e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("JazzywebAulasMentorAlimentosBundle::layout.html.twig", "JazzywebAulasMentorAlimentosBundle:Default:busquedaCombinada.html.twig", 1);
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
 <form name=\"formBusqueda\" action=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("JAMAB_busquedaCombinada");
        echo "\" method=\"POST\">

      <table>
          <tr>
              <td>nombre alimento o energia alimento:</td>
              <td>
               <input type=\"text\" name=\"nombre\"
                      value=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["nombre"]) ? $context["nombre"] : $this->getContext($context, "nombre")), "html", null, true);
        echo "\">(puedes utilizar '%' como comodín)
              </td>

              <td><input type=\"submit\" value=\"buscar\"></td>
          </tr>
      </table>

      </table>

  </form>

  ";
        // line 23
        if ((isset($context["resultado"]) ? $context["resultado"] : $this->getContext($context, "resultado"))) {
            // line 24
            echo "  ";
            $this->loadTemplate("JazzywebAulasMentorAlimentosBundle:Default:_tablaAlimentos.html.twig", "JazzywebAulasMentorAlimentosBundle:Default:busquedaCombinada.html.twig", 24)->display(array_merge($context, array("alimentos" =>             // line 25
(isset($context["resultado"]) ? $context["resultado"] : $this->getContext($context, "resultado")))));
            // line 26
            echo "  ";
        }
        // line 27
        echo "
 ";
    }

    public function getTemplateName()
    {
        return "JazzywebAulasMentorAlimentosBundle:Default:busquedaCombinada.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 27,  64 => 26,  62 => 25,  60 => 24,  58 => 23,  44 => 12,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/*  {% extends 'JazzywebAulasMentorAlimentosBundle::layout.html.twig' %}*/
/* */
/*   {% block contenido %}*/
/* */
/*  <form name="formBusqueda" action="{{ path('JAMAB_busquedaCombinada') }}" method="POST">*/
/* */
/*       <table>*/
/*           <tr>*/
/*               <td>nombre alimento o energia alimento:</td>*/
/*               <td>*/
/*                <input type="text" name="nombre"*/
/*                       value="{{ nombre }}">(puedes utilizar '%' como comodín)*/
/*               </td>*/
/* */
/*               <td><input type="submit" value="buscar"></td>*/
/*           </tr>*/
/*       </table>*/
/* */
/*       </table>*/
/* */
/*   </form>*/
/* */
/*   {% if resultado %}*/
/*   {% include 'JazzywebAulasMentorAlimentosBundle:Default:_tablaAlimentos.html.twig'*/
/*      with {'alimentos': resultado} %}*/
/*   {% endif %}*/
/* */
/*  {% endblock %}*/
