<?php

	$query = "SELECT * FROM `states`";

	$state_result = doquery($query);

?>

<div class="add-content">

	<div class="location-def">

		<h2>موقعیت جغرافیایی: </h2>

		<div class="add-location-item" id="state">

			<select class="location-select" id="state-combobox">

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

			<select class="location-select" name="city" id="city-combobox">

				<option value="none">-- همه شهرها --</option>

			</select>

			<select class="location-select" name="zone" id="zone-combobox">

				<option value="none">-- همه مناطق --</option>


			</select>

			<div class="item">

				<h2>آدرس: </h2>

				<input style="width: 635px" name="address" class="text" type="text">

			</div>

		</div>

		<select name="estate-type" style="width: 340px" id="estate-kind">

			<option value="-1">-- نوع ملک را انتخاب نمایید  --</option>

			<option value="1" >خانه-ویلا</option>
			<option value="2" >زمین</option>
			<option value="3" >آپارتمان</option>
			<option value="4" >اداری-مطب-دفتر</option>
			<option value="5" >تجاری-پاساژ-مغازه</option>
			<option value="6" >سوله-کارگاه-کارخانه</option>
			<option value="7" >چهاردیواری</option>
			<option value="8" >باغ-زمین کشاورزی</option>
			<option value="9" >دامداری-دامپروری</option>

		</select>

		<select name="deal-type" style="width: 340px" id="deal-kind">

			<option value="-1">-- نوع معامله را انتخاب نمایید --</option>

			<option value="1">رهن و اجاره</option>
			<option value="2">خرید و فروش</option>
			<option value="3">پیش فروش</option>
			<option value="4">مشارکت</option>
			<option value="5">معاوضه</option>

		</select>

		<div class="item">

			<select name="nama" style="width: 340px" id="view">

				<option>-- نما --</option>

				<option>آجر</option>
				<option>آلومينيوم</option>
				<option>سراميک</option>
				<option>آجر سه سانت</option>
				<option>گرانيت</option>
				<option>کنيتکس</option>
				<option>کنيتکس و رومي</option>
				<option>تراورتن</option>
				<option>شيشه</option>
				<option>سنگ</option>
				<option>سنگ و رومي</option>
				<option>سنگ و شيشه</option>
				<option>رفلکس</option>
				<option>کلاسيک</option>
				<option>سيمان</option>
				<option>آلومينيوم و شيشه</option>
				<option>رومي</option>
				<option>سيمان و شيشه</option>
				<option>کامپوزيت</option>
				<option>رومالین</option>
				<option>سفال</option>
				<option>ترکیبی</option>

			</select>

		</div>

	</div>

	<!-- <h1>مشخصات ملک:</h1> -->

	<div class="estate-def">

		<div class="item">

			<label>قیمت متری: </label>

			<input name="unit-price" class="text" type="text"><span class="tag">تومـــــــــان</span>

			<label>قیمت ملک: </label>

			<input name="total-price" class="text" type="text"><span class="tag">تومـــــــــان</span>

		</div>

		<div class="item">

			<label>مساحت زمین: </label>

			<input name="zamin" class="text" type="text"><span class="tag">مترمربع</span>

			<label>زیربنــا: </label>

			<input name="zirbana" class="text" type="text"><span class="tag">مترمربع</span>

		</div>

		<div class="item">

			<select name="floor" style="width: 100px" id="floor-number">

				<option>- طبقه -</option>

				<option>1</option>
				<option>2</option>
				<option>3</option>
				<option>4</option>
				<option>5</option>
				<option>6</option>

			</select>

			<select name="room" style="width: 100px">

				<option>- خواب -</option>

				<option>1</option>
				<option>2</option>
				<option>3</option>
				<option>4</option>
				<option>5</option>
				<option>6</option>

			</select>

			<select name="kafpoosh" style="width: 150px">

				<option>- نوع کفپوش -</option>

				<option>نا مشخص</option>
				<option>پارکت</option>
				<option>سراميک</option>
				<option>سنگ</option>
				<option>موکت</option>
				<option>پارکت سنگ</option>
				<option>تکسرام</option>
				<option>سنگ سراميک</option>
				<option>موزائيک</option>
				<option>موزائيک سنگ</option>
				<option>موکت پارکت</option>
				<option>موکت سراميک</option>
				<option>HDF</option>
				<option>HPF</option>
				<option>PVC</option>
				<option>TVC</option>
				<option>آجر</option>
				<option>آکواريوم</option>
				<option>بتون</option>
				<option>برنز</option>
				<option>پارکت سراميک</option>
				<option>پارکت موزائيک</option>
				<option>پارکت کفپوش</option>
				<option>تکسرام پارکت</option>
				<option>تکسرام سنگ</option>
				<option>تکسرام و برنز</option>
				<option>چوبي</option>
				<option>دلخواه</option>
				<option>سراميک برنز</option>
				<option>سراميک موزائيک</option>
				<option>سنگ برنز</option>
				<option>سنگ دهبيد</option>
				<option>سنگ سيمان</option>
				<option>سنگ گرانيت</option>
				<option>سنگ موزائيک</option>
				<option>سنگ مکالئوم</option>
				<option>سيمان</option>
				<option>سيمان سراميک</option>
				<option>سيمان موزائيک</option>
				<option>شيشه</option>
				<option>فوم</option>
				<option>گرانيت</option>
				<option>گرانيت سراميک</option>
				<option>گرانيت سنگ</option>
				<option>گرانيت موکت</option>
				<option>لامنيت</option>
				<option>موزائيک پارکت</option>
				<option>موزائيک سراميک</option>
				<option>موزائيک موکت</option>
				<option>موزائيک کاشي</option>
				<option>موکت تکسرام</option>
				<option>موکت سنگ</option>
				<option>موکت مکالئوم</option>
				<option>مکالئوم</option>
				<option>مکالئوم سراميک</option>
				<option>مکالئوم سنگ</option>
				<option>مکالئوم موکت</option>
				<option>کاشي</option>
				<option>کاشي سراميک</option>
				<option>کاشي سنگ</option>
				<option>کاشي موکت</option>
				<option>کف پوش سنگ</option>
				<option>کفپوش</option>

			</select>

		</div>

	</div>

	<!-- <h1>امکانات ملک:</h1> -->

	<div class="options-def">

		<div class="item">

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

		<div class="item">

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

		<div class="item">

			<h2>امکانات رفاهی: </h2>

			<ul class="mj-radiogroup">

				<li class="mj-radio"><input class="dom-radio" name="open" type="radio">آشپزخانه اوپن</li>

				<li class="mj-radio"><input class="dom-radio" name="asansor" type="radio">آسانسور</li>

				<li class="mj-radio"><input class="dom-radio" name="mostakhdem" type="radio">مستخدم</li>

				<li class="mj-radio"><input class="dom-radio" name="seraidar" type="radio">سرایدار</li>

				<li class="mj-radio"><input class="dom-radio" name="pool" type="radio">استخر</li>

				<li class="mj-radio"><input class="dom-radio" name="sona" type="radio">سونا</li>

				<li class="mj-radio"><input class="dom-radio" name="jakoozi" type="radio">جکوزی</li>

			</ul>

		</div>

		<div class="item" id="pic-upload">

			<h2>تصاویر ملک:</h2>

			<div class="add-pic">

				<div class="text-nothin"></div>

				<input id="file-location"  accept="image/*" type="file" name="browse01" style="display:none" />

				<input type="hidden" name="filename1" style="direction: ltr; background: transparent; position: absolute; top:0; left: 0;">

			</div>

			<div class="add-pic">

				<div class="text-nothin"></div>

				<input id="file-location"  accept="image/*" type="file" name="browse02" style="display:none" />

				<input type="hidden" name="filename2" style="direction: ltr; background: transparent; position: absolute; top:0; left: 0;">

			</div>

			<div class="add-pic">

				<div class="text-nothin"></div>

				<input id="file-location"  accept="image/*" type="file" name="browse03" style="display:none" />

				<input type="hidden" name="filename3" style="direction: ltr; background: transparent; position: absolute; top:0; left: 0;">

			</div>

		</div>

	</div>

	<div class="item-submit">

		<input name="insert-submit" type="submit" class="form-submit-btn" value="ثبت ملک">

	</div>

</form>

</div>

<script src="../scripts/js/lib/location-loader.js"></script>

<script src="../scripts/js/lib/DragPhotoPackage.js"></script>
