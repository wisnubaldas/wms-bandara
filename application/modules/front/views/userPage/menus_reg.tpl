<section class="content-header">
      <h1>
        {$title[0]}
        <small>{$title[1]}</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="javascript:void"><i class="fa fa-dashboard"></i> {$title[2]}</a></li>
        <li><a href="javascript:void">{$title[3]}</a></li>
        <li class="active">{$title[4]}</li>
      </ol>
</section>
     <!-- Main content -->
<section class="content">
      <div class="box" id="box-grid">
      	<div class="box-header with-border">
          <div class="box-title">
          	<div class="btn-group">
          		<button type="button" class="btn-purple btn btn-sm" id="parent-menu">Add Parent Menu</button>
          		<button type="button" class="btn-primary btn btn-sm" id="child-menu">Add Child Menu</button>
          	</div>
          </div>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
    	<div class="box-body">
        {foreach from=$mngrp item=i key=k }
            <div class="form-group">
                <label>Minimal</label>
                <select class="form-control select2" style="width: 100%;"  multiple="multiple">
                  {foreach from=$i.group item=gi key=gk }
                    <option selected="{$gi[1]}">{$gi[0]}</option>
                  {/foreach}  
                </select>
              </div>
              <!-- /.form-group -->
            </div>
                    
        {/foreach}
          <div class="col-md-6">
              <div class="form-group">
                <label>Minimal</label>
                <select class="form-control select2" style="width: 100%;"  multiple="multiple">
                  
                </select>
              </div>
              <!-- /.form-group -->
            </div>
  	  </div>
      <div class="box-footer">
        
      </div> <!-- boox footer -->
  		</div>
	  <!-- /.end box -->
</section>
    <!-- /.content -->
  <script type="text/javascript">
    {literal}
     $("select").select2();
    {/literal}
  </script>