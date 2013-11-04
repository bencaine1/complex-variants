    <script>
    $(document).ready(function () {

      $('.addloci').click(function() {
        var fieldid = $(this).attr('id');
        var a = '.loci';
        var res = a.concat(fieldid);
        $(res).show(500);
        $(this).hide();
      });

      $('.addfeature').click(function() {
        var fieldid = $(this).attr('id');
        var a = '.features';
        var res = a.concat(fieldid);
        $(res).show();
        $(this).hide();
      });

      $('.addminterm').click(function() {
        var fieldid = $(this).attr('id');
        var a = '.minterm';
        var res = a.concat(fieldid);
        $(res).show(500);
        $(this).hide();
      });

    });
    </script>

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

    <?php $Features = array(
            'RegulatoryFeatures_HMEC' => 'Ensembl Regulatory Build(HMEC)',
            "RegulatoryFeatures_HUVEC" =>'Ensembl Regulatory Build(RegulatoryFeatures_HUVEC)',
            "RegulatoryFeatures_GM06990" =>'Ensembl Regulatory Build(GM06990)',
            "RegulatoryFeatures_H1ESC" => 'Ensembl Regulatory Build(H1ESC)',
            "RegulatoryFeatures_HeLa-S3" => 'Ensembl Regulatory Build(HeLa-S3)',
            "RegulatoryFeatures_HepG2" => 'Ensembl Regulatory Build(HepG2)',
            "RegulatoryFeatures_IMR90" => 'Ensembl Regulatory Build(IMR90)',
            "RegulatoryFeatures_K562" => 'Ensembl Regulatory Build(K562)',
            "RegulatoryFeatures_MultiCell" => 'Ensembl Regulatory Build(MultiCell)',
            "RegulatoryFeatures_NH-A" => 'Ensembl Regulatory Build(NH-A)',
            "RegulatoryFeatures_NHEK" => 'Ensembl Regulatory Build(NHEK)',                  
            "wgEncodeHg19ConsensusSignalArtifactRegions" => 'Blacklist( wgEncodeHg19ConsensusSignalArtifactRegions)',
            "wgEncodeHg19ConsensusSignalArtifactRegionsfemale" => 'Blacklist( wgEncodeHg19ConsensusSignalArtifactRegions.female)',
            "wgEncodeRegTfbsClusteredV2" => 'ChIP-seq(wgEncodeRegTfbsClusteredV2)',
            "phastCons46way" => 'Conservation(phastCons46way)',
            "phyloP46wayPlacental" => 'Conservation(phyloP46wayPlacental)',
            "phyloP46wayPrimates" => 'Conservation(phyloP46wayPrimates)',
            "tfbsConsSites" => 'Conservation(tfbsConsSites)',
            "phastCons46wayPrimates" => 'Conservation(phastCons46wayPrimates)',
            "phastConsElements46way" => 'Conservation(phastConsElements46way)',
            "phastConsElements46wayPlacental" => 'Conservation(phastConsElements46wayPlacental)',
            "CpgIslandExt" => 'CpG(CpgIslandExt)',
            "oreganno" => 'CpG(oreganno)',
            "microsat" => 'Footprints(microsat)',
            "combined" => 'Footprints(combined)',
            "footprints" => 'Footprints(footprints)',
            "wgEncodeRegDnaseClusteredV2" => 'DNase(wgEncodeRegDnaseClusteredV2)',  
            "motif_regions" => 'Repeats(motif_regions)',
            "dgv" => 'Repeats(dgv)',
            "nestedRepeats" => 'Repeats(nestedRepeats)',
            "rmsk" => 'Repeats(rmsk)',
            "simpleRepeats" => 'Repeats(simpleRepeats)',
            "genomicSuperDups" => 'Repeats(genomicSuperDups)',
            "switchDbTss" => 'TSS(switchDbTss)',
            "gencodev152wayconspseudos" => 'Gencode(v15.2wayconspseudos)',
            "gencodev7annotation" => 'Gencode(v7.annotation)',
            "gencodev7exons" => 'Gencode(v7.exons)',
            "gencodev15annotation" => 'Gencode(v15.annotation)',
            "gm12878" => 'Genome segmentation(gm12878)',
            "h1hesc" => 'Genome segmentation(h1hesc)',
            "helas3" => 'Genome segmentation(helas3)',
            "hepg2" => 'Genome segmentation(hepg2)',
            "huvec" => 'Genome segmentation(huvec)',
            "k562" => 'Genome segmentation(k562)',
            "gwasCatalog" => 'GWAS(catalog)',
            "Gwascatalogjune2011phenotypes" => 'GWAS(phenotypes)',
            "Gwascatalogjune2011positions" => 'GWAS(positions)'
); ?>

    <div class="container">

      <div class="starter-template">
        <h2>Enter a query below.</h2>
        <br />
        <?php echo $this->Form->create('Variant', array('action'=>'process')); ?>

