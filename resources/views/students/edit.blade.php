@include('partials.header', [$title])

    <header class="max-w-lg mx-auto">
        <a href="#">
            <h1 class="text-4xl font-bold text-white text-center">Edit {{$student->first_name}} {{$student->last_name}}</h1>
        </a>
    </header>
    <main class="bg-white max-w-lg mx-auto p-8 my-10 rounded-lg shadow-2xl">
        <section class="mt-10">
            <form action="/student/{{$student->id}}" method="POST" class="flex flex-col">
                @method('PUT')
                @csrf
                <div class="mb-6 pt-3 rounded bg-gray-200">
                    <label for="first_name" class="block text-gray-700 text-sm font-bold mb-2 ml-3">First Name</label>
                    <input type="text" name="first_name" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-400 px-3" autocomplete="off" value={{$student->first_name}} >
                    @error('first_name')
                        <p class="text-red-500 text-xs mt-2">
                            {{$message}}
                        </p>
                    @enderror
                </div>

                <div class="mb-6 pt-3 rounded bg-gray-200">
                    <label for="last_name" class="block text-gray-700 text-sm font-bold mb-2 ml-3">Last Name</label>
                    <input type="text" name="last_name" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-400 px-3" autocomplete="off" value={{$student->last_name}}>
                    @error('last_name')
                        <p class="text-red-500 text-xs mt-2">
                            {{$message}}
                        </p>
                    @enderror
                </div>

                <div class="mb-6 pt-3 rounded bg-gray-200">
                    <label for="age" class="block text-gray-700 text-sm font-bold mb-2 ml-3">age</label>
                    <input type="number" name="age" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-400 px-3" value={{$student->age}}>
                    @error('age')
                        <p class="text-red-500 text-xs mt-2">
                            {{$message}}
                        </p>
                    @enderror
                </div>

                <div class="mb-6 pt-3 rounded bg-gray-200">
                    <label for="gender" class="block text-gray-700 text-sm font-bold mb-2 ml-3">Gender</label>
                    <select name="gender" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-400 px-3">
                        <option value="Male" {{$student->gender == "" ? 'selected' : 'Male'}}>Male</option>
                        <option value="Female" {{$student->gender == "" ? 'selected' : 'Female'}}>Female</option>
                        <option value="" {{$student->gender == "" ? 'selected' : ''}}></option>
                    </select>
                    @error('gender')
                        <p class="text-red-500 text-xs mt-2">
                            {{$message}}
                        </p>
                    @enderror
                </div>

                <div class="mb-6 pt-3 rounded bg-gray-200">
                    <label for="email" class="block text-gray-700 text-sm font-bold mb-2 ml-3">Email</label>
                    <input type="email" name="email" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-400 px-3" autocomplete="off" value={{$student->email}}>
                    @error('email')
                        <p class="text-red-500 text-xs mt-2">
                            {{$message}}
                        </p>
                    @enderror
                </div>
                <button class="bg-purple-600 hover:bg-purple-700 text-white font-bold py-2 rounded shadow-lg hover:shadow-xl transition duration-200" type="submit">Update</button>
            </form>
            <form action="/student/{{$student->id}}" method="POST">
                @method('delete')
                @csrf
                <button class="bg-red-600 w-full hover:bg-red-700 text-white font-bold mt-2 py-2 rounded shadow-lg hover:shadow-xl transition duration-200" type="submit">Delete</button>
            </form>
        </section>
    </main>

@include('partials.footer')
