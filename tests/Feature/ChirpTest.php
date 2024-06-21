<?php

use App\Models\Chirp;

it('can be created with a factory', function () {
   $chirp = Chirp::factory()->create();
    expect($chirp->message)->toBeString()
        ->and($chirp->user_id)->toBeInt()
        ->and($chirp)->toBeInstanceOf(Chirp::class);
});
