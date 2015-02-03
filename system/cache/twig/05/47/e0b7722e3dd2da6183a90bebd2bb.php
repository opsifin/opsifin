<?php

/* formjurnal.html */
class __TwigTemplate_0547e0b7722e3dd2da6183a90bebd2bb extends Twig_Template
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
            Journal 
        </h1>

        <ol class=\"breadcrumb\">
            <li>
                <i class=\"fa fa-cube\"></i><a href=\"#\"> Accounting</a>
            </li>

            <li class=\"active\">
                        <i class=\"fa fa-cube\"></i> Journal Entry 
              </li>
        </ol>
    </div>
</div>
<!-- /.row -->

<form action=\"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "index.php/main/jurnal/save\" method=\"post\" name=\"form1\">
<input type=\"hidden\" name=\"id\" id=\"id\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["id_jurnal"]) ? $context["id_jurnal"] : null), "html", null, true);
        echo "\" />
<input type=\"hidden\" name=\"id_detail\" id=\"id_detail\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["edit_row"]) ? $context["edit_row"] : null), "id"), "html", null, true);
        echo "\" />

<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
<tr>
    <td>
        <div class=\"form-group width150\">
            <label>Date</label>
            <input onfocus=\"gfPop.fPopCalendar(this);\" class=\"form-control\" id=\"trans_date\" name=\"trans_date\" type=\"text\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["main"]) ? $context["main"] : null), "trans_date"), "html", null, true);
        echo "\" required>
        </div>
    </td>
    <td>
        <div class=\"form-group width150\">
            <label style=\"margin-left:20px;\">Reff</label>
            <input class=\"form-control\" id=\"reff\" name=\"reff\" type=\"text\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["main"]) ? $context["main"] : null), "reff"), "html", null, true);
        echo "\" style=\"margin-left:20px;\" required>
        </div>
    </td>
</tr>
</table><br />


<div class=\"table-responsive\">
   <table class=\"table table-bordered table-hover table-striped\">
        <thead>
            <tr>
              \t<th>Number</th>
                <th>Memo</th>
                <th>Debit</th>
                <th>Kredit</th>
                <th>Process</th>
            </tr>
        </thead>
        
        <tbody>
        \t
            
            
            ";
        // line 62
        $context["deb"] = 0;
        // line 63
        echo "            ";
        $context["kre"] = 0;
        // line 64
        echo "            
            ";
        // line 65
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["edit"]) ? $context["edit"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 66
            echo "            ";
            if (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "nilai") <= 0)) {
                // line 67
                echo "            \t";
                $context["kredit"] = $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "nilai");
                // line 68
                echo "                ";
                $context["debit"] = "";
                // line 69
                echo "                ";
                $context["kre"] = ((isset($context["kre"]) ? $context["kre"] : null) + (isset($context["kredit"]) ? $context["kredit"] : null));
                // line 70
                echo "            ";
            } else {
                // line 71
                echo "            \t";
                $context["debit"] = $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "nilai");
                // line 72
                echo "                ";
                $context["kredit"] = "";
                // line 73
                echo "                ";
                $context["deb"] = ((isset($context["deb"]) ? $context["deb"] : null) + (isset($context["debit"]) ? $context["debit"] : null));
                // line 74
                echo "\t\t\t";
            }
            echo "                        
            <tr>
              \t<td>
                \t<select name=\"penjualan_tour\"  id=\"penjualan_tour\" class=\"form-control\" disabled=\"disabled\">
                        ";
            // line 78
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["coa"]) ? $context["coa"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["coa"]) {
                // line 79
                echo "                        <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coa"]) ? $context["coa"] : null), "nomor_acc"), "html", null, true);
                echo "\" ";
                if (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "nomor_acc") == $this->getAttribute((isset($context["coa"]) ? $context["coa"] : null), "nomor_acc"))) {
                    echo " selected=\"selected\" ";
                }
                echo ">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coa"]) ? $context["coa"] : null), "nomor_acc"), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coa"]) ? $context["coa"] : null), "nama_acc"), "html", null, true);
                echo "</option>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coa'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 81
            echo "                    </select>                </td>
                <td><input class=\"form-control\" id=\"memo\" name=\"memo\" type=\"text\" value=\"";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "memo"), "html", null, true);
            echo "\" readonly=\"readonly\"></td>
                <td><input class=\"form-control\" id=\"debit\" name=\"debit\" type=\"text\" value=\"";
            // line 83
            echo twig_escape_filter($this->env, (isset($context["debit"]) ? $context["debit"] : null), "html", null, true);
            echo "\" readonly=\"readonly\"></td>
                <td><input class=\"form-control\" id=\"kredit\" name=\"kredit\" type=\"text\" value=\"";
            // line 84
            echo twig_escape_filter($this->env, (isset($context["kredit"]) ? $context["kredit"] : null), "html", null, true);
            echo "\" readonly=\"readonly\"></td>
                <td>
                \t<a href=\"";
            // line 86
            echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
            echo "index.php/main/jurnal/form/";
            echo twig_escape_filter($this->env, (isset($context["id_jurnal"]) ? $context["id_jurnal"] : null), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "id"), "html", null, true);
            echo "\"><i class=\"fa fa-fw fa-pencil\"></i> Edit</a> <a href=\"javascript:void();\" onclick=\"deleteThis('";
            echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
            echo "index.php/coa/form/delete/?id=";
            echo twig_escape_filter($this->env, trim($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "id_acc")), "html", null, true);
            echo "')\"><i class=\"fa fa-fw fa-trash-o\"></i> Delete</a>                </td>
            </tr>
            
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 90
        echo "        \t  
            <tr>
              \t<td>
                \t";
        // line 93
        $context["debitEdit"] = "";
        // line 94
        echo "                    ";
        $context["kreditEdit"] = "";
        // line 95
        echo "                \t";
        if (($this->getAttribute((isset($context["edit_row"]) ? $context["edit_row"] : null), "id") != "")) {
            // line 96
            echo "                    \t";
            if (($this->getAttribute((isset($context["edit_row"]) ? $context["edit_row"] : null), "nilai") <= 0)) {
                // line 97
                echo "                        ";
                $context["kreditEdit"] = abs($this->getAttribute((isset($context["edit_row"]) ? $context["edit_row"] : null), "nilai"));
                // line 98
                echo "                        ";
            } else {
                // line 99
                echo "                    \t";
                $context["debitEdit"] = $this->getAttribute((isset($context["edit_row"]) ? $context["edit_row"] : null), "nilai");
                // line 100
                echo "                        ";
            }
            // line 101
            echo "                    ";
        }
        // line 102
        echo "               \t  <select name=\"nomor_acc\"  id=\"nomor_acc\" class=\"form-control\">
                        ";
        // line 103
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["coa"]) ? $context["coa"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["coa"]) {
            // line 104
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coa"]) ? $context["coa"] : null), "nomor_acc"), "html", null, true);
            echo "\" ";
            if (($this->getAttribute((isset($context["edit_row"]) ? $context["edit_row"] : null), "nomor_acc") == $this->getAttribute((isset($context["coa"]) ? $context["coa"] : null), "nomor_acc"))) {
                echo " selected=\"selected\" ";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coa"]) ? $context["coa"] : null), "nomor_acc"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coa"]) ? $context["coa"] : null), "nama_acc"), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coa'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 106
        echo "                    </select>                </td>
                <td><input class=\"form-control\" id=\"memo\" name=\"memo\" type=\"text\" value=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["edit_row"]) ? $context["edit_row"] : null), "memo"), "html", null, true);
        echo "\"></td>
                <td><input class=\"form-control\" id=\"debit\" name=\"debit\" type=\"text\" value=\"";
        // line 108
        echo twig_escape_filter($this->env, (isset($context["debitEdit"]) ? $context["debitEdit"] : null), "html", null, true);
        echo "\"></td>
                <td><input class=\"form-control\" id=\"kredit\" name=\"kredit\" type=\"text\" value=\"";
        // line 109
        echo twig_escape_filter($this->env, (isset($context["kreditEdit"]) ? $context["kreditEdit"] : null), "html", null, true);
        echo "\"></td>
                <td>
               \t  <input type=\"button\" class=\"btn btn-default\" value=\"Save Data\" onclick=\"checkValue()\">                </td>
            </tr>
            <tr>
              \t<td>&nbsp;</td>
                <td><strong>TOTAL</strong></td>
              <td><strong>";
        // line 116
        echo twig_escape_filter($this->env, (isset($context["deb"]) ? $context["deb"] : null), "html", null, true);
        echo "</strong><input type=\"hidden\" name=\"total_debit\" id=\"total_debit\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["deb"]) ? $context["deb"] : null), "html", null, true);
        echo "\" /></td>
              <td><strong>";
        // line 117
        echo twig_escape_filter($this->env, (isset($context["kre"]) ? $context["kre"] : null), "html", null, true);
        echo "</strong><input type=\"hidden\" name=\"total_kredit\" id=\"total_kredit\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["kre"]) ? $context["kre"] : null), "html", null, true);
        echo "\" /></td>
                <td>&nbsp;</td>
            </tr>
         </tbody>           
    </table>
    
