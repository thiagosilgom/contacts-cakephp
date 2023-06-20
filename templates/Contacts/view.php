<h1><?= h($contact->name) ?></h1>
<?= $this->Html->link('Voltar', ['action' => 'index']) ?>
<p><strong>Telefone:</strong> <?= h($contact->phone) ?></p>
<p><strong>E-mail:</strong> <?= h($contact->email) ?></p>
<p><small>Data: <?= date('d/m/Y H:i', strtotime($contact->created)) ?></small></p>