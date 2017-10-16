<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="items form">
	<h3 class="title-page"><?= __('Add Item') ?></h3><br>
	<div class="actions">
		<ul>
			<!--<li><?= $this->Html->link(__('List Items'), ['action' => 'index'], ['class' => 'opciones-btn']) ?></li>-->
		</ul>
	</div>

	<div class="editdata">
    <?= $this->Form->create($item) ?>
        <?php

						echo $this->Form->control('name', ['label' => 'Nombre']);
            echo $this->Form->control('itemcategory_id', ['label' => 'Familia'], ['options' => $itemcategories, 'empty' => true]);
            echo $this->Form->control('currency_id', ['label' => 'Moneda'], ['options' => $currencies, 'empty' => true]);
            echo $this->Form->control('model', ['label' => 'Modelo']);
            echo $this->Form->control('color', ['label' => 'Color']);
            echo $this->Form->control('unit_cost', ['label' => 'Costo Unitario']);
            echo $this->Form->control('brand_id', ['label' => 'Marca'], ['options' => $brands, 'empty' => true]);
        ?>

        <h3>Datos de la Factura</h3>
        <?php

            echo $this->Form->control('factura', ['label' => 'Factura']);
            echo $this->Form->control('proveedor', ['label' => 'Proveedor'], ['options' => $suppliers,'empty' => true]);
						echo $this->Form->control('orden_de_compra', ['label' => 'Orden de Compra']);
						echo $this->Form->control('pdf', ['type' => 'file']);
            echo $this->Form->control('xml', ['type' => 'file']);

        ?>

    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
	</div>
</div>


<nav class="left-nav">
    <ul>
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Items'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Itemcategories'), ['controller' => 'Itemcategories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Itemcategory'), ['controller' => 'Itemcategories', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Currencies'), ['controller' => 'Currencies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Currency'), ['controller' => 'Currencies', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Brands'), ['controller' => 'Brands', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Brand'), ['controller' => 'Brands', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Itemcodes'), ['controller' => 'Itemcodes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Itemcode'), ['controller' => 'Itemcodes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Stockmoves Details'), ['controller' => 'StockmovesDetails', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Stockmoves Detail'), ['controller' => 'StockmovesDetails', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Stocks'), ['controller' => 'Stocks', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Stock'), ['controller' => 'Stocks', 'action' => 'add']) ?></li>
    </ul>
</nav>
