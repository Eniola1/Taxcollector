


<div class="p-6 sm:px-20 bg-white border-b border-gray-200">

<div class="mt-8 ">


    Welcome to your Taxpayers application!


    <div class="flex justify-between">


    <!-- <div> </div> -->
    <div> 
        <x-jet-button wire:click="confirmTPAdd">
            {{ __('Add New') }}
        </x-jet-button>
    
    </div>


        <div class="p-1">
          <!-- <label for="email-address" class="sr-only">Email address</label> -->
          <input wire:model.debounce.500ms="q" id="search" name="search" type="search" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="search">
        </div>



    <div class="ms-2"> 
        <input type="checkbox" class="mr-2 leading-tight" wire:model="Unoccupied" /> Large

    <div> </div>

    </div>
    </div>



</div>

{{ $query }}


<!-- This example requires Tailwind CSS v2.0+ -->
<div class="flex flex-col">
  <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
      <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
        <table class="min-w-full divide-y divide-gray-200">
          <thead class="bg-gray-50">
            <tr>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                ID
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
              Name
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Address
              </th>


              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Tax ID
              </th>

@if(!$Unoccupied)
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Class
              </th>
@endif
<!-- 
              <th scope="col" class="relative px-6 py-3">
                <span class="sr-only">Edit</span>
              </th> -->

              
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Action
              </th>


            </tr>


          </thead>



          <tbody class="bg-white divide-y divide-gray-200">


          @foreach($taxpayers as $taxpayer)




            <tr>

                <td class="px-6 py-4 whitespace-nowrap">
                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                    {{ $taxpayer->id }}
                    </span>
                </td>


              <td class="px-6 py-4 whitespace-nowrap">
                <div class="flex items-center">
                  <div class="flex-shrink-0 h-10 w-10">
                    <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60" alt="">
                  </div>
                  <div class="ml-4">
                    <div class="text-sm font-medium text-gray-900">
                    {{ $taxpayer->taxpayer_name }}
                    </div>
                    <div class="text-sm text-gray-500">
                    {{ $taxpayer->email }}
                    </div>
                  </div>
                </div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm text-gray-900">{{ $taxpayer->address }}</div>
                <div class="text-sm text-gray-500">{{ $taxpayer->use }}</div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                {{ $taxpayer->taxpayer_id }}
                </span>
              </td>


              @if(!$Unoccupied)

              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
              {{ $taxpayer->buildingtype }}
              </td>

@endif
              <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                
            <x-jet-danger-button wire:click="confirmTPDeletion({{ $taxpayer->id }})" wire:loading.attr="disabled">
                {{ __('Delete') }}
            </x-jet-danger-button>
              </td>
            </tr>


            @endforeach


            <!-- More people... -->
          </tbody>
        </table>

        <div class="mt-4">
        {{ $taxpayers->links() }}
        </div>




        
        <!-- Delete User Confirmation Modal -->
        <x-jet-dialog-modal wire:model="confirmTPDelete">
            <x-slot name="title">
                {{ __('Delete TP') }}
            </x-slot>

            <x-slot name="content">
                {{ __('Are you sure t.') }}

            </x-slot>

            <x-slot name="footer">
                <x-jet-secondary-button wire:click="$set('confirmTPDelete', false)" wire:loading.attr="disabled">
                    {{ __('Cancel') }}
                </x-jet-secondary-button>

                <x-jet-danger-button class="ml-3" wire:click="deleteTP({{ $confirmTPDelete }})" wire:loading.attr="disabled">
                    {{ __('Delete TP') }}
                </x-jet-danger-button>
            </x-slot>
        </x-jet-dialog-modal>





        
        <!-- Delete User Confirmation Modal -->
        <x-jet-dialog-modal wire:model="confirmTPAdd">
            <x-slot name="title">
                {{ __('Add TP') }}
            </x-slot>

            <x-slot name="content">


<div class="hidden sm:block" aria-hidden="true">
  <div class="py-5">
    <div class="border-t border-gray-200"></div>
  </div>
</div>

