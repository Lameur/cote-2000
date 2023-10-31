<?php
	require_once "back-office-content(var).php";
	include_once "WEFiles/Server/DB/OEDB.php";
?><!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en">
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
   var WEInfoPage={PHPVersion:"phpOK",OEVersion:"1-57-9",PagePath:"back-office-content",Culture:"EN",LanguageCode:"EN",RelativePath:"",RenderMode:"Export",PageAssociatePath:"back-office-content",EditorTexts:null}
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
          <span class="OESZ OESZ_Text OESZG_WE32749f9926 ContentBox">ALL ITEMS</span>
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
             <span class="OESZ OESZ_Text OESZG_WEd12e4d00d9 ContentBox OEDynTag0">No items yet</span>
            </div>
           </div>
          </div>
         </div>
        </div>
        <div id="WEa29415f08b" class="BaseDiv RBoth OEWEText OESK_WEText_Default" style="z-index:12">
         <div class="OESZ OESZ_DivContent OESZG_WEa29415f08b">
          <span class="ContentBox"><span lang="EN-US"> <p style="margin-top: 5pt; margin-right: 0cm; margin-bottom: 5pt; margin-left: 0cm; line-height: normal; " /><p style="margin-top: 5pt; margin-right: 0cm; margin-bottom: 5pt; margin-left: 0cm; line-height: normal; "> </p><p style="margin-top:5.0pt;margin-right:0cm;margin-bottom:5.0pt; margin-left:0cm;line-height:normal;"><span style="font-size:13px;"><b><span lang="EN-US">Note to webmasters</span></b><span lang="EN-US"> (delete after reading): </span></span></p> <p style="margin-top:5.0pt;margin-right:0cm;margin-bottom:5.0pt; margin-left:0cm;line-height:normal;"><span style="font-size:13px;"><b><span lang="EN-US" style="color:rgb(192, 0, 0);">Please consult the Wiki</span></b> <span lang="EN-US">(double-click "Wiki&nbsp;Help" in the Packs list on the right) for more detailed instructions.&nbsp;</span></span></p> <p style="margin-top:5.0pt;margin-right:0cm;margin-bottom:5.0pt; margin-left:0cm;line-height:normal;"><span lang="EN-US" style="font-size:13px;">The description below only covers the most basic scenario to get you started.</span></p> <p style="margin-top:5.0pt;margin-right:0cm;margin-bottom:5.0pt; margin-left:0cm;line-height:normal;"><span style="font-size:13px;"><span lang="EN-US">1: </span><b><span lang="EN-US">Preview</span></b><span lang="EN-US"> (F12) this administration page in a browser, to initialize the system.</span></span></p> <p style="margin-top:5.0pt;margin-right:0cm;margin-bottom:5.0pt; margin-left:0cm;line-height:normal;"><span style="font-size:13px;"><span lang="EN-US">2: Place Pack(s) 50 onto each website page that you want to contain one or more &nbsp;"items" (dynamic content). </span></span></p> <p style="margin-top:5.0pt;margin-right:0cm;margin-bottom:5.0pt; margin-left:0cm;line-height:normal;"><span style="font-size:13px;"><span lang="EN-US">3: <b>Preview</b> (F12) <b>each of these pages</b> in a browser to automatically add the items to the database. </span></span></p> <p style="margin-top:5.0pt;margin-right:0cm;margin-bottom:5.0pt; margin-left:0cm;line-height:normal;"><span style="font-size:13px;"><span lang="EN-US">4: You can now test content editing using the administration page, by opening it in a browser (F12).</span></span></p> <p style="margin-top:5.0pt;margin-right:0cm;margin-bottom:5.0pt; margin-left:0cm;line-height:normal;"><span style="font-size:13px;"><b><span lang="EN-US">Note</span></b><span lang="EN-US">: The data entered locally is not transferred when the site is published online. To copy the data from offline to online, please follow the procedure described in the Wiki.</span></span></p> <p style="margin-top:5.0pt;margin-right:0cm;margin-bottom:5.0pt; margin-left:0cm;line-height:normal;"><span lang="EN-US" style="font-size:13px;">&nbsp;</span></p> <p style="margin-bottom:0cm;margin-bottom:.0001pt;line-height: normal;"><span style="font-size:13px;"><span lang="EN-US">Once you've published the website, open the administration page in a browser, then each page containing items (see steps 1 and 3). You can now edit the content online using the administration page. There is <b>no need to use openElement to update the content, no need to upload the project again</b>. </span></span></p> <p style="margin-top:5.0pt;margin-right:0cm;margin-bottom:5.0pt; margin-left:0cm;line-height:normal;"><b><span lang="EN-US" style="font-size:13px;">&nbsp;</span></b></p> <p><span lang="EN-US" style="line-height:115%;font-size:13px;"> <b>IMPORTANT:</b> Before publishing the site online, <b>protect this page</b> - the current security password is insufficient. Use "UserSpace" Packs, or openElement's built-in securing of pages (right-click this page in the Site Explorer on the left, then choose “Secure the page”).</span></p> <br /></span></span>
         </div>
        </div>
        <div id="WEc197bce149" class="BaseDiv RWidth OEWELink OESK_WELink_Default" style="z-index:11">
         <div class="OESZ OESZ_DivContent OESZG_WEc197bce149">
          <a class="OESZ OESZ_Link OESZG_WEc197bce149 ContentBox OEDynTag0" data-cd="PageLink" href="<?php echo $oei['WEc197bce149..OEDynTag0.href'];?>"><?php echo $oei['WEc197bce149..OEDynTag0.html1'];?></a>
         </div>
        </div>
        <div id="WEaaee08d9bb" class="BaseDiv RWidth OEWELink OESK_WELink_Default" style="z-index:8">
         <div class="OESZ OESZ_DivContent OESZG_WEaaee08d9bb">
          <a class="OESZ OESZ_Link OESZG_WEaaee08d9bb ContentBox OEDynTag0" data-cd="PageLink" href="#">Show/hide Sort and Filter options</a>
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
                <span class="OESZ OESZ_Text OESZG_WEe570df0d08 ContentBox">Sort by:</span>
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
                <span class="OESZ OESZ_Text OESZG_WEb9febf6547 ContentBox">Show only if name begins with:</span>
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
                <span class="OESZ OESZ_Text OESZG_WE7188ae38d7 ContentBox">Belongs to a category:</span>
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
                <span class="OESZ OESZ_Text OESZG_WEb55334d06c ContentBox">... or to a&nbsp;<span style="text-decoration:underline;">combination</span> of categories:</span>
               </div>
              </div>
              <div id="WE8dad6a4dc2" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:9">
               <div class="OESZ OESZ_DivContent OESZG_WE8dad6a4dc2">
                <span class="OESZ OESZ_Text OESZG_WE8dad6a4dc2 ContentBox">(specify ID# of categories&nbsp;separated by "+" e.g. "1+2+4")</span>
               </div>
              </div>
              <div id="WE26bd15ed91" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:10">
               <div class="OESZ OESZ_DivContent OESZG_WE26bd15ed91">
                <input name="oebkFilterCategoryComb" type="text" class="OESZ OESZ_TextBox OESZG_WE26bd15ed91 OEDynTag0" />
               </div>
              </div>
              <div id="WE53f55e3f3b" class="BaseDiv RWidth OEWEButton OESK_WEButton_Default" style="z-index:11">
               <div class="OESZ OESZ_DivContent OESZG_WE53f55e3f3b">
                <button class="OESZ OESZ_Button OESZG_WE53f55e3f3b OEDynTag0" type="button" name="WE53f55e3f3b">Apply</button>
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
          <a class="OESZ OESZ_Link OESZG_WE836c7c7100 ContentBox OEDynTag0" data-cd="PageLink" href="<?php echo $oei['WE836c7c7100..OEDynTag0.href'];?>">Add an item and/or its detail</a>
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
             <span class="OESZ OESZ_Text OESZG_WE824281cfda ContentBox OEDynTag0">Type or paste HTML code corresponding to the detail of this item:<br /></span>
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
             <span class="OESZ OESZ_Text OESZG_WEbe26d49f19 ContentBox OEDynTag0">(Optional) Sorting value (importance or priority of the item) e.g. "10" or "-10"</span>
            </div>
           </div>
           <div id="WE7344e96e4c" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:7">
            <div class="OESZ OESZ_DivContent OESZG_WE7344e96e4c">
             <input name="oebkDateOffc" type="text" class="OESZ OESZ_TextBox OESZG_WE7344e96e4c OEDynTag0" value="<?php echo $oei['WE7344e96e4c..OEDynTag0.value'];?>" />
            </div>
           </div>
           <div id="WEdb38f52d95" class="BaseDiv RWidth OEWELabel OESK_WELabel_Default" style="z-index:8">
            <div class="OESZ OESZ_DivContent OESZG_WEdb38f52d95">
             <span class="OESZ OESZ_Text OESZG_WEdb38f52d95 ContentBox OEDynTag0">(Optional) Official date for the Item, in format "<span style="font-style:italic;">yyyy/mm/dd</span>" (e.g. "2014/01/31")&nbsp;or "<span style="font-style:italic;">yyyy/mm/dd h:m</span>" (e.g.&nbsp;"2014/12/31 16:40")</span>
            </div>
           </div>
           <div id="WE5b0fb3533c" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:14">
            <div class="OESZ OESZ_DivContent OESZG_WE5b0fb3533c">
             <input name="oebkType" type="text" class="OESZ OESZ_TextBox OESZG_WE5b0fb3533c OEDynTag0" value="<?php echo $oei['WE5b0fb3533c..OEDynTag0.value'];?>" maxlength="8" />
            </div>
           </div>
           <div id="WE897303ae83" class="BaseDiv RWidth OEWELabel OESK_WELabel_Default" style="z-index:15">
            <div class="OESZ OESZ_DivContent OESZG_WE897303ae83">
             <span class="OESZ OESZ_Text OESZG_WE897303ae83 ContentBox OEDynTag0">Modify (only if necessary) the content type / format: <b>0</b> - unformatted plain text, <b>1</b> - free HTML, <b>4</b> - Editor-managed HTML<br /></span>
            </div>
           </div>
           <div id="WE57c02c773f" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:9">
            <div class="OESZ OESZ_DivContent OESZG_WE57c02c773f">
             <span class="OESZ OESZ_Text OESZG_WE57c02c773f ContentBox OEDynTag0">For security reasons, enter the backoffice password (sometimes no need to re-enter if memorized on this computer):<br /></span>
            </div>
           </div>
           <div id="WE4ddc12a645" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:10">
            <div class="OESZ OESZ_DivContent OESZG_WE4ddc12a645">
             <input name="oebkPW" type="password" autocomplete="off" class="OESZ OESZ_TextBox OESZG_WE4ddc12a645 OEDynTag0" style="<?php echo $oei['WE4ddc12a645..OEDynTag0.style'];?>" value="<?php echo $oei['WE4ddc12a645..OEDynTag0.value'];?>" />
            </div>
           </div>
           <div id="WEf5a4bc5dc0" class="BaseDiv RWidth OEWELabel OESK_WELabel_Default" style="z-index:13">
            <div class="OESZ OESZ_DivContent OESZG_WEf5a4bc5dc0">
             <span class="OESZ OESZ_Text OESZG_WEf5a4bc5dc0 ContentBox OEDynTag0" style="<?php echo $oei['WEf5a4bc5dc0..OEDynTag0.style'];?>"><span style="font-family:'Times New Roman', Times, serif;"><b>Note to webmaster</b>: this password by itself is <b style="color: rgb(192, 0, 0);">not enough</b> to guarantee protection against unwanted access; it is strongly recommended that you protect the page. Please consult the Wiki.</span><br /></span>
            </div>
           </div>
           <div id="WEd856fbce8b" class="BaseDiv RNone OEWECheckBoxV2 OESK_WECheckBox2_Default" style="z-index:17">
            <div class="OESZ OESZ_DivContent OESZG_WEd856fbce8b">
             <input type="checkbox" class="OESZ OESZ_CheckBox OESZG_WEd856fbce8b OEDynTag0" name="oebkIsDeleting" value="1" readonly="readonly" disabled="disabled" checked="checked"  />
            </div>
           </div>
           <div id="WE51f67d7d99" class="BaseDiv RWidth OEWEButton OESK_WEButton_Default" style="z-index:11">
            <div class="OESZ OESZ_DivContent OESZG_WE51f67d7d99">
             <button class="OESZ OESZ_Button OESZG_WE51f67d7d99 OEDynTag0" type="button" name="WE51f67d7d99" data-oe-target-url="<?php echo $oei['WE51f67d7d99..OEDynTag0.data-oe-target-url'];?>">Save HTML code</button>
            </div>
           </div>
           <div id="WE11231a2a9d" class="BaseDiv RWidth OEWEButton OESK_WEButton_Default" style="z-index:12">
            <div class="OESZ OESZ_DivContent OESZG_WE11231a2a9d">
             <button class="OESZ OESZ_Button OESZG_WE11231a2a9d OEDynTag0" type="button" name="WE11231a2a9d" style="<?php echo $oei['WE11231a2a9d..OEDynTag0.style'];?>">(Button only visible with TinyMCE editor)</button>
            </div>
           </div>
           <div id="WEd6e0292a26" class="BaseDiv RWidth OEWEButton OESK_WEButton_Default" style="z-index:16">
            <div class="OESZ OESZ_DivContent OESZG_WEd6e0292a26">
             <button class="OESZ OESZ_Button OESZG_WEd6e0292a26 OEDynTag0" type="button" name="WEd6e0292a26" data-oe-target-url="<?php echo $oei['WEd6e0292a26..OEDynTag0.data-oe-target-url'];?>">[X] Delete detail or item</button>
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
             <span class="OESZ OESZ_Text OESZG_WE2243a6fa6d ContentBox">Item's current categories (click [X] to disassociate):</span>
            </div>
           </div>
           <div id="WEdd6a88735a" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:3">
            <div class="OESZ OESZ_DivContent OESZG_WEdd6a88735a">
             <span class="OESZ OESZ_Text OESZG_WEdd6a88735a ContentBox">Add this item to an existing category:</span>
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
             <span class="OESZ OESZ_Text OESZG_WE6fe2c5ea98 ContentBox">Or type a name of a new category:</span>
            </div>
           </div>
           <div id="WE3c1c35eca0" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:7">
            <div class="OESZ OESZ_DivContent OESZG_WE3c1c35eca0">
             <input name="oebkNewCategory" type="text" class="OESZ OESZ_TextBox OESZG_WE3c1c35eca0 OEDynTag0" />
            </div>
           </div>
           <div id="WE188cd4effa" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:8">
            <div class="OESZ OESZ_DivContent OESZG_WE188cd4effa">
             <span class="OESZ OESZ_Text OESZG_WE188cd4effa ContentBox OEDynTag0" style="<?php echo $oei['WE188cd4effa..OEDynTag0.style'];?>">For security reasons, enter the backoffice password:<br /></span>
            </div>
           </div>
           <div id="WEf110e1f8d0" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:9">
            <div class="OESZ OESZ_DivContent OESZG_WEf110e1f8d0">
             <input name="oebkPW" type="password" autocomplete="off" class="OESZ OESZ_TextBox OESZG_WEf110e1f8d0 OEDynTag0" style="<?php echo $oei['WEf110e1f8d0..OEDynTag0.style'];?>" value="<?php echo $oei['WEf110e1f8d0..OEDynTag0.value'];?>" />
            </div>
           </div>
           <div id="WE0fa04b9628" class="BaseDiv RWidth OEWEButton OESK_WEButton_Default" style="z-index:10">
            <div class="OESZ OESZ_DivContent OESZG_WE0fa04b9628">
             <button class="OESZ OESZ_Button OESZG_WE0fa04b9628 OEDynTag0" type="button" name="WE0fa04b9628" data-oe-target-url="<?php echo $oei['WE0fa04b9628..OEDynTag0.data-oe-target-url'];?>">Assign to category</button>
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