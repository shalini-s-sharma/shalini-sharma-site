@extends('layouts.master')
@php
    $title = 'University Match | TheCollegeMonk';
@endphp
@section('title',$title)
@section('custom_meta')
<meta name="description" content="Find the Scholarships which you are eligible for the year 2019-2020">
<link rel="canonical" href="{{url()->current()}}" />
@stop
@section('custom_css')

<style type="text/css">
[v-cloak] {display: none;}
#resetMatch {text-transform: none;}
.rangeSelector {margin-bottom: 40px;}
.filter-div .form-group .radio label {color: rgb(0, 0, 0, .54); font-weight: 400;}
.filter-div .form-group .checkbox label {color: rgb(0, 0, 0, .54); font-weight: 400;}
.noUi-active {transform: scale3d(1, 1, 1)!important;}
.noUi-tooltip {margin-top: 20px;}
.noUi-origin[style^="left: 100"] .noUi-handle.noUi-active .noUi-tooltip {margin-left: -40px;}
.noUi-origin[style^="left: 100"] .noUi-handle .noUi-tooltip {margin-left: -40px;}
/* .main-bar{background: transparent !important;border: none;box-shadow: none;margin-top: 30px;} */
.banner-content {margin: 0 auto !important;}
.content-width {width: 70%;}
#title-h1 {margin-top: 40px;line-height: 34px;}
#title-h2 {font-weight: normal;color: #fff;line-height: 28px;}
.head-mob{height: 360px !important;}
.margin-b30{margin-bottom: 30px;}
.top-margin{margin-top: 20px;}
.pad-l30{padding-left: 30px;}
.margin-t30{margin-top: 30px;}
.head-section {margin-bottom: 20px;}
.section {margin-bottom: 30px;}
.data-row{margin-right: 0;margin-left: 0; }
.icon{vertical-align: middle;margin-right: 3px;}
.apply-now2 {background: linear-gradient(45deg, #ffa955, #ea5455);font-weight: 700;border-radius: 30px;padding: 4px 20px;text-transform: none;font-size: 14px;float: none;}
.affix-nav > li > a:focus,.affix-nav > li > a:hover{background: linear-gradient(45deg, #02CCBB, #A951EE) !important;color:white !important;}
.affix{width: 262px;}
.head-section {margin: 10px 0;}
.section {padding: 0;margin-bottom: 20px;}
.long-text{text-align: justify;line-height: 24px;font-size: 14px !important;}
.head-pad{padding: 0 0 10px;}
.scholarship-title{font-size: 17px;line-height: 21px;font-weight: 700;margin: 0;color: #474947;padding: 3.5px 0}
.card-title{
font-size: 14px;line-height: 15px;margin: 0 0 8px 0;color:#3C4858;font-weight: 700;}
.card-subtitle{font-size: 14px;line-height: 15px;margin: 0 0 0 25px;color:#666666;}
.card-subtitle-mob{
font-size: 14px;line-height: 15px;color:#666666;font-weight: normal !important;}
.card-row{padding: 15px 15px 0;}
.caret-right{display: block;}
.title-row{margin: 0 0 20px;}
.titile-column{padding-left: 0;}
.padding-b15{padding-bottom: 5px;}
.long-text h4{font-size: 16px; line-height: 21px;color: #474947}
.long-text h3{font-size: 17px; line-height: 21px;color: #474947;margin:0 0 10px;font-weight: bold;}
@media (max-width: 767px) {
.search_results{width: 90% !important;}
.results_lists{top: 40%;}
.simple-box{padding: 15px;}
.bottom-margin{margin-bottom: 10px !important;}
.top-margin{margin-top: 10px !important;}
.apply-now{margin-top: 15px;}
.long-text ul{margin-left: -15px;}
.card-subtitle-mob{line-height: 20px;}
.content-width {width: 100%;}
#title-h1 {margin-top: 20px !important;font-size: 26px !important;line-height: 30px  !important;}
#title-h2 {line-height: 24px;margin-bottom: 40px;}
.head-mob{height: auto !important;}
.apply-button{margin-top: 15px}
.title-row {margin: 0 0 15px;}
.m9 {padding: 0;}
}
@media only screen and (max-width: 992px)  {
#scholar_main_filter {height: calc(100vh - 50px);width: 100%;text-align: left;position: absolute;z-index: 9999;text-align: left;position: fixed;padding: 0px;overflow-y: scroll;top: 0;left: 0;display: none;background: #273553;}
#reset, #apply_filter {position: fixed; bottom: 0; text-align: center; padding: 15px 0; color: #fff; font-weight: 700; font-size: 14px; width: 50%;margin-bottom: 0;}
#reset {left: 0;background: linear-gradient(45deg, #ffa955, #ea5455);}
#apply_filter{right: 0;background: linear-gradient(45deg, #02CCBB , #A951EE)}
.datepicker.dropdown-menu.open{z-index: 99999;}
.filter-nav{display: none;}
.filter-h {text-align: left; background: none;color: #fff; border-bottom: 1px solid #ccc;font-size: 17px!important;}
.closebtn{position: absolute;top: 12px;right: 25px;font-size: 36px;margin-left: 50px;color: #fff;top: 8px;}
}
.title-color {color: #fff!important;}
.bread_crum_ul li i.arrow-right {
    vertical-align: middle;
    transform: scale(0.8);
    margin: 2px;
}
.navbar {box-shadow: 0px 0px 0px !important;}
.university-page .wrapper > .header {
    display: -webkit-box;
    display: -moz-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    align-items: center;
    padding-top: 0!important;
    height: 350px!important;
}
#title-h1{
    margin-top: 0px!important;
}
.inner-breadcrum{
    position: relative!important;
    margin-bottom: 0px;
}
@media (max-width: 767px){
.university-page .wrapper > .header {
    height: 350px!important;
}
.scholarship-page .breadcrum-div ul{
    padding: 6px 0!important;
    padding-left: 20px!important;
}
}
</style>
<style>@media (max-width: 767px) {#global_search{margin-bottom: 50px;width: 99%;}.right-addon .glyphicon {right: 0%;}}</style>
<link rel="stylesheet" href="{{ asset('css/blog/blog.css') }}">

@stop
@section('custom_navbar')
<nav class="hidden-md hidden-lg fixed-nav secondnavbar filter-nav" id="filter_icon">
<div class="col-xs-6">
<div class="apply-filter">Apply Filters</div>
</div>
<div class="col-xs-6">
<i class="filter" ></i>
</div>
</nav>
<nav class="hidden-md hidden-lg navbar-fixed-bottom" id="global-sticky2">
    <div class="col-xs-12 pd-zero"></div>
</nav>
@stop
@section('content')
<div class="wrapper scholarship-page" id="app">
        @include('themes.v1.breadcrumb')
    <div id="loading" class="hide">
        <div id="loading-content">
        </div>
    </div>
    <div class="head-mob header header-filter lazy" title="Best Online Colleges" data-src="{{asset('images/scholarship/scholarship_match_head.jpeg')}}" style="height: 360px;padding-top:130px;height:350px!important">
        <div class="container">
            <h1 class="text-center" id="title-h1">University Match</h1>
            <p class="text-center" id="title-h2">Find the Scholarships which you are eligible for the year 2019-2020</p>
            <!-- <form id="e_search_form"> -->
                <div class="inner-addon right-addon margin-t30">
                    <!-- <i class="glyphicon glyphicon-search search-icon"></i> -->
                    <input type="text" placeholder="Search for Colleges" id="global_search" autocomplete="off" name="query" >
                    <div class="results_lists">
                        <ul class="search_results"></ul>
                    </div>
                </div>
            <!-- </form> -->
        </div>
    </div>

    <div class="container full-container">
        <div class="row full-row margin-zero margin-t10">
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" id="scholar_main_filter">
                <div class=" affix-top">
                    <h2 class="heading filter-h">Advanced Search</h2>
                    <span class="closebtn hidden-md hidden-lg" id="closebtn">×</span>
                    <div class="filter-div">
                        <form id="scholar_match_filter">
                        @foreach($filterGroups  as $group)
                                    @if($group->type == 1)
                                        <div class="row">
                                                <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>{{ $group->name }}</label>
                                                    @foreach($filters as $filter)
                                                        @if($filter->filter_group_id == $group->id)
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="checkbox" value="{{ $filter->value }}" onchange="getFilterData()" name="{{ $group->slug }}[]" id="{{ $filter->slug }}">
                                                                    {{ $filter->name }}
                                                                </label>
                                                            </div>
                                                        @endif
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    @elseif($group->type == 2)
                                        <div class="row">
                                            <div class="col-md-12">
                                            <div class="rangeSelector">
                                                <div class="form-group">
                                                    <label>{{ $group->name }}</label>
                                                    <div id="{{ $group->slug }}-slider" class="slider"></div>
                                                    <input type="hidden" name="{{ $group->slug }}" value="" id="{{ $group->slug }}">
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                    @elseif($group->type == 3)
                                        <div class="row">
                                            <div class="col-md-12">

                                            <div class="form-group">
                                                <label for="state">{{ $group->name }}</label>
                                                <select class="form-control" name="{{ $group->slug }}" onchange="getFilterData()" id="{{ $group->slug }}">
                                                    <option value="">All</option>
                                                    @foreach($filters as $filter)
                                                        @if($filter->filter_group_id == $group->id)
                                                            <option value="{{ $filter->value }}">{{ $filter->name }}</option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                            </div>
                                            </div>
                                        </div>
                                    @elseif($group->type == 4)
                                    <div class="row">
                                            <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="state">{{ $group->name }}</label>
                                                @foreach($filters as $filter)
                                                    @if($filter->filter_group_id == $group->id)
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" value="{{ $filter->value }}" onchange="getFilterData()" name="{{ $group->slug }}" id="{{ $filter->slug }}">
                                                            {{ $filter->name }}
                                                        </label>
                                                    </div>
                                                    @endif
                                                @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    @endif

                        @endforeach
                    </form>
                    <div class="mob-button hidden-md hidden-lg">
                        <button id="reset" class="btn" onclick="resetfilter()">Reset</button>
                        <button id="apply_filter" class="btn" onclick="getFilterData('apply_mobile_filter')">Apply Filter</button>
                    </div>
                    </div>
                <div class="hidden-xs hidden-sm" style="margin-bottom: 20px;">
                    <button class="heading filter-h btn btn-block resetForm" id="resetMatch"  onclick="resetfilter();">Reset</button>
                </div>
                </div>
            </div>
            <div class="col-md-9 m9">
            <!-- <div class="client-ads" data-ad="college-ave"></div> -->
                <div class="head-section">
                    <div class="simple-box" id="total_res">
                        <span>Showing</span>
                        <span style="margin:10px;"><strong>All Scholarships</strong></span>
                    </div>
                </div>
                <div id="filterScholarship">
                    @include('university_v1.university-card',['university' => $university , 'filterGroups' => $filterGroups ])
                </div>
            </div>
        </div>
    </div>
</div>

@include('popups.alert')
@stop
@section('custom_script')
<!-- library -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/wnumb/1.1.0/wNumb.min.js"></script>
<script type="text/javascript" src="{{ asset('assets/js/nouislider.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.3/moment.js"></script>
<script type="text/javascript" src="{{ asset('assets/js/bootstrap-datepicker.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/jquery.mask.min.js') }}"></script>
<!-- end of library -->
<script type="text/javascript" src="{{ asset('assets/js/university_filter.js') }}"></script>

 @stop
