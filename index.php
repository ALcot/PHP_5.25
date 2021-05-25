<?php
$menus = array(
  array('name' => 'CURRY', 'price' => 900),
  array('name' => 'PASTA', 'price' => 1200),
  array('name' => 'COFFEE', 'price' => 600)
);

$totalPrice = 0; // 合計金額を入れるための変数
foreach ($menus as $menu) {
  $price = $menu['price'];
  echo $menu['name'].'は'.$price.'円です';
  echo '<br>';
  // それぞれの価格を$totalPriceに足していく
  $totalPrice += $price;
}
echo '合計金額は'.$totalPrice.'円です';

?>