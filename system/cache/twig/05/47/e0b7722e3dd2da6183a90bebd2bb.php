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
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "index.php/main/jurnal/save\" method=\"post\" name=\"form1\">
<input type=\"hidden\" name=\"id\" id=\"id\" value=\"";
        // line 25
        if (isset($context["id_jurnal"])) { $_id_jurnal_ = $context["id_jurnal"]; } else { $_id_jurnal_ = null; }
        echo twig_escape_filter($this->env, $_id_jurnal_, "html", null, true);
        echo "\" />
<input type=\"hidden\" name=\"id_detail\" id=\"id_detail\" value=\"";
        // line 26
        if (isset($context["edit_row"])) { $_edit_row_ = $context["edit_row"]; } else { $_edit_row_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_edit_row_, "id"), "html", null, true);
        echo "\" />

<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
<tr>
    <td>
        <div class=\"form-group width150\">
            <label>Date</label>
            <input onfocus=\"gfPop.fPopCalendar(this);\" class=\"form-control\" id=\"trans_date\" name=\"trans_date\" type=\"text\" value=\"";
        // line 33
        if (isset($context["main"])) { $_main_ = $context["main"]; } else { $_main_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_main_, "trans_date"), "html", null, true);
        echo "\" required>
        </div>
    </td>
    <td>
        <div class=\"form-group width150\">
            <label style=\"margin-left:20px;\">Reff</label>
            <input class=\"form-control\" id=\"reff\" name=\"reff\" type=\"text\" value=\"";
        // line 39
        if (isset($context["main"])) { $_main_ = $context["main"]; } else { $_main_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_main_, "reff"), "html", null, true);
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
        if (isset($context["edit"])) { $_edit_ = $context["edit"]; } else { $_edit_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_edit_);
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 66
            echo "            ";
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            if (($this->getAttribute($_data_, "nilai") <= 0)) {
                // line 67
                echo "            \t";
                if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
                $context["kredit"] = $this->getAttribute($_data_, "nilai");
                // line 68
                echo "                ";
                $context["debit"] = "";
                // line 69
                echo "                ";
                if (isset($context["kre"])) { $_kre_ = $context["kre"]; } else { $_kre_ = null; }
                if (isset($context["kredit"])) { $_kredit_ = $context["kredit"]; } else { $_kredit_ = null; }
                $context["kre"] = ($_kre_ + $_kredit_);
                // line 70
                echo "            ";
            } else {
                // line 71
                echo "            \t";
                if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
                $context["debit"] = $this->getAttribute($_data_, "nilai");
                // line 72
                echo "                ";
                $context["kredit"] = "";
                // line 73
                echo "                ";
                if (isset($context["deb"])) { $_deb_ = $context["deb"]; } else { $_deb_ = null; }
                if (isset($context["debit"])) { $_debit_ = $context["debit"]; } else { $_debit_ = null; }
                $context["deb"] = ($_deb_ + $_debit_);
                // line 74
                echo "\t\t\t";
            }
            echo "                        
            <tr>
              \t<td>
                \t<select name=\"penjualan_tour\"  id=\"penjualan_tour\" class=\"form-control\" disabled=\"disabled\">
                        ";
            // line 78
            if (isset($context["coa"])) { $_coa_ = $context["coa"]; } else { $_coa_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_coa_);
            foreach ($context['_seq'] as $context["_key"] => $context["coa"]) {
                // line 79
                echo "                        <option value=\"";
                if (isset($context["coa"])) { $_coa_ = $context["coa"]; } else { $_coa_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_coa_, "nomor_acc"), "html", null, true);
                echo "\" ";
                if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
                if (isset($context["coa"])) { $_coa_ = $context["coa"]; } else { $_coa_ = null; }
                if (($this->getAttribute($_data_, "nomor_acc") == $this->getAttribute($_coa_, "nomor_acc"))) {
                    echo " selected=\"selected\" ";
                }
                echo ">";
                if (isset($context["coa"])) { $_coa_ = $context["coa"]; } else { $_coa_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_coa_, "nomor_acc"), "html", null, true);
                echo " - ";
                if (isset($context["coa"])) { $_coa_ = $context["coa"]; } else { $_coa_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_coa_, "nama_acc"), "html", null, true);
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
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_data_, "memo"), "html", null, true);
            echo "\" readonly=\"readonly\"></td>
                <td><input class=\"form-control\" id=\"debit\" name=\"debit\" type=\"text\" value=\"";
            // line 83
            if (isset($context["debit"])) { $_debit_ = $context["debit"]; } else { $_debit_ = null; }
            echo twig_escape_filter($this->env, $_debit_, "html", null, true);
            echo "\" readonly=\"readonly\"></td>
                <td><input class=\"form-control\" id=\"kredit\" name=\"kredit\" type=\"text\" value=\"";
            // line 84
            if (isset($context["kredit"])) { $_kredit_ = $context["kredit"]; } else { $_kredit_ = null; }
            echo twig_escape_filter($this->env, $_kredit_, "html", null, true);
            echo "\" readonly=\"readonly\"></td>
                <td>
                \t<a href=\"";
            // line 86
            if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
            echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
            echo "index.php/main/jurnal/form/";
            if (isset($context["id_jurnal"])) { $_id_jurnal_ = $context["id_jurnal"]; } else { $_id_jurnal_ = null; }
            echo twig_escape_filter($this->env, $_id_jurnal_, "html", null, true);
            echo "/";
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_data_, "id"), "html", null, true);
            echo "\"><i class=\"fa fa-fw fa-pencil\"></i> Edit</a> <a href=\"javascript:void();\" onclick=\"deleteThis('";
            if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
            echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
            echo "index.php/coa/form/delete/?id=";
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            echo twig_escape_filter($this->env, trim($this->getAttribute($_data_, "id_acc")), "html", null, true);
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
        if (isset($context["edit_row"])) { $_edit_row_ = $context["edit_row"]; } else { $_edit_row_ = null; }
        if (($this->getAttribute($_edit_row_, "id") != "")) {
            // line 96
            echo "                    \t";
            if (isset($context["edit_row"])) { $_edit_row_ = $context["edit_row"]; } else { $_edit_row_ = null; }
            if (($this->getAttribute($_edit_row_, "nilai") <= 0)) {
                // line 97
                echo "                        ";
                if (isset($context["edit_row"])) { $_edit_row_ = $context["edit_row"]; } else { $_edit_row_ = null; }
                $context["kreditEdit"] = abs($this->getAttribute($_edit_row_, "nilai"));
                // line 98
                echo "                        ";
            } else {
                // line 99
                echo "                    \t";
                if (isset($context["edit_row"])) { $_edit_row_ = $context["edit_row"]; } else { $_edit_row_ = null; }
                $context["debitEdit"] = $this->getAttribute($_edit_row_, "nilai");
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
        if (isset($context["coa"])) { $_coa_ = $context["coa"]; } else { $_coa_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_coa_);
        foreach ($context['_seq'] as $context["_key"] => $context["coa"]) {
            // line 104
            echo "                        <option value=\"";
            if (isset($context["coa"])) { $_coa_ = $context["coa"]; } else { $_coa_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_coa_, "nomor_acc"), "html", null, true);
            echo "\" ";
            if (isset($context["edit_row"])) { $_edit_row_ = $context["edit_row"]; } else { $_edit_row_ = null; }
            if (isset($context["coa"])) { $_coa_ = $context["coa"]; } else { $_coa_ = null; }
            if (($this->getAttribute($_edit_row_, "nomor_acc") == $this->getAttribute($_coa_, "nomor_acc"))) {
                echo " selected=\"selected\" ";
            }
            echo ">";
            if (isset($context["coa"])) { $_coa_ = $context["coa"]; } else { $_coa_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_coa_, "nomor_acc"), "html", null, true);
            echo " - ";
            if (isset($context["coa"])) { $_coa_ = $context["coa"]; } else { $_coa_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_coa_, "nama_acc"), "html", null, true);
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
        if (isset($context["edit_row"])) { $_edit_row_ = $context["edit_row"]; } else { $_edit_row_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_edit_row_, "memo"), "html", null, true);
        echo "\"></td>
                <td><input class=\"form-control\" id=\"debit\" name=\"debit\" type=\"text\" value=\"";
        // line 108
        if (isset($context["debitEdit"])) { $_debitEdit_ = $context["debitEdit"]; } else { $_debitEdit_ = null; }
        echo twig_escape_filter($this->env, $_debitEdit_, "html", null, true);
        echo "\"></td>
                <td><input class=\"form-control\" id=\"kredit\" name=\"kredit\" type=\"text\" value=\"";
        // line 109
        if (isset($context["kreditEdit"])) { $_kreditEdit_ = $context["kreditEdit"]; } else { $_kreditEdit_ = null; }
        echo twig_escape_filter($this->env, $_kreditEdit_, "html", null, true);
        echo "\"></td>
                <td>
               \t  <input type=\"button\" class=\"btn btn-default\" value=\"Save Data\" onclick=\"checkValue()\">                </td>
            </tr>
            <tr>
              \t<td>&nbsp;</td>
                <td><strong>TOTAL</strong></td>
              <td><strong>";
        // line 116
        if (isset($context["deb"])) { $_deb_ = $context["deb"]; } else { $_deb_ = null; }
        echo twig_escape_filter($this->env, $_deb_, "html", null, true);
        echo "</strong><input type=\"hidden\" name=\"total_debit\" id=\"total_debit\" value=\"";
        if (isset($context["deb"])) { $_deb_ = $context["deb"]; } else { $_deb_ = null; }
        echo twig_escape_filter($this->env, $_deb_, "html", null, true);
        echo "\" /></td>
              <td><strong>";
        // line 117
        if (isset($context["kre"])) { $_kre_ = $context["kre"]; } else { $_kre_ = null; }
        echo twig_escape_filter($this->env, $_kre_, "html", null, true);
        echo "</strong><input type=\"hidden\" name=\"total_kredit\" id=\"total_kredit\" value=\"";
        if (isset($context["kre"])) { $_kre_ = $context["kre"]; } else { $_kre_ = null; }
        echo twig_escape_filter($this->env, $_kre_, "html", null, true);
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
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
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
        return array (  360 => 142,  328 => 117,  320 => 116,  309 => 109,  304 => 108,  299 => 107,  296 => 106,  274 => 104,  269 => 103,  266 => 102,  263 => 101,  260 => 100,  256 => 99,  253 => 98,  249 => 97,  245 => 96,  241 => 95,  238 => 94,  236 => 93,  231 => 90,  208 => 86,  202 => 84,  197 => 83,  192 => 82,  189 => 81,  167 => 79,  162 => 78,  154 => 74,  149 => 73,  146 => 72,  142 => 71,  139 => 70,  134 => 69,  131 => 68,  127 => 67,  123 => 66,  118 => 65,  115 => 64,  112 => 63,  110 => 62,  83 => 39,  73 => 33,  62 => 26,  57 => 25,  52 => 24,  29 => 3,  26 => 2,);
    }
}
