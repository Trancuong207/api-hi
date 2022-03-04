<?php
$url = array(
"https://i.imgur.com/W9dbv5t.gif",
"https://i.imgur.com/mPd6KTW.gif",
"https://i.imgur.com/nlKVSNK.gif",
"https://i.imgur.com/hGoQZas.gif",
"https://i.imgur.com/COti0Aq.gif",
"https://i.imgur.com/eqxFmnX.gif",
"https://i.imgur.com/JHsIac9.gif",
"https://i.imgur.com/1xfpgeZ.gif",
"https://i.imgur.com/Wp0zwJU.gif",
"https://i.imgur.com/LGRRLPI.gif",
"https://i.imgur.com/HBkM7aK.gif",
"https://i.imgur.com/pILfEpA.gif",
"https://i.imgur.com/7z8Xcvy.gif",
"https://i.imgur.com/e83hyXS.gif",
"https://i.imgur.com/geOp4hs.gif",
"https://i.imgur.com/83ryf0X.gif"
);
$rd = array_rand($url);
$cc = $url [$rd];
$kiss = array(
"data" => $cc,
"author" => "Trần khương",
"success" => "true",
);
$rdimg = json_encode($kiss);

$i = ['\/v\/','\/','L\u00ea C\u00f4ng Quy\u1ec1n'];
$t = ['/v/','/','Trần khương'];
$j = str_replace($i, $t, $rdimg);
echo $j;
