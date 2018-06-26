		<div class="container padding-imp">
			<div class="col-lg-12 form-availability padding-imp">
				<form action="">
					<div class="col-lg-4 padding-imp">
						<div class="col-xs-6 padding-imp fancy-mob">
							<div class="notIE">
								<span class="fancyArrow"></span>
								<select>
									<option value="kondygnacja">kondygnacja</option>
								</select>
							</div>
						</div>
						<div class="col-xs-6 padding-imp fancy-mob">
							<div class="notIE">
								<span class="fancyArrow"></span>
								<select>
									<option value="ogrórek">ogródek</option>
									<option value="strych">strych</option>
								</select>
							</div>
						</div>
					</div>
					<div class="col-lg-4 padding-imp">
						<div class="col-xs-6 padding-imp fancy-mob">
							<div class="notIE">
								<span class="fancyArrow"></span>
								<select>
									<option value="status">status</option>
								</select>
							</div>
						</div>
						<div class="col-xs-6 padding-imp fancy-mob">
							<div class="notIE">
								<span class="fancyArrow"></span>
								<select>
									<option value="cena">cena</option>
								</select>
							</div>
						</div>
					</div>
					<div class="col-lg-4 padding-imp fancy-mob">
					<input type="submit" name="submit" class="btn btn-submit" value="Filtrowanie">
				</div>
				</form>
			</div>
			<div class="col-lg-12 padding-imp">
				<div class="main-tab">
					<div class="box">
						<p class="box-text text-long">nr budynku mieszkania</p>
						<span class="icon-open">
							<i class="icon-up-open"></i>
							<i class="icon-down-open"></i>
						</span>
					</div>
					<div class="box">
						<p class="box-text text-long">kondygnacja</p>
						<span class="icon-open">
							<i class="icon-up-open"></i>
							<i class="icon-down-open"></i>
						</span>
					</div><div class="box">
						<p class="box-text text-long">powierzchnia użytkowa</p>
						<span class="icon-open">
							<i class="icon-up-open"></i>
							<i class="icon-down-open"></i>
						</span>
					</div><div class="box">
						<p class="box-text text-long">powierzchnia ogródka/strychu</p>
						<span class="icon-open icon-middle">
							<i class="icon-up-open"></i>
							<i class="icon-down-open"></i>
						</span>
					</div>
					<div class="box-last">
						<p class="box-text text-short">cena brutto</p>
						<span class="icon-open icon-last">
							<i class="icon-up-open"></i>
							<i class="icon-down-open"></i>
						</span>
					</div>
					<div class="box-last">
						<p class="box-text text-shorts">plan</p>
						<span class="icon-open icon-lasts">
							<i class="icon-up-open icon-white"></i>
							<i class="icon-down-open icon-white"></i>
						</span>
					</div>
					<div class="box-last">
						<p class="box-text text-shorts">status</p>
						<span class="icon-open icon-lasts">
							<i class="icon-up-open"></i>
							<i class="icon-down-open"></i>
						</span>
					</div>
				</div>
			</div>
			<?php foreach ($aparts as $a) { ?>
			<div class="ext-tab">
				<div class="ext-box">
					<p class="box-text"><?php echo $a['apart_number'] ?></p>
				</div>
				<div class="ext-box">
					<p class="box-text"><?php echo $a['apart_storey'] ?></p>
				</div>
				<div class="ext-box">
					<p class="box-text"><?php echo $a['apart_area'] ?> m<sup>2</sup></p>
				</div>
				<div class="ext-box">
					<p class="box-text"><?php echo $a['apart_attic_garden'] ?> m<sup>2</sup></p>
				</div>
				<div class="ext-box-last">
					<p class="box-text text-ext"><?php echo $a['apart_price'] ?></p>
				</div>
				<div class="ext-box-last">
					<a class="box-text text-exts"><?php echo $a['apart_plan'] ?></a>
				</div>
				<div class="ext-box-last">
					<p class="box-text text-extes"><?php echo $a['apart_status'] ?></p>
				</div>
			</div>
			<?php } ?>
			<div class="container">
			<div class="row">
				<div class="col-sm-12 text-center">
					<div class="pag">
						<a class="number-pag number-active" href="">
								<p class="text-number">1</p>
						</a><a class="number-pag" href="">
								<p class="text-number">2</p>
						</a><a class="number-pag" href="">
								<p class="text-number">3</p>
						</a><a class="number-pag" href="">
								<p class="text-number">4</p>
						</a>
					</div>
				</div>
			</div>
		</div>
		</div>