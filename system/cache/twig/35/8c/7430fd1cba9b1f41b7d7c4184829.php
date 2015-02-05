<?php

/* outstanding_transaction.html */
class __TwigTemplate_358c7430fd1cba9b1f41b7d7c4184829 extends Twig_Template
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
            Outstanding Transaction 
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
        <h4>Outstanding Saldo</h4><br>
        <form action=\"";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "index.php/reports/outstanding_transaction/save\" method=\"post\" name=\"form1\">
    </div>
    <div class=\"form-group width150\">
            <div>
                <label>Branch</label>
                <select class=\"form-control\" id=\"branch\">
                    
                </select>
            </div>    
        </div>
    <div class=\"form-group width150\">
            <div>
                <label>Type</label>
                <select class=\"form-control\" id=\"type\">
                    
                </select>
            </div>    
        </div>
    <div class=\"form-group\">
            <div>
               <label>Date</label>
               <input type=\"date\" name=\"from\" id=\"datepicker\">
            </div>
        </div>  
    <div class=\"form-group width150\">
            <div>
                <h4>View Option</h4><br>
                <label>Department</label>
                <select class=\"form-control\" id=\"department\">
                    
                </select>
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
                <label>Currency</label>
                <select id=\"currency\" name=\"currency\" class=\"form-control\" onchange=\"getRates()\">
                    <option value=\"\">Select</option>
                    ";
        // line 73
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["currency"]) ? $context["currency"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["curr"]) {
            // line 74
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["curr"]) ? $context["curr"] : null), "currency"), "html", null, true);
            echo "\" ";
            if (($this->getAttribute((isset($context["curr"]) ? $context["curr"] : null), "currency") == $this->getAttribute((isset($context["edit"]) ? $context["edit"] : null), "currency"))) {
                echo " selected=\"selected\" ";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["curr"]) ? $context["curr"] : null), "currency"), "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['curr'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 76
        echo "                </select>
            </div>    
        </div>
    <div class=\"form-group width150\">
            <div>
                <label>User</label>
                <select class=\"form-control\" id=\"user\">
                    
                </select>
            </div>    
        </div>
    <div class=\"form-group width150\">
            <div>
                <label>Dealer</label>
                <select class=\"form-control\" id=\"dealer\">
                    
                </select>
            </div>    
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
                <label>Report Type</label>
                <select class=\"form-control\" id=\"report_type\">
                    
                </select>
            </div>    
        </div>

 <input type=\"button\" class=\"btn btn-default\" value=\"Save\" onclick=\"saveAll()\">  

    ";
    }

    public function getTemplateName()
    {
        return "outstanding_transaction.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 76,  108 => 74,  104 => 73,  55 => 27,  29 => 3,  26 => 2,);
    }
}
