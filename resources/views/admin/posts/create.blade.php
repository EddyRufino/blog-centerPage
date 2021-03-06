<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <form method="POST" action="{{ route('admin.posts.store', '#create') }}">
    {{ csrf_field() }}
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Agrega el nuevo título de la publicación</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
            {{-- <label for="">Título de la publicación</label> --}}
            <input id="post-title" name="title" type="text"
                value="{{ old('title') }}"
                class="form-control"
                required
                placeholder="Ingresa el título de la publicación" autofocus required>
                {!! $errors->first('title', '<span class="help-block">:message</span>') !!}
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button class="btn btn-primary">Crear publicación</button>
        </div>
      </div>
    </div>
  </form>
</div>

@push('scripts')
  <script>

    $(document).ready(function(){
      if(window.location.hash === '#create') {

      $('#exampleModal').modal('show');
      }

      $('#exampleModal').on('hide.bs.modal', function(e) {

      window.location.hash = '#';
      });

      $('#exampleModal').on('shown.bs.modal', function(e) {

      $('#post-title').focus();
      window.location.hash = '#create';
      });
    });

  </script>
@endpush
