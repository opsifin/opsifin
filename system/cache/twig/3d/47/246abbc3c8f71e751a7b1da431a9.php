<?php

/* header.html */
class __TwigTemplate_3d47246abbc3c8f71e751a7b1da431a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>SB Admin - Bootstrap Admin Template</title>

    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/css/style.css\" rel=\"stylesheet\">

    <!-- Bootstrap Core CSS -->
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/css/bootstrap.min.css\" rel=\"stylesheet\">

    <!-- Custom CSS -->
    <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/css/sb-admin.css\" rel=\"stylesheet\">

    <!-- Morris Charts CSS -->
    <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/css/plugins/morris.css\" rel=\"stylesheet\">

    <!-- Custom Fonts -->
    <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/font-awesome-4.1.0/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->
    <script src=\"";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/jquery-1.11.0.js\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/fancybox/source/jquery.fancybox.js?v=2.1.5\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/script.js\"></script>
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/fancybox/source/jquery.fancybox.css?v=2.1.5\" media=\"screen\" />

</head>
<script src=\"";
        // line 40
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/script.js\"></script>


<body>
 <div id=\"wrapper\">
\t <nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class=\"navbar-header\">
        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-ex1-collapse\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
        </button>
        <a class=\"navbar-brand\" href=\"#\"><img src=\"";
        // line 54
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets//images/opsimidlong.png\" id=\"logotop\"></a>
    </div>
    
    <!-- Top Menu Items -->
    <ul class=\"nav navbar-right top-nav\">
        <li class=\"dropdown\">
            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-envelope\"></i> <b class=\"caret\"></b></a>
            <ul class=\"dropdown-menu message-dropdown\">
                <li class=\"message-preview\">
                    <a href=\"#\">
                        <div class=\"media\">
                            <span class=\"pull-left\">
                                <img class=\"media-object\" src=\"http://placehold.it/50x50\" alt=\"\">
                            </span>
                            <div class=\"media-body\">
                                <h5 class=\"media-heading\"><strong>";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["log"]) ? $context["log"] : null), "userName"), "html", null, true);
        echo "</strong>
                                </h5>
                                <p class=\"small text-muted\"><i class=\"fa fa-clock-o\"></i> Yesterday at 4:32 PM</p>
                                <p>Lorem ipsum dolor sit amet, consectetur...</p>
                            </div>
                        </div>
                    </a>
                </li>
                <li class=\"message-preview\">
                    <a href=\"#\">
                        <div class=\"media\">
                            <span class=\"pull-left\">
                                <img class=\"media-object\" src=\"http://placehold.it/50x50\" alt=\"\">
                            </span>
                            <div class=\"media-body\">
                                <h5 class=\"media-heading\"><strong>";
        // line 84
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["log"]) ? $context["log"] : null), "userName"), "html", null, true);
        echo "</strong>
                                </h5>
                                <p class=\"small text-muted\"><i class=\"fa fa-clock-o\"></i> Yesterday at 4:32 PM</p>
                                <p>Lorem ipsum dolor sit amet, consectetur...</p>
                            </div>
                        </div>
                    </a>
                </li>
                <li class=\"message-preview\">
                    <a href=\"#\">
                        <div class=\"media\">
                            <span class=\"pull-left\">
                                <img class=\"media-object\" src=\"http://placehold.it/50x50\" alt=\"\">
                            </span>
                            <div class=\"media-body\">
                                <h5 class=\"media-heading\"><strong>";
        // line 99
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["log"]) ? $context["log"] : null), "userName"), "html", null, true);
        echo "</strong>
                                </h5>
                                <p class=\"small text-muted\"><i class=\"fa fa-clock-o\"></i> Yesterday at 4:32 PM</p>
                                <p>Lorem ipsum dolor sit amet, consectetur...</p>
                            </div>
                        </div>
                    </a>
                </li>
                <li class=\"message-footer\">
                    <a href=\"#\">Read All New Messages</a>
                </li>
            </ul>
        </li>
        <li class=\"dropdown\">
            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-bell\"></i> <b class=\"caret\"></b></a>
            <ul class=\"dropdown-menu alert-dropdown\">
                <li>
                    <a href=\"#\">Alert Name <span class=\"label label-default\">Alert Badge</span></a>
                </li>
                <li>
                    <a href=\"#\">Alert Name <span class=\"label label-primary\">Alert Badge</span></a>
                </li>
                <li>
                    <a href=\"#\">Alert Name <span class=\"label label-success\">Alert Badge</span></a>
                </li>
                <li>
                    <a href=\"#\">Alert Name <span class=\"label label-info\">Alert Badge</span></a>
                </li>
                <li>
                    <a href=\"#\">Alert Name <span class=\"label label-warning\">Alert Badge</span></a>
                </li>
                <li>
                    <a href=\"#\">Alert Name <span class=\"label label-danger\">Alert Badge</span></a>
                </li>
                <li class=\"divider\"></li>
                <li>
                    <a href=\"#\">View All</a>
                </li>
            </ul>
        </li>
        <li class=\"dropdown\">
            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-user\"></i> ";
        // line 140
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["log"]) ? $context["log"] : null), "userName"), "html", null, true);
        echo " <b class=\"caret\"></b></a>
            <ul class=\"dropdown-menu\">
                <li>
                    <a href=\"#\"><i class=\"fa fa-fw fa-user\"></i> Profile</a>
                </li>
                <li>
                    <a href=\"#\"><i class=\"fa fa-fw fa-envelope\"></i> Inbox</a>
                </li>
                <li>
                    <a href=\"#\"><i class=\"fa fa-fw fa-gear\"></i> Settings</a>
                </li>
                <li class=\"divider\"></li>
                <li>
                    <a href=\"#\"><i class=\"fa fa-fw fa-power-off\"></i> Log Out</a>
                </li>
            </ul>
        </li>
    </ul>


       <!-- Navigation -->
       ";
        // line 161
        $this->env->loadTemplate("menu.html")->display($context);
        // line 162
        echo "       <!-- End Navigation -->

