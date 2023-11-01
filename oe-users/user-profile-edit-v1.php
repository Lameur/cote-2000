<?php
	require_once "user-profile-edit-v1(var).php";
	include_once "../WEFiles/Server/DB/OEDB.php";
?><!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="fr">
 <head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <meta name="generator" content="openElement (1.57.9)" />
  <link id="openElement" rel="stylesheet" type="text/css" href="../WEFiles/Css/v02/openElement.css?v=63629943612" />
  <link id="OEBase" rel="stylesheet" type="text/css" href="user-profile-edit-v1.css?v=50491126800" />
  <link rel="stylesheet" type="text/css" href="../WEFiles/Css/opentip.css?v=63614056866" />
  <link rel="stylesheet" type="text/css" href="../WEFiles/Css/WEAccordion-v21.css?v=63629943606" />
  <!--[if lte IE 7]>
  <link rel="stylesheet" type="text/css" href="../WEFiles/Css/ie7.css?v=63614056866" />
  <![endif]-->
  <script type="text/javascript">
   var WEInfoPage={PHPVersion:"phpOK",OEVersion:"1-57-9",PagePath:"oe-users/user-profile-edit-v1",Culture:"DEFAULT",LanguageCode:"FR",RelativePath:"../",RenderMode:"Export",PageAssociatePath:"oe-users/user-profile-edit-v1",EditorTexts:null}
  </script>
  <script type="text/javascript" src="../WEFiles/Client/jQuery/1.10.2.js?v=63614056866"></script>
  <script type="text/javascript" src="../WEFiles/Client/jQuery/migrate.js?v=63614056866"></script>
  <script type="text/javascript" src="../WEFiles/Client/Common/oe.min.js?v=63629943594"></script>
  <script type="text/javascript" src="user-profile-edit-v1(var).js?v=50491126800"></script>
  <script type="text/javascript" src="../WEFiles/Client/jQuery/Plugins/jquery.form.js?v=63629943610"></script>
  <script type="text/javascript" src="../WEFiles/Client/opentip-jquery.min.js?v=63629943610"></script>
  <script type="text/javascript" src="../WEFiles/Client/WESendForm-v210.js?v=63629943602"></script>
  <script type="text/javascript" src="../WEFiles/Client/jQuery/Plugins/jquery.ui.core.js?v=63629943611"></script>
  <script type="text/javascript" src="../WEFiles/Client/jQuery/Plugins/jquery.ui.effects.js?v=63629943611"></script>
  <script type="text/javascript" src="../WEFiles/Client/jQuery/Plugins/jquery.ui.accordion-v21.js?v=63629943606"></script>
  <script type="text/javascript" src="../WEFiles/Client/WEAccordion-v21.js?v=63629943596"></script>
  <script type="text/javascript">
   var WEEdValidators={WEfb9e90379e:[{MsgError:"Please enter your error message.",Expression:"(^$)|(?:[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*|\"(?:[\\x01-\\x08\\x0b\\x0c\\x0e-\\x1f\\x21\\x23-\\x5b\\x5d-\\x7f]|\\\\[\\x01-\\x09\\x0b\\x0c\\x0e-\\x7f])*\")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?|[a-z0-9-]*[a-z0-9]:(?:[\\x01-\\x08\\x0b\\x0c\\x0e-\\x1f\\x21-\\x5a\\x53-\\x7f]|\\\\[\\x01-\\x09\\x0b\\x0c\\x0e-\\x7f])+)\\])"}],WE1462c1e7cb:[{MsgError:"Veuillez inscrire votre message d'erreur.",Expression:".+"}]}
  </script><?php
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
     <div id="WEbcdfc359d6" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:1">
      <div class="OESZ OESZ_DivContent OESZG_WEbcdfc359d6">
       <div class="OECT OECT_Content OECTAbs OEDynTag0">
        <div id="WE76da1b31d0" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:1">
         <div class="OESZ OESZ_DivContent OESZG_WE76da1b31d0">
          <span class="OESZ OESZ_Text OESZG_WE76da1b31d0 ContentBox OEDynTag0"><?php echo $oei['WE76da1b31d0..OEDynTag0.html1'];?></span>
         </div>
        </div>
        <div id="WE86d9127bfb" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:2">
         <div class="OESZ OESZ_DivContent OESZG_WE86d9127bfb">
          <span class="OESZ OESZ_Text OESZG_WE86d9127bfb ContentBox OEDynTag0"><?php echo $oei['WE86d9127bfb..OEDynTag0.html1'];?></span>
         </div>
        </div>
        <div id="WEa07854e45a" class="BaseDiv RBoth OEWEAccordion OESK_WEAccordion_Default" style="z-index:3">
         <div class="OESZ OESZ_DivContent OESZG_WEa07854e45a">
          <div id="9b5a6a3e" class="OESZ OESZ_WEAccordionHeader OESZG_WEa07854e45a">
           <span class="OESZ OESZ_WEAccordionHeaderLeft OESZG_WEa07854e45a"></span>
           <span class="OESZ OESZ_WEAccordionHeaderContent OESZG_WEa07854e45a">
            <a href="#">
             <span class="OESZ OESZ_WEAccordionTitle OESZG_WEa07854e45a">Modifier le mot de passe et/ou l'adresse mail</span>
            </a>
            <span class="OESZ OESZ_WEAccordionAltTitle OESZG_WEa07854e45a">
             <a href="#"></a>
            </span>
           </span>
           <span class="OESZ OESZ_WEAccordionHeaderRight OESZG_WEa07854e45a"></span>
          </div>
          <div class="OESZ OESZ_WEAccordionContent OESZG_WEa07854e45a">
           <div class="OECT OECT_9b5a6a3e OECTAbs">
            <div id="WEb697f99623" class="BaseDiv RWidth OEWELabel OESK_WELabel_Default" style="z-index:1">
             <div class="OESZ OESZ_DivContent OESZG_WEb697f99623">
              <span class="OESZ OESZ_Text OESZG_WEb697f99623 ContentBox OEDynTag0"><?php echo $oei['WEb697f99623..OEDynTag0.html1'];?></span>
             </div>
            </div>
            <div id="WEed57ffb3c8" class="BaseDiv RNone OEWECodeBlock OESK_WECodeBlock_Default" style="z-index:13">
             <div class="OESZ OESZ_DivContent OESZG_WEed57ffb3c8">
              <script>
              // Animate color transition for report
              
              //
              
              $(function(){
                
                var $reportTag = $('#WEb697f99623');
                $reportTag.fadeTo('slow', 0.25).fadeTo('slow', 1.0);
                
              });
              
              
              </script>
             </div>
            </div>
            <div id="WE56e9e687f3" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:2">
             <div class="OESZ OESZ_DivContent OESZG_WE56e9e687f3">
              <span class="OESZ OESZ_Text OESZG_WE56e9e687f3 ContentBox OEDynTag0">Nouveau mot de passe</span>
             </div>
            </div>
            <div id="WEbc4fda9d1c" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:12">
             <div class="OESZ OESZ_DivContent OESZG_WEbc4fda9d1c">
              <input name="oepNewPW" type="password" class="OESZ OESZ_TextBox OESZG_WEbc4fda9d1c OEDynTag0" value="<?php echo $oei['WEbc4fda9d1c..OEDynTag0.value'];?>" />
             </div>
            </div>
            <div id="WEd32f7b5085" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:3">
             <div class="OESZ OESZ_DivContent OESZG_WEd32f7b5085">
              <span class="OESZ OESZ_Text OESZG_WEd32f7b5085 ContentBox OEDynTag0" style="<?php echo $oei['WEd32f7b5085..OEDynTag0.style'];?>">Confirmer nouveau mot de passe</span>
             </div>
            </div>
            <div id="WE3f9442b4de" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:4">
             <div class="OESZ OESZ_DivContent OESZG_WE3f9442b4de">
              <input name="oepNewPW2" type="password" class="OESZ OESZ_TextBox OESZG_WE3f9442b4de OEDynTag0" value="<?php echo $oei['WE3f9442b4de..OEDynTag0.value'];?>" />
             </div>
            </div>
            <div id="WE41149117f8" class="BaseDiv RWidth OEWEHr OESK_WEHrLign_Default" style="z-index:10">
             <div class="OESZ OESZ_DivContent OESZG_WE41149117f8">
              <div class="OESZ OESZ_Deco1 OESZG_WE41149117f8" style="position:absolute"></div>
              <div class="OESZ OESZ_Deco2 OESZG_WE41149117f8" style="position:absolute"></div>
              <div class="OESZ OESZ_Deco3 OESZG_WE41149117f8" style="position:absolute"></div>
             </div>
            </div>
            <div id="WE038e7bc5c8" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:5">
             <div class="OESZ OESZ_DivContent OESZG_WE038e7bc5c8">
              <span class="OESZ OESZ_Text OESZG_WE038e7bc5c8 ContentBox">Modifier l'adresse mail</span>
             </div>
            </div>
            <div id="WEfb9e90379e" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:6">
             <div class="OESZ OESZ_DivContent OESZG_WEfb9e90379e">
              <input name="oepEmail" type="text" class="OESZ OESZ_TextBox OESZG_WEfb9e90379e OEDynTag0" value="<?php echo $oei['WEfb9e90379e..OEDynTag0.value'];?>" />
             </div>
            </div>
            <div id="WE5834a04d9c" class="BaseDiv RWidth OEWEHr OESK_WEHrLign_Default" style="z-index:11">
             <div class="OESZ OESZ_DivContent OESZG_WE5834a04d9c">
              <div class="OESZ OESZ_Deco1 OESZG_WE5834a04d9c" style="position:absolute"></div>
              <div class="OESZ OESZ_Deco2 OESZG_WE5834a04d9c" style="position:absolute"></div>
              <div class="OESZ OESZ_Deco3 OESZG_WE5834a04d9c" style="position:absolute"></div>
             </div>
            </div>
            <div id="WEb68041d690" class="BaseDiv RWidth OEWELabel OESK_WELabel_Default" style="z-index:7">
             <div class="OESZ OESZ_DivContent OESZG_WEb68041d690">
              <span class="OESZ OESZ_Text OESZG_WEb68041d690 ContentBox OEDynTag0">Pour des raisons de sécurité, veuillez saisir le mot de passe actuel (obligatoire)</span>
             </div>
            </div>
            <div id="WE1462c1e7cb" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:8">
             <div class="OESZ OESZ_DivContent OESZG_WE1462c1e7cb">
              <input name="oepPW" type="password" class="OESZ OESZ_TextBox OESZG_WE1462c1e7cb OEDynTag0" />
             </div>
            </div>
            <div id="WEef7ff3477f" class="BaseDiv RWidth OEWEButton OESK_WEButton_Default OECenterAH" style="z-index:9">
             <div class="OESZ OESZ_DivContent OESZG_WEef7ff3477f">
              <button class="OESZ OESZ_Button OESZG_WEef7ff3477f OEDynTag0" type="button" name="WEef7ff3477f">Enregistrer le mot de passe et/ou l'adresse mail</button>
             </div>
            </div>
           </div>
          </div>
          <div id="49619388" class="OESZ OESZ_WEAccordionHeader OESZG_WEa07854e45a">
           <span class="OESZ OESZ_WEAccordionHeaderLeft OESZG_WEa07854e45a"></span>
           <span class="OESZ OESZ_WEAccordionHeaderContent OESZG_WEa07854e45a">
            <a href="#">
             <span class="OESZ OESZ_WEAccordionTitle OESZG_WEa07854e45a">Modifier l'information supplémentaire (cliquer pour ouvrir)</span>
            </a>
            <span class="OESZ OESZ_WEAccordionAltTitle OESZG_WEa07854e45a">
             <a href="#"></a>
            </span>
           </span>
           <span class="OESZ OESZ_WEAccordionHeaderRight OESZG_WEa07854e45a"></span>
          </div>
          <div class="OESZ OESZ_WEAccordionContent OESZG_WEa07854e45a">
           <div class="OECT OECT_49619388 OECTAbs">
            <div id="WE79f69665d1" class="BaseDiv RNone OEWECheckBoxV2 OESK_WECheckBox2_Default" style="z-index:2">
             <div class="OESZ OESZ_DivContent OESZG_WE79f69665d1">
              <input type="checkbox" class="OESZ OESZ_CheckBox OESZG_WE79f69665d1 OEDynTag0" name="oepDetailsSaved" value="oepDetailsSaved" checked="checked"  />
             </div>
            </div>
            <div id="WE313f4a6f8c" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:1">
             <div class="OESZ OESZ_DivContent OESZG_WE313f4a6f8c">
              <span class="OESZ OESZ_Text OESZG_WE313f4a6f8c ContentBox OEDynTag0">(garder cette case à cocher!)</span>
             </div>
            </div>
            <div id="WE0ccf02c8c7" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:3">
             <div class="OESZ OESZ_DivContent OESZG_WE0ccf02c8c7">
              <span class="OESZ OESZ_Text OESZG_WE0ccf02c8c7 ContentBox OEDynTag0">Nom réel</span>
             </div>
            </div>
            <div id="WEe26e125535" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:4">
             <div class="OESZ OESZ_DivContent OESZG_WEe26e125535">
              <input name="oepRealName" type="text" class="OESZ OESZ_TextBox OESZG_WEe26e125535 OEDynTag0" value="<?php echo $oei['WEe26e125535..OEDynTag0.value'];?>" />
             </div>
            </div>
            <div id="WEd761ac3055" class="BaseDiv RNone OEWECodeBlock OESK_WECodeBlock_Default" style="z-index:25">
             <div class="OESZ OESZ_DivContent OESZG_WEd761ac3055">
              <script> // Control the chosen date, ex. to avoid 31 April or 29 February 2001
              $(function(){
                
                var $inputDay = $('#WE0677d34b58 select');
                var $inputMonth = $('#WEadba2a2130 select');
                var $inputYear = $('#WEe0f74189bd select');
                if ($inputYear.length < 1 || $inputMonth.length < 1 || $inputDay.length < 1) return;
                
                $inputMonth.change(function(){ // to fix 31s for months where last date is 30, and February
                  
                  //alert([$inputDay.val(), $inputMonth.val(), $inputYear.val()]);
                  
                  var valYear = parseInt($inputYear.val());
                  if (!valYear) valYear = 2000; // if not yet specified
                  var valMonth = parseInt($inputMonth.val());
                  if (!valMonth) return; // month not yet specified
                  var valDay = parseInt($inputDay.val());
                  if (!valDay) return; // day not yet specified
                  
                  var testDate = new Date(valYear, valMonth-1, valDay);
              
                  //alert([testDate.getDate(), valDay, valMonth, valYear]);
                  
                  if (testDate.getDate() !== valDay) { // date does not exist
                    // reset Day value
                    $inputDay.val('');
                  }
                });
                
                $inputDay.change(function(){ $inputMonth.change(); });
                $inputYear.change(function(){ $inputMonth.change(); }); // to fix 29 February
              });
              </script>
             </div>
            </div>
            <div id="WE3aa1a0c2c0" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:22">
             <div class="OESZ OESZ_DivContent OESZG_WE3aa1a0c2c0">
              <span class="OESZ OESZ_Text OESZG_WE3aa1a0c2c0 ContentBox OEDynTag0">Genre</span>
             </div>
            </div>
            <div id="WEcdf918294d" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:24">
             <div class="OESZ OESZ_DivContent OESZG_WEcdf918294d">
              <span class="OESZ OESZ_Text OESZG_WEcdf918294d ContentBox OEDynTag0">Date de naissance</span>
             </div>
            </div>
            <div id="WE26131d2e04" class="BaseDiv RWidth OEWEListBoxV2 OESK_WEListBox2_Default" style="z-index:23">
             <div class="OESZ OESZ_DivContent OESZG_WE26131d2e04">
              <select name="oerGender" class="OESZ OESZ_ListBox OESZG_WE26131d2e04 OEDynTag0"><?php echo $oeIter['WE26131d2e04.OEDynTag0.0']; ?></select>
             </div>
            </div>
            <div id="WE0677d34b58" class="BaseDiv RWidth OEWEListBoxV2 OESK_WEListBox2_Default" style="z-index:26">
             <div class="OESZ OESZ_DivContent OESZG_WE0677d34b58">
              <select name="oerDay" class="OESZ OESZ_ListBox OESZG_WE0677d34b58 OEDynTag0"><?php echo $oeIter['WE0677d34b58.OEDynTag0.0']; ?></select>
             </div>
            </div>
            <div id="WEadba2a2130" class="BaseDiv RWidth OEWEListBoxV2 OESK_WEListBox2_Default" style="z-index:27">
             <div class="OESZ OESZ_DivContent OESZG_WEadba2a2130">
              <select name="oerMonth" class="OESZ OESZ_ListBox OESZG_WEadba2a2130 OEDynTag0"><?php echo $oeIter['WEadba2a2130.OEDynTag0.0']; ?></select>
             </div>
            </div>
            <div id="WEe0f74189bd" class="BaseDiv RWidth OEWEListBoxV2 OESK_WEListBox2_Default" style="z-index:28">
             <div class="OESZ OESZ_DivContent OESZG_WEe0f74189bd">
              <select name="oerYear" class="OESZ OESZ_ListBox OESZG_WEe0f74189bd OEDynTag0"><?php echo $oeIter['WEe0f74189bd.OEDynTag0.0']; ?></select>
             </div>
            </div>
            <div id="WEb485050f0c" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:5">
             <div class="OESZ OESZ_DivContent OESZG_WEb485050f0c">
              <span class="OESZ OESZ_Text OESZG_WEb485050f0c ContentBox OEDynTag0">Adresse postale</span>
             </div>
            </div>
            <div id="WE095a8f01f7" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:6">
             <div class="OESZ OESZ_DivContent OESZG_WE095a8f01f7">
              <input name="oepAddr1" type="text" class="OESZ OESZ_TextBox OESZG_WE095a8f01f7 OEDynTag0" value="<?php echo $oei['WE095a8f01f7..OEDynTag0.value'];?>" />
             </div>
            </div>
            <div id="WE47f7ca3617" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:7">
             <div class="OESZ OESZ_DivContent OESZG_WE47f7ca3617">
              <span class="OESZ OESZ_Text OESZG_WE47f7ca3617 ContentBox OEDynTag0">Adresse postale - ligne 2</span>
             </div>
            </div>
            <div id="WE23ec4b45f9" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:8">
             <div class="OESZ OESZ_DivContent OESZG_WE23ec4b45f9">
              <input name="oepAddr2" type="text" class="OESZ OESZ_TextBox OESZG_WE23ec4b45f9 OEDynTag0" value="<?php echo $oei['WE23ec4b45f9..OEDynTag0.value'];?>" />
             </div>
            </div>
            <div id="WEb1b2ae6dbb" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:9">
             <div class="OESZ OESZ_DivContent OESZG_WEb1b2ae6dbb">
              <span class="OESZ OESZ_Text OESZG_WEb1b2ae6dbb ContentBox OEDynTag0">Ville</span>
             </div>
            </div>
            <div id="WEd8c8cc4fac" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:10">
             <div class="OESZ OESZ_DivContent OESZG_WEd8c8cc4fac">
              <span class="OESZ OESZ_Text OESZG_WEd8c8cc4fac ContentBox OEDynTag0">Pays</span>
             </div>
            </div>
            <div id="WEd97929dcc4" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:11">
             <div class="OESZ OESZ_DivContent OESZG_WEd97929dcc4">
              <input name="oepCity" type="text" class="OESZ OESZ_TextBox OESZG_WEd97929dcc4 OEDynTag0" value="<?php echo $oei['WEd97929dcc4..OEDynTag0.value'];?>" />
             </div>
            </div>
            <div id="WEf2fcb06d2c" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:12">
             <div class="OESZ OESZ_DivContent OESZG_WEf2fcb06d2c">
              <input name="oepCountry" type="text" class="OESZ OESZ_TextBox OESZG_WEf2fcb06d2c OEDynTag0" value="<?php echo $oei['WEf2fcb06d2c..OEDynTag0.value'];?>" />
             </div>
            </div>
            <div id="WE511ad1ab3c" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:13">
             <div class="OESZ OESZ_DivContent OESZG_WE511ad1ab3c">
              <span class="OESZ OESZ_Text OESZG_WE511ad1ab3c ContentBox OEDynTag0">Code postal</span>
             </div>
            </div>
            <div id="WEdc75605202" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:14">
             <div class="OESZ OESZ_DivContent OESZG_WEdc75605202">
              <span class="OESZ OESZ_Text OESZG_WEdc75605202 ContentBox OEDynTag0">Téléphone</span>
             </div>
            </div>
            <div id="WE0e98683332" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:15">
             <div class="OESZ OESZ_DivContent OESZG_WE0e98683332">
              <input name="oepZIP" type="text" class="OESZ OESZ_TextBox OESZG_WE0e98683332 OEDynTag0" value="<?php echo $oei['WE0e98683332..OEDynTag0.value'];?>" />
             </div>
            </div>
            <div id="WEd607fa17ce" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:16">
             <div class="OESZ OESZ_DivContent OESZG_WEd607fa17ce">
              <input name="oepPhone" type="text" class="OESZ OESZ_TextBox OESZG_WEd607fa17ce OEDynTag0" value="<?php echo $oei['WEd607fa17ce..OEDynTag0.value'];?>" />
             </div>
            </div>
            <div id="WEc99e5c498c" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:17">
             <div class="OESZ OESZ_DivContent OESZG_WEc99e5c498c">
              <span class="OESZ OESZ_Text OESZG_WEc99e5c498c ContentBox OEDynTag0">(Info: modifier ce texte si nécessaire, ou effacer le champ si inutile)</span>
             </div>
            </div>
            <div id="WEc5e0aa4f18" class="BaseDiv RBoth OEWETextAreaV2 OESK_WETextArea2_Default" style="z-index:18">
             <div class="OESZ OESZ_DivContent OESZG_WEc5e0aa4f18">
              <textarea class="OESZ OESZ_TextArea OESZG_WEc5e0aa4f18 OEDynTag0" name="oepInfo" rows="3" cols="50"><?php echo $oei['WEc5e0aa4f18..OEDynTag0.html1'];?></textarea>
             </div>
            </div>
            <div id="WE65ca77c611" class="BaseDiv RWidth OEWEButton OESK_WEButton_Default" style="z-index:21">
             <div class="OESZ OESZ_DivContent OESZG_WE65ca77c611">
              <button class="OESZ OESZ_Button OESZG_WE65ca77c611 OEDynTag0" type="button" name="WE65ca77c611">Mettre à jour les infos supplémentaires</button>
             </div>
            </div>
            <div id="WE5af024eff4" class="BaseDiv RNone OEWECheckBoxV2 OESK_WECheckBox2_Default" style="z-index:19">
             <div class="OESZ OESZ_DivContent OESZG_WE5af024eff4">
              <input type="checkbox" class="OESZ OESZ_CheckBox OESZG_WE5af024eff4 OEDynTag0" name="oepSubscribe" value="oepSubscribe" <?php echo $oei['WE5af024eff4..OEDynTag0.checked'];?>="<?php echo $oei['WE5af024eff4..OEDynTag0.checked'];?>"  />
             </div>
            </div>
            <div id="WE4ec50fa5bc" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:20">
             <div class="OESZ OESZ_DivContent OESZG_WE4ec50fa5bc">
              <span class="OESZ OESZ_Text OESZG_WE4ec50fa5bc ContentBox OEDynTag0">S'abonner à la newsletter</span>
             </div>
            </div>
           </div>
          </div>
          <div id="c0906493" class="OESZ OESZ_WEAccordionHeader OESZG_WEa07854e45a">
           <span class="OESZ OESZ_WEAccordionHeaderLeft OESZG_WEa07854e45a"></span>
           <span class="OESZ OESZ_WEAccordionHeaderContent OESZG_WEa07854e45a">
            <a href="#">
             <span class="OESZ OESZ_WEAccordionTitle OESZG_WEa07854e45a">Actions sur le compte</span>
            </a>
            <span class="OESZ OESZ_WEAccordionAltTitle OESZG_WEa07854e45a">
             <a href="#"></a>
            </span>
           </span>
           <span class="OESZ OESZ_WEAccordionHeaderRight OESZG_WEa07854e45a"></span>
          </div>
          <div class="OESZ OESZ_WEAccordionContent OESZG_WEa07854e45a">
           <div class="OECT OECT_c0906493 OECTAbs">
            <div id="WE71a4621f54" class="BaseDiv RNone OEWECheckBoxV2 OESK_WECheckBox2_Default" style="z-index:5">
             <div class="OESZ OESZ_DivContent OESZG_WE71a4621f54">
              <input type="checkbox" class="OESZ OESZ_CheckBox OESZG_WE71a4621f54 OEDynTag0" name="WE71a4621f54" value="Valeur du champ" />
             </div>
            </div>
            <div id="WE1a2765406b" class="BaseDiv RNone OEWECodeBlock OESK_WECodeBlock_Default" style="z-index:2">
             <div class="OESZ OESZ_DivContent OESZG_WE1a2765406b">
              <script>
              $(function() {
                // On cicking Delete link, ask for confirmation; stop link processing if user cancels
                var $linkDel = $('#WE117fb2d1ba :button'); if (!$linkDel) return;
                var $msg = $('#oeDelAccountMsg');
                if (!$msg) return;
                $msg = $msg.html();
                
                $linkDel.click(function(){
                  return confirm($msg);
                });
                
                
                // Hide accordeon container section if no properties visible
                var $anyVisible =
                    ($('#WE117fb2d1ba button').css('display') !== 'none') ||
                    ($('#WE181af5db6a a').css('display') !== 'none') ||
                    ($('#WE44a8b1df40 span').css('display') !== 'none') ||
                    ($('#WE5e7a587a3b span').css('display') !== 'none');
                  
                if (!$anyVisible) { //alert('Hide');
                  var $container = $('#WEa07854e45a');
                  var $sections = $('#WEa07854e45a .OESZ_WEAccordionHeader');
                  if ($sections.length >= 3) {
                    var $sectionOperations = $($sections[2]);
                    var ht = $sectionOperations.height(); // section height
              
                    var $section1Content = $($('#WEa07854e45a .OESZ_WEAccordionContent')[0]);
                    
                    var htS1C = $section1Content.css('height'); // css height of the accordeon container
                    if (ht && htS1C && htS1C.indexOf('px') > 0) { // height is in pixels
                      // increase height of first section to reduce the gap
                      htS1C = (parseInt(htS1C) + ht) + 'px';
                      $section1Content.css('height', htS1C);
                    }      
              
                    $sectionOperations.remove();
                  }
                }
                
              });
              </script>
             </div>
            </div>
            <div id="WE63b56481de" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:1">
             <div class="OESZ OESZ_DivContent OESZG_WE63b56481de">
              <span class="OESZ OESZ_Text OESZG_WE63b56481de ContentBox OEDynTag0"><?php echo $oei['WE63b56481de..OEDynTag0.html1'];?></span>
             </div>
            </div>
            <div id="WE117fb2d1ba" class="BaseDiv RWidth OEWEButton OESK_WEButton_Default" style="z-index:3">
             <div class="OESZ OESZ_DivContent OESZG_WE117fb2d1ba">
              <button class="OESZ OESZ_Button OESZG_WE117fb2d1ba OEDynTag0" type="button" name="WE117fb2d1ba" style="<?php echo $oei['WE117fb2d1ba..OEDynTag0.style'];?>" data-oe-target-url="<?php echo $oei['WE117fb2d1ba..OEDynTag0.data-oe-target-url'];?>">Supprimer le compte (!)</button>
             </div>
            </div>
            <div id="WE181af5db6a" class="BaseDiv RNone OEWELink OESK_WELink_Default" style="z-index:4">
             <div class="OESZ OESZ_DivContent OESZG_WE181af5db6a">
              <a class="OESZ OESZ_Link OESZG_WE181af5db6a ContentBox OEDynTag0" data-cd="PageLink" href="<?php echo $oei['WE181af5db6a..OEDynTag0.href'];?>" style="<?php echo $oei['WE181af5db6a..OEDynTag0.style'];?>">Valider le compte et envoyer une notification à l'utilisateur</a>
             </div>
            </div>
            <div id="WE44a8b1df40" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:6">
             <div class="OESZ OESZ_DivContent OESZG_WE44a8b1df40">
              <span class="OESZ OESZ_Text OESZG_WE44a8b1df40 ContentBox OEDynTag0" style="<?php echo $oei['WE44a8b1df40..OEDynTag0.style'];?>"><?php echo $oei['WE44a8b1df40..OEDynTag0.html1'];?></span>
             </div>
            </div>
            <div id="WE5e7a587a3b" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:7">
             <div class="OESZ OESZ_DivContent OESZG_WE5e7a587a3b">
              <span class="OESZ OESZ_Text OESZG_WE5e7a587a3b ContentBox OEDynTag0" style="<?php echo $oei['WE5e7a587a3b..OEDynTag0.style'];?>"><?php echo $oei['WE5e7a587a3b..OEDynTag0.html1'];?></span>
             </div>
            </div>
           </div>
          </div>
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