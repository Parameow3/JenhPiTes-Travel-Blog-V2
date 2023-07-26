@extends('layouts.master')

@section('title', 'Category')

@section('content')

    <!-- Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{ url('admin/delete-category') }}" method="POST">
                    @csrf
                    <div class="modal-header">
                        <div class="modal-title fs-5 font-semibold" id="exampleModalLabel">លុបខេត្ត-ក្រុងនិងអត្ថបទរបស់វា</div>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="category_delete_id" id="category_id">
                        <div class="font-semibold">អ្នកប្រាកដជាចង់លុបខេត្ត-ក្រុងនិងអត្ថបទរបស់វា ?</div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-danger"> បាទ/ចាស លុបចោល</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="container-fluid px-4">

        <div class=" mt-4">
            <div class="d-flex justify-between items-center mb-4">
                <div class="text-2xl font-semibold mt-4 mb-4">មើលខេត្ត-ក្រុងទាំងអស់</div>
                <a href="{{ url('admin/add-category') }}" class="btn btn-primary float-end">
                    <i class="fas fa-plus"></i>
                    បង្កើតខេត្ត-ក្រុងថ្មី
                </a>
            </div>

            <div class="card-body">
                @if(session('message'))
                    <div class="alert alert-success">{{ session('message') }}</div>
                @endif

                <table id="dataTable" class="table table-bordered">
                    <thead>
                    <tr class="align-baseline">
                        <th>
                            <i class="fas fa-list-ol mr-1"></i>
                            លេខរៀង
                        </th>
                        <th>
                            <i class="fas fa-list-alt mr-1"></i>
                            ឈ្មោះខេត្ត-ក្រុង
                        </th>
                        <th>
                            <i class="fas fa-image mr-1"></i>
                            រូបភាព
                        </th>
                        <th>
                            <i class="fas fa-info-circle mr-1"></i>
                            ស្ថានភាព
                        </th>
                        <th>
                            <i class="fas fa-edit mr-1"></i>
                            កែប្រែ
                        </th>
                        <th>
                            <i class="fas fa-trash-alt mr-1"></i>
                            លុប
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($category as $item)
                        <tr class="align-baseline">
                            <td class="font-semibold">{{ $item->id }}</td>
                            <td class="font-semibold">{{ $item->name }}</td>
                            <td>
                                <img class="rounded-2 border-2" src="{{ asset('uploads/category') }}/{{ $item->image }}" alt="" width="50" height="50">
                            </td>
                            <td>
                                @if($item->status == 1)
                                    <i class="fas fa-check-square text-success"></i>
                                    <span class="text-success font-semibold">កំពុងបង្ហាញ</span>
                                @else
                                    <i class="fas fa-times-circle text-danger"></i>
                                    <span class="text-danger font-semibold">មិនបង្ហាញ</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{ url('admin/edit-category/'. $item->id) }}" class="btn btn-primary">
                                    <i class="fas fa-edit text-white mr-1"></i>
                                    កែប្រែ
                                </a>
                            </td>
                            <td>
                                {{--                                <a href="{{ url('admin/delete-category/'. $item->id) }}" class="btn btn-danger">Delete</a>--}}
                                <button type="button" class="btn btn-danger deleteCategoryBtn" value="{{ $item->id }}">
                                    <i class="fas fa-trash-alt text-white mr-1"></i>
                                    លុប
                                </button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>

@endsection

@section('scripts')

    <script>
        $(document).ready(function () {
            // $('.deleteCategoryBtn').click(function (e) {

            $(document).on('click', '.deleteCategoryBtn', function (e) {

                e.preventDefault();

                var category_id = $(this).val();
                $('#category_id').val(category_id);
                $('#deleteModal').modal('show');
            });
        });
    </script>

@endsection
