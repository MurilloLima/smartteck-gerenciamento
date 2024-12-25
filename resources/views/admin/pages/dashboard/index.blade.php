@extends('admin.layout.app')
@section('title', 'Dashboard')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Dashboard do administrador</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Estatísticas</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row" style="margin-bottom: 20px;">
                <div class="col-sm-3 text-center">
                    <a href="" class="btn btn-default">Indicadores do dia/mês</a>
                </div>
                <div class="col-sm-3 text-center">
                    <a href="" class="btn btn-default">Indicadores de acordos</a>
                </div>
                <div class="col-sm-3 text-center">
                    <a href="" class="btn btn-default">Indicadores de negociações</a>
                </div>
                <div class="col-sm-3 text-center">
                    <a href="" class="btn btn-default">Indicadores gerais</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="info-box bg-default">
                        <div class="info-box-content">
                            <span class="info-box-text">Acordos recuperadas hoje </span>
                            <span class="info-box-number">R$ 0,00 </span>

                            <div class="progress">
                                <div class="progress-bar" style="width: 70%"></div>
                            </div>
                            <span class="progress-description">
                                Ver pagamentos
                            </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="info-box bg-default">
                        <div class="info-box-content">
                            <span class="info-box-text">Acordos que vencem hoje </span>
                            <span class="info-box-number">R$ 0,00 </span>

                            <div class="progress">
                                <div class="progress-bar" style="width: 70%"></div>
                            </div>
                            <span class="progress-description">
                                Ver dívidas
                            </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="info-box bg-default">
                        <div class="info-box-content">
                            <span class="info-box-text">Credores cadastrados </span>
                            <span class="info-box-number">0</span>

                            <div class="progress">
                                <div class="progress-bar" style="width: 70%"></div>
                            </div>
                            <span class="progress-description">
                                Ver dívidas
                            </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="info-box bg-default">
                        <div class="info-box-content">
                            <span class="info-box-text">Devedores cadastrados</span>
                            <span class="info-box-number">0 </span>

                            <div class="progress">
                                <div class="progress-bar" style="width: 70%"></div>
                            </div>
                            <span class="progress-description">
                                Ver devedores
                            </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->

            </div>
            {{-- end row --}}
            <div class="row">
                <div class="col-md-6 text-center">
                    <div>
                        <canvas id="myChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
