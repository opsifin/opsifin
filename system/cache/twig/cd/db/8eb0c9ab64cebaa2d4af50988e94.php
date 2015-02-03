<?php

/* formcoabalance.html */
class __TwigTemplate_cddb8eb0c9ab64cebaa2d4af50988e94 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("header.html");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "header.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "
 <!-- Page Heading -->
<div class=\"row\">
    <div class=\"col-lg-12\">
        <h1 class=\"page-header\">
            COA 
        </h1>

        <ol class=\"breadcrumb\">
            <li>
                <i class=\"fa fa-cube\"></i><a href=\"#\"> COA</a>
            </li>

            <li class=\"active\">
                  <i class=\"fa fa-cube\"></i> COA Balance
            </li>
        </ol>
    </div>
</div>
<!-- /.row -->
<form action=\"";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "index.php/main/coa/savebalance\" method=\"post\" name=\"form1\">
<div class=\"table-responsive\">
   <table class=\"table table-bordered table-hover table-striped\">
        <thead>
            <tr>
              \t<th>Code</th>
                <th>Name</th>
                <th>Parent</th>
                <th>Balance</th>
            </tr>
        </thead>
        
        <tbody>
        \t";
        // line 36
        $context["x"] = 0;
        // line 37
        echo "        \t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 38
            echo "            ";
            $context["x"] = $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index");
            // line 39
            echo "            <tr>
              \t<td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "nomor_acc"), "html", null, true);
            echo "</td>
                <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "nama_acc"), "html", null, true);
            echo "</td>
                <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "nama_parent"), "html", null, true);
            echo "</td>
                <td width=\"150\">
                \t<input class=\"form-control width100\" name=\"balance";
            // line 44
            echo twig_escape_filter($this->env, (isset($context["x"]) ? $context["x"] : null), "html", null, true);
            echo "\" type=\"text\" id=\"balance";
            echo twig_escape_filter($this->env, (isset($context["x"]) ? $context["x"] : null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "balance"), "html", null, true);
            echo "\" ";
            if (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "added") == 1)) {
                echo " readonly=\"readonly\" ";
            }
            echo "/>
                \t<input type=\"hidden\" name=\"id_company";
            // line 45
            echo twig_escape_filter($this->env, (isset($context["x"]) ? $context["x"] : null), "html", null, true);
            echo "\" id=\"id_company";
            echo twig_escape_filter($this->env, (isset($context["x"]) ? $context["x"] : null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["log"]) ? $context["log"] : null), "clientId"), "html", null, true);
            echo "\" />
                    <input type=\"hidden\" name=\"nomor_acc";
            // line 46
            echo twig_escape_filter($this->env, (isset($context["x"]) ? $context["x"] : null), "html", null, true);
            echo "\" id=\"nomor_acc";
            echo twig_escape_filter($this->env, (isset($context["x"]) ? $context["x"] : null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "nomor_acc"), "html", null, true);
            echo "\" />
                    <input type=\"hidden\" name=\"added";
            // line 47
            echo twig_escape_filter($this->env, (isset($context["x"]) ? $context["x"] : null), "html", null, true);
            echo "\" id=\"added";
            echo twig_escape_filter($this->env, (isset($context["x"]) ? $context["x"] : null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "added"), "html", null, true);
            echo "\" />
                </td>
                
            </tr> 
            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 51
        echo "           
    </table>
    <input type=\"hidden\" name=\"jumlah\" id=\"jumlah\" value=\"";
        // line 53
        echo twig_escape_filter($this->env, (isset($context["x"]) ? $context["x"] : null), "html", null, true);
        echo "\" />
</div>
<input type=\"submit\" class=\"btn btn-default\" value=\"Save Balance\"> <input type=\"button\" class=\"btn btn-default\" value=\"Reload COA\" onclick=\"window.location='";
        // line 55
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "index.php/main/coa/reloadCOA'\">
</form>
";
    }

    public function getTemplateName()
    {
        return "formcoabalance.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 55,  161 => 53,  157 => 51,  134 => 47,  126 => 46,  118 => 45,  106 => 44,  101 => 42,  97 => 41,  93 => 40,  90 => 39,  87 => 38,  69 => 37,  67 => 36,  51 => 23,  29 => 3,  26 => 2,);
    }
}
