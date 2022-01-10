<div class="modal fade" id="replyModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <form action="{{ route('contact.reply', $contact->id) }}" method="post">
            @csrf
            <label>{{ $contact->id }}</label>
            <div class="mb-3">
                <textarea class="form-control" name="mail_reply" rows="5" placeholder="Enter message . . ."></textarea>
            </div>
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Send</button>
        </div>
      </div>
    </div>
  </div>