<!-- MINTERM 0 -->

      <div class="row">
        <div class="col-md-6">
        <table class="table table-bordered table-condensed">
          <tr>
            <td><?php echo $this->Form->input('Variant.0.ChrNo0', array('label'=>'Chr No. (e.g. chr1)')); ?></td>
            <td><?php echo $this->Form->input('Variant.0.Start0', array('label'=>'Start')); ?></td>
            <td><?php echo $this->Form->input('Variant.0.End0', array('label'=>'End')); ?></td>
          </tr>
          <tr>
            <td colspan='3'><?php echo $this->Html->link('Add loci', '#', array('class' => 'addloci', 'id' => '01')); ?></td>
          </tr>
          <tbody style='display:none' class='loci01'>
            <tr>
              <td><?php echo $this->Form->input('Variant.1.ChrNo0', array('label'=>'Chr No.')); ?></td>
              <td><?php echo $this->Form->input('Variant.1.Start0', array('label'=>'Start')); ?></td>
              <td><?php echo $this->Form->input('Variant.1.End0', array('label'=>'End')); ?></td>
            </tr>
            <tr>
              <td colspan='3'><?php echo $this->Html->link('Add loci', '#', array('class' => 'addloci', 'id' => '02')); ?></td>
            </tr>
          </tbody>
          <tbody style='display:none' class='loci02'>
            <tr>
              <td><?php echo $this->Form->input('Variant.2.ChrNo0', array('label'=>'Chr No.')); ?></td>
              <td><?php echo $this->Form->input('Variant.2.Start0', array('label'=>'Start')); ?></td>
              <td><?php echo $this->Form->input('Variant.2.End0', array('label'=>'End')); ?></td>
            </tr>
            <tr>
              <td colspan='3'><?php echo $this->Html->link('Add loci', '#', array('class' => 'addloci', 'id' => '03')); ?></td>
            </tr>
          </tbody>
          <tbody style='display:none' class='loci03'>
            <tr>
              <td><?php echo $this->Form->input('Variant.3.ChrNo0', array('label'=>'Chr No.')); ?></td>
              <td><?php echo $this->Form->input('Variant.3.Start0', array('label'=>'Start')); ?></td>
              <td><?php echo $this->Form->input('Variant.3.End0', array('label'=>'End')); ?></td>
            </tr>
          </tbody>
        </table>
        </div> <!--/.col-md-6-->
        <div class="col-md-6">
        <table class="table table-bordered">
          <th colspan='2' style='text-align:center'>Features</th>
          <tr>
            <td><?php echo $this->Form->input('Variant.0.Connector0', array('type'=>'select', 'label'=>false, 'options'=>array('In'=>'In','Not'=>'NOT in'))); ?></td>
            <td><?php echo $this->Form->input('Variant.0.Features0', array('type'=>'select', 'label'=>false, 'empty' => '(choose one)', 'options'=>$Features)); ?></td>
          </tr>
          <tr>
            <td colspan='2'><?php echo $this->Html->link('Add feature', '#', array('class' => 'addfeature', 'id' => '01')); ?></td>
          </tr>
          <tbody style='display:none' class='features01'>
            <tr>
            <td><?php echo $this->Form->input('Variant.1.Connector0', array('type'=>'select', 'label'=>false, 'options'=>array('In'=>'In','Not'=>'NOT in'))); ?></td>
            <td><?php echo $this->Form->input('Variant.1.Features0', array('type'=>'select', 'label'=>false, 'empty' => '(choose one)', 'options'=>$Features)); ?></td>
            </tr>
            <tr>
              <td colspan='2'><?php echo $this->Html->link('Add feature', '#', array('class' => 'addfeature', 'id' => '02')); ?></td>
            </tr>
          </tbody>
          <tbody style='display:none' class='features02'>
            <tr>
            <td><?php echo $this->Form->input('Variant.2.Connector0', array('type'=>'select', 'label'=>false, 'options'=>array('In'=>'In','Not'=>'NOT in'))); ?></td>
            <td><?php echo $this->Form->input('Variant.2.Features0', array('type'=>'select', 'label'=>false, 'empty' => '(choose one)', 'options'=>$Features)); ?></td>
            </tr>
            <tr>
              <td colspan='2'><?php echo $this->Html->link('Add feature', '#', array('class' => 'addfeature', 'id' => '03')); ?></td>
            </tr>
          </tbody>
          <tbody style='display:none' class='features03'>
            <tr>
            <td><?php echo $this->Form->input('Variant.3.Connector0', array('type'=>'select', 'label'=>false, 'options'=>array('In'=>'In','Not'=>'NOT in'))); ?></td>
            <td><?php echo $this->Form->input('Variant.3.Features0', array('type'=>'select', 'label'=>false, 'empty' => '(choose one)', 'options'=>$Features)); ?></td>
            </tr>
          </tbody>
        </table>
        </div> <!--/.col-md-6-->

      </div> <!--/.row-->

      <p><?php echo $this->Html->link('Add minterm', '#', array('class' => 'addminterm', 'id' => '1')); ?></p>

