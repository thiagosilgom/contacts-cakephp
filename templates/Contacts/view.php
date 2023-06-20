<h1><?= h($contact->name) ?></h1>
<?= $this->Html->link('Voltar', ['action' => 'index']) ?>
<p><strong>Telefone:</strong> <?= $this->Html->link($contact->phone, 'https://api.whatsapp.com/send?phone=' . str_replace(['(',')',' ', '-'], '', $contact->phone), ['target' => '_blank']) ?></p>
<p><strong>E-mail:</strong> <?= $this->Html->link($contact->email, 'mailto:' . $contact->email, ['target' => '_blank']) ?></p>
<p><small>Data: <?= $contact->created->format('d/m/Y') ?></small></p>