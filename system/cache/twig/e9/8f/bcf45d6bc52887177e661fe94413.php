<?php

/* refund/formrefund.html */
class __TwigTemplate_e98fbcf45d6bc52887177e661fe94413 extends Twig_Template
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
           Refund
        </h1>

        <ol class=\"breadcrumb\">
            <li>
                <i class=\"fa fa-cube\"></i><a href=\"#\"> Accounting</a>
            </li>

            <li class=\"active\">
                        <i class=\"fa fa-cube\"></i> Refund
              </li>
        </ol>
    </div>
</div>
<!-- /.row -->
<form action=\"";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "index.php/accounting/refund/save\" method=\"post\" name=\"form1\">
<div class=\"row\">    
    <div class=\"col-lg-12\">
        <div class=\"form-group\">
            <div>
                <label>Branch</label>
            </div>    
        </div>
        <div class=\"form-group\">
            <div>
                <label>Refund Number</label>
            </div>    
        </div>
        <div class=\"form-group\">
            <div>
                <label>Transc Number</label>
            </div>    
        </div>
        <div class=\"form-group\">
            <div>
                <label>Collect Date</label>
            </div>    
        </div>
        <div class=\"form-group\">
            <div>
                <label>Date</label>
            </div>    
        </div>
        <div class=\"form-group\">
            <div>
                <label>Department</label>
            </div>    
        </div>
        <div class=\"form-group\">
            <div>
                <label>Type</label>
            </div>    
        </div>
        <div class=\"form-group\">
            <div>
                <label>Customer Name</label>
            </div>    
        </div>
        <div class=\"form-group\">
            <div>
                <label>Contact Person</label>
            </div>    
        </div>
    </div>    
</div>
<br>
<br>
<div class=\"row\">    
    <div class=\"col-lg-12\">
        <div class=\"table-responsive\">
          <table class=\"table table-bordered table-hover table-striped\">
              <thead>
                  <tr>
                       <th nowrap=\"nowrap\">Invoice No</th>
                       <th nowrap=\"nowrap\">Title</th>
                       <th nowrap=\"nowrap\">Name</th>
                       <th nowrap=\"nowrap\">Airline</th>
                       <th nowrap=\"nowrap\">Sector Flown</th>                  
                  </tr>     
                  <tr>
                      <th nowrap=\"nowrap\" colspan=\"2\">Description</th>
                      <th nowrap=\"nowrap\" colspan=\"2\">Airline Name</th>
                      <th nowrap=\"nowrap\">Used Type</th>
                  </tr>    
              </thead>
          </table>
        </div>    
    </div>    
</div>
<input type=\"submit\" class=\"btn btn-default\" value=\"Save\">
</form>  

<br>
<br>
<div class=\"row\">    
    <div class=\"col-lg-12\">
        <div class=\"table-responsive\">
          <table class=\"table table-bordered table-hover table-striped\">
               <thead>
                   <tr>
                       <th nowrap=\"nowrap\">Branch</th>
                       <th nowrap=\"nowrap\">CN Number</th>
                       <th nowrap=\"nowrap\">Date</th>
                       <th nowrap=\"nowrap\">Type</th>
                       <th nowrap=\"nowrap\">Dept</th>
                       <th nowrap=\"nowrap\">Customer</th>
                       <th nowrap=\"nowrap\">CP</th>
                       <th nowrap=\"nowrap\">Action</th>
                   </tr>
               </thead>
          </table>
        </div>    
    </div>    
</div>

";
    }

    public function getTemplateName()
    {
        return "refund/formrefund.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 22,  29 => 3,  26 => 2,);
    }
}
