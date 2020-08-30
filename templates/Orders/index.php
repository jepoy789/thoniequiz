<style>
 tr.hide-table-padding td {
  padding: 0;
}

.expand-button {
    position: relative;
}

.accordion-toggle .expand-button:after
{
  position: absolute;
  left:.75rem;
  top: 50%;
  transform: translate(0, -50%);
  content: '-';
}
.accordion-toggle.collapsed .expand-button:after
{
  content: '+';
}   
</style>

<div class="container mb-4">
  <h2>Toggleable Tabs</h2>
  <br>
  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#home">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu1">Menu 1</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu2">Menu 2</a>
    </li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div id="home" class="container tab-pane active"><br>
     <table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">S/N</th>
        <th scope="col">Orders Name</th>
      </tr>
    </thead>
    <tbody>
     <?php foreach ($orders as $order): ?>

      <tr class="accordion-toggle collapsed" id="accordion1" data-toggle="collapse" data-parent="#accordion1" href="#collapse<?= $this->Number->format($order->id) ?>">
            <td class="expand-button"></td>
            <!-- <td><?= $this->Number->format($order->id) ?></td> -->
            <td><?= $order->name ?></td>
        </tr>
    <tr class="hide-table-padding">
    <td></td>
    <td colspan="3">
    <div id="collapse<?= $this->Number->format($order->id) ?>" class="collapse in p-3">
      <div class="row">
        <div class="col-2">label</div>
        <div class="col-6">value 1</div>
      </div>
      <div class="row">
        <div class="col-2">label</div>
        <div class="col-6">value 2</div>
      </div>
      <div class="row">
        <div class="col-2">label</div>
        <div class="col-6">value 3</div>
      </div>
      <div class="row">
        <div class="col-2">label</div>
        <div class="col-6">value 4</div>
      </div>
    </div></td>
    </tr>
    <?php endforeach; ?>
    </tr>

        </tbody>
      </table>

    </div>

    <div id="menu1" class="container tab-pane fade"><br>
      <h3>Orders</h3>
    
    <table class="table table-bordered">
        <thead>
            <tr>
                <th style="width:10%">ID</th>
                <th style="width:60%">Name</th>
                <th>Action(Click to view order details)</th>
            </tr>
        </thead>
        <tbody>
     <?php foreach ($orders as $order): ?>
        <tr>
            <td><?= $this->Number->format($order->id) ?></td>
            <td><?= $order->name ?></td>
            <td> <?= $this->Html->link(__('View'), ['action' => 'view', $order->id]) ?></td>
        </tr>
    <?php endforeach; ?>
           
        </tbody>
    </table>

    </div>
    <div id="menu2" class="container tab-pane fade"><br>
      <h3>Menu 2</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
    </div>
  </div>
</div>