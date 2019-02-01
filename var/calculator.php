<!DOCTYPE html>
<html>
<?php
$login_code="log in";
session_start();
if(!isset($_SESSION['login_flag']))
{
	$_SESSION['login_flag']=false;
}
if($_SESSION['login_flag']==true)
{
	$login_code="log out";
}
else
{
	$login_code="Log in";
}
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BEX</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/yeti/bootstrap.min.css" rel="stylesheet" integrity="sha384-HzUaiJdCTIY/RL2vDPRGdEQHHahjzwoJJzGUkYjHVzTwXFQ2QN/nVgX7tzoMW3Ov" crossorigin="anonymous">
</head>
<body bgcolor="#E6E6FA">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header"><a class="navbar-brand navbar-link" href="#">072 BEX </a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav">
                    <li class="active" role="presentation"><a href="#">Home</a></li>
                    <li class="active" role="presentation"><a href="bex/event.php">Events </a></li>
                    <li class="active" role="presentation"><a href="login.html"><?php echo $login_code ?> </a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="jumbotron">
<font color="green">
            <h1><strong> Welcome To BEX Page </strong> </h1>

</font>
<?php
 $handle = fopen("counter.txt", "r");
 if(!$handle)
 {
	 echo "could not open the file" ;
 }
 else
 { $counter = ( int ) fread ($handle,20) ;
 fclose ($handle) ;
 $counter++;
 echo" visits:  <strong> $counter </strong>  " ;
 $handle = fopen("counter.txt", "w" ) ;
 fwrite($handle,$counter) ;
 fclose ($handle) ; }
 ?>
<font color="red">
            <?php
$txt1=date("Y/m/d");
$txt2=date("d");
$togo=-$txt2+11;
//echo "<h3><strong> </strong>$REMOTE_ADDR Have great holidays and  Happy Dashain!!</h3>";
?>
</font>
<style>
p {
  text-align: left;
  font-size: 60px;
}
</style>
</head>
<body>
<br>
<p id="demo"></p>
<br>

<br>


            <p></p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Subject </th>
                            <th>Syllabus </th>
                            <th>Tutorials </th>

                        </tr>
                    </thead>
                    <tbody>



                        <tr>
                            <td>Signal Analysis</td>
                            <td><a href="SignalAnalysis.txt">Click here</a></td>
                            <td><a href=" https://drive.google.com/drive/folders/1v-lLoNrR33lStsWNgk1498VS1htzyeE3">Click Here</a></td>

                        </tr>
<tr>
                            <td>Propagation and antenna</td>
                            <td><a href="PropagationAntenna.txt">Click here</a></td>
                            <td><a href="https://drive.google.com/drive/folders/1xT2BhSNgStIHQkPaZtdDlbAoPY4ofO-L">Click Here</a></td>

                        </tr>
<tr>
                            <td>Communication System-I</td>
                            <td><a href="Communication-I.txt">Click here</a></td>
                            <td><a href="https://drive.google.com/drive/folders/1KHOdVNFsFvj7SuL9RF7n1lW-HQ_pu1qN">Click Here</a></td>

                        </tr><tr>
                            <td>Computer Network</td>
                            <td><a href="ComputerNetwork.txt">Click here</a></td>
                            <td> <a href="https://drive.google.com/drive/folders/1kATYaTvFpebrY0jamfSeLFqpYGqjr_0Y">Click Here</a></td>

                        </tr><tr>
                            <td>Engineering Economics</td>
                            <td><a href="economics.txt">Click here</a></td>
                            <td><a href="https://drive.google.com/drive/folders/1uQM8qIdgq4Ti4mRm9iVtE-OQa91YFtVr"
                            >Click Here</a></td>

                        </tr><tr>
                            <td>Embedded System</td>
                            <td><a href="embedded.txt">Click here</a></td>
                            <td><a href="https://drive.google.com/drive/u/2/folders/1e7SKQeQ5WNv3CJEwKKCGYTeK674g7g7X">Click Here</a></td>
                      </tr>






                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<br>
<strong>SCIENTIFIC CALCULATOR</strong>

