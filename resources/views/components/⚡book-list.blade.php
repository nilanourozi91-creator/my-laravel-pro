<?php

use App\Models\myLibrary;
use Livewire\Component;

new class extends Component
{
    public $book;
     public function mount(){
     $this->book=myLibrary::all();
     }
};
?>

<div>
   <div class="h-screen w-full justify-between  flex flex-wrap">
    @foreach($book as $b)
         <div class="text-xl bg-gray-800 text-center h-50 w-80 hover:bg-gray-900  hover:border-amber-200 border text-amber-300 p-3 m-3 rounded-2xl">
           
            <h1>
                <svg xmlns="http://www.w3.org/2000/svg" 
    class="w-12 h-12 text-green-400 inline" 
    fill="none" 
    viewBox="0 0 24 24" 
    stroke="currentColor">

    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
    d="M12 6.253v11.494m0-11.494C10.832 5.477 9.246 5 7.5 5 
    S4.168 5.477 3 6.253v11.494C4.168 16.523 5.754 16 7.5 16 
    s3.332.523 4.5 1.253m0-11.494C13.168 5.477 14.754 5 16.5 5 
    s3.332.477 4.5 1.253v11.494C19.832 16.523 18.246 16 16.5 16 
    s-3.332.523-4.5 1.253"/>
</svg>
            </h1>
             <h1>{{$b->title}}</h1>
            <p>{{$b->author}}</p>
            <p>{{$b->rateing}}</p>
              <button class=" px-5 py-2 text-white  rounded-2xl bg-red-500">Delete</button>
              <button class=" px-5 py-2 text-white  rounded-2xl bg-green-500">Edite</button>
         </div>
        @endforeach
      
   </div>
</div>