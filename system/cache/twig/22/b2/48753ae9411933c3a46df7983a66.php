<?php

/* refund_summary.html */
class __TwigTemplate_22b248753ae9411933c3a46df7983a66 extends Twig_Template
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
            Refund Summary 
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
        <h4>Refund Summary</h4><br>
        <form action=\"";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "index.php/reports/refund_summary/save\" method=\"post\" name=\"form1\">
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
                <select class=\"form-control\" id=\"department\">
                    
                </select>
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
            <label>By</label>
        </div>
        <div class=\"col-md-2\">
            <div class=\"radio-inline\">
                  <label><input type=\"radio\" name=\"v_type\" value=\"refund\"> Refund Date</label>
            </div>
        </div>
            <div class=\"radio-inline\">
                <label><input type=\"radio\"  name=\"v_type\" value=\"cs_date\"> Cs Date</label>
            </div>      
        </div>
    <div class=\"form-group col-lg-12\">
       <div class=\"col-md-2\">
               <label>From</label>
       </div>
       <div class=\"col-md-3\">
               <input onfocus=\"gfPop.fPopCalendar(this);\" class=\"form-control\" id=\"trans_date\" name=\"trans_date\" type=\"text\" value=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["main"]) ? $context["main"] : null), "trans_date"), "html", null, true);
        echo "\" required>
            </div>
    </div>
        <div class=\"form-group col-lg-12\">
        <div class=\"col-md-2\">
            <label>to</label>
        </div>
            <div class=\"col-md-3\">
               <input onfocus=\"gfPop.fPopCalendar(this);\" class=\"form-control\" id=\"trans_date\" name=\"trans_date\" type=\"text\" value=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["main"]) ? $context["main"] : null), "trans_date"), "html", null, true);
        echo "\" required>
            </div>
        </div>
    <div class=\"form-group col-lg-12\">
        <h4>View Option</h4><br>
        <div class=\"col-md-2\">
            <label>User</label>
        </div>
            <div class=\"col-md-3\">
                <select class=\"form-control\" id=\"user\">
                    
                </select>
            </div>    
        </div>
    <div class=\"form-group col-lg-12\">
         <div class=\"col-md-2\">
            <label>View Type</label>
        </div>
            <div class=\"col-md-3\">
                <select class=\"form-control\" id=\"view_type\">
                    
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
            <label>Sort By</label>
        </div>
            <div class=\"col-md-3\">
                <select class=\"form-control\" id=\"sort_by\">
                    
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
        </div>
    </div>
 <input type=\"button\" class=\"btn btn-default\" value=\"Save\" onclick=\"saveAll()\">
";
    }

    public function getTemplateName()
    {
        return "refund_summary.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 85,  108 => 77,  55 => 27,  29 => 3,  26 => 2,);
    }
}
