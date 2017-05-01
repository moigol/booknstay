<?php 
View::$title = 'Add Capability';
View::$bodyclass = User::info('Sidebar');
View::header(); 
?>
<?php $userinfo = User::info();  ?>
<!-- page content -->
<div class="right_col" role="main">

    <div class=""> 
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2><?php echo View::$title; ?></h2>
                        <div class="clearfix"></div>
                    </div>

                    <div class="x_content">
                        
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <?php echo View::getMessage(); ?>   
                            <form class="form-horizontal form-label-left input_mask" method="post">
                                <input type="hidden" name="action" value="addcapability" />
                                
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">
                                        Capability Name <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <?php View::form('text', array(
                                                'name'=>'Name',
                                                'value'=>isset($pdata->Name) ? $pdata->Name : '',
                                                'custom' => 'required',
                                                'class'=>'form-control col-md-7 col-xs-12'
                                            )
                                        ); ?>  
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">
                                        Capability Group <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <?php View::form('selecta', array(
                                                'name'=>'UserCapabilityGroupID',
                                                'value'=>isset($pdata->UserCapabilityGroupID) ? $pdata->UserCapabilityGroupID : '',
                                                'custom' => 'required',
                                                'options' => $capgroup,
                                                'class'=>'form-control col-md-7 col-xs-12'
                                            )
                                        ); ?>                                        
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Description</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <?php View::form('textarea', array(
                                                'name'=>'Description',
                                                'value'=>isset($pdata->Description) ? $pdata->Description : '',
                                                'class'=>'form-control col-md-7 col-xs-12'
                                            )
                                        ); ?> 
                                        
                                    </div>
                                </div>
                                <div class="ln_solid"></div>
                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-3">
                                        <a href="<?php echo View::url('capability'); ?>" class="btn btn-warning">Cancel</a>
                                        <button id="send" type="submit" class="btn btn-success">Add Capability</button>
                                    </div>
                                </div>
                            </form>
                               
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>
<!-- /page content -->
<?php View::footer(); ?>