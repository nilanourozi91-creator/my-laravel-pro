<?php

use App\Models\library;
use App\Models\myLibrary;
use Livewire\Component;

new class extends Component
{
    public $book;
    public $modeal=false;
    public $bookId=null;
     public function mount(){
     $this->book=myLibrary::all();
     }
     public function deleteBook($id){
          $this->bookId=$id;
          $this->modeal=true;
       
     }
      public function deleteBooks($id)
{
    $this->bookId = $id;

    $book = myLibrary::find($id);

    if ($book) {
        $book->delete();
    }

    // refresh list
    $this->book = myLibrary::all();

    // close modal
    $this->modeal = false;
}
       
      public function cencal($id){
          $this->bookId=$id;
          $this->modeal=false;
       
     }
};
?>

<div>
   <div class="h-screen w-full justify-between  flex flex-wrap">
    @foreach($book as $b)
         <div class="text-xl bg-gray-800 text-center h-50 w-80 hover:bg-gray-900  hover:border-amber-300 border text-white border-white p-3 m-3 rounded-2xl">
           
            <h1>
                <svg xmlns="http://www.w3.org/2000/svg" 
    class="w-12 h-12 text-blue-400 inline" 
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
              <button wire:click="deleteBook({{ $b->id }})" class=" px-5 py-2  text-white   rounded-2xl bg-blue-600">Delete</button>
         </div>
        @endforeach
        @if ($modeal)
             <div class="h-40 w-70 absolute top-1/2 left-1/2 -translate-1/2 bg-white/55 z-50 rounded-3xl border-amber-300">
                   <div class=" px-6 py-3 flex items-center justify-center">
                    <div class="text-xl text-blue-500">Are you sure you want delete this book?</div>
                   </div> 
                    <!-- <div class="flex justify-between items-center text-sm px-4 py-2">
                       <button wire:click="deleteBooks({{$b->id }})" class="border border-blue-900 px-3 py-2 rounded-2xl bg-blue-700/30">Cencel</button>
                       <button wire:click="cencal({{ $b->id }})" class="border border-blue-900 px-3 py-2 rounded-2xl bg-blue-700/30">Delete</button>
                    </div> -->
                    <div class="flex justify-between items-center text-sm px-4 py-2">

    <!-- Cancel -->
    <button wire:click="cencal"
        class="border border-blue-900 px-3 py-2 rounded-2xl bg-blue-700/30">
        Cancel
    </button>

    <!-- Delete -->
    <button wire:click="deleteBooks({{ $bookId }})"
        class="border border-red-900 px-3 py-2 rounded-2xl bg-red-500/50">
        Delete
    </button>

</div>
                   
             </div>
        @else
             
        @endif
   </div>
</div>