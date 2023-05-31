
<x-backend.layouts.master>

    <x-slot:page-title>
        Category
    </x-slot>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        <x-slot:title>
            Category List
        </x-slot>
    </div>
    <div class="card-body">
        <table id="datatablesSimple" class="table table-striped">
            <thead>
                <tr>
                    <th>Ser</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th >Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1 </td>
                    <td>Phone</td>
                    <td>EdinburghNixonNixonNixon</td>
                    <td>
                        <a href="{{ route('category.show', ['categoryID'=>2])}}" class="btn btn-primary">Show</a>
                        <a class="btn btn-info">Edit</a>
                        <a class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

</x-backend.layouts.master>
