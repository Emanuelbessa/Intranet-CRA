<!-- Vendor CSS Files -->
<link href="{{ asset('AdminLTE/bower_components/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{ asset('AdminLTE/bower_components/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
<!-- Template Main CSS File -->
<link href="AdminLTE/css/style.css" rel="stylesheet">
<?php
$title = 'Intranet - Home';
?>

@includeif('layouts.head')
<style>
    /* width */
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

    ul {
        margin: 0;
        padding: 0;
    }

    li {
        list-style: none;
    }

    .user-wrapper,
    .message-wrapper {
        border: 1px solid #dddddd;
        overflow-y: auto;
    }

    .user-wrapper {
        height: 600px;
    }

    .user {
        cursor: pointer;
        padding: 5px 0;
        position: relative;
    }

    .user:hover {
        background: #eeeeee;
    }

    .user:last-child {
        margin-bottom: 0;
    }

    .pending {
        position: absolute;
        left: 13px;
        top: 9px;
        background: #b600ff;
        margin: 0;
        border-radius: 50%;
        width: 18px;
        height: 18px;
        line-height: 18px;
        padding-left: 5px;
        color: #ffffff;
        font-size: 14px;
    }

    .media-left {
        margin: 0 10px;
    }

    .media-left img {
        width: 64px;
        border-radius: 64px;
    }

    .media-body p {
        margin: 6px 0;
    }

    .message-wrapper {
        padding: 10px;
        height: 750px;
        background: #eeeeee;
    }

    .messages .message {
        margin-bottom: 15px;
    }

    .messages .message:last-child {
        margin-bottom: 0;
    }

    .received, .sent {
        width: 45%;
        padding: 3px 10px;
        border-radius: 10px;
    }

    .received {
        background: #ffffff;
    }

    .sent {
        background: #3bc4ff;
        float: right;
        text-align: right;
    }

    .message p {
        margin: 5px 0;
        color: #000000;
        font-size: 16px;
        font-weight: 300;
        letter-spacing: 0.5px;
        line-height: 1;
    }

    .date {
        color: #777777;
        font-size: 12px;
    }

    .active {
        background: #eeeeee;
    }

    input[type=text] {
        width: 100%;
        padding: 12px 20px;
        margin: 15px 0 0 0;
        display: inline-block;
        border-radius: 4px;
        box-sizing: border-box;
        outline: none;
        border: 1px solid #cccccc;
    }

    input[type=text]:focus {
        border: 2px solid #aaaaaa;
        font-size: 18px;
    }
</style>

<div class="container-fluid">
    @csrf
    <div class="row">
        <div class="col-md-4">
            <div class="user-wrapper">
                <ul class="users">
                    @foreach($users as $user)
                    <li class="user" id="{{ $user->id }}">
                        {{--will show unread count notification--}}
                        @if($user->unread)
                        <span class="pending">{{ $user->unread }}</span>
                        @endif

                        <div class="media">
                            <div class="media-left">
                                <img src="https://via.placeholder.com/150" alt="" class="media-object">
                            </div>

                            <div class="media-body">
                                <p class="name">{{ $user->first_name }}</p>
                                <p class="email">{{ $user->email }}</p>
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="col-md-8" id="messages">

        </div>
    </div>
</div>


<script src="https://js.pusher.com/5.0/pusher.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script>
    var receiver_id = '';
    var my_id = "{{ Auth::id() }}";
    $(document).ready(function () {
        // ajax setup form csrf token
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('input[name="_token"]').val()
            }
        });
        // Enable pusher logging - don't include this in production
        Pusher.logToConsole = true;
        var pusher = new Pusher('75fd5fd9d3c2b1f9d8c2', {
            cluster: 'us2',
            forceTLS: true
        });
        var channel = pusher.subscribe('my-channel');
        channel.bind('my-event', function (data) {
            // alert(JSON.stringify(data));
            if (my_id == data.from) {
                $('#' + data.to).click();
            } else if (my_id == data.to) {
                if (receiver_id == data.from) {
                    // if receiver is selected, reload the selected user ...
                    $('#' + data.from).click();
                } else {
                    // if receiver is not seleted, add notification for that user
                    var pending = parseInt($('#' + data.from).find('.pending').html());
                    if (pending) {
                        $('#' + data.from).find('.pending').html(pending + 1);
                    } else {
                        $('#' + data.from).append('<span class="pending">1</span>');
                    }
                }
            }
        });
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
            // check if enter key is pressed and message is not null also receiver is selected
            if (e.keyCode == 13 && message != '' && receiver_id != '') {
                $(this).val(''); // while pressed enter text box will be empty
                var datastr = "receiver_id=" + receiver_id + "&message=" + message;
                $.ajax({
                    type: "post",
                    url: "message", // need to create this post route
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
    // make a function to scroll down auto
    function scrollToBottomFunc() {
        $('.message-wrapper').animate({
            scrollTop: $('.message-wrapper').get(0).scrollHeight
        }, 50);
    }
</script>