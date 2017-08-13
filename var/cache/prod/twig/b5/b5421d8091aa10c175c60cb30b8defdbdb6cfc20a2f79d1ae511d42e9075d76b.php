<?php

/* form_div_layout.html.twig */
class __TwigTemplate_4bf53750c2d6d409fe95117a3cae813e31317ccef4d5ac70d8a5034a3ad03dee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_widget' => array($this, 'block_form_widget'),
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'form_widget_compound' => array($this, 'block_form_widget_compound'),
            'collection_widget' => array($this, 'block_collection_widget'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'choice_widget' => array($this, 'block_choice_widget'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'choice_widget_options' => array($this, 'block_choice_widget_options'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'radio_widget' => array($this, 'block_radio_widget'),
            'datetime_widget' => array($this, 'block_datetime_widget'),
            'date_widget' => array($this, 'block_date_widget'),
            'time_widget' => array($this, 'block_time_widget'),
            'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
            'number_widget' => array($this, 'block_number_widget'),
            'integer_widget' => array($this, 'block_integer_widget'),
            'money_widget' => array($this, 'block_money_widget'),
            'url_widget' => array($this, 'block_url_widget'),
            'search_widget' => array($this, 'block_search_widget'),
            'percent_widget' => array($this, 'block_percent_widget'),
            'password_widget' => array($this, 'block_password_widget'),
            'hidden_widget' => array($this, 'block_hidden_widget'),
            'email_widget' => array($this, 'block_email_widget'),
            'range_widget' => array($this, 'block_range_widget'),
            'button_widget' => array($this, 'block_button_widget'),
            'submit_widget' => array($this, 'block_submit_widget'),
            'reset_widget' => array($this, 'block_reset_widget'),
            'form_label' => array($this, 'block_form_label'),
            'button_label' => array($this, 'block_button_label'),
            'repeated_row' => array($this, 'block_repeated_row'),
            'form_row' => array($this, 'block_form_row'),
            'button_row' => array($this, 'block_button_row'),
            'hidden_row' => array($this, 'block_hidden_row'),
            'form' => array($this, 'block_form'),
            'form_start' => array($this, 'block_form_start'),
            'form_end' => array($this, 'block_form_end'),
            'form_errors' => array($this, 'block_form_errors'),
            'form_rest' => array($this, 'block_form_rest'),
            'form_rows' => array($this, 'block_form_rows'),
            'widget_attributes' => array($this, 'block_widget_attributes'),
            'widget_container_attributes' => array($this, 'block_widget_container_attributes'),
            'button_attributes' => array($this, 'block_button_attributes'),
            'attributes' => array($this, 'block_attributes'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_59588caf933bcdfb97646d7da741e250236ed5bafc96a0d61c99a41d4a97e57b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59588caf933bcdfb97646d7da741e250236ed5bafc96a0d61c99a41d4a97e57b->enter($__internal_59588caf933bcdfb97646d7da741e250236ed5bafc96a0d61c99a41d4a97e57b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_div_layout.html.twig"));

        // line 3
        $this->displayBlock('form_widget', $context, $blocks);
        // line 11
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 16
        $this->displayBlock('form_widget_compound', $context, $blocks);
        // line 26
        $this->displayBlock('collection_widget', $context, $blocks);
        // line 33
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 37
        $this->displayBlock('choice_widget', $context, $blocks);
        // line 45
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 54
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 74
        $this->displayBlock('choice_widget_options', $context, $blocks);
        // line 87
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 91
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 95
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 108
        $this->displayBlock('date_widget', $context, $blocks);
        // line 122
        $this->displayBlock('time_widget', $context, $blocks);
        // line 133
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 168
        $this->displayBlock('number_widget', $context, $blocks);
        // line 174
        $this->displayBlock('integer_widget', $context, $blocks);
        // line 179
        $this->displayBlock('money_widget', $context, $blocks);
        // line 183
        $this->displayBlock('url_widget', $context, $blocks);
        // line 188
        $this->displayBlock('search_widget', $context, $blocks);
        // line 193
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 198
        $this->displayBlock('password_widget', $context, $blocks);
        // line 203
        $this->displayBlock('hidden_widget', $context, $blocks);
        // line 208
        $this->displayBlock('email_widget', $context, $blocks);
        // line 213
        $this->displayBlock('range_widget', $context, $blocks);
        // line 218
        $this->displayBlock('button_widget', $context, $blocks);
        // line 232
        $this->displayBlock('submit_widget', $context, $blocks);
        // line 237
        $this->displayBlock('reset_widget', $context, $blocks);
        // line 244
        $this->displayBlock('form_label', $context, $blocks);
        // line 266
        $this->displayBlock('button_label', $context, $blocks);
        // line 270
        $this->displayBlock('repeated_row', $context, $blocks);
        // line 278
        $this->displayBlock('form_row', $context, $blocks);
        // line 286
        $this->displayBlock('button_row', $context, $blocks);
        // line 292
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 298
        $this->displayBlock('form', $context, $blocks);
        // line 304
        $this->displayBlock('form_start', $context, $blocks);
        // line 318
        $this->displayBlock('form_end', $context, $blocks);
        // line 325
        $this->displayBlock('form_errors', $context, $blocks);
        // line 335
        $this->displayBlock('form_rest', $context, $blocks);
        // line 356
        echo "
";
        // line 359
        $this->displayBlock('form_rows', $context, $blocks);
        // line 365
        $this->displayBlock('widget_attributes', $context, $blocks);
        // line 372
        $this->displayBlock('widget_container_attributes', $context, $blocks);
        // line 377
        $this->displayBlock('button_attributes', $context, $blocks);
        // line 382
        $this->displayBlock('attributes', $context, $blocks);
        
        $__internal_59588caf933bcdfb97646d7da741e250236ed5bafc96a0d61c99a41d4a97e57b->leave($__internal_59588caf933bcdfb97646d7da741e250236ed5bafc96a0d61c99a41d4a97e57b_prof);

    }

    // line 3
    public function block_form_widget($context, array $blocks = array())
    {
        $__internal_02495f84618d51048f05907348985c7ab6eebac74c0600ab822bc6e16cd4f88f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02495f84618d51048f05907348985c7ab6eebac74c0600ab822bc6e16cd4f88f->enter($__internal_02495f84618d51048f05907348985c7ab6eebac74c0600ab822bc6e16cd4f88f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        // line 4
        if (($context["compound"] ?? $this->getContext($context, "compound"))) {
            // line 5
            $this->displayBlock("form_widget_compound", $context, $blocks);
        } else {
            // line 7
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        
        $__internal_02495f84618d51048f05907348985c7ab6eebac74c0600ab822bc6e16cd4f88f->leave($__internal_02495f84618d51048f05907348985c7ab6eebac74c0600ab822bc6e16cd4f88f_prof);

    }

    // line 11
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_92f904907b9332c0b85a111a9d68cbf7eb960b4ed10055792266c3017d9a1336 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92f904907b9332c0b85a111a9d68cbf7eb960b4ed10055792266c3017d9a1336->enter($__internal_92f904907b9332c0b85a111a9d68cbf7eb960b4ed10055792266c3017d9a1336_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 12
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "text")) : ("text"));
        // line 13
        echo "<input type=\"";
        echo twig_escape_filter($this->env, ($context["type"] ?? $this->getContext($context, "type")), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty(($context["value"] ?? $this->getContext($context, "value")))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo "\" ";
        }
        echo "/>";
        
        $__internal_92f904907b9332c0b85a111a9d68cbf7eb960b4ed10055792266c3017d9a1336->leave($__internal_92f904907b9332c0b85a111a9d68cbf7eb960b4ed10055792266c3017d9a1336_prof);

    }

    // line 16
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_c7381cea5b29e10e529ca1dcca5037214ff4759a08cbdff15c1b588617d8f612 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7381cea5b29e10e529ca1dcca5037214ff4759a08cbdff15c1b588617d8f612->enter($__internal_c7381cea5b29e10e529ca1dcca5037214ff4759a08cbdff15c1b588617d8f612_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 17
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 18
        if (twig_test_empty($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array()))) {
            // line 19
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        }
        // line 21
        $this->displayBlock("form_rows", $context, $blocks);
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        // line 23
        echo "</div>";
        
        $__internal_c7381cea5b29e10e529ca1dcca5037214ff4759a08cbdff15c1b588617d8f612->leave($__internal_c7381cea5b29e10e529ca1dcca5037214ff4759a08cbdff15c1b588617d8f612_prof);

    }

    // line 26
    public function block_collection_widget($context, array $blocks = array())
    {
        $__internal_e7ac7fa28ef33f7c67e9e03f611d2a6d8adcde255d6758f026e4a4ed864a22c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7ac7fa28ef33f7c67e9e03f611d2a6d8adcde255d6758f026e4a4ed864a22c7->enter($__internal_e7ac7fa28ef33f7c67e9e03f611d2a6d8adcde255d6758f026e4a4ed864a22c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        // line 27
        if (array_key_exists("prototype", $context)) {
            // line 28
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("data-prototype" => $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["prototype"] ?? $this->getContext($context, "prototype")), 'row')));
        }
        // line 30
        $this->displayBlock("form_widget", $context, $blocks);
        
        $__internal_e7ac7fa28ef33f7c67e9e03f611d2a6d8adcde255d6758f026e4a4ed864a22c7->leave($__internal_e7ac7fa28ef33f7c67e9e03f611d2a6d8adcde255d6758f026e4a4ed864a22c7_prof);

    }

    // line 33
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_ec56f67df5c69421682440aef198ec7ca131b8ebca0a85a9d3d9db4452f6c73b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec56f67df5c69421682440aef198ec7ca131b8ebca0a85a9d3d9db4452f6c73b->enter($__internal_ec56f67df5c69421682440aef198ec7ca131b8ebca0a85a9d3d9db4452f6c73b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 34
        echo "<textarea ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "</textarea>";
        
        $__internal_ec56f67df5c69421682440aef198ec7ca131b8ebca0a85a9d3d9db4452f6c73b->leave($__internal_ec56f67df5c69421682440aef198ec7ca131b8ebca0a85a9d3d9db4452f6c73b_prof);

    }

    // line 37
    public function block_choice_widget($context, array $blocks = array())
    {
        $__internal_41f5cc8bd54e19fa419858c6cf4ca7ed3178dc24086ab537597822a49daad3ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41f5cc8bd54e19fa419858c6cf4ca7ed3178dc24086ab537597822a49daad3ce->enter($__internal_41f5cc8bd54e19fa419858c6cf4ca7ed3178dc24086ab537597822a49daad3ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget"));

        // line 38
        if (($context["expanded"] ?? $this->getContext($context, "expanded"))) {
            // line 39
            $this->displayBlock("choice_widget_expanded", $context, $blocks);
        } else {
            // line 41
            $this->displayBlock("choice_widget_collapsed", $context, $blocks);
        }
        
        $__internal_41f5cc8bd54e19fa419858c6cf4ca7ed3178dc24086ab537597822a49daad3ce->leave($__internal_41f5cc8bd54e19fa419858c6cf4ca7ed3178dc24086ab537597822a49daad3ce_prof);

    }

    // line 45
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_78e48e30f44e713b55f42516eea0ef059928291638568a0e045b7525e1c48566 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78e48e30f44e713b55f42516eea0ef059928291638568a0e045b7525e1c48566->enter($__internal_78e48e30f44e713b55f42516eea0ef059928291638568a0e045b7525e1c48566_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 46
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 48
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget');
            // line 49
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'label', array("translation_domain" => ($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "</div>";
        
        $__internal_78e48e30f44e713b55f42516eea0ef059928291638568a0e045b7525e1c48566->leave($__internal_78e48e30f44e713b55f42516eea0ef059928291638568a0e045b7525e1c48566_prof);

    }

    // line 54
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_c5e4a4f6cc76463a305f7d443ca0225996f2a4c7615b22d5a9d7110d8a836eae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5e4a4f6cc76463a305f7d443ca0225996f2a4c7615b22d5a9d7110d8a836eae->enter($__internal_c5e4a4f6cc76463a305f7d443ca0225996f2a4c7615b22d5a9d7110d8a836eae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 55
        if (((((($context["required"] ?? $this->getContext($context, "required")) && (null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) &&  !($context["placeholder_in_choices"] ?? $this->getContext($context, "placeholder_in_choices"))) &&  !($context["multiple"] ?? $this->getContext($context, "multiple"))) && ( !$this->getAttribute(($context["attr"] ?? null), "size", array(), "any", true, true) || ($this->getAttribute(($context["attr"] ?? $this->getContext($context, "attr")), "size", array()) <= 1)))) {
            // line 56
            $context["required"] = false;
        }
        // line 58
        echo "<select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            echo " multiple=\"multiple\"";
        }
        echo ">";
        // line 59
        if ( !(null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) {
            // line 60
            echo "<option value=\"\"";
            if ((($context["required"] ?? $this->getContext($context, "required")) && twig_test_empty(($context["value"] ?? $this->getContext($context, "value"))))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, (((($context["placeholder"] ?? $this->getContext($context, "placeholder")) != "")) ? ((((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["placeholder"] ?? $this->getContext($context, "placeholder"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["placeholder"] ?? $this->getContext($context, "placeholder")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            echo "</option>";
        }
        // line 62
        if ((twig_length_filter($this->env, ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"))) > 0)) {
            // line 63
            $context["options"] = ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"));
            // line 64
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 65
            if (((twig_length_filter($this->env, ($context["choices"] ?? $this->getContext($context, "choices"))) > 0) &&  !(null === ($context["separator"] ?? $this->getContext($context, "separator"))))) {
                // line 66
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, ($context["separator"] ?? $this->getContext($context, "separator")), "html", null, true);
                echo "</option>";
            }
        }
        // line 69
        $context["options"] = ($context["choices"] ?? $this->getContext($context, "choices"));
        // line 70
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 71
        echo "</select>";
        
        $__internal_c5e4a4f6cc76463a305f7d443ca0225996f2a4c7615b22d5a9d7110d8a836eae->leave($__internal_c5e4a4f6cc76463a305f7d443ca0225996f2a4c7615b22d5a9d7110d8a836eae_prof);

    }

    // line 74
    public function block_choice_widget_options($context, array $blocks = array())
    {
        $__internal_b08f7c9783b2e42c2b670e503d228b350408fd767c56165836ec9846de9eda1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b08f7c9783b2e42c2b670e503d228b350408fd767c56165836ec9846de9eda1e->enter($__internal_b08f7c9783b2e42c2b670e503d228b350408fd767c56165836ec9846de9eda1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_options"));

        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["options"] ?? $this->getContext($context, "options")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["group_label"] => $context["choice"]) {
            // line 76
            if (twig_test_iterable($context["choice"])) {
                // line 77
                echo "<optgroup label=\"";
                echo twig_escape_filter($this->env, (((($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain")) === false)) ? ($context["group_label"]) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["group_label"], array(), ($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))))), "html", null, true);
                echo "\">
                ";
                // line 78
                $context["options"] = $context["choice"];
                // line 79
                $this->displayBlock("choice_widget_options", $context, $blocks);
                // line 80
                echo "</optgroup>";
            } else {
                // line 82
                echo "<option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["choice"], "value", array()), "html", null, true);
                echo "\"";
                if ($this->getAttribute($context["choice"], "attr", array())) {
                    $__internal_d30eda53619c4643a8aa44028f265e5ef31d1188adf260a716a8c5c199c09a06 = array("attr" => $this->getAttribute($context["choice"], "attr", array()));
                    if (!is_array($__internal_d30eda53619c4643a8aa44028f265e5ef31d1188adf260a716a8c5c199c09a06)) {
                        throw new Twig_Error_Runtime('Variables passed to the "with" tag must be a hash.');
                    }
                    $context['_parent'] = $context;
                    $context = array_merge($context, $__internal_d30eda53619c4643a8aa44028f265e5ef31d1188adf260a716a8c5c199c09a06);
                    $this->displayBlock("attributes", $context, $blocks);
                    $context = $context['_parent'];
                }
                if (Symfony\Bridge\Twig\Extension\twig_is_selected_choice($context["choice"], ($context["value"] ?? $this->getContext($context, "value")))) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, (((($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain")) === false)) ? ($this->getAttribute($context["choice"], "label", array())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["choice"], "label", array()), array(), ($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))))), "html", null, true);
                echo "</option>";
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['group_label'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_b08f7c9783b2e42c2b670e503d228b350408fd767c56165836ec9846de9eda1e->leave($__internal_b08f7c9783b2e42c2b670e503d228b350408fd767c56165836ec9846de9eda1e_prof);

    }

    // line 87
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_8c4be0dc5934d8a040013ae1f7d5a420f983945000da411da81fdb296b7a536e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c4be0dc5934d8a040013ae1f7d5a420f983945000da411da81fdb296b7a536e->enter($__internal_8c4be0dc5934d8a040013ae1f7d5a420f983945000da411da81fdb296b7a536e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 88
        echo "<input type=\"checkbox\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo "\"";
        }
        if (($context["checked"] ?? $this->getContext($context, "checked"))) {
            echo " checked=\"checked\"";
        }
        echo " />";
        
        $__internal_8c4be0dc5934d8a040013ae1f7d5a420f983945000da411da81fdb296b7a536e->leave($__internal_8c4be0dc5934d8a040013ae1f7d5a420f983945000da411da81fdb296b7a536e_prof);

    }

    // line 91
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_cb64a1d77cfa19e66b9c3b7d3a3d3e81e425883883dccf1c80b9093feff9d0bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb64a1d77cfa19e66b9c3b7d3a3d3e81e425883883dccf1c80b9093feff9d0bd->enter($__internal_cb64a1d77cfa19e66b9c3b7d3a3d3e81e425883883dccf1c80b9093feff9d0bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 92
        echo "<input type=\"radio\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo "\"";
        }
        if (($context["checked"] ?? $this->getContext($context, "checked"))) {
            echo " checked=\"checked\"";
        }
        echo " />";
        
        $__internal_cb64a1d77cfa19e66b9c3b7d3a3d3e81e425883883dccf1c80b9093feff9d0bd->leave($__internal_cb64a1d77cfa19e66b9c3b7d3a3d3e81e425883883dccf1c80b9093feff9d0bd_prof);

    }

    // line 95
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_0a28340a5122cfdfc7db7c6a0f5634ff382e846a31b69227d395a0a5abfec9d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a28340a5122cfdfc7db7c6a0f5634ff382e846a31b69227d395a0a5abfec9d6->enter($__internal_0a28340a5122cfdfc7db7c6a0f5634ff382e846a31b69227d395a0a5abfec9d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 96
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 97
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 99
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 100
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'errors');
            // line 101
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'errors');
            // line 102
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget');
            // line 103
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'widget');
            // line 104
            echo "</div>";
        }
        
        $__internal_0a28340a5122cfdfc7db7c6a0f5634ff382e846a31b69227d395a0a5abfec9d6->leave($__internal_0a28340a5122cfdfc7db7c6a0f5634ff382e846a31b69227d395a0a5abfec9d6_prof);

    }

    // line 108
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_57b864e54c4cea397a66cd9d4417620b763eff16124bbfef96b2337b76bf7310 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57b864e54c4cea397a66cd9d4417620b763eff16124bbfef96b2337b76bf7310->enter($__internal_57b864e54c4cea397a66cd9d4417620b763eff16124bbfef96b2337b76bf7310_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 109
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 110
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 112
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 113
            echo twig_replace_filter(($context["date_pattern"] ?? $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 114
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 115
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 116
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 118
            echo "</div>";
        }
        
        $__internal_57b864e54c4cea397a66cd9d4417620b763eff16124bbfef96b2337b76bf7310->leave($__internal_57b864e54c4cea397a66cd9d4417620b763eff16124bbfef96b2337b76bf7310_prof);

    }

    // line 122
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_5e5f984d4905b7f66bc5188d879a23b8608e754045f9291a3de8329f24229f38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e5f984d4905b7f66bc5188d879a23b8608e754045f9291a3de8329f24229f38->enter($__internal_5e5f984d4905b7f66bc5188d879a23b8608e754045f9291a3de8329f24229f38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 123
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 124
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 126
            $context["vars"] = (((($context["widget"] ?? $this->getContext($context, "widget")) == "text")) ? (array("attr" => array("size" => 1))) : (array()));
            // line 127
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 128
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget', ($context["vars"] ?? $this->getContext($context, "vars")));
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget', ($context["vars"] ?? $this->getContext($context, "vars")));
            }
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "second", array()), 'widget', ($context["vars"] ?? $this->getContext($context, "vars")));
            }
            // line 129
            echo "        </div>";
        }
        
        $__internal_5e5f984d4905b7f66bc5188d879a23b8608e754045f9291a3de8329f24229f38->leave($__internal_5e5f984d4905b7f66bc5188d879a23b8608e754045f9291a3de8329f24229f38_prof);

    }

    // line 133
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_60d96a0e4db848df829ba996864ea0f9a5fc911214b34423287b2d36a67dccf7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60d96a0e4db848df829ba996864ea0f9a5fc911214b34423287b2d36a67dccf7->enter($__internal_60d96a0e4db848df829ba996864ea0f9a5fc911214b34423287b2d36a67dccf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 134
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 135
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 137
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 138
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            // line 139
            echo "<table class=\"";
            echo twig_escape_filter($this->env, ((array_key_exists("table_class", $context)) ? (_twig_default_filter(($context["table_class"] ?? $this->getContext($context, "table_class")), "")) : ("")), "html", null, true);
            echo "\">
                <thead>
                    <tr>";
            // line 142
            if (($context["with_years"] ?? $this->getContext($context, "with_years"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "years", array()), 'label');
                echo "</th>";
            }
            // line 143
            if (($context["with_months"] ?? $this->getContext($context, "with_months"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "months", array()), 'label');
                echo "</th>";
            }
            // line 144
            if (($context["with_weeks"] ?? $this->getContext($context, "with_weeks"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "weeks", array()), 'label');
                echo "</th>";
            }
            // line 145
            if (($context["with_days"] ?? $this->getContext($context, "with_days"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "days", array()), 'label');
                echo "</th>";
            }
            // line 146
            if (($context["with_hours"] ?? $this->getContext($context, "with_hours"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hours", array()), 'label');
                echo "</th>";
            }
            // line 147
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minutes", array()), 'label');
                echo "</th>";
            }
            // line 148
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "seconds", array()), 'label');
                echo "</th>";
            }
            // line 149
            echo "</tr>
                </thead>
                <tbody>
                    <tr>";
            // line 153
            if (($context["with_years"] ?? $this->getContext($context, "with_years"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "years", array()), 'widget');
                echo "</td>";
            }
            // line 154
            if (($context["with_months"] ?? $this->getContext($context, "with_months"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "months", array()), 'widget');
                echo "</td>";
            }
            // line 155
            if (($context["with_weeks"] ?? $this->getContext($context, "with_weeks"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "weeks", array()), 'widget');
                echo "</td>";
            }
            // line 156
            if (($context["with_days"] ?? $this->getContext($context, "with_days"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "days", array()), 'widget');
                echo "</td>";
            }
            // line 157
            if (($context["with_hours"] ?? $this->getContext($context, "with_hours"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hours", array()), 'widget');
                echo "</td>";
            }
            // line 158
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minutes", array()), 'widget');
                echo "</td>";
            }
            // line 159
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "seconds", array()), 'widget');
                echo "</td>";
            }
            // line 160
            echo "</tr>
                </tbody>
            </table>";
            // line 163
            if (($context["with_invert"] ?? $this->getContext($context, "with_invert"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "invert", array()), 'widget');
            }
            // line 164
            echo "</div>";
        }
        
        $__internal_60d96a0e4db848df829ba996864ea0f9a5fc911214b34423287b2d36a67dccf7->leave($__internal_60d96a0e4db848df829ba996864ea0f9a5fc911214b34423287b2d36a67dccf7_prof);

    }

    // line 168
    public function block_number_widget($context, array $blocks = array())
    {
        $__internal_3270fd69ec2897d7f334d79711e41fd91d60a3091768441599f84b2e1f94d8da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3270fd69ec2897d7f334d79711e41fd91d60a3091768441599f84b2e1f94d8da->enter($__internal_3270fd69ec2897d7f334d79711e41fd91d60a3091768441599f84b2e1f94d8da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "number_widget"));

        // line 170
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "text")) : ("text"));
        // line 171
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_3270fd69ec2897d7f334d79711e41fd91d60a3091768441599f84b2e1f94d8da->leave($__internal_3270fd69ec2897d7f334d79711e41fd91d60a3091768441599f84b2e1f94d8da_prof);

    }

    // line 174
    public function block_integer_widget($context, array $blocks = array())
    {
        $__internal_7febce821bea0051e940d4f1fc93a0f67fd43b434f5484103cd7722c25750d85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7febce821bea0051e940d4f1fc93a0f67fd43b434f5484103cd7722c25750d85->enter($__internal_7febce821bea0051e940d4f1fc93a0f67fd43b434f5484103cd7722c25750d85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "integer_widget"));

        // line 175
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "number")) : ("number"));
        // line 176
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_7febce821bea0051e940d4f1fc93a0f67fd43b434f5484103cd7722c25750d85->leave($__internal_7febce821bea0051e940d4f1fc93a0f67fd43b434f5484103cd7722c25750d85_prof);

    }

    // line 179
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_6ee1e3d13d8465aa861ffff025266d07d1d1bf1585460c173351d2f2a06d6189 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ee1e3d13d8465aa861ffff025266d07d1d1bf1585460c173351d2f2a06d6189->enter($__internal_6ee1e3d13d8465aa861ffff025266d07d1d1bf1585460c173351d2f2a06d6189_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 180
        echo twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" =>         $this->renderBlock("form_widget_simple", $context, $blocks)));
        
        $__internal_6ee1e3d13d8465aa861ffff025266d07d1d1bf1585460c173351d2f2a06d6189->leave($__internal_6ee1e3d13d8465aa861ffff025266d07d1d1bf1585460c173351d2f2a06d6189_prof);

    }

    // line 183
    public function block_url_widget($context, array $blocks = array())
    {
        $__internal_8fe69d98a5c0334a2401f81efae75cc922779c37b6ff324614b5e9a471153117 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fe69d98a5c0334a2401f81efae75cc922779c37b6ff324614b5e9a471153117->enter($__internal_8fe69d98a5c0334a2401f81efae75cc922779c37b6ff324614b5e9a471153117_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "url_widget"));

        // line 184
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "url")) : ("url"));
        // line 185
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_8fe69d98a5c0334a2401f81efae75cc922779c37b6ff324614b5e9a471153117->leave($__internal_8fe69d98a5c0334a2401f81efae75cc922779c37b6ff324614b5e9a471153117_prof);

    }

    // line 188
    public function block_search_widget($context, array $blocks = array())
    {
        $__internal_567461d2c756ed28b88a82fbbf667d06488999472b85d1700ac5739eed432eb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_567461d2c756ed28b88a82fbbf667d06488999472b85d1700ac5739eed432eb9->enter($__internal_567461d2c756ed28b88a82fbbf667d06488999472b85d1700ac5739eed432eb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_widget"));

        // line 189
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "search")) : ("search"));
        // line 190
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_567461d2c756ed28b88a82fbbf667d06488999472b85d1700ac5739eed432eb9->leave($__internal_567461d2c756ed28b88a82fbbf667d06488999472b85d1700ac5739eed432eb9_prof);

    }

    // line 193
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_6fd830d5567380fc71ec4de10adcdf2ca59aa1515d340d179d0e343c1286fd3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fd830d5567380fc71ec4de10adcdf2ca59aa1515d340d179d0e343c1286fd3d->enter($__internal_6fd830d5567380fc71ec4de10adcdf2ca59aa1515d340d179d0e343c1286fd3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 194
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "text")) : ("text"));
        // line 195
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo " %";
        
        $__internal_6fd830d5567380fc71ec4de10adcdf2ca59aa1515d340d179d0e343c1286fd3d->leave($__internal_6fd830d5567380fc71ec4de10adcdf2ca59aa1515d340d179d0e343c1286fd3d_prof);

    }

    // line 198
    public function block_password_widget($context, array $blocks = array())
    {
        $__internal_96400cfb9ecb1fff714f9c8a5657dce8a9b7af4fb3283ec2e1d0f69dc2662061 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96400cfb9ecb1fff714f9c8a5657dce8a9b7af4fb3283ec2e1d0f69dc2662061->enter($__internal_96400cfb9ecb1fff714f9c8a5657dce8a9b7af4fb3283ec2e1d0f69dc2662061_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "password_widget"));

        // line 199
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "password")) : ("password"));
        // line 200
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_96400cfb9ecb1fff714f9c8a5657dce8a9b7af4fb3283ec2e1d0f69dc2662061->leave($__internal_96400cfb9ecb1fff714f9c8a5657dce8a9b7af4fb3283ec2e1d0f69dc2662061_prof);

    }

    // line 203
    public function block_hidden_widget($context, array $blocks = array())
    {
        $__internal_59234a009d1b35ed624052b495b489382af7739e278756bd7a75947a3250a3bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59234a009d1b35ed624052b495b489382af7739e278756bd7a75947a3250a3bf->enter($__internal_59234a009d1b35ed624052b495b489382af7739e278756bd7a75947a3250a3bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_widget"));

        // line 204
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "hidden")) : ("hidden"));
        // line 205
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_59234a009d1b35ed624052b495b489382af7739e278756bd7a75947a3250a3bf->leave($__internal_59234a009d1b35ed624052b495b489382af7739e278756bd7a75947a3250a3bf_prof);

    }

    // line 208
    public function block_email_widget($context, array $blocks = array())
    {
        $__internal_c52bb6558657cfd93616bb2b7594b9c1960cee0eacabf7497761a2b872ae0192 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c52bb6558657cfd93616bb2b7594b9c1960cee0eacabf7497761a2b872ae0192->enter($__internal_c52bb6558657cfd93616bb2b7594b9c1960cee0eacabf7497761a2b872ae0192_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "email_widget"));

        // line 209
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "email")) : ("email"));
        // line 210
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_c52bb6558657cfd93616bb2b7594b9c1960cee0eacabf7497761a2b872ae0192->leave($__internal_c52bb6558657cfd93616bb2b7594b9c1960cee0eacabf7497761a2b872ae0192_prof);

    }

    // line 213
    public function block_range_widget($context, array $blocks = array())
    {
        $__internal_129187ad40c942a860cfeba58262980945674cec24706b77be9b4813c17c750e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_129187ad40c942a860cfeba58262980945674cec24706b77be9b4813c17c750e->enter($__internal_129187ad40c942a860cfeba58262980945674cec24706b77be9b4813c17c750e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "range_widget"));

        // line 214
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "range")) : ("range"));
        // line 215
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_129187ad40c942a860cfeba58262980945674cec24706b77be9b4813c17c750e->leave($__internal_129187ad40c942a860cfeba58262980945674cec24706b77be9b4813c17c750e_prof);

    }

    // line 218
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_ea47451d4b4cfaf29de8b0ca52a75c6afc6e19109a58c0ca8486f3b878b80559 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea47451d4b4cfaf29de8b0ca52a75c6afc6e19109a58c0ca8486f3b878b80559->enter($__internal_ea47451d4b4cfaf29de8b0ca52a75c6afc6e19109a58c0ca8486f3b878b80559_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 219
        if (twig_test_empty(($context["label"] ?? $this->getContext($context, "label")))) {
            // line 220
            if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                // line 221
                $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                 // line 222
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                 // line 223
($context["id"] ?? $this->getContext($context, "id"))));
            } else {
                // line 226
                $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
            }
        }
        // line 229
        echo "<button type=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "button")) : ("button")), "html", null, true);
        echo "\" ";
        $this->displayBlock("button_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, (((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))))), "html", null, true);
        echo "</button>";
        
        $__internal_ea47451d4b4cfaf29de8b0ca52a75c6afc6e19109a58c0ca8486f3b878b80559->leave($__internal_ea47451d4b4cfaf29de8b0ca52a75c6afc6e19109a58c0ca8486f3b878b80559_prof);

    }

    // line 232
    public function block_submit_widget($context, array $blocks = array())
    {
        $__internal_8b67c67b2857e5e69e64bdf9bbfec76814c69dce82f5ff084d744b66587a10c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b67c67b2857e5e69e64bdf9bbfec76814c69dce82f5ff084d744b66587a10c4->enter($__internal_8b67c67b2857e5e69e64bdf9bbfec76814c69dce82f5ff084d744b66587a10c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_widget"));

        // line 233
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "submit")) : ("submit"));
        // line 234
        $this->displayBlock("button_widget", $context, $blocks);
        
        $__internal_8b67c67b2857e5e69e64bdf9bbfec76814c69dce82f5ff084d744b66587a10c4->leave($__internal_8b67c67b2857e5e69e64bdf9bbfec76814c69dce82f5ff084d744b66587a10c4_prof);

    }

    // line 237
    public function block_reset_widget($context, array $blocks = array())
    {
        $__internal_f2d837de5ffe29a5d19962f08126154be3a29c9eb7439c10ce2a5f532db2ecae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2d837de5ffe29a5d19962f08126154be3a29c9eb7439c10ce2a5f532db2ecae->enter($__internal_f2d837de5ffe29a5d19962f08126154be3a29c9eb7439c10ce2a5f532db2ecae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_widget"));

        // line 238
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "reset")) : ("reset"));
        // line 239
        $this->displayBlock("button_widget", $context, $blocks);
        
        $__internal_f2d837de5ffe29a5d19962f08126154be3a29c9eb7439c10ce2a5f532db2ecae->leave($__internal_f2d837de5ffe29a5d19962f08126154be3a29c9eb7439c10ce2a5f532db2ecae_prof);

    }

    // line 244
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_48a0cbfe2173ebd75d70c05f60c8b3e3b66cf6009938f259386a51b2832d037d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48a0cbfe2173ebd75d70c05f60c8b3e3b66cf6009938f259386a51b2832d037d->enter($__internal_48a0cbfe2173ebd75d70c05f60c8b3e3b66cf6009938f259386a51b2832d037d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 245
        if ( !(($context["label"] ?? $this->getContext($context, "label")) === false)) {
            // line 246
            if ( !($context["compound"] ?? $this->getContext($context, "compound"))) {
                // line 247
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id"))));
            }
            // line 249
            if (($context["required"] ?? $this->getContext($context, "required"))) {
                // line 250
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 252
            if (twig_test_empty(($context["label"] ?? $this->getContext($context, "label")))) {
                // line 253
                if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                    // line 254
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                     // line 255
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                     // line 256
($context["id"] ?? $this->getContext($context, "id"))));
                } else {
                    // line 259
                    $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
                }
            }
            // line 262
            echo "<label";
            if (($context["label_attr"] ?? $this->getContext($context, "label_attr"))) {
                $__internal_0d91d59d4d6b9740b9e3cfa708f0d675e0b0850a372d5744498fc65e8e5ba687 = array("attr" => ($context["label_attr"] ?? $this->getContext($context, "label_attr")));
                if (!is_array($__internal_0d91d59d4d6b9740b9e3cfa708f0d675e0b0850a372d5744498fc65e8e5ba687)) {
                    throw new Twig_Error_Runtime('Variables passed to the "with" tag must be a hash.');
                }
                $context['_parent'] = $context;
                $context = array_merge($context, $__internal_0d91d59d4d6b9740b9e3cfa708f0d675e0b0850a372d5744498fc65e8e5ba687);
                $this->displayBlock("attributes", $context, $blocks);
                $context = $context['_parent'];
            }
            echo ">";
            echo twig_escape_filter($this->env, (((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))))), "html", null, true);
            echo "</label>";
        }
        
        $__internal_48a0cbfe2173ebd75d70c05f60c8b3e3b66cf6009938f259386a51b2832d037d->leave($__internal_48a0cbfe2173ebd75d70c05f60c8b3e3b66cf6009938f259386a51b2832d037d_prof);

    }

    // line 266
    public function block_button_label($context, array $blocks = array())
    {
        $__internal_c0bcc4c3410d1d5e8ebfae27b504c2f628587196bfeee46d14135262407c01a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0bcc4c3410d1d5e8ebfae27b504c2f628587196bfeee46d14135262407c01a9->enter($__internal_c0bcc4c3410d1d5e8ebfae27b504c2f628587196bfeee46d14135262407c01a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_label"));

        
        $__internal_c0bcc4c3410d1d5e8ebfae27b504c2f628587196bfeee46d14135262407c01a9->leave($__internal_c0bcc4c3410d1d5e8ebfae27b504c2f628587196bfeee46d14135262407c01a9_prof);

    }

    // line 270
    public function block_repeated_row($context, array $blocks = array())
    {
        $__internal_93339b94b8e9aa4a0a7288ce1e331314d2e9a0b645ac31b140f221b354a145ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93339b94b8e9aa4a0a7288ce1e331314d2e9a0b645ac31b140f221b354a145ac->enter($__internal_93339b94b8e9aa4a0a7288ce1e331314d2e9a0b645ac31b140f221b354a145ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "repeated_row"));

        // line 275
        $this->displayBlock("form_rows", $context, $blocks);
        
        $__internal_93339b94b8e9aa4a0a7288ce1e331314d2e9a0b645ac31b140f221b354a145ac->leave($__internal_93339b94b8e9aa4a0a7288ce1e331314d2e9a0b645ac31b140f221b354a145ac_prof);

    }

    // line 278
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_25d342b01b495164f9f890e27f35b71258123d1b9bd1f9ca93660f563ea4b43d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25d342b01b495164f9f890e27f35b71258123d1b9bd1f9ca93660f563ea4b43d->enter($__internal_25d342b01b495164f9f890e27f35b71258123d1b9bd1f9ca93660f563ea4b43d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 279
        echo "<div>";
        // line 280
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 281
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 282
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 283
        echo "</div>";
        
        $__internal_25d342b01b495164f9f890e27f35b71258123d1b9bd1f9ca93660f563ea4b43d->leave($__internal_25d342b01b495164f9f890e27f35b71258123d1b9bd1f9ca93660f563ea4b43d_prof);

    }

    // line 286
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_199790ab1fda474aaf26c4a8d1a84e25189720059054b56b1deb450d4aaff1e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_199790ab1fda474aaf26c4a8d1a84e25189720059054b56b1deb450d4aaff1e5->enter($__internal_199790ab1fda474aaf26c4a8d1a84e25189720059054b56b1deb450d4aaff1e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 287
        echo "<div>";
        // line 288
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 289
        echo "</div>";
        
        $__internal_199790ab1fda474aaf26c4a8d1a84e25189720059054b56b1deb450d4aaff1e5->leave($__internal_199790ab1fda474aaf26c4a8d1a84e25189720059054b56b1deb450d4aaff1e5_prof);

    }

    // line 292
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_77449c860c29063301378350b38f2e1a1c44c956682c6b603a44dc5b2a4d5e03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77449c860c29063301378350b38f2e1a1c44c956682c6b603a44dc5b2a4d5e03->enter($__internal_77449c860c29063301378350b38f2e1a1c44c956682c6b603a44dc5b2a4d5e03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 293
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        
        $__internal_77449c860c29063301378350b38f2e1a1c44c956682c6b603a44dc5b2a4d5e03->leave($__internal_77449c860c29063301378350b38f2e1a1c44c956682c6b603a44dc5b2a4d5e03_prof);

    }

    // line 298
    public function block_form($context, array $blocks = array())
    {
        $__internal_674ea14f4bae1b6acf1ad022e9fd23f051a7bcc39583db5d89b520336d94f24e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_674ea14f4bae1b6acf1ad022e9fd23f051a7bcc39583db5d89b520336d94f24e->enter($__internal_674ea14f4bae1b6acf1ad022e9fd23f051a7bcc39583db5d89b520336d94f24e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 299
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        // line 300
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 301
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        
        $__internal_674ea14f4bae1b6acf1ad022e9fd23f051a7bcc39583db5d89b520336d94f24e->leave($__internal_674ea14f4bae1b6acf1ad022e9fd23f051a7bcc39583db5d89b520336d94f24e_prof);

    }

    // line 304
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_c5b24a42801d96e44ec34b3a172bb73cc549beb95c2cf5826bff77013701bf3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5b24a42801d96e44ec34b3a172bb73cc549beb95c2cf5826bff77013701bf3b->enter($__internal_c5b24a42801d96e44ec34b3a172bb73cc549beb95c2cf5826bff77013701bf3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 305
        $this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "setMethodRendered", array(), "method");
        // line 306
        $context["method"] = twig_upper_filter($this->env, ($context["method"] ?? $this->getContext($context, "method")));
        // line 307
        if (twig_in_filter(($context["method"] ?? $this->getContext($context, "method")), array(0 => "GET", 1 => "POST"))) {
            // line 308
            $context["form_method"] = ($context["method"] ?? $this->getContext($context, "method"));
        } else {
            // line 310
            $context["form_method"] = "POST";
        }
        // line 312
        echo "<form name=\"";
        echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
        echo "\" method=\"";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, ($context["form_method"] ?? $this->getContext($context, "form_method"))), "html", null, true);
        echo "\"";
        if ((($context["action"] ?? $this->getContext($context, "action")) != "")) {
            echo " action=\"";
            echo twig_escape_filter($this->env, ($context["action"] ?? $this->getContext($context, "action")), "html", null, true);
            echo "\"";
        }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["attr"] ?? $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        if (($context["multipart"] ?? $this->getContext($context, "multipart"))) {
            echo " enctype=\"multipart/form-data\"";
        }
        echo ">";
        // line 313
        if ((($context["form_method"] ?? $this->getContext($context, "form_method")) != ($context["method"] ?? $this->getContext($context, "method")))) {
            // line 314
            echo "<input type=\"hidden\" name=\"_method\" value=\"";
            echo twig_escape_filter($this->env, ($context["method"] ?? $this->getContext($context, "method")), "html", null, true);
            echo "\" />";
        }
        
        $__internal_c5b24a42801d96e44ec34b3a172bb73cc549beb95c2cf5826bff77013701bf3b->leave($__internal_c5b24a42801d96e44ec34b3a172bb73cc549beb95c2cf5826bff77013701bf3b_prof);

    }

    // line 318
    public function block_form_end($context, array $blocks = array())
    {
        $__internal_68396733b586e876639dc8fa12524cc362b145165c36c97ce8801062767e8807 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68396733b586e876639dc8fa12524cc362b145165c36c97ce8801062767e8807->enter($__internal_68396733b586e876639dc8fa12524cc362b145165c36c97ce8801062767e8807_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_end"));

        // line 319
        if (( !array_key_exists("render_rest", $context) || ($context["render_rest"] ?? $this->getContext($context, "render_rest")))) {
            // line 320
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        }
        // line 322
        echo "</form>";
        
        $__internal_68396733b586e876639dc8fa12524cc362b145165c36c97ce8801062767e8807->leave($__internal_68396733b586e876639dc8fa12524cc362b145165c36c97ce8801062767e8807_prof);

    }

    // line 325
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_13f96c3e5235e4fd44c9e479cf910d8f0ba800ed59b6c29cc82d900cd98ff30b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13f96c3e5235e4fd44c9e479cf910d8f0ba800ed59b6c29cc82d900cd98ff30b->enter($__internal_13f96c3e5235e4fd44c9e479cf910d8f0ba800ed59b6c29cc82d900cd98ff30b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 326
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 327
            echo "<ul>";
            // line 328
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 329
                echo "<li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 331
            echo "</ul>";
        }
        
        $__internal_13f96c3e5235e4fd44c9e479cf910d8f0ba800ed59b6c29cc82d900cd98ff30b->leave($__internal_13f96c3e5235e4fd44c9e479cf910d8f0ba800ed59b6c29cc82d900cd98ff30b_prof);

    }

    // line 335
    public function block_form_rest($context, array $blocks = array())
    {
        $__internal_a8d3e090f902ebf4bdc14a60722f8323bba69ba9599f1d706fc0ce15273f238e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8d3e090f902ebf4bdc14a60722f8323bba69ba9599f1d706fc0ce15273f238e->enter($__internal_a8d3e090f902ebf4bdc14a60722f8323bba69ba9599f1d706fc0ce15273f238e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rest"));

        // line 336
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 337
            if ( !$this->getAttribute($context["child"], "rendered", array())) {
                // line 338
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'row');
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 341
        echo "
    ";
        // line 342
        if (( !$this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "methodRendered", array()) && (null === $this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array())))) {
            // line 343
            $this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "setMethodRendered", array(), "method");
            // line 344
            $context["method"] = twig_upper_filter($this->env, ($context["method"] ?? $this->getContext($context, "method")));
            // line 345
            if (twig_in_filter(($context["method"] ?? $this->getContext($context, "method")), array(0 => "GET", 1 => "POST"))) {
                // line 346
                $context["form_method"] = ($context["method"] ?? $this->getContext($context, "method"));
            } else {
                // line 348
                $context["form_method"] = "POST";
            }
            // line 351
            if ((($context["form_method"] ?? $this->getContext($context, "form_method")) != ($context["method"] ?? $this->getContext($context, "method")))) {
                // line 352
                echo "<input type=\"hidden\" name=\"_method\" value=\"";
                echo twig_escape_filter($this->env, ($context["method"] ?? $this->getContext($context, "method")), "html", null, true);
                echo "\" />";
            }
        }
        
        $__internal_a8d3e090f902ebf4bdc14a60722f8323bba69ba9599f1d706fc0ce15273f238e->leave($__internal_a8d3e090f902ebf4bdc14a60722f8323bba69ba9599f1d706fc0ce15273f238e_prof);

    }

    // line 359
    public function block_form_rows($context, array $blocks = array())
    {
        $__internal_6821e7bde8a00e2accc39202758e88ce88d1d580d0dd4e043eed74339499c6e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6821e7bde8a00e2accc39202758e88ce88d1d580d0dd4e043eed74339499c6e1->enter($__internal_6821e7bde8a00e2accc39202758e88ce88d1d580d0dd4e043eed74339499c6e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rows"));

        // line 360
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 361
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'row');
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6821e7bde8a00e2accc39202758e88ce88d1d580d0dd4e043eed74339499c6e1->leave($__internal_6821e7bde8a00e2accc39202758e88ce88d1d580d0dd4e043eed74339499c6e1_prof);

    }

    // line 365
    public function block_widget_attributes($context, array $blocks = array())
    {
        $__internal_08ce714f8b984e7962248647c0c595291505a5d685b52008da6ffd1bd3d57257 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08ce714f8b984e7962248647c0c595291505a5d685b52008da6ffd1bd3d57257->enter($__internal_08ce714f8b984e7962248647c0c595291505a5d685b52008da6ffd1bd3d57257_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        // line 366
        echo "id=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, ($context["full_name"] ?? $this->getContext($context, "full_name")), "html", null, true);
        echo "\"";
        // line 367
        if (($context["disabled"] ?? $this->getContext($context, "disabled"))) {
            echo " disabled=\"disabled\"";
        }
        // line 368
        if (($context["required"] ?? $this->getContext($context, "required"))) {
            echo " required=\"required\"";
        }
        // line 369
        $this->displayBlock("attributes", $context, $blocks);
        
        $__internal_08ce714f8b984e7962248647c0c595291505a5d685b52008da6ffd1bd3d57257->leave($__internal_08ce714f8b984e7962248647c0c595291505a5d685b52008da6ffd1bd3d57257_prof);

    }

    // line 372
    public function block_widget_container_attributes($context, array $blocks = array())
    {
        $__internal_15befa89eb44c743cb2eea995942144bb151ffe0c23bac8422ee9daa90e899af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15befa89eb44c743cb2eea995942144bb151ffe0c23bac8422ee9daa90e899af->enter($__internal_15befa89eb44c743cb2eea995942144bb151ffe0c23bac8422ee9daa90e899af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_container_attributes"));

        // line 373
        if ( !twig_test_empty(($context["id"] ?? $this->getContext($context, "id")))) {
            echo "id=\"";
            echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
            echo "\"";
        }
        // line 374
        $this->displayBlock("attributes", $context, $blocks);
        
        $__internal_15befa89eb44c743cb2eea995942144bb151ffe0c23bac8422ee9daa90e899af->leave($__internal_15befa89eb44c743cb2eea995942144bb151ffe0c23bac8422ee9daa90e899af_prof);

    }

    // line 377
    public function block_button_attributes($context, array $blocks = array())
    {
        $__internal_e04f693eea4ca71148b601ff4da8033beeef489d76c3743aa20ace55d1e5c7dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e04f693eea4ca71148b601ff4da8033beeef489d76c3743aa20ace55d1e5c7dc->enter($__internal_e04f693eea4ca71148b601ff4da8033beeef489d76c3743aa20ace55d1e5c7dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_attributes"));

        // line 378
        echo "id=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, ($context["full_name"] ?? $this->getContext($context, "full_name")), "html", null, true);
        echo "\"";
        if (($context["disabled"] ?? $this->getContext($context, "disabled"))) {
            echo " disabled=\"disabled\"";
        }
        // line 379
        $this->displayBlock("attributes", $context, $blocks);
        
        $__internal_e04f693eea4ca71148b601ff4da8033beeef489d76c3743aa20ace55d1e5c7dc->leave($__internal_e04f693eea4ca71148b601ff4da8033beeef489d76c3743aa20ace55d1e5c7dc_prof);

    }

    // line 382
    public function block_attributes($context, array $blocks = array())
    {
        $__internal_9d69ae5c745c4ce001344301dc75fecbfcc72e7f5c7287e5f4e7dafa5e114d21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d69ae5c745c4ce001344301dc75fecbfcc72e7f5c7287e5f4e7dafa5e114d21->enter($__internal_9d69ae5c745c4ce001344301dc75fecbfcc72e7f5c7287e5f4e7dafa5e114d21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "attributes"));

        // line 383
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["attr"] ?? $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 384
            echo " ";
            // line 385
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 386
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, (((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? ($context["attrvalue"]) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["attrvalue"], array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))))), "html", null, true);
                echo "\"";
            } elseif ((            // line 387
$context["attrvalue"] === true)) {
                // line 388
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 389
$context["attrvalue"] === false)) {
                // line 390
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_9d69ae5c745c4ce001344301dc75fecbfcc72e7f5c7287e5f4e7dafa5e114d21->leave($__internal_9d69ae5c745c4ce001344301dc75fecbfcc72e7f5c7287e5f4e7dafa5e114d21_prof);

    }

    public function getTemplateName()
    {
        return "form_div_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1339 => 390,  1337 => 389,  1332 => 388,  1330 => 387,  1325 => 386,  1323 => 385,  1321 => 384,  1317 => 383,  1311 => 382,  1304 => 379,  1295 => 378,  1289 => 377,  1282 => 374,  1276 => 373,  1270 => 372,  1263 => 369,  1259 => 368,  1255 => 367,  1249 => 366,  1243 => 365,  1232 => 361,  1228 => 360,  1222 => 359,  1211 => 352,  1209 => 351,  1206 => 348,  1203 => 346,  1201 => 345,  1199 => 344,  1197 => 343,  1195 => 342,  1192 => 341,  1185 => 338,  1183 => 337,  1179 => 336,  1173 => 335,  1165 => 331,  1157 => 329,  1153 => 328,  1151 => 327,  1149 => 326,  1143 => 325,  1136 => 322,  1133 => 320,  1131 => 319,  1125 => 318,  1115 => 314,  1113 => 313,  1086 => 312,  1083 => 310,  1080 => 308,  1078 => 307,  1076 => 306,  1074 => 305,  1068 => 304,  1061 => 301,  1059 => 300,  1057 => 299,  1051 => 298,  1044 => 293,  1038 => 292,  1031 => 289,  1029 => 288,  1027 => 287,  1021 => 286,  1014 => 283,  1012 => 282,  1010 => 281,  1008 => 280,  1006 => 279,  1000 => 278,  993 => 275,  987 => 270,  976 => 266,  955 => 262,  951 => 259,  948 => 256,  947 => 255,  946 => 254,  944 => 253,  942 => 252,  939 => 250,  937 => 249,  934 => 247,  932 => 246,  930 => 245,  924 => 244,  917 => 239,  915 => 238,  909 => 237,  902 => 234,  900 => 233,  894 => 232,  881 => 229,  877 => 226,  874 => 223,  873 => 222,  872 => 221,  870 => 220,  868 => 219,  862 => 218,  855 => 215,  853 => 214,  847 => 213,  840 => 210,  838 => 209,  832 => 208,  825 => 205,  823 => 204,  817 => 203,  810 => 200,  808 => 199,  802 => 198,  794 => 195,  792 => 194,  786 => 193,  779 => 190,  777 => 189,  771 => 188,  764 => 185,  762 => 184,  756 => 183,  749 => 180,  743 => 179,  736 => 176,  734 => 175,  728 => 174,  721 => 171,  719 => 170,  713 => 168,  705 => 164,  701 => 163,  697 => 160,  691 => 159,  685 => 158,  679 => 157,  673 => 156,  667 => 155,  661 => 154,  655 => 153,  650 => 149,  644 => 148,  638 => 147,  632 => 146,  626 => 145,  620 => 144,  614 => 143,  608 => 142,  602 => 139,  600 => 138,  596 => 137,  593 => 135,  591 => 134,  585 => 133,  577 => 129,  567 => 128,  562 => 127,  560 => 126,  557 => 124,  555 => 123,  549 => 122,  541 => 118,  539 => 116,  538 => 115,  537 => 114,  536 => 113,  532 => 112,  529 => 110,  527 => 109,  521 => 108,  513 => 104,  511 => 103,  509 => 102,  507 => 101,  505 => 100,  501 => 99,  498 => 97,  496 => 96,  490 => 95,  473 => 92,  467 => 91,  450 => 88,  444 => 87,  406 => 82,  403 => 80,  401 => 79,  399 => 78,  394 => 77,  392 => 76,  375 => 75,  369 => 74,  362 => 71,  360 => 70,  358 => 69,  352 => 66,  350 => 65,  348 => 64,  346 => 63,  344 => 62,  335 => 60,  333 => 59,  326 => 58,  323 => 56,  321 => 55,  315 => 54,  308 => 51,  302 => 49,  300 => 48,  296 => 47,  292 => 46,  286 => 45,  278 => 41,  275 => 39,  273 => 38,  267 => 37,  256 => 34,  250 => 33,  243 => 30,  240 => 28,  238 => 27,  232 => 26,  225 => 23,  223 => 22,  221 => 21,  218 => 19,  216 => 18,  212 => 17,  206 => 16,  189 => 13,  187 => 12,  181 => 11,  173 => 7,  170 => 5,  168 => 4,  162 => 3,  155 => 382,  153 => 377,  151 => 372,  149 => 365,  147 => 359,  144 => 356,  142 => 335,  140 => 325,  138 => 318,  136 => 304,  134 => 298,  132 => 292,  130 => 286,  128 => 278,  126 => 270,  124 => 266,  122 => 244,  120 => 237,  118 => 232,  116 => 218,  114 => 213,  112 => 208,  110 => 203,  108 => 198,  106 => 193,  104 => 188,  102 => 183,  100 => 179,  98 => 174,  96 => 168,  94 => 133,  92 => 122,  90 => 108,  88 => 95,  86 => 91,  84 => 87,  82 => 74,  80 => 54,  78 => 45,  76 => 37,  74 => 33,  72 => 26,  70 => 16,  68 => 11,  66 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# Widgets #}

{%- block form_widget -%}
    {% if compound %}
        {{- block('form_widget_compound') -}}
    {% else %}
        {{- block('form_widget_simple') -}}
    {% endif %}
{%- endblock form_widget -%}

{%- block form_widget_simple -%}
    {%- set type = type|default('text') -%}
    <input type=\"{{ type }}\" {{ block('widget_attributes') }} {% if value is not empty %}value=\"{{ value }}\" {% endif %}/>
{%- endblock form_widget_simple -%}

{%- block form_widget_compound -%}
    <div {{ block('widget_container_attributes') }}>
        {%- if form.parent is empty -%}
            {{ form_errors(form) }}
        {%- endif -%}
        {{- block('form_rows') -}}
        {{- form_rest(form) -}}
    </div>
{%- endblock form_widget_compound -%}

{%- block collection_widget -%}
    {% if prototype is defined %}
        {%- set attr = attr|merge({'data-prototype': form_row(prototype) }) -%}
    {% endif %}
    {{- block('form_widget') -}}
{%- endblock collection_widget -%}

{%- block textarea_widget -%}
    <textarea {{ block('widget_attributes') }}>{{ value }}</textarea>
{%- endblock textarea_widget -%}

{%- block choice_widget -%}
    {% if expanded %}
        {{- block('choice_widget_expanded') -}}
    {% else %}
        {{- block('choice_widget_collapsed') -}}
    {% endif %}
{%- endblock choice_widget -%}

{%- block choice_widget_expanded -%}
    <div {{ block('widget_container_attributes') }}>
    {%- for child in form %}
        {{- form_widget(child) -}}
        {{- form_label(child, null, {translation_domain: choice_translation_domain}) -}}
    {% endfor -%}
    </div>
{%- endblock choice_widget_expanded -%}

{%- block choice_widget_collapsed -%}
    {%- if required and placeholder is none and not placeholder_in_choices and not multiple and (attr.size is not defined or attr.size <= 1) -%}
        {% set required = false %}
    {%- endif -%}
    <select {{ block('widget_attributes') }}{% if multiple %} multiple=\"multiple\"{% endif %}>
        {%- if placeholder is not none -%}
            <option value=\"\"{% if required and value is empty %} selected=\"selected\"{% endif %}>{{ placeholder != '' ? (translation_domain is same as(false) ? placeholder : placeholder|trans({}, translation_domain)) }}</option>
        {%- endif -%}
        {%- if preferred_choices|length > 0 -%}
            {% set options = preferred_choices %}
            {{- block('choice_widget_options') -}}
            {%- if choices|length > 0 and separator is not none -%}
                <option disabled=\"disabled\">{{ separator }}</option>
            {%- endif -%}
        {%- endif -%}
        {%- set options = choices -%}
        {{- block('choice_widget_options') -}}
    </select>
{%- endblock choice_widget_collapsed -%}

{%- block choice_widget_options -%}
    {% for group_label, choice in options %}
        {%- if choice is iterable -%}
            <optgroup label=\"{{ choice_translation_domain is same as(false) ? group_label : group_label|trans({}, choice_translation_domain) }}\">
                {% set options = choice %}
                {{- block('choice_widget_options') -}}
            </optgroup>
        {%- else -%}
            <option value=\"{{ choice.value }}\"{% if choice.attr %}{% with { attr: choice.attr } %}{{ block('attributes') }}{% endwith %}{% endif %}{% if choice is selectedchoice(value) %} selected=\"selected\"{% endif %}>{{ choice_translation_domain is same as(false) ? choice.label : choice.label|trans({}, choice_translation_domain) }}</option>
        {%- endif -%}
    {% endfor %}
{%- endblock choice_widget_options -%}

{%- block checkbox_widget -%}
    <input type=\"checkbox\" {{ block('widget_attributes') }}{% if value is defined %} value=\"{{ value }}\"{% endif %}{% if checked %} checked=\"checked\"{% endif %} />
{%- endblock checkbox_widget -%}

{%- block radio_widget -%}
    <input type=\"radio\" {{ block('widget_attributes') }}{% if value is defined %} value=\"{{ value }}\"{% endif %}{% if checked %} checked=\"checked\"{% endif %} />
{%- endblock radio_widget -%}

{%- block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date) -}}
            {{- form_widget(form.time) -}}
        </div>
    {%- endif -%}
{%- endblock datetime_widget -%}

