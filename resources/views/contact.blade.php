<form action="{{ url('/contact') }}" method="post">
    {{ csrf_field() }}

    <div class="form-group">
        <label>Name</label>
        <input type="text" name="name" class="form-control">
    </div>

    <div class="form-group">
        <label>Email</label>
        <input type="email" name="email" class="form-control">
    </div>

    <div class="form-group">
        <label>Name</label>
        <textarea name="content" class="form-control"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
