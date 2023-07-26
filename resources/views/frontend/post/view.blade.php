@extends('layouts.app')

@section('title', "$post->meta_title")
@section('meta_description', "$post->meta_description")
@section('meta_keywords', "$post->meta_keywords")

@section('content')

    <main class="container relative mx-auto">
        <div class="relative h-[400px] w-full">
            <div class="absolute top-0 z-10 h-[400px] w-full items-center justify-center text-center">
            <span
                style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0 none; margin: 0; padding: 0; position: absolute; inset: 0;">
                <img src="{{ asset('uploads/post/'.$post->image) }}"
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
                    <h1 class="w-full text-[24px] font-semibold line-clamp-3 mb-1"
                        style="margin: 0;">{{ $post->name }}
                    </h1>
                </div>
            </div>
        </div>

        <div class="relative h-[60px] w-full bg-white"></div>
        <span class="text-xl font-semibold mb-3" style="margin-left: 5px;">
            <i class="fa fa-align-left"></i>
            អត្តបទ
        </span>

        <div class="max-w-screen-lg mt-[20px]">
            <div class="text-gray-500" style="margin-left: 5px; font-size: 17px;">
                {!! $post->description !!}
            </div>
        </div>

        <div class="comment-area mt-4">

            @if (session('message'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>{{ session('message') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                            aria-label="Close"></button>
                </div>
            @endif

            <div class="card card-body">
                <div class="card-title font-semibold mb-2">
                    <i class="fa fa-comments"></i>
                    បញ្ចេញមតិរបស់អ្នក
                </div>
                <form action="{{ url('comments') }}" method="POST">
                    @csrf
                    <input type="text" value="{{ $post->slug }}" name="post_slug" hidden>
                    <textarea name="comment_body" class="form-control font-semibold" rows="3" required></textarea>
                    <button type="submit" class="btn btn-primary mt-3 float-end">
                        <i class="fa fa-paper-plane"></i>
                        បញ្ចូលមតិ
                    </button>
                </form>
            </div>

            @forelse($post->comments as $comment)
                <div class="comment-container card card-body shadow-sm mt-3">
                    <div class="detail-area">
                        <div class="user-name mb-1 font-semibold">
                            <i class="fa fa-user"></i>
                            @if ($comment->user)
                                {{ $comment->user->name }}
                            @endif
                            <small
                                class="ms-3 text-primary float-end">
                                <i class="fa fa-clock"></i>
                                {!! $comment->created_at->diffForHumans() !!}
                            </small>
                        </div>
                        <p class="user-comment mb-1 mt-3">
                            {!!  $comment->comment_body !!}
                        </p>
                    </div>

                    @if(auth()->check() && auth()->user()->id == $comment->user_id)
                        <div>
                            <button type="button" value="{{ $comment->id }}" class="deleteComment btn btn-sm btn-danger float-end">
                                <i class="fa fa-trash"></i>
                                លុបចេញ
                            </button>
                        </div>
                    @endif

                </div>
        </div>

        @empty
            <div class="font-semibold mt-4 text-center text-danger">
                <i class="fa fa-exclamation-triangle"></i>
                មិនមានការបញ្ចេញមតិ
            </div>
        @endforelse

    </main>

@endsection

@section('scripts')

    <script>

        $(document).ready(function () {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                }
            });

            $(document).on('click', '.deleteComment', function () {

                if (confirm('Are you sure you want to delete this comment?')) {

                    var thisClicked = $(this);
                    var commentId = thisClicked.val();

                    $.ajax({
                        type: 'POST',
                        url: "/delete-comment",
                        data: {
                            'comment_id': commentId,
                        },
                        success: function (res) {
                            if (res.status === 200) {
                                thisClicked.closest('.comment-container').remove();
                            } else {
                                alert(res.message);
                            }
                        }
                    });
                }

            });
        });

    </script>

@endsection
