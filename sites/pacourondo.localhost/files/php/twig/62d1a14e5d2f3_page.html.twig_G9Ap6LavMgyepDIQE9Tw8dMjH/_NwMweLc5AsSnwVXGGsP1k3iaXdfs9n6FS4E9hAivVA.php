<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/contrib/corporate_lite/templates/page.html.twig */
class __TwigTemplate_1dc04295f641be2c3c236bbe815e2634 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_b3d9dd94c58234fbec4409b98abb5cb2 = $this->extensions["Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension"];
        $__internal_b3d9dd94c58234fbec4409b98abb5cb2->enter($__internal_b3d9dd94c58234fbec4409b98abb5cb2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "themes/contrib/corporate_lite/templates/page.html.twig"));

        // line 73
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideout", [], "any", false, false, true, 73)) {
            // line 74
            echo "  ";
            // line 75
            echo "  <div class=\"clearfix slideout ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["slideout_background_color"] ?? null), 75, $this->source), "html", null, true);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["slideout_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["slideout_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
    ";
            // line 77
            echo "    <div class=\"clearfix slideout__container\">
      <div class=\"slideout__section\">
        ";
            // line 79
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideout", [], "any", false, false, true, 79), 79, $this->source), "html", null, true);
            echo "
      </div>
    </div>
    ";
            // line 83
            echo "  </div>
  ";
            // line 85
            echo "
  ";
            // line 87
            echo "  <button class=\"slideout-toggle slideout-toggle--fixed\"><i class=\"fa fa-bars\"></i></button>
  ";
        }
        // line 90
        echo "
