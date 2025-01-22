@extends('admin.layout.app')
@section('title', 'Cadastrar consultor')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Cadastrar</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Cadastrar</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    @if ($errors->any())
                        <div class="alert alert-danger text-center" style="margin: 10px;">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li style="text-align: center">{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if (session('msg'))
                        <div class="row text-center">
                            <div class="col-md-12" \>
                                <div class="alert alert-success text-center" style="color: white; margin: 10px;">
                                    {{ session('msg') }}
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                cadastro de consultor
                            </h3>
                            {{-- <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-info"></i>
                                </button>
                            </div> --}}
                        </div>
                        <form action="{{ route('consultores.store') }}" method="post">
                            <!-- /.card-header -->
                            <div class="card-body">
                                @csrf
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Nome</label>
                                            <input type="text" class="form-control" name="name" placeholder="Nome">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">E-mail</label>
                                            <input type="text" class="form-control" name="email" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Grupo</label>
                                            <input type="text" class="form-control" name="grupo" placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Telefone</label>
                                            <input type="text" class="form-control" name="phone" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Cidade</label>
                                            <input type="text" class="form-control" name="city" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Estado</label>
                                            <input type="text" class="form-control" name="uf" placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Especialidade</label>
                                            <input type="text" class="form-control" name="especialodade" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Código</label>
                                            <input type="text" class="form-control" name="cod" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Observação</label>
                                            <input type="text" class="form-control" name="obs" placeholder="">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-default">Cadastrar</button>
                            </div>
                        </form>
                        <!-- /.card-body -->

                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
