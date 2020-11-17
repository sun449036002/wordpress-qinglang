<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @CoreVisualizations/_dataTableViz_tagCloud.twig */
class __TwigTemplate_a7ee66f9e20263037f0c38c7ab1645e918ccaad0e412733a2b473c34eda36331 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<div class=\"tagCloud\">
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cloudValues"] ?? $this->getContext($context, "cloudValues")));
        foreach ($context['_seq'] as $context["word"] => $context["value"]) {
            // line 3
            echo "    <span title=\"";
            echo call_user_func_array($this->env->getFilter('rawSafeDecoded')->getCallable(), [$this->getAttribute($context["value"], "word", [])]);
            echo " (";
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["value"], "value", []), "html", null, true);
            echo " ";
            echo \Piwik\piwik_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "translations", [], "any", false, true), ($context["cloudColumn"] ?? $this->getContext($context, "cloudColumn")), [], "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "translations", [], "any", false, true), ($context["cloudColumn"] ?? $this->getContext($context, "cloudColumn")), [], "array"), ($context["cloudColumn"] ?? $this->getContext($context, "cloudColumn")))) : (($context["cloudColumn"] ?? $this->getContext($context, "cloudColumn")))), "html", null, true);
            echo ")\" class=\"word size";
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["value"], "size", []), "html", null, true);
            echo "
    ";
            // line 5
            echo "    ";
            if (($this->getAttribute($context["value"], "value", []) == 0)) {
                echo "valueIsZero";
            }
            echo "\">
    ";
            // line 6
            if ( !($this->getAttribute($this->getAttribute(($context["labelMetadata"] ?? $this->getContext($context, "labelMetadata")), $this->getAttribute($context["value"], "word", []), [], "array"), "url", []) === false)) {
                // line 7
                echo "        <a href=\"";
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["labelMetadata"] ?? $this->getContext($context, "labelMetadata")), $this->getAttribute($context["value"], "word", []), [], "array"), "url", []), "html", null, true);
                echo "\" rel=\"noreferrer noopener\" target=\"_blank\">
    ";
            }
            // line 9
            echo "    ";
            if ( !($this->getAttribute($this->getAttribute(($context["labelMetadata"] ?? $this->getContext($context, "labelMetadata")), $this->getAttribute($context["value"], "word", []), [], "array"), "logo", []) === false)) {
                // line 10
                echo "        <img src=\"";
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["labelMetadata"] ?? $this->getContext($context, "labelMetadata")), $this->getAttribute($context["value"], "word", []), [], "array"), "logo", []), "html", null, true);
                echo "\" width=\"";
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["value"], "logoWidth", []), "html", null, true);
                echo "\" />
    ";
            } else {
                // line 12
                echo "        ";
                echo call_user_func_array($this->env->getFilter('rawSafeDecoded')->getCallable(), [$this->getAttribute($context["value"], "wordTruncated", [])]);
                echo "
    ";
            }
            // line 14
            echo "    ";
            if ( !($this->getAttribute($this->getAttribute(($context["labelMetadata"] ?? $this->getContext($context, "labelMetadata")), $this->getAttribute($context["value"], "word", []), [], "array"), "url", []) === false)) {
                echo "</a>";
            }
            // line 15
            echo "    </span>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['word'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "@CoreVisualizations/_dataTableViz_tagCloud.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 17,  85 => 15,  80 => 14,  74 => 12,  66 => 10,  63 => 9,  57 => 7,  55 => 6,  48 => 5,  37 => 3,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"tagCloud\">
{% for word,value in cloudValues %}
    <span title=\"{{ value.word|rawSafeDecoded }} ({{ value.value }} {{ properties.translations[cloudColumn]|default(cloudColumn) }})\" class=\"word size{{ value.size }}
    {# we strike tags with 0 hits #}
    {% if value.value == 0 %}valueIsZero{% endif %}\">
    {% if labelMetadata[value.word].url is not sameas(false) %}
        <a href=\"{{ labelMetadata[value.word].url }}\" rel=\"noreferrer noopener\" target=\"_blank\">
    {% endif %}
    {% if labelMetadata[value.word].logo is not sameas(false) %}
        <img src=\"{{ labelMetadata[value.word].logo }}\" width=\"{{ value.logoWidth }}\" />
    {% else %}
        {{ value.wordTruncated|rawSafeDecoded }}
    {% endif %}
    {% if labelMetadata[value.word].url is not sameas(false) %}</a>{% endif %}
    </span>
{% endfor %}
</div>
", "@CoreVisualizations/_dataTableViz_tagCloud.twig", "/home/www/wordpress/wp-content/plugins/matomo/app/plugins/CoreVisualizations/templates/_dataTableViz_tagCloud.twig");
    }
}
