<?php

/* sub_ledger.html */
class __TwigTemplate_49b258ce9f0f1cae79e99caadd57cd92 extends Twig_Template
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
           Sub Ledger
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
        echo "index.php/reports/sub_ledger/save\" method=\"post\" name=\"form1\">
    </div>
    <div class=\"form-group col-lg-12\">
         <div class=\"col-md-2\">
            <label>Branch No</label>
        </div>
            <div class=\"col-md-3\">
                <select class=\"form-control\" id=\"no_branch\">
                    
                </select>
            </div>    
        </div>
    <div class=\"form-group col-lg-12\">
            <div class=\"col-md-2\">
                <label>COA No</label>
            </div>
            <div class=\"col-md-3\">
                <select class=\"form-control\" id=\"no_coa\">
                    
                </select>
            </div>
        <div class=\"col-md-1\">
            <input class=\"form-control\" id=\"no_coa\" name=\"to_coa\" type=\"text\" value=\"";
        // line 49
        echo twig_escape_filter($this->env, (isset($context["no_coa"]) ? $context["no_coa"] : null), "html", null, true);
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
        <div class=\"col-md-2\">
            <div class=\"radio-inline\">
                  <label><input type=\"radio\" name=\"v_type\" value=\"post_unpost\"> Posted & Unposted</label>
            </div>
        </div>
    </div>
    <div class=\"form-group col-lg-12\">
        <div class=\"col-md-2\">
            <label>to</label>
        </div>
            <div class=\"col-md-3\">
               <input type=\"date\" name=\"to\" id=\"datepicker\">
            </div>
        <div class=\"col-md-2\">
            <div class=\"radio-inline\">
                  <label><input type=\"radio\" name=\"v_type\" value=\"cost_supp\"> Costumer & Supplier</label>
            </div>
        </div>
    </div>
    <div class=\"form-group col-lg-12\">
         <div class=\"col-md-2\">
            <label>By</label>
        </div>
            <div class=\"col-md-3\">
                <select class=\"form-control\" id=\"by\">
                    
                </select>
            </div>
        <div class=\"col-md-2\">
            <div class=\"checkbox-inline\">
                  <label><input type=\"checkbox\" name=\"v_type\" value=\"by_agent\"> By Agent</label>
            </div>
        </div>
        <div class=\"col-md-2\">
            <div class=\"checkbox-inline\">
                  <label><input type=\"checkbox\" name=\"v_type\" value=\"bsp\"> BSP</label>
            </div>
        </div>
    </div>
    <div class=\"form-group col-lg-12\">
         <div class=\"col-md-2\">
            <label>Costumer</label>
        </div>
            <div class=\"col-md-3\">
                <select class=\"form-control\" id=\"costumer\">
                    
                </select>
            </div>    
        </div>
    <div class=\"form-group col-lg-12\">
         <div class=\"col-md-2\">
            <label>Supplier</label>
        </div>
            <div class=\"col-md-3\">
                <select class=\"form-control\" id=\"supplier\">
                    
                </select>
            </div>    
        </div>
    <div class=\"form-group col-lg-12\">
         <div class=\"col-md-2\">
            <label>Airline</label>
        </div>
            <div class=\"col-md-3\">
                <select class=\"form-control\" id=\"airline\">
                    
                </select>
            </div>
        <div class=\"col-md-2\">
            <div class=\"checkbox-inline\">
                  <label><input type=\"checkbox\" name=\"v_type\" value=\"all\"> All</label>
            </div>
        </div>
    </div>
        <div class=\"form-group col-lg-12\">
         <div class=\"col-md-2\">
            <label>Tour Type</label>
        </div>
            <div class=\"col-md-3\">
                <select class=\"form-control\" id=\"tour_type\">
                    
                </select>
            </div>    
        </div>
        <div class=\"form-group col-lg-12\">
         <div class=\"col-md-2\">
            <label>Tour Code</label>
        </div>
            <div class=\"col-md-3\">
                <select class=\"form-control\" id=\"tour_code\">
                    
                </select>
            </div>    
        </div>
        <div class=\"form-group col-lg-12\">
         <div class=\"col-md-2\">
            <label>Sort By</label>
        </div>
            <div class=\"col-md-3\">
                <select class=\"form-control\" id=\"sort_by\">
                    
                </select>
            </div>    
        </div>
<input type=\"button\" class=\"btn btn-default\" value=\"Save\" onclick=\"saveAll()\">
";
    }

    public function getTemplateName()
    {
        return "sub_ledger.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 49,  55 => 27,  29 => 3,  26 => 2,);
    }
}
