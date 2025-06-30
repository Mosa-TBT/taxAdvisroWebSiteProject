<?php

namespace App\Filament\Resources\TrustReasonResource\Pages;

use App\Filament\Resources\TrustReasonResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTrustReasons extends ListRecords
{
    protected static string $resource = TrustReasonResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