</nav>

        <div id=\"page-wrapper\">

            <div class=\"container-fluid\">
            <!-- isi -->
\t\t\t";
        // line 170
        $this->displayBlock('content', $context, $blocks);
        // line 171
        echo "       \t\t<!-- End isis -->
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery Version 1.11.0 -->
   
    <!-- Bootstrap Core JavaScript -->
    <script src=\"";
        // line 184
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/bootstrap.min.js\"></script>

    <!-- Morris Charts JavaScript -->
    <script src=\"";
        // line 187
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/plugins/morris/raphael.min.js\"></script>
    <script src=\"";
        // line 188
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/plugins/morris/morris.min.js\"></script>
    <script src=\"";
        // line 189
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/plugins/morris/morris-data.js\"></script>
    
<iframe width=\"150\" height=\"189\" name=\"gToday:normal:agenda.js\" id=\"gToday:normal:agenda.js\" src=\"";
        // line 191
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/datepicker/ipopeng.htm\" scrolling=\"no\" frameborder=\"0\" style=\"z-index:1000; position:absolute; top:-500px; left:-500px;\"></iframe>

</body>
</html>
";
    }

    // line 170
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  282 => 170,  273 => 191,  268 => 189,  264 => 188,  260 => 187,  254 => 184,  239 => 171,  237 => 170,  227 => 162,  225 => 161,  201 => 140,  157 => 99,  139 => 84,  121 => 69,  103 => 54,  86 => 40,  80 => 37,  76 => 36,  72 => 35,  68 => 34,  57 => 26,  51 => 23,  45 => 20,  39 => 17,  33 => 14,  18 => 1,  271 => 161,  256 => 159,  252 => 158,  248 => 157,  244 => 156,  240 => 155,  236 => 154,  232 => 153,  228 => 152,  224 => 151,  221 => 150,  217 => 149,  187 => 121,  172 => 111,  168 => 110,  133 => 78,  120 => 68,  110 => 61,  101 => 55,  93 => 50,  79 => 39,  70 => 33,  62 => 28,  54 => 23,  50 => 22,  29 => 3,  26 => 2,);
    }
}
