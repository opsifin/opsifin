<?php

/* ledger_dialog.html */
class __TwigTemplate_fea9ee14361271757f0b52171c1fd8a0 extends Twig_Template
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
           Ledger Dialog
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
        echo "index.php/reports/ledger_dialog/save\" method=\"post\" name=\"form1\">
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
                <label>From COA</label>
            </div>
            <div class=\"col-md-3\">
                <select class=\"form-control\" id=\"from_coa\">
                    
                </select>
            </div>
        <div class=\"col-md-1\">
            <input class=\"form-control\" id=\"from_coa\" name=\"from_coa\" type=\"text\" value=\"";
        // line 49
        echo twig_escape_filter($this->env, (isset($context["from_coa"]) ? $context["from_coa"] : null), "html", null, true);
        echo "\" />
        </div>
        <div class=\"col-md-2\">
            <div class=\"checkbox-inline\">
                  <label><input type=\"checkbox\" name=\"v_type\" value=\"all_ccy\"> All Curency</label>
            </div>
        </div>
    </div>
    <div class=\"form-group col-lg-12\">
            <div class=\"col-md-2\">
                <label>To COA</label>
            </div>
            <div class=\"col-md-3\">
                <select class=\"form-control\" id=\"to_coa\">
                    
                </select>
            </div>
        <div class=\"col-md-1\">
            <input class=\"form-control\" id=\"to_coa\" name=\"to_coa\" type=\"text\" value=\"";
        // line 67
        echo twig_escape_filter($this->env, (isset($context["to_coa"]) ? $context["to_coa"] : null), "html", null, true);
        echo "\" />
        </div>
        <div class=\"col-md-2\">
            <div class=\"checkbox-inline\">
                  <label><input type=\"checkbox\" name=\"v_type\" value=\"all_ccy\"> Posted & Unposted</label>
            </div>
        </div>
    </div>
    <div class=\"form-group\">
        <label>Filter By</label>
            <div class=\"radio-inline\">
                  <label><input type=\"radio\" name=\"v_type\" value=\"criteria\"> Trans Date</label>
            </div>
        <div class=\"radio-inline\">
                  <label><input type=\"radio\" name=\"v_type\" value=\"criteria\"> Closing Date</label>
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
                <label>View Type</label>
                <select class=\"form-control\" id=\"view_type\">
                    
                </select>
            </div>    
   <div class=\"form-group width150\">
            <div>
                <label>Tour Type</label>
                <select class=\"form-control\" id=\"tour_type\">
                    
                </select>
            </div>  
    <div class=\"form-group width150\">
            <div>
                <label>Tour Code</label>
                <select class=\"form-control\" id=\"tour_code\">
                    
                </select>
            </div>
     <div class=\"form-group\">
        <label>Sort By</label>
            <div class=\"radio-inline\">
                  <label><input type=\"radio\" name=\"v_type\" value=\"trans_date\"> Trans Date</label>
            </div>
            <div class=\"radio-inline\">
                <label><input type=\"radio\"  name=\"v_type\" value=\"department\"> Department</label>
            </div>      
        </div>
<input type=\"button\" class=\"btn btn-default\" value=\"Save\" onclick=\"saveAll()\">
";
    }

    public function getTemplateName()
    {
        return "ledger_dialog.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 67,  80 => 49,  55 => 27,  29 => 3,  26 => 2,);
    }
}
