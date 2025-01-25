<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('grupos', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('desc');
            $table->string('list1');
            $table->string('list2');
            $table->string('list3');
            $table->string('exibircons');
            $table->string('exibirparc');
            $table->string('manual');
            $table->string('valormeta');
            $table->string('tipocomissao');
            $table->string('percentualcomissao');
            $table->string('recibo');
            $table->string('qtde_dias_para_incluir_reagendamentos_pendentes_lista');
            $table->string('permite_limpar_transacao_como_consultor');
            $table->string('permite_inativar_devedor_como_consultor');
            $table->string('permite_pesquisa_por_situacao_devedor_como_consultor');
            $table->string('permite_upload_boleto_manual_como_consultor');
            $table->string('id_evento_reagendamento');
            $table->string('permite_reagendamento_para_outros_consultores');
            $table->string('exibir_relatorio_financeiro_do_consultor');
            $table->string('permite_cadastro_devedores_dividas');
            $table->string('permite_vis_dashboard_devedor');
            $table->string('situacao');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('grupos');
    }
};
