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

/* themes/contrib/corporate_lite/templates/page--node--35.html.twig */
class __TwigTemplate_e47b83c4cdb64331b202a097677dcbb8 extends \Twig\Template
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
    }

    public function getTemplateName()
    {
        return "themes/contrib/corporate_lite/templates/page--node--35.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1510 => 684,  1507 => 683,  1502 => 681,  1500 => 680,  1498 => 679,  1495 => 678,  1492 => 677,  1488 => 674,  1484 => 671,  1480 => 669,  1475 => 666,  1472 => 665,  1467 => 663,  1464 => 662,  1460 => 660,  1455 => 657,  1452 => 656,  1447 => 654,  1445 => 653,  1441 => 651,  1437 => 649,  1425 => 648,  1423 => 647,  1421 => 646,  1418 => 645,  1415 => 644,  1411 => 641,  1403 => 635,  1397 => 631,  1393 => 629,  1381 => 628,  1379 => 627,  1377 => 626,  1374 => 625,  1371 => 624,  1365 => 619,  1361 => 617,  1356 => 614,  1353 => 613,  1347 => 612,  1345 => 611,  1340 => 610,  1335 => 608,  1332 => 607,  1328 => 605,  1323 => 602,  1320 => 601,  1314 => 600,  1312 => 599,  1307 => 598,  1302 => 596,  1300 => 595,  1293 => 594,  1289 => 592,  1284 => 589,  1281 => 588,  1275 => 587,  1273 => 586,  1268 => 585,  1263 => 583,  1261 => 582,  1256 => 581,  1252 => 579,  1247 => 576,  1244 => 575,  1238 => 574,  1236 => 573,  1231 => 572,  1226 => 570,  1223 => 569,  1219 => 567,  1214 => 564,  1211 => 563,  1205 => 562,  1203 => 561,  1198 => 560,  1193 => 558,  1191 => 557,  1185 => 554,  1173 => 553,  1171 => 552,  1169 => 551,  1166 => 550,  1163 => 549,  1159 => 546,  1155 => 543,  1151 => 541,  1146 => 538,  1143 => 537,  1138 => 535,  1135 => 534,  1131 => 532,  1126 => 529,  1123 => 528,  1118 => 526,  1116 => 525,  1112 => 523,  1106 => 522,  1104 => 521,  1099 => 520,  1095 => 518,  1082 => 517,  1080 => 516,  1078 => 515,  1075 => 514,  1072 => 513,  1068 => 510,  1060 => 504,  1054 => 500,  1048 => 499,  1046 => 498,  1041 => 497,  1037 => 495,  1026 => 494,  1024 => 493,  1022 => 492,  1019 => 491,  1016 => 490,  1012 => 487,  1004 => 481,  998 => 477,  992 => 476,  990 => 475,  985 => 474,  981 => 472,  970 => 471,  968 => 470,  966 => 469,  963 => 468,  960 => 467,  956 => 464,  948 => 458,  942 => 454,  936 => 453,  934 => 452,  929 => 451,  925 => 449,  914 => 448,  912 => 447,  910 => 446,  907 => 445,  904 => 444,  900 => 441,  892 => 435,  886 => 431,  880 => 430,  878 => 429,  873 => 428,  869 => 426,  858 => 425,  856 => 424,  854 => 423,  851 => 422,  848 => 421,  844 => 418,  836 => 412,  830 => 408,  824 => 407,  822 => 406,  817 => 405,  813 => 403,  802 => 402,  800 => 401,  798 => 400,  795 => 399,  792 => 398,  788 => 395,  780 => 389,  774 => 385,  768 => 384,  766 => 383,  761 => 382,  757 => 380,  746 => 379,  744 => 378,  742 => 377,  739 => 376,  736 => 375,  732 => 372,  728 => 369,  724 => 367,  719 => 364,  716 => 363,  711 => 361,  708 => 360,  704 => 358,  699 => 355,  696 => 354,  691 => 352,  689 => 351,  685 => 349,  679 => 348,  677 => 347,  672 => 346,  668 => 344,  657 => 343,  655 => 342,  653 => 341,  650 => 340,  644 => 335,  640 => 333,  635 => 330,  632 => 329,  626 => 328,  624 => 327,  617 => 326,  612 => 324,  609 => 323,  605 => 321,  600 => 318,  597 => 317,  591 => 316,  589 => 315,  582 => 314,  577 => 312,  575 => 311,  572 => 310,  569 => 308,  563 => 306,  561 => 305,  558 => 304,  552 => 303,  550 => 302,  543 => 301,  539 => 299,  529 => 295,  526 => 293,  523 => 292,  519 => 289,  511 => 283,  505 => 279,  499 => 278,  497 => 277,  492 => 276,  488 => 274,  477 => 273,  475 => 272,  473 => 271,  470 => 270,  467 => 269,  463 => 266,  455 => 260,  449 => 256,  443 => 255,  441 => 254,  436 => 253,  432 => 251,  423 => 250,  421 => 249,  419 => 248,  416 => 247,  407 => 241,  401 => 237,  399 => 236,  396 => 235,  393 => 234,  389 => 231,  381 => 225,  375 => 221,  371 => 219,  362 => 218,  360 => 217,  358 => 216,  355 => 215,  352 => 214,  348 => 211,  345 => 210,  341 => 207,  337 => 204,  333 => 202,  328 => 199,  325 => 198,  320 => 196,  317 => 195,  313 => 193,  308 => 190,  305 => 189,  300 => 187,  297 => 186,  293 => 184,  288 => 181,  285 => 180,  280 => 178,  278 => 177,  274 => 175,  270 => 173,  259 => 172,  257 => 171,  255 => 170,  252 => 169,  249 => 168,  245 => 165,  241 => 162,  237 => 160,  232 => 157,  229 => 156,  224 => 154,  221 => 153,  217 => 151,  212 => 148,  209 => 147,  204 => 145,  202 => 144,  198 => 142,  192 => 141,  190 => 140,  185 => 139,  181 => 137,  174 => 136,  172 => 135,  170 => 134,  167 => 133,  164 => 132,  160 => 129,  156 => 126,  152 => 124,  147 => 121,  144 => 120,  139 => 118,  136 => 117,  132 => 115,  127 => 112,  124 => 111,  119 => 109,  117 => 108,  113 => 106,  107 => 105,  105 => 104,  100 => 103,  96 => 101,  89 => 100,  87 => 99,  85 => 98,  81 => 96,  79 => 95,  77 => 94,  73 => 92,  70 => 90,  66 => 87,  63 => 85,  60 => 83,  54 => 79,  50 => 77,  43 => 75,  41 => 74,  39 => 73,);
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
{# EOF: page-container #}", "themes/contrib/corporate_lite/templates/page--node--35.html.twig", "/var/www/html/themes/contrib/corporate_lite/templates/page--node--35.html.twig");
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
