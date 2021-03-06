@extends('templates.front.full_layout')

@section('content')

    {{-- top background img --}}
    @if($background_image)
        <div class="top_background_image row">
            <div class="background_responsive_img fill" data-background-image="{{ ImageManager::imagePath(config('image.registration.public_path'), $background_image) }}"></div>
        </div>
    @else
        <div class="no_top_background_image"></div>
    @endif

    <div id="content" class="e-shop row">

        <div class="text-content">
            <div class="container">
                <h1><i class="fa fa-shopping-cart"></i> La boutique en ligne du club Université Nantes Aviron (UNA)</h1>

                <hr>

                <div class="categories">
                    <i class="fa fa-cubes"></i> Trier par catégorie :
                    @foreach(config('e-shop.article_category') as $id => $cat)
                        <a class="{{ $cat['key'] }}
                        @if($current_category == $id)
                                selected
                            @endif"
                           href="{{ route('e-shop.index', ['category' => $id]) }}"
                           title="{{ $cat['title'] }}">{{ $cat['title'] }}</a>
                    @endforeach
                    @if($current_category)<a href="{{ route('e-shop.index') }}" title="Annuler filtre" class="text-danger"><i class="fa fa-times"></i> Annuler filtre</a>
                    @endif
                </div>

                <table class="table table-striped table-hover">
                    @foreach($articles as $article)
                        <tr class="article">
                            <td class="image text-center">
                                <a href="#" title="{{ $article->title }}">
                                    <img width="150" height="150" src="http://dummyimage.com/150x150/000/fff" alt="{{ $article->title }}">
                                </a>
                                <span class="price visible-xs underline">{{ $article->price }}€</span>
                            </td>
                            <td class="details">
                                <h3>{{ $article->title }}</h3>
                                <span class="availability {{ config('e-shop.availability_type.' . $article->availability_type_id . '.key') }}">
                                    @if($article->availability_type_id === config('e-shop.availability_type_key.in-stock'))
                                        <i class="fa fa-check-circle-o"></i>
                                    @elseif($article->availability_type_id === config('e-shop.availability_type_key.on-order'))
                                        <i class="fa fa-clock-o"></i>
                                    @elseif($article->availability_type_id === config('e-shop.availability_type_key.depleted'))
                                        <i class="fa fa-ban"></i>
                                    @endif
                                    {{ config('e-shop.availability_type.' . $article->availability_type_id . '.title') }}
                                </span>
                                <span class="category hidden-xs"><i class="fa fa-cube"></i> {{ config('e-shop.article_category.' . $article->category_id . '.title') }}</span>
                                <span class="price hidden-xs text-primary">{{ $article->price }}€</span>
                                <p class="hidden-xs">{{ $article->description }}</p>
                                <div class="visible-xs size-container">
                                    @if($article->size_s)
                                        <div class="text-center size s">S</div>
                                    @endif
                                    @if($article->size_m)
                                        <div class="text-center size m">M</div>
                                    @endif
                                    @if($article->size_l)
                                        <div class="text-center size l">L</div>
                                    @endif
                                    @if($article->size_xl)
                                        <div class="text-center size xl">XL</div>
                                    @endif
                                    @if($article->size_xxl)
                                        <div class="text-center size xxl">XXL</div>
                                    @endif
                                </div>
                                <div class="visible-xs action">
                                    <a href="{{ route('e-shop.add-to-cart', $article->id) }}" title="Ajouter au panier">
                                        <button class="btn btn-info" role="button">
                                            <i class="fa fa-cart-plus"></i> Ajout au panier
                                        </button>
                                    </a>
                                </div>
                            </td>
                            <td class="hidden-xs size-container">
                                @if($article->size_s)
                                    <div class="text-center size s">S</div>
                                @endif
                                @if($article->size_m)
                                    <div class="text-center size m">M</div>
                                @endif
                                @if($article->size_l)
                                    <div class="text-center size l">L</div>
                                @endif
                                @if($article->size_xl)
                                    <div class="text-center size xl">XL</div>
                                @endif
                                @if($article->size_xxl)
                                    <div class="text-center size xxl">XXL</div>
                                @endif
                            </td>
                            <td class="action hidden-xs">
                                <a href="{{ route('e-shop.add-to-cart', $article->id) }}" title="Ajouter au panier">
                                    <button class="btn btn-info add-to-command text-center" role="button">
                                        <i class="fa fa-cart-plus"></i>
                                    </button>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>

@endsection