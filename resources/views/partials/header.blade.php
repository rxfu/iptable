<md-whiteframe md-tag="header">
    <md-toolbar>
        <h2 class="md-title" style="flex: 1">{{ config('setting.name', 'Laravel') }}</h2>
        @if (Auth::guest())
            <navigation menu="{{ json_encode([['href'=>route('login'),'name'=>'登录'],['href'=>route('register'),'name'=>'注册']]) }}"></navigation>
        @endif
    </md-toolbar>
</md-whiteframe>