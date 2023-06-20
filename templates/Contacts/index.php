<h1>Lista de Contatos</h1>
<?= $this->Html->link('Novo contato', ['action' => 'add']) ?>
<table>
    <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>Telefone</th>
        <th>E-mail</th>
        <th>Data</th>
        <th colspan="2">Ações</th>
    </tr>

    <?php foreach ($contacts as $contact): ?>
    <tr>
        <td><?= $contact->id ?></td>
        <td>
            <?= $this->Html->link($contact->name, ['action' => 'view', $contact->id]) ?>
        </td>
        <td>
            <?= h($contact->phone) ?>
        </td>
        <td>
            <?= h($contact->email) ?>
        </td>
        <td>
            <?= $contact->created->format('d/m/Y') ?>
        </td>
        <td>
            <?= $this->Html->link('Editar', ['action' => 'edit', $contact->id]) ?>
        </td>
        <td>
            <?= $this->Form->postLink(
                'Deletar',
                ['action' => 'delete', $contact->id],
                ['confirm' => 'Tem certeza que deseja deletar o contato?'])
            ?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>