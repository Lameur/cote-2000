<?php
	require_once "back-office-content(var).php";
	include_once "WEFiles/Server/DB/OEDB.php";
?><!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="es">
 <head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <meta name="generator" content="openElement (1.57.9)" />
  <link id="openElement" rel="stylesheet" type="text/css" href="WEFiles/Css/v02/openElement.css?v=50491126800" />
  <link id="OEBase" rel="stylesheet" type="text/css" href="back-office-content.css?v=50491126800" />
  <link rel="stylesheet" type="text/css" href="WEFiles/Css/opentip.css?v=50491126800" />
  <!--[if lte IE 7]>
  <link rel="stylesheet" type="text/css" href="WEFiles/Css/ie7.css?v=50491126800" />
  <![endif]-->
  <script type="text/javascript">
   var WEInfoPage={PHPVersion:"phpOK",OEVersion:"1-57-9",PagePath:"back-office-content",Culture:"ES",LanguageCode:"ES",RelativePath:"",RenderMode:"Export",PageAssociatePath:"back-office-content",EditorTexts:null}
  </script>
  <script type="text/javascript" src="WEFiles/Client/jQuery/1.10.2.js?v=50491126800"></script>
  <script type="text/javascript" src="WEFiles/Client/jQuery/migrate.js?v=50491126800"></script>
  <script type="text/javascript" src="WEFiles/Client/Common/oe.min.js?v=50491126800"></script>
  <script type="text/javascript" src="back-office-content(var).js?v=50491126800"></script>
  <script type="text/javascript" src="WEFiles/Client/jQuery/Plugins/jquery.form.js?v=50491126800"></script>
  <script type="text/javascript" src="WEFiles/Client/opentip-jquery.min.js?v=50491126800"></script>
  <script type="text/javascript" src="WEFiles/Client/WESendForm-v210.js?v=50491126800"></script>
  <script type="text/javascript" src="WEFiles/Client/jQuery/Plugins/jquery.ui.effects.js?v=50491126800"></script>
  <script type="text/javascript" src="WEFiles/Client/WECollapsiblePanel-v22.js?v=50491126800"></script>
  <script type="text/javascript">
   var WEEdValidators={WE13c119e315:[{MsgError:"Please configure your error message.",Expression:"(^$)|(^([-])?[\\d]+$)"}],WE7344e96e4c:[{MsgError:"Please configure your error message.",Expression:"(^$)|(^(19|20)\\d\\d[/](0[1-9]|1[012])[/](0[1-9]|[12][0-9]|3[01])(\\s([01-9]|[01][01-9]|2[0123]):([01-9]|[012345][01-9]))?$)"}],WE5b0fb3533c:[{MsgError:"Please configure your error message.",Expression:"(^$)|(^[014]$)"}]}
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
     <div id="WEb2b496bbb4" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:1">
      <div class="OESZ OESZ_DivContent OESZG_WEb2b496bbb4">
       <div class="OECT OECT_Content OECTAbs OEDynTag0" style="overflow:visible">
        <div id="WE32749f9926" class="BaseDiv RWidth OEWELabel OESK_WELabel_Default OECenterAH" style="z-index:2">
         <div class="OESZ OESZ_DivContent OESZG_WE32749f9926">
          <span class="OESZ OESZ_Text OESZG_WE32749f9926 ContentBox">TOUS LES ARTICLES</span>
         </div>
        </div>
        <div id="WE120c478ae2" class="BaseDiv RNone OEWECodeBlock OESK_WECodeBlock_Default" style="z-index:9">
         <div class="OESZ OESZ_DivContent OESZG_WE120c478ae2">
          <script>
            $(function(){
              
              // * Anchors * //
              
              // Fix jump-to-anchor problem in certain browsers:
              var anchor_id = window.location.hash;
              if (anchor_id != "") {
                var $anchor = $(anchor_id); 		// anchor link defined at the top of this script
                if ($anchor.length) { 				// anchor found,force-scroll to it
                  var anchor_position; 				// anchor absolute position
                  while ($anchor && $anchor.css('position') != "absolute") { // go to first parent positioned absolutely, and take its coordinates:
                    $anchor = $anchor.parent();
                    if (!$anchor || !$anchor.length) return; // unknown error
                  }
                  anchor_position = $anchor.offset(); 
                  if (anchor_position) { 
                    //window.scrollTo(anchor_position.left,anchor_position.top);
                    setTimeout(function(){window.scrollTo(anchor_position.left,anchor_position.top); }, 250); // scroll after a small delay
                  }
                }
              }
                
              
              // * Edit Article - choose categories * //
              
              // on change in one of category inputs - dropdown list or text field - clear another input
              $('#WE35e4550232 select').change(function(){
                if ($('#WE35e4550232 select').val()) $('#WE3c1c35eca0 input').val('');
              });
              $('#WE3c1c35eca0 input').change(function(){
                if ($('#WE3c1c35eca0 input').val()) $("#WE35e4550232 select option").prop("selected", false);
              });
              
              
              // * Retractable Filter Panel * //
              
              // Open/Close retractable container with filters:
              $('#WEaaee08d9bb').click(function(){ // show and open
                $('#WE330073b496').show();$('#WE330073b496').css('display','block');$('#WE330073b496').css('visibility','visible');
                $('#WE330073b496 .PullZone').click();
              });
              
              // auto-hide on closure:
              $('#WE330073b496').bind('oeOnUpdate', function(event, action){
                if (action === 'close') { $('#WE330073b496').hide(); }
              });
              
              // filters fields:
              
              //Only one of two category-related checkboxes can be checked at a time:
              var $cbFiltCategory = $('#WEec27963543 input');
              var $cbFiltCatgComb = $('#WE1c9873a6ca input');
              $cbFiltCategory.change(function(){ if ($cbFiltCategory.attr('checked')) $cbFiltCatgComb.attr('checked', false); });
              $cbFiltCatgComb.change(function(){ if ($cbFiltCatgComb.attr('checked')) $cbFiltCategory.attr('checked', false); });
          
              var $tFiltCategory = $('#WEaee261c8d8 select'); // category select list
              var $tFiltCatgComb = $('#WE26bd15ed91 input'); // category combination text field
              // on modifying category selection, check  its checkbox:
              $tFiltCategory.change(function(){   $cbFiltCategory.attr('checked', 'checked'); $tFiltCatgComb.val(''); $cbFiltCategory.change(); });
              // on modifying category combination text, check or uncheck its checkbox:
              $tFiltCatgComb.change(function(){   $cbFiltCatgComb.attr('checked', $tFiltCatgComb.val()?'checked':false); $cbFiltCatgComb.change(); });
              $tFiltCatgComb.keypress(function(){ $cbFiltCatgComb.attr('checked', 'checked'); $cbFiltCatgComb.change(); });
          
              // Set font size for all drop-downs:
              $('select.OESZ').css('font-size', '10px');
              
              
              
              
              // If no detail to edit,hide edit panels (containers) and reduce height of container and page's main content:
              if ($('#WE59eb03b417 textarea').css('display') == 'none' || $('#WE59eb03b417 textarea').css('visibility') == 'hidden') { // no article to edit
                var $container1 = $('#WE126e89490d');
                var $container2 = $('#WE5457a00a44');
                var ctop = $container1.position();
                if (ctop) ctop = ctop.top;
                $container1.hide();
                $container2.hide();
                
                var $mainContainer = $('#WEb2b496bbb4');
                if (ctop && $mainContainer.length) {
                  var currHt = parseInt($mainContainer.css('height'));
                  var newHt  = parseInt(ctop)-10;
                  $mainContainer.css('height', newHt+"px") ; // backoffice container
                  var newBt = $mainContainer.position().left + parseInt($mainContainer.css('height'));
                  var currPageHt = parseInt($('.OESZ_XBodyContent').css('height'));
                  var newPageHt  = currPageHt - (currHt - newHt);
                                            
          		$('.OESZ_XBodyContent').css('height', parseInt(newPageHt) + "px");
                }
                
              } else { // edit detail mode
                // Animate report:
                var $reportTag = $('#WE374c8d7316');
                $reportTag.fadeTo('slow', 0.25).fadeTo('slow', 1.0);
              }
              
            });
          </script>
         </div>
        </div>
        <div id="WEcfdd958134" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default OECenterAH" style="z-index:14">
         <div class="OESZ OESZ_DivContent OESZG_WEcfdd958134">
          <div class="OECT OECT_Content OECTAbs OEDynTag0" style="<?php echo $oei['WEcfdd958134..OEDynTag0.style'];?>">
           <div id="WEd12e4d00d9" class="BaseDiv RWidth OEWELabel OESK_WELabel_Default" style="z-index:1">
            <div class="OESZ OESZ_DivContent OESZG_WEd12e4d00d9">
             <span class="OESZ OESZ_Text OESZG_WEd12e4d00d9 ContentBox OEDynTag0">Pas d'articles</span>
            </div>
           </div>
          </div>
         </div>
        </div>
        <div id="WEa29415f08b" class="BaseDiv RBoth OEWEText OESK_WEText_Default" style="z-index:12">
         <div class="OESZ OESZ_DivContent OESZG_WEa29415f08b">
          <span class="ContentBox"> <p> </p> <p style="margin-top:5.0pt;margin-right:0cm;margin-bottom:5.0pt; margin-left:0cm;line-height:normal;"> <b><span style="line-height:115%;font-size:13px;">INFO POUR LES CREATEURS DU SITE - supprimer ce cadre après la lecture</span></b> <span style="font-size:13px;">: </span></p> <p style="margin-top:5.0pt;margin-right:0cm;margin-bottom:5.0pt; margin-left:0cm;line-height:normal;"><span style="font-size:13px;"><span style="color:rgb(192, 0, 0);"><b>Il est fortement conseillé de consulter le Wiki</b></span> (double-cliquer sur «&nbsp;Aide Wiki&nbsp;» dans la liste de Packs à droite) pour voir des étapes et des instructions plus complètes.&nbsp;</span></p><p style="margin-top:5.0pt;margin-right:0cm;margin-bottom:5.0pt; margin-left:0cm;line-height:normal;"><span style="font-size:13px;">Le description ci-dessous correspond au scenario le plus simple pour débuter.</span></p> <p style="margin-top:5.0pt;margin-right:0cm;margin-bottom:5.0pt; margin-left:0cm;line-height:normal;"><span style="font-size:13px;">1&nbsp;: <b>Pré-visualiser&nbsp;(F12)</b> cette page d’administration dans un navigateur, pour initialiser le système.</span><br /></p> <p style="margin-top:5.0pt;margin-right:0cm;margin-bottom:5.0pt; margin-left:0cm;line-height:normal;"><span style="font-size:13px;">2&nbsp;: Déposer des Packs 50 sur les pages du site qui doivent contenir les articles (le contenu dynamique). </span></p> <p style="margin-top:5.0pt;margin-right:0cm;margin-bottom:5.0pt; margin-left:0cm;line-height:normal;"><span style="font-size:13px;">3&nbsp;: Il faut également <b>pré-visualiser (F12)&nbsp;chacune de ces pages</b> dans un navigateur pour ajouter automatiquement les articles dans la base de données. </span></p> <p style="margin-top:5.0pt;margin-right:0cm;margin-bottom:5.0pt; margin-left:0cm;line-height:normal;"><span style="font-size:13px;">4&nbsp;: Il est possible désormais de tester la procédure de modification de contenu en utilisant la page d’administration, ouvert en prévisualisation (F12)&nbsp;dans un navigateur.</span></p><p style="margin-top:5.0pt;margin-right:0cm;margin-bottom:5.0pt; margin-left:0cm;line-height:normal;"><span style="font-size:13px;"><br /></span></p> <p style="margin-top:5.0pt;margin-right:0cm;margin-bottom:5.0pt; margin-left:0cm;line-height:normal;"><span style="font-size:13px;"><b>Attention</b>&nbsp;: Les données modifiées en local ne seront pas transférées avec la mise en ligne du site. Pour copier ces données sur l’hébergement en ligne, consulter le processus expliqué dans le Wiki.</span></p><p style="margin-top:5.0pt;margin-right:0cm;margin-bottom:5.0pt; margin-left:0cm;line-height:normal;"><span style="font-size:13px;"><br /></span></p> <p style="margin-top:5.0pt;margin-right:0cm;margin-bottom:5.0pt; margin-left:0cm;line-height:normal;"> <span style="line-height:115%;font-size:13px;">Après la mise en ligne sur l’hébergement, ouvrir la page d’administration puis chacune des pages contenant des articles (voir étapes 1 et 3). Le contenu des articles est désormais modifiable directement en ligne sur la page d’administration. </span> Il n’y a <b style="font-size: 13px; ">pas besoin d’utiliser openElement pour mettre le contenu à jour, aucune mise en ligne est nécessaire</b>. </p> <p style="margin-top:5.0pt;margin-right:0cm;margin-bottom:5.0pt; margin-left:0cm;line-height:normal;"><span style="font-size:13px;">&nbsp;</span></p> <p style="margin-top:5.0pt;margin-right:0cm;margin-bottom:5.0pt; margin-left:0cm;line-height:normal;"><span style="font-size:13px;"><b>IMPORTANT:</b> Avant de publier votre site sur Internet, <b>protéger cette page</b> en utilisant les Packs "UserSpace", ou sécuriser la avec openElement (Clic doit sur la page dans l’Explorateur de Site à gauche, puis «&nbsp;Sécuriser&nbsp;la page»). </span></p> <br /></span>
         </div>
        </div>
        <div id="WEc197bce149" class="BaseDiv RWidth OEWELink OESK_WELink_Default" style="z-index:11">
         <div class="OESZ OESZ_DivContent OESZG_WEc197bce149">
          <a class="OESZ OESZ_Link OESZG_WEc197bce149 ContentBox OEDynTag0" data-cd="PageLink" href="<?php echo $oei['WEc197bce149..OEDynTag0.href'];?>"><?php echo $oei['WEc197bce149..OEDynTag0.html1'];?></a>
         </div>
        </div>
        <div id="WEaaee08d9bb" class="BaseDiv RWidth OEWELink OESK_WELink_Default" style="z-index:8">
         <div class="OESZ OESZ_DivContent OESZG_WEaaee08d9bb">
          <a class="OESZ OESZ_Link OESZG_WEaaee08d9bb ContentBox OEDynTag0" data-cd="PageLink" href="#">Afficher/cacher les options de Tri et de Filtre</a>
         </div>
        </div>
        <div id="WE330073b496" class="BaseDiv RBoth OEWECollapsiblePanel OESK_WECollapsiblePanel_Default" style="z-index:1">
         <div class="OESZ OESZ_DivContent OESZG_WE330073b496">
          <div style="overflow:hidden; height:100%;">
           <div class="WECollapsiblePanelContent">
            <div style="position:relative;" class="OESZ OESZ_OpenZoneTop OESZG_WE330073b496 OpenZone">
             <div class="OECT OECT_OpenZone OECTAbs">
              <div id="WEe570df0d08" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:1">
               <div class="OESZ OESZ_DivContent OESZG_WEe570df0d08">
                <span class="OESZ OESZ_Text OESZG_WEe570df0d08 ContentBox">Trier par:</span>
               </div>
              </div>
              <div id="WE568bde8e57" class="BaseDiv RWidth OEWEListBoxV2 OESK_WEListBox2_Default" style="z-index:2">
               <div class="OESZ OESZ_DivContent OESZG_WE568bde8e57">
                <select name="oebkSortType" class="OESZ OESZ_ListBox OESZG_WE568bde8e57 OEDynTag0"><?php echo $oeIter['WE568bde8e57.OEDynTag0.0']; ?>
                </select>
               </div>
              </div>
              <div id="WEb9febf6547" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:3">
               <div class="OESZ OESZ_DivContent OESZG_WEb9febf6547">
                <span class="OESZ OESZ_Text OESZG_WEb9febf6547 ContentBox">Afficher uniquement si le nom commence par:</span>
               </div>
              </div>
              <div id="WEc1c9657318" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:4">
               <div class="OESZ OESZ_DivContent OESZG_WEc1c9657318">
                <input name="oebkFilterName" type="text" class="OESZ OESZ_TextBox OESZG_WEc1c9657318 OEDynTag0" />
               </div>
              </div>
              <div id="WEec27963543" class="BaseDiv RNone OEWECheckBoxV2 OESK_WECheckBox2_Default" style="z-index:5">
               <div class="OESZ OESZ_DivContent OESZG_WEec27963543">
                <input type="checkbox" class="OESZ OESZ_CheckBox OESZG_WEec27963543 OEDynTag0" name="oebkFilterCatgOn" value="Valeur du champ" />
               </div>
              </div>
              <div id="WE7188ae38d7" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:6">
               <div class="OESZ OESZ_DivContent OESZG_WE7188ae38d7">
                <span class="OESZ OESZ_Text OESZG_WE7188ae38d7 ContentBox">Appartient à une catégorie&nbsp;:</span>
               </div>
              </div>
              <div id="WEaee261c8d8" class="BaseDiv RWidth OEWEListBoxV2 OESK_WEListBox2_Default" style="z-index:12">
               <div class="OESZ OESZ_DivContent OESZG_WEaee261c8d8">
                <select name="oebkFilterCategory" class="OESZ OESZ_ListBox OESZG_WEaee261c8d8 OEDynTag0"><?php echo $oeIter['WEaee261c8d8.OEDynTag0.0']; ?>
                </select>
               </div>
              </div>
              <div id="WE1c9873a6ca" class="BaseDiv RNone OEWECheckBoxV2 OESK_WECheckBox2_Default" style="z-index:7">
               <div class="OESZ OESZ_DivContent OESZG_WE1c9873a6ca">
                <input type="checkbox" class="OESZ OESZ_CheckBox OESZG_WE1c9873a6ca OEDynTag0" name="oebkFilterCatgCombOn" value="Valeur du champ" />
               </div>
              </div>
              <div id="WEb55334d06c" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:8">
               <div class="OESZ OESZ_DivContent OESZG_WEb55334d06c">
                <span class="OESZ OESZ_Text OESZG_WEb55334d06c ContentBox">... ou à une&nbsp;<span style="text-decoration:underline;">combinaison</span> de catégories&nbsp;:</span>
               </div>
              </div>
              <div id="WE8dad6a4dc2" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:9">
               <div class="OESZ OESZ_DivContent OESZG_WE8dad6a4dc2">
                <span class="OESZ OESZ_Text OESZG_WE8dad6a4dc2 ContentBox">(spécifier les numéros d'ID des catégories&nbsp;séparés par "+", ex&nbsp;: "1+2+4")</span>
               </div>
              </div>
              <div id="WE26bd15ed91" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:10">
               <div class="OESZ OESZ_DivContent OESZG_WE26bd15ed91">
                <input name="oebkFilterCategoryComb" type="text" class="OESZ OESZ_TextBox OESZG_WE26bd15ed91 OEDynTag0" />
               </div>
              </div>
              <div id="WE53f55e3f3b" class="BaseDiv RWidth OEWEButton OESK_WEButton_Default" style="z-index:11">
               <div class="OESZ OESZ_DivContent OESZG_WE53f55e3f3b">
                <button class="OESZ OESZ_Button OESZG_WE53f55e3f3b OEDynTag0" type="button" name="WE53f55e3f3b">Appliquer</button>
               </div>
              </div>
             </div>
            </div><div style="position:relative" class="OESZ OESZ_PullZoneCloseTop OESZG_WE330073b496 PullZone PullZoneClose">
             <div></div>
            </div>
           </div>
          </div>
         </div>
        </div>
        <div id="WEe0830d18ca" class="BaseDiv RBoth OEWEDynIteratorPanelDBG OESK_WEDynIteratorPanelDBG_Default" style="z-index:3">
         <div class="OESZ OESZ_DivContent OESZG_WEe0830d18ca">
          <div class="OECT OECT_Content OECTAbs OEDynTag0" style="<?php echo $oei['WEe0830d18ca..OEDynTag0.style'];?>">
           <div class="OEIteratorParent OEDynTag1"><?php echo $oeIter['WEe0830d18ca.OEDynTag1.0']; ?>
           </div>
          </div>
         </div>
        </div>
        <div id="WE836c7c7100" class="BaseDiv RNone OEWELink OESK_WELink_Default" style="z-index:4">
         <div class="OESZ OESZ_DivContent OESZG_WE836c7c7100">
          <a class="OESZ OESZ_Link OESZG_WE836c7c7100 ContentBox OEDynTag0" data-cd="PageLink" href="<?php echo $oei['WE836c7c7100..OEDynTag0.href'];?>">Ajouter un article et/ou ses détails</a>
         </div>
        </div>
        <div id="WEc9a6cbc6e9" class="BaseDiv RWidth OEWEListBoxV2 OESK_WEListBox2_Default" style="z-index:6">
         <div class="OESZ OESZ_DivContent OESZG_WEc9a6cbc6e9">
          <select name="WEc9a6cbc6e9" class="OESZ OESZ_ListBox OESZG_WEc9a6cbc6e9 OEDynTag0"><?php echo $oeIter['WEc9a6cbc6e9.OEDynTag0.0']; ?></select>
         </div>
        </div>
        <div id="WE2b3d866f0a" class="BaseDiv RWidth OEWELabel OESK_WELabel_Default" style="z-index:5">
         <div class="OESZ OESZ_DivContent OESZG_WE2b3d866f0a">
          <span class="OESZ OESZ_Text OESZG_WE2b3d866f0a ContentBox OEDynTag0"><?php echo $oei['WE2b3d866f0a..OEDynTag0.html1'];?></span>
         </div>
        </div>
        <div id="WEd3680be553" class="BaseDiv RNone OEWECodeBlock OESK_WECodeBlock_Default" style="z-index:7">
         <div class="OESZ OESZ_DivContent OESZG_WEd3680be553">
          <script>
            $(function(){
              
              var $pageSelect = $('#WEc9a6cbc6e9 select'); // dropdown list of pages
          
              if ($pageSelect.find('option').length < 2) {
                // hide dropdown list if only 1 page
                $pageSelect.hide(); 
          
              } else {
                $pageSelect.change(function(){
                  
                  var page = $('#WEc9a6cbc6e9 select').val();
                  
                  var currURL = window.location.href + '';
                  var param = 'oepage1=';
                  var pos = currURL.indexOf(param);
                  var posNum = pos + param.length;
                  if (pos > 0) { // url already contains current page parameter, modify its value
                    var pos2 = currURL.indexOf('&', pos);
                    if (pos2 < 0) pos2 = currURL.length-1;
                    var currPage = (pos2 > posNum) ? currURL.substring(posNum, pos2-posNum) : 0;
                    if (currPage == page) return; // same page
                    currURL = currURL.substring(0, pos) + param + page + ((pos2 < currURL.length-1) ? currURL.substring(pos2) : '');
                  
                  } else { // add page parameter
                    var pos2 = currURL.indexOf('#');
                    if (pos2 < 0) pos2 = currURL.length;
                    var ch = (currURL.indexOf('?') > 0) ? '&' : '?';
                    currURL = currURL.substring(0, pos2) + ch + param + page; // + ((pos2 < currURL.length) ? currURL.substring(pos2) : '') // no anchor
                  }
                  
                  if (currURL != window.location) window.location =currURL; // go to chosen page
                  
                });
              }
              
            });
            
          </script>
         </div>
        </div>
        <div id="WE126e89490d" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:10">
         <div class="OESZ OESZ_DivContent OESZG_WE126e89490d">
          <div class="OECT OECT_Content OECTAbs OEDynTag0">
           <div id="WE14b01a9960" class="BaseDiv RNone OEWECodeBlock OESK_WECodeBlock_Default" style="z-index:2">
            <div class="OESZ OESZ_DivContent OESZG_WE14b01a9960">
             <a name="oebk_edit_area" id="oebk_edit_area"></a>
             
             <script>
             $(function () { 
               
               // TinyMCE editor-related actions //////////////////////////////////////////
               var $buttonTMCE = $('#WE11231a2a9d'); // hidden button
               $buttonTMCE.hide();  
               
               if (typeof tinymce != 'undefined') {
                 
                 // Replace usual Save button with another button, to do certain actions before submit:
                 var $buttonSave = $('#WE51f67d7d99'); // normal Submit button
                 $buttonTMCE.css({width: $buttonSave.css('width'), 
                                  left:  $buttonSave.css('left'),
                                  top:   $buttonSave.css('top') });
                 $buttonTMCE.find(':button').html($buttonSave.find(':button').html()); // copy button text
                 $buttonTMCE.show();$buttonTMCE.css('visibility', 'visible');
                 $buttonSave.hide();
                 
                 // Save button - apply changes:
                 $buttonTMCE.find(':button').click(function() {
                   tinymce.triggerSave();
                   $('.mce-container').remove(); // otherwise submit doesn't find textarea (depends on OE version)
                   $('#WE51f67d7d99').click(); // only now call Submit button
                 });
               }
               
             }); 
             </script>
            </div>
           </div>
           <div id="WE374c8d7316" class="BaseDiv RWidth OEWELabel OESK_WELabel_Default" style="z-index:1">
            <div class="OESZ OESZ_DivContent OESZG_WE374c8d7316">
             <span class="OESZ OESZ_Text OESZG_WE374c8d7316 ContentBox OEDynTag0" style="<?php echo $oei['WE374c8d7316..OEDynTag0.style'];?>"><?php echo $oei['WE374c8d7316..OEDynTag0.html1'];?></span>
            </div>
           </div>
           <div id="WE824281cfda" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:3">
            <div class="OESZ OESZ_DivContent OESZG_WE824281cfda">
             <span class="OESZ OESZ_Text OESZG_WE824281cfda ContentBox OEDynTag0">Saisir ou coller le code HTML correspondant au détail de cet article:<br /></span>
            </div>
           </div>
           <div id="WE59eb03b417" class="BaseDiv RBoth OEWETextAreaV2 OESK_WETextArea2_Default" style="z-index:4">
            <div class="OESZ OESZ_DivContent OESZG_WE59eb03b417">
             <textarea class="OESZ OESZ_TextArea OESZG_WE59eb03b417 OEDynTag0" name="oebkHTML" style="<?php echo $oei['WE59eb03b417..OEDynTag0.style'];?>" rows="3" cols="50"><?php echo $oei['WE59eb03b417..OEDynTag0.html1'];?></textarea>
            </div>
           </div>
           <div id="WE13c119e315" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:5">
            <div class="OESZ OESZ_DivContent OESZG_WE13c119e315">
             <input name="oebkSort" type="text" class="OESZ OESZ_TextBox OESZG_WE13c119e315 OEDynTag0" value="<?php echo $oei['WE13c119e315..OEDynTag0.value'];?>" maxlength="8" />
            </div>
           </div>
           <div id="WEbe26d49f19" class="BaseDiv RWidth OEWELabel OESK_WELabel_Default" style="z-index:6">
            <div class="OESZ OESZ_DivContent OESZG_WEbe26d49f19">
             <span class="OESZ OESZ_Text OESZG_WEbe26d49f19 ContentBox OEDynTag0">(Facultatif) Valeur de tri (l'importance ou la priorité de l'article), ex&nbsp;: "10" ou "-10"</span>
            </div>
           </div>
           <div id="WE7344e96e4c" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:7">
            <div class="OESZ OESZ_DivContent OESZG_WE7344e96e4c">
             <input name="oebkDateOffc" type="text" class="OESZ OESZ_TextBox OESZG_WE7344e96e4c OEDynTag0" value="<?php echo $oei['WE7344e96e4c..OEDynTag0.value'];?>" />
            </div>
           </div>
           <div id="WEdb38f52d95" class="BaseDiv RWidth OEWELabel OESK_WELabel_Default" style="z-index:8">
            <div class="OESZ OESZ_DivContent OESZG_WEdb38f52d95">
             <span class="OESZ OESZ_Text OESZG_WEdb38f52d95 ContentBox OEDynTag0">(Facultatif) Date officielle pour l'Article, en format "<span style="font-style:italic;">aaaa/mm/jj</span>" (ex. "2014/01/31")&nbsp;ou "<span style="font-style:italic;">aaaa/mm/jj h:m</span>" (ex.&nbsp;"2014/12/31 16:40")</span>
            </div>
           </div>
           <div id="WE5b0fb3533c" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:14">
            <div class="OESZ OESZ_DivContent OESZG_WE5b0fb3533c">
             <input name="oebkType" type="text" class="OESZ OESZ_TextBox OESZG_WE5b0fb3533c OEDynTag0" value="<?php echo $oei['WE5b0fb3533c..OEDynTag0.value'];?>" maxlength="8" />
            </div>
           </div>
           <div id="WE897303ae83" class="BaseDiv RWidth OEWELabel OESK_WELabel_Default" style="z-index:15">
            <div class="OESZ OESZ_DivContent OESZG_WE897303ae83">
             <span class="OESZ OESZ_Text OESZG_WE897303ae83 ContentBox OEDynTag0">Modifier (uniquement si nécessaire) le type / format de contenu&nbsp;: <b>0</b> - texte non-formaté, <b>1</b> - HTML libre, <b>4</b> - HTML saisi dans l'Editeur<br /></span>
            </div>
           </div>
           <div id="WE57c02c773f" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:9">
            <div class="OESZ OESZ_DivContent OESZG_WE57c02c773f">
             <span class="OESZ OESZ_Text OESZG_WE57c02c773f ContentBox OEDynTag0">Pour des raisons de sécurité, veuillez saisir le mot de passe du back-office (pas besoin de re-saisir s'il est retenu sur cet ordinateur) :<br /></span>
            </div>
           </div>
           <div id="WE4ddc12a645" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:10">
            <div class="OESZ OESZ_DivContent OESZG_WE4ddc12a645">
             <input name="oebkPW" type="password" autocomplete="off" class="OESZ OESZ_TextBox OESZG_WE4ddc12a645 OEDynTag0" style="<?php echo $oei['WE4ddc12a645..OEDynTag0.style'];?>" value="<?php echo $oei['WE4ddc12a645..OEDynTag0.value'];?>" />
            </div>
           </div>
           <div id="WEf5a4bc5dc0" class="BaseDiv RWidth OEWELabel OESK_WELabel_Default" style="z-index:13">
            <div class="OESZ OESZ_DivContent OESZG_WEf5a4bc5dc0">
             <span class="OESZ OESZ_Text OESZG_WEf5a4bc5dc0 ContentBox OEDynTag0" style="<?php echo $oei['WEf5a4bc5dc0..OEDynTag0.style'];?>"><span style="font-family:'Times New Roman', Times, serif;"><b>Mot aux webmasters</b>: ce mot de passe tout seul <b style="color: rgb(192, 0, 0);">n'est pas suffisant</b> pour assurer la protection anti-piratage; il est fortement recommandé que vous appliquez une protection fiable. Veuillez consulter le Wiki.</span><br /></span>
            </div>
           </div>
           <div id="WEd856fbce8b" class="BaseDiv RNone OEWECheckBoxV2 OESK_WECheckBox2_Default" style="z-index:17">
            <div class="OESZ OESZ_DivContent OESZG_WEd856fbce8b">
             <input type="checkbox" class="OESZ OESZ_CheckBox OESZG_WEd856fbce8b OEDynTag0" name="oebkIsDeleting" value="1" readonly="readonly" disabled="disabled" checked="checked"  />
            </div>
           </div>
           <div id="WE51f67d7d99" class="BaseDiv RWidth OEWEButton OESK_WEButton_Default" style="z-index:11">
            <div class="OESZ OESZ_DivContent OESZG_WE51f67d7d99">
             <button class="OESZ OESZ_Button OESZG_WE51f67d7d99 OEDynTag0" type="button" name="WE51f67d7d99" data-oe-target-url="<?php echo $oei['WE51f67d7d99..OEDynTag0.data-oe-target-url'];?>">Enregistrer le code HTML</button>
            </div>
           </div>
           <div id="WE11231a2a9d" class="BaseDiv RWidth OEWEButton OESK_WEButton_Default" style="z-index:12">
            <div class="OESZ OESZ_DivContent OESZG_WE11231a2a9d">
             <button class="OESZ OESZ_Button OESZG_WE11231a2a9d OEDynTag0" type="button" name="WE11231a2a9d" style="<?php echo $oei['WE11231a2a9d..OEDynTag0.style'];?>">(Uniquement visible avec l'éditeur TinyMCE)</button>
            </div>
           </div>
           <div id="WEd6e0292a26" class="BaseDiv RWidth OEWEButton OESK_WEButton_Default" style="z-index:16">
            <div class="OESZ OESZ_DivContent OESZG_WEd6e0292a26">
             <button class="OESZ OESZ_Button OESZG_WEd6e0292a26 OEDynTag0" type="button" name="WEd6e0292a26" data-oe-target-url="<?php echo $oei['WEd6e0292a26..OEDynTag0.data-oe-target-url'];?>">[X] Supprimer le détail ou l'article</button>
            </div>
           </div>
          </div>
         </div>
        </div>
        <div id="WE5457a00a44" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:13">
         <div class="OESZ OESZ_DivContent OESZG_WE5457a00a44">
          <div class="OECT OECT_Content OECTAbs OEDynTag0">
           <div id="WEfcad899fa9" class="BaseDiv RNone OEWECodeBlock OESK_WECodeBlock_Default" style="z-index:2">
            <div class="OESZ OESZ_DivContent OESZG_WEfcad899fa9">
             <a name="oebk_edit_catg" id="oebk-edit-catg"></a>
            </div>
           </div>
           <div id="WE531107901e" class="BaseDiv RWidth OEWELabel OESK_WELabel_Default" style="z-index:1">
            <div class="OESZ OESZ_DivContent OESZG_WE531107901e">
             <span class="OESZ OESZ_Text OESZG_WE531107901e ContentBox OEDynTag0" style="<?php echo $oei['WE531107901e..OEDynTag0.style'];?>"><?php echo $oei['WE531107901e..OEDynTag0.html1'];?></span>
            </div>
           </div>
           <div id="WE2243a6fa6d" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:11">
            <div class="OESZ OESZ_DivContent OESZG_WE2243a6fa6d">
             <span class="OESZ OESZ_Text OESZG_WE2243a6fa6d ContentBox">Catégories actuelles de l'article (cliquez [X] pour désassocier) :</span>
            </div>
           </div>
           <div id="WEdd6a88735a" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:3">
            <div class="OESZ OESZ_DivContent OESZG_WEdd6a88735a">
             <span class="OESZ OESZ_Text OESZG_WEdd6a88735a ContentBox">Ajouter cet article à une catégorie existante&nbsp;:</span>
            </div>
           </div>
           <div id="WEc3dd0b35e9" class="BaseDiv RBoth OEWEDynIteratorPanelDBG OESK_WEDynIteratorPanelDBG_Default" style="z-index:12">
            <div class="OESZ OESZ_DivContent OESZG_WEc3dd0b35e9">
             <div class="OECT OECT_Content OECTAbs OEDynTag0">
              <div class="OEIteratorParent OEDynTag1"><?php echo $oeIter['WEc3dd0b35e9.OEDynTag1.0']; ?>
              </div>
             </div>
            </div>
           </div>
           <div id="WE35e4550232" class="BaseDiv RWidth OEWEListBoxV2 OESK_WEListBox2_Default" style="z-index:4">
            <div class="OESZ OESZ_DivContent OESZG_WE35e4550232">
             <select name="oebkListCategories" class="OESZ OESZ_ListBox OESZG_WE35e4550232 OEDynTag0"><?php echo $oeIter['WE35e4550232.OEDynTag0.0']; ?>
             </select>
            </div>
           </div>
           <div id="WEda6aa2d9fd" class="BaseDiv RNone OEWECodeBlock OESK_WECodeBlock_Default" style="z-index:5">
            <div class="OESZ OESZ_DivContent OESZG_WEda6aa2d9fd">
             <script>
             $(function(){
             
             });
               
             </script>
            </div>
           </div>
           <div id="WE6fe2c5ea98" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:6">
            <div class="OESZ OESZ_DivContent OESZG_WE6fe2c5ea98">
             <span class="OESZ OESZ_Text OESZG_WE6fe2c5ea98 ContentBox">Ou saisir le nom d'une nouvelle catégorie&nbsp;:</span>
            </div>
           </div>
           <div id="WE3c1c35eca0" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:7">
            <div class="OESZ OESZ_DivContent OESZG_WE3c1c35eca0">
             <input name="oebkNewCategory" type="text" class="OESZ OESZ_TextBox OESZG_WE3c1c35eca0 OEDynTag0" />
            </div>
           </div>
           <div id="WE188cd4effa" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:8">
            <div class="OESZ OESZ_DivContent OESZG_WE188cd4effa">
             <span class="OESZ OESZ_Text OESZG_WE188cd4effa ContentBox OEDynTag0" style="<?php echo $oei['WE188cd4effa..OEDynTag0.style'];?>">Pour des raisons de sécurité, veuillez saisir le mot de passe du back-office:<br /></span>
            </div>
           </div>
           <div id="WEf110e1f8d0" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:9">
            <div class="OESZ OESZ_DivContent OESZG_WEf110e1f8d0">
             <input name="oebkPW" type="password" autocomplete="off" class="OESZ OESZ_TextBox OESZG_WEf110e1f8d0 OEDynTag0" style="<?php echo $oei['WEf110e1f8d0..OEDynTag0.style'];?>" value="<?php echo $oei['WEf110e1f8d0..OEDynTag0.value'];?>" />
            </div>
           </div>
           <div id="WE0fa04b9628" class="BaseDiv RWidth OEWEButton OESK_WEButton_Default" style="z-index:10">
            <div class="OESZ OESZ_DivContent OESZG_WE0fa04b9628">
             <button class="OESZ OESZ_Button OESZG_WE0fa04b9628 OEDynTag0" type="button" name="WE0fa04b9628" data-oe-target-url="<?php echo $oei['WE0fa04b9628..OEDynTag0.data-oe-target-url'];?>">Attribuer une catégorie</button>
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