<?php

it('can execute make:action command', function () {
    $this->artisan('make:action Test')
        ->assertExitCode(0);
});
