                <ul class="flex flex-col md:flex-row px-4">
                    @auth
                    <li class="hover:text-sky-700">
                        <form action="/logout" method="post">
                            @csrf
                        <button class="block py-2 pr-4 pl-3" type="submit">Logout</button>
                        </form>
                    </li>

                    @else

                    <li class="hover:text-sky-700">
                        <a href="/login" class="block py-2 pr-4 pl-3">Sign in</a>
                    </li>
                    <li class="hover:text-sky-700">
                        <a href="/register" class="block py-2 pr-4 pl-3">Sign up</a>
                    </li>

                    @endauth
                </ul>

