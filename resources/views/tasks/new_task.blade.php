<div class="offcanvas offcanvas-end" tabindex="-1" id="add_off_canvas" aria-labelledby="off_canvas_right_label">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasRightLabel">Add new task</h5>
        <button type="button" class="btn-close fs-6" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <form
            id="new_task_form"
            action="{{ route('tasks.store') }}"
            method="POST"
        >
            @csrf
            <div class="mb-3">
                <label for="taskName" class="form-label">Task Name</label>
                <input type="text" class="form-control" id="taskName" name="taskName" required>
            </div>
            <div class="mb-3">
                <label for="taskBrief" class="form-label"></label>
                <input type="text" class="form-control" id="taskBrief" name="taskBrief" required>
            </div>
            <div class="mb-3">
                <label for="taskDescription" class="form-label">Task Description</label>
                <textarea class="form-control" id="taskDescription" name="taskDescription" rows="3" required></textarea>
            </div>
            <div class="mb-3">
                <label for="proId">Project</label>
                <select class="form-select" id="proId" name="proId">
                    <option value="1">Project 1</option>
                    <option value="2">Project 2</option>
                    <option value="3">Project 3</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="taskGroupId">Group Id</label>
                <select class="form-select" id="taskGroupId" name="taskGroupId">
                    <option value="1">Group 1</option>
                    <option value="2">Group 2</option>
                    <option value="3">Group 3</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="loe" class="form-label">LOE</label>
                <select class="form-select" id="loe" name="loe">
                    <option value="1">Every Low</option>
                    <option value="2">Low</option>
                    <option value="3">Medium</option>
                    <option value="4">High</option>
                    <option value="5">Very High</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="taskStatus" class="form-label">Task Status</label>
                <select class="form-select" id="taskStatus" name="taskStatus" required>
                    <option value="1">Not Start</option>
                    <option value="2">On Going</option>
                    <option value="3">Testing</option>
                    <option value="4">Done</option>
                    <option value="5">Cancel</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="taskPriority" class="form-label">Task Priority</label>
                <select class="form-select" id="taskPriority" name="taskPriority" required>
                    <option value="1">Low</option>
                    <option value="2">Medium</option>
                    <option value="3">High</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="taskStartDate" class="form-label d-block">Due Date</label>
                <input type="date" class="form-control" id="taskStartDate" name="taskStartDate" required>
            </div>
            <div class="mb-4">
                <label for="taskEndDate" class="form-label d-block">End Date</label>
                <input type="date" class="form-control" id="taskEndDate" name="taskEndDate" required>
            </div>
            <div class="d-flex justify-content-end">
                <button
                    type="submit"
                    class="btn  btn-outline-primary bg-secondary-subtle text-purple d-flex rounded-pill border-0 align-items-center">
                    <i class="fa fa-plus me-2"></i>
                    <span>Add Task</span>
                </button>
            </div>

        </form>
    </div>
</div>

