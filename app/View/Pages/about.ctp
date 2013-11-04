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
        <h2>About This Project</h2>
        Complex Variants are loci where more than two alleles have been found. The Complex Variant collection in this database was created from human genome data downloaded from <a href="http://http://www.completegenomics.com/public-data/69-Genomes/">Complex Genomics</a>, and  <a href="http://http://genome.ucsc.edu/">UCSC Genome Browser</a>, <a href="http://http://www.completegenomics.com/public-data/69-Genomes/">Complex Genomics</a>. This database shows complex variant sites in 55 genome datasets downloaded from <a href="http://useast.ensembl.org/info/genome/funcgen/index.html/"> Ensembl </a>, and the <a href="http://www.genome.gov/10005107">ENCODE Project</a>. This database gives the chromosome location of the variants, the main and alternate alleles found at this location, and this location's <a href="http://mendel.stanford.edu/SidowLab/downloads/gerp/">GERP score</a>.
      </div>



    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../../assets/js/jquery.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>