<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * OrderDetail Entity
 *
 * @property int $id
 * @property int $order_id
 * @property int|null $item_id
 * @property int|null $quantity
 * @property bool|null $valid
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Order $order
 * @property \App\Model\Entity\Item $item
 */
class OrderDetail extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'order_id' => true,
        'item_id' => true,
        'quantity' => true,
        'valid' => true,
        'created' => true,
        'modified' => true,
        'order' => true,
        'item' => true,
    ];
}
