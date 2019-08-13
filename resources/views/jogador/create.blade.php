@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    @if (Session::has('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                        </div>
                    @endif
                    <form method="POST" action="{{ route('jogador.store') }}">
                        @csrf
                        <div class="form-group">
                            <label for="">Nome</label>
                            <div class="">
                                <input type="text" name="nome" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Posição</label>
                            <div class="">
                                <input type="text" name="posicao" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">RG</label>
                            <div class="">
                                <input type="text" name="rg" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Data de Nascimento</label>
                            <div class="">
                                <input type="text" name="birth" id="birth" class="form-control" required>
                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit">Cadastrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    // $(document).ready(function () {
    //     $('#birth').datetimepicker();
    // })
</script>
@endsection