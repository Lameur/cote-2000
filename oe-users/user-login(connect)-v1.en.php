<?php
	require_once "user-login(connect)-v1(var).php";
	include_once "../WEFiles/Server/DB/OEDB.php";
?><!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en">
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
   var WEInfoPage={PHPVersion:"phpOK",OEVersion:"1-57-9",PagePath:"oe-users/user-login(connect)-v1",Culture:"EN",LanguageCode:"EN",RelativePath:"../",RenderMode:"Export",PageAssociatePath:"oe-users/user-login(connect)-v1",EditorTexts:null}
  </script>
  <script type="text/javascript" src="../WEFiles/Client/jQuery/1.10.2.js?v=63614056866"></script>
  <script type="text/javascript" src="../WEFiles/Client/jQuery/migrate.js?v=63614056866"></script>
  <script type="text/javascript" src="../WEFiles/Client/Common/oe.min.js?v=63629943594"></script>
  <script type="text/javascript" src="user-login(connect)-v1(var).js?v=50491126800"></script>
  <script type="text/javascript" src="../WEFiles/Client/jQuery/Plugins/jquery.form.js?v=63629943610"></script>
  <script type="text/javascript" src="../WEFiles/Client/opentip-jquery.min.js?v=63629943610"></script>
  <script type="text/javascript" src="../WEFiles/Client/WESendForm-v210.js?v=63629943602"></script>
  <script type="text/javascript">
   var WEEdValidators={WE133effcf96:[{MsgError:"Veuillez inscrire votre message d'erreur.",Expression:".+"}]}
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
     <div id="WE4cb311fd15" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:1">
      <div class="OESZ OESZ_DivContent OESZG_WE4cb311fd15">
       <div class="OECT OECT_Content OECTAbs OEDynTag0">
        <div id="WE018e52069c" class="BaseDiv RWidth OEWELabel OESK_WELabel_Default" style="z-index:1">
         <div class="OESZ OESZ_DivContent OESZG_WE018e52069c">
          <span class="OESZ OESZ_Text OESZG_WE018e52069c ContentBox OEDynTag0"><?php echo $oei['WE018e52069c..OEDynTag0.html1'];?></span>
         </div>
        </div>
        <div id="WE50d6dcb68e" class="BaseDiv RWidth OEWELabel OESK_WELabel_Default OECenterAH" style="z-index:13">
         <div class="OESZ OESZ_DivContent OESZG_WE50d6dcb68e">
          <span class="OESZ OESZ_Text OESZG_WE50d6dcb68e ContentBox"><b>NOTE TO WEBMASTER</b> (delete after reading): this pack is not to be placed onto the Home Page (index.htm/php). If the homepage (or any other page) needs user to be logged in, place the pack "<span style="font-style:italic;">50 - Protect Page"</span>&nbsp;on it.&nbsp;</span>
         </div>
        </div>
        <div id="WE849c8dccb1" class="BaseDiv RWidth OEWELabel OESK_WELabel_Default" style="z-index:2">
         <div class="OESZ OESZ_DivContent OESZG_WE849c8dccb1">
          <span class="OESZ OESZ_Text OESZG_WE849c8dccb1 ContentBox OEDynTag0"><?php echo $oei['WE849c8dccb1..OEDynTag0.html1'];?></span>
         </div>
        </div>
        <div id="WE5583246a56" class="BaseDiv RNone OEWECodeBlock OESK_WECodeBlock_Default" style="z-index:3">
         <div class="OESZ OESZ_DivContent OESZG_WE5583246a56">
          <script>
          
            // this script sets tab order: 
            // name input -> PW input -> button -> link Create account -> link Forgot password
            
            // also, this script imitates button click on pressing Enter
          
          $(function(){
            
            
            $('#WE133effcf96 :input').attr('tabindex', '1');
            $('#WEc4d7842ae4 :input').attr('tabindex', '2');
            $('#WEe61b9d2299 :button').attr('tabindex', '3');
            $('#WEddff655e9d a').attr('tabindex', '4');
            $('#WE98d17253ed a').attr('tabindex', '5');
            
            // Enter on inputs submits form
            $(':input').keypress(function(e) {
                  if(e.which == 13) {
                    $(this).blur();
                    $('#WEe61b9d2299 :button').focus().click();
                  }
              });
          });
          </script>
         </div>
        </div>
        <div id="WEf21e7fa42e" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:4">
         <div class="OESZ OESZ_DivContent OESZG_WEf21e7fa42e">
          <span class="OESZ OESZ_Text OESZG_WEf21e7fa42e ContentBox OEDynTag0"><?php echo $oei['WEf21e7fa42e..OEDynTag0.html1'];?></span>
         </div>
        </div>
        <div id="WE133effcf96" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:5">
         <div class="OESZ OESZ_DivContent OESZG_WE133effcf96">
          <input name="oelName" type="text" class="OESZ OESZ_TextBox OESZG_WE133effcf96 OEDynTag0" value="<?php echo $oei['WE133effcf96..OEDynTag0.value'];?>" />
         </div>
        </div>
        <div id="WEddff655e9d" class="BaseDiv RNone OEWELink OESK_WELink_Default" style="z-index:6">
         <div class="OESZ OESZ_DivContent OESZG_WEddff655e9d">
          <a class="OESZ OESZ_Link OESZG_WEddff655e9d ContentBox OEDynTag0" data-cd="PageLink" href="<?php echo $oei['WEddff655e9d..OEDynTag0.href'];?>">I don't have an account yet</a>
         </div>
        </div>
        <div id="WEaa6eb7dd0a" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:7">
         <div class="OESZ OESZ_DivContent OESZG_WEaa6eb7dd0a">
          <span class="OESZ OESZ_Text OESZG_WEaa6eb7dd0a ContentBox OEDynTag0"><?php echo $oei['WEaa6eb7dd0a..OEDynTag0.html1'];?></span>
         </div>
        </div>
        <div id="WEc4d7842ae4" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:8">
         <div class="OESZ OESZ_DivContent OESZG_WEc4d7842ae4">
          <input name="oelPW" type="password" class="OESZ OESZ_TextBox OESZG_WEc4d7842ae4 OEDynTag0" value="<?php echo $oei['WEc4d7842ae4..OEDynTag0.value'];?>" />
         </div>
        </div>
        <div id="WE98d17253ed" class="BaseDiv RNone OEWELink OESK_WELink_Default" style="z-index:9">
         <div class="OESZ OESZ_DivContent OESZG_WE98d17253ed">
          <a class="OESZ OESZ_Link OESZG_WE98d17253ed ContentBox OEDynTag0" data-cd="PageLink" href="<?php echo $oei['WE98d17253ed..OEDynTag0.href'];?>" style="<?php echo $oei['WE98d17253ed..OEDynTag0.style'];?>"><?php echo $oei['WE98d17253ed..OEDynTag0.html1'];?></a>
         </div>
        </div>
        <div id="WEe61b9d2299" class="BaseDiv RWidth OEWEButton OESK_WEButton_Default" style="z-index:10">
         <div class="OESZ OESZ_DivContent OESZG_WEe61b9d2299">
          <button class="OESZ OESZ_Button OESZG_WEe61b9d2299 OEDynTag0" type="button" name="WEe61b9d2299"><?php echo $oei['WEe61b9d2299..OEDynTag0.html1'];?></button>
         </div>
        </div>
        <div id="WEa7dfe1b778" class="BaseDiv RNone OEWECheckBoxV2 OESK_WECheckBox2_Default" style="z-index:11">
         <div class="OESZ OESZ_DivContent OESZG_WEa7dfe1b778">
          <input type="checkbox" class="OESZ OESZ_CheckBox OESZG_WEa7dfe1b778 OEDynTag0" style="<?php echo $oei['WEa7dfe1b778..OEDynTag0.style'];?>" name="oelRememberMe" value="oelRememberMe" />
         </div>
        </div>
        <div id="WE8b8e402a10" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:12">
         <div class="OESZ OESZ_DivContent OESZG_WE8b8e402a10">
          <span class="OESZ OESZ_Text OESZG_WE8b8e402a10 ContentBox OEDynTag0" style="<?php echo $oei['WE8b8e402a10..OEDynTag0.style'];?>">Remember me on this computer</span>
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