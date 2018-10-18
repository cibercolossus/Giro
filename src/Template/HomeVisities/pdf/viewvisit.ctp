<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\HomeVisity $homeVisity
 */
?>
<br>
<div class="rectangulo"><br> <br><p align="center">Fotografia <br> <br>3x4 </p></div>
<br>

<table  WIDTH="100%" border="1" cellpadding="3" cellspacing="1">
	<tr>
		<th  align="left" bgcolor= "#F2F2F2" WIDTH="35%">&nbsp; FECHA DE ELABORACI&Oacute;N</th>
		<td WIDTH="65%">&nbsp; <?=$homeVisity->created->i18nFormat('dd-MM-yyyy')?></td>
	</tr>
</table>
	<h3 align="center"><?= __('1.- INFORMACI&Oacute;N PERSONAL') ?></h3>
<table  WIDTH="100%" border="1" cellpadding="3" cellspacing="1">
	<tr >
		<th align="left" WIDTH="35%" bgcolor= "#F2F2F2" > &nbsp; NOMBRES Y APELLIDOS</th>
		<td WIDTH="65%"> &nbsp;<?= $homeVisity->name.' '.$homeVisity->last_name ?> </td>
		
	</tr>
	<tr>
		<th  align="left" bgcolor= "#F2F2F2" WIDTH="35%" > &nbsp; LUGAR Y FECHA DE NACIMIENTO</th>
		<td WIDTH="65%">
			<table WIDTH="100%">
			<tr>
				<td WIDTH="25%">&nbsp;<?= $homeVisity->character->birth_place ?></td>
				<td WIDTH="15%"><b> Dia: </b><?= $homeVisity->character->birth_date->i18nFormat('dd') ?></td>
				<td WIDTH="15%"><b> Mes: </b><?= $homeVisity->character->birth_date->i18nFormat('MM') ?></td>
				<td WIDTH="20%"><b> A&ntilde;o: </b><?= $homeVisity->character->birth_date->i18nFormat('yyyy') ?></td>
				<td WIDTH="25%"><b> Edad: </b><?= $homeVisity->character->age ?> a&ntilde;os </td>
			</tr>
			</table>		
		</td>
	</tr>
	<tr>
		<th  align="left" WIDTH="35%" bgcolor= "#F2F2F2"  >&nbsp; CEDULA DE CIUDADANIA</th>
		<td WIDTH="65%">&nbsp;<?= $homeVisity->cc ?></td>
	</tr>
	<tr>
		<th  align="left" WIDTH="35%" bgcolor= "#F2F2F2" >&nbsp; FECHA Y  LUGAR DE EXPEDICION </th>
		<td WIDTH="65%">
			<table WIDTH="100%">
			<tr>
				<td WIDTH="40%">&nbsp;<?= $homeVisity->character->expedition_date->i18nFormat('dd-MM-yyyy') ?></td>
				<td WIDTH="60%"><b> De: </b><?= $homeVisity->character->expedition_place ?></td>
			</tr>
			</table>		
		</td>
	</tr>
	<tr>
		<th  align="left" WIDTH="35%" bgcolor= "#F2F2F2" >&nbsp; TIPO DE SANGRE </th>
		<td WIDTH="65%">
			<table WIDTH="100%">
			<tr>
				<td WIDTH="40%">&nbsp;<?= $homeVisity->character->blood_type ?></td>
				<td WIDTH="60%">&nbsp;<b> Estatura: </b><?= $homeVisity->character->height ?> cms</td>
			</tr>
			</table>		
		</td>
	</tr>
	<tr>
		<th  align="left" WIDTH="35%" bgcolor= "#F2F2F2" >&nbsp; SE&Ntilde;ALES PARTICULARES </th>
		<td WIDTH="65%">&nbsp;<?= $homeVisity->character->particular_signs ?></td>
	</tr>
	<tr>
		<th  align="left" WIDTH="35%" bgcolor= "#F2F2F2" >&nbsp; APODO O NOMBRE DE PILA</th>
		<td WIDTH="65%">&nbsp;<?= $homeVisity->character->nickname ?></td>
	</tr>
	<tr>
		<th  align="left" WIDTH="35%" bgcolor= "#F2F2F2" >&nbsp; LICENCIA DE CONDUCCION</th>
		<td WIDTH="65%">
		<?php if ($homeVisity->character->license->number !== '' && $homeVisity->character->license->categories !== ''): ?>
		<table WIDTH="100%">
			<tr>
				<td WIDTH="40%"><b> Numero: </b><br><?=$homeVisity->character->license->number ?></td>
				<td WIDTH="40%"><b> Categorias: </b><br><?=$homeVisity->character->license->categories ?></td>
				<td WIDTH="20%"><b> Multas: </b><br><?=$homeVisity->character->license->fines ? __('Si') : __('No'); ?></td>
			</tr>
		</table>		
		<?php else: ?>
			&nbsp; No refiere
		<?php endif ?>
		</td>
	</tr>
	<tr >
		<th  align="left" WIDTH="35%" bgcolor= "#F2F2F2" >&nbsp; LIBRETA MILITAR</th>
		<td WIDTH="65%">
		<?php if ($homeVisity->character->notebook->number !== '' && $homeVisity->character->notebook->class !== ''): ?>
		<table WIDTH="100%">
			<tr>
				<td WIDTH="33%"><b> Numero: </b><br><?=$homeVisity->character->notebook->number ?></td>
				<td WIDTH="33%"><b> Clase: </b><br><?=$homeVisity->character->notebook->class ?></td>
				<td WIDTH="34%"><b> Distrito Militar: </b><br><?=$homeVisity->character->notebook->military_district ?></td>
			</tr>
		</table>		
		<?php else: ?>
			&nbsp; No refiere
		<?php endif ?>
		</td>
	</tr>
	<tr >
		<th  align="left" WIDTH="35%" bgcolor= "#F2F2F2" >&nbsp; PASAPORTE - VISA</th>
		<td WIDTH="65%">
		<?php if ($homeVisity->character->passport->number !== '' && $homeVisity->character->passport->expiration_date !== ''): ?>
		<table WIDTH="100%">
			<tr>
				<td WIDTH="50%"><b> Numero: </b><br><?=$homeVisity->character->passport->number ?></td>
				<td WIDTH="50%"><b> Vence: </b><br><?=$homeVisity->character->passport->expiration_date ?></td>

			</tr>
		</table>		
		<?php else: ?>
			&nbsp; No refiere
		<?php endif ?>
		</td>
	</tr>
	<tr >
		<th  align="left" WIDTH="35%" bgcolor= "#F2F2F2" >&nbsp; SALIDAS DEL PAIS</th>
		<td WIDTH="65%">
		<?php if ($homeVisity->character->departures !== '' ): ?>
			<ul>
			<?php foreach ($homeVisity->character->departures as $key => $value): ?>
				<li><?= $value->place?>, el <?= $value->date ?>, durante <?= $value->time_stay ?> por <?= $value->reason ?></li>	
			<?php endforeach ?>	
			</ul>	
		<?php else: ?>
			&nbsp; No refiere
		<?php endif ?>
		</td>
	</tr>
	<tr >
		<th  align="left" WIDTH="35%" bgcolor= "#F2F2F2" >&nbsp; No. TELEFONO FIJO - CELULAR </th>
		<td WIDTH="65%">
			<table WIDTH="100%">
			<tr>
				<td WIDTH="50%">&nbsp;<b> Fijo: </b><?= $homeVisity->phone ?></td>
				<td WIDTH="50%">&nbsp;<b> Movil: </b><?= $homeVisity->phone2 ?></td>
			</tr>
			</table>		
		</td>
	</tr>
	<tr>
		<th  align="left" WIDTH="35%" bgcolor= "#F2F2F2" >&nbsp; ESTADO CIVIL </th>
		<td WIDTH="65%">&nbsp; <?= $homeVisity->character->civil_status.' ('.$homeVisity->character->time.') a&ntilde;os' ?></td>
	</tr>
	<tr>
		<th  align="left" WIDTH="35%" bgcolor= "#F2F2F2" >&nbsp; PERSONAS QUE DEPENDEN DE UD. </th>
		<td WIDTH="65%">&nbsp; </td>
	</tr>
	<tr>
		<th  align="left" WIDTH="35%" bgcolor= "#F2F2F2" >&nbsp; PERSONAS CON QUE CONVIVE </th>
		<td WIDTH="65%">&nbsp; </td>
	</tr>
	<tr>
		<th  align="left" WIDTH="35%" bgcolor= "#F2F2F2" >&nbsp; CORREO ELECTRONICO </th>
		<td WIDTH="65%">&nbsp; <?= $homeVisity->character->email ?></td>
	</tr>
	<tr>
		<th  align="left" WIDTH="35%" bgcolor= "#F2F2F2" >&nbsp; PERSONA QUE ATIENDE LA VISITA </th>
		<td WIDTH="65%">&nbsp; </td>
	</tr>
	<tr>
		<th  align="center" WIDTH="100%" colspan="2" bgcolor= "#F2F2F2" >&nbsp; OBSERVACIONES / INFORMACION PERSONAL </th>
	</tr>
	<tr>
		<td WIDTH="100%" colspan="2">&nbsp; <?= $homeVisity->character->observations_personal_information ?></td>
	</tr>
</table>