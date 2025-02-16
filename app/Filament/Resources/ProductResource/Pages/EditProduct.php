<?php

namespace App\Filament\Resources\ProductResource\Pages;

use App\Filament\Resources\ProductResource;
use App\Models\ProductPhoto;
use Filament\Actions;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;
use Filament\Resources\Pages\EditRecord;

class EditProduct extends EditRecord
{
    protected static string $resource = ProductResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function afterSave(): void
    {
        Log::info('data :', ['data' => $this->data, 'record' => $this->record]);
        // Create slug for the product
        $this->record->update([
            'slug' => Str::slug($this->record->name),
        ]);

        // Handle photos
        $this->record->photos()->delete();
        $photos = $this->data['photos'] ?? [];

        foreach ($photos as $photo) {
            ProductPhoto::create([
                'product_id' => $this->record->id,
                'src' => $photo,
            ]);
        }
    }
}
