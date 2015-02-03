<?php

/* credit_note/formcreditnote.html */
class __TwigTemplate_2a60ffaceeb1c976fcdd545625fdd0d1 extends Twig_Template
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
           Credit Note 
        </h1>

        <ol class=\"breadcrumb\">
            <li>
                <i class=\"fa fa-cube\"></i><a href=\"#\"> Accounting</a>
            </li>

            <li class=\"active\">
                        <i class=\"fa fa-cube\"></i> Credit Note
              </li>
        </ol>
    </div>
</div>
<!-- /.row -->
<form action=\"";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "index.php/accounting/credit_note/save\" method=\"post\" name=\"form1\">
<div class=\"row\">    
    <div class=\"col-lg-12\">
        <div class=\"form-group\">
            <div>
                <label>Branch</label>
            </div>    
        </div>
        <div class=\"form-group\">
            <div>
                <label>CN Number</label>
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
                <label>Customer</label>
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
                       <th nowrap=\"nowrap\">Invoice</th>
                       <th nowrap=\"nowrap\">Ccy</th>
                       <th nowrap=\"nowrap\">Amount</th>
                       <th nowrap=\"nowrap\">Rate</th>
                       <th nowrap=\"nowrap\">Adjust Product</th>
                       <th nowrap=\"nowrap\">Airline</th>
                       <th nowrap=\"nowrap\">Tour Code</th>
                       <th nowrap=\"nowrap\">User</th>                       
                  </tr>     
                  <tr>
                      <th nowrap=\"nowrap\">Group No</th>
                      <th nowrap=\"nowrap\" colspan=\"7\">Description</th>                       
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
        return "credit_note/formcreditnote.html";
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
