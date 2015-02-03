<?php

/* formcompany.html */
class __TwigTemplate_e6654a1ea5fd23fffe60ee7a05b862d8 extends Twig_Template
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
            Company 
        </h1>

        <ol class=\"breadcrumb\">
            <li>
                <i class=\"fa fa-gear\"></i><a href=\"#\"> Configuration</a>
            </li>

            <li class=\"active\">
                 <i class=\"fa fa-bank\"></i> Company
            </li>
        </ol>
    </div>
</div>
<!-- /.row -->

<form action=\"";
        // line 24
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "index.php/main/company/save\" method=\"post\" name=\"form1\" data-toggle=\"validator\" role=\"form\">
<input type=\"hidden\" name=\"id\" id=\"id\" value=\"";
        // line 25
        if (isset($context["edit"])) { $_edit_ = $context["edit"]; } else { $_edit_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_edit_, "id_company"), "html", null, true);
        echo "\" />


<div class=\"form-group width200\">
    <label>Company Name</label>
    <input class=\"form-control\" id=\"nama_company\" name=\"nama_company\" type=\"text\" value=\"";
        // line 30
        if (isset($context["edit"])) { $_edit_ = $context["edit"]; } else { $_edit_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_edit_, "nama_company"), "html", null, true);
        echo "\" required>
</div>

<div class=\"form-group width300\">
    <label>Address</label>
    <textarea name=\"alamat\" rows=\"5\" class=\"form-control\" id=\"alamat\" type=\"text\" w>";
        // line 35
        if (isset($context["edit"])) { $_edit_ = $context["edit"]; } else { $_edit_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_edit_, "alamat"), "html", null, true);
        echo "</textarea>
</div>

<div class=\"form-group width100\">
    <label>Post Code</label>
    <input class=\"form-control\" id=\"kode_pos\" name=\"kode_pos\" type=\"text\" value=\"";
        // line 40
        if (isset($context["edit"])) { $_edit_ = $context["edit"]; } else { $_edit_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_edit_, "kode_pos"), "html", null, true);
        echo "\" required>
</div>

<div class=\"form-group width150\">
    <label>City</label>
    <input class=\"form-control\" id=\"kota\" name=\"kota\" type=\"text\" value=\"";
        // line 45
        if (isset($context["edit"])) { $_edit_ = $context["edit"]; } else { $_edit_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_edit_, "kota"), "html", null, true);
        echo "\" required>
</div>

<div class=\"form-group width100\">
    <label>Country</label>
    <input class=\"form-control\" id=\"negara\" name=\"negara\" type=\"text\" value=\"";
        // line 50
        if (isset($context["edit"])) { $_edit_ = $context["edit"]; } else { $_edit_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_edit_, "negara"), "html", null, true);
        echo "\" required>
</div>

<div class=\"form-group width150\">
    <label>Phone</label>
    <input class=\"form-control\" id=\"phone\" name=\"phone\" type=\"text\" value=\"";
        // line 55
        if (isset($context["edit"])) { $_edit_ = $context["edit"]; } else { $_edit_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_edit_, "phone"), "html", null, true);
        echo "\" required>
</div>

<div class=\"form-group width200\">
    <label>Email</label>
    <input class=\"form-control\" id=\"email\" name=\"email\" type=\"text\" value=\"";
        // line 60
        if (isset($context["edit"])) { $_edit_ = $context["edit"]; } else { $_edit_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_edit_, "email"), "html", null, true);
        echo "\" required>
</div>

<div class=\"form-group width200\">
    <label>Currency</label>
    <select name=\"currency\" class=\"form-control\" id=\"currency\">
    ";
        // line 66
        if (isset($context["currency"])) { $_currency_ = $context["currency"]; } else { $_currency_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_currency_);
        foreach ($context['_seq'] as $context["_key"] => $context["count"]) {
            // line 67
            echo "    \t<option value=\"";
            if (isset($context["count"])) { $_count_ = $context["count"]; } else { $_count_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_count_, "currency"), "html", null, true);
            echo "\" ";
            if (isset($context["edit"])) { $_edit_ = $context["edit"]; } else { $_edit_ = null; }
            if (isset($context["count"])) { $_count_ = $context["count"]; } else { $_count_ = null; }
            if (($this->getAttribute($_edit_, "currency") == $this->getAttribute($_count_, "currency"))) {
                echo " selected=\"selected\" ";
            }
            echo ">";
            if (isset($context["count"])) { $_count_ = $context["count"]; } else { $_count_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_count_, "currency"), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['count'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 69
        echo "    </select>
</div>

<input type=\"submit\" class=\"btn btn-default\" value=\"Save\">
</form>
";
    }

    public function getTemplateName()
    {
        return "formcompany.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 69,  135 => 67,  130 => 66,  120 => 60,  111 => 55,  102 => 50,  93 => 45,  84 => 40,  75 => 35,  66 => 30,  57 => 25,  52 => 24,  29 => 3,  26 => 2,);
    }
}
