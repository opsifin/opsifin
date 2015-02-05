<?php

/* ppn_summary.html */
class __TwigTemplate_10d65a75ba93b615ea947f9c4a9b5a4f extends Twig_Template
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
            PPN Summary 
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
        <h4>PPN Summary</h4><br>
        <form action=\"";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "index.php/reports/ppn_summary/save\" method=\"post\" name=\"form1\">
    </div>
    <div class=\"form-group col-lg-12\">
         <div class=\"col-md-2\">
            <label>Branch</label>
        </div>
            <div class=\"col-md-3\">
                <select class=\"form-control\" id=\"branch\">
                    
                </select>
            </div>    
        </div>
    <div class=\"form-group col-lg-12\">
        <div class=\"col-md-2\">
            <label>Department</label>
        </div>
            <div class=\"col-md-3\">
                <select class=\"form-control\" id=\"user\">
                    
                </select>
            </div>    
        </div>
    <div class=\"form-group col-lg-12\">
            <div class=\"radio-inline\">
                  <label><input type=\"radio\" name=\"v_type\" value=\"invoice_date\"> Invoice Date</label>
            </div>
            <div class=\"radio-inline\">
                <label><input type=\"radio\"  name=\"v_type\" value=\"tax_date\"> Tax Date</label>
            </div>      
        </div>
    <div class=\"form-group col-lg-12\">
       <div class=\"col-md-2\">
               <label>From</label>
       </div>
       <div class=\"col-md-3\">
               <input type=\"date\" name=\"from\" id=\"datepicker\">
            </div>
    </div>
        <div class=\"form-group col-lg-12\">
        <div class=\"col-md-2\">
            <label>to</label>
        </div>
            <div class=\"col-md-3\">
               <input type=\"date\" name=\"to\" id=\"datepicker\">
            </div>
        </div>
    <div class=\"form-group col-lg-12\">
        <div class=\"col-md-2\">
            <label>Status</label>
        </div>
            <div class=\"col-md-3\">
                <select class=\"form-control\" id=\"user\">
                    
                </select>
            </div>    
        </div>
    <div class=\"form-group col-lg-12\">
        <div class=\"col-md-2\">
            <label>Type</label>
        </div>
            <div class=\"col-md-3\">
                <select class=\"form-control\" id=\"user\">
                    
                </select>
            </div>    
        </div>
    <div class=\"form-group col-lg-12\">
            <div class=\"checkbox-inline\">
                <label><input type=\"checkbox\" name=\"v_type\" value=\"original_ccy\"> Original Ccy</label>
            </div>
        </div>
    <div class=\"form-group col-lg-12\">
            <div class=\"checkbox-inline\">
                <label><input type=\"checkbox\" name=\"v_type\" value=\"Perodtype\"> By PerodType</label>
            </div>
        </div>
    <div class=\"form-group col-lg-12\">
        <div class=\"col-md-2\">
            <label>Rates</label>
        </div>
            <div class=\"col-md-3\">
                <select class=\"form-control\" id=\"user\">
                    
                </select>
            </div>    
        </div>
    <div class=\"form-group col-lg-12\">
        <div class=\"col-md-2\">
            <label>Costumer</label>
        </div>
            <div class=\"col-md-3\">
                <select class=\"form-control\" id=\"user\">
                    
                </select>
            </div>    
        </div>
    <input type=\"button\" class=\"btn btn-default\" value=\"Save\" onclick=\"saveAll()\">

";
    }

    public function getTemplateName()
    {
        return "ppn_summary.html";
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
