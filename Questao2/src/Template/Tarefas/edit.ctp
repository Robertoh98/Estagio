<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Form->postLink(
                __('Deletar'),
                ['action' => 'delete', $tarefa->ID],
                ['confirm' => __('Você tem certeza que deseja deletar # {0}?', $tarefa->ID)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Lista de Tarefas'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="tarefas form large-9 medium-8 columns content">
    <?= $this->Form->create($tarefa) ?>
    <fieldset>
        <legend><?= __('Editar Tarefa') ?></legend>
        <?php
            echo $this->Form->control('TITULO');
            echo $this->Form->control('DESCRICAO');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Editar')) ?>
    <?= $this->Form->end() ?>
</div>
