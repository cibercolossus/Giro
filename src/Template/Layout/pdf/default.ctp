<!DOCTYPE html>
<html>
<head>
    <title></title>

<style type="text/css">
    .rectangulo {
     margin-left: 20px; 
     width: 3cm; 
     height: 4cm; 
     border: 3px solid #555;
    }
    body{
        font-family: 'arial';
        font-size: 13px;
    }
    th{

    }
</style>

</head>
<body>
    <header>
        <table width="100%" border="1" cellpadding="7" cellspacing="1">
            <tr  >
                <th width="20%" rowspan="4"><?php echo $this->Html->image('logo.png'); ?></th>
                <th width="60%">MASTER SECURITY CONSULTING S.A.S</th>
                <th width="20%"> Codigo: FO-210-002 </th>
            </tr>
            <tr >
              
                <th width="60%">VISITA DOMICILIARIA </th>
                <th width="20%"> Version : 2 </th>
            </tr>
            <tr >
           
                <th width="60%" rowspan="2">LA SEGURIDAD EN MANOS DE PROFESIONALES CON EDUCACION FORMAL Y EXPERIENCIA REAL</th>
                <th width="20%"> Emicion : 2016 </th>
            </tr>
            <tr >
                <th width="20%"> Pagina : 1 de 11</th>
            </tr>
        </table>
    </header>
     <div id="container">
        <div id="content">
            <?= $this->fetch('content') ?>
        </div>
    </div>
</body>
</html>

