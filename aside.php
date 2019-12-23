
<div class="offer__filter-btn" id="open__btn-head">
	<div class="offer__filter-btnFlex d-flex">
		<img src="img/arrowDown.png" alt="" class="img__btn">
		<p class="offer__filter-btnText">
			Показать фильтры
		</p>
	</div>
</div>
<div class="offer__filter-btn-ff" id="btn-ff">
	<div class="offer__filter-btn-ffBLock d-flex">
		<img src="img/arrowLeft.png" class="arrowLeft__btn" id="arrowLeft__btn">
		<p class="offer__filter-btn-ffText">
			Фильтры
		</p>
		<img src="img/OK.png" class="OK__btn" id="OK__btn">
	</div>
</div>

<aside class="offer__filter" id="close__btn-head">

	<div class="cd-tab-filter-wrapper">
		<div class="cd-tab-filter">
			<ul class="cd-filters d-flex">
				<li class="filter">
					<a class="selected" href="#0" data-type="all">
						<svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M8.82861 2.82843L3.17176 8.48528" stroke="#333333" stroke-linecap="round" stroke-linejoin="round" />
							<path d="M8.82861 8.48528L3.17176 2.82843" stroke="#333333" stroke-linecap="round" stroke-linejoin="round" />
						</svg>
					</a>
				</li>
				<li class="filter">
					<a class="selected  ml-3" href="#0" data-type="all">Сбросить фильтр</a>
				</li>
			</ul>
		</div>
	</div>

	<div class="offer__form-line"></div>

	<div class="cd-filter">
		<form id="enter">

			<h4 class="offer__filter-title">Цена</h4>
			<div class="form-row d-flex">
				<div class="col">
					<label class="offer__form-label">От</label>
					<div class="form__list-item d-flex">
						<input type="text" class="form-control" placeholder="0">
						<p class="offer__form-text mr">р/м2</p>
					</div>
				</div>
				<div class="col">
					<label class="offer__form-label">До</label>
					<div class="form__list-item d-flex">
						<input type="text" class="form-control" placeholder="0">
						<p class="offer__form-text mt-2 ml-1">р/м2</p>
					</div>
				</div>
			</div>
			
			<div class="offer__form-line"></div>

			<div class="cd-filter-block">
				<div class="cd-filter-block-title d-flex">
					<h4 class="offer__filter-title mr__filter">Цвет</h4>
					<a class="svg__arrow" id="open__color">
						<img src="img/arrowUp.png" alt="" class="arrow">
					</a>
				</div>
				<ul class="cd-filter-content cd-filters list" id="close__color">
					<li class="offer__checkbox-item">
						<input class="filter" data-filter=".check1" type="checkbox" id="checkbox1">
						<label class="checkbox-label" for="checkbox1">Красный</label>
					</li>

					<li class="offer__checkbox-item">
						<input class="filter" data-filter=".check2" type="checkbox" id="checkbox2">
						<label class="checkbox-label" for="checkbox2">Красный</label>
					</li>

					<li class="offer__checkbox-item">
						<input class="filter" data-filter=".check3" type="checkbox" id="checkbox3">
						<label class="checkbox-label" for="checkbox3">Красный</label>
					</li>
				</ul>
			</div>
			<div class="offer__form-line"></div>
			<div class="cd-filter-block">
				<div class="cd-filter-block-title d-flex">
					<h4 class="offer__filter-title mr__filter-middle">Формат</h4>
					<a class="svg__arrow-format" id="open__format">
						<img src="img/arrowUp.png" alt="" class="arrow">
					</a>
				</div>

				<ul class="cd-filter-content cd-filters list" id="close__format">
					<li class="offer__checkbox-item">
						<input class="filter" data-filter=".check4" type="checkbox" id="checkbox4">
						<label class="checkbox-label" for="checkbox4">20х60</label>
					</li>

					<li class="offer__checkbox-item">
						<input class="filter" data-filter=".check5" type="checkbox" id="checkbox5">
						<label class="checkbox-label" for="checkbox5">30х20</label>
					</li>

					<li class="offer__checkbox-item">
						<input class="filter" data-filter=".check6" type="checkbox" id="checkbox6">
						<label class="checkbox-label" for="checkbox6">30х30</label>
					</li>
				</ul>
			</div>
			<div class="offer__form-line"></div>
			<div class="cd-filter-block">
				<div class="cd-filter-block-title d-flex">
					<h4 class="offer__filter-title mr__filter-end">Назначение</h4>
					<a class="svg__arrow-way" id="open__way">
						<img src="img/arrowUp.png" alt="" class="arrow">
					</a>
				</div>
				<ul class="cd-filter-content cd-filters list" id="close__way">
					<li class="offer__checkbox-item">
						<input class="filter" data-filter=".check7" type="checkbox" id="checkbox7">
						<label class="checkbox-label" for="checkbox7">Для окон</label>
					</li>

					<li class="offer__checkbox-item">
						<input class="filter" data-filter=".check8" type="checkbox" id="checkbox8">
						<label class="checkbox-label" for="checkbox8">Для стен</label>
					</li>

					<li class="offer__checkbox-item">
						<input class="filter" data-filter=".check9" type="checkbox" id="checkbox9">
						<label class="checkbox-label" for="checkbox9">Для улицы</label>
					</li>
				</ul> <!-- cd-filter-content -->
			</div>
			<div class="offer__form-line"></div>
			<div class="cd-filter-block">
				<div class="cd-filter-block-title d-flex">
					<h4 class="offer__filter-title mr__filter-bottom">Поверхность</h4>
					<a class="svg__arrow-area" id="open__area">
						<img src="img/arrowUp.png" alt="" class="arrow">
					</a>
				</div>

				<ul class="cd-filter-content cd-filters list" id="close__area">
					<li class="offer__checkbox-item">
						<input class="filter" data-filter=".check10" type="checkbox" id="checkbox10">
						<label class="checkbox-label" for="checkbox10">Для окон</label>
					</li>

					<li class="offer__checkbox-item">
						<input class="filter" data-filter=".check11" type="checkbox" id="checkbox11">
						<label class="checkbox-label" for="checkbox11">Для стен</label>
					</li>

					<li class="offer__checkbox-item">
						<input class="filter" data-filter=".check12" type="checkbox" id="checkbox12">
						<label class="checkbox-label" for="checkbox12">Для улицы</label>
					</li>
				</ul> <!-- cd-filter-content -->
			</div>
			<div class="offer__form-line"></div>
			<div class="cd-filter-block">
				<div class="cd-filter-block-title d-flex">
					<h4 class="offer__filter-title mr__filter-foot">Стиль</h4>
					<a class="svg__arrow-style" id="open__style">
						<img src="img/arrowUp.png" alt="" class="arrow">
					</a>
				</div>

				<ul class="cd-filter-content cd-filters list" id="close__style">
					<li class="offer__checkbox-item">
						<input class="filter" data-filter=".check13" type="checkbox" id="checkbox13">
						<label class="checkbox-label" for="checkbox13">Для окон</label>
					</li>

					<li class="offer__checkbox-item">
						<input class="filter" data-filter=".check14" type="checkbox" id="checkbox14">
						<label class="checkbox-label" for="checkbox14">Для стен</label>
					</li>

					<li class="offer__checkbox-item">
						<input class="filter" data-filter=".check15" type="checkbox" id="checkbox15">
						<label class="checkbox-label" for="checkbox15">Для улицы</label>
					</li>
				</ul> <!-- cd-filter-content -->
			</div>
		</form>
	</div>
</aside>
