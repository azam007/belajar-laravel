@extends('templates.default')
@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-header" data-background-color="green">
            <h4 class="title"> <i class="material-icons">note_add</i> {{ $title }}</h4>
        </div>
        <div class="card-content table-responsive">
            <form action="/plan/{{ $plan_id }}/todo/add" method="post">
            {{ csrf_field() }}
                @component('templates.components.form.input', [
                    'label' => 'todo',
                    'type' => 'text'
                ])
                    Todo
                @endcomponent
                <input type="hidden" name="plan" value="{{ $plan_id }}"/>
            <button type="submit" class="btn btn-warning"><i class="material-icons" style="font-size:30px">add_box</i></button>
            </form>
        </div>
    </div>
</div>
@endsection