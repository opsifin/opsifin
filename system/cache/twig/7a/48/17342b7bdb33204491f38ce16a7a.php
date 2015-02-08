<?php

/* balance_sheet_consolidation.html */
class __TwigTemplate_7a4817342b7bdb33204491f38ce16a7a extends Twig_Template
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
           Balance Sheet Consolidation
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
        <h4>Consolidation Financial Reports</h4><br>
        <form action=\"";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "index.php/reports/balance_sheet_consolidation/save\" method=\"post\" name=\"form1\">
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
            <label>Report Type</label>
        </div>
            <div class=\"col-md-3\">
                <select class=\"form-control\" id=\"report_type\">
                    
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
            <label>View</label>
        </div>
            <div class=\"col-md-3\">
                <select class=\"form-control\" id=\"view\">
                    
                </select>
            </div>    
    </div>
    <div class=\"form-group col-lg-12\">
        <div class=\"col-md-2\">
            <label>Period</label>
        </div>
        <div class=\"col-md-3\">
            <input class=\"form-control\" id=\"period\" name=\"period\" type=\"text\" value=\"";
        // line 73
        echo twig_escape_filter($this->env, (isset($context["period"]) ? $context["period"] : null), "html", null, true);
        echo "\" />
        </div>
        <div class=\"col-md-2\">
            <h6>[MM/YYYY]</h6>
        </div>
    </div>
</div>
 <input type=\"button\" class=\"btn btn-default\" value=\"Save\" onclick=\"saveAll()\">
";
    }

    public function getTemplateName()
    {
        return "balance_sheet_consolidation.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 73,  54 => 26,  29 => 3,  26 => 2,);
    }
}
