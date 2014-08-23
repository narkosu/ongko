<?php
/* @var $this ProtokolPenelitianController */
/* @var $model ProtokolPenelitian */

$this->breadcrumbs=array(
	'Protokol Penelitians'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ProtokolPenelitian', 'url'=>array('index')),
	array('label'=>'Manage ProtokolPenelitian', 'url'=>array('admin')),
);

?>

<div class="maincontent">
    <div class="contentinner content-dashboard">                

          <div class="row-fluid">
            <div class="span16">                        

               <div class="navbar">
                <div class="navbar-inner">
                  <ul class="nav">
                    <li class="haslink"><a href="<?php echo Yii::app()->createUrl('penelitian/proposalpenelitian/viewvalidasi/id/'.$model->id)?>">
                      <span class="badge">1</span>&nbsp;&nbsp;Proposal Penelitian <i class="iconfa-ok"></i></a></li>
                    <li class="active"><a href="<?php echo Yii::app()->createUrl('penelitian/protokolpenelitian/viewvalidasi/id/'.$model->id)?>">
                      <span class="badge badge-success">2</span>&nbsp;&nbsp;Protokol Penelitian </a></li>
                    <?php if ( $model->step >= 3 ) { ?> 
                        <li class="haslink"><a href="<?php echo Yii::app()->createUrl('penelitian/progrespenelitian/view/id/'.$model->id)?>">
                           <span class="badge">3</span>&nbsp;&nbsp;Progress Penelitian</a>
                        </li>
                    <?php } else { ?>
                        <li ><a >
                           <span class="badge">3</span>&nbsp;&nbsp;Progress Penelitian</a>
                        </li>
                    <?php } ?>
                    <?php if ( $model->isOutputAvailable() ) { ?>
                        <li class="haslink">
                        <a href="<?php echo Yii::app()->createUrl('penelitian/outputpenelitian/view/id/'.$model->id)?>">
                            <span class="badge ">4</span>&nbsp;&nbsp;Output Penelitian</a>
                        </li>    
                    <?php } else { ?>
                        <li>
                        <a><span class="badge">4</span>&nbsp;&nbsp;Output Penelitian</a>
                        </li>
                    <?php } ?>
                    <?php if ( $model->isDesiminasiAvailable() ) { ?>
                        <li class="active">
                        <a href="<?php echo Yii::app()->createUrl('penelitian/diseminasipenelitian/view/id/'.$model->id)?>">
                            <span class="badge badge-success">5</span>&nbsp;&nbsp;Desiminasi</a>
                        </li>    
                    <?php } else { ?>
                        <li>
                        <a><span class="badge">5</span>&nbsp;&nbsp;Desiminasi</a>
                        </li>
                    <?php } ?>  
                  </ul>
                </div>
              </div>

                 <?php
                if (Yii::app()->user->isSuperAdmin ||
                        Yii::app()->user->isKabid ||
                        Yii::app()->user->isKasubbid ||
                        Yii::app()->user->isAdmin ||
                        Yii::app()->user->isPPI ||
                        Yii::app()->user->isKapuslit ||
                        Yii::app()->user->isKI ||
                        Yii::app()->user->isKE) {
                    
                    ?>
                  <div class="widgetcontent bordered shadowed nopadding">
                      <?php echo $this->renderPartial('_viewprotokol_admin', 
                        array('model'=>$model, 
                              'modelFile' => $modelFile,
                              'newModelFile'=>$newModelFile, 
                              'groupFile' => $groupFile,    
                              'modelProtokol' => $modelProtokol,
                                'validasi'  => $validasi,
                                'pegawai'=> $pegawai
                        )); 
                      
                      ?>
                  </div>
            <?php } else { ?>
                  <h4 class="widgettitle nomargin shadowed">Update Protokol Penelitian : <?php echo $model->nama_penelitian?></h4>

                  <div class="widgetcontent bordered shadowed nopadding">
                     <?php echo $this->renderPartial('_viewprotokol', 
                        array('model'=>$model, 
                              'modelFile' => $modelFile,
                              'newModelFile'=>$newModelFile, 
                              'groupFile' => $groupFile,  
                              'modelProtokol' => $modelProtokol,
                            'validasi'  => $validasi
                        )); ?>
                  </div><!--widgetcontent-->
            <?php } ?>

              </div><!--span8-->

          </div><!--row-fluid-->
      </div><!--contentinner-->
  </div><!--maincontent-->
  
