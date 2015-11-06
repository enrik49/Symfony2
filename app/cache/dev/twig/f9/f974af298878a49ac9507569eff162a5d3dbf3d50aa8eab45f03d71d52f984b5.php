<?php

/* JazzywebAulasMentorAlimentosBundle:Default:formInsertar.html.twig */
class __TwigTemplate_4d76a2766167a55b211863be748566f32df9e01e3a5eecf604570f13f4f302dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("JazzywebAulasMentorAlimentosBundle::layout.html.twig", "JazzywebAulasMentorAlimentosBundle:Default:formInsertar.html.twig", 1);
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
        if (array_key_exists("mensaje", $context)) {
            // line 6
            echo "<b><span style=\"color: red;\">";
            echo twig_escape_filter($this->env, (isset($context["mensaje"]) ? $context["mensaje"] : $this->getContext($context, "mensaje")), "html", null, true);
            echo "</span></b>
";
        }
        // line 8
        echo "<br/>
<form name=\"formInsertar\" action=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("JAMAB_insertar");
        echo "\" method=\"POST\">
    <table>
        <tr>
            <th>Nombre</th>
            <th>Energía (Kcal)</th>
            <th>Proteina (g)</th>
            <th>H. de carbono (g)</th>
            <th>Fibra (g)</th>
            <th>Grasa total (g)</th>
        </tr>
        <tr>
            <td>
              <input type=\"text\" name=\"nombre\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["nombre"]) ? $context["nombre"] : $this->getContext($context, "nombre")), "html", null, true);
        echo "\" />
            </td>
            <td>
              <input type=\"text\" name=\"energia\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["energia"]) ? $context["energia"] : $this->getContext($context, "energia")), "html", null, true);
        echo "\" />
            </td>
            <td>
              <input type=\"text\" name=\"proteina\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["proteina"]) ? $context["proteina"] : $this->getContext($context, "proteina")), "html", null, true);
        echo "\" />
            </td>
            <td>
              <input type=\"text\" name=\"hc\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["hc"]) ? $context["hc"] : $this->getContext($context, "hc")), "html", null, true);
        echo "\" />
            </td>
            <td>
              <input type=\"text\" name=\"fibra\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["fibra"]) ? $context["fibra"] : $this->getContext($context, "fibra")), "html", null, true);
        echo "\" />
            </td>
            <td>
              <input type=\"text\" name=\"grasa\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["grasa"]) ? $context["grasa"] : $this->getContext($context, "grasa")), "html", null, true);
        echo "\" />
            </td>
        </tr>

    </table>
    <input type=\"submit\" value=\"insertar\" name=\"insertar\" />
</form>
* Los valores deben referirse a 100 g del alimento

";
    }

    public function getTemplateName()
    {
        return "JazzywebAulasMentorAlimentosBundle:Default:formInsertar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 36,  84 => 33,  78 => 30,  72 => 27,  66 => 24,  60 => 21,  45 => 9,  42 => 8,  36 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'JazzywebAulasMentorAlimentosBundle::layout.html.twig' %}*/
/* */
/*  {% block contenido %}*/
/* */
/* {% if mensaje is defined %}*/
/* <b><span style="color: red;">{{ mensaje }}</span></b>*/
/* {% endif %}*/
/* <br/>*/
/* <form name="formInsertar" action="{{ path('JAMAB_insertar') }}" method="POST">*/
/*     <table>*/
/*         <tr>*/
/*             <th>Nombre</th>*/
/*             <th>Energía (Kcal)</th>*/
/*             <th>Proteina (g)</th>*/
/*             <th>H. de carbono (g)</th>*/
/*             <th>Fibra (g)</th>*/
/*             <th>Grasa total (g)</th>*/
/*         </tr>*/
/*         <tr>*/
/*             <td>*/
/*               <input type="text" name="nombre" value="{{ nombre }}" />*/
/*             </td>*/
/*             <td>*/
/*               <input type="text" name="energia" value="{{ energia }}" />*/
/*             </td>*/
/*             <td>*/
/*               <input type="text" name="proteina" value="{{ proteina }}" />*/
/*             </td>*/
/*             <td>*/
/*               <input type="text" name="hc" value="{{ hc }}" />*/
/*             </td>*/
/*             <td>*/
/*               <input type="text" name="fibra" value="{{ fibra }}" />*/
/*             </td>*/
/*             <td>*/
/*               <input type="text" name="grasa" value="{{ grasa }}" />*/
/*             </td>*/
/*         </tr>*/
/* */
/*     </table>*/
/*     <input type="submit" value="insertar" name="insertar" />*/
/* </form>*/
/* * Los valores deben referirse a 100 g del alimento*/
/* */
/* {% endblock %}*/
