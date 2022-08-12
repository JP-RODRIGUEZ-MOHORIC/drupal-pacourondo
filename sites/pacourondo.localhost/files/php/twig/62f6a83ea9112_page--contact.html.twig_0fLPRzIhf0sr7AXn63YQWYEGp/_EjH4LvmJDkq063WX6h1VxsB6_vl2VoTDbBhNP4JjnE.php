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

/* themes/contrib/corporate_lite/templates/page--contact.html.twig */
class __TwigTemplate_85394433c75d4f20f03f9b5b8283fbc7 extends \Twig\Template
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
            echo "              <h1 class=\"titulo\">CONTACTO</h1>
                <p class=\"descripcion\">Usá esta página para escribirnos tus consultas, ideas, sugerencias.
<br>Muchas gracias.
<br>CC Paco Urondo</p>
                ";
            // line 310
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 310), 310, $this->source), "html", null, true);
            echo "
                
              ";
        }
        // line 313
        echo "            </div>
            ";
        // line 315
        echo "          </section>
          ";
        // line 316
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 316)) {
            // line 317
            echo "            <aside class=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_first_grid_class"] ?? null), 317, $this->source), "html", null, true);
            echo "\">
              ";
            // line 319
            echo "              <section class=\"sidebar__section sidebar-first clearfix";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["sidebar_first_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["sidebar_first_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["sidebar_first_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\"
                ";
            // line 320
            if ((($context["sidebar_first_animations"] ?? null) == "enabled")) {
                // line 321
                echo "                  data-animate-effect=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_first_animation_effect"] ?? null), 321, $this->source), "html", null, true);
                echo "\"
                ";
            }
            // line 322
            echo ">
                ";
            // line 323
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 323), 323, $this->source), "html", null, true);
            echo "
              </section>
              ";
            // line 326
            echo "            </aside>
          ";
        }
        // line 328
        echo "          ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 328)) {
            // line 329
            echo "            <aside class=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_second_grid_class"] ?? null), 329, $this->source), "html", null, true);
            echo "\">
              ";
            // line 331
            echo "              <section class=\"sidebar__section sidebar-second clearfix";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["sidebar_second_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["sidebar_second_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["sidebar_second_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\"
                ";
            // line 332
            if ((($context["sidebar_second_animations"] ?? null) == "enabled")) {
                // line 333
                echo "                  data-animate-effect=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_second_animation_effect"] ?? null), 333, $this->source), "html", null, true);
                echo "\"
                ";
            }
            // line 334
            echo ">
                ";
            // line 335
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 335), 335, $this->source), "html", null, true);
            echo "
              </section>
              ";
            // line 338
            echo "            </aside>
          ";
        }
        // line 340
        echo "        </div>
      </div>
    </div>
  </div>
  ";
        // line 345
        echo "
  ";
        // line 346
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom_first", [], "any", false, false, true, 346) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom_second", [], "any", false, false, true, 346))) {
            // line 347
            echo "    ";
            // line 348
            echo "    <div ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["content_bottom_id"] ?? null)) ? ((("id=\"" . $this->sandbox->ensureToStringAllowed(($context["content_bottom_id"] ?? null), 348, $this->source)) . "\"")) : ("")));
            echo " class=\"clearfix content-bottom ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_bottom_background_color"] ?? null), 348, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_bottom_separator"] ?? null), 348, $this->source), "html", null, true);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["content_bottom_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["content_bottom_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 349
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_bottom_layout_container"] ?? null), 349, $this->source), "html", null, true);
            echo "\">
        ";
            // line 351
            echo "        <div class=\"clearfix content-bottom__container";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["content_bottom_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo "\"
          ";
            // line 352
            if ((($context["content_bottom_animations"] ?? null) == "enabled")) {
                // line 353
                echo "            data-animate-effect=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_bottom_animation_effect"] ?? null), 353, $this->source), "html", null, true);
                echo "\"
          ";
            }
            // line 354
            echo ">
          <div class=\"row\">
            ";
            // line 356
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom_first", [], "any", false, false, true, 356)) {
                // line 357
                echo "              <div class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_bottom_first_grid_class"] ?? null), 357, $this->source), "html", null, true);
                echo "\">
                ";
                // line 359
                echo "                <div class=\"clearfix content-bottom__section content-bottom-first\">
                  ";
                // line 360
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom_first", [], "any", false, false, true, 360), 360, $this->source), "html", null, true);
                echo "
                </div>
                ";
                // line 363
                echo "              </div>
            ";
            }
            // line 365
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom_second", [], "any", false, false, true, 365)) {
                // line 366
                echo "              <div class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_bottom_second_grid_class"] ?? null), 366, $this->source), "html", null, true);
                echo "\">
                ";
                // line 368
                echo "                <div class=\"clearfix content-bottom__section content-bottom-second\">
                  ";
                // line 369
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom_second", [], "any", false, false, true, 369), 369, $this->source), "html", null, true);
                echo "
                </div>
                ";
                // line 372
                echo "              </div>
            ";
            }
            // line 374
            echo "          </div>
        </div>
        ";
            // line 377
            echo "      </div>
    </div>
    ";
            // line 380
            echo "  ";
        }
        // line 381
        echo "
  ";
        // line 382
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_top", [], "any", false, false, true, 382)) {
            // line 383
            echo "    ";
            // line 384
            echo "    <div ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["featured_top_id"] ?? null)) ? ((("id=\"" . $this->sandbox->ensureToStringAllowed(($context["featured_top_id"] ?? null), 384, $this->source)) . "\"")) : ("")));
            echo " class=\"clearfix featured-top ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_top_background_color"] ?? null), 384, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_top_separator"] ?? null), 384, $this->source), "html", null, true);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["featured_top_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["featured_top_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 385
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_top_layout_container"] ?? null), 385, $this->source), "html", null, true);
            echo "\">
        ";
            // line 387
            echo "        <div class=\"clearfix featured-top__container";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["featured_top_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo "\"
          ";
            // line 388
            if ((($context["featured_top_animations"] ?? null) == "enabled")) {
                // line 389
                echo "            data-animate-effect=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_top_animation_effect"] ?? null), 389, $this->source), "html", null, true);
                echo "\"
          ";
            }
            // line 390
            echo ">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"clearfix featured-top__section\">
                ";
            // line 394
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_top", [], "any", false, false, true, 394), 394, $this->source), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 400
            echo "      </div>
    </div>
    ";
            // line 403
            echo "  ";
        }
        // line 404
        echo "
  ";
        // line 405
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured", [], "any", false, false, true, 405)) {
            // line 406
            echo "    ";
            // line 407
            echo "    <div ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["featured_id"] ?? null)) ? ((("id=\"" . $this->sandbox->ensureToStringAllowed(($context["featured_id"] ?? null), 407, $this->source)) . "\"")) : ("")));
            echo " class=\"clearfix featured ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_background_color"] ?? null), 407, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_separator"] ?? null), 407, $this->source), "html", null, true);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["featured_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["featured_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 408
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_layout_container"] ?? null), 408, $this->source), "html", null, true);
            echo "\">
        ";
            // line 410
            echo "        <div class=\"clearfix featured__container";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["featured_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo "\"
          ";
            // line 411
            if ((($context["featured_animations"] ?? null) == "enabled")) {
                // line 412
                echo "            data-animate-effect=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_animation_effect"] ?? null), 412, $this->source), "html", null, true);
                echo "\"
          ";
            }
            // line 413
            echo ">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"clearfix featured__section\">
                ";
            // line 417
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured", [], "any", false, false, true, 417), 417, $this->source), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 423
            echo "      </div>
    </div>
    ";
            // line 426
            echo "  ";
        }
        // line 427
        echo "
  ";
        // line 428
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom", [], "any", false, false, true, 428)) {
            // line 429
            echo "    ";
            // line 430
            echo "    <div ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["featured_bottom_id"] ?? null)) ? ((("id=\"" . $this->sandbox->ensureToStringAllowed(($context["featured_bottom_id"] ?? null), 430, $this->source)) . "\"")) : ("")));
            echo " class=\"clearfix featured-bottom ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_bottom_background_color"] ?? null), 430, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_bottom_separator"] ?? null), 430, $this->source), "html", null, true);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["featured_bottom_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["featured_bottom_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 431
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_bottom_layout_container"] ?? null), 431, $this->source), "html", null, true);
            echo "\">
        ";
            // line 433
            echo "        <div class=\"clearfix featured-bottom__container";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["featured_bottom_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo "\"
          ";
            // line 434
            if ((($context["featured_bottom_animations"] ?? null) == "enabled")) {
                // line 435
                echo "            data-animate-effect=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_bottom_animation_effect"] ?? null), 435, $this->source), "html", null, true);
                echo "\"
          ";
            }
            // line 436
            echo ">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"clearfix featured-bottom__section\">
                ";
            // line 440
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom", [], "any", false, false, true, 440), 440, $this->source), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 446
            echo "      </div>
    </div>
    ";
            // line 449
            echo "  ";
        }
        // line 450
        echo "
  ";
        // line 451
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sub_featured", [], "any", false, false, true, 451)) {
            // line 452
            echo "    ";
            // line 453
            echo "    <div ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["sub_featured_id"] ?? null)) ? ((("id=\"" . $this->sandbox->ensureToStringAllowed(($context["sub_featured_id"] ?? null), 453, $this->source)) . "\"")) : ("")));
            echo " class=\"clearfix sub-featured ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sub_featured_background_color"] ?? null), 453, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sub_featured_separator"] ?? null), 453, $this->source), "html", null, true);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["sub_featured_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["sub_featured_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 454
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sub_featured_layout_container"] ?? null), 454, $this->source), "html", null, true);
            echo "\">
        ";
            // line 456
            echo "        <div class=\"clearfix sub-featured__container";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["sub_featured_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo "\"
          ";
            // line 457
            if ((($context["sub_featured_animations"] ?? null) == "enabled")) {
                // line 458
                echo "            data-animate-effect=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sub_featured_animation_effect"] ?? null), 458, $this->source), "html", null, true);
                echo "\"
          ";
            }
            // line 459
            echo ">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"clearfix sub-featured__section\">
                ";
            // line 463
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sub_featured", [], "any", false, false, true, 463), 463, $this->source), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 469
            echo "      </div>
    </div>
    ";
            // line 472
            echo "  ";
        }
        // line 473
        echo "
  ";
        // line 474
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted_top", [], "any", false, false, true, 474)) {
            // line 475
            echo "    ";
            // line 476
            echo "    <div ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["highlighted_top_id"] ?? null)) ? ((("id=\"" . $this->sandbox->ensureToStringAllowed(($context["highlighted_top_id"] ?? null), 476, $this->source)) . "\"")) : ("")));
            echo " class=\"clearfix highlighted-top ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_top_background_color"] ?? null), 476, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_top_separator"] ?? null), 476, $this->source), "html", null, true);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["highlighted_top_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["highlighted_top_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 477
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_top_layout_container"] ?? null), 477, $this->source), "html", null, true);
            echo "\">
        ";
            // line 479
            echo "        <div class=\"clearfix highlighted-top__container";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["highlighted_top_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo "\"
          ";
            // line 480
            if ((($context["highlighted_top_animations"] ?? null) == "enabled")) {
                // line 481
                echo "            data-animate-effect=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_top_animation_effect"] ?? null), 481, $this->source), "html", null, true);
                echo "\"
          ";
            }
            // line 482
            echo ">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"clearfix highlighted-top__section\">
                ";
            // line 486
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted_top", [], "any", false, false, true, 486), 486, $this->source), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 492
            echo "      </div>
    </div>
    ";
            // line 495
            echo "  ";
        }
        // line 496
        echo "
  ";
        // line 497
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 497)) {
            // line 498
            echo "    ";
            // line 499
            echo "    <div ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["highlighted_id"] ?? null)) ? ((("id=\"" . $this->sandbox->ensureToStringAllowed(($context["highlighted_id"] ?? null), 499, $this->source)) . "\"")) : ("")));
            echo " class=\"clearfix highlighted ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_background_color"] ?? null), 499, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_separator"] ?? null), 499, $this->source), "html", null, true);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["highlighted_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["highlighted_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 500
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_layout_container"] ?? null), 500, $this->source), "html", null, true);
            echo "\">
        ";
            // line 502
            echo "        <div class=\"clearfix highlighted__container";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["highlighted_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo "\"
          ";
            // line 503
            if ((($context["highlighted_animations"] ?? null) == "enabled")) {
                // line 504
                echo "            data-animate-effect=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_animation_effect"] ?? null), 504, $this->source), "html", null, true);
                echo "\"
          ";
            }
            // line 505
            echo ">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"clearfix highlighted__section\">
                ";
            // line 509
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 509), 509, $this->source), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 515
            echo "      </div>
    </div>
    ";
            // line 518
            echo "  ";
        }
        // line 519
        echo "
  ";
        // line 520
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_top_first", [], "any", false, false, true, 520) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_top_second", [], "any", false, false, true, 520))) {
            // line 521
            echo "    ";
            // line 522
            echo "    <div ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["footer_top_id"] ?? null)) ? ((("id=\"" . $this->sandbox->ensureToStringAllowed(($context["footer_top_id"] ?? null), 522, $this->source)) . "\"")) : ("")));
            echo " class=\"clearfix footer-top ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_regions"] ?? null), 522, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_background_color"] ?? null), 522, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_separator"] ?? null), 522, $this->source), "html", null, true);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["footer_top_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["footer_top_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 523
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_layout_container"] ?? null), 523, $this->source), "html", null, true);
            echo "\">
        ";
            // line 525
            echo "        <div class=\"clearfix footer-top__container";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["footer_top_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo "\"
          ";
            // line 526
            if ((($context["footer_top_animations"] ?? null) == "enabled")) {
                // line 527
                echo "            data-animate-effect=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_animation_effect"] ?? null), 527, $this->source), "html", null, true);
                echo "\"
          ";
            }
            // line 528
            echo ">
          <div class=\"row\">
            ";
            // line 530
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_top_first", [], "any", false, false, true, 530)) {
                // line 531
                echo "              <div class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_first_grid_class"] ?? null), 531, $this->source), "html", null, true);
                echo "\">
                ";
                // line 533
                echo "                <div class=\"clearfix footer-top__section footer-top-first\">
                  ";
                // line 534
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_top_first", [], "any", false, false, true, 534), 534, $this->source), "html", null, true);
                echo "
                </div>
                ";
                // line 537
                echo "              </div>
            ";
            }
            // line 539
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_top_second", [], "any", false, false, true, 539)) {
                // line 540
                echo "              <div class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_second_grid_class"] ?? null), 540, $this->source), "html", null, true);
                echo "\">
                ";
                // line 542
                echo "                <div class=\"clearfix footer-top__section footer-top-second\">
                  ";
                // line 543
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_top_second", [], "any", false, false, true, 543), 543, $this->source), "html", null, true);
                echo "
                </div>
                ";
                // line 546
                echo "              </div>
            ";
            }
            // line 548
            echo "          </div>
        </div>
        ";
            // line 551
            echo "      </div>
    </div>
    ";
            // line 554
            echo "  ";
        }
        // line 555
        echo "
  ";
        // line 556
        if (((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 556) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 556)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 556)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 556)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fifth", [], "any", false, false, true, 556))) {
            // line 557
            echo "    ";
            // line 558
            echo "    <footer ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["footer_id"] ?? null)) ? ((("id=\"" . $this->sandbox->ensureToStringAllowed(($context["footer_id"] ?? null), 558, $this->source)) . "\"")) : ("")));
            echo " class=\"clearfix footer ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_background_color"] ?? null), 558, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_separator"] ?? null), 558, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["footer_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["footer_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 559
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_layout_container"] ?? null), 559, $this->source), "html", null, true);
            echo "\">
        <div class=\"clearfix footer__container\">
          <div class=\"row\">
            ";
            // line 562
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 562)) {
                // line 563
                echo "              <div class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_first_grid_class"] ?? null), 563, $this->source), "html", null, true);
                echo "\">
                ";
                // line 565
                echo "                <div class=\"clearfix footer__section footer-first";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["footer_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
                echo "\"
                  ";
                // line 566
                if ((($context["footer_animations"] ?? null) == "enabled")) {
                    // line 567
                    echo "                    data-animate-effect=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_animation_effect"] ?? null), 567, $this->source), "html", null, true);
                    echo "\"
                  ";
                }
                // line 568
                echo ">
                  ";
                // line 569
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 569), 569, $this->source), "html", null, true);
                echo "
                </div>
                ";
                // line 572
                echo "              </div>
            ";
            }
            // line 574
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 574)) {
                // line 575
                echo "              <div class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_second_grid_class"] ?? null), 575, $this->source), "html", null, true);
                echo "\">
                ";
                // line 577
                echo "                <div class=\"clearfix footer__section footer-second";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["footer_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
                echo "\"
                  ";
                // line 578
                if ((($context["footer_animations"] ?? null) == "enabled")) {
                    // line 579
                    echo "                    data-animate-effect=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_animation_effect"] ?? null), 579, $this->source), "html", null, true);
                    echo "\"
                  ";
                }
                // line 580
                echo ">
                  ";
                // line 581
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 581), 581, $this->source), "html", null, true);
                echo "
                </div>
                ";
                // line 584
                echo "              </div>
            ";
            }
            // line 586
            echo "            <div class=\"clearfix ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_4_columns_clearfix_first"] ?? null), 586, $this->source), "html", null, true);
            echo "\"></div>
            ";
            // line 587
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 587)) {
                // line 588
                echo "              <div class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_third_grid_class"] ?? null), 588, $this->source), "html", null, true);
                echo "\">
                ";
                // line 590
                echo "                <div class=\"clearfix footer__section footer-third";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["footer_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
                echo "\"
                  ";
                // line 591
                if ((($context["footer_animations"] ?? null) == "enabled")) {
                    // line 592
                    echo "                    data-animate-effect=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_animation_effect"] ?? null), 592, $this->source), "html", null, true);
                    echo "\"
                  ";
                }
                // line 593
                echo ">
                  ";
                // line 594
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 594), 594, $this->source), "html", null, true);
                echo "
                </div>
                ";
                // line 597
                echo "              </div>
            ";
            }
            // line 599
            echo "            <div class=\"clearfix ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_4_columns_clearfix_second"] ?? null), 599, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_5_columns_clearfix"] ?? null), 599, $this->source), "html", null, true);
            echo "\"></div>
            ";
            // line 600
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 600)) {
                // line 601
                echo "              <div class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_fourth_grid_class"] ?? null), 601, $this->source), "html", null, true);
                echo "\">
                ";
                // line 603
                echo "                <div class=\"clearfix footer__section footer-fourth";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["footer_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
                echo "\"
                  ";
                // line 604
                if ((($context["footer_animations"] ?? null) == "enabled")) {
                    // line 605
                    echo "                    data-animate-effect=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_animation_effect"] ?? null), 605, $this->source), "html", null, true);
                    echo "\"
                  ";
                }
                // line 606
                echo ">
                  ";
                // line 607
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 607), 607, $this->source), "html", null, true);
                echo "
                </div>
                ";
                // line 610
                echo "              </div>
            ";
            }
            // line 612
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fifth", [], "any", false, false, true, 612)) {
                // line 613
                echo "              <div class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_fifth_grid_class"] ?? null), 613, $this->source), "html", null, true);
                echo "\">
                ";
                // line 615
                echo "                <div class=\"clearfix footer__section footer-fifth";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["footer_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
                echo "\"
                  ";
                // line 616
                if ((($context["footer_animations"] ?? null) == "enabled")) {
                    // line 617
                    echo "                    data-animate-effect=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_animation_effect"] ?? null), 617, $this->source), "html", null, true);
                    echo "\"
                  ";
                }
                // line 618
                echo ">
                  ";
                // line 619
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fifth", [], "any", false, false, true, 619), 619, $this->source), "html", null, true);
                echo "
                </div>
                ";
                // line 622
                echo "              </div>
            ";
            }
            // line 624
            echo "          </div>
        </div>
      </div>
    </footer>
    ";
            // line 629
            echo "  ";
        }
        // line 630
        echo "
  ";
        // line 631
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom", [], "any", false, false, true, 631)) {
            // line 632
            echo "    ";
            // line 633
            echo "    <div ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["footer_bottom_id"] ?? null)) ? ((("id=\"" . $this->sandbox->ensureToStringAllowed(($context["footer_bottom_id"] ?? null), 633, $this->source)) . "\"")) : ("")));
            echo " class=\"clearfix footer-bottom ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_bottom_background_color"] ?? null), 633, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_bottom_separator"] ?? null), 633, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["footer_bottom_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["footer_bottom_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 634
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_bottom_layout_container"] ?? null), 634, $this->source), "html", null, true);
            echo "\">
        ";
            // line 636
            echo "        <div class=\"clearfix footer-bottom__container\">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"clearfix footer-bottom__section\">
                ";
            // line 640
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom", [], "any", false, false, true, 640), 640, $this->source), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 646
            echo "      </div>
    </div>
    ";
            // line 649
            echo "  ";
        }
        // line 650
        echo "
  ";
        // line 651
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sub_footer_first", [], "any", false, false, true, 651) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 651))) {
            // line 652
            echo "    ";
            // line 653
            echo "    <div ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["subfooter_id"] ?? null)) ? ((("id=\"" . $this->sandbox->ensureToStringAllowed(($context["subfooter_id"] ?? null), 653, $this->source)) . "\"")) : ("")));
            echo " class=\"clearfix subfooter ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subfooter_background_color"] ?? null), 653, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subfooter_separator"] ?? null), 653, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["subfooter_bottom_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["subfooter_bottom_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 654
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subfooter_layout_container"] ?? null), 654, $this->source), "html", null, true);
            echo "\">
        ";
            // line 656
            echo "        <div class=\"clearfix subfooter__container\">
          <div class=\"row\">
            ";
            // line 658
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sub_footer_first", [], "any", false, false, true, 658)) {
                // line 659
                echo "              <div class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subfooter_first_grid_class"] ?? null), 659, $this->source), "html", null, true);
                echo "\">
                ";
                // line 661
                echo "                <div class=\"clearfix subfooter__section subfooter-first\">
                  ";
                // line 662
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sub_footer_first", [], "any", false, false, true, 662), 662, $this->source), "html", null, true);
                echo "
                </div>
                ";
                // line 665
                echo "              </div>
            ";
            }
            // line 667
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 667)) {
                // line 668
                echo "              <div class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subfooter_second_grid_class"] ?? null), 668, $this->source), "html", null, true);
                echo "\">
                ";
                // line 670
                echo "                <div class=\"clearfix subfooter__section subfooter-second\">
                  ";
                // line 671
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 671), 671, $this->source), "html", null, true);
                echo "
                </div>
                ";
                // line 674
                echo "              </div>
            ";
            }
            // line 676
            echo "          </div>
        </div>
        ";
            // line 679
            echo "      </div>
    </div>
    ";
            // line 682
            echo "  ";
        }
        // line 683
        echo "
  ";
        // line 684
        if (($context["scroll_to_top_display"] ?? null)) {
            // line 685
            echo "  ";
            // line 686
            echo "    <div class=\"to-top\"><i class=\"fa ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["scroll_to_top_icon"] ?? null), 686, $this->source), "html", null, true);
            echo "\"></i></div>
  ";
            // line 688
            echo "  ";
        }
        // line 689
        echo "
