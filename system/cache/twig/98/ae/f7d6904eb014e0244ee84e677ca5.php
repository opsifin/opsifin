<?php

/* formcoasettinglcc.html */
class __TwigTemplate_98aef7d6904eb014e0244ee84e677ca5 extends Twig_Template
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
            LCC - Ticketing COA Setting 
      </h1>

        <ol class=\"breadcrumb\">
            <li>
                <i class=\"fa fa-gear\"></i><a href=\"#\"> Configuration</a>
            </li>

            <li class=\"active\">
                 <i class=\"fa fa-gear\"></i> LCC - Ticketing COA Setting
            </li>
        </ol>
    </div>
</div>
<!-- /.row -->

<form action=\"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "index.php/main/coasettings/savelcc\" method=\"post\" name=\"form1\">

<table border=\"0\">
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><div align=\"right\"><strong>TRANSACTION JOURNAL</strong></div></td>
  </tr>
  <tr>
        <td>
        
            <div class=\"form-group width250\">
                <label>Deposit By Cash</label>
                <select name=\"deposit_d\"  id=\"deposit_d\" class=\"form-control\">
                    ";
        // line 38
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["coa"]) ? $context["coa"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["coa"]) {
            // line 39
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coa"]) ? $context["coa"] : null), "nomor_acc"), "html", null, true);
            echo "\" ";
            if (($this->getAttribute((isset($context["edit"]) ? $context["edit"] : null), "deposit_d") == $this->getAttribute((isset($context["coa"]) ? $context["coa"] : null), "nomor_acc"))) {
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
        echo "                </select>
            </div>
           
            <div class=\"form-group width250\">
                <label>Ticket Price</label>
                <select name=\"price_d\"  id=\"price_d\" class=\"form-control\">
                    ";
        // line 47
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["coa"]) ? $context["coa"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["coa"]) {
            // line 48
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
        // line 50
        echo "                </select>
            </div>
            
            <div class=\"form-group width250\">
                <label>Transaction Cost </label>
                <select name=\"cost_d\"  id=\"cost_d\" class=\"form-control\">
                    ";
        // line 56
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["coa"]) ? $context["coa"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["coa"]) {
            // line 57
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
        // line 59
        echo "                </select>
            </div>
            
            <div class=\"form-group width250\">
                <label>Airline Cost</label>
                <select name=\"airlinecost_d\"  id=\"airlinecost_d\" class=\"form-control\">
                    ";
        // line 65
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["coa"]) ? $context["coa"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["coa"]) {
            // line 66
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coa"]) ? $context["coa"] : null), "nomor_acc"), "html", null, true);
            echo "\" ";
            if (($this->getAttribute((isset($context["edit"]) ? $context["edit"] : null), "airlinecost_d") == $this->getAttribute((isset($context["coa"]) ? $context["coa"] : null), "nomor_acc"))) {
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
        // line 68
        echo "                </select>
            </div>
            
            <div class=\"form-group width250\">
                <label>Commission</label>
                <select name=\"commission_d\"  id=\"commission_d\" class=\"form-control\">
                    ";
        // line 74
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["coa"]) ? $context["coa"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["coa"]) {
            // line 75
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
        // line 77
        echo "                
              </select>
            </div>
            
            <div class=\"form-group width250\">
                <label>Direct Discount</label>
                <select name=\"discount_d\"  id=\"discount_d\" class=\"form-control\">
                    ";
        // line 84
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["coa"]) ? $context["coa"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["coa"]) {
            // line 85
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
        // line 87
        echo "                
              </select>
            </div>
            
            </td>
        <td width=\"5\">&nbsp;</td>
        <td>
            <div class=\"form-group width250\">
                <label>&nbsp;</label>
                <select name=\"deposit_c\"  id=\"deposit_c\" class=\"form-control\">
                    ";
        // line 97
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["coa"]) ? $context["coa"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["coa"]) {
            // line 98
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coa"]) ? $context["coa"] : null), "nomor_acc"), "html", null, true);
            echo "\" ";
            if (($this->getAttribute((isset($context["edit"]) ? $context["edit"] : null), "deposit_c") == $this->getAttribute((isset($context["coa"]) ? $context["coa"] : null), "nomor_acc"))) {
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
        // line 100
        echo "                </select>
            </div>
            
            <div class=\"form-group width250\">
                <label>&nbsp;</label>
                <select name=\"price_c\"  id=\"price_c\" class=\"form-control\">
                    ";
        // line 106
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["coa"]) ? $context["coa"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["coa"]) {
            // line 107
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
        // line 109
        echo "                </select>
            </div>
            
            <div class=\"form-group width250\">
                <label>&nbsp;</label>
                <select name=\"cost_c\"  id=\"cost_c\" class=\"form-control\">
                    ";
        // line 115
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["coa"]) ? $context["coa"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["coa"]) {
            // line 116
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
        // line 118
        echo "                </select>
            </div>
            
            <div class=\"form-group width250\">
                <label>&nbsp;</label>
                <select name=\"airlinecost_c\"  id=\"airlinecost_c\" class=\"form-control\">
                    ";
        // line 124
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["coa"]) ? $context["coa"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["coa"]) {
            // line 125
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coa"]) ? $context["coa"] : null), "nomor_acc"), "html", null, true);
            echo "\" ";
            if (($this->getAttribute((isset($context["edit"]) ? $context["edit"] : null), "airlinecost_c") == $this->getAttribute((isset($context["coa"]) ? $context["coa"] : null), "nomor_acc"))) {
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
        // line 127
        echo "                </select>
            </div>
            
            <div class=\"form-group width250\">
                <label>&nbsp;</label>
                <select name=\"commission_c\"  id=\"commission_c\" class=\"form-control\">
                    ";
        // line 133
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["coa"]) ? $context["coa"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["coa"]) {
            // line 134
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
        // line 136
        echo "                
              </select>
            </div>
            
            <div class=\"form-group width250\">
                <label>&nbsp;</label>
                <select name=\"discount_c\"  id=\"discount_c\" class=\"form-control\">
                    ";
        // line 143
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["coa"]) ? $context["coa"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["coa"]) {
            // line 144
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
        // line 146
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
        // line 172
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["coa"]) ? $context["coa"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["coa"]) {
            // line 173
            echo "                    
          <option value=\"";
            // line 174
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coa"]) ? $context["coa"] : null), "nomor_acc"), "html", null, true);
            echo "\" ";
            if (($this->getAttribute((isset($context["edit"]) ? $context["edit"] : null), "retapprove_d") == $this->getAttribute((isset($context["coa"]) ? $context["coa"] : null), "nomor_acc"))) {
                echo " selected=\"selected\" ";
            }
            echo ">
          ";
            // line 175
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
        // line 179
        echo "                
        
        </select>
      </div>
        <div class=\"form-group width250\">
          <label>Ticket Price</label>
          <select name=\"retprice_d\"  id=\"retprice_d\" class=\"form-control\">
            
                    ";
        // line 187
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["coa"]) ? $context["coa"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["coa"]) {
            // line 188
            echo "                    
            <option value=\"";
            // line 189
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coa"]) ? $context["coa"] : null), "nomor_acc"), "html", null, true);
            echo "\" ";
            if (($this->getAttribute((isset($context["edit"]) ? $context["edit"] : null), "retprice_d") == $this->getAttribute((isset($context["coa"]) ? $context["coa"] : null), "nomor_acc"))) {
                echo " selected=\"selected\" ";
            }
            echo ">
            ";
            // line 190
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
        // line 194
        echo "                
          
          </select>
        </div>
      <div class=\"form-group width250\">
          <label>Administration Fee </label>
          <select name=\"retadmin_d\"  id=\"retadmin_d\" class=\"form-control\">
            
                    ";
        // line 202
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["coa"]) ? $context["coa"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["coa"]) {
            // line 203
            echo "                    
            <option value=\"";
            // line 204
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coa"]) ? $context["coa"] : null), "nomor_acc"), "html", null, true);
            echo "\" ";
            if (($this->getAttribute((isset($context["edit"]) ? $context["edit"] : null), "retadmin_d") == $this->getAttribute((isset($context["coa"]) ? $context["coa"] : null), "nomor_acc"))) {
                echo " selected=\"selected\" ";
            }
            echo ">
            ";
            // line 205
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
        // line 209
        echo "                
          
          </select>
        </div>
     </td>
    <td>&nbsp;</td>
    <td><div class=\"form-group width250\">
        <label>&nbsp;</label>
        <select name=\"retapprove_c\"  id=\"retapprove_c\" class=\"form-control\">
          
                    ";
        // line 219
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["coa"]) ? $context["coa"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["coa"]) {
            // line 220
            echo "                    
          <option value=\"";
            // line 221
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coa"]) ? $context["coa"] : null), "nomor_acc"), "html", null, true);
            echo "\" ";
            if (($this->getAttribute((isset($context["edit"]) ? $context["edit"] : null), "retapprove_c") == $this->getAttribute((isset($context["coa"]) ? $context["coa"] : null), "nomor_acc"))) {
                echo " selected=\"selected\" ";
            }
            echo ">
          ";
            // line 222
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
        // line 226
        echo "                
        
        </select>
      </div>
        <div class=\"form-group width250\">
          <label>&nbsp;</label>
          <select name=\"retprice_c\"  id=\"retprice_c\" class=\"form-control\">
            
                    ";
        // line 234
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["coa"]) ? $context["coa"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["coa"]) {
            // line 235
            echo "                    
            <option value=\"";
            // line 236
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coa"]) ? $context["coa"] : null), "nomor_acc"), "html", null, true);
            echo "\" ";
            if (($this->getAttribute((isset($context["edit"]) ? $context["edit"] : null), "retprice_c") == $this->getAttribute((isset($context["coa"]) ? $context["coa"] : null), "nomor_acc"))) {
                echo " selected=\"selected\" ";
            }
            echo ">
            ";
            // line 237
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
        // line 241
        echo "                
          
          </select>
        </div>
      <div class=\"form-group width250\">
          <label>&nbsp;</label>
          <select name=\"retadmin_c\"  id=\"retadmin_c\" class=\"form-control\">
            
                    ";
        // line 249
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["coa"]) ? $context["coa"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["coa"]) {
            // line 250
            echo "                    
            <option value=\"";
            // line 251
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coa"]) ? $context["coa"] : null), "nomor_acc"), "html", null, true);
            echo "\" ";
            if (($this->getAttribute((isset($context["edit"]) ? $context["edit"] : null), "retadmin_c") == $this->getAttribute((isset($context["coa"]) ? $context["coa"] : null), "nomor_acc"))) {
                echo " selected=\"selected\" ";
            }
            echo ">
            ";
            // line 252
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
        // line 256
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
        return "formcoasettinglcc.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  657 => 256,  645 => 252,  637 => 251,  634 => 250,  630 => 249,  620 => 241,  608 => 237,  600 => 236,  597 => 235,  593 => 234,  583 => 226,  571 => 222,  563 => 221,  560 => 220,  556 => 219,  544 => 209,  532 => 205,  524 => 204,  521 => 203,  517 => 202,  507 => 194,  495 => 190,  487 => 189,  484 => 188,  480 => 187,  470 => 179,  458 => 175,  450 => 174,  447 => 173,  443 => 172,  415 => 146,  398 => 144,  394 => 143,  385 => 136,  368 => 134,  364 => 133,  356 => 127,  339 => 125,  335 => 124,  327 => 118,  310 => 116,  306 => 115,  298 => 109,  281 => 107,  277 => 106,  269 => 100,  252 => 98,  248 => 97,  236 => 87,  219 => 85,  215 => 84,  206 => 77,  189 => 75,  185 => 74,  177 => 68,  160 => 66,  156 => 65,  148 => 59,  131 => 57,  127 => 56,  119 => 50,  102 => 48,  98 => 47,  90 => 41,  73 => 39,  69 => 38,  52 => 24,  29 => 3,  26 => 2,);
    }
}
