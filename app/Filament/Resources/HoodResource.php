<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HoodResource\Pages;
use App\Models\Hood;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class HoodResource extends Resource
{
    protected static ?string $model = Hood::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationLabel = 'تصاميم القبعات';
    protected static ?string $modelLabel = 'قبعة';
    protected static ?string $pluralModelLabel = 'القبعات';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->label('اسم القبعة')
                    ->required()
                    ->maxLength(255),


                Forms\Components\TextInput::make('price')
                    ->label('السعر الفردى (دينار)')
                    ->required()
                    ->numeric()
                    ->minValue(0),

                Forms\Components\TextInput::make('price_university')
                    ->label('السعر للدفعه (دينار)')
                    ->required()
                    ->numeric()
                    ->minValue(0),

                Forms\Components\FileUpload::make('image')
                    ->label('صورة القبعة')
                    ->image()
                    ->required()
                    ->directory('hoods'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->label('#')->sortable(),

                Tables\Columns\ImageColumn::make('image')
                    ->label('الصورة')
                    ->disk('public')
                    ->height(80),

                Tables\Columns\TextColumn::make('name')
                    ->label('الاسم')
                    ->searchable(),

                Tables\Columns\TextColumn::make('price')
                    ->label('السعر')
                    ->suffix(' دينار')
                    ->sortable(),

                Tables\Columns\TextColumn::make('price_university')
                    ->label('السعر للدفعه (دينار)')
                    ->suffix(' دينار')
                    ->sortable(),

                Tables\Columns\TextColumn::make('created_at')
                    ->label('تاريخ الإضافة')
                    ->dateTime('Y-m-d H:i')
                    ->sortable(),
            ])
            ->filters([
                Tables\Filters\Filter::make('created_at')
                    ->form([
                        Forms\Components\DatePicker::make('from')->label('من تاريخ'),
                        Forms\Components\DatePicker::make('until')->label('إلى تاريخ'),
                    ])
                    ->query(function ($query, array $data) {
                        return $query
                            ->when($data['from'], fn($q, $date) => $q->whereDate('created_at', '>=', $date))
                            ->when($data['until'], fn($q, $date) => $q->whereDate('created_at', '<=', $date));
                    }),

                Tables\Filters\Filter::make('price_range')
                    ->label('نطاق السعر')
                    ->form([
                        Forms\Components\TextInput::make('min_price')->label('السعر من')->numeric(),
                        Forms\Components\TextInput::make('max_price')->label('السعر إلى')->numeric(),
                    ])
                    ->query(function ($query, array $data) {
                        return $query
                            ->when($data['min_price'], fn($q, $value) => $q->where('price', '>=', $value))
                            ->when($data['max_price'], fn($q, $value) => $q->where('price', '<=', $value));
                    }),
                Tables\Filters\Filter::make('price_range_university')
                    ->label('نطاق السعر الدفعه')
                    ->form([
                        Forms\Components\TextInput::make('min_price_university')->label('السعر من للدفعه')->numeric(),
                        Forms\Components\TextInput::make('max_price_university')->label('السعر إلى للدفعه')->numeric(),
                    ])
                    ->query(function ($query, array $data) {
                        return $query
                            ->when($data['min_price_university'], fn($q, $value) => $q->where('price_university', '>=', $value))
                            ->when($data['max_price_university'], fn($q, $value) => $q->where('price_university', '<=', $value));
                    }),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }


    public static function getPages(): array
    {
        return [
            'index' => Pages\ListHoods::route('/'),
            'create' => Pages\CreateHood::route('/create'),
            'edit' => Pages\EditHood::route('/{record}/edit'),
        ];
    }
}
