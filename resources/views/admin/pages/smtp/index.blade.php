@extends('admin.layout.app')
@section('title', 'Lista de e-mails')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>E-mails</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Lista de e-mails</li>
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
                                Cadastre pelo menos um e-mail para envio de notificações em seu nome
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
                                <div class="col-md-12">
                                    <p>
                                        Cadastre aqui o seu SMTP para envio de e-mails para os clientes em seu nome.
                                        Exemplo: seunome@seudominio.com.br, seunome@gmail.com etc.
                                    </p>
                                    <p>
                                        Enviar e-mails em seu nome é muito importante para passar credibilidade para seus
                                        clientes. Você pode usar um domínio próprio ou domínios grátis (Gmail, Hotmail etc).
                                        Dica: domínios próprios passam mais segurança.
                                        Para configurar o e-mail, você precisará dos dados do SMTP do seu provedor. Os links
                                        a seguir exibem as informações do Gmail e do Hotmail.
                                    </p>
                                    <p>
                                        Além disso, será necessário criar uma conta no Sendgrid. Caso você ainda não tenha
                                        uma conta no Sendgrid, por favor, crie uma em https://signup.sendgrid.com/. O
                                        Sendgrid é uma plataforma de envio de e-mails com eficiência, monitoramento e que
                                        evita marcação de spam. Existem planos pagos e também um plano grátis no Sendgrid. A
                                        escolha do plano deverá ser de acordo com a quantidade diária de envio de e-mails.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button style="background-color: #D2670E; border-color: #D2670E;" type="submit" class="btn btn-primary">Adicionar</button>
                            <button style="background-color: #D2670E; border-color: #D2670E;" type="submit" class="btn btn-primary">Testar</button>
                        </div>
                        <!-- /.card-body -->
                    </div>
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
                                        <th>E-mail</th>
                                        <th>Host SMTP</th>
                                        <th>Porta</th>
                                        <th>Login</th>
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
