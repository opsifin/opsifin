<?php

/* credit_card/formcreditcard.html */
class __TwigTemplate_070e1f2c9ed47175734f532349acf0a0 extends Twig_Template
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
           Credit Card
        </h1>

        <ol class=\"breadcrumb\">
            <li>
                <i class=\"fa fa-cube\"></i><a href=\"#\"> Cashier</a>
            </li>

            <li class=\"active\">
                        <i class=\"fa fa-cube\"></i> Credit Card
              </li>
        </ol>
    </div>
</div>
<!-- /.row -->
<form action=\"";
        // line 22
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "index.php/cashier/cheque_bg/save\" method=\"post\" name=\"form1\">
<input id=\"id\" name=\"id\" type=\"hidden\" value=\"";
        // line 23
        if (isset($context["edit"])) { $_edit_ = $context["edit"]; } else { $_edit_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_edit_, "id_cc"), "html", null, true);
        echo "\" />  
<div class=\"row\">    
    <div class=\"col-lg-12\">
        <div class=\"form-group\">
            <div class=\"col-md-4\">
                <label>Branch</label>
                <input class=\"form-control\" id=\"dp_number\" name=\"dp_number\" type=\"text\" value=\"";
        // line 29
        if (isset($context["edit"])) { $_edit_ = $context["edit"]; } else { $_edit_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_edit_, "dp_number"), "html", null, true);
        echo "\" required/>                
            </div>    
        </div>
        <div class=\"clearfix\"></div>
        <div class=\"form-group\">
            <div class=\"col-md-4\">
                <label>Reference No</label>
                <input class=\"form-control\" id=\"dp_number\" name=\"dp_number\" type=\"text\" value=\"";
        // line 36
        if (isset($context["edit"])) { $_edit_ = $context["edit"]; } else { $_edit_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_edit_, "dp_number"), "html", null, true);
        echo "\" required/>                
            </div>    
        </div>
        <div class=\"form-group\">
            <div class=\"col-md-4\">
                <label>Transaction No</label>
                <input class=\"form-control\" id=\"dp_number\" name=\"dp_number\" type=\"text\" value=\"";
        // line 42
        if (isset($context["edit"])) { $_edit_ = $context["edit"]; } else { $_edit_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_edit_, "dp_number"), "html", null, true);
        echo "\" required/>                
            </div>    
        </div>
        <div class=\"clearfix\"></div>
        <div class=\"form-group\">
            <div class=\"col-md-4\">
                <label>Date</label>
                <input class=\"form-control\" id=\"dp_number\" name=\"dp_number\" type=\"text\" value=\"";
        // line 49
        if (isset($context["edit"])) { $_edit_ = $context["edit"]; } else { $_edit_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_edit_, "dp_number"), "html", null, true);
        echo "\" required/>                
            </div>    
        </div>
        <div class=\"clearfix\"></div>
        <div class=\"form-group\">
            <div class=\"col-md-4\">
                <label>Customer</label>
                <input class=\"form-control\" id=\"dp_number\" name=\"dp_number\" type=\"text\" value=\"";
        // line 56
        if (isset($context["edit"])) { $_edit_ = $context["edit"]; } else { $_edit_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_edit_, "dp_number"), "html", null, true);
        echo "\" required/>                
            </div>    
        </div>        
        <div class=\"clearfix\"></div>
        <div class=\"form-group\">
            <div class=\"col-md-4\">
                <label>Contact Person</label>
                <input class=\"form-control\" id=\"dp_number\" name=\"dp_number\" type=\"text\" value=\"";
        // line 63
        if (isset($context["edit"])) { $_edit_ = $context["edit"]; } else { $_edit_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_edit_, "dp_number"), "html", null, true);
        echo "\" required/>                
            </div>    
        </div>
        <div class=\"clearfix\"></div>
        <div class=\"form-group\">
            <div class=\"col-md-4\">
                <label>Bank Name</label>
                <input class=\"form-control\" id=\"dp_number\" name=\"dp_number\" type=\"text\" value=\"";
        // line 70
        if (isset($context["edit"])) { $_edit_ = $context["edit"]; } else { $_edit_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_edit_, "dp_number"), "html", null, true);
        echo "\" required/>                
            </div>    
        </div>
        <div class=\"clearfix\"></div>
        <div class=\"form-group\">
            <div class=\"col-md-4\">
                <label>Amount</label>
                <input class=\"form-control\" id=\"dp_number\" name=\"dp_number\" type=\"text\" value=\"";
        // line 77
        if (isset($context["edit"])) { $_edit_ = $context["edit"]; } else { $_edit_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_edit_, "dp_number"), "html", null, true);
        echo "\" required/>                
            </div>    
        </div>
       
        <div class=\"form-group\">
            <div class=\"col-md-4\">
                <label>Charges</label>
                <input class=\"form-control\" id=\"dp_number\" name=\"dp_number\" type=\"text\" value=\"";
        // line 84
        if (isset($context["edit"])) { $_edit_ = $context["edit"]; } else { $_edit_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_edit_, "dp_number"), "html", null, true);
        echo "\" required/>                
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
        // line 94
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
                  </tr>
              </thead>
              <tbody>
                  <tr>
                       <td nowrap=\"nowrap\">Ref ID</td>
                       <td nowrap=\"nowrap\">Reference No</td>
                       <td nowrap=\"nowrap\">Ccy</td>
                       <td nowrap=\"nowrap\">Amount</td>
                       <td nowrap=\"nowrap\">Name</td>
                       <td nowrap=\"nowrap\">Used Date</td>                       
                  </tr>
                  <tr>
                       <td nowrap=\"nowrap\">Ref ID</td>
                       <td nowrap=\"nowrap\">Reference No</td>
                       <td nowrap=\"nowrap\">Ccy</td>
                       <td nowrap=\"nowrap\">Amount</td>
                       <td nowrap=\"nowrap\">Name</td>
                       <td nowrap=\"nowrap\">Used Date</td>                       
                  </tr>
              </tbody>    
          </table>
        </div>    
    </div>    
