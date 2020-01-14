@extends('themes.layouts.master')

@push('after-style')
    <link rel="stylesheet" href="https://unpkg.com/smartphoto@1.1.0/css/smartphoto.min.css">
@endpush

@section('main-content')
    <div class="container" id="main-cont">
        <div class="row top-bar justify-content-center p-2" style="color: rgb(170,170,170);">
            <div class="col-auto col-sm-12 col-md-auto col-lg-auto col-xl-auto m-auto text-center p-2" style="font-size: 0.8em;"><span style="color: rgb(130,130,130);"><strong>Featured </strong>:&nbsp;</span><span><img src="{{ asset('assets/img/output-onlinepngtools.png') }}" width="30px"></span><span><strong>Modeling Expo 2019</strong></span></div>
            <div class="col-sm-12 col-md-auto col-lg-auto col-xl-auto m-auto text-center"
                 style="font-size: 0.8em;"><span><img src="{{ asset('assets/img/output-onlinepngtools.png') }}" width="30px"></span><span><strong>Photography By Sean Studios</strong></span></div>
            <div class="col-sm-12 col-md-auto col-lg-auto col-xl-auto m-auto text-center" style="font-size: 0.8em;"><span><img src="{{ asset('assets/img/output-onlinepngtools.png') }}" width="30px"></span><span><strong>Vogue Magazien Award</strong></span></div>
            <div class="col-auto col-sm-12 col-md-auto col-lg-auto col-xl-auto m-auto text-center" style="font-size: 0.8em;"><span><img src="{{ asset('assets/img/output-onlinepngtools.png') }}" width="30px"></span><span><strong>Kyeli's Keto Diet&nbsp;</strong></span></div>
            <div class="col-md-auto col-lg-auto col-xl-auto m-auto text-center" style="font-size: 0.8em;"><span><img src="{{ asset('assets/img/output-onlinepngtools.png') }}" width="30px"></span><span><strong>Modeling Expo&nbsp;</strong></span></div>
        </div>
        <div class="row mt-2">
            <div class="col m-0">
                <div class="shaddow card-fyre d-flex" style="border-radius:10px;over-flow:hidden;">
                    <div class="side-user">
                        <div class="row m-0">
                            <div class="col p-2"><span class="m-2" style="border: 1px solid grey;padding: 5px 5px 5px 5px;background-image: linear-gradient(#ff2727,#c50202);border-radius: 5px;font-size: 0.5em;"><i class="fas fa-share-alt" style="font-size: 1.4em;color: rgb(255,255,255);"></i></span></div>
                        </div>
                        <div class="row m-0" style="padding: 5px 5px 5px 5px;background-image: linear-gradient(#ff2727,#c50202);font-size: 0.5em;border:1px solid #c50202">
                            <div class="col m-0 p-0"><span class="m-2" style="font-size: 1.5em;"><i class="fas fa-star m-1" style="font-size: 1.4em;color: rgb(255,172,48);"></i><span class="m-1" style="color: rgb(255,255,255);"><strong>TOP</strong></span></span>
                            </div>
                        </div>
                        <div class="row m-0" style="padding: 5px 5px 5px 5px;font-size:10px;">
                            <div class="col m-auto p-0">
                                <div class="row m-0">
{{--                                    @if(count($followss)>0)--}}
                                        @foreach($followss as $follow)
                                            <div class="col m-auto">
                                                <div style="width:50px; height:50px;position:relative;margin-bottom: 5px">
                                                  <img src="{{asset('assets/img/'.$follow->profile->picture)}}" width="50px;" style="border-radius:50%;" height="50px">
                                                    <i class="fas fa-circle" style="position: absolute;bottom: 0;right: 0;font-size: 1em;color: rgb(35,177,0);"></i>
                                                </div>
                                            </div>
                                        @endforeach
{{--                                     @endif--}}
                                </div>
                            </div>
                        </div>
{{--                        <div class="row m-0" style="padding: 5px 5px 5px 5px;font-size:10px;">--}}
{{--                            <div class="col m-auto p-0">--}}
{{--                                <div class="row m-0">--}}
{{--                                    <div class="col m-auto">--}}
{{--                                        <div style="width:50px; height:50px;position:relative;">

<i class="fas fa-circle" style="position: absolute;bottom: 0;right: 0;font-size: 1em;color: rgb(35,177,0);"></i></div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="row m-0" style="padding: 5px 5px 5px 5px;font-size:10px;">--}}
{{--                            <div class="col m-auto p-0">--}}
{{--                                <div class="row m-0">--}}
{{--                                    <div class="col m-auto">--}}
{{--                                        <div style="width:50px; height:50px;position:relative;"><img src="assets/img/IMG_20151014_212349.jpg" width="50px;" style="border-radius:50%;" height="50px"><i class="fas fa-circle" style="position: absolute;bottom: 0;right: 0;font-size: 1em;color: rgb(35,177,0);"></i></div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="row m-0" style="padding: 5px 5px 5px 5px;font-size:10px;">--}}
{{--                            <div class="col m-auto p-0">--}}
{{--                                <div class="row m-0">--}}
{{--                                    <div class="col m-auto">--}}
{{--                                        <div style="width:50px; height:50px;position:relative;"><img src="assets/img/IMG_20151014_212349.jpg" width="50px;" style="border-radius:50%;" height="50px"><i class="fas fa-circle" style="position: absolute;bottom: 0;right: 0;font-size: 1em;color: rgb(35,177,0);"></i></div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="row m-0" style="padding: 5px 5px 5px 5px;font-size:10px;">--}}
{{--                            <div class="col m-auto p-0">--}}
{{--                                <div class="row m-0">--}}
{{--                                    <div class="col m-auto">--}}
{{--                                        <div style="width:50px; height:50px;position:relative;"><img src="assets/img/IMG_20151014_212349.jpg" width="50px;" style="border-radius:50%;" height="50px"><i class="fas fa-circle" style="position: absolute;bottom: 0;right: 0;font-size: 1em;color: rgb(35,177,0);"></i></div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="row m-0" style="padding: 5px 5px 5px 5px;font-size:10px;">--}}
{{--                            <div class="col m-auto p-0">--}}
{{--                                <div class="row m-0">--}}
{{--                                    <div class="col m-auto">--}}
{{--                                        <div style="width:50px; height:50px;position:relative;"><img src="assets/img/IMG_20151014_212349.jpg" width="50px;" style="border-radius:50%;" height="50px"><i class="fas fa-circle" style="position: absolute;bottom: 0;right: 0;font-size: 1em;color: rgb(35,177,0);"></i></div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="row m-0" style="padding: 5px 5px 5px 5px;font-size:10px;">--}}
{{--                            <div class="col m-auto p-0">--}}
{{--                                <div class="row m-0">--}}
{{--                                    <div class="col m-auto">--}}
{{--                                        <div style="width:50px; height:50px;position:relative;"><img src="assets/img/IMG_20151014_212349.jpg" width="50px;" style="border-radius:50%;" height="50px"><i class="fas fa-circle" style="position: absolute;bottom: 0;right: 0;font-size: 1em;color: rgb(35,177,0);"></i></div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                        <div class="row m-0 justify-content-center">
                            <div class="col ml-auto"><a href="#" style="font-size: 0.8em;color: rgb(255,255,255);">View More...</a></div>
                        </div>
                        <div class="row m-0" style="padding: 5px 5px 5px 5px;background-image: linear-gradient(#ff2727,#c50202);font-size: 0.5em;border:1px solid #c50202">
                            <div class="col m-0 p-0"><span class="m-2" style="font-size: 1.5em;"><i class="fas fa-globe-africa m-1" style="font-size: 1.4em;color: rgb(255,172,48);"></i><span class="m-1" style="color: rgb(255,255,255);"><strong>WEB</strong></span></span>
                            </div>
                        </div>
                        <div class="row m-0" style="padding: 5px 5px 5px 5px;font-size:10px;">
                            <div class="col m-auto p-0">
                                <div class="row m-0">
                                    <div class="col m-auto">
                                        <div style="width:50px; height:50px;position:relative;"><img src=" {{ asset('assets/img/IMG_20151014_212349.jpg') }}" width="50px;" style="border-radius:50%;" height="50px"><i class="fas fa-circle" style="position: absolute;bottom: 0;right: 0;font-size: 1em;color: rgb(35,177,0);"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row m-0" style="padding: 5px 5px 5px 5px;font-size:10px;">
                            <div class="col m-auto p-0">
                                <div class="row m-0">
                                    <div class="col m-auto">
                                        <div style="width:50px; height:50px;position:relative;"><img src="{{ asset('assets/img/IMG_20151014_212349.jpg') }}" width="50px;" style="border-radius:50%;" height="50px"><i class="fas fa-circle" style="position: absolute;bottom: 0;right: 0;font-size: 1em;color: rgb(35,177,0);"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row m-0" style="padding: 5px 5px 5px 5px;font-size:10px;">
                            <div class="col m-auto p-0">
                                <div class="row m-0">
                                    <div class="col m-auto">
                                        <div style="width:50px; height:50px;position:relative;"><img src="{{ asset('assets/img/IMG_20151014_212349.jpg') }}" width="50px;" style="border-radius:50%;" height="50px"><i class="fas fa-circle" style="position: absolute;bottom: 0;right: 0;font-size: 1em;color: rgb(35,177,0);"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row m-0 justify-content-center">
                            <div class="col ml-auto"><a href="#" style="font-size: 0.8em;color: rgb(255,255,255);">View More...</a></div>
                        </div>
                    </div>

                    <div class="body-member">
                        <div class="member-body-head">
                            <div class="row m-0">
                                <div class="col-auto col-sm-12 col-md-auto col-lg-auto col-xl-auto m-auto" style="color: rgb(255,255,255);">
                                    <h3>{{$user->name}}</h3>
                                </div>
                                <div class="col-sm-12 col-md-auto col-lg-auto col-xl-auto m-auto text-center" style="color: rgb(255,255,255);"><span>YouTube :</span><span><a href="{{ $user->profile->youtube }}" target="{{ $user->profile->youtube }}" style="color: rgb(255,208,42);">&nbsp;{{$user->name}}'s youtube channel</a></span></div>
                                <div class="col-auto col-sm-12 col-md-auto col-lg-auto col-xl-auto m-auto text-center" style="color: rgb(255,255,255);"><span>{{ $views }} Views</span></div>
                                <div class="col-sm-12 col-md-auto col-lg-auto col-xl-auto m-auto text-center" style="color: rgb(255,255,255);">
                                    <p class="m-0" style="font-size: 0.8em;color: rgb(255,224,63);">Rate Me!!</p>
                                    <div class="rating" style="color: rgb(255,216,12);"><span><i class="fa fa-star"></i></span><span><i class="fa fa-star"></i></span><span><i class="fa fa-star"></i></span><span><i class="fa fa-star"></i></span><span><i class="fa fa-star"></i></span></div>
                                    <p class="m-0"
                                       style="font-size: 0.8em;">{{ $rating }} Stars</p>
                                </div>
                                <div class="col-2 col-sm-12 col-md-auto col-lg-auto col-xl-auto m-auto text-center" style="color: rgb(255,255,255);">
                                    @auth
                                        @if($user->id != auth()->id())
                                            @if($ext)
                                                <button class="btn btn-primary btn-follow" type="button" id="follow" style="color: rgb(6,5,5); background: white!important;" value="{{$user->id}}"><strong>UnFollow</strong><i class="fas fa-user m-1"></i></button>
                                            @else
                                                <button class="btn btn-primary btn-follow" type="button" id="follow" style="color: rgb(6,5,5);" value="{{$user->id}}"><strong>Follow</strong><i class="fas fa-user m-1"></i></button>
                                            @endif
                                        @endif
                                    @endauth

                                </div>
                            </div>
                        </div>
                        <div class="d-flex" style="height:auto;">
                            <div class="profile">
                                <div class="row m-0 p-0">
                                    <div class="col m-0 p-0">
                                        <div style="width: 430px;"><img src=" {{asset('assets/img/'.$user->profile->picture)}}" width="100%"></div>
                                        <div class="overley-prof-text mb-3">
                                            <div class="row m-0 p-2" style="font-size: 0.8em;">
                                                <div class="col-auto"><span id="staus" class="tabs" style="border-bottom: 2px solid red; padding-bottom: 9px;color:red;"><span style="font-size: 12px;color:white;"><strong>All Photos</strong></span></span>
                                                </div>
                                                <div class="col-auto"><span class="tabs" style="color:white;">Most Popular</span></div>
                                                <div class="col-auto"><span class="tabs" style="color:white;">Tracked</span></div>
                                                <div class="col-auto"><span class="tabs" style="color:white;">Albums</span></div>
                                            </div>
                                        </div>
                                        <div class="overflow-prof"></div>
                                    </div>
                                </div>
                                <div class="row m-0 p-2">
                                    <div class="col">
                                        <div class="row">
                                            <div class="col">
                                                <h5 style="font-style: italic;color: rgb(137,137,137);">About</h5>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <p style="word-wrap: break-word;color: rgb(171,171,171);">{{ substr($user->profile->about_us,0,300) }}...</p><p style="color:blue;cursor: pointer;">view more</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <h5 style="font-style: italic;color: rgb(136,136,136);">General Rules</h5>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <p style="word-wrap: break-word;color: rgb(171,171,171);">{{ substr($user->profile->general_roles,0,200) }}...</p><p style="color:blue;cursor: pointer;">view more</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="galary">
                                <div class="row m-0 p-2 mb-3 mt-2" style="font-size: 0.8em;color: rgb(174,174,174);">
                                    <div class="col-auto" id="all_photos"><span id="staus" class="tabs" style="">All Photos</span></div>
                                    <div class="col-auto" id="videos"><span class="tabs">Vidoes</span></div>
                                    <div class="col-auto" id="more"><span class="tabs">More</span></div>
                                    <div class="col-auto" id="spotlight"><span class="tabs">Spotlight</span></div>
                                    <div class="col-auto" id="follo"><span class="tabs">Followers</span></div>
                                </div>
                                <div class="row m-2">
                                    <div class="col"><input type="text" class="search" style="width: 100%; border:none; font-size: 0.8em; padding:10px;background: white; box-shadow: 1px 2px 16px 1px #989898;"
                                                            placeholder="Search by keyword, Tracks, Albums"></div>
                                </div>
                                <br/>
                                <div class="row m-1 p-1" style="overflow-y:scroll;height:700px;overflow-x:hidden;" id="all_pics">
                                    <div class="col m-auto" id="photos">
                                        <div>
                                            @for($i=0; $i<=25; $i++)
                                                <a href="{{ asset('assets/img/IMG_20151014_212349.jpg') }}" class="js-smartPhoto" data-caption="bear" data-id="bear" data-group="animal"><img class="img-box" src="{{ asset('assets/img/IMG_20151014_212349.jpg') }}"></a>
                                            @endfor
                                        </div>
                                </div>
                                </div>
                                <div class="row m-1 p-1" style="display: none;overflow-y:scroll;height:700px;overflow-x:hidden;" id="all_vids">
                                    <div class="col m-auto" id="photos">
                                        <div>
                                            <a class="js-smartPhoto" href="{{ asset('assets/img/IMG_20151014_212349.jpg') }}" data-caption="bear" data-id="bear" data-group="animal"><img class="img-box" src="{{ asset('assets/img/IMG_20151014_212349.jpg') }}"></a>
                                            <img class="img-box" src="{{ asset('assets/img/1__-vJQqeCmpw-kghDFX8yJw.png') }}">
                                            <img class="img-box" src="{{ asset('assets/img/30AE2103-2CDD-4270-979B-A71AFF791F17.png') }}">
                                            <img class="img-box" src="{{ asset('assets/img/Ball2.png') }}">
                                            <img class="img-box" src="{{ asset('assets/img/building-your-first-app-with-vuejs.png') }}">
                                            <img class="img-box" src="{{ asset('assets/img/IMG-20191205-WA0042_enhanced_colors_supreme.png') }}">
                                            <img class="img-box" src="{{ asset('assets/img/repository-open-graph-template.png') }}">
                                            <img class="img-box" src="{{ asset('assets/img/repository-open-graph-template.png') }}">
                                            <img class="img-box" src="{{ asset('assets/img/repository-open-graph-template.png') }}">
                                            <img class="img-box" src="{{ asset('assets/img/repository-open-graph-template.png') }}">
                                            <img class="img-box" src="{{ asset('assets/img/IMG-20191205-WA0042_enhanced_colors_supreme.png') }}">
                                            <img class="img-box" src="{{ asset('assets/img/Ball2.png') }}">
                                            <img class="img-box" src="{{ asset('assets/img/repository-open-graph-template.png') }}">
                                            <img class="img-box" src="{{ asset('assets/img/repository-open-graph-template.png') }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row m-1 p-1" style="display: none;overflow-y:scroll;height:700px;overflow-x:hidden;" id="all_more">
                                    <div class="col m-auto" id="photos">
                                        <div>
                                            @for($i=0; $i<=25; $i++)
                                                <img class="img-box" src="{{ asset('assets/img/IMG_20151014_212349.jpg') }}">
                                            @endfor
                                        </div>
                                    </div>
                                </div>
                                <div class="row m-1 p-1" style="display: none;overflow-y:scroll;height:700px;overflow-x:hidden;" id="all_spot">
                                    <div class="col m-auto" id="photos">
                                        <div>
                                            @for($i=0; $i<=25; $i++)
                                                <img class="img-box" src="{{ asset('assets/img/IMG_20151014_212349.jpg') }}">
                                            @endfor
                                        </div>
                                    </div>
                                </div>
                                <div class="row m-1 p-1" style="display: none;overflow-y:scroll;height:700px;overflow-x:hidden;" id="all_follo">
                                    <div class="col m-auto" id="photos">
                                        <div>
                                            @for($i=0; $i<=25; $i++)
                                                <img class="img-box" src="{{ asset('assets/img/IMG_20151014_212349.jpg') }}">
                                            @endfor
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br/>
    <br/>
    <br/>


@endsection

@push('after-scripts')
    <script src="https://unpkg.com/smartphoto@1.1.0/js/smartphoto.js"></script>
    <script>
        $(document).ready(function () {
            $('#all_photos').click();
            // const SmartPhoto = require('smartphoto');
        });
        window.addEventListener('DOMContentLoaded',function(){
            new SmartPhoto(".js-smartPhoto");
        });

        $('#all_photos').click(function () {
            document.getElementById('all_pics').style.display='block';
            document.getElementById('all_vids').style.display='none';
            document.getElementById('all_more').style.display='none';
            document.getElementById('all_spot').style.display='none';
            document.getElementById('all_follo').style.display='none';

            document.getElementById('all_photos').style='border-bottom: 2px solid red; padding-bottom: 9px;color:red;font-size: 14px; font-weight: bold;';
            document.getElementById('videos').style='';
            document.getElementById('more').style='';
            document.getElementById('spotlight').style='';
            document.getElementById('follo').style='';
        });
        $('#videos').click(function () {
            document.getElementById('all_pics').style.display='none';
            document.getElementById('all_vids').style.display='block';
            document.getElementById('all_more').style.display='none';
            document.getElementById('all_spot').style.display='none';
            document.getElementById('all_follo').style.display='none';

            document.getElementById('all_photos').style='';
            document.getElementById('videos').style='border-bottom: 2px solid red; padding-bottom: 9px;color:red;font-size: 14px; font-weight: bold;';
            document.getElementById('more').style='';
            document.getElementById('spotlight').style='';
            document.getElementById('follo').style='';
        });
        $('#more').click(function () {
            document.getElementById('all_pics').style.display='none';
            document.getElementById('all_vids').style.display='none';
            document.getElementById('all_more').style.display='block';
            document.getElementById('all_spot').style.display='none';
            document.getElementById('all_follo').style.display='none';

            document.getElementById('all_photos').style='';
            document.getElementById('videos').style='';
            document.getElementById('more').style='border-bottom: 2px solid red; padding-bottom: 9px;color:red;font-size: 14px; font-weight: bold;';
            document.getElementById('spotlight').style='';
            document.getElementById('follo').style='';
        });
        $('#spotlight').click(function () {
            document.getElementById('all_pics').style.display='none';
            document.getElementById('all_vids').style.display='none';
            document.getElementById('all_more').style.display='none';
            document.getElementById('all_spot').style.display='block';
            document.getElementById('all_follo').style.display='none';

            document.getElementById('all_photos').style='';
            document.getElementById('videos').style='';
            document.getElementById('more').style='';
            document.getElementById('spotlight').style='border-bottom: 2px solid red; padding-bottom: 9px;color:red;font-size: 14px; font-weight: bold;';
            document.getElementById('follo').style='';
        });
        $('#follo').click(function () {
            document.getElementById('all_pics').style.display='none';
            document.getElementById('all_vids').style.display='none';
            document.getElementById('all_more').style.display='none';
            document.getElementById('all_spot').style.display='none';
            document.getElementById('all_follo').style.display='block';

            document.getElementById('all_photos').style='';
            document.getElementById('videos').style='';
            document.getElementById('more').style='';
            document.getElementById('spotlight').style='';
            document.getElementById('follo').style='border-bottom: 2px solid red; padding-bottom: 9px;color:red;font-size: 14px; font-weight: bold;';
        });

        $('#follow').click(function () {
            $('#follow').css('background', '#ffffff');


            var follow = $(this).attr('value');
            var user= '{{ $user->id }}';
            $.ajax
            ({
                url: '{{ route('user_follow') }}',
                type: "POST",
                data: {follower_id:follow,user_id:user,_token:'{{ csrf_token() }}'},
                success: function(data)
                {
                    if (data.flag===1){
                        document.getElementById('follow').innerHTML = '<strong>UnFollow</strong><i class="fas fa-user m-1"></i>'
                        document.getElementById('follow').style.background = 'white';
                    }else{
                        document.getElementById('follow').innerHTML = '<strong>Follow</strong><i class="fas fa-user m-1"></i>'
                        document.getElementById('follow').style.backgroundImage = 'linear-gradient(#ffd809,#b8a817)';
                    }
                }
            });
        });


        // $("button").click(function(){
        //     var color = clicked ? 'red' : 'blue';
        //     $(this).css('background-color', color);
        //     clicked = !clicked;
        // });

    </script>
@endpush




