@extends('templates.default')
@section('content')
<div class="row">
<div class="col-md-12">
    <div class="card">
        <div class="card-header" data-background-color="green">
            <h4 class="title"> <i class="material-icons">note_add</i> {{ $title }} - {{ $plan->title }}</h4>
            <p class="category">{{ $plan->desc }}</p>
        </div>
        <div class="card-content table-responsive">
            <form action="/plan/{{ $plan_id }}/todo" method="post">
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
</div>
<div class="row">
@if(!empty($todos))
    <div class="col-lg-4 col-md-12">
        <div class="card">
            <div class="card-header" data-background-color="purple">
                <h4 class="title">Todo</h4>
                <p class="category">New employees on 15th September, 2016</p>
            </div>
            <div class="card-content table-responsive">
                <table class="table">
                    <tbody>
                        @foreach($todos as $todo)
                        @if($todo['status'] == '')
                        <tr>
                            <td>🎯</td>
                            <td><a href="/plan/{{ $todo['id'] }}/todo/move_{{ str_slug($todo['do']) }}_to_progress"  rel="tooltip" title="Move to Progress">{{ $todo['do'] }}</a></td>
                            <td class="td-actions text-right">
                            <div class="pull-right">
                                <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-simple btn-xs">
                                    <i class="material-icons">edit</i>
                                </button>
                                <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                    <i class="material-icons">close</i>
                                </button>
                            </div>
                            </td>
                        </tr>        
                        @endif                    
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div><div class="col-lg-4 col-md-12">
        <div class="card">
            <div class="card-header" data-background-color="orange">
                <h4 class="title">Progress</h4>
                <p class="category">New employees on 15th September, 2016</p>
            </div>
            <div class="card-content table-responsive">
                <table class="table table-hover">
                    <tbody>
                        @foreach($todos as $todo)
                        @if($todo['status'] == 'progress')
                        <tr>
                            <td>🎯</td>
                            <td><a class="text-warning" href="/plan/{{ $todo['plan_id'] }}/todo/move_{{ str_slug($todo['do']) }}_to_progress"  rel="tooltip" title="Move to Progress">{{ $todo['do'] }}</a></td>
                            <td class="td-actions text-right">
                            <div class="pull-right">
                                <button type="button" rel="tooltip" title="Mark as Completed" class="btn btn-primary btn-simple btn-xs">
                                    <i class="material-icons">done</i>
                                </button>
                            </div>
                            </td>
                        </tr>       
                        @endif                    
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div><div class="col-lg-4 col-md-12">
        <div class="card">
            <div class="card-header" data-background-color="green">
                <h4 class="title">Completed</h4>
                <p class="category">New employees on 15th September, 2016</p>
            </div>
            <div class="card-content table-responsive">
                <table class="table table-hover">
                    <tbody>
                        <tr>
                            <td colspan="4"> </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endif
</div>
@endsection