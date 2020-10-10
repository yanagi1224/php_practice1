<?php
$name = "柳澤優樹";
if ($name == "柳澤優樹") {
    echo "「私はあなたの名前です」";
} else  {
    echo "「私はあなたの名前ではありません」";
}
echo "\n";


$total = 0;
for ($i = 0; $i <= 10000; $i++){
    $total += $i;
}
echo $total;
echo "\n";


$fruits = array("リンゴ", "バナナ", "みかん", "なし", "ブドウ");
foreach($fruits as $fruit){
    echo "要素は" . $fruit;
    echo "\n";
}