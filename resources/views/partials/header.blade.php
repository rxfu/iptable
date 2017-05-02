<md-whiteframe md-tag="header">
    <md-toolbar>
        <h2 class="md-title" style="flex: 1">{{ config('setting.name', 'Laravel') }}</h2>
        @if (Auth::guest())
            <navigation menu="{{ $menu }}"></navigation>
        @endif
    </md-toolbar>
</md-whiteframe>