@extends('layouts.admin')

@section('title', 'Manage Content')

@section('search')
@endsection

@section('content')
    <form action={{ route('mgt/uploadAudit')}} method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="file" id="files" name="audits" value="Upload Audits" multiple/>
        <div id="selectedFiles"></div>
        <input type="submit" value=" Save " />
    </form>
    <script>
        var selDiv = "";

        document.addEventListener("DOMContentLoaded", init, false);

        function init() {
            document.querySelector('#files').addEventListener('change', handleFileSelect, false);
            selDiv = document.querySelector("#selectedFiles");
        }

        function handleFileSelect(e) {

            if(!e.target.files) return;

            selDiv.innerHTML = "";

            var files = e.target.files;
            for(var i=0; i<files.length; i++) {
                var f = files[i];

                selDiv.innerHTML += f.name + "<br/>";

            }

        }
    </script>
@endsection
