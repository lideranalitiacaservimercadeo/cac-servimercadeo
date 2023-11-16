<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class dtvcolcontroller extends Controller
{
    public function data(){

        $ordenesEnProduccion =  DB::select('SELECT TOP (10) [id_bitrix]
               ,[category_id]
               ,[etapa_id]
               ,[fecha_inicio]
               ,[asignado]
               ,[fecha_creacion]
               ,[regional]
               ,[fuente]
               ,[canal]
               ,[asesor_comercial]
               ,[comercial_servi]
               ,[aliado_crm]
               ,[ibs]
               ,[ubicacion_exacta]
               ,[departamento]
               ,[estrato]
               ,[tipo_de_venta]
               ,[metodo_pago]
               ,[aplica_maratonazo]
               ,[estado_de_consulta]
               ,[encargado_consulta]
               ,[fecha_de_consulta]
               ,[hora_de_consulta]
               ,[encargado_validacion]
               ,[acierta]
               ,[fecha_de_validacion]
               ,[fecha_de_inicio]
               ,[fecha_inicio_gestion]
               ,[fecha_hora_lectura_contrato]
               ,[fecha_va]
               ,[directvgo]
               ,[Producto_TV]
               ,[fecha_finalizacion_new]
               ,[Ciudad]
               ,[cliente_nombre]
               ,[apellido_cliente]
               ,[numero_suscripciones]
               ,[producto_net]
               ,[telefono_1]
               ,[telefono_2]
           FROM [dbo].[deals_dtv]
           WHERE etapa_id NOT IN (?)
           ORDER BY [fecha_creacion] DESC',['WON']);

       return response()->json($ordenesEnProduccion);
       }

    public function index(){


    return view('negocios.dtvol', );

    }
}
