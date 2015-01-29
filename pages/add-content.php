<?php


function printOptionById($id, $array)
{
	$opt = $array[$id];

	if ($id == 0) $id = "none";

	echo "<option value=\"$id\">$opt</option>";
}

function printOption($opt)
{
	echo "<option>$opt</option>";
}

function getPictureSrc($uid, $id, $num)
{

	if ($uid && $id)
	{

		$url = '../upld/' . $uid . '/' . $id . '/filename' . $num . '.jpg' ;

		return "src=\"" . $url . "\"";
	}

	return "";

}

$id = null;
$resultarray = null;
$uid = $_SESSION['uid'];

if (isset($_GET['id']))
{

	$id = $_GET['id'];

	include_once 'core/database.php';
	include_once 'search-query.php';
	include_once 'database/states.php';
	include_once 'database/cities.php';
	include_once 'database/zone.php';
	include_once 'generate-estate-row.php';

	$searchQuery = new SearchQuery('estate');

	if ($uid){

		$searchQuery->simple('uid', $_SESSION['uid']);

	}

	$searchQuery->simple('id', $id);

	$result = doquery($searchQuery->buildQuery());

	if ($result){

		$resultarray = fetch($result);

	}
}

?>
<div class="add-content">

	<form method="post" action="new-estate.php">

		<div class="location-def">

			<h2>موقعیت جغرافیایی: </h2>

			<div class="add-location-item" id="state">

				<select class="location-select" name="state" id="state-combobox">

					<?php
						if ($resultarray != null){

							$state = getStateName($resultarray['state']);
							$stateId = $resultarray['state'];

							echo "<option value=\"$stateId\">$state</option>";

							$query = "SELECT * FROM `states`";

							$state_result = doquery($query);

							if ($state_result){

								for ($i = 0; $i < mysqli_num_rows($state_result); $i++){

									$state_resultArray = fetch($state_result);

									if ($state_resultArray['id'] == $stateId) continue;

									echo "<option value=\"" . $state_resultArray['id'] . "\">" . $state_resultArray['name'] . "</option>";

								}
							}

						} else {

							echo "<option value=\"none\">-- همه استانها --</option>";

							$query = "SELECT * FROM `states`";

							$state_result = doquery($query);

							if ($state_result){

								for ($i = 0; $i < mysqli_num_rows($state_result); $i++){

									$state_resultArray = fetch($state_result);

									echo "<option value=\"" . $state_resultArray['id'] . "\">" . $state_resultArray['name'] . "</option>";

								}
							}

						}
					?>

				</select>

				<select class="location-select" name="city" id="city-combobox">

					<?php
						if ($resultarray != null){

							$stateId = $resultarray['state'];

							$city = getCityName($resultarray['city']);
							$cityId = $resultarray['city'];

							echo "<option value=\"$cityId\">$city</option>";

							$query = "SELECT * FROM `cities` where `state_id` = '$stateId'";

							$city_result = doquery($query);

							if ($city_result){

								for ($i = 0; $i < mysqli_num_rows($city_result); $i++){

									$city_resultArray = fetch($city_result);

									if ($city_resultArray['id'] == $cityId) continue;

									echo "<option value=\"" . $city_resultArray['id'] . "\">" . $city_resultArray['name'] . "</option>";

								}
							}

						} else {

							echo "<option value=\"none\">-- همه شهرها --</option>";

						}
					?>



				</select>

				<select class="location-select" name="zone" id="zone-combobox">

					<?php
						if ($resultarray != null){

							$cityId = $resultarray['city'];

							$zone = getZoneName($resultarray['zone']);
							$zoneId = $resultarray['zone'];

							echo "<option value=\"$zoneId\">$zone</option>";

							$query = "SELECT * FROM `cities` where `city_id` = '$stateId'";

							$zone_result = doquery($query);

							if ($zone_result){

								for ($i = 0; $i < mysqli_num_rows($zone_result); $i++){

									$zone_resultArray = fetch($zone_result);

									if ($zone_resultArray['id'] == $zoneId) continue;

									echo "<option value=\"" . $zone_resultArray['id'] . "\">" . $zone_resultArray['name'] . "</option>";

								}
							}

						} else {

							echo "<option value=\"none\">-- همه مناطق --</option>";

						}
					?>

				</select>

				<div class="item">

					<h2>آدرس: </h2>

					<input style="width: 635px" name="address" class="text" type="text" <?php if ($resultarray != null) echo "value=\"" . $resultarray['address'] . "\""; ?> >

				</div>

			</div>

			<select name="estate-type" style="width: 340px" id="estate-kind">

				<?php

					$estateTypes = array("-- نوع ملک را انتخاب نمایید  --", "خانه-ویلا" , "زمین", "آپارتمان", "اداری-مطب-دفتر", "تجاری-پاساژ-مغازه", "سوله-کارگاه-کارخانه", "باغ-زمین کشاورزی", "دامداری-دامپروری");

					if ($resultarray != null)

						printOptionById((int) $resultarray['estate_type'], $estateTypes);

					else

						printOptionById(0, $estateTypes);

					for ($i=1; $i < count($estateTypes); $i++) {

						if ($i == (int) $resultarray['estate_type']) continue;

						printOptionById($i, $estateTypes);

					}
				?>

			</select>

			<select name="deal-type" style="width: 340px" id="deal-kind">

				<?php

					$dealTypes = array("-- نوع معامله را انتخاب نمایید --", "رهن و اجاره", "خرید و فروش", "پیش فروش", "مشارکت", "معاوضه");

					if ($resultarray != null)

						printOptionById((int) $resultarray['deal_type'], $dealTypes);

					else

						printOptionById(0, $dealTypes);

					for ($i=1; $i < count($dealTypes); $i++) {

						if ($i == (int) $resultarray['deal_type']) continue;

						printOptionById($i, $dealTypes);

					}

				?>

			</select>

			<div class="item" data-not-support-estate="[2,7,8]">

				<select name="nama" style="width: 340px" id="view">

					<?php

						$namaTypes = array("-- نما --", "آجر","آلومينيوم","سراميک","آجر سه سانت","گرانيت","کنيتکس","کنيتکس و رومي","تراورتن","شيشه","سنگ","سنگ و رومي","سنگ و شيشه","رفلکس","کلاسيک","سيمان","آلومينيوم و شيشه","رومي","سيمان و شيشه","کامپوزيت","رومالین","سفال","ترکیبی");

						if ($resultarray != null)

							printOption($resultarray['nama']);

						else

							printOption($namaTypes[0]);

						for ($i=1; $i < count($namaTypes); $i++) {

							if ($namaTypes[$i] == $resultarray['nama']) continue;

							printOption($namaTypes[$i]);

						}

					?>

				</select>

			</div>

		</div>

		<!-- <h1>مشخصات ملک:</h1> -->

		<div class="estate-def">

			<div class="item">

				<label>قیمت متری: </label>

				<input name="unit-price" class="text" type="text" <?php if ($resultarray != null) echo "value=\"" . $resultarray['unit_price'] . "\""; ?>><span class="tag">تومـــــــــان</span>

				<label>قیمت ملک: </label>

				<input name="total-price" class="text" type="text" <?php if ($resultarray != null) echo "value=\"" . $resultarray['total_price'] . "\""; ?>><span class="tag">تومـــــــــان</span>

			</div>

			<div class="item">

				<label>مساحت زمین: </label>

				<input name="zamin" class="text" type="text" <?php if ($resultarray != null) echo "value=\"" . $resultarray['zamin'] . "\""; ?>><span class="tag">مترمربع</span>

				<label data-not-support-estate="[2,7,8]">زیربنــا: </label>

				<input name="zirbana" class="text" type="text" data-not-support-estate="[2,7,8]" <?php if ($resultarray != null) echo "value=\"" . $resultarray['zirbana'] . "\""; ?>><span class="tag">مترمربع</span>

			</div>

			<div class="item">

				<select name="floor" style="width: 100px" id="floor-number" data-not-support-estate="[2,7,8]">

					<?php

						$floor = array("-- طبقه --", "1", "2" ,"3" ,"4" ,"5" ,"6");

						if ($resultarray != null)

							printOption($resultarray['floor']);

						else

							printOption($floor[0]);

						for ($i=1; $i < count($floor); $i++) {

							if ($floor[$i] == $resultarray['floor']) continue;

							printOption($floor[$i]);

						}

					?>

				</select>

				<select name="room" style="width: 100px" data-not-support-estate="[2,7,8]">

					<?php

						$room = array("-- طبقه --", "1", "2" ,"3" ,"4" ,"5" ,"6");

						if ($resultarray != null)

							printOption($resultarray['room']);

						else

							printOption($room[0]);

						for ($i=1; $i < count($room); $i++) {

							if ($room[$i] == $resultarray['room']) continue;

							printOption($room[$i]);

						}

					?>

				</select>

				<select name="kafpoosh" style="width: 150px" data-not-support-estate="[2,7,8]">

					<?php

						$kafpoosh = array("-- نوع کفپوش --" , "نا مشخص", "پارکت", "سراميک", "سنگ", "موکت", "پارکت سنگ", "تکسرام", "سنگ سراميک", "موزائيک", "موزائيک سنگ", "موکت پارکت", "موکت سراميک", "HDF", "HPF", "PVC", "TVC", "آجر", "آکواريوم", "بتون", "برنز", "پارکت سراميک", "پارکت موزائيک", "پارکت کفپوش", "تکسرام پارکت", "تکسرام سنگ", "تکسرام و برنز", "چوبي", "دلخواه", "سراميک برنز", "سراميک موزائيک", "سنگ برنز", "سنگ دهبيد", "سنگ سيمان", "سنگ گرانيت", "سنگ موزائيک", "سنگ مکالئوم", "سيمان", "سيمان سراميک", "سيمان موزائيک", "شيشه", "فوم", "گرانيت", "گرانيت سراميک", "گرانيت سنگ", "گرانيت موکت", "لامنيت", "موزائيک پارکت", "موزائيک سراميک", "موزائيک موکت", "موزائيک کاشي", "موکت تکسرام", "موکت سنگ", "موکت مکالئوم", "مکالئوم", "مکالئوم سراميک", "مکالئوم سنگ", "مکالئوم موکت", "کاشي", "کاشي سراميک", "کاشي سنگ", "کاشي موکت", "کف پوش سنگ", "کفپوش");

						if ($resultarray != null)

							printOption($resultarray['kafpoosh']);

						else

							printOption($kafpoosh[0]);

						for ($i=1; $i < count($kafpoosh); $i++) {

							if ($kafpoosh[$i] == $resultarray['kafpoosh']) continue;

							printOption($kafpoosh[$i]);

						}

					?>

				</select>

			</div>

		</div>

		<!-- <h1>امکانات ملک:</h1> -->

		<div class="options-def">

			<?php

				$options = null;

				if ($resultarray != null)

					$options = $resultarray["options"];

				function getRadioValue($id, $options)
				{

					if ($options != null)

						if ($options[$id] == "1")

							return true;

					return false;

				}

				function getClass($id, $options)
				{
					if (getRadioValue($id, $options))

						return "class=\"mj-radio selected\"";

					return "class=\"mj-radio\"";
				}

				function getChecked($id, $options)
				{
					if (getRadioValue($id, $options))

						return " checked";

					return "";
				}

			?>

			<div class="item" data-not-support-estate="[2,7]">

				<h2>امکانات گرمایشی / سرمایشی: </h2>

				<ul class="mj-radiogroup">

					<li <?php echo getClass(0, $options); ?>><input class="dom-radio" <?php echo getChecked(0, $options); ?> name="shofaj" type="radio">شوفاژ</li>

					<li <?php echo getClass(1, $options); ?>><input class="dom-radio" <?php echo getChecked(1, $options); ?> name="pakage" type="radio">پکیج</li>

					<li <?php echo getClass(2, $options); ?>><input class="dom-radio" <?php echo getChecked(2, $options); ?> name="bokhari" type="radio">بخاری/گاز</li>

					<li <?php echo getClass(3, $options); ?>><input class="dom-radio" <?php echo getChecked(3, $options); ?> name="kooler" type="radio">کولر</li>

					<li <?php echo getClass(4, $options); ?>><input class="dom-radio" <?php echo getChecked(4, $options); ?> name="split" type="radio">اسپیلت</li>

					<li <?php echo getClass(5, $options); ?>><input class="dom-radio" <?php echo getChecked(5, $options); ?> name="chiler" type="radio">چیلر</li>

					<li <?php echo getClass(6, $options); ?>><input class="dom-radio" <?php echo getChecked(6, $options); ?> name="fankoel" type="radio">فن کوئل</li>

				</ul>

			</div>

			<div class="item" data-not-support-estate="[2,7]">

				<h2>فضاهای موجود: </h2>

				<ul class="mj-radiogroup">

					<li <?php echo getClass(7, $options); ?>><input class="dom-radio" <?php echo getChecked(7, $options); ?> name="labi" type="radio">لابی</li>

					<li <?php echo getClass(8, $options); ?>><input class="dom-radio" <?php echo getChecked(8, $options); ?> name="hayat" type="radio">حیاط</li>

					<li <?php echo getClass(9, $options); ?>><input class="dom-radio" <?php echo getChecked(9, $options); ?> name="hayatkhalvat" type="radio">حیاط خلوت</li>

					<li <?php echo getClass(10, $options); ?>><input class="dom-radio" <?php echo getChecked(10, $options); ?> name="anbari" type="radio">انباری</li>

					<li <?php echo getClass(11, $options); ?>><input class="dom-radio" <?php echo getChecked(11, $options); ?> name="balkon" type="radio">بالکن</li>

					<li <?php echo getClass(12, $options); ?>><input class="dom-radio" <?php echo getChecked(12, $options); ?> name="zirzamin" type="radio">زیر زمین</li>

					<li <?php echo getClass(13, $options); ?>><input class="dom-radio" <?php echo getChecked(13, $options); ?> name="parking" type="radio">پارکینگ</li>

					<li <?php echo getClass(14, $options); ?>><input class="dom-radio" <?php echo getChecked(14, $options); ?> name="pasio" type="radio">پاسیو</li>

				</ul>

			</div>

			<div class="item" data-not-support-estate="[2,6,7,8]">

				<h2>امکانات: </h2>

				<ul class="mj-radiogroup">

					<li <?php echo getClass(15, $options); ?> data-not-support-estate="[4]"><input class="dom-radio" <?php echo getChecked(15, $options); ?> name="open" type="radio">آشپزخانه اوپن</li>

					<li <?php echo getClass(16, $options); ?> data-not-support-estate="[5]"><input class="dom-radio" <?php echo getChecked(16, $options); ?> name="asansor" type="radio">آسانسور</li>

					<li <?php echo getClass(17, $options); ?> data-not-support-estate="[5]"><input class="dom-radio" <?php echo getChecked(17, $options); ?> name="mostakhdem" type="radio">مستخدم</li>

					<li <?php echo getClass(18, $options); ?>><input class="dom-radio" <?php echo getChecked(18, $options); ?> name="seraydar" type="radio">سرایدار</li>

					<li <?php echo getClass(19, $options); ?> data-not-support-estate="[4,5]"><input class="dom-radio" <?php echo getChecked(19, $options); ?> name="estakhr" type="radio">استخر</li>

					<li <?php echo getClass(20, $options); ?> data-not-support-estate="[4,5]"><input class="dom-radio" <?php echo getChecked(20, $options); ?> name="sona" type="radio">سونا</li>

					<li <?php echo getClass(21, $options); ?> data-not-support-estate="[4,5]"><input class="dom-radio" <?php echo getChecked(21, $options); ?> name="jakoozi" type="radio">جکوزی</li>

					<li <?php echo getClass(22, $options); ?> data-not-support-estate="[1,2,3,4,6,7,8]"><input class="dom-radio" <?php echo getChecked(22, $options); ?> name="donabsh" type="radio">دو نبش</li>

					<li <?php echo getClass(23, $options); ?> data-not-support-estate="[1,2,3,4,6,7,8]"><input class="dom-radio" <?php echo getChecked(23, $options); ?> name="barmeidan" type="radio">بر میدان</li>

					<li <?php echo getClass(24, $options); ?> data-not-support-estate="[1,2,3,4,6,7,8]"><input class="dom-radio" <?php echo getChecked(24, $options); ?> name="dakhelkuche" type="radio">داخل کوچه</li>

					<li <?php echo getClass(25, $options); ?> data-not-support-estate="[1,2,3,4,6,7,8]"><input class="dom-radio" <?php echo getChecked(25, $options); ?> name="dakhelpasaj" type="radio">داخل پاساژ</li>

				</ul>

			</div>

			<div class="item" id="pic-upload">

				<h2>تصاویر ملک:</h2>

				<div class="add-pic">

					<div class="text-nothin"></div>

					<input id="file-location"  accept="image/*" type="file" name="browse01"/>

					<input type="hidden" name="filename1" style="direction: ltr; background: transparent; position: absolute; top:0; left: 0;">

					<img <?php echo getPictureSrc($uid, $id, 1); ?> class="hole-image">

				</div>

				<div class="add-pic">

					<div class="text-nothin"></div>

					<input id="file-location"  accept="image/*" type="file" name="browse02"/>

					<input type="hidden" name="filename2" style="direction: ltr; background: transparent; position: absolute; top:0; left: 0;">

					<img <?php echo getPictureSrc($uid, $id, 2); ?> class="hole-image">

				</div>

				<div class="add-pic">

					<div class="text-nothin"></div>

					<input id="file-location"  accept="image/*" type="file" name="browse03"/>

					<input type="hidden" name="filename3" style="direction: ltr; background: transparent; position: absolute; top:0; left: 0;">

					<img <?php echo getPictureSrc($uid, $id, 3); ?> class="hole-image">

				</div>

			</div>

		</div>

		<div class="item-submit">

			<?php
				if ($resultarray){

					echo "<input type='hidden' name='id' value='" . $id . "'>";

					echo "<input name=\"update-submit\" type=\"submit\" class=\"form-submit-btn\" value=\"ثبت ملک\">";

				}else

					echo "<input name=\"insert-submit\" type=\"submit\" class=\"form-submit-btn\" value=\"ثبت ملک\">";
			?>

		</div>

	</form>

</div>

<script src="../scripts/js/lib/removeUnwantedTypes.js"></script>

<script src="../scripts/js/lib/location-loader.js"></script>

<script src="../scripts/js/lib/DragPhotoPackage.js"></script>
