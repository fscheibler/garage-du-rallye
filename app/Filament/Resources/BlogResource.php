<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BlogResource\Pages;
use App\Filament\Resources\BlogResource\RelationManagers;
use App\Models\Blog;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;
use Filament\Forms\Set;

class BlogResource extends Resource
{
    protected static ?string $model = Blog::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static ?string $navigationLabel = 'Articles de blog';

    protected static ?string $modelLabel = 'Article de blog';

    protected static ?string $pluralModelLabel = 'Articles de blog';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Group::make()
                    ->schema([
                        Forms\Components\Section::make('Contenu principal')
                            ->schema([
                                Forms\Components\TextInput::make('title')
                                    ->label('Titre')
                                    ->required()
                                    ->maxLength(255)
                                    ->live(onBlur: true)
                                    ->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug', Str::slug($state))),

                                Forms\Components\TextInput::make('slug')
                                    ->label('Slug (URL)')
                                    ->required()
                                    ->maxLength(255)
                                    ->unique(Blog::class, 'slug', ignoreRecord: true)
                                    ->helperText('Généré automatiquement à partir du titre'),

                                Forms\Components\Textarea::make('excerpt')
                                    ->label('Extrait')
                                    ->rows(3)
                                    ->maxLength(500)
                                    ->helperText('Court résumé de l\'article (optionnel)'),

                                Forms\Components\RichEditor::make('content')
                                    ->label('Contenu')
                                    ->required()
                                    ->columnSpanFull(),
                            ])
                            ->columns(2),

                        Forms\Components\Section::make('SEO')
                            ->schema([
                                Forms\Components\TextInput::make('meta_title')
                                    ->label('Titre SEO')
                                    ->maxLength(60)
                                    ->helperText('Si vide, le titre principal sera utilisé'),

                                Forms\Components\Textarea::make('meta_description')
                                    ->label('Description SEO')
                                    ->rows(2)
                                    ->maxLength(160),
                            ])
                            ->columns(2)
                            ->collapsible(),
                    ])
                    ->columnSpan(['lg' => 2]),

                Forms\Components\Group::make()
                    ->schema([
                        Forms\Components\Section::make('Image')
                            ->schema([
                                Forms\Components\FileUpload::make('featured_image')
                                    ->label('Image à la une')
                                    ->image()
                                    ->directory('blog')
                                    ->imageEditor()
                                    ->imageEditorAspectRatios(['16:9', '4:3', '1:1']),
                            ]),

                        Forms\Components\Section::make('Publication')
                            ->schema([
                                Forms\Components\Toggle::make('is_published')
                                    ->label('Publié')
                                    ->live(),

                                Forms\Components\DateTimePicker::make('published_at')
                                    ->label('Date de publication')
                                    ->default(now())
                                    ->visible(fn (Forms\Get $get) => $get('is_published')),
                            ]),
                    ])
                    ->columnSpan(['lg' => 1]),
            ])
            ->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('featured_image')
                    ->label('Image')
                    ->square()
                    ->size(60),

                Tables\Columns\TextColumn::make('title')
                    ->label('Titre')
                    ->searchable()
                    ->sortable()
                    ->weight('bold'),

                Tables\Columns\TextColumn::make('excerpt')
                    ->label('Extrait')
                    ->limit(50)
                    ->wrap(),

                Tables\Columns\IconColumn::make('is_published')
                    ->label('Publié')
                    ->boolean()
                    ->sortable(),

                Tables\Columns\TextColumn::make('published_at')
                    ->label('Date de publication')
                    ->dateTime('d/m/Y H:i')
                    ->sortable(),

                Tables\Columns\TextColumn::make('created_at')
                    ->label('Créé le')
                    ->dateTime('d/m/Y H:i')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\TernaryFilter::make('is_published')
                    ->label('Statut de publication')
                    ->boolean()
                    ->trueLabel('Publié')
                    ->falseLabel('Brouillon')
                    ->native(false),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->defaultSort('created_at', 'desc');
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
            'index' => Pages\ListBlogs::route('/'),
            'create' => Pages\CreateBlog::route('/create'),
            'edit' => Pages\EditBlog::route('/{record}/edit'),
        ];
    }
}
