<?php

namespace App\Http\Livewire;

use App\Models\Ward;
use App\Models\Zone;
use Livewire\Component;
use App\Models\Taxpayer;
use App\Models\Community;
use Livewire\WithPagination;
use App\Models\Classification;

class Taxpayers extends Component
{

    use WithPagination;

    public $useSelected;
    public $zoneSelected;
    public $wardSelected;
    public $townSelected;


    public $multiselectClassName;
    public $multiselectClass;
    public $zoneArray;
    public $wardArray;
    public $townArray;
    public $Unoccupied;
    public $barcodeNumber;
    public $taxpayer;
    public $confirmTPDelete;
    public $confirmTPAdd;
    public $q;
    public $queryString = [
        'Unoccupied' => ['except' => false],
        'q' => ['except' => '']

    ];

    protected $rules =[
        'taxpayer.taxpayer_name' => 'required|string|min:4',
        'taxpayer.address' => 'required|string|min:4',
        'taxpayer.zone_id' => 'required',
        'taxpayer.ward_id' => 'required',
        'taxpayer.community_id' => 'required',

    ];

    public function render()
    {
        // $taxpayers = Taxpayer::where('id','!=', 0)
        // ->when($this->Unoccupied, function( $query) {
        //     return $query->where('use', "U");
        // } )
        // ->paginate(10); 
        
        
        // $taxpayers = Taxpayer::where('id','!=', 0)
        // ->when($this->Unoccupied, function( $query) {
        //     return $query->unOccupied();
        // } )
        // ->paginate(10);

        // $taxpayers = Taxpayer::where('id','!=', 0)
        // ->when($this->Unoccupied, function( $query) {
        //     return $query->unOccupied();
        // } );


        $classifications = Classification::get();
        $zones = Zone::get();
        $taxpayers = Taxpayer::where('id','!=', 0)
        ->when($this->q, function( $query) {
            return $query->where(function( $query) {
                $query->where('taxpayer_name', 'like', '%'.$this->q. '%')
                ->orWhere('email', 'like', '%'.$this->q. '%')
                ->orWhere('address', 'like', '%'.$this->q. '%')
                ->oderBy('id', 'desc')
                ;
            } );
        } )


        ->when($this->Unoccupied, function( $query) {
            return $query->unOccupied();
        } );


        $query =  $taxpayers->toSql();
        $taxpayers =  $taxpayers->paginate(10);






        return view('livewire.taxpayers', [
            'classifications' => $classifications,
            'zones' => $zones,
            'taxpayers' => $taxpayers,
            'query' => $query
        
        ]);
    }

    public function updatingUnoccupied(){
        $this-> resetPage();
    }


    public function updatedZoneSelected(){
        $this->wardArray = Ward::where('zone_id',$this->zoneSelected)->get();
        $this->townArray = false;
        // dd($this->zoneSelected);
        // dd($this->wardArray);
    }



    public function updatedWardSelected(){
        $this->townArray = Community::where('ward_id',$this->wardSelected)->get();
        // dd($this->zoneSelected);
        // dd($this->wardArray);
    }


    public function updatedMultiselectClass(){
        // dd($this->zoneSelected);
        $this->multiselectClassName = Classification::whereIn('id',$this->multiselectClass)->pluck('classification_name');

        // dd($this->multiselectClassName);
    }



    public function updatingQ(){
        $this-> resetPage();
    }


    public function confirmTPDeletion( $id){
        $this->confirmTPDelete = $id;

    }



    public function deleteTP(Taxpayer $taxpayer){
        $taxpayer-> delete();
        $this->confirmTPDelete = false;
    }



    public function confirmTPAdd(){

        // $this->reset(['taxpayer']) ;
        $this->confirmTPAdd = true;

    }



    public function addTP(){
        $this->taxpayer['taxpayer_id'] = $this->generateBarcodeNumber();
//   dd($this->taxpayer);
        $validatedData = $this->validate();

        // $validatedDate = $this->validate([

        //     'title' => 'required',

        //     'body' => 'required',

        // ]);

//   dd($validatedData);

        Taxpayer::create($validatedData);

  

        session()->flash('message', 'Post Created Successfully.');

  

        $this->resetInputFields();


        $this->confirmTPAdd = false;
    }




    // protected function prepareForValidation()
    // {
    //     $taxpayer['taxpayer_id'] = $this->generateBarcodeNumber();
    //     return $taxpayer;
    // }



    // public function resetPage(){
    //     $this-> resetPage();
    // }





    function generateBarcodeNumber() {
        $number = mt_rand(1000000000, 9999999999); // better than rand()
    
        // call the same function if the barcode exists already
        if ($this->barcodeNumberExists($number)) {
            return $this->generateBarcodeNumber();
        }
    
        // otherwise, it's valid and can be used
        return $number;
    }
    
    function barcodeNumberExists($number) {
        // query the database and return a boolean
        // for instance, it might look like this in Laravel
        return Taxpayer::where('taxpayer_id', '=', $number)->first();
    }



    
}