{%- block date_widget -%}
    {%- if widget == 'single_text' -%}
        {{ block('form_widget_simple') }}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {{- date_pattern|replace({
                '{{ year }}':  form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}':   form_widget(form.day),
            })|raw -}}
        </div>
    {%- endif -%}
{%- endblock date_widget -%}

{%- block time_widget -%}
    {%- if widget == 'single_text' -%}
        {{ block('form_widget_simple') }}
    {%- else -%}
        {%- set vars = widget == 'text' ? { 'attr': { 'size': 1 }} : {} -%}
        <div {{ block('widget_container_attributes') }}>
            {{ form_widget(form.hour, vars) }}{% if with_minutes %}:{{ form_widget(form.minute, vars) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second, vars) }}{% endif %}
        </div>
    {%- endif -%}
{%- endblock time_widget -%}

{%- block dateinterval_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form) -}}
            <table class=\"{{ table_class|default('') }}\">
                <thead>
                    <tr>
                        {%- if with_years %}<th>{{ form_label(form.years) }}</th>{% endif -%}
                        {%- if with_months %}<th>{{ form_label(form.months) }}</th>{% endif -%}
                        {%- if with_weeks %}<th>{{ form_label(form.weeks) }}</th>{% endif -%}
                        {%- if with_days %}<th>{{ form_label(form.days) }}</th>{% endif -%}
                        {%- if with_hours %}<th>{{ form_label(form.hours) }}</th>{% endif -%}
                        {%- if with_minutes %}<th>{{ form_label(form.minutes) }}</th>{% endif -%}
                        {%- if with_seconds %}<th>{{ form_label(form.seconds) }}</th>{% endif -%}
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        {%- if with_years %}<td>{{ form_widget(form.years) }}</td>{% endif -%}
                        {%- if with_months %}<td>{{ form_widget(form.months) }}</td>{% endif -%}
                        {%- if with_weeks %}<td>{{ form_widget(form.weeks) }}</td>{% endif -%}
                        {%- if with_days %}<td>{{ form_widget(form.days) }}</td>{% endif -%}
                        {%- if with_hours %}<td>{{ form_widget(form.hours) }}</td>{% endif -%}
                        {%- if with_minutes %}<td>{{ form_widget(form.minutes) }}</td>{% endif -%}
                        {%- if with_seconds %}<td>{{ form_widget(form.seconds) }}</td>{% endif -%}
                    </tr>
                </tbody>
            </table>
            {%- if with_invert %}{{ form_widget(form.invert) }}{% endif -%}
        </div>
    {%- endif -%}
{%- endblock dateinterval_widget -%}

