<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Create meeting</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
    <script type="text/javascript" src="//code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
    <script src="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js"></script>
  </head>

  <body class="gray-background rtl">
    <div class="container">
        <div class="row">
            <h1><a style="font-size:22px;" class="btn btn-info" href="{{route('meeting.index')}}">Show All Meetings</a></h1>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="well well-sm">
                    <form class="form-horizontal" method="post" action="{{route('meeting.store')}}">
                        @csrf
                        <fieldset>
                            <legend class="text-center header">Create meeting</legend>

                            <div class="form-group">
                                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                                <div class="col-md-8">
                                    <label>Topic</label>
                                    <input id="fname" name="topic" type="text" placeholder="Topic" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                                <div class="col-md-8">
                                <label>Start time</label><br>
                                <input type="text" id="dtpickerdemo" name="start_time"> <br>
                            </div>
                            <div class="form-group">
                                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                                <div class="col-md-8">
                                <label></label><br>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                            <br>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
            $(function () {
                $('#dtpickerdemo').datetimepicker();
            });
    </script>
  </body>
</html>
