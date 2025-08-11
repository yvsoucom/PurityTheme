@extends('layouts.app')
 
@section('content')
    <div class="p-2 md:p-8 text-gray-900 dark:text-gray-200">
       
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
           

            {{-- Right panel --}}
            <div class="space-y-4 md:col-span-2">
                {{-- New Page --}}
                <div class="bg-white dark:bg-gray-800 shadow dark:shadow-gray-700/50 rounded-2xl p-4">
                    @include('newpage')
                </div>
 
            </div>
        </div>
    </div>
 
@endsection
