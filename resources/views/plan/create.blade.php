@extends('templates.default')
@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-header" data-background-color="green">
            <h4 class="title"> <i class="material-icons">note_add</i> {{ $title }}</h4>
        </div>
        <div class="card-content table-responsive">
            <form method="post" action="{{ route('store.plan') }}">
                {{ csrf_field() }}
                @component('templates.components.form.input', [
                    'label' => 'title',
                    'type' => 'text'
                ])
                    Title *
                @endcomponent
                @component('templates.components.form.input', [
                    'label' => 'desc',
                    'type' => 'text'
                ])
                    Description
                @endcomponent
                @component('templates.components.form.select', [
                    'label' => 'status',
                    'options' => [
                        '1' => 'Published',
                        '0' => 'Draft'
                    ]
                ])
                    Status
                @endcomponent

                <div class="form-group">
                    <label for="start">Start</label>
                    <input class="form-control" id="date" name="start" placeholder="@php
                    echo date('Y-m-d')
                    @endphp" type="text"/>
                </div>
                <div class="form-group">
                    <label for="end">End</label>
                    <input class="form-control" id="date" name="end" placeholder="@php
                    echo date('Y-m-d')
                    @endphp" type="text"/>
                </div>
            <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection