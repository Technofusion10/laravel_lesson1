@include('partials.header')
@php
    $data = ['title' => 'EMPLOYEE MANAGEMENT SYSTEM'];
@endphp
    <x-nav :name="$data"/>

    <header class="max-w-lg mx-auto mt-[50px]">
            <h1 class="text-4x1 font-bold text-white text-center text-4xl mb-3">LIST OF EMPLOYEES</h1>
    </header>
    <section class="px-20">
        <div class="overflow-x-auto relative">
            <table class="w-fit mx-auto text-sm text-gray-500 text-black">
                <thead class="text-xs text gray-700 uppercase bg-white">
                    <tr>
                        <th scope="col" class="py-3 px-6">
                            Student ID
                        </th>
                        <th scope="col" class="py-3 px-6">
                            First name
                        </th>
                        <th scope="col" class="py-3 px-6">
                            last name
                        </th>
                        <th scope="col" class="py-3 px-6">
                            age
                        </th>
                        <th scope="col" class="py-3 px-6">
                            gender
                        </th>
                        <th scope="col" class="py-3 px-6">
                            email
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($students as $student)
                    <tr class="bg-gray-800 text-white text-black border-b">
                        <td class="py-4 p-6">
                        {{$student->id}}
                        </td>
                        <td class="py-4 p-6">
                        {{$student->first_name}}
                        </td>
                        <td class="py-4 p-6">
                        {{$student->last_name}}
                        </td>
                        <td class="py-4 p-6">
                        {{$student->age}}
                        </td>
                        <td class="py-4 p-6">
                        {{$student->gender}}
                        </td>
                        <td class="py-4 p-6">
                        {{$student->email}}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="mx-auto max-w-lg pt-6 p-4>
                {{$students->links()}}
            </div>
        </div>
    </section>



@include('partials.footer')

<!-- <div class="container">
        <div class="center-div">
        <h1 class="text-center font-bold text-white mb-5 mt-5">STUDENTS TABLE</h1>
        <a href="#" class="ADD">ADD STUDENT</a>
            <table>
                <thead>
                    <tr>
                        <th>Student ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Age</th>
                        <th>Gender</th>
                        <th>Email</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($students as $student )
                    <tr>
                        <td>{{$student->id}}</td>
                        <td>{{$student->first_name}}</td>
                        <td>{{$student->last_name}}</td>
                        <td>{{$student->age}}</td>
                        <td>{{$student->gender}}</td>
                        <td>{{$student->email}}</td>
                        <td>
                            <a href="#" class="edit">update</a>
                            <a href="#" class="delete">delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div> -->
