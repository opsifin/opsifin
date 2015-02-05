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
    <div class=\"form-group width150\">
            <div>
                <label>Branch No</label>
                <select class=\"form-control\" id=\"branch_no\">
                    
                </select>
            </div>    
        </div>
    <div class=\"form-group width150\">
            <div>
                <label>COA No</label>
                <select class=\"form-control\" id=\"coa_no\">
                    
                </select>
            </div>    
        </div>
    <div class=\"form-group\">
            <div class=\"checkbox-inline\">
                  <label><input type=\"checkbox\" name=\"v_type\" value=\"post_unpost\"> Posted & Unposted</label>
            </div>
    <div class=\"form-group\">
            <div>
               <label>From</label>
               <input type=\"date\" name=\"from\" id=\"datepicker\">
            </div>
        </div>
        <div class=\"form-group\">
            <div class=\"checkbox-inline\">
                  <label><input type=\"checkbox\" name=\"v_type\" value=\"post_unpost\"> Costumer & Supplier</label>
            </div>
        <div class=\"form-group\">
            <div>
               <label>to</label>
               <input type=\"date\" name=\"to\" id=\"datepicker\">
            </div>
        </div>
    <div class=\"form-group width150\">
            <div>
                <label>By</label>
                <select class=\"form-control\" id=\"by\">
                    
                </select>
            </div>    
        </div>
    <div class=\"form-group\">
        <div class=\"checkbox-inline\">
                  <label><input type=\"checkbox\" name=\"v_type\" value=\"by_agent\"> By Agent</label>
            </div>
        <div class=\"checkbox-inline\">
                  <label><input type=\"checkbox\" name=\"v_type\" value=\"bsp\"> BSP</label>
            </div>
        </div>
            <div class=\"form-group width150\">
            <div>
                <label>Costumer</label>
                <select class=\"form-control\" id=\"costumer\">
                    
                </select>
            </div>    
        </div>
    <div class=\"form-group width150\">
            <div>
                <label>Supplier</label>
                <select class=\"form-control\" id=\"supplier\">
                    
                </select>
            </div>    
        </div>
    <div class=\"form-group\">
            <div class=\"checkbox-inline\">
                  <label><input type=\"checkbox\" name=\"v_type\" value=\"all\"> All</label>
            </div>
    <div class=\"form-group width150\">
            <div>
                <label>Airline</label>
                <select class=\"form-control\" id=\"airline\">
                    
                </select>
            </div>    
        </div>
        <div class=\"form-group width150\">
            <div>
                <label>Tour Type</label>
                <select class=\"form-control\" id=\"tour_type\">
                    
                </select>
            </div>    
        </div>
        <div class=\"form-group width150\">
            <div>
                <label>Tour Code</label>
                <select class=\"form-control\" id=\"tour_code\">
                    
                </select>
            </div>    
        </div>
        <div class=\"form-group width150\">
            <div>
                <label>Sort By</label>
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
        return array (  55 => 27,  29 => 3,  26 => 2,);
    }
}
