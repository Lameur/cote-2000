<?php
	require_once "user-admin-v1(var).php";
	include_once "../WEFiles/Server/DB/OEDB.php";
?><!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="es">
 <head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <meta name="generator" content="openElement (1.57.9)" />
  <link id="openElement" rel="stylesheet" type="text/css" href="../WEFiles/Css/v02/openElement.css?v=63629943612" />
  <link id="OEBase" rel="stylesheet" type="text/css" href="user-admin-v1.css?v=50491126800" />
  <!--[if lte IE 7]>
  <link rel="stylesheet" type="text/css" href="../WEFiles/Css/ie7.css?v=63614056866" />
  <![endif]-->
  <script type="text/javascript">
   var WEInfoPage={PHPVersion:"phpOK",OEVersion:"1-57-9",PagePath:"oe-users/user-admin-v1",Culture:"ES",LanguageCode:"ES",RelativePath:"../",RenderMode:"Export",PageAssociatePath:"oe-users/user-admin-v1",EditorTexts:null}
  </script>
  <script type="text/javascript" src="../WEFiles/Client/jQuery/1.10.2.js?v=63614056866"></script>
  <script type="text/javascript" src="../WEFiles/Client/jQuery/migrate.js?v=63614056866"></script>
  <script type="text/javascript" src="../WEFiles/Client/Common/oe.min.js?v=63629943594"></script><?php
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
     <div id="WEbc00ee452f" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:1">
      <div class="OESZ OESZ_DivContent OESZG_WEbc00ee452f">
       <div class="OECT OECT_Content OECTAbs OEDynTag0">
        <div id="WE8dfbd6e3a3" class="BaseDiv RWidth OEWEHr OESK_WEHrLign_Default" style="z-index:13">
         <div class="OESZ OESZ_DivContent OESZG_WE8dfbd6e3a3">
          <div class="OESZ OESZ_Deco1 OESZG_WE8dfbd6e3a3" style="position:absolute"></div>
          <div class="OESZ OESZ_Deco2 OESZG_WE8dfbd6e3a3" style="position:absolute"></div>
          <div class="OESZ OESZ_Deco3 OESZG_WE8dfbd6e3a3" style="position:absolute"></div>
         </div>
        </div>
        <div id="WE511798b949" class="BaseDiv RWidth OEWELabel OESK_WELabel_Default" style="z-index:17">
         <div class="OESZ OESZ_DivContent OESZG_WE511798b949">
          <span class="OESZ OESZ_Text OESZG_WE511798b949 ContentBox"><span style="font-weight:normal;font-size:13px;">. . . . Administration de base de données d'utilisateurs . . . .</span></span>
         </div>
        </div>
        <div id="WE43b8f79fad" class="BaseDiv RWidth OEWEHr OESK_WEHrLign_Default" style="z-index:12">
         <div class="OESZ OESZ_DivContent OESZG_WE43b8f79fad">
          <div class="OESZ OESZ_Deco1 OESZG_WE43b8f79fad" style="position:absolute"></div>
          <div class="OESZ OESZ_Deco2 OESZG_WE43b8f79fad" style="position:absolute"></div>
          <div class="OESZ OESZ_Deco3 OESZG_WE43b8f79fad" style="position:absolute"></div>
         </div>
        </div>
        <div id="WE01224b2aee" class="BaseDiv RWidth OEWEHr OESK_WEHrLign_Default" style="z-index:14">
         <div class="OESZ OESZ_DivContent OESZG_WE01224b2aee">
          <div class="OESZ OESZ_Deco1 OESZG_WE01224b2aee" style="position:absolute"></div>
          <div class="OESZ OESZ_Deco2 OESZG_WE01224b2aee" style="position:absolute"></div>
          <div class="OESZ OESZ_Deco3 OESZG_WE01224b2aee" style="position:absolute"></div>
         </div>
        </div>
        <div id="WE6688d2570b" class="BaseDiv RWidth OEWEHr OESK_WEHrLign_Default" style="z-index:15">
         <div class="OESZ OESZ_DivContent OESZG_WE6688d2570b">
          <div class="OESZ OESZ_Deco1 OESZG_WE6688d2570b" style="position:absolute"></div>
          <div class="OESZ OESZ_Deco2 OESZG_WE6688d2570b" style="position:absolute"></div>
          <div class="OESZ OESZ_Deco3 OESZG_WE6688d2570b" style="position:absolute"></div>
         </div>
        </div>
        <div id="WEcc1ebe4346" class="BaseDiv RWidth OEWELink OESK_WELink_Default" style="z-index:1">
         <div class="OESZ OESZ_DivContent OESZG_WEcc1ebe4346">
          <a class="OESZ OESZ_Link OESZG_WEcc1ebe4346 ContentBox OEDynTag0" data-cd="PageLink" href="<?php echo $oei['WEcc1ebe4346..OEDynTag0.href'];?>"><?php echo $oei['WEcc1ebe4346..OEDynTag0.html1'];?></a>
         </div>
        </div>
        <div id="WE6bdc169305" class="BaseDiv RWidth OEWELink OESK_WELink_Default" style="z-index:16">
         <div class="OESZ OESZ_DivContent OESZG_WE6bdc169305">
          <a class="OESZ OESZ_Link OESZG_WE6bdc169305 ContentBox OEDynTag0" data-cd="PageLink" href="<?php echo $oei['WE6bdc169305..OEDynTag0.href'];?>"><?php echo $oei['WE6bdc169305..OEDynTag0.html1'];?></a>
         </div>
        </div>
        <div id="WEd2a31a00dc" class="BaseDiv RWidth OEWELabel OESK_WELabel_Default" style="z-index:2">
         <div class="OESZ OESZ_DivContent OESZG_WEd2a31a00dc">
          <span class="OESZ OESZ_Text OESZG_WEd2a31a00dc ContentBox OEDynTag0"><?php echo $oei['WEd2a31a00dc..OEDynTag0.html1'];?></span>
         </div>
        </div>
        <div id="WE1c0cc67b62" class="BaseDiv RWidth OEWELabel OESK_WELabel_Default" style="z-index:3">
         <div class="OESZ OESZ_DivContent OESZG_WE1c0cc67b62">
          <span class="OESZ OESZ_Text OESZG_WE1c0cc67b62 ContentBox">Pour <span style="text-decoration:underline;">trier</span> les utilisateurs par une colonne,&nbsp;cliquez sur son entête (nom). <span style="text-decoration:underline;">Modifiez, bloquez ou supprimez</span><b>&nbsp;</b>n'importe quel compte en cliquant sur "Modifier" à droite. Utilisez des outils de gestion de base de données tel que PHPMyAdmin pour modifier ou supprimer manuellement des données.</span>
         </div>
        </div>
        <div id="WE7d923009ee" class="BaseDiv RWidth OEWELink OESK_WELink_Default" style="z-index:4">
         <div class="OESZ OESZ_DivContent OESZG_WE7d923009ee">
          <a class="OESZ OESZ_Link OESZG_WE7d923009ee ContentBox OEDynTag0" data-cd="PageLink" href="<?php echo $oei['WE7d923009ee..OEDynTag0.href'];?>">Temps depuis la dernière visite</a>
         </div>
        </div>
        <div id="WE712d5bab3d" class="BaseDiv RWidth OEWELink OESK_WELink_Default" style="z-index:5">
         <div class="OESZ OESZ_DivContent OESZG_WE712d5bab3d">
          <a class="OESZ OESZ_Link OESZG_WE712d5bab3d ContentBox OEDynTag0" data-cd="PageLink" href="<?php echo $oei['WE712d5bab3d..OEDynTag0.href'];?>">ID#</a>
         </div>
        </div>
        <div id="WEd510679aa8" class="BaseDiv RWidth OEWELink OESK_WELink_Default" style="z-index:6">
         <div class="OESZ OESZ_DivContent OESZG_WEd510679aa8">
          <a class="OESZ OESZ_Link OESZG_WEd510679aa8 ContentBox OEDynTag0" data-cd="PageLink" href="<?php echo $oei['WEd510679aa8..OEDynTag0.href'];?>">Nom d'utilisateur</a>
         </div>
        </div>
        <div id="WEe14ea15e61" class="BaseDiv RWidth OEWELink OESK_WELink_Default" style="z-index:7">
         <div class="OESZ OESZ_DivContent OESZG_WEe14ea15e61">
          <a class="OESZ OESZ_Link OESZG_WEe14ea15e61 ContentBox OEDynTag0" data-cd="PageLink" href="<?php echo $oei['WEe14ea15e61..OEDynTag0.href'];?>">Adresse mail (<b>gras</b> si abonné)</a>
         </div>
        </div>
        <div id="WE4d7eeb95cf" class="BaseDiv RWidth OEWELink OESK_WELink_Default" style="z-index:8">
         <div class="OESZ OESZ_DivContent OESZG_WE4d7eeb95cf">
          <a class="OESZ OESZ_Link OESZG_WE4d7eeb95cf ContentBox OEDynTag0" data-cd="PageLink" href="<?php echo $oei['WE4d7eeb95cf..OEDynTag0.href'];?>">Etat</a>
         </div>
        </div>
        <div id="WE09a2268993" class="BaseDiv RBoth OEWEDynIteratorPanelDBG OESK_WEDynIteratorPanelDBG_Default" style="z-index:9">
         <div class="OESZ OESZ_DivContent OESZG_WE09a2268993">
          <div class="OECT OECT_Content OECTAbs OEDynTag0">
           <div class="OEIteratorParent OEDynTag1"><?php echo $oeIter['WE09a2268993.OEDynTag1.0']; ?>
           </div>
          </div>
         </div>
        </div>
        <div id="WEe41cb40047" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:10">
         <div class="OESZ OESZ_DivContent OESZG_WEe41cb40047">
          <span class="OESZ OESZ_Text OESZG_WEe41cb40047 ContentBox OEDynTag0"><?php echo $oei['WEe41cb40047..OEDynTag0.html1'];?></span>
         </div>
        </div>
        <div id="WEa427e0eded" class="BaseDiv RWidth OEWELabel OESK_WELabel_Default" style="z-index:11">
         <div class="OESZ OESZ_DivContent OESZG_WEa427e0eded">
          <span class="OESZ OESZ_Text OESZG_WEa427e0eded ContentBox OEDynTag0"><?php echo $oei['WEa427e0eded..OEDynTag0.html1'];?></span>
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