<!-- MINTERM 1 -->
      <div class="minterm1" style="display:none">
      <div class="row">
      <hr>
        <div class="col-md-6">
        <table class="table table-bordered table-condensed">
          <tr>
            <td><?php echo $this->Form->input('Variant.0.ChrNo1', array('label'=>'Chr No.')); ?></td>
            <td><?php echo $this->Form->input('Variant.0.Start1', array('label'=>'Start')); ?></td>
            <td><?php echo $this->Form->input('Variant.0.End1', array('label'=>'End')); ?></td>
          </tr>
          <tr>
            <td colspan='3'><?php echo $this->Html->link('Add loci', '#', array('class' => 'addloci', 'id' => '11')); ?></td>
          </tr>
          <tbody style='display:none' class='loci11'>
            <tr>
              <td><?php echo $this->Form->input('Variant.1.ChrNo1', array('label'=>'Chr No.')); ?></td>
              <td><?php echo $this->Form->input('Variant.1.Start1', array('label'=>'Start')); ?></td>
              <td><?php echo $this->Form->input('Variant.1.End1', array('label'=>'End')); ?></td>
            </tr>
            <tr>
              <td colspan='3'><?php echo $this->Html->link('Add loci', '#', array('class' => 'addloci', 'id' => '12')); ?></td>
            </tr>
          </tbody>
          <tbody style='display:none' class='loci12'>
            <tr>
              <td><?php echo $this->Form->input('Variant.2.ChrNo1', array('label'=>'Chr No.')); ?></td>
              <td><?php echo $this->Form->input('Variant.2.Start1', array('label'=>'Start')); ?></td>
              <td><?php echo $this->Form->input('Variant.2.End1', array('label'=>'End')); ?></td>
            </tr>
            <tr>
              <td colspan='3'><?php echo $this->Html->link('Add loci', '#', array('class' => 'addloci', 'id' => '13')); ?></td>
            </tr>
          </tbody>
          <tbody style='display:none' class='loci13'>
            <tr>
              <td><?php echo $this->Form->input('Variant.3.ChrNo1', array('label'=>'Chr No.')); ?></td>
              <td><?php echo $this->Form->input('Variant.3.Start1', array('label'=>'Start')); ?></td>
              <td><?php echo $this->Form->input('Variant.3.End1', array('label'=>'End')); ?></td>
            </tr>
          </tbody>
        </table>
        </div> <!--/.col-md-6-->
        <div class="col-md-6">
        <table class="table table-bordered">
          <th colspan='2' style='text-align:center'>Features</th>
          <tr>
            <td><?php echo $this->Form->input('Variant.0.Connector1', array('type'=>'select', 'label'=>false, 'options'=>array('In'=>'In','Not'=>'NOT in'))); ?></td>
            <td><?php echo $this->Form->input('Variant.0.Features1', array('type'=>'select', 'label'=>false, 'empty' => '(choose one)', 'options'=>$Features)); ?></td>
          </tr>
          <tr>
            <td colspan='2'><?php echo $this->Html->link('Add feature', '#', array('class' => 'addfeature', 'id' => '11')); ?></td>
          </tr>
          <tbody style='display:none' class='features11'>
            <tr>
            <td><?php echo $this->Form->input('Variant.1.Connector1', array('type'=>'select', 'label'=>false, 'options'=>array('In'=>'In','Not'=>'NOT in'))); ?></td>
            <td><?php echo $this->Form->input('Variant.1.Features1', array('type'=>'select', 'label'=>false, 'empty' => '(choose one)', 'options'=>$Features)); ?></td>
            </tr>
            <tr>
              <td colspan='2'><?php echo $this->Html->link('Add feature', '#', array('class' => 'addfeature', 'id' => '12')); ?></td>
            </tr>
          </tbody>
          <tbody style='display:none' class='features12'>
            <tr>
            <td><?php echo $this->Form->input('Variant.2.Connector1', array('type'=>'select', 'label'=>false, 'options'=>array('In'=>'In','Not'=>'NOT in'))); ?></td>
            <td><?php echo $this->Form->input('Variant.2.Features1', array('type'=>'select', 'label'=>false, 'empty' => '(choose one)', 'options'=>$Features)); ?></td>
            </tr>
            <tr>
              <td colspan='2'><?php echo $this->Html->link('Add feature', '#', array('class' => 'addfeature', 'id' => '13')); ?></td>
            </tr>
          </tbody>
          <tbody style='display:none' class='features13'>
            <tr>
            <td><?php echo $this->Form->input('Variant.3.Connector1', array('type'=>'select', 'label'=>false, 'options'=>array('In'=>'In','Not'=>'NOT in'))); ?></td>
            <td><?php echo $this->Form->input('Variant.3.Features1', array('type'=>'select', 'label'=>false, 'empty' => '(choose one)', 'options'=>$Features)); ?></td>
            </tr>
          </tbody>
        </table>
      </div> <!--/.col-md-6-->
      </div> <!--/.row-->

      <p><?php echo $this->Html->link('Add minterm', '#', array('class' => 'addminterm', 'id' => '2')); ?></p>
      </div> <!--/.minterm1-->

