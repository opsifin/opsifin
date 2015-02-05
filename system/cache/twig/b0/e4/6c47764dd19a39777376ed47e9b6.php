<?php

/* approval/formapproval.html */
class __TwigTemplate_b0e46c47764dd19a39777376ed47e9b6 extends Twig_Template
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
        echo "<!-- Page Heading -->
<div class=\"row\">
    <div class=\"col-lg-12\">
        <h1 class=\"page-header\">
            PV / RV Approval 
        </h1>

        <ol class=\"breadcrumb\">
            <li>
                <i class=\"fa fa-cube\"></i><a href=\"#\"> Accounting</a>
            </li>

            <li class=\"active\">
                        <i class=\"fa fa-cube\"></i> PV / RV Approval 
              </li>
        </ol>
    </div>
</div>
<!-- /.row -->
<div class=\"row\">
    <form action=\"";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "index.php/accounting/approval/save\" method=\"post\" name=\"form1\">
    <div class=\"col-sm-4\">
        <div class=\"form-group\">
            <div class=\"radio-inline\">
                  <label><input type=\"radio\" name=\"v_type\" value=\"payment\"> Payment Voucher</label>
            </div>
            <div class=\"radio-inline\">
                <label><input type=\"radio\"  name=\"v_type\" value=\"receipt\"> Receipt Voucher</label>
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
            <div class=\"\">
                <label>Authorized</label>
                <select class=\"form-control\" id=\"branch\">
                    
                </select>
            </div>    
        </div>
    </div>
    </form>    
</div>    

    
";
    }

    public function getTemplateName()
    {
        return "approval/formapproval.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 23,  29 => 3,  26 => 2,);
    }
}
