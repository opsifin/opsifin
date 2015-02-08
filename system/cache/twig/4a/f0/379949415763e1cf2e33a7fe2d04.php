<?php

/* trial_balance.html */
class __TwigTemplate_4af0379949415763e1cf2e33a7fe2d04 extends Twig_Template
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
           Trial Balance
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
        <h4>Trial Balance Dialog</h4><br>
        <form action=\"";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "index.php/reports/trial_balance/save\" method=\"post\" name=\"form1\">
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
            <label>Period</label>
        </div>
        <div class=\"col-md-3\">
            <input class=\"form-control\" id=\"period\" name=\"period\" type=\"text\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["period"]) ? $context["period"] : null), "html", null, true);
        echo "\" />
        </div>
        <div class=\"col-md-2\">
            <h6>[MM/YYYY]</h6>
        </div>
        <div class=\"col-md-2\">
            <div class=\"checkbox-inline\">
                  <label><input type=\"checkbox\" name=\"v_type\" value=\"from_jan\"> From Jan</label>
            </div>
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
            <h4>Report Currency Rate</h4>
    </div>
    <div class=\"col-lg-12\">
        <div class=\"table-responsive\">
            <table class=\"table table-bordered table-hover table-striped\">
              <thead>
                  <tr>
                  </tr>
              </thead>
            </table>
        </div>
    </div>
</div>

    <input type=\"button\" class=\"btn btn-default\" value=\"Save\" onclick=\"saveAll()\">
";
    }

    public function getTemplateName()
    {
        return "trial_balance.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 43,  54 => 26,  29 => 3,  26 => 2,);
    }
}
