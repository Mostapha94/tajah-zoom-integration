<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>All Meetings</title>
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
            <h1><a style="font-size:22px;" class="btn btn-info" href="{{route('meeting.create')}}">Add New Meeting</a></h1>
        </div>
        <div class="row responsive-table">
            <div class="col-12 col-m-12">
                <table  class="table striped bordered" id="section">
                    <thead>
                        <tr class="primary-bg">
                            <th>{{__('ID')}}</th>
                            <th>{{__('Topic')}}</th>
                            <th>{{__('Joining')}}</th>
                            <th>{{__('Start time')}}</th>
                            <th>{{__('Action')}}</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($meetings as $i=>$meeting)
                    <tr>
                        <td>{{$meeting->id}}</td>
                        <td>{{$meeting->topic}}</td>
                        <td><a class="btn btn-success" href="{{route('meeting.join',['id'=>$meeting->id])}}">Join</td>
                        <td>{{$meeting->start_time}}</td>                        <td>
                            <a href="{{route('meeting.show',['id'=>$meeting->id])}}" class="btn btn-primary">Update<a>
                        </td>
                        <td>
                            <form action="{{ route('meetings.delete',['id'=>$meeting->id]) }}" method="post">
                                @csrf
                                <button type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>   
        </div>
    </div>
  </body>
</html>
