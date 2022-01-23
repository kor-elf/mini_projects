@section('h1', 'Products')
<x-admin-layout>
  @include('admin.products._menu')
  <div class="card card-primary card-outline">
    <div class="card-header">
      <h3 class="card-title">Products</h3>
    </div>
    <div class="card-body">
      <table class="table table-striped table-hover">
        <thead>
          <tr>
            <th>Art</th>
            <th>Name</th>
            <th>Status</th>
            <th style="width: 50px;"></th>
          </tr>
        </thead>
        <tbody>
          @foreach($products as $product)
            <tr>
              <td><a href="{{ route('admin.products.edit', $product) }}"><i class="fas fa-pencil-alt"></i> {{ $product->art }}</a></td>
              <td>{{ $product->name }}
              <td>{{ $product->status }}
              <td>
                  <form method="POST" action="{{ route('admin.products.destroy', $product) }}">
                      @csrf
                      {{ method_field('DELETE') }}
                      <button type="submit" class="btn btn-danger click-confirm">Delete</button>
                  </form>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
      <div class="mt-4">
          {{ $products->links('vendor.pagination.bootstrap-4') }}
      </div>
    </div>
  </div>
</x-admin-layout>
