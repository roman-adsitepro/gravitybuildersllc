<?php

namespace App\Filament\Admin\Resources\InquiryResource\Pages;

use App\Filament\Admin\Resources\InquiryResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewInquiry extends ViewRecord
{
    protected static string $resource = InquiryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make()->outlined()->color('gray'),
        ];
    }
}
