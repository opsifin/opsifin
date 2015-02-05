<?php

/* jurnal_memorial_summary.html */
class __TwigTemplate_09e2c622d1a6e7df3f21e62d8853760c extends Twig_Template
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
            Jurnal Memorial Summary
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
  <div class=\"col-sm-9\">
        <h4>Jurnal Memorial Summary</h4><br>
        <form action=\"";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "index.php/reports/jurnal_memorial_summary/save\" method=\"post\" name=\"form1\">
    </div>
    <div class=\"form-group width150\">
            <div>
                <label>Branch</label>
                <select class=\"form-control\" id=\"branch\">
                    
                </select>
            </div>    
        </div>
    <div class=\"form-group width150\">
        <label>JM No</label>
        <input class=\"form-control\" id=\"no_jm\" name=\"no_jm\" type=\"text\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["jm_number"]) ? $context["jm_number"] : null), "html", null, true);
        echo "\" />
      </div>
    <div class=\"form-group\">
            <div class=\"checkbox-inline\">
                  <label><input type=\"checkbox\" name=\"v_type\" value=\"all_ccy\"> All Ccy</label>
            </div>
    <div class=\"form-group width150\">
            <div>
                <label>From COA</label>
                <select class=\"form-control\" id=\"from_coa\">
                    
                </select>
            </div>    
        </div>
    
    <div class=\"form-group width150\">
            <div>
                <label>To COA</label>
                <select class=\"form-control\" id=\"to_coa\">
                    
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
                <label>Status</label>
                <select class=\"form-control\" id=\"status\">
                    
                </select>
            </div>    
        </div>
         <div class=\"form-group width150\">
            <div>
                <label>Sort</label>
                <select class=\"form-control\" id=\"sort\">
                    
                </select>
            </div>    
        </div>
         <input type=\"button\" class=\"btn btn-default\" value=\"Save\" onclick=\"saveAll()\">
";
    }

    public function getTemplateName()
    {
        return "jurnal_memorial_summary.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 39,  55 => 27,  29 => 3,  26 => 2,);
    }
}
