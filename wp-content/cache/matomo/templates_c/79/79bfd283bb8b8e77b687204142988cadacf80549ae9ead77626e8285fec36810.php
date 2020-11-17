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

/* @Ecommerce/_profileSummary.twig */
class __TwigTemplate_04bbcffc146309d87c339af47b67e877e196e6d155bcb03a778d3af0004ad4f7 extends \Twig\Template
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
        echo "<div class=\"visitor-profile-summary visitor-profile-lifetimevalue\">
    <h1>";
        // line 2
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Goals_Ecommerce"]), "html", null, true);
        echo "</h1>
    <div>
        <p title=\"";
        // line 4
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Ecommerce_LifeTimeValueDescription", $this->getAttribute(($context["visitorData"] ?? $this->getContext($context, "visitorData")), "visitorId", [])]), "html", null, true);
        echo "\">
            ";
        // line 5
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Ecommerce_VisitorProfileLTV", (("<strong>" . call_user_func_array($this->env->getFilter('money')->getCallable(), [$this->getAttribute(($context["visitorData"] ?? $this->getContext($context, "visitorData")), "totalEcommerceRevenue", []), ($context["idSite"] ?? $this->getContext($context, "idSite"))])) . "</strong>")]);
        echo "
            ";
        // line 6
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Ecommerce_VisitorProfileItemsAndOrders", (("<strong>" . $this->getAttribute(($context["visitorData"] ?? $this->getContext($context, "visitorData")), "totalEcommerceItems", [])) . "</strong>"), (("<strong>" . $this->getAttribute(($context["visitorData"] ?? $this->getContext($context, "visitorData")), "totalEcommerceConversions", [])) . "</strong>")]);
        echo "
        </p>
        <p>";
        // line 9
        if (((($this->getAttribute(($context["visitorData"] ?? null), "totalAbandonedCarts", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["visitorData"] ?? null), "totalAbandonedCarts", []), 0)) : (0)) > 0)) {
            // line 10
            echo "                ";
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Ecommerce_VisitorProfileAbandonedCartSummary", (("<strong>" . $this->getAttribute(($context["visitorData"] ?? $this->getContext($context, "visitorData")), "totalAbandonedCarts", [])) . "</strong>"), (("<strong>" . $this->getAttribute(($context["visitorData"] ?? $this->getContext($context, "visitorData")), "totalAbandonedCartsItems", [])) . "</strong>"), (("<strong>" . call_user_func_array($this->env->getFilter('money')->getCallable(), [$this->getAttribute(($context["visitorData"] ?? $this->getContext($context, "visitorData")), "totalAbandonedCartsRevenue", []), ($context["idSite"] ?? $this->getContext($context, "idSite"))])) . "</strong>")]);
        }
        // line 12
        echo "</p>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "@Ecommerce/_profileSummary.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 12,  53 => 10,  51 => 9,  46 => 6,  42 => 5,  38 => 4,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"visitor-profile-summary visitor-profile-lifetimevalue\">
    <h1>{{ 'Goals_Ecommerce'|translate }}</h1>
    <div>
        <p title=\"{{ 'Ecommerce_LifeTimeValueDescription'|translate(visitorData.visitorId) }}\">
            {{ 'Ecommerce_VisitorProfileLTV'|translate( \"<strong>\" ~ visitorData.totalEcommerceRevenue|money(idSite) ~ \"</strong>\")|raw }}
            {{ 'Ecommerce_VisitorProfileItemsAndOrders'|translate(\"<strong>\" ~ visitorData.totalEcommerceItems ~ \"</strong>\", \"<strong>\" ~ visitorData.totalEcommerceConversions ~ \"</strong>\")|raw }}
        </p>
        <p>
            {%- if visitorData.totalAbandonedCarts|default(0) > 0 %}
                {{ 'Ecommerce_VisitorProfileAbandonedCartSummary'|translate('<strong>' ~ visitorData.totalAbandonedCarts ~ '</strong>', '<strong>' ~ visitorData.totalAbandonedCartsItems ~ '</strong>', '<strong>' ~ visitorData.totalAbandonedCartsRevenue|money(idSite) ~ '</strong>')|raw }}
            {%- endif -%}
        </p>
    </div>
</div>", "@Ecommerce/_profileSummary.twig", "/home/www/wordpress/wp-content/plugins/matomo/app/plugins/Ecommerce/templates/_profileSummary.twig");
    }
}