</div>
 <input type=\"button\" class=\"btn btn-default\" value=\"Save\" onclick=\"saveAll()\">
</form>
<script language=\"javascript\">
function checkValue(num){
\tif(elm(\"debit\").value !='' && elm(\"kredit\").value !=''){
\t\talert(\"Please fill only Debit or Credit\");
\t}
\telse if(elm(\"debit\").value =='' && elm(\"kredit\").value ==''){
\t\talert(\"Please fill only Debit or Credit\");
\t}
\telse{
\t\tdocument.form1.submit();
\t}\t
}

function saveAll(){
\tvar nilai = parseFloat(elm(\"total_debit\").value) + parseFloat(elm(\"total_kredit\").value);
\tif(nilai == 0){
\t\tdocument.form1.action = \"";
        // line 142
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "index.php/main/jurnal/saveall\";
\t\tdocument.form1.submit();
\t}
\telse{
\t\talert(\"The total is not balance, please check it\");
\t}
\t
}
</script>

";
    }

    public function getTemplateName()
    {
        return "formjurnal.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  316 => 142,  286 => 117,  280 => 116,  270 => 109,  266 => 108,  262 => 107,  259 => 106,  242 => 104,  238 => 103,  235 => 102,  232 => 101,  229 => 100,  226 => 99,  223 => 98,  220 => 97,  217 => 96,  214 => 95,  211 => 94,  209 => 93,  204 => 90,  186 => 86,  181 => 84,  177 => 83,  173 => 82,  170 => 81,  153 => 79,  149 => 78,  141 => 74,  138 => 73,  135 => 72,  132 => 71,  129 => 70,  126 => 69,  123 => 68,  120 => 67,  117 => 66,  113 => 65,  110 => 64,  107 => 63,  105 => 62,  79 => 39,  70 => 33,  60 => 26,  56 => 25,  52 => 24,  29 => 3,  26 => 2,);
    }
}
