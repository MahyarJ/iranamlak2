<?php

	$query = "SELECT * FROM `states`";

	$state_result = doquery($query);

?>

<div class="add-content">

	<h1>افزودن موقعیت مکانی:</h1>


		<div class="add-location-item" id="state">

			<select class="location-select" id="state-combobox">

				<option value="none">-- استان را انتخاب نمایید --</option>

				<?php

					if ($state_result){

						for ($i = 0; $i < mysqli_num_rows($state_result); $i++){

							$state_resultArray = fetch($state_result);

							echo "<option value=\"" . $state_resultArray['id'] . "\">" . $state_resultArray['name'] . "</option>";

						}
					}


				?>

			</select>

			<div class="add-location-collapser">+</div>

			<div class="add-box">

				<input type="text" class="text" id="added-state-name">

				<div class="form-submit-btn" id="insert-state-submit">ثبت استان</div>

			</div>

		</div>



		<div class="add-location-item" id="city">

			<select class="location-select" name="city" id="city-combobox">

				<option value="none">-- شهر را انتخاب نمایید --</option>

			</select>

			<div class="add-location-collapser">+</div>

			<div class="add-box">

				<input type="text" class="text" id="added-city-name">

				<div class="form-submit-btn" id="insert-city-submit">ثبت شهر</div>

			</div>

		</div>



		<div class="add-location-item" id="zone">

			<select class="location-select" name="zone" id="zone-combobox">

				<option value="none">-- منطقه را انتخاب نمایید --</option>


			</select>

			<div class="add-location-collapser">+</div>

			<div class="add-box">

				<input type="text" class="text" id="added-zone-name">

				<div class="form-submit-btn" id="insert-zone-submit">ثبت منطقه</div>

			</div>

		</div>


</div>

<script src="../scripts/js/lib/location-manage.js"></script>
