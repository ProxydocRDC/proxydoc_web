<?php

namespace App\Filament\Resources\Articles\Schemas;

use App\Models\ArticleCategory;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class ArticleForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('article_category_id')
                    ->label('Catégorie')
                    ->options(ArticleCategory::query()->pluck('name', 'id'))
                    ->required()
                    ->searchable(),
                TextInput::make('title')
                    ->required(),
                TextInput::make('slug')
                    ->required(),
                Textarea::make('excerpt')
                    ->columnSpanFull(),
                Textarea::make('content')
                    ->required()
                    ->columnSpanFull(),
                FileUpload::make('image')
                    ->image(),
                DateTimePicker::make('published_at'),
                Toggle::make('is_featured')
                    ->required(),
            ]);
    }
}
