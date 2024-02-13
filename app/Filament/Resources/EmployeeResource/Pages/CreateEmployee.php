<?php

namespace App\Filament\Resources\EmployeeResource\Pages;

use Filament\Notifications\Notification;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\EmployeeResource;

class CreateEmployee extends CreateRecord
{
    protected static string $resource = EmployeeResource::class;

    // protected function getCreatedNotificationTitle(): ?string
    // {
    //     return 'Employee created';
    // }

    protected function getCreatedNotification(): ?Notification
    {
        return Notification::make()
            ->success()
            ->title('Employes created.')
            ->body('The Employee created successfully.');
    }
}
