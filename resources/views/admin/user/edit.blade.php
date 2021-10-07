<div class="row">
	<div class="col-md-12">
        <form action="{{ route('user.update', $user->id ) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="form-group">
                <label>Nama User</label>
                <input type="text" class="form-control" name="name" value="{{ $user->name }}">
            </div>
          
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="email" value="{{ $user->email }}" readonly>
            </div>
          
            <div class="form-group col-md-6 col-12">
              <label>Foto</label>
              <input type="file" name="foto" class="form-control">
            </div>
          
            <div class="form-group">
                <label>Tipe User</label>
                <select class="form-control" name="tipe">
                    <option value="" holder>Pilih Tipe User</option>
                    <option value="1" holder 
                    @if($user->tipe == 1)
                    selected
                    @endif
                    >Administrator</option>
                    <option value="0" holder
                    @if($user->tipe == 0)
                    selected
                    @endif
                    >Staff</option>
                </select>
            </div>
          
             <div class="form-group">
                <label>Password</label>
                <input type="text" class="form-control" name="password">
            </div>
		</form>
	</div>
</div>