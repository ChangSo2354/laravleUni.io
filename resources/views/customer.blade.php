@extends('layout')
@section('title', 'Customer Page')
@section('section')

<div class="card">
    <div class="card-header bg-success text-white">
        <h3 class="float-start">Customer List</h3>
        <button class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#exampleModal">Add New</button>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th width="180">Action</th>
                </tr>
            </thead>
            {{-- <tbody>
                @forelse($customers as $customer)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $customer->name }}</td>
                    <td>{{ $customer->address }}</td>
                    <td>{{ $customer->phone }}</td>
                    <td>{{ $customer->email }}</td>
                    <td>
                        <button type="button" 
                                class="btn btn-warning btn-sm" 
                                data-bs-toggle="modal" 
                                data-bs-target="#editModal"
                                data-id="{{ $customer->id }}"
                                data-name="{{ $customer->name }}"
                                data-address="{{ $customer->address }}"
                                data-phone="{{ $customer->phone }}"
                                data-email="{{ $customer->email }}">
                            Edit
                        </button>

                        <button type="button" 
                                class="btn btn-danger btn-sm" 
                                data-bs-toggle="modal" 
                                data-bs-target="#deleteModal"
                                data-id="{{ $customer->id }}"
                                data-name="{{ $customer->name }}">
                            Delete
                        </button>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" class="text-center text-muted">
                        No customer found.
                    </td>
                </tr>
                @endforelse
            </tbody> --}}
        </table>
    </div>
</div>
{{-- {{ route('createCustomer') }} --}}
{{-- ADD MODAL --}}
<form action="" method="POST" id="addCustomerForm">
    @csrf
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add New Customer</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="customerName" class="form-label">Customer Name</label>
                        <input type="text" class="form-control" id="customerName" name="name" placeholder="Enter customer name" required>
                    </div>
                    <div class="mb-3">
                        <label for="customerAddress" class="form-label">Address</label>
                        <input type="text" class="form-control" id="customerAddress" name="address" placeholder="Enter address" required>
                    </div>
                    <div class="mb-3">
                        <label for="customerPhone" class="form-label">Phone</label>
                        <input type="text" class="form-control" id="customerPhone" name="phone" placeholder="Enter phone number" required>
                    </div>
                    <div class="mb-3">
                        <label for="customerEmail" class="form-label">Email</label>
                        <input type="email" class="form-control" id="customerEmail" name="email" placeholder="Enter email">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save Customer</button>
                </div>
            </div>
        </div>
    </div>
</form>

@endsection