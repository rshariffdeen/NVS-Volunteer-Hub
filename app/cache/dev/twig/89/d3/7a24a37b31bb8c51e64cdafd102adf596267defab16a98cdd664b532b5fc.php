<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_89d37a24a37b31bb8c51e64cdafd102adf596267defab16a98cdd664b532b5fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo ".sf-reset .traces {
    padding-bottom: 14px;
}
.sf-reset .traces li {
    font-size: 12px;
    color: #868686;
    padding: 5px 4px;
    list-style-type: decimal;
    margin-left: 20px;
    white-space: break-word;
}
.sf-reset #logs .traces li.error {
    font-style: normal;
    color: #AA3333;
    background: #f9ecec;
}
.sf-reset #logs .traces li.warning {
    font-style: normal;
    background: #ffcc00;
}
/* fix for Opera not liking empty <li> */
.sf-reset .traces li:after {
    content: \"\\00A0\";
}
.sf-reset .trace {
    border: 1px solid #D3D3D3;
    padding: 10px;
    overflow: auto;
    margin: 10px 0 20px;
}
.sf-reset .block-exception {
    border-radius: 16px;
    margin-bottom: 20px;
    background-color: #f6f6f6;
    border: 1px solid #dfdfdf;
    padding: 30px 28px;
    word-wrap: break-word;
    overflow: hidden;
}
.sf-reset .block-exception div {
    color: #313131;
    font-size: 10px;
}
.sf-reset .block-exception-detected .illustration-exception,
.sf-reset .block-exception-detected .text-exception {
    float: left;
}
.sf-reset .block-exception-detected .illustration-exception {
    width: 152px;
}
.sf-reset .block-exception-detected .text-exception {
    width: 670px;
    padding: 30px 44px 24px 46px;
    position: relative;
}
.sf-reset .text-exception .open-quote,
.sf-reset .text-exception .close-quote {
    position: absolute;
}
.sf-reset .open-quote {
    top: 0;
    left: 0;
}
.sf-reset .close-quote {
    bottom: 0;
    right: 50px;
}
.sf-reset .block-exception p {
    font-family: Arial, Helvetica, sans-serif;
}
.sf-reset .block-exception p a,
.sf-reset .block-exception p a:hover {
    color: #565656;
}
.sf-reset .logs h2 {
    float: left;
    width: 654px;
}
.sf-reset .error-count {
    float: right;
    width: 170px;
    text-align: right;
}
.sf-reset .error-count span {
    display: inline-block;
    background-color: #aacd4e;
    border-radius: 6px;
    padding: 4px;
    color: white;
    margin-right: 2px;
    font-size: 11px;
    font-weight: bold;
}
.sf-reset .toggle {
    vertical-align: middle;
}
.sf-reset .linked ul,
.sf-reset .linked li {
    display: inline;
}
.sf-reset #output-content {
    color: #000;
    font-size: 12px;
}
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
    }

    public function getDebugInfo()
    {
        return array (  792 => 488,  775 => 485,  727 => 476,  694 => 470,  679 => 466,  677 => 465,  649 => 462,  634 => 456,  629 => 454,  549 => 411,  529 => 409,  522 => 406,  386 => 159,  334 => 141,  331 => 140,  326 => 138,  307 => 128,  302 => 125,  288 => 118,  1077 => 657,  1073 => 656,  1069 => 654,  1064 => 651,  1055 => 648,  1051 => 647,  1048 => 646,  1044 => 645,  1035 => 639,  1026 => 633,  1023 => 632,  1021 => 631,  1018 => 630,  1013 => 627,  1004 => 624,  1000 => 623,  997 => 622,  993 => 621,  984 => 615,  975 => 609,  972 => 608,  970 => 607,  967 => 606,  963 => 604,  959 => 602,  955 => 600,  947 => 597,  941 => 595,  937 => 593,  935 => 592,  930 => 590,  926 => 589,  923 => 588,  919 => 587,  911 => 581,  909 => 580,  905 => 579,  896 => 573,  893 => 572,  891 => 571,  888 => 570,  884 => 568,  880 => 566,  874 => 562,  870 => 560,  864 => 558,  862 => 557,  854 => 552,  848 => 548,  844 => 546,  838 => 544,  836 => 543,  828 => 538,  824 => 537,  815 => 531,  812 => 530,  807 => 491,  800 => 523,  796 => 489,  790 => 519,  788 => 486,  780 => 513,  774 => 509,  770 => 507,  762 => 504,  754 => 499,  745 => 493,  742 => 492,  740 => 491,  732 => 487,  724 => 484,  702 => 472,  698 => 471,  692 => 474,  682 => 467,  678 => 468,  668 => 464,  664 => 463,  646 => 451,  642 => 449,  626 => 443,  622 => 452,  578 => 432,  574 => 431,  565 => 430,  559 => 427,  542 => 421,  536 => 419,  534 => 418,  530 => 417,  514 => 415,  276 => 111,  251 => 182,  405 => 137,  395 => 135,  377 => 129,  356 => 122,  328 => 139,  293 => 120,  281 => 114,  186 => 72,  462 => 202,  446 => 197,  439 => 195,  401 => 172,  380 => 158,  361 => 152,  338 => 116,  323 => 128,  286 => 112,  267 => 101,  262 => 188,  248 => 97,  213 => 78,  194 => 68,  367 => 155,  306 => 286,  152 => 46,  129 => 58,  167 => 71,  236 => 132,  223 => 124,  450 => 199,  438 => 89,  434 => 45,  425 => 13,  417 => 143,  411 => 140,  333 => 115,  190 => 89,  637 => 358,  615 => 344,  609 => 341,  606 => 449,  592 => 334,  588 => 333,  547 => 308,  543 => 306,  539 => 304,  533 => 301,  513 => 292,  506 => 289,  502 => 288,  443 => 247,  416 => 235,  412 => 234,  371 => 156,  350 => 120,  346 => 189,  311 => 159,  297 => 200,  239 => 131,  174 => 74,  150 => 55,  137 => 74,  23 => 3,  198 => 111,  345 => 147,  342 => 137,  317 => 145,  301 => 156,  291 => 137,  263 => 126,  188 => 90,  222 => 83,  211 => 108,  205 => 104,  197 => 69,  473 => 261,  470 => 246,  433 => 224,  429 => 188,  415 => 180,  406 => 214,  391 => 211,  382 => 131,  366 => 201,  357 => 198,  353 => 149,  327 => 173,  316 => 168,  308 => 109,  303 => 122,  296 => 121,  287 => 135,  261 => 127,  234 => 90,  228 => 104,  212 => 111,  206 => 108,  192 => 91,  170 => 84,  226 => 84,  216 => 79,  191 => 67,  178 => 59,  126 => 69,  100 => 36,  124 => 53,  58 => 25,  84 => 40,  76 => 34,  20 => 1,  153 => 77,  146 => 60,  113 => 48,  104 => 42,  97 => 41,  77 => 20,  134 => 39,  127 => 35,  81 => 23,  34 => 5,  817 => 387,  813 => 306,  810 => 492,  806 => 278,  803 => 277,  777 => 244,  767 => 236,  764 => 505,  751 => 225,  746 => 478,  737 => 490,  731 => 212,  721 => 206,  714 => 204,  706 => 473,  701 => 197,  696 => 476,  689 => 193,  686 => 468,  683 => 191,  676 => 467,  671 => 465,  666 => 183,  659 => 181,  656 => 180,  654 => 179,  651 => 178,  641 => 171,  636 => 446,  631 => 167,  624 => 165,  621 => 164,  619 => 163,  616 => 440,  608 => 157,  603 => 439,  597 => 152,  590 => 150,  587 => 434,  581 => 331,  575 => 143,  572 => 142,  566 => 139,  563 => 429,  556 => 136,  553 => 425,  551 => 424,  546 => 423,  540 => 129,  537 => 128,  531 => 127,  528 => 126,  523 => 125,  521 => 295,  510 => 116,  504 => 113,  500 => 112,  493 => 108,  488 => 105,  486 => 104,  466 => 87,  451 => 74,  448 => 73,  441 => 196,  421 => 390,  419 => 236,  408 => 176,  403 => 196,  388 => 134,  383 => 188,  378 => 157,  373 => 156,  363 => 153,  358 => 151,  351 => 141,  347 => 119,  339 => 355,  335 => 134,  329 => 131,  324 => 112,  319 => 163,  304 => 157,  299 => 155,  289 => 196,  284 => 149,  279 => 147,  274 => 110,  249 => 181,  232 => 88,  200 => 72,  184 => 63,  181 => 65,  175 => 58,  172 => 57,  160 => 71,  155 => 47,  65 => 11,  830 => 539,  826 => 309,  823 => 308,  819 => 281,  816 => 280,  793 => 248,  787 => 246,  781 => 245,  779 => 243,  769 => 235,  766 => 234,  753 => 224,  749 => 479,  741 => 217,  735 => 213,  729 => 209,  725 => 208,  718 => 482,  710 => 475,  705 => 480,  700 => 196,  693 => 194,  690 => 469,  687 => 192,  680 => 188,  675 => 186,  670 => 184,  663 => 182,  660 => 464,  658 => 180,  655 => 457,  645 => 172,  640 => 448,  635 => 168,  628 => 444,  625 => 453,  623 => 164,  620 => 451,  612 => 158,  607 => 156,  601 => 446,  594 => 335,  591 => 436,  589 => 149,  585 => 332,  579 => 144,  576 => 143,  570 => 140,  567 => 414,  564 => 138,  560 => 137,  557 => 314,  555 => 135,  550 => 132,  544 => 130,  541 => 129,  535 => 302,  532 => 410,  527 => 408,  525 => 125,  519 => 121,  517 => 404,  509 => 290,  505 => 114,  501 => 113,  494 => 109,  489 => 106,  487 => 105,  467 => 260,  452 => 75,  449 => 198,  445 => 117,  442 => 44,  436 => 13,  431 => 189,  428 => 1,  422 => 184,  420 => 2,  414 => 387,  404 => 383,  399 => 212,  394 => 168,  389 => 160,  369 => 369,  364 => 197,  359 => 123,  352 => 361,  348 => 140,  344 => 359,  340 => 145,  336 => 357,  330 => 354,  325 => 129,  320 => 127,  310 => 346,  300 => 121,  290 => 119,  280 => 194,  275 => 105,  270 => 102,  260 => 326,  255 => 101,  250 => 322,  245 => 320,  233 => 87,  231 => 129,  185 => 75,  180 => 70,  165 => 83,  161 => 58,  148 => 65,  118 => 49,  114 => 36,  110 => 22,  90 => 42,  70 => 15,  343 => 146,  321 => 135,  315 => 131,  313 => 110,  295 => 138,  271 => 190,  265 => 105,  259 => 103,  256 => 96,  253 => 100,  244 => 133,  237 => 91,  225 => 125,  218 => 131,  215 => 123,  210 => 77,  207 => 76,  202 => 94,  53 => 12,  480 => 162,  474 => 161,  469 => 158,  461 => 256,  457 => 254,  453 => 199,  444 => 45,  440 => 148,  437 => 244,  435 => 13,  430 => 2,  427 => 1,  423 => 238,  413 => 384,  409 => 199,  407 => 138,  402 => 213,  398 => 136,  393 => 192,  387 => 164,  384 => 132,  381 => 120,  379 => 373,  374 => 128,  368 => 126,  365 => 125,  362 => 124,  360 => 199,  355 => 150,  341 => 117,  337 => 169,  322 => 101,  314 => 161,  312 => 130,  309 => 129,  305 => 108,  298 => 120,  294 => 153,  285 => 100,  283 => 115,  278 => 106,  268 => 85,  264 => 141,  258 => 187,  252 => 125,  247 => 120,  241 => 93,  229 => 87,  220 => 81,  214 => 69,  177 => 69,  169 => 75,  140 => 72,  132 => 58,  128 => 42,  107 => 43,  61 => 12,  273 => 96,  269 => 107,  254 => 137,  243 => 137,  240 => 113,  238 => 119,  235 => 89,  230 => 305,  227 => 86,  224 => 156,  221 => 80,  219 => 110,  217 => 75,  208 => 76,  204 => 78,  179 => 79,  159 => 57,  143 => 80,  135 => 46,  119 => 40,  102 => 24,  71 => 13,  67 => 14,  63 => 21,  59 => 16,  93 => 27,  88 => 24,  78 => 19,  38 => 7,  28 => 3,  201 => 74,  196 => 92,  183 => 71,  171 => 73,  166 => 54,  163 => 82,  158 => 80,  156 => 58,  151 => 66,  142 => 65,  138 => 56,  136 => 71,  121 => 50,  117 => 37,  105 => 25,  91 => 25,  62 => 27,  49 => 14,  26 => 3,  87 => 41,  46 => 13,  44 => 10,  31 => 4,  94 => 21,  89 => 30,  85 => 23,  75 => 18,  68 => 30,  56 => 11,  24 => 2,  27 => 3,  25 => 35,  21 => 2,  19 => 1,  79 => 18,  72 => 17,  69 => 16,  47 => 11,  40 => 8,  37 => 6,  22 => 2,  246 => 136,  157 => 80,  145 => 74,  139 => 63,  131 => 61,  123 => 61,  120 => 31,  115 => 54,  111 => 47,  108 => 33,  101 => 30,  98 => 45,  96 => 37,  83 => 33,  74 => 27,  66 => 25,  55 => 24,  52 => 12,  50 => 22,  43 => 12,  41 => 19,  35 => 6,  32 => 6,  29 => 3,  209 => 113,  203 => 73,  199 => 93,  193 => 100,  189 => 66,  187 => 95,  182 => 87,  176 => 86,  173 => 85,  168 => 61,  164 => 70,  162 => 59,  154 => 82,  149 => 79,  147 => 75,  144 => 42,  141 => 73,  133 => 45,  130 => 46,  125 => 51,  122 => 64,  116 => 57,  112 => 47,  109 => 52,  106 => 51,  103 => 28,  99 => 23,  95 => 27,  92 => 43,  86 => 47,  82 => 19,  80 => 32,  73 => 33,  64 => 23,  60 => 20,  57 => 39,  54 => 19,  51 => 13,  48 => 16,  45 => 10,  42 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 5,);
    }
}