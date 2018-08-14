@extends('layouts.admin')

@section('title', 'Manage Content')

@section('search')
@endsection

@section('content')
    <form action={{ route('mgt/uploadAudit')}} method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="file" id="files" name="file[]" value="Upload Audits" multiple/>
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

                selDiv.innerHTML +=
                '<div class="row">' +
                    '<div class="col-md-1">' +
                        f.name +
                    '</div>' +
                    '<div class="col-md-1">' +
                        ' <input tabindex="' + i + '" value="Remove" class="removeButton" name="RowRemove" type="button"> <br/>' +
                    '</div>' +
                '</div>';

            }

        }
    </script>
    <style>
        .removeButton {
            background: none;
            color: inherit;
            border: none;
            padding: 0;
            font: inherit;
            cursor: pointer;
            outline: inherit;
            padding-left: 10px;
            background-image: url({{ asset('/images/delete.png') }});
            background-position: 0px -70px;
            color: #000;
        }
    </style>
@endsection
