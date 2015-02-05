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
    <div class=\"col-lg-9\">
        <div class=\"form-group col-md-12\">
            <div class=\"col-md-3\">
                <label>DS No</label>
            </div>
            <div class=\"col-md-4\">
                <input class=\"form-control\" id=\"ds_number\" name=\"ds_number\" type=\"text\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["edit"]) ? $context["edit"] : null), "ds_number"), "html", null, true);
        echo "\" required/>                
            </div>  
            <div class=\"col-md-2\">
                <label>Transc No</label>
            </div>
            <div class=\"col-md-3\">    
                <input class=\"form-control\" id=\"transaksi_no\" name=\"transaksi_no\" type=\"text\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["edit"]) ? $context["edit"] : null), "transaksi_no"), "html", null, true);
        echo "\" required/>
            </div> 
        </div>       
        <div class=\"clearfix\"></div>    
        <div class=\"form-group col-md-12\">
            <div class=\"col-md-3\">            
                    <label>Date</label>
            </div>
            <div class=\"col-md-4\">
                    <input onfocus=\"gfPop.fPopCalendar(this);\" class=\"form-control\" id=\"datepicker\" name=\"tanggal_transaksi\" type=\"date\" value=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["edit"]) ? $context["edit"] : null), "tanggal_transaksi"), "html", null, true);
        echo "\"  required />               
            </div> 
            <div class=\"col-md-2\">
                <label>Department</label>
            </div>
        </div>
        <div class=\"clearfix\"></div>
        <div class=\"form-group col-md-12\">
            <div class=\"col-md-3\">
                <label>Supplier</label>
            </div>
            <div class=\"col-md-6\">
                <input class=\"form-control\" id=\"kode_vendor\" name=\"kode_vendor\" type=\"text\" value=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["edit"]) ? $context["edit"] : null), "kode_vendor"), "html", null, true);
        echo "\"  required />  
            </div>    
        </div>  
        <div class=\"clearfix\"></div>
        <div class=\"form-group col-md-12\">
            <div class=\"col-md-3\">
                <label>Contact Person</label>
            </div>
            <div class=\"col-md-6\">
                <input class=\"form-control\" id=\"cp\" name=\"cp\" type=\"text\" value=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["edit"]) ? $context["edit"] : null), "cp"), "html", null, true);
        echo "\" />
            </div>
        </div>              
        <div class=\"clearfix\"></div>
        <div class=\"form-group col-md-12\">
            <div class=\"col-md-3\">
                <label>LG No</label>
            </div>    
            <div class=\"col-md-6\">
                <input class=\"form-control\" id=\"lg_no\" name=\"lg_no\" type=\"text\" value=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["edit"]) ? $context["edit"] : null), "lg_no"), "html", null, true);
        echo "\"  required /> 
            </div>    
        </div>
        <div class=\"clearfix\"></div>
        <div class=\"form-group col-md-12\">
            <div class=\"col-md-3\">
                <label>Amount</label>
            </div>
            <div class=\"col-md-2\">
                <input class=\"form-control\" id=\"currency\" name=\"currency\" type=\"text\" value=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["edit"]) ? $context["edit"] : null), "currency"), "html", null, true);
        echo "\" required /> 
            </div>  
            <div class=\"col-md-4\">
                <input class=\"form-control\" id=\"amount\" name=\"amount\" type=\"text\" value=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["edit"]) ? $context["edit"] : null), "amount"), "html", null, true);
        echo "\" required /> 
            </div>    
        </div>
        <div class=\"clearfix\"></div>
        <div class=\"form-group col-md-12\">
            <div class=\"col-md-3\">
                <label>Note</label>
            </div>
            <div class=\"col-md-6\">
                <textarea class=\"form-control\" name=\"note\" id=\"note\">";
        // line 97
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["edit"]) ? $context["edit"] : null), "note"), "html", null, true);
        echo "</textarea> 
            </div>    
        </div>
        <div class=\"clearfix\"></div>
        
    </div>  
    <div class=\"col-lg-3 round\">
        <div class=\"form-group\">
            <div class=\"col-md-12\">
                <label>Used Amount</label>
                <input class=\"form-control\" id=\"amount\" name=\"amount\" type=\"text\" value=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["edit"]) ? $context["edit"] : null), "used_amount"), "html", null, true);
        echo "\" required/>                
            </div>    
        </div>
        <div class=\"form-group\">
            <div class=\"col-md-12\">
                <label>Clearing Out</label>
                <input class=\"form-control\" id=\"clearing_out\" name=\"clearing_out\" type=\"text\" value=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["edit"]) ? $context["edit"] : null), "clearing_out"), "html", null, true);
        echo "\"/>                
            </div>    
        </div>
        <div class=\"form-group\">
            <div class=\"col-md-12\">
                <label>Clearing In</label>
                <input class=\"form-control\" id=\"clearing_in\" name=\"clearing_in\" type=\"text\" value=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["edit"]) ? $context["edit"] : null), "clearing_in"), "html", null, true);
        echo "\"/>                
            </div>    
        </div>
        <div class=\"form-group col-md-12\">
            <div class=\"col-md-8\">
                <label>Begin Balance</label>
            </div>    
            <div class=\"col-md-4\">
                <input class=\"form-control\" id=\"is_balance\" name=\"is_balance\" type=\"checkbox\" value=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["edit"]) ? $context["edit"] : null), "is_balance"), "html", null, true);
        echo "\"/>                
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
                       <td nowrap=\"nowrap\"> <input class=\"form-control\" type=\"text\" name=\"detail_ref_id\" value=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["editdetail"]) ? $context["editdetail"] : null), "ref_id"), "html", null, true);
        echo "\"> </td>
                       <td nowrap=\"nowrap\"> <input class=\"form-control\" type=\"text\" name=\"detail_ref_no\" value=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["editdetail"]) ? $context["editdetail"] : null), "ref_no"), "html", null, true);
        echo "\"> </td>
                       <td nowrap=\"nowrap\"> <input class=\"form-control\" type=\"text\" name=\"detail_ccy\" value=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["editdetail"]) ? $context["editdetail"] : null), "ccy"), "html", null, true);
        echo "\"> </td>
                       <td nowrap=\"nowrap\"> <input class=\"form-control\" type=\"text\" name=\"detail_amount\" value=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["editdetail"]) ? $context["editdetail"] : null), "amount"), "html", null, true);
        echo "\"> </td>
                       <td nowrap=\"nowrap\"> <input class=\"form-control\" type=\"text\" name=\"detail_name\" value=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["editdetail"]) ? $context["editdetail"] : null), "name"), "html", null, true);
        echo "\"> </td>
                       <td nowrap=\"nowrap\"> <input class=\"form-control\" onfocus=\"gfPop.fPopCalendar(this);\"  type=\"date\" name=\"detail_used_date\"  value=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["editdetail"]) ? $context["editdetail"] : null), "used_data"), "html", null, true);
        echo "\"> </td>                       
                       <td>
                           <input id=\"iddetail\" name=\"iddetail\" type=\"hidden\" value=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["edit"]) ? $context["edit"] : null), "id_cheque_detail"), "html", null, true);
        echo "\" />
                           <input type=\"submit\" name=\"btnsavedetail\" value=\"save\">
                       </td>
                  </tr>
                  ";
        // line 162
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["detail"]) ? $context["detail"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 163
            echo "                  <tr>
                       <td nowrap=\"nowrap\">";
            // line 164
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "ref_id"), "html", null, true);
            echo "</td>
                       <td nowrap=\"nowrap\">";
            // line 165
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "ref_no"), "html", null, true);
            echo "</td>
                       <td nowrap=\"nowrap\">";
            // line 166
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "ccy"), "html", null, true);
            echo "</td>
                       <td nowrap=\"nowrap\">";
            // line 167
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "amount"), "html", null, true);
            echo "</td>
                       <td nowrap=\"nowrap\">";
            // line 168
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "name"), "html", null, true);
            echo "</td>
                       <td nowrap=\"nowrap\">";
            // line 169
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "used_date"), "html", null, true);
            echo "</td>  
                       <td><a href=\"";
            // line 170
            echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
            echo "index.php/cashier/dp_supplier/form/?id=";
            echo twig_escape_filter($this->env, trim($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "id_cheque")), "html", null, true);
            echo "&detail=";
            echo twig_escape_filter($this->env, trim($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "id_cheque_detail")), "html", null, true);
            echo "\"><i class=\"fa fa-fw fa-pencil\"></i> Edit</a> <a href=\"javascript:void();\" onclick=\"deleteThis('";
            echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
            echo "index.php/cashier/dp_supplier/delete_detail/?id=";
            echo twig_escape_filter($this->env, trim($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "id_cheque")), "html", null, true);
            echo "')&detail=";
            echo twig_escape_filter($this->env, trim($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "id_cheque_detail")), "html", null, true);
            echo "\"><i class=\"fa fa-fw fa-trash-o\"></i> Delete</a></td>
                  </tr> 
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 172
        echo " 
              </tbody>    
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
        // line 201
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 202
            echo "                  <tr>
                    <td>";
            // line 203
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "ds_number"), "html", null, true);
            echo "</td>
                    <td>";
            // line 204
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "transaksi_no"), "html", null, true);
            echo "</td>
                    <td>";
            // line 205
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "tanggal_transaksi"), "html", null, true);
            echo "</td>
                    <td>";
            // line 206
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "kode_vendor"), "html", null, true);
            echo "</td>
                    <td>";
            // line 207
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "cp"), "html", null, true);
            echo "</td>
                    <td>";
            // line 208
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "lg_no"), "html", null, true);
            echo "</td>
                    <td>";
            // line 209
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "amount"), "html", null, true);
            echo "</td>
                    <td>";
            // line 210
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "note"), "html", null, true);
            echo "</td>
                    <td><a href=\"";
            // line 211
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
        // line 213
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
        return array (  391 => 213,  376 => 211,  372 => 210,  368 => 209,  364 => 208,  360 => 207,  356 => 206,  352 => 205,  348 => 204,  344 => 203,  341 => 202,  337 => 201,  306 => 172,  287 => 170,  283 => 169,  279 => 168,  275 => 167,  271 => 166,  267 => 165,  263 => 164,  260 => 163,  256 => 162,  249 => 158,  244 => 156,  240 => 155,  236 => 154,  232 => 153,  228 => 152,  224 => 151,  197 => 127,  186 => 119,  177 => 113,  168 => 107,  155 => 97,  143 => 88,  137 => 85,  125 => 76,  113 => 67,  101 => 58,  86 => 46,  74 => 37,  65 => 31,  54 => 23,  50 => 22,  29 => 3,  26 => 2,);
    }
}
