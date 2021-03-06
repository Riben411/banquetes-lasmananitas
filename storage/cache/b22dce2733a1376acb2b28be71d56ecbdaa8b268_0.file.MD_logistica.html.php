<?php
/* Smarty version 3.1.33, created on 2019-01-09 17:02:06
  from 'C:\xampp\htdocs\banquetes\views\templates\MD_logistica.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c361afe093454_60777866',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b22dce2733a1376acb2b28be71d56ecbdaa8b268' => 
    array (
      0 => 'C:\\xampp\\htdocs\\banquetes\\views\\templates\\MD_logistica.html',
      1 => 1547049621,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c361afe093454_60777866 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="md_logistica" class="sub-modal">
  <div class="flex">
    <div class="modal-content col-xs-11 col-sm-5 col-md-4">
      <div class="modal-header">
        <h3>Actividad</h3>
        <a id="mdl_cerrar" class="close">&times;</a>
      </div>
      <div class="modal-body">
        <form id="form_logistica" class="form col-xs-12" action="core/ajax/logisticaAjaxController.php" method="post">
          <input id="id_edit_log" type="hidden" name="id" value="">
          <input id="id_evento" type="hidden" name="id_evento" value="">

          <div class="col-xs-12">
            Inicio:<br>
            <fieldset>
              <div class="row-between">
                <input id="fecha_edit_log" class="col-xs-5" type="date" name="date_start">

                <input id="time_start_log" class="col-xs-5" type="time" name="time_start" value="00:00">
              </div>
            </fieldset>

            Final:<br>
            <fieldset>
              <div class="row-between">
                <input id="fecha_f_edit_log" class="col-xs-5" type="date" name="date_end" value="">

                <input id="time_f_log" class="col-xs-5" type="time" name="time_end" value="00:00">
              </div>    
            </fieldset>

            Actividad:<br>
            <input id="actividad_log" class="col-xs-12" type="text" name="title" value="">
            Lugar:
            <input id="lugar_log" class="col-xs-12" type="text" name="lugar" value="">
            <br><br>
            
            <button id="btn_add_log" onclick="addLogistica()" class="btn success" type="button">Subir</button>
            <button id="btn_edit_log" onclick="editLogistica()" class="btn atention" type="button">Editar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<?php }
}
