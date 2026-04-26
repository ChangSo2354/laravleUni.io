 @extends('layout')

@section('section')

 <div class="card shadow mt-4">
    <div class="card-header bg-secondary text-white">
        <h4 class="mb-0">Product Page</h4>
    </div>

    <div class="card-body">
        <form method="post" action="{{route('addproduct')}}">
            @csrf

            <!-- P-Code -->
            <div class="mb-3">
                <label class="form-label">Pcode</label>
                <input type="text" name="pcode" class="form-control">
            </div>

            <!-- Name -->
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" name="pname" class="form-control">
            </div>

            <!-- Price -->
            <div class="mb-3">
                <label class="form-label">Price</label>
                <input type="number" name="price" class="form-control">
            </div>

            <!-- Description -->
            <div class="mb-3">
                <label class="form-label">Description</label>
                <textarea name="desc" class="form-control" rows="3"></textarea>
            </div>

            <!-- Image -->
            <div class="mb-3">
                <label class="form-label">Image</label>
                <input type="file" name="image" class="form-control">
            </div>

            <!-- Button -->
            <div class="text-end">
                <button type="submit" class="btn btn-primary px-4">
                    Save
                </button>
            </div>

        </form>
    </div>
</div>

@endsection 

