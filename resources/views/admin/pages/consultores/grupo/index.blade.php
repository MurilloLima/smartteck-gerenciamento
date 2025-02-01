@extends('admin.layout.app')
@section('title', 'Consultores')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Grupos</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Grupos</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                Lista de grupos de consultores
                            </h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-info"></i>
                                </button>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Nome</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1"
                                            placeholder="Nome">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Situação:</label>
                                        <select class="custom-select rounded-0" id="exampleSelectRounded0">
                                            <option>Ativo</option>
                                            <option>Inativo</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-default">Pesquisar</button>
                        </div>
                        <!-- /.card-body -->

                    </div>
                </div>

            </div>

            <div class="row" style="margin-bottom: 10px">
                <div class="col-md-12">
                    <a href="{{ route('grupo.create') }}" style="background-color: #D2670E; border-color: #D2670E;" class="btn btn-primary">Adicionar</a>
                    <a href="{{ route('lista.index') }}" style="background-color: #D2670E; border-color: #D2670E;" class="btn btn-primary">Listas</a>
                    <a href="" style="background-color: #D2670E; border-color: #D2670E;" class="btn btn-primary">Whatsapp</a>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <table class="table table-sm">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>Nome</th>
                                        <th>Grupo</th>
                                        <th>Lista 1</th>
                                        <th>Lista 2</th>
                                        <th>Lista 3</th>
                                        <th>Login.</th>
                                        <th>Vis.</th>
                                        <th>Alt.</th>
                                        <th>Del.</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1.</td>
                                        <td>0</td>
                                        <td>1</td>
                                        <td>0</td>
                                        <td>1.</td>
                                        <td>0</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>0</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
        </div>
    </section>
@endsection
