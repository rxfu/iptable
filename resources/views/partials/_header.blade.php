<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-targe=".navbar-responsive-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand">{{ config('setting.name', 'Laravel') }}</a>
        </div>
        <div class="navbar-collapse ollapse navbar-responsive-collapse">
            <ul class="nav navbar-nav navbar-right">
                @if (Auth::guest())
                    @foreach ($items as $item)
                        <li>
                            <a href="{{ $item['url'] }}" title="{{ $item['name'] }}">
                                <i class="material-icons">{{ $item['icon'] }}</i>
                            </a>
                        </li>
                    @endforeach
                @endif
            </ul>
        </div>
    </div>
</nav>
