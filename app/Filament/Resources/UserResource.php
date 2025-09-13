<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Filament\Resources\UserResource\RelationManagers;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\Actions\Action;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Auth;
use Str;

class UserResource extends Resource
{
	protected static ?string $model = User::class;

	protected static ?string $navigationIcon = 'heroicon-o-user';

	public static function getEloquentQuery(): Builder
	{
		return parent::getEloquentQuery()
			->when(Auth::user()?->role === 'moderator', function ($query) {
				return $query->where('role', 'user');
			})
			->when(Auth::user()?->role === 'admin', function ($query) {
				return $query->whereIn('role', ['user', 'moderator']);
			})
				->withCount('referralsMade');


	}

	public static function form(Form $form): Form
	{
		return $form
			->schema([
				Forms\Components\TextInput::make('name')
					->required()
					->maxLength(255),
				Forms\Components\Textarea::make('bio')
					->nullable()
					->maxLength(255),
				Forms\Components\TextInput::make('mobile')
					->required()
					->maxLength(255),
				Forms\Components\TextInput::make('email')
					->required()
					->maxLength(255),
				Forms\Components\TextInput::make('occupation')
					->nullable()
					->maxLength(255),
				Forms\Components\TextInput::make('department')
					->nullable()
					->maxLength(255),
				Forms\Components\TextInput::make('category')
					->nullable()
					->maxLength(255),
				Forms\Components\TextInput::make('position')
					->nullable()
					->maxLength(255),
						TextInput::make('khad')
						->nullable()
					->maxLength(255),
						TextInput::make('gudi')
						->nullable()
					->maxLength(255),
						TextInput::make('paar')
						->nullable()
					->maxLength(255),
						TextInput::make('booth')
						->nullable()
					->maxLength(255),
				Forms\Components\TextInput::make('designation')
					->nullable()
					->maxLength(255),
				// Forms\Components\TextInput::make('company')
				// ->nullable()
				// ->maxLength(255),
				Forms\Components\TextInput::make('address')
					->nullable()
					->maxLength(255),
					Forms\Components\TextInput::make('referral_code')
		->nullable()
		->maxLength(255)
		->suffixAction(
			Action::make('generateReferral')
				->label('Generate')
				->icon('heroicon-o-key')
				->action(function (Forms\Set $set) {
					// generate a unique code
					$uniqueCode = strtoupper(Str::random(8));

					// if you want it unique in DB:
					while (User::where('referral_code', $uniqueCode)->exists()) {
					$uniqueCode = strtoupper(Str::random(8));
					}

					$set('referral_code', $uniqueCode);
				})
		),
			Forms\Components\FileUpload::make('profile_photo')
				->nullable(),
			Forms\Components\TextInput::make('password')
				->password()
				->dehydrateStateUsing(fn ($state) => !empty($state) ? bcrypt($state) : null)
				->dehydrated(fn ($state) => filled($state))
				->label(fn (string $operation) => $operation === 'edit' ? 'New Password' : 'Password')
				->nullable(),

			Forms\Components\Select::make('active')
				->required()
				->default('1')
				->options([
					'1' => 'Active',
					'0' => 'Inactive',
				]),
			Forms\Components\Select::make('role')
				->required()
				->default('user')
				->options([
					'admin' => 'Admin',
					'user' => 'User',
					'moderator' => 'Moderator',
				])
				->visible(fn () => Auth::user()?->role === 'admin'),
			]);
	}

	public static function table(Table $table): Table
	{
		return $table
			->columns([
				ImageColumn::make('profile_photo')->circular(),
				Tables\Columns\TextColumn::make('name')->sortable()->searchable(),
					Tables\Columns\TextColumn::make('referrals_made_count')
					->counts('referralsMade')
					->label('Total Referrals')
					->sortable(),
				Tables\Columns\TextColumn::make('mobile')->sortable()->searchable(),
				// Tables\Columns\TextColumn::make('occupation')->sortable()->searchable(),
				Tables\Columns\TextColumn::make('position')->sortable()->searchable(),
				Tables\Columns\TextColumn::make('designation')->sortable()->searchable(),

			])
			->filters([
				Tables\Filters\SelectFilter::make('active')
					->options([
						'1' => 'Active',
						'0' => 'Inactive',
					]),
				Tables\Filters\SelectFilter::make('role')
					->options([
						'admin' => 'Admin',
						'user' => 'User',
						'moderator' => 'Moderator',
					])
					->visible(fn () => Auth::user()?->role === 'admin'),
			])
			->actions([
				Tables\Actions\EditAction::make(),
				Tables\Actions\DeleteAction::make()
					->visible(fn () => Auth::user()?->role !== 'moderator'),
			]);
	}

	public static function getRelations(): array
	{
		return [
			RelationManagers\ReferralsMadeRelationManager::class,
			];
	}

	public static function getPages(): array
	{
		return [
			'index' => Pages\ListUsers::route('/'),
			'create' => Pages\CreateUser::route('/create'),
			'edit' => Pages\EditUser::route('/{record}/edit'),
		];
	}

}
