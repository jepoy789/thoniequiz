

    <h3>Order Detail</h3>
                    <table class="table table-bordered">
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Order Id') ?></th>
                            <!-- <th><?= __('Item Id') ?></th> -->
                            <th><?= __('Quantity') ?></th>
                        </tr>
                        <?php foreach ($order->order_details as $orderDetails) : ?>
                        <tr>
                            <td><?= h($orderDetails->id) ?></td>
                            <!-- <td><?= h($orderDetails->order_id) ?></td> -->
                            
                        <?php foreach ($order->items as $key => $items) : ?>
                            <td><?= h($items->name) ?></td>
                        <?php endforeach ?>

                            <td><?= h($orderDetails->quantity) ?></td>
                          
                        </tr>
                        <?php endforeach; ?>
                    </table>
        </div>
    </div>
</div>
