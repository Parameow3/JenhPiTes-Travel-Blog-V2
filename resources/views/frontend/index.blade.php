@extends('layouts.app')

@section('title', "JenhPiTes")
@section('meta_description', "JenhPiTes")
@section('meta_keywords', "JenhPiTes")

@section('content')

    <div class="container relative mx-auto">

        {{-- +++++++++++++++++ 1st section +++++++++++++++++ --}}
        <div class="flex items-center">
            <svg class="mr-[8px]" viewBox="0 0 776 1024"
                 style="display: inline-block; stroke: currentcolor; fill: currentcolor; width: 35px; height: 35px;">
                <path
                    d="M704.595 222.089c-26.64-4.349-53.823-7.883-80.463-11.689-20.388-2.99-44.309-2.99-63.881-9.786-27.999-9.514-36.969-38.329-48.658-62.25-13.32-26.64-26.368-53.551-39.688-80.191-10.058-20.388-19.844-38.872-41.047-49.746-28.271-14.407-64.425-10.33-90.249 7.34-19.028 13.048-27.727 32.62-37.513 52.464-13.32 27.183-26.912 54.367-40.231 81.55-10.602 21.475-18.485 45.125-43.493 52.464-23.106 6.524-50.018 7.068-73.939 10.602-48.387 7.068-114.17 5.98-138.364 57.357-26.368 55.998 26.912 93.783 61.978 128.034 19.028 18.485 39.96 36.154 57.629 55.998 23.378 26.64 15.766 53.008 10.602 83.725-5.709 33.979-11.689 67.959-17.397 101.666-1.087 7.068-2.718 14.135-3.806 21.475v0c0 0.544 0 0.816 0 1.359-0.272 1.087-0.272 2.175-0.544 3.262 0 0.816 0 2.447 0 4.349-0.816 14.951 2.175 27.727 7.611 37.513 1.631 2.99 3.262 5.709 5.437 8.699 0 0 0 0 0 0 71.492 91.608 142.985 182.945 214.205 274.553 8.155 10.602 16.854 26.368 30.445 30.717 22.562 7.34 39.416-7.883 51.649-23.65 38.872-50.018 78.016-100.035 116.889-149.781 35.067-45.125 70.133-89.977 105.472-135.102 0 0 0.816-1.087 1.903-2.99 0 0 0-0.272 0.272-0.272 1.631-2.447 3.534-5.98 5.437-10.602 0.272-0.272 0.272-0.816 0.544-1.359 0.544-1.087 0.816-2.175 1.359-3.262 0 0 0-0.272 0-0.272 4.078-10.602 7.611-24.465 4.893-37.785-1.903-14.407-4.893-28.814-7.34-43.222-6.252-36.969-14.679-74.483-19.028-111.724-4.893-39.688 22.29-58.716 47.843-83.453 23.921-23.378 47.843-46.756 71.764-70.133 45.94-51.105 12.776-115.53-50.289-125.859z"
                    fill="#2B2A4C">
                </path>
                <path
                    d="M431.401 130.752l36.698 112.539c5.98 18.485 23.378 31.261 42.95 31.261h118.52c43.765 0 61.978 55.998 26.64 81.55l-95.686 69.59c-15.766 11.417-22.562 31.805-16.31 50.561l36.698 112.539c13.592 41.591-33.979 76.114-69.318 50.561l-95.686-69.59c-15.766-11.417-37.241-11.417-53.008 0l-95.686 69.59c-35.338 25.824-82.909-8.971-69.318-50.561l36.698-112.539c5.98-18.485-0.544-38.872-16.31-50.561l-97.045-69.59c-35.338-25.824-17.126-81.55 26.64-81.55h118.52c19.572 0 36.969-12.504 42.95-31.261l36.698-112.539c13.048-41.591 71.764-41.591 85.356 0z"
                    fill="#3b71ca">
                </path>
            </svg>
            <div class="flex items-center justify-between">
                <div class="flex">
                    <div class="flex">
                        <span class="text-xl font-semibold mb-2" style="margin-left: 10px;">
                            រុករកតាមខេត្តក្រុង
                        </span>
                        <h3 class="pl-[5px] text-xl font-bold text-primary"></h3>
                    </div>
                    <div></div>
                </div>
            </div>
        </div>

        {{-- =================  categories items ===================== --}}
        <div
            class="relative grid h-auto w-full select-none flex-wrap gap-2 px-[10px] py-[20px] sm:grid-cols-2 sm:px-[0px] md:grid md:grid-cols-3 xl:grid xl:grid-cols-5">
            <div class="group flex flex-col items-center justify-center">
                <div
                    class="jomnot-fix-safari-radius relative h-[150px] w-full flex-shrink-0 cursor-pointer overflow-hidden rounded-[16px] shadow-base duration-700">
                    <a href="">
                        <div class="absolute h-full w-full rounded-[16px]">
                            <span
                                style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0 none; margin: 0; padding: 0; position: absolute; inset: 0;">
                                <img
                                    alt=""
                                    src="https://jomnot.com/_next/image?url=https%3A%2F%2Fimagedelivery.net%2FjGl7otiKn8qlUhSSX-Fxow%2F2ea6bb4f-b2f3-47ad-4d6f-6beeea58a500%2Fpublic&w=3840&q=80"
                                    class="h-full w-full rounded-[16px] object-cover transition-all duration-700 ease-in-out group-hover:scale-125"
                                    style="position: absolute; inset: 0; box-sizing: border-box; padding: 0; border: medium none; margin: auto; display: block; width: 0; height: 0; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"
                                    sizes="100vw">
                            </span>
                        </div>
                        <div
                            class="absolute flex h-full w-full items-center justify-center bg-opacity-30 text-white">
                            <span class="text-2xl font-semibold">មានបញ្ហាដោះស្រាយមិនចេញ</span>
                        </div>
                    </a>
                </div>
            </div>

            @foreach(\App\Models\Category::query()->where('navbar_status', 1)->where('status', 1)->get() as $category)
                <div class="flex flex-col items-center justify-center">
                    <div
                        class="jomnot-fix-safari-radius relative h-[150px] w-full flex-shrink-0 cursor-pointer overflow-hidden rounded-[16px] shadow-base duration-700">
                        <a href="{{ url('category/'.$category->slug) }}">
                            <div class="absolute h-full w-full rounded-[16px] image">
                                <span
                                    style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; border: 0 none; margin: 0; padding: 0; position: absolute; inset: 0;">
                                    <img
                                        alt=""
                                        src="{{ secure_asset('uploads/category/'.$category->image) }}"
                                        class="h-full w-full rounded-[16px] object-cover transition-all duration-700 ease-in-out group-hover:scale-125"
                                        style="position: absolute; inset: 0; box-sizing: border-box; padding: 0; border: medium none; margin: auto; display: block; width: 0; height: 0; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"
                                        sizes="100vw">
                                </span>
                            </div>
                            <div
                                class="absolute flex h-full w-full items-center justify-center bg-opacity-75 text-white">
                                <span class="text-2xl font-semibold">{{ $category->name }} </span>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="h-[12px] w-full"></div>


        {{-- ============================= 2nd Section ======================================= --}}
        <div class="p-[10px]">
            <a href="">
                <div class="flex items-center">
                    <svg class="mr-[10px]" viewBox="0 0 950 1024"
                         style="display: inline-block; stroke: currentcolor; fill: currentcolor; width: 30px; height: 30px;">
                        <path
                            d="M318.159 288.364l54.454-220.896c8.562-34.59 53.084-44.522 75.344-16.439l142.127 177.744c8.904 10.959 22.603 17.124 36.645 16.096l227.061-16.439c35.617-2.74 58.563 36.645 39.042 66.44l-125.003 190.074c-7.877 11.987-9.247 26.713-3.767 39.727l85.961 210.965c13.357 32.878-16.781 67.125-51.371 57.878l-219.526-60.276c-13.699-3.767-28.425-0.685-39.042 8.562l-173.977 146.922c-27.398 22.946-69.18 4.795-70.892-30.823l-10.617-227.403c-0.685-14.041-8.219-27.056-20.206-34.59l-193.498-120.209c-30.138-18.836-26.028-64.385 7.534-76.714l213.019-80.482c13.357-5.137 23.288-16.096 26.713-30.138z"
                            fill="#3b71ca">
                        </path>
                        <path
                            d="M950.025 947.628c0-1.37 0.342-2.74 0-3.767 0 0 0-0.342 0-0.342 0-0.685-0.685-1.027-0.685-1.712-0.342-1.027-0.685-2.397-1.37-3.082-11.302-23.288-63.358-27.056-82.879-30.138-66.098-9.932-133.223-13.357-200.005-15.411-148.634-5.137-304.46-7.877-451.724 16.781-31.85 5.48-89.728 12.329-107.537 44.522-18.151 33.563 38.7 43.152 59.933 47.262 142.812 27.398 295.898 23.631 440.423 19.864 76.372-2.055 153.771-4.795 229.116-16.781 28.768-4.795 95.551-12.672 111.304-45.892 1.37-2.397 2.74-4.795 3.082-7.534 0 0 0-0.342 0.342-0.342 0 0 0 0 0 0 0-1.37 0-2.397 0-3.425z"
                            fill="rgb(40, 56, 75)">
                        </path>
                        <path
                            d="M857.557 425.354c27.056-41.439 59.248-82.194 82.879-126.031 19.179-35.96 8.219-76.714-28.083-96.235-23.631-12.672-50.001-10.274-75.687-8.219-60.618 4.452-121.236 8.904-181.854 13.357-4.11 0.342-14.384 2.74-19.864 2.055 1.712-1.712-5.822-11.987-4.795-10.274-17.124-25.001-38.7-48.289-57.536-71.92-32.535-40.755-72.947-116.441-128.771-126.373-47.262-8.562-101.030 15.069-118.496 60.961-7.534 19.521-10.959 41.439-15.754 61.645-13.699 55.823-27.398 111.304-41.097 167.128-0.685 0-1.712 0-4.11 1.712-7.192 4.795-18.151 6.849-26.028 9.932-31.508 11.644-62.673 23.288-94.181 35.275-45.207 17.124-115.414 30.823-137.332 79.454-27.74 61.645 35.96 91.783 78.084 118.154 27.398 17.124 54.796 34.247 82.536 51.029 17.809 10.959 42.124 21.233 57.193 35.617 11.987 11.302 10.274 19.179 10.959 34.247 1.37 31.85 3.082 63.358 4.452 95.208 2.055 41.439-8.219 118.839 20.548 153.429 48.974 59.248 123.633 15.754 168.84-21.918 23.973-20.206 47.946-40.412 71.92-60.618 19.521-16.439 47.604-33.22 63.358-53.426 26.028 10.274 56.166 15.069 83.221 22.603 47.946 13.014 106.167 39.385 157.196 37.33 42.467-1.712 92.126-30.823 97.948-76.714 2.74-22.261-8.219-42.467-16.439-62.33-22.603-55.481-46.919-110.962-68.153-167.128-5.48-14.384-8.562-21.576-1.712-36.987 9.932-20.891 28.083-41.439 40.755-60.961zM346.585 860.982c5.48-4.795 2.055 3.425 0 0v0zM776.391 395.559c-20.548 31.165-60.961 73.975-65.413 113.359-4.452 39.042 27.74 89.043 41.782 123.291 10.959 26.371 21.576 53.084 32.535 79.454 2.055 5.137 7.877 28.425 13.014 41.439-1.027-0.342-2.397-0.342-3.425-0.685-29.795-8.219-59.248-16.096-89.043-24.316-41.097-11.302-89.043-32.193-132.195-30.823-52.741 1.712-90.413 44.179-128.086 75.687-21.576 18.151-43.494 36.645-65.070 54.796-3.082 2.74-22.603 15.754-34.932 26.371 0-0.342 0-0.685 0-1.027 0.342-5.822-0.685-11.644-0.685-17.124-1.027-25.001-2.397-50.344-3.425-75.344-2.055-44.522-2.74-89.728-6.165-134.25-4.452-56.166-65.413-79.112-107.537-105.14-27.74-17.124-55.481-34.59-83.564-51.714-11.644-7.192-36.645-17.124-41.439-31.165-6.165-17.466 14.041-17.466 29.795-23.288 30.138-11.302 60.276-22.603 90.071-33.905 48.974-18.494 122.606-32.535 143.155-86.989 0.685-1.712 0.685-3.082 1.37-4.795 0.685-1.37 1.37-2.74 1.712-4.452 10.617-43.494 21.576-86.989 32.193-130.483 5.137-20.206 9.932-40.412 15.069-60.618 9.247 10.617 21.233 22.261 25.343 27.398 18.494 23.288 37.33 46.577 55.823 69.522 31.165 39.042 57.193 86.646 112.674 89.386 42.467 1.37 86.989-6.165 129.798-9.247 14.726-1.027 29.11-2.055 43.837-3.082l43.152-4.11c0 0 0.342 0 0.342 0h1.712c8.219-0.685 40.070-1.027 14.726 33.22 0 0 0 0 0 0l-6.165 7.877c0 0 0 0 0 0-3.767 5.137-7.877 10.274-10.274 13.699-16.781 25.686-33.563 51.371-50.686 77.057z"
                            fill="rgb(40, 56, 75)">
                        </path>
                    </svg>
                    <div class="w-full">
                        <div class="flex items-center justify-between">
                            <div class="flex">
                                <div class="flex">
                                    <h3 class="text-xl font-semibold" style="margin-left: 10px;">ចំណត</h3>
                                    <h3 class="pl-[5px] text-xl font-bold text-primary">ភ្នំពេញ</h3>
                                </div>
                                <div></div>
                            </div>
                            <span class="text-xs font-semibold text-primary">
                                @php $category = \App\Models\Category::query()->where('id', 1)->first(); @endphp
                                @if ($category)
                                    <a href="{{ url('category/'.$category->slug) }}" class="text-xs font-semibold text-primary">មើលទាំងអស់</a>
                                @endif
                            </span>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        {{-- ============================== Post Items  ===================================== --}}
        <div class="relative w-full">
            <div class="w-full overflow-auto" style="overflow: auto;">
                <div class="relative flex h-auto w-full select-none py-[20px]"
                     style="transform: translate3d(0px, 0px, 0px);">

                    @php $posts = \App\Models\Post::query()->where('status', 1)->where('category_id', 1)->get(); @endphp
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
                                                <img
                                                    src="{{ secure_asset('uploads/post/'.$post->image) }}"
                                                    class="image z-10 h-[250px] w-full rounded-[16px] object-cover"
                                                    style="position: absolute; inset: 0; box-sizing: border-box; padding: 0; border: medium none; margin: auto; display: block; width: 0; height: 0; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;" alt="">
                                            </span>
                                        </div>
                                    </a>
                                </div>
                                <div class="my-[8px] flex flex-col">
                                    <span
                                        class="flex items-center text-[14px] text-gray-400">
                                        <svg class="h-[16px] w-[16px] stroke-gray-400" viewBox="0 0 819 1024"
                                             style="display: inline-block; stroke: currentcolor; fill: currentcolor;">
                                            <path
                                                d="M409.625 204.775c-112.947 0-204.8 91.853-204.8 204.8s91.853 204.799 204.8 204.799c112.948 0 204.801-91.853 204.801-204.799s-91.853-204.8-204.801-204.8zM409.625 511.975c-56.474 0-102.4-45.926-102.4-102.4s45.926-102.4 102.4-102.4c56.474 0 102.401 45.926 102.401 102.4s-45.927 102.4-102.401 102.4zM409.42-0.025c-233.421 0-409.395 176.077-409.395 409.6 0 323.891 246.374 525.311 352.307 596.838 17.306 11.725 37.223 17.613 57.089 17.613 19.814 0 39.629-5.842 56.934-17.516 106.087-71.629 352.82-273.147 352.82-596.935 0.051-233.523-176.128-409.6-409.754-409.6zM409.677 921.574c-92.365-62.413-307.252-237.21-307.252-511.999 0-178.022 129.075-307.2 306.995-307.2 175.258 0 307.405 132.045 307.405 307.2 0 274.636-215.194 449.587-307.149 511.999z">
                                            </path>
                                        </svg>&nbsp;{{ $post->category->name }}
                                    </span>
                                    <a href="{{ url('category/'.$post->category->slug.'/'.$post->slug) }}">
                                        <span
                                            class="text-[18px] font-semibold line-clamp-2">{{ $post->name }}
                                        </span>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
            {{-- ========================= End of Post Item============================ --}}
            <button
                class="shadow-lg hover:shadow-xl flex absolute top-1/2 right-2.5 z-10 ml-4 h-8 w-8  -translate-y-1/2 scale-100 cursor-pointer touch-manipulation items-center justify-center rounded-full border-0 bg-white fill-gray-900 p-2 outline-0 transition-transform hover:scale-110 hover:fill-yellow-500 disabled:hidden">
                <svg class="h-full w-full" viewBox="0 0 238.003 238.003">
                    <path
                        d="M181.776 107.719L78.705 4.648c-6.198-6.198-16.273-6.198-22.47 0s-6.198 16.273 0 22.47l91.883 91.883-91.883 91.883c-6.198 6.198-6.198 16.273 0 22.47s16.273 6.198 22.47 0l103.071-103.039a15.741 15.741 0 0 0 4.64-11.283c0-4.13-1.526-8.199-4.64-11.313z">
                    </path>
                </svg>
            </button>
        </div>

        {{-- saperate div --}}
        <div class="h-[12px] w-full"></div>


        {{-- ============================= 3rd Section ======================================= --}}
        <div class="p-[10px]">
            <a href="">
                <div class="flex items-center">
                    <svg class="mr-[10px]" viewBox="0 0 950 1024"
                         style="display: inline-block; stroke: currentcolor; fill: currentcolor; width: 30px; height: 30px;">
                        <path
                            d="M318.159 288.364l54.454-220.896c8.562-34.59 53.084-44.522 75.344-16.439l142.127 177.744c8.904 10.959 22.603 17.124 36.645 16.096l227.061-16.439c35.617-2.74 58.563 36.645 39.042 66.44l-125.003 190.074c-7.877 11.987-9.247 26.713-3.767 39.727l85.961 210.965c13.357 32.878-16.781 67.125-51.371 57.878l-219.526-60.276c-13.699-3.767-28.425-0.685-39.042 8.562l-173.977 146.922c-27.398 22.946-69.18 4.795-70.892-30.823l-10.617-227.403c-0.685-14.041-8.219-27.056-20.206-34.59l-193.498-120.209c-30.138-18.836-26.028-64.385 7.534-76.714l213.019-80.482c13.357-5.137 23.288-16.096 26.713-30.138z"
                            fill="#3b71ca">
                        </path>
                        <path
                            d="M950.025 947.628c0-1.37 0.342-2.74 0-3.767 0 0 0-0.342 0-0.342 0-0.685-0.685-1.027-0.685-1.712-0.342-1.027-0.685-2.397-1.37-3.082-11.302-23.288-63.358-27.056-82.879-30.138-66.098-9.932-133.223-13.357-200.005-15.411-148.634-5.137-304.46-7.877-451.724 16.781-31.85 5.48-89.728 12.329-107.537 44.522-18.151 33.563 38.7 43.152 59.933 47.262 142.812 27.398 295.898 23.631 440.423 19.864 76.372-2.055 153.771-4.795 229.116-16.781 28.768-4.795 95.551-12.672 111.304-45.892 1.37-2.397 2.74-4.795 3.082-7.534 0 0 0-0.342 0.342-0.342 0 0 0 0 0 0 0-1.37 0-2.397 0-3.425z"
                            fill="rgb(40, 56, 75)">
                        </path>
                        <path
                            d="M857.557 425.354c27.056-41.439 59.248-82.194 82.879-126.031 19.179-35.96 8.219-76.714-28.083-96.235-23.631-12.672-50.001-10.274-75.687-8.219-60.618 4.452-121.236 8.904-181.854 13.357-4.11 0.342-14.384 2.74-19.864 2.055 1.712-1.712-5.822-11.987-4.795-10.274-17.124-25.001-38.7-48.289-57.536-71.92-32.535-40.755-72.947-116.441-128.771-126.373-47.262-8.562-101.030 15.069-118.496 60.961-7.534 19.521-10.959 41.439-15.754 61.645-13.699 55.823-27.398 111.304-41.097 167.128-0.685 0-1.712 0-4.11 1.712-7.192 4.795-18.151 6.849-26.028 9.932-31.508 11.644-62.673 23.288-94.181 35.275-45.207 17.124-115.414 30.823-137.332 79.454-27.74 61.645 35.96 91.783 78.084 118.154 27.398 17.124 54.796 34.247 82.536 51.029 17.809 10.959 42.124 21.233 57.193 35.617 11.987 11.302 10.274 19.179 10.959 34.247 1.37 31.85 3.082 63.358 4.452 95.208 2.055 41.439-8.219 118.839 20.548 153.429 48.974 59.248 123.633 15.754 168.84-21.918 23.973-20.206 47.946-40.412 71.92-60.618 19.521-16.439 47.604-33.22 63.358-53.426 26.028 10.274 56.166 15.069 83.221 22.603 47.946 13.014 106.167 39.385 157.196 37.33 42.467-1.712 92.126-30.823 97.948-76.714 2.74-22.261-8.219-42.467-16.439-62.33-22.603-55.481-46.919-110.962-68.153-167.128-5.48-14.384-8.562-21.576-1.712-36.987 9.932-20.891 28.083-41.439 40.755-60.961zM346.585 860.982c5.48-4.795 2.055 3.425 0 0v0zM776.391 395.559c-20.548 31.165-60.961 73.975-65.413 113.359-4.452 39.042 27.74 89.043 41.782 123.291 10.959 26.371 21.576 53.084 32.535 79.454 2.055 5.137 7.877 28.425 13.014 41.439-1.027-0.342-2.397-0.342-3.425-0.685-29.795-8.219-59.248-16.096-89.043-24.316-41.097-11.302-89.043-32.193-132.195-30.823-52.741 1.712-90.413 44.179-128.086 75.687-21.576 18.151-43.494 36.645-65.070 54.796-3.082 2.74-22.603 15.754-34.932 26.371 0-0.342 0-0.685 0-1.027 0.342-5.822-0.685-11.644-0.685-17.124-1.027-25.001-2.397-50.344-3.425-75.344-2.055-44.522-2.74-89.728-6.165-134.25-4.452-56.166-65.413-79.112-107.537-105.14-27.74-17.124-55.481-34.59-83.564-51.714-11.644-7.192-36.645-17.124-41.439-31.165-6.165-17.466 14.041-17.466 29.795-23.288 30.138-11.302 60.276-22.603 90.071-33.905 48.974-18.494 122.606-32.535 143.155-86.989 0.685-1.712 0.685-3.082 1.37-4.795 0.685-1.37 1.37-2.74 1.712-4.452 10.617-43.494 21.576-86.989 32.193-130.483 5.137-20.206 9.932-40.412 15.069-60.618 9.247 10.617 21.233 22.261 25.343 27.398 18.494 23.288 37.33 46.577 55.823 69.522 31.165 39.042 57.193 86.646 112.674 89.386 42.467 1.37 86.989-6.165 129.798-9.247 14.726-1.027 29.11-2.055 43.837-3.082l43.152-4.11c0 0 0.342 0 0.342 0h1.712c8.219-0.685 40.070-1.027 14.726 33.22 0 0 0 0 0 0l-6.165 7.877c0 0 0 0 0 0-3.767 5.137-7.877 10.274-10.274 13.699-16.781 25.686-33.563 51.371-50.686 77.057z"
                            fill="rgb(40, 56, 75)">
                        </path>
                    </svg>
                    <div class="w-full">
                        <div class="flex items-center justify-between">
                            <div class="flex">
                                <div class="flex">
                                    <h3 class="text-xl font-semibold" style="margin-left: 10px;">ចំណត</h3>
                                    <h3 class="pl-[5px] text-xl font-bold text-primary">កំពត</h3>
                                </div>
                                <div></div>
                            </div>
                            <span class="text-xs font-semibold text-primary">
                                @php $category = \App\Models\Category::query()->where('id', 2)->first(); @endphp
                                @if ($category)
                                    <a href="{{ url('category/'.$category->slug) }}" class="text-xs font-semibold text-primary">មើលទាំងអស់</a>
                                @endif
                            </span>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        {{-- ============================== Post Items  ===================================== --}}
        <div class="relative w-full">
            <div class="w-full overflow-auto" style="overflow: auto;">
                <div class="relative flex h-auto w-full select-none py-[20px]"
                     style="transform: translate3d(0px, 0px, 0px);">

                    @php $posts = \App\Models\Post::query()->where('status', 1)->where('category_id', 2)->get(); @endphp
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
                                                <img
                                                    src="{{ secure_asset('uploads/post/'.$post->image) }}"
                                                    class="image z-10 h-[250px] w-full rounded-[16px] object-cover"
                                                    style="position: absolute; inset: 0; box-sizing: border-box; padding: 0; border: medium none; margin: auto; display: block; width: 0; height: 0; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;" alt="">
                                            </span>
                                        </div>
                                    </a>
                                </div>
                                <div class="my-[8px] flex flex-col">
                                    <span
                                        class="flex items-center text-[14px] text-gray-400">
                                        <svg class="h-[16px] w-[16px] stroke-gray-400" viewBox="0 0 819 1024"
                                             style="display: inline-block; stroke: currentcolor; fill: currentcolor;">
                                            <path
                                                d="M409.625 204.775c-112.947 0-204.8 91.853-204.8 204.8s91.853 204.799 204.8 204.799c112.948 0 204.801-91.853 204.801-204.799s-91.853-204.8-204.801-204.8zM409.625 511.975c-56.474 0-102.4-45.926-102.4-102.4s45.926-102.4 102.4-102.4c56.474 0 102.401 45.926 102.401 102.4s-45.927 102.4-102.401 102.4zM409.42-0.025c-233.421 0-409.395 176.077-409.395 409.6 0 323.891 246.374 525.311 352.307 596.838 17.306 11.725 37.223 17.613 57.089 17.613 19.814 0 39.629-5.842 56.934-17.516 106.087-71.629 352.82-273.147 352.82-596.935 0.051-233.523-176.128-409.6-409.754-409.6zM409.677 921.574c-92.365-62.413-307.252-237.21-307.252-511.999 0-178.022 129.075-307.2 306.995-307.2 175.258 0 307.405 132.045 307.405 307.2 0 274.636-215.194 449.587-307.149 511.999z">
                                            </path>
                                        </svg>&nbsp;{{ $post->category->name }}
                                    </span>
                                    <a href="{{ url('category/'.$post->category->slug.'/'.$post->slug) }}">
                                        <span
                                            class="text-[18px] font-semibold line-clamp-2">{{ $post->name }}
                                        </span>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
            {{-- ========================= End of Post Item============================ --}}
            <button
                class="shadow-lg hover:shadow-xl flex absolute top-1/2 right-2.5 z-10 ml-4 h-8 w-8  -translate-y-1/2 scale-100 cursor-pointer touch-manipulation items-center justify-center rounded-full border-0 bg-white fill-gray-900 p-2 outline-0 transition-transform hover:scale-110 hover:fill-yellow-500 disabled:hidden">
                <svg class="h-full w-full" viewBox="0 0 238.003 238.003">
                    <path
                        d="M181.776 107.719L78.705 4.648c-6.198-6.198-16.273-6.198-22.47 0s-6.198 16.273 0 22.47l91.883 91.883-91.883 91.883c-6.198 6.198-6.198 16.273 0 22.47s16.273 6.198 22.47 0l103.071-103.039a15.741 15.741 0 0 0 4.64-11.283c0-4.13-1.526-8.199-4.64-11.313z">
                    </path>
                </svg>
            </button>
        </div>

        {{-- saperate div --}}
        <div class="h-[12px] w-full"></div>


        {{-- ============================= 4th Section ======================================= --}}
        <div class="p-[10px]">
            <a href="">
                <div class="flex items-center">
                    <svg class="mr-[10px]" viewBox="0 0 950 1024"
                         style="display: inline-block; stroke: currentcolor; fill: currentcolor; width: 30px; height: 30px;">
                        <path
                            d="M318.159 288.364l54.454-220.896c8.562-34.59 53.084-44.522 75.344-16.439l142.127 177.744c8.904 10.959 22.603 17.124 36.645 16.096l227.061-16.439c35.617-2.74 58.563 36.645 39.042 66.44l-125.003 190.074c-7.877 11.987-9.247 26.713-3.767 39.727l85.961 210.965c13.357 32.878-16.781 67.125-51.371 57.878l-219.526-60.276c-13.699-3.767-28.425-0.685-39.042 8.562l-173.977 146.922c-27.398 22.946-69.18 4.795-70.892-30.823l-10.617-227.403c-0.685-14.041-8.219-27.056-20.206-34.59l-193.498-120.209c-30.138-18.836-26.028-64.385 7.534-76.714l213.019-80.482c13.357-5.137 23.288-16.096 26.713-30.138z"
                            fill="#3b71ca">
                        </path>
                        <path
                            d="M950.025 947.628c0-1.37 0.342-2.74 0-3.767 0 0 0-0.342 0-0.342 0-0.685-0.685-1.027-0.685-1.712-0.342-1.027-0.685-2.397-1.37-3.082-11.302-23.288-63.358-27.056-82.879-30.138-66.098-9.932-133.223-13.357-200.005-15.411-148.634-5.137-304.46-7.877-451.724 16.781-31.85 5.48-89.728 12.329-107.537 44.522-18.151 33.563 38.7 43.152 59.933 47.262 142.812 27.398 295.898 23.631 440.423 19.864 76.372-2.055 153.771-4.795 229.116-16.781 28.768-4.795 95.551-12.672 111.304-45.892 1.37-2.397 2.74-4.795 3.082-7.534 0 0 0-0.342 0.342-0.342 0 0 0 0 0 0 0-1.37 0-2.397 0-3.425z"
                            fill="rgb(40, 56, 75)">
                        </path>
                        <path
                            d="M857.557 425.354c27.056-41.439 59.248-82.194 82.879-126.031 19.179-35.96 8.219-76.714-28.083-96.235-23.631-12.672-50.001-10.274-75.687-8.219-60.618 4.452-121.236 8.904-181.854 13.357-4.11 0.342-14.384 2.74-19.864 2.055 1.712-1.712-5.822-11.987-4.795-10.274-17.124-25.001-38.7-48.289-57.536-71.92-32.535-40.755-72.947-116.441-128.771-126.373-47.262-8.562-101.030 15.069-118.496 60.961-7.534 19.521-10.959 41.439-15.754 61.645-13.699 55.823-27.398 111.304-41.097 167.128-0.685 0-1.712 0-4.11 1.712-7.192 4.795-18.151 6.849-26.028 9.932-31.508 11.644-62.673 23.288-94.181 35.275-45.207 17.124-115.414 30.823-137.332 79.454-27.74 61.645 35.96 91.783 78.084 118.154 27.398 17.124 54.796 34.247 82.536 51.029 17.809 10.959 42.124 21.233 57.193 35.617 11.987 11.302 10.274 19.179 10.959 34.247 1.37 31.85 3.082 63.358 4.452 95.208 2.055 41.439-8.219 118.839 20.548 153.429 48.974 59.248 123.633 15.754 168.84-21.918 23.973-20.206 47.946-40.412 71.92-60.618 19.521-16.439 47.604-33.22 63.358-53.426 26.028 10.274 56.166 15.069 83.221 22.603 47.946 13.014 106.167 39.385 157.196 37.33 42.467-1.712 92.126-30.823 97.948-76.714 2.74-22.261-8.219-42.467-16.439-62.33-22.603-55.481-46.919-110.962-68.153-167.128-5.48-14.384-8.562-21.576-1.712-36.987 9.932-20.891 28.083-41.439 40.755-60.961zM346.585 860.982c5.48-4.795 2.055 3.425 0 0v0zM776.391 395.559c-20.548 31.165-60.961 73.975-65.413 113.359-4.452 39.042 27.74 89.043 41.782 123.291 10.959 26.371 21.576 53.084 32.535 79.454 2.055 5.137 7.877 28.425 13.014 41.439-1.027-0.342-2.397-0.342-3.425-0.685-29.795-8.219-59.248-16.096-89.043-24.316-41.097-11.302-89.043-32.193-132.195-30.823-52.741 1.712-90.413 44.179-128.086 75.687-21.576 18.151-43.494 36.645-65.070 54.796-3.082 2.74-22.603 15.754-34.932 26.371 0-0.342 0-0.685 0-1.027 0.342-5.822-0.685-11.644-0.685-17.124-1.027-25.001-2.397-50.344-3.425-75.344-2.055-44.522-2.74-89.728-6.165-134.25-4.452-56.166-65.413-79.112-107.537-105.14-27.74-17.124-55.481-34.59-83.564-51.714-11.644-7.192-36.645-17.124-41.439-31.165-6.165-17.466 14.041-17.466 29.795-23.288 30.138-11.302 60.276-22.603 90.071-33.905 48.974-18.494 122.606-32.535 143.155-86.989 0.685-1.712 0.685-3.082 1.37-4.795 0.685-1.37 1.37-2.74 1.712-4.452 10.617-43.494 21.576-86.989 32.193-130.483 5.137-20.206 9.932-40.412 15.069-60.618 9.247 10.617 21.233 22.261 25.343 27.398 18.494 23.288 37.33 46.577 55.823 69.522 31.165 39.042 57.193 86.646 112.674 89.386 42.467 1.37 86.989-6.165 129.798-9.247 14.726-1.027 29.11-2.055 43.837-3.082l43.152-4.11c0 0 0.342 0 0.342 0h1.712c8.219-0.685 40.070-1.027 14.726 33.22 0 0 0 0 0 0l-6.165 7.877c0 0 0 0 0 0-3.767 5.137-7.877 10.274-10.274 13.699-16.781 25.686-33.563 51.371-50.686 77.057z"
                            fill="rgb(40, 56, 75)">
                        </path>
                    </svg>
                    <div class="w-full">
                        <div class="flex items-center justify-between">
                            <div class="flex">
                                <div class="flex">
                                    <h3 class="text-xl font-semibold" style="margin-left: 10px;">ចំណត</h3>
                                    <h3 class="pl-[5px] text-xl font-bold text-primary">សៀមរាប</h3>
                                </div>
                                <div></div>
                            </div>
                            <span class="text-xs font-semibold text-primary">
                                @php $category = \App\Models\Category::query()->where('id', 3)->first(); @endphp
                                @if ($category)
                                    <a href="{{ url('category/'.$category->slug) }}" class="text-xs font-semibold text-primary">មើលទាំងអស់</a>
                                @endif
                            </span>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        {{-- ============================== Post Items  ===================================== --}}
        <div class="relative w-full">
            <div class="w-full overflow-auto" style="overflow: auto;">
                <div class="relative flex h-auto w-full select-none py-[20px]"
                     style="transform: translate3d(0px, 0px, 0px);">

                    @php $posts = \App\Models\Post::query()->where('status', 1)->where('category_id', 3)->get(); @endphp
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
                                                <img
                                                    src="{{ secure_asset('uploads/post/'.$post->image) }}"
                                                    class="image z-10 h-[250px] w-full rounded-[16px] object-cover"
                                                    style="position: absolute; inset: 0; box-sizing: border-box; padding: 0; border: medium none; margin: auto; display: block; width: 0; height: 0; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;" alt="">
                                            </span>
                                        </div>
                                    </a>
                                </div>
                                <div class="my-[8px] flex flex-col">
                                    <span
                                        class="flex items-center text-[14px] text-gray-400">
                                        <svg class="h-[16px] w-[16px] stroke-gray-400" viewBox="0 0 819 1024"
                                             style="display: inline-block; stroke: currentcolor; fill: currentcolor;">
                                            <path
                                                d="M409.625 204.775c-112.947 0-204.8 91.853-204.8 204.8s91.853 204.799 204.8 204.799c112.948 0 204.801-91.853 204.801-204.799s-91.853-204.8-204.801-204.8zM409.625 511.975c-56.474 0-102.4-45.926-102.4-102.4s45.926-102.4 102.4-102.4c56.474 0 102.401 45.926 102.401 102.4s-45.927 102.4-102.401 102.4zM409.42-0.025c-233.421 0-409.395 176.077-409.395 409.6 0 323.891 246.374 525.311 352.307 596.838 17.306 11.725 37.223 17.613 57.089 17.613 19.814 0 39.629-5.842 56.934-17.516 106.087-71.629 352.82-273.147 352.82-596.935 0.051-233.523-176.128-409.6-409.754-409.6zM409.677 921.574c-92.365-62.413-307.252-237.21-307.252-511.999 0-178.022 129.075-307.2 306.995-307.2 175.258 0 307.405 132.045 307.405 307.2 0 274.636-215.194 449.587-307.149 511.999z">
                                            </path>
                                        </svg>&nbsp;{{ $post->category->name }}
                                    </span>
                                    <a href="{{ url('category/'.$post->category->slug.'/'.$post->slug) }}">
                                        <span
                                            class="text-[18px] font-semibold line-clamp-2">{{ $post->name }}
                                        </span>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
            {{-- ========================= End of Post Item============================ --}}
            <button
                class="shadow-lg hover:shadow-xl flex absolute top-1/2 right-2.5 z-10 ml-4 h-8 w-8  -translate-y-1/2 scale-100 cursor-pointer touch-manipulation items-center justify-center rounded-full border-0 bg-white fill-gray-900 p-2 outline-0 transition-transform hover:scale-110 hover:fill-yellow-500 disabled:hidden">
                <svg class="h-full w-full" viewBox="0 0 238.003 238.003">
                    <path
                        d="M181.776 107.719L78.705 4.648c-6.198-6.198-16.273-6.198-22.47 0s-6.198 16.273 0 22.47l91.883 91.883-91.883 91.883c-6.198 6.198-6.198 16.273 0 22.47s16.273 6.198 22.47 0l103.071-103.039a15.741 15.741 0 0 0 4.64-11.283c0-4.13-1.526-8.199-4.64-11.313z">
                    </path>
                </svg>
            </button>
        </div>

        {{-- saperate div --}}
        <div class="h-[12px] w-full"></div>

@endsection
