<?php

/* home.html */
class __TwigTemplate_ab2fea77e54b78d63995fa446126cf8c extends Twig_Template
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
            Home
        </h1>

        <ol class=\"breadcrumb\">
            <li>
                <i class=\"fa fa-dashboard\"></i><a href=\"#\"> Dashboard</a>
            </li>

            <li class=\"active\">
                <i class=\"fa fa-edit\"></i> Home
            </li>
        </ol>
    </div>
</div>
<!-- /.row -->










<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed adipiscing posuere ipsum ut pharetra. Nulla fermentum accumsan metus vitae dictum. Fusce sit amet lorem non turpis pulvinar sodales in quis massa. Proin est tortor, pellentesque ac quam et, placerat viverra risus. Fusce nec lacus quis lectus cursus blandit. Nulla facilisi. Duis in adipiscing odio, quis vulputate elit. Suspendisse varius mi sed volutpat varius. Nunc non ligula non nisl pretium consectetur eu quis nisl. Praesent consectetur dolor at enim ornare malesuada. Nunc sit amet interdum magna. Maecenas quis pellentesque felis, vel euismod velit. In tempor ligula ac enim dignissim lobortis. Donec lorem leo, dignissim lacinia pulvinar in, tincidunt ac orci.</p>
<p>Aenean lacinia odio ac ante molestie, porta eleifend erat suscipit. Suspendisse a imperdiet diam. Duis diam nulla, porttitor ut quam nec, hendrerit dignissim nunc. Nam condimentum hendrerit nisl vel dapibus. Aenean consectetur sodales feugiat. Nam non rutrum justo. Cras ac tortor ut nulla semper accumsan scelerisque nec est. Vivamus tristique hendrerit lacus, at porttitor nulla consectetur iaculis. Duis ut est et ligula tincidunt tempor. Vivamus convallis laoreet ligula non vestibulum. Mauris ipsum lectus, egestas id risus eget, pulvinar pellentesque libero. Curabitur in lacus in enim feugiat porta. Pellentesque nec quam at purus mollis elementum eget sodales nisi. Etiam consectetur sapien et rutrum volutpat.</p>
<p>Sed tristique magna sit amet dolor egestas, ac gravida libero consectetur. Sed viverra quam nec arcu cursus porttitor. Fusce non leo quis nisi vehicula laoreet non in lorem. Nullam vitae rhoncus est. Nullam at augue malesuada, iaculis purus bibendum, imperdiet dui. Quisque vitae lorem eros. In diam nibh, posuere non blandit vitae, sodales at metus. Donec posuere dolor vel urna pellentesque, nec pellentesque erat pellentesque.</p>


<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed adipiscing posuere ipsum ut pharetra. Nulla fermentum accumsan metus vitae dictum. Fusce sit amet lorem non turpis pulvinar sodales in quis massa. Proin est tortor, pellentesque ac quam et, placerat viverra risus. Fusce nec lacus quis lectus cursus blandit. Nulla facilisi. Duis in adipiscing odio, quis vulputate elit. Suspendisse varius mi sed volutpat varius. Nunc non ligula non nisl pretium consectetur eu quis nisl. Praesent consectetur dolor at enim ornare malesuada. Nunc sit amet interdum magna. Maecenas quis pellentesque felis, vel euismod velit. In tempor ligula ac enim dignissim lobortis. Donec lorem leo, dignissim lacinia pulvinar in, tincidunt ac orci.</p>
<p>Aenean lacinia odio ac ante molestie, porta eleifend erat suscipit. Suspendisse a imperdiet diam. Duis diam nulla, porttitor ut quam nec, hendrerit dignissim nunc. Nam condimentum hendrerit nisl vel dapibus. Aenean consectetur sodales feugiat. Nam non rutrum justo. Cras ac tortor ut nulla semper accumsan scelerisque nec est. Vivamus tristique hendrerit lacus, at porttitor nulla consectetur iaculis. Duis ut est et ligula tincidunt tempor. Vivamus convallis laoreet ligula non vestibulum. Mauris ipsum lectus, egestas id risus eget, pulvinar pellentesque libero. Curabitur in lacus in enim feugiat porta. Pellentesque nec quam at purus mollis elementum eget sodales nisi. Etiam consectetur sapien et rutrum volutpat.</p>
<p>Sed tristique magna sit amet dolor egestas, ac gravida libero consectetur. Sed viverra quam nec arcu cursus porttitor. Fusce non leo quis nisi vehicula laoreet non in lorem. Nullam vitae rhoncus est. Nullam at augue malesuada, iaculis purus bibendum, imperdiet dui. Quisque vitae lorem eros. In diam nibh, posuere non blandit vitae, sodales at metus. Donec posuere dolor vel urna pellentesque, nec pellentesque erat pellentesque.</p>

";
    }

    public function getTemplateName()
    {
        return "home.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  26 => 2,);
    }
}