<!-- MINTERM 2 -->

      <div class="minterm2" style="display:none">
      <div class="row">
      <hr>
        <div class="col-md-6">
        <table class="table table-bordered table-condensed">
          <tr>
            <td><?php echo $this->Form->input('Variant.0.ChrNo2', array('label'=>'Chr No.')); ?></td>
            <td><?php echo $this->Form->input('Variant.0.Start2', array('label'=>'Start')); ?></td>
            <td><?php echo $this->Form->input('Variant.0.End2', array('label'=>'End')); ?></td>
          </tr>
          <tr>
            <td colspan='3'><?php echo $this->Html->link('Add loci', '#', array('class' => 'addloci', 'id' => '21')); ?></td>
          </tr>
          <tbody style='display:none' class='loci21'>
            <tr>
              <td><?php echo $this->Form->input('Variant.1.ChrNo2', array('label'=>'Chr No.')); ?></td>
              <td><?php echo $this->Form->input('Variant.1.Start2', array('label'=>'Start')); ?></td>
              <td><?php echo $this->Form->input('Variant.1.End2', array('label'=>'End')); ?></td>
            </tr>
            <tr>
              <td colspan='3'><?php echo $this->Html->link('Add loci', '#', array('class' => 'addloci', 'id' => '22')); ?></td>
            </tr>
          </tbody>
          <tbody style='display:none' class='loci22'>
            <tr>
              <td><?php echo $this->Form->input('Variant.2.ChrNo2', array('label'=>'Chr No.')); ?></td>
              <td><?php echo $this->Form->input('Variant.2.Start2', array('label'=>'Start')); ?></td>
              <td><?php echo $this->Form->input('Variant.2.End2', array('label'=>'End')); ?></td>
            </tr>
            <tr>
              <td colspan='3'><?php echo $this->Html->link('Add loci', '#', array('class' => 'addloci', 'id' => '23')); ?></td>
            </tr>
          </tbody>
          <tbody style='display:none' class='loci23'>
            <tr>
              <td><?php echo $this->Form->input('Variant.3.ChrNo2', array('label'=>'Chr No.')); ?></td>
              <td><?php echo $this->Form->input('Variant.3.Start2', array('label'=>'Start')); ?></td>
              <td><?php echo $this->Form->input('Variant.3.End2', array('label'=>'End')); ?></td>
            </tr>
          </tbody>
        </table>
        </div> <!--/.col-md-6-->
        <div class="col-md-6">
        <table class="table table-bordered">
          <th colspan='2' style='text-align:center'>Features</th>
          <tr>
            <td><?php echo $this->Form->input('Variant.0.Connector2', array('type'=>'select', 'label'=>false, 'options'=>array('In'=>'In','Not'=>'NOT in'))); ?></td>
            <td><?php echo $this->Form->input('Variant.0.Features2', array('type'=>'select', 'label'=>false, 'empty' => '(choose one)', 'options'=>$Features)); ?></td>
          </tr>
          <tr>
            <td colspan='2'><?php echo $this->Html->link('Add feature', '#', array('class' => 'addfeature', 'id' => '21')); ?></td>
          </tr>
          <tbody style='display:none' class='features21'>
            <tr>
            <td><?php echo $this->Form->input('Variant.1.Connector2', array('type'=>'select', 'label'=>false, 'options'=>array('In'=>'In','Not'=>'NOT in'))); ?></td>
            <td><?php echo $this->Form->input('Variant.1.Features2', array('type'=>'select', 'label'=>false, 'empty' => '(choose one)', 'options'=>$Features)); ?></td>
            </tr>
            <tr>
              <td colspan='2'><?php echo $this->Html->link('Add feature', '#', array('class' => 'addfeature', 'id' => '22')); ?></td>
            </tr>
          </tbody>
          <tbody style='display:none' class='features22'>
            <tr>
            <td><?php echo $this->Form->input('Variant.2.Connector2', array('type'=>'select', 'label'=>false, 'options'=>array('In'=>'In','Not'=>'NOT in'))); ?></td>
            <td><?php echo $this->Form->input('Variant.2.Features2', array('type'=>'select', 'label'=>false, 'empty' => '(choose one)', 'options'=>$Features)); ?></td>
            </tr>
            <tr>
              <td colspan='2'><?php echo $this->Html->link('Add feature', '#', array('class' => 'addfeature', 'id' => '23')); ?></td>
            </tr>
          </tbody>
          <tbody style='display:none' class='features23'>
            <tr>
            <td><?php echo $this->Form->input('Variant.3.Connector2', array('type'=>'select', 'label'=>false, 'options'=>array('In'=>'In','Not'=>'NOT in'))); ?></td>
            <td><?php echo $this->Form->input('Variant.3.Features2', array('type'=>'select', 'label'=>false, 'empty' => '(choose one)', 'options'=>$Features)); ?></td>
            </tr>
          </tbody>
        </table>
      </div> <!--/.col-md-6-->
      </div> <!--/.row-->

      <p><?php echo $this->Html->link('Add minterm', '#', array('class' => 'addminterm', 'id' => '3')); ?></p>

      </div> <!--/.minterm2-->

