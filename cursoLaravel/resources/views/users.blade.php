<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Listado de usuarios - Pablo</title>
</head>
<body>
    <!--<h1>< php //e($title) ?></h1>-->
    <h1>{{ $title }}</h1>

    <hr>

    <!--@//if (!empty($users))
        <ul>
            @//foreach ($users as $user)
                <!--para escapar el codigo html--
                <li>{ { $user }}</li>
            @//endforeach
        </ul>
    @//else
        <p>No hay usuarios registrados.</p>
    @//endif-->

    <!--@//unless (empty($users))<!--unless=contrario de if--
        <ul>
        @//foreach ($users as $user)
            <!--para escapar el codigo html--
                <li>{ { $user }}</li>
            @//endforeach
        </ul>
    @//else
        <p>No hay usuarios registrados.</p>
    @//endif-->

    <!--@//empty($users)
        <p>No hay usuarios registrados.</p>
    @//else
        <ul>
            @//foreach ($users as $user)
            <!--para escapar el codigo html--
                <li>{ { $user }}</li>
            @//endforeach
        </ul>
    @//endempty-->

    <ul>
        @forelse ($users as $user)
        <!--para escapar el codigo html-->
            <li>{{ $user }}</li>
        @empty
            <li>No hay usuarios registrados.</li>
        @endforelse
    </ul>

    {{ time() }}

</body>
</html>