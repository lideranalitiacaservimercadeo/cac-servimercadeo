<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DtvColDeals extends Model
{
    public $table = 'dbo.deals_dtv';

    use HasFactory;
    protected $fillable = [
        'name',
        'id_bitrix',
	    'category_id',
	    'etapa_id',
	    'fase_id',
	    'aliado_id',
	    'contacto_id',
	    'fecha_inicio',
	    'fecha_cierre',
	    'asignado',
	    'creado_por',
	    'modificado_por',
	    'fecha_creacion',
	    'fecha_modificacion',
	    'source_id',
	    'lead_id',
	    'valor_churn',
	    'linea_de_negocio_lead',
	    'regional',
	    'fuente',
	    'canal',
	    'tipo_de_tramite',
	    'asesor_comercial',
	    'comercial_servi',
	    'aliado_crm',
	    'tipo_cliente',
	    'genero',
	    'cedula',
	    'ibs',
	    'fecha_de_nacimiento',
	    'ubicacion_exacta',
	    'departamento',
	    'estrato',
	    'tipo_de_venta',
	    'metodo_pago',
	    'tipo_de_oferta',
	    'aplica_maratonazo',
	    'perimetro',
	    'disminucion_perimetro',
	    'estado_de_consulta',
	    'encargado_consulta',
	    'fecha_de_consulta',
	    'hora_de_consulta',
	    'encargado_validacion',
	    'estado_evidente',
	    'acierta',
	    'fecha_de_validacion',
	    'fecha_de_inicio',
	    'fecha_inicio_gestion',
	    'fecha_finalizacion',
	    'descuento_churn',
	    'fecha_churn',
	    'fecha_hora_lectura_contrato',
	    'fecha_va',
	    'motivo_cancelacion',
	    'directvgo',
	    'Extension_asesor',
	    'Lider_Coordinador_SERVIMERCADEO',
	    'Producto_TV',
	    'fecha_finalizacion_new',
	    'Ciudad',
	    'cliente_nombre',
	    'apellido_cliente',
	    'cliente_id',
	    'sector_economico',
	    'base_trabajada',
	    'numero_suscripciones',
	    'producto_net',
	    'mercado',
	    'telefono_1',
	    'telefono_2'
    ];




}
