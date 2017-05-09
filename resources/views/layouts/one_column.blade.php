@extends('layouts.default')

@section('page')
	<md-layout>
		<md-layout></md-layout>
		<md-layout md-flex-xsmall="100" md-flex-medium="33" md-align="center">
			@yield('content')
		</md-layout>
		<md-layout></md-layout>
	</md-layout>
@stop