@if(!empty($university['result']))
    @foreach ($university['result'] as $universities)
    <div class="head-section">
        <div class="simple-box padding-b15 margin-b20">
            <div class="row mx-2">
                <div class="col-md-12">
                <h3 class="card-heading scholarship-card-title"><a href="{{ route('scholarships-category', $universities->vanityUrl) }}">{{ $universities->name }}</a></h3>
                </div>
            </div>
            <div class="s_card_border">
                <div class="row card-row mx-2">
                        @php    
                        $filter_group = $filterGroups->chunk(3,true);
                        @endphp
                        @foreach($filter_group as $groups)
                            <div class="row">
                                @foreach($groups as $group)
                            <div class="col-md-4 bottom-margin scholarship_card">
                                <span class="calendar icon"></span>
                                <p class="card-title">{{$group->name}}</p>
                                <p class="card-subtitle">
                                    @if(!empty($universities->{$group->slug}) && $universities->{$group->slug} && !is_array($universities->{$group->slug}))
                                        {{ $universities->{$group->slug} }}
                                    @endif
                                    @if(!empty($universities->{$group->slug}) && $universities->{$group->slug} && is_array($universities->{$group->slug}))
                                        
                                        @foreach($universities->{$group->slug} as $val)
                                            {{ $val }}
                                        @endforeach
                                        
                                    @endif
                                    </p>
                            </div>
                            @endforeach
                        </div>
                        @endforeach
                </div>
            </div>
            <div class="row mx-2">
                <div class="col-md-12 text-center"><a class="open-enquiryModel" data-toggle="modal" data-target="#enquiryModel" data-lead-source="scholarship" data-lead-source-id="5"><button class="btn btn-round grad-cta-button">Request info</button></a></div>
            </div>
        </div>
        </div>
    @endforeach
    <div style="margin-top:3rem;margin-bottom:0rem">
    {!! Ads::adPushUnit('BTF') !!}
    </div>
    <br>
    <div class="col-md-12">
        <div class="text-center" style="margin-bottom: 20px;">
        @php  $offset = 10; @endphp
        <button class="btn orange-gradient" style="text-transform:none"  id="showMore" onclick="getFilterData('more',{{ $offset }})">Show More Scholarships</button>
        </div>
    </div>
@else
<div class="simple-box">
<div class="row title-row">
<div class="col-md-10 pd-zero">
<h4 class="scholarship-title">No result found.</h4>
</div>
</div>
</div>
@endif