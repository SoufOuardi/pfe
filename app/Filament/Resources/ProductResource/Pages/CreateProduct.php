<?php

namespace App\Filament\Resources\ProductResource\Pages;

use App\Filament\Resources\ProductResource;
use App\Models\ProductPhoto;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateProduct extends CreateRecord
{
    protected static string $resource = ProductResource::class;

    protected function afterCreate(): void
    {
        Log::info('data :', ['data' => $this->data, 'record' => $this->record]);
        // Create slug for the product
        $this->record->update([
            'slug' => Str::slug($this->record->name),
        ]);

        // Handle photos
        $photos = $this->data['photos'] ?? [];

        foreach ($photos as $photo) {
            ProductPhoto::create([
                'product_id' => $this->record->id,
                'src' => $photo,
            ]);
        }
    }
}
