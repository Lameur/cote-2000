<?php
	require_once "add-new-content(var).php";
	include_once "../WEFiles/Server/DB/OEDB.php";
?><!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="es">
 <head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <meta name="generator" content="openElement (1.57.9)" />
  <link id="openElement" rel="stylesheet" type="text/css" href="../WEFiles/Css/v02/openElement.css?v=50491126800" />
  <link id="OEBase" rel="stylesheet" type="text/css" href="add-new-content.css?v=50491126800" />
  <link rel="stylesheet" type="text/css" href="../WEFiles/Css/opentip.css?v=50491126800" />
  <!--[if lte IE 7]>
  <link rel="stylesheet" type="text/css" href="../WEFiles/Css/ie7.css?v=50491126800" />
  <![endif]-->
  <script type="text/javascript">
   var WEInfoPage={PHPVersion:"phpOK",OEVersion:"1-57-9",PagePath:"oe-bkoffice-v1/add-new-content",Culture:"ES",LanguageCode:"ES",RelativePath:"../",RenderMode:"Export",PageAssociatePath:"oe-bkoffice-v1/add-new-content",EditorTexts:null}
  </script>
  <script type="text/javascript" src="../WEFiles/Client/jQuery/1.10.2.js?v=50491126800"></script>
  <script type="text/javascript" src="../WEFiles/Client/jQuery/migrate.js?v=50491126800"></script>
  <script type="text/javascript" src="../WEFiles/Client/Common/oe.min.js?v=50491126800"></script>
  <script type="text/javascript" src="add-new-content(var).js?v=50491126800"></script>
  <script type="text/javascript" src="../WEFiles/Client/jQuery/Plugins/jquery.form.js?v=50491126800"></script>
  <script type="text/javascript" src="../WEFiles/Client/opentip-jquery.min.js?v=50491126800"></script>
  <script type="text/javascript" src="../WEFiles/Client/WESendForm-v210.js?v=50491126800"></script>
  <script type="text/javascript">
   var WEEdValidators={WE1ae33b0f3c:[{MsgError:"Veuillez inscrire votre message d'erreur.",Expression:".+"}],WEa44df9cffb:[{MsgError:"Veuillez inscrire votre message d'erreur.",Expression:".+"}],WEe8fa78e860:[{MsgError:"Please configure your error message.",Expression:"^[\\d]*$"}],WE9adaa46eb8:[{MsgError:"Please configure your error message.",Expression:"^[\\d]*$"}]}
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
     <div id="WEf8aff5414a" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:1">
      <div class="OESZ OESZ_DivContent OESZG_WEf8aff5414a">
       <div class="OECT OECT_Content OECTAbs OEDynTag0">
        <div id="WEd7201620c6" class="BaseDiv RWidth OEWELabel OESK_WELabel_Default" style="z-index:19">
         <div class="OESZ OESZ_DivContent OESZG_WEd7201620c6">
          <span class="OESZ OESZ_Text OESZG_WEd7201620c6 ContentBox"> <b><span style="line-height:115%;font-size:13px;">INFO POUR LES CREATEURS DU SITE - supprimer ce cadre après la lecture</span></b> <span style="font-size:13px;line-height:115%;">:&nbsp;<span style="color:rgb(192, 0, 0);"><b>Il est fortement conseillé de consulter le Wiki</b></span> (double-cliquer sur « Aide Wiki » dans la liste de Packs à droite), particulierement la section concernant ce paquet (numéro 20).</span></span>
         </div>
        </div>
        <div id="WEc59057add0" class="BaseDiv RNone OEWELink OESK_WELink_Default" style="z-index:1">
         <div class="OESZ OESZ_DivContent OESZG_WEc59057add0">
          <a class="OESZ OESZ_Link OESZG_WEc59057add0 ContentBox OEDynTag0" data-cd="PageLink" href="<?php echo $oei['WEc59057add0..OEDynTag0.href'];?>">Aller à la page de Gestion de Contenu<br /></a>
         </div>
        </div>
        <div id="WE77120c7ad5" class="BaseDiv RWidth OEWELabel OESK_WELabel_Default" style="z-index:3">
         <div class="OESZ OESZ_DivContent OESZG_WE77120c7ad5">
          <span class="OESZ OESZ_Text OESZG_WE77120c7ad5 ContentBox OEDynTag0"><?php echo $oei['WE77120c7ad5..OEDynTag0.html1'];?></span>
         </div>
        </div>
        <div id="WEadc9ee13e6" class="BaseDiv RNone OEWECodeBlock OESK_WECodeBlock_Default" style="z-index:2">
         <div class="OESZ OESZ_DivContent OESZG_WEadc9ee13e6">
          <script>
            $(function(){
            // Animate report:
              var $reportTag = $('#WE77120c7ad5');
              $reportTag.fadeTo('slow', 0.25).fadeTo('slow', 1.0);
            });
          </script>
         </div>
        </div>
        <div id="WE0f3a7371e0" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:4">
         <div class="OESZ OESZ_DivContent OESZG_WE0f3a7371e0">
          <span class="OESZ OESZ_Text OESZG_WE0f3a7371e0 ContentBox">Nom de l'article (nouveau ou existant)</span>
         </div>
        </div>
        <div id="WE1ae33b0f3c" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:5">
         <div class="OESZ OESZ_DivContent OESZG_WE1ae33b0f3c">
          <input name="oebkArticleName" type="text" class="OESZ OESZ_TextBox OESZG_WE1ae33b0f3c OEDynTag0" value="<?php echo $oei['WE1ae33b0f3c..OEDynTag0.value'];?>" />
         </div>
        </div>
        <div id="WE1af0e811eb" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:6">
         <div class="OESZ OESZ_DivContent OESZG_WE1af0e811eb">
          <span class="OESZ OESZ_Text OESZG_WE1af0e811eb ContentBox">Nom du détail</span>
         </div>
        </div>
        <div id="WEa44df9cffb" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:7">
         <div class="OESZ OESZ_DivContent OESZG_WEa44df9cffb">
          <input name="oebkArticleDetail" type="text" class="OESZ OESZ_TextBox OESZG_WEa44df9cffb OEDynTag0" value="<?php echo $oei['WEa44df9cffb..OEDynTag0.value'];?>" />
         </div>
        </div>
        <div id="WEad9f940792" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:8">
         <div class="OESZ OESZ_DivContent OESZG_WEad9f940792">
          <span class="OESZ OESZ_Text OESZG_WEad9f940792 ContentBox">Type de contenu</span>
         </div>
        </div>
        <div id="WE9ee091126e" class="BaseDiv RWidth OEWEListBoxV2 OESK_WEListBox2_Default" style="z-index:9">
         <div class="OESZ OESZ_DivContent OESZG_WE9ee091126e">
          <select name="oebkDetailType" class="OESZ OESZ_ListBox OESZG_WE9ee091126e OEDynTag0"><?php echo $oeIter['WE9ee091126e.OEDynTag0.0']; ?>
          </select>
         </div>
        </div>
        <div id="WEa16f96ee69" class="BaseDiv RNone OEWECheckBoxV2 OESK_WECheckBox2_Default" style="z-index:10">
         <div class="OESZ OESZ_DivContent OESZG_WEa16f96ee69">
          <input type="checkbox" class="OESZ OESZ_CheckBox OESZG_WEa16f96ee69 OEDynTag0" name="oebkSetOfficialDate" value="Valeur du champ" <?php echo $oei['WEa16f96ee69..OEDynTag0.checked'];?>="<?php echo $oei['WEa16f96ee69..OEDynTag0.checked'];?>"  />
         </div>
        </div>
        <div id="WEcde138e9e9" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:11">
         <div class="OESZ OESZ_DivContent OESZG_WEcde138e9e9">
          <span class="OESZ OESZ_Text OESZG_WEcde138e9e9 ContentBox">Utiliser la date+heure actuelles comme date "officielle" de l'article</span>
         </div>
        </div>
        <div id="WEe8fa78e860" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:12">
         <div class="OESZ OESZ_DivContent OESZG_WEe8fa78e860">
          <input name="oebkSort" type="text" class="OESZ OESZ_TextBox OESZG_WEe8fa78e860 OEDynTag0" value="<?php echo $oei['WEe8fa78e860..OEDynTag0.value'];?>" maxlength="8" />
         </div>
        </div>
        <div id="WE1fc942f1cc" class="BaseDiv RWidth OEWELabel OESK_WELabel_Default" style="z-index:13">
         <div class="OESZ OESZ_DivContent OESZG_WE1fc942f1cc">
          <span class="OESZ OESZ_Text OESZG_WE1fc942f1cc ContentBox OEDynTag0">(Facultatif) Valeur de Tri (importance relative ou priorité de l'article), ex&nbsp;: "10" ou "-10"</span>
         </div>
        </div>
        <div id="WE9adaa46eb8" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:20">
         <div class="OESZ OESZ_DivContent OESZG_WE9adaa46eb8">
          <input name="oebkCategories" type="text" class="OESZ OESZ_TextBox OESZG_WE9adaa46eb8 OEDynTag0" maxlength="8" />
         </div>
        </div>
        <div id="WE906950728c" class="BaseDiv RWidth OEWELabel OESK_WELabel_Default" style="z-index:21">
         <div class="OESZ OESZ_DivContent OESZG_WE906950728c">
          <span class="OESZ OESZ_Text OESZG_WE906950728c ContentBox OEDynTag0">(Facultatif, Invisible) IDs de Catégories en format ID1+ID2+...+IDn, ex. 1 ou 2+4. Uniquement pour des nouveaux Articles.</span>
         </div>
        </div>
        <div id="WE2d3482cdbc" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:14">
         <div class="OESZ OESZ_DivContent OESZG_WE2d3482cdbc">
          <span class="OESZ OESZ_Text OESZG_WE2d3482cdbc ContentBox">(Facultatif) Contenu du détail (HTML ou texte brut)</span>
         </div>
        </div>
        <div id="WE9ca1827fd6" class="BaseDiv RBoth OEWETextAreaV2 OESK_WETextArea2_Default" style="z-index:15">
         <div class="OESZ OESZ_DivContent OESZG_WE9ca1827fd6">
          <textarea class="OESZ OESZ_TextArea OESZG_WE9ca1827fd6 OEDynTag0" name="oebkHTML" rows="3" cols="50"><?php echo $oei['WE9ca1827fd6..OEDynTag0.html1'];?></textarea>
         </div>
        </div>
        <div id="WE5c81b9693b" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:16">
         <div class="OESZ OESZ_DivContent OESZG_WE5c81b9693b">
          <span class="OESZ OESZ_Text OESZG_WE5c81b9693b ContentBox OEDynTag0">Pour des raisons de sécurité, veuillez saisir le mot de passe du back-office :<br /></span>
         </div>
        </div>
        <div id="WEf8c5c5d079" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:17">
         <div class="OESZ OESZ_DivContent OESZG_WEf8c5c5d079">
          <input name="oebkPW" type="password" autocomplete="off" class="OESZ OESZ_TextBox OESZG_WEf8c5c5d079 OEDynTag0" style="<?php echo $oei['WEf8c5c5d079..OEDynTag0.style'];?>" value="<?php echo $oei['WEf8c5c5d079..OEDynTag0.value'];?>" />
         </div>
        </div>
        <div id="WE37f74c882b" class="BaseDiv RWidth OEWEButton OESK_WEButton_Default" style="z-index:18">
         <div class="OESZ OESZ_DivContent OESZG_WE37f74c882b">
          <button class="OESZ OESZ_Button OESZG_WE37f74c882b OEDynTag0" type="button" name="WE37f74c882b">Ajouter à la base de données</button>
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