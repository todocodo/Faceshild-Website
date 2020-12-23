<nav id="sidebar-wrapper" class="activeNav navscroll">
    <ul class="sidebar-nav">
        <li id="hover-only"><a href="/">{{ __('Welcome') }}</a></li>
        <li id="hover-only"><a href="{{ route('about') }}">{{ __('About') }}</a></li>
        <li id="hover-only"><a href="{{ route('certificate') }}">{{ __('Documents') }}</a></li>
        <li id="hover-only"><a href="{{ route('demos') }}">{{ __('Videos') }}</a></li>
        <li>
            <div id="dropdown-caret-custom" class="dropright d-md-down-none">
                <a class="d-flex" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" style="text-decoration: none; outline: none;">
                    {{ __('Custom') }}
                    <span id="caret-custom" class="caret right"></span>
                </a>
                <div id="dropdown-custom" class="dropdown-menu dropdown-main-menu">
                    <a class="dropdown-item font-weight-light" href="{{ route('custom') }}">{{ __('Colors') }}</a>
                    <a class="dropdown-item font-weight-light" href="{{ route('packing') }}">{{ __('Packing') }}</a>
                </div>
            </div>
        </li>
        <li id="hover-only"><a href="{{ route('contacts') }}">{{ __('Contacts') }}</a></li>
        <li>
            @if(count(config('app.languages')) > 1)
            <div id="dropdown-caret-language" class="dropright d-md-down-none">
                <a class="d-flex" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" style="text-decoration: none; outline: none;">
                    {{ __('Language')}}
                    <span id="caret-language" class="caret right"></span>
                </a>
                <div id="dropdown-language" class="dropdown-menu dropdown-main-menu">
                    @foreach(config('app.languages') as $langLocale => $langName)
                    <a class="dropdown-item font-weight-light" href="{{ url()->current() }}?change_language={{ $langLocale }}">{{ strtoupper($langLocale) }} {{ $langName }}</a>
                    @endforeach
                </div>
            </div>
            @endif
        </li>
    </ul>
</nav>