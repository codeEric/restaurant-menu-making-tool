@props(['name'])

<x-form.field>
    <x-form.label name="{{ $name }}" />
    <div class="flex flex-col flex-grow mb-3">
        <div x-data="{ files: null }" id="FileUpload"
            class="block w-full py-2 px-3 relative bg-white appearance-none border-2 border-gray-300 border-solid rounded-md hover:shadow-outline-gray">
            <input type="file" class="absolute inset-0 z-50 m-0 p-0 w-full h-full outline-none opacity-0"
                x-on:change="files = $event.target.files; console.log($event.target.files);"
                x-on:dragover="$el.classList.add('active')" x-on:dragleave="$el.classList.remove('active')"
                x-on:drop="$el.classList.remove('active')" name="{{ $name }}" id="{{ $name }}">
            <template x-if="files !== null">
                <div class="flex flex-col space-y-1">
                    <template x-for="(_,index) in Array.from({ length: files.length })">
                        <div class="flex flex-row items-center space-x-2">
                            <template x-if="files[index].type.includes('image/')"><i
                                    class="far fa-file-image fa-fw"></i></template>
                            <span class="font-medium text-gray-900" x-text="files[index].name">Uploading</span>
                            <span class="text-xs self-end text-gray-500" x-text="filesize(files[index].size)">...</span>
                        </div>
                    </template>
                </div>
            </template>
            <template x-if="files === null">
                <div class="flex flex-col space-y-2 items-center justify-center">
                    <i class="fas fa-cloud-upload-alt fa-3x text-currentColor"></i>
                    <p class="text-gray-700">Drag your image here or click in this area.</p>
                    <a href="javascript:void(0)"
                        class="flex items-center mx-auto py-2 px-4 text-white text-center font-medium border border-transparent rounded-md outline-none bg-green-500">Select
                        a file</a>
                </div>
            </template>
        </div>
    </div>
    <x-form.error name="{{ $name }}" />
</x-form.field>
