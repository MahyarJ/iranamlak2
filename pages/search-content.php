<?php

	$query = "SELECT * FROM `states`";

	$state_result = doquery($query);

?>

<div class="search-content">

	<form name="addnew" action="index.php" method="get">

		<?php

			$deal = 'none';

			$estate = 'none';

			if (isset($_GET['deal'])) $deal = $_GET['deal'];

			if (isset($_GET['estate'])) $estate = $_GET['estate'];

			echo "<input style=\"display: none\" type=\"text\" name=\"deal\" value=\"" . $deal . "\">";

			echo "<input style=\"display: none\" type=\"text\" name=\"estate\" value=\"" . $estate . "\">";

		?>

		<div class="city-def">

			<!-- <h1>موقعیت ملک:</h1> -->

			<input name="search-submit" type="submit" class="mini-search-btn" value="">

			<!-- <div class="mini-search-btn"></div> -->

			<select name="state" >

				<option value="none">-- همه استانها --</option>

				<?php

					if ($state_result){

						for ($i = 0; $i < mysqli_num_rows($state_result); $i++){

							$state_resultArray = fetch($state_result);

							echo "<option value=\"" . $state_resultArray['id'] . "\">" . $state_resultArray['name'] . "</option>";

						}
					}


				?>

			</select>

			<select name="city">

				<option value="none">-- همه شهرها --</option>

				<?php

					if ($city_result){

						for ($i = 0; $i < mysqli_num_rows($city_result); $i++){

							$city_resultArray = fetch($city_result);

							echo "<option value=\"" . $city_resultArray['id'] . "\">" . $city_resultArray['name'] . "</option>";

						}
					}

				?>

			</select>

			<select name="part">

				<option value="none">-- همه مناطق --</option>

				<?php

					if ($zone_result){

						for ($i = 0; $i < mysqli_num_rows($zone_result); $i++){

							$zone_resultArray = fetch($zone_result);

							echo "<option value=\"" . $zone_resultArray['id'] . "\">" . $zone_resultArray['name'] . "</option>";

						}
					}

				?>

			</select>

		</div>

		<!-- <h1>مشخصات ملک:</h1> -->

		<div class="estate-def">

			<div class="item">

				<label for="price-range-field">محدوده قیمت: </label>

				<input class="range-field" type="text" id="price-range-field">

				<input class="range-field" type="hidden" id="price-range" name="price-range">

				<div id="price-slider-range"></div>

			</div>

			<div class="item">

				<label for="area-range-field">محدوده مساحت: </label>

				<input class="range-field" type="text" id="area-range-field">

				<input class="range-field" type="hidden" id="area-range" name="area-range">

				<div id="area-slider-range"></div>

			</div>

			<div class="item" data-not-support-estate="[2,5,6,7,8,9]">

				<label for="room-range-field">تعداد اتاقها: </label>

				<input class="range-field" type="text" id="room-range-field">

				<input class="range-field" type="hidden" id="room-range" name="room-range">

				<div id="room-slider-range"></div>

			</div>

			<div class="item" data-not-support-estate="[2,8,9]">

				<label for="age-range-field">سن بنــا: </label>

				<input class="range-field" type="text" id="age-range-field">

				<input class="range-field" type="hidden" id="age-range" name="age-range">

				<div id="age-slider-range"></div>

			</div>

		</div>

		<!-- <h1>امکانات ملک:</h1> -->

		<div class="options-def">

			<div class="item" data-not-support-estate="[2,8]">

				<h2>امکانات گرمایشی / سرمایشی: </h2>

				<ul class="mj-radiogroup">

					<li class="mj-radio"><input class="dom-radio" name="shofaj" type="radio">شوفاژ</li>

					<li class="mj-radio"><input class="dom-radio" name="pakage" type="radio">پکیج</li>

					<li class="mj-radio"><input class="dom-radio" name="bokhari" type="radio">بخاری/گاز</li>

					<li class="mj-radio"><input class="dom-radio" name="kooler" type="radio">کولر</li>

					<li class="mj-radio"><input class="dom-radio" name="split" type="radio">اسپیلت</li>

					<li class="mj-radio"><input class="dom-radio" name="chiler" type="radio">چیلر</li>

					<li class="mj-radio"><input class="dom-radio" name="fankoel" type="radio">فن کوئل</li>

				</ul>

			</div>

			<div class="item" data-not-support-estate="[2,8]">

				<h2>فضاهای موجود: </h2>

				<ul class="mj-radiogroup">

					<li class="mj-radio"><input class="dom-radio" name="labi" type="radio">لابی</li>

					<li class="mj-radio"><input class="dom-radio" name="hayat" type="radio">حیاط</li>

					<li class="mj-radio"><input class="dom-radio" name="hayatkhalvat" type="radio">حیاط خلوت</li>

					<li class="mj-radio"><input class="dom-radio" name="anbari" type="radio">انباری</li>

					<li class="mj-radio"><input class="dom-radio" name="balkon" type="radio">بالکن</li>

					<li class="mj-radio"><input class="dom-radio" name="zirzamin" type="radio">زیر زمین</li>

					<li class="mj-radio"><input class="dom-radio" name="parking" type="radio">پارکینگ</li>

					<li class="mj-radio"><input class="dom-radio" name="pasio" type="radio">پاسیو</li>

				</ul>

			</div>

			<div class="item" data-not-support-estate="[2,6,8,9]">

				<h2>امکانات: </h2>

				<ul class="mj-radiogroup">

					<li class="mj-radio" data-not-support-estate="[4]"><input class="dom-radio" name="open" type="radio">آشپزخانه اوپن</li>

					<li class="mj-radio" data-not-support-estate="[5]"><input class="dom-radio" name="asansor" type="radio">آسانسور</li>

					<li class="mj-radio" data-not-support-estate="[5]"><input class="dom-radio" name="mostakhdem" type="radio">مستخدم</li>

					<li class="mj-radio"><input class="dom-radio" name="seraydar" type="radio">سرایدار</li>

					<li class="mj-radio" data-not-support-estate="[4,5]"><input class="dom-radio" name="estakhr" type="radio">استخر</li>

					<li class="mj-radio" data-not-support-estate="[4,5]"><input class="dom-radio" name="sona" type="radio">سونا</li>

					<li class="mj-radio" data-not-support-estate="[4,5]"><input class="dom-radio" name="jakoozi" type="radio">جکوزی</li>

					<li class="mj-radio" data-not-support-estate="[1,2,3,4,6,7,8,9]"><input class="dom-radio" name="donabsh" type="radio">دو نبش</li>

					<li class="mj-radio" data-not-support-estate="[1,2,3,4,6,7,8,9]"><input class="dom-radio" name="barmeidan" type="radio">بر میدان</li>

					<li class="mj-radio" data-not-support-estate="[1,2,3,4,6,7,8,9]"><input class="dom-radio" name="dakhelkuche" type="radio">داخل کوچه</li>

					<li class="mj-radio" data-not-support-estate="[1,2,3,4,6,7,8,9]"><input class="dom-radio" name="dakhelpasaj" type="radio">داخل پاساژ</li>

				</ul>

			</div>

			<div class="item-submit">

				<input name="search-submit" type="submit" class="form-submit-btn" value="جستجوی ملک">

			</div>

		</div>

	</form>

	<div class="search-content-tab">جستجوی پیشرفته</div>

</div>