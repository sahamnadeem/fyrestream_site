<div class="topline" style="position:fixed;width:100%;top:0;z-index:999;"></div>
<nav class="navbar navbar-light navbar-expand-md navbar-fixed-top navigation-clean-button" style="position:fixed;top:10px;width:100%;z-index:999">
    <div class="container">
        <div id="brand"><a class="navbar-brand" href="{{ route('welcome') }}"> <img id="brand-img" src="assets/img/1%20White%20Trim_%20Red%20Fill_%20White%20Stream.png" width="30"></a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button></div>
        <div
            class="collapse navbar-collapse" id="navcol-1">
            <ul class="nav navbar-nav nav-right ml-auto">
                <li class="nav-item text-center" role="presentation"><img src="assets/img/videos.png" width="30"><a class="nav-link active text-center" href="index.html" style="color: #ffffff;">VIDEOS</a></li>
                <li class="nav-item text-center" role="presentation"><img src="assets/img/members.png" width="30"><a class="nav-link active text-center" href="index.html" style="color: #ffffff;">MEMBERS</a></li>
                <li class="nav-item text-center" role="presentation"><img src="assets/img/news.png" width="30"><a class="nav-link active text-center" href="index.html" style="color: #ffffff;">NEWS</a></li>
                <li class="nav-item text-center" role="presentation"><img src="assets/img/classified.png" width="30"><a class="nav-link active text-center" href="index.html" style="color: #ffffff;">CLASSIFIED</a></li>
                <li class="nav-item text-center" role="presentation"><img src="assets/img/invite.png" width="30"><a class="nav-link active text-center" href="index.html" style="color: #ffffff;">INVITE</a></li>
                <li class="nav-item text-center" role="presentation"><img src="assets/img/more.png" width="30"><a class="nav-link active text-center" href="index.html" style="color: #ffffff;">MORE</a></li>
                <li class="nav-item text-center" role="presentation"><img src="assets/img/uoload.png" width="50"><a class="nav-link active text-center" href="index.html" style="color: #ffffff;">UPLOAD</a></li>
                <li class="nav-item text-center" role="presentation"><img src="assets/img/search.png" width="30"><a class="nav-link active text-center" href="index.html" style="color: #ffffff;">SEARCH</a></li>
                <li class="nav-item text-center" role="presentation">

                    @guest
                    <div id="actions" class="text-center">
                        <p class="lead text-monospace text-break make-button border-red"><a class="normal-link" href="{{route('welcome')}}"> SIGN IN</a></p>
                        @if (Route::has('register'))
                                                <p class="lead text-monospace text-break make-button"><a class="normal-link" href="{{route('user-register')}}">JOIN FREE</a></p>
                    </div>
                    @endif
                    @else

                    <div class="nav-item dropdown"><a class="dropdown-toggle active" data-toggle="dropdown" aria-expanded="false" id="user-img-link" href="#"><img id="user-img" src="assets/img/IMG_20151014_212349.jpg"></a>
                        <div class="dropdown-menu" role="menu">
                            <a></a>
                            <a class="dropdown-item active" role=""  href="{{route('profile')}}" style="color:black !important;"> <strong>{{ Auth::user()->name }}</strong></a>
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
