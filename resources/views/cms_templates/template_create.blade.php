@extends('layouts.app', [
                'page_title'   => "Create Template$",
                'page_header' => "Create Template$"
                ])

@section('content')
    Creating Template

    <form action="template_created"></form>
    {{ $name }}

@stop