<!--
TERMS OF USE
BY USING THE FOLLOWING CODE, YOU AGREED THAT:
1. THE MATERIALS ARE PROVIDED "AS IS" AND WITHOUT WARRANTIES OF ANY KIND.
2. DO NOT CHANGE ANY OF THE CODE
3. DO NOT REMOVE THE TEXT OF "powered by calculator.net"
4. COPYRIGHT BELONGS TO calculator.net
5. DO NOT REMOVE THE TERMS OF USE
-->
<!--BEGIN OF SCIENTIFIC CALCULATOR CODE-->
<script>
/*****************************************
(C) http://www.calculator.net all right reserved.
*****************************************/
function gObj(obj) {var theObj;if(document.all){if(typeof obj=="string"){return document.all(obj);}else{return obj.style;}}if(document.getElementById){if(typeof obj=="string"){return document.getElementById(obj);}else{return obj.style;}}return null;}function trimAll(sString){while (sString.substring(0,1) == ' '){sString = sString.substring(1, sString.length);}while (sString.substring(sString.length-1, sString.length) == ' '){sString = sString.substring(0,sString.length-1);} return sString;} function showDebugInfo(){}function r(A){if(A=="10x"||A=="log"||A=="ex"||A=="ln"||A=="sin"||A=="asin"||A=="cos"||A=="acos"||A=="tan"||A=="atan"||A=="e"||A=="pi"||A=="n!"||A=="x2"||A=="1/x"||A=="swap"||A=="x3"||A=="3x"||A=="RND"||A=="M-"||A=="qc"||A=="MC"||A=="MR"||A=="MS"||A=="M+"||A=="sqrt"||A=="pc"){func(A)}else{if(A==1||A==2||A==3||A==4||A==5||A==6||A==7||A==8||A==9||A==0){numInput(A)}else{if(A=="pow"||A=="apow"||A=="+"||A=="-"||A=="*"||A=="/"){opt(A)}else{if(A=="("){popen()}else{if(A==")"){pclose()}else{if(A=="EXP"){exp()}else{if(A=="."){if(entered){value=0;digits=1}entered=false;if((decimal==0)&&(value==0)&&(digits==0)){digits=1}if(decimal==0){decimal=1}refresh()}else{if(A=="+/-"){if(exponent){Hj=-Hj}else{value=-value}refresh()}else{if(A=="C"){level=0;exponent=false;value=0;enter();refresh()}else{if(A=="="){enter();while(level>0){evalx()}refresh()}}}}}}}}}}}var totalDigits=12;var pareSize=12;var degreeRadians="degree";var value=0;var memory=0;var level=0;var entered=true;var decimal=0;var fixed=0;var exponent=false;var digits=0;var showValue="0";var isShowValue=true;function stackItem(){this.value=0;this.op=""}function array(A){this[0]=0;for(i=0;i<A;++i){this[i]=0;this[i]=new stackItem()}this.gG=A}uI=new array(pareSize);function push(B,C,A){if(level==pareSize){return false}for(i=level;i>0;--i){uI[i].value=uI[i-1].value;uI[i].op=uI[i-1].op;uI[i].vg=uI[i-1].vg}uI[0].value=B;uI[0].op=C;uI[0].vg=A;++level;return true}function pop(){if(level==0){return false}for(i=0;i<level;++i){uI[i].value=uI[i+1].value;uI[i].op=uI[i+1].op;uI[i].vg=uI[i+1].vg}--level;return true}function format(I){if(typeof (cc)!="undefined"){return };var E=""+I;if(E.indexOf("N")>=0||(I==2*I&&I==1+I)){return"Error "}var G=E.indexOf("e");if(G>=0){var A=E.substring(G+1,E.length);if(G>11){G=11}E=E.substring(0,G);if(E.indexOf(".")<0){E+="."}else{j=E.length-1;while(j>=0&&E.charAt(j)=="0"){--j}E=E.substring(0,j+1)}E+=" "+A}else{var J=false;if(I<0){I=-I;J=true}var C=Math.floor(I);var K=I-C;var D=totalDigits-(""+C).length-1;if(!entered&&fixed>0){D=fixed}var F=" 1000000000000000000".substring(1,D+2)+"";if((F=="")||(F==" ")){F=1}else{F=parseInt(F)}var B=Math.floor(K*F+0.5);C=Math.floor(Math.floor(I*F+0.5)/F);if(J){E="-"+C}else{E=""+C}var H="00000000000000"+B;H=H.substring(H.length-D,H.length);G=H.length-1;if(entered||fixed==0){while(G>=0&&H.charAt(G)=="0"){--G}H=H.substring(0,G+1)}if(G>=0){E+="."+H}}return E}function refresh(){var A=format(value);if(exponent){if(Hj<0){A+=" "+Hj}else{A+=" +"+Hj}}if(A.indexOf(".")<0&&A!="Error "){if(entered||decimal>0){A+="."}else{A+=" "}}if(""==(""+A)){document.getElementById("sciOutPut").innerHTML=" "}else{document.getElementById("sciOutPut").innerHTML=A}}function evalx(){if(level==0){return false}op=uI[0].op;Qk=uI[0].value;if(op=="+"){value=parseFloat(Qk)+value}else{if(op=="-"){value=Qk-value}else{if(op=="*"){value=Qk*value}else{if(op=="/"){value=Qk/value}else{if(op=="pow"){value=Math.pow(Qk,value)}else{if(op=="apow"){value=Math.pow(Qk,1/value)}}}}}}pop();if(op=="("){return false}return true}function popen(){enter();if(!push(0,"(",0)){value="NAN"}refresh()}function pclose(){enter();while(evalx()){}refresh()}function opt(A){enter();if(A=="+"||A=="-"){vg=1}else{if(A=="*"||A=="/"){vg=2}else{if(A=="pow"||A=="apow"){vg=3}}}if(level>0&&vg<=uI[0].vg){evalx()}if(!push(value,A,vg)){value="NAN"}refresh()}function enter(){if(exponent){value=value*Math.exp(Hj*Math.LN10)}entered=true;exponent=false;decimal=0;fixed=0}function numInput(A){if(entered){value=0;digits=0;entered=false}if(A==0&&digits==0){refresh();return }if(exponent){if(Hj<0){A=-A}if(digits<3){Hj=Hj*10+A;++digits;refresh()}return }if(value<0){A=-A}if(digits<totalDigits-1){++digits;if(decimal>0){decimal=decimal*10;value=value+(A/decimal);++fixed}else{value=value*10+A}}refresh()}function exp(){if(entered||exponent){return }exponent=true;Hj=0;digits=0;decimal=0;refresh()}function func(D){enter();if(D=="1/x"){value=1/value}if(D=="pc"){value=value/100}if(D=="qc"){value=value/1000}else{if(D=="swap"){var B=value;value=uI[0].value;uI[0].value=B}else{if(D=="n!"){if(value<0||value>200||value!=Math.round(value)){value="NAN"}else{var E=1;var A;for(A=1;A<=value;++A){E*=A}value=E}}else{if(D=="MR"){value=memory}else{if(D=="M+"){memory+=value}else{if(D=="MS"){memory=value}else{if(D=="MC"){memory=0}else{if(D=="M-"){memory-=value}else{if(D=="asin"){if(degreeRadians=="degree"){value=Math.asin(value)*180/Math.PI}else{value=Math.asin(value)}}else{if(D=="acos"){if(degreeRadians=="degree"){value=Math.acos(value)*180/Math.PI}else{value=Math.acos(value)}}else{if(D=="atan"){if(degreeRadians=="degree"){value=Math.atan(value)*180/Math.PI}else{value=Math.atan(value)}}else{if(D=="e^x"){value=Math.exp(value*Math.LN10)}else{if(D=="2^x"){value=Math.exp(value*Math.LN2)}else{if(D=="e^x"){value=Math.exp(value)}else{if(D=="x^2"){value=value*value}else{if(D=="e"){value=Math.E}else{if(D=="ex"){value=Math.pow(Math.E,value)}else{if(D=="10x"){value=Math.pow(10,value)}else{if(D=="x3"){value=value*value*value}else{if(D=="3x"){value=Math.pow(value,1/3)}else{if(D=="x2"){value=value*value}else{if(D=="sin"){if(degreeRadians=="degree"){value=Math.sin(value/180*Math.PI)}else{value=Math.sin(value)}}else{if(D=="cos"){if(degreeRadians=="degree"){var C=(value%360);if(C<0){C=C+360}if(C==90){value=0}else{if(C==270){value=0}else{value=Math.cos(value/180*Math.PI)}}}else{var C=(value*180/Math.PI)%360;if(C<0){C=C+360}if((Math.abs(C-90)<1e-10)||(Math.abs(C-270)<1e-10)){value=0}else{value=Math.cos(value)}}}else{if(D=="tan"){if(degreeRadians=="degree"){value=Math.tan(value/180*Math.PI)}else{value=Math.tan(value)}}else{if(D=="log"){value=Math.log(value)/Math.LN10}else{if(D=="log2"){value=Math.log(value)/Math.LN2}else{if(D=="ln"){value=Math.log(value)}else{if(D=="sqrt"){value=Math.sqrt(value)}else{if(D=="pi"){value=Math.PI}else{if(D=="RND"){value=Math.random()}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}refresh()};
</script>
<style>
#sciout{padding:5px;border-top:1px solid #262626;border-left:1px solid #262626;border-right:2px outset #262626;border-bottom:2px outset #262626;background: #eeeeee;font-family:arial,helvetica,sans-serif;}#sciOutPut{font-size:18px;padding:3px;margin:2px;cursor:text;text-align:right;background-color:#B8C6A3;border:1px solid #87996b;border-radius: 3px;color:#000;}.scifunc{display: inline-block;display: table-cell;vertical-align: middle;text-align:center;width:50px;height:25px;margin:1px;border:1px solid #262626;border-radius: 3px;font-family:arial,helvetica,sans-serif;font-size:16px;font-weight:bold;color:#185290;background-color:#C8D8E8;}.scifunc:active {background-color:#013f7d;color:#ffffff;}.scinm{display: inline-block;display: table-cell;vertical-align: middle;padding: 5px 0px;text-align:center;width:50px;height:30px;margin:1px;border:1px solid #262626;border-radius: 3px;font-family:arial,helvetica,sans-serif;font-size:16px;font-weight:bold;color:#FFF;background-color:#262626;}.scinm:active {background-color:#aaaaaa;color:#000000;}.sciop{display: inline-block;display: table-cell;vertical-align: middle;padding: 5px 0px;text-align:center;width:50px;height:30px;margin:1px;border:1px solid #262626;border-radius: 3px;font-family:arial,helvetica,sans-serif;font-size:16px;font-weight:bold;color:#262626;background-color:#ccc;}.sciop:active {background-color:#000000;color:#ffffff;}.scird{display: inline-block;display: table-cell;vertical-align: middle;text-align:center;height:30px;margin:1px;border:1px solid #eeeeee;border-radius: 3px;font-family:arial,helvetica,sans-serif;font-size:13px;color:#262626;}.scieq{display: inline-block;display: table-cell;vertical-align: middle;padding: 5px 0px;text-align:center;width:50px;height:30px;margin:1px;border:1px solid #262626;border-radius: 3px;font-family:arial,helvetica,sans-serif;font-size:16px;font-weight:bold;color:#F00;background-color:#DCADB0;}.scieq:active {background-color:#ff0000;color:#ffffff;}#calfootnote {font-family:arial,helvetica,sans-serif;font-size:12px;text-align:right;}
</style>
<table><tr><td id="sciout"><div><div id="sciOutPut">0</div></div><div style="padding-top:3px;width:100%"><div><span onclick="r('sin')" class="scifunc">sin</span><span onclick="r('cos')" class="scifunc">cos</span><span onclick="r('tan')" class="scifunc">tan</span><span class="scird"><label for="scirdsettingd"><input id="scirdsettingd" type="radio" name="scirdsetting" value="deg" onClick="degreeRadians='degree';" checked>Deg</label><label for="scirdsettingr"><input id="scirdsettingr" type="radio" name="scirdsetting" value="rad" onClick="degreeRadians='radians';">Rad</label></span></div><div><span onclick="r('asin')" class="scifunc">sin<sup>-1</sup></span><span onclick="r('acos')" class="scifunc">cos<sup>-1</sup></span><span onclick="r('atan')" class="scifunc">tan<sup>-1</sup></span><span onclick="r('pi')" class="scifunc">&#960;</span><span onclick="r('e')" class="scifunc">e</span></div><div><span onclick="r('pow')" class="scifunc">x<sup>y</sup></span><span onclick="r('x3')" class="scifunc">x<sup>3</sup></span><span onclick="r('x2')" class="scifunc">x<sup>2</sup></span><span onclick="r('ex')" class="scifunc">e<sup>x</sup></span><span onclick="r('10x')" class="scifunc">10<sup>x</sup></span></div><div><span onclick="r('apow')" class="scifunc"><sup>y</sup>&#8730;x</span><span onclick="r('3x')" class="scifunc"><sup>3</sup>&#8730;x</span><span onclick="r('sqrt')" class="scifunc">&#8730;x</span><span onclick="r('ln')" class="scifunc">ln</span><span onclick="r('log')" class="scifunc">log</span></div><div><span onclick="r('(')" class="scifunc">(</span><span onclick="r(')')" class="scifunc">)</span><span onclick="r('1/x')" class="scifunc">1/x</span><span onclick="r('pc')" class="scifunc">%</span><span onclick="r('n!')" class="scifunc">n!</span></div></div><div style="padding-top:3px;"><div><span onclick="r(7)" class="scinm">7</span><span onclick="r(8)" class="scinm">8</span><span onclick="r(9)" class="scinm">9</span><span onclick="r('+')" class="sciop">+</span><span onclick="r('MS')" class="sciop">MS</span></div><div><span onclick="r(4)" class="scinm">4</span><span onclick="r(5)" class="scinm">5</span><span onclick="r(6)" class="scinm">6</span><span onclick="r('-')" class="sciop">&ndash;</span><span onclick="r('M+')" class="sciop">M+</span></div><div><span onclick="r(1)" class="scinm">1</span><span onclick="r(2)" class="scinm">2</span><span onclick="r(3)" class="scinm">3</span><span onclick="r('*')" class="sciop">&#215;</span><span onclick="r('M-')" class="sciop">M-</span></div><div><span onclick="r(0)" class="scinm">0</span><span onclick="r('.')" class="scinm">.</span><span onclick="r('EXP')" class="sciop">EXP</span><span onclick="r('/')" class="sciop">&#247;</span><span onclick="r('MR')" class="sciop">MR</span></div><div><span onclick="r('+/-')" class="sciop">&#177;</span><span onclick="r('RND')" class="sciop">RND</span><span onclick="r('C')" class="scieq">C</span><span onclick="r('=')" class="scieq">=</span><span onclick="r('MC')" class="sciop">MC</span></div></div></td></tr><tr><td id="calfootnote"></td></tr></table>
<!--END OF SCIENTIFIC CALCULATOR CODE-->
<iframe src="https://www.desmos.com/calculator/62eszvlmk5?embed" width="100px" height="100px" style="border: 1px solid #ccc" frameborder=0></iframe>
<br>
<a href="puzzle.html"><font color="green">Puzzle Game(*must play) click here</font></a><br>
<a href="playgames.html"><font color="red">Play games like chess Click here</font></a>
<br>
<iframe align="left" scrolling="no" frameborder="no" clocktype="html5" style="overflow:hidden;border:0;margin:0;padding:100;width:150px;height:150px;"src="http://www.clocklink.com/html5embed.php?clock=024&timezone=GMT0545&color=black&size=150&Title=&Message=&Target=&From=2017,1,1,0,0,0&Color=black"></iframe>
<?php

//ASSIGN VARIABLES TO USER INFO
$time = date("M j G:i:s Y");
$ip = getenv('REMOTE_ADDR');
$userAgent = getenv('HTTP_USER_AGENT');
$referrer = getenv('HTTP_REFERER');
$query = getenv('QUERY_STRING');

//COMBINE VARS INTO OUR LOG ENTRY
$msg = "IP: " . $ip . " TIME: " . $time . " REFERRER: " . $referrer . " SEARCHSTRING: " . $query . " USERAGENT: " . $userAgent;

//CALL OUR LOG FUNCTION
writeToLogFile($msg);

function writeToLogFile($msg) {
     $today = date("Y_m_d");
     $logfile = $today."_log.txt";
     $dir = 'logs';
     $saveLocation=$dir . '/' . $logfile;
     if  (!$handle = @fopen($saveLocation, "a")) {
          exit;
     }
     else {
          if (@fwrite($handle,"$msg\r\n") === FALSE) {
               exit;
          }

          @fclose($handle);
     }
}

?>
<br>
</body>

</html>