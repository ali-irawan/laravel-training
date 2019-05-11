<nav class="nav">
            <a class="nav-link {{ (Route::currentRouteName()=='home') ? 'active' : ''  }}" href="{!! route('home') !!}">Home</a>
            <a class="nav-link {{ (Route::currentRouteName()=='about') ? 'active' : ''  }}" href="{!! route('about') !!}">About</a>
            <a class="nav-link {{ (Route::currentRouteName()=='contact') ? 'active' : ''  }}" href="{!! route('contact') !!}">Contact Us</a>
</nav>

