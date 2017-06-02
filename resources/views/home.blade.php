@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <p style="color: green">{{ Session::get('status') }}</p>
                    Bienvenido                    

                    <!-- Modal -->
                    <div id="modal-pregunta" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Modal Header</h4>
                            </div>
                            <div class="modal-body">
                                @include('questions_form')
                            </div>                        
                        </div>

                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@section('footer_scripts')
    <script>
        var showQuestionModal = true;
    </script>
@show
@endsection
