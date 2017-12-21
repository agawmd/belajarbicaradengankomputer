<?php

Route::get('form', function () {
    return ""
    . "<form action='submit' method='post'>"
            . "<input type='text' name='nama'>"
            . "<input type='submit' value='submit'>"
    . "</form>";

    
});

Route::post('submit',  function () {
    return Input::get('nama');
})



?>
