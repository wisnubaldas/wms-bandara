<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link href="{$this->parser->theme_url('bootstrap/css/bootstrap.min.css')}" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{base_url('asset/plugins/fontawesome-free-5.0.2/web-fonts-with-css/css/fontawesome-all.min.css')}">

  <!-- Ionicons -->
  <link href="{$this->parser->theme_url('plugins/ionicons/css/ionicons.min.css')}" rel="stylesheet">
  <!-- Theme style -->
  <link href="{$this->parser->theme_url('dist/css/AdminLTE.min.css')}" rel="stylesheet">
  <!-- iCheck -->
  <link href="{$this->parser->theme_url('plugins/iCheck/square/blue.css')}" rel="stylesheet">
  <link href="{base_url('asset/plugins/alertifyjs/css/alertify.min.css')}" rel="stylesheet">
  <link href="{base_url('asset/plugins/alertifyjs/css/themes/default.min.css')}" rel="stylesheet">
  <link href="{$this->parser->theme_url('dist/css/custom.css')}" rel="stylesheet">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="{base_url()}"><b>CTOS WebApps</b> 1.0</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>
    <form action="#" method="post" id="login">
      <div class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="Email" name="identity" id="identity">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" name="password" id="password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox" name="remember" id="remember"> Remember Me
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat" id="submit">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <div class="social-auth-links text-center">
      <p>- OR -</p>
      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fab fa-facebook-square"></i> Sign in using
        Facebook</a>
      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fab fa-google-plus-square"></i> Sign in using
        Google+</a>
    </div>
    <!-- /.social-auth-links -->

    <a href="#">I forgot my password</a><br>
    <a href="#" class="text-center"></a>
     

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  <strong>Holy guacamole!</strong> You should check in on some of those fields below.
</div>

<!-- jQuery 2.2.3 -->
<script src="{$this->parser->theme_url('plugins/jQuery/jquery-2.2.3.min.js')}"></script>
<!-- Bootstrap 3.3.6 -->
<script src="{$this->parser->theme_url('bootstrap/js/bootstrap.min.js')}"></script>
<!-- iCheck -->
<script src="{$this->parser->theme_url('plugins/iCheck/icheck.min.js')}"></script>
<script src="{base_url('asset/plugins/alertifyjs/alertify.min.js')}"></script>
<script>
  var baseUrl = "{base_url('front/authController/login')}"
  {literal}
  
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
  // $(document).ajaxStart(function() { Pace.restart(); });
  $(function(){
      $('#submit').click(function(a){
          a.preventDefault()
          $.ajax({
            url: baseUrl,
            type: 'POST',
            data: $('#login').serialize()
          })
          .done(function(data) {
            // console.log(data)
            // alert(data.message)
            alertify.alert('Login Success', data.message,function(a){location.reload()});
          })
          .fail(function(a) {
            // Extend existing 'alert' dialog
           if(!alertify.errorAlert){
          //define a new errorAlert base on alert
            alertify.dialog('errorAlert',function factory(){
          return{
            build:function(){
                var errorHeader = '<span class="fas fa-exclamation-triangle fa-2x" '
                +    'style="vertical-align:middle;color:#e10000;">'
                + '</span> Application Error';
                this.setHeader(errorHeader);
                        }
                    };
                },true,'alert');
            }

            alertify.errorAlert(a.responseJSON.message);
            // console.log(a.responseJSON);
          })
          .always(function() {
            console.log("complete");
            $('#login')[0].reset()
          });
          

      })
  })
  // {if isset($message)}
  //       $('#danger').showBootstrapAlertDanger('{strip_tags($message)}', Bootstrap.ContentType.Text, true, 1500);
  // {/if}
{/literal}
</script>
</body>
</html>
