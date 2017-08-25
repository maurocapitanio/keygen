<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MC&#39;s Keygen</title>
<style type="text/css">
.style1 {
				font-size: large;
}
.style3 {
				font-size: large;
				font-family: monospace;
				text-align: center;
				color: grey;
}
.style5 {
				margin-top: 6px;
}
.style7 {
				text-align: center;
}
.style8 {
				font-size: small;
				font-family: monospace;
}
.style9 {
				font-size: small;
				margin-left: 0px;
}
.style10 {
				font-size: x-small;
				font-family: monospace;
}

</style>
</head>
<SCRIPT LANGUAGE="JavaScript">


</SCRIPT>
<body style="background-color: #FFFFFF; ">
	<form action="index.php" method="get">
				<div class="style7">
								<br />
								<button name="vai" style="background-color: white;border:0 " type="submit">  
							    <img src="KeyGenlogo.jpg" width="90" height="111" value="Calculate"  align="middle">    
								</button><br />
								<span><input name="key" type="text" placeholder = "key description" class="style3" style="width:40%; height: 25px" maxlength="25"/></span>								
								<span><input name="seed" type="text" placeholder = "code" class="style3" style="width:15%; height: 25px" maxlength="2"/></span>
								<br /> <br /> 
								<textarea name="Text1" style="width: 45%; height: 45px;" placeholder = "Enter text to encrypt or decrypt here" class="style9"></textarea><br />
								<input name="bCrypt" type="checkbox" value="1"/>
								<span class="style3">Check to crypt, uncheck to decrypt text</span><br />
								<span class="style3"><br />
								
	&nbsp;<?php
				
				
	$f_seed=(int)$_GET['seed']; 
	$f_key=$_GET['key'];
	$s_text=$_GET['Text1'];
	$b_crypt=(int)$_GET['bCrypt'];
    $l=strlen($s_text);
		
	if ($l>0){
			calc();$passw=$password;
		}
	else{
	$f_seed=$f_seed-4;if ($f_seed>0)calc();
	$f_seed=$f_seed+1;if ($f_seed>0)calc();
	$f_seed=$f_seed+1;if ($f_seed>0)calc();
	$f_seed=$f_seed+1;if ($f_seed>0)calc();
	$f_seed=$f_seed+1;if (strlen($f_key)>0)echo "---> ";calc();$passw=$password;
	$f_seed=$f_seed+1;calc();
	$f_seed=$f_seed+1;calc();
	$f_seed=$f_seed+1;calc();
	$f_seed=$f_seed+1;calc();
}
	
	echo "<br />";

	

	function calc()
{
 
	//echo ord($f_key[0]);
	global $f_key;
	global $f_seed;
	global $password;
	global $passw;
	$l=strlen($f_key);
	$reskey=(int)0;
	for ($i=0; $i<$l; $i++)
		$reskey=$reskey+ord($f_key[$i])*($i+1);
	$reskey=$reskey%3997+$f_seed;
	srand($reskey);
	//echo "\n".$reskey;
	
	$lines = file('words.italian.txt');
	

	$oks=0;
	if (($l>0)&&($f_seed>0))
	while($oks==0)
	{
		
			$cycle=0;
			$ok=0;
			$pwd="";
			//echo "VAL".$l."-".$f_seed;
			for ($i=0; $i<7; $i++)
			{	
				if ($cycle == 0) //cerco la prima vocale del ciclo
				{ 
					if ($i==$i){
						//echo "A";
						$ok=0;
						while ($ok!=1) {
							$dummy=rand(0,19)+ord('a');
							$curr = chr($dummy);
							if (($curr == 'a') ||($curr == 'e') ||($curr == 'i') ||($curr == 'o') ||($curr == 'u'))
							$ok=1;
						}
						
					}
				}
				else 
				{ 
					if ($cycle == 1)
					{ // cerco la prima consonante del ciclo
					//echo "B";
						$ok=0;
						while ($ok!=1) {
							$dummy=rand(0,19)+ord('a');
							$curr = chr($dummy);
							if (($curr == 'r') ||($curr == 't') ||($curr == 'p') ||($curr == 's') ||($curr == 'd')||($curr == 'f') ||($curr == 'g') ||($curr == 'l') ||($curr == 'c') ||($curr == 'b')||($curr == 'n') ||($curr == 'm'))
							$ok=1;
						}
						
					}
					else{ // cycle == 2 seconda consonante in assonanza
						//echo "C";
						$ok = 0; $prev = $pwd[$i - 1];
							while ($ok!=1)
							{
								$ok_in=0;
								while ($ok_in!=1) {
									$dummy=rand(0,19)+ord('a');
									$curr = chr($dummy);
									if (($curr == 'r') ||($curr == 't') ||($curr == 'p') ||($curr == 's') ||($curr == 'd')||($curr == 'f') ||($curr == 'g') ||($curr == 'l') ||($curr == 'c') ||($curr == 'b')||($curr == 'n') ||($curr == 'm'))
									$ok_in=1;
								}
								
								if ((($prev == 'l')||($prev == 's'))&&
								(($curr == 't')||($curr == 'p')||($curr == 'g')||($curr == 'c')||($curr == 'b')|| ($curr == $prev))) $ok = 1;
								
								if (($prev == 'r')&&
								(($curr == $prev)||($curr == 's')||($curr == 'p'))) $ok = 1;
													
								if ((($prev == 'p')||($prev == 'f')||($prev == 'g'))&&
								(($curr == 'r') || ($curr == $prev) || ($curr == 'l'))) $ok = 1;
								
								if ((($prev == 't')||($prev == 'd')||($prev == 'c')||($prev == 'b'))&&
								(($curr == 'r') || ($curr == $prev) )) $ok = 1;
	
							
								if (($prev == 'n')&&
								(($curr == 't') || ($curr == 's') || ($curr == 'd')|| ($curr == 'g')|| ($curr == 'c')|| ($curr == $prev))) $ok = 1;
						
								if (($prev == 'm')&& ($curr == $prev)) $ok = 1;				
							}
						}
				}
        
				$pwd[$i]=chr($dummy);
				$cycle++;
				if ($cycle==3) $cycle=0;
				//echo ($pwd[$i]);
			}
			//password finita, ora verifico sia leggibile			

	
			//verifico italianita
			if ($i>0) {
				$t=0;
				$password="";
				$match="";
				for ($f=0; $f<4; $f++) {
					$password=$password.$pwd[$f];					
					$match=$match.$pwd[$f+3];
					}
					//echo "matching: ".$password." ".$match."\n";
				
				while (($oks==0)&& $t<count($lines))
				{
					//echo "ricerca in ".$lines[$t]." di ". $password."\n";
					if (strstr($lines[$t], $password)) $oks=1;
					$t++;
				}
				if ($oks) {
					$oks=0;$t=0;
					while (($oks==0)&& $t<count($lines))
					{
						//echo "ricerca in ".$lines[$t]." di ". $password."\n";
						if (strstr($lines[$t], $match)) $oks=1;
						$t++;
					}
				}
				//oks=1;
				if ($oks==1) 
				{
					$pwd[7]=chr(rand(0,9)+48);		
					//$pwd[8]=chr(rand(0,9)+48);
					$pwd[0]=chr(ord($pwd[0])-32);				
					$password="";
					for ($f=0; $f<9; $f++) $password=$password.$pwd[$f];
				}	
				
			}
	}
	if (strlen($password)>0) echo $f_seed .": " . $password."<br />";
	}
	

	$l=strlen($s_text);
		
	$sres="";
	if ($l>0){
		$crpwd=crypt($passw,"keygen");
		
		$l2=strlen($crpwd);
		//for ($c=0; $c<$l2; $c++) if 
		//echo $s_text." - ".$b_crypt." - ".$crpwd."<br />";
	
		if ($b_crypt==1) {
			for ($c=0; $c<$l; $c++){
				//$sres=$sres+(string)(ord($s_text[$c])+ord($crpwd[$c%$l2]));
				//$sres=$sres+str_pad(((string)(ord($s_text[$c])+ord($crpwd[$c%$l2]))), 5, "-", STR_PAD_LEFT);  
				$tok=str_pad(((string)(ord($s_text[$c])+ord($crpwd[$c%$l2]))), 3, "0", STR_PAD_LEFT);
				//echo $tok."<br />";
				$sres=$sres.$tok;
			}
			//echo "Crypted text v1: " . $sres."<br />";
			$s_text=$sres;
			$sres="";
			$l=strlen($s_text);
			for ($c=0; $c<$l/2; $c++){
				$bls=substr($s_text, $c*2, 2);
				$bl=(int)$bls;
				if ((($bl<=90) && ($bl >= 65))||(($bl<=122) && ($bl >= 97))) $sres=$sres . chr($bl);
				else $sres=$sres . $bls;
				// $a=chr($bl+27);
				
				// echo (int)substr($s_text, $c*2, 2) . " -> " .$a . " - " .((string)(ord($a)-27))."<br />";
			}
			echo "Crypted text (". $passw ." - between ><): <br />>" . $sres."< <br />";
			//print "Crypted text(".$passw.": (between ><): $sres";
		}
		else {
				$l=strlen($s_text);
				$res="";
				for ($c=0; $c<$l; $c++){
					$bl=$s_text[$c];
					$bli=ord($bl);
					if ((($bli<=90) && ($bli >= 65))||(($bli<=122) && ($bli >= 97))) $res=$res . ord($bl);
					else $res=$res . $bl;
				}
				//echo "De-crypted text v1: " . $res."<br />";
				
				$l=strlen($res);
				$s_text=$res;
				//$s_text=$_GET['Text1'];
				//$l=strlen($s_text);
				$res="";
				for ($c=0; $c<$l/3; $c++){
				// leggo blocco chr
					$bl=(int)substr($s_text, $c*3, 3);
					$res=$res . chr($bl-ord($crpwd[$c%$l2]));					
				}
				echo "De-crypted text (". $passw ." - between ><): <br />>" . $res . "< <br />";
				
			}
	}
	
?>


				</div>

	</form>		
	

</body>

</html>
