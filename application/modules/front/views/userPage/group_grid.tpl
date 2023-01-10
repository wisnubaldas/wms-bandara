{extends file="dasbord.tpl"}
{block name=breadcrumb}
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
{/block}
{block name=sidebar}
   {include file='sidebar.tpl'}
{/block}
{block name=content}
     <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Group List</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <div class="row-fluid">
            <div class="col-md-6">
              <div id='jqxWidget'>
                <div id="grid"></div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Add Group</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" id="frm_group">
              <div class="box-body">
                <div class="form-group">
                  <label for="name" class="col-sm-3 control-label">Group Name</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control input-sm" id="name" name="name" >
                  </div>
                </div>
                <div class="form-group">
                  <label for="description" class="col-sm-3 control-label">Description</label>

                  <div class="col-sm-9">
                    <input type="text" class="form-control input-sm" id="description" name="description" >
                  </div>
                </div>
                
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-info pull-right" id="submit">Submit</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
            </div>
        	
      	  </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          Footer
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->
       </section>
    <!-- /.content -->
{/block}
{block name='css'}
	<link rel="stylesheet" href="{base_url('asset/jqwidgets/styles/jqx.base.css')}" type="text/css" />
    <link rel="stylesheet" href="{base_url('asset/jqwidgets/styles/jqx.bootstrap.css')}" type="text/css" />
{/block}
{block name='jsscrpt'}
   <script type="text/javascript" src="{base_url('asset/jqwidgets/jqxcore.js')}"></script>
    <script type="text/javascript" src="{base_url('asset/jqwidgets/jqxbuttons.js')}"></script>
    <script type="text/javascript" src="{base_url('asset/jqwidgets/jqxscrollbar.js')}"></script>
    <script type="text/javascript" src="{base_url('asset/jqwidgets/jqxmenu.js')}"></script>
    <script type="text/javascript" src="{base_url('asset/jqwidgets/jqxdata.js')}"></script>
    <script type="text/javascript" src="{base_url('asset/jqwidgets/jqxgrid.js')}"></script>
    <script type="text/javascript" src="{base_url('asset/jqwidgets/jqxgrid.selection.js')}"></script>
    <script type="text/javascript" src="{base_url('asset/jqwidgets/jqxgrid.edit.js')}"></script>
    <script type="text/javascript" src="{base_url('asset/jqwidgets/jqxlistbox.js')}"></script>
    <script type="text/javascript" src="{base_url('asset/jqwidgets/jqxdropdownlist.js')}"></script>
    <script type="text/javascript" src="{base_url('asset/jqwidgets/jqxcheckbox.js')}"></script>
    <script type="text/javascript" src="{base_url('asset/jqwidgets/jqxcalendar.js')}"></script>
    <script type="text/javascript" src="{base_url('asset/jqwidgets/jqxnumberinput.js')}"></script>
    <script type="text/javascript" src="{base_url('asset/jqwidgets/jqxdatetimeinput.js')}"></script>
    <script type="text/javascript" src="{base_url('asset/jqwidgets/globalization/globalize.js')}"></script>
    <script type="text/javascript" src="{base_url('asset/jqwidgets/jqxgrid.columnsresize.js')}"></script>
    <script type="text/javascript">
      var groups = {json_encode($groups)}
      {literal}
        var base_url = window.location.origin+'/tps4.0';
          $(document).ready(function() {
            // prepare the data
            var source =
            {
                localdata: groups,
                datatype: "json",
                updaterow: function (rowid, rowdata, commit) {
                $.ajax({
                  url: base_url+'/front/grid/update_group',
                  type: 'POST',
                  dataType: 'json',
                  data: rowdata,
                })
                .done(function(data, status, xhr) {
                  // console.log("success");
                  // console.log(data);
                  commit(true);
                })
                .fail(function(data, status, xhr) {
                  // console.log("error");
                  commit(false);
                })
                .always(function() {
                  // console.log("complete");
                });

                },
                id:'id',
                datafields:
                [
                    { name: 'id', type: 'number' },
                    { name: 'name', type: 'string' },
                    { name: 'description', type: 'string' }
                ]
            };
            var dataAdapter = new $.jqx.dataAdapter(source);
            // initialize jqxGrid
            $("#grid").jqxGrid(
            {
                // width: getWidth('Grid'),
                theme: 'bootstrap',
                autowidth:true,
                autoheight:true,
                source: dataAdapter,
                editable: true,
                enabletooltips: true,
                selectionmode: 'multiplecellsadvanced',
                columns: [
                  { text: 'id', columntype: 'textbox', datafield: 'id'},
                  { text: 'Group Name', datafield: 'name', columntype: 'textbox' },
                  { text: 'Description', columntype: 'textbox', datafield: 'description' },
                ]
            });
            // events
            // $("#grid").on('cellbeginedit', function (event) {

            //     var args = event.args;

            //     // console.log(event.args.row.id);

            //     // $("#cellbegineditevent").text("Event Type: cellbeginedit, Column: " + args.datafield + ", Row: " + (1 + args.rowindex) + ", Value: " + args.value);

            // });
            // $("#grid").on('cellendedit', function (event) {
            //   // console.log(event.args);

            //     var idnya = event.args.row.id;
            //     var val = event.args.value;
            //     var datav = event.args.datafield;
            //     var cc = event.args.value;
            //     console.log(event);
                
                
            //     // $("#cellendeditevent").text("Event Type: cellendedit, Column: " + args.datafield + ", Row: " + (1 + args.rowindex) + ", Value: " + args.value);
            //     });
            $('#submit').click(function(e) {
                $.ajax({
                  url: base_url+'/front/grid/insert_group',
                  type: 'POST',
                  // dataType: 'json',
                  data:$('#frm_group').serialize(),
                })
                .done(function() {
                  console.log("success");
                })
                .fail(function() {
                  console.log("error");
                })
                .always(function() {
                  console.log("complete");
                });
                // e.preventDefault();
            });
          }); // end of document

      {/literal} 
  </script>
{/block}
{/block}