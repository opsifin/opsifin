<?php

/* formcoasettingbsp.html */
class __TwigTemplate_c9f103ba408cd24333157fd2430523c2 extends Twig_Template
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
            BSP - Ticketing COA Setting 
      </h1>

        <ol class=\"breadcrumb\">
            <li>
                <i class=\"fa fa-gear\"></i><a href=\"#\"> Configuration</a>
            </li>

            <li class=\"active\">
                 <i class=\"fa fa-gear\"></i> BSP - Ticketing COA Setting
            </li>
        </ol>
    </div>
</div>
<!-- /.row -->

<form action=\"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "index.php/main/coasettings/savebsp\" method=\"post\" name=\"form1\">

<table border=\"0\">
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><div align=\"right\"><strong>TRANSACTION JOURNAL</strong></div></td>
  </tr>
  <tr>
        <td>
        
            <div class=\"form-group width250\">
                <label>VAT</label>
                <select name=\"vat_d\"  id=\"vat_d\" class=\"form-control\">
                    ";
        // line 38
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["coa"]) ? $context["coa"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["coa"]) {
            // line 39
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coa"]) ? $context["coa"] : null), "nomor_acc"), "html", null, true);
            echo "\" ";
            if (($this->getAttribute((isset($context["edit"]) ? $context["edit"] : null), "vat_d") == $this->getAttribute((isset($context["coa"]) ? $context["coa"] : null), "nomor_acc"))) {
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
        // line 41
        echo "                
              </select>
            </div>
           
            <div class=\"form-group width250\">
                <label>Ticket Price</label>
                <select name=\"price_d\"  id=\"price_d\" class=\"form-control\">
                    ";
        // line 48
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["coa"]) ? $context["coa"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["coa"]) {
            // line 49
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coa"]) ? $context["coa"] : null), "nomor_acc"), "html", null, true);
            echo "\" ";
            if (($this->getAttribute((isset($context["edit"]) ? $context["edit"] : null), "price_d") == $this->getAttribute((isset($context["coa"]) ? $context["coa"] : null), "nomor_acc"))) {
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
        // line 51
        echo "                </select>
            </div>
            
            <div class=\"form-group width250\">
                <label>Transaction Cost </label>
                <select name=\"cost_d\"  id=\"cost_d\" class=\"form-control\">
                    ";
        // line 57
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["coa"]) ? $context["coa"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["coa"]) {
            // line 58
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coa"]) ? $context["coa"] : null), "nomor_acc"), "html", null, true);
            echo "\" ";
            if (($this->getAttribute((isset($context["edit"]) ? $context["edit"] : null), "cost_d") == $this->getAttribute((isset($context["coa"]) ? $context["coa"] : null), "nomor_acc"))) {
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
        // line 60
        echo "                </select>
            </div>
            
            <div class=\"form-group width250\">
                <label>Commission</label>
                <select name=\"commission_d\"  id=\"commission_d\" class=\"form-control\">
                    ";
        // line 66
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["coa"]) ? $context["coa"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["coa"]) {
            // line 67
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coa"]) ? $context["coa"] : null), "nomor_acc"), "html", null, true);
            echo "\" ";
            if (($this->getAttribute((isset($context["edit"]) ? $context["edit"] : null), "commission_d") == $this->getAttribute((isset($context["coa"]) ? $context["coa"] : null), "nomor_acc"))) {
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
        // line 69
        echo "                
              </select>
            </div>
            
            <div class=\"form-group width250\">
                <label>Direct Discount</label>
                <select name=\"discount_d\"  id=\"discount_d\" class=\"form-control\">
                    ";
        // line 76
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["coa"]) ? $context["coa"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["coa"]) {
            // line 77
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coa"]) ? $context["coa"] : null), "nomor_acc"), "html", null, true);
            echo "\" ";
            if (($this->getAttribute((isset($context["edit"]) ? $context["edit"] : null), "discount_d") == $this->getAttribute((isset($context["coa"]) ? $context["coa"] : null), "nomor_acc"))) {
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
        // line 79
        echo "                
              </select>
            </div>
            
            </td>
        <td width=\"5\">&nbsp;</td>
        <td>
            <div class=\"form-group width250\">
                <label>&nbsp;</label>
                <select name=\"vat_c\"  id=\"vat_c\" class=\"form-control\">
                    ";
        // line 89
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["coa"]) ? $context["coa"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["coa"]) {
            // line 90
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coa"]) ? $context["coa"] : null), "nomor_acc"), "html", null, true);
            echo "\" ";
            if (($this->getAttribute((isset($context["edit"]) ? $context["edit"] : null), "vat_c") == $this->getAttribute((isset($context["coa"]) ? $context["coa"] : null), "nomor_acc"))) {
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
        // line 92
        echo "                
              </select>
            </div>
            
            <div class=\"form-group width250\">
                <label>&nbsp;</label>
                <select name=\"price_c\"  id=\"price_c\" class=\"form-control\">
                    ";
        // line 99
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["coa"]) ? $context["coa"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["coa"]) {
            // line 100
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coa"]) ? $context["coa"] : null), "nomor_acc"), "html", null, true);
            echo "\" ";
            if (($this->getAttribute((isset($context["edit"]) ? $context["edit"] : null), "price_c") == $this->getAttribute((isset($context["coa"]) ? $context["coa"] : null), "nomor_acc"))) {
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
        // line 102
        echo "                </select>
            </div>
            
            <div class=\"form-group width250\">
                <label>&nbsp;</label>
                <select name=\"cost_c\"  id=\"cost_c\" class=\"form-control\">
                    ";
        // line 108
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["coa"]) ? $context["coa"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["coa"]) {
            // line 109
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coa"]) ? $context["coa"] : null), "nomor_acc"), "html", null, true);
            echo "\" ";
            if (($this->getAttribute((isset($context["edit"]) ? $context["edit"] : null), "cost_c") == $this->getAttribute((isset($context["coa"]) ? $context["coa"] : null), "nomor_acc"))) {
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
        // line 111
        echo "                </select>
            </div>
            
            <div class=\"form-group width250\">
                <label>&nbsp;</label>
                <select name=\"commission_c\"  id=\"commission_c\" class=\"form-control\">
                    ";
        // line 117
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["coa"]) ? $context["coa"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["coa"]) {
            // line 118
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coa"]) ? $context["coa"] : null), "nomor_acc"), "html", null, true);
            echo "\" ";
            if (($this->getAttribute((isset($context["edit"]) ? $context["edit"] : null), "commission_c") == $this->getAttribute((isset($context["coa"]) ? $context["coa"] : null), "nomor_acc"))) {
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
        // line 120
        echo "                
              </select>
            </div>
            
            <div class=\"form-group width250\">
                <label>&nbsp;</label>
                <select name=\"discount_c\"  id=\"discount_c\" class=\"form-control\">
                    ";
        // line 127
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["coa"]) ? $context["coa"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["coa"]) {
            // line 128
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coa"]) ? $context["coa"] : null), "nomor_acc"), "html", null, true);
            echo "\" ";
            if (($this->getAttribute((isset($context["edit"]) ? $context["edit"] : null), "discount_c") == $this->getAttribute((isset($context["coa"]) ? $context["coa"] : null), "nomor_acc"))) {
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
        // line 130
        echo "                
              </select>
            </div>
            
            </td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><div align=\"right\"><strong>RETURN JOURNAL</strong></div></td>
  </tr>
  <tr>
    <td><div class=\"form-group width250\">
        <label>Approve</label>
        <select name=\"retapprove_d\"  id=\"retapprove_d\" class=\"form-control\">
          
                    ";
        // line 156
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["coa"]) ? $context["coa"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["coa"]) {
            // line 157
            echo "                    
          <option value=\"";
            // line 158
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coa"]) ? $context["coa"] : null), "nomor_acc"), "html", null, true);
            echo "\" ";
            if (($this->getAttribute((isset($context["edit"]) ? $context["edit"] : null), "retapprove_d") == $this->getAttribute((isset($context["coa"]) ? $context["coa"] : null), "nomor_acc"))) {
                echo " selected=\"selected\" ";
            }
            echo ">
          ";
            // line 159
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coa"]) ? $context["coa"] : null), "nomor_acc"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coa"]) ? $context["coa"] : null), "nama_acc"), "html", null, true);
            echo "
          </option>
          
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coa'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 163
        echo "                
        
        </select>
      </div>
        <div class=\"form-group width250\">
          <label>Ticket Price</label>
          <select name=\"retprice_d\"  id=\"retprice_d\" class=\"form-control\">
            
                    ";
        // line 171
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["coa"]) ? $context["coa"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["coa"]) {
            // line 172
            echo "                    
            <option value=\"";
            // line 173
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coa"]) ? $context["coa"] : null), "nomor_acc"), "html", null, true);
            echo "\" ";
            if (($this->getAttribute((isset($context["edit"]) ? $context["edit"] : null), "retprice_d") == $this->getAttribute((isset($context["coa"]) ? $context["coa"] : null), "nomor_acc"))) {
                echo " selected=\"selected\" ";
            }
            echo ">
            ";
            // line 174
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coa"]) ? $context["coa"] : null), "nomor_acc"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coa"]) ? $context["coa"] : null), "nama_acc"), "html", null, true);
            echo "
            </option>
            
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coa'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 178
        echo "                
          
          </select>
        </div>
      <div class=\"form-group width250\">
          <label>Administration Fee </label>
          <select name=\"retadmin_d\"  id=\"retadmin_d\" class=\"form-control\">
            
                    ";
        // line 186
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["coa"]) ? $context["coa"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["coa"]) {
            // line 187
            echo "                    
            <option value=\"";
            // line 188
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coa"]) ? $context["coa"] : null), "nomor_acc"), "html", null, true);
            echo "\" ";
            if (($this->getAttribute((isset($context["edit"]) ? $context["edit"] : null), "retadmin_d") == $this->getAttribute((isset($context["coa"]) ? $context["coa"] : null), "nomor_acc"))) {
                echo " selected=\"selected\" ";
            }
            echo ">
            ";
            // line 189
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coa"]) ? $context["coa"] : null), "nomor_acc"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coa"]) ? $context["coa"] : null), "nama_acc"), "html", null, true);
            echo "
            </option>
            
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coa'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 193
        echo "                
          
          </select>
        </div>
     </td>
    <td>&nbsp;</td>
    <td><div class=\"form-group width250\">
        <label>&nbsp;</label>
        <select name=\"retapprove_c\"  id=\"retapprove_c\" class=\"form-control\">
          
                    ";
        // line 203
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["coa"]) ? $context["coa"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["coa"]) {
            // line 204
            echo "                    
          <option value=\"";
            // line 205
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coa"]) ? $context["coa"] : null), "nomor_acc"), "html", null, true);
            echo "\" ";
            if (($this->getAttribute((isset($context["edit"]) ? $context["edit"] : null), "retapprove_c") == $this->getAttribute((isset($context["coa"]) ? $context["coa"] : null), "nomor_acc"))) {
                echo " selected=\"selected\" ";
            }
            echo ">
          ";
            // line 206
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coa"]) ? $context["coa"] : null), "nomor_acc"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coa"]) ? $context["coa"] : null), "nama_acc"), "html", null, true);
            echo "
          </option>
          
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coa'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 210
        echo "                
        
        </select>
      </div>
        <div class=\"form-group width250\">
          <label>&nbsp;</label>
          <select name=\"retprice_c\"  id=\"retprice_c\" class=\"form-control\">
            
                    ";
        // line 218
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["coa"]) ? $context["coa"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["coa"]) {
            // line 219
            echo "                    
            <option value=\"";
            // line 220
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coa"]) ? $context["coa"] : null), "nomor_acc"), "html", null, true);
            echo "\" ";
            if (($this->getAttribute((isset($context["edit"]) ? $context["edit"] : null), "retprice_c") == $this->getAttribute((isset($context["coa"]) ? $context["coa"] : null), "nomor_acc"))) {
                echo " selected=\"selected\" ";
            }
            echo ">
            ";
            // line 221
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coa"]) ? $context["coa"] : null), "nomor_acc"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coa"]) ? $context["coa"] : null), "nama_acc"), "html", null, true);
            echo "
            </option>
            
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coa'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 225
        echo "                
          
          </select>
        </div>
      <div class=\"form-group width250\">
          <label>&nbsp;</label>
          <select name=\"retadmin_c\"  id=\"retadmin_c\" class=\"form-control\">
            
                    ";
        // line 233
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["coa"]) ? $context["coa"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["coa"]) {
            // line 234
            echo "                    
            <option value=\"";
            // line 235
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coa"]) ? $context["coa"] : null), "nomor_acc"), "html", null, true);
            echo "\" ";
            if (($this->getAttribute((isset($context["edit"]) ? $context["edit"] : null), "retadmin_c") == $this->getAttribute((isset($context["coa"]) ? $context["coa"] : null), "nomor_acc"))) {
                echo " selected=\"selected\" ";
            }
            echo ">
            ";
            // line 236
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coa"]) ? $context["coa"] : null), "nomor_acc"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coa"]) ? $context["coa"] : null), "nama_acc"), "html", null, true);
            echo "
            </option>
            
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coa'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 240
        echo "                
          
          </select>
        </div>
     </td>
  </tr>
