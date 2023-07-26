@extends('layouts.master')

@section('title', 'View Posts')

@section('content')

    <div class="container-fluid px-4">

        <div class="mt-4">

            <div class="d-flex justify-between items-center mb-4">
                <div class="text-2xl font-semibold mt-4 mb-4">មើលអត្ថបទទាំងអស់</div>
                <a href="{{ url('admin/add-post') }}" class="btn btn-primary float-end">
                    <i class="fas fa-plus"></i>
                    បង្កើតអត្ថបទថ្មី
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
                            <i class="fas fa-list-alt mr-1"></i>
                            ចំណងជើងអត្ថបទ
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
                    @foreach($posts as $item)
                        <tr class="align-baseline">
                            <td class="font-semibold">{{ $item->id }}</td>
                            <td class="font-semibold">{{ $item->category->name }}</td>
                            <td class="font-semibold">{{ $item->name }}</td>
                            <td>
                                <img class="rounded-2 border-2" src="{{ asset('uploads/post') }}/{{ $item->image }}"
                                     alt="" width="50"
                                     height="50">
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
                                <a href="{{ url('admin/edit-post/'. $item->id) }}" class="btn btn-primary">
                                    <i class="fas fa-edit text-white mr-1"></i>
                                    កែប្រែ
                                </a>
                            </td>
                            <td>
                                <a href="{{ url('admin/delete-post/'. $item->id) }}" class="btn btn-danger">
                                    <i class="fas fa-trash-alt text-white mr-1"></i>
                                    លុប
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>

    </div>

@endsection
