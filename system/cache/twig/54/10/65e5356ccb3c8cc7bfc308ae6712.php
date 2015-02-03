<?php

/* supplier/formdpsupplier.html */
class __TwigTemplate_541065e5356ccb3c8cc7bfc308ae6712 extends Twig_Template
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
        echo "<!-- Page Heading -->
<div class=\"row\">
    <div class=\"col-lg-12\">
        <h1 class=\"page-header\">
           DP From Supplier
        </h1>

        <ol class=\"breadcrumb\">
            <li>
                <i class=\"fa fa-cube\"></i><a href=\"#\"> Cashier</a>
            </li>

            <li class=\"active\">
                        <i class=\"fa fa-cube\"></i> DP From Supplier
              </li>
        </ol>
    </div>
</div>
<!-- /.row -->
<form action=\"";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "index.php/cashier/dp_supplier/save\" method=\"post\" name=\"form1\">
<input id=\"id\" name=\"id\" type=\"hidden\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["edit"]) ? $context["edit"] : null), "id_dp_supplier"), "html", null, true);
        echo "\" />    
<div class=\"row\">    
    <div class=\"col-lg-12\">
        <div class=\"form-group col-md-4\">
            <label>DS No</label>
            <input class=\"form-control\" id=\"ds_number\" name=\"ds_number\" type=\"text\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["edit"]) ? $context["edit"] : null), "ds_number"), "html", null, true);
        echo "\" required/>                
        </div>
        <div class=\"form-group col-md-4\">
            <div>
                <label>Transc No</label>
                <input class=\"form-control\" id=\"transaksi_no\" name=\"transaksi_no\" type=\"text\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["edit"]) ? $context["edit"] : null), "transaksi_no"), "html", null, true);
        echo "\" required/>
            </div>    
        </div>
        <div class=\"clearfix\"></div>
        <div class=\"form-group col-md-2\">            
                <label>Date</label>
                <input onfocus=\"gfPop.fPopCalendar(this);\" class=\"form-control\" id=\"datepicker\" name=\"tanggal_transaksi\" type=\"date\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["edit"]) ? $context["edit"] : null), "tanggal_transaksi"), "html", null, true);
        echo "\"  required />               
        </div>        
        <div class=\"form-group col-md-4\">
            <div>
                <label>Department</label>
            </div>    
        </div>
        <div class=\"clearfix\"></div>
        
        <div class=\"form-group col-md-4\">
            <label>Supplier</label>
            <input class=\"form-control\" id=\"kode_vendor\" name=\"kode_vendor\" type=\"text\" value=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["edit"]) ? $context["edit"] : null), "kode_vendor"), "html", null, true);
        echo "\"  required />  
        </div>        
        <div class=\"clearfix\"></div>
        <div class=\"form-group col-md-4\">
            <label>Contact Person</label>
            <input class=\"form-control\" id=\"cp\" name=\"cp\" type=\"text\" value=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["edit"]) ? $context["edit"] : null), "cp"), "html", null, true);
        echo "\" /> 
        </div>
        <div class=\"clearfix\"></div>
        <div class=\"form-group col-md-4\">
            <div>
                <label>LG No</label>
                <input class=\"form-control\" id=\"lg_no\" name=\"lg_no\" type=\"text\" value=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["edit"]) ? $context["edit"] : null), "lg_no"), "html", null, true);
        echo "\"  required /> 
            </div>    
        </div>
        <div class=\"clearfix\"></div>
        <div class=\"form-group col-md-4\">
            <div>
                <label>Amount</label>
                <input class=\"form-control\" id=\"amount\" name=\"amount\" type=\"text\" value=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["edit"]) ? $context["edit"] : null), "amount"), "html", null, true);
        echo "\" required /> 
            </div>    
        </div>
        <div class=\"clearfix\"></div>
        <div class=\"form-group\">
            <div class=\"col-md-4\">
                <label>Note</label>
            </div>
            <div class=\"clearfix\"></div>
            <div class=\"col-md-12\">
                <textarea name=\"note\" id=\"note\">";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["edit"]) ? $context["edit"] : null), "note"), "html", null, true);
        echo "</textarea> 
            </div>    
        </div>
    </div>    
