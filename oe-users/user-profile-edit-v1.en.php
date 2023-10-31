<?php
	require_once "user-profile-edit-v1(var).php";
	include_once "../WEFiles/Server/DB/OEDB.php";
?><!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en">
 <head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <meta name="generator" content="openElement (1.57.9)" />
  <link id="openElement" rel="stylesheet" type="text/css" href="../WEFiles/Css/v02/openElement.css?v=50491126800" />
  <link id="OEBase" rel="stylesheet" type="text/css" href="user-profile-edit-v1.css?v=50491126800" />
  <link rel="stylesheet" type="text/css" href="../WEFiles/Css/WEAccordion-v21.css?v=50491126800" />
  <link rel="stylesheet" type="text/css" href="../WEFiles/Css/opentip.css?v=50491126800" />
  <!--[if lte IE 7]>
  <link rel="stylesheet" type="text/css" href="../WEFiles/Css/ie7.css?v=50491126800" />
  <![endif]-->
  <script type="text/javascript">
   var WEInfoPage={PHPVersion:"phpOK",OEVersion:"1-57-9",PagePath:"oe-users/user-profile-edit-v1",Culture:"EN",LanguageCode:"EN",RelativePath:"../",RenderMode:"Export",PageAssociatePath:"oe-users/user-profile-edit-v1",EditorTexts:null}
  </script>
  <script type="text/javascript" src="../WEFiles/Client/jQuery/1.10.2.js?v=50491126800"></script>
  <script type="text/javascript" src="../WEFiles/Client/jQuery/migrate.js?v=50491126800"></script>
  <script type="text/javascript" src="../WEFiles/Client/Common/oe.min.js?v=50491126800"></script>
  <script type="text/javascript" src="user-profile-edit-v1(var).js?v=50491126800"></script>
  <script type="text/javascript" src="../WEFiles/Client/jQuery/Plugins/jquery.ui.core.js?v=50491126800"></script>
  <script type="text/javascript" src="../WEFiles/Client/jQuery/Plugins/jquery.ui.effects.js?v=50491126800"></script>
  <script type="text/javascript" src="../WEFiles/Client/jQuery/Plugins/jquery.ui.accordion-v21.js?v=50491126800"></script>
  <script type="text/javascript" src="../WEFiles/Client/WEAccordion-v21.js?v=50491126800"></script>
  <script type="text/javascript" src="../WEFiles/Client/jQuery/Plugins/jquery.form.js?v=50491126800"></script>
  <script type="text/javascript" src="../WEFiles/Client/opentip-jquery.min.js?v=50491126800"></script>
  <script type="text/javascript" src="../WEFiles/Client/WESendForm-v210.js?v=50491126800"></script>
  <script type="text/javascript">
   var WEEdValidators={WE0ca521506a:[{MsgError:"Please enter your error message.",Expression:"(^$)|(?:[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*|\"(?:[\\x01-\\x08\\x0b\\x0c\\x0e-\\x1f\\x21\\x23-\\x5b\\x5d-\\x7f]|\\\\[\\x01-\\x09\\x0b\\x0c\\x0e-\\x7f])*\")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?|[a-z0-9-]*[a-z0-9]:(?:[\\x01-\\x08\\x0b\\x0c\\x0e-\\x1f\\x21-\\x5a\\x53-\\x7f]|\\\\[\\x01-\\x09\\x0b\\x0c\\x0e-\\x7f])+)\\])"}],WE62ba21044d:[{MsgError:"Veuillez inscrire votre message d'erreur.",Expression:".+"}]}
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
     <div id="WE117aa14ffd" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:1">
      <div class="OESZ OESZ_DivContent OESZG_WE117aa14ffd">
       <div class="OECT OECT_Content OECTAbs OEDynTag0">
        <div id="WE105083d6d2" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:1">
         <div class="OESZ OESZ_DivContent OESZG_WE105083d6d2">
          <span class="OESZ OESZ_Text OESZG_WE105083d6d2 ContentBox OEDynTag0"><?php echo $oei['WE105083d6d2..OEDynTag0.html1'];?></span>
         </div>
        </div>
        <div id="WEf8928c2f49" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:2">
         <div class="OESZ OESZ_DivContent OESZG_WEf8928c2f49">
          <span class="OESZ OESZ_Text OESZG_WEf8928c2f49 ContentBox OEDynTag0"><?php echo $oei['WEf8928c2f49..OEDynTag0.html1'];?></span>
         </div>
        </div>
        <div id="WE64d8d2bbce" class="BaseDiv RBoth OEWEAccordion OESK_WEAccordion_Default" style="z-index:3">
         <div class="OESZ OESZ_DivContent OESZG_WE64d8d2bbce">
          <div id="9b5a6a3e" class="OESZ OESZ_WEAccordionHeader OESZG_WE64d8d2bbce">
           <span class="OESZ OESZ_WEAccordionHeaderLeft OESZG_WE64d8d2bbce"></span>
           <span class="OESZ OESZ_WEAccordionHeaderContent OESZG_WE64d8d2bbce">
            <a href="#">
             <span class="OESZ OESZ_WEAccordionTitle OESZG_WE64d8d2bbce">Modify password and/or email</span>
            </a>
            <span class="OESZ OESZ_WEAccordionAltTitle OESZG_WE64d8d2bbce">
             <a href="#"></a>
            </span>
           </span>
           <span class="OESZ OESZ_WEAccordionHeaderRight OESZG_WE64d8d2bbce"></span>
          </div>
          <div class="OESZ OESZ_WEAccordionContent OESZG_WE64d8d2bbce">
           <div class="OECT OECT_9b5a6a3e OECTAbs">
            <div id="WE9fa9601094" class="BaseDiv RWidth OEWELabel OESK_WELabel_Default" style="z-index:1">
             <div class="OESZ OESZ_DivContent OESZG_WE9fa9601094">
              <span class="OESZ OESZ_Text OESZG_WE9fa9601094 ContentBox OEDynTag0"><?php echo $oei['WE9fa9601094..OEDynTag0.html1'];?></span>
             </div>
            </div>
            <div id="WEa6009d5052" class="BaseDiv RNone OEWECodeBlock OESK_WECodeBlock_Default" style="z-index:13">
             <div class="OESZ OESZ_DivContent OESZG_WEa6009d5052">
              <script>
              // Animate color transition for report
              
              //
              
              $(function(){
                
                var $reportTag = $('#WE9fa9601094');
                $reportTag.fadeTo('slow', 0.25).fadeTo('slow', 1.0);
                
              });
              
              
              </script>
             </div>
            </div>
            <div id="WEc3f20f3d88" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:2">
             <div class="OESZ OESZ_DivContent OESZG_WEc3f20f3d88">
              <span class="OESZ OESZ_Text OESZG_WEc3f20f3d88 ContentBox OEDynTag0">New password:</span>
             </div>
            </div>
            <div id="WEc3b36ca2f4" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:12">
             <div class="OESZ OESZ_DivContent OESZG_WEc3b36ca2f4">
              <input name="oepNewPW" type="password" class="OESZ OESZ_TextBox OESZG_WEc3b36ca2f4 OEDynTag0" value="<?php echo $oei['WEc3b36ca2f4..OEDynTag0.value'];?>" />
             </div>
            </div>
            <div id="WE3df0e996ce" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:3">
             <div class="OESZ OESZ_DivContent OESZG_WE3df0e996ce">
              <span class="OESZ OESZ_Text OESZG_WE3df0e996ce ContentBox OEDynTag0" style="<?php echo $oei['WE3df0e996ce..OEDynTag0.style'];?>">Confirm new password:</span>
             </div>
            </div>
            <div id="WE1fe06482f0" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:4">
             <div class="OESZ OESZ_DivContent OESZG_WE1fe06482f0">
              <input name="oepNewPW2" type="password" class="OESZ OESZ_TextBox OESZG_WE1fe06482f0 OEDynTag0" value="<?php echo $oei['WE1fe06482f0..OEDynTag0.value'];?>" />
             </div>
            </div>
            <div id="WE59c746b368" class="BaseDiv RWidth OEWEHr OESK_WEHrLign_Default" style="z-index:10">
             <div class="OESZ OESZ_DivContent OESZG_WE59c746b368">
              <div class="OESZ OESZ_Deco1 OESZG_WE59c746b368" style="position:absolute"></div>
              <div class="OESZ OESZ_Deco2 OESZG_WE59c746b368" style="position:absolute"></div>
              <div class="OESZ OESZ_Deco3 OESZG_WE59c746b368" style="position:absolute"></div>
             </div>
            </div>
            <div id="WE7fa41daf6b" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:5">
             <div class="OESZ OESZ_DivContent OESZG_WE7fa41daf6b">
              <span class="OESZ OESZ_Text OESZG_WE7fa41daf6b ContentBox">Modify email:</span>
             </div>
            </div>
            <div id="WE0ca521506a" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:6">
             <div class="OESZ OESZ_DivContent OESZG_WE0ca521506a">
              <input name="oepEmail" type="text" class="OESZ OESZ_TextBox OESZG_WE0ca521506a OEDynTag0" value="<?php echo $oei['WE0ca521506a..OEDynTag0.value'];?>" />
             </div>
            </div>
            <div id="WE8944b8d7a0" class="BaseDiv RWidth OEWEHr OESK_WEHrLign_Default" style="z-index:11">
             <div class="OESZ OESZ_DivContent OESZG_WE8944b8d7a0">
              <div class="OESZ OESZ_Deco1 OESZG_WE8944b8d7a0" style="position:absolute"></div>
              <div class="OESZ OESZ_Deco2 OESZG_WE8944b8d7a0" style="position:absolute"></div>
              <div class="OESZ OESZ_Deco3 OESZG_WE8944b8d7a0" style="position:absolute"></div>
             </div>
            </div>
            <div id="WEe5c51ef337" class="BaseDiv RWidth OEWELabel OESK_WELabel_Default" style="z-index:7">
             <div class="OESZ OESZ_DivContent OESZG_WEe5c51ef337">
              <span class="OESZ OESZ_Text OESZG_WEe5c51ef337 ContentBox OEDynTag0">For security reasons, enter the current password (obligatory):</span>
             </div>
            </div>
            <div id="WE62ba21044d" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:8">
             <div class="OESZ OESZ_DivContent OESZG_WE62ba21044d">
              <input name="oepPW" type="password" class="OESZ OESZ_TextBox OESZG_WE62ba21044d OEDynTag0" />
             </div>
            </div>
            <div id="WE0525630b62" class="BaseDiv RWidth OEWEButton OESK_WEButton_Default OECenterAH" style="z-index:9">
             <div class="OESZ OESZ_DivContent OESZG_WE0525630b62">
              <button class="OESZ OESZ_Button OESZG_WE0525630b62 OEDynTag0" type="button" name="WE0525630b62">Update password and/or email</button>
             </div>
            </div>
           </div>
          </div>
          <div id="49619388" class="OESZ OESZ_WEAccordionHeader OESZG_WE64d8d2bbce">
           <span class="OESZ OESZ_WEAccordionHeaderLeft OESZG_WE64d8d2bbce"></span>
           <span class="OESZ OESZ_WEAccordionHeaderContent OESZG_WE64d8d2bbce">
            <a href="#">
             <span class="OESZ OESZ_WEAccordionTitle OESZG_WE64d8d2bbce">Modify other information (click to open)</span>
            </a>
            <span class="OESZ OESZ_WEAccordionAltTitle OESZG_WE64d8d2bbce">
             <a href="#"></a>
            </span>
           </span>
           <span class="OESZ OESZ_WEAccordionHeaderRight OESZG_WE64d8d2bbce"></span>
          </div>
          <div class="OESZ OESZ_WEAccordionContent OESZG_WE64d8d2bbce">
           <div class="OECT OECT_49619388 OECTAbs">
            <div id="WEda2123cf21" class="BaseDiv RNone OEWECheckBoxV2 OESK_WECheckBox2_Default" style="z-index:2">
             <div class="OESZ OESZ_DivContent OESZG_WEda2123cf21">
              <input type="checkbox" class="OESZ OESZ_CheckBox OESZG_WEda2123cf21 OEDynTag0" name="oepDetailsSaved" value="oepDetailsSaved" checked="checked"  />
             </div>
            </div>
            <div id="WE8e9537da4d" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:1">
             <div class="OESZ OESZ_DivContent OESZG_WE8e9537da4d">
              <span class="OESZ OESZ_Text OESZG_WE8e9537da4d ContentBox OEDynTag0">(keep this checkbox!)</span>
             </div>
            </div>
            <div id="WE19d9748e10" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:3">
             <div class="OESZ OESZ_DivContent OESZG_WE19d9748e10">
              <span class="OESZ OESZ_Text OESZG_WE19d9748e10 ContentBox OEDynTag0">Real name</span>
             </div>
            </div>
            <div id="WE6d4ce86c61" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:4">
             <div class="OESZ OESZ_DivContent OESZG_WE6d4ce86c61">
              <input name="oepRealName" type="text" class="OESZ OESZ_TextBox OESZG_WE6d4ce86c61 OEDynTag0" value="<?php echo $oei['WE6d4ce86c61..OEDynTag0.value'];?>" />
             </div>
            </div>
            <div id="WE33a53948c9" class="BaseDiv RNone OEWECodeBlock OESK_WECodeBlock_Default" style="z-index:25">
             <div class="OESZ OESZ_DivContent OESZG_WE33a53948c9">
              <script> // Control the chosen date, ex. to avoid 31 April or 29 February 2001
              $(function(){
                
                var $inputDay = $('#WEbd9d2d9045 select');
                var $inputMonth = $('#WE9efc42ddf0 select');
                var $inputYear = $('#WE4f69b8d3e7 select');
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
            <div id="WEddf71b211d" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:22">
             <div class="OESZ OESZ_DivContent OESZG_WEddf71b211d">
              <span class="OESZ OESZ_Text OESZG_WEddf71b211d ContentBox OEDynTag0">Gender</span>
             </div>
            </div>
            <div id="WE2d5ee2d962" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:24">
             <div class="OESZ OESZ_DivContent OESZG_WE2d5ee2d962">
              <span class="OESZ OESZ_Text OESZG_WE2d5ee2d962 ContentBox OEDynTag0">Date of birth</span>
             </div>
            </div>
            <div id="WEee9ef0e9eb" class="BaseDiv RWidth OEWEListBoxV2 OESK_WEListBox2_Default" style="z-index:23">
             <div class="OESZ OESZ_DivContent OESZG_WEee9ef0e9eb">
              <select name="oerGender" class="OESZ OESZ_ListBox OESZG_WEee9ef0e9eb OEDynTag0"><?php echo $oeIter['WEee9ef0e9eb.OEDynTag0.0']; ?></select>
             </div>
            </div>
            <div id="WEbd9d2d9045" class="BaseDiv RWidth OEWEListBoxV2 OESK_WEListBox2_Default" style="z-index:26">
             <div class="OESZ OESZ_DivContent OESZG_WEbd9d2d9045">
              <select name="oerDay" class="OESZ OESZ_ListBox OESZG_WEbd9d2d9045 OEDynTag0"><?php echo $oeIter['WEbd9d2d9045.OEDynTag0.0']; ?></select>
             </div>
            </div>
            <div id="WE9efc42ddf0" class="BaseDiv RWidth OEWEListBoxV2 OESK_WEListBox2_Default" style="z-index:27">
             <div class="OESZ OESZ_DivContent OESZG_WE9efc42ddf0">
              <select name="oerMonth" class="OESZ OESZ_ListBox OESZG_WE9efc42ddf0 OEDynTag0"><?php echo $oeIter['WE9efc42ddf0.OEDynTag0.0']; ?></select>
             </div>
            </div>
            <div id="WE4f69b8d3e7" class="BaseDiv RWidth OEWEListBoxV2 OESK_WEListBox2_Default" style="z-index:28">
             <div class="OESZ OESZ_DivContent OESZG_WE4f69b8d3e7">
              <select name="oerYear" class="OESZ OESZ_ListBox OESZG_WE4f69b8d3e7 OEDynTag0"><?php echo $oeIter['WE4f69b8d3e7.OEDynTag0.0']; ?></select>
             </div>
            </div>
            <div id="WE2b2941298d" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:5">
             <div class="OESZ OESZ_DivContent OESZG_WE2b2941298d">
              <span class="OESZ OESZ_Text OESZG_WE2b2941298d ContentBox OEDynTag0">Mailing Address</span>
             </div>
            </div>
            <div id="WE7e8d1251ee" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:6">
             <div class="OESZ OESZ_DivContent OESZG_WE7e8d1251ee">
              <input name="oepAddr1" type="text" class="OESZ OESZ_TextBox OESZG_WE7e8d1251ee OEDynTag0" value="<?php echo $oei['WE7e8d1251ee..OEDynTag0.value'];?>" />
             </div>
            </div>
            <div id="WEd7c4eceb5f" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:7">
             <div class="OESZ OESZ_DivContent OESZG_WEd7c4eceb5f">
              <span class="OESZ OESZ_Text OESZG_WEd7c4eceb5f ContentBox OEDynTag0">Mailing Address - Line 2</span>
             </div>
            </div>
            <div id="WE77a2f2d403" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:8">
             <div class="OESZ OESZ_DivContent OESZG_WE77a2f2d403">
              <input name="oepAddr2" type="text" class="OESZ OESZ_TextBox OESZG_WE77a2f2d403 OEDynTag0" value="<?php echo $oei['WE77a2f2d403..OEDynTag0.value'];?>" />
             </div>
            </div>
            <div id="WE6e8a510391" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:9">
             <div class="OESZ OESZ_DivContent OESZG_WE6e8a510391">
              <span class="OESZ OESZ_Text OESZG_WE6e8a510391 ContentBox OEDynTag0">Town/City</span>
             </div>
            </div>
            <div id="WE142dc9a104" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:10">
             <div class="OESZ OESZ_DivContent OESZG_WE142dc9a104">
              <span class="OESZ OESZ_Text OESZG_WE142dc9a104 ContentBox OEDynTag0">Country</span>
             </div>
            </div>
            <div id="WE747bd018a9" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:11">
             <div class="OESZ OESZ_DivContent OESZG_WE747bd018a9">
              <input name="oepCity" type="text" class="OESZ OESZ_TextBox OESZG_WE747bd018a9 OEDynTag0" value="<?php echo $oei['WE747bd018a9..OEDynTag0.value'];?>" />
             </div>
            </div>
            <div id="WE52532530fe" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:12">
             <div class="OESZ OESZ_DivContent OESZG_WE52532530fe">
              <input name="oepCountry" type="text" class="OESZ OESZ_TextBox OESZG_WE52532530fe OEDynTag0" value="<?php echo $oei['WE52532530fe..OEDynTag0.value'];?>" />
             </div>
            </div>
            <div id="WE39f3479ba3" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:13">
             <div class="OESZ OESZ_DivContent OESZG_WE39f3479ba3">
              <span class="OESZ OESZ_Text OESZG_WE39f3479ba3 ContentBox OEDynTag0">Postal Code</span>
             </div>
            </div>
            <div id="WE613cdee39c" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:14">
             <div class="OESZ OESZ_DivContent OESZG_WE613cdee39c">
              <span class="OESZ OESZ_Text OESZG_WE613cdee39c ContentBox OEDynTag0">Phone</span>
             </div>
            </div>
            <div id="WE0cfc035c30" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:15">
             <div class="OESZ OESZ_DivContent OESZG_WE0cfc035c30">
              <input name="oepZIP" type="text" class="OESZ OESZ_TextBox OESZG_WE0cfc035c30 OEDynTag0" value="<?php echo $oei['WE0cfc035c30..OEDynTag0.value'];?>" />
             </div>
            </div>
            <div id="WE16667d11ba" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:16">
             <div class="OESZ OESZ_DivContent OESZG_WE16667d11ba">
              <input name="oepPhone" type="text" class="OESZ OESZ_TextBox OESZG_WE16667d11ba OEDynTag0" value="<?php echo $oei['WE16667d11ba..OEDynTag0.value'];?>" />
             </div>
            </div>
            <div id="WE7cda2489e0" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:17">
             <div class="OESZ OESZ_DivContent OESZG_WE7cda2489e0">
              <span class="OESZ OESZ_Text OESZG_WE7cda2489e0 ContentBox OEDynTag0">(Note: modify or delete this text according to website needs)</span>
             </div>
            </div>
            <div id="WE48050fbfe2" class="BaseDiv RBoth OEWETextAreaV2 OESK_WETextArea2_Default" style="z-index:18">
             <div class="OESZ OESZ_DivContent OESZG_WE48050fbfe2">
              <textarea class="OESZ OESZ_TextArea OESZG_WE48050fbfe2 OEDynTag0" name="oepInfo" rows="3" cols="50"><?php echo $oei['WE48050fbfe2..OEDynTag0.html1'];?></textarea>
             </div>
            </div>
            <div id="WEb1d41d7400" class="BaseDiv RWidth OEWEButton OESK_WEButton_Default" style="z-index:21">
             <div class="OESZ OESZ_DivContent OESZG_WEb1d41d7400">
              <button class="OESZ OESZ_Button OESZG_WEb1d41d7400 OEDynTag0" type="button" name="WEb1d41d7400">Update additional information</button>
             </div>
            </div>
            <div id="WE848e7f71f0" class="BaseDiv RNone OEWECheckBoxV2 OESK_WECheckBox2_Default" style="z-index:19">
             <div class="OESZ OESZ_DivContent OESZG_WE848e7f71f0">
              <input type="checkbox" class="OESZ OESZ_CheckBox OESZG_WE848e7f71f0 OEDynTag0" name="oepSubscribe" value="oepSubscribe" <?php echo $oei['WE848e7f71f0..OEDynTag0.checked'];?>="<?php echo $oei['WE848e7f71f0..OEDynTag0.checked'];?>"  />
             </div>
            </div>
            <div id="WE55b8f9a5c5" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:20">
             <div class="OESZ OESZ_DivContent OESZG_WE55b8f9a5c5">
              <span class="OESZ OESZ_Text OESZG_WE55b8f9a5c5 ContentBox OEDynTag0">Subscribe to Newsletter</span>
             </div>
            </div>
           </div>
          </div>
          <div id="c0906493" class="OESZ OESZ_WEAccordionHeader OESZG_WE64d8d2bbce">
           <span class="OESZ OESZ_WEAccordionHeaderLeft OESZG_WE64d8d2bbce"></span>
           <span class="OESZ OESZ_WEAccordionHeaderContent OESZG_WE64d8d2bbce">
            <a href="#">
             <span class="OESZ OESZ_WEAccordionTitle OESZG_WE64d8d2bbce">Account operations</span>
            </a>
            <span class="OESZ OESZ_WEAccordionAltTitle OESZG_WE64d8d2bbce">
             <a href="#"></a>
            </span>
           </span>
           <span class="OESZ OESZ_WEAccordionHeaderRight OESZG_WE64d8d2bbce"></span>
          </div>
          <div class="OESZ OESZ_WEAccordionContent OESZG_WE64d8d2bbce">
           <div class="OECT OECT_c0906493 OECTAbs">
            <div id="WE07b8d260cf" class="BaseDiv RNone OEWECheckBoxV2 OESK_WECheckBox2_Default" style="z-index:5">
             <div class="OESZ OESZ_DivContent OESZG_WE07b8d260cf">
              <input type="checkbox" class="OESZ OESZ_CheckBox OESZG_WE07b8d260cf OEDynTag0" name="WE07b8d260cf" value="Valeur du champ" />
             </div>
            </div>
            <div id="WEbe53015018" class="BaseDiv RNone OEWECodeBlock OESK_WECodeBlock_Default" style="z-index:2">
             <div class="OESZ OESZ_DivContent OESZG_WEbe53015018">
              <script>
              $(function() {
                // On cicking Delete link, ask for confirmation; stop link processing if user cancels
                var $linkDel = $('#WE4c3c9c7d30 :button'); if (!$linkDel) return;
                var $msg = $('#oeDelAccountMsg');
                if (!$msg) return;
                $msg = $msg.html();
                
                $linkDel.click(function(){
                  return confirm($msg);
                });
                
                
                // Hide accordeon container section if no properties visible
                var $anyVisible =
                    ($('#WE4c3c9c7d30 button').css('display') !== 'none') ||
                    ($('#WEeb37512363 a').css('display') !== 'none') ||
                    ($('#WEf986308916 span').css('display') !== 'none') ||
                    ($('#WE2ce63a6052 span').css('display') !== 'none');
                  
                if (!$anyVisible) { //alert('Hide');
                  var $container = $('#WE64d8d2bbce');
                  var $sections = $('#WE64d8d2bbce .OESZ_WEAccordionHeader');
                  if ($sections.length >= 3) {
                    var $sectionOperations = $($sections[2]);
                    var ht = $sectionOperations.height(); // section height
              
                    var $section1Content = $($('#WE64d8d2bbce .OESZ_WEAccordionContent')[0]);
                    
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
            <div id="WEc03f59fa20" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:1">
             <div class="OESZ OESZ_DivContent OESZG_WEc03f59fa20">
              <span class="OESZ OESZ_Text OESZG_WEc03f59fa20 ContentBox OEDynTag0"><?php echo $oei['WEc03f59fa20..OEDynTag0.html1'];?></span>
             </div>
            </div>
            <div id="WE4c3c9c7d30" class="BaseDiv RWidth OEWEButton OESK_WEButton_Default" style="z-index:3">
             <div class="OESZ OESZ_DivContent OESZG_WE4c3c9c7d30">
              <button class="OESZ OESZ_Button OESZG_WE4c3c9c7d30 OEDynTag0" type="button" name="WE4c3c9c7d30" style="<?php echo $oei['WE4c3c9c7d30..OEDynTag0.style'];?>" data-oe-target-url="<?php echo $oei['WE4c3c9c7d30..OEDynTag0.data-oe-target-url'];?>">Delete account (!)</button>
             </div>
            </div>
            <div id="WEeb37512363" class="BaseDiv RNone OEWELink OESK_WELink_Default" style="z-index:4">
             <div class="OESZ OESZ_DivContent OESZG_WEeb37512363">
              <a class="OESZ OESZ_Link OESZG_WEeb37512363 ContentBox OEDynTag0" data-cd="PageLink" href="<?php echo $oei['WEeb37512363..OEDynTag0.href'];?>" style="<?php echo $oei['WEeb37512363..OEDynTag0.style'];?>">Confirm (validate) account and send notification to user</a>
             </div>
            </div>
            <div id="WEf986308916" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:6">
             <div class="OESZ OESZ_DivContent OESZG_WEf986308916">
              <span class="OESZ OESZ_Text OESZG_WEf986308916 ContentBox OEDynTag0" style="<?php echo $oei['WEf986308916..OEDynTag0.style'];?>"><?php echo $oei['WEf986308916..OEDynTag0.html1'];?></span>
             </div>
            </div>
            <div id="WE2ce63a6052" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:7">
             <div class="OESZ OESZ_DivContent OESZG_WE2ce63a6052">
              <span class="OESZ OESZ_Text OESZG_WE2ce63a6052 ContentBox OEDynTag0" style="<?php echo $oei['WE2ce63a6052..OEDynTag0.style'];?>"><?php echo $oei['WE2ce63a6052..OEDynTag0.html1'];?></span>
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