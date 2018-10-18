<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Answer $answer
 */
?>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/highcharts-3d.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>


<nav class="large-2 medium-2 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Acciones') ?></li>
        <?php if ($current_user['role'] === 'SuperAdministrador' or $current_user['role'] === 'Administrador'): ?>
        <li><?= $this->Html->link(__('Lista Clientes'), ['controller' => 'Clients', 'action' => 'index']) ?></li>
        <?php endif ?>
        <li><?= $this->Html->link(__('Lista Inspecciones'), ['controller' => 'Inspections', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nueva Inspección'), ['controller' => 'Inspections', 'action' => 'add']) ?></li>
    </ul>
</nav>

<div class="results index large-10 medium-10 columns content">
   <?php $cont2=1; ?>
  <?php foreach ($data as $system => $componets): ?>
    <?php $cont=1; ?>
    <h2><?= __($system) ?></h2>
    <?php foreach ($componets as $comp => $val): ?>
      <h4><?= __($cont.' - '.$comp) ?></h4>

       <table class="vertical-table">
          <tr>
              <th scope="row"><?= __('Valor de Encuesta') ?></th>
              <td><?= h($val['vEncuesta']) ?></td>
          </tr>
          <tr>
              <th scope="row"><?= __('Valor de Pregunta') ?></th>
              <td><?= h($val['vPregunta']) ?></td>
          </tr>
          <tr>
              <th scope="row"><?= __('No Aplicaron') ?></th>
              <td><?= h($val['N/A']) ?></td>
          </tr>
          <tr>
              <th scope="row"><?= __('Grado de Protección') ?></th>
              <<td><?= h($val['gProteccion']) ?></td>
          </tr>
          <tr>
              <th scope="row"><?= __('Grado de Riesgo') ?></th>
              <td><?= h($val['gRiesgo']) ?></td>
          </tr>
          <tr>
              <th scope="row"><?= __('Valor Total') ?></th>
              <td><?= h($val['vTotal']) ?></td>
          </tr>
      </table>

      <?php echo '<div id="container'.$cont2.'" style="height: 400px"></div>';?>

      <script type="text/javascript">

        var data = <?php echo json_encode($val['answers']); ?>;
        Highcharts.chart('container'+<?php echo $cont2; ?>, {
            chart: {
                type: 'pie',
                options3d: {
                    enabled: true,
                    alpha: 45,
                    beta: 0
                }
            },
            title: {
                text: '<?= __($comp) ?>'
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    depth: 35,
                    dataLabels: {
                        enabled: true,
                        format: '{point.name}'
                    }
                }
            },
            series: [{
                type: 'pie',
                name: 'Cantidad de Respuestas',
                data: data
            }]
        });
        </script>

            <?php $cont++; ?>
            <?php $cont2++; ?>
            <?php endforeach; ?>
          <?php endforeach; ?>
        </div>
