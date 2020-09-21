<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <style>
        ::-webkit-scrollbar {
            width: 7px;
        }
        /* Track */
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }
        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: #a7a7a7;
        }
        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: #929292;
        }
      ul{
        margin: 0px;
        padding: 0px;
      }
      li{
        list-style: none;
      }
      .user_wrapper, .message-wrapper{
        border: 1px solid #dddddd;
        overflow-y: auto;
      }
      .user_wrapper{
        height: 600px;
      }
      .user{
        cursor: pointer;
        padding: 5px 0px;
        position: relative;
      }
      .user:hover{
        background: gray;
      }
      .user:last-child{
        margin-bottom: 0px;
      }
      .pending{
        position: absolute;
        left: 13px;
        top: 9px;
        background: lightblue;
        margin: 0px;
        border-radius: 50%;
        width: 18px;
        height: 18px;
        line-height: 18px;
        padding-left: 5px;
        color: white;
        font-size: 10px;
      }
      .media-left{
        margin: 0px 5px;
      }
      .media-left img{
        width: 60px;
        border-radius: 60px;
      }
      .media-body p{
        margin: 3px 0px;
      } 
      .message-wrapper{
        padding: 10px;
        height: 536px;
        background: whitesmoke;
      }
      .messages .message{
        margin-bottom: 15px;
      }
      .messages .message:last-child{
        margin-bottom: 0px;
      }
      .received, .sent{
        width: 45%;
        padding: 3px 10px;
        border-radius: 10px;
      }
      .received{
        background: white;
      }
      .sent{
        background: lightblue;
        float: right;
        text-align: right;
      }
      .message p {
        margin: 5px 0px;
      }
      .date{
        background: transparent;
        font-size: 10px;
      }
      .active{
        background: #eeeeee;
      }
      input[type=text] {
        width: 100%;
        padding: 12px 20px;
        margin: 15px 0px 0px 0px;
        display: inline-block;
        border-radius: 4px;
        box-sizing: border-box;
        outline: none;
        border: 1px solid #cccccc;
      }
      input[type=text]:focus{
        border: 1px solid #aaaaaa ;
      }

    </style>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <script
    src="https://kit.fontawesome.com/d82353c491.js"
    crossorigin="anonymous">
    </script>
</head>
<body>
    <div id="app">
        @include('inc.navbar')
        <div class="container">
            @include('inc.messages')
            @yield('content')
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
       $('.user').click(function () {
            $('.user').removeClass('active');
            $(this).addClass('active');
            $(this).find('.pending').remove();
            receiver_id = $(this).attr('id');
            $.ajax({
                type: "get",
                url: "message/" + receiver_id, // need to create this route
                data: "",
                cache: false,
                success: function (data) {
                    $('#messages').html(data);
                    scrollToBottomFunc();
                }
            });
        });
        $(document).on('keyup', '.input-text input', function (e) {
            var message = $(this).val();
            
            if (e.keyCode == 13 && message '!=' '' && receiver_id '!=' '') {
                $(this).val(''); 
                var datastr = "receiver_id=" + receiver_id + "&message=" + message;
                $.ajax({
                    type: "post",
                    url: "message", 
                    data: datastr,
                    cache: false,
                    success: function (data) {
                    },
                    error: function (jqXHR, status, err) {
                    },
                    complete: function () {
                        scrollToBottomFunc();
                    }
                })
            }
        });
    });
    </script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
