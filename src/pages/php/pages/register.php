<div class="text-center" style="padding-top: 100px;">

    <h1>Form Dang Ky</h1>
    <form action="lab23-home.php?page=result-register" method="post">
        <div class="form-group row">
            <label for="user-name" class="col-md-3">Ten: </label>
            <div class="col-md-6">
                <input type="text" id="user-name" name="user-name" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="address" class="col-md-3">Dia chi: </label>
            <div class="col-md-6">
                <input type="text" id="address" name="address" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="job" class="col-md-3">Nghe: </label>
            <div class="col-md-6">
                <input type="text" id="job" name="job" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="notes" class="col-md-3">Ghi chu: </label>
            <div class="col-md-6">
                <textarea class="form-control" id="notes" name="notes" cols="70" rows="5" style="overflow: scroll"></textarea>
            </div>
        </div>

        <input type="reset" value="Xoa" name="reset" id="reset">
        <input type="submit" value="Dang Ky" name="submit" id="submit">
    </form>

</div>