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
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
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
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "index.php/main/coatype/form\"><i class=\"fa fa-fw fa-cubes\"></i> COA Type</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "index.php/main/coagroup/form\"><i class=\"fa fa-fw fa-cubes\"></i> COA Group</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "index.php/main/coa/form\"><i class=\"fa fa-fw fa-cube\"></i> COA</a>
                    </li>
                </ul>
            </li>
    
            <li>
                <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "index.php/main/company/form\"><i class=\"fa fa-fw fa-bank\"></i> Company Settings</a>
            </li>
            <li>
                <a href=\"";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "index.php/main/coa/setbalance\"><i class=\"fa fa-fw fa-cube\"></i> COA Balance</a>
            </li>
            <li>
            
            
               <!-- <a href=\"";
        // line 40
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "index.php/main/coasettings/form\"><i class=\"fa fa-fw fa-cube\"></i> COA Settings</a>-->
            
            
            \t<a href=\"javascript:;\" data-toggle=\"collapse\" data-target=\"#settingchild\"><i class=\"fa fa-fw fa-gear\"></i>  COA Settings <i class=\"fa fa-fw fa-caret-down\"></i></a>
                <ul id=\"settingchild\" class=\"collapse\" style=\"list-style-type:none; margin-left:10px;\">
                    <li>
                        <a href=\"";
        // line 46
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "index.php/main/coasettings/formlcc\"><i class=\"fa fa-fw fa-cube\"></i> LCC Ticketing</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 49
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "index.php/main/coasettings/formbsp\"><i class=\"fa fa-fw fa-cube\"></i> BSP Ticketing</a>
                    </li>
                    <li>
                    \t<a href=\"";
        // line 52
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "index.php/main/coasettings/formhotel\"><i class=\"fa fa-fw fa-cube\"></i> Hotel</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 55
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "index.php/main/coasettings/formdocument\"><i class=\"fa fa-fw fa-cube\"></i> Document</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 58
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "index.php/main/coasettings/formtour\"><i class=\"fa fa-fw fa-cube\"></i> Tour</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 61
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "index.php/main/coasettings/formothers\"><i class=\"fa fa-fw fa-cube\"></i> Others</a>
                    </li>            
                </ul>
        
            
            
            
            </li>
            <li>
                <a href=\"";
        // line 70
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
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
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "index.php/main/jurnal/form\"><i class=\"fa fa-fw fa-cube\"></i> Journal</a>
            </li>
            
            <li>
                <a href=\"";
        // line 83
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "index.php/main/pv/form\"><i class=\"fa fa-fw fa-bookmark-o\"></i> Payment Voucher</a>
            </li>
            <li>
                <!-- Update Link By dwi Wahyudi -->
                <a href=\"";
        // line 87
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "index.php/accounting/rv/form\"><i class=\"fa fa-fw fa-bookmark-o\"></i> Receipt Voucher</a>
            </li>
            <li>
                <!-- Update Link By dwi Wahyudi -->
                <a href=\"";
        // line 91
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "index.php/accounting/approval/form\"><i class=\"fa fa-fw fa-hand-o-down\"></i> PV/RV Approval</a>
            </li>
            <li>
                <!-- Update Link By dwi Wahyudi -->
                <a href=\"";
        // line 95
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "index.php/accounting/credit_note/form\"><i class=\"fa fa-fw fa-cube\"></i> Credit Note</a>
            </li>
            
            <li>
                <!-- Update Link By dwi Wahyudi -->
                <a href=\"";
        // line 100
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "index.php/accounting/debit_note/form\"><i class=\"fa fa-fw fa-cube\"></i> Debit Note</a>
            </li>
            
            <li>
                <!-- Update Link By dwi Wahyudi -->
                <a href=\"";
        // line 105
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
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
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "index.php/cashier/sales_counter/form\"><i class=\"fa fa-fw fa-tasks\"></i> Sales Counter</a>
            </li>
            
            <li>
                <!-- Update Link By dwi Wahyudi -->
                <a href=\"";
        // line 122
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "index.php/cashier/cheque_bg/form\"><i class=\"fa fa-fw fa-ticket\"></i> Cheque/BG</a>
            </li>
            
            <li>
                <!-- Update Link By dwi Wahyudi -->
                <a href=\"";
        // line 127
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "index.php/cashier/credit_card/form\"><i class=\"fa fa-fw fa-credit-card\"></i> Credit Card</a>
            </li>
            
            <li>
                <!-- Update Link By dwi Wahyudi -->
                <a href=\"";
        // line 132
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "index.php/cashier/cash_advance/form\"><i class=\"fa fa-fw fa-bitcoin\"></i> Cash Advance</a>
            </li>
            
            <li>
                <!-- Update Link By dwi Wahyudi -->
                <a href=\"";
        // line 137
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "index.php/cashier/dp_customer/form\"><i class=\"fa fa-fw fa-arrow-circle-left\"></i> DP From Customer</a>
            </li>
            
            <li>
                <!-- Update Link By dwi Wahyudi -->
                <a href=\"";
        // line 142
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "index.php/cashier/dp_supplier/form\"><i class=\"fa fa-fw fa-arrow-circle-right\"></i> DP To Supplier</a>
            </li>
        </ul>
    </li>
    
    
    
    
    
    <li>
        <a href=\"";
        // line 152
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
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
        return array (  251 => 152,  238 => 142,  230 => 137,  222 => 132,  214 => 127,  206 => 122,  198 => 117,  183 => 105,  175 => 100,  167 => 95,  160 => 91,  153 => 87,  146 => 83,  127 => 70,  115 => 61,  109 => 58,  97 => 52,  91 => 49,  85 => 46,  53 => 26,  47 => 23,  41 => 20,  17 => 1,  282 => 170,  273 => 191,  268 => 189,  264 => 188,  260 => 187,  254 => 184,  239 => 171,  237 => 170,  227 => 162,  225 => 161,  201 => 140,  157 => 99,  139 => 79,  121 => 69,  103 => 55,  86 => 40,  80 => 37,  76 => 40,  72 => 35,  68 => 35,  57 => 26,  51 => 23,  45 => 20,  39 => 17,  33 => 14,  18 => 1,  271 => 161,  256 => 159,  252 => 158,  248 => 157,  244 => 156,  240 => 155,  236 => 154,  232 => 153,  228 => 152,  224 => 151,  221 => 150,  217 => 149,  187 => 121,  172 => 111,  168 => 110,  133 => 78,  120 => 68,  110 => 61,  101 => 55,  93 => 50,  79 => 39,  70 => 33,  62 => 32,  54 => 23,  50 => 22,  29 => 3,  26 => 8,);
    }
}
