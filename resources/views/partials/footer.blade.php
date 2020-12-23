<footer class="container py-5">
    <div class="row">
        <div class="col-6 col-md">
            <div class="d-flex">
                <img src="../photo/new_logo_nonbackground.png" alt="logo" style="height: 30px; border-right: 1px solid #636b6f" class="pr-3">
                <h5 class="pl-3"><a class="text-dark" href="{{ url('/') }}">{{ __('Faceshield') }}</a></h5>
            </div>
            <small class="d-block pt-3 text-muted">&copy; 2020</small>
        </div>
        <div class="col-6 col-md">
            <h5><a class="text-dark" href="{{ route('about') }}">{{ __('About') }}</a></h5>
            <ul class="list-unstyled text-small">
                <a class="text-muted" href="{{ route('about') }}">
                    <li>{{ __('Box Content') }}</li>
                </a>
                <a class="text-muted" href="{{ url('about#size') }}">
                    <li>{{ __('Size') }}</li>
                </a>
                <a class="text-muted" href="{{ url('about#masks') }}">
                    <li>{{ __('Masks & Glasses') }}</li>
                </a>
                <a class="text-muted" href="{{ url('about#disinfection') }}">
                    <li>{{ __('Disinfection') }}</li>
                </a>
            </ul>
        </div>
        <div class="col-6 col-md">
            <h5><a class="text-dark" href="{{ route('certificate') }}">{{ __('Documents') }}</a></h5>
            <ul class="list-unstyled text-small">
                <a class="text-muted" href="{{ route('certificate') }}">
                    <li>{{ __('Certificate') }}</li>
                </a>
                <a class="text-muted" href="{{ url('certificate#tech-data') }}">
                    <li>{{ __('Technical Data') }}</li>
                </a>
                <a class="text-muted" href="{{ url('certificate#instructions') }}">
                    <li>{{ __('Instructions') }}</li>
                </a>
            </ul>
        </div>
        <div class="col-6 col-md">
            <h5><a class="text-dark" href="{{ route('demos') }}">{{ __('Videos') }}</a></h5>
            <ul class="list-unstyled text-small">
                <a class="text-muted" href="{{ route('demos') }}">
                    <li>{{ __('Replace the window') }}</li>
                </a>
                <a class="text-muted" href="{{ url('demos#adjust-video') }}">
                    <li>{{ __('Adjust the frame') }}</li>
                </a>
                <a class="text-muted" href="{{ url('demos#whole-video') }}">
                    <li>{{ __('Our Video') }}</li>
                </a>
            </ul>
        </div>
        <div class="col-6 col-md">
            <h5><a class="text-dark" href="{{ route('custom') }}">{{ __('Custom') }}</a></h5>
            <ul class="list-unstyled text-small">
                <a class="text-muted" href="{{ url('custom#color-change') }}">
                    <li>{{ __('Change color') }}</li>
                </a>
                <a class="text-muted" href="{{ url('custom#branding') }}">
                    <li>{{ __('Branding') }}</li>
                </a>
                <a class="text-muted" href="{{ url('custom#package') }}">
                    <li>{{ __('Different package') }}</li>
                </a>
                <a class="text-muted" href="{{ route('packing') }}">
                    <li>{{ __('SuperPack & MegaPack') }}</li>
                </a>
            </ul>
        </div>
        <div class="col-6 col-md">
            <h5><a class="text-dark" href="{{ route('contacts') }}">{{ __('Contacts') }}</a></h5>
            <ul class="list-unstyled text-small">
                <a class="text-muted" href="{{ url('contacts#email-contact') }}">
                    <li>{{ __('Email:') }} shield@transgraph.eu</li>
                </a>
                <a class="text-muted" href="{{ url('contacts#email-contact') }}">
                    <li>{{ __('Phone:') }} +359899904690</li>
                </a>
            </ul>
        </div>
    </div>
</footer>