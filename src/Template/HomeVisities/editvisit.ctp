<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\HomeVisity $homeVisity
 */

?>


<nav class="large-2 medium-2 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Acciones') ?></li>
         <?php echo $this->Html->image('logo.png', ['alt' => 'MSC', 'width' => '60%', 'height' => '60%']); ?>
        <li><?= $this->Html->link(__('Lista Visitas Domiciliarias'), ['action' => 'index']) ?></li>
        <?php if ($current_user['role'] === 'SuperAdministrador' or $current_user['role'] === 'Administrador'): ?>
        <li><?= $this->Html->link(__('Lista Usuarios'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nuevo Usuario'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <?php endif ?>
        <?php if ($current_user['role'] === 'SuperAdministrador' or $current_user['role'] === 'Administrador' or $current_user['role'] === 'Operador'): ?>
        <li><?= $this->Html->link(__('Lista Clientes'), ['controller' => 'Clients', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nuevo Cliente'), ['controller' => 'Clients', 'action' => 'add']) ?></li>
        <?php endif ?>
        
    </ul>
</nav>
<div class="homeVisities form large-10 medium-10 columns content">
    <?= $this->Form->create($homeVisity, ['type' => 'file', 'method' => 'post', 'url' => ['action' => 'addvisit']]) ?>
    <fieldset>
        <h3><?= __('1.- INFORMACIÓN PERSONAL') ?></h3>

        <?php
            echo $this->Form->hidden('id');
            echo $this->Form->control('name', ['required' => true, 'label' => 'Nombres']);
            echo $this->Form->control('last_name', ['required' => true, 'required' => true, 'label' => 'Apellidos']);
            echo $this->Form->control('character.birth_place', ['required' => true, 'required' => true, 'label' => 'Lugar de Nacimiento']);
            echo $this->Form->control('character.birth_date', ['type' => 'date','minYear' => date('Y') - 60, 'maxYear' => date('Y') - 0 ,'required' => true, 'required' => true, 'label' => 'Fecha de Nacimiento']);
            echo $this->Form->control('character.age', ['type' => 'number','required' => true, 'required' => true, 'label' => 'Edad (años)']);
            echo $this->Form->control('cc', ['required' => true, 'label' => 'Cédula de Ciudadanía']);
            echo $this->Form->control('character.expedition_place', ['required' => true, 'label' => 'Lugar de Expedición']);
            echo $this->Form->control('character.expedition_date', ['type' => 'date','minYear' => date('Y') - 60, 'maxYear' => date('Y') - 0 ,'required' => true, 'label' => 'Fecha de Expedición']);
            echo $this->Form->control('character.blood_type', ['empty' => 'Seleccione Tipo de Sangre','required' => true, 'label' => 'Tipo de Sangre', 'options' => ['O+' => 'O+', 'A+' => 'A+', 'B+' => 'B+','AB+' => 'AB+', 'O-' => 'O-', 'A-' => 'A-', 'B-' => 'B-', 'AB-' => 'AB-']]);
            echo $this->Form->control('character.height', ['step' => 'any ','min' => 0, 'type' => 'number','required' => true, 'label' => 'Estatura (cm)']);
            echo $this->Form->control('character.particular_signs', ['required' => true, 'label' => 'Señales Particulares']);
            echo $this->Form->control('character.nickname', ['required' => true, 'label' => 'Apodo o Nombre de Pila']);
            echo $this->Form->control('phone', ['required' => true, 'label' => 'Teléfono Principal']);
            echo $this->Form->control('phone2', ['required' => true, 'label' => 'Teléfono Secundario']);
            echo $this->Form->control('character.civil_status', ['empty' => 'Seleccione Estado Civil','required' => true, 'label' => 'Estado Civil', 'options' => ['Casado(a)' => 'Casado(a)', 'Concubinato' => 'Concubinato', 'Divorciado(a)' => 'Divorciado(a)', 'Viudo(a)' => 'Viudo(a)', 'Soltero(a)' => 'Soltero(a)']]);
            echo $this->Form->control('character.time', ['type' => 'number','required' => true, 'label' => 'Tiempo (años)', 'min' => 0,]);
            echo $this->Form->control('character.email', ['type' => 'email', 'required' => true, 'label' => 'Correo Electrónico']);
            echo $this->Form->control('character.observations_personal_information', ['type' => 'textarea',   'required' => true, 'label' => 'Observaciones / Información Personal']);
            echo $this->Form->control('character.photo', ['type' => 'file','required' => true, 'label' => 'Fotografía']);            
        ?>
        <h5>Licencia de Conducción</h5>
         <table  class="table table-hover small-text" id="tbLicencia">
            <tr class="tr-header">
            <th>Numero</th>
            <th>Categorias</th>
            <th>Multas</th>
            <th>Foto</th>
           </tr>
            <tr>
            <td><?= $this->Form->control('character.license.number', ['label' => false, 'maxlength' => 10]) ?></td>
            <td><?= $this->Form->control('character.license.categories', ['label' => false]) ?></td>
            <td><?= $this->Form->control('character.license.fines', ['type' => 'checkbox','label' => false]) ?></td>
            <td><?=  $this->Form->control('character.license.photo', ['type' => 'file','label' => false])?></td>  
            </tr>
        </table>
        <h5>Libreta Militar</h5>
        <table  class="table table-hover small-text" id="tbLibreta">
            <tr class="tr-header">
            <th>Numero</th>
            <th>clase</th>
            <th>Distrito Militar</th>
            <th>Foto</th>
            </tr>
            <tr>
            <td><?= $this->Form->control('character.notebook.number', ['label' => false, 'maxlength' => 10]) ?></td>
            <td><?= $this->Form->select('character.notebook.class',['Primera' => 'Primera', 'Segunda' => 'Segunda'],['label' => false, 'empty' => 'Seleccione Clase']) ?></td>
            <td><?= $this->Form->control('character.notebook.military_district', ['label' => false]) ?></td>
            <td><?=  $this->Form->control('character.notebook.photo', ['type' => 'file','label' => false])?></td>
            </tr>
        </table>
        <h5>Pasaporte</h5>
        <table  class="table table-hover small-text" id="">
            <tr class="tr-header">
            <th>Numero</th>
            <th>Fecha Vencimiento</th>
            <th>Foto</th>
            </tr>
            <tr>
            <td><?= $this->Form->control('character.passport.number', ['label' => false, 'maxlength' => 10]) ?></td>
            <td><?= $this->Form->control('character.passport.expiration_date', ['type' => 'date' ,'label' => false]) ?></td>
            <td><?= $this->Form->control('character.passport.photo', ['type' => 'file' ,'label' => false]) ?></td>
            </tr>
        </table>
        <h5>Salidas del Pais</h5>
         <table  class="table table-hover small-text" id="tbSalidas">
            <tr class="tr-header">
            <th>Lugar</th>
            <th>Fecha</th>
            <th>Tiempo Permanencia</th>
            <th>Motivo</th>
            <th><?= $this->Form->button('+', ['type' => 'button', 'id' =>'addMoreSalida']) ?></th>
            </tr>
            <?php foreach ($homeVisity->character->departures as $key => $val): ?>
            <?php echo '<tr id="fila'.$key.'">
                        <td><input type="text" name="character[departures]['.$key.'][place]" value="'.$val->place.'"></td>
                        <td><input type="date" name="character[departures]['.$key.'][date]" value="'.$val->date->i18nFormat('yyyy-MM-dd').'"></td>
                        <td><input type="text" name="character[departures]['.$key.'][time_stay]" value="'.$val->time_stay.'"> </td>
                        <td><input type="text" name="character[departures]['.$key.'][reason]" value="'.$val->reason.'" </td>
                        <td><input type="button" value="X" onclick="eliminar('.$key.');"></td>
                        </tr>'; ?>
            <script type="text/javascript"> var x = <?php echo $key+1; ?>;</script>
            <?php endforeach; ?>

        </table>
    </fieldset>
     <fieldset>
        <h3><?= __('2.- INFORMACIÓN ACADEMICA') ?></h3>
         
            <table  class="table table-hover small-text" id="tbEstudios">
            <tr class="tr-header">
            <th>Estudios</th>
            <th>Nombre Institución</th>
            <th>Titulo Obtenido</th>
            <th>Fecha</th>
            <th>Ciudad</th>
            <th>No. Registro</th>
            <th><?= $this->Form->button('+', ['type' => 'button', 'id' =>'addEstudios']) ?></th>
            
            <?php foreach ($homeVisity->academic_information->studies as $key => $val): ?>
            <?php echo '<tr id="estudio'.$key.'">
                            <td><select name="academic_information[studies]['.$key.'][studies]" class="form-control" required="true">
                                <option value="PRIMARIA" ';if ($val->studies =="PRIMARIA"){ echo 'selected = "selected"';} echo'>PRIMARIA</option>
                                <option value="BACHILLER" ';if ($val->studies =="BACHILLER"){ echo 'selected = "selected"';} echo'>BACHILLER</option>
                                <option value="TECNICO" ';if ($val->studies =="TECNICO"){ echo 'selected = "selected"';} echo'>TECNICO</option>
                                <option value="TECNOLOGICO" ';if ($val->studies =="TECNOLOGICO"){ echo 'selected = "selected"';} echo'>TECNOLOGICO</option>
                                <option value="UNIVERSITARIO" ';if ($val->studies =="UNIVERSITARIO"){ echo 'selected = "selected"';} echo'>UNIVERSITARIO</option>
                                <option value="POSTGRADO" ';if ($val->studies =="POSTGRADO"){ echo 'selected = "selected"';} echo'>POSTGRADO</option>
                                <option value="OTROS" ';if ($val->studies =="OTROS"){ echo 'selected = "selected"';} echo'>OTROS</option>
                         </select></td>
                        <td><input type="text" name="academic_information[studies]['.$key.'][name_institution]" value="'.$val->name_institution.'"></td>
                        <td><input type="text" name="academic_information[studies]['.$key.'][obtained_title]" value="'.$val->obtained_title.'"></td>
                        <td><input type="date" name="academic_information[studies]['.$key.'][date]" value="'.$val->date->i18nFormat('yyyy-MM-dd').'" ></td>
                        <td><input type="text" name="academic_information[studies]['.$key.'][city]" value="'.$val->city.'" ></td>
                        <td><input type="text" name="academic_information[studies]['.$key.'][registry_number]" value="'.$val->registry_number.'" ></td>
                        <td><input type="button" value="X" onclick="eliminarEstudios('.$key.');"></td>
                        </tr>'; ?>
                    <script type="text/javascript"> var y = <?php echo $key+1; ?>;</script>
            <?php endforeach; ?>
            </table>
           
        <?php
            echo $this->Form->control('academic_information.observations_Academic_information', ['type' => 'textarea','required' => true, 'label' => 'Observaciones / Concepto Información Academica']);  
        ?>
    </fieldset>
    <fieldset>
        <h3><?= __('3.- FAMILIA') ?></h3>

        <h4><?= __('Personas con las que Convive') ?></h4>
        <table  class="table table-hover small-text" id="tbIntegrantes">
            <tr class="tr-header">
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Parentesco</th>
            <th>Edad (Años)</th>
            <th>Cédula de Ciudadanía</th>
            <th>Ocupación / Empresa</th>
            <th>Telefóno</th>
            <th><?= $this->Form->button('+', ['type' => 'button', 'id' =>'addIntegrante']) ?></th>

            <?php foreach ($homeVisity->family->relatives as $key => $val): ?>
            <tr id="integrante<?= $key ?>">
            <td><input type="text" name="family[relatives][<?= $key ?>][name]" value="<?= $val->name ?>" required></td>
            <td><input type="text" name="family[relatives][<?= $key ?>][last_name]" value="<?= $val->last_name ?>" required></td>
            <td><select name="family[relatives][<?= $key ?>][relationship]"  required>
                <option value="ESPOSO (A)" <?php if($val->relationship=="ESPOSO (A)"){ echo"selected"; } ?> >ESPOSO (A)</option>
                <option value="HIJO (A)" <?php if($val->relationship=="HIJO (A)"){ echo"selected"; } ?>>HIJO( A)</option>
                <option value="PADRE" <?php if($val->relationship=="PADRE"){ echo"selected"; } ?>>PADRE</option>
                <option value="MADRE" <?php if($val->relationship=="MADRE"){ echo"selected"; } ?>>MADRE</option>
                <option value="HERMANO (A)" <?php if($val->relationship=="HERMANO (A)"){ echo"selected"; } ?>>HERMANO (A)</option>
                <option value="ABUELO (A)" <?php if($val->relationship=="ABUELO (A)"){ echo"selected"; } ?>>ABUELO (A)</option>
                <option value="TIO (A)" <?php if($val->relationship=="TIO (A)"){ echo"selected"; } ?> >TIO (A)</option>
                <option value="SOBRINO (A)" <?php if($val->relationship=="SOBRINO (A)"){ echo"selected"; } ?>>SOBRINO (A)</option>
                <option value="PRIMO (A)" <?php if($val->relationship=="PRIMO (A)"){ echo"selected"; } ?> >PRIMO (A)</option>
                <option value="SUEGRO (A)" <?php if($val->relationship=="SUEGRO (A)"){ echo"selected"; } ?>>SUEGRO (A)</option>
                <option value="AMIGO (A)" <?php if($val->relationship=="AMIGO (A)"){ echo"selected"; } ?>>AMIGO (A)</option>
                <option value="OTROS" <?php if($val->relationship=="OTROS"){ echo"selected"; } ?>>OTROS</option>
            </select></td>
            <td><input type="number" name="family[relatives][<?= $key ?>][age]" value="<?= $val->age ?>" required min="0" max="110"></td>
            <td><input type="text" name="family[relatives][<?= $key ?>][cc]" value="<?= $val->cc ?>" required></td>
            <td><input type="text" name="family[relatives][<?= $key ?>][occupation]" value="<?= $val->occupation ?>" required></td>
            <td><input type="text" name="family[relatives][<?= $key ?>][phone]" value="<?= $val->phone ?>" required></td>
            <td ><input type="button" value="X" onclick="eliminarIntegrante(<?=$key?>);"></td>
            </tr>
            <script type="text/javascript"> var z = <?php echo $key+1; ?>;</script>
            <?php endforeach; ?>
        </table>

        <h4><?= __('Familiares Cercanos (Padres, Hermanos, Hijos)') ?></h4>
         <table  class="table table-hover small-text" id="tbFamiliares">
            <tr class="tr-header">
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Parentesco</th>
            <th>Edad (Años)</th>
            <th>Cédula de Ciudadanía</th>
            <th>Ocupación / Empresa</th>
            <th>Dirección</th>
            <th><?= $this->Form->button('+', ['type' => 'button', 'id' =>'addFamiliar']) ?></th>

            <?php foreach ($homeVisity->family->close_relatives as $key => $val): ?>
            <tr id="familiar<?= $key ?>">
            <td><input type="text" name="family[close_relatives][<?= $key ?>][name]" value="<?= $val->name ?>" required></td>
            <td><input type="text" name="family[close_relatives][<?= $key ?>][last_name]" value="<?= $val->last_name ?>" required></td>
            <td><select name="family[close_relatives][<?= $key ?>][relationship]"  required>
                 <option value="ESPOSO (A)" <?php if($val->relationship=="ESPOSO (A)"){ echo"selected"; } ?> >ESPOSO (A)</option>
                <option value="HIJO (A)" <?php if($val->relationship=="HIJO (A)"){ echo"selected"; } ?>>HIJO( A)</option>
                <option value="PADRE" <?php if($val->relationship=="PADRE"){ echo"selected"; } ?>>PADRE</option>
                <option value="MADRE" <?php if($val->relationship=="MADRE"){ echo"selected"; } ?>>MADRE</option>
                <option value="HERMANO (A)" <?php if($val->relationship=="HERMANO (A)"){ echo"selected"; } ?>>HERMANO (A)</option>
                <option value="ABUELO (A)" <?php if($val->relationship=="ABUELO (A)"){ echo"selected"; } ?>>ABUELO (A)</option>
                <option value="TIO (A)" <?php if($val->relationship=="TIO (A)"){ echo"selected"; } ?> >TIO (A)</option>
                <option value="SOBRINO (A)" <?php if($val->relationship=="SOBRINO (A)"){ echo"selected"; } ?>>SOBRINO (A)</option>
                <option value="PRIMO (A)" <?php if($val->relationship=="PRIMO (A)"){ echo"selected"; } ?> >PRIMO (A)</option>
                <option value="SUEGRO (A)" <?php if($val->relationship=="SUEGRO (A)"){ echo"selected"; } ?>>SUEGRO (A)</option>
                <option value="AMIGO (A)" <?php if($val->relationship=="AMIGO (A)"){ echo"selected"; } ?>>AMIGO (A)</option>
                <option value="OTROS" <?php if($val->relationship=="OTROS"){ echo"selected"; } ?>>OTROS</option>
            </select></td>
            <td><input type="number" name="family[close_relatives][<?= $key ?>][age]" value="<?= $val->age ?>" required min="0" max="110"></td>
            <td><input type="text" name="family[close_relatives][<?= $key ?>][cc]" value="<?= $val->cc ?>" required></td>
            <td><input type="text" name="family[close_relatives][<?= $key ?>][occupation]" value="<?= $val->occupation ?>" required></td>
            <td><input type="text" name="family[close_relatives][<?= $key ?>][address]" value="<?= $val->address ?>" required></td>
            <td><input type="button" value="X" onclick="eliminarFamiliar(<?= $key ?>);"></td>
            </tr>
            <script type="text/javascript"> var f = <?php echo $key+1; ?>;</script>
            <?php endforeach; ?>
        </table>
        <?php
            echo $this->Form->control('family.family_information_analysis', ['type' => 'textarea','required' => true, 'label' => 'Analisis Información Familiar']);
        
        ?>
    </fieldset>
   
   
   
    <?= $this->Form->button(__('Guardar')) ?>
    <?= $this->Form->end() ?>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script> 

<script type="text/javascript">
$(document).ready(function(){
    $("#addMoreSalida").click(function(){
        agregar();
     }); 
    $("#addEstudios").click(function(){
        agregarEstudios();
     }); 
    $("#addIntegrante").click(function(){
        agregarIntegrante();
     });
     $("#addFamiliar").click(function(){
        agregarFamiliar();
     });  
});



function agregar(){

    var fila = '<tr id="fila'+x+'">';
        fila += '<td><input type="text" name="character[departures]['+x+'][place]" ></td>';
        fila += '<td><input type="date" name="character[departures]['+x+'][date]" ></td>';
        fila += '<td><input type="text" name="character[departures]['+x+'][time_stay]" > </td>';
        fila += '<td><input type="text" name="character[departures]['+x+'][reason]" > </td>';
        fila += '<td><input type="button" value="X" onclick="eliminar('+x+');"> </td>';
        fila += '</tr>';
x++;
$('#tbSalidas').append(fila);
}

function agregarEstudios(){

    var estudio = '<tr id="estudio'+y+'">';
        estudio += '<td><select name="academic_information[studies]['+y+'][studies]" class="form-control" required="true">';
        estudio += ' <option value="" disabled selected >NIVEL ESTUDIO</option>';
        estudio += ' <option value="PRIMARIA">PRIMARIA</option>';
        estudio += ' <option value="BACHILLER">BACHILLER</option>';
        estudio += ' <option value="TECNICO">TECNICO</option>';
        estudio += ' <option value="TECNOLOGICO">TECNOLOGICO</option>';
        estudio += ' <option value="UNIVERSITARIO">UNIVERSITARIO</option>';
        estudio += ' <option value="POSTGRADO">POSTGRADO</option>';
        estudio += ' <option value="OTROS">OTROS</option>';
        estudio += '</select></td>';
        estudio += '<td><input type="text" name="academic_information[studies]['+y+'][name_institution]"></td>';
        estudio += '<td><input type="text" name="academic_information[studies]['+y+'][obtained_title]" ></td>';
        estudio += '<td><input type="date" name="academic_information[studies]['+y+'][date]" ></td>';
        estudio += '<td><input type="text" name="academic_information[studies]['+y+'][city]" ></td>';
        estudio += '<td><input type="text" name="academic_information[studies]['+y+'][registry_number]" ></td>';
        estudio += '<td><input type="button" value="X" onclick="eliminarEstudios('+y+');"> </td>';
        estudio += '</tr>';
y++;
$('#tbEstudios').append(estudio);
}
function agregarIntegrante(){

    var integrante = '<tr id="integrante'+z+'">';
        integrante += '<td><input type="text" name="family[relatives]['+z+'][name]" class="form-control" required></td>';
        integrante += '<td><input type="text" name="family[relatives]['+z+'][last_name]" class="form-control" required></td>';
        integrante += '<td><select name="family[relatives]['+z+'][relationship]" class="form-control" required>';
        integrante += '    <option value="" disabled selected >PARENTESCO</option>';
        integrante += '    <option value="ESPOSO (A)">ESPOSO (A)</option>';
        integrante += '    <option value="HIJO (A)">HIJO( A)</option>';
        integrante += '    <option value="PADRE">PADRE</option>';
        integrante += '    <option value="MADRE">MADRE</option>';
        integrante += '    <option value="HERMANO (A)">HERMANO (A)</option>';
        integrante += '    <option value="ABUELO (A)">ABUELO (A)</option>';
        integrante += '    <option value="TIO (A)">TIO (A)</option>';
        integrante += '    <option value="SABRINO (A)">SABRINO (A)</option>';
        integrante += '    <option value="PRIMO (A)">PRIMO (A)</option>';
        integrante += '    <option value="SUEGRO (A)">SUEGRO (A)</option>';
        integrante += '    <option value="AMIGO (A)">AMIGO (A)</option>';
        integrante += '    <option value="OTROS">OTROS</option>';
        integrante += '</select></td>';
        integrante += '<td><input type="number" name="family[relatives]['+z+'][age]" class="form-control" required min="0" max="110"></td>';
        integrante += '<td><input type="text" name="family[relatives]['+z+'][cc]" class="form-control" required></td>';
        integrante += '<td><input type="text" name="family[relatives]['+z+'][occupation]" class="form-control" required></td>';
        integrante += '<td><input type="text" name="family[relatives]['+z+'][phone]" class="form-control" required></td>';
        integrante += '<td ><input type="button" value="X" onclick="eliminarIntegrante('+z+');"> </td>';
        integrante += '</tr>';
z++;
$('#tbIntegrantes').append(integrante);
}
function agregarFamiliar(){

    var familiar = '<tr id="familiar'+f+'">';
        familiar += '<td><input type="text" name="family[close_relatives]['+f+'][name]" class="form-control" required></td>';
        familiar += '<td><input type="text" name="family[close_relatives]['+f+'][last_name]" class="form-control" required></td>';
        familiar += '<td><select name="family[close_relatives]['+f+'][relationship]" class="form-control" required>';
        familiar += '    <option value="" disabled selected >PARENTESCO</option>';
        familiar += '    <option value="ESPOSO (A)">ESPOSO (A)</option>';
        familiar += '    <option value="HIJO (A)">HIJO( A)</option>';
        familiar += '    <option value="PADRE">PADRE</option>';
        familiar += '    <option value="MADRE">MADRE</option>';
        familiar += '    <option value="HERMANO (A)">HERMANO (A)</option>';
        familiar += '    <option value="ABUELO (A)">ABUELO (A)</option>';
        familiar += '    <option value="TIO (A)">TIO (A)</option>';
        familiar += '    <option value="SABRINO (A)">SABRINO (A)</option>';
        familiar += '    <option value="PRIMO (A)">PRIMO (A)</option>';
        familiar += '    <option value="SUEGRO (A)">SUEGRO (A)</option>';
        familiar += '    <option value="AMIGO (A)">AMIGO (A)</option>';
        familiar += '    <option value="OTROS">OTROS</option>';
        familiar += '</select></td>';
        familiar += '<td><input type="number" name="family[close_relatives]['+f+'][age]" class="form-control" required min="0" max="110"></td>';
        familiar += '<td><input type="text" name="family[close_relatives]['+f+'][cc]" class="form-control" required></td>';
        familiar += '<td><input type="text" name="family[close_relatives]['+f+'][occupation]" class="form-control" required></td>';
        familiar += '<td><input type="text" name="family[close_relatives]['+f+'][address    ]" class="form-control" required></td>';
        familiar += '<td ><input type="button" value="X" onclick="eliminarFamiliar('+f+');"> </td>';
        familiar += '</tr>';
f++;
$('#tbFamiliares').append(familiar);
}
function eliminar(index) {
    $("#fila" + index).remove();
}
function eliminarEstudios(index) {
    $("#estudio" + index).remove();
}
function eliminarIntegrante(index) {
    $("#integrante" + index).remove();
}
function eliminarFamiliar(index) {
    $("#familiar" + index).remove();
}
</script>