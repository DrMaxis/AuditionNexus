@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@section('content')

@include('frontend.partials.downloads.content')

@section('xcss')
<style>
  .row li {
    width: 33.3%;
    float: left;
  }
  .errimg-list {
    list-style-type: none;
  }

  .errimg {
    border: 0 none;
    display: inline-block;
    height: auto;
    max-width: 100%;
    vertical-align: middle;
  }
  .info-text {
    font-size: 16px;
    color:white;
  }
  .ftp-option {
    border-top:2px solid white;
  }
  .dlbutton {
    margin: 25px;
  }
  .dl-options {
    border-top:2px solid white;
    margin-top:1rem;
  }
.row.dls li {
    float: left;
    width:auto;
}
  .dl-list {
    list-style-type: none;
  }
</style>
@endsection

<div class="chat_box">
  <div class="chat_head"><?php echo __('Friends') ?></div>
  <div class="chat_body" style="display: none;">
    @include('frontend.includes.friendchat')

  </div>
</div>
@endsection