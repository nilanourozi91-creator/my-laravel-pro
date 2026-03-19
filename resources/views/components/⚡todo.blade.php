<?php

use Livewire\Component;

new class extends Component
{
    public $name='ali';
    // public $date=date();
};
?>

<div>
     <h1>
        hi {{ $name }}
     </h1>
</div>