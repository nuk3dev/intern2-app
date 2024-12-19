<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use App\Models\Lead;

class DeleteExact24HourLeads extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'leads:delete-exact-24hrs';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Delete leads that were created exactly 24 hours ago';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $recordsPastDay = now()->subDay()->toDateTimeString();
        $deletedRows = Lead::where('created_at', '=', $recordsPastDay)->delete();
        $this->info("Deleted $deletedRows lead(s) created exactly 24 hours ago.");
    }
}
