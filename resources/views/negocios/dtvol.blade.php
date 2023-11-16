
<x-app-layout>
    <link href="https://unpkg.com/tabulator-tables@5.5.2/dist/css/tabulator.min.css" rel="stylesheet">

    <div id="dtvColtable"></div>

            <script type="text/javascript" src="https://unpkg.com/tabulator-tables@5.5.2/dist/js/tabulator.min.js"></script>

<script>
    $(document).ready(function() {

    var table = new Tabulator("#dtvColtable", {
            ajaxURL:"/dtvcoldata",
            columns:[
                {title:"id_bitrix",field:"id_bitrix"},
                {title:"category_id",field:"category_id"},
                {title:"etapa_id",field:"etapa_id"},
                {title:"fecha_inicio",field:"fecha_inicio"},
                {title:"asignado",field:"asignado"},
                {title:"fecha_creacion",field:"fecha_creacion"},
                {title:"regional",field:"regional"},
                {title:"fuente",field:"fuente"},
                {title:"canal",field:"canal"},
                {title:"asesor_comercial",field:"asesor_comercial"},
                {title:"comercial_servi",field:"comercial_servi"},
                {title:"aliado_crm",field:"aliado_crm"},
                {title:"ibs",field:"ibs"},
                {title:"ubicacion_exacta",field:"ubicacion_exacta"},
                {title:"departamento",field:"departamento"},
                {title:"estrato",field:"estrato"},
                {title:"tipo_de_venta",field:"tipo_de_venta"},
                {title:"metodo_pago",field:"metodo_pago"},
                {title:"aplica_maratonazo",field:"aplica_maratonazo"},
                {title:"estado_de_consulta",field:"estado_de_consulta"},
                {title:"encargado_consulta",field:"encargado_consulta"},
                {title:"fecha_de_consulta",field:"fecha_de_consulta"},
                {title:"hora_de_consulta",field:"hora_de_consulta"},
                {title:"encargado_validacion",field:"encargado_validacion"},
                {title:"acierta",field:"acierta"},
                {title:"fecha_de_validacion",field:"fecha_de_validacion"},
                {title:"fecha_de_inicio",field:"fecha_de_inicio"},
                {title:"fecha_inicio_gestion",field:"fecha_inicio_gestion"},
                {title:"fecha_hora_lectura_contrato",field:"fecha_hora_lectura_contrato"},
                {title:"fecha_va",field:"fecha_va"},
                {title:"directvgo",field:"directvgo"},
                {title:"Producto_TV",field:"Producto_TV"},
                {title:"fecha_finalizacion_new",field:"fecha_finalizacion_new"},
                {title:"Ciudad",field:"Ciudad"},
                {title:"cliente_nombre",field:"cliente_nombre"},
                {title:"apellido_cliente",field:"apellido_cliente"},
                {title:"numero_suscripciones",field:"numero_suscripciones"},
                {title:"producto_net",field:"producto_net"},
                {title:"telefono_1",field:"telefono_1"},
                {title:"telefono_2",field:"telefono_2"},
            ],
        });

    });
</script>




</x-app-layout>