";
        // line 92
        echo "<div class=\"page-container\">

  ";
        // line 94
        if (((((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_first", [], "any", false, false, true, 94) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_second", [], "any", false, false, true, 94)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_first", [], "any", false, false, true, 94)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 94)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_third", [], "any", false, false, true, 94)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_highlighted_first", [], "any", false, false, true, 94)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_highlighted_second", [], "any", false, false, true, 94))) {
            // line 95
            echo "    ";
            // line 96
            echo "    <div class=\"header-container\">

      ";
            // line 98
            if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_highlighted_first", [], "any", false, false, true, 98) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_highlighted_second", [], "any", false, false, true, 98))) {
                // line 99
                echo "        ";
                // line 100
                echo "        <div class=\"clearfix header-top-highlighted ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_highlighted_background_color"] ?? null), 100, $this->source), "html", null, true);
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["header_top_highlighted_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["header_top_highlighted_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
                echo "\">
          <div class=\"";
                // line 101
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_highlighted_layout_container"] ?? null), 101, $this->source), "html", null, true);
                echo "\">
            ";
                // line 103
                echo "            <div class=\"clearfix header-top-highlighted__container";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["header_top_highlighted_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
                echo "\"
              ";
                // line 104
                if ((($context["header_top_highlighted_animations"] ?? null) == "enabled")) {
                    // line 105
                    echo "                data-animate-effect=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_highlighted_animation_effect"] ?? null), 105, $this->source), "html", null, true);
                    echo "\"
              ";
                }
                // line 106
                echo ">
              <div class=\"row\">
                ";
                // line 108
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_highlighted_first", [], "any", false, false, true, 108)) {
                    // line 109
                    echo "                  <div class=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_highlighted_first_grid_class"] ?? null), 109, $this->source), "html", null, true);
                    echo "\">
                    ";
                    // line 111
                    echo "                    <div class=\"clearfix header-top-highlighted__section header-top-highlighted-first\">
                      ";
                    // line 112
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_highlighted_first", [], "any", false, false, true, 112), 112, $this->source), "html", null, true);
                    echo "
                    </div>
                    ";
                    // line 115
                    echo "                  </div>
                ";
                }
                // line 117
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_highlighted_second", [], "any", false, false, true, 117)) {
                    // line 118
                    echo "                  <div class=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_highlighted_second_grid_class"] ?? null), 118, $this->source), "html", null, true);
                    echo "\">
                    ";
                    // line 120
                    echo "                    <div class=\"clearfix header-top-highlighted__section header-top-highlighted-second\">
                      ";
                    // line 121
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_highlighted_second", [], "any", false, false, true, 121), 121, $this->source), "html", null, true);
                    echo "
                    </div>
                    ";
                    // line 124
                    echo "                  </div>
                ";
                }
                // line 126
                echo "              </div>
            </div>
            ";
                // line 129
                echo "          </div>
        </div>
        ";
                // line 132
                echo "      ";
            }
            // line 133
            echo "
      ";
            // line 134
            if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_first", [], "any", false, false, true, 134) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_second", [], "any", false, false, true, 134))) {
                // line 135
                echo "        ";
                // line 136
                echo "        <div class=\"clearfix header-top ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_background_color"] ?? null), 136, $this->source), "html", null, true);
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["header_top_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["header_top_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
                echo "\">
          <div class=\"";
                // line 137
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_layout_container"] ?? null), 137, $this->source), "html", null, true);
                echo "\">
            ";
                // line 139
                echo "            <div class=\"clearfix header-top__container";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["header_top_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
                echo "\"
              ";
                // line 140
                if ((($context["header_top_animations"] ?? null) == "enabled")) {
                    // line 141
                    echo "                data-animate-effect=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_animation_effect"] ?? null), 141, $this->source), "html", null, true);
                    echo "\"
              ";
                }
                // line 142
                echo ">
              <div class=\"row\">
                ";
                // line 144
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_first", [], "any", false, false, true, 144)) {
                    // line 145
                    echo "                  <div class=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_first_grid_class"] ?? null), 145, $this->source), "html", null, true);
                    echo "\">
                    ";
                    // line 147
                    echo "                    <div class=\"clearfix header-top__section header-top-first\">
                      ";
                    // line 148
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_first", [], "any", false, false, true, 148), 148, $this->source), "html", null, true);
                    echo "
                    </div>
                    ";
                    // line 151
                    echo "                  </div>
                ";
                }
                // line 153
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_second", [], "any", false, false, true, 153)) {
                    // line 154
                    echo "                  <div class=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_second_grid_class"] ?? null), 154, $this->source), "html", null, true);
                    echo "\">
                    ";
                    // line 156
                    echo "                    <div class=\"clearfix header-top__section header-top-second\">
                      ";
                    // line 157
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_second", [], "any", false, false, true, 157), 157, $this->source), "html", null, true);
                    echo "
                    </div>
                    ";
                    // line 160
                    echo "                  </div>
                ";
                }
                // line 162
                echo "              </div>
            </div>
            ";
                // line 165
                echo "          </div>
        </div>
        ";
                // line 168
                echo "      ";
            }
            // line 169
            echo "
      ";
            // line 170
            if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_first", [], "any", false, false, true, 170) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 170)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_third", [], "any", false, false, true, 170))) {
                // line 171
                echo "        ";
                // line 172
                echo "        <header role=\"banner\" class=\"clearfix header ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_background_color"] ?? null), 172, $this->source), "html", null, true);
                echo " ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_layout_container_class"] ?? null), 172, $this->source), "html", null, true);
                echo " ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_layout_columns_class"] ?? null), 172, $this->source), "html", null, true);
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["header_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["header_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
                echo "\">
          <div class=\"";
                // line 173
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_layout_container"] ?? null), 173, $this->source), "html", null, true);
                echo "\">
            ";
                // line 175
                echo "            <div class=\"clearfix header__container\">
              <div class=\"row\">
                ";
                // line 177
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_third", [], "any", false, false, true, 177)) {
                    // line 178
                    echo "                  <div class=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_third_grid_class"] ?? null), 178, $this->source), "html", null, true);
                    echo "\">
                    ";
                    // line 180
                    echo "                    <div class=\"clearfix header__section header-third\">
                      ";
                    // line 181
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_third", [], "any", false, false, true, 181), 181, $this->source), "html", null, true);
                    echo "
                    </div>
                    ";
                    // line 184
                    echo "                  </div>
                ";
                }
                // line 186
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_first", [], "any", false, false, true, 186)) {
                    // line 187
                    echo "                  <div class=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_first_grid_class"] ?? null), 187, $this->source), "html", null, true);
                    echo "\">
                    ";
                    // line 189
                    echo "                    <div class=\"clearfix header__section header-first\">
                      ";
                    // line 190
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_first", [], "any", false, false, true, 190), 190, $this->source), "html", null, true);
                    echo "
                    </div>
                    ";
                    // line 193
                    echo "                  </div>
                ";
                }
                // line 195
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 195)) {
                    // line 196
                    echo "                  <div class=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_second_grid_class"] ?? null), 196, $this->source), "html", null, true);
                    echo "\">
                    ";
                    // line 198
                    echo "                    <div class=\"clearfix header__section header-second\">
                      ";
                    // line 199
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 199), 199, $this->source), "html", null, true);
                    echo "
                    </div>
                    ";
                    // line 202
                    echo "                  </div>
                ";
                }
                // line 204
                echo "              </div>
            </div>
            ";
                // line 207
                echo "          </div>
        </header>
        ";
                // line 210
                echo "      ";
            }
            // line 211
            echo "
    </div>
    ";
            // line 214
            echo "  ";
        }
        // line 215
        echo "
  ";
        // line 216
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "banner", [], "any", false, false, true, 216)) {
            // line 217
            echo "    ";
            // line 218
            echo "    <div ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["banner_id"] ?? null)) ? ((("id=\"" . $this->sandbox->ensureToStringAllowed(($context["banner_id"] ?? null), 218, $this->source)) . "\"")) : ("")));
            echo " class=\"clearfix banner ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["banner_background_color"] ?? null), 218, $this->source), "html", null, true);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["banner_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["banner_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 219
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["banner_layout_container"] ?? null), 219, $this->source), "html", null, true);
            echo "\">
        ";
            // line 221
            echo "        <div class=\"clearfix banner__container\">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"banner__section\">
                ";
            // line 225
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "banner", [], "any", false, false, true, 225), 225, $this->source), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 231
            echo "      </div>
    </div>
    ";
            // line 234
            echo "  ";
        }
        // line 235
        echo "
  ";
        // line 236
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "system_messages", [], "any", false, false, true, 236)) {
            // line 237
            echo "    <div class=\"system-messages clearfix\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-12\">
            ";
            // line 241
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "system_messages", [], "any", false, false, true, 241), 241, $this->source), "html", null, true);
            echo "
          </div>
        </div>
      </div>
    </div>
  ";
        }
        // line 247
        echo "
  ";
        // line 248
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_top", [], "any", false, false, true, 248)) {
            // line 249
            echo "    ";
            // line 250
            echo "    <div ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["content_top_id"] ?? null)) ? ((("id=\"" . $this->sandbox->ensureToStringAllowed(($context["content_top_id"] ?? null), 250, $this->source)) . "\"")) : ("")));
            echo " class=\"clearfix content-top ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_top_background_color"] ?? null), 250, $this->source), "html", null, true);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["content_top_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["content_top_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 251
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_top_layout_container"] ?? null), 251, $this->source), "html", null, true);
            echo "\">
        ";
            // line 253
            echo "        <div class=\"clearfix content-top__container";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["content_top_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo "\"
          ";
            // line 254
            if ((($context["content_top_animations"] ?? null) == "enabled")) {
                // line 255
                echo "            data-animate-effect=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_top_animation_effect"] ?? null), 255, $this->source), "html", null, true);
                echo "\"
          ";
            }
            // line 256
            echo ">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"content-top__section\">
                ";
            // line 260
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_top", [], "any", false, false, true, 260), 260, $this->source), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 266
            echo "      </div>
    </div>
    ";
            // line 269
            echo "  ";
        }
        // line 270
        echo "
  ";
        // line 271
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_top_highlighted", [], "any", false, false, true, 271)) {
            // line 272
            echo "    ";
            // line 273
            echo "    <div ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["content_top_highlighted_id"] ?? null)) ? ((("id=\"" . $this->sandbox->ensureToStringAllowed(($context["content_top_highlighted_id"] ?? null), 273, $this->source)) . "\"")) : ("")));
            echo " class=\"clearfix content-top-highlighted ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_top_highlighted_background_color"] ?? null), 273, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_top_highlighted_separator"] ?? null), 273, $this->source), "html", null, true);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["content_top_highlighted_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["content_top_highlighted_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 274
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_top_highlighted_layout_container"] ?? null), 274, $this->source), "html", null, true);
            echo "\">
        ";
            // line 276
            echo "        <div class=\"clearfix content-top-highlighted__container";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["content_top_highlighted_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo "\"
          ";
            // line 277
            if ((($context["content_top_highlighted_animations"] ?? null) == "enabled")) {
                // line 278
                echo "            data-animate-effect=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_top_highlighted_animation_effect"] ?? null), 278, $this->source), "html", null, true);
                echo "\"
          ";
            }
            // line 279
            echo ">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"content-top-highlighted__section\">
                ";
            // line 283
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_top_highlighted", [], "any", false, false, true, 283), 283, $this->source), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 289
            echo "      </div>
    </div>
    ";
            // line 292
            echo "  ";
        }
        // line 293
        echo "
  ";
        // line 295
        echo "  <div ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["main_content_id"] ?? null)) ? ((("id=\"" . $this->sandbox->ensureToStringAllowed(($context["main_content_id"] ?? null), 295, $this->source)) . "\"")) : ("")));
        echo " class=\"clearfix main-content region--dark-typography region--white-background  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["main_content_separator"] ?? null), 295, $this->source), "html", null, true);
        echo "\">
    <div class=\"container\">
      <div class=\"clearfix main-content__container\">
        <div class=\"row\">
          <section class=\"";
        // line 299
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["main_grid_class"] ?? null), 299, $this->source), "html", null, true);
        echo "\">
            ";
        // line 301
        echo "            <div class=\"clearfix main-content__section";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["main_content_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["main_content_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["main_content_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
        echo "\"
              ";
        // line 302
        if ((($context["main_content_animations"] ?? null) == "enabled")) {
            // line 303
            echo "                data-animate-effect=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["main_content_animation_effect"] ?? null), 303, $this->source), "html", null, true);
            echo "\"
              ";
        }
        // line 304
        echo ">
              ";
        // line 305
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 305)) {
            // line 306
            echo "                ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 306), 306, $this->source), "html", null, true);
            echo "
              ";
        }
        // line 308
        echo "            </div>
            ";
        // line 310
        echo "          </section>
          ";
        // line 311
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 311)) {
            // line 312
            echo "            <aside class=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_first_grid_class"] ?? null), 312, $this->source), "html", null, true);
            echo "\">
              ";
            // line 314
            echo "              <section class=\"sidebar__section sidebar-first clearfix";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["sidebar_first_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["sidebar_first_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["sidebar_first_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\"
                ";
            // line 315
            if ((($context["sidebar_first_animations"] ?? null) == "enabled")) {
                // line 316
                echo "                  data-animate-effect=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_first_animation_effect"] ?? null), 316, $this->source), "html", null, true);
                echo "\"
                ";
            }
            // line 317
            echo ">
                ";
            // line 318
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 318), 318, $this->source), "html", null, true);
            echo "
              </section>
              ";
            // line 321
            echo "            </aside>
          ";
        }
        // line 323
        echo "          ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 323)) {
            // line 324
            echo "            <aside class=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_second_grid_class"] ?? null), 324, $this->source), "html", null, true);
            echo "\">
              ";
            // line 326
            echo "              <section class=\"sidebar__section sidebar-second clearfix";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["sidebar_second_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["sidebar_second_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["sidebar_second_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\"
                ";
            // line 327
            if ((($context["sidebar_second_animations"] ?? null) == "enabled")) {
                // line 328
                echo "                  data-animate-effect=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_second_animation_effect"] ?? null), 328, $this->source), "html", null, true);
                echo "\"
                ";
            }
            // line 329
            echo ">
                ";
            // line 330
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 330), 330, $this->source), "html", null, true);
            echo "
              </section>
              ";
            // line 333
            echo "            </aside>
          ";
        }
        // line 335
        echo "        </div>
      </div>
    </div>
  </div>
  ";
        // line 340
        echo "
  ";
        // line 341
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom_first", [], "any", false, false, true, 341) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom_second", [], "any", false, false, true, 341))) {
            // line 342
            echo "    ";
            // line 343
            echo "    <div ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["content_bottom_id"] ?? null)) ? ((("id=\"" . $this->sandbox->ensureToStringAllowed(($context["content_bottom_id"] ?? null), 343, $this->source)) . "\"")) : ("")));
            echo " class=\"clearfix content-bottom ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_bottom_background_color"] ?? null), 343, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_bottom_separator"] ?? null), 343, $this->source), "html", null, true);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["content_bottom_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["content_bottom_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 344
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_bottom_layout_container"] ?? null), 344, $this->source), "html", null, true);
            echo "\">
        ";
            // line 346
            echo "        <div class=\"clearfix content-bottom__container";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["content_bottom_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo "\"
          ";
            // line 347
            if ((($context["content_bottom_animations"] ?? null) == "enabled")) {
                // line 348
                echo "            data-animate-effect=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_bottom_animation_effect"] ?? null), 348, $this->source), "html", null, true);
                echo "\"
          ";
            }
            // line 349
            echo ">
          <div class=\"row\">
            ";
            // line 351
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom_first", [], "any", false, false, true, 351)) {
                // line 352
                echo "              <div class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_bottom_first_grid_class"] ?? null), 352, $this->source), "html", null, true);
                echo "\">
                ";
                // line 354
                echo "                <div class=\"clearfix content-bottom__section content-bottom-first\">
                  ";
                // line 355
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom_first", [], "any", false, false, true, 355), 355, $this->source), "html", null, true);
                echo "
                </div>
                ";
                // line 358
                echo "              </div>
            ";
            }
            // line 360
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom_second", [], "any", false, false, true, 360)) {
                // line 361
                echo "              <div class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_bottom_second_grid_class"] ?? null), 361, $this->source), "html", null, true);
                echo "\">
                ";
                // line 363
                echo "                <div class=\"clearfix content-bottom__section content-bottom-second\">
                  ";
                // line 364
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom_second", [], "any", false, false, true, 364), 364, $this->source), "html", null, true);
                echo "
                </div>
                ";
                // line 367
                echo "              </div>
            ";
            }
            // line 369
            echo "          </div>
        </div>
        ";
            // line 372
            echo "      </div>
    </div>
    ";
            // line 375
            echo "  ";
        }
        // line 376
        echo "
  ";
        // line 377
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_top", [], "any", false, false, true, 377)) {
            // line 378
            echo "    ";
            // line 379
            echo "    <div ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["featured_top_id"] ?? null)) ? ((("id=\"" . $this->sandbox->ensureToStringAllowed(($context["featured_top_id"] ?? null), 379, $this->source)) . "\"")) : ("")));
            echo " class=\"clearfix featured-top ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_top_background_color"] ?? null), 379, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_top_separator"] ?? null), 379, $this->source), "html", null, true);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["featured_top_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["featured_top_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 380
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_top_layout_container"] ?? null), 380, $this->source), "html", null, true);
            echo "\">
        ";
            // line 382
            echo "        <div class=\"clearfix featured-top__container";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["featured_top_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo "\"
          ";
            // line 383
            if ((($context["featured_top_animations"] ?? null) == "enabled")) {
                // line 384
                echo "            data-animate-effect=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_top_animation_effect"] ?? null), 384, $this->source), "html", null, true);
                echo "\"
          ";
            }
            // line 385
            echo ">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"clearfix featured-top__section\">
                ";
            // line 389
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_top", [], "any", false, false, true, 389), 389, $this->source), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 395
            echo "      </div>
    </div>
    ";
            // line 398
            echo "  ";
        }
        // line 399
        echo "
  ";
        // line 400
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured", [], "any", false, false, true, 400)) {
            // line 401
            echo "    ";
            // line 402
            echo "    <div ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["featured_id"] ?? null)) ? ((("id=\"" . $this->sandbox->ensureToStringAllowed(($context["featured_id"] ?? null), 402, $this->source)) . "\"")) : ("")));
            echo " class=\"clearfix featured ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_background_color"] ?? null), 402, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_separator"] ?? null), 402, $this->source), "html", null, true);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["featured_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["featured_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 403
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_layout_container"] ?? null), 403, $this->source), "html", null, true);
            echo "\">
        ";
            // line 405
            echo "        <div class=\"clearfix featured__container";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["featured_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo "\"
          ";
            // line 406
            if ((($context["featured_animations"] ?? null) == "enabled")) {
                // line 407
                echo "            data-animate-effect=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_animation_effect"] ?? null), 407, $this->source), "html", null, true);
                echo "\"
          ";
            }
            // line 408
            echo ">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"clearfix featured__section\">
                ";
            // line 412
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured", [], "any", false, false, true, 412), 412, $this->source), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 418
            echo "      </div>
    </div>
    ";
            // line 421
            echo "  ";
        }
        // line 422
        echo "
  ";
        // line 423
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom", [], "any", false, false, true, 423)) {
            // line 424
            echo "    ";
            // line 425
            echo "    <div ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["featured_bottom_id"] ?? null)) ? ((("id=\"" . $this->sandbox->ensureToStringAllowed(($context["featured_bottom_id"] ?? null), 425, $this->source)) . "\"")) : ("")));
            echo " class=\"clearfix featured-bottom ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_bottom_background_color"] ?? null), 425, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_bottom_separator"] ?? null), 425, $this->source), "html", null, true);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["featured_bottom_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["featured_bottom_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 426
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_bottom_layout_container"] ?? null), 426, $this->source), "html", null, true);
            echo "\">
        ";
            // line 428
            echo "        <div class=\"clearfix featured-bottom__container";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["featured_bottom_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo "\"
          ";
            // line 429
            if ((($context["featured_bottom_animations"] ?? null) == "enabled")) {
                // line 430
                echo "            data-animate-effect=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_bottom_animation_effect"] ?? null), 430, $this->source), "html", null, true);
                echo "\"
          ";
            }
            // line 431
            echo ">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"clearfix featured-bottom__section\">
                ";
            // line 435
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom", [], "any", false, false, true, 435), 435, $this->source), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 441
            echo "      </div>
    </div>
    ";
            // line 444
            echo "  ";
        }
        // line 445
        echo "
  ";
        // line 446
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sub_featured", [], "any", false, false, true, 446)) {
            // line 447
            echo "    ";
            // line 448
            echo "    <div ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["sub_featured_id"] ?? null)) ? ((("id=\"" . $this->sandbox->ensureToStringAllowed(($context["sub_featured_id"] ?? null), 448, $this->source)) . "\"")) : ("")));
            echo " class=\"clearfix sub-featured ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sub_featured_background_color"] ?? null), 448, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sub_featured_separator"] ?? null), 448, $this->source), "html", null, true);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["sub_featured_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["sub_featured_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 449
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sub_featured_layout_container"] ?? null), 449, $this->source), "html", null, true);
            echo "\">
        ";
            // line 451
            echo "        <div class=\"clearfix sub-featured__container";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["sub_featured_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo "\"
          ";
            // line 452
            if ((($context["sub_featured_animations"] ?? null) == "enabled")) {
                // line 453
                echo "            data-animate-effect=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sub_featured_animation_effect"] ?? null), 453, $this->source), "html", null, true);
                echo "\"
          ";
            }
            // line 454
            echo ">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"clearfix sub-featured__section\">
                ";
            // line 458
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sub_featured", [], "any", false, false, true, 458), 458, $this->source), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 464
            echo "      </div>
    </div>
    ";
            // line 467
            echo "  ";
        }
        // line 468
        echo "
  ";
        // line 469
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted_top", [], "any", false, false, true, 469)) {
            // line 470
            echo "    ";
            // line 471
            echo "    <div ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["highlighted_top_id"] ?? null)) ? ((("id=\"" . $this->sandbox->ensureToStringAllowed(($context["highlighted_top_id"] ?? null), 471, $this->source)) . "\"")) : ("")));
            echo " class=\"clearfix highlighted-top ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_top_background_color"] ?? null), 471, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_top_separator"] ?? null), 471, $this->source), "html", null, true);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["highlighted_top_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["highlighted_top_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 472
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_top_layout_container"] ?? null), 472, $this->source), "html", null, true);
            echo "\">
        ";
            // line 474
            echo "        <div class=\"clearfix highlighted-top__container";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["highlighted_top_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo "\"
          ";
            // line 475
            if ((($context["highlighted_top_animations"] ?? null) == "enabled")) {
                // line 476
                echo "            data-animate-effect=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_top_animation_effect"] ?? null), 476, $this->source), "html", null, true);
                echo "\"
          ";
            }
            // line 477
            echo ">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"clearfix highlighted-top__section\">
                ";
            // line 481
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted_top", [], "any", false, false, true, 481), 481, $this->source), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 487
            echo "      </div>
    </div>
    ";
            // line 490
            echo "  ";
        }
        // line 491
        echo "
  ";
        // line 492
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 492)) {
            // line 493
            echo "    ";
            // line 494
            echo "    <div ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["highlighted_id"] ?? null)) ? ((("id=\"" . $this->sandbox->ensureToStringAllowed(($context["highlighted_id"] ?? null), 494, $this->source)) . "\"")) : ("")));
            echo " class=\"clearfix highlighted ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_background_color"] ?? null), 494, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_separator"] ?? null), 494, $this->source), "html", null, true);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["highlighted_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["highlighted_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 495
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_layout_container"] ?? null), 495, $this->source), "html", null, true);
            echo "\">
        ";
            // line 497
            echo "        <div class=\"clearfix highlighted__container";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["highlighted_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo "\"
          ";
            // line 498
            if ((($context["highlighted_animations"] ?? null) == "enabled")) {
                // line 499
                echo "            data-animate-effect=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_animation_effect"] ?? null), 499, $this->source), "html", null, true);
                echo "\"
          ";
            }
            // line 500
            echo ">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"clearfix highlighted__section\">
                ";
            // line 504
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 504), 504, $this->source), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 510
            echo "      </div>
    </div>
    ";
            // line 513
            echo "  ";
        }
        // line 514
        echo "
  ";
        // line 515
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_top_first", [], "any", false, false, true, 515) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_top_second", [], "any", false, false, true, 515))) {
            // line 516
            echo "    ";
            // line 517
            echo "    <div ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["footer_top_id"] ?? null)) ? ((("id=\"" . $this->sandbox->ensureToStringAllowed(($context["footer_top_id"] ?? null), 517, $this->source)) . "\"")) : ("")));
            echo " class=\"clearfix footer-top ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_regions"] ?? null), 517, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_background_color"] ?? null), 517, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_separator"] ?? null), 517, $this->source), "html", null, true);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["footer_top_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["footer_top_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 518
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_layout_container"] ?? null), 518, $this->source), "html", null, true);
            echo "\">
        ";
            // line 520
            echo "        <div class=\"clearfix footer-top__container";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["footer_top_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo "\"
          ";
            // line 521
            if ((($context["footer_top_animations"] ?? null) == "enabled")) {
                // line 522
                echo "            data-animate-effect=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_animation_effect"] ?? null), 522, $this->source), "html", null, true);
                echo "\"
          ";
            }
            // line 523
            echo ">
          <div class=\"row\">
            ";
            // line 525
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_top_first", [], "any", false, false, true, 525)) {
                // line 526
                echo "              <div class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_first_grid_class"] ?? null), 526, $this->source), "html", null, true);
                echo "\">
                ";
                // line 528
                echo "                <div class=\"clearfix footer-top__section footer-top-first\">
                  ";
                // line 529
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_top_first", [], "any", false, false, true, 529), 529, $this->source), "html", null, true);
                echo "
                </div>
                ";
                // line 532
                echo "              </div>
            ";
            }
            // line 534
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_top_second", [], "any", false, false, true, 534)) {
                // line 535
                echo "              <div class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_second_grid_class"] ?? null), 535, $this->source), "html", null, true);
                echo "\">
                ";
                // line 537
                echo "                <div class=\"clearfix footer-top__section footer-top-second\">
                  ";
                // line 538
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_top_second", [], "any", false, false, true, 538), 538, $this->source), "html", null, true);
                echo "
                </div>
                ";
                // line 541
                echo "              </div>
            ";
            }
            // line 543
            echo "          </div>
        </div>
        ";
            // line 546
            echo "      </div>
    </div>
    ";
            // line 549
            echo "  ";
        }
        // line 550
        echo "
  ";
        // line 551
        if (((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 551) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 551)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 551)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 551)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fifth", [], "any", false, false, true, 551))) {
            // line 552
            echo "    ";
            // line 553
            echo "    <footer ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["footer_id"] ?? null)) ? ((("id=\"" . $this->sandbox->ensureToStringAllowed(($context["footer_id"] ?? null), 553, $this->source)) . "\"")) : ("")));
            echo " class=\"clearfix footer ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_background_color"] ?? null), 553, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_separator"] ?? null), 553, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["footer_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["footer_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 554
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_layout_container"] ?? null), 554, $this->source), "html", null, true);
            echo "\">
        <div class=\"clearfix footer__container\">
          <div class=\"row\">
            ";
            // line 557
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 557)) {
                // line 558
                echo "              <div class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_first_grid_class"] ?? null), 558, $this->source), "html", null, true);
                echo "\">
                ";
                // line 560
                echo "                <div class=\"clearfix footer__section footer-first";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["footer_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
                echo "\"
                  ";
                // line 561
                if ((($context["footer_animations"] ?? null) == "enabled")) {
                    // line 562
                    echo "                    data-animate-effect=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_animation_effect"] ?? null), 562, $this->source), "html", null, true);
                    echo "\"
                  ";
                }
                // line 563
                echo ">
                  ";
                // line 564
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 564), 564, $this->source), "html", null, true);
                echo "
                </div>
                ";
                // line 567
                echo "              </div>
            ";
            }
            // line 569
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 569)) {
                // line 570
                echo "              <div class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_second_grid_class"] ?? null), 570, $this->source), "html", null, true);
                echo "\">
                ";
                // line 572
                echo "                <div class=\"clearfix footer__section footer-second";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["footer_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
                echo "\"
                  ";
                // line 573
                if ((($context["footer_animations"] ?? null) == "enabled")) {
                    // line 574
                    echo "                    data-animate-effect=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_animation_effect"] ?? null), 574, $this->source), "html", null, true);
                    echo "\"
                  ";
                }
                // line 575
                echo ">
                  ";
                // line 576
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 576), 576, $this->source), "html", null, true);
                echo "
                </div>
                ";
                // line 579
                echo "              </div>
            ";
            }
            // line 581
            echo "            <div class=\"clearfix ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_4_columns_clearfix_first"] ?? null), 581, $this->source), "html", null, true);
            echo "\"></div>
            ";
            // line 582
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 582)) {
                // line 583
                echo "              <div class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_third_grid_class"] ?? null), 583, $this->source), "html", null, true);
                echo "\">
                ";
                // line 585
                echo "                <div class=\"clearfix footer__section footer-third";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["footer_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
                echo "\"
                  ";
                // line 586
                if ((($context["footer_animations"] ?? null) == "enabled")) {
                    // line 587
                    echo "                    data-animate-effect=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_animation_effect"] ?? null), 587, $this->source), "html", null, true);
                    echo "\"
                  ";
                }
                // line 588
                echo ">
                  ";
                // line 589
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 589), 589, $this->source), "html", null, true);
                echo "
                </div>
                ";
                // line 592
                echo "              </div>
            ";
            }
            // line 594
            echo "            <div class=\"clearfix ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_4_columns_clearfix_second"] ?? null), 594, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_5_columns_clearfix"] ?? null), 594, $this->source), "html", null, true);
            echo "\"></div>
            ";
            // line 595
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 595)) {
                // line 596
                echo "              <div class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_fourth_grid_class"] ?? null), 596, $this->source), "html", null, true);
                echo "\">
                ";
                // line 598
                echo "                <div class=\"clearfix footer__section footer-fourth";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["footer_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
                echo "\"
                  ";
                // line 599
                if ((($context["footer_animations"] ?? null) == "enabled")) {
                    // line 600
                    echo "                    data-animate-effect=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_animation_effect"] ?? null), 600, $this->source), "html", null, true);
                    echo "\"
                  ";
                }
                // line 601
                echo ">
                  ";
                // line 602
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 602), 602, $this->source), "html", null, true);
                echo "
                </div>
                ";
                // line 605
                echo "              </div>
            ";
            }
            // line 607
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fifth", [], "any", false, false, true, 607)) {
                // line 608
                echo "              <div class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_fifth_grid_class"] ?? null), 608, $this->source), "html", null, true);
                echo "\">
                ";
                // line 610
                echo "                <div class=\"clearfix footer__section footer-fifth";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["footer_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
                echo "\"
                  ";
                // line 611
                if ((($context["footer_animations"] ?? null) == "enabled")) {
                    // line 612
                    echo "                    data-animate-effect=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_animation_effect"] ?? null), 612, $this->source), "html", null, true);
                    echo "\"
                  ";
                }
                // line 613
                echo ">
                  ";
                // line 614
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fifth", [], "any", false, false, true, 614), 614, $this->source), "html", null, true);
                echo "
                </div>
                ";
                // line 617
                echo "              </div>
            ";
            }
            // line 619
            echo "          </div>
        </div>
      </div>
    </footer>
    ";
            // line 624
            echo "  ";
        }
        // line 625
        echo "
  ";
        // line 626
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom", [], "any", false, false, true, 626)) {
            // line 627
            echo "    ";
            // line 628
            echo "    <div ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["footer_bottom_id"] ?? null)) ? ((("id=\"" . $this->sandbox->ensureToStringAllowed(($context["footer_bottom_id"] ?? null), 628, $this->source)) . "\"")) : ("")));
            echo " class=\"clearfix footer-bottom ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_bottom_background_color"] ?? null), 628, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_bottom_separator"] ?? null), 628, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["footer_bottom_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["footer_bottom_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 629
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_bottom_layout_container"] ?? null), 629, $this->source), "html", null, true);
            echo "\">
        ";
            // line 631
            echo "        <div class=\"clearfix footer-bottom__container\">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"clearfix footer-bottom__section\">
                ";
            // line 635
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom", [], "any", false, false, true, 635), 635, $this->source), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 641
            echo "      </div>
    </div>
    ";
            // line 644
            echo "  ";
        }
        // line 645
        echo "
  ";
        // line 646
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sub_footer_first", [], "any", false, false, true, 646) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 646))) {
            // line 647
            echo "    ";
            // line 648
            echo "    <div ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["subfooter_id"] ?? null)) ? ((("id=\"" . $this->sandbox->ensureToStringAllowed(($context["subfooter_id"] ?? null), 648, $this->source)) . "\"")) : ("")));
            echo " class=\"clearfix subfooter ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subfooter_background_color"] ?? null), 648, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subfooter_separator"] ?? null), 648, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["subfooter_bottom_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["subfooter_bottom_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 649
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subfooter_layout_container"] ?? null), 649, $this->source), "html", null, true);
            echo "\">
        ";
            // line 651
            echo "        <div class=\"clearfix subfooter__container\">
          <div class=\"row\">
            ";
            // line 653
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sub_footer_first", [], "any", false, false, true, 653)) {
                // line 654
                echo "              <div class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subfooter_first_grid_class"] ?? null), 654, $this->source), "html", null, true);
                echo "\">
                ";
                // line 656
                echo "                <div class=\"clearfix subfooter__section subfooter-first\">
                  ";
                // line 657
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sub_footer_first", [], "any", false, false, true, 657), 657, $this->source), "html", null, true);
                echo "
                </div>
                ";
                // line 660
                echo "              </div>
            ";
            }
            // line 662
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 662)) {
                // line 663
                echo "              <div class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subfooter_second_grid_class"] ?? null), 663, $this->source), "html", null, true);
                echo "\">
                ";
                // line 665
                echo "                <div class=\"clearfix subfooter__section subfooter-second\">
                  ";
                // line 666
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 666), 666, $this->source), "html", null, true);
                echo "
                </div>
                ";
                // line 669
                echo "              </div>
            ";
            }
            // line 671
            echo "          </div>
        </div>
        ";
            // line 674
            echo "      </div>
    </div>
    ";
            // line 677
            echo "  ";
        }
        // line 678
        echo "
  ";
        // line 679
        if (($context["scroll_to_top_display"] ?? null)) {
            // line 680
            echo "  ";
            // line 681
            echo "    <div class=\"to-top\"><i class=\"fa ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["scroll_to_top_icon"] ?? null), 681, $this->source), "html", null, true);
            echo "\"></i></div>
  ";
            // line 683
            echo "  ";
        }
        // line 684
        echo "
