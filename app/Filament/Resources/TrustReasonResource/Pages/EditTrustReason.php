<?php

namespace App\Filament\Resources\TrustReasonResource\Pages;

use App\Filament\Resources\TrustReasonResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTrustReason extends EditRecord
{
    protected static string $resource = TrustReasonResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
