@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1>Travels</h1>

            <!-- Modal trigger button -->
            <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#createModal">
                Create Travel +
            </button>

            <!-- Create Modal -->
            <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="createModalLabel">Create Travel</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('travels.create') }}" method="POST">
                                @csrf
                                <!-- Form fields -->
                                <div class="mb-3">
                                    <label for="name" class="form-label text-white">Name</label>
                                    <input type="text" class="form-control" name="name" id="name" required>
                                </div>
                                <div class="mb-3">
                                    <label for="description" class="form-label text-white">Description</label>
                                    <input type="text" class="form-control" name="description" id="description" required>
                                </div>
                                <div class="mb-3">
                                    <label for="location" class="form-label text-white">Location</label>
                                    <input type="text" class="form-control" name="location" id="location" required>
                                </div>

                                <div class="mb-3">
                                    <label for="visitors" class="form-label text-white">Visitors</label>
                                    <input type="number" class="form-control" name="visitors" id="visitors" required>
                                </div>

                                <div class="mb-3">
                                    <label for="rating" class="form-label text-white">Rating</label>
                                    <input type="number" class="form-control" name="rating" id="rating" required>
                                </div>

                                <div class="mb-3">
                                    <label for="category" class="form-label text-white">Category</label>
                                    <select name="category" id="category" class="form-select" required>
                                        <option value="Suiza">Suiza</option>
                                        <option value="Italia">Italia</option>
                                        <option value="Francia">Francia</option>
                                    </select>
                                </div>

                                <div class="d-flex justify-content-end gap-2">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
            <style>
                .fd {
                    background-color: rgba(12, 12, 12, 0.521);
                    border-radius: 10px;
                    padding: 20px;
                }

                .table {
                    background-color: transparent;
                }

                .table th,
                .table td {
                    color: #ffffff;
                    border-top: none;
                    border-bottom: 1px solid rgba(255, 255, 255, 0.2);
                }

                .table thead th {
                    color: #ffffffef;
                }

                .table tbody td {
                    color: #ffffff;
                }

                .modal-content {
                    background-color: rgba(12, 12, 12, 0.521);
                    backdrop-filter: blur(8px);
                    border: none;
                }

                .modal-header,
                .modal-footer {
                    border: none;
                }

                .modal-title {
                    color: #fff;
                }

                .form-control,
                .form-select {
                    background-color: transparent;
                    color: #fff;
                    border: 1px solid rgba(255, 255, 255, 0.2);
                }

                .btn {
                    background-color: transparent;
                    border: 1px solid rgba(255, 255, 255, 0.2);
                    color: #fff;
                }

                .btn:hover {
                    background-color: rgba(255, 255, 255, 0.2);
                    color: #00000048;
                }
            </style>
            <!-- Table -->
            <div class="fd">
                <table class="">
                    <thead>
                        <tr>
                            <th class="text-white text-start">ID</th>
                            <th class="text-white text-start">Name</th>
                            <th class="text-white text-start">Description</th>
                            <th class="text-white text-start">Location</th>
                            <th class="text-white text-start" width="9%">Rating</th>
                            <th class="text-white text-start" width="9%">Visitors</th>
                            <th class="text-white text-start" width="9%">Category</th>
                            <th class="text-white text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($travels as $travel)
                            <tr>
                                <td class="text-start text-white">{{ $travel->id }}</td>
                                <td class="text-start text-white">{{ $travel->name }}</td>
                                <td class="text-start text-white">{{ $travel->description }}</td>
                                <td class="text-start text-white">{{ $travel->location }}</td>
                                <td class="text-start text-white">{{ $travel->rating }}</td>
                                <td class="text-start text-white">{{ $travel->visitors }}</td>
                                <td class="text-start text-white">{{ $travel->category }}</td>
                                <td class="d-flex justify-content-between gap-2">
                                    <!-- Edit Button -->
                                    <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                        data-bs-target="#editModal-{{ $travel->id }}">
                                        <i class="bi bi-pencil-square"></i>
                                    </button>

                                    <!-- Delete Button -->
                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                        data-bs-target="#deleteModal-{{ $travel->id }}">
                                        <i class="bi bi-trash3"></i>
                                    </button>
                                </td>
                            </tr>

                            <!-- Delete Modal -->
                            <div class="modal fade" id="deleteModal-{{ $travel->id }}" tabindex="-1"
                                aria-labelledby="deleteModalLabel-{{ $travel->id }}" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="deleteModalLabel">Delete Travel</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Are you sure you want to delete this travel?</p>
                                        </div>
                                        <div class="modal-footer">
                                            <form id="deleteForm" action="{{ route('travels.delete', $travel->id) }}"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Cancel</button>
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Edit Modal -->
                            <div class="modal fade" id="editModal-{{ $travel->id }}" tabindex="-1"
                                aria-labelledby="editModalLabel-{{ $travel->id }}" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="editModalLabel-{{ $travel->id }}">Edit
                                                Travel</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <form action="{{ route('travels.update', $travel->id) }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <div class="modal-body">
                                                <!-- Form fields -->
                                                <div class="mb-3">
                                                    <label for="name" class="form-label">Name</label>
                                                    <input type="text" class="form-control" name="name"
                                                        id="name" value="{{ $travel->name }}" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="description" class="form-label">Description</label>
                                                    <input type="text" class="form-control" name="description"
                                                        id="description" value="{{ $travel->description }}" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="location" class="form-label">Location</label>
                                                    <input type="text" class="form-control" name="location"
                                                        id="location" value="{{ $travel->location }}" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="rating" class="form-label">Rating</label>
                                                    <input type="number" class="form-control" name="rating"
                                                        id="rating" value="{{ $travel->rating }}" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="visitors" class="form-label">Visitors</label>
                                                    <input type="number" class="form-control" name="visitors"
                                                        id="visitors" value="{{ $travel->visitors }}" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="category" class="form-label">Category</label>
                                                    <select name="category" id="" class="form-select" required>
                                                        <option value="{{ $travel->category }}">
                                                            {{ $travel->category }}
                                                        </option>
                                                        <option value="Suiza">Suiza</option>
                                                        <option value="Italia">Italia</option>
                                                        <option value="Francia">Francia</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Save Changes</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endsection
