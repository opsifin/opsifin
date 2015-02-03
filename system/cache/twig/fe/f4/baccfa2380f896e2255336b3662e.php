<?php

/* menu.html */
class __TwigTemplate_fef4baccfa2380f896e2255336b3662e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
<div class=\"collapse navbar-collapse navbar-ex1-collapse\">
<ul class=\"nav navbar-nav side-nav\">
    <li>
        <!-- CHANGE By Dwi
        <a href=\"#\"><i class=\"fa fa-fw fa-dashboard\"></i> Dashboard</a>
        -->
        <a href=\"";
        // line 8
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "index.php/main/home\"><i class=\"fa fa-fw fa-dashboard\"></i> Dashboard</a>
    </li>
    
    
    
    <li>
        <a href=\"javascript:;\" data-toggle=\"collapse\" data-target=\"#configchild\"><i class=\"fa fa-fw fa-gear\"></i> Configuration <i class=\"fa fa-fw fa-caret-down\"></i></a>
        <ul id=\"configchild\" class=\"collapse\">
        \t<li>
                <a href=\"javascript:;\" data-toggle=\"collapse\" data-target=\"#demo\"><i class=\"fa fa-fw fa-plus-circle\"></i> COA <i class=\"fa fa-fw fa-caret-down\"></i></a>
                <ul id=\"demo\" class=\"collapse\" style=\"list-style-type:none; margin-left:10px;\">
                    <li>
                        <a href=\"";
        // line 20
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "index.php/main/coatype/form\"><i class=\"fa fa-fw fa-cubes\"></i> COA Type</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 23
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "index.php/main/coagroup/form\"><i class=\"fa fa-fw fa-cubes\"></i> COA Group</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 26
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "index.php/main/coa/form\"><i class=\"fa fa-fw fa-cube\"></i> COA</a>
                    </li>
                </ul>
            </li>
    
            <li>
                <a href=\"";
        // line 32
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "index.php/main/company/form\"><i class=\"fa fa-fw fa-bank\"></i> Company Settings</a>
            </li>
            <li>
                <a href=\"";
        // line 35
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "index.php/main/coa/setbalance\"><i class=\"fa fa-fw fa-cube\"></i> COA Balance</a>
            </li>
            <li>
            
            
               <!-- <a href=\"";
        // line 40
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "index.php/main/coasettings/form\"><i class=\"fa fa-fw fa-cube\"></i> COA Settings</a>-->
            
            
            \t<a href=\"javascript:;\" data-toggle=\"collapse\" data-target=\"#settingchild\"><i class=\"fa fa-fw fa-gear\"></i>  COA Settings <i class=\"fa fa-fw fa-caret-down\"></i></a>
                <ul id=\"settingchild\" class=\"collapse\" style=\"list-style-type:none; margin-left:10px;\">
                    <li>
                        <a href=\"";
        // line 46
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "index.php/main/coasettings/formlcc\"><i class=\"fa fa-fw fa-cube\"></i> LCC Ticketing</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 49
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "index.php/main/coasettings/formbsp\"><i class=\"fa fa-fw fa-cube\"></i> BSP Ticketing</a>
                    </li>
                    <li>
                    \t<a href=\"";
        // line 52
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "index.php/main/coasettings/formhotel\"><i class=\"fa fa-fw fa-cube\"></i> Hotel</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 55
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "index.php/main/coasettings/formdocument\"><i class=\"fa fa-fw fa-cube\"></i> Document</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 58
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "index.php/main/coasettings/formtour\"><i class=\"fa fa-fw fa-cube\"></i> Tour</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 61
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "index.php/main/coasettings/formothers\"><i class=\"fa fa-fw fa-cube\"></i> Others</a>
                    </li>            
                </ul>
        
            
            
            
            </li>
            <li>
                <a href=\"";
        // line 70
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "index.php/main/currency/form\"><i class=\"fa fa-fw fa-bitcoin\"></i> Currency</a>
            </li>            
        </ul>
    </li>
    
    <li>
        <a href=\"javascript:;\" data-toggle=\"collapse\" data-target=\"#accountchild\"><i class=\"fa fa-fw fa-bar-chart-o\"></i> Accounting <i class=\"fa fa-fw fa-caret-down\"></i></a>
        <ul id=\"accountchild\" class=\"collapse\">
            <li>
                <a href=\"";
        // line 79
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "index.php/main/jurnal/form\"><i class=\"fa fa-fw fa-cube\"></i> Journal</a>
            </li>
            
            <li>
                <a href=\"";
        // line 83
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "index.php/main/pv/form\"><i class=\"fa fa-fw fa-bookmark-o\"></i> Payment Voucher</a>
            </li>
            <li>
                <!-- Update Link By dwi Wahyudi -->
                <a href=\"";
        // line 87
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "index.php/accounting/rv/form\"><i class=\"fa fa-fw fa-bookmark-o\"></i> Receipt Voucher</a>
            </li>
            <li>
                <!-- Update Link By dwi Wahyudi -->
                <a href=\"";
        // line 91
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "index.php/accounting/approval/form\"><i class=\"fa fa-fw fa-hand-o-down\"></i> PV/RV Approval</a>
            </li>
            <li>
                <!-- Update Link By dwi Wahyudi -->
                <a href=\"";
        // line 95
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "index.php/accounting/credit_note/form\"><i class=\"fa fa-fw fa-cube\"></i> Credit Note</a>
            </li>
            
            <li>
                <!-- Update Link By dwi Wahyudi -->
                <a href=\"";
        // line 100
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "index.php/accounting/debit_note/form\"><i class=\"fa fa-fw fa-cube\"></i> Debit Note</a>
            </li>
            
            <li>
                <!-- Update Link By dwi Wahyudi -->
                <a href=\"";
        // line 105
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "index.php/accounting/refund/form\"><i class=\"fa fa-fw fa-cube\"></i> Refund</a>
            </li>
            
            
        </ul>
    </li>
    
     <li>
        <a href=\"javascript:;\" data-toggle=\"collapse\" data-target=\"#cashierchild\"><i class=\"fa fa-fw fa-money\"></i> Cashier <i class=\"fa fa-fw fa-caret-down\"></i></a>
        <ul id=\"cashierchild\" class=\"collapse\">
            <li>
                <!-- Update Link By dwi Wahyudi -->
                <a href=\"";
        // line 117
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "index.php/cashier/sales_counter/form\"><i class=\"fa fa-fw fa-tasks\"></i> Sales Counter</a>
            </li>
            
            <li>
                <!-- Update Link By dwi Wahyudi -->
                <a href=\"";
        // line 122
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "index.php/cashier/cheque_bg/form\"><i class=\"fa fa-fw fa-ticket\"></i> Cheque/BG</a>
            </li>
            
            <li>
                <!-- Update Link By dwi Wahyudi -->
                <a href=\"";
        // line 127
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "index.php/cashier/credit_card/form\"><i class=\"fa fa-fw fa-credit-card\"></i> Credit Card</a>
            </li>
            
            <li>
                <!-- Update Link By dwi Wahyudi -->
                <a href=\"";
        // line 132
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "index.php/cashier/cash_advance/form\"><i class=\"fa fa-fw fa-bitcoin\"></i> Cash Advance</a>
            </li>
            
            <li>
                <!-- Update Link By dwi Wahyudi -->
                <a href=\"";
        // line 137
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "index.php/cashier/dp_customer/form\"><i class=\"fa fa-fw fa-arrow-circle-left\"></i> DP From Customer</a>
            </li>
            
            <li>
                <!-- Update Link By dwi Wahyudi -->
                <a href=\"";
        // line 142
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "index.php/cashier/dp_supplier/form\"><i class=\"fa fa-fw fa-arrow-circle-right\"></i> DP To Supplier</a>
            </li>
        </ul>
    </li>
    
    
    
    
    
    <li>
        <a href=\"";
        // line 152
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "index.php/main/logout\"><i class=\"fa fa-fw fa-sign-out\"></i> Logout</a>
    </li>
</ul>
</div>
<!-- /.navbar-collapse -->";
    }

    public function getTemplateName()
    {
        return "menu.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  278 => 152,  264 => 142,  255 => 137,  246 => 132,  237 => 127,  228 => 122,  219 => 117,  203 => 105,  194 => 100,  185 => 95,  177 => 91,  169 => 87,  161 => 83,  153 => 79,  140 => 70,  127 => 61,  120 => 58,  106 => 52,  99 => 49,  92 => 46,  82 => 40,  66 => 32,  56 => 26,  49 => 23,  42 => 20,  17 => 1,  302 => 170,  292 => 191,  286 => 189,  281 => 188,  276 => 187,  269 => 184,  254 => 171,  252 => 170,  242 => 162,  240 => 161,  215 => 140,  170 => 99,  151 => 84,  132 => 69,  113 => 55,  95 => 40,  88 => 37,  83 => 36,  78 => 35,  73 => 35,  61 => 26,  54 => 23,  47 => 20,  40 => 17,  33 => 14,  18 => 1,  50 => 22,  29 => 3,  26 => 8,);
    }
}
