<nav id="navTop">
    <a href="/" class="logo"><strong>JAM London 2015</strong></a>

    <ul>
        <li{!! $bodyClass == 'schedule' ? ' class="active"' : '' !!}><a href="/speakers">Speakers</a></li>
        <li{!! $bodyClass == 'sponsors' ? ' class="active"' : '' !!}><a href="/sponsors">Sponsors</a></li>
        {{--<li{!! $bodyClass == 'getting-here' ? ' class="active"' : '' !!}><a href="/getting-here">Getting Here</a></li>--}}
        <li{!! $bodyClass == 'resources' ? ' class="active"' : '' !!}><a href="/resources">Resources</a></li>
    </ul>

    <a class="button black" href="/speakers">Speakers</a>

    <div class="toggle-nav">
        <div class="close">
            <i></i><i></i>
        </div>

        <i></i>
        <i></i>
        <i></i>
    </div>
</nav>