{%- block number_widget -%}
    {# type=\"number\" doesn't work with floats #}
    {%- set type = type|default('text') -%}
    {{ block('form_widget_simple') }}
{%- endblock number_widget -%}

{%- block integer_widget -%}
    {%- set type = type|default('number') -%}
    {{ block('form_widget_simple') }}
{%- endblock integer_widget -%}

{%- block money_widget -%}
    {{ money_pattern|replace({ '{{ widget }}': block('form_widget_simple') })|raw }}
{%- endblock money_widget -%}

{%- block url_widget -%}
    {%- set type = type|default('url') -%}
    {{ block('form_widget_simple') }}
{%- endblock url_widget -%}

{%- block search_widget -%}
    {%- set type = type|default('search') -%}
    {{ block('form_widget_simple') }}
{%- endblock search_widget -%}

{%- block percent_widget -%}
    {%- set type = type|default('text') -%}
    {{ block('form_widget_simple') }} %
{%- endblock percent_widget -%}

{%- block password_widget -%}
    {%- set type = type|default('password') -%}
    {{ block('form_widget_simple') }}
{%- endblock password_widget -%}

{%- block hidden_widget -%}
    {%- set type = type|default('hidden') -%}
    {{ block('form_widget_simple') }}
{%- endblock hidden_widget -%}

{%- block email_widget -%}
    {%- set type = type|default('email') -%}
    {{ block('form_widget_simple') }}
{%- endblock email_widget -%}

{%- block range_widget -%}
    {% set type = type|default('range') %}
    {{- block('form_widget_simple') -}}
{%- endblock range_widget %}

{%- block button_widget -%}
    {%- if label is empty -%}
        {%- if label_format is not empty -%}
            {% set label = label_format|replace({
                '%name%': name,
                '%id%': id,
            }) %}
        {%- else -%}
            {% set label = name|humanize %}
        {%- endif -%}
    {%- endif -%}
    <button type=\"{{ type|default('button') }}\" {{ block('button_attributes') }}>{{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}</button>
{%- endblock button_widget -%}

{%- block submit_widget -%}
    {%- set type = type|default('submit') -%}
    {{ block('button_widget') }}
{%- endblock submit_widget -%}

{%- block reset_widget -%}
    {%- set type = type|default('reset') -%}
    {{ block('button_widget') }}
{%- endblock reset_widget -%}

{# Labels #}

{%- block form_label -%}
    {% if label is not same as(false) -%}
        {% if not compound -%}
            {% set label_attr = label_attr|merge({'for': id}) %}
        {%- endif -%}
        {% if required -%}
            {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ ' required')|trim}) %}
        {%- endif -%}
        {% if label is empty -%}
            {%- if label_format is not empty -%}
                {% set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {%- endif -%}
        <label{% if label_attr %}{% with { attr: label_attr } %}{{ block('attributes') }}{% endwith %}{% endif %}>{{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}</label>
    {%- endif -%}
{%- endblock form_label -%}

{%- block button_label -%}{%- endblock -%}

{# Rows #}

{%- block repeated_row -%}
    {#
    No need to render the errors here, as all errors are mapped
    to the first child (see RepeatedTypeValidatorExtension).
    #}
    {{- block('form_rows') -}}
{%- endblock repeated_row -%}

{%- block form_row -%}
    <div>
        {{- form_label(form) -}}
        {{- form_errors(form) -}}
        {{- form_widget(form) -}}
    </div>
{%- endblock form_row -%}

{%- block button_row -%}
    <div>
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row -%}

{%- block hidden_row -%}
    {{ form_widget(form) }}
{%- endblock hidden_row -%}

{# Misc #}

{%- block form -%}
    {{ form_start(form) }}
        {{- form_widget(form) -}}
    {{ form_end(form) }}
{%- endblock form -%}

{%- block form_start -%}
    {%- do form.setMethodRendered() -%}
    {% set method = method|upper %}
    {%- if method in [\"GET\", \"POST\"] -%}
        {% set form_method = method %}
    {%- else -%}
        {% set form_method = \"POST\" %}
    {%- endif -%}
    <form name=\"{{ name }}\" method=\"{{ form_method|lower }}\"{% if action != '' %} action=\"{{ action }}\"{% endif %}{% for attrname, attrvalue in attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}{% if multipart %} enctype=\"multipart/form-data\"{% endif %}>
    {%- if form_method != method -%}
        <input type=\"hidden\" name=\"_method\" value=\"{{ method }}\" />
    {%- endif -%}
{%- endblock form_start -%}

{%- block form_end -%}
    {%- if not render_rest is defined or render_rest -%}
        {{ form_rest(form) }}
    {%- endif -%}
    </form>
{%- endblock form_end -%}

{%- block form_errors -%}
    {%- if errors|length > 0 -%}
    <ul>
        {%- for error in errors -%}
            <li>{{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {%- endif -%}
{%- endblock form_errors -%}

{%- block form_rest -%}
    {% for child in form -%}
        {% if not child.rendered %}
            {{- form_row(child) -}}
        {% endif %}
    {%- endfor %}

    {% if not form.methodRendered and form.parent is null %}
        {%- do form.setMethodRendered() -%}
        {% set method = method|upper %}
        {%- if method in [\"GET\", \"POST\"] -%}
            {% set form_method = method %}
        {%- else -%}
            {% set form_method = \"POST\" %}
        {%- endif -%}

        {%- if form_method != method -%}
            <input type=\"hidden\" name=\"_method\" value=\"{{ method }}\" />
        {%- endif -%}
    {% endif %}
{% endblock form_rest %}

{# Support #}

{%- block form_rows -%}
    {% for child in form %}
        {{- form_row(child) -}}
    {% endfor %}
{%- endblock form_rows -%}

{%- block widget_attributes -%}
    id=\"{{ id }}\" name=\"{{ full_name }}\"
    {%- if disabled %} disabled=\"disabled\"{% endif -%}
    {%- if required %} required=\"required\"{% endif -%}
    {{ block('attributes') }}
{%- endblock widget_attributes -%}

{%- block widget_container_attributes -%}
    {%- if id is not empty %}id=\"{{ id }}\"{% endif -%}
    {{ block('attributes') }}
{%- endblock widget_container_attributes -%}

{%- block button_attributes -%}
    id=\"{{ id }}\" name=\"{{ full_name }}\"{% if disabled %} disabled=\"disabled\"{% endif -%}
    {{ block('attributes') }}
{%- endblock button_attributes -%}

{% block attributes -%}
    {%- for attrname, attrvalue in attr -%}
        {{- \" \" -}}
        {%- if attrname in ['placeholder', 'title'] -%}
            {{- attrname }}=\"{{ translation_domain is same as(false) ? attrvalue : attrvalue|trans({}, translation_domain) }}\"
        {%- elseif attrvalue is same as(true) -%}
            {{- attrname }}=\"{{ attrname }}\"
        {%- elseif attrvalue is not same as(false) -%}
            {{- attrname }}=\"{{ attrvalue }}\"
        {%- endif -%}
    {%- endfor -%}
{%- endblock attributes -%}
", "form_div_layout.html.twig", "/Users/guillaumequirin/Sourcetree/Symfony/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/form_div_layout.html.twig");
    }
}
