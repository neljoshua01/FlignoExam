@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="user_wrapper">
                    <ul class="users">
                        <li class="user">
                            <span class="pending">1</span>

                            <div class="media">
                                <div class="media-left">
                                    <img src="https://via.placeholder.com/150" alt="" class="media-object">
                                </div>
                                <div class="media-body">
                                    <p class="name">joshua</p>
                                    <p class="email">njoshuat@mail.com</p>
                                </div>
                            </div>
                        </li>
                        <li class="user">
                            <span class="pending">1</span>

                            <div class="media">
                                <div class="media-left">
                                    <img src="https://via.placeholder.com/150" alt="" class="media-object">
                                </div>
                                <div class="media-body">
                                    <p class="name">joshua</p>
                                    <p class="email">njoshuat@mail.com</p>
                                </div>
                            </div>
                        </li>
                        <li class="user">
                            <span class="pending">1</span>

                            <div class="media">
                                <div class="media-left">
                                    <img src="https://via.placeholder.com/150" alt="" class="media-object">
                                </div>
                                <div class="media-body">
                                    <p class="name">joshua</p>
                                    <p class="email">njoshuat@mail.com</p>
                                </div>
                            </div>
                        </li>
                        <li class="user">
                            <span class="pending">1</span>

                            <div class="media">
                                <div class="media-left">
                                    <img src="https://via.placeholder.com/150" alt="" class="media-object">
                                </div>
                                <div class="media-body">
                                    <p class="name">joshua</p>
                                    <p class="email">njoshuat@mail.com</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-md-8" id="messages">
                <div class="message-wrapper">
                    <ul class="messages">
                        <li class="messages clearfix">
                            <div class="sent">
                                <p>PLease LORD GUIDE ME</p>
                                <p class="date">1 Sep, 2019</p>
                            </div>
                        </li>

                        <li class="messages clearfix">
                            <div class="received">
                                <p>PLease LORD GUIDE ME</p>
                                <p class="date">1 Sep, 2019</p>
                            </div>
                        </li>
                        <li class="messages clearfix">
                            <div class="sent">
                                <p>PLease LORD GUIDE ME</p>
                                <p class="date">1 Sep, 2019</p>
                            </div>
                        </li>

                        <li class="messages clearfix">
                            <div class="received">
                                <p>PLease LORD GUIDE ME</p>
                                <p class="date">1 Sep, 2019</p>
                            </div>
                        </li>
                        <li class="messages clearfix">
                            <div class="sent">
                                <p>PLease LORD GUIDE ME</p>
                                <p class="date">1 Sep, 2019</p>
                            </div>
                        </li>

                        <li class="messages clearfix">
                            <div class="received">
                                <p>PLease LORD GUIDE ME</p>
                                <p class="date">1 Sep, 2019</p>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="input">
                    <input type="text" name="massages" class="submit">
                </div>
            </div>
        </div>
    </div>
@endsection