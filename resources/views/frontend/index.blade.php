@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@section('content')

@include('frontend.partials.index.content')


<div class="chat_box">
        <div class="chat_head"><?php echo __('Friends') ?></div>
        <div class="chat_body" style="display: none;">
          @include('frontend.includes.friendchat')
    
        </div>
      </div>
@endsection
