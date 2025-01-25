<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    use HasFactory;

    protected $fillable = [
        'name' => 'required',
        'desc',
        'list1',
        'list2',
        'list3',
        'exibircons',
        'exibirparc',
        'manual',
        'valormeta',
        'tipocomissao',
        'percentualcomissao',
        'recibo',
        'qtde_dias_para_incluir_reagendamentos_pendentes_lista',
        'permite_limpar_transacao_como_consultor',
        'permite_inativar_devedor_como_consultor',
        'permite_pesquisa_por_situacao_devedor_como_consultor',
        'permite_upload_boleto_manual_como_consultor',
        'id_evento_reagendamento',
        'permite_reagendamento_para_outros_consultores',
        'exibir_relatorio_financeiro_do_consultor',
        'permite_cadastro_devedores_dividas',
        'permite_vis_dashboard_devedor',
        'situacao' => 'required',
    ];
}
