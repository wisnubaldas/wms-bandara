
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
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">List User</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <div class="row-fluid">
            
            <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>#</th>
                  <th>IP</th>
                  <th>Name</th>
                  <th>First Name</th>
                  <th>Email</th>
                  <th>Company</th>
                  <th>#</th>
                  <th>#</th>
                </tr>
                </thead>
                <tbody>
                  {foreach from=$user item=i key=k}
                    <tr>
                        <td>{$i->id}</td>
                        <td>{$i->ip_address}</td>
                        <td>{$i->username}</td>
                        <td>{$i->first_name}</td>
                        <td>{$i->email}</td>
                        <td>{$i->company}</td>
                        <td><a href="{base_url('front/users_manager/delete_user?id=')}{$i->id}" class="btn btn-danger user-delete">Delete</a></td>
                        <td><a href="{base_url('front/users_manager/edit_user?id_edit=')}{$i->id}" class="btn btn-primary user-edit">Edit</a>
                        </td>
                    </tr>
                  {/foreach}
                </tbody>
              </table>
            <!-- Modal form  -->
            <div class="example-modal">
            <div class="modal modal-info" id="myModal">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title">Edit Users</h4>
                  </div>
                  <div class="modal-body">
                    <div id="form-edit">
                                    <!-- form start -->
            <form role="form" id="form-user" name="form-user">
              <div class="box-body">
                <div class="col-md-4"> 
                  <div class="form-group input-group-sm">
                  <label for="username">User Name</label>
                  <input class="form-control" id="username" name="username" placeholder="" type="text" required="">
                  <span class="help-block username hidden"></span>
                  </div>
                  <div class="form-group input-group-sm">
                  <label for="first">First Name</label>
                  <input class="form-control" name="first" id="first" placeholder="" type="text">
                  <span class="help-block first hidden"></span>
                  </div>
                  <div class="form-group input-group-sm">
                  <label for="last">Last Name</label>
                  <input class="form-control" id="last" name="last" placeholder="" type="text">
                  <span class="help-block last hidden"></span>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group input-group-sm" id="passwd">
                  <label for="passwd">Password</label>
                  <input class="form-control" id="passwd" name="passwd" placeholder="" type="text" required="">
                  <span class="help-block passwd hidden"></span>
                  </div>
                  <div class="form-group input-group-sm" id="grp">
                  <label>Group</label>
                  <select class="form-control select2" id="group" name="group" style="width: 100%;">
                  
                  </select>
                  <span class="help-block group hidden"></span>
                </div>
                <div class="form-group input-group-sm">
                  <label for="comp">Company</label>
                  <input class="form-control" id="comp" name="comp" placeholder="" type="text" required="">
                  <span class="help-block comp hidden"></span>
                  </div>  
                </div>
                <div class="col-md-4">
                  <div class="form-group input-group-sm">
                  <label for="mail">Mail</label>
                  <input class="form-control" id="mail" name="mail" placeholder="" type="mail" required="">
                  <span class="help-block mail hidden"></span>
                  </div>
                  <div class="form-group input-group-sm">
                  <label for="mail">Phone</label>
                  <input class="form-control" id="phone" name="phone" placeholder="" type="text">
                  <input id="id-user" name="id-user" type="text" hidden="">
                  <span class="help-block phone hidden"></span>
                  </div>
                  
                </div>
              </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" id="close-btn" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                    <button type="button" id="save-btn" class="btn btn-outline">Save changes</button>
                  </div>
            </form>
                </div>
                <!-- /.modal-content -->
              </div>
              <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->
          </div>
          <!-- /.example-modal -->

      	  </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <button type="button" class="btn-success btn" id="add-user">Register User</button>
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->
       </section>
    <!-- /.content -->
    <script type="text/javascript">
     var editURI = "{base_url('front/users_manager/edit_user')}";
     var userURI = "{base_url('front/users_manager/users_data')}";
     var registerURI = "{base_url('front/users_manager/register')}";

    {literal}
    $(function () {
        var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
        var animatedName = 'animated fadeIn';
      $('#add-user').click(function(){
          $.get(registerURI, function(data) {
              $('.content-wrapper').html(data);
              $('.content-wrapper').addClass(animatedName).one(animationEnd,function(){
                      $(this).removeClass(animatedName);
              });
            });

      });

      $('.user-delete').click(function(e){
          e.preventDefault()
          var delURI = $(this).attr('href');
          bootbox.confirm({ 
              size: "small",
              message: "Yakin mau delete ???", 
              callback: function(result){
                            if (result === true)
                                {
                                  $.get(delURI,function(a){
                                        $.get(userURI, function(data) {
                                            $('.content-wrapper').html(data);
                                          });
                                    })  
                                }
                        }
              })
      });
      // load modal tombol edit 
    $('.user-edit').click(function(e){
      e.preventDefault();
      $('.content-wrapper').addClass(animatedName).one(animationEnd,function(){
                      $(this).removeClass(animatedName);
              });
        $('#myModal').modal({
            backdrop: 'static',
            keyboard: false
          })
        $.get($(this).attr('href'),function(a){
            $('#username').val(a.username);
            $('#first').val(a.first_name);
            $('#last').val(a.last_name);
            $('#passwd').remove();
            $("#grp").remove();
            $('#group').val(a.username);
            $('#comp').val(a.company);
            $('#mail').val(a.email);
            $('#phone').val(a.phone);
            $('#id-user').val(a.id);
          $.each(a.groupnya, function(i, item) {
              // console.log(item);
              var elem = $('<option value="'+item.id+'" class="opt">'+item.description+'</option>');
              elem.appendTo("#group");
          });
        })
      });
      $('#myModal').on('shown.bs.modal', function (a) {
          // elem.remove();
        $(".select2").select2();
        $("#close-btn").click(function(event) {
          $(".opt").remove();
          $("#form-user")[0].reset();
        });
        $('#save-btn').click(function(e){
          $.ajax({
            url: editURI,
            type: 'POST',
            data: $('#form-user').serialize(),
          })
          .done(function() {
            // console.log("success");
            $.get(userURI, function(data) {
              $('.content-wrapper').html(data);
            });

          })
          .fail(function() {
            console.log("error");
            alert('error ajax');
          })
          .always(function() {
            $('#myModal').modal('hide');
          });
          // console.log($('#form-user').serialize());
        })
        
      })
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
        
      });
    {/literal}

    </script>
