@extends('layouts.app')

@section('title', "$category->meta_title")
@section('meta_description', "$category->meta_description")
@section('meta_keywords', "$category->meta_keywords")

@section('content')

    <main class="container relative mx-auto">
        <div class="relative h-[400px] w-full">
            <div class="absolute top-0 z-10 h-[400px] w-full items-center justify-center text-center">
            <span
                style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0 none; margin: 0; padding: 0; position: absolute; inset: 0;">
                <img src="{{ asset('uploads/category/'.$category->image) }}"
                     alt="" class="z-10 h-[400px] w-full rounded-bl-[60px] object-cover"
                     style="position: absolute; inset: 0; box-sizing: border-box; padding: 0; border: medium none; margin: auto; display: block; width: 0; height: 0; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;">0
            </span>
                <div
                    class="absolute bottom-[0px] right-0 z-10 h-[400px] w-full rounded-bl-[60px] bg-gradient-to-t from-[#101827]"></div>
                <div class="absolute bottom-[-60px] right-0 z-10 h-[60px] w-full bg-[#101827]"></div>
                <div class="absolute bottom-[-60px] right-0 z-10 h-[60px] w-full rounded-tr-[60px] bg-white"></div>
            </div>
            <div class="absolute bottom-[50px] z-20 mx-5 text-white">
                <div class="relative flex flex-col items-start">
                    <h1 class="w-full text-[24px] font-semibold line-clamp-2 mb-1"
                        style="margin: 0;">{{ $category->name }}</h1>
                    <div class="flex items-center">
                        <div class="flex items-center space-x-1">
                            <svg class="text-primary" viewBox="0 0 819 1024"
                                 style="display: inline-block; stroke: currentcolor; fill: currentcolor; width: 12px; height: 12px;">
                                <path
                                    d="M409.625 204.775c-112.947 0-204.8 91.853-204.8 204.8s91.853 204.799 204.8 204.799c112.948 0 204.801-91.853 204.801-204.799s-91.853-204.8-204.801-204.8zM409.625 511.975c-56.474 0-102.4-45.926-102.4-102.4s45.926-102.4 102.4-102.4c56.474 0 102.401 45.926 102.401 102.4s-45.927 102.4-102.401 102.4zM409.42-0.025c-233.421 0-409.395 176.077-409.395 409.6 0 323.891 246.374 525.311 352.307 596.838 17.306 11.725 37.223 17.613 57.089 17.613 19.814 0 39.629-5.842 56.934-17.516 106.087-71.629 352.82-273.147 352.82-596.935 0.051-233.523-176.128-409.6-409.754-409.6zM409.677 921.574c-92.365-62.413-307.252-237.21-307.252-511.999 0-178.022 129.075-307.2 306.995-307.2 175.258 0 307.405 132.045 307.405 307.2 0 274.636-215.194 449.587-307.149 511.999z">
                                </path>
                            </svg>
                            <p class="text-[12px] mx-1" style="margin: 0;">{{ $category->name }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="relative h-[60px] w-full bg-white"></div>

        <div>
            <div class="flex items-center justify-between">
                <div class="flex">
                    <div class="flex">
                        <h3 class="text-xl font-semibold" style="margin-left: 5px;">
                            សង្ខេប
                        </h3>
                        <h3 class="pl-[5px] text-xl font-bold text-primary"></h3>
                    </div>
                    <div></div>
                </div>
            </div>

            <div class="h-[8px] w-full"></div>

            <div class="max-w-screen-lg">
                <div class="text-gray-500" style="margin-left: 5px;font-size: 16px;">
                    {!! $category->description !!}
                </div>
            </div>
        </div>

        <div class="h-[24px] w-full"></div>

        <span class="text-xl font-semibold mb-3" style="margin-left: 5px;">អត្តបទ{!! $category->name !!}</span>

        <div class="h-[12px] w-full"></div>

        <div class="relative grid w-full grid-cols-1 gap-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5">
            @php $posts = $category->posts()->where('status', 1)->paginate(10); @endphp
            @if(count($posts) > 0)
                @foreach($posts as $post)
                    <div
                        class="h-full w-[296px] flex-shrink-0 cursor-pointer px-[5px] sm:w-[296px] md:w-[244px] lg:w-[244px] xl:w-[244px] 2xl:w-[296px]">
                        <div class="relative z-20 h-[250px] w-full overflow-hidden rounded-[16px]">
                            <a href="{{ url('category/'.$post->category->slug.'/'.$post->slug) }}">
                                <div
                                    class="aspect-w-1 aspect-h-1 absolute h-full w-full transform bg-cover bg-center transition-all duration-700 ease-in-out hover:scale-125">
                                    <span
                                        style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0 none; margin: 0; padding: 0; position: absolute; inset: 0;">
                                        <img src="{{ asset('uploads/post/'.$post->image) }}"
                                             class="image z-10 h-[250px] w-full rounded-[16px] object-cover"
                                             style="position: absolute; inset: 0; box-sizing: border-box; padding: 0; border: medium none; margin: auto; display: block; width: 0; height: 0; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;" alt="">
                                    </span>
                                </div>
                            </a>
                        </div>
                        <div class="my-[8px] flex flex-col">
                            <span class="flex items-center text-[14px] text-gray-400">
                                <svg class="h-[16px] w-[16px] stroke-gray-400" viewBox="0 0 819 1024"
                                     style="display: inline-block; stroke: currentcolor; fill: currentcolor;">
                                    <path
                                        d="M409.625 204.775c-112.947 0-204.8 91.853-204.8 204.8s91.853 204.799 204.8 204.799c112.948 0 204.801-91.853 204.801-204.799s-91.853-204.8-204.801-204.8zM409.625 511.975c-56.474 0-102.4-45.926-102.4-102.4s45.926-102.4 102.4-102.4c56.474 0 102.401 45.926 102.401 102.4s-45.927 102.4-102.401 102.4zM409.42-0.025c-233.421 0-409.395 176.077-409.395 409.6 0 323.891 246.374 525.311 352.307 596.838 17.306 11.725 37.223 17.613 57.089 17.613 19.814 0 39.629-5.842 56.934-17.516 106.087-71.629 352.82-273.147 352.82-596.935 0.051-233.523-176.128-409.6-409.754-409.6zM409.677 921.574c-92.365-62.413-307.252-237.21-307.252-511.999 0-178.022 129.075-307.2 306.995-307.2 175.258 0 307.405 132.045 307.405 307.2 0 274.636-215.194 449.587-307.149 511.999z">
                                    </path>
                                </svg>&nbsp;{{ $post->category->name }}
                            </span>
                            <a href="{{ url('category/'.$post->category->slug.'/'.$post->slug) }}">
                                <span class="text-[18px] font-semibold line-clamp-2">{{ $post->name }}</span>
                            </a>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="card card-shadow mt-4">
                    <div class="card-body">
                        <h2>ចង់និយាយថាអត់មានអត្តបទទេ!!</h2>
                    </div>
                </div>
            @endif
        </div>

        <div class="h-[24px] w-full"></div>

        <div class="flex items-center justify-between border-t border-gray-200 bg-white px-4 py-3 sm:px-6">
            <div class="flex flex-1 justify-between sm:hidden">
                <span
                    class="relative inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50">previous</span><span
                    class="relative ml-3 inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50">next</span>
            </div>
            <div class="hidden sm:flex sm:flex-1 sm:items-center sm:justify-between">
                <div>
                    <div></div>
                </div>
                <div>
                    <div class="your-pagination">
                        {{ $posts->links() }}
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
