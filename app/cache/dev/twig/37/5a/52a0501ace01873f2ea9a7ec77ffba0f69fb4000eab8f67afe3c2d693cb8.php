<?php

/* SensioDistributionBundle:Configurator/Step:doctrine.html.twig */
class __TwigTemplate_375a52a0501ace01873f2ea9a7ec77ffba0f69fb4000eab8f67afe3c2d693cb8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SensioDistributionBundle::Configurator/layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Symfony - Configure database";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "SensioDistributionBundle::Configurator/form.html.twig"));
        // line 7
        echo "
    <div class=\"step\">
        ";
        // line 9
        $this->env->loadTemplate("SensioDistributionBundle::Configurator/steps.html.twig")->display(array_merge($context, array("index" => (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")), "count" => (isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")))));
        // line 10
        echo "
        <h1>Configure your Database</h1>
        <p>If your website needs a database connection, please configure it here.</p>

        <div class=\"symfony-form-errors\">
            ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        </div>
        <form action=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_configurator_step", array("index" => (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")))), "html", null, true);
        echo "\" method=\"POST\">
            <div class=\"symfony-form-column\">
                ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "driver"), 'row');
        echo "
                ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "host"), 'row');
        echo "
                ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'row');
        echo "
            </div>
            <div class=\"symfony-form-column\">
                ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user"), 'row');
        echo "
                ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password"), 'row');
        echo "
            </div>

            ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

            <div class=\"symfony-form-footer\">
                <p>
                    <button type=\"submit\" class=\"sf-button\">
                        <span class=\"border-l\">
                            <span class=\"border-r\">
                                <span class=\"btn-bg\">NEXT STEP</span>
                            </span>
                        </span>
                    </button>
                </p>
                <p>* mandatory fields</p>
            </div>
        </form>
    </div>
