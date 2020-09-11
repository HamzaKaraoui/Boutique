{{-- <form action="{{ route('products.search') }}" class="d-flex mr-3">

    <div class="form-group mb-0 mr-1">
    <input type="text" class="form-control" name="q" value="{{ request()->q ?? ''}}">
    </div>
    <button type="submit" class="btn btn-info"><i class="fa fa-search" aria-hidden="true"></i></button>
</form> --}}


<div class="col-md-3">
    <form action="{{ route('products.search') }}" class="form-search" >
        <div class="input-group">
            <input type="text" class="form-control" name="q" value="{{ request()->q ?? ''}}">
            <span class="input-group-btn">
            <button type="submit" class="btn btn-primary"> Subscribe <i class="ion-android-send"></i> </button>
          </span>
        </div><!-- /input-group -->
      </form>
</div>