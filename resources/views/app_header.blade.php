<header class="header">
    <div class="container">
        @if(url('/'))
            <div class="header__logo" onclick="location.reload();">
                @include('app_logo')
            </div>
        @else
            <a href="{{ url('/') }}" class="header__logo">
                @include('app_logo')
            </a>
        @endif
        <button type="button" id="button-menu" class="button-menu">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>
</header>