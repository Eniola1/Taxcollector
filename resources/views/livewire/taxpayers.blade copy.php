<div class="p-6 sm:px-20 bg-white border-b border-gray-200">

    <div class="mt-8 text-2xl">
        Welcome to your Taxpayers application!
    </div>



    <div class="mt-6 text-2xl">

<!-- This example requires Tailwind CSS v2.0+ -->
<div class="flex flex-col">
  <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
      <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">


        <table class="min-w-full divide-y divide-gray-600">
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
                Taxpayer ID
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Type
              </th>

              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
              Action
              </th>

<!-- 
              <th scope="col" class="relative px-6 py-3">
                <span class="sr-only">Action</span>
              </th> -->



            </tr>
          </thead>
          <tbody class="bg-white divide-y divide-gray-200">

          @foreach($taxpayers as $taxpayer)

            <tr>

                <td class="border px-4 py-2">{{ $taxpayer->id }}</td>
                <td class="border px-4 py-2">{{ $taxpayer->taxpayer_name }}</td>

                <td class="border px-4 py-2">{{ $taxpayer->address }}</td>

                <td class="border px-4 py-2">{{ $taxpayer->taxpayer_id }}</td>
                <td class="border px-4 py-2">{{ $taxpayer->body }}</td>

                <td class="border px-4 py-2">

                <button wire:click="edit({{ $taxpayer->id }})" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</button>

                    <button wire:click="delete({{ $taxpayer->id }})" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>

                </td>

            </tr>


            <tr>
            <td class="px-6 py-4 whitespace-nowrap">
                <div class="flex items-center">
                <div class="flex-shrink-0 h-10 w-10">
                    <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60" alt="">
                </div>
                <div class="ml-4">
                    <div class="text-sm font-medium text-gray-900">
                    {{ $taxpayer->email }}
                    </div>
                    <div class="text-sm text-gray-500">
                    {{ $taxpayer->title }}
                    </div>
                </div>
                </div>
            </td>
            <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm text-gray-900"> {{ $taxpayer->title }}</div>
                <div class="text-sm text-gray-500">Optimization</div>
            </td>
            <td class="px-6 py-4 whitespace-nowrap">
                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                {{ $taxpayer->body }}
                </span>
            </td>
            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                Admin
            </td>


            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">

            <button wire:click="edit({{ $taxpayer->id }})" class="text-indigo-600 hover:text-indigo-900">Edit</button>

                <button wire:click="delete({{ $taxpayer->id }})" class="text-indigo-600 hover:text-indigo-900">Delete</button>

            </td>


            <!-- 
            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">

                <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>


            </td>

            -->
            </tr>




            @endforeach

            </tbody>
            </table>


            {{ $taxpayers->links() }}

      </div>
    </div>
  </div>
</div>


</div>
</div>