</div>
";
        
        $__internal_b3d9dd94c58234fbec4409b98abb5cb2->leave($__internal_b3d9dd94c58234fbec4409b98abb5cb2_prof);

    }

    public function getTemplateName()
    {
        return "themes/contrib/corporate_lite/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1513 => 684,  1510 => 683,  1505 => 681,  1503 => 680,  1501 => 679,  1498 => 678,  1495 => 677,  1491 => 674,  1487 => 671,  1483 => 669,  1478 => 666,  1475 => 665,  1470 => 663,  1467 => 662,  1463 => 660,  1458 => 657,  1455 => 656,  1450 => 654,  1448 => 653,  1444 => 651,  1440 => 649,  1428 => 648,  1426 => 647,  1424 => 646,  1421 => 645,  1418 => 644,  1414 => 641,  1406 => 635,  1400 => 631,  1396 => 629,  1384 => 628,  1382 => 627,  1380 => 626,  1377 => 625,  1374 => 624,  1368 => 619,  1364 => 617,  1359 => 614,  1356 => 613,  1350 => 612,  1348 => 611,  1343 => 610,  1338 => 608,  1335 => 607,  1331 => 605,  1326 => 602,  1323 => 601,  1317 => 600,  1315 => 599,  1310 => 598,  1305 => 596,  1303 => 595,  1296 => 594,  1292 => 592,  1287 => 589,  1284 => 588,  1278 => 587,  1276 => 586,  1271 => 585,  1266 => 583,  1264 => 582,  1259 => 581,  1255 => 579,  1250 => 576,  1247 => 575,  1241 => 574,  1239 => 573,  1234 => 572,  1229 => 570,  1226 => 569,  1222 => 567,  1217 => 564,  1214 => 563,  1208 => 562,  1206 => 561,  1201 => 560,  1196 => 558,  1194 => 557,  1188 => 554,  1176 => 553,  1174 => 552,  1172 => 551,  1169 => 550,  1166 => 549,  1162 => 546,  1158 => 543,  1154 => 541,  1149 => 538,  1146 => 537,  1141 => 535,  1138 => 534,  1134 => 532,  1129 => 529,  1126 => 528,  1121 => 526,  1119 => 525,  1115 => 523,  1109 => 522,  1107 => 521,  1102 => 520,  1098 => 518,  1085 => 517,  1083 => 516,  1081 => 515,  1078 => 514,  1075 => 513,  1071 => 510,  1063 => 504,  1057 => 500,  1051 => 499,  1049 => 498,  1044 => 497,  1040 => 495,  1029 => 494,  1027 => 493,  1025 => 492,  1022 => 491,  1019 => 490,  1015 => 487,  1007 => 481,  1001 => 477,  995 => 476,  993 => 475,  988 => 474,  984 => 472,  973 => 471,  971 => 470,  969 => 469,  966 => 468,  963 => 467,  959 => 464,  951 => 458,  945 => 454,  939 => 453,  937 => 452,  932 => 451,  928 => 449,  917 => 448,  915 => 447,  913 => 446,  910 => 445,  907 => 444,  903 => 441,  895 => 435,  889 => 431,  883 => 430,  881 => 429,  876 => 428,  872 => 426,  861 => 425,  859 => 424,  857 => 423,  854 => 422,  851 => 421,  847 => 418,  839 => 412,  833 => 408,  827 => 407,  825 => 406,  820 => 405,  816 => 403,  805 => 402,  803 => 401,  801 => 400,  798 => 399,  795 => 398,  791 => 395,  783 => 389,  777 => 385,  771 => 384,  769 => 383,  764 => 382,  760 => 380,  749 => 379,  747 => 378,  745 => 377,  742 => 376,  739 => 375,  735 => 372,  731 => 369,  727 => 367,  722 => 364,  719 => 363,  714 => 361,  711 => 360,  707 => 358,  702 => 355,  699 => 354,  694 => 352,  692 => 351,  688 => 349,  682 => 348,  680 => 347,  675 => 346,  671 => 344,  660 => 343,  658 => 342,  656 => 341,  653 => 340,  647 => 335,  643 => 333,  638 => 330,  635 => 329,  629 => 328,  627 => 327,  620 => 326,  615 => 324,  612 => 323,  608 => 321,  603 => 318,  600 => 317,  594 => 316,  592 => 315,  585 => 314,  580 => 312,  578 => 311,  575 => 310,  572 => 308,  566 => 306,  564 => 305,  561 => 304,  555 => 303,  553 => 302,  546 => 301,  542 => 299,  532 => 295,  529 => 293,  526 => 292,  522 => 289,  514 => 283,  508 => 279,  502 => 278,  500 => 277,  495 => 276,  491 => 274,  480 => 273,  478 => 272,  476 => 271,  473 => 270,  470 => 269,  466 => 266,  458 => 260,  452 => 256,  446 => 255,  444 => 254,  439 => 253,  435 => 251,  426 => 250,  424 => 249,  422 => 248,  419 => 247,  410 => 241,  404 => 237,  402 => 236,  399 => 235,  396 => 234,  392 => 231,  384 => 225,  378 => 221,  374 => 219,  365 => 218,  363 => 217,  361 => 216,  358 => 215,  355 => 214,  351 => 211,  348 => 210,  344 => 207,  340 => 204,  336 => 202,  331 => 199,  328 => 198,  323 => 196,  320 => 195,  316 => 193,  311 => 190,  308 => 189,  303 => 187,  300 => 186,  296 => 184,  291 => 181,  288 => 180,  283 => 178,  281 => 177,  277 => 175,  273 => 173,  262 => 172,  260 => 171,  258 => 170,  255 => 169,  252 => 168,  248 => 165,  244 => 162,  240 => 160,  235 => 157,  232 => 156,  227 => 154,  224 => 153,  220 => 151,  215 => 148,  212 => 147,  207 => 145,  205 => 144,  201 => 142,  195 => 141,  193 => 140,  188 => 139,  184 => 137,  177 => 136,  175 => 135,  173 => 134,  170 => 133,  167 => 132,  163 => 129,  159 => 126,  155 => 124,  150 => 121,  147 => 120,  142 => 118,  139 => 117,  135 => 115,  130 => 112,  127 => 111,  122 => 109,  120 => 108,  116 => 106,  110 => 105,  108 => 104,  103 => 103,  99 => 101,  92 => 100,  90 => 99,  88 => 98,  84 => 96,  82 => 95,  80 => 94,  76 => 92,  73 => 90,  69 => 87,  66 => 85,  63 => 83,  57 => 79,  53 => 77,  46 => 75,  44 => 74,  42 => 73,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/corporate_lite/templates/page.html.twig", "/var/www/html/themes/contrib/corporate_lite/templates/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 73);
        static $filters = array("escape" => 75, "raw" => 218);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'raw'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
