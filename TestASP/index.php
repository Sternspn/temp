<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Test-ASP</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="top-line"></div>
	<div class="page">
		<div class="white-winds left"></div>
		<div class="white-winds right"></div>
		<div class="content">
			<h1>Обновление 1С в Екатеринбурге</h1>
			<h2>Заполните заявку на обновление<br>своей программы прямо сейчас!</h2>
			<p>Вы получите <b>современные версии программ 1С</b>, содержащие последние изменения в законодательстве РФ.</p>
			<div class="update1c">
				<h3>Обновление 1С на выгодных условиях</h3>
				<table>
					<tr>
						<th>Регулярное получение обновлений<br>при договоре 1С:ИТС*</th>
						<th>Разовое получение обновлений</th>
					</tr>
					<tr>
						<td><p class="big">от  11200 р. /месяц</p>
							<span>+ бесплатно</span>
							<div class="blue-block">Установка актуальных обновлений</div>
							<div class="blue-block">Бесплатная линия консультаций</div>
							<div class="blue-block">12 доступных сервисов</div>
						</td>
						<td>
							<p>Выезд программиста от <b>1600</b> р./час</p><div class="blue-btn">заказать</div>
							<p>Программист удаленно от <b>1400</b> р./час</p><div class="blue-btn">заказать</div>
							<p>«Блок от 4 до 8 часов» <span>(экономия 15%)</span><br><span>(100% предоплата)</span></p>
							<p>Выезд программиста от <b>1400</b> р./час</p><div class="blue-btn">заказать</div>
							<p>Программист удаленно от <b>1200</b> р./час</p><div class="blue-btn">заказать</div>
						</td>
					</tr>
				</table>
				<p>* при комплексном информационно-технологическом сопровождении пользователей программ «1С:Предприятие»</p>
			</div>
			<div class="top10">
				<h3>Топ 10 обновляемых справочников</h3>
				<div class="buttons">
					<!-- <p>Справочник «Организации» <span class='right-price'>от <b>1200</b> р.</span></p> --><div class="blue-btn">заказать</div>
					<!-- <p>Справочник «Банки» <span class='right-price'>от <b>1200</b> р.</span></p> --><div class="blue-btn">заказать</div>
					<!-- <p>Справочник «Банковские счета» <span class='right-price'>от <b>1200</b> р.</span></p> --><div class="blue-btn">заказать</div>
					<!-- <p>Справочник «Валюты» <span class='right-price'>от <b>1200</b> р.</span></p> --><div class="blue-btn">заказать</div>
					<!-- <p>Справочник «Контрагенты» <span class='right-price'>от <b>1200</b> р.</span></p> --><div class="blue-btn">заказать</div>
					<!-- <p>Справочник «Тип цен номенклатуры» <span class='right-price'>от <b>1200</b> р.</span></p> --><div class="blue-btn">заказать</div>
					<!-- <p>Справочник «Склады (места хранения)» <span class='right-price'>от <b>1200</b> р.</span></p> --><div class="blue-btn">заказать</div>
					<!-- <p>Справочник «Подразделения» <span class='right-price'>от <b>1200</b> р.</span></p> --><div class="blue-btn">заказать</div>
					<!-- <p>Справочник «Физические  лица» <span class='right-price'>от <b>1200</b> р.</span></p> --><div class="blue-btn">заказать</div>
					<!-- <p>Справочник «Сотрудники организации» <span class='right-price'>от <b>1200</b> р.</span></p> --><div class="blue-btn">заказать</div>
				</div>
				<?php include_once "include.php"; ?>
			</div>
			<div class="calculation">
				<h3>Заказать расчёт стоимости обновления 1С</h3>
				<form>
					<p>Выберите вариант работы</p><br>
					<input type="checkbox" id="checkbox1"><label for='checkbox1'>выезд программиста</label><br><br>
					<input type="checkbox" id="checkbox2"><label for='checkbox2'>программист удаленно</label>
					<p>Интересующая услуга</p>
					<select>
						<option>Сопровождение 1С (услуги программистов 1С)</option>
						<option>Установка 1С</option>
						<option>Настройка 1С</option>
						<option>Доработка 1С</option>
						<option>Перенос баз, конвертация</option>
						<option>Поддержка 1С</option>
						<option>Обновление 1С</option>
						<option>Консультации 1С</option>
						<option>Обслуживание 1С</option>
						<option>Помощь 1С</option>
					</select>
					<div class="button">рассчитать стоимость</div>
				</form>
			</div>
			<div class="guarantee">
				<h3>Гарантии качества обновления 1С в ГК «АСП»</h3>
				<ul>
					<li>Соответствие требованиям стандарта ISO 9001:2015</li>
					<li>Улучшение деятельности, направленной на поддержание системы управления качеством обновления программных продуктов 1С</li>
					<li>Обязательное резервное копирование баз данных</li>
					<li>Проверка обновленной системы на корректность работы</li>
				</ul>
				<h4>В результате обновления в ГК «АСП» вы получаете:</h4>
				<ul>
					<li>Актуальные данные законодательства РФ</li>
					<li>Расширенный функционал системы</li>
					<li>Максимально удобный интерфейс</li>
					<li>Бесперебойную, комфортную работу программ 1С</li>
				</ul>
				<p>Будьте уверены в сохранности своей информации!</p>
				<span>После выполнения работ Вашу оценку проверит отдел качества.</span>
			</div>
			<div class="why-asp">
				<h3>Почему обновлять 1С в ГК «АСП»?</h3>
				<div class="infographics info1"><p>Опытные эксперты</p></div>
				<div class="infographics info2"><p>Дистанционная форма</p></div>
				<div class="infographics info3"><p>Оперативное обслуживание</p></div>
				<div class="infographics info4"><p>Регулярная поддержка пользователей</p></div>
			</div>
			<div class="last-block">
				<h2 id="last">Заказывайте обновление для автоматизации вашей работы в <span>ГК «АСП»</span> уже сейчас!</h2>
				<div class="buy">заказать</div>
				<p>Вместе с нами установили обновление 1С</p>
				<p class="bold">более <span>10 000</span> бухгалтеров и директоров</p>
				<div class="join">Присоединяйтесь!</div>
				<h3>Отзывы пользователей 1С:ИТС</h3>
				<div class="feedback">Отзыв 1</div>
			</div>
		</div>
	</div>
	<div class="bottom-line"></div>
</body>
</html>