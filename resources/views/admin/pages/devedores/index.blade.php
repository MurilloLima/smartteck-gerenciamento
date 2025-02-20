@extends('admin.layout.app')
@section('title', 'Devedores')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Devedores</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Devedores</li>
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
                                Devedores
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
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Nome</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1"
                                            placeholder="Nome">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Credor</label>
                                        <select class="custom-select rounded-0" id="exampleSelectRounded0">
                                            <option>Ativo</option>
                                            <option>Inativo</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">E-mail</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1"
                                            placeholder="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Contrato</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1"
                                            placeholder="">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Unidade</label>
                                        <input type="text" class="form-control" id="" placeholder="">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Telefone (Somente números)</label>
                                        <input type="text" class="form-control" id="" placeholder="">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">CPF</label>
                                        <input type="text" class="form-control" id="" placeholder="">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">CNPJ</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1"
                                            placeholder="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Tipo</label>
                                        <input type="text" class="form-control" id="" placeholder="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Código</label>
                                        <input type="text" class="form-control" id="" placeholder="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Situação</label>
                                        <input type="text" class="form-control" id="" placeholder="">
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
            <div class="row">
                <div class="card-body">
                    <a href="{{ route('devedores.create') }}" style="background-color: #D2670E; border-color: #D2670E;"
                        class="btn btn-primary">Adicionar</a>
                    <a href="{{ route('relatorio.inativo') }}" style="background-color: #D2670E; border-color: #D2670E;"
                        class="btn btn-primary">Relatório de devedores
                        inativos</a>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <p class="text-danger">
                        Por questões de desempenho, esta tela não exibirá nenhum devedor até que seja feita uma busca
                        clicando
                        no botão Pesquisar. Tente ser específico na busca para retornar poucos devedores na tela e agilizar
                        o
                        processamento da mesma.
                    </p>
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
                                        <th>Credor</th>
                                        <th>Cliente</th>
                                        <th>CPF/CNPJ 1</th>
                                        <th>Telefones</th>
                                        <th>E-amil</th>
                                        <th>Vis.</th>
                                        <th>Alt.</th>
                                        <th>Del..</th>
                                        <th>Inat.</th>
                                        <th>Aco. Dev</th>
                                        <th>Dív. Dev</th>
                                        <th>Neg. Dev</th>
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
                                        <td>0</td>
                                        <td>0</td>
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