</div>
<input type=\"submit\" class=\"btn btn-default\" value=\"Save\">
</form>  

<br>
<br>
<div class=\"row\">    
    <div class=\"col-lg-12\">
        <div class=\"table-responsive\">
          <table class=\"table table-bordered table-hover table-striped\">
               <thead>
                   <tr>
                       <th nowrap=\"nowrap\">Branch</th>
                       <th nowrap=\"nowrap\">Ref Number</th>
                       <th nowrap=\"nowrap\">Transac Number</th>                       
                       <th nowrap=\"nowrap\">Date</th>
                       <th nowrap=\"nowrap\">Customer</th>
                       <th nowrap=\"nowrap\">CP</th>
                       <th nowrap=\"nowrap\">Bank Name</th>
                       <th nowrap=\"nowrap\">Amount</th>
                       <th nowrap=\"nowrap\">Charges</th>
                       <th nowrap=\"nowrap\">Action</th>
                   </tr>
               </thead>
               <tbody>
                   ";
        // line 161
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_data_);
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 162
            echo "                   <tr>
                       <td nowrap=\"nowrap\">";
            // line 163
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_data_, "cabang_nama"), "html", null, true);
            echo "</td>
                       <td nowrap=\"nowrap\">";
            // line 164
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_data_, "ref_no"), "html", null, true);
            echo "</td>
                       <td nowrap=\"nowrap\">";
            // line 165
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_data_, "transaksi_no"), "html", null, true);
            echo "</td>                       
                       <td nowrap=\"nowrap\">";
            // line 166
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_data_, "tanggal_transaksi"), "html", null, true);
            echo "</td>
                       <td nowrap=\"nowrap\">";
            // line 167
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_data_, "customer_nama"), "html", null, true);
            echo "</td>
                       <td nowrap=\"nowrap\">";
            // line 168
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_data_, "cp"), "html", null, true);
            echo "</td>
                       <td nowrap=\"nowrap\">";
            // line 169
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_data_, "bank_nama"), "html", null, true);
            echo "</td>
                       <td nowrap=\"nowrap\">";
            // line 170
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_data_, "amount"), "html", null, true);
            echo "</td>
                       <td nowrap=\"nowrap\">";
            // line 171
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_data_, "charges"), "html", null, true);
            echo "</td>
                       <td nowrap=\"nowrap\"><a href=\"";
            // line 172
            if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
            echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
            echo "index.php/cashier/credit_card/form/?id=";
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            echo twig_escape_filter($this->env, trim($this->getAttribute($_data_, "id_cc")), "html", null, true);
            echo "\"><i class=\"fa fa-fw fa-pencil\"></i> Edit</a> <a href=\"javascript:void();\" onclick=\"deleteThis('";
            if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
            echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
            echo "index.php/cashier/credit_card/delete/?id=";
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            echo twig_escape_filter($this->env, trim($this->getAttribute($_data_, "id_cc")), "html", null, true);
            echo "')\"><i class=\"fa fa-fw fa-trash-o\"></i> Delete</a></td>
                   </tr>
                   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 174
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
        return "credit_card/formcreditcard.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  309 => 174,  290 => 172,  285 => 171,  280 => 170,  275 => 169,  270 => 168,  265 => 167,  260 => 166,  255 => 165,  250 => 164,  245 => 163,  242 => 162,  237 => 161,  166 => 94,  152 => 84,  141 => 77,  130 => 70,  119 => 63,  108 => 56,  97 => 49,  86 => 42,  76 => 36,  65 => 29,  55 => 23,  50 => 22,  29 => 3,  26 => 2,);
    }
}
