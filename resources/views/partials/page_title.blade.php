<div class="row m-0">
    <div class="col-12">
        <h2 class="p-2 px-3 border rounded-3 bg-white d-flex">
            <div class="flex-grow-1">{{ $title }}</div>
            <div class="d-flex">
                {{$addAction ?? ''}}
                {{$deleteAction ?? ''}}
                {{$editAction ?? ''}}
            </div>
        </h2>
    </div>
</div>

