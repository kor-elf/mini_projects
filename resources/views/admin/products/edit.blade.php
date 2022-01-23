@section('h1', 'Product')
<x-admin-layout>
  @include('admin.products._menu')
  <div class="card card-primary card-outline">
    <div class="card-header">
      <h3 class="card-title">Change product</h3>
    </div>
    <div class="card-body">
      <form method="POST" action="{{ route('admin.products.update', $product) }}" enctype="multipart/form-data">
        {{ method_field('PUT') }}
        @include('admin.products._form')
      </form>
    </div>
  </div>
</x-admin-layout>
