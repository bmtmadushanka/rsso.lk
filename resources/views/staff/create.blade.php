<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Create Staff
        </h2>
    </x-slot>

    <div>
        <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form method="post" action="{{ route('staff.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="name" class="block font-medium text-sm text-gray-700">Name</label>
                            <input type="text" name="name" id="name" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('name', '') }}" />
                            @error('name')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="address" class="block font-medium text-sm text-gray-700">Address</label>
                            <input type="text" name="address" id="address" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('address', '') }}" />
                            @error('address')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="mobile" class="block font-medium text-sm text-gray-700">Mobile Phone</label>
                            <input type="text" name="mobile" id="mobile" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('mobile', '') }}" />
                            @error('mobile')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="home" class="block font-medium text-sm text-gray-700">Home Phone</label>
                            <input type="text" name="home" id="home" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('home', '') }}" />
                            @error('home')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="email" class="block font-medium text-sm text-gray-700">Email</label>
                            <input type="text" name="email" id="email" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('email', '') }}" />
                            @error('email')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="profession" class="block font-medium text-sm text-gray-700">Profession</label>
                            <input type="text" name="profession" id="profession" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('profession', '') }}" />
                            @error('profession')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="role" class="block font-medium text-sm text-gray-700">Organization Role</label>
                            <input type="text" name="role" id="role" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('role', '') }}" />
                            @error('role')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="nic" class="block font-medium text-sm text-gray-700">NIC Number</label>
                            <input type="text" name="nic" id="nic" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('nic', '') }}" />
                            @error('nic')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="dob" class="block font-medium text-sm text-gray-700">Date Of Birth</label>
                            <input type="date" name="dob" id="dob" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('dob', '') }}" />
                            @error('dob')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="doj" class="block font-medium text-sm text-gray-700">Date Of Join</label>
                            <input type="date" name="doj" id="doj" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('doj', '') }}" />
                            @error('doj')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="description" class="block font-medium text-sm text-gray-700">Description</label>
                            <textarea name="description" id="description" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('description', '') }}">{{ old('description', '') }} </textarea>
                            @error('description')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="photo" class="block font-medium text-sm text-gray-700">Photo</label>
                            <input type="file" name="photo" id="photo" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('photo', '') }}" />
                            @error('photo')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                                Create
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>