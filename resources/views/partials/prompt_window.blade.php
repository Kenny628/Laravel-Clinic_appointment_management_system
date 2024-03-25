<!-- HOW TO USE THIS MODAL (SPECIFY THE PARAMETERS AS BELOW), CAN REFER TO HOME PAGE

    modal_id     => based on "data-bs-target" but without the #
    aria_label   => any
    modal_title  => any
    modal_body   => any
    id           => pass in an id of the object you want to perform anything on it
    route_name   => The route name in web.php

-->
<div class="modal fade" id="{{ $modal_id }}" tabindex="-1" aria-labelledby="{{ $aria_label }}" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- MODAL HEADER -->
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="cancelModalLabel">
                    {{ $modal_title }}
                </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <!-- MODAL BODY -->
            <div class="modal-body">
                {{ $modal_body }}
            </div>

            <!-- MODAL FOOTER -->
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-danger" id="confirmBtn">
                    <a href="{{ $route_name }}" style="color: white; text-decoration:none">Confirm</a>
                </button>
            </div>

        </div>
    </div>
</div>

<script>
    $('#confirmBtn').click(function() {
        $(this).attr('disabled', true);
    });
</script>
