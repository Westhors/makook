<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DesignResource\Pages;
use App\Models\Design;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\HtmlString;

class DesignResource extends Resource
{
    protected static ?string $model = Design::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'طلبات التصاميم';
    protected static ?string $modelLabel = 'تصميم';
    protected static ?string $pluralModelLabel = 'تصاميم';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\Placeholder::make('section_design_info')
                ->content(new HtmlString('
                    <div style="width: 100%; margin: 20px 0;">
                        <hr style="border-top: 2px solid #999; margin-bottom: 10px;">
                        <h2 style="font-weight: bold; font-size: 1.1rem;">معلومات التصميم</h2>
                    </div>
                '))
                ->columnSpanFull(),


            Forms\Components\Select::make('design_type')
                ->label('نوع التصميم')
                ->options([
                    'individual' => 'تصميم فردي',
                    'batch' => 'تصميم دفعة',
                ])
                ->required(),
            Forms\Components\FileUpload::make('color_image')
                ->label('لون الرداء (صورة)')
                ->directory('colors')
                ->image()
                ->imagePreviewHeight('100')
                ->downloadable()
                ->openable(),



            Forms\Components\TextInput::make('name_customer')->label('اسم العميل')->numeric(),
            Forms\Components\TextInput::make('university_name')->label('اسم الجامعه')->numeric(),
            Forms\Components\TextInput::make('department')->label('القسم')->numeric(),
            Forms\Components\TextInput::make('batch_number')->label('رقم الدفعه')->numeric(),
            Forms\Components\TextInput::make('phone_number')->label(' رقم العميل')->numeric(),
            Forms\Components\TextInput::make('shoulder_width')->label('عرض الكتف')->numeric(),
            Forms\Components\TextInput::make('arm_length')->label('طول الذراع')->numeric(),
            Forms\Components\TextInput::make('total_length')->label('الطول الكلي')->numeric(),

            Forms\Components\Placeholder::make('section_robe')
                ->content(new HtmlString('
                    <div style="width: 100%; margin: 20px 0;">
                        <hr style="border-top: 2px solid #999; margin-bottom: 10px;">
                        <h2 style="font-weight: bold; font-size: 1.1rem;">الروب</h2>
                    </div>
                '))
                ->columnSpanFull(),


            Forms\Components\Select::make('robe_id')->relationship('robe', 'name')->label('الروب الجاهز'),
            Forms\Components\Placeholder::make('robe_image')
                ->content(
                    fn($record) =>
                    $record?->robe?->image
                        ? new HtmlString('<img src="' . asset('storage/' . $record->robe->image) . '" style="height:200px;border-radius:5px;">')
                        : 'لا توجد صورة'
                )
                ->columnSpanFull(),
            Forms\Components\FileUpload::make('custom_robe_image')->label('أو ارفع صورة روب')->directory('custom_robes')->image(),

            Forms\Components\Placeholder::make('section_hood')
                ->content(new HtmlString('
                    <div style="width: 100%; margin: 20px 0;">
                        <hr style="border-top: 2px solid #999; margin-bottom: 10px;">
                        <h2 style="font-weight: bold; font-size: 1.1rem;">القبعه</h2>
                    </div>
                '))
                ->columnSpanFull(),

            Forms\Components\Select::make('hood_id')->relationship('hood', 'name')->label('القبعة الجاهزة'),
            Forms\Components\Placeholder::make('hood_image')
                ->content(
                    fn($record) =>
                    $record?->hood?->image
                        ? new HtmlString('<img src="' . asset('storage/' . $record->hood->image) . '" style="height:200px;border-radius:5px;">')
                        : 'لا توجد صورة'
                )
                ->columnSpanFull(),
            Forms\Components\FileUpload::make('custom_hood_image')->label('أو ارفع صورة قبعة')->directory('custom_hoods')->image(),
            Forms\Components\FileUpload::make('hood_color_image')
                ->label('لون القبعة (صورة)')
                ->directory('hood_colors')
                ->image()
                ->imagePreviewHeight('100')
                ->downloadable()
                ->openable(),

            Forms\Components\FileUpload::make('hood_direction_color_image')
                ->label('مكان التطريز (صورة)')
                ->directory('hood_directions')
                ->image()
                ->imagePreviewHeight('100')
                ->downloadable()
                ->openable(),


            Forms\Components\Select::make('hood_direction')->label('اتجاه التطريز')->options([
                'top' => 'الاعلى',
                'side' => 'الجانب',
                'both' => 'كلاهما',
            ]),
            Forms\Components\TextInput::make('hood_text')->label('عبارة على القبعة'),


            Forms\Components\Placeholder::make('section_scarf')
                ->content(new HtmlString('
                    <div style="width: 100%; margin: 20px 0;">
                        <hr style="border-top: 2px solid #999; margin-bottom: 10px;">
                        <h2 style="font-weight: bold; font-size: 1.1rem;">الوشاح</h2>
                    </div>
                '))
                ->columnSpanFull(),



            Forms\Components\Select::make('scarf_id')->relationship('scarf', 'name')->label('الوشاح الجاهز'),
            Forms\Components\Placeholder::make('scarf_image')
                ->content(
                    fn($record) =>
                    $record?->scarf?->image
                        ? new HtmlString('<img src="' . asset('storage/' . $record->scarf->image) . '" style="height:200px;border-radius:5px;">')
                        : 'لا توجد صورة'
                )
                ->columnSpanFull(),
            Forms\Components\FileUpload::make('custom_scarf_image')->label('أو ارفع صورة وشاح')->directory('custom_scarves')->image(),
            Forms\Components\FileUpload::make('scarf_logo')->label('شعار على الوشاح')->directory('logos')->image(),
            Forms\Components\FileUpload::make('scarf_color_image')
                ->label('لون الوشاح (صورة)')
                ->directory('scarf_colors')
                ->image()
                ->imagePreviewHeight('100')
                ->downloadable()
                ->openable(),
            Forms\Components\Textarea::make('scarf_text')->label('عبارات على الوشاح'),

            Forms\Components\CheckboxList::make('scarf_embroidery')
                ->label('التطريز على الوشاح')
                ->options([
                    'right' => 'الجهة اليمنى',
                    'left' => 'الجهة اليسرى',
                    'back' => 'الخلفية',
                ]),

            Forms\Components\FileUpload::make('scarf_embroidery_image_right')
                ->label('صورة تطريز الجهة اليمنى')
                ->directory('scarf_embroidery_images')
                ->image()
                ->imagePreviewHeight('100')
                ->downloadable()
                ->openable(),

            Forms\Components\FileUpload::make('scarf_embroidery_image_left')
                ->label('صورة تطريز الجهة اليسرى')
                ->directory('scarf_embroidery_images')
                ->image()
                ->imagePreviewHeight('100')
                ->downloadable()
                ->openable(),

            Forms\Components\FileUpload::make('scarf_embroidery_image_back')
                ->label('صورة تطريز الخلفية')
                ->directory('scarf_embroidery_images')
                ->image()
                ->imagePreviewHeight('100')
                ->downloadable()
                ->openable(),

            Forms\Components\Placeholder::make('section_price')
                ->content(new HtmlString('
                    <div style="width: 100%; margin: 20px 0;">
                        <hr style="border-top: 2px solid #999; margin-bottom: 10px;">
                        <h2 style="font-weight: bold; font-size: 1.1rem;"></h2>
                    </div>
                '))
                ->columnSpanFull(),

            Forms\Components\TextInput::make('total_price')->label('السعر الإجمالي')->numeric(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->label('#')->sortable(),
                Tables\Columns\TextColumn::make('design_type')
                    ->label('النوع')
                    ->sortable()
                    ->formatStateUsing(function ($state) {
                        return $state === 'individual' ? 'تصميم فردي' : ($state === 'batch' ? 'تصميم للدفعة' : $state);
                    }),
                Tables\Columns\TextColumn::make('total_price')->label('السعر')->suffix(' دينار')->sortable(),
                Tables\Columns\TextColumn::make('created_at')->label('تاريخ الطلب')->dateTime('Y-m-d H:i')->sortable(),
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
                    ->form([
                        Forms\Components\TextInput::make('min_price')->label('السعر من')->numeric(),
                        Forms\Components\TextInput::make('max_price')->label('السعر إلى')->numeric(),
                    ])
                    ->query(function ($query, array $data) {
                        return $query
                            ->when($data['min_price'], fn($q, $value) => $q->where('total_price', '>=', $value))
                            ->when($data['max_price'], fn($q, $value) => $q->where('total_price', '<=', $value));
                    }),

                Tables\Filters\SelectFilter::make('design_type')
                    ->label('نوع التصميم')
                    ->options([
                        'individual' => 'تصميم فردي',
                        'batch' => 'تصميم للدفعة',
                    ]),
            ])

            ->searchable()
            ->actions([
                Tables\Actions\EditAction::make()->label('تعديل'),
                Tables\Actions\DeleteAction::make()->label('حذف'),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make()->label('حذف المحدد'),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListDesigns::route('/'),
            'edit' => Pages\EditDesign::route('/{record}/edit'),
        ];
    }
}
