<a  type="button"
    data-bs-toggle="offcanvas"
    data-bs-target="#add_off_canvas"
    zaria-controls="offcanvasRight"
    class="btn btn-40 btn-outline-primary bg-secondary-subtle text-purple btn-sm d-flex rounded-circle border-0 me-2">
    <i class="fs-6 fa fa-plus"></i>
</a>

<div
    class="offcanvas offcanvas-end"
    tabindex="-1" id="add_off_canvas"
    aria-labelledby="off_canvas_right_label"
>
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasRightLabel">Offcanvas right</h5>
        <button type="button" class="btn-close fs-6" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        {{$form ?? ''}}
    </div>
</div>
