<div class="inspections view large-12 medium-12 columns content">
   
    <?= $this->Form->create(null, [ 'url' => ['controller' => 'Answers', 'action' => 'add'], 'enctype' => 'multipart/form-data']); ?>

    <?php foreach ($systems as $cat): ?>
        <h2 align="center"><?= h($cat['name']) ?></h2> 
        <?php foreach ($cat['components'] as $sub): ?>
            <h3 align="center"><?= h($sub['name']) ?></h3>  
            <?php foreach ($sub['elements'] as $gro): ?>
                <h4><?= h($gro['name']) ?></h4>  
                <?php $count=1; ?>
                <?php foreach ($gro['controls'] as $con): ?>
                    <h5><?= h($count." - ".$con['name']) ?></h5>   
                    <p style="margin-left: 30px">
                    <?php 
echo '
    <input type="radio" name="'.$cat['id'].'['.$sub['id'].']['.$gro['id'].']['.$con["id"].'][answer]" value="Si" required> Si <br>    
    <input type="radio" name="'.$cat['id'].'['.$sub['id'].']['.$gro['id'].']['.$con["id"].'][answer]" value="No"> No <br> 
   <input type="radio" name="'.$cat['id'].'['.$sub['id'].']['.$gro['id'].']['.$con["id"].'][answer]" value="N/A"> N/A<br> 
   <textarea name="'.$cat['id'].'['.$sub['id'].']['.$gro['id'].']['.$con["id"].'][description]" id="descrip" ></textarea><br>
    <input type="file"name="'.$cat['id'].'['.$sub['id'].']['.$gro['id'].']['.$con["id"].'][file]" id="file">


';

                     ?> 
                    </p>
                <?php $count++;?>  
                <?php endforeach; ?>
            <?php endforeach; ?>
        <?php endforeach; ?>   
    <?php endforeach; ?>
    <?php  echo '<input type="hidden" name="inspection_id" value="'.$inspection_id.'">'; ?>

    <?= $this->Form->button(__('Continuar')) ?>
    <?= $this->Form->end() ?> 
</div>  