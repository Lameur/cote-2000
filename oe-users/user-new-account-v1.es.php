<?php
	require_once "user-new-account-v1(var).php";
	include_once "../WEFiles/Server/DB/OEDB.php";
?><!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="es">
 <head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <meta name="generator" content="openElement (1.57.9)" />
  <link id="openElement" rel="stylesheet" type="text/css" href="../WEFiles/Css/v02/openElement.css?v=63629943612" />
  <link id="OEBase" rel="stylesheet" type="text/css" href="user-new-account-v1.css?v=50491126800" />
  <link rel="stylesheet" type="text/css" href="../WEFiles/Css/opentip.css?v=63614056866" />
  <!--[if lte IE 7]>
  <link rel="stylesheet" type="text/css" href="../WEFiles/Css/ie7.css?v=63614056866" />
  <![endif]-->
  <script type="text/javascript">
   var WEInfoPage={PHPVersion:"phpOK",OEVersion:"1-57-9",PagePath:"oe-users/user-new-account-v1",Culture:"ES",LanguageCode:"ES",RelativePath:"../",RenderMode:"Export",PageAssociatePath:"oe-users/user-new-account-v1",EditorTexts:null}
  </script>
  <script type="text/javascript" src="../WEFiles/Client/jQuery/1.10.2.js?v=63614056866"></script>
  <script type="text/javascript" src="../WEFiles/Client/jQuery/migrate.js?v=63614056866"></script>
  <script type="text/javascript" src="../WEFiles/Client/Common/oe.min.js?v=63629943594"></script>
  <script type="text/javascript" src="user-new-account-v1(var).js?v=50491126800"></script>
  <script type="text/javascript" src="../WEFiles/Client/jQuery/Plugins/jquery.form.js?v=63629943610"></script>
  <script type="text/javascript" src="../WEFiles/Client/opentip-jquery.min.js?v=63629943610"></script>
  <script type="text/javascript" src="../WEFiles/Client/WESendForm-v210.js?v=63629943602"></script>
  <script type="text/javascript" src="../WEFiles/Client/WECaptcha-v210.js?v=63629943597"></script>
  <script type="text/javascript">
   var WEEdValidators={WE996f9e1f19:[{MsgError:"Veuillez inscrire votre message d'erreur.",Expression:"(?:[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*|\"(?:[\\x01-\\x08\\x0b\\x0c\\x0e-\\x1f\\x21\\x23-\\x5b\\x5d-\\x7f]|\\\\[\\x01-\\x09\\x0b\\x0c\\x0e-\\x7f])*\")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?|[a-z0-9-]*[a-z0-9]:(?:[\\x01-\\x08\\x0b\\x0c\\x0e-\\x1f\\x21-\\x5a\\x53-\\x7f]|\\\\[\\x01-\\x09\\x0b\\x0c\\x0e-\\x7f])+)\\])"}],WEd8d0760939:[{MsgError:"Veuillez inscrire votre message d'erreur.",Expression:".+"}],WE49335aa208:[{MsgError:"Veuillez inscrire votre message d'erreur.",Expression:".+"}],WE4f52929d17:[{MsgError:"Please configure your error message.",Expression:".+"}]}
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
     <div id="WE90e8bc6081" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:1">
      <div class="OESZ OESZ_DivContent OESZG_WE90e8bc6081">
       <div class="OECT OECT_Content OECTAbs OEDynTag0">
        <div id="WE84bcdb2186" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:1">
         <div class="OESZ OESZ_DivContent OESZG_WE84bcdb2186">
          <span class="OESZ OESZ_Text OESZG_WE84bcdb2186 ContentBox OEDynTag0"><?php echo $oei['WE84bcdb2186..OEDynTag0.html1'];?></span>
         </div>
        </div>
        <div id="WEf28cdb5f24" class="BaseDiv RBoth OEWEText OESK_WEText_Default" style="z-index:51">
         <div class="OESZ OESZ_DivContent OESZG_WEf28cdb5f24">
          <span class="ContentBox"> <b><span style="line-height:115%;font-size:13px;">INFO POUR LES CREATEURS DU SITE - supprimer ce cadre après la lecture</span></b> <br /><br />&nbsp;- Beaucoup des champs si-dessous sont facultatifs, sauf ceux marqués *; vous pouvez supprimer&nbsp;<b>les champs facultatifs inutiles&nbsp;</b>(ou, si vous voulez les garder pour une utilisation ultérieure,&nbsp;<b>rendez-le </b> <b>invisible</b> en utilisant la propriété Visible). <br />&nbsp;- Le champ Email et les deux champs Mot de passe sont obligatoires<br />&nbsp;-&nbsp; Case à cocher "Conditions d'utilisation" est obligatoire; si vous ne voulez pas que les utilisateurs la cochent, &nbsp;cochez-la par défault puis faites-la invisible. <br />&nbsp;- Captcha (ainsi que ses "(!)") peut être supprimé, mais il l'est déconseillé pour des raisons de sécurité. <br />&nbsp;- Pour rendre un champ (ex&nbsp;: Nom d'utilisateur ou Genre) obligatoire, ajoutez une règle de Validation (petit bouton sous l'élément lorsqu'il est sélectionné). <br />&nbsp;- "(!)" sont des marqueurs d'erreur, visible quand la valeur d'un champ obligatoire est invalide.</span>
         </div>
        </div>
        <div id="WEf4622513fb" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:2">
         <div class="OESZ OESZ_DivContent OESZG_WEf4622513fb">
          <span class="OESZ OESZ_Text OESZG_WEf4622513fb ContentBox OEDynTag0">Adresse mail*</span>
         </div>
        </div>
        <div id="WE996f9e1f19" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:3">
         <div class="OESZ OESZ_DivContent OESZG_WE996f9e1f19">
          <input name="oerEmail" type="text" class="OESZ OESZ_TextBox OESZG_WE996f9e1f19 OEDynTag0" style="<?php echo $oei['WE996f9e1f19..OEDynTag0.style'];?>" value="<?php echo $oei['WE996f9e1f19..OEDynTag0.value'];?>" />
         </div>
        </div>
        <div id="WE7d919c4516" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:4">
         <div class="OESZ OESZ_DivContent OESZG_WE7d919c4516">
          <span class="OESZ OESZ_Text OESZG_WE7d919c4516 ContentBox OEDynTag0" style="<?php echo $oei['WE7d919c4516..OEDynTag0.style'];?>">(!)</span>
         </div>
        </div>
        <div id="WE811bc2e984" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:5">
         <div class="OESZ OESZ_DivContent OESZG_WE811bc2e984">
          <span class="OESZ OESZ_Text OESZG_WE811bc2e984 ContentBox OEDynTag0">Nom du compte - laisser vide pour utiliser uniquement l'adresse mail</span>
         </div>
        </div>
        <div id="WEc6a9c9235b" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:6">
         <div class="OESZ OESZ_DivContent OESZG_WEc6a9c9235b">
          <input name="oerName" type="text" class="OESZ OESZ_TextBox OESZG_WEc6a9c9235b OEDynTag0" style="<?php echo $oei['WEc6a9c9235b..OEDynTag0.style'];?>" value="<?php echo $oei['WEc6a9c9235b..OEDynTag0.value'];?>" />
         </div>
        </div>
        <div id="WE519f199f0f" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:7">
         <div class="OESZ OESZ_DivContent OESZG_WE519f199f0f">
          <span class="OESZ OESZ_Text OESZG_WE519f199f0f ContentBox OEDynTag0" style="<?php echo $oei['WE519f199f0f..OEDynTag0.style'];?>">(!)</span>
         </div>
        </div>
        <div id="WE5760aaa9af" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:8">
         <div class="OESZ OESZ_DivContent OESZG_WE5760aaa9af">
          <span class="OESZ OESZ_Text OESZG_WE5760aaa9af ContentBox OEDynTag0">Mot de passe*</span>
         </div>
        </div>
        <div id="WE5b3c039eb0" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:9">
         <div class="OESZ OESZ_DivContent OESZG_WE5b3c039eb0">
          <span class="OESZ OESZ_Text OESZG_WE5b3c039eb0 ContentBox OEDynTag0">Confirmez le mot de passe*</span>
         </div>
        </div>
        <div id="WEd8d0760939" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:10">
         <div class="OESZ OESZ_DivContent OESZG_WEd8d0760939">
          <input name="oerPW" type="password" class="OESZ OESZ_TextBox OESZG_WEd8d0760939 OEDynTag0" style="<?php echo $oei['WEd8d0760939..OEDynTag0.style'];?>" value="<?php echo $oei['WEd8d0760939..OEDynTag0.value'];?>" />
         </div>
        </div>
        <div id="WE49335aa208" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:11">
         <div class="OESZ OESZ_DivContent OESZG_WE49335aa208">
          <input name="oerPW2" type="password" class="OESZ OESZ_TextBox OESZG_WE49335aa208 OEDynTag0" style="<?php echo $oei['WE49335aa208..OEDynTag0.style'];?>" value="<?php echo $oei['WE49335aa208..OEDynTag0.value'];?>" />
         </div>
        </div>
        <div id="WE349d91f706" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:12">
         <div class="OESZ OESZ_DivContent OESZG_WE349d91f706">
          <span class="OESZ OESZ_Text OESZG_WE349d91f706 ContentBox OEDynTag0" style="<?php echo $oei['WE349d91f706..OEDynTag0.style'];?>">(!)</span>
         </div>
        </div>
        <div id="WE4e93157b6e" class="BaseDiv RWidth OEWEHr OESK_WEHrLign_Default" style="z-index:13">
         <div class="OESZ OESZ_DivContent OESZG_WE4e93157b6e">
          <div class="OESZ OESZ_Deco1 OESZG_WE4e93157b6e" style="position:absolute"></div>
          <div class="OESZ OESZ_Deco2 OESZG_WE4e93157b6e" style="position:absolute"></div>
          <div class="OESZ OESZ_Deco3 OESZG_WE4e93157b6e" style="position:absolute"></div>
         </div>
        </div>
        <div id="WEaeb163754c" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:14">
         <div class="OESZ OESZ_DivContent OESZG_WEaeb163754c">
          <span class="OESZ OESZ_Text OESZG_WEaeb163754c ContentBox OEDynTag0">Nom réel</span>
         </div>
        </div>
        <div id="WE3aab18dfd2" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:15">
         <div class="OESZ OESZ_DivContent OESZG_WE3aab18dfd2">
          <input name="oerRealName" type="text" class="OESZ OESZ_TextBox OESZG_WE3aab18dfd2 OEDynTag0" value="<?php echo $oei['WE3aab18dfd2..OEDynTag0.value'];?>" />
         </div>
        </div>
        <div id="WEfa62e0656d" class="BaseDiv RWidth OEWEListBoxV2 OESK_WEListBox2_Default" style="z-index:42">
         <div class="OESZ OESZ_DivContent OESZG_WEfa62e0656d">
          <select name="oerGender" class="OESZ OESZ_ListBox OESZG_WEfa62e0656d OEDynTag0"><?php echo $oeIter['WEfa62e0656d.OEDynTag0.0']; ?></select>
         </div>
        </div>
        <div id="WEe8d30c0a8d" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:41">
         <div class="OESZ OESZ_DivContent OESZG_WEe8d30c0a8d">
          <span class="OESZ OESZ_Text OESZG_WEe8d30c0a8d ContentBox OEDynTag0">Genre</span>
         </div>
        </div>
        <div id="WE4c7253628c" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:43">
         <div class="OESZ OESZ_DivContent OESZG_WE4c7253628c">
          <span class="OESZ OESZ_Text OESZG_WE4c7253628c ContentBox OEDynTag0">Date de naissance:</span>
         </div>
        </div>
        <div id="WEa499ed2c3c" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:46">
         <div class="OESZ OESZ_DivContent OESZG_WEa499ed2c3c">
          <span class="OESZ OESZ_Text OESZG_WEa499ed2c3c ContentBox OEDynTag0">Jour</span>
         </div>
        </div>
        <div id="WE9eb2419de8" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:47">
         <div class="OESZ OESZ_DivContent OESZG_WE9eb2419de8">
          <span class="OESZ OESZ_Text OESZG_WE9eb2419de8 ContentBox OEDynTag0">Mois</span>
         </div>
        </div>
        <div id="WE5aa1356d32" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:48">
         <div class="OESZ OESZ_DivContent OESZG_WE5aa1356d32">
          <span class="OESZ OESZ_Text OESZG_WE5aa1356d32 ContentBox OEDynTag0">Année</span>
         </div>
        </div>
        <div id="WE79780f11bb" class="BaseDiv RNone OEWECodeBlock OESK_WECodeBlock_Default" style="z-index:50">
         <div class="OESZ OESZ_DivContent OESZG_WE79780f11bb">
          <script> // Control the chosen date, ex. to avoid 31 April or 29 February 2001
          $(function(){
            
            var $inputDay = $('#WE48f14349fc select');
            var $inputMonth = $('#WEf6aa36fc57 select');
            var $inputYear = $('#WE8eaf0babaf select');
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
        <div id="WE48f14349fc" class="BaseDiv RWidth OEWEListBoxV2 OESK_WEListBox2_Default" style="z-index:44">
         <div class="OESZ OESZ_DivContent OESZG_WE48f14349fc">
          <select name="oerDay" class="OESZ OESZ_ListBox OESZG_WE48f14349fc OEDynTag0"><?php echo $oeIter['WE48f14349fc.OEDynTag0.0']; ?></select>
         </div>
        </div>
        <div id="WEf6aa36fc57" class="BaseDiv RWidth OEWEListBoxV2 OESK_WEListBox2_Default" style="z-index:45">
         <div class="OESZ OESZ_DivContent OESZG_WEf6aa36fc57">
          <select name="oerMonth" class="OESZ OESZ_ListBox OESZG_WEf6aa36fc57 OEDynTag0"><?php echo $oeIter['WEf6aa36fc57.OEDynTag0.0']; ?></select>
         </div>
        </div>
        <div id="WE8eaf0babaf" class="BaseDiv RWidth OEWEListBoxV2 OESK_WEListBox2_Default" style="z-index:49">
         <div class="OESZ OESZ_DivContent OESZG_WE8eaf0babaf">
          <select name="oerYear" class="OESZ OESZ_ListBox OESZG_WE8eaf0babaf OEDynTag0"><?php echo $oeIter['WE8eaf0babaf.OEDynTag0.0']; ?></select>
         </div>
        </div>
        <div id="WEe852fdf39b" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:16">
         <div class="OESZ OESZ_DivContent OESZG_WEe852fdf39b">
          <span class="OESZ OESZ_Text OESZG_WEe852fdf39b ContentBox OEDynTag0">Adresse postale</span>
         </div>
        </div>
        <div id="WEe3ac875f4e" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:17">
         <div class="OESZ OESZ_DivContent OESZG_WEe3ac875f4e">
          <input name="oerAddr1" type="text" class="OESZ OESZ_TextBox OESZG_WEe3ac875f4e OEDynTag0" value="<?php echo $oei['WEe3ac875f4e..OEDynTag0.value'];?>" />
         </div>
        </div>
        <div id="WEf4f29e1aeb" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:18">
         <div class="OESZ OESZ_DivContent OESZG_WEf4f29e1aeb">
          <span class="OESZ OESZ_Text OESZG_WEf4f29e1aeb ContentBox OEDynTag0">Adresse postale - ligne 2</span>
         </div>
        </div>
        <div id="WE39b9635dec" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:19">
         <div class="OESZ OESZ_DivContent OESZG_WE39b9635dec">
          <input name="oerAddr2" type="text" class="OESZ OESZ_TextBox OESZG_WE39b9635dec OEDynTag0" value="<?php echo $oei['WE39b9635dec..OEDynTag0.value'];?>" />
         </div>
        </div>
        <div id="WE95ca20f51a" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:20">
         <div class="OESZ OESZ_DivContent OESZG_WE95ca20f51a">
          <span class="OESZ OESZ_Text OESZG_WE95ca20f51a ContentBox OEDynTag0">Ville</span>
         </div>
        </div>
        <div id="WE64905fcffd" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:21">
         <div class="OESZ OESZ_DivContent OESZG_WE64905fcffd">
          <input name="oerCity" type="text" class="OESZ OESZ_TextBox OESZG_WE64905fcffd OEDynTag0" value="<?php echo $oei['WE64905fcffd..OEDynTag0.value'];?>" />
         </div>
        </div>
        <div id="WEd0f14e5268" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:22">
         <div class="OESZ OESZ_DivContent OESZG_WEd0f14e5268">
          <span class="OESZ OESZ_Text OESZG_WEd0f14e5268 ContentBox OEDynTag0">Code postal</span>
         </div>
        </div>
        <div id="WEfef6dbf4ef" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:23">
         <div class="OESZ OESZ_DivContent OESZG_WEfef6dbf4ef">
          <span class="OESZ OESZ_Text OESZG_WEfef6dbf4ef ContentBox OEDynTag0">Pays</span>
         </div>
        </div>
        <div id="WE963cfac804" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:24">
         <div class="OESZ OESZ_DivContent OESZG_WE963cfac804">
          <input name="oerZIP" type="text" class="OESZ OESZ_TextBox OESZG_WE963cfac804 OEDynTag0" value="<?php echo $oei['WE963cfac804..OEDynTag0.value'];?>" />
         </div>
        </div>
        <div id="WE6bb199af7f" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:25">
         <div class="OESZ OESZ_DivContent OESZG_WE6bb199af7f">
          <input name="oerCountry" type="text" class="OESZ OESZ_TextBox OESZG_WE6bb199af7f OEDynTag0" value="<?php echo $oei['WE6bb199af7f..OEDynTag0.value'];?>" />
         </div>
        </div>
        <div id="WE63b5b0e9ca" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:26">
         <div class="OESZ OESZ_DivContent OESZG_WE63b5b0e9ca">
          <span class="OESZ OESZ_Text OESZG_WE63b5b0e9ca ContentBox OEDynTag0">Téléphone</span>
         </div>
        </div>
        <div id="WEce5ca8e803" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:27">
         <div class="OESZ OESZ_DivContent OESZG_WEce5ca8e803">
          <input name="oerPhone" type="text" class="OESZ OESZ_TextBox OESZG_WEce5ca8e803 OEDynTag0" value="<?php echo $oei['WEce5ca8e803..OEDynTag0.value'];?>" />
         </div>
        </div>
        <div id="WEf391517e36" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:28">
         <div class="OESZ OESZ_DivContent OESZG_WEf391517e36">
          <span class="OESZ OESZ_Text OESZG_WEf391517e36 ContentBox OEDynTag0">(Info: Modifier ce texte selon besoin ou effacer le champ si inutile)</span>
         </div>
        </div>
        <div id="WE5265050ad8" class="BaseDiv RBoth OEWETextAreaV2 OESK_WETextArea2_Default" style="z-index:29">
         <div class="OESZ OESZ_DivContent OESZG_WE5265050ad8">
          <textarea class="OESZ OESZ_TextArea OESZG_WE5265050ad8 OEDynTag0" name="oerInfo" rows="3" cols="50"><?php echo $oei['WE5265050ad8..OEDynTag0.html1'];?></textarea>
         </div>
        </div>
        <div id="WE7957c762f2" class="BaseDiv RWidth OEWEHr OESK_WEHrLign_Default" style="z-index:30">
         <div class="OESZ OESZ_DivContent OESZG_WE7957c762f2">
          <div class="OESZ OESZ_Deco1 OESZG_WE7957c762f2" style="position:absolute"></div>
          <div class="OESZ OESZ_Deco2 OESZG_WE7957c762f2" style="position:absolute"></div>
          <div class="OESZ OESZ_Deco3 OESZG_WE7957c762f2" style="position:absolute"></div>
         </div>
        </div>
        <div id="WE4f52929d17" class="BaseDiv RNone OEWECheckBoxV2 OESK_WECheckBox2_Default" style="z-index:32">
         <div class="OESZ OESZ_DivContent OESZG_WE4f52929d17">
          <input type="checkbox" class="OESZ OESZ_CheckBox OESZG_WE4f52929d17 OEDynTag0" name="oerAccept" value="Valeur du champ" />
         </div>
        </div>
        <div id="WEfac7aaeeee" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:33">
         <div class="OESZ OESZ_DivContent OESZG_WEfac7aaeeee">
          <span class="OESZ OESZ_Text OESZG_WEfac7aaeeee ContentBox">J'accepte les <a href="">conditions d'utilisation<span style="color:rgb(0, 0, 0);font-size:16px;font-style:normal;font-variant:normal;font-weight:normal;letter-spacing:normal;line-height:19px;text-align:-webkit-auto;text-indent:0px;text-transform:none;white-space:normal;word-spacing:0px;">*</span></a>&nbsp;(!attribuer le lien pour chaque langue!)</span>
         </div>
        </div>
        <div id="WE8e82c7f703" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:31">
         <div class="OESZ OESZ_DivContent OESZG_WE8e82c7f703">
          <span class="OESZ OESZ_Text OESZG_WE8e82c7f703 ContentBox OEDynTag0" style="<?php echo $oei['WE8e82c7f703..OEDynTag0.style'];?>">(!)</span>
         </div>
        </div>
        <div id="WEe35df7116f" class="BaseDiv RNone OEWECheckBoxV2 OESK_WECheckBox2_Default" style="z-index:34">
         <div class="OESZ OESZ_DivContent OESZG_WEe35df7116f">
          <input type="checkbox" class="OESZ OESZ_CheckBox OESZG_WEe35df7116f OEDynTag0" name="oerSubscribe" value="Valeur du champ" <?php echo $oei['WEe35df7116f..OEDynTag0.checked'];?>="<?php echo $oei['WEe35df7116f..OEDynTag0.checked'];?>"  />
         </div>
        </div>
        <div id="WEc3a2721a95" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:35">
         <div class="OESZ OESZ_DivContent OESZG_WEc3a2721a95">
          <span class="OESZ OESZ_Text OESZG_WEc3a2721a95 ContentBox">S'abonner à la Newsletter</span>
         </div>
        </div>
        <div id="WE4eab38d63a" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:36">
         <div class="OESZ OESZ_DivContent OESZG_WE4eab38d63a">
          <span class="OESZ OESZ_Text OESZG_WE4eab38d63a ContentBox OEDynTag0" style="<?php echo $oei['WE4eab38d63a..OEDynTag0.style'];?>">Veuillez saisir le texte depuis l'image Captcha*</span>
         </div>
        </div>
        <div id="WEd85170b2ce" class="BaseDiv RWidth OEWECaptchaV2 OESK_WECaptcha2_Default" style="z-index:37">
         <div class="OESZ OESZ_DivContent OESZG_WEd85170b2ce">
          <span class="OESZ OESZ_LeftInput OESZG_WEd85170b2ce"></span>
          <input name="WEd85170b2ce" type="text" class="OESZ OESZ_Input OESZG_WEd85170b2ce" />
          <span class="OESZ OESZ_RightInput OESZG_WEd85170b2ce"></span>
          <img class="OESZ OESZ_Cryptogram OESZG_WEd85170b2ce" alt="" src="" />
          <span class="OESZ OESZ_Reload OESZG_WEd85170b2ce"></span>
         </div>
        </div>
        <div id="WE3dc4bebea7" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:38">
         <div class="OESZ OESZ_DivContent OESZG_WE3dc4bebea7">
          <span class="OESZ OESZ_Text OESZG_WE3dc4bebea7 ContentBox OEDynTag0" style="<?php echo $oei['WE3dc4bebea7..OEDynTag0.style'];?>">(!)</span>
         </div>
        </div>
        <div id="WE0b3227cd28" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:39">
         <div class="OESZ OESZ_DivContent OESZG_WE0b3227cd28">
          <span class="OESZ OESZ_Text OESZG_WE0b3227cd28 ContentBox OEDynTag0">* Champs obligatoires</span>
         </div>
        </div>
        <div id="WEe5106e486c" class="BaseDiv RWidth OEWEButton OESK_WEButton_Default" style="z-index:40">
         <div class="OESZ OESZ_DivContent OESZG_WEe5106e486c">
          <button class="OESZ OESZ_Button OESZG_WEe5106e486c OEDynTag0" type="button" name="WEe5106e486c">Créer mon compte</button>
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