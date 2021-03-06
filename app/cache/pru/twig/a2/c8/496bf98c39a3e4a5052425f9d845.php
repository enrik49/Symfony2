<?php

/* JazzywebAulasMentorAlimentosBundle::layout.html.twig */
class __TwigTemplate_a2c8496bf98c39a3e4a5052425f9d845 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'contenido' => array($this, 'block_contenido'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 3
        echo " <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jazzywebaulasmentoralimentos/css/estilo.css"), "html", null, true);
        echo "\"
       type=\"text/css\" rel=\"stylesheet\" />
";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "<div id=\"cabecera\">
\t<h1>Información de alimentos</h1>
</div>

<div id=\"menu\">
\t<hr/>
\t<a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("JAMAB_homepage");
        echo "\">inicio</a> |
\t<a href=\"#\">ver alimentos</a> |
\t<a href=\"#\">insertar alimento</a> |
\t<a href=\"#\">buscar por nombre</a> |
\t<a href=\"#\">buscar por energia</a> |
\t<a href=\"#\">búsqueda combinada</a>
\t<hr/>
</div>

<div id=\"contenido\">
\t";
        // line 23
        $this->displayBlock('contenido', $context, $blocks);
        // line 26
        echo "</div>

<div id=\"pie\">
\t<hr/>
\t<div align=\"center\">- pie de página -</div>
</div>

";
    }

    // line 23
    public function block_contenido($context, array $blocks = array())
    {
        // line 24
        echo "
\t";
    }

    public function getTemplateName()
    {
        return "JazzywebAulasMentorAlimentosBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 24,  78 => 23,  67 => 26,  65 => 23,  52 => 13,  44 => 7,  41 => 6,  33 => 3,  30 => 2,  39 => 7,  35 => 6,  31 => 4,  28 => 3,);
    }
}
