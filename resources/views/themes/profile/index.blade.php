@extends('themes.layouts.master')



@section('main-content')
    <div class="container" id="main-cont">
        <div class="row top-bar justify-content-center p-2" style="color: rgb(170,170,170);">
            <div class="col-auto col-sm-12 col-md-auto col-lg-auto col-xl-auto m-auto text-center p-2" style="font-size: 0.8em;"><span style="color: rgb(130,130,130);"><strong>Featured </strong>:&nbsp;</span><span><img src="assets/img/output-onlinepngtools.png" width="30px"></span><span><strong>Modeling Expo 2019</strong></span></div>
            <div class="col-sm-12 col-md-auto col-lg-auto col-xl-auto m-auto text-center"
                 style="font-size: 0.8em;"><span><img src="assets/img/output-onlinepngtools.png" width="30px"></span><span><strong>Photography By Sean Studios</strong></span></div>
            <div class="col-sm-12 col-md-auto col-lg-auto col-xl-auto m-auto text-center" style="font-size: 0.8em;"><span><img src="assets/img/output-onlinepngtools.png" width="30px"></span><span><strong>Vogue Magazien Award</strong></span></div>
            <div class="col-auto col-sm-12 col-md-auto col-lg-auto col-xl-auto m-auto text-center" style="font-size: 0.8em;"><span><img src="assets/img/output-onlinepngtools.png" width="30px"></span><span><strong>Kyeli's Keto Diet&nbsp;</strong></span></div>
            <div class="col-md-auto col-lg-auto col-xl-auto m-auto text-center" style="font-size: 0.8em;"><span><img src="assets/img/output-onlinepngtools.png" width="30px"></span><span><strong>Modeling Expo&nbsp;</strong></span></div>
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
                                    @foreach($follows as $follow)
                                    <div class="col m-auto">
                                        <div style="width:50px; height:50px;position:relative;">

                                            <img src="{{asset('assets/img/'.$follow->profile->picture)}}" width="50px;" style="border-radius:50%;" height="50px">

                                            <i class="fas fa-circle" style="position: absolute;bottom: 0;right: 0;font-size: 1em;color: rgb(35,177,0);"></i>
                                        </div>
                                    </div>
                                    @endforeach
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
                                        <div style="width:50px; height:50px;position:relative;"><img src="assets/img/IMG_20151014_212349.jpg" width="50px;" style="border-radius:50%;" height="50px"><i class="fas fa-circle" style="position: absolute;bottom: 0;right: 0;font-size: 1em;color: rgb(35,177,0);"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row m-0" style="padding: 5px 5px 5px 5px;font-size:10px;">
                            <div class="col m-auto p-0">
                                <div class="row m-0">
                                    <div class="col m-auto">
                                        <div style="width:50px; height:50px;position:relative;"><img src="assets/img/IMG_20151014_212349.jpg" width="50px;" style="border-radius:50%;" height="50px"><i class="fas fa-circle" style="position: absolute;bottom: 0;right: 0;font-size: 1em;color: rgb(35,177,0);"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row m-0" style="padding: 5px 5px 5px 5px;font-size:10px;">
                            <div class="col m-auto p-0">
                                <div class="row m-0">
                                    <div class="col m-auto">
                                        <div style="width:50px; height:50px;position:relative;"><img src="assets/img/IMG_20151014_212349.jpg" width="50px;" style="border-radius:50%;" height="50px"><i class="fas fa-circle" style="position: absolute;bottom: 0;right: 0;font-size: 1em;color: rgb(35,177,0);"></i></div>
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
                                <div class="col-sm-12 col-md-auto col-lg-auto col-xl-auto m-auto text-center" style="color: rgb(255,255,255);"><span>YouTube :</span><span><a href="{{ $user->profile->youtube }}" style="color: rgb(255,208,42);">&nbsp;{{$user->name}}'s youtube channel</a></span></div>
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
                                            <button class="btn btn-primary btn-follow" type="button" style="color: rgb(6,5,5);"><strong>Follow</strong><i class="fas fa-user m-1"></i></button>
                                        @endif
                                    @endauth

                                </div>
                            </div>
                        </div>
                        <div class="d-flex" style="height:auto;">
                            <div class="profile">
                                <div class="row m-0 p-0">
                                    <div class="col m-0 p-0">
                                        <div style="width: 430px;"><img src="{{asset('assets/img/'.$follow->profile->picture)}}" width="100%"></div>
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
                                <div class="row m-0 p-2 mb-3" style="font-size: 0.8em;color: rgb(174,174,174);">
                                    <div class="col-auto" id="all_photos"><span id="staus" class="tabs" style="border-bottom: 2px solid red; padding-bottom: 9px;color:red;"><span style="font-size: 12px;"><strong>All Photos</strong></span></span>
                                    </div>
                                    <div class="col-auto" id="videos"><span class="tabs">Vidoes</span></div>
                                    <div class="col-auto" id="more"><span class="tabs">More</span></div>
                                    <div class="col-auto" id="spotlight"><span class="tabs">Spotlight</span></div>
                                    <div class="col-auto" id="follo"><span class="tabs">Followers</span></div>
                                </div>
                                <div class="row m-1">
                                    <div class="col"><input type="text" class="search" style="width: 100%;-moz-box-shadow: inset 0 0 10px #000000;-webkit-box-shadow: inset 0 0 10px #000000;box-shadow: inset 0 0 10px #000000;background-color: rgb(239,239,239);padding:10px;border-radius:7px;"
                                                            placeholder="Search by keyword, Tracks, Albums"></div>
                                </div>
                                <div class="row m-1 p-1" style="overflow-y:scroll;height:700px;overflow-x:hidden;" id="all_pics">
                                    <div class="col m-auto" id="photos">
                                        <div><img class="img-box" src="assets/img/IMG_20151014_212349.jpg"><img class="img-box" src="assets/img/Ball2%20(1).png"><img src="assets/img/4.jpg"><img class="img-box" src="assets/img/Ball2%20(1).png"><img class="img-box" src="assets/img/4.jpg">
                                            <img
                                                class="img-box" src="assets/img/Copy%20of%20EDGE%20(1).png"><img class="img-box" src="assets/img/Layer%20355%20(1).png"><img class="img-box" src="assets/img/Ball2%20(1).png"><img class="img-box" src="assets/img/4.jpg"><img class="img-box" src="assets/img/Ball2%20(1).png"><img class="img-box"
                                                                                                                                                                                                                                                                                                                                     src="assets/img/Layer%20349.png"><img class="img-box" src="assets/img/4.jpg"><img class="img-box" src="assets/img/Layer%20348.png"><img class="img-box" src="assets/img/Layer%20213.png"><img class="img-box" src="assets/img/4.jpg">
                                            <img
                                                class="img-box" src="assets/img/4.jpg"><img class="img-box" src="assets/img/Layer%20213.png"><img class="img-box" src="assets/img/4.jpg"><img class="img-box" src="assets/img/4.jpg"><img class="img-box" src="assets/img/4.jpg"><img class="img-box"
                                                                                                                                                                                                                                                                                      src="assets/img/30AE2103-2CDD-4270-979B-A71AFF791F17.png"><img class="img-box" src="assets/img/4.jpg"><img class="img-box" src="assets/img/building-your-first-app-with-vuejs.png"><img class="img-box" src="assets/img/4.jpg"><img class="img-box" src="assets/img/agriculture%20experts.png">
                                            <img
                                                class="img-box" src="assets/img/Layer%20213.png"><img class="img-box" src="assets/img/4.jpg"><img class="img-box" src="assets/img/Saham%20Nadeem.png"><img class="img-box" src="assets/img/4.jpg"><img class="img-box" src="assets/img/Yellow%20Teal%20Brother%20in%20Law%20Birthday%20Card.png"><img class="img-box"
                                                                                                                                                                                                                                                                                                                                                      src="assets/img/4.jpg"><img class="img-box" src="assets/img/16.png"><img class="img-box" src="assets/img/4.jpg"><img class="img-box" src="assets/img/4.jpg"><img class="img-box" src="assets/img/4.jpg">
                                            <img
                                                class="img-box" src="assets/img/4.jpg"><img class="img-box" src="assets/img/1__-vJQqeCmpw-kghDFX8yJw.png"><img class="img-box" src="assets/img/[%20br(eakfast)%20+%20(l)unch%20]%20www.brunch.com.png"><img class="img-box" src="assets/img/4.jpg"><img class="img-box" src="assets/img/attachment_cccf4c2c63f088ee436e00787451178f.png"><img class="img-box"
                                                                                                                                                                                                                                                                                                                                                                                              src="assets/img/dashboard.png"><img class="img-box" src="assets/img/Layer%20349.png"><img class="img-box" src="assets/img/4.jpg"><img class="img-box" src="assets/img/[%20br(eakfast)%20+%20(l)unch%20]%20www.brunch.com.png"><img class="img-box" src="assets/img/IMG-20191205-WA0042_enhanced_colors_supreme.png">
                                            <img
                                                class="img-box" src="assets/img/Sigmoid%20(3).png"><img class="img-box" src="assets/img/4.jpg"><img class="img-box" src="assets/img/your_pic_name.png"><img class="img-box" src="assets/img/4.jpg"><img class="img-box" src="assets/img/4.jpg">
                                            <img
                                                class="img-box" src="assets/img/4.jpg"><img class="img-box" src="assets/img/4.jpg"><img class="img-box" src="assets/img/4.jpg"><img class="img-box" src="assets/img/91de50e59c.png"><img class="img-box" src="assets/img/16.png">
                                            <img
                                                class="img-box" src="assets/img/4.jpg"><img class="img-box" src="assets/img/BeFunky-collage.png"><img class="img-box" src="assets/img/4.jpg"><img class="img-box" src="assets/img/IMG_20151014_212349.jpg"><img class="img-box" src="assets/img/1_QIg6vEjZmT5YMVKU5Rxr2A.png">
                                            <img
                                                class="img-box" src="assets/img/4.jpg"><img class="img-box" src="assets/img/repository-open-graph-template.png"><img class="img-box" src="assets/img/4.jpg"><img class="img-box" src="assets/img/WCwPwRanMPy2.png"><img class="img-box" src="assets/img/4.jpg">
                                            <img
                                                class="img-box" src="assets/img/4.jpg"><img class="img-box" src="assets/img/4.jpg"><img class="img-box" src="assets/img/4.jpg"><img class="img-box" src="assets/img/4.jpg"></div>
                                    </div>
                                </div>
                                <div class="row m-1 p-1" style="display: none;overflow-y:scroll;height:700px;overflow-x:hidden;" id="all_vids">
                                    <div class="col m-auto" id="photos">
                                        <div><img class="img-box" src="assets/img/IMG_20151014_212349.jpg"><img class="img-box" src="assets/img/Ball2%20(1).png"><img src="assets/img/4.jpg"><img class="img-box" src="assets/img/Ball2%20(1).png"><img class="img-box" src="assets/img/4.jpg">
                                            <img
                                                class="img-box" src="assets/img/Copy%20of%20EDGE%20(1).png"><img class="img-box" src="assets/img/Layer%20355%20(1).png"><img class="img-box" src="assets/img/Ball2%20(1).png"><img class="img-box" src="assets/img/4.jpg"><img class="img-box" src="assets/img/Ball2%20(1).png"><img class="img-box"
                                                                                                                                                                                                                                                                                                                                     src="assets/img/Layer%20349.png"><img class="img-box" src="assets/img/4.jpg"><img class="img-box" src="assets/img/Layer%20348.png"><img class="img-box" src="assets/img/Layer%20213.png"><img class="img-box" src="assets/img/4.jpg">
                                            <img
                                                class="img-box" src="assets/img/4.jpg"><img class="img-box" src="assets/img/Layer%20213.png"><img class="img-box" src="assets/img/4.jpg"><img class="img-box" src="assets/img/4.jpg"><img class="img-box" src="assets/img/4.jpg"><img class="img-box"
                                                                                                                                                                                                                                                                                      src="assets/img/30AE2103-2CDD-4270-979B-A71AFF791F17.png"><img class="img-box" src="assets/img/4.jpg"><img class="img-box" src="assets/img/building-your-first-app-with-vuejs.png"><img class="img-box" src="assets/img/4.jpg"><img class="img-box" src="assets/img/agriculture%20experts.png">
                                            <img
                                                class="img-box" src="assets/img/Layer%20213.png"><img class="img-box" src="assets/img/4.jpg"><img class="img-box" src="assets/img/Saham%20Nadeem.png"><img class="img-box" src="assets/img/4.jpg"><img class="img-box" src="assets/img/Yellow%20Teal%20Brother%20in%20Law%20Birthday%20Card.png"><img class="img-box"
                                                                                                                                                                                                                                                                                                                                                      src="assets/img/4.jpg"><img class="img-box" src="assets/img/16.png"><img class="img-box" src="assets/img/4.jpg"><img class="img-box" src="assets/img/4.jpg"><img class="img-box" src="assets/img/4.jpg">
                                            <img
                                                class="img-box" src="assets/img/4.jpg"><img class="img-box" src="assets/img/1__-vJQqeCmpw-kghDFX8yJw.png"><img class="img-box" src="assets/img/[%20br(eakfast)%20+%20(l)unch%20]%20www.brunch.com.png"><img class="img-box" src="assets/img/4.jpg"><img class="img-box" src="assets/img/attachment_cccf4c2c63f088ee436e00787451178f.png"><img class="img-box"
                                                                                                                                                                                                                                                                                                                                                                                              src="assets/img/dashboard.png"><img class="img-box" src="assets/img/Layer%20349.png"><img class="img-box" src="assets/img/4.jpg"><img class="img-box" src="assets/img/[%20br(eakfast)%20+%20(l)unch%20]%20www.brunch.com.png"><img class="img-box" src="assets/img/IMG-20191205-WA0042_enhanced_colors_supreme.png">
                                            <img
                                                class="img-box" src="assets/img/Sigmoid%20(3).png"><img class="img-box" src="assets/img/4.jpg"><img class="img-box" src="assets/img/your_pic_name.png"><img class="img-box" src="assets/img/4.jpg"><img class="img-box" src="assets/img/4.jpg">
                                            <img
                                                class="img-box" src="assets/img/4.jpg"><img class="img-box" src="assets/img/4.jpg"><img class="img-box" src="assets/img/4.jpg"><img class="img-box" src="assets/img/91de50e59c.png"><img class="img-box" src="assets/img/16.png">
                                            <img
                                                class="img-box" src="assets/img/4.jpg"><img class="img-box" src="assets/img/BeFunky-collage.png"><img class="img-box" src="assets/img/4.jpg"><img class="img-box" src="assets/img/IMG_20151014_212349.jpg"><img class="img-box" src="assets/img/1_QIg6vEjZmT5YMVKU5Rxr2A.png">
                                            <img
                                                class="img-box" src="assets/img/4.jpg"><img class="img-box" src="assets/img/repository-open-graph-template.png"><img class="img-box" src="assets/img/4.jpg"><img class="img-box" src="assets/img/WCwPwRanMPy2.png"><img class="img-box" src="assets/img/4.jpg">
                                            <img
                                                class="img-box" src="assets/img/4.jpg"><img class="img-box" src="assets/img/4.jpg"><img class="img-box" src="assets/img/4.jpg"><img class="img-box" src="assets/img/4.jpg"></div>
                                    </div>
                                </div>
                                <div class="row m-1 p-1" style="display: none;overflow-y:scroll;height:700px;overflow-x:hidden;" id="all_more">
                                    <div class="col m-auto" id="photos">
                                        <div><img class="img-box" src="assets/img/IMG_20151014_212349.jpg"><img class="img-box" src="assets/img/Ball2%20(1).png"><img src="assets/img/4.jpg"><img class="img-box" src="assets/img/Ball2%20(1).png"><img class="img-box" src="assets/img/4.jpg">
                                            <img
                                                class="img-box" src="assets/img/Copy%20of%20EDGE%20(1).png"><img class="img-box" src="assets/img/Layer%20355%20(1).png"><img class="img-box" src="assets/img/Ball2%20(1).png"><img class="img-box" src="assets/img/4.jpg"><img class="img-box" src="assets/img/Ball2%20(1).png"><img class="img-box"
                                                                                                                                                                                                                                                                                                                                     src="assets/img/Layer%20349.png"><img class="img-box" src="assets/img/4.jpg"><img class="img-box" src="assets/img/Layer%20348.png"><img class="img-box" src="assets/img/Layer%20213.png"><img class="img-box" src="assets/img/4.jpg">
                                            <img
                                                class="img-box" src="assets/img/4.jpg"><img class="img-box" src="assets/img/Layer%20213.png"><img class="img-box" src="assets/img/4.jpg"><img class="img-box" src="assets/img/4.jpg"><img class="img-box" src="assets/img/4.jpg"><img class="img-box"
                                                                                                                                                                                                                                                                                      src="assets/img/30AE2103-2CDD-4270-979B-A71AFF791F17.png"><img class="img-box" src="assets/img/4.jpg"><img class="img-box" src="assets/img/building-your-first-app-with-vuejs.png"><img class="img-box" src="assets/img/4.jpg"><img class="img-box" src="assets/img/agriculture%20experts.png">
                                            <img
                                                class="img-box" src="assets/img/Layer%20213.png"><img class="img-box" src="assets/img/4.jpg"><img class="img-box" src="assets/img/Saham%20Nadeem.png"><img class="img-box" src="assets/img/4.jpg"><img class="img-box" src="assets/img/Yellow%20Teal%20Brother%20in%20Law%20Birthday%20Card.png"><img class="img-box"
                                                                                                                                                                                                                                                                                                                                                      src="assets/img/4.jpg"><img class="img-box" src="assets/img/16.png"><img class="img-box" src="assets/img/4.jpg"><img class="img-box" src="assets/img/4.jpg"><img class="img-box" src="assets/img/4.jpg">
                                            <img
                                                class="img-box" src="assets/img/4.jpg"><img class="img-box" src="assets/img/1__-vJQqeCmpw-kghDFX8yJw.png"><img class="img-box" src="assets/img/[%20br(eakfast)%20+%20(l)unch%20]%20www.brunch.com.png"><img class="img-box" src="assets/img/4.jpg"><img class="img-box" src="assets/img/attachment_cccf4c2c63f088ee436e00787451178f.png"><img class="img-box"
                                                                                                                                                                                                                                                                                                                                                                                              src="assets/img/dashboard.png"><img class="img-box" src="assets/img/Layer%20349.png"><img class="img-box" src="assets/img/4.jpg"><img class="img-box" src="assets/img/[%20br(eakfast)%20+%20(l)unch%20]%20www.brunch.com.png"><img class="img-box" src="assets/img/IMG-20191205-WA0042_enhanced_colors_supreme.png">
                                            <img
                                                class="img-box" src="assets/img/Sigmoid%20(3).png"><img class="img-box" src="assets/img/4.jpg"><img class="img-box" src="assets/img/your_pic_name.png"><img class="img-box" src="assets/img/4.jpg"><img class="img-box" src="assets/img/4.jpg">
                                            <img
                                                class="img-box" src="assets/img/4.jpg"><img class="img-box" src="assets/img/4.jpg"><img class="img-box" src="assets/img/4.jpg"><img class="img-box" src="assets/img/91de50e59c.png"><img class="img-box" src="assets/img/16.png">
                                            <img
                                                class="img-box" src="assets/img/4.jpg"><img class="img-box" src="assets/img/BeFunky-collage.png"><img class="img-box" src="assets/img/4.jpg"><img class="img-box" src="assets/img/IMG_20151014_212349.jpg"><img class="img-box" src="assets/img/1_QIg6vEjZmT5YMVKU5Rxr2A.png">
                                            <img
                                                class="img-box" src="assets/img/4.jpg"><img class="img-box" src="assets/img/repository-open-graph-template.png"><img class="img-box" src="assets/img/4.jpg"><img class="img-box" src="assets/img/WCwPwRanMPy2.png"><img class="img-box" src="assets/img/4.jpg">
                                            <img
                                                class="img-box" src="assets/img/4.jpg"><img class="img-box" src="assets/img/4.jpg"><img class="img-box" src="assets/img/4.jpg"><img class="img-box" src="assets/img/4.jpg"></div>
                                    </div>
                                </div>
                                <div class="row m-1 p-1" style="display: none;overflow-y:scroll;height:700px;overflow-x:hidden;" id="all_spot">
                                    <div class="col m-auto" id="photos">
                                        <div><img class="img-box" src="assets/img/IMG_20151014_212349.jpg"><img class="img-box" src="assets/img/Ball2%20(1).png"><img src="assets/img/4.jpg"><img class="img-box" src="assets/img/Ball2%20(1).png"><img class="img-box" src="assets/img/4.jpg">
                                            <img
                                                class="img-box" src="assets/img/Copy%20of%20EDGE%20(1).png"><img class="img-box" src="assets/img/Layer%20355%20(1).png"><img class="img-box" src="assets/img/Ball2%20(1).png"><img class="img-box" src="assets/img/4.jpg"><img class="img-box" src="assets/img/Ball2%20(1).png"><img class="img-box"
                                                                                                                                                                                                                                                                                                                                     src="assets/img/Layer%20349.png"><img class="img-box" src="assets/img/4.jpg"><img class="img-box" src="assets/img/Layer%20348.png"><img class="img-box" src="assets/img/Layer%20213.png"><img class="img-box" src="assets/img/4.jpg">
                                            <img
                                                class="img-box" src="assets/img/4.jpg"><img class="img-box" src="assets/img/Layer%20213.png"><img class="img-box" src="assets/img/4.jpg"><img class="img-box" src="assets/img/4.jpg"><img class="img-box" src="assets/img/4.jpg"><img class="img-box"
                                                                                                                                                                                                                                                                                      src="assets/img/30AE2103-2CDD-4270-979B-A71AFF791F17.png"><img class="img-box" src="assets/img/4.jpg"><img class="img-box" src="assets/img/building-your-first-app-with-vuejs.png"><img class="img-box" src="assets/img/4.jpg"><img class="img-box" src="assets/img/agriculture%20experts.png">
                                            <img
                                                class="img-box" src="assets/img/Layer%20213.png"><img class="img-box" src="assets/img/4.jpg"><img class="img-box" src="assets/img/Saham%20Nadeem.png"><img class="img-box" src="assets/img/4.jpg"><img class="img-box" src="assets/img/Yellow%20Teal%20Brother%20in%20Law%20Birthday%20Card.png"><img class="img-box"
                                                                                                                                                                                                                                                                                                                                                      src="assets/img/4.jpg"><img class="img-box" src="assets/img/16.png"><img class="img-box" src="assets/img/4.jpg"><img class="img-box" src="assets/img/4.jpg"><img class="img-box" src="assets/img/4.jpg">
                                            <img
                                                class="img-box" src="assets/img/4.jpg"><img class="img-box" src="assets/img/1__-vJQqeCmpw-kghDFX8yJw.png"><img class="img-box" src="assets/img/[%20br(eakfast)%20+%20(l)unch%20]%20www.brunch.com.png"><img class="img-box" src="assets/img/4.jpg"><img class="img-box" src="assets/img/attachment_cccf4c2c63f088ee436e00787451178f.png"><img class="img-box"
                                                                                                                                                                                                                                                                                                                                                                                              src="assets/img/dashboard.png"><img class="img-box" src="assets/img/Layer%20349.png"><img class="img-box" src="assets/img/4.jpg"><img class="img-box" src="assets/img/[%20br(eakfast)%20+%20(l)unch%20]%20www.brunch.com.png"><img class="img-box" src="assets/img/IMG-20191205-WA0042_enhanced_colors_supreme.png">
                                            <img
                                                class="img-box" src="assets/img/Sigmoid%20(3).png"><img class="img-box" src="assets/img/4.jpg"><img class="img-box" src="assets/img/your_pic_name.png"><img class="img-box" src="assets/img/4.jpg"><img class="img-box" src="assets/img/4.jpg">
                                            <img
                                                class="img-box" src="assets/img/4.jpg"><img class="img-box" src="assets/img/4.jpg"><img class="img-box" src="assets/img/4.jpg"><img class="img-box" src="assets/img/91de50e59c.png"><img class="img-box" src="assets/img/16.png">
                                            <img
                                                class="img-box" src="assets/img/4.jpg"><img class="img-box" src="assets/img/BeFunky-collage.png"><img class="img-box" src="assets/img/4.jpg"><img class="img-box" src="assets/img/IMG_20151014_212349.jpg"><img class="img-box" src="assets/img/1_QIg6vEjZmT5YMVKU5Rxr2A.png">
                                            <img
                                                class="img-box" src="assets/img/4.jpg"><img class="img-box" src="assets/img/repository-open-graph-template.png"><img class="img-box" src="assets/img/4.jpg"><img class="img-box" src="assets/img/WCwPwRanMPy2.png"><img class="img-box" src="assets/img/4.jpg">
                                            <img
                                                class="img-box" src="assets/img/4.jpg"><img class="img-box" src="assets/img/4.jpg"><img class="img-box" src="assets/img/4.jpg"><img class="img-box" src="assets/img/4.jpg"></div>
                                    </div>
                                </div>
                                <div class="row m-1 p-1" style="display: none;overflow-y:scroll;height:700px;overflow-x:hidden;" id="all_follo">
                                    <div class="col m-auto" id="photos">
                                        <div><img class="img-box" src="assets/img/IMG_20151014_212349.jpg"><img class="img-box" src="assets/img/Ball2%20(1).png"><img src="assets/img/4.jpg"><img class="img-box" src="assets/img/Ball2%20(1).png"><img class="img-box" src="assets/img/4.jpg">
                                            <img
                                                class="img-box" src="assets/img/Copy%20of%20EDGE%20(1).png"><img class="img-box" src="assets/img/Layer%20355%20(1).png"><img class="img-box" src="assets/img/Ball2%20(1).png"><img class="img-box" src="assets/img/4.jpg"><img class="img-box" src="assets/img/Ball2%20(1).png"><img class="img-box"
                                                                                                                                                                                                                                                                                                                                     src="assets/img/Layer%20349.png"><img class="img-box" src="assets/img/4.jpg"><img class="img-box" src="assets/img/Layer%20348.png"><img class="img-box" src="assets/img/Layer%20213.png"><img class="img-box" src="assets/img/4.jpg">
                                            <img
                                                class="img-box" src="assets/img/4.jpg"><img class="img-box" src="assets/img/Layer%20213.png"><img class="img-box" src="assets/img/4.jpg"><img class="img-box" src="assets/img/4.jpg"><img class="img-box" src="assets/img/4.jpg"><img class="img-box"
                                                                                                                                                                                                                                                                                      src="assets/img/30AE2103-2CDD-4270-979B-A71AFF791F17.png"><img class="img-box" src="assets/img/4.jpg"><img class="img-box" src="assets/img/building-your-first-app-with-vuejs.png"><img class="img-box" src="assets/img/4.jpg"><img class="img-box" src="assets/img/agriculture%20experts.png">
                                            <img
                                                class="img-box" src="assets/img/Layer%20213.png"><img class="img-box" src="assets/img/4.jpg"><img class="img-box" src="assets/img/Saham%20Nadeem.png"><img class="img-box" src="assets/img/4.jpg"><img class="img-box" src="assets/img/Yellow%20Teal%20Brother%20in%20Law%20Birthday%20Card.png"><img class="img-box"
                                                                                                                                                                                                                                                                                                                                                      src="assets/img/4.jpg"><img class="img-box" src="assets/img/16.png"><img class="img-box" src="assets/img/4.jpg"><img class="img-box" src="assets/img/4.jpg"><img class="img-box" src="assets/img/4.jpg">
                                            <img
                                                class="img-box" src="assets/img/4.jpg"><img class="img-box" src="assets/img/1__-vJQqeCmpw-kghDFX8yJw.png"><img class="img-box" src="assets/img/[%20br(eakfast)%20+%20(l)unch%20]%20www.brunch.com.png"><img class="img-box" src="assets/img/4.jpg"><img class="img-box" src="assets/img/attachment_cccf4c2c63f088ee436e00787451178f.png"><img class="img-box"
                                                                                                                                                                                                                                                                                                                                                                                              src="assets/img/dashboard.png"><img class="img-box" src="assets/img/Layer%20349.png"><img class="img-box" src="assets/img/4.jpg"><img class="img-box" src="assets/img/[%20br(eakfast)%20+%20(l)unch%20]%20www.brunch.com.png"><img class="img-box" src="assets/img/IMG-20191205-WA0042_enhanced_colors_supreme.png">
                                            <img
                                                class="img-box" src="assets/img/Sigmoid%20(3).png"><img class="img-box" src="assets/img/4.jpg"><img class="img-box" src="assets/img/your_pic_name.png"><img class="img-box" src="assets/img/4.jpg"><img class="img-box" src="assets/img/4.jpg">
                                            <img
                                                class="img-box" src="assets/img/4.jpg"><img class="img-box" src="assets/img/4.jpg"><img class="img-box" src="assets/img/4.jpg"><img class="img-box" src="assets/img/91de50e59c.png"><img class="img-box" src="assets/img/16.png">
                                            <img
                                                class="img-box" src="assets/img/4.jpg"><img class="img-box" src="assets/img/BeFunky-collage.png"><img class="img-box" src="assets/img/4.jpg"><img class="img-box" src="assets/img/IMG_20151014_212349.jpg"><img class="img-box" src="assets/img/1_QIg6vEjZmT5YMVKU5Rxr2A.png">
                                            <img
                                                class="img-box" src="assets/img/4.jpg"><img class="img-box" src="assets/img/repository-open-graph-template.png"><img class="img-box" src="assets/img/4.jpg"><img class="img-box" src="assets/img/WCwPwRanMPy2.png"><img class="img-box" src="assets/img/4.jpg">
                                            <img
                                                class="img-box" src="assets/img/4.jpg"><img class="img-box" src="assets/img/4.jpg"><img class="img-box" src="assets/img/4.jpg"><img class="img-box" src="assets/img/4.jpg"></div>
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
    <script>
        $('#all_photos').click(function () {

        });
        $('#videos').click(function () {

        });
        $('#more').click(function () {

        });
        $('#spotlight').click(function () {

        });
        $('#follo').click(function () {

        });
    </script>
@endpush
