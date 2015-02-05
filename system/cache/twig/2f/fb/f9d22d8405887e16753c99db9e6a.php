<?php

/* summary_of_sales.html */
class __TwigTemplate_2ffbf9d22d8405887e16753c99db9e6a extends Twig_Template
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
            Summary Of Sales 
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
        <h4>Sale Summary</h4><br>
        <form action=\"";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "index.php/reports/summary_of_sales/save\" method=\"post\" name=\"form1\">
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
            <div>
                <label>Branch</label>
                <select class=\"form-control\" id=\"branch\">
                    
                </select>
            </div>    
        </div>
    
    <div class=\"form-group\">
            <div>
                <label>Department</label>
                <select class=\"form-control\" id=\"department\">
                    
                </select>
            </div>    
        </div>
    <div class=\"form-group\">
            <div>
                <label>Product Code</label>
                <select class=\"form-control\" id=\"product_code\">
                    
                </select>
            </div>    
        </div>
    <div class=\"form-group\">
        <label>Report Type</label><br>
            <div class=\"checkbox-inline\">
                  <label><input type=\"checkbox\" name=\"v_type\" value=\"dialy_sales\"> Daily Sales By Currency</label>
            </div>      
        </div>
    
<input type=\"button\" class=\"btn btn-default\" value=\"Save\" onclick=\"saveAll()\">
";
    }

    public function getTemplateName()
    {
        return "summary_of_sales.html";
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
