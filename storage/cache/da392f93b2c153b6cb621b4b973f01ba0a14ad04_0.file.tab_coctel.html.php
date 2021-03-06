<?php
/* Smarty version 3.1.33, created on 2019-01-07 00:07:00
  from 'C:\xampp\htdocs\banquetes\views\templates\eventos\tab_coctel.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c328a14578028_36527929',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'da392f93b2c153b6cb621b4b973f01ba0a14ad04' => 
    array (
      0 => 'C:\\xampp\\htdocs\\banquetes\\views\\templates\\eventos\\tab_coctel.html',
      1 => 1546816012,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c328a14578028_36527929 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- inputs:
    tipo_formato, nombre, lugar, montaje, garantia, canapes, entrada, fuerte,
    postre, detalle_montaje, ama_llaves, chief_steward, mantenimiento,
    seguridad, recursos_humanos, proveedores, contabilidad
-->
<form id="tab_coctel" class="form col-xs-12" action="#" method="post">
    <input class="id_orden" type="hidden" name="id">

    <div class="row-between">
      <div class="col-xs-12 col-md-6">
        <div class="row-between scroll-y" style="padding: 0 20px">
          <input type="hidden" name="tipo_formato" value="coctel">

          <div class="col-xs-6">
            Evento *:<br>
            <input class="o_nombre col-xs-11" type="text" name="nombre">
          </div>

          <div class="col-xs-6">
            Lugar *: <br>
            <input class="o_place col-xs-12" type="text" name="lugar">
          </div>

          <div class="col-xs-6">
            Montaje *:<br>
            <input class="o_montaje col-xs-11" type="text" name="montaje"><br>
          </div>

          <div class="col-xs-6">
            Garantía *:<br>
            <input class="o_garantia col-xs-12" type="text" name="garantia"><br>
          </div>

          <div class="col-xs-6">
            Canapes:<br>
            <textarea wrap="off" class="o_canapes col-xs-11" name="canapes" rows="3"></textarea>
          </div>

          <div class="col-xs-6">
            Cocteleria:<br>
            <textarea wrap="off" class="o_cocteleria col-xs-12" name="cocteleria" rows="3"></textarea>
          </div>

          <div class="col-xs-6">
            Mezcladores:<br>
            <textarea wrap="off" class="o_mezcladores col-xs-11" name="mezcladores" rows="3"></textarea>
          </div>

          <div class="col-xs-6">
            Bebidas:<br>
            <textarea wrap="off" class="o_bebidas col-xs-12" name="bebidas" rows="3"></textarea>
          </div>
        </div>
      </div>

      <div class="col-xs-12 col-md-6">
        <div id="campos_coctel" class="row-between scroll-y" style="padding: 0 20px">
          <div class="col-xs-6">
            Detalle montaje:<br>
            <textarea wrap="off" class="o_dmontaje col-xs-11" name="detalle_montaje" rows="3"></textarea>
          </div>

          <div class="col-xs-6">
            Ama de llaves:<br>
            <textarea wrap="off" class="o_ama_llaves col-xs-11" name="ama_llaves" rows="3"></textarea>
          </div>

          <div class="col-xs-6">
            Chief Steward:<br>
            <textarea wrap="off" class="o_chief_steward col-xs-11" name="chief_steward" rows='3'></textarea>
          </div>

          <div class="col-xs-6">
            Mantenimiento:<br>
            <textarea wrap="off" class="o_mantenimiento col-xs-11" name="mantenimiento" rows='3'></textarea>
          </div>

          <div class="col-xs-6">
            Seguridad:<br>
            <textarea wrap="off" class="o_seguridad col-xs-11" name="seguridad" rows='3'></textarea>
          </div>

          <div class="col-xs-6">
            Recursos Humanos:<br>
            <textarea wrap="off" class="o_RH col-xs-11" name="recursos_humanos" rows="3"></textarea>
          </div>

          <div class="col-xs-6">
            Proveedores:<br>
            <textarea wrap="off" class="o_proveedores col-xs-11" name="proveedores" rows="3"></textarea>
          </div>

          <div class="col-xs-6">
            Contabilidad y Restaurante:<br>
            <textarea wrap="off" class="o_contabilidad col-xs-11" name="contabilidad" rows="3"></textarea>
          </div>
        </div>
      </div>
    </div>

    <div class="row-right">
      <button form="tab_coctel" class="btn success" type="button">Subir</button>
      <button form="tab_coctel" class="btn atention" type="button">Editar</button>
      <button id="btnCampoExtraCoctel" class="btn primary" type="button" >Mas <strong>+</strong></button>
    </div>
  </form>
  <!-- SCRIPT DE CAMPOS DINÁMICOS -->
<?php echo '<script'; ?>
>
    let nc_coctel = 0;
  
    btnCampoExtraCoctel.addEventListener('click', () => {
      if (nc_coctel < 5) {
        const e = document.createElement('div');
        e.className = 'col-xs-6';
        e.innerHTML = `<input class="o_tag col-xs-7" type="text" name="tag[]"> <br>
        <textarea wrap="off" class="o_content col-xs-11" name="content[]" rows="3"></textarea>`;
        
        campos_coctel.appendChild(e)
  
        nc_coctel++;
      } else { alert('Se ha alcanzado el máximo de campos disponibles'); }    
    })
  <?php echo '</script'; ?>
><?php }
}
