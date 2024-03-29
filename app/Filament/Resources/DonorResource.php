<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DonorResource\Pages;
use App\Filament\Resources\DonorResource\RelationManagers;
use App\Models\DonateNow;
use App\Models\Donor;
use App\Models\Project;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Request;

class DonorResource extends Resource
{
    protected static ?string $model = DonateNow::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Forms\Components\TextInput::make('full_name')
                ->maxLength(191),
            Forms\Components\TextInput::make('email')
                ->email()
                ->maxLength(191),
            Forms\Components\TextInput::make('phone')
                ->tel()
                ->maxLength(191),
            Forms\Components\TextInput::make('amount')
                ->numeric(),
            Forms\Components\Select::make('donation_type')
            ->options([
                '1' => 'Monthly',
                '2' => 'Annually',
                '3' => 'One Time'
            ]),
            Forms\Components\TextInput::make('city')
                ->maxLength(191),
            Forms\Components\TextInput::make('address')
                ->maxLength(191),
            Forms\Components\FileUpload::make('payment_ss'),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('full_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('phone')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('amount'),
                Tables\Columns\TextColumn::make('transaction_type')
                    ->formatStateUsing(function (DonateNow $record) {
                        $projects="";
                        // dd();
                        $ids = json_decode($record->transaction_type);
                        $data = Project::select('title')->whereIn('id',$ids)->get();
                        foreach($data as $val){
                            $projects .= $val->title." , ";
                        }
                        // dd($projects);
                        return ($projects);
                    }),

                ImageColumn::make('payment_ss')
                ->getStateUsing(function (DonateNow $record): string {
                    // http://127.0.0.1:8000/admin/join-nows
                    // dd(Request::getScheme()."://".Request::getHttpHost()."/storage/joinNowImages/".$record->aadhar_front);
                    return Request::getScheme()."://".Request::getHttpHost()."/storage/".$record->payment_ss;
                }),


                Tables\Columns\TextColumn::make('donation_type')
                ->formatStateUsing(function ($record) {

                    // dd($record);
                    if($record->donation_type == 0){
                        $result = "Monthly Donation";
                    }elseif($record->donation_type == 1){
                        $result = "Annual Donation";

                    }else{
                        $result = "One Time Donation";
                    }

                    return $result;
                })
                    ->searchable(),
                Tables\Columns\TextColumn::make('city')
                    ->searchable(),
                Tables\Columns\TextColumn::make('address')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                // Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListDonors::route('/'),
            // 'create' => Pages\CreateDonor::route('/create'),
            // 'edit' => Pages\EditDonor::route('/{record}/edit'),
        ];
    }
}