</div>
<br>
<br>
<div class=\"row\">    
    <div class=\"col-lg-12\">
        <div class=\"table-responsive\">
          <table class=\"table table-bordered table-hover table-striped\">
              <thead>
                  <tr>
                       <th nowrap=\"nowrap\">Ref ID</th>
                       <th nowrap=\"nowrap\">Reference No</th>
                       <th nowrap=\"nowrap\">Ccy</th>
                       <th nowrap=\"nowrap\">Amount</th>
                       <th nowrap=\"nowrap\">Name</th>
                       <th nowrap=\"nowrap\">Used Date</th>    
                       <th nowrap=\"nowrap\">Action</th>
                  </tr>
              </thead>
              <tbody> 
                  <tr>
                       <th nowrap=\"nowrap\"></th>
                       <th nowrap=\"nowrap\"></th>
                       <th nowrap=\"nowrap\"></th>
                       <th nowrap=\"nowrap\"></th>
                       <th nowrap=\"nowrap\"></th>
                       <th nowrap=\"nowrap\"></th>    
                       <th nowrap=\"nowrap\"></th>  
                  </tr>    
                  ";
        // line 110
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 111
            echo "                  <tr>
                       <th nowrap=\"nowrap\"></th>
                       <th nowrap=\"nowrap\"></th>
                       <th nowrap=\"nowrap\"></th>
                       <th nowrap=\"nowrap\"></th>
                       <th nowrap=\"nowrap\"></th>
                       <th nowrap=\"nowrap\"></th>    
                       <th nowrap=\"nowrap\"></th>  
                  </tr>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 121
        echo "              </tbody>    
          </table>
        </div>    
    </div>    
</div>
<input type=\"submit\" class=\"btn btn-default\" name=\"btnsave\" id=\"btnsave\" value=\"Save\">
</form>  

<br>
<br>
<div class=\"row\">    
    <div class=\"col-lg-12\">
        <div class=\"table-responsive\">
          <table class=\"table table-bordered table-hover table-striped\">
               <thead>
                   <tr>
                       <th nowrap=\"nowrap\">DS NO</th>
                       <th nowrap=\"nowrap\">Transc No</th>
                       <th nowrap=\"nowrap\">Date</th>
                       <th nowrap=\"nowrap\">Supplier</th>
                       <th nowrap=\"nowrap\">CP</th>
                       <th nowrap=\"nowrap\">LG No</th>
                       <th nowrap=\"nowrap\">Amount</th>
                       <th nowrap=\"nowrap\">Note</th>
                       <th nowrap=\"nowrap\">Action</th>
                   </tr>
               </thead>
               <tbody>
                  ";
        // line 149
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 150
            echo "                  <tr>
                    <td>";
            // line 151
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "ds_number"), "html", null, true);
            echo "</td>
                    <td>";
            // line 152
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "transaksi_no"), "html", null, true);
            echo "</td>
                    <td>";
            // line 153
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "tanggal_transaksi"), "html", null, true);
            echo "</td>
                    <td>";
            // line 154
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "kode_vendor"), "html", null, true);
            echo "</td>
                    <td>";
            // line 155
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "cp"), "html", null, true);
            echo "</td>
                    <td>";
            // line 156
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "lg_no"), "html", null, true);
            echo "</td>
                    <td>";
            // line 157
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "amount"), "html", null, true);
            echo "</td>
                    <td>";
            // line 158
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "note"), "html", null, true);
            echo "</td>
                    <td><a href=\"";
            // line 159
            echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
            echo "index.php/cashier/dp_supplier/form/?id=";
            echo twig_escape_filter($this->env, trim($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "id_dp_supplier")), "html", null, true);
            echo "\"><i class=\"fa fa-fw fa-pencil\"></i> Edit</a> <a href=\"javascript:void();\" onclick=\"deleteThis('";
            echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
            echo "index.php/cashier/dp_supplier/delete/?id=";
            echo twig_escape_filter($this->env, trim($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "id_dp_supplier")), "html", null, true);
            echo "')\"><i class=\"fa fa-fw fa-trash-o\"></i> Delete</a></td>
                  </tr>  
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 161
        echo "  
              </tbody>  
          </table>
        </div>    
    </div>    
</div>

";
    }

    public function getTemplateName()
    {
        return "supplier/formdpsupplier.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  271 => 161,  256 => 159,  252 => 158,  248 => 157,  244 => 156,  240 => 155,  236 => 154,  232 => 153,  228 => 152,  224 => 151,  221 => 150,  217 => 149,  187 => 121,  172 => 111,  168 => 110,  133 => 78,  120 => 68,  110 => 61,  101 => 55,  93 => 50,  79 => 39,  70 => 33,  62 => 28,  54 => 23,  50 => 22,  29 => 3,  26 => 2,);
    }
}
