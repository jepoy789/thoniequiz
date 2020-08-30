<div class="container">

<a href=<?= $this->Url->Build('/')?>> Home </a>/ Format <br><br>

<?php 
echo $this->Form->create(null, ['url' => ['controller' => 'Format','action' => 'result']]);?>

<p>Hi, Please Choose a type Below:</p>

<?php 
// Add custom radio wrapping HTML
$this->Form->setTemplates([
    'nestingLabel' => '<div id="radio-type" data-toggle="tooltip" data-placement="right" title="Description {{text}}">{{input}} {{text}}</div><br>',
    'formGroup' => '{{input}}',
]);

// Create a radio set with our custom wrapping div.
echo $this->Form->control('type', [
    'type' => 'radio',
    'options' => [
   ['value' => 'Test Desciption 1', 'text' => 'Type 1', 'class' => 'form-check-label'],
   ['value' => 'Test Desciption 2', 'text' => 'Type 2', 'class' => 'form-check-label'],
   ['value' => 'Test Desciption 3', 'text' => 'Type 3', 'class' => 'form-check-label'],
    ]
]);
?>

<?php 
echo $this->Form->button('Save');
echo $this->Form->end();
?>
</div>

<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});
</script>