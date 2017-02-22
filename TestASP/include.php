<?php
	
	$product1 = ['NAME' => 'Справочник «Организации»', 'PRICE' => 1000, 'OFFER' => ''];
	$product2 = ['NAME' => 'Справочник «Банки»', 'PRICE' => 1000, 'OFFER' => ''];
	$product3 = ['NAME' => 'Справочник «Банковские счета»', 'PRICE' => 1000, 'OFFER' => ''];
	$product4 = ['NAME' => 'Справочник «Валюты»', 'PRICE' => 1000, 'OFFER' => ''];
	$product5 = ['NAME' => 'Справочник «Контрагенты»', 'PRICE' => 1000, 'OFFER' => ''];
	$product6 = ['NAME' => 'Справочник «Тип цен номенклатуры»', 'PRICE' => 500, 'OFFER' => ''];
	$product7 = ['NAME' => 'Справочник «Склады (места хранения)»', 'PRICE' => 1000, 'OFFER' => ''];
	$product8 = ['NAME' => 'Справочник «Подразделения»', 'PRICE' => 1000, 'OFFER' => ''];
	$product9 = ['NAME' => 'Справочник «Физические  лица»', 'PRICE' => 750, 'OFFER' => ''];
	$product10 = ['NAME' => 'Справочник «Сотрудники организации»', 'PRICE' => 1000, 'OFFER' => ''];

	$arr = [$product1, $product2, $product3, $product4, $product5, $product6, $product7, $product8, $product9, $product10];

	echo '<table>';
		echo '<tr>';
			echo '<th>Название</th>';
			echo '<th>Цена</th>';
		echo '</tr>';
	foreach ($arr as $value) {
		if ($value['PRICE'] < 1000) {
			$value['OFFER'] = 'Y';
			echo '<tr bgcolor="#86BFFF">';
		} else {echo '<tr>';}
		
			echo '<td>';
			echo $value['NAME'];
			echo '</td>';
			echo '<td>';
			echo $value['PRICE'];
			echo '</td>';
		echo '</tr>';
		
		
	}

	echo '</table>';