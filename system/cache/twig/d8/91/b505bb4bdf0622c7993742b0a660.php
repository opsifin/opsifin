<?php

/* debit_note/formdebitnote.html */
class __TwigTemplate_d891b505bb4bdf0622c7993742b0a660 extends Twig_Template
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
           Debit Note 
        </h1>

        <ol class=\"breadcrumb\">
            <li>
                <i class=\"fa fa-cube\"></i><a href=\"#\"> Accounting</a>
            </li>

            <li class=\"active\">
                        <i class=\"fa fa-cube\"></i> Debit Note
              </li>
        </ol>
    </div>
</div>
<!-- /.row -->
<form action=\"";
        // line 22
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "index.php/accounting/debit_note/save\" method=\"post\" name=\"form1\">
<div class=\"row\">    
    <div class=\"col-lg-12\">
        <div class=\"form-group\">
            <div>
                <label>Branch</label>
            </div>    
        </div>
        <div class=\"form-group\">
            <div>
                <label>DN Number</label>
            </div>    
        </div>
        <div class=\"form-group\">
            <div>
                <label>Date</label>
            </div>    
        </div>
        <div class=\"form-group\">
            <div>
                <label>Type</label>
            </div>    
        </div>
        <div class=\"form-group\">
            <div>
                <label>Department</label>
            </div>    
        </div>
        <div class=\"form-group\">
            <div>
                <label>Supplier</label>
            </div>    
        </div>
        <div class=\"form-group\">
            <div>
                <label>CP</label>
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
                       <th nowrap=\"nowrap\">Code</th>
                       <th nowrap=\"nowrap\">Ccy</th>
                       <th nowrap=\"nowrap\">Amount</th>
                       <th nowrap=\"nowrap\">Rate</th>
                       <th nowrap=\"nowrap\">Tax Refund</th>
                       <th nowrap=\"nowrap\">Cancel Fee</th>
                       <th nowrap=\"nowrap\">Adm Fee</th>
                       <th nowrap=\"nowrap\">Product</th>                       
                  </tr>     
                  <tr>
                      <th nowrap=\"nowrap\">&nbsp;</th>
                      <th nowrap=\"nowrap\" colspan=\"2\">Airline Name</th>
                      <th nowrap=\"nowrap\">Invoice</th>
                      <th nowrap=\"nowrap\">Tour Code</th>
                      <th nowrap=\"nowrap\">Group No</th>
                      <th nowrap=\"nowrap\" colspan=\"2\">Description</th>
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
        return "debit_note/formdebitnote.html";
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
