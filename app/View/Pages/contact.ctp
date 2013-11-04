    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <?php echo $this->Html->link('Complex Variants', '/', array('class'=>'navbar-brand'))?>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><?php echo $this->Html->link('Home', '/')?></li>
            <li><?php echo $this->Html->link('About', '/pages/about')?></li>
            <li><?php echo $this->Html->link('Contact', '/pages/contact')?></li>
          </ul>
          <ul class="nav navbar-nav pull-right">
          	<li><a href="http://www.cs.columbia.edu/~itsik/">Itsik Pe'er Lab | Columbia University</a></li>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class="container">

      <div class="starter-template">
        <h2>Contact</h2>
        <p>Contact info here.</p>
      </div>



    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../../assets/js/jquery.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>