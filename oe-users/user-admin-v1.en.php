<?php
	require_once "user-admin-v1(var).php";
	include_once "../WEFiles/Server/DB/OEDB.php";
?><!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en">
 <head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <meta name="generator" content="openElement (1.57.9)" />
  <link id="openElement" rel="stylesheet" type="text/css" href="../WEFiles/Css/v02/openElement.css?v=50491126800" />
  <link id="OEBase" rel="stylesheet" type="text/css" href="user-admin-v1.css?v=50491126800" />
  <!--[if lte IE 7]>
  <link rel="stylesheet" type="text/css" href="../WEFiles/Css/ie7.css?v=50491126800" />
  <![endif]-->
  <script type="text/javascript">
   var WEInfoPage={PHPVersion:"phpOK",OEVersion:"1-57-9",PagePath:"oe-users/user-admin-v1",Culture:"EN",LanguageCode:"EN",RelativePath:"../",RenderMode:"Export",PageAssociatePath:"oe-users/user-admin-v1",EditorTexts:null}
  </script>
  <script type="text/javascript" src="../WEFiles/Client/jQuery/1.10.2.js?v=50491126800"></script>
  <script type="text/javascript" src="../WEFiles/Client/jQuery/migrate.js?v=50491126800"></script>
  <script type="text/javascript" src="../WEFiles/Client/Common/oe.min.js?v=50491126800"></script><?php
  	if (isset($oeHeaderInlineCode)) echo $oeHeaderInlineCode;
  ?>
 </head>
 <body class="" data-gl="{&quot;KeywordsHomeNotInherits&quot;:false}"><?php
  	if (isset($oeStartBodyInlineCode)) echo $oeStartBodyInlineCode;
  ?>
  <form id="XForm" method="post" action="#"></form>
  <div id="XBody" class="BaseDiv RWidth OEPageXbody OESK_XBody_Default" style="z-index:0">
   <div class="OESZ OESZ_DivContent OESZG_XBody">
    <div class="OESZ OESZ_XBodyContent OESZG_XBody OECT OECT_Content OECTAbs">
     <div id="WE19d436919c" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:1">
      <div class="OESZ OESZ_DivContent OESZG_WE19d436919c">
       <div class="OECT OECT_Content OECTAbs OEDynTag0">
        <div id="WEf441af67c0" class="BaseDiv RWidth OEWEHr OESK_WEHrLign_Default" style="z-index:13">
         <div class="OESZ OESZ_DivContent OESZG_WEf441af67c0">
          <div class="OESZ OESZ_Deco1 OESZG_WEf441af67c0" style="position:absolute"></div>
          <div class="OESZ OESZ_Deco2 OESZG_WEf441af67c0" style="position:absolute"></div>
          <div class="OESZ OESZ_Deco3 OESZG_WEf441af67c0" style="position:absolute"></div>
         </div>
        </div>
        <div id="WE70b59cae48" class="BaseDiv RWidth OEWELabel OESK_WELabel_Default" style="z-index:17">
         <div class="OESZ OESZ_DivContent OESZG_WE70b59cae48">
          <span class="OESZ OESZ_Text OESZG_WE70b59cae48 ContentBox"><span style="font-weight:normal;font-size:13px;">. . . . User Database Administration . . . .</span></span>
         </div>
        </div>
        <div id="WE72a86ee2ab" class="BaseDiv RWidth OEWEHr OESK_WEHrLign_Default" style="z-index:12">
         <div class="OESZ OESZ_DivContent OESZG_WE72a86ee2ab">
          <div class="OESZ OESZ_Deco1 OESZG_WE72a86ee2ab" style="position:absolute"></div>
          <div class="OESZ OESZ_Deco2 OESZG_WE72a86ee2ab" style="position:absolute"></div>
          <div class="OESZ OESZ_Deco3 OESZG_WE72a86ee2ab" style="position:absolute"></div>
         </div>
        </div>
        <div id="WE1d6ade7adc" class="BaseDiv RWidth OEWEHr OESK_WEHrLign_Default" style="z-index:14">
         <div class="OESZ OESZ_DivContent OESZG_WE1d6ade7adc">
          <div class="OESZ OESZ_Deco1 OESZG_WE1d6ade7adc" style="position:absolute"></div>
          <div class="OESZ OESZ_Deco2 OESZG_WE1d6ade7adc" style="position:absolute"></div>
          <div class="OESZ OESZ_Deco3 OESZG_WE1d6ade7adc" style="position:absolute"></div>
         </div>
        </div>
        <div id="WEc0c7373580" class="BaseDiv RWidth OEWEHr OESK_WEHrLign_Default" style="z-index:15">
         <div class="OESZ OESZ_DivContent OESZG_WEc0c7373580">
          <div class="OESZ OESZ_Deco1 OESZG_WEc0c7373580" style="position:absolute"></div>
          <div class="OESZ OESZ_Deco2 OESZG_WEc0c7373580" style="position:absolute"></div>
          <div class="OESZ OESZ_Deco3 OESZG_WEc0c7373580" style="position:absolute"></div>
         </div>
        </div>
        <div id="WE0178df8f1f" class="BaseDiv RWidth OEWELink OESK_WELink_Default" style="z-index:1">
         <div class="OESZ OESZ_DivContent OESZG_WE0178df8f1f">
          <a class="OESZ OESZ_Link OESZG_WE0178df8f1f ContentBox OEDynTag0" data-cd="PageLink" href="<?php echo $oei['WE0178df8f1f..OEDynTag0.href'];?>"><?php echo $oei['WE0178df8f1f..OEDynTag0.html1'];?></a>
         </div>
        </div>
        <div id="WE8ffac3fda9" class="BaseDiv RWidth OEWELink OESK_WELink_Default" style="z-index:16">
         <div class="OESZ OESZ_DivContent OESZG_WE8ffac3fda9">
          <a class="OESZ OESZ_Link OESZG_WE8ffac3fda9 ContentBox OEDynTag0" data-cd="PageLink" href="<?php echo $oei['WE8ffac3fda9..OEDynTag0.href'];?>"><?php echo $oei['WE8ffac3fda9..OEDynTag0.html1'];?></a>
         </div>
        </div>
        <div id="WEbc425f07c4" class="BaseDiv RWidth OEWELabel OESK_WELabel_Default" style="z-index:2">
         <div class="OESZ OESZ_DivContent OESZG_WEbc425f07c4">
          <span class="OESZ OESZ_Text OESZG_WEbc425f07c4 ContentBox OEDynTag0"><?php echo $oei['WEbc425f07c4..OEDynTag0.html1'];?></span>
         </div>
        </div>
        <div id="WEe0e7b6407b" class="BaseDiv RWidth OEWELabel OESK_WELabel_Default" style="z-index:3">
         <div class="OESZ OESZ_DivContent OESZG_WEe0e7b6407b">
          <span class="OESZ OESZ_Text OESZG_WEe0e7b6407b ContentBox">To <span style="text-decoration:underline;">sort</span> users by a column,&nbsp;click its header (name). <span style="text-decoration:underline;">Edit, block or delete</span><b>&nbsp;</b>any account by clicking "Edit" at its right. Use database management tools like PHPMyAdmin to manually modify or delete data.</span>
         </div>
        </div>
        <div id="WE5346be6fd4" class="BaseDiv RWidth OEWELink OESK_WELink_Default" style="z-index:4">
         <div class="OESZ OESZ_DivContent OESZG_WE5346be6fd4">
          <a class="OESZ OESZ_Link OESZG_WE5346be6fd4 ContentBox OEDynTag0" data-cd="PageLink" href="<?php echo $oei['WE5346be6fd4..OEDynTag0.href'];?>">Time since last visit</a>
         </div>
        </div>
        <div id="WEbf70bcc1ad" class="BaseDiv RWidth OEWELink OESK_WELink_Default" style="z-index:5">
         <div class="OESZ OESZ_DivContent OESZG_WEbf70bcc1ad">
          <a class="OESZ OESZ_Link OESZG_WEbf70bcc1ad ContentBox OEDynTag0" data-cd="PageLink" href="<?php echo $oei['WEbf70bcc1ad..OEDynTag0.href'];?>">ID#</a>
         </div>
        </div>
        <div id="WE5c99974d52" class="BaseDiv RWidth OEWELink OESK_WELink_Default" style="z-index:6">
         <div class="OESZ OESZ_DivContent OESZG_WE5c99974d52">
          <a class="OESZ OESZ_Link OESZG_WE5c99974d52 ContentBox OEDynTag0" data-cd="PageLink" href="<?php echo $oei['WE5c99974d52..OEDynTag0.href'];?>">User name</a>
         </div>
        </div>
        <div id="WE199dec0b87" class="BaseDiv RWidth OEWELink OESK_WELink_Default" style="z-index:7">
         <div class="OESZ OESZ_DivContent OESZG_WE199dec0b87">
          <a class="OESZ OESZ_Link OESZG_WE199dec0b87 ContentBox OEDynTag0" data-cd="PageLink" href="<?php echo $oei['WE199dec0b87..OEDynTag0.href'];?>">Email address (<b>bold</b> if subscribed)</a>
         </div>
        </div>
        <div id="WE56907fe177" class="BaseDiv RWidth OEWELink OESK_WELink_Default" style="z-index:8">
         <div class="OESZ OESZ_DivContent OESZG_WE56907fe177">
          <a class="OESZ OESZ_Link OESZG_WE56907fe177 ContentBox OEDynTag0" data-cd="PageLink" href="<?php echo $oei['WE56907fe177..OEDynTag0.href'];?>">Status</a>
         </div>
        </div>
        <div id="WE974507b2a5" class="BaseDiv RBoth OEWEDynIteratorPanelDBG OESK_WEDynIteratorPanelDBG_Default" style="z-index:9">
         <div class="OESZ OESZ_DivContent OESZG_WE974507b2a5">
          <div class="OECT OECT_Content OECTAbs OEDynTag0">
           <div class="OEIteratorParent OEDynTag1"><?php echo $oeIter['WE974507b2a5.OEDynTag1.0']; ?>
           </div>
          </div>
         </div>
        </div>
        <div id="WE3147299e4d" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:10">
         <div class="OESZ OESZ_DivContent OESZG_WE3147299e4d">
          <span class="OESZ OESZ_Text OESZG_WE3147299e4d ContentBox OEDynTag0"><?php echo $oei['WE3147299e4d..OEDynTag0.html1'];?></span>
         </div>
        </div>
        <div id="WEcf4b44b513" class="BaseDiv RWidth OEWELabel OESK_WELabel_Default" style="z-index:11">
         <div class="OESZ OESZ_DivContent OESZG_WEcf4b44b513">
          <span class="OESZ OESZ_Text OESZG_WEcf4b44b513 ContentBox OEDynTag0"><?php echo $oei['WEcf4b44b513..OEDynTag0.html1'];?></span>
         </div>
        </div>
       </div>
      </div>
     </div>
    </div>
    <div class="OESZ OESZ_XBodyFooter OESZG_XBody OECT OECT_Footer OECTAbs"></div>
   </div>
  </div>
 </body>
</html>