<div class="mt-10 sm:mt-0">
  <div class="md:grid md:grid-cols-3 md:gap-6">
    <div class="md:col-span-1">
      <div class="px-4 sm:px-0">
        <h3 class="text-lg font-medium leading-6 text-gray-900">TaxPayer Information</h3>
        <p class="mt-1 text-sm text-gray-600">
          Use a permanent address where you can receive mail.
        </p>
      </div>
    </div>
    <div class="mt-5 md:mt-0 md:col-span-2">
      <form action="#" method="POST">
        <div class="shadow overflow-hidden sm:rounded-md">
          <div class="px-4 py-5 bg-white sm:p-6">
            <div class="grid grid-cols-6 gap-6">
              <div class="col-span-6 sm:col-span-3">


                <x-jet-label for="taxpayer_name" value="{{ __('Name') }}" />
                <x-jet-input  wire:model="taxpayer.taxpayer_name" id="taxpayer_name" type="text" name="taxpayer_name" id="taxpayer_name" autocomplete="taxpayer_name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                <x-jet-input-error for="taxpayer_name" class="mt-1" />

              </div>

              <div class="col-span-6 sm:col-span-3">

                <x-jet-label for="address" value="{{ __('Address') }}" />
                <x-jet-input  wire:model="taxpayer.address" id="address" type="text" name="address" autocomplete="taxpayer_name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                <x-jet-input-error for="address" class="mt-1" />

              </div>


              <div class="col-span-6 sm:col-span-3">

                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input  wire:model="taxpayer.email" id="email" type="text" name="email" autocomplete="taxpayer_name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                <x-jet-input-error for="email" class="mt-1" />

              </div>

              <div class="col-span-6 sm:col-span-3">

                <x-jet-label for="phone" value="{{ __('Telephone') }}" />
                <x-jet-input  wire:model="taxpayer.phone" type="text" name="phone" id="phone" autocomplete="taxpayer_name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                <x-jet-input-error for="phone" class="mt-1" />

              </div>

              <!-- <div class="col-span-6 sm:col-span-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input  wire:model="taxpayer.taxpayer_email" id="taxpayer.taxpayer_name" type="text" name="email" id="email" autocomplete="email" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
              </div>

              <div class="col-span-6 sm:col-span-3">
                <label for="last-name" class="block text-sm font-medium text-gray-700">Telephone</label>
                <input  wire:model="taxpayer.taxpayer_telephone" id="taxpayer.taxpayer_name" type="text" name="last-name" id="last-name" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
              </div>

              <div class="col-span-6">
                <label for="address" class="block text-sm font-medium text-gray-700">Street address</label>
                <input  wire:model="taxpayer.address" id="taxpayer.address" type="text" name="address" autocomplete="address" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
              </div> -->

              <!-- <div class="col-span-6 sm:col-span-3">
                <label for="country" class="block text-sm font-medium text-gray-700">Country</label>
                <select id="country" name="country" autocomplete="country-name" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                  <option>United States</option>
                  <option>Canada</option>
                  <option>Mexico</option>
                </select>
              </div> -->

              <div  wire:model="zoneSelected" class="col-span-6 sm:col-span-3">
                <label for="zone" class="block text-sm font-medium text-gray-700">Zone</label>
                <select wire:model="taxpayer.zone_id" id="taxpayer.zone_id" name="zone" autocomplete="zone-name" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                <option value="" disabled selected>Select your option</option>
                @foreach($zones as $zone)

                <option value = {{ $zone->id }}>{{ $zone->zone_name }}</option>
                <!-- <option>{{ $zone->zone_name }}</option> -->

                @endforeach

                </select>
              </div>


              @if($wardArray)

              <div  wire:model="wardSelected" class="col-span-6 sm:col-span-3">
                <label for="ward" class="block text-sm font-medium text-gray-700">Ward</label>
                <select wire:model="taxpayer.ward_id" id="taxpayer.ward_id" name="ward" autocomplete="ward-name" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">

                <option value="" disabled selected>Select your option</option>
                @foreach($wardArray as $ward)

                <option value = {{ $ward->id }}>{{ $ward->ward_name }}</option>
                <!-- <option>{{ $ward->ward_name }}</option> -->

                @endforeach
                </select>
              </div>


              @endif


              @if($townArray)

              <div  wire:model="townSelected" class="col-span-6 sm:col-span-3">
                <label for="town" class="block text-sm font-medium text-gray-700">Town</label>
                <select  wire:model="taxpayer.community_id" id="taxpayer.community_id" name="town" autocomplete="town-name" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">

                <option value="" disabled selected>Select your option</option>
                @foreach($townArray as $town)

                <option value = {{ $town->id }}>{{ $town->community_name }}</option>
                <!-- <option>{{ $town->ward_name }}</option> -->

                @endforeach
                </select>
              </div>









              <div class="col-span-6">

                <label for="street-address" class="block text-sm font-medium text-gray-700">Street address</label>



                <label class="block text-left" style="max-width: 300px">
                  <span   wire:model="multiselectClassName"  class="text-gray-700">
                     @if($multiselectClassName)
                        @foreach($multiselectClassName as $class)
                        * {{ $class }} <br>
                        @endforeach
                     @endif

                  </span>
                  <select wire:model="multiselectClass" class="form-multiselect block w-full mt-1" multiple>
                  @if($classifications)
                    @foreach($classifications as $classification)

                    <option value = {{ $classification->id }}> {{ $classification->classification_name }} </option>

                    @endforeach
                   @endif


                  </select>
                </label>
              </div>


              
              <div  class="col-span-6 sm:col-span-3">
                <label for="usage" class="block text-sm font-medium text-gray-700">usage</label>
                <select  wire:model="taxpayer.use" id="use" name="town" autocomplete="usage-name" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">

                <option value="" disabled selected>Select your option</option>
                <option value="E">Empty</option>
                <option value="O"> Occupied</option>
                <option value="U">Uuder Construction</option>

                </select>
              </div>





              @endif


            </x-slot>

            <x-slot name="footer">
                <x-jet-secondary-button wire:click="$set('confirmTPAdd', false)" wire:loading.attr="disabled">
                    {{ __('Cancel') }}
                </x-jet-secondary-button>

                <x-jet-danger-button class="ml-3" wire:click="addTP()" wire:loading.attr="disabled">
                    {{ __('Save TP') }}
                </x-jet-danger-button>
            </x-slot>
        </x-jet-dialog-modal>







      </div>
    </div>
  </div>
</div>
</div>
