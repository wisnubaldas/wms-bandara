     <!-- Main content -->
    <section class="content">
      <div class="box box-primary">
        <div id="error"></div>
            <!-- form start -->
            <form role="form" id="form-reg" name="form-reg">
              <div class="box-body">
                <div class="col-md-4"> 
                  <div class="form-group">
                  <label for="username">User Name</label>
                  <input class="form-control" id="username" name="username" placeholder="" type="text" required="">
                  <span class="help-block username hidden"></span>
                  </div>
                  <div class="form-group">
                  <label for="first">First Name</label>
                  <input class="form-control" name="first" id="first" placeholder="" type="text">
                  <span class="help-block first hidden"></span>
                  </div>
                  <div class="form-group">
                  <label for="last">Last Name</label>
                  <input class="form-control" id="last" name="last" placeholder="" type="text">
                  <span class="help-block last hidden"></span>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                  <label for="passwd">Password</label>
                  <input class="form-control" id="passwd" name="passwd" placeholder="" type="text" required="">
                  <span class="help-block passwd hidden"></span>
                  </div>
                  <div class="form-group">
                  <label>Group</label>

                  <select class="form-control select2" id="group" name="group" style="width: 100%;">
                    {foreach from=$group_list item=i key=k }
                      <option selected="selected" value="{$i.id}">{$i.description}</option>
                    {/foreach}
                  </select>
                  <span class="help-block group hidden"></span>
                </div>
                <div class="form-group">
                  <label for="comp">Company</label>
                  <input class="form-control" id="comp" name="comp" placeholder="" type="text" required="">
                  <span class="help-block comp hidden"></span>
                  </div>  
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                  <label for="mail">Mail</label>
                  <input class="form-control" id="mail" name="mail" placeholder="" type="mail" required="">
                  <span class="help-block mail hidden"></span>
                  </div>
                  <div class="form-group">
                  <label for="mail">Phone</label>
                  <input class="form-control" id="phone" name="phone" placeholder="" type="text">
                  <span class="help-block phone hidden"></span>
                  </div>
                  
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary" name="register" id="register">Submit</button>
                <button type="button" class="btn btn-warning" id="back">Back</button>
              </div>
            </form>
          </div>
       </section>
    <!-- /.content -->
  <script type="text/javascript">
    var postURI = "{base_url('/front/users_manager/post_reg')}";
    var userURI = "{base_url('front/users_manager/users_data')}";
  {literal}
      $(document).ready(function() {
        var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
        var animatedName = 'animated fadeIn';
        $("#back").click(function(a){
            $.get(userURI, function(data) {
              $('.content-wrapper').html(data);
              $('.content-wrapper').addClass(animatedName).one(animationEnd,function(){
                      $(this).removeClass(animatedName);
              });
            });
            a.preventDefault();

        })
           $(".select2").select2();
           $("#phone").inputmask("mask", {"mask": "(+62)999-9999-9999"});
           var form = $('#form-reg');

           $("#register").click(function(e){
              $.ajax({
                url: postURI,
                type: 'POST',
                // dataType: 'json',
                data: form.serialize()
              })
              .done(function(data) {
                // console.log(data);
                $('#form-reg')[0].reset();
                $('.help-block').addClass('hidden');
              })
              .fail(function(xhr) {
                // console.log(xhr);
                // alert('error koneksi '+xhr.status);
                $.each(xhr.responseJSON, function(i,v){
                    // $("#username").append(v);
                    // var label = $("label[for='"+$(i).attr('id')+"']");
                    // label.html(v);
                    $(i).removeClass('hidden').html(v);
                });
              })
              .always(function(xhr) {
                // console.log(xhr);
                // alert(xhr.statusText+' '+xhr.status)
              });
               e.preventDefault();
           });

      });

    {/literal} 
  </script>