<!-- MINTERM 3 -->

      <div class="minterm3" style="display:none">
      <div class="row">
      <hr>
        <div class="col-md-6">
        <table class="table table-bordered table-condensed">
          <tr>
            <td><?php echo $this->Form->input('Variant.0.ChrNo3', array('label'=>'Chr No.')); ?></td>
            <td><?php echo $this->Form->input('Variant.0.Start3', array('label'=>'Start')); ?></td>
            <td><?php echo $this->Form->input('Variant.0.End3', array('label'=>'End')); ?></td>
          </tr>
          <tr>
            <td colspan='3'><?php echo $this->Html->link('Add loci', '#', array('class' => 'addloci', 'id' => '31')); ?></td>
          </tr>
          <tbody style='display:none' class='loci31'>
            <tr>
              <td><?php echo $this->Form->input('Variant.1.ChrNo3', array('label'=>'Chr No.')); ?></td>
              <td><?php echo $this->Form->input('Variant.1.Start3', array('label'=>'Start')); ?></td>
              <td><?php echo $this->Form->input('Variant.1.End3', array('label'=>'End')); ?></td>
            </tr>
            <tr>
              <td colspan='3'><?php echo $this->Html->link('Add loci', '#', array('class' => 'addloci', 'id' => '32')); ?></td>
            </tr>
          </tbody>
          <tbody style='display:none' class='loci32'>
            <tr>
              <td><?php echo $this->Form->input('Variant.2.ChrNo3', array('label'=>'Chr No.')); ?></td>
              <td><?php echo $this->Form->input('Variant.2.Start3', array('label'=>'Start')); ?></td>
              <td><?php echo $this->Form->input('Variant.2.End3', array('label'=>'End')); ?></td>
            </tr>
            <tr>
              <td colspan='3'><?php echo $this->Html->link('Add loci', '#', array('class' => 'addloci', 'id' => '33')); ?></td>
            </tr>
          </tbody>
          <tbody style='display:none' class='loci33'>
            <tr>
              <td><?php echo $this->Form->input('Variant.3.ChrNo3', array('label'=>'Chr No.')); ?></td>
              <td><?php echo $this->Form->input('Variant.3.Start3', array('label'=>'Start')); ?></td>
              <td><?php echo $this->Form->input('Variant.3.End3', array('label'=>'End')); ?></td>
            </tr>
          </tbody>
        </table>
        </div> <!--/.col-md-6-->
        <div class="col-md-6">
        <table class="table table-bordered">
          <th colspan='2' style='text-align:center'>Features</th>
          <tr>
            <td><?php echo $this->Form->input('Variant.0.Connector3', array('type'=>'select', 'label'=>false, 'options'=>array('In'=>'In','Not'=>'NOT in'))); ?></td>
            <td><?php echo $this->Form->input('Variant.0.Features3', array('type'=>'select', 'label'=>false, 'empty' => '(choose one)', 'options'=>$Features)); ?></td>
          </tr>
          <tr>
            <td colspan='2'><?php echo $this->Html->link('Add feature', '#', array('class' => 'addfeature', 'id' => '31')); ?></td>
          </tr>
          <tbody style='display:none' class='features31'>
            <tr>
            <td><?php echo $this->Form->input('Variant.1.Connector3', array('type'=>'select', 'label'=>false, 'options'=>array('In'=>'In','Not'=>'NOT in'))); ?></td>
            <td><?php echo $this->Form->input('Variant.1.Features3', array('type'=>'select', 'label'=>false, 'empty' => '(choose one)', 'options'=>$Features)); ?></td>
            </tr>
            <tr>
              <td colspan='2'><?php echo $this->Html->link('Add feature', '#', array('class' => 'addfeature', 'id' => '32')); ?></td>
            </tr>
          </tbody>
          <tbody style='display:none' class='features32'>
            <tr>
            <td><?php echo $this->Form->input('Variant.2.Connector3', array('type'=>'select', 'label'=>false, 'options'=>array('In'=>'In','Not'=>'NOT in'))); ?></td>
            <td><?php echo $this->Form->input('Variant.2.Features3', array('type'=>'select', 'label'=>false, 'empty' => '(choose one)', 'options'=>$Features)); ?></td>
            </tr>
            <tr>
              <td colspan='2'><?php echo $this->Html->link('Add feature', '#', array('class' => 'addfeature', 'id' => '33')); ?></td>
            </tr>
          </tbody>
          <tbody style='display:none' class='features33'>
            <tr>
            <td><?php echo $this->Form->input('Variant.3.Connector3', array('type'=>'select', 'label'=>false, 'options'=>array('In'=>'In','Not'=>'NOT in'))); ?></td>
            <td><?php echo $this->Form->input('Variant.3.Features3', array('type'=>'select', 'label'=>false, 'empty' => '(choose one)', 'options'=>$Features)); ?></td>
            </tr>
          </tbody>
        </table>
      </div> <!--/.col-md-6-->
      </div> <!--/.row-->
      </div> <!--/.minterm3-->


      <br/>
      <br/>

        <?php echo $this->Form->submit('Go!', array('class'=>'btn btn-default btn-lg')); ?>
        <?php echo $this->Form->end(); ?>
      </div> <!--/.starter-template-->
    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../../assets/js/jquery.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>