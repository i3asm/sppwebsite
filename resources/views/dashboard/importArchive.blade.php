<div class="rtl" style="margin: 10%">
    <h2>إضافة أشخاص:</h2>
    <form action="{{ route('archiveImport') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file" class="form-control">
        <br>
        <button class="btn btn-primary">import leaders file</button>
    </form>
</div>
