<?php

/* receipt_voucher/formrv.html */
class __TwigTemplate_e2cfdc813f666c99379ea858adc56fe9 extends Twig_Template
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
            Receipt Voucher 
        </h1>

        <ol class=\"breadcrumb\">
            <li>
                <i class=\"fa fa-cube\"></i><a href=\"#\"> Accounting</a>
            </li>

            <li class=\"active\">
                        <i class=\"fa fa-cube\"></i> Receipt Voucher 
              </li>
        </ol>
    </div>
</div>
<!-- /.row -->

<form action=\"";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "index.php/accounting/rv/save\" method=\"post\" name=\"form1\">
<input id=\"id\" name=\"id\" type=\"hidden\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["edit"]) ? $context["edit"] : null), "id_pv"), "html", null, true);
        echo "\" />
<table border=\"0\">
  
  <tr>
    <td valign=\"top\">
    <div class=\"form-group width150\">
        <label>Receipt Number</label>
        <input class=\"form-control\" id=\"no_pv\" name=\"no_pv\" type=\"text\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["rv_number"]) ? $context["rv_number"] : null), "html", null, true);
        echo "\" />
      </div>
        <div class=\"form-group width150\">
          <label>Date</label>
          <input class=\"form-control\" id=\"tanggal_pv\"  onfocus=\"gfPop.fPopCalendar(this);\" name=\"tanggal_pv\" type=\"text\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["edit"]) ? $context["edit"] : null), "tanggal_rv"), "html", null, true);
        echo "\" />
        </div>
      <div class=\"form-group width200\">
          <label>Receipt Type </label>
          <select class=\"form-control\" name=\"invoice_type\" id=\"invoice_type\">
            <option value=\"tiket\" ";
        // line 40
        if (($this->getAttribute((isset($context["edit"]) ? $context["edit"] : null), "invoice_type") == "tiket")) {
            echo " selected=\"selected\" ";
        }
        echo ">Ticket</option>
            <option value=\"hotel\" ";
        // line 41
        if (($this->getAttribute((isset($context["edit"]) ? $context["edit"] : null), "invoice_type") == "hotel")) {
            echo " selected=\"selected\" ";
        }
        echo ">Hotel</option>
            <option value=\"tour\" ";
        // line 42
        if (($this->getAttribute((isset($context["edit"]) ? $context["edit"] : null), "invoice_type") == "tour")) {
            echo " selected=\"selected\" ";
        }
        echo ">Tour</option>
            <option value=\"dokumen\" ";
        // line 43
        if (($this->getAttribute((isset($context["edit"]) ? $context["edit"] : null), "invoice_type") == "dokumen")) {
            echo " selected=\"selected\" ";
        }
        echo ">Document</option>
            <option value=\"others\" ";
        // line 44
        if (($this->getAttribute((isset($context["edit"]) ? $context["edit"] : null), "invoice_type") == "others")) {
            echo " selected=\"selected\" ";
        }
        echo ">Others</option>
          </select>
        </div>
      <div class=\"form-group width200\">
          <label>Invoice Number</label>
          <input class=\"form-control\" id=\"invoice_no\" name=\"invoice_no\" type=\"text\" value=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["edit"]) ? $context["edit"] : null), "invoice_no"), "html", null, true);
        echo "\" placeholder=\"Click to select\" onclick=\"loadInvoice()\" />
       \t\t<input type=\"hidden\" name=\"id_invoice\" id=\"id_invoice\" />
        </div>
      <div class=\"form-group width250\">
          <label> Total</label>
          <input class=\"form-control\" id=\"invoice_balance\" name=\"invoice_balance\" type=\"text\" value=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["edit"]) ? $context["edit"] : null), "invoice_balance"), "html", null, true);
        echo "\" />
      </div>
      <div class=\"form-group width150\">
        <label>Payment Method</label>
       <select class=\"form-control\" name=\"pay_method\" id=\"pay_method\">
            <option value=\"CC\" ";
        // line 59
        if (($this->getAttribute((isset($context["edit"]) ? $context["edit"] : null), "pay_method") == "CC")) {
            echo " selected=\"selected\" ";
        }
        echo ">Credit Card</option>
            <option value=\"Cheque\" ";
        // line 60
        if (($this->getAttribute((isset($context["edit"]) ? $context["edit"] : null), "pay_method") == "Cheque")) {
            echo " selected=\"selected\" ";
        }
        echo ">Cheque</option>
            <option value=\"BG\" ";
        // line 61
        if (($this->getAttribute((isset($context["edit"]) ? $context["edit"] : null), "pay_method") == "BG")) {
            echo " selected=\"selected\" ";
        }
        echo ">Bank of Giro</option>
            <option value=\"Cash\" ";
        // line 62
        if (($this->getAttribute((isset($context["edit"]) ? $context["edit"] : null), "pay_method") == "Cash")) {
            echo " selected=\"selected\" ";
        }
        echo ">Cash</option>
          </select>
      </div>
      
      </td>
    <td width=\"50\" valign=\"top\">&nbsp;</td>
      <td valign=\"top\"><div class=\"form-group width100\">
            <label>Discount</label>
            <input class=\"form-control width100\" id=\"discount\" name=\"discount\" type=\"text\" value=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["edit"]) ? $context["edit"] : null), "discount"), "html", null, true);
        echo "\" placeholder=\"%\" />
          </div>
          
           <div class=\"form-group width250\">
              <label>Paid Ammount</label>
              <input class=\"form-control\" id=\"paid_ammount\" name=\"paid_ammount\" type=\"text\" value=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["edit"]) ? $context["edit"] : null), "paid_ammount"), "html", null, true);
        echo "\" />
        </div>
            
        <div class=\"form-group width250\">
              <label>Keep Comm</label>
              <input class=\"form-control\" id=\"commission\" name=\"commission\" type=\"text\" value=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["edit"]) ? $context["edit"] : null), "commission"), "html", null, true);
        echo "\" />
            </div>
            
          <div class=\"form-group width100\">
              <label>Currency </label>
              <select id=\"currency\" name=\"currency\" class=\"form-control\" onchange=\"getRates()\">
                    <option value=\"\">Select</option>
                    ";
        // line 87
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["currency"]) ? $context["currency"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["curr"]) {
            // line 88
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
        // line 90
        echo "                </select>
          </div>
                  
            
          <div class=\"form-group width200\">
              <label>Convert Ammount (Rp)</label>
              <input class=\"form-control\" id=\"convert_ammount\" name=\"convert_ammount\" type=\"text\" value=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["edit"]) ? $context["edit"] : null), "convert_ammount"), "html", null, true);
        echo "\"  />
            </div>
            
            <div class=\"form-group width150\">
                <label>Agent Type</label>
               <input class=\"form-control\" id=\"agent_type\" name=\"agent_type\" type=\"text\" value=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["edit"]) ? $context["edit"] : null), "agent_type"), "html", null, true);
        echo "\" readonly=\"readonly\" />
              </div>
            <input type=\"hidden\" name=\"currency_balance\" id=\"currency_balance\" />
         </td>
        <td>&nbsp;</td>
    </tr>
</table>

<br>
<br>
    <div class=\"table-responsive\">
       <table class=\"table table-bordered table-hover table-striped\">
            <thead>
                <tr>
                    <th>Number</th>
                    <th>Memo</th>
                    <th>Debit</th>
                    <th>Kredit</th>
                    <th>Process</th>
                </tr>
            </thead>
       </table>
    </div>

    <input type=\"submit\" class=\"btn btn-default\" value=\"Save\">
</form>
<br>
<br>
<div class=\"table-responsive\">
   <table class=\"table table-bordered table-hover table-striped\">
        <thead>
            <tr>
              \t<th nowrap=\"nowrap\">RV Number</th>
                <th nowrap=\"nowrap\">Receipt Type</th>
                <th nowrap=\"nowrap\">Invoice Number</th>
                <th nowrap=\"nowrap\">Total</th>
                <th nowrap=\"nowrap\">Pay Method</th>
                <th nowrap=\"nowrap\">Discount (%)</th>
                <th nowrap=\"nowrap\">Pay Ammount</th>
                <th nowrap=\"nowrap\">Currency</th>
                <th nowrap=\"nowrap\">Process</th>
            </tr>
        </thead>
        
        <tbody>
            ";
        // line 146
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 147
            echo "            <tr>
              \t<td>";
            // line 148
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "no_pv"), "html", null, true);
            echo "</td>
                <td>";
            // line 149
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "invoice_type"), "html", null, true);
            echo "</td>
                <td>";
            // line 150
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "invoice_no"), "html", null, true);
            echo "</td>
                <td>";
            // line 151
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "invoice_balance"), "html", null, true);
            echo "</td>
                <td>";
            // line 152
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "pay_method"), "html", null, true);
            echo "</td>
                <td>";
            // line 153
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "discount"), "html", null, true);
            echo "</td>
                <td>";
            // line 154
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "paid_ammount"), "html", null, true);
            echo "</td>
                <td>";
            // line 155
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "currency"), "html", null, true);
            echo "</td>
                <td><a href=\"";
            // line 156
            echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
            echo "index.php/main/pv/form/?id=";
            echo twig_escape_filter($this->env, trim($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "id_pv")), "html", null, true);
            echo "\"><i class=\"fa fa-fw fa-pencil\"></i> Edit</a> <a href=\"javascript:void();\" onclick=\"deleteThis('";
            echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
            echo "index.php/main/pv/delete/?id=";
            echo twig_escape_filter($this->env, trim($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "id_pv")), "html", null, true);
            echo "')\"><i class=\"fa fa-fw fa-trash-o\"></i> Delete</a></td>
            </tr> 
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 158
        echo "           
    </table>
    
  ";
        // line 161
        echo (isset($context["links"]) ? $context["links"] : null);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "receipt_voucher/formrv.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  329 => 161,  324 => 158,  309 => 156,  305 => 155,  301 => 154,  297 => 153,  293 => 152,  289 => 151,  285 => 150,  281 => 149,  277 => 148,  274 => 147,  270 => 146,  222 => 101,  214 => 96,  206 => 90,  191 => 88,  187 => 87,  177 => 80,  169 => 75,  161 => 70,  148 => 62,  142 => 61,  136 => 60,  130 => 59,  122 => 54,  114 => 49,  104 => 44,  98 => 43,  92 => 42,  86 => 41,  80 => 40,  72 => 35,  65 => 31,  55 => 24,  51 => 23,  29 => 3,  26 => 2,);
    }
}
