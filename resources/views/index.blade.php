@extends('layouts.app')

@section('content')
    <div class="application">
        <div class="application_inner">
            <div class="application_inner_left">
                <div class="app_title app_bg">
                    <i class="icon-leaf"></i>
                    勤奋可以弥补聪明的不足，但聪明无法弥补懒惰的缺陷
                    <i class="icon-leaf"></i>
                </div>
                <div class="app_two_navbar">
                    <nav class="two app_bg">
                        <ul class="nav">
                            <li class="b_b_b_y">活跃</li>
                            <li>精华</li>
                            <li>帖子</li>
                            <li>帖子</li>
                            <li>帖子</li>
                            <li>帖子</li>
                            <li>帖子</li>
                            <li>帖子</li>
                            <li>帖子</li>
                        </ul>
                    </nav>
                </div>
                <content-list></content-list>
            </div>
            <div class="application_inner_right">
                <div class="app_lication_inner_right_recommend app_bg">
                    <div class="app_lication_recommend_link"><h3>推举地址</h3></div>
                    <recommend-book></recommend-book>
                </div>
            </div>
        </div>
    </div>
@endsection