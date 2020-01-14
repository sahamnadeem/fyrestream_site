<div class="topline" style="position:fixed;width:100%;top:0;z-index:19;"></div>
<nav class="navbar navbar-light navbar-expand-md navbar-fixed-top navigation-clean-button" style="position:fixed;top:6px;width:100%;z-index:19">
    <div class="container">
        <div id="brand" style="margin-right: 2em;"><i class="fa fa-bars"></i></div>
        <div id="brand"><a class="navbar-brand" href="{{ route('welcome') }}"> <img id="brand-img" src="{{asset('assets/img/icons-ver-02---Cop White.png')}}" width="10px"></a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button></div>

        <div id="brand" style="margin-right: 1em;">
            <div class="box">
                <div class="vid">
                    <img src="https://i.stack.imgur.com/vQGnW.png" height="100%" style="object-fit: cover; object-position: center;">
                    <div class="top-over">
                    </div>
                    <div class="top-play">
                        <i class="fa fa-play m-1"></i>
                    </div>
                </div>
                <div class="txt">
                    <p class="font-weight-bold m-0 p-0"><i class="fa fa-newspaper" style="color: red; margin-right: 4px;"></i>Fyre News</p>
                    <p class="m-0 p-0" style="font-size: 0.8em">Watch Live BBC new London Tonight at 11pm</p>
                </div>
            </div>
        </div>
        <div
            class="collapse navbar-collapse m-auto" id="navcol-1">
            <ul class="nav navbar-nav nav-right ml-auto">
                <li class="nav-item text-center mt-auto" role="presentation"><img src="{{ asset('assets/img/videos.png') }}" width="30"><a class="nav-link active text-center" href="index.html" style="color: #ffffff;">VIDEOS</a></li>
                <li class="nav-item text-center mt-auto" role="presentation"><img src="{{ asset('assets/img/members.png') }}" width="30"><a class="nav-link active text-center" href="index.html" style="color: #ffffff;">MEMBERS</a></li>
                <li class="nav-item text-center mt-auto" role="presentation"><img src="{{ asset('assets/img/Untitled-2.png') }}" width="35"><a class="nav-link active text-center" href="index.html" style="color: #ffffff;">FRIENDS</a></li>
                <li class="nav-item text-center mt-auto" role="presentation"><img src="{{ asset('assets/img/classified.png') }}" width="30"><a class="nav-link active text-center" href="index.html" style="color: #ffffff;">CLASSIFIEDS</a></li>
                <li class="nav-item text-center mt-auto" role="presentation"><img src="{{ asset('assets/img/invite.png') }}" width="30"><a class="nav-link active text-center" href="index.html" style="color: #ffffff;">INVITE</a></li>
                <li class="nav-item text-center mt-auto" role="presentation"><img src="{{ asset('assets/img/more.png') }}" width="30"><a class="nav-link active text-center" href="index.html" style="color: #ffffff;">MORE</a></li>
                <li class="nav-item text-center mt-auto " role="presentation"><img class="change" src="{{ asset('assets/img/uoload1.png') }}" width="50"><a class="nav-link active text-center " href="index.html" style="color: #ffffff;">UPLOAD</a></li>
                <li class="nav-item text-center mt-auto" role="presentation"><img src="{{ asset('assets/img/search.png') }}" width="30"><a class="nav-link active text-center" href="index.html" style="color: #ffffff;">SEARCH</a></li>
                <li class="nav-item text-center" role="presentation">

                    @guest
                    <div id="actions" class="text-center">
                        <p class="lead text-monospace text-break make-button border-red"><a class="normal-link" href="{{route('welcome')}}"> SIGN IN</a></p>
                        @if (Route::has('register'))
                                                <p class="lead text-monospace text-break make-button"><a class="normal-link" href="{{route('user-register')}}">JOIN FREE</a></p>
                    </div>
                    @endif
                    @else

                    <div class="nav-item dropdown"><a class="dropdown-toggle active" data-toggle="dropdown" aria-expanded="false" id="user-img-link" href="#" style="color: white; font-size: 20px;"><img id="user-img" src="{{asset('assets/img/'.auth()->user()->profile->picture)}}"></a>
                        <div class="dropdown-menu" role="menu">
                            <a></a>
                            <a class="dropdown-item active" role=""  href="{{route('profile')}}" style="color:black !important;"> <strong>{{ Auth::user()->name }}</strong></a>
                            <a class="dropdown-item active" role=""  href="{{route('settings')}}" style="color:black !important;"> <strong>Settings</strong></a>
                            <a class="dropdown-item" role="presentation" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </div>
                   @endguest
                </li>
            </ul>
        </div>
    </div>
</nav>
