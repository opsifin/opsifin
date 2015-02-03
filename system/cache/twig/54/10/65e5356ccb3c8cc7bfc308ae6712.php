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
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "index.php/cashier/dp_supplier/save\" method=\"post\" name=\"form1\">
<input id=\"id\" name=\"id\" type=\"hidden\" value=\"";
        // line 23
        if (isset($context["edit"])) { $_edit_ = $context["edit"]; } else { $_edit_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_edit_, "id_dp_supplier"), "html", null, true);
        echo "\" />    
<div class=\"row\">    
    <div class=\"col-lg-12\">
        <div class=\"form-group col-md-4\">
            <label>DS No</label>
            <input class=\"form-control\" id=\"ds_number\" name=\"ds_number\" type=\"text\" value=\"";
        // line 28
        if (isset($context["edit"])) { $_edit_ = $context["edit"]; } else { $_edit_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_edit_, "ds_number"), "html", null, true);
        echo "\" required/>                
        </div>
        <div class=\"form-group col-md-4\">
            <div>
                <label>Transc No</label>
                <input class=\"form-control\" id=\"transaksi_no\" name=\"transaksi_no\" type=\"text\" value=\"";
        // line 33
        if (isset($context["edit"])) { $_edit_ = $context["edit"]; } else { $_edit_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_edit_, "transaksi_no"), "html", null, true);
        echo "\" required/>
            </div>    
        </div>
        <div class=\"clearfix\"></div>
        <div class=\"form-group col-md-2\">            
                <label>Date</label>
                <input onfocus=\"gfPop.fPopCalendar(this);\" class=\"form-control\" id=\"datepicker\" name=\"tanggal_transaksi\" type=\"date\" value=\"";
        // line 39
        if (isset($context["edit"])) { $_edit_ = $context["edit"]; } else { $_edit_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_edit_, "tanggal_transaksi"), "html", null, true);
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
        if (isset($context["edit"])) { $_edit_ = $context["edit"]; } else { $_edit_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_edit_, "kode_vendor"), "html", null, true);
        echo "\"  required />  
        </div>        
        <div class=\"clearfix\"></div>
        <div class=\"form-group col-md-4\">
            <label>Contact Person</label>
            <input class=\"form-control\" id=\"cp\" name=\"cp\" type=\"text\" value=\"";
        // line 55
        if (isset($context["edit"])) { $_edit_ = $context["edit"]; } else { $_edit_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_edit_, "cp"), "html", null, true);
        echo "\" /> 
        </div>
        <div class=\"clearfix\"></div>
        <div class=\"form-group col-md-4\">
            <div>
                <label>LG No</label>
                <input class=\"form-control\" id=\"lg_no\" name=\"lg_no\" type=\"text\" value=\"";
        // line 61
        if (isset($context["edit"])) { $_edit_ = $context["edit"]; } else { $_edit_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_edit_, "lg_no"), "html", null, true);
        echo "\"  required /> 
            </div>    
        </div>
        <div class=\"clearfix\"></div>
        <div class=\"form-group col-md-4\">
            <div>
                <label>Amount</label>
                <input class=\"form-control\" id=\"amount\" name=\"amount\" type=\"text\" value=\"";
        // line 68
        if (isset($context["edit"])) { $_edit_ = $context["edit"]; } else { $_edit_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_edit_, "amount"), "html", null, true);
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
        if (isset($context["edit"])) { $_edit_ = $context["edit"]; } else { $_edit_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_edit_, "note"), "html", null, true);
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
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_data_);
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
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_data_);
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 150
            echo "                  <tr>
                    <td>";
            // line 151
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_data_, "ds_number"), "html", null, true);
            echo "</td>
                    <td>";
            // line 152
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_data_, "transaksi_no"), "html", null, true);
            echo "</td>
                    <td>";
            // line 153
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_data_, "tanggal_transaksi"), "html", null, true);
            echo "</td>
                    <td>";
            // line 154
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_data_, "kode_vendor"), "html", null, true);
            echo "</td>
                    <td>";
            // line 155
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_data_, "cp"), "html", null, true);
            echo "</td>
                    <td>";
            // line 156
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_data_, "lg_no"), "html", null, true);
            echo "</td>
                    <td>";
            // line 157
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_data_, "amount"), "html", null, true);
            echo "</td>
                    <td>";
            // line 158
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_data_, "note"), "html", null, true);
            echo "</td>
                    <td><a href=\"";
            // line 159
            if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
            echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
            echo "index.php/cashier/dp_supplier/form/?id=";
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            echo twig_escape_filter($this->env, trim($this->getAttribute($_data_, "id_dp_supplier")), "html", null, true);
            echo "\"><i class=\"fa fa-fw fa-pencil\"></i> Edit</a> <a href=\"javascript:void();\" onclick=\"deleteThis('";
            if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
            echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
            echo "index.php/cashier/dp_supplier/delete/?id=";
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            echo twig_escape_filter($this->env, trim($this->getAttribute($_data_, "id_dp_supplier")), "html", null, true);
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
        return array (  295 => 161,  276 => 159,  271 => 158,  266 => 157,  261 => 156,  256 => 155,  251 => 154,  246 => 153,  241 => 152,  236 => 151,  233 => 150,  228 => 149,  198 => 121,  183 => 111,  178 => 110,  142 => 78,  128 => 68,  117 => 61,  107 => 55,  98 => 50,  83 => 39,  73 => 33,  64 => 28,  55 => 23,  50 => 22,  29 => 3,  26 => 2,);
    }
}
