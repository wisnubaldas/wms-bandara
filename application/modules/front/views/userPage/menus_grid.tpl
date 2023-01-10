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
          		<button type="button" class="btn-warning btn btn-sm" id="parent-menu">Add Parent Menu</button>
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
      		<div class="row-fluid">
         <table id="example2" class="table table-bordered table-hover table-striped" width="100%" cellspacing="0">
            <thead>
            <tr>
              <th>Menu ID</th>
              <th>ID</th>
              <th>Parent Name</th>
              <th>Parent Icon</th>
              <th>Parent ID</th>
              <th>Child Name</th>
              <th>Link</th>
              <th>Active</th>
              <th>#</th>
              <th>#</th>
            </tr>
            </thead>
            <tbody>
              
            </tbody>
            
          </table>
  	  		</div>
  		</div>
      </div>
      <!-- end box -->

      <div class="box box-info hidden" id="frm-menu">
            <div class="box-header with-border">
              <h3 class="box-title">Create/Update Menus</h3>
            </div>
            <!-- /.box-header -->
            
              <div class="box-body">
              	<form name="frm-editMenu" id="frm-editMenu" >
				<fieldset>
				<div class="col-md-4">
					<div class="form-group">
					  <label for="pertama" class="control-label">ID</label>
					    <input class="input-sm form-control" id="pertama" name="pertama" placeholder="" type="text">
					</div>
					<div class="form-group">
					  <label for="parent_name" class="control-label">Parent Name</label>
					    <input class="input-sm form-control" id="parent_name" name="parent_name" placeholder="" type="text">
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
					  <label for="parent_icon" class="control-label">Icon</label>
					    <input class="input-sm form-control" id="parent_icon" name="parent_icon" placeholder="" type="text">
					</div>
					<div class="form-group">
					  <label for="kedua" class="control-label">Parent ID</label>
					    <input class="input-sm form-control" id="kedua" name="kedua" placeholder="" type="text">
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
					  <label for="name" class="control-label">Cild Name</label>
					    <input class="input-sm form-control" id="name" name="name" placeholder="" type="text">
					</div>
					<div class="form-group">
					  <label for="link" class="control-label">Link</label>
					    <input class="input-sm form-control" id="link" name="link" placeholder="" type="text">
					</div>
					<div class="form-group">
					  <label for="active" class="control-label">active</label>
					    <input class="input-sm form-control" id="active" name="active" placeholder="" type="text">
					    <input id="id" name="id" hidden type="text">
					</div>
				</div>
				</fieldset>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                	<div class="btn-group pull-right">
                		<button class="btn btn-warning" id="cancel-edit">Cancel</button>
                		<button class="btn btn-success" id="update-menu">Update</button>
                		<button class="btn btn-primary" id="create-menu">Create</button>
                	</div>
              </div>
			</form>
              <!-- /.box-footer -->
	  </div>
	  <!-- /.end box -->
</section>
    <!-- /.content -->
<script type="text/javascript">
	var menuURI = "{base_url('front/menusManager/getMenu')}"
	var editURI = "{base_url('front/menusManager/editMenu')}"
	var createURI = "{base_url('front/menusManager/createMenu')}"
	var delURI = "{base_url('front/menusManager/deleteMenu')}"
	var indexURI = "{base_url('front/menusManager')}"
	
	{literal}
	var btnChk = '<label class="btn btn-primary chk"><input type="checkbox" autocomplete="off"><span class="glyphicon glyphicon-ok"></span></label>';

	$('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false,
          "ajax":menuURI,
          "columns": [
            { "data": "id" },
            { "data": "pertama" },
            { "data": "parent_name" },
            { "data": "parent_icon" },
            { "data": "kedua"},
            { "data": "name" },
            { "data": "link" },
            { "data": "active"},
            { "data": "id",
            	"render": function ( data, type, row, meta ) {
      			return '<button value="'+data+'" class="btn btn-danger btn-sm del-menu">Delete</button>';
    			}
    		},
    		{ "data": "id",
            	"render": function ( data, type, row, meta ) {
      			return '<button value="'+data+'" class="btn btn-primary btn-sm edit-menu">Edit</button>';
    			}
    		}
        ]
        });
	$('#example2 tbody').on('click', '.del-menu', function () {
         idnya = $(this).val()
         bootbox.confirm({ 
              size: "small",
              message: "Yakin mau delete ??? "+$(this).val(), 
              callback: function(result){
                            if (result === true)
                                {
                                  $.post(delURI, {id:idnya}, function(data, textStatus, xhr) {
                                  	if (data == 1){
						    				$.get(indexURI,function(data){
						    					$(".content-wrapper").html(data);
						    				})
						    			}
                                  });
                                }
                        }
              })
    } );
    $('#example2 tbody').on('click', '.edit-menu', function () {
    	$("#create-menu").prop('disabled', true);
        $.get(menuURI+"?id="+$(this).val(), function(data){
        	$("#box-grid").hide();
        	$("#frm-menu").removeClass('hidden').show();
        	$.each(data.data,function (i,v) {
        		$("#"+i).val(v);
        	})
        });
    });
    $("#cancel-edit").click(function(){
    	$.get(indexURI,function(data){
    			$(".content-wrapper").html(data);
    	})
    });
    $("#update-menu").click(function(){
    	var frm = $('#frm-editMenu').serialize();
    	$.post(editURI, frm, function(data, textStatus, xhr) {
    		if (data.data == 1){
    				$.get(indexURI,function(data){
    					$(".content-wrapper").html(data);
    				})
    		}
    	});
    });
    $("#parent-menu").click(function(){
    	$("#name,#kedua,#link").parent().remove();
    	$("#box-grid").hide();
        $("#frm-menu").removeClass('hidden').show();
        $("#update-menu").prop('disabled', true);
        $("#create-menu").on('click',function(){
        	var frm = $('#frm-editMenu').serialize();
        	$.post(createURI, frm, function(data, textStatus, xhr) {
        		if (data.data){
    				$.get(indexURI,function(data){
    					$(".content-wrapper").html(data);
    				})
    			}
    			console.log(xhr);
        	}).error(function(a) { 
				   alert(a.statusText); 
				});
        })
    })
    $("#child-menu").click(function(){
    	$("#pertama,#parent_name,#parent_icon").parent().remove();
    	$("#box-grid").hide();
        $("#frm-menu").removeClass('hidden').show();
        $("#update-menu").prop('disabled', true);
        $("#create-menu").on('click',function(){
        	var frm = $('#frm-editMenu').serialize();
        	$.post(createURI, frm, function(data, textStatus, xhr) {
        		if (data.data){
    				$.get(indexURI,function(data){
    					$(".content-wrapper").html(data);
    				})
    			}
    			console.log(xhr);
        	}).error(function(a) { 
				   alert(a.statusText); 
				});
        })
    })
	{/literal}
</script>