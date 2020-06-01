<?php
$group_action_1= "碾平.天灭.给老娘康康";
$group_action_2 = "咧嘴.喂狗.睡大觉.扛麦子十里山路不换肩.都能游泳一千米.照样每天游泳一千米.被五九坦克碾平";
$group_subject = "孙笑川.我儿子.我老头子习仲勋.我老公习主席.我儿子习大犬.我齐心.老娘.老蛤蟆.我儿.中共.中共国.坦克.包圣.我孙女.韭菜们";
$group_salute = "在？.爱特老娘干嘛，.我看看哪个不要命的艾特老娘？";
$group_end = "我看你是不要命了！.你算个甚么东西？.你算个什么东西？.这有什么？.就是新时代特色！.都是我儿子的功劳！.你有什么问题么？.这才是正道！";
$sneer = "我跟你说，.老娘警告你，";
$desc = "奇奇怪怪的.两百斤的";
$words_action_1 = explode('.', $group_action_1);
$words_action_2 = explode('.', $group_action_2);
$words_subject = explode('.', $group_subject);
$words_salute = explode('.', $group_salute);
$words_end = explode('.', $group_end);
$words_sneer = explode('.', $sneer);
$words_desc = explode('.', $desc);

$ranint = rand(0,4);

echo $words_salute[rand(0, count($words_salute)-1)];
echo $words_sneer[rand(0, count($words_sneer)-1)];

echo $words_action_1[rand(0, count($words_action_1)-1)];
echo $words_desc[rand(0, count($words_desc)-1)];
echo $words_subject[rand(0, count($words_subject)-1)];

echo '，';
echo $words_subject[rand(0, count($words_subject)-1)];
echo $words_action_2[rand(0, count($words_action_2)-1)];

echo '，'.$words_end[rand(0, count($words_end)-1)];
?>
