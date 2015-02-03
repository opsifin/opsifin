<?php

/* customer/formdpcustomer.html */
class __TwigTemplate_98d68dd27a3686f47cc7b8b378f5e5b5 extends Twig_Template
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
           DP From Customer
        </h1>

        <ol class=\"breadcrumb\">
            <li>
                <i class=\"fa fa-cube\"></i><a href=\"#\"> Cashier</a>
            </li>

            <li class=\"active\">
                        <i class=\"fa fa-cube\"></i> DP From Customer
              </li>
        </ol>
    </div>
</div>
<!-- /.row -->
<form action=\"";
        // line 22
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "index.php/cashier/dp_customer/save\" method=\"post\" name=\"form1\">
<input id=\"id\" name=\"id\" type=\"hidden\" value=\"";
        // line 23
        if (isset($context["edit"])) { $_edit_ = $context["edit"]; } else { $_edit_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_edit_, "id_dp_customer"), "html", null, true);
        echo "\" />        
<div class=\"row\">    
    <div class=\"col-lg-12\">
        <div class=\"form-group col-md-4\">            
                <label>DP No</label>
                <input class=\"form-control\" id=\"dp_number\" name=\"dp_number\" type=\"text\" value=\"";
        // line 28
        if (isset($context["edit"])) { $_edit_ = $context["edit"]; } else { $_edit_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_edit_, "dp_number"), "html", null, true);
        echo "\" required/>                
               
        </div>
        <div class=\"form-group\">
            <div class=\"col-md-4\">
                <label>Transc No</label>
                <input class=\"form-control\" id=\"transaksi_no\" name=\"transaksi_no\" type=\"text\" value=\"";
        // line 34
        if (isset($context["edit"])) { $_edit_ = $context["edit"]; } else { $_edit_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_edit_, "transaksi_no"), "html", null, true);
        echo "\" required/>                
            </div>    
        </div>
        <div class=\"clearfix\"></div>
        <div class=\"form-group\">
            <div class=\"col-md-4\">
                <label>Date</label>
                <input onfocus=\"gfPop.fPopCalendar(this);\"  class=\"form-control\" id=\"tanggal_transaksi\" name=\"tanggal_transaksi\" type=\"text\" value=\"";
        // line 41
        if (isset($context["edit"])) { $_edit_ = $context["edit"]; } else { $_edit_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_edit_, "tanggal_transaksi"), "html", null, true);
        echo "\" required/>                
            </div>    
        </div>
        
        <div class=\"clearfix\"></div>
        <div class=\"form-group\">
            <div class=\"col-md-4\">
                <label>Customer</label>
                <input class=\"form-control\" id=\"id_customer\" name=\"id_customer\" type=\"text\" value=\"";
        // line 49
        if (isset($context["edit"])) { $_edit_ = $context["edit"]; } else { $_edit_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_edit_, "id_customer"), "html", null, true);
        echo "\" required/>                
            </div>    
        </div>        
        
        <div class=\"form-group\">
            <div class=\"col-md-4\">
                <label>Contact Person</label>
                <input class=\"form-control\" id=\"cp\" name=\"cp\" type=\"text\" value=\"";
        // line 56
        if (isset($context["edit"])) { $_edit_ = $context["edit"]; } else { $_edit_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_edit_, "cp"), "html", null, true);
        echo "\" />                
            </div>    
        </div>
         <div class=\"clearfix\"></div>
        <div class=\"form-group\">
            <div class=\"col-md-4\">
                <label>Amount</label>
                <input class=\"form-control\" id=\"amount\" name=\"amount\" type=\"text\" value=\"";
        // line 63
        if (isset($context["edit"])) { $_edit_ = $context["edit"]; } else { $_edit_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_edit_, "amount"), "html", null, true);
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
        // line 73
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
                       <th nowrap=\"nowrap\">DP Number</th>
                       <th nowrap=\"nowrap\">Transac No</th>
                       <th nowrap=\"nowrap\">Date</th>
                       <th nowrap=\"nowrap\">Customer</th>
                       <th nowrap=\"nowrap\">Amount</th>
                       <th nowrap=\"nowrap\">Action</th>
                   </tr>
               </thead>
               <tbody>
                   ";
        // line 136
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_data_);
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 137
            echo "                   <tr>
                       <td nowrap=\"nowrap\">";
            // line 138
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_data_, "dp_number"), "html", null, true);
            echo "</td>
                       <td nowrap=\"nowrap\">";
            // line 139
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_data_, "traksasi_no"), "html", null, true);
            echo "</td>
                       <td nowrap=\"nowrap\">";
            // line 140
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_data_, "tanggal_transaksi"), "html", null, true);
            echo "</td>
                       <td nowrap=\"nowrap\">";
            // line 141
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_data_, "id_customer"), "html", null, true);
            echo "</td>
                       <td nowrap=\"nowrap\">";
            // line 142
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_data_, "amount"), "html", null, true);
            echo "<td>
                       <td nowrap=\"nowrap\"><a href=\"";
            // line 143
            if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
            echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
            echo "index.php/cashier/dp_customer/form/?id=";
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            echo twig_escape_filter($this->env, trim($this->getAttribute($_data_, "id_dp_customer")), "html", null, true);
            echo "\"><i class=\"fa fa-fw fa-pencil\"></i> Edit</a> <a href=\"javascript:void();\" onclick=\"deleteThis('";
            if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
            echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
            echo "index.php/cashier/dp_customer/delete/?id=";
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            echo twig_escape_filter($this->env, trim($this->getAttribute($_data_, "id_dp_customer")), "html", null, true);
            echo "')\"><i class=\"fa fa-fw fa-trash-o\"></i> Delete</a></td>
                   </tr>
                   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 145
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
        return "customer/formdpcustomer.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  252 => 145,  233 => 143,  228 => 142,  223 => 141,  218 => 140,  213 => 139,  208 => 138,  205 => 137,  200 => 136,  133 => 73,  119 => 63,  108 => 56,  97 => 49,  85 => 41,  74 => 34,  64 => 28,  55 => 23,  50 => 22,  29 => 3,  26 => 2,);
    }
}
