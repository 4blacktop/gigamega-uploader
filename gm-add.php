<?php
// скрипт создает по 20 тизеров в каждой кампании
// $proxy="222.74.212.66:808";
// если добавляем по одному тизеру, то кампании создаем руками, прописываем ID в массив
// ПОТОМ ОБЯЗАТЕЛЬНО ПРОПИСАТЬ КАМПАНИИ К ВАЙТ/БЛЭК ЛИСТУ!!!
// $campID = $campIDdefault;





header("Content-Type: text/html; charset=utf-8");
// header("Content-Type: text/html; charset=windows-1251");
set_time_limit(0);
// output_buffering(0);


ini_set('memory_limit', '1024M');
$mtime = microtime(true);
include_once('inc.php');
ob_start();
echo '<pre>';

// данные для авторизации
$login = '$login';
$pass = '$login';
$blacklist = '5123'; //игровая БЛ

// номер строки для загрузки тизера
// $teaserNumUpload = 10;


// массив с каталогами и URL кампаний

// это манисист
// array ('2033','2033','http://rfregions.ru/metro2033/?xid=HbxG0MHv&utm_source=gm&utm_medium={TEASER_ID}&sid={SITE_ID}', '2.00','63051'),
// array ('2034','2034','http://rfregions.ru/metro2034/?xid=HbxG0MHv&utm_source=gm&utm_medium={TEASER_ID}&sid={SITE_ID}', '2.00','63052'),
// array ('assa','assa','http://rfregions.ru/assassin/?xid=HbxG0MHv&utm_source=gm&utm_medium={TEASER_ID}&sid={SITE_ID}', '2.00','63053'),

// array ('cod2','cod2','http://rfregions.ru/cod2/?xid=HbxG0MHv&utm_source=gm&utm_medium={TEASER_ID}&sid={SITE_ID}', '2.00','63054'),
// array ('cosm','cosm','http://rfregions.ru/cosmowars/?xid=HbxG0MHv&utm_source=gm&utm_medium={TEASER_ID}&sid={SITE_ID}', '2.00','63055'),
// array ('dbl4','dbl4','http://rfregions.ru/diablo4/?xid=HbxG0MHv&utm_source=gm&utm_medium={TEASER_ID}&sid={SITE_ID}', '2.00','63057'),
// array ('dota','dota','http://rfregions.ru/dota2/?xid=HbxG0MHv&utm_source=gm&utm_medium={TEASER_ID}&sid={SITE_ID}', '2.00','63058'),
// array ('dom2','dom2','http://rfregions.ru/dom2/?xid=HbxG0MHv&utm_source=gm&utm_medium={TEASER_ID}&sid={SITE_ID}', '2.00','63059'),
// array ('dum3','dum3','http://rfregions.ru/doom3/?xid=HbxG0MHv&utm_source=gm&utm_medium={TEASER_ID}&sid={SITE_ID}', '2.00','63060'),

// array ('frsg','frsg','http://rfregions.ru/forsazh/?xid=HbxG0MHv&utm_source=gm&utm_medium={TEASER_ID}&sid={SITE_ID}', '2.00','63063'),
// array ('gta5','gta5','http://rfregions.ru/gta/?xid=HbxG0MHv&utm_source=gm&utm_medium={TEASER_ID}&sid={SITE_ID}', '2.00','63064'),
// array ('intn','intn','http://rfregions.ru/interns/?xid=HbxG0MHv&utm_source=gm&utm_medium={TEASER_ID}&sid={SITE_ID}', '2.00','63065'),
// array ('mfia','mfia','http://rfregions.ru/rusmafia/?xid=HbxG0MHv&utm_source=gm&utm_medium={TEASER_ID}&sid={SITE_ID}', '2.00','63066'),
// array ('mk','mk','http://rfregions.ru/mortalkombatvk/?xid=HbxG0MHv&utm_source=gm&utm_medium={TEASER_ID}&sid={SITE_ID}', '2.00','63067'),
// array ('mstl','mstl','http://rfregions.ru/mstiteli/?xid=HbxG0MHv&utm_source=gm&utm_medium={TEASER_ID}&sid={SITE_ID}', '2.00','63068'),
// array ('nfs','nfs','http://rfregions.ru/nfs/?xid=HbxG0MHv&utm_source=gm&utm_medium={TEASER_ID}&sid={SITE_ID}', '2.00','63069'),
// array ('pacn','pacn','http://rfregions.ru/pacani/?xid=HbxG0MHv&utm_source=gm&utm_medium={TEASER_ID}&sid={SITE_ID}', '2.00','63070'),
// array ('rusr','rusr','http://rfregions.ru/racing/?xid=HbxG0MHv&utm_source=gm&utm_medium={TEASER_ID}&sid={SITE_ID}', '2.00','63071'),

