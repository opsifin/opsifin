<?php

/* gain_loss_forex.html */
class __TwigTemplate_1205d81bdc0520ef8e0c43be680c9e72 extends Twig_Template
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
           Gain Loss Forex
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
        <h4>Gain Loss Forex Dialog</h4><br>
        <form action=\"";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "index.php/reports/gain_loss_forex/save\" method=\"post\" name=\"form1\">
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
        // line 48
        echo twig_escape_filter($this->env, (isset($context["from_coa"]) ? $context["from_coa"] : null), "html", null, true);
        echo "\" />
        </div>
        <div class=\"col-md-2\">
            <div class=\"checkbox-inline\">
                  <label><input type=\"checkbox\" name=\"v_type\" value=\"all_curency\"> All Curency</label>
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
        // line 66
        echo twig_escape_filter($this->env, (isset($context["to_coa"]) ? $context["to_coa"] : null), "html", null, true);
        echo "\" />
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
</div>  
    <input type=\"button\" class=\"btn btn-default\" value=\"Save\" onclick=\"saveAll()\">
";
    }

    public function getTemplateName()
    {
        return "gain_loss_forex.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 66,  79 => 48,  54 => 26,  29 => 3,  26 => 2,);
    }
}
