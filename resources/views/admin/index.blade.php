<x-admin-layout>
    

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                @if(Auth::user()) 
                <div style="margin-left:150px;font-size:50px;font-weight:bold;" class="p-6 bg-white border-b border-gray-200">
                   
                    Welcome to Admin Dashboard 
                    <div style="color:green;font-weight:bold;font-size:50px;margin-left:200px">
                    {{ Auth::user()->name}}
                </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</x-admin-layout>
