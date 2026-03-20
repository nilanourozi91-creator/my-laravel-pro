<?php

use Livewire\Component;

new class extends Component
{
    public $name = 'Nila';
    public $date = 0;
    public $greeting = "";

    public function mount()
    {
        $this->m(); // 👈 call function when component loads
    }

    public function m()
    {
        date_default_timezone_set("Asia/Kabul");

        $this->date = date('H');

        if ($this->date >= 5 && $this->date < 12) {
            $this->greeting = 'Good Morning';
        } 
        elseif ($this->date >= 12 && $this->date < 17) {
            $this->greeting = 'Good Afternoon';
        } 
        elseif ($this->date >= 17 && $this->date < 21) {
            $this->greeting = 'Good Evening';
        } 
        else {
            $this->greeting = 'Good Night';
        }
    }
};
?>

<div>
    <div class=" text-3xl text-black-600/55 w-full flex justify-between items-center h-20">
        Hello i am {{ $name }} and {{ $greeting }}
    </div>
</div>