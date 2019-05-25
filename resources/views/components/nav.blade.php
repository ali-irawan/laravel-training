<nav class="nav">
            <a class="nav-link {{ (Route::currentRouteName()=='home') ? 'active' : ''  }}" href="{!! route('home') !!}">@lang('messages.home')</a>
            <a class="nav-link {{ (Route::currentRouteName()=='about') ? 'active' : ''  }}" href="{!! route('about') !!}">{{ __('messages.about') }}</a>
            <a class="nav-link {{ (Route::currentRouteName()=='contact') ? 'active' : ''  }}" href="{!! route('contact') !!}">{{ __('messages.contact_us') }}</a>
</nav>

