<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Zone;
use Livewire\WithPagination;

class Zones extends Component
{

    use WithPagination;

    public $Unoccupied;
    public $barcodeNumber;
    public $zone;
    public $confirmTPDelete;
    public $confirmTPAdd;
    public $q;
    public $queryString = [
        'Unoccupied' => ['except' => false],
        'q' => ['except' => '']

    ];

    protected $rules =[
        'zone.name' => 'required|string|min:4',
        'zone.address' => 'required|string|min:4',
        'zone.zone_id' => 'required',
        'zone.ward_id' => 'required',
        'zone.community_id' => 'required',

    ];

    public function render()
    {
        // $zones = Zone::where('id','!=', 0)
        // ->when($this->Unoccupied, function( $query) {
        //     return $query->where('use', "U");
        // } )
        // ->paginate(10); 
        
        
        // $zones = Zone::where('id','!=', 0)
        // ->when($this->Unoccupied, function( $query) {
        //     return $query->unOccupied();
        // } )
        // ->paginate(10);

        // $zones = Zone::where('id','!=', 0)
        // ->when($this->Unoccupied, function( $query) {
        //     return $query->unOccupied();
        // } );


        $zones = Zone::where('id','!=', 0)
        ->when($this->q, function( $query) {
            return $query->where(function( $query) {
                $query->where('zone_name', 'like', '%'.$this->q. '%')
                ->orWhere('email', 'like', '%'.$this->q. '%')
                ->orWhere('address', 'like', '%'.$this->q. '%')
                ;
            } );
        } )


        ->when($this->Unoccupied, function( $query) {
            return $query->unOccupied();
        } );


        $query =  $zones->toSql();
        $zones =  $zones->paginate(10);






        return view('livewire.zones', [
            'zones' => $zones,
            'query' => $query
        
        ]);
    }

    public function updatingUnoccupied(){
        $this-> resetPage();
    }



    public function updatingQ(){
        $this-> resetPage();
    }


    public function confirmTPDeletion( $id){
        $this->confirmTPDelete = $id;

    }



    public function deleteTP(Zone $zone){
        $zone-> delete();
        $this->confirmTPDelete = false;
    }



    public function confirmTPAdd(){

        $this->reset(['zone']) ;
        $this->confirmTPAdd = true;

    }



    public function addTP(){
        // $this->zone['zone_id'] = $this->generateBarcodeNumber();
  dd($this->zone);
        $validatedData = $this->validate();

        // $validatedDate = $this->validate([

        //     'title' => 'required',

        //     'body' => 'required',

        // ]);

//   dd($validatedData);

        Zone::create($validatedData);

  

        session()->flash('message', 'Post Created Successfully.');

  

        $this->resetInputFields();


        $this->confirmTPAdd = false;
    }




    // protected function prepareForValidation()
    // {
    //     $zone['zone_id'] = $this->generateBarcodeNumber();
    //     return $zone;
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
        return Zone::where('zone_id', '=', $number)->first();
    }



    
}