// array ('spdr','spdr','http://rfregions.ru/spiderman/?xid=HbxG0MHv&utm_source=gm&utm_medium={TEASER_ID}&sid={SITE_ID}', '2.00','63072'),
// array ('spnz','spnz','http://rfregions.ru/specnaz/?xid=HbxG0MHv&utm_source=gm&utm_medium={TEASER_ID}&sid={SITE_ID}', '2.00','63073'),
// array ('stlk','stlk','http://rfregions.ru/stalker/?xid=HbxG0MHv&utm_source=gm&utm_medium={TEASER_ID}&sid={SITE_ID}', '2.00','63074'),
// array ('sumr','sumr','http://rfregions.ru/sumerki/?xid=HbxG0MHv&utm_source=gm&utm_medium={TEASER_ID}&sid={SITE_ID}', '2.00','63075'),
// array ('tank','tank','http://rfregions.ru/panzer/?xid=HbxG0MHv&utm_source=gm&utm_medium={TEASER_ID}&sid={SITE_ID}', '2.00','63076'),
// array ('trns','trns','http://rfregions.ru/transformers/?xid=HbxG0MHv&utm_source=gm&utm_medium={TEASER_ID}&sid={SITE_ID}', '2.00','63077'),
// array ('unvr','unvr','http://rfregions.ru/univer/?xid=HbxG0MHv&utm_source=gm&utm_medium={TEASER_ID}&sid={SITE_ID}', '2.00','63078'),

// array ('zshk','zshk','http://rfregions.ru/shkola/?xid=HbxG0MHv&utm_source=gm&utm_medium={TEASER_ID}&sid={SITE_ID}', '2.00','63080'),





/* 
array ('airw','airw','http://rfregions.ru/airwars/?xid=HbxG0MHv&utm_source=gm&utm_medium={TEASER_ID}&sid={SITE_ID}', '2.00','2008'),
array ('bfld','bfld','http://rfregions.ru/battlefield/?xid=HbxG0MHv&utm_source=gm&utm_medium={TEASER_ID}&sid={SITE_ID}', '2.00','2008'),
array ('farm','farm','http://rfregions.ru/ferma/?xid=HbxG0MHv&utm_source=gm&utm_medium={TEASER_ID}&sid={SITE_ID}', '2.00','2009'),
array ('fifa','fifa','http://rfregions.ru/fifa/?xid=HbxG0MHv&utm_source=gm&utm_medium={TEASER_ID}&sid={SITE_ID}', '2.00','2010'),
array ('smct','smct','http://rfregions.ru/simcity2013/?xid=HbxG0MHv&utm_source=gm&utm_medium={TEASER_ID}&sid={SITE_ID}', '2.00','2011'),
array ('smps','smps','http://rfregions.ru/simpsons/?xid=HbxG0MHv&utm_source=gm&utm_medium={TEASER_ID}&sid={SITE_ID}', '2.00','2012'),
array ('sms4','sms4','http://rfregions.ru/sims4/?xid=HbxG0MHv&utm_source=gm&utm_medium={TEASER_ID}&sid={SITE_ID}', '2.00','2013'),
array ('wow','wow','http://rfregions.ru/wow/?xid=HbxG0MHv&utm_source=gm&utm_medium={TEASER_ID}&sid={SITE_ID}', '2.00','2014'),
array ('wrms','wrms','http://rfregions.ru/worms/?xid=HbxG0MHv&utm_source=gm&utm_medium={TEASER_ID}&sid={SITE_ID}', '2.00','2015'),
array ('nrto','nrto','http://rfregions.ru/naruto/?xid=HbxG0MHv&utm_source=gm&utm_medium={TEASER_ID}&sid={SITE_ID}', '2.00','2016'),
array ('crs3','crs3','http://vremyigr.ru/crysis3/?xid=c8tBmr2r&bill_project=56&utm_source=gm&utm_medium={TEASER_ID}&sid={SITE_ID}', '2.00','2016'),
 */
