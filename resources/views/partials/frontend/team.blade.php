<div class="row align-items-center justify-content-center">
    @foreach($team as $key => $member)
    <div id="teamM_{{++$key}}" class="team-outer-box">
        <!-- <a href="#{{$key}}"> -->
            <div class="faq-item team-member ">
                <div class="vsrk-left-img">
                    <img src="{{asset($member->profileImg)}}" alt="vsrk Service excellence" >
                </div>
                <div class="vsrk-right-text">
                    <h4>{{$member->name}}</h4>
                    <span>{{$member->designation}}</span>
                    <div class="spacer"></div>
                    <p>{!! $member->descritption  !!}</p>
                </div>
            </div>
        <!-- </a> -->
        </div>
    @endforeach
</div>