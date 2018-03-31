@extends('layouts.app')

@section('content')
    <div class="application">
        <div class="application_inner">
            <div class="application_inner_left">
                <show-find></show-find>
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