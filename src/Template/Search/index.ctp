<?php   echo($this->Form->create(null, ['url' => '/search/results']));
        echo($this->Form->input('search'));
        echo($this->Form->button('Search', ['type' => 'submit']));
        echo($this->Form->end());
?>

