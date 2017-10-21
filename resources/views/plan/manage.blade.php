@extends('templates.default')
@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-header" data-background-color="green">
            <h4 class="title"> <i class="material-icons">assignment</i> {{ $title }}</h4>
        </div>
        <div class="card-content table-responsive">
            <table class="table">
                <thead class="text-warning">
                    <th>#</th>
                    <th>Title</th>
                    <th>Status</th>
                    <th>Start</th>
                    <th>End</th>
                    <th>#</th>
                </thead>
                <tbody>
                    @foreach($plans as $plan)
                    <tr >
                        <td>{{ $loop->index + 1 }}</td>
                        <td><i class="material-icons">library_books</i>
                        @if($plan->status == 0)
                            <span style = 'color:#7d7d7d;'>{{ $plan->title }} ({{ $plan->total_todos }})
                        @else
                            <span><a href="/plan/{{ $plan->id }}/todo">{{ $plan->title }}</a> ({{ $plan->total_todos }})
                        @endif</span> 
                        <div class="pull-right">
                        <i class="fa fa-pencil" aria-hidden="true"></i>
                        <i class="fa fa-trash" aria-hidden="true"></i>
                        </div></td>
                        <td>@if($plan->status == 1)
                            Published
                        @else
                            Draft
                        @endif</td>
                        <td>{{ $plan->start }}</td>
                        <td>{{ $plan->end }}</td>
                        <td> <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="0"
                                aria-valuemin="0" aria-valuemax="100" style="width:70%">
                                    0%
                                </div>
                            </div> 
                        </td>
                    </tr>       
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection