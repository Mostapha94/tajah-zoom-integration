<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Create meeting</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<style>
#iframe_container {
  background-color: #ffffff;
  padding: 0;
  height: 500px;;
  width: 100%;
  overflow: visible;
}

#myiframe {
  overflow: scroll;
  border: 0;
  width: 100%;
  height: 100%;
  transform: scale(1);
  -ms-transform-origin: 0 0;
  -moz-transform-origin: 0 0;
  -o-transform-origin: 0 0;
  -webkit-transform-origin: 0 0;
  transform-origin: 0 0;
}

button {
  display: inline-block;
}
</style>
  </head>

  <body class="gray-background rtl">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="iframe_container">
                    <iframe id="myiframe" src="{{$meeting->join_url}}"></iframe>
                </div>
            </div>
        </div>
    </div>
  </body>
</html>
