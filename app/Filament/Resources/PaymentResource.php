<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PaymentResource\Pages;
use App\Filament\Resources\PaymentResource\RelationManagers;
use App\Models\Payment;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Storage;

class PaymentResource extends Resource
{
    protected static ?string $model = Payment::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('donation_id')
                    ->required()
                    ->numeric(),
                Forms\Components\Toggle::make('is_approved')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('donation.full_name')
                    ->searchable()
                    ->sortable(),
                ImageColumn::make('donation.payment_ss')
                ->width(100)
                ->height(200)
                ->url(function ($record) {
                    return Storage::url($record->donation->payment_ss);
                })
                ->openUrlInNewTab(),
                Tables\Columns\IconColumn::make('is_approved')
                    ->boolean(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->label('Payment Date'),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                               //Tables\Actions\EditAction::make(),
                               Tables\Actions\Action::make('Approval')
                               ->action(fn (Payment $record) => $record->approve())
                               ->requiresConfirmation()
                               ->color('success'),
                            //    ->visible(fn (Payment $record) => $record->is_approved == 0),
                               Tables\Actions\Action::make('Reject')
                               ->action(fn (Payment $record) => $record->reject($record->user_id))
                               ->requiresConfirmation()
                               ->color('danger')
                            //    ->visible(fn (Payment $record) => $record->is_approved == 1),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPayments::route('/'),
            // 'create' => Pages\CreatePayment::route('/create'),
            // 'edit' => Pages\EditPayment::route('/{record}/edit'),
        ];
    }
}
