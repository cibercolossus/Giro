<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<?= $this->Html->css('login') ?>

<div class="container">

<div class="row" style="margin-top:20px">
    <div class="large-6 medium-6 columns">
        <?= $this->Flash->render('auth') ?>
        <?= $this->Form->create() ?>
            <fieldset>
                <h2>Ingrese sus datos</h2>
                <hr class="colorgraph">
                <div class="form-group">
                    <?= $this->Form->control('email', ['placeholder' => 'Correo electrónico', 'label' => false, 'required']) ?>
                </div>
                <div class="form-group">
                    <?= $this->Form->control('password', ['placeholder' => 'Contraseña', 'label' => false, 'required']) ?>
                </div>
                <hr class="colorgraph">
                <div class="row">
                    <div>
                        <?= $this->Form->button('Acceder') ?>
                    </div>
                </div>
            </fieldset>
        <?= $this->Form->end() ?>
    </div>
</div>

</div>

<script type="text/javascript">
    $(function(){
    $('.button-checkbox').each(function(){
        var $widget = $(this),
            $button = $widget.find('button'),
            $checkbox = $widget.find('input:checkbox'),
            color = $button.data('color'),
            settings = {
                    on: {
                        icon: 'glyphicon glyphicon-check'
                    },
                    off: {
                        icon: 'glyphicon glyphicon-unchecked'
                    }
            };

        $button.on('click', function () {
            $checkbox.prop('checked', !$checkbox.is(':checked'));
            $checkbox.triggerHandler('change');
            updateDisplay();
        });

        $checkbox.on('change', function () {
            updateDisplay();
        });

        function updateDisplay() {
            var isChecked = $checkbox.is(':checked');
            // Set the button's state
            $button.data('state', (isChecked) ? "on" : "off");

            // Set the button's icon
            $button.find('.state-icon')
                .removeClass()
                .addClass('state-icon ' + settings[$button.data('state')].icon);

            // Update the button's color
            if (isChecked) {
                $button
                    .removeClass('btn-default')
                    .addClass('btn-' + color + ' active');
            }
            else
            {
                $button
                    .removeClass('btn-' + color + ' active')
                    .addClass('btn-default');
            }
        }
        function init() {
            updateDisplay();
            // Inject the icon if applicable
            if ($button.find('.state-icon').length == 0) {
                $button.prepend('<i class="state-icon ' + settings[$button.data('state')].icon + '"></i> ');
            }
        }
        init();
    });
});
</script>