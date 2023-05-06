<x-layout title="Edit menu - Dashboard">
    <x-dashboard>
        <div class="flex flex-col items-center w-96 pt-12">
            <h1 class="text-2xl font-bold">Edit new menu</h1>
            <form action="/dashboard/{{$menus->id}}" method="post">
            @csrf
            @method('put')
            <input type="hidden" name="id" value="{{$menus->id}}">
            <x-form.input  name="name" placeholder="Name" value="{{$menus->name}}"/>
            {{-- <x-form.input  name="description" placeholder="Description" value="{{$menus->description}}"/> --}}
            {{-- <x-form.input  name="category" placeholder="Category" value="{{$menus->category}}"/> --}}
            <x-form.submit>Submit</x-form.submit>
            <a href="{{url('#')}}" class="btn btn-danger">Back</a>
    </form>
</div>
</x-dashboard>
</x-layout>