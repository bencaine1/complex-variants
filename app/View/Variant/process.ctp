    
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
        <h2>Results</h2>

        <!-- Hidden fields, to be accessed in the download function in the controller.
            <?php echo $this->Form->input('ChrNo', array('type'=>'hidden', 'value'=>$this->data['Variant']['ChrNo'])); ?>
            <?php echo $this->Form->input('Start', array('type'=>'hidden', 'value'=>$start)); ?>
            <?php echo $this->Form->input('End', array('type'=>'hidden', 'value'=>$end)); ?>
            <?php echo $this->Form->input('RegulatoryFeatures_HMEC', array('label'=>'Ensembl Regulatory Build(HMEC)', 'type'=>'hidden', 'value'=>$this->data['Variant']['RegulatoryFeatures_HMEC'], 'class'=>'selectedId')); ?>

            <?php echo $this->Form->input("RegulatoryFeatures_HUVEC", array('type'=>'hidden', 'value'=>'Y', 'class'=>'selectedId', 'label'=>'Ensembl Regulatory Build(RegulatoryFeatures_HUVEC)')); ?>
            <?php echo $this->Form->input("RegulatoryFeatures_GM06990", array('type'=>'hidden', 'value'=>'Y', 'class'=>'selectedId', 'label'=>'Ensembl Regulatory Build(GM06990)')); ?>
            <?php echo $this->Form->input("RegulatoryFeatures_H1ESC", array('type'=>'hidden', 'value'=>'Y', 'class'=>'selectedId', 'label'=>'Ensembl Regulatory Build(H1ESC)')); ?>
            <?php echo $this->Form->input("RegulatoryFeatures_HeLa-S3" , array('type'=>'hidden', 'value'=>'Y', 'class'=>'selectedId', 'label'=>'Ensembl Regulatory Build(HeLa-S3)')); ?>
            <?php echo $this->Form->input("RegulatoryFeatures_HepG2", array('type'=>'hidden', 'value'=>'Y', 'class'=>'selectedId', 'label'=>'Ensembl Regulatory Build(HepG2)')); ?>
            <?php echo $this->Form->input("RegulatoryFeatures_IMR90" , array('type'=>'hidden', 'value'=>'Y', 'class'=>'selectedId', 'label'=>'Ensembl Regulatory Build(IMR90)')); ?>
            <?php echo $this->Form->input("RegulatoryFeatures_K562", array('type'=>'hidden', 'value'=>'Y', 'class'=>'selectedId', 'label'=>'Ensembl Regulatory Build(K562)')); ?>
            <?php echo $this->Form->input("RegulatoryFeatures_MultiCell" , array('type'=>'hidden', 'value'=>'Y', 'class'=>'selectedId', 'label'=>'Ensembl Regulatory Build(MultiCell)')); ?>
            <?php echo $this->Form->input("RegulatoryFeatures_NH-A", array('type'=>'hidden', 'value'=>'Y', 'class'=>'selectedId', 'label'=>'Ensembl Regulatory Build(NH-A)')); ?>
            <?php echo $this->Form->input("RegulatoryFeatures_NHEK" , array('type'=>'hidden', 'value'=>'Y', 'class'=>'selectedId', 'label'=>'Ensembl Regulatory Build(NHEK)')); ?>                  
            <?php echo $this->Form->input("wgEncodeHg19ConsensusSignalArtifactRegions", array('type'=>'hidden', 'value'=>'Y', 'class'=>'selectedId', 'label'=>'Blacklist( wgEncodeHg19ConsensusSignalArtifactRegions)')); ?>

            <?php echo $this->Form->input("wgEncodeHg19ConsensusSignalArtifactRegionsfemale", array('type'=>'hidden', 'value'=>'Y', 'class'=>'selectedId', 'label'=>'Blacklist (wgEncodeHg19ConsensusSignalArtifactRegions.female)')); ?>

            <?php echo $this->Form->input("wgEncodeRegTfbsClusteredV2", array('type'=>'hidden', 'value'=>'Y', 'class'=>'selectedId', 'label'=>'ChIP-seq(wgEncodeRegTfbsClusteredV2)')); ?>
            <?php echo $this->Form->input("phastCons46way" , array('type'=>'hidden', 'value'=>'Y', 'class'=>'selectedId', 'label'=>'Conservation(phastCons46way)')); ?>
            <?php echo $this->Form->input("phyloP46wayPlacental", array('type'=>'hidden', 'value'=>'Y', 'class'=>'selectedId', 'label'=>'Conservation(phyloP46wayPlacental)')); ?>
            <?php echo $this->Form->input("phyloP46wayPrimates", array('type'=>'hidden', 'value'=>'Y', 'class'=>'selectedId', 'label'=>'Conservation(phyloP46wayPrimates)')); ?>
            <?php echo $this->Form->input("tfbsConsSites", array('type'=>'hidden', 'value'=>'Y', 'class'=>'selectedId', 'label'=>'Conservation(tfbsConsSites)')); ?>
            <?php echo $this->Form->input("phastCons46wayPrimates", array('type'=>'hidden', 'value'=>'Y', 'class'=>'selectedId', 'label'=>'Conservation(phastCons46wayPrimates)')); ?>
            <?php echo $this->Form->input("phastConsElements46way", array('type'=>'hidden', 'value'=>'Y', 'class'=>'selectedId', 'label'=>'Conservation(phastConsElements46way)')); ?>
            <?php echo $this->Form->input("phastConsElements46wayPlacental", array('type'=>'hidden', 'value'=>'Y', 'class'=>'selectedId', 'label'=>'Conservation(phastConsElements46wayPlacental)')); ?>
            <?php echo $this->Form->input("CpgIslandExt", array('type'=>'hidden', 'value'=>'Y', 'class'=>'selectedId', 'label'=>'CpG(CpgIslandExt)')); ?>
            <?php echo $this->Form->input("oreganno", array('type'=>'hidden', 'value'=>'Y', 'class'=>'selectedId', 'label'=>'CpG(oreganno)')); ?>
            <?php echo $this->Form->input("microsat", array('type'=>'hidden', 'value'=>'Y', 'class'=>'selectedId', 'label'=>'Footprints(microsat)')); ?>
            <?php echo $this->Form->input("combined", array('type'=>'hidden', 'value'=>'Y', 'class'=>'selectedId', 'label'=>'Footprints(combined)')); ?>
            <?php echo $this->Form->input("footprints", array('type'=>'hidden', 'value'=>'Y', 'class'=>'selectedId', 'label'=>'Footprints(footprints)')); ?>
            <?php echo $this->Form->input("wgEncodeRegDnaseClusteredV2", array('type'=>'hidden', 'value'=>'Y', 'class'=>'selectedId', 'label'=>'DNase(wgEncodeRegDnaseClusteredV2)')); ?>  
            <?php echo $this->Form->input("motif_regions", array('type'=>'hidden', 'value'=>'Y', 'class'=>'selectedId', 'label'=>'Repeats(motif_regions)')); ?>
            <?php echo $this->Form->input("dgv", array('type'=>'hidden', 'value'=>'Y', 'class'=>'selectedId', 'label'=>'Repeats(dgv)')); ?>
            <?php echo $this->Form->input("nestedRepeats" , array('type'=>'hidden', 'value'=>'Y', 'class'=>'selectedId', 'label'=>'Repeats(nestedRepeats)')); ?>
            <?php echo $this->Form->input("rmsk", array('type'=>'hidden', 'value'=>'Y', 'class'=>'selectedId', 'label'=>'Repeats(rmsk)')); ?>
            <?php echo $this->Form->input("simpleRepeats" , array('type'=>'hidden', 'value'=>'Y', 'class'=>'selectedId', 'label'=>'Repeats(simpleRepeats)')); ?>
            <?php echo $this->Form->input("genomicSuperDups", array('type'=>'hidden', 'value'=>'Y', 'class'=>'selectedId', 'label'=>'Repeats(genomicSuperDups)')); ?>
            <?php echo $this->Form->input("switchDbTss", array('type'=>'hidden', 'value'=>'Y', 'class'=>'selectedId', 'label'=>'TSS(switchDbTss)')); ?>

            <?php echo $this->Form->input("gencodev152wayconspseudos", array('type'=>'hidden', 'value'=>'Y', 'class'=>'selectedId', 'label'=>'Gencode(v15.2wayconspseudos)')); ?>
            <?php echo $this->Form->input("gencodev7annotation", array('type'=>'hidden', 'value'=>'Y', 'class'=>'selectedId', 'label'=>'Gencode(v7.annotation)')); ?>
            <?php echo $this->Form->input("gencodev7exons", array('type'=>'hidden', 'value'=>'Y', 'class'=>'selectedId', 'label'=>'Gencode(v7.exons)')); ?>
            <?php echo $this->Form->input("gencodev15annotation", array('type'=>'hidden', 'value'=>'Y', 'class'=>'selectedId', 'label'=>'Gencode(v15.annotation)')); ?>
            <?php echo $this->Form->input("gm12878", array('type'=>'hidden', 'value'=>'Y', 'class'=>'selectedId', 'label'=>'Genome segmentation(gm12878)')); ?>
            <?php echo $this->Form->input("h1hesc" , array('type'=>'hidden', 'value'=>'Y', 'class'=>'selectedId', 'label'=>'Genome segmentation(h1hesc)')); ?>
            <?php echo $this->Form->input("helas3", array('type'=>'hidden', 'value'=>'Y', 'class'=>'selectedId', 'label'=>'Genome segmentation(helas3)')); ?>
            <?php echo $this->Form->input("hepg2", array('type'=>'hidden', 'value'=>'Y', 'class'=>'selectedId', 'label'=>'Genome segmentation(hepg2)')); ?>
            <?php echo $this->Form->input("huvec" , array('type'=>'hidden', 'value'=>'Y', 'class'=>'selectedId', 'label'=>'Genome segmentation(huvec)')); ?>
            <?php echo $this->Form->input("k562", array('type'=>'hidden', 'value'=>'Y', 'class'=>'selectedId', 'label'=>'Genome segmentation(k562)')); ?>
            <?php echo $this->Form->input("gwasCatalog", array('type'=>'hidden', 'value'=>'Y', 'class'=>'selectedId', 'label'=>'GWAS(catalog)')); ?>
            <?php echo $this->Form->input("Gwascatalogjune2011phenotypes" , array('type'=>'hidden', 'value'=>'Y', 'class'=>'selectedId', 'label'=>'GWAS(phenotypes)')); ?>
            <?php echo $this->Form->input("Gwascatalogjune2011positions", array('type'=>'hidden', 'value'=>'Y', 'class'=>'selectedId', 'label'=>'GWAS(positions)')); ?>
        <!-- End hidden fields -->

        <p>
        <?php if (empty($results)) echo 'Your search did not return any results.';
        else echo $this->Html->link('Download your results to a text file.', 'download'); ?>
        </p>
        <table class="table table-striped table-bordered table-condensed longElements">
        <?php
        echo $this->Html->tableHeaders(array('Chr', 'Start', 'End', 'Main', 'Alt', 'gerp1', 'gerp2'), NULL, array('style'=>'text-align:center'));
        foreach ($results as $result): ?>
          <tr>
          <td><?php echo $result['Variant']['ChrNo']; ?></td>
          <td><?php echo $result['Variant']['Start']; ?></td>
          <td><?php echo $result['Variant']['End']; ?></td>
          <td><?php echo $result['Variant']['main']; ?></td>
          <td><?php echo $result['Variant']['alt']; ?></td>
          <td><?php echo $result['Variant']['gerp1']; ?></td>
          <td><?php echo $result['Variant']['gerp2']; ?></td>
          </tr>
        <?php endforeach; ?>

        </table>

      </div>



    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../../assets/js/jquery.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>