<h1>Novo Contato</h1>
<?= $this->Html->link('Voltar', ['action' => 'index']) ?>
<?php
    echo $this->Form->create($contact);
    echo $this->Form->control('name', ['label' => __('Nome')]);
    echo $this->Form->control('phone', ['label' => __('Telefone')]);
    echo $this->Form->control('email', ['label' => __('E-mail')]);
    echo $this->Form->button(__('Editar contato'));
    echo $this->Form->end();
?>