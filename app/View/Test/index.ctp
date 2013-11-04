    
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Complex Variants</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><?php echo $this->Html->link('Home', '/')?></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class="container">

      <div class="starter-template">
        <h1>First record:</h1>
        <p>
			<?php
			echo $firstrecord['Variant']['ChrNo'];
			echo " ";
			echo $firstrecord['Variant']['Start'];
			echo " ";
			echo $firstrecord['Variant']['End'];
			?>
		</p>
		<br/>
		<br/>
		<h1>Chosen record:</h1>
		<p>
			<?php
			echo $somerecord['Variant']['ChrNo'];
			echo " ";
			echo $somerecord['Variant']['Start'];
			echo " ";
			echo $somerecord['Variant']['End'];
			?>
		</p>
      </div>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../../assets/js/jquery.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>