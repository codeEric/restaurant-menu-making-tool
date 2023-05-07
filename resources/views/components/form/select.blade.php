@props(['name'])
<x-form.field>
    <div class="grid grid-cols-6 gap-6">
        <div class="col-span-6 sm:col-span-4">
            <x-form.label name="{{ $name }}" />
            <select id="{{ $name }}" name="{{ $name }}"
                class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-blue-400 focus:border-blue-400 sm:text-sm">
                <option value="" disabled selected>-- Select category --</option>
                <option value="appetizers">Appetizers</option>
                <option value="salads">Salads</option>
                <option value="sides">Sides</option>
                <option value="desserts">Desserts</option>
                <option value="beverages">Beverages</option>
            </select>
        </div>
    </div>
    <x-form.error name="{{ $name }}" />
</x-form.field>
