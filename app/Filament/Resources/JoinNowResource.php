<?php

namespace App\Filament\Resources;

use App\Filament\Resources\JoinNowResource\Pages;
use App\Filament\Resources\JoinNowResource\RelationManagers;
use App\Models\JoinNow;
use App\Models\Project;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Request;

class JoinNowResource extends Resource
{
    protected static ?string $model = JoinNow::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('full_name')
                    ->required()
                    ->maxLength(191),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->required()
                    ->maxLength(191),
                Forms\Components\TextInput::make('mobile_no')
                    ->required()
                    ->maxLength(191),
                Forms\Components\TextInput::make('address')
                    ->required()
                    ->maxLength(191),
                Forms\Components\TextInput::make('city')
                    ->required()
                    ->maxLength(191),
                Forms\Components\TextInput::make('state')
                    ->required()
                    ->maxLength(191),
                Forms\Components\TextInput::make('dob')
                    ->required()
                    ->maxLength(191),
                Forms\Components\TextInput::make('age')
                    ->required()
                    ->maxLength(191),
                Forms\Components\TextInput::make('blood_group')
                    ->maxLength(191),
                Forms\Components\TextInput::make('qualification')
                    ->required()
                    ->maxLength(191),
                Forms\Components\TextInput::make('volunter_type')
                    ->required()
                    ->maxLength(191),
                Forms\Components\TextInput::make('project_id')
                    ->required(),
                Forms\Components\TextInput::make('aadhar_front')
                    ->maxLength(191),
                Forms\Components\TextInput::make('aadhar_back')
                    ->maxLength(191),
                Forms\Components\TextInput::make('pan')
                    ->maxLength(191),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('full_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('mobile_no')
                    ->searchable(),
                Tables\Columns\TextColumn::make('address')
                    ->searchable(),
                Tables\Columns\TextColumn::make('city')
                    ->searchable(),
                Tables\Columns\TextColumn::make('state')
                    ->searchable(),
                Tables\Columns\TextColumn::make('dob')
                    ->searchable(),
                Tables\Columns\TextColumn::make('age')
                    ->searchable(),
                Tables\Columns\TextColumn::make('blood_group')
                    ->searchable(),
                Tables\Columns\TextColumn::make('qualification')
                    ->searchable(),
                Tables\Columns\TextColumn::make('volunter_type')
                    ->searchable(),
                Tables\Columns\TextColumn::make('protect_id')
                    ->default(function (JoinNow $record) {
                        $projects=[];
                        $data = Project::select('title')->whereIn('id',json_decode($record->project_id))->get();
                        foreach($data as $val){
                            $projects[] = $val->title;
                        }
                        return $projects;
                    }),
                    ImageColumn::make('aadhar_front')
                ->getStateUsing(function (JoinNow $record): string {
                    // http://127.0.0.1:8000/admin/join-nows
                    // dd(Request::getScheme()."://".Request::getHttpHost()."/storage/joinNowImages/".$record->aadhar_front);
                    return Request::getScheme()."://".Request::getHttpHost()."/storage/joinNowImages/".$record->aadhar_front;
                }),
                Tables\Columns\ImageColumn::make('aadhar_back')
                ->getStateUsing(function (JoinNow $record): string {

                    // dd(Request::getScheme()."/storage/joinNowImages/".$record->aadhar_back);
                    return Request::getScheme()."://".Request::getHttpHost()."/storage/joinNowImages/".$record->aadhar_back;
                })
                   ,
                Tables\Columns\ImageColumn::make('pan')
                ->getStateUsing(function (JoinNow $record): string {

                    // dd(Request::getHttpHost()."/storage/joinNowImages/".$record->aadhar_back);
                    return Request::getScheme()."://".Request::getHttpHost()."/storage/joinNowImages/".$record->pan;
                }),
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
            'index' => Pages\ListJoinNows::route('/'),
            'create' => Pages\CreateJoinNow::route('/create'),
            // 'edit' => Pages\EditJoinNow::route('/{record}/edit'),
        ];
    }
}
