<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schedule;
use Illuminate\Support\Facades\DB;
use  App\Models\Lead;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote')->hourly();

Artisan::command('leads:delete-exact-24hrs', function () {
    $exact24HoursAgo = now()->subDay()->toDateTimeString();
    $deletedRows = Lead::where('created_at', '=', $exact24HoursAgo)->delete();
    $this->info("Deleted $deletedRows lead(s) created exactly 24 hours ago.");
})->purpose('Delete leads created exactly 24 hours ago')->everyMinute();
