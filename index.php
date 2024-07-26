<?php
$data = file_get_contents('squid4.txt');
$data = preg_replace('/\s+/', '', $data);
$data = str_split($data, 1);
$i = 1;
$solve = '';
$solve2 = '';
$tstuff = '';
//
//
//echo '
//<style>
// td{
//    font-size: 2px;
//   width: 8px;
//   height: 8px;
// }
// #board{
// float: left;
//    margin-right:30px;
// }
//</style>
//<div id="board"><table border="0">';
//$tot=0;
foreach ($data as $d) {
    $solve2 .= $d;
    //    $tot+=$d;
    //    if($i%2){
    //        $ro='<tr><td style="background: green">&nbsp;</td><td>&nbsp;</td></tr>';
    //    }else{
    //        $ro='<tr><td>&nbsp;</td><td style="background: green">&nbsp;</td></tr>';
    //    }
    //    for($y=0;$y<$d;$y++){
    ////        echo $ro;
    //        $tstuff=$ro.$tstuff;
    //    }
    //    $solve.=$d;
    if ($i % 3 == 0) {
        //        $solve.='<br />';
        $solve2 .= "\n";
    }
    $i++;
}
// echo $tstuff;
//echo '</table></div>';
//echo '<div>';
//echo $solve;
//echo '<br />';
//echo '<br />';
//echo $tot.'/96<br/>';
//echo round(($tot/96)*100).'%';
//echo '</div>';
$html = file_get_contents('index.html');
$html = str_replace('></textarea>', '>' . $solve2 . '</textarea>', $html);
echo $html;