$campsURLArray = array(
array ('mcft','mcft','http://vremyigr.ru/minecraft/?xid=c8tBmr2r&bill_project=56&utm_source=gm&utm_medium={TEASER_ID}&sid={SITE_ID}', '2.00','2016'),
);







// представляемся
$user_agent = "Mozilla/5.0 (Windows NT 5.1) AppleWebKit/535.1 (KHTML, like Gecko) Chrome/13.0.782.220 Safari/535.1";

// имя файла для хранения кукис
$cookie_file = "cookie.txt";

// счетчик созданных кампаний и тизеров
$campCounter = 0;
$teaserCounter = 0;
 

// ======================================
// авторизация
// ======================================
// http://gigamega.ru/camp/save/
_login($login, $pass);

// ======================================
// запускаем проход для создания игровых кампаний из заданного массива в начале файла
// ======================================
foreach ($campsURLArray as $key => $campLine)
	{
	
	
	// получим каталог и ссылку для кампании
	$teaserDir = $campLine[0];
	$campName = $campLine[1];
	$teaserLink = $campLine[2];
	$price = $campLine[3];
	$campIDdefault = $campLine[4];
	
	

	// ======================================
	// создание кампании
	// ======================================
	// если мы добавляем по одному тизеру, то засасываем ID кампании из массива
	// создаем имя кампании из каталога и текущей даты
	// $campName = $campName . '-' . date("dm");
	// формируем и отправляем POST запрос, после чего получаем ID созданной кампании
	
	// если добавляем кучу тизеров
	if (isset($teaserNumUpload) == false){
		$postNewCamp = 'name=' . urlencode ($campName);
		$newCamp = postsend('http://gigamega.ru/camp/save/', $postNewCamp);
		// получим ID кампании и результат запроса - удачен или нет
		preg_match('@"id":(.*?),@', $newCamp, $newCampID); $campID = $newCampID[1];
		preg_match('@"status":"(.*?)"@', $newCamp, $newCampResult); $campResult = $newCampResult[1];
		echo "<br /><br /><h2>Создаем кампанию: " . $campName . " ID: " . $campID . '</h2>';
		// если кампания была удачно создана, продолжаем разговор
		if ($campResult == 'success')
			{
			// echo "<br />\tОтвет newCamp: " . $campResult;
			// echo "<br />\tУстанавливаем гео и категории" . $campResult;
			// echo "<br />\tОтвет newCamp: " . $campResult;
			// установим категории
			$newCats = postsend('http://gigamega.ru/camp/edit_cats/' . $campID . '/', 'cats%5B%5D=50&cats%5B%5D=5');
			// установим гео
			$newGeo = postsend('http://gigamega.ru/camp/edit_geo/' . $campID . '/', 'cats%5B%5D=2');
			
			// инкрементируем счетчик удачных кампаний
			$campCounter++;
			}
		else {echo "<br /><h1>Кампания $campName не была создана:</h1><br />" . dues($newCamp);exit;}
		}
	
	// если добавляем по одному тизеру
	else {
		$campID = $campIDdefault;
		echo "<br /><br />Добавляем в кампанию: " . $campName . " ID: " . $campID . '';
		}
	 
	 
	// ======================================
	// Подготовка базы тизеров для наполнения текущей кампании
	// ======================================
	// загрузим в массив файл с текстами тизеров и локальными адресами картинок
	$teaserTextArray = file (getcwd() . '\teasers\\' . $teaserDir . '\texts.txt');
	// почистим массив от пустых строк, и строк, кажущимися пустыми
	$teaserTextArray = array_diff($teaserTextArray, array(''));
	$teaserTextArray = array_diff($teaserTextArray, array("\n"));
	$teaserTextArray = array_diff($teaserTextArray, array("\r"));
	$teaserTextArray = array_diff($teaserTextArray, array("\r\n"));
	$teaserTextArray = array_diff($teaserTextArray, array("\n\r"));
	$teaserTextArray = array_unique($teaserTextArray);
	
	// ======================================
	// ЗАГЛУШКА!!! ТЕСТ!!! ААААА!!11111
	// ======================================	
	// $campID = '788';
	
	// ======================================
	// проход базы тизеров
	// ======================================

	if (isset($teaserNumUpload) == true){
	// echo "<h1>$teaserNumUpload</h1>";
		$teaserTextArray = array($teaserTextArray["$teaserNumUpload"]);
		
		// если задана переменная $teaserNumUpload, обрежем массив тизера до одного 
		if ($teaserTextArray["$teaserNumUpload"] == '') {
			// print_r($teaserTextArray);
			echo "<h1>No text 4 teaser! NULLL! " . $teaserDir . " " . $campName . "</h1>";
			continue;
			}
		}
		
	
	foreach ($teaserTextArray as $key => $teaserLine)
		{
		$wait = rand(3,7);
		sleep($wait);
		$counterWait += $wait;
		// для экстренной остановки скрипта создайте в том же каталоге stop.txt красного цвета!
		if (file_exists("stop.txt")) {	exit();	}
		// получим текст тизера - все после первой точки с запятой
		$textLine = trim(substr($teaserLine, stripos($teaserLine, ';')+1));
		$textLine = str_ireplace('&quot;', '', $textLine);
		
		// получим заголовок и описание тизера, в оригинале отбитые точкой с запятой
		$textLine = explode(";", $textLine);
		$title = trim($textLine[0]);
		$desc = trim($textLine[1]);
		// обрежем текст по словам
		$title = truncate_words($title, $limit=142);
		$desc = truncate_words($desc, $limit=142);
		// получим адрес локальной картинки
		$imgLine = trim(substr($teaserLine, 0, stripos($teaserLine, ';')));
		$imgPath = '/teasers/' . $teaserDir . '/' . $imgLine;
		$imgPathUpload = getcwd() . '\teasers\\' . $teaserDir . '\\' . $imgLine;
		
		// проверяем наличие картинки
		if (file_exists($imgPathUpload)) {
			echo "<br />The file $imgPathUpload exists";
		} else {
			echo "<br />The file $imgPathUpload does not exist";
			continue;
		}
		
		// ======================================
		// создание тизера (но еще не сохранение!!!)
		// ======================================
		// получим ID тизера, создав новый тизер
		$loadPageNewTeaser = load_page('http://gigamega.ru/tizer/add/' . $campID, $headers = false, $reff ='');
		preg_match('@.form.action=..tizer.save.(.*?)\".action@', $loadPageNewTeaser, $newTeaserID); $newTeaserID = $newTeaserID[1];
		echo "<br /><strong>Создаем тизер ID: $newTeaserID</strong>";  ob_flush(); flush();
		
		// ======================================
		// загрузка изображения
		// ======================================
		// создадим POST запрос на загрузку изображения и отправим его
		
		$ext = pathinfo($imgLine, PATHINFO_EXTENSION);
		if ($ext == 'gif') {
			$postNewImage = array('tizer' => '@' . $imgPathUpload . ';type=image/gif');
			}
		
		if ($ext == 'png') {
			$postNewImage = array('tizer' => '@' . $imgPathUpload . ';type=image/png');
			}
			
		if ($ext == 'jpg') {
			$postNewImage = array('tizer' => '@' . $imgPathUpload . ';type=image/jpeg');
			}
			
		if ($ext == 'jpeg') {
			$postNewImage = array('tizer' => '@' . $imgPathUpload . ';type=image/jpeg');
			}
			
		echo "<br />Загружаем изображение: " . $imgPathUpload;
		// echo "<br />\tРасширение: " . $ext;
		$newImage = postsend('http://gigamega.ru/tizer/upload_image', $postNewImage, $h_test);
		// echo "<br />\tОтвет newImage: " . dues($newImage);
		
		// получим ID и результат загрузки изображения
		// print_r($newImage);
		preg_match('@"tizer_file"\:"(.*?)\"@', $newImage, $newImageID); $newImageID = $newImageID[1];
		preg_match('@"status"\:"(.*?)"@', $newImage, $newImageResult);
		$newImageResult = $newImageResult[1];
		// echo "<br />\tОтвет newImage: " . $newImageResult;
		
		// получим размер изображения
		list($width, $height, $type, $attr) = getimagesize($imgPathUpload);
		echo "<br />\twidth:" . $width . "\theight:" . $height . "\ttype:" . $type . "\tattr:" . $attr;
		 ob_flush(); flush();
	
		// если картинка была удачно загружена, продолжаем загрузку тизера
		if ($newImageResult == 'success') {
		
			
			// ======================================
			// установка размеров рамки изображения
			// ======================================
			echo "<br />Устанавливаем рамку newImageID: $newImageID";
			
		
			
			// если это статическая картинка
			if ($ext != 'gif') {
				$saveNewFrame = array(
					'tizer_file' => $newImageID,
					'x1' => '0',
					'y1' => '0',
					'x2' => $width,
					'y2' => $height,
					'w' => $width,
					'h' => $height,
					'id' => $newTeaserID,
					'cid' => $campID,
					'anim' => ''
					);
				}
			
			// если это анимированная картинка
			else
				{
					$saveNewFrame = array(
					'tizer_file' => $newImageID,
					'x1' => '0',
					'y1' => '0',
					'x2' => $width,
					'y2' => $height,
					'w' => $width,
					'h' => $height,
					'id' => $newTeaserID,
					'cid' => $campID,
					'anim' => '1'
					);
				}
			
			$frameImage = postsend('http://gigamega.ru/tizer/save_image/' . $newTeaserID, $saveNewFrame);
			preg_match('@"status"\:"(.*?)"@', $frameImage, $frameImageResult);
			$frameImageResult = $frameImageResult[1];
			// echo "<br />Сохраняем рамку изображения newImageID: $newImageID";
			// echo "<br />\tОтвет saveImage: " . $frameImageResult;
			
			
			// если рамка удачно установлена, собственно сохраняем тизер
			if ($newImageResult == 'success') {
				// ======================================
				// собственно сохранение тизера
				// ======================================
				$postNewTeaser = array(  
			   'id' => $newTeaserID,
			   'title'  => $title,
			   'desc'  => $desc,
			   'uri'  => $teaserLink,
			   'bid'  => $price,
			   'submit'  => '1',
				);
				$saveTeaser = postsend('http://gigamega.ru/tizer/save/' . $newTeaserID, $postNewTeaser);
				echo "<br />Сохраняем тизер newTeaserID: $newTeaserID";
				preg_match('@"status"\:"(.*?)"@', $saveTeaser, $saveTeaserResult);
				$saveTeaserResult = $saveTeaserResult[1];
				if ($newImageResult == 'success') {
					// echo "<br />\tОтвет saveTeaser: " . $saveTeaserResult;
					// инкрементируем счетчик удачных тизеров
					$teaserCounter++;
					session_write_close(); ob_flush(); flush();
					}
				// если тизер не сохранен
				else {
					echo "<br />\t<h1>Ошибка сохранения тизера</h1>";
					echo "<br />\tОтвет saveImage: " . dues($saveTeaser);
					session_write_close(); ob_flush(); flush();
					}
				}
			// если рамка НЕ установлена
			else {
				echo "<br />\t<h1>Ошибка установки рамки</h1>";
				echo "<br />\tОтвет saveImage: " . dues($frameImage);
				session_write_close(); ob_flush(); flush();
				}
			}
		// если изображение не загружено
		else {
			echo "<br />\t<h1>Ошибка загрузки изображения</h1>";
			echo "<br />\tОтвет newImage: " . dues($newImage);
			session_write_close(); ob_flush(); flush();
			}
		session_write_close(); ob_flush(); flush();
		}
	}


