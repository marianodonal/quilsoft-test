<?php
echo $this->Form->create(null, ['type' => 'get', 'url' => ['controller' => 'Articles', 'action' => 'index']]);
echo $this->Form->control('search', ['type' => 'search', 'label' => false, 'value' => $this->request->getQuery('search'), 'placeholder' => __('Search'), 'help' => $this->request->getQuery('search') ? $this->Html->link(__('Clean filters'), ['action' => 'index']) : '']);
echo $this->Form->end();