";
    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator/Step:doctrine.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1080 => 340,  1074 => 338,  1068 => 336,  1066 => 335,  1060 => 333,  1036 => 326,  1030 => 324,  1024 => 322,  1022 => 321,  1020 => 320,  1016 => 319,  1010 => 318,  1007 => 317,  995 => 312,  989 => 310,  983 => 308,  981 => 307,  979 => 306,  971 => 304,  957 => 301,  954 => 300,  946 => 296,  942 => 295,  939 => 294,  928 => 286,  924 => 285,  921 => 284,  916 => 280,  908 => 278,  904 => 277,  902 => 276,  900 => 275,  897 => 274,  881 => 265,  879 => 264,  876 => 263,  869 => 259,  867 => 258,  843 => 257,  840 => 255,  837 => 253,  835 => 252,  833 => 251,  822 => 245,  808 => 235,  804 => 233,  801 => 232,  797 => 229,  795 => 228,  791 => 226,  789 => 225,  786 => 224,  782 => 221,  748 => 205,  739 => 200,  728 => 192,  726 => 191,  723 => 190,  719 => 187,  717 => 186,  704 => 182,  699 => 179,  681 => 169,  673 => 165,  661 => 159,  652 => 154,  643 => 149,  633 => 144,  627 => 140,  617 => 135,  614 => 133,  599 => 128,  584 => 122,  577 => 116,  562 => 108,  554 => 103,  552 => 102,  548 => 100,  477 => 82,  472 => 79,  465 => 77,  463 => 76,  410 => 59,  397 => 55,  370 => 45,  349 => 34,  282 => 3,  257 => 291,  242 => 269,  792 => 488,  775 => 485,  727 => 476,  694 => 470,  679 => 466,  677 => 465,  649 => 153,  634 => 456,  629 => 141,  549 => 411,  529 => 409,  522 => 92,  386 => 159,  334 => 26,  331 => 140,  326 => 21,  307 => 128,  302 => 125,  288 => 118,  1077 => 657,  1073 => 656,  1069 => 654,  1064 => 334,  1055 => 648,  1051 => 332,  1048 => 331,  1044 => 645,  1035 => 639,  1026 => 633,  1023 => 632,  1021 => 631,  1018 => 630,  1013 => 627,  1004 => 624,  1000 => 623,  997 => 622,  993 => 621,  984 => 615,  975 => 305,  972 => 608,  970 => 607,  967 => 303,  963 => 302,  959 => 602,  955 => 600,  947 => 597,  941 => 595,  937 => 593,  935 => 592,  930 => 287,  926 => 589,  923 => 588,  919 => 587,  911 => 581,  909 => 580,  905 => 579,  896 => 573,  893 => 572,  891 => 271,  888 => 270,  884 => 267,  880 => 566,  874 => 562,  870 => 560,  864 => 558,  862 => 557,  854 => 552,  848 => 548,  844 => 546,  838 => 544,  836 => 543,  828 => 538,  824 => 246,  815 => 239,  812 => 238,  807 => 491,  800 => 523,  796 => 489,  790 => 519,  788 => 486,  780 => 513,  774 => 212,  770 => 507,  762 => 504,  754 => 208,  745 => 203,  742 => 202,  740 => 491,  732 => 197,  724 => 484,  702 => 472,  698 => 471,  692 => 175,  682 => 467,  678 => 168,  668 => 163,  664 => 463,  646 => 451,  642 => 449,  626 => 443,  622 => 452,  578 => 432,  574 => 113,  565 => 109,  559 => 427,  542 => 421,  536 => 95,  534 => 418,  530 => 417,  514 => 415,  276 => 111,  251 => 182,  405 => 137,  395 => 135,  377 => 47,  356 => 122,  328 => 22,  293 => 120,  281 => 114,  186 => 190,  462 => 202,  446 => 75,  439 => 71,  401 => 172,  380 => 158,  361 => 152,  338 => 116,  323 => 19,  286 => 112,  267 => 101,  262 => 188,  248 => 97,  213 => 78,  194 => 197,  367 => 155,  306 => 286,  152 => 46,  129 => 122,  167 => 71,  236 => 132,  223 => 124,  450 => 199,  438 => 89,  434 => 45,  425 => 64,  417 => 143,  411 => 140,  333 => 115,  190 => 89,  637 => 358,  615 => 344,  609 => 129,  606 => 449,  592 => 126,  588 => 333,  547 => 308,  543 => 306,  539 => 96,  533 => 301,  513 => 292,  506 => 289,  502 => 87,  443 => 74,  416 => 235,  412 => 60,  371 => 156,  350 => 120,  346 => 33,  311 => 159,  297 => 200,  239 => 131,  174 => 74,  150 => 55,  137 => 74,  23 => 3,  198 => 111,  345 => 147,  342 => 30,  317 => 17,  301 => 156,  291 => 137,  263 => 294,  188 => 194,  222 => 238,  211 => 108,  205 => 104,  197 => 69,  473 => 261,  470 => 78,  433 => 224,  429 => 66,  415 => 180,  406 => 214,  391 => 211,  382 => 131,  366 => 201,  357 => 37,  353 => 149,  327 => 173,  316 => 168,  308 => 109,  303 => 122,  296 => 121,  287 => 5,  261 => 127,  234 => 90,  228 => 104,  212 => 224,  206 => 108,  192 => 91,  170 => 84,  226 => 84,  216 => 79,  191 => 196,  178 => 184,  126 => 121,  100 => 36,  124 => 108,  58 => 14,  84 => 33,  76 => 25,  20 => 1,  153 => 77,  146 => 147,  113 => 48,  104 => 74,  97 => 41,  77 => 20,  134 => 133,  127 => 35,  81 => 30,  34 => 5,  817 => 387,  813 => 306,  810 => 492,  806 => 234,  803 => 277,  777 => 244,  767 => 236,  764 => 505,  751 => 206,  746 => 478,  737 => 199,  731 => 212,  721 => 206,  714 => 185,  706 => 473,  701 => 180,  696 => 178,  689 => 193,  686 => 468,  683 => 170,  676 => 467,  671 => 164,  666 => 183,  659 => 181,  656 => 180,  654 => 155,  651 => 178,  641 => 171,  636 => 145,  631 => 167,  624 => 139,  621 => 164,  619 => 163,  616 => 440,  608 => 157,  603 => 439,  597 => 152,  590 => 150,  587 => 123,  581 => 331,  575 => 114,  572 => 142,  566 => 139,  563 => 429,  556 => 104,  553 => 425,  551 => 424,  546 => 423,  540 => 129,  537 => 128,  531 => 127,  528 => 126,  523 => 125,  521 => 295,  510 => 116,  504 => 113,  500 => 112,  493 => 108,  488 => 105,  486 => 104,  466 => 87,  451 => 74,  448 => 73,  441 => 196,  421 => 62,  419 => 236,  408 => 176,  403 => 196,  388 => 134,  383 => 49,  378 => 157,  373 => 46,  363 => 153,  358 => 151,  351 => 141,  347 => 119,  339 => 28,  335 => 134,  329 => 131,  324 => 112,  319 => 163,  304 => 157,  299 => 155,  289 => 196,  284 => 149,  279 => 147,  274 => 110,  249 => 181,  232 => 249,  200 => 72,  184 => 63,  181 => 185,  175 => 58,  172 => 57,  160 => 71,  155 => 47,  65 => 17,  830 => 250,  826 => 247,  823 => 308,  819 => 244,  816 => 280,  793 => 227,  787 => 246,  781 => 245,  779 => 216,  769 => 235,  766 => 234,  753 => 224,  749 => 479,  741 => 217,  735 => 198,  729 => 209,  725 => 208,  718 => 482,  710 => 475,  705 => 480,  700 => 196,  693 => 194,  690 => 174,  687 => 173,  680 => 188,  675 => 186,  670 => 184,  663 => 160,  660 => 464,  658 => 158,  655 => 457,  645 => 150,  640 => 148,  635 => 168,  628 => 444,  625 => 453,  623 => 164,  620 => 136,  612 => 158,  607 => 156,  601 => 446,  594 => 127,  591 => 436,  589 => 124,  585 => 332,  579 => 118,  576 => 115,  570 => 112,  567 => 110,  564 => 138,  560 => 137,  557 => 314,  555 => 135,  550 => 101,  544 => 99,  541 => 97,  535 => 302,  532 => 410,  527 => 408,  525 => 125,  519 => 91,  517 => 404,  509 => 290,  505 => 88,  501 => 113,  494 => 109,  489 => 106,  487 => 105,  467 => 260,  452 => 75,  449 => 198,  445 => 117,  442 => 44,  436 => 13,  431 => 189,  428 => 1,  422 => 184,  420 => 2,  414 => 387,  404 => 383,  399 => 56,  394 => 54,  389 => 51,  369 => 369,  364 => 197,  359 => 123,  352 => 361,  348 => 140,  344 => 359,  340 => 145,  336 => 357,  330 => 23,  325 => 129,  320 => 127,  310 => 346,  300 => 13,  290 => 7,  280 => 194,  275 => 330,  270 => 316,  260 => 293,  255 => 284,  250 => 274,  245 => 270,  233 => 87,  231 => 129,  185 => 75,  180 => 70,  165 => 83,  161 => 162,  148 => 65,  118 => 49,  114 => 91,  110 => 38,  90 => 27,  70 => 19,  343 => 146,  321 => 18,  315 => 131,  313 => 110,  295 => 11,  271 => 190,  265 => 299,  259 => 103,  256 => 96,  253 => 100,  244 => 133,  237 => 262,  225 => 125,  218 => 131,  215 => 123,  210 => 77,  207 => 216,  202 => 94,  53 => 11,  480 => 162,  474 => 80,  469 => 158,  461 => 256,  457 => 254,  453 => 199,  444 => 45,  440 => 148,  437 => 70,  435 => 69,  430 => 2,  427 => 65,  423 => 63,  413 => 384,  409 => 199,  407 => 138,  402 => 58,  398 => 136,  393 => 192,  387 => 164,  384 => 132,  381 => 48,  379 => 373,  374 => 128,  368 => 126,  365 => 41,  362 => 39,  360 => 38,  355 => 150,  341 => 117,  337 => 27,  322 => 101,  314 => 16,  312 => 130,  309 => 129,  305 => 108,  298 => 12,  294 => 153,  285 => 4,  283 => 115,  278 => 331,  268 => 300,  264 => 141,  258 => 187,  252 => 283,  247 => 273,  241 => 93,  229 => 87,  220 => 81,  214 => 231,  177 => 69,  169 => 168,  140 => 72,  132 => 58,  128 => 42,  107 => 37,  61 => 2,  273 => 317,  269 => 107,  254 => 137,  243 => 137,  240 => 263,  238 => 119,  235 => 250,  230 => 244,  227 => 243,  224 => 241,  221 => 80,  219 => 237,  217 => 232,  208 => 76,  204 => 215,  179 => 79,  159 => 158,  143 => 80,  135 => 46,  119 => 95,  102 => 30,  71 => 15,  67 => 18,  63 => 18,  59 => 17,  93 => 28,  88 => 28,  78 => 24,  38 => 6,  28 => 3,  201 => 213,  196 => 211,  183 => 189,  171 => 173,  166 => 167,  163 => 82,  158 => 80,  156 => 157,  151 => 152,  142 => 65,  138 => 56,  136 => 138,  121 => 107,  117 => 37,  105 => 25,  91 => 29,  62 => 16,  49 => 12,  26 => 3,  87 => 26,  46 => 10,  44 => 8,  31 => 4,  94 => 45,  89 => 35,  85 => 26,  75 => 22,  68 => 20,  56 => 14,  24 => 2,  27 => 3,  25 => 35,  21 => 2,  19 => 1,  79 => 26,  72 => 21,  69 => 21,  47 => 10,  40 => 8,  37 => 7,  22 => 2,  246 => 136,  157 => 80,  145 => 74,  139 => 139,  131 => 132,  123 => 61,  120 => 31,  115 => 40,  111 => 90,  108 => 33,  101 => 33,  98 => 29,  96 => 53,  83 => 33,  74 => 22,  66 => 10,  55 => 12,  52 => 12,  50 => 10,  43 => 9,  41 => 7,  35 => 5,  32 => 6,  29 => 3,  209 => 223,  203 => 73,  199 => 212,  193 => 100,  189 => 66,  187 => 95,  182 => 87,  176 => 178,  173 => 177,  168 => 61,  164 => 163,  162 => 59,  154 => 153,  149 => 148,  147 => 75,  144 => 144,  141 => 143,  133 => 45,  130 => 46,  125 => 51,  122 => 64,  116 => 94,  112 => 39,  109 => 87,  106 => 86,  103 => 28,  99 => 54,  95 => 27,  92 => 31,  86 => 36,  82 => 25,  80 => 24,  73 => 24,  64 => 19,  60 => 20,  57 => 39,  54 => 15,  51 => 13,  48 => 10,  45 => 9,  42 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}