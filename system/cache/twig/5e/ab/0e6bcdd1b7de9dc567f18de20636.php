<?php

/* list_of_cheque_bg.html */
class __TwigTemplate_5eab0e6bcdd1b7de9dc567f18de20636 extends Twig_Template
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
            List Of Cheque BG
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

<div class=\"row\">
    <div class=\"col-lg-12\">
        <h4>List Of BG/Credit Card/Transfer/Debet BCA</h4><br>
        <form action=\"";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "index.php/reports/list_of_cheque_bg/save\" method=\"post\" name=\"form1\">
    </div>
<div class=\"form-group\">
            <div class=\"checkbox-inline\">
                  <label><input type=\"checkbox\" name=\"v_type\" value=\"bg_cheque\"> BG/Cheque</label>
            </div>
            <div class=\"checkbox-inline\">
                <label><input type=\"checkbox\"  name=\"v_type\" value=\"credit_card\"> Credit Card</label>
            </div>
            <div class=\"checkbox-inline\">
                <label><input type=\"checkbox\"  name=\"v_type\" value=\"transfer_da\"> Transfer DA</label>
            </div>
        </div>
    <div class=\"form-group width150\">
            <div>
                <label>Branch</label>
                <select class=\"form-control\" id=\"branch\">
                    
                </select>
            </div>    
        </div>
    <div class=\"form-group\">
            <div class=\"checkbox-inline\">
                  <label><input type=\"checkbox\" name=\"v_type\" value=\"by_date\"> By Date</label>
            </div>
    </div>
    <div class=\"form-group\">
            <div>
               <label>From</label>
               <input type=\"date\" name=\"from\" id=\"datepicker\">
            </div>
        </div>  
        <div class=\"form-group\">
            <div>
               <label>to</label>
               <input type=\"date\" name=\"to\" id=\"datepicker\">
            </div>
        </div>
    <div class=\"form-group width150\">
            <div>
                <label>Type</label>
                <select class=\"form-control\" id=\"type\">
                    
                </select>
            </div>    
        </div>
    <div class=\"form-group width150\">
            <div>
                <label>References</label>
                <select class=\"form-control\" id=\"references\">
                    
                </select>
            </div>    
        </div>
    <div class=\"form-group width200\">
          <label>Transaction </label>
          <select class=\"form-control\" name=\"transaction\" id=\"transaction\">
            <option value=\"all_transaction\" ";
        // line 84
        if (($this->getAttribute((isset($context["edit"]) ? $context["edit"] : null), "invoice_type") == "all_transaction")) {
            echo " selected=\"selected\" ";
        }
        echo ">All Transaction</option>
            <option value=\"invoice_trans\" ";
        // line 85
        if (($this->getAttribute((isset($context["edit"]) ? $context["edit"] : null), "invoice_type") == "invoice_trans")) {
            echo " selected=\"selected\" ";
        }
        echo ">Invoice Transaction</option>
            <option value=\"rv_trans\" ";
        // line 86
        if (($this->getAttribute((isset($context["edit"]) ? $context["edit"] : null), "invoice_type") == "rv_trans")) {
            echo " selected=\"selected\" ";
        }
        echo ">RV Transaction</option>
            <option value=\"cash_req_sett\" ";
        // line 87
        if (($this->getAttribute((isset($context["edit"]) ? $context["edit"] : null), "invoice_type") == "cash_req_sett")) {
            echo " selected=\"selected\" ";
        }
        echo ">Cash Req Settlment</option>
            <option value=\"pv_payment\" ";
        // line 88
        if (($this->getAttribute((isset($context["edit"]) ? $context["edit"] : null), "invoice_type") == "pv_payment")) {
            echo " selected=\"selected\" ";
        }
        echo ">PV Payment</option>
          </select>
        </div>
    <div class=\"form-group\">
            <div class=\"radio-inline\">
                  <label><input type=\"radio\" name=\"v_type\" value=\"criteria\"> Select All Transaction</label>
            </div>
        <div class=\"radio-inline\">
                  <label><input type=\"radio\" name=\"v_type\" value=\"criteria\"> Unselect All Transaction</label>
            </div>
        </div>
    
    <div class=\"form-group\">
            <div class=\"checkbox-inline\">
                  <label><input type=\"checkbox\" name=\"v_type\" value=\"all\"> All</label>
            </div>
        </div>
    <div class=\"form-group width150\">
            <div>
                <label>Criteria</label>
                <select class=\"form-control\" id=\"critera\">
                    
                </select>
            </div>    
        </div>
    <div class=\"form-group width150\">
            <div>
                <label>Bank Name</label>
                <select class=\"form-control\" id=\"bank_nama\">
                    
                </select>
            </div>    
        </div>
    <div class=\"form-group width150\">
            <div>
                <label>User</label>
                <select class=\"form-control\" id=\"user\">
                    
                </select>
            </div>    
        </div>
    <div class=\"form-group width150\">
            <div>
                <label>Currency</label>
                <select id=\"currency\" name=\"currency\" class=\"form-control\" onchange=\"getRates()\">
                    <option value=\"\">Select</option>
                    ";
        // line 134
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["currency"]) ? $context["currency"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["curr"]) {
            // line 135
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["curr"]) ? $context["curr"] : null), "currency"), "html", null, true);
            echo "\" ";
            if (($this->getAttribute((isset($context["curr"]) ? $context["curr"] : null), "currency") == $this->getAttribute((isset($context["edit"]) ? $context["edit"] : null), "currency"))) {
                echo " selected=\"selected\" ";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["curr"]) ? $context["curr"] : null), "currency"), "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['curr'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 137
        echo "                </select>
            </div>    
        </div>

<input type=\"button\" class=\"btn btn-default\" value=\"Save\" onclick=\"saveAll()\">
";
    }

    public function getTemplateName()
    {
        return "list_of_cheque_bg.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 137,  194 => 135,  190 => 134,  139 => 88,  133 => 87,  127 => 86,  121 => 85,  115 => 84,  55 => 27,  29 => 3,  26 => 2,);
    }
}
