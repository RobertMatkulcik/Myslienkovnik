<div class="modal fade" id="editModal" tabindex="-1" role="dialog" >
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

<div class="modal fade" id="viewModal" tabindex="-1" role="dialog" >
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


