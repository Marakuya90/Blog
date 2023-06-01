    <header class="py-3 border-bottom">
        <div class="container">
            <div class="d-flex justify-content-between ">
                <div>
                    <a href="{{route('home')}}">
                        {{config('app.name')}}
                    </a>
                </div>

                <div>
                    <nav>
                        <ul class="list-unstyled d-flex">
                            <li class="ms-3">
                                <a href="{{route('register.index')}}">Регистрация</a>
                            </li>
                            <li class="ms-3">
                                <a href="{{route('login.index')}}">Вход</a>
                            </li>
                        </ul>
                    </nav>

                </div>
            </div>
        </div>
        <h2>Header</h2>
    </header>
