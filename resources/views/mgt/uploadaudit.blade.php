@extends('layouts.admin')

@section('title', 'Manage Content')

@section('search')
@endsection

@section('content')
    <form action={{ route('mgt/uploadAudit')}} method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        Book title:
        <br />
        <input type="text" name="title" />
        <br /><br />
        Logo:
        <br />
        <input type="file" name="audit" />
        <br /><br />
        <input type="submit" value=" Save " />
    </form>
@endsection
