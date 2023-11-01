<?php
	require_once "user-login(connect)-v1(var).php";
	include_once "../WEFiles/Server/DB/OEDB.php";
?><!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="es">
 <head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <meta name="generator" content="openElement (1.57.9)" />
  <link id="openElement" rel="stylesheet" type="text/css" href="../WEFiles/Css/v02/openElement.css?v=63629943612" />
  <link id="OEBase" rel="stylesheet" type="text/css" href="user-login(connect)-v1.css?v=50491126800" />
  <link rel="stylesheet" type="text/css" href="../WEFiles/Css/opentip.css?v=63614056866" />
  <!--[if lte IE 7]>
  <link rel="stylesheet" type="text/css" href="../WEFiles/Css/ie7.css?v=63614056866" />
  <![endif]-->
  <script type="text/javascript">
   var WEInfoPage={PHPVersion:"phpOK",OEVersion:"1-57-9",PagePath:"oe-users/user-login(connect)-v1",Culture:"ES",LanguageCode:"ES",RelativePath:"../",RenderMode:"Export",PageAssociatePath:"oe-users/user-login(connect)-v1",EditorTexts:null}
  </script>
  <script type="text/javascript" src="../WEFiles/Client/jQuery/1.10.2.js?v=63614056866"></script>
  <script type="text/javascript" src="../WEFiles/Client/jQuery/migrate.js?v=63614056866"></script>
  <script type="text/javascript" src="../WEFiles/Client/Common/oe.min.js?v=63629943594"></script>
  <script type="text/javascript" src="user-login(connect)-v1(var).js?v=50491126800"></script>
  <script type="text/javascript" src="../WEFiles/Client/jQuery/Plugins/jquery.form.js?v=63629943610"></script>
  <script type="text/javascript" src="../WEFiles/Client/opentip-jquery.min.js?v=63629943610"></script>
  <script type="text/javascript" src="../WEFiles/Client/WESendForm-v210.js?v=63629943602"></script>
  <script type="text/javascript">
   var WEEdValidators={WEaf6b7f2cde:[{MsgError:"Veuillez inscrire votre message d'erreur.",Expression:".+"}]}
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
     <div id="WE98a341cd52" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:1">
      <div class="OESZ OESZ_DivContent OESZG_WE98a341cd52">
       <div class="OECT OECT_Content OECTAbs OEDynTag0">
        <div id="WE72eecaf410" class="BaseDiv RWidth OEWELabel OESK_WELabel_Default" style="z-index:1">
         <div class="OESZ OESZ_DivContent OESZG_WE72eecaf410">
          <span class="OESZ OESZ_Text OESZG_WE72eecaf410 ContentBox OEDynTag0"><?php echo $oei['WE72eecaf410..OEDynTag0.html1'];?></span>
         </div>
        </div>
        <div id="WE337e1a8570" class="BaseDiv RWidth OEWELabel OESK_WELabel_Default" style="z-index:2">
         <div class="OESZ OESZ_DivContent OESZG_WE337e1a8570">
          <span class="OESZ OESZ_Text OESZG_WE337e1a8570 ContentBox OEDynTag0"><?php echo $oei['WE337e1a8570..OEDynTag0.html1'];?></span>
         </div>
        </div>
        <div id="WE82c80de238" class="BaseDiv RNone OEWECodeBlock OESK_WECodeBlock_Default" style="z-index:3">
         <div class="OESZ OESZ_DivContent OESZG_WE82c80de238">
          <script>
          
            // this script sets tab order: 
            // name input -> PW input -> button -> link Create account -> link Forgot password
            
            // also, this script imitates button click on pressing Enter
          
          $(function(){
            
            
            $('#WEaf6b7f2cde :input').attr('tabindex', '1');
            $('#WEd3e3c577d4 :input').attr('tabindex', '2');
            $('#WE0448e964bd :button').attr('tabindex', '3');
            $('#WE96d3f4cb62 a').attr('tabindex', '4');
            $('#WE6318fb1ba1 a').attr('tabindex', '5');
            
            // Enter on inputs submits form
            $(':input').keypress(function(e) {
                  if(e.which == 13) {
                    $(this).blur();
                    $('#WE0448e964bd :button').focus().click();
                  }
              });
          });
          </script>
         </div>
        </div>
        <div id="WEe3961df3a6" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:4">
         <div class="OESZ OESZ_DivContent OESZG_WEe3961df3a6">
          <span class="OESZ OESZ_Text OESZG_WEe3961df3a6 ContentBox OEDynTag0"><?php echo $oei['WEe3961df3a6..OEDynTag0.html1'];?></span>
         </div>
        </div>
        <div id="WEaf6b7f2cde" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:5">
         <div class="OESZ OESZ_DivContent OESZG_WEaf6b7f2cde">
          <input name="oelName" type="text" class="OESZ OESZ_TextBox OESZG_WEaf6b7f2cde OEDynTag0" value="<?php echo $oei['WEaf6b7f2cde..OEDynTag0.value'];?>" />
         </div>
        </div>
        <div id="WE96d3f4cb62" class="BaseDiv RNone OEWELink OESK_WELink_Default" style="z-index:6">
         <div class="OESZ OESZ_DivContent OESZG_WE96d3f4cb62">
          <a class="OESZ OESZ_Link OESZG_WE96d3f4cb62 ContentBox OEDynTag0" data-cd="PageLink" href="<?php echo $oei['WE96d3f4cb62..OEDynTag0.href'];?>">Je n'ai pas encore de compte</a>
         </div>
        </div>
        <div id="WE6502476bef" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:7">
         <div class="OESZ OESZ_DivContent OESZG_WE6502476bef">
          <span class="OESZ OESZ_Text OESZG_WE6502476bef ContentBox OEDynTag0"><?php echo $oei['WE6502476bef..OEDynTag0.html1'];?></span>
         </div>
        </div>
        <div id="WEd3e3c577d4" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:8">
         <div class="OESZ OESZ_DivContent OESZG_WEd3e3c577d4">
          <input name="oelPW" type="password" class="OESZ OESZ_TextBox OESZG_WEd3e3c577d4 OEDynTag0" value="<?php echo $oei['WEd3e3c577d4..OEDynTag0.value'];?>" />
         </div>
        </div>
        <div id="WE6318fb1ba1" class="BaseDiv RNone OEWELink OESK_WELink_Default" style="z-index:9">
         <div class="OESZ OESZ_DivContent OESZG_WE6318fb1ba1">
          <a class="OESZ OESZ_Link OESZG_WE6318fb1ba1 ContentBox OEDynTag0" data-cd="PageLink" href="<?php echo $oei['WE6318fb1ba1..OEDynTag0.href'];?>" style="<?php echo $oei['WE6318fb1ba1..OEDynTag0.style'];?>"><?php echo $oei['WE6318fb1ba1..OEDynTag0.html1'];?></a>
         </div>
        </div>
        <div id="WE0448e964bd" class="BaseDiv RWidth OEWEButton OESK_WEButton_Default" style="z-index:10">
         <div class="OESZ OESZ_DivContent OESZG_WE0448e964bd">
          <button class="OESZ OESZ_Button OESZG_WE0448e964bd OEDynTag0" type="button" name="WE0448e964bd"><?php echo $oei['WE0448e964bd..OEDynTag0.html1'];?></button>
         </div>
        </div>
        <div id="WEa439cf03e3" class="BaseDiv RNone OEWECheckBoxV2 OESK_WECheckBox2_Default" style="z-index:11">
         <div class="OESZ OESZ_DivContent OESZG_WEa439cf03e3">
          <input type="checkbox" class="OESZ OESZ_CheckBox OESZG_WEa439cf03e3 OEDynTag0" style="<?php echo $oei['WEa439cf03e3..OEDynTag0.style'];?>" name="oelRememberMe" value="oelRememberMe" />
         </div>
        </div>
        <div id="WE843bc90eab" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:12">
         <div class="OESZ OESZ_DivContent OESZG_WE843bc90eab">
          <span class="OESZ OESZ_Text OESZG_WE843bc90eab ContentBox OEDynTag0" style="<?php echo $oei['WE843bc90eab..OEDynTag0.style'];?>">Garder ma session ouverte</span>
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