<html>

<body>

    <?php
    echo Form::open(['url' => 'foo/bar']);
    echo Form::text('name', 'name');
    echo '<br>';

    echo Form::text('username', 'Username');
    echo '<br/>';

    echo Form::text('email', 'example@gmail.com');
    echo '<br/>';

    echo Form::password('password');
    echo '<br/>';

    echo Form::checkbox('name', 'value');
    echo '<br/>';

    echo Form::radio('name', 'value');
    echo '<br/>';

    echo Form::file('image');
    echo '<br/>';

    echo Form::select('size', ['L' => 'Large', 'S' => 'Small']);
    echo '<br/>';

    echo Form::submit('Click Me!');
    echo Form::close();
    ?>

</body>

</html>
