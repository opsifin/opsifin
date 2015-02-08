<?php

/* list_voucher.html */
class __TwigTemplate_e8a5f51127f470be1d56c63ac7a0e2c5 extends Twig_Template
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
            List Voucher
        </h1>

        <ol class=\"breadcrumb\">
            <li>
                <i class=\"fa fa-dashboard\"></i><a href=\"#\"> Dashboard</a>
            </li>

            <li class=\"active\">
                <i class=\"fa fa-edit\"></i> Home
            </li>
        </ol>
    </div>
</div>
<!-- /.row -->

<form action=\"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "index.php/reports/list_voucher/save\" method=\"post\" name=\"form1\">
<input id=\"id\" name=\"id\" type=\"hidden\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["edit"]) ? $context["edit"] : null), "id_list_voucher"), "html", null, true);
        echo "\" />
<table border=\"0\">
    <tr>
    <div class=\"form-group col-lg-12\">
         <div class=\"col-md-2\">
            <label>Branch</label>
        </div>
            <div class=\"col-md-3\">
                <select class=\"form-control\" name=\"branch\" id=\"branch\">
                    
                </select>
            </div>    
        </div>
    <div class=\"form-group col-lg-12\">
         <div class=\"col-md-2\">
            <label>Report Type</label>
        </div>
            <div class=\"col-md-3\">
                <select class=\"form-control\" name=\"report_type\" id=\"report_type\">
                    
                </select>
            </div>    
        </div>
    <div class=\"form-group col-lg-12\">
       <div class=\"col-md-2\">
               <label>From</label>
       </div>
       <div class=\"col-md-3\">
               <input onfocus=\"gfPop.fPopCalendar(this);\" class=\"form-control\" id=\"trans_date\" name=\"from_date\" type=\"text\" value=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["main"]) ? $context["main"] : null), "from_date"), "html", null, true);
        echo "\" required>
            </div>
        <div class=\"col-md-2\">
            <div class=\"radio-inline\">
                  <label><input type=\"radio\" name=\"v_type\" value=\"inv_date\"> Inv. Date</label>
            </div>
        </div>
    </div>
        <div class=\"form-group col-lg-12\">
        <div class=\"col-md-2\">
            <label>to</label>
        </div>
            <div class=\"col-md-3\">
               <input onfocus=\"gfPop.fPopCalendar(this);\" class=\"form-control\" id=\"trans_date\" name=\"to_date\" type=\"text\" value=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["main"]) ? $context["main"] : null), "to_date"), "html", null, true);
        echo "\" required>
            </div>
        </div>
    <div class=\"form-group col-lg-12\">
         <div class=\"col-md-2\">
            <label>Printed/Not</label>
        </div>
            <div class=\"col-md-3\">
                <select class=\"form-control\" name=\"printed_not\" id=\"printed_not\">
                    
                </select>
            </div>    
        </div>
    <div class=\"form-group col-lg-12\">
         <div class=\"col-md-2\">
            <label>Status</label>
        </div>
            <div class=\"col-md-3\">
                <select class=\"form-control\" name=\"status\" id=\"status\">
                    
                </select>
            </div>    
        </div>
    <div class=\"form-group col-lg-12\">
         <div class=\"col-md-2\">
            <label>Costumer</label>
        </div>
            <div class=\"col-md-3\">
                <select class=\"form-control\" name=\"costumer\" id=\"costumer\">
                    
                </select>
            </div>    
        </div>
        </tr>
    </table>
    <br>
    <br>
    <div class=\"row\">    
    <div class=\"col-lg-12\">
        <div class=\"table-responsive\">
            <table class=\"table table-bordered table-hover table-striped\">
              <thead>
                  <tr>
                       <th nowrap=\"nowrap\">Invoice No</th>
                       <th nowrap=\"nowrap\">LG No</th>
                       <th nowrap=\"nowrap\">Description</th>
                       <th nowrap=\"nowrap\">Ccy</th>
                       <th nowrap=\"nowrap\">Amount</th>
                       <th nowrap=\"nowrap\">Adjustment</th>    
                       <th nowrap=\"nowrap\">Sell Price</th>
                       <th nowrap=\"nowrap\">Profit</th>
                       <th nowrap=\"nowrap\">Cosutamer Name</th>
                  </tr>
              </thead>
            </table>
        </div>
        
        <input type=\"submit\" class=\"btn btn-default\" value=\"Save\">
    </form>
            <br>
            <br>
        <div class=\"table-responsive\">
   <table class=\"table table-bordered table-hover table-striped\">
        <thead>
            <tr>
              \t<th nowrap=\"nowrap\">Branch</th>
                <th nowrap=\"nowrap\">Report Type</th>
                <th nowrap=\"nowrap\">Form</th>
                <th nowrap=\"nowrap\">To</th>
                <th nowrap=\"nowrap\">Printed/Not</th>
                <th nowrap=\"nowrap\">Status</th>
                <th nowrap=\"nowrap\">Costumer</th>
            </tr>
        </thead>
        
        <tbody>
            ";
        // line 142
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 143
            echo "            <tr>
              \t<td>";
            // line 144
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "branch"), "html", null, true);
            echo "</td>
                <td>";
            // line 145
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "report_type"), "html", null, true);
            echo "</td>
                <td>";
            // line 146
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "form"), "html", null, true);
            echo "</td>
                <td>";
            // line 147
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "to"), "html", null, true);
            echo "</td>
                <td>";
            // line 148
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "printed_not"), "html", null, true);
            echo "</td>
                <td>";
            // line 149
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "status"), "html", null, true);
            echo "</td>
                <td>";
            // line 150
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "costumer"), "html", null, true);
            echo "</td>
                <td><a href=\"";
            // line 151
            echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
            echo "index.php/reports/list_voucher/form/?id=";
            echo twig_escape_filter($this->env, trim($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "id_list_voucher")), "html", null, true);
            echo "\"><i class=\"fa fa-fw fa-pencil\"></i> Edit</a> <a href=\"javascript:void();\" onclick=\"deleteThis('";
            echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
            echo "index.php/reports/list_voucher/delete/?id=";
            echo twig_escape_filter($this->env, trim($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "id_list_voucher")), "html", null, true);
            echo "')\"><i class=\"fa fa-fw fa-trash-o\"></i> Delete</a></td>
            </tr> 
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 153
        echo "           
    </table>
    
  ";
        // line 156
        echo (isset($context["links"]) ? $context["links"] : null);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "list_voucher.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 156,  232 => 153,  217 => 151,  213 => 150,  209 => 149,  205 => 148,  201 => 147,  197 => 146,  193 => 145,  189 => 144,  186 => 143,  182 => 142,  103 => 66,  87 => 53,  56 => 25,  52 => 24,  29 => 3,  26 => 2,);
    }
}
