<!DOCTYPE html>
<html>
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sistem Informasi Parkir | Login</title>
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/font-awesome.css" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<style>
    .background{
        background :url("img/1.jpg");
        /* background-repeat : no-repeat; */
        background-size : cover;
    }
</style>
<body>
    <div class=background>
    <div class="container">
        <div class="row text-center " style="padding-top:100px;">
            <div class="col-md-12">
                <h2 style= "color: white"><B>SHOES ID</B></h2>
            </div>
        </div>
        
        <div class="row "> 
            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">  
                <div class="panel panel-default">
                <div class="panel-body">
                
                    <form role="form" action="/login/Auth" method="GET">
                    @csrf
                        <h4 align="center">Silahkan Login</h4><br />
                        <div class="form-group input-group">
                            <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                            <input type="text" name="username" class="form-control" placeholder="Your Username " />
                        </div>
                        <div class="form-group input-group">
                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                            <input type="password" name="password" class="form-control"  placeholder="Your Password" />
                        </div>
                        <input type="submit" name="submit" value="Login" class= "btn form-control btn-info">
                    </form>
                </div>
            </div>
            </div>
        </div>
        <div class="row text-center " style="padding-top:251px;">
            <div class="col-md-12">
                <h4></h4>
            </div>
        </div>
    </div>
    </div>
    </body>