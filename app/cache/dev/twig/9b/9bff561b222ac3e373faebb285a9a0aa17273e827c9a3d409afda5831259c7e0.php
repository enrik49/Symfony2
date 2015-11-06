<?php

/* JazzywebAulasMentorAlimentosBundle::layout.html.twig */
class __TwigTemplate_9d837fcdda5722f4746eca2f16c96552294a3474b418e04169bd96f9412cd626 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "JazzywebAulasMentorAlimentosBundle::layout.html.twig", 1);
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
\t<a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("JAMAB_listar");
        echo "\">ver alimentos</a> |
\t<a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("JAMAB_insertar");
        echo "\">insertar alimento</a> |
\t<a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("JAMAB_buscar");
        echo "\">buscar por nombre</a> |
\t<a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("JAMAB_buscarEnergia");
        echo "\">buscar por energia</a> |
\t<a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("JAMAB_busquedaCombinada");
        echo "\">búsqueda combinada</a>
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
        return array (  96 => 24,  93 => 23,  82 => 26,  80 => 23,  72 => 18,  68 => 17,  64 => 16,  60 => 15,  56 => 14,  52 => 13,  44 => 7,  41 => 6,  33 => 3,  30 => 2,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* {% block stylesheets %}*/
/*  <link href="{{ asset('bundles/jazzywebaulasmentoralimentos/css/estilo.css') }}"*/
/*        type="text/css" rel="stylesheet" />*/
/* {% endblock %}*/
/* {% block body %}*/
/* <div id="cabecera">*/
/* 	<h1>Información de alimentos</h1>*/
/* </div>*/
/* */
/* <div id="menu">*/
/* 	<hr/>*/
/* 	<a href="{{ path('JAMAB_homepage')}}">inicio</a> |*/
/* 	<a href="{{ path('JAMAB_listar')}}">ver alimentos</a> |*/
/* 	<a href="{{ path('JAMAB_insertar')}}">insertar alimento</a> |*/
/* 	<a href="{{ path('JAMAB_buscar')}}">buscar por nombre</a> |*/
/* 	<a href="{{ path('JAMAB_buscarEnergia')}}">buscar por energia</a> |*/
/* 	<a href="{{ path('JAMAB_busquedaCombinada')}}">búsqueda combinada</a>*/
/* 	<hr/>*/
/* </div>*/
/* */
/* <div id="contenido">*/
/* 	{% block contenido %}*/
/* */
/* 	{% endblock %}*/
/* </div>*/
/* */
/* <div id="pie">*/
/* 	<hr/>*/
/* 	<div align="center">- pie de página -</div>*/
/* </div>*/
/* */
/* {% endblock %}*/
