<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Storage;

// Remove all uploaded emote files before dropping the table
if (Schema::hasTable('custom_emotes')) {
    \Illuminate\Support\Facades\DB::table('custom_emotes')->get()->each(function ($emote) {
        Storage::delete('public/emotes/' . $emote->filename);
    });
}

Schema::dropIfExists('custom_emotes');