</div>
";
        // line 692
        echo "
<style>
.titulo{
  font-size: 50px;
  margin-bottom: 0.5em;
  margin-top: 0;
  font-family: 'Fira Sans',Helvetica Neue,Arial,Sans-serif;
  font-weight: 400;
  line-height: 1.20;
  padding: 0;
  margin: 20px 0 10px 0;
  text-transform: uppercase;
  color: #363636;
  text-rendering: optimizeLegibility;
}
.descripcion{
  color: #363636;
  font-weight: bold;
}
.page-title{
  display:none;
}
</style>";
    }

    public function getTemplateName()
    {
        return "themes/contrib/corporate_lite/templates/page--contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1520 => 692,  1516 => 689,  1513 => 688,  1508 => 686,  1506 => 685,  1504 => 684,  1501 => 683,  1498 => 682,  1494 => 679,  1490 => 676,  1486 => 674,  1481 => 671,  1478 => 670,  1473 => 668,  1470 => 667,  1466 => 665,  1461 => 662,  1458 => 661,  1453 => 659,  1451 => 658,  1447 => 656,  1443 => 654,  1431 => 653,  1429 => 652,  1427 => 651,  1424 => 650,  1421 => 649,  1417 => 646,  1409 => 640,  1403 => 636,  1399 => 634,  1387 => 633,  1385 => 632,  1383 => 631,  1380 => 630,  1377 => 629,  1371 => 624,  1367 => 622,  1362 => 619,  1359 => 618,  1353 => 617,  1351 => 616,  1346 => 615,  1341 => 613,  1338 => 612,  1334 => 610,  1329 => 607,  1326 => 606,  1320 => 605,  1318 => 604,  1313 => 603,  1308 => 601,  1306 => 600,  1299 => 599,  1295 => 597,  1290 => 594,  1287 => 593,  1281 => 592,  1279 => 591,  1274 => 590,  1269 => 588,  1267 => 587,  1262 => 586,  1258 => 584,  1253 => 581,  1250 => 580,  1244 => 579,  1242 => 578,  1237 => 577,  1232 => 575,  1229 => 574,  1225 => 572,  1220 => 569,  1217 => 568,  1211 => 567,  1209 => 566,  1204 => 565,  1199 => 563,  1197 => 562,  1191 => 559,  1179 => 558,  1177 => 557,  1175 => 556,  1172 => 555,  1169 => 554,  1165 => 551,  1161 => 548,  1157 => 546,  1152 => 543,  1149 => 542,  1144 => 540,  1141 => 539,  1137 => 537,  1132 => 534,  1129 => 533,  1124 => 531,  1122 => 530,  1118 => 528,  1112 => 527,  1110 => 526,  1105 => 525,  1101 => 523,  1088 => 522,  1086 => 521,  1084 => 520,  1081 => 519,  1078 => 518,  1074 => 515,  1066 => 509,  1060 => 505,  1054 => 504,  1052 => 503,  1047 => 502,  1043 => 500,  1032 => 499,  1030 => 498,  1028 => 497,  1025 => 496,  1022 => 495,  1018 => 492,  1010 => 486,  1004 => 482,  998 => 481,  996 => 480,  991 => 479,  987 => 477,  976 => 476,  974 => 475,  972 => 474,  969 => 473,  966 => 472,  962 => 469,  954 => 463,  948 => 459,  942 => 458,  940 => 457,  935 => 456,  931 => 454,  920 => 453,  918 => 452,  916 => 451,  913 => 450,  910 => 449,  906 => 446,  898 => 440,  892 => 436,  886 => 435,  884 => 434,  879 => 433,  875 => 431,  864 => 430,  862 => 429,  860 => 428,  857 => 427,  854 => 426,  850 => 423,  842 => 417,  836 => 413,  830 => 412,  828 => 411,  823 => 410,  819 => 408,  808 => 407,  806 => 406,  804 => 405,  801 => 404,  798 => 403,  794 => 400,  786 => 394,  780 => 390,  774 => 389,  772 => 388,  767 => 387,  763 => 385,  752 => 384,  750 => 383,  748 => 382,  745 => 381,  742 => 380,  738 => 377,  734 => 374,  730 => 372,  725 => 369,  722 => 368,  717 => 366,  714 => 365,  710 => 363,  705 => 360,  702 => 359,  697 => 357,  695 => 356,  691 => 354,  685 => 353,  683 => 352,  678 => 351,  674 => 349,  663 => 348,  661 => 347,  659 => 346,  656 => 345,  650 => 340,  646 => 338,  641 => 335,  638 => 334,  632 => 333,  630 => 332,  623 => 331,  618 => 329,  615 => 328,  611 => 326,  606 => 323,  603 => 322,  597 => 321,  595 => 320,  588 => 319,  583 => 317,  581 => 316,  578 => 315,  575 => 313,  569 => 310,  563 => 306,  561 => 305,  558 => 304,  552 => 303,  550 => 302,  543 => 301,  539 => 299,  529 => 295,  526 => 293,  523 => 292,  519 => 289,  511 => 283,  505 => 279,  499 => 278,  497 => 277,  492 => 276,  488 => 274,  477 => 273,  475 => 272,  473 => 271,  470 => 270,  467 => 269,  463 => 266,  455 => 260,  449 => 256,  443 => 255,  441 => 254,  436 => 253,  432 => 251,  423 => 250,  421 => 249,  419 => 248,  416 => 247,  407 => 241,  401 => 237,  399 => 236,  396 => 235,  393 => 234,  389 => 231,  381 => 225,  375 => 221,  371 => 219,  362 => 218,  360 => 217,  358 => 216,  355 => 215,  352 => 214,  348 => 211,  345 => 210,  341 => 207,  337 => 204,  333 => 202,  328 => 199,  325 => 198,  320 => 196,  317 => 195,  313 => 193,  308 => 190,  305 => 189,  300 => 187,  297 => 186,  293 => 184,  288 => 181,  285 => 180,  280 => 178,  278 => 177,  274 => 175,  270 => 173,  259 => 172,  257 => 171,  255 => 170,  252 => 169,  249 => 168,  245 => 165,  241 => 162,  237 => 160,  232 => 157,  229 => 156,  224 => 154,  221 => 153,  217 => 151,  212 => 148,  209 => 147,  204 => 145,  202 => 144,  198 => 142,  192 => 141,  190 => 140,  185 => 139,  181 => 137,  174 => 136,  172 => 135,  170 => 134,  167 => 133,  164 => 132,  160 => 129,  156 => 126,  152 => 124,  147 => 121,  144 => 120,  139 => 118,  136 => 117,  132 => 115,  127 => 112,  124 => 111,  119 => 109,  117 => 108,  113 => 106,  107 => 105,  105 => 104,  100 => 103,  96 => 101,  89 => 100,  87 => 99,  85 => 98,  81 => 96,  79 => 95,  77 => 94,  73 => 92,  70 => 90,  66 => 87,  63 => 85,  60 => 83,  54 => 79,  50 => 77,  43 => 75,  41 => 74,  39 => 73,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Corporate Lite's theme implementation to display a single page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.html.twig template normally located in the
 * core/modules/system directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - base_path: The base URL path of the Drupal installation. Will usually be
 *   \"/\" unless you have installed Drupal in a sub-directory.
 * - is_front: A flag indicating if the current page is the front page.
 * - logged_in: A flag indicating if the user is registered and signed in.
 * - is_admin: A flag indicating if the user has permission to access
 *   administration pages.
 *
 * Site identity:
 * - front_page: The URL of the front page. Use this instead of base_path when
 *   linking to the front page. This includes the language domain or prefix.
 * - logo: The url of the logo image, as defined in theme settings.
 * - site_name: The name of the site. This is empty when displaying the site
 *   name has been disabled in the theme settings.
 * - site_slogan: The slogan of the site. This is empty when displaying the site
 *   slogan has been disabled in theme settings.

 * Page content (in order of occurrence in the default page.html.twig):
 * - node: Fully loaded node, if there is an automatically-loaded node
 *   associated with the page and the node ID is the second argument in the
 *   page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - page.slideout: Items for the Slideout region.
 * - page.header_top_highlighted_first: Items for the Header Top Highlighted First region.
 * - page.header_top_highlighted_second: Items for the Header Top Highlighted Second region.
 * - page.header_top_first: Items for the Header Top First region.
 * - page.header_top_second: Items for the Header Top Second region.
 * - page.header_first: Items for the Header First region.
 * - page.header: Items for the Header Second region.
 * - page.header_third: Items for the Header Third region.
 * - page.banner: Items for the Banner region.
 * - page.content_top: Items for the Content Top region.
 * - page.content_top_highlighted: Items for the Content Top Highlighted region.
 * - page.content: Items for the Content region.
 * - page.sidebar_first: Items for the First Sidebar region.
 * - page.sidebar_second: Items for the Second Sidebar region.
 * - page.content_bottom_first: Items for the Content Bottom First region.
 * - page.content_bottom_second: Items for the Content Bottom Second region.
 * - page.featured_top: Items for the Featured Top region.
 * - page.featured: Items for the Featured region.
 * - page.featured_bottom: Items for the Featured Bottom region.
 * - page.sub_featured: Items for the Sub Featured region.
 * - page.breadcrumb: Items for the Breadcrumb region.
 * - page.highlighted: Items for the Highlighted region.
 * - page.footer_top_first: Items for the Footer Top First region.
 * - page.footer_top_second: Items for the Footer Top Second region.
 * - page.footer_first: Items for the Footer First region.
 * - page.footer_second: Items for the Footer Second region.
 * - page.footer_third: Items for the Footer Third region.
 * - page.footer_fourth: Items for the Footer Fourth region.
 * - page.footer_fifth: Items for the Footer Fifth region.
 * - page.footer_bottom: Items for the Footer Bottom region.
 * - page.sub_footer_first: Items for the Subfooter First region.
 * - page.footer: Items for the Subfooter Second region.
 *
 * @see template_preprocess_page()
 * @see html.html.twig
 */
#}
{% if page.slideout %}
  {# slideout #}
  <div class=\"clearfix slideout {{ slideout_background_color }}{{ (slideout_blocks_paddings) ? ' region--no-block-paddings' : '' }}{{ (slideout_region_paddings) ? ' region--no-paddings' : '' }}\">
    {# slideout__container #}
    <div class=\"clearfix slideout__container\">
      <div class=\"slideout__section\">
        {{ page.slideout }}
      </div>
    </div>
    {# EOF:slideout__container #}
  </div>
  {# EOF: slideout #}

  {# EOF: slideout-toggle #}
  <button class=\"slideout-toggle slideout-toggle--fixed\"><i class=\"fa fa-bars\"></i></button>
  {# EOF: slideout-toggle #}
{% endif %}

{# page-container #}
<div class=\"page-container\">

  {% if page.header_top_first or page.header_top_second or page.header_first or page.header or page.header_third or page.header_top_highlighted_first or page.header_top_highlighted_second %}
    {# header-container #}
    <div class=\"header-container\">

      {% if page.header_top_highlighted_first or page.header_top_highlighted_second %}
        {# header_top_highlighted #}
        <div class=\"clearfix header-top-highlighted {{ header_top_highlighted_background_color }}{{ (header_top_highlighted_blocks_paddings) ? ' region--no-block-paddings' : '' }}{{ (header_top_highlighted_region_paddings) ? ' region--no-paddings' : '' }}\">
          <div class=\"{{ header_top_highlighted_layout_container }}\">
            {# header_top_highlighted__container #}
            <div class=\"clearfix header-top-highlighted__container{{ (header_top_highlighted_animations == \"enabled\") ? ' mt-no-opacity' : '' }}\"
              {% if header_top_highlighted_animations == \"enabled\" %}
                data-animate-effect=\"{{ header_top_highlighted_animation_effect }}\"
              {% endif %}>
              <div class=\"row\">
                {% if page.header_top_highlighted_first %}
                  <div class=\"{{ header_top_highlighted_first_grid_class }}\">
                    {# header-top-highlighted-first #}
                    <div class=\"clearfix header-top-highlighted__section header-top-highlighted-first\">
                      {{ page.header_top_highlighted_first }}
                    </div>
                    {# EOF:header-top-highlighted-first #}
                  </div>
                {% endif %}
                {% if page.header_top_highlighted_second %}
                  <div class=\"{{ header_top_highlighted_second_grid_class }}\">
                    {# header-top-highlighted-second #}
                    <div class=\"clearfix header-top-highlighted__section header-top-highlighted-second\">
                      {{ page.header_top_highlighted_second }}
                    </div>
                    {# EOF:header-top-highlighted-second #}
                  </div>
                {% endif %}
              </div>
            </div>
            {# EOF:header-top-highlighted__container #}
          </div>
        </div>
        {# EOF: header-top-highlighted #}
      {% endif %}

      {% if page.header_top_first or page.header_top_second %}
        {# header-top #}
        <div class=\"clearfix header-top {{ header_top_background_color }}{{ (header_top_blocks_paddings) ? ' region--no-block-paddings' : '' }}{{ (header_top_region_paddings) ? ' region--no-paddings' : '' }}\">
          <div class=\"{{ header_top_layout_container }}\">
            {# header-top__container #}
            <div class=\"clearfix header-top__container{{ (header_top_animations == \"enabled\") ? ' mt-no-opacity' : '' }}\"
              {% if header_top_animations == \"enabled\" %}
                data-animate-effect=\"{{ header_top_animation_effect }}\"
              {% endif %}>
              <div class=\"row\">
                {% if page.header_top_first %}
                  <div class=\"{{ header_top_first_grid_class }}\">
                    {# header-top-first #}
                    <div class=\"clearfix header-top__section header-top-first\">
                      {{ page.header_top_first }}
                    </div>
                    {# EOF:header-top-first #}
                  </div>
                {% endif %}
                {% if page.header_top_second %}
                  <div class=\"{{ header_top_second_grid_class }}\">
                    {# header-top-second #}
                    <div class=\"clearfix header-top__section header-top-second\">
                      {{ page.header_top_second }}
                    </div>
                    {# EOF:header-top-second #}
                  </div>
                {% endif %}
              </div>
            </div>
            {# EOF: header-top__container #}
          </div>
        </div>
        {# EOF: header-top #}
      {% endif %}

      {% if page.header_first or page.header or page.header_third %}
        {# header #}
        <header role=\"banner\" class=\"clearfix header {{ header_background_color }} {{ header_layout_container_class }} {{ header_layout_columns_class }}{{ (header_blocks_paddings) ? ' region--no-block-paddings' : '' }}{{ (header_region_paddings) ? ' region--no-paddings' : '' }}\">
          <div class=\"{{ header_layout_container }}\">
            {# header__container #}
            <div class=\"clearfix header__container\">
              <div class=\"row\">
                {% if page.header_third %}
                  <div class=\"{{ header_third_grid_class }}\">
                    {# header-third #}
                    <div class=\"clearfix header__section header-third\">
                      {{ page.header_third }}
                    </div>
                    {# EOF:header-third #}
                  </div>
                {% endif %}
                {% if page.header_first %}
                  <div class=\"{{ header_first_grid_class }}\">
                    {# header-first #}
                    <div class=\"clearfix header__section header-first\">
                      {{ page.header_first }}
                    </div>
                    {# EOF:header-first #}
                  </div>
                {% endif %}
                {% if page.header %}
                  <div class=\"{{ header_second_grid_class }}\">
                    {# header-second #}
                    <div class=\"clearfix header__section header-second\">
                      {{ page.header }}
                    </div>
                    {# EOF:header-second #}
                  </div>
                {% endif %}
              </div>
            </div>
            {# EOF: header__container #}
          </div>
        </header>
        {# EOF: header #}
      {% endif %}

    </div>
    {# EOF: header-container #}
  {% endif %}

  {% if page.banner %}
    {# banner #}
    <div {{ banner_id ? ('id=\"' ~ banner_id ~ '\"') | raw : '' }} class=\"clearfix banner {{ banner_background_color }}{{ (banner_blocks_paddings) ? ' region--no-block-paddings' : '' }}{{ (banner_region_paddings) ? ' region--no-paddings' : '' }}\">
      <div class=\"{{ banner_layout_container }}\">
        {# banner__container #}
        <div class=\"clearfix banner__container\">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"banner__section\">
                {{ page.banner }}
              </div>
            </div>
          </div>
        </div>
        {# EOF: banner__container #}
      </div>
    </div>
    {# EOF:banner #}
  {% endif %}

  {% if page.system_messages %}
    <div class=\"system-messages clearfix\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-12\">
            {{ page.system_messages }}
          </div>
        </div>
      </div>
    </div>
  {% endif %}

  {% if page.content_top %}
    {# content-top #}
    <div {{ content_top_id ? ('id=\"' ~ content_top_id ~ '\"') | raw : ''}} class=\"clearfix content-top {{ content_top_background_color }}{{ (content_top_blocks_paddings) ? ' region--no-block-paddings' : '' }}{{ (content_top_region_paddings) ? ' region--no-paddings' : '' }}\">
      <div class=\"{{ content_top_layout_container }}\">
        {# content-top__container #}
        <div class=\"clearfix content-top__container{{ (content_top_animations == \"enabled\") ? ' mt-no-opacity' : '' }}\"
          {% if content_top_animations == \"enabled\" %}
            data-animate-effect=\"{{ content_top_animation_effect }}\"
          {% endif %}>
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"content-top__section\">
                {{ page.content_top }}
              </div>
            </div>
          </div>
        </div>
        {# EOF:content-top__container #}
      </div>
    </div>
    {# EOF: content-top #}
  {% endif %}

  {% if page.content_top_highlighted %}
    {# content-top-highlighted #}
    <div {{ content_top_highlighted_id ? ('id=\"' ~ content_top_highlighted_id ~ '\"') | raw : ''}} class=\"clearfix content-top-highlighted {{ content_top_highlighted_background_color }} {{ content_top_highlighted_separator }}{{ (content_top_highlighted_blocks_paddings) ? ' region--no-block-paddings' : '' }}{{ (content_top_highlighted_region_paddings) ? ' region--no-paddings' : '' }}\">
      <div class=\"{{ content_top_highlighted_layout_container }}\">
        {# content-top-highlighted__container #}
        <div class=\"clearfix content-top-highlighted__container{{ (content_top_highlighted_animations == \"enabled\") ? ' mt-no-opacity' : '' }}\"
          {% if content_top_highlighted_animations == \"enabled\" %}
            data-animate-effect=\"{{ content_top_highlighted_animation_effect }}\"
          {% endif %}>
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"content-top-highlighted__section\">
                {{ page.content_top_highlighted }}
              </div>
            </div>
          </div>
        </div>
        {# EOF:content-top-highlighted__container #}
      </div>
    </div>
    {# EOF: content-top-highlighted #}
  {% endif %}

  {# main-content #}
  <div {{ main_content_id ? ('id=\"' ~ main_content_id ~ '\"') | raw : ''}} class=\"clearfix main-content region--dark-typography region--white-background  {{ main_content_separator }}\">
    <div class=\"container\">
      <div class=\"clearfix main-content__container\">
        <div class=\"row\">
          <section class=\"{{ main_grid_class }}\">
            {# main #}
            <div class=\"clearfix main-content__section{{ (main_content_animations == \"enabled\") ? ' mt-no-opacity' : '' }}{{ (main_content_blocks_paddings) ? ' region--no-block-paddings' : '' }}{{ (main_content_region_paddings) ? ' region--no-paddings' : '' }}\"
              {% if main_content_animations == \"enabled\" %}
                data-animate-effect=\"{{ main_content_animation_effect }}\"
              {% endif %}>
              {% if page.content %}
              <h1 class=\"titulo\">CONTACTO</h1>
                <p class=\"descripcion\">Usá esta página para escribirnos tus consultas, ideas, sugerencias.
<br>Muchas gracias.
<br>CC Paco Urondo</p>
                {{ page.content }}
                
              {% endif %}
            </div>
            {# EOF:main #}
          </section>
          {% if page.sidebar_first %}
            <aside class=\"{{ sidebar_first_grid_class }}\">
              {# sidebar-first #}
              <section class=\"sidebar__section sidebar-first clearfix{{ (sidebar_first_animations == \"enabled\") ? ' mt-no-opacity' : '' }}{{ (sidebar_first_blocks_paddings) ? ' region--no-block-paddings' : '' }}{{ (sidebar_first_region_paddings) ? ' region--no-paddings' : '' }}\"
                {% if sidebar_first_animations == \"enabled\" %}
                  data-animate-effect=\"{{ sidebar_first_animation_effect }}\"
                {% endif %}>
                {{ page.sidebar_first }}
              </section>
              {# EOF:sidebar-first #}
            </aside>
          {% endif %}
          {% if page.sidebar_second %}
            <aside class=\"{{ sidebar_second_grid_class }}\">
              {# sidebar-second #}
              <section class=\"sidebar__section sidebar-second clearfix{{ (sidebar_second_animations == \"enabled\") ? ' mt-no-opacity' : '' }}{{ (sidebar_second_blocks_paddings) ? ' region--no-block-paddings' : '' }}{{ (sidebar_second_region_paddings) ? ' region--no-paddings' : '' }}\"
                {% if sidebar_second_animations == \"enabled\" %}
                  data-animate-effect=\"{{ sidebar_second_animation_effect }}\"
                {% endif %}>
                {{ page.sidebar_second }}
              </section>
              {# EOF:sidebar-second #}
            </aside>
          {% endif %}
        </div>
      </div>
    </div>
  </div>
  {# EOF:main-content #}

  {% if page.content_bottom_first or page.content_bottom_second %}
    {# content-bottom #}
    <div {{ content_bottom_id ? ('id=\"' ~ content_bottom_id ~ '\"') | raw : ''}} class=\"clearfix content-bottom {{ content_bottom_background_color }} {{ content_bottom_separator }}{{ (content_bottom_blocks_paddings) ? ' region--no-block-paddings' : '' }}{{ (content_bottom_region_paddings) ? ' region--no-paddings' : '' }}\">
      <div class=\"{{ content_bottom_layout_container }}\">
        {# content-bottom__container #}
        <div class=\"clearfix content-bottom__container{{ (content_bottom_animations == \"enabled\") ? ' mt-no-opacity' : '' }}\"
          {% if content_bottom_animations == \"enabled\" %}
            data-animate-effect=\"{{ content_bottom_animation_effect }}\"
          {% endif %}>
          <div class=\"row\">
            {% if page.content_bottom_first %}
              <div class=\"{{ content_bottom_first_grid_class }}\">
                {# content-bottom-first #}
                <div class=\"clearfix content-bottom__section content-bottom-first\">
                  {{ page.content_bottom_first }}
                </div>
                {# EOF:content-bottom-first #}
              </div>
            {% endif %}
            {% if page.content_bottom_second %}
              <div class=\"{{ content_bottom_second_grid_class }}\">
                {# content-bottom-second #}
                <div class=\"clearfix content-bottom__section content-bottom-second\">
                  {{ page.content_bottom_second }}
                </div>
                {# EOF:content-bottom-second #}
              </div>
            {% endif %}
          </div>
        </div>
        {# EOF:content-bottom__container #}
      </div>
    </div>
    {# EOF: content-bottom #}
  {% endif %}

  {% if page.featured_top %}
    {# featured-top #}
    <div {{ featured_top_id ? ('id=\"' ~ featured_top_id ~ '\"') | raw : ''}} class=\"clearfix featured-top {{ featured_top_background_color }} {{ featured_top_separator }}{{ (featured_top_blocks_paddings) ? ' region--no-block-paddings' : '' }}{{ (featured_top_region_paddings) ? ' region--no-paddings' : '' }}\">
      <div class=\"{{ featured_top_layout_container }}\">
        {# featured-top__container #}
        <div class=\"clearfix featured-top__container{{ (featured_top_animations == \"enabled\") ? ' mt-no-opacity' : '' }}\"
          {% if featured_top_animations == \"enabled\" %}
            data-animate-effect=\"{{ featured_top_animation_effect }}\"
          {% endif %}>
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"clearfix featured-top__section\">
                {{ page.featured_top }}
              </div>
            </div>
          </div>
        </div>
        {# EOF:featured-top__container #}
      </div>
    </div>
    {# EOF: featured-top #}
  {% endif %}

  {% if page.featured %}
    {# featured #}
    <div {{ featured_id ? ('id=\"' ~ featured_id ~ '\"') | raw : ''}} class=\"clearfix featured {{ featured_background_color }} {{ featured_separator }}{{ (featured_blocks_paddings) ? ' region--no-block-paddings' : '' }}{{ (featured_region_paddings) ? ' region--no-paddings' : '' }}\">
      <div class=\"{{ featured_layout_container }}\">
        {# featured__container #}
        <div class=\"clearfix featured__container{{ (featured_animations == \"enabled\") ? ' mt-no-opacity' : '' }}\"
          {% if featured_animations == \"enabled\" %}
            data-animate-effect=\"{{ featured_animation_effect }}\"
          {% endif %}>
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"clearfix featured__section\">
                {{ page.featured }}
              </div>
            </div>
          </div>
        </div>
        {# EOF:featured__container #}
      </div>
    </div>
    {# EOF: featured #}
  {% endif %}

  {% if page.featured_bottom %}
    {# featured-bottom #}
    <div {{ featured_bottom_id ? ('id=\"' ~ featured_bottom_id ~ '\"') | raw : ''}} class=\"clearfix featured-bottom {{ featured_bottom_background_color }} {{ featured_bottom_separator }}{{ (featured_bottom_blocks_paddings) ? ' region--no-block-paddings' : '' }}{{ (featured_bottom_region_paddings) ? ' region--no-paddings' : '' }}\">
      <div class=\"{{ featured_bottom_layout_container }}\">
        {# featured-bottom__container #}
        <div class=\"clearfix featured-bottom__container{{ (featured_bottom_animations == \"enabled\") ? ' mt-no-opacity' : '' }}\"
          {% if featured_bottom_animations == \"enabled\" %}
            data-animate-effect=\"{{ featured_bottom_animation_effect }}\"
          {% endif %}>
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"clearfix featured-bottom__section\">
                {{ page.featured_bottom }}
              </div>
            </div>
          </div>
        </div>
        {# EOF:featured-bottom__container #}
      </div>
    </div>
    {# EOF: featured-bottom #}
  {% endif %}

  {% if page.sub_featured %}
    {# sub_featured #}
    <div {{ sub_featured_id ? ('id=\"' ~ sub_featured_id ~ '\"') | raw : ''}} class=\"clearfix sub-featured {{ sub_featured_background_color }} {{ sub_featured_separator }}{{ (sub_featured_blocks_paddings) ? ' region--no-block-paddings' : '' }}{{ (sub_featured_region_paddings) ? ' region--no-paddings' : '' }}\">
      <div class=\"{{ sub_featured_layout_container }}\">
        {# sub_featured__container #}
        <div class=\"clearfix sub-featured__container{{ (sub_featured_animations == \"enabled\") ? ' mt-no-opacity' : '' }}\"
          {% if sub_featured_animations == \"enabled\" %}
            data-animate-effect=\"{{ sub_featured_animation_effect }}\"
          {% endif %}>
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"clearfix sub-featured__section\">
                {{ page.sub_featured }}
              </div>
            </div>
          </div>
        </div>
        {# EOF:sub_featured__container #}
      </div>
    </div>
    {# EOF: sub_featured #}
  {% endif %}

  {% if page.highlighted_top %}
    {# highlighted-top #}
    <div {{ highlighted_top_id ? ('id=\"' ~ highlighted_top_id ~ '\"') | raw : ''}} class=\"clearfix highlighted-top {{ highlighted_top_background_color }} {{ highlighted_top_separator }}{{ (highlighted_top_blocks_paddings) ? ' region--no-block-paddings' : '' }}{{ (highlighted_top_region_paddings) ? ' region--no-paddings' : '' }}\">
      <div class=\"{{ highlighted_top_layout_container }}\">
        {# highlighted-top__container #}
        <div class=\"clearfix highlighted-top__container{{ (highlighted_top_animations == \"enabled\") ? ' mt-no-opacity' : '' }}\"
          {% if highlighted_top_animations == \"enabled\" %}
            data-animate-effect=\"{{ highlighted_top_animation_effect }}\"
          {% endif %}>
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"clearfix highlighted-top__section\">
                {{ page.highlighted_top }}
              </div>
            </div>
          </div>
        </div>
        {# EOF:highlighted-top__container #}
      </div>
    </div>
    {# EOF: highlighted-top #}
  {% endif %}

  {% if page.highlighted %}
    {# highlighted #}
    <div {{ highlighted_id ? ('id=\"' ~ highlighted_id ~ '\"') | raw : ''}} class=\"clearfix highlighted {{ highlighted_background_color }} {{ highlighted_separator }}{{ (highlighted_blocks_paddings) ? ' region--no-block-paddings' : '' }}{{ (highlighted_region_paddings) ? ' region--no-paddings' : '' }}\">
      <div class=\"{{ highlighted_layout_container }}\">
        {# highlighted__container #}
        <div class=\"clearfix highlighted__container{{ (highlighted_animations == \"enabled\") ? ' mt-no-opacity' : '' }}\"
          {% if highlighted_animations == \"enabled\" %}
            data-animate-effect=\"{{ highlighted_animation_effect }}\"
          {% endif %}>
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"clearfix highlighted__section\">
                {{ page.highlighted }}
              </div>
            </div>
          </div>
        </div>
        {# EOF:highlighted__container #}
      </div>
    </div>
    {# EOF: highlighted #}
  {% endif %}

  {% if page.footer_top_first or page.footer_top_second %}
    {# footer-top #}
    <div {{ footer_top_id ? ('id=\"' ~ footer_top_id ~ '\"') | raw : ''}} class=\"clearfix footer-top {{ footer_top_regions }} {{ footer_top_background_color }} {{ footer_top_separator }}{{ (footer_top_blocks_paddings) ? ' region--no-block-paddings' : '' }}{{ (footer_top_region_paddings) ? ' region--no-paddings' : '' }}\">
      <div class=\"{{ footer_top_layout_container }}\">
        {# footer-top__container #}
        <div class=\"clearfix footer-top__container{{ (footer_top_animations == \"enabled\") ? ' mt-no-opacity' : '' }}\"
          {% if footer_top_animations == \"enabled\" %}
            data-animate-effect=\"{{ footer_top_animation_effect }}\"
          {% endif %}>
          <div class=\"row\">
            {% if page.footer_top_first %}
              <div class=\"{{ footer_top_first_grid_class }}\">
                {# footer-top-first #}
                <div class=\"clearfix footer-top__section footer-top-first\">
                  {{ page.footer_top_first }}
                </div>
                {# EOF:footer-top-first #}
              </div>
            {% endif %}
            {% if page.footer_top_second %}
              <div class=\"{{ footer_top_second_grid_class }}\">
                {# footer-top-second #}
                <div class=\"clearfix footer-top__section footer-top-second\">
                  {{ page.footer_top_second }}
                </div>
                {# EOF:footer-top-second #}
              </div>
            {% endif %}
          </div>
        </div>
        {# EOF: footer-top__container #}
      </div>
    </div>
    {# EOF: footer-top #}
  {% endif %}

  {% if page.footer_first or page.footer_second or page.footer_third or page.footer_fourth or page.footer_fifth %}
    {# footer #}
    <footer {{ footer_id ? ('id=\"' ~ footer_id ~ '\"') | raw : ''}} class=\"clearfix footer {{ footer_background_color }} {{ footer_separator }} {{ (footer_blocks_paddings) ? ' region--no-block-paddings' : '' }}{{ (footer_region_paddings) ? ' region--no-paddings' : '' }}\">
      <div class=\"{{ footer_layout_container }}\">
        <div class=\"clearfix footer__container\">
          <div class=\"row\">
            {% if page.footer_first %}
              <div class=\"{{ footer_first_grid_class }}\">
                {# footer-first #}
                <div class=\"clearfix footer__section footer-first{{ (footer_animations == \"enabled\") ? ' mt-no-opacity' : '' }}\"
                  {% if footer_animations == \"enabled\" %}
                    data-animate-effect=\"{{ footer_animation_effect }}\"
                  {% endif %}>
                  {{ page.footer_first }}
                </div>
                {# EOF:footer-first #}
              </div>
            {% endif %}
            {% if page.footer_second %}
              <div class=\"{{ footer_second_grid_class }}\">
                {# footer-second #}
                <div class=\"clearfix footer__section footer-second{{ (footer_animations == \"enabled\") ? ' mt-no-opacity' : '' }}\"
                  {% if footer_animations == \"enabled\" %}
                    data-animate-effect=\"{{ footer_animation_effect }}\"
                  {% endif %}>
                  {{ page.footer_second }}
                </div>
                {# EOF:footer-second #}
              </div>
            {% endif %}
            <div class=\"clearfix {{ footer_4_columns_clearfix_first }}\"></div>
            {% if page.footer_third %}
              <div class=\"{{ footer_third_grid_class }}\">
                {# footer-third #}
                <div class=\"clearfix footer__section footer-third{{ (footer_animations == \"enabled\") ? ' mt-no-opacity' : '' }}\"
                  {% if footer_animations == \"enabled\" %}
                    data-animate-effect=\"{{ footer_animation_effect }}\"
                  {% endif %}>
                  {{ page.footer_third }}
                </div>
                {# EOF:footer-third #}
              </div>
            {% endif %}
            <div class=\"clearfix {{ footer_4_columns_clearfix_second }} {{ footer_5_columns_clearfix }}\"></div>
            {% if page.footer_fourth %}
              <div class=\"{{ footer_fourth_grid_class }}\">
                {# footer-fourth #}
                <div class=\"clearfix footer__section footer-fourth{{ (footer_animations == \"enabled\") ? ' mt-no-opacity' : '' }}\"
                  {% if footer_animations == \"enabled\" %}
                    data-animate-effect=\"{{ footer_animation_effect }}\"
                  {% endif %}>
                  {{ page.footer_fourth }}
                </div>
                {# EOF:footer-fourth #}
              </div>
            {% endif %}
            {% if page.footer_fifth %}
              <div class=\"{{ footer_fifth_grid_class }}\">
                {# footer-fifth #}
                <div class=\"clearfix footer__section footer-fifth{{ (footer_animations == \"enabled\") ? ' mt-no-opacity' : '' }}\"
                  {% if footer_animations == \"enabled\" %}
                    data-animate-effect=\"{{ footer_animation_effect }}\"
                  {% endif %}>
                  {{ page.footer_fifth }}
                </div>
                {# EOF:footer-fifth #}
              </div>
            {% endif %}
          </div>
        </div>
      </div>
    </footer>
    {# EOF footer #}
  {% endif %}

  {% if page.footer_bottom %}
    {# footer-bottom #}
    <div {{ footer_bottom_id ? ('id=\"' ~ footer_bottom_id ~ '\"') | raw : ''}} class=\"clearfix footer-bottom {{ footer_bottom_background_color }} {{ footer_bottom_separator }} {{ (footer_bottom_blocks_paddings) ? ' region--no-block-paddings' : '' }}{{ (footer_bottom_region_paddings) ? ' region--no-paddings' : '' }}\">
      <div class=\"{{ footer_bottom_layout_container }}\">
        {# footer-bottom__container #}
        <div class=\"clearfix footer-bottom__container\">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"clearfix footer-bottom__section\">
                {{ page.footer_bottom }}
              </div>
            </div>
          </div>
        </div>
        {# EOF:footer-bottom__container #}
      </div>
    </div>
    {# EOF: footer-bottom #}
  {% endif %}

  {% if page.sub_footer_first or page.footer %}
    {# subfooter #}
    <div {{ subfooter_id ? ('id=\"' ~ subfooter_id ~ '\"') | raw : ''}} class=\"clearfix subfooter {{ subfooter_background_color }} {{ subfooter_separator }} {{ (subfooter_bottom_blocks_paddings) ? ' region--no-block-paddings' : '' }}{{ (subfooter_bottom_region_paddings) ? ' region--no-paddings' : '' }}\">
      <div class=\"{{ subfooter_layout_container }}\">
        {# subfooter__container #}
        <div class=\"clearfix subfooter__container\">
          <div class=\"row\">
            {% if page.sub_footer_first %}
              <div class=\"{{ subfooter_first_grid_class }}\">
                {# subfooter-first #}
                <div class=\"clearfix subfooter__section subfooter-first\">
                  {{ page.sub_footer_first }}
                </div>
                {# EOF: subfooter-first #}
              </div>
            {% endif %}
            {% if page.footer %}
              <div class=\"{{ subfooter_second_grid_class }}\">
                {# subfooter-second #}
                <div class=\"clearfix subfooter__section subfooter-second\">
                  {{ page.footer }}
                </div>
                {# EOF: subfooter-second #}
              </div>
            {% endif %}
          </div>
        </div>
        {# EOF: subfooter__container #}
      </div>
    </div>
    {# EOF:subfooter #}
  {% endif %}

  {% if scroll_to_top_display %}
  {# to-top #}
    <div class=\"to-top\"><i class=\"fa {{ scroll_to_top_icon }}\"></i></div>
  {# EOF:to-top #}
  {% endif %}

</div>
{# EOF: page-container #}

<style>
.titulo{
  font-size: 50px;
  margin-bottom: 0.5em;
  margin-top: 0;
  font-family: 'Fira Sans',Helvetica Neue,Arial,Sans-serif;
  font-weight: 400;
  line-height: 1.20;
  padding: 0;
  margin: 20px 0 10px 0;
  text-transform: uppercase;
  color: #363636;
  text-rendering: optimizeLegibility;
}
.descripcion{
  color: #363636;
  font-weight: bold;
}
.page-title{
  display:none;
}
</style>", "themes/contrib/corporate_lite/templates/page--contact.html.twig", "/var/www/html/themes/contrib/corporate_lite/templates/page--contact.html.twig");
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
