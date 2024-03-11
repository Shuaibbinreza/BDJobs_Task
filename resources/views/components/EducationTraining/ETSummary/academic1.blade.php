@php
    $user = Auth::user();
    $educationAll = $user->user_education()->orderBy('year_of_passing', 'asc')->get();
    $ac_id = 0;
@endphp

<div class="accordion-item">
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
        <div class="accordion-body">
            @foreach ($educationAll as $edu)
                <div class="mb-5">
                    <div class="row justify-content-lg-between">
                        <div class="col-2 ">
                            <div class="d-flex">
                                <!-- Edit Button -->
                                <button type="button" class="border-0 bg-white text-primary" data-bs-toggle="modal"
                                    data-id="{{ $edu->id }}" data-title="{{ $edu->education_title }}" data-bs-target="#educationEdit"> 
                                    <i class="fa-solid fa-pen-to-square" style="color: #376ac3;"></i> Edit
                                </button>
                                
                                <!-- Delete Button -->
                                <button type="button" class="border-0 bg-white text-danger" data-bs-toggle="modal"
                                    data-id="{{ $edu->id }}" data-bs-target="#deleteModel">
                                    <i class="fa-solid fa-trash-can" style="color: #cb1111;"></i> Delete
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

<!-- Edit Modal with Submit Button -->
<div class="modal fade" id="educationEdit" tabindex="-1" aria-labelledby="educationEditLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalTitle"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="editForm" method="POST" action="{{ route('submit.test') }}">
                    @csrf <!-- Assuming Laravel Blade -->
                    <input type="hidden" name="id" id="editModalIdInput">
                    <p> Education ID: <span id="editModalId"></span></p>
                    <!-- Add any other form inputs needed for editing here -->
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Delete Confirmation Modal with Submit Button -->
<div class="modal fade" id="deleteModel" tabindex="-1" aria-labelledby="deleteModelLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModelLabel">Confirm Deletion</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="deleteForm" method="POST" action="{{ route('submit.test') }}">
                    @csrf <!-- Assuming Laravel Blade -->
                    {{-- @method('DELETE') --}}
                    <input type="hidden" name="id" id="deleteModalIdInput">
                    <p>Are you sure you want to delete this record? ID: <span id="deleteModalId"></span></p>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>


<script>
document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('[data-bs-toggle="modal"]').forEach(button => {
        button.addEventListener('click', function () {
            const itemId = this.getAttribute('data-id');
            const itemTitle = this.getAttribute('data-title');
            const targetModalId = this.getAttribute('data-bs-target');
            const isDeleteModal = targetModalId === '#deleteModel';

            if (isDeleteModal) {
                document.getElementById('deleteModalId').textContent = itemId;
                document.getElementById('deleteModalIdInput').value = itemId;
            } else {
                document.getElementById('editModalTitle').textContent = itemTitle;
                document.getElementById('editModalId').textContent = itemId;
                document.getElementById('editModalIdInput').value = itemId;
            }
        });
    });
});
</script>
