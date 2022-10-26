<!-- Standard modal content -->
<div id="role-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="role-modalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="role-modalLabel">Role Assigne</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="post" id="assign_role_form">
                    @csrf
                    <div class="table-responsive">
                        <table class="table table-bordered mb-0">
                            <thead>
                                <tr>
                                    <th>Role</th>
                                    <th>Create</th>
                                    <th>View</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody id="role_model_body">
                                <tr>
                                    <td>name</td>
                                    <td>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="customCheck1">
                                            <label class="form-check-label" for="customCheck1"></label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="customCheck1">
                                            <label class="form-check-label" for="customCheck1"></label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="customCheck1">
                                            <label class="form-check-label" for="customCheck1"></label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="customCheck1">
                                            <label class="form-check-label" for="customCheck1"></label>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div> <!-- end .table-responsive-->
                </form>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary role_model_submit">Save changes</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
