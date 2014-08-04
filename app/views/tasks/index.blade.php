@extends('layouts.master')

@section('content')

<div class="container col-md-6 col-md-offset-3" id="todo">
    <h1><span class="fa fa-list "></span>&nbsp; All Tasks</h1>

    <ul class = "list-group">
        @foreach ($todos as $todo)
            <li class = "list-group-item">
                    <!-- <span class="fa fa-check-square-o"></span> -->
                {{ link_to("", '&nbsp;', ["class" => "fa fa-square-o check", "foo" => "$todo->id"]) }}
                {{ $todo->title }}
                <!-- <button type="button" class="btn btn-lg btn-danger" data-toggle="popover" title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?">Click to toggle popover</button> -->   

            </li>
        @endforeach
    </ul>
</div>

@stop

@section('footer')

<script>
    $('.check').on('click',function(e){
        alert($(this).data());
    });
</script>

@stop