// вывод статистики по работе скрипта
echo '<br /><br />Added new camps: ' . $campCounter;
echo '<br />Added new teasers: ' . $teaserCounter;
echo '<br />Pause time: ' . $counterWait;
echo '<br /><br />Exec time: ' . round((microtime(true) - $mtime) * 1, 4) . ' s.';
echo '<h1>Проставить Blacklist!</h1>';
echo '</pre>';


// ======================================
// вывод страницу кампаний
// ======================================
// echo load_page('https://gm.com/camps.php', $headers = false, $reff ='');

// ======================================
// ставим кампанию на паузу https://gm.com/camps.php?pause=55839 или плэй https://gm.com/camps.php?play=55842
// ======================================
// load_page('https://gm.com/camps.php?pause=' . $campID, $headers = false, $reff ='');

// echo "<pre>";
// print_r($teaserTextArray);
// echo "</pre>";

// так можно вывести таблицу с тизерами (ВНИМАНИЕ!!! ниже тоже надо будет включить вывод!!!)
// echo '<table><tr align="center"><!--<td>Импорт</td>--><td>Картинка</td><td>Текст</td></tr>';
// echo '<tr><!--<td ><input type="checkbox"  checked id="c' . $key . '" value="' . $key . '"></td>--><td ><img src="' . $imgPath . '"></td><td >' . $textLineUTF . "<br />Camp ID=" . $campID . "<br />Teaser ID=" . $teaserID . '</td></tr>';
// echo '</table>';