</table>




<input type=\"submit\" class=\"btn btn-default\" value=\"Save\">
</form>
";
    }

    public function getTemplateName()
    {
        return "formcoasettingbsp.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  601 => 240,  589 => 236,  581 => 235,  578 => 234,  574 => 233,  564 => 225,  552 => 221,  544 => 220,  541 => 219,  537 => 218,  527 => 210,  515 => 206,  507 => 205,  504 => 204,  500 => 203,  488 => 193,  476 => 189,  468 => 188,  465 => 187,  461 => 186,  451 => 178,  439 => 174,  431 => 173,  428 => 172,  424 => 171,  414 => 163,  402 => 159,  394 => 158,  391 => 157,  387 => 156,  359 => 130,  342 => 128,  338 => 127,  329 => 120,  312 => 118,  308 => 117,  300 => 111,  283 => 109,  279 => 108,  271 => 102,  254 => 100,  250 => 99,  241 => 92,  224 => 90,  220 => 89,  208 => 79,  191 => 77,  187 => 76,  178 => 69,  161 => 67,  157 => 66,  149 => 60,  132 => 58,  128 => 57,  120 => 51,  103 => 49,  99 => 48,  90 => 41,  73 => 39,  69 => 38,  52 => 24,  29 => 3,  26 => 2,);
    }
}
