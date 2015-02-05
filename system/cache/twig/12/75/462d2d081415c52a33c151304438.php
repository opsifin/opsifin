<?php

/* tur_cost_summary.html */
class __TwigTemplate_1275462d2d081415c52a33c151304438 extends Twig_Template
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
            Tour Cost Summary
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
        <h4>Tour Profit/Cost Summary</h4><br>
        <form action=\"";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "index.php/reports/tur_cost_summary/save\" method=\"post\" name=\"form1\">
    </div>
    <div class=\"form-group col-md-12\">
        <div class=\"col-md-2\">
            <label>View</label>
        </div>
            <div class=\"col-md-3\">
                <select class=\"form-control\" id=\"view\">
                    
                </select>
            </div>    
        </div>
    <div class=\"form-group col-lg-12\">
        <div class=\"col-md-2\">
            <label>Type</label>
        </div>
        <div class=\"col-md-3\">
                <select class=\"form-control\" id=\"type\">
                    
                </select>
            </div>    
        </div>  
    <div class=\"form-group col-lg-12\">
        <div class=\"col-md-2\">
            <label>Category</label>
        </div>
            <div class=\"col-md-3\">
                <select class=\"form-control\" id=\"type\">
                    
                </select>
            </div>    
        </div>
    <div class=\"form-group col-lg-12\">
        <div class=\"col-md-2\">
            <label>Product Type</label>
            </div>
            <div class=\"col-md-3\">
                <select class=\"form-control\" id=\"product_type\">
                    
                </select>
            </div>
        <div class=\"col-md-2\">
            <label>Region</label>
        </div>
        <div class=\"col-md-3\">
                <select class=\"form-control\" id=\"region\">
                    
                </select>
            </div>
    </div>
    <div class=\"form-group col-lg-12\">
        <div class=\"col-md-2\">
            <label>Report Type</label>
        </div>
            <div class=\"col-md-3\">
                <select class=\"form-control\" id=\"report_type\">
                    
                </select>
            </div>    
        </div>
    <div class=\"form-group col-lg-12\">
            <div class=\"radio-inline\">
                  <label><input type=\"radio\" name=\"v_type\" value=\"tour_code\"> By Tour Code</label>
            </div>
        </div>
   <div class=\"form-group col-lg-12\">
       <div class=\"col-md-2\">
               <label>From</label>
       </div>
       <div class=\"col-md-3\">
               <input type=\"date\" name=\"from\" id=\"datepicker\">
            </div>  
        <div class=\"col-md-2\">
            <label>to</label>
        </div>
            <div class=\"col-md-3\">
               <input type=\"date\" name=\"to\" id=\"datepicker\">
            </div>
        </div>
    <div class=\"form-group col-lg-12\">
            <div class=\"radio-inline\">
                  <label><input type=\"radio\" name=\"v_type\" value=\"periode\"> By Periode</label>
            </div>
        </div>
    <div class=\"form-group col-lg-12\">
            <div class=\"radio-inline\">
                  <label><input type=\"radio\" name=\"v_type\" value=\"depature\"> Depature Date</label>
            </div>
            <div class=\"radio-inline\">
                <label><input type=\"radio\"  name=\"v_type\" value=\"invoice_date\"> Invoice Date</label>
            </div>
            <div class=\"radio-inline\">
                <label><input type=\"radio\"  name=\"v_type\" value=\"cosing_date\"> Cosing Date</label>
            </div>
        </div>
    <div class=\"form-group col-lg-12\">
       <div class=\"col-md-2\">
               <label>From</label>
       </div>
       <div class=\"col-md-3\">
               <input type=\"date\" name=\"from\" id=\"datepicker\">
            </div>  
        <div class=\"col-md-2\">
            <label>to</label>
        </div>
            <div class=\"col-md-3\">
               <input type=\"date\" name=\"to\" id=\"datepicker\">
            </div>
        </div>
    <div class=\"form-group col-lg-12\">
        <label>Sort By</label><br>
            <div class=\"radio-inline\">
                  <label><input type=\"radio\" name=\"v_type\" value=\"tour_code\"> Tour Code</label>
            </div>
            <div class=\"radio-inline\">
                <label><input type=\"radio\"  name=\"v_type\" value=\"Invoice\"> Invoice No</label>
            </div>
            <div class=\"radio-inline\">
                <label><input type=\"radio\"  name=\"v_type\" value=\"region\"> Region</label>
            </div>
        </div>
    <input type=\"button\" class=\"btn btn-default\" value=\"Save\" onclick=\"saveAll()\">
";
    }

    public function getTemplateName()
    {
        return "tur_cost_summary.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 27,  29 => 3,  26 => 2,);
    }
}