// $newCampID = str_ireplace('+61 (2) 8005 8119', '', $newCampID);
// preg_match('@href="(.*?)edit">@', $newCamp, $newCampID);





// так лил на конвеер с 130115
// $campsURLArray = array(
// array ('schv','Счастливы вместе','http://rucfun.com/gamelovemarriage/?subid=20572&utm_source=gm&utm_medium={TEASER_ID}&ukey={SITE_ID}', '2.00','1485'),
// array ('frsg','Форсаж','http://rucfun.com/gameforsage/?subid=20572&utm_source=gm&utm_medium={TEASER_ID}&ukey={SITE_ID}', '2.00','1482'),
// array ('mstl','Мстители','http://rucfun.com/gamemstiteli/?subid=20572&utm_source=gm&utm_medium={TEASER_ID}&ukey={SITE_ID}', '2.00','1476'),
// array ('avtr','Аватар','http://rucfun.com/gameavatar/?subid=20572&utm_source=gm&utm_medium={TEASER_ID}&ukey={SITE_ID}', '2.00','1478'),
// array ('awar','Небесные войны','http://rucfun.com/gameairwars/?subid=20572&utm_source=gm&utm_medium={TEASER_ID}&ukey={SITE_ID}', '2.00','1479'),
// array ('cstr','Каунтерстрайк','http://rucfun.com/gamestrikeelite/?subid=20572&utm_source=gm&utm_medium={TEASER_ID}&ukey={SITE_ID}', '2.00','1480'),
// array ('mk','Мортал Комбат','http://rucfun.com/gamemortalkombat/?subid=20572&utm_source=gm&utm_medium={TEASER_ID}&ukey={SITE_ID}', '2.00','1481'),
// array ('grzv','Гонки грузовиков','http://rucfun.com/gametruck/?subid=20572&utm_source=gm&utm_medium={TEASER_ID}&ukey={SITE_ID}', '2.00','1483'),
// array ('rtr2','Русские гонки','http://rucfun.com/gamerusracing/?subid=20572&utm_source=gm&utm_medium={TEASER_ID}&ukey={SITE_ID}', '2.00','1484'),
// array ('spdr','Человек-паук','http://rucfun.com/gamespiderman/?subid=20572&utm_source=gm&utm_medium={TEASER_ID}&ukey={SITE_ID}', '2.00','1486'),
// array ('stlk','Сталкер','http://rucfun.com/gamestalker/?subid=20572&utm_source=gm&utm_medium={TEASER_ID}&ukey={SITE_ID}', '2.00','1487'),
// array ('strr','Уличные гонки','http://rucfun.com/gameracing/?subid=20572&utm_source=gm&utm_medium={TEASER_ID}&ukey={SITE_ID}', '2.00','1488'),
// array ('sumr','Сумерки','http://rucfun.com/gamesum/?subid=20572&utm_source=gm&utm_medium={TEASER_ID}&ukey={SITE_ID}', '2.00','1489'),
// array ('tank','Танки','http://rucfun.com/gamewot/?subid=20572&utm_source=gm&utm_medium={TEASER_ID}&ukey={SITE_ID}', '2.00','1490'),
// array ('trns','Трансформеры','http://rucfun.com/gametrans/?subid=20572&utm_source=gm&utm_medium={TEASER_ID}&ukey={SITE_ID}', '2.00','1491'),
// array ('unvr','Универ','http://rucfun.com/gameuniver/?subid=20572&utm_source=gm&utm_medium={TEASER_ID}&ukey={SITE_ID}', '2.00','1492'),
// array ('zshk','Закрытая школа','http://rucfun.com/gamesch/?subid=20572&utm_source=gm&utm_medium={TEASER_ID}&ukey={SITE_ID}', '2.00','1493'),
// array ('zmbi','Зомби','http://rucfun.com/gamezombie/?subid=20572&utm_source=gm&utm_medium={TEASER_ID}&ukey={SITE_ID}', '2.00','1494'),
// array ('half','Халф Лайф','http://rucfun.com/gamehl3online/?subid=20572&utm_source=gm&utm_medium={TEASER_ID}&ukey={SITE_ID}', '2.00','1477'),
// array ('dblo','Диабло3','http://rucfun.com/gamedeablo/?subid=20572&utm_source=gm&utm_medium={TEASER_ID}&ukey={SITE_ID}', '2.00','1643'),
// array ('spnz','Спецназ','http://rucfun.com/gamespecnaz/?subid=20572&utm_source=gm&utm_medium={TEASER_ID}&ukey={SITE_ID}', '2.00','1644'),
// array ('taxi','Таксист','http://rucfun.com/gamecrazytaxi/?subid=20572&utm_source=gm&utm_medium={TEASER_ID}&ukey={SITE_ID}', '2.00','1645'),
// array ('wlkn','Мертвецы','http://rucfun.com/gamewalkingdead/?subid=20572&utm_source=gm&utm_medium={TEASER_ID}&ukey={SITE_ID}', '2.00','1646'),
// array ('brtv','Братва','http://rucfun.com/gamemvsb/?subid=20572&utm_source=gm&utm_medium={TEASER_ID}&ukey={SITE_ID}', '2.00','1647'),
// array ('gta5','GTA 5','http://rucfun.com/gamegta5/?subid=20572&utm_source=gm&utm_medium={TEASER_ID}&ukey={SITE_ID}', '2.00','1648'),
// );

?>
