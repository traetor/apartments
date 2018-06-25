		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
	    <!-- Indicators -->
	    <ol class="carousel-indicators">
	        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
	        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
	        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
	    </ol>
	    
	    <!-- Wrapper for slides -->
	    <div class="carousel-inner">
	        <div class="item active">
	            <div class="image" style="background-image: url('assets/img/background.jpg')"></div>
	            <div class="carousel-caption">Zdjęcie 1</div>
	        </div>
	        <div class="item">
	            <div class="image" style="background-image: url('assets/img/background2.jpg')"></div>
	            <div class="carousel-caption">Zdjęcie 2</div>
	        </div>
	        <div class="item">
	            <div class="image" style="background-image: url('assets/img/background3.jpg')"></div>
	            <div class="carousel-caption">Zdjęcie 3</div>
	        </div>
	    </div>
	    
	    <!-- Controls -->
	    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
	        <span class="glyphicon glyphicon-chevron-left" style="top: 90%; font-size: 50px; margin-left: -50px;"></span>
	    </a>
	    <a class="right carousel-control controls" href="#carousel-example-generic" role="button" data-slide="next">
	        <span class="glyphicon glyphicon-chevron-right" style="top: 90%; font-size: 50px; margin-right: -50px;"></span>
	    </a>
		</div>
		<?php 
			echo $this->view($navbar);
		?>