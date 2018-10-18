<?php
    // app/View/Elements/selects_depend.ctp

  $empty = (isset($empty) ? $empty : false);
  $selector_class = (isset($selector_class) ? $selector_class : 'select_depend');
  $loader_text = (isset($loader_text) ? $loader_text : 'Loading...');
?>

<?php echo $this->Html->scriptStart(array('inline'=>false)); ?>
  $('<?php echo '.'.$selector_class; ?>').change(function(){
    var selects_depend = function($current, url){
      var $child = $("#"+$current.data('child'));
      $.ajax({
        url : url + '/' + $current.data('child') + '/' + $current.val(),
        dataType : 'json',
        success : function(json) {
          $child.empty(); // remove old options
          <?php if($empty !== false) echo '$child.append($("<option></option>").attr("value", "").text("'.$empty.'"));'; ?>
          $.each(json, function(value,key) {
            $child.append($("<option></option>")
               .attr("value", value).text(key));
          });
          if (typeof $child.data('child') !== "undefined") {
            selects_depend($child, url);
          }
        },
        beforeSend: function(){
          $child.prop('disabled', true);
          $child.empty(); // remove old options
          $child.append($("<option></option>").attr("value", "").text('<?php echo $loader_text;?>'));
        },
        error : function(xhr, status) {
          concole.log(xhr);
          concole.log(status);
          $child.empty(); // remove old options
        },
        complete : function(xhr, status) {
          $child.prop('disabled', false);
        }
      });
    }
    selects_depend($(this), '<?php echo $this->Html->url($url); ?>');
  });
<?php echo $this->Html->scriptEnd(); ?>