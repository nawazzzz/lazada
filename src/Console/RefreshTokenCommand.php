<?php

namespace Laraditz\Lazada\Console;

use Illuminate\Console\Command;
use Laraditz\Lazada\Models\LazadaAccessToken;
use Lazada;

class RefreshTokenCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'lazada:refresh-token';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Refresh existing access token before it expired.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $query = $this->getQuery();

        $query->lazy()->each(function ($item) {
            $this->info(__('<fg=yellow>Refreshing :subjectable access token.</>', ['subjectable' => $item->subjectable?->name ?? '']));
            Lazada::auth()->refresh_token(refresh_token: $item->refresh_token);
            $this->info(__(':subjectable access token was refresh.', ['subjectable' => $item->subjectable?->name ?? 'The']));
        });
    }

    private function getQuery()
    {
        $query = LazadaAccessToken::query();

        $query->where('expires_at', '>', now());

        return $query;
    }
}
