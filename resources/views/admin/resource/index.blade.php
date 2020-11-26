@extends('layouts.admin')

@section('content')
    <section class="row">
        <div class="col">
            <div class="row">
                <div class="col"><h1 class="h1 pb-4">All feeds</h1></div>
            </div>

            <div class="row">
                {{-- sidebar --}}
                <div class="col-lg-3 order-lg-2 mb-3"> {{--  mb-md-2--}}
                    <div class="col">
                        <a href="{{ route('admin.resource.create' ) }}"
                           class="btn btn-primary w-100"> {{-- mb-3--}}
                            {{ __('elements.button.addFeed') }}</a>
                    </div>
                </div>

                {{-- feed list --}}
                <div class="col-lg-9 order-lg-1">
                    <div class="row">
                        <div class="col no-padding">
                            @forelse($resources as $resource)
                                <div class="row">
                                    {{-- title --}}
                                    <div class="col-3 text-truncate">
                                        <i class="mdi mdi-rss-box text-secondary"></i>
                                        <a href="{{ route('admin.resource.edit', $resource) }}"
                                           class="text-reset text-bold pl-3">{{ $resource->title }}</a>
                                    </div>
                                    {{-- link --}}
                                    <div class="col-4 text-wrap text-truncate">
                                        <a href="{{ $resource->link }}">{{ $resource->link }}</a>
                                    </div>
                                    {{-- Category --}}
                                    <div class="col-2 text-wrap text-truncate">
                                        {{ $resource->category }}
                                    </div>
                                    {{-- buttons --}}
                                    <div class="col-1 text-right text-secondary text-nowrap">
                                        <a class="text-reset hover-info"
                                           href="{{ route('admin.resource.edit', $resource) }}">
                                            <i class="mdi mdi-pencil mdi-18px"></i></a>

                                        <form method="post" action="{{ route('admin.resource.destroy', $resource ) }}"
                                              class="d-inline" onsubmit="getConfirm()">
                                            @csrf @method('DELETE')
                                            <button class="btn btn-link text-secondary hover-danger p-0 pb-1">
                                                <i class="mdi mdi-delete mdi-18px"></i></button>
                                        </form>
                                    </div>
                                </div>
                            @empty
                                <div class="row">
                                    <div class="col ml-3"><p>{{ __('pages.admin.emptyFeedList') }}</p></div>
                                </div>

                            @endforelse
                        </div>

                    </div>
                </div>
            </div>

            {{-- Pages --}}
            <div class="row">
                {{ $resources->links() }}
            </div>
        </div>
    </section>
@endsection
