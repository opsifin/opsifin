<?php

/* bank_office_jurnal_summary.html */
class __TwigTemplate_df294e8df52da8f64f878fe5ffbb5f1e extends Twig_Template
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
        <h4>Jurnal Summary Dialog</h4><br>
        <form action=\"";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "index.php/reports/bank_office_jurnal_summary/save\" method=\"post\" name=\"form1\">
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
                  <label><input type=\"checkbox\" name=\"v_type\" value=\"summary\"> Summary</label>
            </div>
        </div>
    <div class=\"form-group width150\">
        <label>Jurnal No</label>
        <input class=\"form-control\" id=\"no_jutnal\" name=\"no_jurnal\" type=\"text\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, (isset($context["jurnal_number"]) ? $context["jurnal_number"] : null), "html", null, true);
        echo "\" />
      </div>
    <div class=\"form-group\">
            <div class=\"checkbox-inline\">
                  <label><input type=\"checkbox\" name=\"v_type\" value=\"all\"> All</label>
            </div>
        </div>
    <div class=\"form-group width150\">
            <div>
                <label>Department</label>
                <select class=\"form-control\" id=\"department\">
                    
                </select>
            </div>    
        </div>
    <div class=\"form-group width150\">
        <label>Reference No</label><br>
        <h6>Invoice or Other</h6>
        <input class=\"form-control\" id=\"no_jutnal\" name=\"no_reference\" type=\"text\" value=\"";
        // line 62
        echo twig_escape_filter($this->env, (isset($context["reference_number"]) ? $context["reference_number"] : null), "html", null, true);
        echo "\" />
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
    <div class=\"form-group\">
        <label>Criteria</label>
            <div class=\"checkbox-inline\">
                  <label><input type=\"checkbox\" name=\"v_type\" value=\"criteria\"> Posted & Unposted</label>
            </div>
        </div>
    <div class=\"form-group width200\">
          <label>Criteria</label>
          <select class=\"form-control\" name=\"criteria\" id=\"critera\">
            <option value=\"back_office_jurnal\" ";
        // line 90
        if (($this->getAttribute((isset($context["edit"]) ? $context["edit"] : null), "invoice_type") == "back_office_jurnal")) {
            echo " selected=\"selected\" ";
        }
        echo ">Back Office Jurnal</option>
            <option value=\"cair\" ";
        // line 91
        if (($this->getAttribute((isset($context["edit"]) ? $context["edit"] : null), "invoice_type") == "cair")) {
            echo " selected=\"selected\" ";
        }
        echo ">Cair</option>
            <option value=\"cash_req_sett\" ";
        // line 92
        if (($this->getAttribute((isset($context["edit"]) ? $context["edit"] : null), "invoice_type") == "cash_req_sett")) {
            echo " selected=\"selected\" ";
        }
        echo ">Cash Req Settlment Cancellation</option>
            <option value=\"cash_req_sett_cancel\" ";
        // line 93
        if (($this->getAttribute((isset($context["edit"]) ? $context["edit"] : null), "invoice_type") == "cash_req_sett_cancel")) {
            echo " selected=\"selected\" ";
        }
        echo ">Cash Request Cancellation</option>
            <option value=\"cash_req_cancel\" ";
        // line 94
        if (($this->getAttribute((isset($context["edit"]) ? $context["edit"] : null), "invoice_type") == "cash_req_cancel")) {
            echo " selected=\"selected\" ";
        }
        echo ">Cash Request Payment</option>
          </select>
        </div>
    
    <div class=\"form-group\">
            <div class=\"radio-inline\">
                  <label><input type=\"radio\" name=\"v_type\" value=\"criteria\"> Select All Criteria</label>
            </div>
        <div class=\"radio-inline\">
                  <label><input type=\"radio\" name=\"v_type\" value=\"criteria\"> Unselect All Criteria</label>
            </div>
        </div>
    
<input type=\"button\" class=\"btn btn-default\" value=\"Save\" onclick=\"saveAll()\">
";
    }

    public function getTemplateName()
    {
        return "bank_office_jurnal_summary.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 94,  145 => 93,  139 => 92,  133 => 91,  127 => 90,  96 => 62,  75 => 44,  55 => 27,  29 => 3,  26 => 2,);
    }
}
