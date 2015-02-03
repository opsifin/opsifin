<?php

/* formcoatype.html */
class __TwigTemplate_097aa539b64fc34b947ca1dc69e2bc4e extends Twig_Template
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
            COA Type
        </h1>

        <ol class=\"breadcrumb\">
            <li>
                <!-- CHANGE By Dwi Wahyudi
                <i class=\"fa fa-cubes\"></i><a href=\"#\"> COA</a>
                -->
                <i class=\"fa fa-cubes\"></i><a href=\"#\"> COA</a>
            </li>

            <li class=\"active\">
                <i class=\"fa fa-cubes\"></i> COA Type
            </li>
        </ol>
    </div>
</div>
<!-- /.row -->
<!-- CHANGE By Dwi Wahyudi 
<form action=\"";
        // line 27
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "index.php/main/coagroup/save\" method=\"post\" name=\"form1\">
-->
<form action=\"";
        // line 29
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "index.php/main/coatype/save\" method=\"post\" name=\"form1\" data-toggle=\"validator\" role=\"form\">

<input type=\"hidden\" name=\"id\" id=\"id\" value=\"";
        // line 31
        if (isset($context["edit"])) { $_edit_ = $context["edit"]; } else { $_edit_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_edit_, "id_groupacc"), "html", null, true);
        echo "\" />
 
<div class=\"form-group width200\">
    <label>Group Code</label>
    <input class=\"form-control\" id=\"kode_group\" name=\"kode_group\" type=\"text\" value=\"";
        // line 35
        if (isset($context["edit"])) { $_edit_ = $context["edit"]; } else { $_edit_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_edit_, "kode_group"), "html", null, true);
        echo "\" required>
</div>

<div class=\"form-group width250\">
    <label>Group Name</label>
    <input class=\"form-control\" id=\"nama_group\" name=\"nama_group\" type=\"text\" value=\"";
        // line 40
        if (isset($context["edit"])) { $_edit_ = $context["edit"]; } else { $_edit_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_edit_, "nama_group"), "html", null, true);
        echo "\" required>
</div>

<input type=\"submit\" class=\"add-btn btn btn-default\" value=\"Save\">
<input type=\"reset\" class=\"btn btn-default\" value=\"Clear\">

</form>

<ol class=\"breadcrumb margin100\">
   \t <li class=\"active\">
        <i class=\"fa fa-cubes\"></i> COA Type List
    </li>
</ol>

<div class=\"table-responsive\">
    <table class=\"table table-bordered table-hover table-striped\">
        <thead>
            <tr>
                <th>Code</th>
                <th>Name</th>
                <th>Process</th>
            </tr>
        </thead>
        
        <tbody>
        \t";
        // line 65
        if (isset($context["xdata"])) { $_xdata_ = $context["xdata"]; } else { $_xdata_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_xdata_);
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 66
            echo "            <tr>
                <td>";
            // line 67
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_data_, "koddatae_group"), "html", null, true);
            echo "</td>
                <td>";
            // line 68
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_data_, "nama_group"), "html", null, true);
            echo "</td>
                <!-- CHANGE BY DWI WAHYUDI -->
                <td><a href=\"";
            // line 70
            if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
            echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
            echo "index.php/main/coatype/form/?id=";
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            echo twig_escape_filter($this->env, trim($this->getAttribute($_data_, "id_groupacc")), "html", null, true);
            echo "\"><i class=\"fa fa-fw fa-pencil\"></i> Edit</a> <a href=\"javascript:void();\" onclick=\"deleteThis('";
            if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
            echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
            echo "index.php/main/coatype/del/?id=";
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            echo twig_escape_filter($this->env, trim($this->getAttribute($_data_, "id_groupacc")), "html", null, true);
            echo "')\"><i class=\"fa fa-fw fa-trash-o\"></i> Delete</a></td>
            </tr> 
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 72
        echo "           
        </tbody>
    </table>
    
    ";
        // line 76
        if (isset($context["links"])) { $_links_ = $context["links"]; } else { $_links_ = null; }
        echo $_links_;
        echo "
</div>

<script type='text/javascript'>
    \$(\"#__kode_group\").on(\"blur\", function(){
        
        \$.ajax({
                type: \"GET\",
                url: \"";
        // line 84
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "main/coatype/check_kode_group/\" + \$(this).val(),
                dataType: \"json\",
                cache: false,
                success: function(data) {
                    log.console (data.jml);
                }
            });  
        
    });
</script>
";
    }

    public function getTemplateName()
    {
        return "formcoatype.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 84,  157 => 76,  151 => 72,  132 => 70,  126 => 68,  121 => 67,  118 => 66,  113 => 65,  84 => 40,  75 => 35,  67 => 31,  61 => 29,  55 => 27,  29 => 3,  26 => 2,);
    }
}
