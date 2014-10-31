<?php

	$query = "SELECT * FROM `states`";

	$state_result = doquery($query);

	$query = "SELECT * FROM `cities`";

	$city_result = doquery($query);

	$query = "SELECT * FROM `zones`";

	$zone_result = doquery($query);

?>

<div class="add-content">

	<h1>افزودن موقعیت مکانی:</h1>

	<form action="insert-location.php" method="get">

		<div class="add-location-item">

			<select class="location-select" name="state">

				<option value="def">-- استان را انتخاب نمایید --</option>

				<?php

					if ($state_result){

						for ($i = 0; $i < mysqli_num_rows($state_result); $i++){

							$state_resultArray = fetch($state_result);

							echo "<option value=\"" . $state_resultArray['id'] . "\">" . $state_resultArray['name'] . "</option>";

						}
					}


				?>

			</select>

			<div class="form-rename-btn" id="rename-state">ویرایش</div>

			<div class="add-location-collapser">+</div>

			<div class="add-box">

				<input type="text" class="text" name="added-state-name">

				<input type="submit" class="form-submit-btn" name="submit-state" value="درج استان">

			</div>

		</div>

		<div class="add-location-item">

			<select class="location-select" name="city">

				<option value="def">-- شهر را انتخاب نمایید --</option>



				<?php

					if ($city_result){

						for ($i = 0; $i < mysqli_num_rows($city_result); $i++){

							$city_resultArray = fetch($city_result);

							echo "<option value=\"" . $city_resultArray['id'] . "\">" . $city_resultArray['name'] . "</option>";

						}
					}

					// if (rows($city_resultArray_result) > 0)
					// {

					// 	$city = fetch($city_result);

					// 	echo "<option value=\"" . $city['id'] . "\">" . $city['name'] . "</option>";

					// }

				?>


			</select>

			<div class="form-rename-btn" id="rename-city" >ویرایش</div>

			<div class="add-location-collapser">+</div>

			<div class="add-box">

				<input type="text" class="text" name="added-city-name">

				<input type="submit" class="form-submit-btn" name="submit-city" value="درج شهر">

			</div>

		</div>

		<div class="add-location-item">

			<select class="location-select" name="zone">

				<option value="def">-- منطقه را انتخاب نمایید --</option>

				<?php

					if ($zone_result){

						for ($i = 0; $i < mysqli_num_rows($zone_result); $i++){

							$zone_resultArray = fetch($zone_result);

							echo "<option value=\"" . $zone_resultArray['id'] . "\">" . $zone_resultArray['name'] . "</option>";

						}
					}

					// if (rows($zone_result) > 0)
					// {

					// 	$zone = fetch($zone_result);

					// 	echo "<option value=\"" . $zone['id'] . "\">" . $zone['name'] . "</option>";

					// }

				?>


			</select>

			<div class="form-rename-btn" id="rename-zone" >ویرایش</div>

			<div class="add-location-collapser">+</div>

			<div class="add-box">

				<input type="text" class="text" name="added-zone-name">

				<input type="submit" class="form-submit-btn" name="submit-zone" value="درج منطقه">

			</div>

		</div>

	</form>

</div>