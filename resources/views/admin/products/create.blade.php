@section('h1', 'Новости')
<x-admin-layout>
  @include('admin.products._menu')
  <div class="card card-primary card-outline">
    <div class="card-header">
      <h3 class="card-title">Create product</h3>
    </div>
    <div class="card-body">
      <form method="POST" action="{{ route('admin.products.store') }}" enctype="multipart/form-data">
        @include('admin.products._form')
      </form>
    </div>
  </div>
</x-admin-layout>
