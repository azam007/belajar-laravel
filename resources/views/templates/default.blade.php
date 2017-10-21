@include('templates.parts._head')
    <div class="wrapper">
        @include('templates.parts._sidebar')
        <div class="main-panel">
            @include('templates.parts._nav')
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        @section('content')
                            
                        @show
                    </div>
                </div>
            </div>
            @include('templates.parts._footer')
        </div>
    </div>
@include('templates.parts._script')