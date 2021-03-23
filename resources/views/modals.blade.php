<div class="modal fade" id="editModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h4 id="event-title-edit"></h4>
                Start time:
                <br/>
                <input type="text" class="form-control" name="start_time" id="start_time">
                End time:
                <br/>
                <input type="text" class="form-control" name="finish_time" id="finish_time">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <input type="button" class="btn btn-primary" id="appointment_update" value="Save">
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="viewModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h4 id="event-title"></h4>
                <p id="event-description"></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <input type="button" class="btn btn-primary" id="edit_button" value="Edit">
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="addModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form id="event-form">

                <div class="modal-body">
                    <h4 id="event-title-edit"></h4>
                    Date:
                    <br/>
                    <input type="date" class="form-control" name="start" id="start" value="<?= date('Y-m-d'); ?>">
                    <span class="text-danger" id="start-error"></span>

                    Title:
                    <br/>
                    <input type="text" class="form-control" name="title" id="title">
                    <span class="text-danger" id="title-error"></span>

                    Description:
                    <br/>
                    <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
                    <span class="text-danger" id="description-error"></span>

                    <div class="form-group">
                        <span class="text-success" id="success-message"> </span>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button class="btn btn-primary" id="event_update">Save</button>
                </div>
            </form>

            <script type="text/javascript">
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $('#event-form').on('submit', function (event) {
                    event.preventDefault();
                    $('#title-error').text('');
                    $('#start-error').text('');
                    $('#description-error').text('');

                    title = $('#title').val();
                    start = $('#start').val();
                    description = $('#description').val();

                    console.log(title);
                    $.ajax({
                        url: "/event-form",
                        type: "POST",
                        data: {
                            title: title,
                            start: start,
                            description: description,
                        },
                        success: function (response) {
                            console.log(response);
                            if (response) {
                                $('#success-message').text(response.success);
                                $("#event-form")[0].reset();
                            }
                        },
                        error: function (response) {
                            $('#title-error').text(response.responseJSON.errors.title);
                            $('#start-error').text(response.responseJSON.errors.start);
                            $('#description-error').text(response.responseJSON.errors.description);
                        }
                    });
                });
            </script>
        </div>
    </div>
</div>


