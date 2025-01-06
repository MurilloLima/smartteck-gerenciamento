@extends('admin.layout.app')
@section('title', 'Cadastrar consultor')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Cadastro</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Cadastro de grupos</li>
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
                                Cadastro de grupos de consultores
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
                                        <label for="">Nome</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1"
                                            placeholder="Nome">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Descrição</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1"
                                            placeholder="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Lista 1</label>
                                        <select class="custom-select rounded-0" id="exampleSelectRounded0">
                                            <option>Ativo</option>
                                            <option>Inativo</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Lista 2:</label>
                                        <input type="text" class="form-control" id="" placeholder="">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Lista 3:</label>
                                        <input type="text" class="form-control" id="" placeholder="">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Exibir o dashboard do consultor</label>
                                        <select class="custom-select rounded-0" id="exampleSelectRounded0">
                                            <option>Sim</option>
                                            <option>Não</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Exibir o relatoria de parcelas do sonsultor
                                            3:</label>
                                        <input type="text" class="form-control" id="" placeholder="">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Permite baixar manual de parcelas</label>
                                        <select class="custom-select rounded-0" id="exampleSelectRounded0">
                                            <option>Sim</option>
                                            <option>Não</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Valor da meta dos consumidores</label>
                                        <input type="text" class="form-control" id="" placeholder="">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Tipo de comissão</label>
                                        <select class="custom-select rounded-0" id="exampleSelectRounded0">
                                            <option>Sobre o valor total recuperado</option>
                                            <option>Sobre o valor total de honorários</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Percenteual de comissão</label>
                                        <select class="custom-select rounded-0" id="exampleSelectRounded0">
                                            <option>0,5%</option>
                                            <option>1%</option>
                                            <option>2%</option>
                                            <option>3%</option>
                                            <option>4%</option>
                                            <option>5%</option>
                                            <option>6%</option>
                                            <option>7%</option>
                                            <option>8%</option>
                                            <option>9%</option>
                                            <option>10%</option>
                                            <option>11%</option>
                                            <option>12%</option>
                                            <option>13%</option>
                                            <option>14%</option>
                                            <option>15%</option>
                                            <option>16%</option>
                                            <option>17%</option>
                                            <option>18%</option>
                                            <option>19%</option>
                                            <option>20%</option>
                                            <option>21%</option>
                                            <option>22%</option>
                                            <option>23%</option>
                                            <option>24%</option>
                                            <option>25%</option>
                                            <option>26%</option>
                                            <option>27%</option>
                                            <option>28%</option>
                                            <option>29%</option>
                                            <option>29%</option>
                                            <option>30%</option>
                                            <option>31%</option>
                                            <option>32%</option>
                                            <option>33%</option>
                                            <option>34%</option>
                                            <option>35%</option>
                                            <option>36%</option>
                                            <option>37%</option>
                                            <option>38%</option>
                                            <option>39%</option>
                                            <option>40%</option>
                                            <option>41%</option>
                                            <option>42%</option>
                                            <option>43%</option>
                                            <option>44%</option>
                                            <option>45%</option>
                                            <option>46%</option>
                                            <option>47%</option>
                                            <option>48%</option>
                                            <option>49%</option>
                                            <option>50%</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Percentual de comissão</label>
                                        <select class="custom-select rounded-0" id="exampleSelectRounded0">
                                            <option>Sobre o valor total recuperado</option>
                                            <option>Sobre o valor total de honorários</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Permite gerar recibo de parcela de acordo</label>
                                        <select class="custom-select rounded-0" id="exampleSelectRounded0">
                                            <option>Sobre o valor total recuperado</option>
                                            <option>Sobre o valor total de honorários</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">*Qtde de dias para incluir reagendamentos
                                            pendentes do dia no iniciar cobranças</label>
                                        <select class="form-control" data-val="true"
                                            data-val-required="The qtde_dias_para_incluir_reagendamentos_pendentes_lista field is required."
                                            id="qtde_dias_para_incluir_reagendamentos_pendentes_lista"
                                            name="qtde_dias_para_incluir_reagendamentos_pendentes_lista">
                                            <option selected="selected" value="-1">Não incluir reagendamentos na
                                                lista</option>
                                            <option value="0">Reagendamentos de hoje</option>
                                            <option value="1">Reagendamentos de hoje ou de ontem</option>
                                            <option value="2">Reagendamentos de hoje, ontem e antes de ontem</option>
                                            <option value="3">Reagendamentos de até 3 dias</option>
                                            <option value="4">Reagendamentos de até 4 dias</option>
                                            <option value="5">Reagendamentos de até 5 dias</option>
                                            <option value="6">Reagendamentos de até 6 dias</option>
                                            <option value="7">Reagendamentos de até 7 dias</option>
                                            <option value="8">Reagendamentos de até 8 dias</option>
                                            <option value="9">Reagendamentos de até 9 dias</option>
                                            <option value="10">Reagendamentos de até 10 dias</option>
                                            <option value="11">Reagendamentos de até 11 dias</option>
                                            <option value="12">Reagendamentos de até 12 dias</option>
                                            <option value="13">Reagendamentos de até 13 dias</option>
                                            <option value="14">Reagendamentos de até 14 dias</option>
                                            <option value="15">Reagendamentos de até 15 dias</option>
                                            <option value="16">Reagendamentos de até 16 dias</option>
                                            <option value="17">Reagendamentos de até 17 dias</option>
                                            <option value="18">Reagendamentos de até 18 dias</option>
                                            <option value="19">Reagendamentos de até 19 dias</option>
                                            <option value="20">Reagendamentos de até 20 dias</option>
                                            <option value="21">Reagendamentos de até 21 dias</option>
                                            <option value="22">Reagendamentos de até 22 dias</option>
                                            <option value="23">Reagendamentos de até 23 dias</option>
                                            <option value="24">Reagendamentos de até 24 dias</option>
                                            <option value="25">Reagendamentos de até 25 dias</option>
                                            <option value="26">Reagendamentos de até 26 dias</option>
                                            <option value="27">Reagendamentos de até 27 dias</option>
                                            <option value="28">Reagendamentos de até 28 dias</option>
                                            <option value="29">Reagendamentos de até 29 dias</option>
                                            <option value="30">Reagendamentos de até 30 dias</option>
                                            <option value="31">Reagendamentos de até 31 dias</option>
                                            <option value="32">Reagendamentos de até 32 dias</option>
                                            <option value="33">Reagendamentos de até 33 dias</option>
                                            <option value="34">Reagendamentos de até 34 dias</option>
                                            <option value="35">Reagendamentos de até 35 dias</option>
                                            <option value="36">Reagendamentos de até 36 dias</option>
                                            <option value="37">Reagendamentos de até 37 dias</option>
                                            <option value="38">Reagendamentos de até 38 dias</option>
                                            <option value="39">Reagendamentos de até 39 dias</option>
                                            <option value="40">Reagendamentos de até 40 dias</option>
                                            <option value="41">Reagendamentos de até 41 dias</option>
                                            <option value="42">Reagendamentos de até 42 dias</option>
                                            <option value="43">Reagendamentos de até 43 dias</option>
                                            <option value="44">Reagendamentos de até 44 dias</option>
                                            <option value="45">Reagendamentos de até 45 dias</option>
                                            <option value="46">Reagendamentos de até 46 dias</option>
                                            <option value="47">Reagendamentos de até 47 dias</option>
                                            <option value="48">Reagendamentos de até 48 dias</option>
                                            <option value="49">Reagendamentos de até 49 dias</option>
                                            <option value="50">Reagendamentos de até 50 dias</option>
                                            <option value="51">Reagendamentos de até 51 dias</option>
                                            <option value="52">Reagendamentos de até 52 dias</option>
                                            <option value="53">Reagendamentos de até 53 dias</option>
                                            <option value="54">Reagendamentos de até 54 dias</option>
                                            <option value="55">Reagendamentos de até 55 dias</option>
                                            <option value="56">Reagendamentos de até 56 dias</option>
                                            <option value="57">Reagendamentos de até 57 dias</option>
                                            <option value="58">Reagendamentos de até 58 dias</option>
                                            <option value="59">Reagendamentos de até 59 dias</option>
                                            <option value="60">Reagendamentos de até 60 dias</option>
                                            <option value="61">Reagendamentos de até 61 dias</option>
                                            <option value="62">Reagendamentos de até 62 dias</option>
                                            <option value="63">Reagendamentos de até 63 dias</option>
                                            <option value="64">Reagendamentos de até 64 dias</option>
                                            <option value="65">Reagendamentos de até 65 dias</option>
                                            <option value="66">Reagendamentos de até 66 dias</option>
                                            <option value="67">Reagendamentos de até 67 dias</option>
                                            <option value="68">Reagendamentos de até 68 dias</option>
                                            <option value="69">Reagendamentos de até 69 dias</option>
                                            <option value="70">Reagendamentos de até 70 dias</option>
                                            <option value="71">Reagendamentos de até 71 dias</option>
                                            <option value="72">Reagendamentos de até 72 dias</option>
                                            <option value="73">Reagendamentos de até 73 dias</option>
                                            <option value="74">Reagendamentos de até 74 dias</option>
                                            <option value="75">Reagendamentos de até 75 dias</option>
                                            <option value="76">Reagendamentos de até 76 dias</option>
                                            <option value="77">Reagendamentos de até 77 dias</option>
                                            <option value="78">Reagendamentos de até 78 dias</option>
                                            <option value="79">Reagendamentos de até 79 dias</option>
                                            <option value="80">Reagendamentos de até 80 dias</option>
                                            <option value="81">Reagendamentos de até 81 dias</option>
                                            <option value="82">Reagendamentos de até 82 dias</option>
                                            <option value="83">Reagendamentos de até 83 dias</option>
                                            <option value="84">Reagendamentos de até 84 dias</option>
                                            <option value="85">Reagendamentos de até 85 dias</option>
                                            <option value="86">Reagendamentos de até 86 dias</option>
                                            <option value="87">Reagendamentos de até 87 dias</option>
                                            <option value="88">Reagendamentos de até 88 dias</option>
                                            <option value="89">Reagendamentos de até 89 dias</option>
                                            <option value="90">Reagendamentos de até 90 dias</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="u_fname" class="control-label col-sm-12">*Permite limpar
                                            transações</label>
                                        <div class="col-sm-12">
                                            <select class="form-control" id="permite_limpar_transacao_como_consultor"
                                                name="permite_limpar_transacao_como_consultor">
                                                <option value="N">Não</option>
                                                <option value="S">Sim</option>
                                            </select>
                                            <font color="red"><span class="field-validation-valid"
                                                    data-valmsg-for="permite_limpar_transacao_como_consultor"
                                                    data-valmsg-replace="true"></span></font>
                                            <span id="" style="font-size: 11px">Escolha
                                                Sim para permitir que os consultores deste grupo de consultores possam
                                                limpar transações de parcelas de acordos.</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="u_fname" class="control-label col-sm-12">*Permite inativar
                                            devedores</label>
                                        <div class="col-sm-12">
                                            <select class="form-control" id="permite_inativar_devedor_como_consultor"
                                                name="permite_inativar_devedor_como_consultor">
                                                <option selected="selected" value="N">Não</option>
                                                <option value="S">Sim</option>
                                            </select>
                                            <font color="red"><span class="field-validation-valid"
                                                    data-valmsg-for="permite_inativar_devedor_como_consultor"
                                                    data-valmsg-replace="true"></span></font>
                                            <span id="" class="help-block" style="font-size: 11px">Escolha Sim
                                                para
                                                permitir que os consultores deste grupo de consultores possam inativar
                                                cadastros de devedores.</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="u_fname" class="control-label col-sm-12">*Permite pesquisar devedores
                                            por situação</label>
                                        <div class="col-sm-12">
                                            <select class="form-control"
                                                id="permite_pesquisa_por_situacao_devedor_como_consultor"
                                                name="permite_pesquisa_por_situacao_devedor_como_consultor">
                                                <option value="N">Não</option>
                                                <option selected="selected" value="S">Sim</option>
                                            </select>
                                            <font color="red"><span class="field-validation-valid"
                                                    data-valmsg-for="permite_pesquisa_por_situacao_devedor_como_consultor"
                                                    data-valmsg-replace="true"></span></font>
                                            <span id="" style="font-size: 11px" class="help-block">Escolha Sim
                                                para
                                                permitir que os consultores deste grupo de consultores possam pesquisar
                                                devedores por situação (ativo ou inativo). Escolha Não para permitir somente
                                                pesquisa por devedores ativos.</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="u_fname" class="control-label col-sm-12">*Permite upload de boleto
                                            manual</label>
                                        <div class="col-sm-12">
                                            <select class="form-control" id="permite_upload_boleto_manual_como_consultor"
                                                name="permite_upload_boleto_manual_como_consultor">
                                                <option selected="selected" value="N">Não</option>
                                                <option value="S">Sim</option>
                                            </select>
                                            <font color="red"><span class="field-validation-valid"
                                                    data-valmsg-for="permite_upload_boleto_manual_como_consultor"
                                                    data-valmsg-replace="true"></span></font>
                                            <span id="helpPermiteUpload" class="help-block"
                                                style="font-size: 11px">Escolha Sim para permitir que
                                                os consultores deste grupo de consultores possam fazer o upload de boletos
                                                manuais. Este recurso é válido apenas para devedores de credores que
                                                utilizem o meio de pagamento boleto manual.</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="u_fname" class="control-label col-sm-12">Evento para
                                            reagendamentos</label>
                                        <div class="col-sm-12">
                                            <select class="form-control" id="id_evento_reagendamento"
                                                name="id_evento_reagendamento">
                                                <option value="0">Selecione</option>
                                            </select>
                                            <font color="red"><span class="field-validation-valid"
                                                    data-valmsg-for="id_evento_reagendamento"
                                                    data-valmsg-replace="true"></span></font>
                                            <span id="helpPermiteUpload" class="help-block"
                                                style="font-size: 11px">Escolha um evento a ser
                                                atribuído automaticamente para os consultores deste grupo de consultores em
                                                reagendamento feitos por meio do botão Reagendar, presente na tela de
                                                negociações do devedor. O botão Reagendar somente será exibido se houver um
                                                evento definido para o grupo do consultor logado.</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="u_fname" class="control-label col-sm-12">Permite reagendamento para
                                            outros consultores</label>
                                        <div class="col-sm-12">
                                            <select class="form-control"
                                                id="permite_reagendamento_para_outros_consultores"
                                                name="permite_reagendamento_para_outros_consultores">
                                                <option selected="selected" value="N">Não</option>
                                                <option value="S">Sim</option>
                                            </select>
                                            <font color="red"><span class="field-validation-valid"
                                                    data-valmsg-for="permite_reagendamento_para_outros_consultores"
                                                    data-valmsg-replace="true"></span></font>
                                            <span id="helpPermiteReagendamentoOutros" class="help-block"
                                                style="font-size: 11px">Escolha Sim para
                                                permitir que consultores deste grupo possam selecionar o nome do consultor
                                                que ficará responsável pelo reagendamento. Escolha Não para que o
                                                reagendamento possa ser atribuído apenas ao consultor logado ou para seu
                                                grupo de consultores.</span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="u_fname" class="control-label col-sm-12">Exibir relatório financeiro
                                            do consultor</label>
                                        <div class="col-sm-12">
                                            <select class="form-control" id="exibir_relatorio_financeiro_do_consultor"
                                                name="exibir_relatorio_financeiro_do_consultor">
                                                <option selected="selected" value="N">Não</option>
                                                <option value="S">Sim</option>
                                            </select>
                                            <font color="red"><span class="field-validation-valid"
                                                    data-valmsg-for="exibir_relatorio_financeiro_do_consultor"
                                                    data-valmsg-replace="true"></span></font>
                                            <span id="helpExibirRelFinanceiro" class="help-block"
                                                style="font-size: 11px">Escolha Sim para
                                                permitir que os consultores deste grupo de consultores possam visualizar o
                                                relatório financeiro de acordos feitos pelo consultor logado. O relatório
                                                financeiro exibe as parcelas de acordo que foram pagas em um determinado
                                                período.</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="u_fname" class="control-label col-sm-12">Permite o cadastro de
                                            devedores e dívidas:</label>
                                        <div class="col-sm-12">
                                            <select class="form-control" id="permite_cadastro_devedores_dividas"
                                                name="permite_cadastro_devedores_dividas">
                                                <option selected="selected" value="N">Não</option>
                                                <option value="S">Sim</option>
                                            </select>
                                            <font color="red"><span class="field-validation-valid"
                                                    data-valmsg-for="permite_cadastro_devedores_dividas"
                                                    data-valmsg-replace="true"></span></font>
                                            <span id="helpHabCadDevDiv" class="help-block"
                                                style="font-size: 11px">Escolha Sim para permitir que
                                                os consultores deste grupo cadastrem novos devedores e dívidas. Isso pode
                                                ser útil em credores que não usam importação e enviam novos devedores
                                                individualmente para cobrança. Escolha Não para permitir o cadastro de
                                                devedores e dívidas como consultor.</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="u_fname" class="control-label col-sm-12">Permite visualizar o
                                            dashboard dos devedores</label>
                                        <div class="col-sm-12">
                                            <select class="form-control" id="permite_vis_dashboard_devedor"
                                                name="permite_vis_dashboard_devedor">
                                                <option selected="selected" value="N">Não</option>
                                                <option value="S">Sim</option>
                                            </select>
                                            <font color="red"><span class="field-validation-valid"
                                                    data-valmsg-for="permite_vis_dashboard_devedor"
                                                    data-valmsg-replace="true"></span></font>
                                            <span id="helpVisDashDevedor" class="help-block"
                                                style="font-size: 11px">Escolha Sim para permitir que
                                                os consultores deste grupo visualizem o dashboard dos devedores. Escolha Não
                                                para não permitir a visualição do dashboard dos devedores como
                                                consultor.</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="u_fname" class="control-label col-sm-12">*Situação</label>
                                        <div class="col-sm-12">
                                            <select class="form-control" id="situacao" name="situacao">
                                                <option value="">&lt;Todos&gt;</option>
                                                <option selected="selected" value="A">Ativo</option>
                                                <option value="I">Inativo</option>
                                            </select>
                                            <font color="red"><span class="field-validation-valid"
                                                    data-valmsg-for="situacao" data-valmsg-replace="true"></span></font>
                                            <span id="helpSituacao" class="help-block" style="font-size: 11px">Situação
                                                do grupo de consultores.
                                                Somente grupos ativos poderão ser associados aos novos consultores.</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-default">Cadastrar</button>
                        </div>
                        <!-- /.card-body -->

                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
