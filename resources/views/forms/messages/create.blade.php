<form action="/messages" method="POST">
    @csrf
    <div class="form-group">
        <input type="text" name="title" class="form-control" />
    </div>
    <div class="form-group">
        <textarea name="message" class="form-control" rows="4"></textarea>
    </div>
    <div class="form-row">
        <div class="col-md-7">
            <input type="file" name="files" class="form-file" />>
        </div>
        <div class="col">
            <button type="submit" class="btn btn-primary btn-block">Send</button>
        </div>
    </div>
</form>
